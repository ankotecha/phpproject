<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-box {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #bbb;
  color: black;
}

.flip-box-back {
  background-color: #555;
  color: black;
  transform: rotateY(180deg);
}
</style>
</head>
<body>

<h1>Image Flip with Text</h1>
<h3>Hover over the image below:</h3>

<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front">
        <img src="cj.png" alt="Paris" style="width:300px;height:200px"> 
    </div><h1>codejam</h1>
    <div class="flip-box-back">
      <h2>Paris</h2>
      <p>What an amazing city</p>
    </div>
  </div>
    <h1>codejam</h1>
</div>

</body>
</html>
