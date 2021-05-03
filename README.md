

# Docker Compose Php MySQL
## _Infrastructure and Cloud Computing - MBA ES21_

## Desafio

> Subir dois contêineres, nginx e mysql, mapeando a porta 80 do nginx para acesso pelo host e permitir que o contêiner do nginx tenha comunicação de rede no contêiner mysql. 
Enviar sequência de comandos na linha de comando ou o Docker-compose com os arquivos necessários para que a solução funcione.

## Tech

Tecnologias utilizadas

- [MySQL](https://www.mysql.com/) - O MySQL é um sistema de gerenciamento de banco de dados, que utiliza a linguagem SQL como interface
- [Docker](https://www.docker.com/) - Docker é um conjunto de produtos de plataforma como serviço que usam virtualização de nível de sistema operacional para entregar software em pacotes chamados contêineres
- [PHP](https://www.php.net/) - PHP é uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento de aplicações presentes e atuantes no lado do servidor, capazes de gerar conteúdo dinâmico na World Wide Web
-
- [nginx](https://www.nginx.com/) - Nginx é um servidor leve de HTTP
## Instalação


```sh
mkdir docker && cd docker
git clone https://github.com/jeffersonclark1/docker-mysql-php.git
docker-compose build app
docker-compose up -d
docker-compose ps
```

> Acessar o link para teste http://localhost:8000

## License

MIT

**Let's GO**