<?php

namespace src;

use src\IMensagem;

class Mensageiro {
    private IMensagem $canal;

    public function __construct(IMensagem $canal)
    {
        $this->setCanal($canal);
    }
    
    public function enviarToken(): void {

        $this->getCanal()->enviar();

        // $classe = '\src\\'. ucfirst($this->getCanal());
        // $obj = new $classe();
        // $obj->enviar();
    }

    /**
     * Get the value of canal
     */ 
    public function getCanal(): IMensagem
    {
        return $this->canal;
    }

    /**
     * Set the value of canal
     *
     * @return  self
     */ 
    public function setCanal($canal)
    {
        $this->canal = $canal;

        return $this;
    }
}
