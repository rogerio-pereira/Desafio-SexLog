<?php
	include_once('Criptografia.class.php');

	class Etapa3
	{
		/*
		 * VARIAVEIS
		 */
		private $resp1;
		private $resp2;
		private $emailCriptografado;
		private $emailDescriptografado;
		private $criptografia;



		/*
		 * GETTER E SETTER
		 */
	    public function getResp1()
	    {
	        return $this->resp1;
	    }

	    private function setResp1($resp1)
	    {
	        $this->resp1 = $resp1;

	        return $this;
	    }

	    public function getResp2()
	    {
	        return $this->resp2;
	    }

	    private function setResp2($resp2)
	    {
	        $this->resp2 = $resp2;

	        return $this;
	    }

	    public function getEmailCriptografado()
	    {
	        return $this->emailCriptografado;
	    }

	    private function setEmailCriptografado($emailCriptografado)
	    {
	        $this->emailCriptografado = $emailCriptografado;

	        return $this;
	    }

	    public function getEmailDescriptografado()
	    {
	        return $this->emailDescriptografado;
	    }

	    private function setEmailDescriptografado($emailDescriptografado)
	    {
	        $this->emailDescriptografado = $emailDescriptografado;

	        return $this;
	    }

	    public function getCriptografia()
	    {
	    	return $this->criptografia();
	    }

	    private function setCriptografia($criptografia)
	    {
	    	$this->criptografia = $criptografia;

	    	return $this;
	    }




	    /*
	     * MÉTODOS DA CLASSE
	     */
	    //Método Construtor
	    public function __construct($resp1, $resp2, $emailCriptografado)
	    {
	    	$this->setResp1($resp1);
	    	$this->setResp2($resp2);
	    	$this->setEmailCriptografado($emailCriptografado);

	    	$this->setCriptografia(new Criptografia($this->getResp1(), $this->getResp2()));
	    	$this->setEmailDescriptografado(
	    										$this->criptografia->descriptografa(
	    																				$this->getEmailCriptografado()
	    																			)
	    									);

	    	echo "<a href='mailto:{$this->getEmailDescriptografado()}'>Email</a>";
	    }

	    
	}
?>