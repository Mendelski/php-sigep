<?php
namespace PhpSigep\Model;

/**
 * @author: Stavarengo
 */
class Remetente extends AbstractModel
{

    /**
     * Número do contrato do cliente.
     * Max length: 20
     * @var string
     */
    protected $numeroContrato;

    /**
     * Diretoria Regional do contrato do cliente.
     * @var Diretoria
     */
    protected $diretoria;

    /**
     * Código administrativo do cliente
     * Max length: 9
     * @var string
     */
    protected $codigoAdministrativo;

    /**
     * Nome do remetente
     * Max length: 50
     * @var string
     */
    protected $nome;

    /**
     * Logradouro do remetente.
     * Max length: 40
     * @var string
     */
    protected $logradouro;

    /**
     * Número da casa, prédio, etc. Parte do endereço do remetente.
     * Max length: 6
     * @var string
     */
    protected $numero;

    /**
     * Complemento do endereço.
     * Max length: 20
     * @var string
     */
    protected $complemento;

    /**
     * Bairro do endereço.
     * Max length: 20
     * @var string
     */
    protected $bairro;

    /**
     * CEP do remetente.
     * Max length: 8
     * @var string
     */
    protected $cep;

    /**
     * Cidade do remetente.
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

    /**
     * Telefone do remetente.
     * Max length: 12
     * @var string
     */
    protected $telefone;

    /**
     * Fax do remetente.
     * Max length: 12
     * @var string
     */
    protected $fax;

    /**
     * Email do remetente.
     * Max length: 50
     * @var string
     */
    protected $email;

    /**
     * Identificacao do remetente (CPF/CNPJ).
     * Max length: 14
     * @var string
     */
    protected $identificacao;

    /**
     * Max length: 1
     * @var string
     */
    protected $sms;

    /** @var string */
    protected $referencia;

    /**
     * @return string
     */
    public function getNumeroContrato(): string
    {
        return $this->numeroContrato;
    }

    /**
     * @param string $numeroContrato
     * @return Remetente
     */
    public function setNumeroContrato(string $numeroContrato): self
    {
        $this->numeroContrato = $numeroContrato;
        return $this;
    }

    /**
     * @return Diretoria
     */
    public function getDiretoria(): Diretoria
    {
        return $this->diretoria;
    }

    /**
     * @param Diretoria $diretoria
     * @return Remetente
     */
    public function setDiretoria(Diretoria $diretoria): self
    {
        $this->diretoria = $diretoria;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodigoAdministrativo(): string
    {
        return $this->codigoAdministrativo;
    }

    /**
     * @param string $codigoAdministrativo
     * @return Remetente
     */
    public function setCodigoAdministrativo(string $codigoAdministrativo): self
    {
        $this->codigoAdministrativo = $codigoAdministrativo;
        return $this;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     * @return Remetente
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogradouro(): string
    {
        return $this->logradouro;
    }

    /**
     * @param string $logradouro
     * @return Remetente
     */
    public function setLogradouro(string $logradouro): self
    {
        $this->logradouro = $logradouro;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumero(): string
    {
        return $this->numero;
    }

    /**
     * @param string $numero
     * @return Remetente
     */
    public function setNumero(string $numero): self
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * @return string
     */
    public function getComplemento(): string
    {
        return $this->complemento;
    }

    /**
     * @param string $complemento
     * @return Remetente
     */
    public function setComplemento(string $complemento): self
    {
        $this->complemento = $complemento;
        return $this;
    }

    /**
     * @return string
     */
    public function getBairro(): string
    {
        return $this->bairro;
    }

    /**
     * @param string $bairro
     * @return Remetente
     */
    public function setBairro(string $bairro): self
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
     * @return Remetente
     */
    public function setCep(string $cep): self
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
     * @return Remetente
     */
    public function setCidade(string $cidade): self
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
     * @return Remetente
     */
    public function setUf(string $uf): self
    {
        $this->uf = $uf;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelefone(): string
    {
        return $this->telefone;
    }

    /**
     * @param string $telefone
     * @return Remetente
     */
    public function setTelefone(string $telefone): self
    {
        $this->telefone = $telefone;
        return $this;
    }

    /**
     * @return string
     */
    public function getFax(): string
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     * @return Remetente
     */
    public function setFax(string $fax): self
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Remetente
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentificacao(): string
    {
        return $this->identificacao;
    }

    /**
     * @param string $identificacao
     * @return Remetente
     */
    public function setIdentificacao(string $identificacao): self
    {
        $this->identificacao = $identificacao;
        return $this;
    }

    /**
     * @return string
     */
    public function getSms(): string
    {
        return $this->sms;
    }

    /**
     * @param string $sms
     * @return Remetente
     */
    public function setSms(string $sms): self
    {
        $this->sms = $sms;
        return $this;
    }

    /**
     * @return string
     */
    public function getReferencia(): string
    {
        return $this->referencia;
    }

    /**
     * @param string $referencia
     * @return Remetente
     */
    public function setReferencia(string $referencia): self
    {
        $this->referencia = $referencia;
        return $this;
    }
}
