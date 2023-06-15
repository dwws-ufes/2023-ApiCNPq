# PHP CRUD com Laravel: Leia com atenção! 
[![forthebadge](https://forthebadge.com/images/badges/built-with-love.svg)](https://forthebadge.com) [![forthebadge](/made-with-php.svg)](https://forthebadge.com)

## Arquivos importantes: 
* Rotas: ``\apicnpq\routes\web.php`` 

* Controller: ```\apicnpq\app\Http\Controllers```

* View: ```\apicnpq\resources\views```

## PHP Artisan
### Alguns comandos importantes!!

### Servidor interno

Execute o comando:
```
php artisan serve
```
com isso ele vai subir um servidor já em uma porta especificada, utilizando um host especificado, então, sobe um servidor no nosso localhost, na porta 8000.

Caso queira mudar algum parâmetro, execute:
```
php artisan serve --host=IP_do_host --port=PORTA
```
### Make
Doc: <https://laravel.com/docs/10.x/artisan#generating-commands>
Doc 2: <https://github.com/artesaos/laravel-docs/blob/master/pt_BR/migrations.md#introduction>

**Gerar *controller* automagicamente:** ```php artisan make:controller Nome-do-controller --resource ```

*Obs: Nome de classe sempre começa com letra maiúscula*

**Gerar *componente* automagicamente:** 
```
php artisan make:component Nome-do-componente 
```
ou 
```
php artisan make:component layout –view
```

**Gerar *migration* automagicamente:** 
```
php artisan make:migration create_TABLE-NAME_table
```
Para criar as tabelas, execute: 
```
php artisan migrate
```

Para **desfazer** a migrate, basta: ```php artisan migrate:rollback```

## LaravelMIX
Execute o comando 
```
npm install laravel-mix --save-dev
```
Depois crie na raiz do projeto o arquivo **webpack.mix.js** com o seguinte conteúdo:
```
const mix = require('laravel-mix');
```

Além disso, para executar corretamente o comando do mix, adicione ao seu **package.json**, em *"scripts"*, a linha **"mix": "mix"**.

Para executar o front-end, vamos utilizar: ``npm run mix``

## Instalando o Boostrap

Execute: 
```
npm install bootstrap
```
### Boostrap Icon
```
npm i bootstrap-icons
```

## DB Facade
Veja os arquivos:
```
apicnpq/app/Http/Controllers/UsuariosController.php
apicnpq/routes/web.php

```
