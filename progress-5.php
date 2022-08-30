<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        .container1{
            margin-top:150px;
        }
        .RadialProgress {
            --hue: 220;
            --holesize: 65%;
            --track-bg: hsl(233 34% 92%);
            block-size: 14vmin;
            inline-size: 17vmin;
            min-inline-size: 77px;
            min-block-size: 57px;
            display: grid;
            place-items: center;
            position: relative;
            font-weight: 700;
            font-size: max(1vmin, 1.4rem);
        }
        .RadialProgress1 {
            --hue: 220;
            --holesize: 65%;
            --track-bg: hsl(233 34% 92%);
            block-size: 14vmin;
            inline-size: 17vmin;
            min-inline-size: 77px;
            min-block-size: 57px;
            display: grid;
            place-items: center;
            position: relative;
            font-weight: 700;
            font-size: max(1vmin, 1.4rem);
        }
        .RadialProgress1 {
            --hue: 220;
            --holesize: 65%;
            --track-bg: hsl(233 34% 92%);
            block-size: 14vmin;
            inline-size: 17vmin;
            min-inline-size: 77px;
            min-block-size: 57px;
            display: grid;
            place-items: center;
            position: relative;
            font-weight: 700;
            font-size: max(1vmin, 1.4rem);
        }

    </style>
</head>
<body>

<div class="container">
  <div class="RadialProgress" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
  <input type="range" value="25" min="0" max="100" /> 
</div>

<div class="container1">
  <div class="RadialProgress1" role="progressbar" aria-valuenow1="25" aria-valuemin="0" aria-valuemax="100"></div>
  <input type="range" value="25" min="0" max="100" /> 
</div>

<div class="container1">
  <div class="RadialProgress2" role="progressbar" aria-valuenow2="25" aria-valuemin="0" aria-valuemax="100"></div>
  <input type="range" value="25" min="0" max="100" /> 
</div>



<script>
    const controller = document.querySelector('input[type=range]');
    const radialProgress = document.querySelector('.RadialProgress');

    const setProgress = (progress) => {
    const value = `${progress}%`;
    radialProgress.style.setProperty('--progress', value)
    radialProgress.innerHTML = value
    radialProgress.setAttribute('aria-valuenow', value)
    }

    setProgress(controller.value)
    controller.oninput = () => {
    setProgress(controller.value)
    }
</script>

<script>
    const controller = document.querySelector('input[type=range]');
    const radialProgress1 = document.querySelector('.RadialProgress1');

    const setProgress = (progress1) => {
    const value1 = `${progress1}%`;
    radialProgress.style.setProperty('--progress1', value1)
    radialProgress.innerHTML = value1
    radialProgress.setAttribute('aria-valuenow1', value1)
    }

    setProgress(controller.value1)
    controller.oninput = () => {
    setProgress(controller.value1)
    }
</script>

<script>
    const controller = document.querySelector('input[type=range]');
    const radialProgress2 = document.querySelector('.RadialProgress2');

    const setProgress2 = (progress2) => {
    const value2 = `${progress2}%`;
    radialProgress.style.setProperty('--progress2', value2)
    radialProgress.innerHTML = value2
    radialProgress.setAttribute('aria-valuenow2', value2)
    }

    setProgress2(controller.value2)
    controller.oninput = () => {
    setProgress2(controller.value2)
    }
</script>
</body>
</html>