<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### Sobre o projeto
A API Restful deve contemplar os módulos Cliente, Pastel e Pedido, sendo que
cada um deverá conter endpoints CRUD.
As tabelas devem conter as seguintes informações:<br>
● Cliente => nome, email, telefone, data de nascimento, endereço, complemento,
bairro, cep, data de cadastro;<br>
● Pastel=> nome, preço, foto;<br>
● Pedido=> código do cliente, código(s) do pastel, data da criação;
Requisitos<br>
● Não devem existir dois clientes com o mesmo email.<br>
● O pastel deve possuir foto.<br>
● Os dados devem ser validados.<br>
● O sistema deve conter uma série de tipos de pastéis já definidos.<br>
● O pedido deve contemplar N pastéis.<br>
● O cliente pode contemplar N pedidos.<br>
● Após a criação do pedido, o sistema deve disparar um email para o cliente
contendo os detalhes do seu pedido.<br>
● Os registros devem conter a funcionalidade de soft deletin
