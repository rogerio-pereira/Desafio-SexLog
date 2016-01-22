<?php
	include_once('Chave.class.php');

	class Criptografia
	{		
		/*
		 * VARIAVEIS
		 */
		private $chave;




		/*
		 * GETTER E SETTER
		 */
		

	    public function getChave()
	    {
	        return $this->chave;
	    }

	    private function setChave($chave)
	    {
	        $this->chave = $chave;

	        return $this;
	    }




	    /*
	     * MÉTODOS DA CLASSE
	     */
	    //Método Construtor
	    public function __construct($valor1, $valor2)
	    {
	    	$this->setChave(new Chave());
	    	$this->chave->setChave($this->chave->calculaChave($valor1, $valor2));
	    }

	    public function descriptografa($string)
	    {

	    	$criptografado = $string;

	    	$totalCaracteres = strlen($criptografado);

	    	$stringDescriptografada = '';

	    	for($i=0; $i<$totalCaracteres; $i++)
	    	{
	    		$caractere = substr($string, $i, 1);

	    		if(ctype_alpha($caractere))
	    			$caractere = $this->chave->descriptografa($caractere);

	    		$stringDescriptografada .= $caractere;
	    	}

	    	return $stringDescriptografada;
	    }
	}
?>