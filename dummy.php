<!DO CTYPE html>
<html lang="en">
<head>
    <met a charset="UTF-8">
 <met a http-equiv="X-UA-Compatible" content="IE=edge">
 <met a name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel="stylesheet" type="text/css" href="css/progress6.css">
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <style>
   body {
    padding-top: 50px;
    padding-bottom: 50px;
}
.price-box {
  margin: 0 auto;
  background: #E9E9E9;
  border-radius: 10px;
  padding: 40px 15px;
  width: 1000px;
}

.ui-widget-content {
  border: 1px solid #bdc3c7;
  background: #e1e1e1;
  color: #222222;
  margin-top: 4px;
}

.ui-slider .ui-slider-handle {
  position: absolute;
  z-index: 2;
  width: 5.2em;
  height: 2.2em;
  cursor: default;
  margin: 0 -40px auto !important;
  text-align: center;    
  line-height: 30px;
  color: #FFFFFF;
  font-size: 15px;
}

.ui-slider .ui-slider-handle .glyphicon {
  color: #FFFFFF;
  margin: 0 3px;
  font-size: 11px;
  opacity: 0.5;
}

.ui-corner-all {
  border-radius: 20px;
}

.ui-slider-horizontal .ui-slider-handle {
  top: -.9em;
}

.ui-state-default,
.ui-widget-content .ui-state-default {
  border: 1px solid #f9f9f9;
  background:  #2a9cd3;
}

.ui-slider-horizontal .ui-slider-handle {
  margin-left: -0.5em;
}

.ui-slider .ui-slider-handle {
  cursor: pointer;
}

.ui-slider a,
.ui-slider a:focus {
  cursor: pointer;
  outline: none;
}

.price, .lead p {
   font-weight: 500;
 font-size: 30px;
 display: inline-block;
 line-height: 60px;
}

h4.great {
  background: #2b2e2e;
  margin: 0 0 25px -60px;
  padding: 7px 15px;
  color: #ffffff;
  font-size: 18px;
  font-weight: 600;
  border-radius: 5px;
  display: inline-block;
  -moz-box-shadow:    2px 4px 5px 0 #ccc;
   -webkit-box-shadow: 2px 4px 5px 0 #ccc;
   box-shadow:         2px 4px 5px 0 #ccc;
}

.total {
  border-bottom: 1px solid #7f8c8d;
  /*display: inline;
  padding: 10px 5px;*/
  position: relative;
  padding-bottom: 20px;
}

.total:before {
  content: "";
  display: inline;
  position: absolute;
  left: 0;
  bottom: 5px;
  width: 100%;
  height: 3px;
  background: #7f8c8d;
  opacity: 0.5;
}

.price-slider {
  margin-bottom: 70px;
}

.price-slider span {
  font-weight: 200;
  display: inline-block;
  color: #7f8c8d;
  font-size: 13px;
}

.form-pricing {
  background: #ffffff;
 padding: 51px 0 40px 0;
 border-radius: 4px;
}

.price-form {
  background: #ffffff;
  margin-bottom: 10px;
  padding: 20px;
  border: 1px solid #eeeeee;
  border-radius: 4px;
  margin-top: 169px;
  /*-moz-box-shadow:    0 5px 5px 0 #ccc;
   -webkit-box-shadow: 0 5px 5px 0 #ccc;
   box-shadow:         0 5px 5px 0 #ccc;*/
}

.form-group {
  margin-bottom: 0;
}

.form-group span.price {
  font-weight: 200;
  display: inline-block;
  color: #7f8c8d;
  font-size: 14px;
}

.help-text {
  display: block;
  margin-top: 32px;
  margin-bottom: 10px;
  color: #737373;
  position: absolute;
  /*margin-left: 20px;*/
  font-weight: 200;
  text-align: right;
  width: 188px;
}

.price-form label {
  font-weight: 200;
  font-size: 21px;
}

img.payment {
  display: block;
 margin-left: auto;
 margin-right: auto
}

.ui-slider-range-min {
  background: #2980b9;
}

/* HR */




