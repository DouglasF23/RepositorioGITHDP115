<?php 
	defined('_JEXEC') or die('Acceso restringido');
	
	$layout= $params->get('layout','default');
	require JModuleHelper::getLayoutPath('mod_holaMundo',$layout);
	

?>