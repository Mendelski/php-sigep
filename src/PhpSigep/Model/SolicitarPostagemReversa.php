<?php
namespace PhpSigep\Model;

/**
 * @author: Renan Zanelato <email:renan.zanelato96@gmail.com>
 */
class SolicitarPostagemReversa extends AbstractModel
{

    /** @var AccessData */
    protected $AccessData;

    /** @var Destinatario */
    protected $destinatario;

    /** * @var ColetasSolicitadas */
    protected $coletas_solicitadas;

    protected $contrato;

    protected $codigo_servico;

    /**
     * @return AccessData
     */
    public function getAccessData(): AccessData
    {
        return $this->AccessData;
    }

    /**
     * @param AccessData $AccessData
     * @return SolicitarPostagemReversa
     */
    public function setAccessData(AccessData $AccessData): SolicitarPostagemReversa
    {
        $this->AccessData = $AccessData;
        return $this;
    }

    /**
     * @return Destinatario
     */
    public function getDestinatario(): Destinatario
    {
        return $this->destinatario;
    }

    /**
     * @param Destinatario $destinatario
     * @return SolicitarPostagemReversa
     */
    public function setDestinatario(Destinatario $destinatario): SolicitarPostagemReversa
    {
        $this->destinatario = $destinatario;
        return $this;
    }

    /**
     * @return ColetasSolicitadas
     */
    public function getColetasSolicitadas(): ColetasSolicitadas
    {
        return $this->coletas_solicitadas;
    }

    /**
     * @param ColetasSolicitadas $coletas_solicitadas
     * @return SolicitarPostagemReversa
     */
    public function setColetasSolicitadas(ColetasSolicitadas $coletas_solicitadas): SolicitarPostagemReversa
    {
        $this->coletas_solicitadas = $coletas_solicitadas;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContrato()
    {
        return $this->contrato;
    }

    /**
     * @param mixed $contrato
     * @return SolicitarPostagemReversa
     */
    public function setContrato($contrato)
    {
        $this->contrato = $contrato;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigoServico()
    {
        return $this->codigo_servico;
    }

    /**
     * @param mixed $codigo_servico
     * @return SolicitarPostagemReversa
     */
    public function setCodigoServico($codigo_servico)
    {
        $this->codigo_servico = $codigo_servico;
        return $this;
    }
}
