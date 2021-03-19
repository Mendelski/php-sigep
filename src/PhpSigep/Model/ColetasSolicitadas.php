<?php
namespace PhpSigep\Model;

/**
 * @author: Renan Zanelato <renan.zanelato96@gmail.com
 */
class ColetasSolicitadas extends AbstractModel
{

    protected $tipo;
    protected $numero;
    protected $id_cliente;
    protected $ag;
    protected $valor_declarado;
    protected $servico_adicional;
    protected $descricao;
    protected $ar;
    protected $cklist;
    protected $documento;

    /** @var Remetente */
    protected $remetente;


    protected $produto;

    /** @var ObjCol */
    protected $obj_col;

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     * @return ColetasSolicitadas
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     * @return ColetasSolicitadas
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdCliente()
    {
        return $this->id_cliente;
    }

    /**
     * @param mixed $id_cliente
     * @return ColetasSolicitadas
     */
    public function setIdCliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAg()
    {
        return $this->ag;
    }

    /**
     * @param mixed $ag
     * @return ColetasSolicitadas
     */
    public function setAg($ag)
    {
        $this->ag = $ag;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValorDeclarado()
    {
        return $this->valor_declarado;
    }

    /**
     * @param mixed $valor_declarado
     * @return ColetasSolicitadas
     */
    public function setValorDeclarado($valor_declarado)
    {
        $this->valor_declarado = $valor_declarado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getServicoAdicional()
    {
        return $this->servico_adicional;
    }

    /**
     * @param mixed $servico_adicional
     * @return ColetasSolicitadas
     */
    public function setServicoAdicional($servico_adicional)
    {
        $this->servico_adicional = $servico_adicional;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     * @return ColetasSolicitadas
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAr()
    {
        return $this->ar;
    }

    /**
     * @param mixed $ar
     * @return ColetasSolicitadas
     */
    public function setAr($ar)
    {
        $this->ar = $ar;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCklist()
    {
        return $this->cklist;
    }

    /**
     * @param mixed $cklist
     * @return ColetasSolicitadas
     */
    public function setCklist($cklist)
    {
        $this->cklist = $cklist;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * @param mixed $documento
     * @return ColetasSolicitadas
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;
        return $this;
    }

    /**
     * @return Remetente
     */
    public function getRemetente(): Remetente
    {
        return $this->remetente;
    }

    /**
     * @param Remetente $remetente
     * @return ColetasSolicitadas
     */
    public function setRemetente(Remetente $remetente): self
    {
        $this->remetente = $remetente;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProduto()
    {
        return $this->produto;
    }

    /**
     * @param mixed $produto
     * @return ColetasSolicitadas
     */
    public function setProduto($produto): self
    {
        $this->produto = $produto;
        return $this;
    }

    /**
     * @return ObjCol
     */
    public function getObjCol(): ObjCol
    {
        return $this->obj_col;
    }

    /**
     * @param ObjCol $obj_col
     * @return ColetasSolicitadas
     */
    public function setObjCol(ObjCol $obj_col): self
    {
        $this->obj_col = $obj_col;
        return $this;
    }

    /**
     * Add obj_col.
     *
     * @param ObjCol $obj_col
     *
     * @return ColetasSolicitadas
     */
    public function AddObj_col(ObjCol $obj_col): self
    {
        $this->obj_col[] = $obj_col;
        return $this;
    }
}
