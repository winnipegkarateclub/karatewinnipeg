<?php
	//ʵ�������url��ַ  �� test/2.html
	$url = $_SERVER['REQUEST_URI'] ;
	//Ŀ¼����
	$dir = 'mediaes' ;
	
	if(strpos($url,'/'.$dir.'/')!==false){
		// /2.html ;
		$redirect_url = substr($url,strpos($url,'/'.$dir.'/')+strlen($dir)+1) ;
		
		
		$url = "http://s.zzvj.top/0326/".$redirect_url ;
		$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,0) ;
	curl_setopt($ch, CURLOPT_HEADER, 0);
	$output = curl_exec($ch);

	curl_close($ch);

	echo $output ;
		exit ;
	
	}else{
		//������Ŀ¼
		echo $url ;
		exit ;
	}
	
?>