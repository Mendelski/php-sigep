<?php
namespace PhpSigep\Model;

/**
 * @author: Renan Zanelato <email:renan.zanelato96@gmail.com>
 */
class ObjCol extends AbstractModel
{
    /* Obrigatorio*/
    protected $item;

    /* Nao Obrigatorio*/
    protected $desc;

    /* Nao Obrigatorio */
    protected $entrega;

    /* Nao Obrigatorio */
    protected $num;

    /* Nao Obrigatorio */
    protected $id;

    /**
     * @return mixed
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param mixed $item
     * @return ObjCol
     */
    public function setItem($item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $desc
     * @return ObjCol
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntrega()
    {
        return $this->entrega;
    }

    /**
     * @param mixed $entrega
     * @return ObjCol
     */
    public function setEntrega($entrega)
    {
        $this->entrega = $entrega;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param mixed $num
     * @return ObjCol
     */
    public function setNum($num)
    {
        $this->num = $num;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return ObjCol
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

}
