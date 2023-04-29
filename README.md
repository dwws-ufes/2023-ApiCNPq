# 2023-ApiCNPq
[![forthebadge](https://forthebadge.com/images/badges/built-with-love.svg)](https://forthebadge.com) [![forthebadge](/made-with-php.svg)](https://forthebadge.com)

Assignment for the 2023 edition of the "Web Development and the Semantic Web" course, by Antonio Lucio Braga Secchin, Júlia de Souza Borges and Vilker Zucolotto Pessin

## Tech Stack
* PHP: ^8.2
* Composer: 2.5.5
* Laravel: ^10.8
* NodeJS: ^18.16.0
* PHP Create Class (extensão para gerar classes PHP no VS Code)

* Versão utilizada do framework = Laravel v10.8.0 (PHP v8.2.4)

## Configurando o ambiente

* Para gerenciar as dependências, será necessário o uso do **composer**. Para isso, basta acessar a documentação <https://getcomposer.org/download/>.
A versão utilziada neste projeto é: ``2.5.5`` 

* Para utilizar o **PostgreSQL**, adicione a seguinte extensão no arquivo ```php.ini```:  **``extension=php_pgsql.dll``**, **``extension=pdo_pgsql``**

* Para a utilização do Laravel com PHP 8.2, lembre-se de adicionar a extensão **`` extension=fileinfo``** no arquivo  ```php.ini```.

## Caso esteja clonando o repositório...

Caso tenha clonadao o repositório, basta acessar a pasta ```apicnqp``` e esecutar o comando:
```
composer install
```
para ter acesso à todas as dependências do projeto!