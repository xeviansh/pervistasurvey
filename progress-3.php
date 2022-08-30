<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" type="text/css">
    <title>Document</title>
    <style>

* {
  margin: 0;
  padding: 0;
  font-family: 'Montserrat', sans-serif;
  box-sizing: border-box;
  animation-timing-function: ease;
}
body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  overflow: hidden;
}
#wrapper {
  position: relative;
  width: 350px;
  animation: out 0.3s forwards ease;
  animation-delay: 5s;
  transform: scale(1);
  opacity: 1;
  transform-origin: center -80%;
}
@keyframes out {
  0% {
    transform: scale(1);
    opacity: 1;
  }
  100% {
    transform: scale(0);
    opacity: 0;
  }
}
#wrapper .loader {
  animation: rotation 3.5s forwards linear;
  position: absolute;
  top: -120px;
  left: calc(50% - 35px);
  border: 5px solid #fff;
  border-radius: 50%;
  border-top-color: #a29bfe;
  height: 70px;
  width: 70px;
  display: flex;
  justify-content: center;
  align-items: center;
}
@keyframes rotation {
  0% {
    transform: rotate(0);
  }
  84% {
    transform: rotate(500deg);
  }
  95% {
    border: 5px solid #fff;
    border-top-color: #a29bfe;
  }
  100% {
    transform: rotate(1800deg);
    border: 5px solid #2ed573;
  }
}
#wrapper .loader:before {
  content: "\f00c";
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  font-size: 2em;
  color: #2ed573;
  animation: overspin 0.5s forwards cubic-bezier(0.175, 0.885, 0.32, 1.275);
  animation-delay: 3.4s;
  transform: rotate(180deg);
  opacity: 0;
}
@keyframes overspin {
  0% {
    transform: rotate(180deg);
    opacity: 0;
  }
  100% {
    transform: rotate(0);
    opacity: 1;
  }
}
#wrapper #mouse {
  position: absolute;
  top: 100px;
  left: 80%;
  animation: mouse-pos 3.5s forwards, mouse-pos2 1s forwards;
  animation-delay: 0s, 4s;
  z-index: 20;
}
@keyframes mouse-pos {
  30% {
    top: 100px;
    left: 80%;
  }
  50% {
    top: 15px;
    left: 4%;
  }
  60% {
    top: 15px;
    left: 4%;
  }
  75% {
    top: 5px;
    left: 7.3%;
  }
  85% {
    top: 5px;
    left: 7.3%;
  }
  95% {
    top: 15px;
    left: 105%;
  }
  100% {
    top: 15px;
    left: 105%;
  }
}
@keyframes mouse-pos2 {
  0% {
    top: 15px;
    left: 105%;
  }
  100% {
    top: -85px;
    left: 53%;
  }
}
#wrapper #mouse:after {
  content: "\f245";
  position: absolute;
  top: 0;
  left: 0;
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  font-size: 20px;
  animation: mouse-cont 2s forwards;
  animation-delay: 1.7s;
  color: #341f97;
  text-shadow: 0 1px 10px rgba(0, 0, 0, 0.3);
}
@keyframes mouse-cont {
  0% {
    font-size: 20px;
  }
  2% {
    font-size: 15px;
  }
  4% {
    font-size: 20px;
  }
  33% {
    content: "\f245";
  }
  34% {
    content: "\f337";
  }
  80% {
    content: "\f337";
  }
  81% {
    content: "\f245";
  }
}
#wrapper #mouse:before {
  content: "";
  position: absolute;
  top: -22px;
  left: -24px;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  border: 2px solid #222f3e;
  animation: circle 3.5s forwards;
  animation-delay: 1.7s;
  opacity: 0;
  transform: scale(0);
}
@keyframes circle {
  0% {
    transform: scale(0);
  }
  4% {
    opacity: 1;
  }
  8% {
    transform: scale(1);
    opacity: 0;
  }
  92% {
    transform: scale(0);
    opacity: 0;
  }
  95% {
    opacity: 1;
  }
  100% {
    transform: scale(1);
    opacity: 0;
  }
}
#wrapper .loading-bar {
  width: 100%;
  height: 30px;
  background: #dfe6e9;
  border-radius: 5px;
}
#wrapper .loading-bar .progress-bar {
  animation: progress 3.5s forwards;
  width: 6%;
  height: 100%;
  background: #a29bfe;
  border-radius: 5px;
  border: 0 solid #0abde3;
}
@keyframes progress {
  0% {
    width: 6%;
  }
  50% {
    border: 0 solid #0abde3;
  }
  51% {
    border: 4px solid #0abde3;
  }
  85% {
    width: 11%;
  }
  95% {
    border: 4px solid #0abde3;
    width: 100%;
  }
  100% {
    width: 100%;
  }
}
#wrapper .status {
  margin-top: 10px;
}
#wrapper .status .state {
  float: left;
  font-size: 0.9em;
  letter-spacing: 1pt;
  text-transform: uppercase;
  width: 100px;
  height: 20px;
  position: relative;
}
#wrapper .status .state:before {
  content: "Loading";
  position: absolute;
  left: 0;
  top: 0;
  animation: fadeLeft 0.5s forwards ease;
  animation-delay: 3.2s;
}
@keyframes fadeLeft {
  0% {
    text-indent: 0;
    opacity: 1;
  }
  100% {
    text-indent: -100px;
    opacity: 0;
  }
}
#wrapper .status .state:after {
  content: "Complete";
  position: absolute;
  left: 0;
  top: 0;
  text-indent: 100px;
  opacity: 0;
  animation: fadeLeft2 0.5s forwards ease;
  animation-delay: 3.2s;
}
@keyframes fadeLeft2 {
  0% {
    text-indent: 100px;
    opacity: 0;
  }
  100% {
    text-indent: 0;
    opacity: 1;
  }
}
#wrapper .status .percentage {
  float: right;
}
#wrapper .status .percentage:before {
  -webkit-animation: percentage-slow 3s forwards, percentage-fast 0.4s forwards;
  -webkit-animation-delay: 0s, 3s;
  content: "10%";
  font-size: 0.9em;
  letter-spacing: 1pt;
}
@keyframes percentage-slow {
  0% {
    content: "6%";
  }
  25% {
    content: "7%";
  }
  50% {
    content: "8%";
  }
  75% {
    content: "9%";
  }
  100% {
    content: "10%";
  }
}
@keyframes percentage-fast {
  11% {
    content: 11%;
  }
  12% {
    content: 12%;
  }
  13% {
    content: 13%;
  }
  14% {
    content: 14%;
  }
  15% {
    content: 15%;
  }
  16% {
    content: 16%;
  }
  17% {
    content: 17%;
  }
  18% {
    content: 18%;
  }
  19% {
    content: 19%;
  }
  20% {
    content: 20%;
  }
  21% {
    content: 21%;
  }
  22% {
    content: 22%;
  }
  23% {
    content: 23%;
  }
  24% {
    content: 24%;
  }
  25% {
    content: 25%;
  }
  26% {
    content: 26%;
  }
  27% {
    content: 27%;
  }
  28% {
    content: 28%;
  }
  29% {
    content: 29%;
  }
  30% {
    content: 30%;
  }
  31% {
    content: 31%;
  }
  32% {
    content: 32%;
  }
  33% {
    content: 33%;
  }
  34% {
    content: 34%;
  }
  35% {
    content: 35%;
  }
  36% {
    content: 36%;
  }
  37% {
    content: 37%;
  }
  38% {
    content: 38%;
  }
  39% {
    content: 39%;
  }
  40% {
    content: 40%;
  }
  41% {
    content: 41%;
  }
  42% {
    content: 42%;
  }
  43% {
    content: 43%;
  }
  44% {
    content: 44%;
  }
  45% {
    content: 45%;
  }
  46% {
    content: 46%;
  }
  47% {
    content: 47%;
  }
  48% {
    content: 48%;
  }
  49% {
    content: 49%;
  }
  50% {
    content: 50%;
  }
  51% {
    content: 51%;
  }
  52% {
    content: 52%;
  }
  53% {
    content: 53%;
  }
  54% {
    content: 54%;
  }
  55% {
    content: 55%;
  }
  56% {
    content: 56%;
  }
  57% {
    content: 57%;
  }
  58% {
    content: 58%;
  }
  59% {
    content: 59%;
  }
  60% {
    content: 60%;
  }
  61% {
    content: 61%;
  }
  62% {
    content: 62%;
  }
  63% {
    content: 63%;
  }
  64% {
    content: 64%;
  }
  65% {
    content: 65%;
  }
  66% {
    content: 66%;
  }
  67% {
    content: 67%;
  }
  68% {
    content: 68%;
  }
  69% {
    content: 69%;
  }
  70% {
    content: 70%;
  }
  71% {
    content: 71%;
  }
  72% {
    content: 72%;
  }
  73% {
    content: 73%;
  }
  74% {
    content: 74%;
  }
  75% {
    content: 75%;
  }
  76% {
    content: 76%;
  }
  77% {
    content: 77%;
  }
  78% {
    content: 78%;
  }
  79% {
    content: 79%;
  }
  80% {
    content: 80%;
  }
  81% {
    content: 81%;
  }
  82% {
    content: 82%;
  }
  83% {
    content: 83%;
  }
  84% {
    content: 84%;
  }
  85% {
    content: 85%;
  }
  86% {
    content: 86%;
  }
  87% {
    content: 87%;
  }
  88% {
    content: 88%;
  }
  89% {
    content: 89%;
  }
  90% {
    content: 90%;
  }
  91% {
    content: 91%;
  }
  92% {
    content: 92%;
  }
  93% {
    content: 93%;
  }
  94% {
    content: 94%;
  }
  95% {
    content: 95%;
  }
  96% {
    content: 96%;
  }
  97% {
    content: 97%;
  }
  98% {
    content: 98%;
  }
  99% {
    content: 99%;
  }
  100% {
    content: 100%;
  }
}
    </style>
</head>
<body>
    <div class="mt-5">
                <div id="wrapper">
            <div id="mouse"></div>
            <div class="loader">
            </div>
            <div class="loading-bar">
                <div class="progress-bar"></div>
            </div>
            <div class="status">
                <div class="state"></div>
                <div class="percentage"></div>
            </div>
            </div>
    </div>
</body>
</html>