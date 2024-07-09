<!DOCTYPE html>
<html>
	
	<head>
		<title> TADS </title>
		<link rel="stylesheet" href="css/custom1.css" />
		<link rel="stylesheet" href="css/custom-drawer1.css" />
		<link rel="stylesheet" href="css/fa.css" />
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/multiple-select.css" />
		
		<script src="js/jquery.js"></script>
		<script src="js/jquery.mask.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/multiple-select.js"></script>
	</head>
	
	
		
	<body >
		<div class="container">
			<?php
				include_once("Inicio.php");
				
			?>
		</div>
	<script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.0/firebase.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-auth.js"></script>
	<script src="/__/firebase/8.1.1/firebase-database.js"></script>
    <script src="/__/firebase/init.js"></script>
	<script src="js/script.js"></script>
	
	</body>
		
	

</html>

<script type="text/javascript">
	$(document).ready(function(){
		$("#cpf").mask("999.999.999-99");
	});
