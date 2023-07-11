<?php 

session_start();

include 'mvc.php';
include 'biblioteca.php';
date_default_timezone_set('America/Sao_Paulo');
$is_page=true;
$logado=false;

if (isset($_SESSION["idUser"])) {
	$logado=true;
}
if (!$logado && $page!="login" && $page!="auth-ajax" && $page!="register-ajax" && $page!="cadastro") {
	header("Location:login");
}

switch ($page) {
	case 'update-check':
		$infos=getInfosCheck($_GET['id']);
		break;
	case 'register-ajax':
	    $imagename=null;
		$error = $_FILES["photo"]["error"];
		if ($error == UPLOAD_ERR_OK) {
		    $name = $_FILES["photo"]["name"];
		    //$ext = pathinfo($name, PATHINFO_EXTENSION);
		    $name = explode("_", $name);
	        $imagename = trim(htmlspecialchars($_POST['txtName'])).".png";
		    move_uploaded_file( $_FILES["photo"]["tmp_name"], "assets/img/photos_users/" .  $imagename);
		}


		$result=register($_POST['txtName'],$_POST['txtEmail'],$_POST['txtPassword'],$imagename);
		if($result==="valido")
			header("Location:login");
		$is_page=false;
		break;
	case 'update-user-ajax':
	    $imagename=null;
		$error = $_FILES["photo"]["error"];
		if ($error == UPLOAD_ERR_OK) {
		    $name = $_FILES["photo"]["name"];
		    //$ext = pathinfo($name, PATHINFO_EXTENSION);
		    $name = explode("_", $name);
	        $imagename = trim(htmlspecialchars($_POST['txtName'])).".png";
		    move_uploaded_file( $_FILES["photo"]["tmp_name"], "assets/img/photos_users/" .  $imagename);
		}


		$result=updateUserInfo($_SESSION['idUser'],$_POST['txtName'],$_POST['txtEmail'],$_POST['txtPassword'],$imagename);
		if($result==="valido"){
			unset($_SESSION['idUser']);
			header("Location:login");
		}
		$is_page=false;
		break;
	case 'send-form-check-ajax':
		echo sendFormChecks($_SESSION['idUser'],$_POST['banco'],$_POST['tipoApp'],$_POST['formaTeste'],$_POST['pessoaTestou'],$_POST['cliente'],$_POST['tela'],$_POST['idTeam'],$_POST['idAnydesk']);
		$is_page=false;
		break;
	case 'send-updated-form-check-ajax':
		echo sendUpdatedFormChecks($_POST['idCheck'],$_POST['pessoaTestou'],$_POST['cliente'],$_POST['tela'],$_POST['idTeam'],$_POST['idAnydesk']);
		$is_page=false;
		break;
	case 'auth-ajax':
		$result=auth($_POST['email'],$_POST['password']);
		if($result!=="invalido"){
			$_SESSION['idUser']=$result;
		}
		echo $result;
		$is_page=false;
		break;
	case 'lista':
		if(!isset($_GET['page']))
			$formPage=1;
		else
			$formPage=$_GET['page'];
		
		$lastId=getLastIdCheck();
		$forms=getUploadedForms($formPage,$lastId);

		$btnBack = ($formPage==1)?false:true;
		$btnNext = ($lastId>($formPage*10))?true:false;

		$linkBack = "lista?page=".$formPage-1;
		$linkNext = "lista?page=".$formPage+1;
		break;
	case 'perfil':
		$userInfo=getUserInfo($_SESSION['idUser']);
		break;
}

if($is_page){
	include 'core/header.php';
	include 'view/'.$page.'.php';
	include 'core/footer.php';
}
?>