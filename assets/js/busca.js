// bloquearNumeros();
// mostrarTodoTeclado();

funcaoTeclado('txtBuscar', 1);

function funcaoTeclado(idTemp, abrir) {
    if (abrir == 1) {
        mostrarTeclado();
        id = idTemp;
    }
    else {
        ocultarTeclado();
    }
}

$("#txtBuscar").focus(() => {
	funcaoTeclado('txtBuscar',1);
	// bloquearNumeros();
  //divBloquearNumeros();
});

function divBloquearLetras(){
  $( "#bloquearLetras" ).css("display", "block");
  $( "#bloquearNumeros" ).css("display", "none");
}
function divBloquearNumeros(){
  $( "#bloquearLetras" ).css("display", "none");
  $( "#bloquearNumeros" ).css("display", "block");
}
function divMostrarTudo(){
  $( "#bloquearLetras" ).css("display", "none");
  $( "#bloquearNumeros" ).css("display", "none");
}

var erroFormulario = 0;
var regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

/*document.getElementById("btnEnviar").onclick = function() {
    validaFormulario();
};*/

function validaFormulario(){
    console.log("erro");
    if(txtNome.value.length < 3){
        imgErroNome.style.display="block";
        // txtNome.style.backgroundColor = 'red';
        erroFormulario=1;
    }
    if (erroFormulario==0){
        salvarCadastro();
        txtNome.value = "";
        txtCNPJ.value = "";
        txtRazaoSocial.value = "";
        txtTelefone.value = "";
        txtEmail.value = "";
        funcaoTeclado('txtNome', 1);
        divBloquearNumeros();
        $( "#txtMsgSucesso" ).show("fade", 600);
        $( "#txtMsgSucesso" ).delay(1000).hide("fade", 600);
        // document.formulario.submit();
    }
    else{
        erroFormulario=0;
    }
}

function salvarCadastro(){
    //salvar formulário via ajax
    $.post( "salvar-contato-ajax", { nome: txtNome.value, email: txtEmail.value, telefone: txtTelefone.value, cnpj: txtCNPJ.value, razao: txtRazaoSocial.value } )
      .done(function( data ) {
        //resultado obtido do ajax
          console.log( "Resultado: " + data );
      });
  }