<?php
	class cesta { 
	    public $Elementos; 
	    public $Numero_Typo;
	    public $TotalPrice;    

	    function cesta(){
	    	$Elementos = [];
	    	$Numero_Typo = [];
	    	$TotalPrice = 0; 
	    }
	    
	    function addElemento($Elemento) { 
	    	if(!array_key_exists($Elemento['id'],$this->Elementos)){
	    		  echo "pollo";
		        $this->Elementos[$Elemento['id']] = $Elemento;
		        $this->Numero_Typo[$Elemento['id']] = 1;
		      
		    }

	   		else
	   			$this->Numero_Typo[$Elemento['id']]++;
	    } 

	    function removeELementos() { 
	       session_destroy();
	    } 

	    function totalPrice() { 
	    	$this->TotalPrice = 0; 
	        foreach ($this->Elementos as $element) {
	        	$this->TotalPrice = $this->TotalPrice + $element['price'] * $this->Numero_Typo[$element['id']];
	        }
	    } 


	} 

	session_start();
	if (!isset($_SESSION['cesta'])) 
	  $_SESSION['cesta'] =  new cesta() ;
?>