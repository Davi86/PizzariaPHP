<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Atividade Pizza</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
		<!--Import Google Icon Font-->
      	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<!-- Compiled and minified CSS -->
		<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
		<!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      	<!-- Link jQuery -->
		<script src="https://code.jquery.com/jquery-3.3.1.js"integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="crossorigin="anonymous"></script>


		

		<script>
			
				var resultado_pizza = 0;
				var resultado = 0;
				var op1 =0;
				var op2 = 0;
				var op3 = 0;
				var op4 = 0;
				var op5 = 0;
				
				//VAR ADI
					var adi1 = 0;
					var adi2 = 0;
					var adi3 = 0;
					var adi4 = 0;
					var adi5 = 0;
			$(document).ready(function(){

				//ADICIONA
					$('#adiciona1').click(function(){
						adi1 += 1;
						$('#moda').val(""+adi1);
						op1 = document.getElementById("moda").value;
						resultado_pizza++;
						resultado += 12;
						document.getElementById("mostrar").value = "R$ "+resultado;
						document.getElementById("mostrar_pizzas").value = resultado_pizza;
					});
					$('#adiciona2').click(function(){
						adi2 += 1;
						$('#calabresa').val(""+adi2);
						op2 = document.getElementById("calabresa").value;
						resultado_pizza++;
						resultado += 16;
						document.getElementById("mostrar").value = "R$ "+resultado;
						document.getElementById("mostrar_pizzas").value = resultado_pizza;
					});
					$('#adiciona3').click(function(){
						adi3 += 1;
						$('#portuguesa').val(""+adi3);
						op3 = document.getElementById("portuguesa").value;
						resultado_pizza++;
						resultado += 20;
						document.getElementById("mostrar").value = "R$ "+resultado;
						document.getElementById("mostrar_pizzas").value = resultado_pizza;
					});
					$('#adiciona4').click(function(){
						adi4 += 1;
						$('#tres_queijo').val(""+adi4);
						op4 = document.getElementById("tres_queijo").value;
						resultado_pizza++;
						resultado += 22;
						document.getElementById("mostrar").value = "R$ "+resultado;
						document.getElementById("mostrar_pizzas").value = resultado_pizza;
					});
					$('#adiciona5').click(function(){
						adi5 += 1;
						$('#pepperoni').val(""+adi5);
						op5 = document.getElementById("pepperoni").value;
						resultado_pizza++;
						resultado += 18;
						document.getElementById("mostrar").value = "R$ "+resultado;
						document.getElementById("mostrar_pizzas").value = resultado_pizza;
					});

				//REMOVE
					$('#remove1').click(function(){
						if($('#moda').val()!=0){
							resultado_pizza--;
							adi1 -= 1;
							op1 = document.getElementById("moda").value;
							$('#moda').val(""+adi1);
							resultado -= 12;
							document.getElementById("mostrar").value = "R$ "+resultado;
							document.getElementById("mostrar_pizzas").value = resultado_pizza;
						}
					});
					$('#remove2').click(function(){
						if($('#calabresa').val()!=0){
							resultado_pizza--;
							adi2 -= 1;
							op2 = document.getElementById('calabresa').value;
							$('#calabresa').val(""+adi2);
							resultado -= 16;
							document.getElementById("mostrar").value = "R$ "+resultado;
							document.getElementById("mostrar_pizzas").value = resultado_pizza;
						}
					});
					$('#remove3').click(function(){
						if($('#portuguesa').val()!=0){
							resultado_pizza--;
							adi3 -= 1;
							op3 = document.getElementById("portuguesa").value;
							$('#portuguesa').val(""+adi3);
							resultado -= 20;
							document.getElementById("mostrar").value = "R$ "+resultado;
							document.getElementById("mostrar_pizzas").value = resultado_pizza;
						}
					});
					$('#remove4').click(function(){
						if($('#tres_queijo').val()!=0){
							resultado_pizza--;
							adi4 -= 1;
							op4 = document.getElementById("tres_queijo").value;
							$('#tres_queijo').val(""+adi4);
							resultado -= 22;
							document.getElementById("mostrar").value = "R$ "+resultado;
							document.getElementById("mostrar_pizzas").value = resultado_pizza;
						}
					});
					$('#remove5').click(function(){
						if($('#pepperoni').val()!=0){
							resultado_pizza--;
							adi5 -= 1;
							op5 = document.getElementById("pepperoni").value;
							$('#pepperoni').val(""+adi5);
							resultado -= 18;
							document.getElementById("mostrar").value = "R$ "+resultado;
							document.getElementById("mostrar_pizzas").value = resultado_pizza;
						}
					});			
			});

			function confirmar(){

					if (document.getElementById("nome").value == "" || document.getElementById("email").value == "" || document.getElementById("telefone").value == "" || document.getElementById("endereco").value == "" || document.getElementById("numero").value == "" || resultado==0){
						alert("Preencha todos os campos! Inclusive o número de Pizza");
					}else{
						alert("Cadastro realizado com sucesso!");
						for(i=0;i<10;i++){
							document.getElementsByTagName("input")[i].value = "";
						}
							document.getElementById("mostrar").innerHTML = "";
							resultado = 0;
							op1,op2,op3,op4,op5 = 0;
										
							//VAR ADI
								adi1 = 0;
								adi2 = 0;
								adi3 = 0;
								adi4 = 0;
								adi5 = 0;

							resultado_pizza=0;
							
						}

					}	

			function outra_pagina(){
				if (resultado_pizza==0){
					alert("Escolha ao menos uma pizza");
				}else{
					window.location.href="Formulario.php";
				}
			}

		</script>
		
	</head>
	<body style="background-color: grey;">
		
		<?php 
			require_once 'cabecalho.php';
		?>

		<h3 class="center-align white-text">Escolha a sua Pizza:</h3>

		<div class="row">

			<!-- Pizza à moda -->
			<div class="col s4">
			    <div class="card" style="width: 420px;height: 440px;">
			        <div class="card-image">
				        <img src="https://pizzariameurancho.com.br/wp-content/uploads/2016/06/pizza-moda-meu-rancho-galeria-01_vyf4r8.jpg" style="width: 420px;height: 320px;">
				        	<a class="btn-floating waves-effect waves-light red" id="remove1" style="margin-top: -40px;margin-left: 25px;">
							<i class="material-icons">remove</i>
						</a>
			          	<p class="card-title" style="margin-top: 155px; font-size: 25px;"><b>Pizza à moda</b></p>
			          	<p  class="card-title" style="margin-top: 155px;margin-left: 240px; font-size: 25px;"><b>R$ 12,00</b></p>
			          	<a class="btn-floating waves-effect waves-light red" id="adiciona1" style="margin-top: -40px;margin-left: 280px;">
							<i class="material-icons">add</i>
						</a>
			        </div>
			        <center>
			        <div class="card-content orange" style="margin-top: -40px;">
			        	<label style="font-size: 35px;" class="white-text"><b>Quantidade:</b><br>
			        		<input type="text" class="white-text" id="moda" style="width: 100px; height: 30px; font-size: 30px;text-align: center;">
			        	</label>
			        </div>
			        </center>
			    </div>
		    </div>

		   <!-- Pizza Calabresa -->
			<div class="col s4">
			    <div class="card" style="width: 420px;height: 440px;">
			        <div class="card-image">
				        <img src="http://blog.novasafra.com.br/wp-content/uploads/2016/01/accb7d_37d37d9f1001e88384dafc6e5cc60c4f.jpg_1024.jpg" style="width: 420px;height: 320px;">
				        	<a class="btn-floating waves-effect waves-light red" id="remove2" style="margin-top: -40px;margin-left: 25px;">
							<i class="material-icons">remove</i>
						</a>
			          	<p class="card-title" style="margin-top: 155px; font-size: 25px;"><b>Pizza Calabresa</b></p>
			          	<p  class="card-title" style="margin-top: 155px;margin-left: 240px; font-size: 25px;"><b>R$ 16,00</b></p>
			          	<a class="btn-floating waves-effect waves-light red" id="adiciona2" style="margin-top: -40px;margin-left: 280px;">
							<i class="material-icons">add</i>
						</a>
			        </div>
			        <center>
			        <div class="card-content orange" style="margin-top: -40px;">
			        	<label style="font-size: 35px;" class="white-text"><b>Quantidade:</b><br>
			        		<input type="text" class="white-text" id="calabresa" style="width: 100px; height: 30px; font-size: 30px;text-align: center;">
			        	</label>
			        </div>
			        </center>
			    </div>
		    </div>

		     <!-- Pizza Portuguesa -->
			<div class="col s4">
			    <div class="card" style="width: 420px;height: 440px;">
			        <div class="card-image">
				        <img src="https://pizzariameurancho.com.br/wp-content/uploads/2016/06/pizza-portuguesa_min.jpg" style="width: 420px;height: 320px;">
				        	<a class="btn-floating waves-effect waves-light red" id="remove3" style="margin-top: -40px;margin-left: 25px;">
							<i class="material-icons">remove</i>
						</a>
			          	<p class="card-title" style="margin-top: 155px; font-size: 25px;"><b>Pizza Portuguesa</b></p>
			          	<p  class="card-title" style="margin-top: 155px;margin-left: 240px; font-size: 25px;"><b>R$ 20,00</b></p>
			          	<a class="btn-floating waves-effect waves-light red" id="adiciona3" style="margin-top: -40px;margin-left: 280px;">
							<i class="material-icons">add</i>
						</a>
			        </div>
			        <center>
			        <div class="card-content orange" style="margin-top: -40px;">
			        	<label style="font-size: 35px;" class="white-text"><b>Quantidade:</b><br>
			        		<input type="text" class="white-text" id="portuguesa" style="width: 100px; height: 30px; font-size: 30px;text-align: center;">
			        	</label>
			        </div>
			        </center>
			    </div>
		    </div>

		</div><!-- Fechamento da ROW -->

		<center>
		<div class="row">
			<div class="col s1"></div>
			<!-- Pizza Três Queijo -->
			<div class="col s5">
			    <div class="card" style="width: 420px;height: 440px;">
			        <div class="card-image">
				        <img src="https://pizzariameurancho.com.br/wp-content/uploads/2016/06/pizza-moda-meu-rancho-galeria-01_vyf4r8.jpg" style="width: 420px;height: 320px;">
				        	<a class="btn-floating waves-effect waves-light red" id="remove4" style="margin-top: -40px;margin-left: 25px;">
							<i class="material-icons">remove</i>
						</a>
			          	<p class="card-title" style="margin-top: 155px; font-size: 25px;"><b>Pizza Três Queijo</b></p>
			          	<p  class="card-title" style="margin-top: 155px;margin-left: 240px; font-size: 25px;"><b>R$ 22,00</b></p>
			          	<a class="btn-floating waves-effect waves-light red" id="adiciona4" style="margin-top: -40px;margin-left: 280px;">
							<i class="material-icons">add</i>
						</a>
			        </div>
			        <center>
			        <div class="card-content orange" style="margin-top: -40px;">
			        	<label style="font-size: 35px;" class="white-text"><b>Quantidade:</b><br>
			        		<input type="text" class="white-text" id="tres_queijo" style="width: 100px; height: 30px; font-size: 30px;text-align: center;">
			        	</label>
			        </div>
			        </center>
			    </div>
		    </div>

		    <!-- Pizza Pepperoni -->
			<div class="col s5">
			    <div class="card" style="width: 420px;height: 440px;">
			        <div class="card-image">
				        <img src="https://www.360bistrobar.com/wp-content/uploads/sites/16/2017/02/pepperoni-pizza.jpg" style="width: 420px;height: 320px;">
				        	<a class="btn-floating waves-effect waves-light red" id="remove5" style="margin-top: -40px;margin-left: 25px;">
							<i class="material-icons">remove</i>
						</a>
			          	<p class="card-title" style="margin-top: 155px; font-size: 25px;"><b>Pizza de Pepperoni</b></p>
			          	<p  class="card-title" style="margin-top: 155px;margin-left: 240px; font-size: 25px;"><b>R$ 18,00</b></p>
			          	<a class="btn-floating waves-effect waves-light red" id="adiciona5" style="margin-top: -40px;margin-left: 280px;">
							<i class="material-icons">add</i>
						</a>
			        </div>
			        <center>
			        <div class="card-content orange" style="margin-top: -40px;">
			        	<label style="font-size: 35px;" class="white-text"><b>Quantidade:</b><br>
			        		<input type="text" class="white-text" id="pepperoni" style="width: 100px; height: 30px; font-size: 30px;text-align: center;">
			        	</label>
			        </div>
			        </center>
			    </div>
		    </div>
		    <div class="col s1"></div>
		    </center>
		</div><!-- Fechamento da ROW -->
		<br><br><br>
		<div class="row">
			<center>
				<div class="col s6" style="background: #0a3d62;">
					<label style="font-size: 35px;" class="white-text"><b>Valor Total:</b><br>
						<input type="text" class="white-text" id="mostrar" style="width: 100px; height: 30px; font-size: 30px;text-align: center;">
					</label>
				</div>
				<div class="col s6" style="background: #b71540;">
					<label style="font-size: 35px;" class="white-text"><b>Total de Pizzas:</b><br>
						<input type="text" class="white-text" id="mostrar_pizzas" style="width: 100px; height: 30px; font-size: 30px;text-align: center;">
					</label>
					
				</div>
			</center>
		</div>
		<center>
			<button class="btn" onclick="outra_pagina()">Continuar</button>
		</center><br><br><br><br>

		<?php
			require_once 'footer.php';
		?>

	</body>
</html>