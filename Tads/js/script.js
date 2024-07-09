
 var firebaseConfig = {
  apiKey: "AIzaSyDdOYvMAl6Si2L9YtoZBswpnJXBHxOJFRY",
  authDomain: "gerenciadorfrequencia.firebaseapp.com",
  databaseURL: "https://gerenciadorfrequencia.firebaseio.com",
  projectId: "gerenciadorfrequencia",
  storageBucket: "gerenciadorfrequencia.appspot.com",
  messagingSenderId: "565291545010",
  appId: "1:565291545010:web:d747592ad5cfc372d274ab",
  measurementId: "G-3WK1M46SEG"
};
// Initialize Firebase
if (!firebase.apps.length) {
  firebase.initializeApp(firebaseConfig);
} 

   var var_lista = document.getElementById("div_lista");
   var dados_professores = "";
   var db = firebaseRef = firebase.database().ref().child("Professores");
   db.on('value',function(snapshot){
      var professores = snapshot.val();
      dados_professores = "<table class='table table-striped'>";
      dados_professores = dados_professores  + "<thead><tr><th>Nome</th><th>CPF</th><th>Email</th><th>Editar</th><th>Excluir</th></tr></thead> <tbody>";
      for(i in professores) {
        console.log(i);
        dados_professores = dados_professores + "<tr class='ropdown-menu'><td>"+professores[i].nome+"</td><td>"+professores[i].cpf+"</td ><td>"+professores[i].email+"</td><td style='display:none;' 'id='identificador' >"+i+" </td> <td> <a  onclick="+""+"editarProf('"+i+"'); class='btn btn-warning'> Editar</a></td><td> <a  onclick="+""+"deletProf('"+i+"'); class='btn btn-danger'> Apagar</a></td> </tr>";
      }
        dados_professores =  dados_professores + "</tbody></table>";
   
        var_lista.innerHTML = dados_professores;
   })

   
   function editarProf(teste){
    const fb = firebase.database().ref();


      email = document.getElementById("email").value;
      cpf = document.getElementById("cpf").value;
      nome = document.getElementById("nome").value;

      data={email,cpf,nome}
      fb.child('Professores/'+teste).update(data);
      console.log(teste);
      window.alert("Professor editado com sucesso!")	
  }
  function deletProf(teste){
    const fb = firebase.database().ref();
    fb.child('Professores/'+teste).remove()
    window.alert("Professor deletado com sucesso!")	
  }

   
  var var_lista_turma = document.getElementById("div_listar_turmas");
   var dados_turma = "";
   var db2 = firebaseRef = firebase.database().ref().child("Turma");
   db2.on('value',function(snapshot){
      var turmas = snapshot.val();
      dados_turma = "<table class='table table-striped'>";
      dados_turma = dados_turma  + "<thead><tr><th>Nome</th><th>Semestre</th><th>Ano</th><th>Professor</th><th>Editar</th><th>Excluir</th></tr></thead> <tbody>";
      for(i in turmas) {
        dados_turma = dados_turma + "<tr class='ropdown-menu'><td>"+turmas[i].nome+"</td><td>"+turmas[i].semestre+"</td><td>"+turmas[i].ano+"</td><td>"+turmas[i].professor+"<td style='display:none;' id='identificador' >"+i+" </td> <td> <a  onclick="+""+"editarTurm('"+i+"'); class='btn btn-warning'> Editar</a></td><td> <a  onclick="+""+"deletTurm('"+i+"'); class='btn btn-danger'> Apagar</a></td> </tr>  " ;
      }
      dados_turma =  dados_turma + "</tbody></table>";
      var_lista_turma.innerHTML = dados_turma;
   })
   function editarTurm(teste){
    const fb = firebase.database().ref();


      semestre = document.getElementById("semestre").value;
      ano = document.getElementById("ano").value;
      nome = document.getElementById("nome").value;
      professor = document.getElementById("professor").value;

      data={ano,semestre,nome,professor}
      fb.child('Turma/'+teste).update(data);
      console.log(teste);
      window.alert("Turma editada com sucesso!")	
  }
  function deletTurm(teste){
    const fb = firebase.database().ref();
    fb.child('Turma/'+teste).remove()
  }

  var var_lista2 = document.getElementById("div_listar_alunos");
   var dados2 = "";
   var db3 = firebaseRef = firebase.database().ref().child("Alunos");
   db3.on('value',function(snapshot){
      var adicionado = snapshot.val();
      dados_aluno = "<table class='table table-striped'>";
      dados_aluno = dados_aluno  + "<thead><tr><th>Nome</th><th>CPF</th><th>Email</th><th>Matricula</th><th>Editar</th><th>Excluir</th></tr></thead> <tbody>";
      for(i in adicionado) {
        dados_aluno = dados_aluno + "<tr class='ropdown-menu'><td>"+adicionado[i].nome+"</td><td>"+adicionado[i].cpf+"</td><td>"+adicionado[i].Email+"</td> <td> "+adicionado[i].matricula+"</td> <td> <a  onclick="+""+"editarAluno('"+i+"'); class='btn btn-warning'> Editar</a></td><td> <a  onclick="+""+"deletAluno('"+i+"'); class='btn btn-danger'> Apagar</a></td> </tr>  "  ;
      }
      dados_aluno = dados_aluno + "</tbody></table>";
     var_lista2.innerHTML = dados_aluno ;
   })
   
   function editarAluno(teste){
    const fb = firebase.database().ref();

      Email = document.getElementById("email").value;
      nome = document.getElementById("nome").value;
      matricula = document.getElementById("matricula").value;
      cpf = document.getElementById("cpf").value;

      data={cpf,Email,nome,matricula}
      fb.child('Alunos/'+teste).update(data);
      console.log(teste);
      window.alert("Aluno editado com sucesso!")	
  }
  function deletAluno(teste){
    const fb = firebase.database().ref();
    fb.child('Alunos/'+teste).remove();
    window.alert("Aluno deletado com sucesso!")	
  }



  var selectTurmas = document.getElementById("turma");
   var dadosT = "<select><option></option>";
   var dbTurma = firebaseRef = firebase.database().ref().child("Turma");
   dbTurma.on('value',function(snapshot){
      var turmas = snapshot.val();
      for(i in turmas) {
        dadosT = dadosT + "<option>"+turmas[i].nome+"</option>";
      }
      dadosT = dadosT+ "</select>";
      selectTurmas.innerHTML = dadosT;
   })
  
   var selectTurmas2 = document.getElementById("turma2");
   var dadosT2 = "<select><option></option>";
   var dbTurma2 = firebaseRef = firebase.database().ref().child("Turma");
   dbTurma2.on('value',function(snapshot){
      var turmas2 = snapshot.val();
      for(i in turmas2) {
        dadosT2 = dadosT2 + "<option>"+turmas2[i].nome+"</option>";
      }
      dadosT2 = dadosT2+ "</select>";
      selectTurmas2.innerHTML = dadosT2;
   })


   var selectAlunos = document.getElementById("selectAlunos");
   var dadosAlunos = "<select><option></option>";
   var dbAlunos01 = firebaseRef = firebase.database().ref().child("Alunos");
   dbAlunos01.once('value',function(snapshot){
      var Alunos7 = snapshot.val();
      for(i in Alunos7) {
        dadosAlunos = dadosAlunos + "<option>"+Alunos7[i].nome+"</option>";
      }
      dadosAlunos = dadosAlunos+ "</select>";
      selectAlunos.innerHTML = dadosAlunos;
   })

  var selectProfessores = document.getElementById("professor");
   var dadosP = "<select><option></option>";
   var dbProfessor = firebaseRef = firebase.database().ref().child("Professores");
   dbProfessor.on('value',function(snapshot){
      var professores = snapshot.val();
      for(i in professores) {
        dadosP = dadosP + "<option>"+professores[i].nome+"</option>";
      }
      dadosP = dadosP+ "</select>";
      selectProfessores.innerHTML = dadosP;
   })
