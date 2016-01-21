<?php
	class Chave
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

	    public function setChave($chave)
	    {
	        $this->chave = $chave;

	        return $this;
	    }

	    private function getLetra($string, $posicao)
	    {
	    	return substr($string, $posicao-1, 1);
	    }




	    /*
	     * MÉTODOS DA CLASSE
	     */
	    //Método Construtor
	    public function __construc($valor1, $valor2)
	    {
	    	$this->setChave(
	    						$this->calculaChave($valor1, $valor2)
	    					);
	    }

	    //Calcula a chave de criptografia
	    //para chegar a chave utilizada para criptografar o texto você deverá somar os resultados no primeiro e 
	    //segundo desafios, pegar as posições 5 e 6 do resultado e invertê-las
	    public function calculaChave($valor1, $valor2)
	    {
	    	$soma = "".$valor1 + $valor2."";

	    	$char5 = getLetra($soma, 5);
	    	$char6 = getLetra($soma, 6);

	    	return ''$char6.$char5.'';
	    }
	}
?>