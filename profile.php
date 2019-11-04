<?php
$user = array(
	'username' => 'Lewis',
	'age' => '22',
	'bio' => "J\'aime la photo et le css!",
	'city' => 'Paris',
	'pp' => 'img/pp.jpg',
	'photos' => array('img/pic6.jpg', 
	'img/pic3.jpg', 
	'img/pic4.jpg', 
	'img/pic2.jpg',
	'img/pic5.jpg',
	'img/pic1.jpg'),
);
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" type="text/css" href="fonts/fonts.min.css" />
	</head>

	<body>
		<h1>Camagru</h1>
		<div class="profile">
			<img id="pp" class="pp">
			<img id="settings" class="settings" src="img/gear.png">
			<p id="usernameandage">none</p>
			<p id="city">none</p>
			<p class="bio" id="bio">none</p>
		</div>
		<div class="gallerycontainer">
			<div id="gallery" class='gallery'>
			</div>
		</div>
	</body>
	<script type="text/javascript">
			var usernameObject = document.getElementById("usernameandage");
			var nameObject = document.getElementById("bio");
			var ppObject = document.getElementById("pp");
			var cityObject = document.getElementById("city");

			usernameObject.innerHTML = '<?php echo $user['username']; ?>' +" | " + '<?php echo $user['age']; ?>' + 'yo';
			nameObject.innerHTML = '<?php echo $user['bio']; ?>';
			cityObject.innerHTML = '<?php echo $user['city']; ?>';
			ppObject.src = '<?php echo $user['pp']; ?>';

			var galleryObject = document.getElementById('gallery');
			var photos = <?php echo json_encode($user['photos']); ?>;
			var pic;
			for(pic in photos)
			{
				var picObject = document.createElement('img');
				picObject.className = "pics";
				picObject.src = photos[pic];
				galleryObject.appendChild(picObject);
			}
		</script>	
</html>