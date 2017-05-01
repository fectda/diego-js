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
					<ul>
						<li>
							<div class="input-field white-text" >
								<input type="number"  step="1" min="0" id="count_init" class="validate white   blue-text text-lighten-3" placehulder="2">
								<label for="count_init active" class="white-text">Número de inicio</label>
							</div>
							<a href="#" class="btn-floating btn-large waves-effect waves-light blue lighten-5 " @click = "addCounter()">
								<i class=" material-icons light-blue-text ">add</i>
							</a>
							<div class="white-text">
								<p>
									total: {{ counters.length }}
								</p>
							</div>
						</li>
						<li>

						</li>
					</ul>

				</div>

				<div class="col s12 m8 l9 blue lighten-5">
					<h2> 2.1 </h2>
					<ul class="collection">

						<simple-counter v-for = "counter in counters"  :value=counter ></simple-counter>

						<li class="collection-item center-align" v-if = "counters.length  == 0" > Muera el diego </li>
					</ul>


					<h2> 2.2 </h2>
					<ul class="collection">

						<post  v-for = "post in posts"  :colors="colors"  :post="post" ></post>

						<li class="collection-item center-align" v-if = "posts.length  == 0" > Muera el diego </li>
					</ul>

				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<ol>
						<li>nunca pude sincronizar el cambio en los contadores hijos con el array original</li>
						<li>nunca pude hacer el bind de los colores </li>

					</ol>
				</div>
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

		<template id="simple-counter-template" style="display:none">
			<div class="">

				<li class="collection-item center-align" >
					<a class="btn-floating btn-large waves-effect waves-light light-blue" @click = "count()">{{counter.value}}</a>
				</li>

			</div>
		</template>

		<template id="post-template" style="display:none">
			<div class="">

				<li class="collection-item " >
					<div class="card light-blue ">
						<div class="card-content white-text">
							<span class="card-title">{{ current_post.title }}</span>
							<p>{{ current_post.content }}</p>

							<div class="chip">
								{{ current_post.color_id }}
							</div>
						</div>
						<div class="card-action">
							<ul>
								<li v-for = "pallet in colors" style="cursor: pointer;">
									<div class="chip">
										{{ pallet.id }}
									</div>

									<div @click = "selectThisColors(pallet.id)" class="chip" :style="{'background-color':'#'+color}" v-for="color in pallet.colors" >
										{{color}}
									</div>
								</li>
							</ul>
						</div>
					</div>
					<h4></h4>
					<p></p>
				</li>

			</div>
		</template>


		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<!--Import vue.js-->
		<script src="https://unpkg.com/vue"></script>

		<script type="text/javascript">

			let main = {
				counters : <?= json_encode($counters)  ?>,
				colors : <?= json_encode($colors)  ?>,
				posts : <?= json_encode($posts)  ?>,
			};

		</script>
		<script type="text/javascript" src="js/no-la-micorriza/second.js"></script>

	</body>
</html>
