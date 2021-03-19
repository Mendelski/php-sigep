<?php
namespace PhpSigep\Model;
use PhpSigep\Bootstrap;

/**
 * @author: Stavarengo
 */
class PreListaDePostagem extends AbstractModel
{

    /**
     * Opcional.
     * Quando não informado será usado o valor retornado pelo método {@link \PhpSigep\Bootstrap::getConfig() }
     * @var AccessData
     */
    protected $accessData;
    
    /**
     * Dados da pessoa que está remetendo esta encomenda.
     * @var Remetente
     */
    protected $remetente;
    
    /**
     * Os objetos que estão sendo postados.
     * @var ObjetoPostal[]
     */
    protected $encomendas;

    /**
     * @param AccessData $accessData
     * Opcional.
     * Quando null será usado o valor retornado pelo método {@link \PhpSigep\Bootstrap::getConfig() }
     */
    public function setAccessData($accessData)
    {
        $this->accessData = $accessData;
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
     * @return PreListaDePostagem
     */
    public function setRemetente(Remetente $remetente): self
    {
        $this->remetente = $remetente;
        return $this;
    }

    /**
     * @return ObjetoPostal[]
     */
    public function getEncomendas(): array
    {
        return $this->encomendas;
    }

    /**
     * @param ObjetoPostal[] $encomendas
     * @return PreListaDePostagem
     */
    public function setEncomendas(array $encomendas): self
    {
        $this->encomendas = $encomendas;
        return $this;
    }


}
