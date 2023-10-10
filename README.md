# Avaliação PHP
## Sistema de avaliação com notas de 1 a 5 em PHP.

<img src="https://github.com/filipijorge/avaliacao/blob/main/screenshot.png" width="400">

### Requisitos:
- Servidor LAMP

### Instruções:
Crie um banco de dados
```
CREATE DATABASE avaliacao;
```
Crie uma tabela no banco de dados:
```
CREATE TABLE notas(
id INT AUTO_INCREMENT,
nota TINYINT NOT NULL,
data DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id)
);
```
Acesse o diretório html:
```
cd /var/www/html
```
Copie os códigos:
```
git clone https://github.com/filipijorge/avaliacao.git
```


