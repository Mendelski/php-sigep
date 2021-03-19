<?php
namespace PhpSigep\Model;

/**
 * @author: Stavarengo
 */
class Dimensao extends AbstractModel
{

    const TIPO_ENVELOPE      = '001';
    const TIPO_PACOTE_CAIXA  = '002';
    const TIPO_ROLO_CILINDRO = '003';
    /**
     * Deve ser uma das constantes {@link Dimensao}::TIPO_*.
     * @var int
     */
    protected $tipo;
    /**
     * Em centímetros.
     * @var float
     */
    protected $altura;
    /**
     * Em centímetros.
     * @var float
     */
    protected $largura;
    /**
     * Em centímetros.
     * @var float
     */
    protected $comprimento;
    /**
     * Em centímetros.
     * @var float
     */
    protected $diametro;

    /**
     * @return int
     */
    public function getTipo(): int
    {
        return $this->tipo;
    }

    /**
     * @param int $tipo
     * @return Dimensao
     */
    public function setTipo(int $tipo): self
    {
        $this->tipo = $tipo;
        return $this;
    }

    /**
     * @return float
     */
    public function getAltura(): float
    {
        return $this->altura;
    }

    /**
     * @param float $altura
     * @return Dimensao
     */
    public function setAltura(float $altura): self
    {
        $this->altura = $altura;
        return $this;
    }

    /**
     * @return float
     */
    public function getLargura(): float
    {
        return $this->largura;
    }

    /**
     * @param float $largura
     * @return Dimensao
     */
    public function setLargura(float $largura): self
    {
        $this->largura = $largura;
        return $this;
    }

    /**
     * @return float
     */
    public function getComprimento(): float
    {
        return $this->comprimento;
    }

    /**
     * @param float $comprimento
     * @return Dimensao
     */
    public function setComprimento(float $comprimento): self
    {
        $this->comprimento = $comprimento;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiametro(): float
    {
        return $this->diametro;
    }

    /**
     * @param float $diametro
     * @return Dimensao
     */
    public function setDiametro(float $diametro): self
    {
        $this->diametro = $diametro;
        return $this;
    }
}
