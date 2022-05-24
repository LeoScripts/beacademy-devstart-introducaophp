## PHP

## configutações 
- configurando o php.ini no linux
  - abra o terminal
  - digite: `php --init`
  - sera exibido o local do arquivo que geralmente é : /etc/php/`versao so php`/cli/php.ini 
  - acesse e abra o arquivo com o seu editor preferido
  - dentro do aquivo a partir da linha `917` existem varias configurações comentadas descomente as que você ira usar
   - pra aula-00 foi descomentadas `curl`, `mbstring`, `mysqli` e `pdo_mysql`
## comandos
- `php -S localhost:8000` - coda o script e gera um servidor em http://localhost:8000/
- `php -S localhost:8000 -t aula-01` - coda o script e gera um servidor em http://localhost:8000/
  > `php` => liguagem usada
  >> `-S` =>  pra subir um servidor
  >>> `localhost` => rodar localmente
  >>>> `8000` => na porta 8000
  >>>>> `-t aula-01`   => no diretorio aula-01

- `php -a` - executa o php no terminal
  > digitei esse pequeno exemplo
  ```
  echo "Ola PHP"; echo " me chamo Leandro";
  ```
- virgula(`,`) no php se colocarmos 10,5 o retorno ser 105 em questao a numeros
- ponto(`.`) se colocarmos 10.5 o retorno sera 10.5 porque geralmente os padroes de liguagens por isso o modelo americano 

