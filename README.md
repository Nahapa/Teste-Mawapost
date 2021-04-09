<p align="center"><a href="https://www.mawapost.com/" target="_blank"><img src="https://www.mawapost.com/wp-content/uploads/2021/03/Logo-Mawa-5.png" width="400"></a></p>

## Sobre o teste

* Criar um painel administrativo para cotação de moedas utilizando Laravel e blade. 
* No painel deverá ser possível fazer login e criar novas contas de usuário.
* Salvar o histórico das cotações realizadas pelo usuário logado.
* Para fazer as cotações utilize a API AwesomeAPI.


## Tecnologia utilizadas

- Linguagens: JS e PHP
- Front-End: Vue.js e Tailwind
- Back-End: Laravel
- Banco: MySql

## Requisitos

- Banco MySql, Node e Composer instalados na máquina.

## Instalação

Front: 
- npm install

Back:
- composer install
- Renomear o arquivo .env.example para .env e configurar com os dados de acesso a o banco de dados MySql
- php artisan key:generate
- php artisan migrate

## Como rodar

Front: npm run serve
- localhost:8000

Back: php artisan serve
- localhost:8080

## Sobre o projeto

No projeto foi construído o CRUD de usuários, autenticação de usuário, listagem das cotações, salvo de histórico de cotação, onde que no Back foi criado a API Restful para que o Front possa consumir essa API.

## Fluxo do projeto

- Back: route -> controller -> request -> resource -> service -> model
- Front: route -> page -> componentes -> vuex -> axios

## O que foi feito

- Layout agradável em TailwindCSS.
- SPA em Vue.js.
- API Restful em Laravel.
- CRUD Usuários.
- Autenticação de usuários.
- Consumo da api de cotação de moedas.
- Histórico de cotação.
- Documentação API <a href="https://documenter.getpostman.com/view/8741536/TzCV1iVv">https://documenter.getpostman.com/view/8741536/TzCV1iVv</a>

## Pendências

- Retorno de falha na validação da requisição no Front.
- Histórico visível por usuários (TENANT).

## Melhorias

- Máscaras para os campos de entrada.
- Responsividade.
- Confirmar senha.

