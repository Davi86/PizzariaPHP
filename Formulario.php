<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<!--Import Google Icon Font-->
      	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<!-- Compiled and minified CSS -->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      	<!-- Link jQuery -->
		<script src="https://code.jquery.com/jquery-3.3.1.js"integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="crossorigin="anonymous"></script>

		<script>
			function isEmail(email_user){
				var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

				return regex.test(email_user);
			}

			function cadastrar(){
				var email2 = document.getElementById('email2').value;
				var senha2 = document.getElementById('senha2').value;
				localStorage.email = email2;
				localStorage.senha = senha2; 

				if (localStorage.email == "" || localStorage.senha ==""){
					alert('Campos Vazios! Preencha todos os campos!');
				}else{
					alert('Cadastrado com Sucesso!');
					localStorage.email = email2;
					localStorage.senha = senha2;
				}
			}

			function validar(){
				var email = document.getElementById('email').value;
				var senha = document.getElementById('senha').value;

				if (email == "" || senha == ""){
					alert('Campos Vazios! Preencha todos os campos!');
				}else if(localStorage.email != email || localStorage.senha != senha){
					alert('Email ou senha incorretos!');
				}else{
					location.href = "Endereco_entrega.php";
				}
			};

		</script>
	</head>
	<body style="background-color: grey;">

		<?php 
			require_once 'cabecalho.php';
		?>
		<br><br><br>


		<div class="row">
			<div class="col s6">
				<form style="background: #2d3436;border-right: 5px outset white;">
		      	<div class="row">
		      		 <h3 class="center-align white-text">Faça o login:</h3>
		      		<br><br><br><br>
		      		<div class="col s4"></div>
		      		<div class="input-field col s4">
			       		<input id="email" type="email" name="email" class="white-text validate" placeholder="Email">
			        </div>
		        	<div class="col s4"></div>
		      	</div>
			    <div class="row">
			    	<div class="col s4"></div>
			       	<div class="input-field col s4">
		         		<input id="senha" type="password" name="senha" class="white-text" placeholder="Senha">
		        	</div>
			        <div class="col s4"></div>
			      </div>
			      <br><br>
			      <div class="center-align">
					<input class="waves-effect waves-light btn" type="button" value="Logar" onclick="isEmail(),validar()">
					<br><br><br><br><br><br><br><br>
				</div>
			</form>
			</div>
				<div class="col s6">
					<form style="background: #2d3436;margin-left: -25px;">
			      	<div class="row">
			      		 <h3 class="center-align white-text">Faça o Cadastro:</h3>
			      		<br><br><br><br>
			      		<div class="col s4"></div>
			      		<div class="input-field col s4">
				       		<input id="email2" type="email" class="white-text validate" placeholder="Email">
				        </div>
			        	<div class="col s4"></div>
			      	</div>
				    <div class="row">
				    	<div class="col s4"></div>
				       	<div class="input-field col s4">
			         		<input id="senha2" type="password" class="white-text" placeholder="Senha">
			        	</div>
				        <div class="col s4"></div>
				      </div>
				      
				      <br><br>
				      <div class="center-align">
					<input class="waves-effect waves-light btn" value="Cadastrar" type="submit" onclick="isEmail(),cadastrar()">
						<br><br><br><br><br><br><br><br>
					</div>
					</form>
				</div>	   
		</div>

		<?php
			require_once 'footer.php';
		?>
	</body>
</html>