$(document).ready(function(){
    $("#cpf").mask("000.000.000-00", { placeholder: "___.___.___-__"});
});



function validar(){
    var cpf = $("#cpf").cleanVal();
    if (cpf.length != 11) {
        alert("Digite 11 digitos para o CPF!")
    }
}

function salvarF(){

  data = document.getElementById("data").value;
  turma = document.getElementById("turma").value;
  var contador = 0;
  var contador2 = 0;
  var adc = {};
  var nome_aluno = [];
  freq = [];
  var  db9 = firebaseRef =  firebase.database().ref().child("Alunos");
  tabela = document.getElementById("tabelaFreq");
  for (i=0; i < tabela.rows.length; i++){
    colunas = tabela.rows[i].childNodes;
    for (j=0; j < colunas.length; j++){
      elementos = colunas[j].childNodes;
      //console.log(elementos)
      for (l=0; l < elementos.length; l++){
       //console.log(elementos[l].parentElement)
        if(elementos[l].parentElement.id == "nomeAluno"){
          //console.log(elementos[l].parentElement)
          nome_aluno[contador] = elementos[l].parentElement.innerText;
          contador++;
        }
        if (elementos[l].type == "select-one"){
          indexEscolhido = elementos[l].options.selectedIndex;
          freq[contador2] = elementos[l].value;
          contador2++;
        }
      }
    }
  }
  db9.once('value',function(snapshot){
    var alunos = snapshot.val();
    for(i in alunos) {
      for(j in nome_aluno){
        //console.log("Nome: " +nome_aluno[j]+ " frequencia: " +freq[j])
        if(alunos[i].nome == nome_aluno[j] && freq[j] != ""){
          adc[data] = freq[j];
          //console.log("Entrou ",nome_aluno[j] )
          db9.child(i+"/frequencia/"+turma+"/").update(adc)
        }
      }	
    }
  })
  window.alert("Frequencia salva com sucesso!")	
}


