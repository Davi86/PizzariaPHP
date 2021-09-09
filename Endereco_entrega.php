<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Formulário</title>
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

		<!-- Link Recaptcha -->
		<script src="https://www.google.com/recaptcha/api.js"></script>
	   	<script src="https://www.google.com/recaptcha/api.js?h1=pt-BR"></script>


		<script type="text/javascript">
		$(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
	                    } //end if.
	                    else {
	                        //cep é inválido.
	                        limpa_formulário_cep();
	                        alert("Formato de CEP inválido.");
	                    }
		                } //end if.
		                else {
		                    //cep sem valor, limpa formulário.
		                    limpa_formulário_cep();
		                    alert('Algum Campo está Vazio, verifique se você preencheu tudo corretamente!')
		                }
	            });
	        });

		function confirm(){
	var nome = document.getElementById('nome').value;
	var telefone = document.getElementById('telefone').value;
	var rua = document.getElementById('rua').value;
	var num = document.getElementById('num').value;
	var cidade = document.getElementById('cidade').value;
	var bairro = document.getElementById('bairro').value;

	var cpf = document.getElementById('cpf').value;
	var cep = document.getElementById('cep').value;
	localStorage.nome = '';
	localStorage.telefone = '';
	localStorage.rua = '';
	localStorage.num = '';
	localStorage.cidade = '';
	localStorage.bairro = '';
	localStorage.cpf = '';
	localStorage.cep = '';



	localStorage.nome = nome;
	localStorage.telefone = telefone;
	localStorage.rua = rua;
	localStorage.num = num;
	localStorage.cidade = cidade;
	localStorage.bairro = bairro;
	localStorage.cpf = cpf;
	localStorage.cep = cep;
}


function Confirmar_compra(){
	document.getElementById('show').innerHTML = "<p style='font-size: 40px; color: white;'>Sua compra foi realizada com Sucesso, <b>"+localStorage.nome+
					"</b>!</p><br> <p style='font-size:25px;color:white;'>Enviaremos a pizza para o número <b>"+localStorage.num+"</b>, da rua <b>"+localStorage.rua+"</b>, do bairro "+localStorage.bairro+
					", da cidade de <b>"+localStorage.cidade+"</b>, do CEP <b>"+localStorage.cep+"</b></p> <p style='font-size:25px;color:white;'>Qualquer coisa te contatamos no número <b>"+localStorage.telefone+
					"</b>.<br> Muito Obrigado pela compra e aproveite essa deliciosa pizza!</p><br> <p style='font-size:25px;color:white;'>CPF: <b>"+localStorage.cpf+"<br></p>";
}
	</script>


	<style type="text/css">
		input[type=number]::-webkit-inner-spin-button, 
		input[type=number]::-webkit-outer-spin-button { 
		  -webkit-appearance: none; 
		  margin: 0; 
		}
	</style>
	</head>

	<body style="background-color: grey;">

		<?php 
			require_once 'cabecalho.php';
		?>
		<br><br><br>

		  <h3 class="center-align white-text">Preencha o Formulário:</h3><br><br><br>


		<div>
		    <form class="col s12" style="background: #2d3436" action="Cadastro_validado.php" method="post"><br><br><br><br>
		      	<div class="row">
		      		<div class="col s3"></div>
		      		<div class="input-field col s3">
			       		<input id="nome" type="text" name="nome" class="white-text" placeholder="Nome">
			        </div>
			       	<div class="input-field col s3">
		         		<input id="cpf" type="number" name="cpf" class="white-text" placeholder="CPF" required>
		        	</div>
			        <div class="col s3"></div>
			    </div>

			    <div class="row">
		      		<div class="col s3"></div>
		      		<div class="input-field col s3">
			       		<input id="telefone" type="number" name="telefone" class="white-text" placeholder="Telefone" required>
			        </div>
			       	<div class="input-field col s3">
		         		<input id="cep" type="number" name="cep" class="white-text" placeholder="CEP" required>
		        	</div>
			        <div class="col s3"></div>
			    </div>

			    <div class="row">
		      		<div class="col s3"></div>
		      		<div class="input-field col s3">
			       		<input id="rua" type="text" name="rua" class="white-text" placeholder="Rua" required>
			        </div>
			       	<div class="input-field col s3">
		         		<input id="num" type="number" name="num" class="white-text" placeholder="Número Residecial" required>
		        	</div>
			        <div class="col s3"></div>
			    </div>

			    <div class="row">
			    	<div class="col s3"></div>
			    	<div class="col s3">
			    		<input id="cidade" type="text" name="cidade" class="white-text" placeholder="Cidade">
			    	</div>
			    	<div class="col s3">
			    		<input id="bairro" type="text" name="bairro" class="white-text" placeholder="Bairro">
			    	</div>
			    	<div class="col s3"></div>
			    </div><br><br>

			    <div class="row center-align">
					<div class="col s3"></div>
					<div class="col s6">
						<h4 class="white-text">Forma de Pagamento:</h4><br>
						<label>
					        <input class="with-gap" name="cartao" type="radio" required />
					        <span class="white-text" style="font-size: 23px;">Crédito</span>
					    </label>
					    <label>
					        <input class="with-gap" name="cartao" type="radio" required/>
					        <span class="white-text" style="font-size: 23px;">Débito</span>
					    </label>
					    <label>
					        <input class="with-gap" name="cartao" type="radio" required/>
					        <span class="white-text" style="font-size: 23px;">Dinheiro</span>
					    </label>
					</div>
					<div class="col s3"></div>
				</div><br><br>

				<div class="row">
					<center>
        				<div style="margin: 10px;" class="g-recaptcha col s12" data-sitekey="6LcePAATAAAAAGPRWgx90814DTjgt5sXnNbV5WaW"></div>
        			</center>
    			 </div>

			    <div class="center-align">
					<input class="waves-effect waves-light btn" type="submit" value="Confirmar Compra" onclick="confirm()">
					<br><br><br><br>
				</div>
			</form>
		</div>
		<br><br><br><br><br><br><br><br>


		<?php
			require_once 'footer.php';
		?>
	</body>
</html>