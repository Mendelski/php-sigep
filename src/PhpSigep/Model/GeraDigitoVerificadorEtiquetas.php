<?php
namespace PhpSigep\Model;

/**
 * @author: Stavarengo
 */
class GeraDigitoVerificadorEtiquetas extends AbstractModel
{

    /**
     * Opcional.
     * Quando não informado será usado o valor retornado pelo método {@link \PhpSigep\Bootstrap::getConfig() }
     * @var AccessData
     */
    protected $accessData;
    /** @var Etiqueta[] */
    protected $etiquetas;

    /**
     * @param AccessData $accessData
     *      Opcional.
     *      Quando null será usado o valor retornado pelo método {@link \PhpSigep\Bootstrap::getConfig() }
     */
    public function setAccessData($accessData)
    {
        $this->accessData = $accessData;
    }

    /**
     * @return Etiqueta[]
     */
    public function getEtiquetas(): array
    {
        return $this->etiquetas;
    }

    /**
     * @param Etiqueta[] $etiquetas
     * @return GeraDigitoVerificadorEtiquetas
     */
    public function setEtiquetas(array $etiquetas): GeraDigitoVerificadorEtiquetas
    {
        $this->etiquetas = $etiquetas;
        return $this;
    }



}