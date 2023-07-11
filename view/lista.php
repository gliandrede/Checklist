<link rel="stylesheet" href="assets/css/lista.css">

<section class="section-centralizar">
    <div class="d-flex w-100 container-header">
        <h1>LISTA</h1>
        <div class="d-flex btn-add-check" onclick="location.href='check'">Novo checklist +</div>
        <div class="container-btns-pages d-flex">
            <div class="<?= ($btnBack)?'':'disabled' ?>" onclick="location.href='<?= ($btnBack)?$linkBack:'' ?>'">Anterior</div><div class="<?= ($btnNext)?'':'disabled' ?>" onclick="location.href='<?= ($btnNext)?$linkNext:'' ?>'">Próximo</div>
        </div>

    </div>

    <section class="section-list d-flex">
        <?php foreach ($forms as $form) { ?>
            <div class="container-form-uploaded d-flex">
                <div class="container-photo-user d-flex" onclick="location.href='<?= ($form["idUser"]==$_SESSION["idUser"])?"perfil" :"" ?>'">
                    <img src="assets/img/photos_users/<?= $form['photoUser'] ?>">                               
                </div>
                <svg width='10%' height='90%' viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="0, 5 100,40 100,60 0,95" fill="white"/>
                </svg>
                <div class="container-infos d-flex flex-column" onclick="location.href='<?= ($form["idUser"]==$_SESSION["idUser"])?"update-check?id=$form[idCheck]" :"" ?>'">
                    <span class="name-user"><?= $form['nameUser'] ?></span>
                    <div class="d-flex">
                        <div class="infos d-flex flex-column">
                            <div><b>Cliente</b> : <?= $form['client'] ?></div>
                            <div><b>Banco de dados</b> : <?= ($form['hasDatabase'])?"sim":"não" ?></div>
                            <div><b>Tipo de aplicação</b>: <?= $form['applicationType'] ?></div>
                            <div><b>Tipo de teste</b>: <?= $form['testType'] ?></div>
                            <div><b>Pessoa que testou</b>: <?= $form['personTested'] ?></div>
                        </div>
                        <div class="line-division"></div>
                        <div class="infos-screen d-flex flex-column">
                            <div><b>Tela</b>: <?= $form['tela'] ?></div>
                            <div><b>ID TeamViewer</b>: <?= $form['idTeamviewer'] ?></div>
                            <div><b>ID AnyDesk</b>: <?= $form['idAnydesk'] ?></div>
                            <div class="btn-update">Alterar</div>
                        </div>
                    </div>
                    <span class="date-uploaded-form"><?= date("d/m/Y H:i:s", strtotime($form['dateUploadedForm'])); ?></span>
                </div>
            </div>
        <?php } ?>
    </section>
</section>

<script type="text/javascript">
    $(document).ready(function() {
    });

</script>