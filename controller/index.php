<?php

	
    require_once 'controller/template.php';
    require 'DAO/conexao.php';
	require_once 'model/diretorio.php';
	require 'model/mpdf.php';
	
    
    if (isset($_GET['url'])){
            $url = $_GET['url'];
            $separator = explode('/',$url);
            $controller = $separator[0];							
            
            require_once ('controller/'.$controller.'.php');	
    }else{
            
            require_once ('controller/frm_transmissao.php');	
    }
    
    