function BuscarF(){
  turma = document.getElementById("turma").value;
  data = document.getElementById("data").value;
  if(document.getElementById("data").value == '' || turma == ''){
    window.alert("Prencha todos os campos!");
  }else{
    var var_lista_freq= document.getElementById("listar_frequencia");
    var dados = "<table id='tabelaFreq' class='table table-striped'>";
    dados = dados + "<thead><tr><th>Nome</th><th>Situação</th><th>Excluir</th></thead><tbody>";
    var db9 = firebaseRef =  firebase.database().ref().child("Alunos");
    db9.once('value',function(snapshot){
      var alunos = snapshot.val();
      for(i in alunos) {		
        for(j in alunos[i].frequencia) {
            if(j == turma){              
                dados = dados + "<tr class='ropdown-menu'><td id='nomeAluno'>"+alunos[i].nome+"</td><td><select id='selectStatus' class='form-control'><option></option><option>Presente</option><option>Falta</option></select></td><td> <a  class='btn btn-danger'>Excluir</a></td> </tr>";
            }
        }
      }
      dados = dados + "</tbody><tfoot><tr><td></td><td></td><td><a class='btn btn-success' onclick='salvarF()'>Salvar</a></td></tr></tfoot></table>";
      var_lista_freq.innerHTML = dados;
    })
  }
}

function deletFreq(dia,materia, chave){
  console.log(dia+"  "+chave+"  "+materia)
  const fb = firebase.database().ref();
  fb.child('Alunos/'+chave+"/frequencia/"+materia+"/"+dia).remove()
}



function AdicionarTurma(){
  const fb2 = firebase.database().ref();
  turma = document.getElementById("turma2").value;
  nome = document.getElementById("selectAlunos").value;
  console.log(turma, nome)
  if(nome == ''){
    window.alert("Escolha um(a) aluno(a)");
    return 0;
  }
  if(turma == ''){
    window.alert("Escolha uma turma");
    return 0;
  }
  var data= {}
  var dbAlunos2 = firebaseRef = firebase.database().ref().child("Alunos");
  dbAlunos2.once('value',function(snapshot){
    var alunos2 = snapshot.val();
    for(i in alunos2) {
      if(alunos2[i].nome == nome){
        data[turma]={"XX-XX" : "Vazio"}
        //window.alert("data");
        fb2.child('Alunos/'+i+"/frequencia/").update(data);
      }
    }
  })
  window.alert("Turma salva com sucesso!")
}

