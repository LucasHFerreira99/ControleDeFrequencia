<!DOCTYPE html>
<html>
	<head>
		<title> TADS </title>
		<link rel="stylesheet" href="css/custom-drawer1.css" />
		<link rel="stylesheet" href="css/custom1.css" />
		
		<link rel="stylesheet" href="css/fa.css" />
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/multiple-select.css" />
		
		<script src="js/jquery.js"></script>
		<script src="js/jquery.mask.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/multiple-select.js"></script>
		
	</head>
	
	
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<body class="">
		<div class="wrapper ">
			<div class="sidebar ">
				<a href="cadastros.php"></i><h2>Menu</h2></a>
				<ul>
					<li><a href="professor.php"><i class="fas fa-chalkboard-teacher"></i>Professor</a></li>
					<li><a href="turma.php"><i class="fas fa-users"></i>Turma</a></li>
					<li><a href="aluno.php"><i class="fas fa-user-graduate"></i>Aluno</a></li>
					<li><a href="frequencia.php"><i class="fas fa-calendar"></i>Frequência</a></li>
				</ul> 
				<div class="social_media">
					<a href="index.php"><i class="fas fa-sign-out-alt"> Sair</i></a>
				</div>
			</div>
			<div class="main_content ">
				<div class="header">Cadastro de Professor</div>  
				<div class="info ">
					<?php
						include_once("formulario_professor.php");
					?>
				</div>
				<div class="header">Lista de Professor</div>  
				<div id="info">
					<?php
						include_once("listagem_professor.php");
					?>
				</div>
			</div>
		</div>
	<script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.0/firebase.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-auth.js"></script>
	<script src="js/script.js"></script>
	</body>		
</html>
