<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Finalização</title>
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

		<script src="java2.js"></script>

		<script type="text/javascript">

			$(document).ready(function(){
			    $('#btnPDF').click(function() {
			      savePDF(document.querySelector('#geraPDF'));
			    });

			    document.getElementById('show2').InnerHTML = "<p style='font-size: 40px; color: white;'>Sua compra foi realizada com Sucesso, <b>"+localStorage.nome+
					"</b>!</p><br> <p style='font-size:25px;color:white;'>Enviaremos a pizza para o número <b>"+localStorage.num+"</b>, da rua <b>"+localStorage.rua+"</b>, do bairro "+localStorage.bairro+
					", da cidade de <b>"+localStorage.cidade+"</b>, do CEP <b>"+localStorage.cep+"</b></p> <p style='font-size:25px;color:white;'>Qualquer coisa te contatamos no número <b>"+localStorage.telefone+
					"</b>.<br> Muito Obrigado pela compra e aproveite essa deliciosa pizza!</p><br> <p style='font-size:25px;color:white;'>CPF: <b>"+localStorage.cpf+"</p>";
			});
			  
			function savePDF(codigoHTML) {
			  var doc = new jsPDF('portrait', 'pt', 'a4'),
			      data = new Date();
			  margins = {
			    top: 60,
			    bottom: 60,
			    left: 60,
			    width: 1000
			  };
			  doc.fromHTML(codigoHTML,
			               margins.left, // x coord
			               margins.top, { pagesplit: true },
			               function(dispose){
			    doc.save("Relatorio - "+data.getDate()+"/"+data.getMonth()+"/"+data.getFullYear()+".pdf");
			  });
			}
		</script>
	</head>
	<body style="background-color: grey;" /*onload="Confirmar_compra()"*/>

		<?php 
			require_once 'cabecalho.php';
		?>
		<br><br><br>
		<div class="row">
			<div class="col s2"></div>
			<div class="col s8">
				<h2 style="color: white;">Muito Obrigado!</h2>
			    <div class="card">
				    <div class="card-image waves-effect waves-block waves-light blue">
				    	<img src="entrega_pizza.png">
				    </div>
				    <div class="card-content orange center-align">
					    <span class="card-title grey-text text-darken-4" id="show"></span>
				    </div>
				</div>
			</div>
		    <div class="col s2"></div>
		</div><br><br>
		    <div class="row">
		    	<center>
			    	<div class="col s4"></div>
			    	<div class="col s4">
			    		<a class="btn-large" href="Index.php">Voltar ao Início</a>
			    	</div>
			    	<div class="col s4"></div>
			    </center>
		    </div><br><br>
		    <div class="row">
		    	<center>
			    	<div class="col s4"></div>
			    	<div class="col s4">
			    		<a class="btn" id="btnPDF">Imprimir Comprovante</a>
			    	</div>
			    	<div class="col s4"></div>
			    </center>
		    </div>

		    <div id="geraPDF">
			   <h5 style="color: black;">Muito Obrigado! Seu pedido foi realizado com sucesso!</h5>
			    <div>
				    <div>
				    	<img width= 500px; src="entrega_pizza.png" height= 300px;>
				    </div>
				    <div>
					   <span id="show2"></span>
				    </div>
				</div>
			</div>

			<br><br><br><br>

		<?php
			require_once 'footer.php';
		?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
	</body>
</html>