
<?php include("../Template/header.php") ?>

<?php include("../../data/connection.php") ?>

<br>
<br>
<br>

	<script>
	function redirectPage(v) {
		document.location.href = '../orgao/exercicioAtuala.php?param='+v;  
		
	}
</script>
<body>
    
    <div style="margin-left: 100px; margin-right: 100px;">
        <h2>Adesão </h2>
		<br>

		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" id="inputGroup-sizing-default">Exercício</span>
			</div>
			<select class="form-select" name="txtOrgao" id="txtOrgao" onChange="redirectPage(this.value)">
				<option value="<?php echo "Selecione" ?>" selected>
					<?php echo "Selecione" ?>
				</option>
				<?php

				$sqlQuery = "SELECT DISTINCT exercicio FROM adesao order by exercicio";

				$orgaos = $connection->query($sqlQuery);

				if ($orgaos->num_rows > 0) {

					while ($row = $orgaos->fetch_assoc()) { {
				?>

							<option value="<?php echo $row["exercicio"] ?>">
								<?php echo $row["exercicio"] ?>
							</option>

				<?php
						}
					}
				}

				?>
			</select>
		</div>
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