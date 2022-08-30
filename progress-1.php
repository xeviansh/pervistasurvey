<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    <title>Hello, world!</title>
    <style>
        .audio-progress {
  height: .5rem;
  width: 100%;
  background-color: #C0C0C0;
}
.audio-progress .bar {
  height: 100%;
  background-color: #E95F74;
}

#audio-progress-handle {
  display: block;
  position:absolute;
  z-index: 1;
  margin-top: -5px;
  margin-left: -10px;
  width: 10px;
  height: 10px;
  border: 4px solid #D3D5DF;
  border-top-color: #D3D5DF;
  border-right-color: #D3D5DF;
  transform: rotate(45deg);
  border-radius: 100%;
  background-color: #fff;
  box-shadow: 0 1px 6px rgba(0, 0, 0, .2);
  cursor:pointer;
}

.draggable {
  float: left; margin: 0 10px 10px 0;
}
    </style>
  </head>
  <body>


<div class="mt-5" style="margin-top:50px;">
<div id="audio-player-container">
    <div class="audio-progress" id="audio-progress">
        <div id="draggable-point"  class="draggable ui-widget-content" data-value="0" data-max="100">
        <div id="audio-progress-handle"></div>
        </div>
        <div id="audio-progress-bar" class="bar" style="">
        </div>
    </div>
    </div>

    <div id="posX"></div>

    <div class="percentage"></div>
</div>
    





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js   "></script>


   <script>
            $('#draggable-point').draggable({
                axis: 'x',
                containment: "#audio-progress"
                });

                $('#draggable-point').draggable({
                drag: function() {
                    var offset = $(this).offset();
                    var xPos = (100 * parseFloat($(this).css("left"))) / (parseFloat($(this).parent().css("width"))) + "%";
                
                    $('#audio-progress-bar').css({
                    'width': xPos
                    });
                }

                
            });


        //     $(document).ready(function() {
  
        //         function modifValues(){
                    
        //             var val = $('.draggable').attr('data-value');
        //             if(val>=100){val=5;}
        //             var newVal = val*1+0.5;
        //             var txt = Math.floor(newVal)+'%';      

        //             $('.draggable').attr('data-value',newVal);
        //             $('.percentage').html(txt);
        //             $('.draggable').css("width", txt);
        //         }
                
        //         setInterval(function(){ modifValues(); },50);

        //    });  

   </script>
  </body>
</html>