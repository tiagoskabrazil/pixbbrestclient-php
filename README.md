# PIXBBApi - Montreal
API para gerenciar os serviços referentes ao PIX (Sistema de Pagamentos Instantâneos) no BB.

- API version: 1.8
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen
[https://developers.bb.com.br](https://developers.bb.com.br)

## Requerimentos

PHP >=5.5 

## Instalação e Uso
### Composer

Para instalar via composer, adicione o repositório abaixo, assim como a dependencia:

```
{
  "repositories": [
    {
     "type": "vcs",
	  "url": "git@github.com:tiagoskabrazil/pixbbrestclient-php.git"
    }
  ],
  "require": {
    "montreal/pixbbapi": "dev-dev-pixbbrestclient-php",
  }
}
```

Depois disto, execute `composer install`

### Manual Installation

Faça o download dos arquivos e inclua o `autoload.php` onde deseja utilizar

```php
    require_once('/path/to/pixbbapi/vendor/autoload.php');
```

## Tests

Para rodar os testes

```
composer install
./vendor/bin/phpunit
```

## Exemplo de utilização

Please follow the [installation procedure](#installation--usage) and then run the following:
Siga as orientações do processo de instalação e então execute o seguinte:

```php

/*********************************************************************************************
 * Definindo as configurações para o consumo do serviço rest do bb 
 * 
 * ******************************************************************************************/
$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAmbienteBB("T");
//developer_application_key
$config->setChaveAplicacaoBB("SEU_DEVELOPER_APPLICATION_KEY");
//client_id
$config->setUsername("SEU_CLIENTE_ID");
//client_secret
$config->setPassword("SUA_CLIENTE_SECRETE");


/*********************************************************************************************
 * Obtendo access token e utilizando no configurador
 * 
 * ******************************************************************************************/
$oauth2Api = new Swagger\Client\Api\Oauth2Api(
    new GuzzleHttp\Client(),
    $config
    );

try {
    $token = $oauth2Api->gerarAccessToken();
    $config->setAccessToken($token);
} catch (Exception $e) {
    echo 'ERRO->', $e->getMessage(), PHP_EOL;
}

 
/*********************************************************************************************
 * Efetuando chamada a API usando o token
 *
 * ******************************************************************************************/

$apiInstance = new Swagger\Client\Api\QrCodesApi(
    new GuzzleHttp\Client(),
    $config
);


$body = new \Swagger\Client\Model\ArrecadacaoqrcodesBody(); // \Swagger\Client\Model\ArrecadacaoqrcodesBody | 

try {
	
	$body['numero_convenio']=1;
	$result = $apiInstance->criaBoletoBancarioId($body, $config->getAccessToken(), $config->getChaveAplicacaoBB());
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QrCodesApi->criaBoletoBancarioId: ', $e->getMessage(), PHP_EOL;
}

?>

```

## Documentação dos API Endpoints

All URIs are relative to *https://api.sandbox.bb.com.br/pix-bb/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*QrCodesApi* | [**alteraQrCodeArrecadacao**](docs/Api/QrCodesApi.md#alteraqrcodearrecadacao) | **PUT** /arrecadacao-qrcodes/{id} | Gerenciar QRCode de Pagamento Instantâneo de uma Guia de Arrecadação
*QrCodesApi* | [**baixarQRCode**](docs/Api/QrCodesApi.md#baixarqrcode) | **POST** /arrecadacao-qrcodes/{id}/baixar | Baixar QRCode de Pagamento Instantâneo de uma Guia de Arrecadação
*QrCodesApi* | [**consultaQrCodeArrecadacao**](docs/Api/QrCodesApi.md#consultaqrcodearrecadacao) | **GET** /arrecadacao-qrcodes/{id} | Gerenciar QRCode de Pagamento Instantâneo de uma Guia de Arrecadação
*QrCodesApi* | [**consultaQrCodeGuiaRecolhimento**](docs/Api/QrCodesApi.md#consultaqrcodeguiarecolhimento) | **GET** /arrecadacao-qrcodes | Consultar QRCode de Pagamento Instantâneo por Guia de Recebimento
*QrCodesApi* | [**criaBoletoBancarioId**](docs/Api/QrCodesApi.md#criaboletobancarioid) | **POST** /arrecadacao-qrcodes | Gerar QRCode de Pagamento Instantâneo de uma Guia de Arrecadação
*QrCodesApi* | [**pagamentosQRCodeArrecadacao**](docs/Api/QrCodesApi.md#pagamentosqrcodearrecadacao) | **GET** /arrecadacao-qrcodes/pagamentos/{id} | Consulta um pagamento vinculado ao QRCode Registrado de uma Guia de Arrecadação

## Documentação dos Models

 - [ArrecadacaoqrcodesBody](docs/Model/ArrecadacaoqrcodesBody.md)
 - [ArrecadacaoqrcodesIdBody](docs/Model/ArrecadacaoqrcodesIdBody.md)
 - [ArrecadacaoqrcodesListaInformacaoAdicional](docs/Model/ArrecadacaoqrcodesListaInformacaoAdicional.md)
 - [ArrecadacaoqrcodesidListaInformacaoAdicional](docs/Model/ArrecadacaoqrcodesidListaInformacaoAdicional.md)
 - [Erro](docs/Model/Erro.md)
 - [ErroErros](docs/Model/ErroErros.md)
 - [ErroOAuthNaoAutorizado](docs/Model/ErroOAuthNaoAutorizado.md)
 - [ErroOAuthNaoAutorizadoAttributes](docs/Model/ErroOAuthNaoAutorizadoAttributes.md)
 - [IdBaixarBody](docs/Model/IdBaixarBody.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse2001ListaInformacaoAdicional](docs/Model/InlineResponse2001ListaInformacaoAdicional.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse200ListaInformacaoAdicional](docs/Model/InlineResponse200ListaInformacaoAdicional.md)
 - [InlineResponse201](docs/Model/InlineResponse201.md)

## OAuth2-ClientCredentials

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: 
 - **pix.arrecadacao-requisicao**: Permite a geração de um QrCode de pagamento instantâneo (PIX) a partir dos dados de uma guia de arrecadação (com ou sem código de barras)
 - **pix.arrecadacao-info**: Permite a consulta de um QrCode de pagamento instantâneo (PIX) a partir dos dados de uma guia de arrecadação (com ou sem código de barras)


## Author
tiago.nogueira@montreal.com.br


