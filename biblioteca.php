<?php 

// -----------------------------------------------------------CONECTAR------------------------------------------------------------

function conectarBD(){	
	if(explode(":",$_SERVER["HTTP_HOST"])[0]=="localhost" || explode(":",$_SERVER["HTTP_HOST"])[0]=="192.168.15.118" ){
	    $dbh = new PDO("mysql:host=localhost;dbname=glide_checklist","root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	}
	else{
		$dbh = new PDO("mysql:host=mysql.hostinger.com.br;dbname=u867275674_check_glide", "u867275674_check_glide", "@Brasil01",
	    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	    // $dbh->exec("SET time_zone = 'America/Sao_Paulo'");
	}
    
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
}

function auth($email,$pass){
	$dbh = conectarBD();
	$pass = base64_encode($pass);
	$sql = "SELECT * FROM user WHERE emailUser='$email' AND passwordUser='$pass'";
	@$user = $dbh->query($sql)->fetchAll();
	if($user)
		return $user[0]["idUser"];
	else
		return "invalido";
}

function register($name,$email,$pass,$photo=null){
	$dbh = conectarBD();
	$pass = base64_encode($pass);
	$date = date('Y-m-d H:i:s');
	try {
		$sql = "INSERT INTO user(nameUser,emailUser, passwordUser,photoUser,dateCreatedUser) VALUES ('$name','$email','$pass','$photo','$date')";
		$cod = $dbh->prepare($sql);
		$cod->execute();
		return "valido";
	} catch (Exception $e) {
		return "invalido";
	}
}

function updateUserInfo($id,$name,$email,$pass,$photo=null){
	$dbh = conectarBD();
	$pass = base64_encode($pass);
	$date = date('Y-m-d H:i:s');
	try {
		$sql = "UPDATE user SET nameUser='$name',emailUser='$email', passwordUser='$pass',photoUser='$photo' WHERE idUser = $id";
		$cod = $dbh->prepare($sql);
		$cod->execute();
		return "valido";
	} catch (Exception $e) {
		return "invalido";
	}
}

function sendFormChecks($idUser,$database,$appType,$testType,$personTested,$client,$tela,$idTeam,$idAny){
	$dbh = conectarBD();
	$date = date('Y-m-d H:i:s');
	try {
		$sql = "INSERT INTO formchecks(idUser, hasDatabase, applicationType, testType, personTested, client, tela, idTeamviewer, idAnydesk, dateUploadedForm) VALUES ($idUser,$database,'$appType','$testType','$personTested','$client','$tela','$idTeam','$idAny','$date')";
		$cod = $dbh->prepare($sql);
		$cod->execute();
		return "valido";
	} catch (Exception $e) {
		return "invalido";
	}
}

function sendUpdatedFormChecks($id,$personTested,$client,$tela,$idTeam,$idAny){
	$dbh = conectarBD();
	$date = date('Y-m-d H:i:s');
	try {
		$sql = "UPDATE formchecks SET personTested='$personTested', client='$client', tela='$tela', idTeamviewer='$idTeam', idAnydesk='$idAny' WHERE idCheck=$id";
		$cod = $dbh->prepare($sql);
		$cod->execute();
		return "valido";
	} catch (Exception $e) {
		return "invalido";
	}
}

function getLastIdCheck(){
	$dbh = conectarBD();
	$sql = "SELECT MAX(idCheck) FROM formchecks AS f ORDER BY f.idCheck DESC";
	return @$lastId = $dbh->query($sql)->fetchAll()[0][0];
}

function getInfosCheck($id){
	$dbh = conectarBD();
	try {
		$sql = "SELECT * FROM formchecks WHERE idCheck = $id";
		@$forms = $dbh->query($sql)->fetchAll();
		if($forms)
			return $forms[0];
		else
			return "invalido";
	} catch (Exception $e) {
		return "invalido";
	}
}

function getUploadedForms($page,$lastId){
	$dbh = conectarBD();
	// $minLimit = ($page*10)-10;
	// $maxLimit = $page*10;
	$maxLimit = $lastId - (($page*10)-10);
	$minLimit = $lastId - ($page*10);
	if($minLimit<0)
		$minLimit=0;

	try {
		$sql = "SELECT f.idCheck, f.hasDatabase, f.applicationType, f.testType, f.personTested, f.client, f.tela, f.idTeamviewer, f.idAnydesk, f.dateUploadedForm, u.idUser, u.nameUser, u.emailUser, u.passwordUser, u.photoUser FROM formchecks AS f, user AS u WHERE u.idUser = f.idUser AND (f.idCheck<=$maxLimit AND f.idCheck>$minLimit) ORDER BY f.idCheck DESC LIMIT 10";
		@$forms = $dbh->query($sql)->fetchAll();
		if($forms)
			return $forms;
		else
			return "invalido";
	} catch (Exception $e) {
		return "invalido";
	}
}

function getUserInfo($id){
	$dbh = conectarBD();
	try {
		$sql = "SELECT * FROM user WHERE idUser = $id";
		@$user = $dbh->query($sql)->fetchAll();
		if($user)
			return $user[0];
		else
			return "invalido";
	} catch (Exception $e) {
		return "invalido";
	}
}