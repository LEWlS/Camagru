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
$likes = 13;
$coms = array(
	array(
		'username' => 'Antoine',
		'content' => "Stylé! : ) c'était quand?",
		'pp' => 'img/Antoinepp.jpg',
		'likes' => 5
	),	
	array(
		'username' => 'Lewis',
		'content' => " A Animalz ; )",
		'pp' => 'img/pp.jpg',
		'likes' => 1
	),
	array(
		'username' => 'Arthur',
		'content' => " La photographie est l'ensemble des techniques, des procédés et des matériels qui permettent d'enregistrer ce que l'on a imaginé visuellement et/ou à la suite d'un stimuli visuel. Le terme « photographie » désigne aussi l'image obtenue, phototype2 (photographie visible et stable qu'elle soit négative ou positive, qu'on obtient après l'exposition et le traitement d'une couche sensible) ou non!",
		'pp' => 'img/Arthurpp.jpg',
		'likes' => 0
	),
	array(
		'username' => 'Arthur',
		'content' => " La photographie est l'ensemble des techniques, des procédés et des matériels qui permettent d'enregistrer ce que l'on a imaginé visuellement et/ou à la suite d'un stimuli visuel. Le terme « photographie » désigne aussi l'image obtenue, phototype2 (photographie visible et stable qu'elle soit négative ou positive, qu'on obtient après l'exposition et le traitement d'une couche sensible) ou non!",
		'pp' => 'img/Arthurpp.jpg',
		'likes' => 0
	),
	array(
		'username' => 'Arthur',
		'content' => " La photographie est l'ensemble des techniques, des procédés et des matériels qui permettent d'enregistrer ce que l'on a imaginé visuellement et/ou à la suite d'un stimuli visuel. Le terme « photographie » désigne aussi l'image obtenue, phototype2 (photographie visible et stable qu'elle soit négative ou positive, qu'on obtient après l'exposition et le traitement d'une couche sensible) ou non!",
		'pp' => 'img/Arthurpp.jpg',
		'likes' => 0
	),
	array(
		'username' => 'Arthur',
		'content' => " La photographie est l'ensemble des techniques, des procédés et des matériels qui permettent d'enregistrer ce que l'on a imaginé visuellement et/ou à la suite d'un stimuli visuel. Le terme « photographie » désigne aussi l'image obtenue, phototype2 (photographie visible et stable qu'elle soit négative ou positive, qu'on obtient après l'exposition et le traitement d'une couche sensible) ou non!",
		'pp' => 'img/Arthurpp.jpg',
		'likes' => 0
	),
	array(
		'username' => 'Arthur',
		'content' => " La photographie est l'ensemble des techniques, des procédés et des matériels qui permettent d'enregistrer ce que l'on a imaginé visuellement et/ou à la suite d'un stimuli visuel. Le terme « photographie » désigne aussi l'image obtenue, phototype2 (photographie visible et stable qu'elle soit négative ou positive, qu'on obtient après l'exposition et le traitement d'une couche sensible) ou non!",
		'pp' => 'img/Arthurpp.jpg',
		'likes' => 0
	)
); 
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Photo</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" type="text/css" href="fonts/fonts.min.css" />
	</head>

	<body>
	<div class="bandeau">
			<p id="homeicon">Camagru</p>
			<img id="settings" class="settings" src="img/settings.png">	
			<img id="profileicon" class="profileicon" src="img/profile.png">
	</div>
		<div class="contenthome" id="contenthome">
		</div>
	</body>
	<script type="text/javascript">
		//Bandeau
		var profileicon = document.getElementById("profileicon");
		profileicon.onclick = function() {
    		window.location.href = 'profile.php';
		};
		var settingsicon = document.getElementById("settings");
		settingsicon.onclick = function() {
    		window.location.href = 'settings.php';
		};
		var homeicon = document.getElementById("homeicon");
		homeicon.onclick = function() {
    		window.location.href = 'index.php';
		};
		//Content
			var photocontainerObject = document.createElement('div');
			photocontainerObject.className = "photocontainerhome";

			var posterObject = document.createElement('div');
			posterObject.className = "posterhome";

			var photoObject = document.createElement('img');
			photoObject.className = "photohome";
			photoObject.src = 'img/pic4.jpg'

			var sideObject = document.createElement('div');
			sideObject.className = "sidehome";

			var reactionsObject = document.createElement('div');
			reactionsObject.className = "reactionshome";

			var commentsObject = document.createElement('div');
			commentsObject.className = "commentshome";

			sideObject.appendChild(reactionsObject);
			sideObject.appendChild(commentsObject);

			photocontainerObject.appendChild(posterObject);
			photocontainerObject.appendChild(photoObject);
			photocontainerObject.appendChild(sideObject);

			var content = document.getElementById("contenthome");
			content.appendChild(photocontainerObject);

		//Getting vars
		var coms = <?php echo json_encode($coms); ?>;
		
		//Poster
		var pp = document.createElement('img');
		pp.className = "posterhomepp";
		pp.src = <?php echo json_encode($user['pp']); ?>;
		pp.onclick = function() {
    				window.location.href = 'profile.php';
				};
		posterObject.appendChild(pp);

		var postername = document.createElement('p');
		postername.innerHTML = <?php echo json_encode($user['username']); ?>;
		posterObject.appendChild(postername);

		//Reactions
		var likeimg = document.createElement('img');
		likeimg.className = "likeimghome";
		likeimg.src = "img/like.png";
		reactionsObject.appendChild(likeimg);

		var likescount = document.createElement('p');
		likescount.innerHTML = <?php echo json_encode($likes); ?>;
		reactionsObject.appendChild(likescount);
		
		var comimg = document.createElement('img');
		comimg.className = "comimghome";
		comimg.src = "img/com.png";
		reactionsObject.appendChild(comimg);
		
		var comscount = document.createElement('p');
		comscount.innerHTML = coms.length;
		reactionsObject.appendChild(comscount);

		//Comments
		var i;
		for(i in coms)
		{
			var comObject = document.createElement('div');
			comObject.className = "commenthome";

			//Commenter pp
			var ppcontainer = document.createElement('div');
			ppcontainer.className = "ppcontainerhome";
			var compp = document.createElement('img');
			ppcontainer.appendChild(compp);
			comObject.appendChild(compp);
			compp.className = "compphome";
			compp.src = coms[i]['pp'];
			comObject.appendChild(ppcontainer);

			//Commenter comment
			var comcontainer = document.createElement('div');
			comcontainer.className = "comcontainerhome";

			var comcontent = document.createElement('p');
			comcontainer.appendChild(comcontent);
			comcontent.className = "comcontenthome";
			comcontent.innerHTML = coms[i]['username'];

			var comcontent2 = document.createElement('p');
			comcontainer.appendChild(comcontent2);
			comcontent2.className = "comcontent2home";
			comcontent2.innerHTML = coms[i]['content'];

			comObject.appendChild(comcontainer);

			commentsObject.appendChild(comObject);
		}
	</script>	
</html>