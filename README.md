Olá.

Este é um repositório que contém o sistema válido como teste para o processo seletivo da empresa Superlogica Imobiliária.

O este sistema consiste em criar um CRUD que comunique com a API fornecida pela Superlogica Imobiliária.
Ele foi criado com PHP utilizando o framework Codeigniter3. Faz uma conexão com um banco no localhost e com a API online.
No front end foi usado apenas Bootstrap e JavaScript puro.

Vamos para alguns passos necessários para o funcionamento correto do sistema:

## 1º Passo: criar o Banco Local

Primeiramente, usando o [phpMyAdmin](http://localhost/phpmyadmin/index.php), crie um banco de dados em MySQL chamado "db_superlogica"
e importe o arquivo BANCO.sql contido neste repositório.

## 2º Passo: configurar o arquivo database.php

Este arquivo encontra-se em: application/config/database.php. Você deverá alterar as linhas 78, 79, 80 e 81 conforme as
configurações do seu banco de dados local - hostname, username, password e database.

## Testando

Se tudo ocorreu bem, o sistema estará funcionando.
Você poderá fazer cadastro e login utilizando o banco local e fazer cadastros, buscas, edições e exclusões nos dados
da API.

Até o momento, algumas edições e a exclusão não estão funcionando como deveriam.
