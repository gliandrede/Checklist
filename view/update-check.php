<link rel="stylesheet" href="assets/css/check.css">

<section class="section-centralizar d-flex flex-column">
    <section class="section-check">
        <h1>CHECKLIST</h1>
        <section class="footer-checks d-flex flex-column">
            <input type="text" id="idCheck" name="idCheck" hidden value="<?= $infos['idCheck'] ?>" readonly>
            <div>
                <h2>Pessoa que testou*</h2>
                <input id="txtPessoaTestou" type="text" name="" value="<?= $infos['personTested'] ?>">
            </div>

            <div>
                <h2>Cliente*</h2>
                <input id="txtCliente" type="text" name="" value="<?= $infos['client'] ?>">
            </div>

            <div>
                <h2>Tela*</h2>
                <input id="txtTela" type="text" name="" value="<?= $infos['tela'] ?>">
            </div>
            
            <div>
                <h2>ID Teamviewer</h2>
                <input id="txtIdTeam" type="text" name="" value="<?= $infos['idTeamviewer'] ?>">
            </div>

            <div>
                <h2>ID AnyDesk*</h2>
                <input id="txtIdDesk" type="text" name="" value="<?= $infos['idAnydesk'] ?>">
            </div>
            
            <div class="d-flex">
                <span class="txt-obs">*Campos obrigatórios</span>
                <button id="btnEnviar" onclick="sendForm()">ENVIAR</button>
            </div>
        </section>
    </section>
</section>

<script type="text/javascript">
    $(document).ready(function() {
    //set initial state.
        $('#check3').change(function() {
            if($(this).is(":checked")) {
                $(".check--banco").show("fade",500);
                $(".check--banco").find(".field").addClass("required")
            }else{
                $(".check--banco").hide("fade",100);
                $(".check--banco").find(".field").removeClass("required")
            }
        });


        $('select').on('change', function() {
            // alert( this.value );
            $(".section-lupa").hide("fade",500)
            $(".section-slot").hide("fade",500)
            $(".section-selfie").hide("fade",500)

            $(".section-lupa").find(".field").removeClass("required")
            $(".section-slot").find(".field").removeClass("required")
            $(".section-selfie").find(".field").removeClass("required")


            $(".section-"+this.value).show("fade",500)
            $(".section-"+this.value).find(".field").addClass("required")
        });
    });

    function verifyForm() {
        let result=true;
        $(".required").each(function(){
            if(!($(this).is(":checked")) || $("#txtPessoaTestou").val()=="" || $("#txtCliente").val()=="" || $("#txtTela").val()=="" || $("#txtIdDesk").val()==""){
                console.log($(this));
                $(".txt-obs").css("color","violet");
                setTimeout(()=>{
                    $(".txt-obs").css("color","red");
                },1000);
                result=false;
                return false;
            }
        })
        return result;
    }

    function sendForm(){
        if(verifyForm()){
            $.ajax({
              url: "send-updated-form-check-ajax",
              type: "POST",
              data: "idCheck="+$("#idCheck").val()+"&pessoaTestou="+$("#txtPessoaTestou").val()+"&cliente="+$("#txtCliente").val()+"&tela="+$("#txtTela").val()+"&idTeam="+$("#txtIdTeam").val()+"&idAnydesk="+$("#txtIdDesk").val(),
              dataType: "html"
            }).done(function(resposta) {
                console.log(resposta);
                if(resposta==="valido"){
                    location.href='lista';
                }
            }).fail(function(jqXHR, textStatus ) {
                console.log("Request failed: " + textStatus);
            });
        }
    }
</script>