
				var resultado_pizza = 0;
				var resultado = 0;
				var op1,op2,op3,op4,op5 = 0;
				
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
						$('#calabresa').val(""+adi1);
						op2 = document.getElementById("calabresa").value*16;
						resultado_pizza++;
						resultado += op1;
						document.getElementById("mostrar").value = "R$ "+resultado*16;
						document.getElementById("mostrar_pizzas").value = resultado_pizza;
					});
					$('#adiciona2').click(function(){
						adi2 += 1;
						$('#calabresa').val(""+adi2);
						op2 = document.getElementById("calabresa").value*18;
						resultado_pizza++;
						resultado += op2;
						document.getElementById("mostrar").value = "R$ "+resultado;
						document.getElementById("mostrar_pizzas").value = resultado_pizza;
					});
					$('#adiciona3').click(function(){
						adi3 += 1;
						$('#portuguesa').val(""+adi3);
						op3 = document.getElementById("portuguesa").value*20;
						resultado_pizza++;
						resultado = op3;
						document.getElementById("mostrar").value = "R$ "+resultado;
						document.getElementById("mostrar_pizzas").value = resultado_pizza;
					});
					$('#adiciona4').click(function(){
						adi4 += 1;
						$('#tres_queijo').val(""+adi4);
						op4 = document.getElementById("tres_queijo").value;
						resultado_pizza++;
						resultado += op4*22;
						document.getElementById("mostrar").value = "R$ "+resultado;
						document.getElementById("mostrar_pizzas").value = resultado_pizza;
					});
					$('#adiciona5').click(function(){
						adi5 += 1;
						$('#pepperoni').val(""+adi5);
						op5 = document.getElementById("pepperoni").value*18;
						resultado_pizza++;
						resultado = op5;
						document.getElementById("mostrar").value = "R$ "+resultado;
						document.getElementById("mostrar_pizzas").value = resultado_pizza;
					});

				//REMOVE
					$('#remove1').click(function(){
						if($('#moda').val()!=0){
							resultado_pizza--;
							adi1 -= 1;
							op1 = document.getElementById("moda").value*12;
							$('#moda').val(""+adi1);
							resultado = op1-12;
							document.getElementById("mostrar").value = "R$ "+resultado;
							document.getElementById("mostrar_pizzas").value = resultado_pizza;
						}
					});
					$('#remove2').click(function(){
						if($('#calabresa').val()!=0){
							resultado_pizza--;
							adi2 -= 1;
							op2 = document.getElementById('calabresa').value*16;
							$('#calabresa').val(""+adi2);
							resultado = op2-16;
							document.getElementById("mostrar").value = "R$ "+resultado;
							document.getElementById("mostrar_pizzas").value = resultado_pizza;
						}
					});
					$('#remove3').click(function(){
						if($('#portuguesa').val()!=0){
							resultado_pizza--;
							adi3 -= 1;
							op3 = document.getElementById("portuguesa").value*20;
							$('#portuguesa').val(""+adi3);
							resultado = op3-20;
							document.getElementById("mostrar").value = "R$ "+resultado;
							document.getElementById("mostrar_pizzas").value = resultado_pizza;
						}
					});
					$('#remove4').click(function(){
						if($('#tres_queijo').val()!=0){
							resultado_pizza--;
							adi4 -= 1;
							op4 = document.getElementById("tres_queijo").value*22;
							$('#tres_queijo').val(""+adi4);
							resultado = op4-22;
							document.getElementById("mostrar").value = "R$ "+resultado;
							document.getElementById("mostrar_pizzas").value = resultado_pizza;
						}
					});
					$('#remove5').click(function(){
						if($('#pepperoni').val()!=0){
							resultado_pizza--;
							adi5 -= 1;
							op5 = document.getElementById("pepperoni").value*18;
							$('#pepperoni').val(""+adi5);
							resultado = op5-18;
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
