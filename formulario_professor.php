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

	<form method="POST" > 
		<div class="container">
			<div class="row">
				
				<div class="col-8 form-group">
					<label for="nome">Nome:</label>
					<input type="text" name="nome" id="nome" class="form-control"  required/>
				</div>
				<div class="col-4 form-group">
					<label for="cpf">CPF:</label>
					<input type="text" name="cpf" id="cpf" class="form-control" id="cpf"  required/>
				</div>
			</div>
			<div class="row">
				<div class="col-8 form-group">
					<label for="email">E-mail:</label>
					<input type="text" name="email" id="email" class="form-control"  required/>
				</div>
				<div class="col-4 form-group">
					<input type="hidden" name="id" value="" />
					<button onclick="loginP()" id="login" type="submit" class="btn btn-success botons btn-block">Salvar</button>
				</div>
			</div>
				
		</div>
	</form>

</body>

<script>

function loginP(){
	var teste = ValidarProf();
		if (teste == 1){
			return;
		}
	email = document.getElementById("email").value;
	cpf = document.getElementById("cpf").value;
	nome = document.getElementById("nome").value;

	var tarefasDB = firebase.database().ref("Professores");
	var professor = { "nome": nome, "cpf": cpf, "email":email};
	tarefasDB.push(professor);
	window.alert("Professor salvo com sucesso!")

	document.getElementById("email").value="";	
	document.getElementById("nome").value="";
	document.getElementById("cpf").value="";
}
function ValidarProf(){
		console.log("entrou no validar")
		var email = document.getElementById("email").value;
		var cpf = document.getElementById("cpf").value;
		var nome = document.getElementById("nome").value;
		
		
		if(nome == ""){
			alert("Campo Nome está vazio")
			return 1;
		}


		if (cpf.length == 0) {
			alert("digite 11 digitos no cpf")
			return 1;
		}
		if (email == "") {
			alert("digite o email")
			return 1;
		}

		return 0;
}



</script>
<script src="js/script.js"></script>