<?php
namespace PhpSigep\Model;

/**
 * @author: Stavarengo
 */
class CalcPrecoPrazo extends AbstractModel
{

    /** @var AccessData */
    protected $accessData;

    /** @var ServicoDePostagem[] */
    protected $servicosPostagem;

    /** @var string */
    protected $cepOrigem;

    /** @var string */
    protected $cepDestino;

    /**
     * Peso da encomenda, incluindo sua embalagem. O peso deve ser informado em quilogramas.
     * Se o formato for Envelope ({@link \PhpSigep\Model\Dimensao::TIPO_ENVELOPE}), o valor máximo permitido será 1 kg.
     * @var float
     */
    protected $peso;

    /** @var Dimensao */
    protected $dimensao;

    /** @var ServicoAdicional[] */
    protected $servicosAdicionais;

    /**
     * Quando true, o sistema altera o tamanho das dimensões se elas forem menor que o mínimo permitido pelo
     * correios.
     * @var bool
     */
    protected $ajustarDimensaoMinima = true;

    /**
     * @param AccessData $accessData
     * @return CalcPrecoPrazo
     */
    public function setAccessData(AccessData $accessData): CalcPrecoPrazo
    {
        $this->accessData = $accessData;
        return $this;
    }

    /** @return AccessData */
    public function getAccessData(): AccessData
    {
        return $this->accessData;
    }

    /**
     * @param string $cepDestino
     * @return CalcPrecoPrazo
     */
    public function setCepDestino(string $cepDestino): CalcPrecoPrazo
    {
        $this->cepDestino = $cepDestino;
        return $this;
    }

    /** @return string */
    public function getCepDestino(): string
    {
        return $this->cepDestino;
    }

    /**
     * @param string $cepOrigem
     * @return CalcPrecoPrazo
     */
    public function setCepOrigem(string $cepOrigem): CalcPrecoPrazo
    {
        $this->cepOrigem = $cepOrigem;
        return $this;
    }

    /** @return string */
    public function getCepOrigem(): string
    {
        return $this->cepOrigem;
    }

    /**
     * @param Dimensao $dimensao
     * @return CalcPrecoPrazo
     */
    public function setDimensao(Dimensao $dimensao): CalcPrecoPrazo
    {
        $this->dimensao = $dimensao;
        return $this;
    }

    /** @return Dimensao */
    public function getDimensao(): Dimensao
    {
        return $this->dimensao;
    }

    /**
     * @param float $peso
     * Em kilogramas, ou seja, 0.400 significa 400 gramas.
     * @return CalcPrecoPrazo
     */
    public function setPeso(float $peso): self
    {
        $this->peso = $peso;
        return $this;
    }

    /**
     * @return float
     * Em kilogramas, ou seja, 0.400 significa 400 gramas.
     */
    public function getPeso(): float
    {
        return $this->peso;
    }

    /**
     * @param ServicoDePostagem[] $servicosPostagem
     * @return CalcPrecoPrazo
     */
    public function setServicosPostagem(array $servicosPostagem): self
    {
        $this->servicosPostagem = $servicosPostagem;
        return $this;
    }

    /**
     * @return ServicoDePostagem[]
     */
    public function getServicosPostagem(): array
    {
        return $this->servicosPostagem;
    }

    /**
     * @param ServicoAdicional[] $servicosAdicionais
     * @return CalcPrecoPrazo
     */
    public function setServicosAdicionais(array $servicosAdicionais): self
    {
        $this->servicosAdicionais = $servicosAdicionais;
        return $this;
    }

    /**
     * @return ServicoAdicional[]
     */
    public function getServicosAdicionais(): array
    {
        return $this->servicosAdicionais;
    }

    /**
     * @param boolean $ajustarDimensaoMinima
     * Quando true, o sistema altera o tamanho das dimensões se elas forem menor que o mínimo permitido pelo
     * correios.
     * @return CalcPrecoPrazo
     */
    public function setAjustarDimensaoMinima(bool $ajustarDimensaoMinima): self
    {
        $this->ajustarDimensaoMinima = $ajustarDimensaoMinima;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAjustarDimensaoMinima(): bool
    {
        return $this->ajustarDimensaoMinima;
    }

}
