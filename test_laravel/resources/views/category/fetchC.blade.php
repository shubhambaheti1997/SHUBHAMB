<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="F:\project\templates\alert.js"> </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body style="background-color:#E6E6FA">
<div class="container col-6">
    <div class="timer">
        <h1> <time id="countdown"style="position: fixed; right:20px;"></time></h1>
    </div>

</div>

<div id="countdowntimer"><span id="future_date"><span></div>
<div class="container col-6"> <br> <br>
<form action="cresult" method="post" name="question">

    
      @foreach($data as $data)
      

        <div class="card">
            <div class="card-header">
                 {{ $data->question }}
            </div>
            <div class="card-body">

                <input type="radio" name="option[{{ $data->id }}]" value=" {{ $data->op1 }}">
                {{ $data->op1 }} <br>



                <input type="radio" name="option[{{ $data->id }}]" value="{{ $data->op2 }}">
                {{ $data->op2 }} <br>




                <input type="radio" name="option[{{ $data->id }}]" value="{{ $data->op3 }}">
                {{ $data->op3 }} <br>



                <input class="form_control" type="radio" name="option[{{ $data->id }}]" value="{{ $data->op4 }}">
                {{ $data->op4 }}


            </div>
        </div><br>
         <div class="row">
            <div class="col-md-10">

            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">

            </div>
            <div class="col-md-3">

            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">

            </div>
            <div class="col-md-3">

            </div>
        </div>
         @csrf
        
        @endforeach
       
        <br>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-xs-2">
                <button type="submit" class="btn btn-block btn-success btn-md">Result</button>
            </div>
        </div>
        </form>
</div>
</body>

<script type="text/javascript">
    var seconds = 120;
    function secondPassed() {
        var minutes = Math.round((seconds - 30)/60),
            remainingSeconds = seconds % 60;

        if (remainingSeconds < 10) {
            remainingSeconds = "0" + remainingSeconds;
        }

        document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
        if (seconds == 0) {
            clearInterval(countdownTimer);
            //form1 is your form name
            document.question.submit();
        } else {
            seconds--;
        }
    }
    var countdownTimer = setInterval('secondPassed()', 1000);
</script>


</html>
