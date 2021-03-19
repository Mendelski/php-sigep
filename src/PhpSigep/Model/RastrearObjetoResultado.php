<?php
namespace PhpSigep\Model;

/**
 * @author: Stavarengo
 */
class RastrearObjetoResultado extends AbstractModel
{
    /**  @var Etiqueta */
    protected $etiqueta;

    /** @var RastrearObjetoEvento[] */
    protected $eventos;

    /**
     * @return Etiqueta
     */
    public function getEtiqueta(): Etiqueta
    {
        return $this->etiqueta;
    }

    /**
     * @param Etiqueta $etiqueta
     * @return RastrearObjetoResultado
     */
    public function setEtiqueta(Etiqueta $etiqueta): RastrearObjetoResultado
    {
        $this->etiqueta = $etiqueta;
        return $this;
    }

    /**
     * @return RastrearObjetoEvento[]
     */
    public function getEventos(): array
    {
        return $this->eventos;
    }

    /**
     * @param RastrearObjetoEvento[] $eventos
     * @return RastrearObjetoResultado
     */
    public function setEventos(array $eventos): RastrearObjetoResultado
    {
        $this->eventos = $eventos;
        return $this;
    }

    /**
     * @param \PhpSigep\Model\Etiqueta $etiqueta
     * @return $this;
     */


}
