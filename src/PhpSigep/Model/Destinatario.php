<?php
namespace PhpSigep\Model;

/**
 * @author: Stavarengo
 */
class Destinatario extends AbstractModel
{

    /**
     * Nome do destinatário.
     * Obrigatório.
     * Max length: 50
     * Tag: nome_destinatario
     * @var string
     */
    protected $nome;

    /**
     * Telefone do Destinatário.
     * Não Obrigatório.
     * Max length: 12
     * Tag: telefone_destinatario
     * @var string
     */
    protected $telefone;

    /**
     * Celular do Destinatário.
     * Não Obrigatório.
     * Max length: 12
     * Tag: celular_destinatario
     * @var string
     */
    protected $celular;

    /**
     * Email do Destinatário.
     * Não obrigatório
     * Max length: 50
     * Tag: email_destinatario
     * @var string
     */
    protected $email;

    /**
     * Logradouro do destinatário.
     * Obrigatório.
     * Max length: 50
     * Tag: logradouro_destinatario
     * @var string
     */
    protected $logradouro;

    /**
     * Complemento do endereço.
     * Não obrigatório.
     * Max length: 30
     * Tag: complemento_destinatario
     * @var string
     */
    protected $complemento;

    /**
     * Número da casa, prédio, etc. Parte do endereço.
     * Obrigatório.
     * Max length: 6
     * Tag: numero_end_destinatario
     * @var string
     */
    protected $numero;

    /**
     * Indica se o destinatário é clique e retire
     * Não Obrigatório.
     * Tag: is_clique_retire
     * @var boolean
     */
    protected $isCliqueRetire = false;

    /**
     * 
     * Obrigatório.
     * Max length: 50
     * Tag: bairro
     * @var string
     */
    protected $bairro;

    /**
     * 
     * Não Obrigatório.
     * Max length: 50
     * Tag: referencia
     * @var string
     */
    protected $referencia;

    /**
     * 
     * Obrigatório.
     * Max length: 12
     * Tag: cidade
     * @var string
     */
    protected $cidade;

    /**
     * 
     * Obrigatório.
     * Max length: 2
     * Tag: uf
     * @var string
     */
    protected $uf;

    /**
     * 
     * Obrigatório.
     * Max length: 8
     * Tag: cep
     * @var int
     */
    protected $cep;

    /**
     * 
     * Não Obrigatório.
     * Max length: 3
     * Tag: ddd
     * @var int
     */
    protected $ddd;

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     * @return Destinatario
     */
    public function setNome(string $nome): Destinatario
    {
        $this->nome = $nome;
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
     * @return Destinatario
     */
    public function setTelefone(string $telefone): Destinatario
    {
        $this->telefone = $telefone;
        return $this;
    }

    /**
     * @return string
     */
    public function getCelular(): string
    {
        return $this->celular;
    }

    /**
     * @param string $celular
     * @return Destinatario
     */
    public function setCelular(string $celular): Destinatario
    {
        $this->celular = $celular;
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
     * @return Destinatario
     */
    public function setEmail(string $email): Destinatario
    {
        $this->email = $email;
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
     * @return Destinatario
     */
    public function setLogradouro(string $logradouro): Destinatario
    {
        $this->logradouro = $logradouro;
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
     * @return Destinatario
     */
    public function setComplemento(string $complemento): Destinatario
    {
        $this->complemento = $complemento;
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
     * @return Destinatario
     */
    public function setNumero(string $numero): Destinatario
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCliqueRetire(): bool
    {
        return $this->isCliqueRetire;
    }

    /**
     * @param bool $isCliqueRetire
     * @return Destinatario
     */
    public function setIsCliqueRetire(bool $isCliqueRetire): Destinatario
    {
        $this->isCliqueRetire = $isCliqueRetire;
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
     * @return Destinatario
     */
    public function setBairro(string $bairro): Destinatario
    {
        $this->bairro = $bairro;
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
     * @return Destinatario
     */
    public function setReferencia(string $referencia): Destinatario
    {
        $this->referencia = $referencia;
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
     * @return Destinatario
     */
    public function setCidade(string $cidade): Destinatario
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
     * @return Destinatario
     */
    public function setUf(string $uf): Destinatario
    {
        $this->uf = $uf;
        return $this;
    }

    /**
     * @return int
     */
    public function getCep(): int
    {
        return $this->cep;
    }

    /**
     * @param int $cep
     * @return Destinatario
     */
    public function setCep(int $cep): Destinatario
    {
        $this->cep = $cep;
        return $this;
    }

    /**
     * @return int
     */
    public function getDdd(): int
    {
        return $this->ddd;
    }

    /**
     * @param int $ddd
     * @return Destinatario
     */
    public function setDdd(int $ddd): Destinatario
    {
        $this->ddd = $ddd;
        return $this;
    }


}
