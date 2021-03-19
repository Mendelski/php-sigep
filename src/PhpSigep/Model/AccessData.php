<?php
namespace PhpSigep\Model;

use PhpSigep\InvalidArgument;

/**
 * @author: Stavarengo
 */
class AccessData extends AbstractModel
{

    /** @var string */
    protected $codAdministrativo;

    /** @var string */
    protected $usuario;

    /** @var string */
    protected $senha;

    /** @var string */
    protected $idCorreiosUsuario;

    /** @var string */
    protected $idCorreiosSenha;

    /** @var string */
    protected $cartaoPostagem;

    /** @var string */
    protected $cnpjEmpresa;

    /** @var string */
    protected $numeroContrato;

    /** @var int */
    protected $anoContrato;

    /** @var Diretoria */
    protected $diretoria;

    /**
     * @return string
     */
    public function getCodAdministrativo(): string
    {
        return $this->codAdministrativo;
    }

    /**
     * @param string $codAdministrativo
     * @return AccessData
     */
    public function setCodAdministrativo(string $codAdministrativo): self
    {
        $this->codAdministrativo = $codAdministrativo;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsuario(): string
    {
        return $this->usuario;
    }

    /**
     * @param string $usuario
     * @return AccessData
     */
    public function setUsuario(string $usuario): self
    {
        $this->usuario = $usuario;
        return $this;
    }

    /**
     * @return string
     */
    public function getSenha(): string
    {
        return $this->senha;
    }

    /**
     * @param string $senha
     * @return AccessData
     */
    public function setSenha(string $senha): self
    {
        $this->senha = $senha;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdCorreiosUsuario(): string
    {
        return $this->idCorreiosUsuario;
    }

    /**
     * @param string $idCorreiosUsuario
     * @return AccessData
     */
    public function setIdCorreiosUsuario(string $idCorreiosUsuario): self
    {
        $this->idCorreiosUsuario = $idCorreiosUsuario;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdCorreiosSenha(): string
    {
        return $this->idCorreiosSenha;
    }

    /**
     * @param string $idCorreiosSenha
     * @return AccessData
     */
    public function setIdCorreiosSenha(string $idCorreiosSenha): self
    {
        $this->idCorreiosSenha = $idCorreiosSenha;
        return $this;
    }

    /**
     * @return string
     */
    public function getCartaoPostagem(): string
    {
        return $this->cartaoPostagem;
    }

    /**
     * @param string $cartaoPostagem
     * @return AccessData
     */
    public function setCartaoPostagem(string $cartaoPostagem): self
    {
        $this->cartaoPostagem = $cartaoPostagem;
        return $this;
    }

    /**
     * @return string
     */
    public function getCnpjEmpresa(): string
    {
        return $this->cnpjEmpresa;
    }

    /**
     * @param string $cnpjEmpresa
     * @return AccessData
     */
    public function setCnpjEmpresa(string $cnpjEmpresa): self
    {
        $this->cnpjEmpresa = $cnpjEmpresa;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumeroContrato(): string
    {
        return $this->numeroContrato;
    }

    /**
     * @param string $numeroContrato
     * @return AccessData
     */
    public function setNumeroContrato(string $numeroContrato): self
    {
        $this->numeroContrato = $numeroContrato;
        return $this;
    }

    /**
     * @return int
     */
    public function getAnoContrato(): int
    {
        return $this->anoContrato;
    }

    /**
     * @param int $anoContrato
     * @return AccessData
     */
    public function setAnoContrato(int $anoContrato): self
    {
        $this->anoContrato = $anoContrato;
        return $this;
    }

    /**
     * @param $diretoria
     * @throws Exception
     * @throws InvalidArgument
     */
    public function setDiretoria($diretoria)
    {
        if (is_int($diretoria)) {
            $diretoria = new Diretoria($diretoria);
        }
        if (!($diretoria instanceof Diretoria)) {
            throw new InvalidArgument('A Diretoria deve ser ser uma instância de \PhpSigep\Model\Diretoria.');
        }
        $this->diretoria = $diretoria;
    }

}