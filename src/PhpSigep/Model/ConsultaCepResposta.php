<?php
/**
 * prestashop Project ${PROJECT_URL}
 *
 * @link      ${GITHUB_URL} Source code
 */

namespace PhpSigep\Model;

class ConsultaCepResposta extends AbstractModel
{
    /** @var string */
    protected $bairro;

    /** @var string */
    protected $cep;

    /** @var string */
    protected $cidade;

    /** @var string */
    protected $complemento1;

    /** @var string */
    protected $complemento2;

    /** @var string */
    protected $endereco;

    /** @var int */
    protected $id;

    /** @var string */
    protected $uf;

    /**
     * @return string
     */
    public function getBairro(): string
    {
        return $this->bairro;
    }

    /**
     * @param string $bairro
     * @return ConsultaCepResposta
     */
    public function setBairro(string $bairro): ConsultaCepResposta
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
     * @return ConsultaCepResposta
     */
    public function setCep(string $cep): ConsultaCepResposta
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
     * @return ConsultaCepResposta
     */
    public function setCidade(string $cidade): ConsultaCepResposta
    {
        $this->cidade = $cidade;
        return $this;
    }

    /**
     * @return string
     */
    public function getComplemento1(): string
    {
        return $this->complemento1;
    }

    /**
     * @param string $complemento1
     * @return ConsultaCepResposta
     */
    public function setComplemento1(string $complemento1): ConsultaCepResposta
    {
        $this->complemento1 = $complemento1;
        return $this;
    }

    /**
     * @return string
     */
    public function getComplemento2(): string
    {
        return $this->complemento2;
    }

    /**
     * @param string $complemento2
     * @return ConsultaCepResposta
     */
    public function setComplemento2(string $complemento2): ConsultaCepResposta
    {
        $this->complemento2 = $complemento2;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndereco(): string
    {
        return $this->endereco;
    }

    /**
     * @param string $endereco
     * @return ConsultaCepResposta
     */
    public function setEndereco(string $endereco): ConsultaCepResposta
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ConsultaCepResposta
     */
    public function setId(int $id): ConsultaCepResposta
    {
        $this->id = $id;
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
     * @return ConsultaCepResposta
     */
    public function setUf(string $uf): ConsultaCepResposta
    {
        $this->uf = $uf;
        return $this;
    }


   
} 