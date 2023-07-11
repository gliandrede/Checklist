<link rel="stylesheet" href="assets/css/login.css">

<section class="section-centralizar d-flex flex-column">
	<section class="section-login d-flex flex-column">
		<h1>Login</h1>
		<form class="d-flex" id="loginUser" name="loginUser" method="post" enctype="multipart/form-data">
			<div class="campo d-flex">
				<label for="txtEmail">Digite o seu e-mail</label>
				<input id="txtEmail" name="txtEmail" type="text">
			</div>
			<div class="campo d-flex">
				<label for="txtPassword">Digite a sua senha</label>
				<input id="txtPassword" name="txtPassword" type="password">
			</div>
			<input id="btnSend" type="submit" name="btnSend" value="Enviar">
			<span id="msgErro">Preencha os campos corretamente</span>
		</form>
		<span id="txtCadastro" onclick="location.href='cadastro'">Não tem login?<br>Toque aqui e cadastre-se</span>
	</section>
</section>

<script type="text/javascript">
	function verificarEmail(){
		var email = $.trim($("#txtEmail").val()); 
		if(email.length!=0){
			var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if(regex.test(email)){
				var emailGlide = email.substring(email.indexOf("@")+1,email.indexOf("@")+6);
				if(emailGlide=="glide"){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
	}

	$( "#loginUser" ).on( "submit", function( event ) {
		event.preventDefault();
		login();
	});

	function login(){
		var emailValido = verificarEmail();
		var password = $("#txtPassword").val();
		// console.log(password);
		if(password!=""){
			if(emailValido){
				$.ajax({
			      url: "auth-ajax",
			      type: "POST",
			      data: "email="+$("#txtEmail").val()+"&password="+$("#txtPassword").val(),
			      dataType: "html"
				}).done(function(resposta) {
				  	console.log(resposta);
				    if(resposta!="invalido"){
		    			location.href='perfil';
				    }else{
				    	$("#msgErro").show("fade",100);
				    	$("#msgErro").html("Usuário não cadastrado");
						setTimeout(function(){
							$("#msgErro").hide("fade",100);
						},1000);
				    }
				}).fail(function(jqXHR, textStatus ) {
				    console.log("Request failed: " + textStatus);
				});
			}else{
				$("#msgErro").show("fade",100);
				$("#msgErro").html("Preencha os campos corretamente");
				setTimeout(function(){
					$("#msgErro").hide("fade",100);
				},1000);
			}
		}else{
			$("#msgErro").show("fade",100);
			$("#msgErro").html("Preencha os campos corretamente");
			setTimeout(function(){
				$("#msgErro").hide("fade",100);
			},1000);
		}
	}
</script>