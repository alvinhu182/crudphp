# Instruções para popular o Banco de Dados

Este arquivo fornece instruções sobre como popular o banco de dados do projeto CrudPhp.

## Pré-requisitos

Antes de começar, verifique se você tem o seguinte:

- Um servidor MySQL instalado e em execução.
- As credenciais de acesso ao banco de dados (nome de usuário e senha).

## Passos

Siga os passos abaixo para popular o banco de dados:

1. Faça o download ou clone o projeto CrudPhp em seu ambiente local.

2. Abra o arquivo `config.php` no diretório raiz do projeto.

3. Procure pelas variáveis que definem as informações de conexão com o banco de dados. Elas devem ter a seguinte aparência:

   ```php
   $db_name = 'nome_do_banco';
   $db_host = 'localhost';
   $db_user = 'nome_de_usuario';
   $db_password = 'senha';

4. Crie um banco de dados com o seguinte script:

```sql
CREATE DATABASE `test`; 
CREATE TABLE `test`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(64) NOT NULL,
  `email` VARCHAR(64) NOT NULL,
  `telefone` INT NOT NULL,
  PRIMARY KEY (`id`))
```

## Variavéis utilizadas neste projeto foram as seguintes:

```php
$db_name ='test';
$db_host ='localhost:3306';
$db_user ='root';
$db_password = '';