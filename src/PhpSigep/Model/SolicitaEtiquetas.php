<?php
namespace PhpSigep\Model;
use Exception;
use PhpSigep\Bootstrap;
use PhpSigep\InvalidArgument;

/**
 * @author: Stavarengo
 */
class SolicitaEtiquetas extends AbstractModel
{

    /**
     * @var int
     */
    protected $servicoDePostagem;
    /**
     * @var int
     */
    protected $qtdEtiquetas;
    /**
     * Padrão true
     * Quando true fará para cada etiqueta solicitada uma requisição para os correios com base no valor de $qtdEtiquetas
     * Quando false incorporará ao XML de solicitação de etiqueta e portanto apenas uma requisição para os correios.
     * @var boolean
     */
    protected $modoMultiplasRequisicoes = true;
    /**
     * Opcional.
     * Quando não informado será usado o valor retornado pelo método {@link \PhpSigep\Bootstrap::getConfig() }
     * @var AccessData
     */
    protected $accessData;

    /**
     * @return AccessData
     */
    public function getAccessData()
    {
        return ($this->accessData ?: Bootstrap::getConfig()->getAccessData());
    }

    /**
     * @param AccessData $accessData
     *      Opcional.
     *      Quando null será usado o valor retornado pelo método {@link \PhpSigep\Bootstrap::getConfig() }
     */
    public function setAccessData(AccessData $accessData): self
    {
        $this->accessData = $accessData;
        return $this;
    }

    /**
     * @return int
     */
    public function getQtdEtiquetas(): int
    {
        return $this->qtdEtiquetas;
    }

    /**
     * @param int $qtdEtiquetas
     */
    public function setQtdEtiquetas($qtdEtiquetas): self
    {
        $this->qtdEtiquetas = $qtdEtiquetas;
        return $this;
    }

    /**
     * @return int|ServicoDePostagem
     */
    public function getServicoDePostagem()
    {
        return $this->servicoDePostagem;
    }
    
    /**
     * Atribui para modoMultiplasRequisicoes true
     */
    public function setModoMultiplasRequisicoes(): self
    {
        $this->modoMultiplasRequisicoes = true;
        return $this;
    }
    
    /**
     * Atribui para modoMultiplasRequisicoes false
     */
    public function setModoUmaRequisicao(){
        $this->modoMultiplasRequisicoes = false;
    }
    
    /**
     * 
     * @return boolean
     */
    public function isModoMultiplasRequisicoes(){
        return $this->modoMultiplasRequisicoes;
    }

    /**
     * @param int|ServicoDePostagem $servicoDePostagem
     * @throws InvalidArgument
     * @throws Exception
     */
    public function setServicoDePostagem($servicoDePostagem)
    {
        if (is_string($servicoDePostagem)) {
            $servicoDePostagem = new ServicoDePostagem($servicoDePostagem);
        }
        
        if (!($servicoDePostagem instanceof ServicoDePostagem)) {
            $message = 'Serviço de postagem deve ser uma string ou uma instância de '
                . '\PhpSigep\Model\ServicoDePostagem.';

            throw new InvalidArgument($message);
        }
        
        $this->servicoDePostagem = $servicoDePostagem;
        return $this;
    }

}
