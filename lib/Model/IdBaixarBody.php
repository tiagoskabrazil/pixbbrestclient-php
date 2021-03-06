<?php
/**
 * IdBaixarBody
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
 * IdBaixarBody Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IdBaixarBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'id_baixar_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'numero_convenio' => 'int',
'codigo_solicitacao_banco_central_brasil' => 'string',
'cpf_devedor' => 'int',
'cnpj_devedor' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'numero_convenio' => 'int32',
'codigo_solicitacao_banco_central_brasil' => null,
'cpf_devedor' => 'int64',
'cnpj_devedor' => 'int64'    ];

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
        'numero_convenio' => 'numeroConvenio',
'codigo_solicitacao_banco_central_brasil' => 'codigoSolicitacaoBancoCentralBrasil',
'cpf_devedor' => 'cpfDevedor',
'cnpj_devedor' => 'cnpjDevedor'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'numero_convenio' => 'setNumeroConvenio',
'codigo_solicitacao_banco_central_brasil' => 'setCodigoSolicitacaoBancoCentralBrasil',
'cpf_devedor' => 'setCpfDevedor',
'cnpj_devedor' => 'setCnpjDevedor'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'numero_convenio' => 'getNumeroConvenio',
'codigo_solicitacao_banco_central_brasil' => 'getCodigoSolicitacaoBancoCentralBrasil',
'cpf_devedor' => 'getCpfDevedor',
'cnpj_devedor' => 'getCnpjDevedor'    ];

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
        $this->container['numero_convenio'] = isset($data['numero_convenio']) ? $data['numero_convenio'] : null;
        $this->container['codigo_solicitacao_banco_central_brasil'] = isset($data['codigo_solicitacao_banco_central_brasil']) ? $data['codigo_solicitacao_banco_central_brasil'] : null;
        $this->container['cpf_devedor'] = isset($data['cpf_devedor']) ? $data['cpf_devedor'] : null;
        $this->container['cnpj_devedor'] = isset($data['cnpj_devedor']) ? $data['cnpj_devedor'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['numero_convenio'] === null) {
            $invalidProperties[] = "'numero_convenio' can't be null";
        }
        if ($this->container['codigo_solicitacao_banco_central_brasil'] === null) {
            $invalidProperties[] = "'codigo_solicitacao_banco_central_brasil' can't be null";
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
     * Gets numero_convenio
     *
     * @return int
     */
    public function getNumeroConvenio()
    {
        return $this->container['numero_convenio'];
    }

    /**
     * Sets numero_convenio
     *
     * @param int $numero_convenio Refere-se ao número de convênio de arrecadação de um Ente Público com o Banco do Brasil e possui até 6 posições numéricas.
     *
     * @return $this
     */
    public function setNumeroConvenio($numero_convenio)
    {
        $this->container['numero_convenio'] = $numero_convenio;

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
     * @param string $codigo_solicitacao_banco_central_brasil Refere-se à Chave Pix do Recebedor cadastrada no Banco do Brasil. O campo é obrigatório. Em ambiente de produção, a Chave Pix deverá estar vinculada a uma conta cujo CNPJ seja o mesmo utilizado na credencial de acesso à API. Em ambiente de homologação, use as chaves Pix criadas para usuários testes. A chave será lida pelo aplicativo do PSP do pagador para consulta ao DICT que retornará a informação e identificará o recebedor da arrecadação.
     *
     * @return $this
     */
    public function setCodigoSolicitacaoBancoCentralBrasil($codigo_solicitacao_banco_central_brasil)
    {
        $this->container['codigo_solicitacao_banco_central_brasil'] = $codigo_solicitacao_banco_central_brasil;

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
     * @param int $cpf_devedor Determina o CPF do devedor, caso haja. O campo não é obrigatório, porém, se informado, o campo NomeDevedor também deverá ser preenchido. Este campo não poderá ser informado, caso o campo cnpjDevedor contenha dados. Para fins de testes, usar os CPF da seção de dados para testes do portal BB Developers.
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
     * @param int $cnpj_devedor Determina o CNPJ do devedor, caso haja. O campo não é obrigatório, porém se informado, o campo NomeDevedor também deverá ser preenchido. Este campo não poderá ser informado, caso o campo cpfDevedor contenha dados. Para fins de testes, usar os CNPJ da seção de dados para testes do portal BB Developers.
     *
     * @return $this
     */
    public function setCnpjDevedor($cnpj_devedor)
    {
        $this->container['cnpj_devedor'] = $cnpj_devedor;

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
