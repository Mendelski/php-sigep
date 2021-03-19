<?php

namespace PhpSigep\Model;

/**
 * Class PedidoInformacao
 *
 * @package PhpSigep\Model
 * @author: Bruno Maia <email:brunopmaia@gmail.com>
 */
class PedidoInformacao extends AbstractModel
{

    /**
     * Remessa/Objeto postal entregue em local divergente
     */
    const CODIGO_RECLAMACAO_REMESSA_ENTREGUE_LOCAL_DIVERGENTE = 132;

    /**
     * Remessa/Objeto postal violada
     */
    const CODIGO_RECLAMACAO_REMESSA_VIOLADA = 133;

    /**
     * Remessa/Objeto postal avariada/danificada
     */
    const CODIGO_RECLAMACAO_REMESSA_AVARIADA = 134;

    /**
     * Remessa/Objeto postal entregue com atraso
     */
    const CODIGO_RECLAMACAO_REMESSA_ENTREGUE_COM_ATRASO = 135;

    /**
     * Remessa/Objeto postal devolvida indevidamente
     */
    const CODIGO_RECLAMACAO_REMESSA_DEVOLVIDA_INDEVIDAMENTE = 136;

    /**
     * Não recebimento do pedido de confirmação
     */
    const CODIGO_RECLAMACAO_NAO_RECEBIMENTO_PEDIDO_CONFIRMACAO = 141;

    /**
     * Remetente não recebeu o pedido de cópia
     */
    const CODIGO_RECLAMACAO_REMETENTE_NAO_RECEBEU_PEDIDO_COPIA = 142;

    /**
     * Remetente não recebeu o AR
     */
    const CODIGO_RECLAMACAO_REMETENTE_NAO_RECEBEU_AR = 148;

    /**
     * Remessa/Objeto postal não entregue
     */
    const CODIGO_RECLAMACAO_REMESSA_NAO_ENTREGUE = 211;

    /**
     * AR Digital - Imagem não disponível
     */
    const CODIGO_RECLAMACAO_AR_DIGITAL_IMAGEM_NAO_DISPONIVEL = 240;

    /**
     * Entrega em Caixa de Correio Inteligente
     */
    const CODIGO_RECLAMACAO_ENTREGA_CAIXA_CORREIO_INTELIGENTE = 310;

    /**
     * Postagem cancelada a pedido do remetente
     */
    const CODIGO_RECLAMACAO_POSTAGEM_CANCELADA_A_PEDIDO_REMETENTE = 313;

    /**
     * Destinatário Ausente - Contestar Informação
     */
    const CODIGO_RECLAMACAO_CONTESTAR_INFORMACAO_DESTINATARIO_AUSENTE = 316;

    /**
     * Tipo de embalagem "E" igual a Envelope
     */
    const TIPO_EMBALAGEM_ENVELOPE = 'E';

    /**
     * Tipo de embalagem "C" igual a Caixa
     */
    const TIPO_EMBALAGEM_CAIXA = 'C';

    /**
     * Tipo de Manifestação "I" Solicitação de ressarcimento
     */
    const TIPO_MANIFESTACAO_RESSARCIMENTO = 'I';

    /**
     * Tipo de Manifestação "R" Reclamação
     */
    const TIPO_MANIFESTACAO_RECLAMACAO = 'R';

    /**
     * @var AccessData
     */
    protected $accessData;

    /**
     * @var string DDD + Telefone Contato
     */
    protected $telefone;

    /**
     * @var string Código da etiqueta/Código do Rastreamento
     */
    protected $codigoObjeto;

    /**
     * @var string E-mail para Contato
     */
    protected $emailResposta;

    /**
     * @var string Nome do Destinatário da Remessa/Encomenda
     */
    protected $nomeDestinatario;

    /**
     * @var int Código da Reclamação/Motivo da Reclamação
     */
    protected $codigoMotivoReclamacao = self::CODIGO_RECLAMACAO_REMESSA_NAO_ENTREGUE;

    /**
     * @var string Tipo de Embalagem utilizada na postagem
     */
    protected $tipoEmbalagem = self::TIPO_EMBALAGEM_CAIXA;

    /**
     * @var string Tipo de Manifestação
     */
    protected $tipoManifestacao = self::TIPO_MANIFESTACAO_RECLAMACAO;

    /**
     * @return AccessData
     */
    public function getAccessData(): AccessData
    {
        return $this->accessData;
    }

    /**
     * @param AccessData $accessData
     * @return PedidoInformacao
     */
    public function setAccessData(AccessData $accessData): PedidoInformacao
    {
        $this->accessData = $accessData;
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
     * @return PedidoInformacao
     */
    public function setTelefone(string $telefone): PedidoInformacao
    {
        $this->telefone = $telefone;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodigoObjeto(): string
    {
        return $this->codigoObjeto;
    }

    /**
     * @param string $codigoObjeto
     * @return PedidoInformacao
     */
    public function setCodigoObjeto(string $codigoObjeto): PedidoInformacao
    {
        $this->codigoObjeto = $codigoObjeto;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailResposta(): string
    {
        return $this->emailResposta;
    }

    /**
     * @param string $emailResposta
     * @return PedidoInformacao
     */
    public function setEmailResposta(string $emailResposta): PedidoInformacao
    {
        $this->emailResposta = $emailResposta;
        return $this;
    }

    /**
     * @return string
     */
    public function getNomeDestinatario(): string
    {
        return $this->nomeDestinatario;
    }

    /**
     * @param string $nomeDestinatario
     * @return PedidoInformacao
     */
    public function setNomeDestinatario(string $nomeDestinatario): PedidoInformacao
    {
        $this->nomeDestinatario = $nomeDestinatario;
        return $this;
    }

    /**
     * @return int
     */
    public function getCodigoMotivoReclamacao(): int
    {
        return $this->codigoMotivoReclamacao;
    }

    /**
     * @param int $codigoMotivoReclamacao
     * @return PedidoInformacao
     */
    public function setCodigoMotivoReclamacao(int $codigoMotivoReclamacao): PedidoInformacao
    {
        $this->codigoMotivoReclamacao = $codigoMotivoReclamacao;
        return $this;
    }

    /**
     * @return string
     */
    public function getTipoEmbalagem(): string
    {
        return $this->tipoEmbalagem;
    }

    /**
     * @param string $tipoEmbalagem
     * @return PedidoInformacao
     */
    public function setTipoEmbalagem(string $tipoEmbalagem): PedidoInformacao
    {
        $this->tipoEmbalagem = $tipoEmbalagem;
        return $this;
    }

    /**
     * @return string
     */
    public function getTipoManifestacao(): string
    {
        return $this->tipoManifestacao;
    }

    /**
     * @param string $tipoManifestacao
     * @return PedidoInformacao
     */
    public function setTipoManifestacao(string $tipoManifestacao): PedidoInformacao
    {
        $this->tipoManifestacao = $tipoManifestacao;
        return $this;
    }

    
}