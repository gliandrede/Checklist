<link rel="stylesheet" href="assets/css/perfil.css">

<section class="section-centralizar">
    <div class="d-flex w-100 container-header">
        <h1>SEU PERFIL</h1>
        <div class="d-flex btn-add-check" onclick="location.href='check'">Novo checklist +</div>
        <div class="d-flex btn-check-list" onclick="location.href='lista'">Lista de checklist</div>

    </div>

    <section class="section-list d-flex">
            <div class="container-photo-user d-flex">
                <img src="assets/img/photos_users/<?= $userInfo['photoUser'] ?>">                               
            </div>
            <div class="d-flex flex-column container-infos">
                <div class="d-flex flex-column field">
                    <label>Nome:</label>
                    <input type="text" name="" value="<?= $userInfo['nameUser'] ?>">
                </div>
                <div class="d-flex flex-column field">
                    <label>E-mail:</label>
                    <input type="email" name="" value="<?= $userInfo['emailUser'] ?>">
                </div>
                <div class="btn-update-profile" onclick="location.href='cadastro?update=1'">Alterar Infos</div>
            </div>
    </section>
</section>

<script type="text/javascript">
    $(document).ready(function() {
    });

</script>