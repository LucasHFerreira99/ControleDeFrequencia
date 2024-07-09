<body class ="">
<!-- <h1>Pesquisa</h1>
<form method="POST" action="pesquisar.php">
	
	<div class="row">

		<div class="col-2 form-group">
			<label for="pesquisa">Pesquisar :</label>
			<input type="text" id="pesquisa" name="pesquisa" class="form-control" onkeyup = "buscar($('#pesquisa').val());" />
		</div>
		<div class="col-2 form-group">
			<button type="button" class="btn btn-info botoes" onclick="buscar($('#pesquisa').val());">Pesquisar</button>
		</div>
	</div>
</form>-->

<form>
<div class="container">
	<div class="row">
	<div class="col-4 form-group">
			<label for="turma">Turma:</label>
			<select type="text" name="turma" id="turma" class="form-control">
				<option value="exemplo">Exemplo</option>
			</select>
		</div>
		
		<div class="col-4 form-group">
			<label for="data">Data:</label>
			<input type="date" name="data" id="data" value="" class="form-control"/>
		</div>
		
		<!--<div class="col-2 form-group">
			<input type="hidden" name="id" value="" />
			<button type="button" class="btn btn-primary botons btn-block">Editar</button>
		</div>-->

		<div class="col-4 form-group">
			<input type="hidden" name="id" value="" />
			<button onclick="BuscarF()" type="button" class="btn btn-primary botons btn-block">Buscar</button>
		</div>
	</div>
		
</div>
</form>


</body>
<script>


</script>
<script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.0/firebase.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-auth.js"></script>
		
<script src="js/script.js"></script>