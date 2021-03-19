<?php
namespace PhpSigep\Model;

/**
 * @author: Stavarengo
 */
class ObjetoPostal extends AbstractModel
{

    /**
     * A etiqueta gerada para esta encomenda.
     * Número da etiqueta completo, com o DV.
     * @var Etiqueta
     */
    protected $etiqueta;

    /**
     * O serviço de postagem que será usado para enviar esta encomenda.
     * @var ServicoDePostagem
     */
    protected $servicoDePostagem;

    /**
     * Cubagem do Objeto. Não obrigatório.
     * @var float
     */
    protected $cubagem;

    /**
     * Pesto em gramas.
     * @var float
     */
    protected $peso;

    /**
     * Dados da pessoa que vai receber esta encomenda.
     * @var Destinatario
     */
    protected $destinatario;

    /**
     * Dados do endereço de destino da encomenda.
     * Pode ser nacional ou internacional.
     * @var Destino
     */
    protected $destino;

    /** Lista de serviços adicionais usados nesta encomenda.
     * @var ServicoAdicional[]
     */
    protected $servicosAdicionais;

    /** @var Dimensao */
    protected $dimensao;

    /** @var string */
    protected $observacao;

    public function setCubagem($cubagem): self
    {
        $this->cubagem = $cubagem;
        return $this;
    }

    public function getCubagem(): float
    {
        return $this->cubagem;
    }

    public function setDestinatario(Destinatario $destinatario): self
    {
        $this->destinatario = $destinatario;
        return $this;
    }

    public function getDestinatario(): Destinatario
    {
        return $this->destinatario;
    }

    public function setDestino(Destino $destino): self
    {
        $this->destino = $destino;
        return $this;
    }

    public function getDestino(): Destino
    {
        return $this->destino;
    }

    public function setDimensao(Dimensao $dimensao): self
    {
        $this->dimensao = $dimensao;
        return $this;
    }

    public function getDimensao(): Dimensao
    {
        return $this->dimensao;
    }

    public function setEtiqueta(Etiqueta $etiqueta): self
    {
        $this->etiqueta = $etiqueta;
        return $this;
    }

    public function getEtiqueta(): Etiqueta
    {
        return $this->etiqueta;
    }

    public function setPeso(float $peso): self
    {
        $this->peso = $peso;
        return $this;
    }

    /**
     * Peso em kilogramas.
     * Ex: use 0.3 para 300 gramas
     */
    public function getPeso(): float
    {
        return $this->peso;
    }

    public function setServicoDePostagem(ServicoDePostagem $servicoDePostagem): self
    {
        $this->servicoDePostagem = $servicoDePostagem;
        return $this;
    }

    public function getServicoDePostagem(): ServicoDePostagem
    {
        return $this->servicoDePostagem;
    }

    public function setServicosAdicionais(array $servicosAdicionais): self
    {
        $this->servicosAdicionais = $servicosAdicionais;
        return $this;
    }

    public function getServicosAdicionais(): array
    {
        return (array)$this->servicosAdicionais;
    }

    public function getObservacao(): string
    {
        return $this->observacao;
    }

    public function setObservacao($observacao): self
    {
        $this->observacao = $observacao;
        return $this;
    }
}