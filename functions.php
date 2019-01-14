<?php
	function strhex($string){
		  $hexstr = unpack('H*', $string);
		  return array_shift($hexstr);
	}

	function hexstr($hexstr){
		  $hexstr = str_replace(' ', '', $hexstr);
		  $retstr = pack('H*', $hexstr);
		  return $retstr;
	}

	function encryptdata($str){
			return base64_encode(strrev(trim(strhex($str))));
	}

	function decryptdata($str){
			return hexstr(strrev(base64_decode($str)));
	}
		//Functions for Encoding/Decoding values Ends here
		
	// GET IP ADDRESS
	function getIPAddress(){
		if(isset($_SERVER["HTTP_TRUE_CLIENT_IP"]))
			$readIP = $_SERVER["HTTP_TRUE_CLIENT_IP"];
		elseif(isset($_SERVER["HTTP_NS_REMOTE_ADDR"]))
			$readIP = $_SERVER["HTTP_NS_REMOTE_ADDR"];
		else
			$readIP = $_SERVER["REMOTE_ADDR"];
			return $readIP;
	}
	
	function specialchars($text){
		$newtext = trim($text);
		$newtext = strip_tags($newtext);
		$newtext=htmlspecialchars(str_replace('\\', '', $newtext),ENT_QUOTES);
		//$newtext=preg_replace('&amp;','&',$newtext);
		return $newtext;
	}

?>