<!DO CTYPE html>
<ht ml lang="en">
<head>
    <met a charset="UTF-8">
 <met a http-equiv="X-UA-Compatible" content="IE=edge">
 <met a name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel="stylesheet" type="text/css" href="css/progress6.css">
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="container">


<div class="price-box">

<button id="btn" class="btn btn-warning py-4">Calculate Result</button>

<form class="form-horizontal form-pricing" role="form">
 <div class="price-slider">
   <h4 class="great"> Annual Revenue ($)</h4>
   <!-- <span>Minimum $10 is required</span> --> <span><p class="price lead" id="amount-label"></p></span>
   <div class="col-sm-12">
     <div id="slider"></div>
   </div>
 </div>

 <div class="price-slider">
   <h4 class="great">Annual Retention Rate(%)</h4>
   <!-- <span>Minimum 1 day is required</span> --> <span><p class="price lead" id="text-label">%</p></span>
   <div class="col-sm-12">
     <div id="slider3"></div>
   </div>
 </div>

 <div class="price-slider">
   <h4 class="great">Annual New Sales ($)</h4>
   <!-- <span>Minimum 1 day is required</span> --> <span><p class="price lead" id="duration-label"></p></span>
   <div class="col-sm-12">
     <div id="slider2"></div>
   </div>
 </div>

 



 <div class="price-form" id="tg" style="display:none">

 <input type="hidden" id="amount" class="form-control">
 <input type="hidden" id="duration" class="form-control">
 <input type="hidden" id="text" class="form-control">

         <!-- <div class="form-group">
           <label for="amount" class="col-sm-6 control-label"> Revenue ($): </label>
           <span class="help-text">Please choose your amount</span>
           <div class="col-sm-6">
             <input type="hidden" id="amount" class="form-control">
             <p class="price lead" id="amount-label"></p>
             <span class="price">.00</span>
           </div>
         </div>
         <div class="form-group">
           <label for="duration" class="col-sm-6 control-label"> New Sales ($): </label>
           <span class="help-text">Choose your commitment</span>
           <div class="col-sm-6">
             <input type="hidden" id="duration" class="form-control">
             <p class="price lead" id="duration-label"></p>
             <span class="price">days</span>
           </div>
         </div>

         <div class="form-group">
           <label for="text" class="col-sm-6 control-label">Retention Rate(%): </label>
           <span class="help-text">Choose your Text</span>
           <div class="col-sm-6">
             <input type="hidden" id="text" class="form-control">
             <p class="price lead" id="text-label"></p>
             <span class="price">Texts</span>
           </div>
         </div> -->

        
             <div class="form-group total" >
               <label for="total" class="col-sm-6 control-label"><strong>Total: </strong></label>
               <div class="col-sm-6">
                 <input type="hidden" id="total" class="form-control">
                 <p class="price lead" id="total-label"></p>
                 <!-- <span class="price">.00</span> -->
               </div>
             </div>
 

 </div>



 <!-- <div class="form-group">
   <div class="col-sm-12">
     <button type="submit" class="btn btn-primary btn-lg btn-block">Proceed <span class="glyphicon glyphicon-chevron-right pull-right" style="padding-right: 10px;"></span></button>
   </div>
 </div> -->


</form>


</div>

</div>

<script>
const btn = document.getElementById('btn');

btn.addEventListener('click', () => {
 const form = document.getElementById('tg');

 if (form.style.display === 'none') {
   // 👇️ this SHOWS the form
   form.style.display = 'block';
 } else {
   // 👇️ this HIDES the form
   form.style.display = 'none';
 }
});

</script>



<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
<script>
 $(document).ready(function() {
       $("#slider").slider({
           animate: true,
           value:1,
           min: 0,
           max: 1000000000,
           step: 5,
           slide: function(event, ui) {
               update(1,ui.value); //changed
           }
       });

       $("#slider2").slider({
           animate: true,
           value:0,
           min: 0,
           max: 400000000,
           step: 1,
           slide: function(event, ui) {
               update(2,ui.value); //changed
           }
       });

       $("#slider3").slider({
           animate: true,
           value:0,
           min: 0,
           max: 100,
           step: 1,
           slide: function(event, ui) {
               update(3,ui.value); //changed
           }
       });

       //Added, set initial value.
       $("#amount").val(0);
       $("#duration").val(0);
       $("#text").val(0);

       $("#amount-label").text(0);
       $("#duration-label").text(0);
       $("#text-label").text(0);

     
       update();
   });

   //changed. now with parameter
   function update(slider,val) {
     //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
     var $amount = slider == 1?val:$("#amount").val();
     var $duration = slider == 2?val:$("#duration").val();
     var $text = slider == 3?val:$("#text").val();


     /* commented
     $amount = $( "#slider" ).slider( "value" );
     $duration = $( "#slider2" ).slider( "value" );
      */

      $first = ($text/100) * ($amount) + $duration;
      $second = ($first * ($text/100)) + $duration;
      $third = ($second * ($text/100)) + $duration;
      $fourth = ($third * ($text/100)) + $duration;
      $fifth = ($fourth * ($text/100)) + $duration;


      $lost1 = $first * (($text/100) - 1) ;
      $lost2 = $second * (($text/100) - 1)  ;
      $lost3 = $third * (($text/100) - 1)  ;
      $lost4 = $fourth * (($text/100) - 1)  ;
      $lost5 = $fifth *(($text/100) - 1) ;

      $finalLost = ($lost1+$lost2+$lost3+$lost4+$lost5);

   //    $x = Math.trunc($finalLost);

      $total = "$"  + ($finalLost);

     //  $total = "$" + ($amount * $duration);
      $( "#amount" ).val($amount);
      $( "#amount-label" ).text($amount);
      $( "#duration" ).val($duration);
      $( "#duration-label" ).text($duration);
      $( "#text" ).val($text);
      $( "#text-label" ).text($text);
      $( "#total" ).val($total);
      $( "#total-label" ).text($total);

      $('#slider a').html('<label><span class="glyphicon glyphicon-chevron-left"></span>  <span class="glyphicon glyphicon-chevron-right"></span></label>');
      $('#slider2 a').html('<label><span class="glyphicon glyphicon-chevron-left"></span>  <span class="glyphicon glyphicon-chevron-right"></span></label>');
      $('#slider3 a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> <span class="glyphicon glyphicon-chevron-right"></span></label>');

     //  $('#slider a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$amount+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
     //  $('#slider2 a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$duration+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
     //  $('#slider3 a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$text+' <span class="glyphicon glyphicon-chevron-right"></span></label>');

   }
</script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
</body>
</html>