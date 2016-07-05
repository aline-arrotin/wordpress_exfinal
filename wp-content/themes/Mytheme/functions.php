<?php //J'ouvre php mais je ne le ferme pas.
//Mettre une image à la une.
add_theme_support('post-thumbnails');


//Mes fonctions.
//Pour savoir sur quel page(template) nous sommes.
function affTemplate($template) {
	echo '<div id="affTemplate">'.$template.'</div>';
}

function myPrint_r($variable){
	echo "<pre>";
	print_r($variable);
	echo "</pre>";
}

//Déclarer un menu.

register_nav_menus( array(
	'primary' => 'menu principal',
	));
