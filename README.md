
![Logo](https://www.opovo.com.br/reboot/includes/assets/img/opovo%20logo.svg)


# Noticias-API

API desenvolvida para Criar, Listar, Atualizar e Deletar Noticias.




## Tecnologias Utilizadas

**Ambiente de Desenvolvimento:** Docker

**Linguagem:** PHP

**Framework:** Laravel

**Banco de dados:** Mysql

**Plataforma para teste da api:** Postman




## Instalação

**1º Passo**: Iniciar os containers Docker

Deve-se entrar na pasta raiz do projeto, onde se encontra o arquivo "docker-compose.yml".

Após clonar o projeto, deve-se rodar o comando:

```bash
docker run --rm
-u "$(id -u):$(id -g)"
-v $(pwd):/var/www/html
-w /var/www/html
laravelsail/php81-composer:latest
composer install --ignore-platform-reqs
```

Agora deve-se apenas subir os containers, rodar o comando:

```bash
./vendor/bin/sail up
```

Caso deseje pausar os containers:

```bash
./vendor/bin/sail stop
```

**2º Passo:** Criar as tabelas

./vendor/bin/sail artisan migrate

**3º Passo:** Gerar as seeders

./vendor/bin/sail artisan db:seed

PRONTO! Agora a API está funcionando!
    
## API Reference

#### Get all news

```http
  GET /api/news
```

#### Get specific news

```http
  GET /api/items/{id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `number` | **Required**  |



#### Create news

```http
  POST /api/items
```

#### Update news

```http
  PUT /api/items/${id}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `number` | **Required**  |


## Documentação da API

[Documentação](https://documenter.getpostman.com/view/5876341/UVktqYpc)

