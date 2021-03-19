<?php
namespace PhpSigep\Model;

/**
 * @author: Stavarengo
 */
class DestinoNacional extends AbstractModel implements Destino
{

    /**
     * Bairro do destinatario.
     * Max length: 30
     * @var string
     */
    protected $bairro;
    /**
     * CEP do destinatario.
     * Max length: 8
     * @var string
     */
    protected $cep;
    /**
     * Cidade do destinatario.
     * Max length: 30
     * @var string
     */
    protected $cidade;
    /**
     * Unidade de federação.
     * Max length: 2
     * @var string
     */
    protected $uf;
//	/**
//	 * Código do usuário postal 
//	 * Não obrigatório
//	 * Max length: 20
//	 * @var string
//	 */
//	protected $codigoUsuarioPostal;
//	/**
//	 * Centro de custo do cliente 
//	 * Não obrigatório
//	 * Max length: 20
//	 * @var string
//	 */
//	protected $centroCustoCliente;
    /**
     * Número do pedido
     * Opcional.
     * @var int
     */
    protected $numeroPedido;
    /**
     * Número da nota fiscal
     * Opcional.
     * @var int
     */
    protected $numeroNotaFiscal;
    /**
     * Série da nota fiscal
     * Não obrigatório
     * Max length: 20
     * @var string
     */
    protected $serieNotaFiscal;
    /**
     * Valor da nota fiscal Numérico(9,2) Não obrigatório
     * @var float
     */
    protected $valorNotaFiscal;
    /**
     * Natureza da nota fiscal
     * Não obrigatório
     * Max length: 20
     * @var string
     */
    protected $naturezaNotaFiscal;
    /**
     * Descrição do objeto
     * Não obrigatório
     * Max length: 20
     * @var string
     */
    protected $descricaoObjeto;
    /**
     * Valor a cobrar do destinatário
     * No manual está escrito que é obrigatório para o serviço 40126, porem no mesmo manual não existe nada relacionado
     * ao servico 40126.
     * @var float
     */
    protected $valorACobrar;

    /**
     * Agencia destinatária.
     * Max length: 30
     * @var string
     */
    protected $agencia;

    /**
     * @return string
     */
    public function getBairro(): string
    {
        return $this->bairro;
    }

    /**
     * @param string $bairro
     * @return DestinoNacional
     */
    public function setBairro(string $bairro): DestinoNacional
    {
        $this->bairro = $bairro;
        return $this;
    }

    /**
     * @return string
     */
    public function getCep(): string
    {
        return $this->cep;
    }

    /**
     * @param string $cep
     * @return DestinoNacional
     */
    public function setCep(string $cep): DestinoNacional
    {
        $this->cep = $cep;
        return $this;
    }

    /**
     * @return string
     */
    public function getCidade(): string
    {
        return $this->cidade;
    }

    /**
     * @param string $cidade
     * @return DestinoNacional
     */
    public function setCidade(string $cidade): DestinoNacional
    {
        $this->cidade = $cidade;
        return $this;
    }

    /**
     * @return string
     */
    public function getUf(): string
    {
        return $this->uf;
    }

    /**
     * @param string $uf
     * @return DestinoNacional
     */
    public function setUf(string $uf): DestinoNacional
    {
        $this->uf = $uf;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumeroPedido(): int
    {
        return $this->numeroPedido;
    }

    /**
     * @param int $numeroPedido
     * @return DestinoNacional
     */
    public function setNumeroPedido(int $numeroPedido): DestinoNacional
    {
        $this->numeroPedido = $numeroPedido;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumeroNotaFiscal(): int
    {
        return $this->numeroNotaFiscal;
    }

    /**
     * @param int $numeroNotaFiscal
     * @return DestinoNacional
     */
    public function setNumeroNotaFiscal(int $numeroNotaFiscal): DestinoNacional
    {
        $this->numeroNotaFiscal = $numeroNotaFiscal;
        return $this;
    }

    /**
     * @return string
     */
    public function getSerieNotaFiscal(): string
    {
        return $this->serieNotaFiscal;
    }

    /**
     * @param string $serieNotaFiscal
     * @return DestinoNacional
     */
    public function setSerieNotaFiscal(string $serieNotaFiscal): DestinoNacional
    {
        $this->serieNotaFiscal = $serieNotaFiscal;
        return $this;
    }

    /**
     * @return float
     */
    public function getValorNotaFiscal(): float
    {
        return $this->valorNotaFiscal;
    }

    /**
     * @param float $valorNotaFiscal
     * @return DestinoNacional
     */
    public function setValorNotaFiscal(float $valorNotaFiscal): DestinoNacional
    {
        $this->valorNotaFiscal = $valorNotaFiscal;
        return $this;
    }

    /**
     * @return string
     */
    public function getNaturezaNotaFiscal(): string
    {
        return $this->naturezaNotaFiscal;
    }

    /**
     * @param string $naturezaNotaFiscal
     * @return DestinoNacional
     */
    public function setNaturezaNotaFiscal(string $naturezaNotaFiscal): DestinoNacional
    {
        $this->naturezaNotaFiscal = $naturezaNotaFiscal;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescricaoObjeto(): string
    {
        return $this->descricaoObjeto;
    }

    /**
     * @param string $descricaoObjeto
     * @return DestinoNacional
     */
    public function setDescricaoObjeto(string $descricaoObjeto): DestinoNacional
    {
        $this->descricaoObjeto = $descricaoObjeto;
        return $this;
    }

    /**
     * @return float
     */
    public function getValorACobrar(): float
    {
        return $this->valorACobrar;
    }

    /**
     * @param float $valorACobrar
     * @return DestinoNacional
     */
    public function setValorACobrar(float $valorACobrar): DestinoNacional
    {
        $this->valorACobrar = $valorACobrar;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgencia(): string
    {
        return $this->agencia;
    }

    /**
     * @param string $agencia
     * @return DestinoNacional
     */
    public function setAgencia(string $agencia): DestinoNacional
    {
        $this->agencia = $agencia;
        return $this;
    }

}