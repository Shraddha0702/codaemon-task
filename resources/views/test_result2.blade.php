<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if (session('result'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('result')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                @endif
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-item-center">
                        <div>
                            <h4>Quizz Ended</h4>
                        </div>
                        <div>
                            <a href="/email" class="btn btn-primary btn-sm">Home</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 align="center">Your Score is {{$score}}/10</h3>
                                <br>
                                <table class="table table-striped">
                                    <thead>

                                        <th class="text-center">Question</th>
                                        <th>Correct Answer</th>
                                        <th>Your Answer</th>

                                    </thead>
                                    <tbody>
                                        @for($i=0;$i<=count($user_ans)-1;$i++) <tr>
                                            <td>{{$question[$i]}}</td>
                                            <td>{{$correct_ans[$i]}}</td>
                                            <td>{{$user_ans[$i]}}</td>
                                            </tr>
                                            @endfor
                                    </tbody>
                                </table>
                            </div>    
                        </div>    
                    </div>
                </div>  
            </div>
        </div>
    </div>
</body>

<script>
    window.location.hash = "no-back-button";
    window.location.hash = "Again-No-back-button";
    window.onhashchange = function() {
        window.location.hash = "no-back-button";
    }
</script>

</html>