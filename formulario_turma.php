<body class ="">


<form method="POST">
<div class="container">
	<div class="row">
		
		<div class="col-8 form-group">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome" class="form-control" required/>
		</div>
		<div class="col-4 form-group">
			<label for="semestre">Semestre:</label>
			<input type="text" name="semestre" id="semestre" class="form-control" required/>
		</div>
	</div>
	<div class="row">
		<div class="col-2 form-group">
			<label for="ano">Ano:</label>
			<input type="int" name="ano" id="ano" class="form-control" required/>
		</div>
		
		<div class="col-6 form-group">
			<label for="professor">Professor:</label>
			<select type="text" name="professor" id="professor" class="form-control" required>
				<option value="exemplo">Exemplo</option>
			</select>
			
			<!--<select id="professor" name="professor[]" multiple="multiple" class="form-control 
            {{ ($errors->get('professor') != null) ? 'is-invalid' : '' }}" >
            <small class="text-danger">{{utf8_encode($errors->first("professor"))}}</small>

                @foreach ($disciplinas as $d)

                        <option value="{{ $d->id }}">
                            {{$d->descricao}} </option>

                @endforeach
            </select>
			-->
		</div>
		
		
		<div class="col-4 form-group">
			<input type="hidden" name="id" value="" />
			<button onclick="loginT()" id="login" type="submit"  class="btn btn-success botons btn-block">Salvar</button>
		</div>
		
	</div>
		
</div>


</form>
	
</body>


<script>

	 function loginT(){
		var teste = ValidarTurma();
		if (teste == 1){
			return;
		}
	  nome = document.getElementById("nome").value;
	  semestre = document.getElementById("semestre").value;
	  ano = document.getElementById("ano").value;
	  professor = document.getElementById("professor").value;
	  
	  
	  var turmaDB = firebase.database().ref("Turma");
	  var turma = { "nome": nome, "semestre": semestre, "ano":ano, "professor":professor};
	  turmaDB.push(turma);
	  window.alert("Turma criada com sucesso!")	
	 
	  document.getElementById("nome").value = "";
	  document.getElementById("semestre").value = "";
	  document.getElementById("ano").value = "";
	  document.getElementById("professor").value = "";
	}
	function ValidarTurma(){
		console.log("entrou no validar")
		var semestre = document.getElementById("semestre").value;
		var ano = document.getElementById("ano").value;
		var professor = document.getElementById("professor").value;
		var nome = document.getElementById("nome").value;
		
		
		if(nome == ""){
			alert("Campo Nome está vazio")
			return 1;
		}


		if (semestre.length == 0) {
			alert("digite o semestre")
			return 1;
		}
		if (ano.length == 0) {
			alert("digite o ano")
			return 1;
		}

		if(professor == ""){
			alert("Insira o professsor")
			return 1;
		}
		return 0;
}
</script>