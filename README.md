

## SOBRE O PROJETO

Essa API foi desenvolvida com o foco de realizar uma CRUD de notícias

## AMBIENTE

Ambiente de desenvolvimento: Docker
Framework: Laravel
Linguagem: PHP
Banco: Mysql
Aplicativo de Teste de API: Postman

O projeto utiliza a nova ferramenta de linha de comando que é o "Laravel Sail".
O Laravel Sail permite o usuário criar e gerenciar o seu projeto laravel
no ambiente de desenvolvimento docker.

Porta MYSQL: 80
Porta Servidor: 3306

Observação:
Casos o Sistema Operacional for Windows, é necessário ter:
    - WSL2 instalada e ativada
    - Ubuntu para WSL2 instalado
    - Docker Desktop Instalado e Configurado

Todo os comandos serão realizados no ambiente Linux, então é necessário que o usuário acesse o terminal do
"ubuntu", pois é lá que rodamos os containers.

P.S: ADICIONAR LINKS PARA FACILITAR INSTALAÇÃO
## PASSO A PASSO

1º Passo: Iniciar os containers Docker

Deve-se entrar na pasta raiz do projeto, onde se encontra o arquivo "docker-compose.yml".

Após instalar o projeto, deve rodar o comando:

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs

Caso o projeto ja esteja instalado e os containers existentes, deve-se apenas subir os containers, rodar o comando:

./vendor/bin/sail up

Para pausar os containers:

./vendor/bin/sail stop

2º Passo: Criar as tabelas

./vendor/bin/sail artisan migrate

3º Passo: Gerar as seeders

./vendor/bin/sail artisan db:seed


PRONTO!
Agora a API está funcionando!

Documentação da API no Postman: https://documenter.getpostman.com/view/5876341/UVktqYpc




