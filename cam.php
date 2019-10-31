<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Display Webcam Stream</title>
 
<style>
#videoElement {
	width: 50vmin;
	height: 37.5vmin;
	background-color: #666;
}
#myOnlineCamera video{margin:15px;float:left;}
#myCanvas{
	width:25vmin;
	height:18.75vmin;
	margin:15px;
	float:left;}
</style>
</head>
 
<body>
<div id="myOnlineCamera">
	<video autoplay="true" id="videoElement"></video>
	<input onclick="stop()" type="submit" value="Stop">
	<input onclick="photo()" type="submit" value="Take a photo!">
</div>
<br />
<canvas id="myCanvas"></canvas>
<script>
	var video = document.querySelector("#videoElement");

	if (navigator.mediaDevices.getUserMedia) 
	{
		navigator.mediaDevices.getUserMedia({ video: true })
    	.then(function (stream) {
      		video.srcObject = stream;
    	})
    	.catch(function (err0r) {
      		console.log("Something went wrong!");
    	});
	}
	function photo() {
		canvas = document.getElementById("myCanvas");
        ctx = canvas.getContext('2d');
		ctx.drawImage(video, 0,0, canvas.width, canvas.height);
	}
	function stop() {
  	var stream = video.srcObject;
  	var tracks = stream.getTracks();

  	for (var i = 0; i < tracks.length; i++) 
	{
		var track = tracks[i];
    	track.stop();
  	}
	video.srcObject = null;
	}
</script>
</body>
</html>