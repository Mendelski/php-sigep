<?php
namespace PhpSigep\Model;

/**
 * @author: Stavarengo
 */
class Etiqueta extends AbstractModel
{

    /** @var string */
    protected $etiquetaComDv;

    /** @var string */
    protected $etiquetaSemDv;

    /** @var int */
    protected $dv;

    /**
     * @return int
     */
    public function getDv(): int
    {

        if (!$this->dv) {

            $numero              = substr($this->getEtiquetaSemDv(), 2, 8);
            $fatoresDePonderacao =[8, 6, 4, 2, 3, 5, 9, 7];
            $soma                = 0;

            for ($i = 0; $i < 8; $i++) {
                $soma += ($numero[$i] * $fatoresDePonderacao[$i]);
            }

            $modulo = $soma % 11;

            switch ($modulo) {
                case 0:
                    $this->dv = 5;
                    break;
                case 1:
                    $this->dv = 0;
                    break;
                default:
                    $this->dv = 11 - $modulo;
            }
        }

        return $this->dv;
    }

    /**
     * @param int $dv
     */
    public function setDv(int $dv): void
    {
        $this->dv = $dv;
    }

    /**
     * @return string
     */
    public function getEtiquetaSemDv(): string
    {
        if (!$this->etiquetaSemDv) {
            $comDv = $this->getEtiquetaComDv();
            $this->etiquetaSemDv = substr($comDv, 0, 10) . substr($comDv, 11);
        }

        return $this->etiquetaSemDv;
    }

    /**
     * @param string $etiquetaSemDv
     */
    public function setEtiquetaSemDv(string $etiquetaSemDv): void
    {
        $etiquetaSemDv = str_replace(' ', '', $etiquetaSemDv);
        $this->etiquetaSemDv = $etiquetaSemDv;
    }

    /**
     * @return string
     */
    public function getEtiquetaComDv(): string
    {
        if (!$this->etiquetaComDv) {
            $semDv = $this->getEtiquetaSemDv();
            $this->etiquetaComDv = substr($semDv, 0, 10) . $this->getDv() . substr($semDv, 10);
        }

        return $this->etiquetaComDv;
    }

    /**
     * @param string $etiquetaComDv
     */
    public function setEtiquetaComDv(string $etiquetaComDv): void
    {
        $this->etiquetaComDv = $etiquetaComDv;
    }

    /**
     * @return string
     */
    public function getNumeroSemDv(): string
    {
        return substr($this->getEtiquetaSemDv(), 2, 8);
    }

}