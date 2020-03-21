<?php 
	/*
	*	$str une chaine de caractères
	*	return $ch, equivalent de $str avec les accentués remplacés par leurs equivalents non accentués
	*/
	function noAccent($str){

	    $ch = $str;
	    $ch = preg_replace('#Ç#', 'C', $ch);
	    $ch = preg_replace('#ç#', 'c', $ch);
	    $ch = preg_replace('#è|é|ê|ë#', 'e', $ch);
	    $ch = preg_replace('#È|É|Ê|Ë#', 'E', $ch);
	    $ch = preg_replace('#à|á|â|ã|ä|å#', 'a', $ch);
	    $ch = preg_replace('#@|À|Á|Â|Ã|Ä|Å#', 'A', $ch);
	    $ch = preg_replace('#ì|í|î|ï#', 'i', $ch);
	    $ch = preg_replace('#Ì|Í|Î|Ï#', 'I', $ch);
	    $ch = preg_replace('#ð|ò|ó|ô|õ|ö#', 'o', $ch);
	    $ch = preg_replace('#Ò|Ó|Ô|Õ|Ö#', 'O', $ch);
	    $ch = preg_replace('#ù|ú|û|ü#', 'u', $ch);
	    $ch = preg_replace('#Ù|Ú|Û|Ü#', 'U', $ch);
	    $ch = preg_replace('#ý|ÿ#', 'y', $ch);
	    $ch = preg_replace('#Ý#', 'Y', $ch);	    
	     
	    return ($ch);
	}
 ?>