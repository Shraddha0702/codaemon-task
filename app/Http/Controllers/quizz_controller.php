<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_model;
use Illuminate\Support\Facades\DB;
use App\Models\response_model;
use Carbon;
use Session;
use DateTime;
use DateInterval;

class quizz_controller extends Controller
{
    //
    public function quizz(Request $request, $question_id)
    {
        $email = $request->session()->get('email');
        $user = new user_model();

        $data = DB::table('user')->select('email')->where('email', $email)->value('email');
        $que = DB::table('questions')->select('question')->where('question_id', $question_id)->get();
        $ans = DB::table('answers')->select('answer')->where('question_id', $question_id)->get();
        
        $allque=DB::table('questions')->select('question_id')->get();
        if ($data == $email) {
            return view('timer', ['que' => $que, 'ans' => $ans, 'question_id' => $question_id, 'email' => $email,'allque'=>$allque]);
        } else {
            $user->email = $request->email_id;
            $user->save();
        }
    }


    public function save(Request $request)
    {
        // echo "$request->answer";
        $email = $request->email;
        $question_id = $request->question_id;
        $que = DB::table('questions')->select('question')->where('question_id', $question_id)->get();
        $ans = DB::table('answers')->select('answer')->where('question_id', $question_id)->get();
        $ans_id = DB::table("answers")->select("answer_id")->where('answer', $request->answer)->value('answer_id');
        // echo "$ans_id";
        $email_id = DB::table('user')->select('id')->where('email', $email)->value('id');
        $q_id = $question_id - 1;
        $que_id = DB::table('response')->select('question_id')->where('email_id', $email_id)->where('question_id', $question_id - 1)->value('question_id');

        // return $que_id;

        if ($question_id - 1 == $que_id) {
            DB::update("update response set answer_id='$ans_id' where question_id='$q_id' and email_id='$email_id'");
        } else {
            $res = new response_model();
            $res->question_id = $question_id - 1;
            $res->answer_id = $ans_id;
            $res->email_id = $email_id;
            $res->save();
        }

        if($question_id==11)
        {
            return redirect()->route('test_result2');
        }
        $allque=DB::table('questions')->select('question_id')->get();
        

        
        return view('timer', ['que' => $que, 'ans' => $ans, 'question_id' => $question_id, 'email' => $email,'allque'=>$allque]);
    }

    public function mail(Request $request)
    {
        
        // return $request->email_id;
        $email = $request->email_id;
        session(['email' => $email]);
        DB::delete("delete from user where email='$email'");
        $email_id=DB::table('user')->select('id')->where('email',$email)->value('id');
        DB::delete("delete from response where email_id='$email_id'");
        $user = new user_model();
        $user->email = $request->email_id;
        $user->save();
        $question_id = $request->question_id;
        $data = DB::table('user')->select('email')->where('email', $email)->value('email');
        $que = DB::table('questions')->select('question')->where('question_id', $question_id)->get();
        $ans = DB::table('answers')->select('answer')->where('question_id', $question_id)->get();
        $a = DB::select("select * from user where email='$email'");
        $mytime = Carbon\Carbon::now()->format('h:i:s');
        
        $allque=DB::table('questions')->select('question_id')->get();

        $minutes_to_add = 10;

        $time = Carbon\Carbon::now();
        $time->add(new DateInterval('PT' . $minutes_to_add . 'M'));
        
        $stamp = $time->format('Y-m-d H:i');
        // echo date_format($time,'H:i:s');

        Session::put('time', $stamp);
        
        return view('timer', ['que' => $que, 'ans' => $ans, 'question_id' => $question_id, 'email' => $email,'allque'=>$allque]);
    }

    public function result(Request $request)
    {
        $data=DB::select("select correct_answer from questions");
        $a=[];
        foreach($data as $data)
        {
            array_push($a,$data->correct_answer);
        }
        $email = $request->session()->get('email');
        $email_id=DB::table('user')->select('id')->where('email',$email)->value('id');
        $res=DB::select("
        select answers.option_id from answers inner join response on answers.answer_id=response.answer_id where email_id='$email_id'
        ");
        $score=0;
        $f=DB::select("select answers.option_id from answers inner join response on answers.answer_id=response.answer_id  inner join questions on questions.question_id=answers.question_id where response.email_id='$email_id' and questions.correct_answer=answers.option_id");
        foreach($f as $f)
        {
            $score=$score+1;
        }
        $question=DB::table('questions')->select('question')->get();
        $questionarray=[];
        foreach($question as $question)
        {
            array_push($questionarray,$question->question);
        }
       $correct_ans=DB::select("select answers.answer from answers inner join questions on answers.question_id=questions.question_id where answers.option_id=questions.correct_answer");
        // $correct_ans=DB::table('questions')->select('correct_answer')->get();
        $correct_ansarray=[];
        foreach($correct_ans as $correct_ans)
        {
            array_push($correct_ansarray,$correct_ans->answer);
        }
        $user_ans=DB::select("select answers.answer from answers inner join response on answers.answer_id=response.answer_id where response.email_id='$email_id'");
        $user_ansarray=[];
        foreach($user_ans as $user_ans)
        {
            array_push($user_ansarray,$user_ans->answer);
        }
        return view('test_result2',['score'=>$score,'correct_ans'=>$correct_ansarray,'user_ans'=>$user_ansarray,'question'=>$questionarray]);
       
    }

   
}
