// Função para formatar 1 em 01
const zeroFill = n => {
	return ('0' + n).slice(-2);
}

// Cria intervalo
const interval = setInterval(() => {
	// Pega o horário atual
	const now = new Date();

	// Formata a data conforme dd/mm/aaaa hh:ii:ss
	const data = zeroFill(now.getUTCDate()) + '/' + zeroFill((now.getMonth() + 1)) + '/' + now.getFullYear();
	const hora = zeroFill(now.getHours()) + ':' + zeroFill(now.getMinutes());

	// Exibe na tela
	$(".data").html(data);
	$(".hora").html(hora);
}, 1000);