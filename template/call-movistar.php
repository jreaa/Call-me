

<!--phone number section-->
<div class="container">
	<div class="card">
		<div class="card-body">
			<form id="form" action="movistar.php" method="POST">
				<h3>Movistar</h3>
				<div class="form-group" style="display: flex;">
					<h3 class="mr-3">+58</h3>
					<input id="numberPhone" type="text" class="form-control"name="phone" placeholder="Por favor ingresa tu puto numero">
				</div>
				<div id="btn">
					
				</div>
			</form>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#numberPhone').keyup(function(e){
			let number = $('#numberPhone').val();
			$.ajax({
				url:'template/movistar.php',
				type:'POST',
				data:{ number },
				success: function(response){
					let template = 
					`<div>
						${response}
					</div>`;

					$('#btn').html(template);
				}
			})
		})
	});
</script>



