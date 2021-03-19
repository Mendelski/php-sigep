<?php
namespace PhpSigep\Model;

/**
 * @author: Stavarengo
 */
class Diretoria extends AbstractModel
{

    const DIRETORIA_AC_ADMINISTRACAO_CENTRAL = 1;
    const DIRETORIA_DR_ACRE                  = 3;
    const DIRETORIA_DR_ALAGOAS               = 4;
    const DIRETORIA_DR_AMAZONAS              = 6;
    const DIRETORIA_DR_AMAPA                 = 5;
    const DIRETORIA_DR_BAHIA                 = 8;
    const DIRETORIA_DR_BRASILIA              = 10;
    const DIRETORIA_DR_CEARA                 = 12;
    const DIRETORIA_DR_ESPIRITO_SANTO        = 14;
    const DIRETORIA_DR_GOIAS                 = 16;
    const DIRETORIA_DR_MARANHAO              = 18;
    const DIRETORIA_DR_MINAS_GERAIS          = 20;
    const DIRETORIA_DR_MATO_GROSSO_DO_SUL    = 22;
    const DIRETORIA_DR_MATO_GROSSO           = 24;
    const DIRETORIA_DR_PARA                  = 28;
    const DIRETORIA_DR_PARAIBA               = 30;
    const DIRETORIA_DR_PERNAMBUCO            = 32;
    const DIRETORIA_DR_PIAUI                 = 34;
    const DIRETORIA_DR_PARANA                = 36;
    const DIRETORIA_DR_RIO_DE_JANEIRO        = 50;
    const DIRETORIA_DR_RIO_GRANDE_DO_NORTE   = 60;
    const DIRETORIA_DR_RONDONIA              = 26;
    const DIRETORIA_DR_RORAIMA               = 65;
    const DIRETORIA_DR_RIO_GRANDE_DO_SUL     = 64;
    const DIRETORIA_DR_SANTA_CATARINA        = 68;
    const DIRETORIA_DR_SERGIPE               = 70;
    const DIRETORIA_DR_SAO_PAULO_INTERIOR    = 74;
    const DIRETORIA_DR_SAO_PAULO             = 72;
    const DIRETORIA_DR_TOCANTINS             = 75;
    
    private static $diretorias = [
        self::DIRETORIA_AC_ADMINISTRACAO_CENTRAL => ['AC', 'AC Administraçao Central'],
        self::DIRETORIA_DR_ACRE                  => ['ACR', 'DR - Acre'],
        self::DIRETORIA_DR_ALAGOAS               => ['AL', 'DR - Alagoas'],
        self::DIRETORIA_DR_AMAZONAS              => ['AM', 'DR - Amazonas'],
        self::DIRETORIA_DR_AMAPA                 => ['AP', 'DR - Amapá'],
        self::DIRETORIA_DR_BAHIA                 => ['BA', 'DR - Bahia'],
        self::DIRETORIA_DR_BRASILIA              => ['BSB', 'DR - Brasília'],
        self::DIRETORIA_DR_CEARA                 => ['CE', 'DR - Ceará'],
        self::DIRETORIA_DR_ESPIRITO_SANTO        => ['ES', 'DR - Espirito Santo'],
        self::DIRETORIA_DR_GOIAS                 => ['GO', 'DR - Goiás'],
        self::DIRETORIA_DR_MARANHAO              => ['MA', 'DR - Maranhão'],
        self::DIRETORIA_DR_MINAS_GERAIS          => ['MG', 'DR - Minas Gerais'],
        self::DIRETORIA_DR_MATO_GROSSO_DO_SUL    => ['MS', 'DR - Mato Grosso do Sul'],
        self::DIRETORIA_DR_MATO_GROSSO           => ['MT', 'DR - Mato Grosso'],
        self::DIRETORIA_DR_PARA                  => ['PA', 'DR - Pará'],
        self::DIRETORIA_DR_PARAIBA               => ['PB', 'DR - Paraíba'],
        self::DIRETORIA_DR_PERNAMBUCO            => ['PE', 'DR - Pernambuco'],
        self::DIRETORIA_DR_PIAUI                 => ['PI', 'DR - Piauí'],
        self::DIRETORIA_DR_PARANA                => ['PR', 'DR - Paraná'],
        self::DIRETORIA_DR_RIO_DE_JANEIRO        => ['RJ', 'DR - Rio de Janeiro'],
        self::DIRETORIA_DR_RIO_GRANDE_DO_NORTE   => ['RN', 'DR - Rio Grande do Norte'],
        self::DIRETORIA_DR_RONDONIA              => ['RO', 'DR - Rondonia'],
        self::DIRETORIA_DR_RORAIMA               => ['RR', 'DR - Roraima'],
        self::DIRETORIA_DR_RIO_GRANDE_DO_SUL     => ['RS', 'DR - Rio Grande do Sul'],
        self::DIRETORIA_DR_SANTA_CATARINA        => ['SC', 'DR - Santa Catarina'],
        self::DIRETORIA_DR_SERGIPE               => ['SE', 'DR - Sergipe'],
        self::DIRETORIA_DR_SAO_PAULO_INTERIOR    => ['SPI', 'DR - São Paulo Interior'],
        self::DIRETORIA_DR_SAO_PAULO             => ['SPM', 'DR - São Paulo'],
        self::DIRETORIA_DR_TOCANTINS             => ['TO', 'DR - Tocantins'],
    ];

    /** @var int */
    protected $numero;

    /** @var string */
    protected $nome;

    /** @var string */
    protected $sigla;

    /**
     * @param int $numeroDiretoria
     * Uma das constantes {@link Diretoria}::DIRETORIA_*
     *
     * @throws Exception
     */
    public function __construct($numeroDiretoria)
    {
        $numeroDiretoria = (int)$numeroDiretoria;
        if (!isset(self::$diretorias[$numeroDiretoria])) {
            throw new Exception('Não existe uma diretoria de número "' . $numeroDiretoria . '".');
        }

        parent::__construct(
            [
                'numero' => $numeroDiretoria,
                'sigla'  => self::$diretorias[$numeroDiretoria][0],
                'nome'   => self::$diretorias[$numeroDiretoria][1],
            ]
        );
    }

    /**
     * @return string[][]
     */
    public static function getDiretorias(): array
    {
        return self::$diretorias;
    }

    /**
     * @param string[][] $diretorias
     */
    public static function setDiretorias(array $diretorias): void
    {
        self::$diretorias = $diretorias;
    }

    /**
     * @return int
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * @param int $numero
     * @return Diretoria
     */
    public function setNumero(int $numero): Diretoria
    {
        $this->numero = $numero;
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
     * @return Diretoria
     */
    public function setNome(string $nome): Diretoria
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return string
     */
    public function getSigla(): string
    {
        return $this->sigla;
    }

    /**
     * @param string $sigla
     * @return Diretoria
     */
    public function setSigla(string $sigla): Diretoria
    {
        $this->sigla = $sigla;
        return $this;
    }
}