
<?php include("../Template/header.php") ?>

<?php include("../../data/connection.php") ?>

<br>
<br>
<br>

<body>
    
    <div style="margin-left: 100px; margin-right: 100px;">
        <h2>Pregão</h2>

        <br>
        
		<br>
        
		<form action="createPregao.php" method="POST">
		
		<input type="hidden" name="tipo" id="tipo" value="pregao" > 
		<input type="submit" class="btn btn-primary" value="Cadastro de pregão" >
		<input type="hidden" name="action" value="../vencedor/createVencedor.php">

	
		</form>
    <br>
    <form method="POST" id="form-pesquisa" action="">
	<div class="input-group mb-3">
	<div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Pesquisa</span>
                </div>
				<input type="text" name="pesquisa" class="form-control" id="pesquisa" aria-label="Default" placeholder="Procure o pregão" aria-describedby="inputGroup-sizing-default">
	</div>
    </div>
		
    </form>
    <ul class="resultado">

	<?php include("listPregaoNoSearch.php") ?>

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

				$.post('listPregaoSearching.php', dados, function(retorna) {
					//Mostra dentro da ul os resultado obtidos 
					$(".resultado").html(retorna);
				});
			} else {
				$.post('listPregaoSearching.php', dados, function(retorna) {
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