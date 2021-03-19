<?php

namespace PhpSigep\Model;

/**
 * Class PedidoInformacaoResponse
 *
 * @package PhpSigep\Model
 * @author: Bruno Maia <email:brunopmaia@gmail.com>
 */
class PedidoInformacaoResponse extends AbstractModel
{

    /** @var string Número do Lote (Controle) */
    protected $numeroLote;

    /** @var string Data do Registro da manifestação */
    protected $dataHoraCadastro;

    /** @var string Código da Etiqueta/ Código Rastreamento */
    protected $codigoObjeto;

    /** @var string Número de Protocolo da Manifestação */
    protected $numeroPi;

    /** @var string Código de Retorno */
    protected $codigoRetorno;

    /** @var string Descrição do Retono */
    protected $descricaoRetorno;

    /** @var array Resultado da consulta */
    protected $resultArray;

    public function __construct(array $initialValues = [])
    {
        $this->resultArray = $initialValues;

        parent::__construct($initialValues);
    }

    /**
     * @return string
     */
    public function getNumeroLote(): string
    {
        return $this->numeroLote;
    }

    /**
     * @param string $numeroLote
     * @return PedidoInformacaoResponse
     */
    public function setNumeroLote(string $numeroLote): PedidoInformacaoResponse
    {
        $this->numeroLote = $numeroLote;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataHoraCadastro(): string
    {
        return $this->dataHoraCadastro;
    }

    /**
     * @param string $dataHoraCadastro
     * @return PedidoInformacaoResponse
     */
    public function setDataHoraCadastro(string $dataHoraCadastro): PedidoInformacaoResponse
    {
        $this->dataHoraCadastro = $dataHoraCadastro;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodigoObjeto(): string
    {
        return $this->codigoObjeto;
    }

    /**
     * @param string $codigoObjeto
     * @return PedidoInformacaoResponse
     */
    public function setCodigoObjeto(string $codigoObjeto): PedidoInformacaoResponse
    {
        $this->codigoObjeto = $codigoObjeto;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumeroPi(): string
    {
        return $this->numeroPi;
    }

    /**
     * @param string $numeroPi
     * @return PedidoInformacaoResponse
     */
    public function setNumeroPi(string $numeroPi): PedidoInformacaoResponse
    {
        $this->numeroPi = $numeroPi;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodigoRetorno(): string
    {
        return $this->codigoRetorno;
    }

    /**
     * @param string $codigoRetorno
     * @return PedidoInformacaoResponse
     */
    public function setCodigoRetorno(string $codigoRetorno): PedidoInformacaoResponse
    {
        $this->codigoRetorno = $codigoRetorno;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescricaoRetorno(): string
    {
        return $this->descricaoRetorno;
    }

    /**
     * @param string $descricaoRetorno
     * @return PedidoInformacaoResponse
     */
    public function setDescricaoRetorno(string $descricaoRetorno): PedidoInformacaoResponse
    {
        $this->descricaoRetorno = $descricaoRetorno;
        return $this;
    }

    /**
     * @return array
     */
    public function getResultArray(): array
    {
        return $this->resultArray;
    }

    /**
     * @param array $resultArray
     * @return PedidoInformacaoResponse
     */
    public function setResultArray(array $resultArray): PedidoInformacaoResponse
    {
        $this->resultArray = $resultArray;
        return $this;
    }

}