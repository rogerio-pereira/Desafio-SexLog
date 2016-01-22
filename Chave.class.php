<?php
	class Chave
	{
		/*
		 * CONSTANTES
		 */

		/*
		 * VARIAVEIS
		 */
		private $chave;
		private $arrayLetras;




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
	    public function __construct()
	    {
	    	$this->arrayLetras = array 	(
											1 	=> 'a',
											2 	=> 'b',
											3 	=> 'c',
											4 	=> 'd',
											5 	=> 'e',
											6 	=> 'f',
											7 	=> 'g',
											8 	=> 'h',
											9 	=> 'i',
											10 	=> 'j',
											11 	=> 'k',
											12 	=> 'l',
											13 	=> 'm',
											14 	=> 'n',
											15 	=> 'o',
											16 	=> 'p',
											17 	=> 'q',
											18 	=> 'r',
											19 	=> 's',
											20 	=> 't',
											21 	=> 'u',
											22 	=> 'v',
											23 	=> 'w',
											24 	=> 'x',
											25 	=> 'y',
											26 	=> 'z',
										);
	    }

	    //Calcula a chave de criptografia
	    //para chegar a chave utilizada para criptografar o texto você deverá somar os resultados no primeiro e 
	    //segundo desafios, pegar as posições 5 e 6 do resultado e invertê-las
	    public function calculaChave($valor1, $valor2)
	    {
	    	$soma = "".$valor1 + $valor2."";

	    	$char5 = $this->getLetra($soma, 5);
	    	$char6 = $this->getLetra($soma, 6);

	    	return ''.$char6.$char5.'';
	    }

	    public function descriptografa($caractere)
	    {
	    	$posicao = array_search($caractere, $this->arrayLetras);

	    	$posicao -= $this->getChave();

	    	if($posicao < 1)
	    		$posicao = 26 - abs($posicao);

	    	return $this->arrayLetras[$posicao];
	    }
	}
?>