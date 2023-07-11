<link rel="stylesheet" href="assets/css/cadastro.css">
<link rel="stylesheet" href="assets/css/crop.css">

<section class="section-centralizar d-flex flex-column">
    <section class="section-cadastro d-flex flex-column">
        <?php if(isset($_GET['update'])){ ?>
            <h1>Alterar infos</h1>
        <?php }else{ ?>
            <h1>Cadastro</h1>
        <?php } ?>
        <form class="d-flex" id="cadastroUser" name="cadastroUser" method="post" enctype="multipart/form-data" action="<?= (isset($_GET['update']))?'update-user-ajax':'register-ajax' ?> ">
            <div class="campo d-flex flex-column">
                <label for="txtName">Digite o seu nome</label>
                <input id="txtName" name="txtName" type="text" required>
            </div>
            <div class="campo d-flex flex-column">
                <label for="txtEmail">Digite o seu e-mail</label>
                <input id="txtEmail" name="txtEmail" type="email" required pattern=".+@glide\.com.br">
            </div>
            <div class="campo d-flex flex-column">
                <label for="txtPassword">Digite a sua senha</label>
                <input id="txtPassword" name="txtPassword" type="password" required>
            </div>
            <div class="campo d-flex">
                <label for="photo">Foto</label>
                <input id="photo" name="photo" type="file">
            </div>
            <input id="btnSend" type="submit" name="btnSend" value="Enviar">
        </form>
    </section>
</section>