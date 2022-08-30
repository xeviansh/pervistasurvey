<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Exo+2:400,700,500,300);

            body {
            background-color: #F0F0F0;
            font-smoothing: antialiased;
            }

            .container {
            position: absolute;
            margin: auto;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 500px;
            height:200px;
            }

            .downloader {
            width: 450px;
            }

            .downloading-progress {
            position: relative;
            float: left;
            width: 300px;
            height: 20px;
            background-color: rgba(0,0,0,0.15);
            padding: 5px;  
            box-sizing: border-box;
            border-radius: 10px;
            }

            .downloading-progress-bar {
            position: relative;
            width: 0%;
            height: 10px;
            border-radius: 8px;    
            background-color: white;
            }

            .percentage {
            background-color: #D9290B;
            border-radius: 15px;
            height: 20px; 
            box-sizing: border-box;
            width: 50px;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            font-size: 0.8rem;
            text-align: center;  
            float:left;
            line-height: 20px !important;
            margin: 0 0 0 10px;
            }

    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="mt-5">
                <div class="downloader">
                    <div class="downloading-progress">
                    <div class="downloading-progress-bar" data-value="0" data-max="100"></div>
                    </div>
                    <div class="percentage"></div>
                </div> 
        </div>
    </div>
    
</div>


    






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 

<script>
    $(document).ready(function() {
  
  function modifValues(){
    
    var val = $('.downloading-progress-bar').attr('data-value');
    if(val>=100){val=5;}
    var newVal = val*1+0.5;
    var txt = Math.floor(newVal)+'%';      

    $('.downloading-progress-bar').attr('data-value',newVal);
    $('.percentage').html(txt);
    $('.downloading-progress-bar').css("width", txt);
  }
  
  setInterval(function(){ modifValues(); },50);
  
});  

</script>
</body>
</html>