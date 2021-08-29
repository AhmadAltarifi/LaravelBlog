<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #181818;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #00aeda;
}

.arrow {
  border: solid white;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}

.up {
  transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
}

</style>
</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="arrow up"></i></button>

<script>
var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 280 || document.documentElement.scrollTop > 280) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

</body>
</html>
<?php /**PATH C:\Users\Ahmad Hamad\Desktop\Palestine\resources\views/includes/goup.blade.php ENDPATH**/ ?>