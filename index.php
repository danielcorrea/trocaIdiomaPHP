<?php
session_start();

#idioma padrão
if (!isset($_SESSION['idioma'])){	
	$_SESSION['idioma'] ='pt-BR';
	}

$captions = parse_ini_file('/idiomas/'.$_SESSION['idioma'].'.ini');

?>
<html lang="<?php echo $_SESSION['idioma']?>">
<a href="trocaIdioma.php?lang=en-GB">en-GB</a>
<a href="trocaIdioma.php?lang=pt-BR">pt-BR</a>
<ul class="menu">
	<li><a href="home.php"><?php echo $captions['MENU_HOME'] ?></a></li>
	<li><a href="sobre.php"><?php echo $captions['MENU_ABOUT'] ?></a></li>
	<li><a href="registro.php"><?php echo $captions['MENU_CONTACT'] ?></a></li>
</ul>