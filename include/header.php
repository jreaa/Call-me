
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Call-In</title>
	<!--custom-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--bootstrap-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!--JQUERY-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<!--Fonts-->
	<script src="https://kit.fontawesome.com/04de717d2d.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container mt-4">
	<nav class="nav navbar-dark bg-dark">
		<h2 class="p-3" style="display: flex;">
			<i class="fas fa-map-marker-alt mr-3" style="color: #fff;"></i><a href="index.php" class="navbar-brand">call-<span style="color: yellow;">in</span></a>
			<p class="mt-2" style="color: #fff; font-size: 20px;">De chile a <span style="color: yellow;">VENE</span><span style="color: blue;">ZUE</span><span style="color: red;">LA</span></p>
		</h2>
	</nav>
</div>
<div class="container">
	<div class="card">
		<div class="card-header">
			<h3>Seleccione una compañia de telefono.</h3>
			<p><i class="fas fa-phone"></i> Debe ingresar la compañia de telefono que esta usando.</p>
		</div>
		<div class="card-body">
			<div class="dropdown">
			  <a class="btn btn-primary btn-block dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Comapañias
			  </a>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			    <button id="button" class="dropdown-item" value="template/call-claro.php" type="button">Claro</button>
			    <button id="button2" class="dropdown-item" value="template/call-movistar.php" type="button">Movistar</button>
			    <button id="button3" class="dropdown-item" value="template/call-entel.php" type="button">Entel</button>
			  </div>
			</div>

		</div>
	</div>
</div>

<div id="container">
	
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#button').on('click',function(e){
			let button = $('#button').val();
			$.ajax({
				url: button,
				type:'GET',
				success: function(response){
					let template = 
					`<div>
						${response}
					</div>`;

					$('#container').html(template);
				}
			})
		})
		$('#button2').on('click',function(e){
			let button = $('#button2').val();
			$.ajax({
				url: button,
				type:'GET',
				success: function(response){
					let template = 
					`<div>
						${response}
					</div>`;

					$('#container').html(template);
				}
			})
		})
		$('#button3').on('click',function(e){
			let button = $('#button3').val();
			$.ajax({
				url: button,
				type:'GET',
				success: function(response){
					let template = 
					`<div>
						${response}
					</div>`;

					$('#container').html(template);
				}
			})
		})
	});
</script>