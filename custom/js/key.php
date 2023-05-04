<?php 
<html>
 
<head>
<title>Key press events</title>
<script>
 
window.addEventListener("keydown", checkKeyPress, false);
// The parameters of the event listener are event, function to run, useCapture (optional).
// This event listener runs checkKeyPress function when a key is pressed down
// You can use keydown or keyup to check what key has been pressed or released
 
 
// this function checks to see if the letter 'a' key has been pressed
function checkKeyPress(key) {
 if (key.keyCode == "65") {
 alert("The 'a' letter key has been pressed.");
 // 65 is the keycode that is returned when the 'a' letter key is pressed
 // if you use keypress event instead of keydown/up then you must use ASCII code instead of keycode
 }
}
 
</script>
</head>
 
<body>
 <p>Press the 'a' key to see the alert message<p>
</body>
 