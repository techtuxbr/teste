# Questões

| Questões 1 - 6            | Questões 7 - 11             |
|---------------------------|-----------------------------|
| [Question 1 - Nível 1][1] | [Question 7 - Nível 2][7]   |  
| [Question 2 - Nível 1][2] | [Question 8 - Nível 2][8]   |  
| [Question 3 - Nível 1][3] | [Question 9 - Nível 2][9]   |  
| [Question 4 - Nível 1][4] | [Question 10 - Nível 2][10] |  
| [Question 5 - Nível 1][5] | [Question 11 - Nível 2][11] |  
| [Question 6 - Nível 1][6] |                             |  
                     
***

[1]:#

### 1 Ao conectar com o banco utilizamos a classe PDO, portanto utilizamos PHP Orientado a Objetos. Analise o código abaixo e assinale a alternativa correta.

```php
<?php
new \PDO("mysql:host=localhost;dbname=test_oo", "root", "root");
```

No código acima, os parâmetros passados para a classe PDO pertencem a qual método?

- [ ] connect
- [ ] connection
- [x] construct
- [ ] mysql
- [ ] host

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/338>
    2. <https://www.schoolofnet.com/curso-php-avancando-com-oo/315>

**Nível:** 1
 	
***

### 2 Qual o erro no código abaixo?

```php
<?php
$db = new \PDO("mysql:host=localhost;dbname=test_oo","root","root");
$product = new Product($db);
$list = $product->list();
var_dump($list);
```

Analisando o código acima informe o que falta para que o código funcione corretamente e a listagem seja concluída.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-avancando-com-oo/316>
    2. Para conseguirmos utilizar uma classe precisamos ter acesso a ela.

Res.: `require_once "Product.php";`

**Nível:** 1
 	
***

### 3 Qual o principal objetivo ao criar uma interface para classes de conexão?

- [ ] Apenas seguir padrões e aumentar a dependência.
- [ ] Seguir padrões e deixar o código mais complexo.
- [ ] Dificultar a manutenção de terceiros, caso queiram copiar nosso código.
- [x] Diminuir dependência, permitindo que outros métodos de conexão sejam facilmente implementados futuramente.
- [ ] Não existe um motivo concreto para a criação de interfaces na Orientação a Objetos.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-avancando-com-oo/317>

**Nível:** 1
 	
***

### 4 Qual o problema que a injeção de dependência pode causar em seus projetos?

- [ ] Torna o sistema inseguro.
- [ ] Toda injeção de dependência deixa o sistema mais lento.
- [x] Torna a manutenção cada vez mais difícil e trabalhosa, quando se necessita de uma futura alteração.
- [ ] Torna o sistema dependênte de uma classe para o seu funcionamento.
- [ ] Torna o sistema mais rápido, porém com restrições de desenvolvimento.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-avancando-com-oo/318>

**Nível:** 1
 	
***

### 5 Qual, das opções abaixo, é uma solução possível para eliminar injeção de dependência?

- [ ] Static Services
- [ ] Dependency Service
- [ ] Dependency Container
- [ ] Dependency Service Container
- [x] Service Container

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-avancando-com-oo/319>

**Nível:** 1
 	
***

### 6 O que é o composer?

- [ ] Um pacote de autoload.
- [ ] Um gerador de classes.
- [ ] Um gerador de código aleatório.
- [x] Um gerenciador de pacotes PHP.
- [ ] Um instalador de aplicações em terminal.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-avancando-com-oo/320>

**Nível:** 1
 	
***

### 7 Qual arquivo devemos criar para configurar o autoload e gerenciar os pacotes com o composer?

- [ ] composer.php
- [ ] composer.config
- [ ] composer.ini
- [ ] composer.js
- [x] composer.json

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-avancando-com-oo/320>

**Nível:** 1
 	
***

### 8 O uso de um service container torna nosso código mais organizado e sustentável, porém existe outra vantagem ao utilizar este serviço. Qual seria esta vantagem, em relação a performance?

- [ ] Os serviços são instanciados e ficam prontos para o uso, pois permanecem alocados na memória do sistema. 
- [ ] Os serviços são instanciados, no momento do registro, mas não ocupam espaço na memória.
- [x] Os serviços são instanciados somente quando acionados, não oculpando, desnecessariamente, a memória do sistema.
- [ ] A facilidade de sintaxe para invocar um serviço.
- [ ] Possibilidade de invocar várias vezes o mesmo serviço.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-avancando-com-oo/321>

**Nível:** 1
 	
***

### 9 Qual a diferença entre o modo factory e o modo padrão, quando registramos um servico no Pimple?

- [ ] O modo factory deixa sempre um objeto criado, trocando de dois em dois segundos por um novo objeto.
- [ ] O modo normal registra em um local e o modo factory registra em outro, mas ambos tem o mesmo comportamento.
- [ ] Ambos são identicos e você pode escolhar qual forma lhe agrada mais.
- [ ] O modo normal é uma forma simplificada de registro e ocupa menos memória no servidor.
- [x] O modo normal retorna sempre um mesmo objeto e o modo factory retorna sempre um novo objeto.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-avancando-com-oo/322>

**Nível:** 1
 	
***

### 10 Analise o código abaixo e assinale a alternativa correta.

```php
<?php
require_once "../vendor/autoload.php";

use Pimple\Container;
$container = new Container();

$container['conn'] = function(){
    return new \Source\Conn("mysql:host=localhost;dbname=test_oo","root","root");
};

$container['product'] = function($c){
    return new \Source\Product($c['conn']);
};

$list = $container['product']->list();
var_dump($list);
```

No código acima do que se trata o parâmetro $c, passado no registro do segundo serviço?

- [ ] Uma classe qualquer. 
- [ ] Um serviço chamado "c".
- [ ] Um serviço qualquer.
- [x] O próprio container de serviços.
- [ ] Uma classe externa que não faz parte do container de serviços.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-avancando-com-oo/323>

**Nível:** 1
 	
***

### 11 É possível registrarmos valores fixos, como se fossem constantes, utilizando serviços?

- [x] Sim
- [ ] Não

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-avancando-com-oo/324>

**Nível:** 1
 	
***