<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.image-container {
  width: 100%;
    position: relative;
  height: 130px;
  background-color: black;
  display: flex;

}

.text {
  background-color: white;
  color: black;
  font-size: 5vw;
  font-weight: bold;
  margin: 0 auto;
  width: 60%;
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  mix-blend-mode: screen;
  font-family: 'Pacifico', cursive;
  height: 120px;
}

@media  screen and (max-width: 480px) {
    .image-container {
        height: 100px;
    }
    .text {
        font-size: 10vw;
        height: 70px;
    }
}

.logo {
    height: 120px;
    margin-left: 65px
}

.logo img {
    height: 128px;
}

@media  screen and (max-width: 480px) {
    .logo {
    height: 90px;
}
    .logo img {
        margin-top: 7px;
    height: 80px;
}
.text {
    left: 60%;
}
}
</style>
</head>
<body>

<div class="image-container">
    <div class="logo"><img src="palestine (2).png"></div>
        <div class="text">#Free_Palestine</div>
    <div class="logo" style="margin-left: 965px;"><img src="palestine (2).png"></div>
</div>
</body>
</html>
<?php /**PATH C:\Users\Ahmad Hamad\Desktop\Palestine\resources\views/includes/header.blade.php ENDPATH**/ ?>