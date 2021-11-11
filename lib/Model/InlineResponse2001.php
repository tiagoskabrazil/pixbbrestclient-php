<?php
/**
 * InlineResponse2001
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PIX-BB
 *
 * API para gerenciar os serviços referentes ao PIX (Sistema de Pagamentos Instantâneos) no BB.
 *
 * OpenAPI spec version: 1.8
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.29
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * InlineResponse2001 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2001 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'codigo_guia_recebimento' => 'string',
'email_devedor' => 'string',
'codigo_pais_telefone_devedor' => 'int',
'ddd_telefone_devedor' => 'int',
'numero_telefone_devedor' => 'int',
'timestamp_criacao_solicitacao' => 'string',
'quantidade_segundo_expiracao' => 'int',
'estado_solicitacao' => 'string',
'numero_versao_solicitacao_pagamento' => 'int',
'link_qr_code' => 'string',
'qr_code' => 'string',
'cpf_devedor' => 'int',
'cnpj_devedor' => 'int',
'nome_devedor' => 'string',
'valor_original_solicitacao' => 'float',
'codigo_solicitacao_banco_central_brasil' => 'string',
'descricao_solicitacao_pagamento' => 'string',
'lista_informacao_adicional' => '\Swagger\Client\Model\InlineResponse2001ListaInformacaoAdicional',
'codigo_identificador_pagamento' => 'string',
'valor_pagamento' => 'float',
'timestamp_pagamento' => 'string',
'cpf_pagador' => 'int',
'cnpj_pagador' => 'int',
'nome_cliente_pagador' => 'string',
'texto_informativo_pagador' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'codigo_guia_recebimento' => null,
'email_devedor' => null,
'codigo_pais_telefone_devedor' => null,
'ddd_telefone_devedor' => null,
'numero_telefone_devedor' => null,
'timestamp_criacao_solicitacao' => null,
'quantidade_segundo_expiracao' => null,
'estado_solicitacao' => null,
'numero_versao_solicitacao_pagamento' => null,
'link_qr_code' => null,
'qr_code' => null,
'cpf_devedor' => null,
'cnpj_devedor' => null,
'nome_devedor' => null,
'valor_original_solicitacao' => null,
'codigo_solicitacao_banco_central_brasil' => null,
'descricao_solicitacao_pagamento' => null,
'lista_informacao_adicional' => null,
'codigo_identificador_pagamento' => null,
'valor_pagamento' => null,
'timestamp_pagamento' => null,
'cpf_pagador' => null,
'cnpj_pagador' => null,
'nome_cliente_pagador' => null,
'texto_informativo_pagador' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'codigo_guia_recebimento' => 'codigoGuiaRecebimento',
'email_devedor' => 'emailDevedor',
'codigo_pais_telefone_devedor' => 'codigoPaisTelefoneDevedor',
'ddd_telefone_devedor' => 'dddTelefoneDevedor',
'numero_telefone_devedor' => 'numeroTelefoneDevedor',
'timestamp_criacao_solicitacao' => 'timestampCriacaoSolicitacao',
'quantidade_segundo_expiracao' => 'quantidadeSegundoExpiracao',
'estado_solicitacao' => 'estadoSolicitacao',
'numero_versao_solicitacao_pagamento' => 'numeroVersaoSolicitacaoPagamento',
'link_qr_code' => 'linkQrCode',
'qr_code' => 'qrCode',
'cpf_devedor' => 'cpfDevedor',
'cnpj_devedor' => 'cnpjDevedor',
'nome_devedor' => 'nomeDevedor',
'valor_original_solicitacao' => 'valorOriginalSolicitacao',
'codigo_solicitacao_banco_central_brasil' => 'codigoSolicitacaoBancoCentralBrasil',
'descricao_solicitacao_pagamento' => 'descricaoSolicitacaoPagamento',
'lista_informacao_adicional' => 'listaInformacaoAdicional',
'codigo_identificador_pagamento' => 'codigoIdentificadorPagamento',
'valor_pagamento' => 'valorPagamento',
'timestamp_pagamento' => 'timestampPagamento',
'cpf_pagador' => 'cpfPagador',
'cnpj_pagador' => 'cnpjPagador',
'nome_cliente_pagador' => 'nomeClientePagador',
'texto_informativo_pagador' => 'textoInformativoPagador'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'codigo_guia_recebimento' => 'setCodigoGuiaRecebimento',
'email_devedor' => 'setEmailDevedor',
'codigo_pais_telefone_devedor' => 'setCodigoPaisTelefoneDevedor',
'ddd_telefone_devedor' => 'setDddTelefoneDevedor',
'numero_telefone_devedor' => 'setNumeroTelefoneDevedor',
'timestamp_criacao_solicitacao' => 'setTimestampCriacaoSolicitacao',
'quantidade_segundo_expiracao' => 'setQuantidadeSegundoExpiracao',
'estado_solicitacao' => 'setEstadoSolicitacao',
'numero_versao_solicitacao_pagamento' => 'setNumeroVersaoSolicitacaoPagamento',
'link_qr_code' => 'setLinkQrCode',
'qr_code' => 'setQrCode',
'cpf_devedor' => 'setCpfDevedor',
'cnpj_devedor' => 'setCnpjDevedor',
'nome_devedor' => 'setNomeDevedor',
'valor_original_solicitacao' => 'setValorOriginalSolicitacao',
'codigo_solicitacao_banco_central_brasil' => 'setCodigoSolicitacaoBancoCentralBrasil',
'descricao_solicitacao_pagamento' => 'setDescricaoSolicitacaoPagamento',
'lista_informacao_adicional' => 'setListaInformacaoAdicional',
'codigo_identificador_pagamento' => 'setCodigoIdentificadorPagamento',
'valor_pagamento' => 'setValorPagamento',
'timestamp_pagamento' => 'setTimestampPagamento',
'cpf_pagador' => 'setCpfPagador',
'cnpj_pagador' => 'setCnpjPagador',
'nome_cliente_pagador' => 'setNomeClientePagador',
'texto_informativo_pagador' => 'setTextoInformativoPagador'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'codigo_guia_recebimento' => 'getCodigoGuiaRecebimento',
'email_devedor' => 'getEmailDevedor',
'codigo_pais_telefone_devedor' => 'getCodigoPaisTelefoneDevedor',
'ddd_telefone_devedor' => 'getDddTelefoneDevedor',
'numero_telefone_devedor' => 'getNumeroTelefoneDevedor',
'timestamp_criacao_solicitacao' => 'getTimestampCriacaoSolicitacao',
'quantidade_segundo_expiracao' => 'getQuantidadeSegundoExpiracao',
'estado_solicitacao' => 'getEstadoSolicitacao',
'numero_versao_solicitacao_pagamento' => 'getNumeroVersaoSolicitacaoPagamento',
'link_qr_code' => 'getLinkQrCode',
'qr_code' => 'getQrCode',
'cpf_devedor' => 'getCpfDevedor',
'cnpj_devedor' => 'getCnpjDevedor',
'nome_devedor' => 'getNomeDevedor',
'valor_original_solicitacao' => 'getValorOriginalSolicitacao',
'codigo_solicitacao_banco_central_brasil' => 'getCodigoSolicitacaoBancoCentralBrasil',
'descricao_solicitacao_pagamento' => 'getDescricaoSolicitacaoPagamento',
'lista_informacao_adicional' => 'getListaInformacaoAdicional',
'codigo_identificador_pagamento' => 'getCodigoIdentificadorPagamento',
'valor_pagamento' => 'getValorPagamento',
'timestamp_pagamento' => 'getTimestampPagamento',
'cpf_pagador' => 'getCpfPagador',
'cnpj_pagador' => 'getCnpjPagador',
'nome_cliente_pagador' => 'getNomeClientePagador',
'texto_informativo_pagador' => 'getTextoInformativoPagador'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['codigo_guia_recebimento'] = isset($data['codigo_guia_recebimento']) ? $data['codigo_guia_recebimento'] : null;
        $this->container['email_devedor'] = isset($data['email_devedor']) ? $data['email_devedor'] : null;
        $this->container['codigo_pais_telefone_devedor'] = isset($data['codigo_pais_telefone_devedor']) ? $data['codigo_pais_telefone_devedor'] : null;
        $this->container['ddd_telefone_devedor'] = isset($data['ddd_telefone_devedor']) ? $data['ddd_telefone_devedor'] : null;
        $this->container['numero_telefone_devedor'] = isset($data['numero_telefone_devedor']) ? $data['numero_telefone_devedor'] : null;
        $this->container['timestamp_criacao_solicitacao'] = isset($data['timestamp_criacao_solicitacao']) ? $data['timestamp_criacao_solicitacao'] : null;
        $this->container['quantidade_segundo_expiracao'] = isset($data['quantidade_segundo_expiracao']) ? $data['quantidade_segundo_expiracao'] : null;
        $this->container['estado_solicitacao'] = isset($data['estado_solicitacao']) ? $data['estado_solicitacao'] : null;
        $this->container['numero_versao_solicitacao_pagamento'] = isset($data['numero_versao_solicitacao_pagamento']) ? $data['numero_versao_solicitacao_pagamento'] : null;
        $this->container['link_qr_code'] = isset($data['link_qr_code']) ? $data['link_qr_code'] : null;
        $this->container['qr_code'] = isset($data['qr_code']) ? $data['qr_code'] : null;
        $this->container['cpf_devedor'] = isset($data['cpf_devedor']) ? $data['cpf_devedor'] : null;
        $this->container['cnpj_devedor'] = isset($data['cnpj_devedor']) ? $data['cnpj_devedor'] : null;
        $this->container['nome_devedor'] = isset($data['nome_devedor']) ? $data['nome_devedor'] : null;
        $this->container['valor_original_solicitacao'] = isset($data['valor_original_solicitacao']) ? $data['valor_original_solicitacao'] : null;
        $this->container['codigo_solicitacao_banco_central_brasil'] = isset($data['codigo_solicitacao_banco_central_brasil']) ? $data['codigo_solicitacao_banco_central_brasil'] : null;
        $this->container['descricao_solicitacao_pagamento'] = isset($data['descricao_solicitacao_pagamento']) ? $data['descricao_solicitacao_pagamento'] : null;
        $this->container['lista_informacao_adicional'] = isset($data['lista_informacao_adicional']) ? $data['lista_informacao_adicional'] : null;
        $this->container['codigo_identificador_pagamento'] = isset($data['codigo_identificador_pagamento']) ? $data['codigo_identificador_pagamento'] : null;
        $this->container['valor_pagamento'] = isset($data['valor_pagamento']) ? $data['valor_pagamento'] : null;
        $this->container['timestamp_pagamento'] = isset($data['timestamp_pagamento']) ? $data['timestamp_pagamento'] : null;
        $this->container['cpf_pagador'] = isset($data['cpf_pagador']) ? $data['cpf_pagador'] : null;
        $this->container['cnpj_pagador'] = isset($data['cnpj_pagador']) ? $data['cnpj_pagador'] : null;
        $this->container['nome_cliente_pagador'] = isset($data['nome_cliente_pagador']) ? $data['nome_cliente_pagador'] : null;
        $this->container['texto_informativo_pagador'] = isset($data['texto_informativo_pagador']) ? $data['texto_informativo_pagador'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['codigo_guia_recebimento'] === null) {
            $invalidProperties[] = "'codigo_guia_recebimento' can't be null";
        }
        if ($this->container['email_devedor'] === null) {
            $invalidProperties[] = "'email_devedor' can't be null";
        }
        if ($this->container['codigo_pais_telefone_devedor'] === null) {
            $invalidProperties[] = "'codigo_pais_telefone_devedor' can't be null";
        }
        if ($this->container['ddd_telefone_devedor'] === null) {
            $invalidProperties[] = "'ddd_telefone_devedor' can't be null";
        }
        if ($this->container['numero_telefone_devedor'] === null) {
            $invalidProperties[] = "'numero_telefone_devedor' can't be null";
        }
        if ($this->container['timestamp_criacao_solicitacao'] === null) {
            $invalidProperties[] = "'timestamp_criacao_solicitacao' can't be null";
        }
        if ($this->container['quantidade_segundo_expiracao'] === null) {
            $invalidProperties[] = "'quantidade_segundo_expiracao' can't be null";
        }
        if ($this->container['estado_solicitacao'] === null) {
            $invalidProperties[] = "'estado_solicitacao' can't be null";
        }
        if ($this->container['numero_versao_solicitacao_pagamento'] === null) {
            $invalidProperties[] = "'numero_versao_solicitacao_pagamento' can't be null";
        }
        if ($this->container['link_qr_code'] === null) {
            $invalidProperties[] = "'link_qr_code' can't be null";
        }
        if ($this->container['qr_code'] === null) {
            $invalidProperties[] = "'qr_code' can't be null";
        }
        if ($this->container['cpf_devedor'] === null) {
            $invalidProperties[] = "'cpf_devedor' can't be null";
        }
        if ($this->container['cnpj_devedor'] === null) {
            $invalidProperties[] = "'cnpj_devedor' can't be null";
        }
        if ($this->container['nome_devedor'] === null) {
            $invalidProperties[] = "'nome_devedor' can't be null";
        }
        if ($this->container['valor_original_solicitacao'] === null) {
            $invalidProperties[] = "'valor_original_solicitacao' can't be null";
        }
        if ($this->container['codigo_solicitacao_banco_central_brasil'] === null) {
            $invalidProperties[] = "'codigo_solicitacao_banco_central_brasil' can't be null";
        }
        if ($this->container['descricao_solicitacao_pagamento'] === null) {
            $invalidProperties[] = "'descricao_solicitacao_pagamento' can't be null";
        }
        if ($this->container['lista_informacao_adicional'] === null) {
            $invalidProperties[] = "'lista_informacao_adicional' can't be null";
        }
        if ($this->container['codigo_identificador_pagamento'] === null) {
            $invalidProperties[] = "'codigo_identificador_pagamento' can't be null";
        }
        if ($this->container['valor_pagamento'] === null) {
            $invalidProperties[] = "'valor_pagamento' can't be null";
        }
        if ($this->container['timestamp_pagamento'] === null) {
            $invalidProperties[] = "'timestamp_pagamento' can't be null";
        }
        if ($this->container['cpf_pagador'] === null) {
            $invalidProperties[] = "'cpf_pagador' can't be null";
        }
        if ($this->container['cnpj_pagador'] === null) {
            $invalidProperties[] = "'cnpj_pagador' can't be null";
        }
        if ($this->container['nome_cliente_pagador'] === null) {
            $invalidProperties[] = "'nome_cliente_pagador' can't be null";
        }
        if ($this->container['texto_informativo_pagador'] === null) {
            $invalidProperties[] = "'texto_informativo_pagador' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets codigo_guia_recebimento
     *
     * @return string
     */
    public function getCodigoGuiaRecebimento()
    {
        return $this->container['codigo_guia_recebimento'];
    }

    /**
     * Sets codigo_guia_recebimento
     *
     * @param string $codigo_guia_recebimento Código de Barras  ou Outro identificador do cliente informado no momento da criação da solicitação de pagamento.
     *
     * @return $this
     */
    public function setCodigoGuiaRecebimento($codigo_guia_recebimento)
    {
        $this->container['codigo_guia_recebimento'] = $codigo_guia_recebimento;

        return $this;
    }

    /**
     * Gets email_devedor
     *
     * @return string
     */
    public function getEmailDevedor()
    {
        return $this->container['email_devedor'];
    }

    /**
     * Sets email_devedor
     *
     * @param string $email_devedor E-mail do devedor para contato.
     *
     * @return $this
     */
    public function setEmailDevedor($email_devedor)
    {
        $this->container['email_devedor'] = $email_devedor;

        return $this;
    }

    /**
     * Gets codigo_pais_telefone_devedor
     *
     * @return int
     */
    public function getCodigoPaisTelefoneDevedor()
    {
        return $this->container['codigo_pais_telefone_devedor'];
    }

    /**
     * Sets codigo_pais_telefone_devedor
     *
     * @param int $codigo_pais_telefone_devedor Código do País do Telefone do devedor.
     *
     * @return $this
     */
    public function setCodigoPaisTelefoneDevedor($codigo_pais_telefone_devedor)
    {
        $this->container['codigo_pais_telefone_devedor'] = $codigo_pais_telefone_devedor;

        return $this;
    }

    /**
     * Gets ddd_telefone_devedor
     *
     * @return int
     */
    public function getDddTelefoneDevedor()
    {
        return $this->container['ddd_telefone_devedor'];
    }

    /**
     * Sets ddd_telefone_devedor
     *
     * @param int $ddd_telefone_devedor DDD do telefone do devedor.
     *
     * @return $this
     */
    public function setDddTelefoneDevedor($ddd_telefone_devedor)
    {
        $this->container['ddd_telefone_devedor'] = $ddd_telefone_devedor;

        return $this;
    }

    /**
     * Gets numero_telefone_devedor
     *
     * @return int
     */
    public function getNumeroTelefoneDevedor()
    {
        return $this->container['numero_telefone_devedor'];
    }

    /**
     * Sets numero_telefone_devedor
     *
     * @param int $numero_telefone_devedor Número do telefone do devedor.
     *
     * @return $this
     */
    public function setNumeroTelefoneDevedor($numero_telefone_devedor)
    {
        $this->container['numero_telefone_devedor'] = $numero_telefone_devedor;

        return $this;
    }

    /**
     * Gets timestamp_criacao_solicitacao
     *
     * @return string
     */
    public function getTimestampCriacaoSolicitacao()
    {
        return $this->container['timestamp_criacao_solicitacao'];
    }

    /**
     * Sets timestamp_criacao_solicitacao
     *
     * @param string $timestamp_criacao_solicitacao Timestamp que indica o momento em que foi criada a cobrança. Respeita o formato definido na RFC 3339.
     *
     * @return $this
     */
    public function setTimestampCriacaoSolicitacao($timestamp_criacao_solicitacao)
    {
        $this->container['timestamp_criacao_solicitacao'] = $timestamp_criacao_solicitacao;

        return $this;
    }

    /**
     * Gets quantidade_segundo_expiracao
     *
     * @return int
     */
    public function getQuantidadeSegundoExpiracao()
    {
        return $this->container['quantidade_segundo_expiracao'];
    }

    /**
     * Sets quantidade_segundo_expiracao
     *
     * @param int $quantidade_segundo_expiracao Duração que indica limite, com granularidade de segundos, para que o pagamento do QR Code possa ser realizado, a partir da data-hora de criação. Deve ser utilizado como espécie de data de vencimentos em segundos que deverá ser calculada da data-hora de criação até a data-hora de vencimento. Caso não informado, assume-se a duração de 86400 segundos, que corresponde a 24 horas.
     *
     * @return $this
     */
    public function setQuantidadeSegundoExpiracao($quantidade_segundo_expiracao)
    {
        $this->container['quantidade_segundo_expiracao'] = $quantidade_segundo_expiracao;

        return $this;
    }

    /**
     * Gets estado_solicitacao
     *
     * @return string
     */
    public function getEstadoSolicitacao()
    {
        return $this->container['estado_solicitacao'];
    }

    /**
     * Sets estado_solicitacao
     *
     * @param string $estado_solicitacao Texto descritivo do Estado Solicitacao.
     *
     * @return $this
     */
    public function setEstadoSolicitacao($estado_solicitacao)
    {
        $this->container['estado_solicitacao'] = $estado_solicitacao;

        return $this;
    }

    /**
     * Gets numero_versao_solicitacao_pagamento
     *
     * @return int
     */
    public function getNumeroVersaoSolicitacaoPagamento()
    {
        return $this->container['numero_versao_solicitacao_pagamento'];
    }

    /**
     * Sets numero_versao_solicitacao_pagamento
     *
     * @param int $numero_versao_solicitacao_pagamento O tipo do campo \"Numero Versao Solicitacao Pagamento\" é um número. Sempre começa em zero. Sempre varia em acréscimos de 1.  O campo \"Numero Versao Solicitacao Pagamento\" adiciona rastreabilidade ao payload. Uma vez que se recomenda que o payload assinado seja armazenado pelo PSP do pagador em seus registros, fica facilitada a comunicação entre PSPs acerca de qual payload especificamente está se tratando, no contexto de resolução de possíveis problemas.
     *
     * @return $this
     */
    public function setNumeroVersaoSolicitacaoPagamento($numero_versao_solicitacao_pagamento)
    {
        $this->container['numero_versao_solicitacao_pagamento'] = $numero_versao_solicitacao_pagamento;

        return $this;
    }

    /**
     * Gets link_qr_code
     *
     * @return string
     */
    public function getLinkQrCode()
    {
        return $this->container['link_qr_code'];
    }

    /**
     * Sets link_qr_code
     *
     * @param string $link_qr_code O campo Link URL representa uma URL que será utilizada para recuperação dos dados que fazem parte do pagamento.   O formato dessa URL, bem como os demais detalhes sobre segurança relacionados ao QR Code,está detalhadono Manual de Segurança do SFN.
     *
     * @return $this
     */
    public function setLinkQrCode($link_qr_code)
    {
        $this->container['link_qr_code'] = $link_qr_code;

        return $this;
    }

    /**
     * Gets qr_code
     *
     * @return string
     */
    public function getQrCode()
    {
        return $this->container['qr_code'];
    }

    /**
     * Sets qr_code
     *
     * @param string $qr_code Texto para geração da imagem do QrCode Dinâmico.
     *
     * @return $this
     */
    public function setQrCode($qr_code)
    {
        $this->container['qr_code'] = $qr_code;

        return $this;
    }

    /**
     * Gets cpf_devedor
     *
     * @return int
     */
    public function getCpfDevedor()
    {
        return $this->container['cpf_devedor'];
    }

    /**
     * Sets cpf_devedor
     *
     * @param int $cpf_devedor Determina o CPF do devedor.
     *
     * @return $this
     */
    public function setCpfDevedor($cpf_devedor)
    {
        $this->container['cpf_devedor'] = $cpf_devedor;

        return $this;
    }

    /**
     * Gets cnpj_devedor
     *
     * @return int
     */
    public function getCnpjDevedor()
    {
        return $this->container['cnpj_devedor'];
    }

    /**
     * Sets cnpj_devedor
     *
     * @param int $cnpj_devedor Determina o CNPJ do devedor. Não é permitido que o campo \"Numero CPF Devedor\" e campo \"Numero Cadastro Nac Pessoas Juridicas Devedor\" estejam preenchidos ao mesmo tempo. Se o campo  \"Numero Cadastro Nac Pessoas Juridicas Devedor\" está preenchido, então o campo \"Numero CPF Devedor\" não pode estar preenchido, e vice-versa. Se o campo \"Nome Devedor\" está preenchido, então deve existir ou um campo \"Numero CPF Devedor\" ou um campo  \"Numero Cadastro Nac Pessoas Juridicas Devedor\" preenchido.
     *
     * @return $this
     */
    public function setCnpjDevedor($cnpj_devedor)
    {
        $this->container['cnpj_devedor'] = $cnpj_devedor;

        return $this;
    }

    /**
     * Gets nome_devedor
     *
     * @return string
     */
    public function getNomeDevedor()
    {
        return $this->container['nome_devedor'];
    }

    /**
     * Sets nome_devedor
     *
     * @param string $nome_devedor Determina o nome da instituição ou pessoa a quem a cobrança está endereçada. O preenchimento do campo \"Nome Devedor\" é obrigatório se o campo \"Numero CPF Devedor\" ou o campo \"Numero Cadastro Nac Pessoas Juridicas Devedor\" estiver preenchido.
     *
     * @return $this
     */
    public function setNomeDevedor($nome_devedor)
    {
        $this->container['nome_devedor'] = $nome_devedor;

        return $this;
    }

    /**
     * Gets valor_original_solicitacao
     *
     * @return float
     */
    public function getValorOriginalSolicitacao()
    {
        return $this->container['valor_original_solicitacao'];
    }

    /**
     * Sets valor_original_solicitacao
     *
     * @param float $valor_original_solicitacao Valor original do documento.
     *
     * @return $this
     */
    public function setValorOriginalSolicitacao($valor_original_solicitacao)
    {
        $this->container['valor_original_solicitacao'] = $valor_original_solicitacao;

        return $this;
    }

    /**
     * Gets codigo_solicitacao_banco_central_brasil
     *
     * @return string
     */
    public function getCodigoSolicitacaoBancoCentralBrasil()
    {
        return $this->container['codigo_solicitacao_banco_central_brasil'];
    }

    /**
     * Sets codigo_solicitacao_banco_central_brasil
     *
     * @param string $codigo_solicitacao_banco_central_brasil Chave DICT do Recebedor cadastrada no Banco Central - O campo \"Codigo Solicitação Banco Central\", obrigatório, determina a chave Pix registrada no DICT que será utilizada para a cobrança. Essa chave será lida pelo aplicativo do PSP do pagador para consulta ao DICT, que retornará a informação que identificará o recebedor da cobrança.
     *
     * @return $this
     */
    public function setCodigoSolicitacaoBancoCentralBrasil($codigo_solicitacao_banco_central_brasil)
    {
        $this->container['codigo_solicitacao_banco_central_brasil'] = $codigo_solicitacao_banco_central_brasil;

        return $this;
    }

    /**
     * Gets descricao_solicitacao_pagamento
     *
     * @return string
     */
    public function getDescricaoSolicitacaoPagamento()
    {
        return $this->container['descricao_solicitacao_pagamento'];
    }

    /**
     * Sets descricao_solicitacao_pagamento
     *
     * @param string $descricao_solicitacao_pagamento Determina um texto a ser apresentado ao pagador para que ele possa digitar uma informação correlata, em formato livre, a ser enviada ao recebedor. Esse texto40 será preenchido, na pacs.008, pelo PSP do pagador, no campo RemittanceInformation <RmtInf>. O tamanho do campo <RmtInf> na pacs.008 está limitado a 140 caracteres.
     *
     * @return $this
     */
    public function setDescricaoSolicitacaoPagamento($descricao_solicitacao_pagamento)
    {
        $this->container['descricao_solicitacao_pagamento'] = $descricao_solicitacao_pagamento;

        return $this;
    }

    /**
     * Gets lista_informacao_adicional
     *
     * @return \Swagger\Client\Model\InlineResponse2001ListaInformacaoAdicional
     */
    public function getListaInformacaoAdicional()
    {
        return $this->container['lista_informacao_adicional'];
    }

    /**
     * Sets lista_informacao_adicional
     *
     * @param \Swagger\Client\Model\InlineResponse2001ListaInformacaoAdicional $lista_informacao_adicional lista_informacao_adicional
     *
     * @return $this
     */
    public function setListaInformacaoAdicional($lista_informacao_adicional)
    {
        $this->container['lista_informacao_adicional'] = $lista_informacao_adicional;

        return $this;
    }

    /**
     * Gets codigo_identificador_pagamento
     *
     * @return string
     */
    public function getCodigoIdentificadorPagamento()
    {
        return $this->container['codigo_identificador_pagamento'];
    }

    /**
     * Sets codigo_identificador_pagamento
     *
     * @param string $codigo_identificador_pagamento EndToEndIdentification que transita na PACS002, PACS004 e PACS008.
     *
     * @return $this
     */
    public function setCodigoIdentificadorPagamento($codigo_identificador_pagamento)
    {
        $this->container['codigo_identificador_pagamento'] = $codigo_identificador_pagamento;

        return $this;
    }

    /**
     * Gets valor_pagamento
     *
     * @return float
     */
    public function getValorPagamento()
    {
        return $this->container['valor_pagamento'];
    }

    /**
     * Sets valor_pagamento
     *
     * @param float $valor_pagamento Valor do pagamento (pix).
     *
     * @return $this
     */
    public function setValorPagamento($valor_pagamento)
    {
        $this->container['valor_pagamento'] = $valor_pagamento;

        return $this;
    }

    /**
     * Gets timestamp_pagamento
     *
     * @return string
     */
    public function getTimestampPagamento()
    {
        return $this->container['timestamp_pagamento'];
    }

    /**
     * Sets timestamp_pagamento
     *
     * @param string $timestamp_pagamento Horário em que o Pix foi processado no PSP.
     *
     * @return $this
     */
    public function setTimestampPagamento($timestamp_pagamento)
    {
        $this->container['timestamp_pagamento'] = $timestamp_pagamento;

        return $this;
    }

    /**
     * Gets cpf_pagador
     *
     * @return int
     */
    public function getCpfPagador()
    {
        return $this->container['cpf_pagador'];
    }

    /**
     * Sets cpf_pagador
     *
     * @param int $cpf_pagador CPF do usuário pagador.
     *
     * @return $this
     */
    public function setCpfPagador($cpf_pagador)
    {
        $this->container['cpf_pagador'] = $cpf_pagador;

        return $this;
    }

    /**
     * Gets cnpj_pagador
     *
     * @return int
     */
    public function getCnpjPagador()
    {
        return $this->container['cnpj_pagador'];
    }

    /**
     * Sets cnpj_pagador
     *
     * @param int $cnpj_pagador CNPJ do usuário pagador.
     *
     * @return $this
     */
    public function setCnpjPagador($cnpj_pagador)
    {
        $this->container['cnpj_pagador'] = $cnpj_pagador;

        return $this;
    }

    /**
     * Gets nome_cliente_pagador
     *
     * @return string
     */
    public function getNomeClientePagador()
    {
        return $this->container['nome_cliente_pagador'];
    }

    /**
     * Sets nome_cliente_pagador
     *
     * @param string $nome_cliente_pagador Nome do usuário pagador.
     *
     * @return $this
     */
    public function setNomeClientePagador($nome_cliente_pagador)
    {
        $this->container['nome_cliente_pagador'] = $nome_cliente_pagador;

        return $this;
    }

    /**
     * Gets texto_informativo_pagador
     *
     * @return string
     */
    public function getTextoInformativoPagador()
    {
        return $this->container['texto_informativo_pagador'];
    }

    /**
     * Sets texto_informativo_pagador
     *
     * @param string $texto_informativo_pagador Informação livre do pagador <= 140 characters.
     *
     * @return $this
     */
    public function setTextoInformativoPagador($texto_informativo_pagador)
    {
        $this->container['texto_informativo_pagador'] = $texto_informativo_pagador;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
