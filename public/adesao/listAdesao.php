
<?php include("../Template/header.php") ?>

<?php include("../../data/connection.php") ?>

<br>
<br>
<br>

<body>
    
    <div style="margin-left: 100px; margin-right: 100px;">
        <h2>Adesao </h2>
		<br>

		<div class="buttons">

		<form action="createAdesao.php" method="POST">

			<input type="hidden" name="tipo" id="tipo" value="adesao" > 
			<input type="submit" class="btn btn-primary" value="Cadastro de adesao" >
			<input type="hidden" name="action" value="../vencedor/createVencedor.php">

		</div>
		</form>

		<br>
		<form method="POST" id="form-pesquisa" action="">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroup-sizing-default">Pesquisa</span>
				</div>
				<input type="text" name="pesquisa" class="form-control" id="pesquisa" aria-label="Default" placeholder="Procure a dispensa" aria-describedby="inputGroup-sizing-default">
			</div>
		</div>

    </form>
    <ul class="resultado">

	<?php include("listAdesaoNoSearch.php") ?>

	</ul>
</body>
<script>
	$(function() {

		$("#pesquisa").keyup(function() {
			//Recuperar o valor do campo
			var pesquisa = $(this).val();

			//Verificar se há algo digitado
			if (pesquisa != '') {
				var dados = {
					palavra: pesquisa
				}

				$.post('listAdesaoSearching.php', dados, function(retorna) {
					//Mostra dentro da ul os resultado obtidos 
					$(".resultado").html(retorna);
				});
			} else {
				$.post('listAdesaoSearching.php', dados, function(retorna) {
					//Mostra dentro da ul os resultado obtidos 
					$(".resultado").html(retorna);
				});
			}
		});
	});
</script>

<?php
error_reporting(0);
?>