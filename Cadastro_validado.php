<?php

	$nome = $_POST['nome'];
	$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
	$total_string_cpf = strlen($cpf);

	$telefone = $_POST['telefone'];
	$total_string_telefone = strlen($telefone);



	if($nome == ""){
		?>
			<script>
				window.location.href="Endereco_entrega.php";
				setInterval(function() {
				funcao}, 1000);
				alert("Preencha o nome para sabermos quem você é!");
			</script>

		<?php
	}
	else if($total_string_cpf == 0){
		?>
			<script>
				window.location.href="Endereco_entrega.php";
				setInterval(function() {
				funcao}, 1000);
				alert("CPF Inválido!(11 Digítos)");
			</script>

		<?php

	}else if($total_string_telefone != 9){
		?>
			<script>
				window.location.href="Endereco_entrega.php";
				setInterval(function() {
				funcao}, 1000);
				alert("Telefone Inválido!(9 Digítos)");
			</script>
		<?php
	}else{
		header("Location: Finaliza.php");
	}





?>