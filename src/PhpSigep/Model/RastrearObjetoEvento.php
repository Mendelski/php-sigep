<?php
namespace PhpSigep\Model;

/**
 * @author: Stavarengo
 * @author: davidalves1
 */
class RastrearObjetoEvento extends AbstractModel
{
    /** @var string */
    protected $tipo;

    /** @var int */
    protected $status;

    /** @var string */
    protected $dataHora;

    /** @var string */
    protected $descricao;

    /** @var string */
    protected $recebedor;

    /** @var string */
    protected $detalhe;

    /** @var string */
    protected $local;

    /** @var string */
    protected $codigo;

    /** @var string */
    protected $cidade;

    /** @var string */
    protected $uf;

    /** @var string */
    protected $error;

    /**
     * @return string
     */
    public function getTipo(): string
    {
        return $this->tipo;
    }

    /**
     * @param string $tipo
     * @return RastrearObjetoEvento
     */
    public function setTipo(string $tipo): RastrearObjetoEvento
    {
        $this->tipo = $tipo;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return RastrearObjetoEvento
     */
    public function setStatus(int $status): RastrearObjetoEvento
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataHora(): string
    {
        return $this->dataHora;
    }

    /**
     * @param string $dataHora
     * @return RastrearObjetoEvento
     */
    public function setDataHora(string $dataHora): RastrearObjetoEvento
    {
        $this->dataHora = $dataHora;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * @param string $descricao
     * @return RastrearObjetoEvento
     */
    public function setDescricao(string $descricao): RastrearObjetoEvento
    {
        $this->descricao = $descricao;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecebedor(): string
    {
        return $this->recebedor;
    }

    /**
     * @param string $recebedor
     * @return RastrearObjetoEvento
     */
    public function setRecebedor(string $recebedor): RastrearObjetoEvento
    {
        $this->recebedor = $recebedor;
        return $this;
    }

    /**
     * @return string
     */
    public function getDetalhe(): string
    {
        return $this->detalhe;
    }

    /**
     * @param string $detalhe
     * @return RastrearObjetoEvento
     */
    public function setDetalhe(string $detalhe): RastrearObjetoEvento
    {
        $this->detalhe = $detalhe;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocal(): string
    {
        return $this->local;
    }

    /**
     * @param string $local
     * @return RastrearObjetoEvento
     */
    public function setLocal(string $local): RastrearObjetoEvento
    {
        $this->local = $local;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodigo(): string
    {
        return $this->codigo;
    }

    /**
     * @param string $codigo
     * @return RastrearObjetoEvento
     */
    public function setCodigo(string $codigo): RastrearObjetoEvento
    {
        $this->codigo = $codigo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCidade(): string
    {
        return $this->cidade;
    }

    /**
     * @param string $cidade
     * @return RastrearObjetoEvento
     */
    public function setCidade(string $cidade): RastrearObjetoEvento
    {
        $this->cidade = $cidade;
        return $this;
    }

    /**
     * @return string
     */
    public function getUf(): string
    {
        return $this->uf;
    }

    /**
     * @param string $uf
     * @return RastrearObjetoEvento
     */
    public function setUf(string $uf): RastrearObjetoEvento
    {
        $this->uf = $uf;
        return $this;
    }

    /**
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }

    /**
     * @param string $error
     * @return RastrearObjetoEvento
     */
    public function setError(string $error): RastrearObjetoEvento
    {
        $this->error = $error;
        return $this;
    }
}
