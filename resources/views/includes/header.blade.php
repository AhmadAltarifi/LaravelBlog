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

@media screen and (max-width: 480px) {
    .image-container {
        height: 100px;
    }
    .text {
        font-size: 9vw;
        height: 70px;
        width: 65%;
    }
}

.logo {
    height: 120px;
    margin-left: 65px;
}

.logo img {
    height: 128px;

}
@media screen and (max-width: 375px) {

}

@media screen and (max-width: 480px) {
    .logo {
    height: 90px;
    margin-left: 5px;
}
    .logo img {
        margin-top: 7px;
    height: 64px;
}
.text {
    left: 50%;
}
}
</style>
</head>
<body>

<div class="image-container">
    <div class="logo"><img src="palestine (2).png"></div>
        <div class="text">#Free_Palestine</div>

</div>
</body>
</html>
