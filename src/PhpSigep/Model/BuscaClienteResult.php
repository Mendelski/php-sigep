<?php
namespace PhpSigep\Model;

use stdClass;

/**
 * O manual de implementação do Correios não documenta todos os campos que o WebSevice retorna.
 * Todos os demais atributos que não estão declarados nesta classe serão inseridos em tempo de execução.
 * Use o método {@link BuscaClienteResult::toArray()} para ver todos os atributo criados dinamicamente ou use o 
 * método {@link BuscaClienteResult::get()} para obter o valor de um atributo específico.
 * 
 * @author: Stavarengo
 */
class BuscaClienteResult extends AbstractModel
{
    /** @var string */
    protected $cnpj;
    /** @var stdClass */
    protected $contratos;


    public function __construct(array $initialValues = [])
    {
        $this->_failIfAtributeNotExiste = false;
        parent::__construct($initialValues);
    }

    /**
     * @return string
     */
    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    /**
     * @param string $cnpj
     * @return BuscaClienteResult
     */
    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    /**
     * @return stdClass
     */
    public function getContratos(): stdClass
    {
        return $this->contratos;
    }

    /**
     * @param stdClass $contratos
     * @return BuscaClienteResult
     */
    public function setContratos(stdClass $contratos): self
    {
        $this->contratos = $contratos;
        return $this;
    }


}