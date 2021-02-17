<!DOCTYPE html>
<html>
<body>

<audio id="myAudio" controls>
  <source src="national.mp3" type="audio/mpeg" style="margin-top:400px">
</audio>
</body>
</html>
<script>
var aud = document.getElementById("myAudio");
aud.onended = function() {
  window.location.href='Child.php';
};
</script>