/********************** RANGE ************************************/
.slider {
 display: flex;
 justify-content: space-between;
 list-style: none;
 padding: 0;
 margin: 0 0 1rem 0;
}
.slider li {
 flex: 2;
 position: relative;
 padding: 0 0 14px 0;
 font-size: var(--font-size-default);
 line-height: 1.5;
 color: var(--color-green);
 font-weight: 600;
 white-space: nowrap;
 overflow: visible;
 min-width: 0;
 text-align: center;
 border-bottom: 2px solid var(--color-gray-disabled);
}
.slider li:first-child,
.slider li:last-child {
 flex: 1;
}
.slider li:last-child {
 text-align: right;
}
.slider li:before {
 content: "";
 display: block;
 width: 8px;
 height: 8px;
 background-color: var(--color-gray-disabled);
 border-radius: 50%;
 border: 2px solid var(--color-white);
 position: absolute;
 left: calc(50% - 6px);
 bottom: -7px;
 z-index: 3;
 transition: all .2s ease-in-out;
}
.slider li:first-child:before {
 left: 0;
}
.slider li:last-child:before {
 right: 0;
 left: auto;
}
.slider span {
 transition: opacity .3s ease-in-out;
}
.slider li:not(.is-active) span {
 opacity: 0;
}
.slider .is-complete:not(:first-child):after,
.slider .is-active:not(:first-child):after {
 content: "";
 display: block;
 width: 100%;
 position: absolute;
 bottom: -2px;
 left: -50%;
 z-index: 2;
 border-bottom: 2px solid var(--color-green);
}
.slider li:last-child span {
 width: 200%;
 display: inline-block;
 position: absolute;
 left: -100%;
}

.slider .is-complete:last-child:after,
.slider .is-active:last-child:after {
 width: 200%;
 left: -100%;
}

.slider .is-complete:before {
 background-color: var(--color-green);
}

.slider .is-active:before,
.slider li:hover:before,
.slider .is-hovered:before {
 background-color: var(--color-white);
 border-color: var(--color-green);
}
.slider li:hover:before,
.slider .is-hovered:before {
 transform: scale(1.33);
}


button#btn {
  position: absolute;
 margin-top: 476px;
 margin-top: 476px;
 margin-left: 404px;
 font-size: 22px;
 padding: 15px 30px 15px 30px;
       border-color:none!important;
}
.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary {
 color: #fff;
 background-color: #9dc347;
 border-color:none !important;
}
.btn-primary {
 color: #fff;
 background-color: #2a9cd3;
 border-color: none;
}
strong {
 font-size: 27px;
  line-height: 40px;
}
 </style>
</head>
<body>
<div class="container">
<div class="price-box">

<button id="btn" class="btn btn-primary py-4">Calculate</button>

<form class="form-horizontal form-pricing" role="form">
 <div class="price-slider">
   <h4 class="great"> Annual Revenue ($)</h4>
    <span><p class="price lead" id="amount-label"></p></span>
   <div class="col-sm-12">
     <div id="slider"></div>
   </div>
 </div>
 <div class="price-slider">
   <h4 class="great">Annual New Sales ($)</h4>
    <span><p class="price lead" id="duration-label"></p></span>
   <div class="col-sm-12">
     <div id="slider2"></div>
   </div>
 </div>
 <div class="price-slider">
   <h4 class="great">Annual Retention Rate (%)</h4>
    <span><p class="price lead" id="text-label">%</p></span>
   <div class="col-sm-12">
     <div id="slider3"></div>
   </div>
 </div>
 
 <div class="price-form" id="tg" style="display:none">

 <input type="hidden" id="amount" class="form-control">
 <input type="hidden" id="duration" class="form-control">
 <input type="hidden" id="text" class="form-control">

             <div class="form-group total" >
               <label for="total" class="col-sm-6 control-label"><strong>Total ($): </strong></label>
               <div class="col-sm-6">
                 <input type="hidden" id="total" class="form-control">
                 <p class="price lead" id="total-label"></p>
               </div>
             </div>
 

 </div>
</form>
</div>
</div>
<script>
const btn = document.getElementById('btn');
btn.addEventListener('click', () => {
 const form = document.getElementById('tg');

 if (form.style.display === 'none') {
   form.style.display = 'block';
 } else {
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
           step: 250000000,
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

       $("#amount").val(0);
       $("#duration").val(0);
       $("#text").val(0);

       $("#amount-label").text(0);
       $("#duration-label").text(0);
       $("#text-label").text(0);

     
       update();
   });
   
   function update(slider,val) {
     var $amount = slider == 1?val:$("#amount").val();
     var $duration = slider == 2?val:$("#duration").val();
     var $text = slider == 3?val:$("#text").val();

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

      $qqq = $finalLost.toLocaleString('en-US');


      $total = $qqq;

      $xxx = $amount.toLocaleString('en-US');
      $yyy = $duration.toLocaleString('en-US');

      $( "#amount" ).val($amount);
      $( "#amount-label" ).text($xxx);
      $( "#duration" ).val($duration);
      $( "#duration-label" ).text($yyy);
      $( "#text" ).val($text);
      $( "#text-label" ).text($text);
      $( "#total" ).val($total);
      $( "#total-label" ).text($total);

      $('#slider a').html('<label><span class="glyphicon glyphicon-chevron-left"></span>  <span class="glyphicon glyphicon-chevron-right"></span></label>');
      $('#slider2 a').html('<label><span class="glyphicon glyphicon-chevron-left"></span>  <span class="glyphicon glyphicon-chevron-right"></span></label>');
      $('#slider3 a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> <span class="glyphicon glyphicon-chevron-right"></span></label>');

   }
</script>
</body>
</html>