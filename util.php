<?php
/*============================================================*/
/*=======================BIBLIOTECA GLIDE=====================*/
/*============================================================*/


// -----------------------BANCO DE DADOS------------------------

function conectarBD(){	
	if(explode(":",$_SERVER["HTTP_HOST"])[0]=="localhost" || explode(":",$_SERVER["HTTP_HOST"])[0]=="192.168.15.118" ){
	    $dbh = new PDO("mysql:host=localhost;dbname=pede_inscricao","root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	}
	else{
		$dbh = new PDO("mysql:host=mysql.hostinger.com.br;dbname=u881160148_pede_inscricao", "u881160148_pede_inscricao", "@Brasil01",
	    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	    $dbh->exec("SET time_zone = 'America/Sao_Paulo'");
	}
    
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
}

?>