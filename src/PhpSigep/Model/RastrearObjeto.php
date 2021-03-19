<?php
namespace PhpSigep\Model;

/**
 * @author: Stavarengo
 * @author: davidalves1
 */
class RastrearObjeto extends AbstractModel
{
    /**
     * O WebService retonará o rastreamento de cada objeto consultado.
     */
    const TIPO_LISTA_DE_OBJETOS = 1;
    /**
     * O WebService retornará o rastreamento de todos os objetos dentro do intervalo consultado.
     */
    const TIPO_INTERVALO_DE_OBJETOS = 2;

    /**
     * O WebService vai retornar todos os eventos dos objetos consultados. 
     */
    const TIPO_RESULTADO_TODOS_OS_EVENTOS = 1;
    /**
     * O WebService vai retornar apenas o último evento dos objetos consultados. 
     */
    const TIPO_RESULTADO_APENAS_O_ULTIMO_EVENTO = 2;

    /**
     * Na resposta traz os resultados com erro
     */
    const EXIBIR_RESULTADOS_COM_ERRO = true;

    /**
     * Na resposta não traz os resultados com erro
     */
    const ESCONDER_RESULTADOS_COM_ERRO = false;

    /**
     * Exibe as informações em Português do Brasil
     */
    const IDIOMA_PT_BR = '101';

    /**
     * Exibe as informações em Inglês
     */
    const IDIOMA_EN = '102';

    /**
     * @var AccessData
     */
    protected $accessData;

    /**
     * As etiquetas das encomendas que serão consultadas.
     * @var Etiqueta[]
     */
    protected $etiquetas;

    /**
     * Definição de como a lista de identificadores de objetos deverá ser interpretada pelo servidor SRO.
     * @var int
     */
    protected $tipo = self::TIPO_LISTA_DE_OBJETOS;

    /**
     * Define se vai retornar todos os eventos de rastreamento ou apenas o ultimo evento de cada objeto.
     * @var int
     */
    protected $tipoResultado = self::TIPO_RESULTADO_TODOS_OS_EVENTOS;

    /**
     * Define o idioma no qual as informações serão exibidas
     * @var string
     */
    protected $idioma = self::IDIOMA_PT_BR;

    /**
     * Informa se no retorno deve trazer os resultados com erro ou não
     * @var bool
     */
    protected $exibirErros =  self::ESCONDER_RESULTADOS_COM_ERRO;

    /**
     * @return AccessData
     */
    public function getAccessData(): AccessData
    {
        return $this->accessData;
    }

    /**
     * @param AccessData $accessData
     * @return RastrearObjeto
     */
    public function setAccessData(AccessData $accessData): RastrearObjeto
    {
        $this->accessData = $accessData;
        return $this;
    }

    /**
     * @return Etiqueta[]
     */
    public function getEtiquetas(): array
    {
        return $this->etiquetas;
    }

    /**
     * @param Etiqueta[] $etiquetas
     * @return RastrearObjeto
     */
    public function setEtiquetas(array $etiquetas): RastrearObjeto
    {
        $this->etiquetas = $etiquetas;
        return $this;
    }

    /**
     * @return int
     */
    public function getTipo(): int
    {
        return $this->tipo;
    }

    /**
     * @param int $tipo
     * @return RastrearObjeto
     */
    public function setTipo(int $tipo): RastrearObjeto
    {
        $this->tipo = $tipo;
        return $this;
    }

    /**
     * @return int
     */
    public function getTipoResultado(): int
    {
        return $this->tipoResultado;
    }

    /**
     * @param int $tipoResultado
     * @return RastrearObjeto
     */
    public function setTipoResultado(int $tipoResultado): RastrearObjeto
    {
        $this->tipoResultado = $tipoResultado;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdioma(): string
    {
        return $this->idioma;
    }

    /**
     * @param string $idioma
     * @return RastrearObjeto
     */
    public function setIdioma(string $idioma): RastrearObjeto
    {
        $this->idioma = $idioma;
        return $this;
    }

    /**
     * @return bool
     */
    public function isExibirErros(): bool
    {
        return $this->exibirErros;
    }

    /**
     * @param bool $exibirErros
     * @return RastrearObjeto
     */
    public function setExibirErros(bool $exibirErros): RastrearObjeto
    {
        $this->exibirErros = $exibirErros;
        return $this;
    }

    
}
