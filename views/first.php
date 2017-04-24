<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>DiegoJS</title>

		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body>
		<div class="container">
			<div class="row">

				<div class="col s12 m4 l3">
					<div id="app">

					</div>
				</div>

				<div class="col s12 m8 l9">
					<?= "diego es puto js"  ?>
				</div>
		    </div>

	    </div>

		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<!--Import vue.js-->
		<script src="https://unpkg.com/vue"></script>

		<script type="text/javascript">
			objects = <?= json_encode($objects)  ?>;
			letters = <?= json_encode($letters)  ?>;
			numbers = <?= json_encode($numbers)  ?>;
			console.log(objects,letters,numbers);
		</script>
		<script type="text/javascript" src="js/no-la-micorriza.js"></script>


	</body>
</html>
