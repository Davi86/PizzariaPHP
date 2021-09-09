

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
