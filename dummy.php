<!DOCTYPE HTML>
<html>
    <head>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <script type="text/javascript" src="inc/TimeCircles.js"></script>
        <link rel="stylesheet" href="inc/TimeCircles.css" />
    </head>
    <body>
        <div class="container">
            <h1>TimeCircle examples</h1>
            <h2>17/07/2022</h2>
            <div id="DateCountdown" data-date="2014-01-01 00:00:00" style="width: 500px; height: 125px; padding: 0px; box-sizing: border-box; background-color: #E0E8EF"></div>
            <div style="padding: 10px;">
                <input type="date" id="date" value="2023-01-01">
                <input type="time" id="time" value="00:00">
            </div>
        </div>
        <script>
            $("#DateCountdown").TimeCircles();
            
            var updateTime = function(){
                var date = $("#date").val();
                var time = $("#time").val();
                var datetime = date + ' ' + time + ':00';
                $("#DateCountdown").data('date', datetime).TimeCircles().start();
            }
            $("#date").change(updateTime).keyup(updateTime);
            $("#time").change(updateTime).keyup(updateTime);
          

        </script>       
    </body>
</html>