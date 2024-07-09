<body class ="">
<head> 
	<script src= 
		"https://smtpjs.com/v3/smtp.js"> 
	</script> 
</head>

<form method="POST" > 
		
	<div class="container">	
		
		<div class="col-6 form-group">
			<label for="nome" class = "label">Escolha uma opçao:</label>
			<div>
				<input type="radio" name="escolha" id="turma" value = "escolha"  checked = "checked" onchange = "mostrarDiv ();"/> Salvar Aluno
				<input type="radio" name="escolha" id="aluno" value = "escolha" onchange = "mostrarDiv ();"/> Cadastrar Turma
			</div>
		</div>
		
		<div class="container" style="display: none;" id="divAluno">
			<div class="row">
				
				<!--<div class="col-4 form-group">
					<label for="nome">Nome:</label>
					<input type="text" name="nome2" id="nome2" class="form-control"/>
				</div>-->

				<div class="col-4 form-group">
					<label for="nome">Nome:</label>
					<select type="text" name="nome" id="selectAlunos" class="form-control" required>
						<option value=""></option>
					</select>
				</div>
				
				<div class="col-4 form-group">
					<label for="turma">Turma:</label>
					<select type="text" name="turma" id="turma2" class="form-control" required>
						<option value=""></option>
					</select>
				</div>
				<div class="col-4 form-group">
					<input type="hidden" name="id" value="id" />
					<button onclick="AdicionarTurma();" id="editarAluno" class="btn btn-success botons btn-block">Salvar</button>
				</div>
			</div>
			
		</div>
		
		
		<div class="container" style=""id="divTurma">
			<div class="row">
				
				<div class="col-8 form-group">
					<label for="nome">Nome:</label>
					<input type="text" name="nome" id="nome" class="form-control" required/>
				</div>
				<div class="col-4 form-group">
					<label for="matricula">Matrícula:</label>
					<input type="text" name="matricula" id="matricula" class="form-control" required/>
				</div>
			</div>
			<div class="row">
				
				<div class="col-6 form-group">
					<label for="email">E-mail:</label>
					<input type="text" name="email2" id="email2" class="form-control" required/>
				</div>
				<div class="col-6 form-group">
					<label for="cpf">CPF:</label>
					<input type="text" name="cpf" id="cpf" class="form-control" required/>
				</div>
			</div>
			<div class = "row">
			<div class="col-4 form-group">
					<input type="hidden" name="id" value="id" />
					<button onclick="loginA();" id="login" type="button"  class="btn btn-success botons btn-block">Salvar</button>
				</div>
			</div>
		</div>
	</div>	
</form>

	
</body>

<script>
	
function ValidarAluno(){
	console.log("entrou no validar")
	var cpf = document.getElementById("cpf").value;
	var nome = document.getElementById("nome").value;
	var email = document.getElementById("email2").value;
	var matricula = document.getElementById("matricula").value;
	console.log(cpf, nome, email, matricula)
	if(nome == ""){
		alert("Campo Nome está vazio")
		return 1;
	}

	if (cpf.length != 14) {
		alert("Digite 11 digitos para o CPF!")
		return 1;
	}
	if (matricula.length == 0) {
		alert("digite a matricula")
		return 1;
	}

	if(email == ""){
		alert("Insira o email")
		return 1;
	}
	return 0;
}

	function loginA(){
		var teste = ValidarAluno();
		if (teste == 1){
			return;
		}
		nome = document.getElementById("nome").value;
		matricula = document.getElementById("matricula").value;
		email2 = document.getElementById("email2").value;
		cpf = document.getElementById("cpf").value;
		var alunoDB = firebase.database().ref("Alunos");
		var aluno = { "nome": nome, "matricula": matricula,  "Email": email2, "cpf": cpf};
		alunoDB.push(aluno);
		document.getElementById("nome").value="";
		document.getElementById("matricula").value="";
		document.getElementById("email2").value="";
		document.getElementById("cpf").value="";
		window.alert("Aluno salvo com sucesso!")	
		criarUsuario(email2);
	}
	
</script>

<script>

function mostrarDiv (){
	
	
	if(document.getElementById("aluno").checked){
		document.getElementById("divAluno").style = "";
	}
	else{
		document.getElementById("divAluno").style = "display: none";
	}
	
	if(document.getElementById("turma").checked){
		document.getElementById("divTurma").style = "";
	}
	else{
		document.getElementById("divTurma").style = "display: none";	
	}
}
</script>

<script> 
function criarUsuario(email2){
	password = gerarPassword();

	//window.alert(password);
	firebase.auth().createUserWithEmailAndPassword(email2, password).then(function(user) {
		window.alert("criou usuario");
		sendEmail(email2, password);
	}, function(error) {
		var errorCode = error.code;
		var errorMessage = error.message;
		//window.alert(errorMessage);
	});
}

function gerarPassword() {
    return Math.random().toString(36).slice(-10);
}

</script>

<script type="text/javascript"> 
    function sendEmail(email2, password) { 
      Email.send({ 
        Host: "smtp.gmail.com", 
        Username: "gerenciamentofaltas@gmail.com", 
        Password: "gerente456", 
        To: email2, 
        From: "gerenciamentofaltas@gmail.com", 
        Subject: "Senha do aluno", 
        Body: "A sua senha do portal Virtual Aluno é: " +password, 
      }) 
        .then(function (message) { 
          alert("mail sent successfully") 
        }); 
    } 
</script> 