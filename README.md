# Expert Framework HTTP

O **Expert Framework HTTP** é um conjunto de classes PHP criadas para simplificar a manipulação de solicitações e respostas HTTP. Este pacote oferece uma maneira eficiente de rotear solicitações, manipular dados da solicitação e gerar respostas em formatos como JSON e YAML.

Componente pertencente ao framework Jonaselias\ExpertFramework https://github.com/jonas-elias/mercado-software-expert

## Instalação 🚀

Para começar a usar o Componente Expert Framework HTTP, você pode instalá-lo facilmente via Composer. Basta executar o seguinte comando:

```bash
composer require expert-framework/http
```

## Uso ✅

#### Router

A classe Router oferece um mecanismo simples para definir rotas para diferentes métodos HTTP (GET, POST, PUT, DELETE). Você pode registrar rotas e associá-las a manipuladores de solicitação. Abaixo estão exemplos de como registrar rotas:

```php
use ExpertFramework\Http\Router\Router;

Router::get('/home', 'HomeController@index');
Router::post('/users', 'UserController@store');
Router::put('/users/{id}', 'UserController@update');
Router::delete('/users/{id}', 'UserController@destroy');

```

#### Request
A classe Request permite que você acesse informações sobre a solicitação HTTP atual, como o método da solicitação, o caminho, parâmetros da consulta (query), corpo da solicitação e cabeçalhos. Aqui estão exemplos de como usar a classe Request:

```php
use ExpertFramework\Http\Request;

$request = new Request();

$method = $request->getMethod();
$path = $request->path();
$queryParam = $request->query('param_name');
$bodyData = $request->body();
$headerValue = $request->header('header_name');
```

#### Response
A classe Response permite que você crie e envie respostas HTTP com diferentes formatos, como JSON e YAML, bem como definir códigos de status HTTP. Veja exemplos de como usar a classe Response:

```php
use ExpertFramework.Http\Response;

$response = new Response();

// Enviar uma resposta JSON com código de status 200
$response->json(['message' => 'Sucesso!'], 200);

// Enviar uma resposta YAML com código de status 201
$response->yaml('message: Sucesso!', 201);

// Definir apenas o código de status 404
$response->status(404);
```

## Dúvidas 🤔
Caso exista alguma dúvida sobre como instalar, utilizar ou gerenciar o projeto, entre em contato com o email: jonasdasilvaelias@gmail.com

Um grande abraço!
