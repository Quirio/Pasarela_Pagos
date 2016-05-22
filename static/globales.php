<?php
	class cesta { 
	    public $Elementos; 
	    public $Total;    

	    function cesta(){
	    	$Elementos = [];
	    	$Total = 0; 
	    }
	    
	    function addElemento($Elemento) { 
	    	//array_push(array, var)
	        $this->Elementos[$Elemento['id']] = $Elemento;
	        var_dump($this->Elementos);
	    } 

	    function removeELemento($id) { 
	       array_search($id, $this->Elementos);
	    } 

	    function totalPrice() { 
	        foreach ($this->Elementos as $element) {
	        	$this->Total += $element['price'];
	        }
	    } 


	} 

	class Elemento{
		public $id;
		public $name;
		public $price;

		function Elemento($id,$name,$price){
			$this->$id = $id;
			$this->$name = $name;
			$this->$price = $price;
		}

	}


	session_start();
	if (!isset($_SESSION['cesta'])) 
	  $_SESSION['cesta'] =  new cesta() ;
?>