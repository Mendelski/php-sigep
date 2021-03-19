<?php
namespace PhpSigep\Model;

/**
 * @author: Cristiano Soares
 * @link: http://comerciobr.com
 */
class ConsultarAgenciaResult extends AbstractModel
{
    /** @var string */
    protected $codigoRetorno;

    /** @var string */
    protected $descricaoRetorno;

    /** @var string */
    protected $versao;

    /** @var string */
    protected $dataHoraRetorno;

    /** @var array */
    protected $agencia;

    /**
     * armazena o resultado bruto, caso seja necessário para outro fins
     * @var array
     */
    protected $resultArray;
    
    public function __construct(array $initialValues = [])
    {
        $this->resultArray = $initialValues;

        $this->_failIfAtributeNotExiste = false;
        parent::__construct($initialValues);
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
     * @return ConsultarAgenciaResult
     */
    public function setCodigoRetorno(string $codigoRetorno): ConsultarAgenciaResult
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
     * @return ConsultarAgenciaResult
     */
    public function setDescricaoRetorno(string $descricaoRetorno): ConsultarAgenciaResult
    {
        $this->descricaoRetorno = $descricaoRetorno;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersao(): string
    {
        return $this->versao;
    }

    /**
     * @param string $versao
     * @return ConsultarAgenciaResult
     */
    public function setVersao(string $versao): ConsultarAgenciaResult
    {
        $this->versao = $versao;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataHoraRetorno(): string
    {
        return $this->dataHoraRetorno;
    }

    /**
     * @param string $dataHoraRetorno
     * @return ConsultarAgenciaResult
     */
    public function setDataHoraRetorno(string $dataHoraRetorno): ConsultarAgenciaResult
    {
        $this->dataHoraRetorno = $dataHoraRetorno;
        return $this;
    }

    /**
     * @return array
     */
    public function getAgencia(): array
    {
        return $this->agencia;
    }

    /**
     * @param array $agencia
     * @return ConsultarAgenciaResult
     */
    public function setAgencia(array $agencia): ConsultarAgenciaResult
    {
        $this->agencia = $agencia;
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
     * @return ConsultarAgenciaResult
     */
    public function setResultArray(array $resultArray): ConsultarAgenciaResult
    {
        $this->resultArray = $resultArray;
        return $this;
    }


}