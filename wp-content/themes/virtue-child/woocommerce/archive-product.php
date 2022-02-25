<?php
	
	$current_home = get_home_url();
	$link_current_home = '<b><a href="'. $current_home .'">'. 'Elegir actividades'.'</a></b>';   
   wc_print_notice('Volver a '. $link_current_home, 'notice' );
    
?>