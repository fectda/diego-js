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


		<div class="navbar-fixed">
			<nav>
				<div class="nav-wrapper  blue lighten-3">
					<a href="#" class="brand-logo center">DiegoJS</a>

				</div>
			</nav>
		</div>

		<div class="container"  id="main">
			<div class="row">

				<div class=" col s12 m4 l3 light-blue">
					<br>
					<div class="switch ">
					  <label class="white-text">
						And
						<input type="checkbox" v-model="or" @change = "filterArray">
						<span class="lever blue lighten-3"></span>
						Or
					  </label>
					</div>
					<div class="input-field" >
						<select  style="display:block"  @change = "filterArray"  class=" blue lighten-3  white-text text-lighten-2" name="" v-model="selected_letter">
							<option value="">Select letter</option>
							<option v-for = "letter in letters" :value="letter">{{letter}}</option>
						</select>
						<br>
						<!-- <label class="white-text text-darken-4">Letters</label> -->
					</div>
					<div class="input-field">
						<select style="display:block" @change = "filterArray" class="blue lighten-3 white-text text-lighten-2" name="" v-model="selected_digit">
							<option value="">Select number</option>
							<option v-for = "number in numbers" :value="number">{{number}}</option>
						</select>
						<br>

						<!-- <label class="white-text text-darken-4">Numbers</label> -->
					</div>

					<div class="white-text">
						<p>
							total: {{ filter_array.length }}
						</p>
					</div>
				</div>

				<div class="col s12 m8 l9 blue lighten-5">
					<ul class="collection">
						<li class="collection-item center-align" v-for = "object in filter_array" >
							<a class="btn-floating btn-large waves-effect waves-light light-blue" @click = "selectDigit(object.digit);filterArray()">{{object.digit}}</a>
							<a class="btn-floating btn-large waves-effect waves-light light-blue" @click = "selectLetter(object.letter);filterArray()">{{object.letter}}</a>
						</li>

						<li class="collection-item center-align" v-if = "filter_array.length  == 0" > Muera el diego </li>
					</ul>
				</div>
			</div>
			<div class="row">

			</div>
			<!-- <filters></filters> -->
	    </div>

		<footer class="page-footer blue lighten-3">
			<div class="footer-copyright">
				<div class="container">
				© 2017 Muerte al Diego JS
				</div>
			</div>
		</footer>


		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<!--Import vue.js-->
		<script src="https://unpkg.com/vue"></script>

		<script type="text/javascript">

			let main = {
				objects : <?= json_encode($objects)  ?>,
				letters : <?= json_encode($letters)  ?>,
				numbers : <?= json_encode($numbers)  ?>,
			};

		</script>
		<script type="text/javascript" src="js/no-la-micorriza/first.js"></script>

	</body>
</html>
