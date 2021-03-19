<?php
namespace PhpSigep\Model;

/**
 * @author: Stavarengo
 */
class ServicoAdicional extends AbstractModel
{

    const SERVICE_AVISO_DE_RECEBIMENTO  = '001';
    const SERVICE_MAO_PROPRIA           = '002';
    const SERVICE_VALOR_DECLARADO_SEDEX = '019';
    const SERVICE_VALOR_DECLARADO_PAC   = '064';
    const SERVICE_REGISTRO              = '025';
    
    const SERVICE_VALOR_DECLARADO       = self::SERVICE_VALOR_DECLARADO_SEDEX;
    
    /**
     * Código do serviço adicional Caractere (002) Obrigatório.
     * Uma das constantes {@link ServicoAdicional}::SERVICE_*.
     * @var int
     */
    protected $codigoServicoAdicional;
    /**
     * Valor declarado do serviço adicional.
     * Usado epenas quando {@link ServicoAdicional::$codigoServicoAdicional} for igual a
     * {@link ServicoAdicional::SERVICE_MAO_PROPRIA}.
     * @var float
     */
    protected $valorDeclarado;

    public function is($codigo): bool
    {
        return $codigo === $this->getCodigoServicoAdicional();
    }

    /**
     * @return int
     */
    public function getCodigoServicoAdicional(): int
    {
        return $this->codigoServicoAdicional;
    }

    /**
     * @param int $codigoServicoAdicional
     * @return ServicoAdicional
     */
    public function setCodigoServicoAdicional(int $codigoServicoAdicional): ServicoAdicional
    {
        $this->codigoServicoAdicional = $codigoServicoAdicional;
        return $this;
    }

    /**
     * @return float
     */
    public function getValorDeclarado(): float
    {
        return $this->valorDeclarado;
    }

    /**
     * @param float $valorDeclarado
     * @return ServicoAdicional
     */
    public function setValorDeclarado(float $valorDeclarado): ServicoAdicional
    {
        $this->valorDeclarado = $valorDeclarado;
        return $this;
    }



}
