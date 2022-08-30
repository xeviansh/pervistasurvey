<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
    <style>
      *{
  box-sizing: border-box;
}

.conti{
  height: 100%;
  width: 576px;
  left: calc(40% - 288px);
  padding: 0;
  margin: 0 auto;
  position: absolute;
}

/* Bar line */
#progress-bar{
  appearance:none;
  width: 954px;
  color: #000;
  height: 10px;
  margin-top:50px;
}

/* all cicle shape position */
span2 {
  margin-top:40px;
  height: 30px;
  width: 30px;
  border-radius: 100%;
  background:#e55e04;
  position: absolute;
  left:0;
  top: -2px;
  cursor: pointer;
  transition: all 0.4s ease-in-out;
}



/* 1nd cicle dis shape */
.first{
  left:-2px;
  color:#e55e04;
}

/*
cur{
   position:relative;
animation:mymove 5s ;
-webkit-animation:mymove 5s ; 
  
  -webkit-animation-play-state: paused; 
  /* Safari and Chrome */
  
   /* animation-play-state: paused;*/
   /*Safari and Chrome */
/* } */

/* 2nd cicle dis shape */
.second{
  left: 952px;
}

.percent{
    
    position: absolute;
    left:0;
    top: 0;
    background: #fff;
    white-space: nowrap;
    -webkit-animation: rightThenLeft 4s linear;

}

.percent_circle{
  top:-13px;
 font-size: 3em; /* This controls the size. */
 width: 0.3em;
 height: 0.3em;
 border: 0.1em solid #e55e04;
 position: relative;
 border-radius: 0.35em;
}



/*@-webkit-keyframes rightThenLeft {
from {left:0px;}
to {left:200px;}

}*/

#talkbubble {
   color:#fff;
  font-weight:lighter;
  font-family:Arial;
  font-size:14px;
   padding:6px;
   width: 115px;
   height: 30px;
   background: #e55e04;
   position: relative;
   -moz-border-radius:    10px;
   -webkit-border-radius: 10px;
   border-radius:         10px;
}

#talkbubble:before {
   content:"";
   position: absolute;
   right: 40%;
   top: 30px;
  width: 0;
  height: 0;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-top: 20px solid #e55e04;
  
 /*  border-top: 13px solid transparent;
   border-right: 26px solid #e55e04;
   border-bottom: 13px solid transparent;*/
}



/*
@-webkit-keyframes mymove{ 
/* Safari and Chrome */ 
/*from {left:0px;}
to {left:200px;}
}*/


/*#percent.mymove {
    -webkit-animation: mymove 0.5s ease;
}
*/

@-webkit-keyframes mymove{ /* Safari and Chrome */ 
from {left:0px;}
to {left:200px;}
}

#progress-bar::-webkit-progress-value{ 
  /* Changes line color */
  background: #e55e04;
  transition: all 0.4s ease-in-out;
}

#progress-bar::-webkit-progress-bar{ 
  /* Changes background color */
  background: #137CC0;
}

#circle-point::-webkit-progress-bar{
    background-color: #e55e04;
  border: 1px solid #e55e04;
  border-radius: 100%;
  box-shadow: 0 1px 2px rgba(213, 222, 229, 0.5) inset;
  color: #e55e04;
  display: block;
  font-size: 15px;
  font-weight: bold;
  height: 30px;
  right: 10px;
  line-height: 28px;
  position: absolute;
  text-align: center;
  text-decoration: none;
  top: -5px;
  width: 30px;
}


.border-change{
  border-color:#e55e04;
  transition: all 0.4s ease-in-out;
}
    </style>
</head>
<body>
    <div class="mt-5">
    
                <div class="conti">
                
                <progress id="progress-bar" min="1" max="100" value="0"></progress>
                
                <div class="percent_circle" style="left:140px;">
                </div>
                
                    <div class="percent">
                    <div id="talkbubble" style="margin-left:90px;">15% Complete</div>
                        
                    </div>
                
                
                <span2 class="first border-change">
                <!--  <p id="percent">0% Percentage
                    </p>-->
                
                </span2>
                <span2 class="second"></span2>
                
                </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script>
        $(document).ready(function(){

$('#progress-bar').val('15');


/*    }*/


});

// complete click 


$(document).ready(function(){
$('span2').click(function(){
if ($(this).hasClass('first')){
$('#progress-bar').val('15');
$(this).nextAll().removeClass('border-change');  
$('#percent').html("15% Complete");



}else if ($(this).hasClass('second')){
$(this).nextAll().removeClass('border-change');  
$('#progress-bar').val('34');
$(this).prevAll().addClass('border-change');  
$(this).addClass('border-change');
 $('#percent').html("33% Complete");
 
 
} else{
$('#progress-bar').val('100');
 $(this).addClass('border-change');
$(this).prevAll().addClass('border-change');
 $('#percent').html("100% Complete");
}
});
});

// complete click 
    </script>
</body>
</html>