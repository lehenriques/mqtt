#  MQTT chat com docker swarm e PHP
## _Atividade de Sala_

Projeto apresentado para o curso de Engenharia de Software na UniAmérica, para a disciplina de Projeto Sistemas Distribuídos

## Features

- Estudar sobre docker-compose e MQTT;
- Implementar um chat com servidor Mosquitto MQTT, implementar o chat com PHP.
- Apresentar a didatica e funcinamento.

## Development

Para iniciar o desenvolvimento, é necessário clonar o projeto do GitHub num diretório de sua preferência:

```shell
cd "diretorio de sua preferencia"
git clone https://github.com/lehenriques/mqtt-php
```

## Installation

Requer [Docker](https://docs.docker.com/engine/install/) e [docker-compose](https://docs.docker.com/compose/install/) para ser executado.

Primeiro deve iniciar o servidor MQTT...

```shell
docker-compose up -d
```

Este script foi adequado para ser executado em linha de comando, não foi projetado para solicitações web. Este é um exemplo para demonstrar a utilização de MQTT para um script de longa execução que adequará tópicos assinados.

subscribe.php
---
Deixe o arquivo `subscribe.php` recebendo as mensagens: 
```console
$ php phpclient/subscribe.php 
Msg Recieved: Fri, 13 Jan 2017 01:58:23 +0000
Leandro: Mensagem inicial.
```

send.php
---
Este exemplo publicará uma mensagem em um tópico.

Os resultados mostrados acima correspondem às mensagens que são enviadas pelo arquivo send.php
```console
$ php phpclient/send.php 
Digite seu nome: Leandro
Leandro: Mensagem inicial.
Leandro: 
```

Quando executado como uma solicitação da web, você usar apenas $mqtt->connect(), $mqtt->publish() e $mqtt->close(). 
Se estiver sendo executado como um script de linha de comando de longa duração, você deve executar $mqtt->proc() para manter a conexão com o servidor.
