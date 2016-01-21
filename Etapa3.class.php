<?php
	class Etapa3
	{
		/*
		 * VARIAVEIS
		 */
		private $resp1;
		private $resp2;
		private $emailCriptografado;
		private $emailDescriptografado;



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




	    /*
	     * MÉTODOS DA CLASSE
	     */
	    //Método Construtor
	    public function __construct($resp1, $resp2)
	    {
	    	$this->setResp1($resp1);
	    	$this->setResp2($resp2);
	    	$this->setEmailCriptografado('b3rdcigpi4pv0gp@htmadv.rdb');
	    	$this->calculaChave();
	    }

	    
	}
?>