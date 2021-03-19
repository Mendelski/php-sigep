<?php

namespace PhpSigep\Model;

/**
 * @author: jonyw4
 */
class BloquearObjetoResposta extends AbstractModel
{
    /** @var string */
    protected $return;

    /**
     * @return string
     */
    public function getReturn(): string
    {
        return $this->return;
    }

    /**
     * @param string $return
     * @return BloquearObjetoResposta
     */
    public function setReturn(string $return): self
    {
        $this->return = $return;
        return $this;
    }


}
