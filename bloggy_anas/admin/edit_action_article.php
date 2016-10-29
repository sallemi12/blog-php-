<?php
require_once("../classes/article.php");
    $id=$_POST['id'];
	$titre= $_POST['titre'];
	$text= $_POST['text'];
	$img=$_POST['userfile'];
	var_dump($_POST);
	$id_mod=$id;



	$article = new Article();
	$article->_id=$id;
	$article->_titre = $titre;
	$article->_texte = $text;
	$article->_image=$img;
	$article->modification();
	echo "ceci".$id_mod;
	if($article->modification())
		$r=1;
	else
		$r=-1;
header("location:article_liste.php?$r");
?>