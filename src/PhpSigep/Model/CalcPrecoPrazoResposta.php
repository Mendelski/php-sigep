<?php
namespace PhpSigep\Model;

/**
 * @author: Stavarengo
 */
class CalcPrecoPrazoResposta extends AbstractModel
{

    /**
     * Código do serviço de entrega.
     * @var ServicoDePostagem
     */
    protected $servico;

    /**
     * Preço total da encomenda, em Reais, incluindo os preços dos serviços opcionais.
     * @var float
     */
    protected $valor;

    /**
     * Prazo estimado em dias para entrega do produto.
     * Se o valor retornado for 0 (zero), indica que o web service do Correios não retornou o prazo para esta entrega.
     * @var int
     */
    protected $prazoEntrega;

    /**
     * Preço do serviço adicional Mão Própria.
     * @var float
     */
    protected $valorMaoPropria;

    /**
     * Preço do serviço adicional Aviso de Recebimento.
     * @var float
     */
    protected $valorAvisoRecebimento;

    /**
     * Preço do serviço adicional Valor Declarado.
     * @var float
     */
    protected $valorValorDeclarado;

    /**
     * Informa se a localidade informada possui entrega domiciliária.
     * Se o prazo não for retornado corretamente, o retorno deste parâmetro será vazio.
     * @var  bool
     */
    protected $entregaDomiciliar;

    /**
     * Informa se a localidade informada possui entrega domiciliária aos sábados.
     * Se o prazo não for retornado corretamente, o retorno deste parâmetro será vazio.
     * @var bool
     */
    protected $entregaSabado;

    /**
     * Código do erro retornado pelo web service do Correios.
     * @var int
     */
    protected $erroCodigo;

    /**
     * Retorna a descrição do erro gerado.
     * @var string
     */
    protected $erroMsg;

    /**
     * @return ServicoDePostagem
     */
    public function getServico(): ServicoDePostagem
    {
        return $this->servico;
    }

    /**
     * @param ServicoDePostagem $servico
     * @return CalcPrecoPrazoResposta
     */
    public function setServico(ServicoDePostagem $servico): CalcPrecoPrazoResposta
    {
        $this->servico = $servico;
        return $this;
    }

    /**
     * @return float
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * @param float $valor
     * @return CalcPrecoPrazoResposta
     */
    public function setValor(float $valor): CalcPrecoPrazoResposta
    {
        $this->valor = $valor;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrazoEntrega(): int
    {
        return $this->prazoEntrega;
    }

    /**
     * @param int $prazoEntrega
     * @return CalcPrecoPrazoResposta
     */
    public function setPrazoEntrega(int $prazoEntrega): CalcPrecoPrazoResposta
    {
        $this->prazoEntrega = $prazoEntrega;
        return $this;
    }

    /**
     * @return float
     */
    public function getValorMaoPropria(): float
    {
        return $this->valorMaoPropria;
    }

    /**
     * @param float $valorMaoPropria
     * @return CalcPrecoPrazoResposta
     */
    public function setValorMaoPropria(float $valorMaoPropria): CalcPrecoPrazoResposta
    {
        $this->valorMaoPropria = $valorMaoPropria;
        return $this;
    }

    /**
     * @return float
     */
    public function getValorAvisoRecebimento(): float
    {
        return $this->valorAvisoRecebimento;
    }

    /**
     * @param float $valorAvisoRecebimento
     * @return CalcPrecoPrazoResposta
     */
    public function setValorAvisoRecebimento(float $valorAvisoRecebimento): CalcPrecoPrazoResposta
    {
        $this->valorAvisoRecebimento = $valorAvisoRecebimento;
        return $this;
    }

    /**
     * @return float
     */
    public function getValorValorDeclarado(): float
    {
        return $this->valorValorDeclarado;
    }

    /**
     * @param float $valorValorDeclarado
     * @return CalcPrecoPrazoResposta
     */
    public function setValorValorDeclarado(float $valorValorDeclarado): CalcPrecoPrazoResposta
    {
        $this->valorValorDeclarado = $valorValorDeclarado;
        return $this;
    }

    /**
     * @return int
     */
    public function getErroCodigo(): int
    {
        return $this->erroCodigo;
    }

    /**
     * @param int $erroCodigo
     * @return CalcPrecoPrazoResposta
     */
    public function setErroCodigo(int $erroCodigo): CalcPrecoPrazoResposta
    {
        $this->erroCodigo = $erroCodigo;
        return $this;
    }

    /**
     * @return string
     */
    public function getErroMsg(): string
    {
        return $this->erroMsg;
    }

    /**
     * @param string $erroMsg
     * @return CalcPrecoPrazoResposta
     */
    public function setErroMsg(string $erroMsg): CalcPrecoPrazoResposta
    {
        $this->erroMsg = $erroMsg;
        return $this;
    }


    /**
     * @return boolean
     */
    public function isEntregaDomiciliar(): bool
    {
        return $this->entregaDomiciliar;
    }


    /**
     * @return boolean
     */
    public function isEntregaSabado(): bool
    {
        return $this->entregaSabado;
    }

    /**
     * @return bool
     */
    public function hasError(): bool
    {
        return ($this->getErroCodigo() || $this->getErroMsg());
    }
}
