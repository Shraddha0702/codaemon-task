<!DOCTYPE html>
<html lang="en">

<head runat="server">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quizz</title>
    
</head>

<body>
    <table>
        <tbody>
            <form action="/save" method="get" id="form1">

               
                @foreach($que as $que)
                <tr>
                    <td>{{$question_id}} {{$que->question}}</td>
                </tr>
                @endforeach
                <tr>
                    @foreach($ans as $ans)
                <tr>
                    <td>
                        <input type="radio" name="answer" id="radio_id" value="{{$ans->answer}}" onclick="display()">{{$ans->answer}}
                    </td>
                    @endforeach
                </tr>
                <tr>
                    <td>
                        <div id="starttime"></div><br />
                        <div id="endtime"></div><br />
                        <div id="showtime"></div>
                    </td>
                </tr>
        </tbody>

    </table>

    <input type="hidden" name="question_id" value="{{$question_id+1}}">
    <input type="hidden" name="email" value="{{$email}}">
    <input type="submit" id="register" value="next" disabled />
    <!-- <input type="submit" id="radio_id" name="submit" value="next" disabled /> -->
    <a href={{"/next/".$question_id-1}}>back</a>
</body>
<script>
  var minutes = 0;
  var seconds = 0;
  function startTimer(duration, display) {
    var timer = duration,
        minutes, seconds;
    setInterval(function() {
      minutes = parseInt(timer / 60, 10);
      seconds = parseInt(timer % 60, 10);

      minutes = minutes < 10 ? "0" + minutes : minutes;
      seconds = seconds < 10 ? "0" + seconds : seconds;

      display.textContent = minutes + ":" + seconds;

      setCookie("minutes", minutes.toString(), 1);
      setCookie("seconds", seconds.toString(), 1);

      if (--timer < 0) {
        timer = 0;
      }
    }, 1000);
  }

  window.onload = function() {
     var minutes_data = getCookie("minutes");
     var seconds_data = getCookie("seconds");
     var timer_amount = (60*10); //default
      if (!minutes_data || !seconds_data){
        //no cookie found use default
        alert("no cookie");
      }
      else{
        timer_amount = parseInt(minutes_data*60)+parseInt(seconds_data)
      }

    var fiveMinutes = timer_amount,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display); //`enter code here`
  };

   function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*10));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
   } 

   function getCookie(cname) {
   var name = cname + "=";
   var ca = document.cookie.split(';');
   for(var i=0; i<ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0)==' ') c = c.substring(1);
      if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
   }
   return "";
  } 

  </script>

  <div id="time"></div>

<script>
    function display() {
        // new
        let rates = document.getElementsByName('answer');
        rates.forEach((rate) => {
            if (rate.checked) {
                document.getElementById('register').removeAttribute('disabled');
            }
        });

    }    
</script>
</html>