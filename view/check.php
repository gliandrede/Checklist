<link rel="stylesheet" href="assets/css/check.css">

<section class="section-centralizar d-flex flex-column">
    <section class="section-check">
        <h1>CHECKLIST</h1>

        <div class="check d-flex" for="check1">
            <div class="container-checks" for="check1">
                <div class="field-checkbox">
                    <input type="checkbox" class="field required" id="check1" />
                    <label for="check1" class="description"></label>
                </div>
            </div>
            <label class="descricao-check" for="check1">Aplicação foi testada na tela?*</label>            
        </div>

        <div class="check d-flex">
            <div class="container-checks">
                <div class="field-checkbox">
                    <input type="checkbox" class="field required" id="check2" />
                    <label for="check2" class="description"></label>
                </div>
            </div>
            <label class="descricao-check" for="check2">O botão de configuração está funcionando?*</label>            
        </div>

        <div class="check d-flex">
            <div class="container-checks">
                <div class="field-checkbox">
                    <input type="checkbox" class="field" id="check3" />
                    <label for="check3" class="description"></label>
                </div>
            </div>
            <label class="descricao-check" for="check3">A aplicação tem banco?</label>            
        </div>

        <div class="check d-flex check--banco">
            <div class="container-checks">
                <div class="field-checkbox">
                    <input type="checkbox" class="field" id="check3_1" />
                    <label for="check3_1" class="description"></label>
                </div>
            </div>
            <label class="descricao-check" for="check3_1">Os testes que envolvem banco foram feitos?*</label>            
        </div>

        <div class="check d-flex check--banco">
            <div class="container-checks">
                <div class="field-checkbox">
                    <input type="checkbox" class="field" id="check3_2" />
                    <label for="check3_2" class="description"></label>
                </div>
            </div>
            <label class="descricao-check" for="check3_2">Os dados estão sendo salvos no banco com os formatos corretos?*</label>            
        </div>

        <div class="check d-flex check--banco">
            <div class="container-checks">
                <div class="field-checkbox">
                    <input type="checkbox" class="field" id="check3_3" />
                    <label for="check3_3" class="description"></label>
                </div>
            </div>
            <label class="descricao-check" for="check3_3">Os campos que podem ficar vazios, estão como null ou sendo tratados de acordo?*</label>            
        </div>

        <div class="check d-flex check--banco">
            <div class="container-checks">
                <div class="field-checkbox">
                    <input type="checkbox" class="field" id="check3_4" />
                    <label for="check3_4" class="description"></label>
                </div>
            </div>
            <label class="descricao-check" for="check3_4">Os campos que podem ficar vazios, estão como null ou sendo tratados de acordo?*</label>            
        </div>

        <div class="check d-flex">
            <div class="container-checks">
                <div class="field-checkbox">
                    <input type="checkbox" class="field required" id="check4" />
                    <label for="check4" class="description"></label>
                </div>
            </div>
            <label class="descricao-check" for="check4">Aplicação no shell:startup e area de trabalho?*</label>            
        </div>

        <div class="check d-flex">
            <div class="container-checks">
                <div class="field-checkbox">
                    <input type="checkbox" class="field required" id="check5" />
                    <label for="check5" class="description"></label>
                </div>
            </div>
            <label class="descricao-check" for="check5">Foi desabilitado a flag do chrome para bloquear a ação de voltar arrastando o dedo? <br>chrome://flags/ - Overscroll history navigation*</label>            
        </div>

        <section class="section-aplicacoes-diferenciadas d-flex flex-column">
            <h2>Tipos de Aplicações</h2>
            <select id="slcTipoAplicacao">
                <option selected value="padrao">PADRÃO</option>
                <option value="lupa">LUPA</option>
                <option value="slot">SLOT</option>
                <option value="selfie">SELFIE</option>
            </select>
        </section>

        <section class="section-lupa">
            <div class="check d-flex">
                <div class="container-checks">
                    <div class="field-checkbox">
                        <input type="checkbox" class="field" id="check1_lupa" />
                        <label for="check1_lupa" class="description"></label>
                    </div>
                </div>
                <label class="descricao-check" for="check1_lupa">Botão de resetar valor da lupa*</label>            
            </div>

            <div class="check d-flex">
                <div class="container-checks">
                    <div class="field-checkbox">
                        <input type="checkbox" class="field" id="check2_lupa" />
                        <label for="check2_lupa" class="description"></label>
                    </div>
                </div>
                <label class="descricao-check" for="check2_lupa">Verificar se o arduino está sendo iniciado*</label>         
            </div>

        </section>


        <section class="section-slot">
            <div class="check d-flex">
                <div class="container-checks">
                    <div class="field-checkbox">
                        <input type="checkbox" class="field" id="check1_slot" />
                        <label for="check1_slot" class="description"></label>
                    </div>
                </div>
                <label class="descricao-check" for="check1_slot">Caso tenha impressora, verificar impressao do ticket*</label>         
            </div>

            <div class="check d-flex">
                <div class="container-checks">
                    <div class="field-checkbox">
                        <input type="checkbox" class="field" id="check2_slot" />
                        <label for="check2_slot" class="description"></label>
                    </div>
                </div>
                <label class="descricao-check" for="check2_slot">Verificar se o arduino está sendo iniciado*</label>         
            </div>

        </section>


        <section class="section-selfie">
            <div class="check d-flex">
                <div class="container-checks">
                    <div class="field-checkbox">
                        <input type="checkbox" class="field" id="check1_selfie" />
                        <label for="check1_selfie" class="description"></label>
                    </div>
                </div>
                <label class="descricao-check" for="check1_selfie">Verificar se o flash está funcionando corretamente*</label>         
            </div>

            <div class="check d-flex">
                <div class="container-checks">
                    <div class="field-checkbox">
                        <input type="checkbox" class="field" id="check2_selfie" />
                        <label for="check2_selfie" class="description"></label>
                    </div>
                </div>
                <label class="descricao-check" for="check2_selfie">Verificar se o arduino está sendo iniciado*</label>         
            </div>

            <div class="check d-flex">
                <div class="container-checks">
                    <div class="field-checkbox">
                        <input type="checkbox" class="field" id="check3_selfie" />
                        <label for="check3_selfie" class="description"></label>
                    </div>
                </div>
                <label class="descricao-check" for="check3_selfie">Verificar se a webcam está funcionando corretamente*</label>         
            </div>

        </section>

        <section class="footer-checks d-flex flex-column">

            <div>
                <h2>Forma do teste</h2>
                <select id="slcFormaTeste">
                    <option selected value="presencial">Presencial</option>
                    <option value="remoto">Remoto</option>
                </select>
            </div>

            <div>
                <h2>Pessoa que testou*</h2>
                <input id="txtPessoaTestou" type="text" name="" maxlength="20">
            </div>

            <div>
                <h2>Cliente*</h2>
                <input id="txtCliente" type="text" name="" maxlength="20">
            </div>

            <div>
                <h2>Tela*</h2>
                <input id="txtTela" type="text" name="" maxlength="20">
            </div>

            <div>
                <h2>ID Teamviewer</h2>
                <input id="txtIdTeam" type="text" name="" maxlength="20">
            </div>

            <div>
                <h2>ID AnyDesk*</h2>
                <input id="txtIdDesk" type="text" name="" maxlength="20">
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
              url: "send-form-check-ajax",
              type: "POST",
              data: "banco="+$("#check3").is(":checked")+"&tipoApp="+$("#slcTipoAplicacao").val()+"&formaTeste="+$("#slcFormaTeste").val()+"&pessoaTestou="+$("#txtPessoaTestou").val()+"&cliente="+$("#txtCliente").val()+"&tela="+$("#txtTela").val()+"&idTeam="+$("#txtIdTeam").val()+"&idAnydesk="+$("#txtIdDesk").val(),
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