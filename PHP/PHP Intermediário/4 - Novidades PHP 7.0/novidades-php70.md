# Questões

| Questões 1 - 4            | Questões 5 - 8             | Questões 9 - 12                | Questões 13 - 16              |
|---------------------------|-----------------------------|-------------------------------|-------------------------------|
| [Question 1 - Nível 2][1] | [Question 5 - Nível 2][5]   | [Question 9 - Nível 2][9]     | [Question 13 - Nível 2][13]   |  
| [Question 2 - Nível 2][2] | [Question 6 - Nível 2][6]   | [Question 10 - Nível 2][10]   | [Question 14 - Nível 2][14]   |  
| [Question 3 - Nível 2][3] | [Question 7 - Nível 2][7]   | [Question 11 - Nível 2][11]   | [Question 15 - Nível 2][15]   |  
| [Question 4 - Nível 2][4] | [Question 8 - Nível 2][8]   | [Question 12 - Nível 2][12]   | [Question 16 - Nível 2][16]   |  
                     
***

[1]:#1-analise-a-frase-abaixo-e-assinale-verdadeiro-ou-falso
[2]:#2-analise-a-frase-abaixo-e-assinale-verdadeiro-ou-falso
[3]:#3-assinale-a-alternativas-abaixo-que-nÃo-faz-parte-das-atualizações-da-versão-70-do-php-ou-seja-já-existia
[4]:#4-analise-o-código-abaixo-e-assinale-a-alternativa-correta
[5]:#5-analise-o-código-abaixo-e-assinale-a-alternativa-correta
[6]:#6-qual-estrutura-abaixo-representa-um-operador-null-coalescing
[7]:#7-qual-o-valor-resultante-do-código-abaixo
[8]:#8-qual-o-valor-resultante-do-código-abaixo
[9]:#9-qual-o-valor-resultante-do-código-abaixo
[10]:#10-qual-o-valor-resultante-do-código-abaixo
[11]:#11-analise-o-código-e-informe-a-alternativa-que-possue-o-resultado-correto
[12]:#12-em-relação-às-classes-anônimas-assinale-a-opção-que-acreditar-ser-a-mais-correta
[13]:#13-veja-o-código-abaixo-referente-a-closure-call
[14]:#14-analise-a-frase-abaixo-e-assinale-verdadeiro-ou-falso
[15]:#15-qual-seria-o-novo-padrão-para-declarar-namespaces-em-grupos
[16]:#16-o-que-a-função-intdiv-faz

***

### 1 Analise a frase abaixo e assinale verdadeiro ou falso.

"O PHP 7.0 modificou todo seu motor de processamento porém a velocidade continua a mesma do anterior. Apesar da velocidade ser a mesma, temos várias novas funcionalidades que tornam o fator velocidade insignificante."

- [ ] Verdadeiro 
- [x] Falso

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-7-novidades/300>

**Nível:** 2
 	
***

### 2 Analise a frase abaixo e assinale verdadeiro ou falso.

"A versão 7.0 removeu diversas funções antigas que trabalhavam com SQL. Agora todo trabalho com SQL deve ser feito utilizando bibliotecas como PDO ou mysqli."

- [x] Verdadeiro 
- [ ] Falso

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-7-novidades/300>

**Nível:** 2
 	
***

### 3 Assinale a alternativas abaixo que NÃO faz parte das atualizações da versão 7.0 do PHP, ou seja, já existia anteriormente.

- [ ] bool
- [ ] float
- [ ] int
- [ ] string
- [x] array

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-7-novidades/301>

**Nível:** 2
 	
***

### 4 Analise o código abaixo e assinale a alternativa correta.

```php
<?php

declare(strict_types=0);

class Carro
{
    public function __construct(string $name)
    {
        echo $name;
    }
}

$carro = new Carro(2);
```

Qual o resultado impresso na tela do usuário?

- [ ] Será impresso a string "name", pois ela é do tipo string e foi passada como parâmetro para o construtor.
- [ ] Não imprimirá nada pois estamos apenas instanciando a classe Carro, mas não estamos executando o método construtor.
- [ ] Teremos um erro, pois estamos declarando o modo strict_types, desta forma o construtor não aceitará o inteiro onde deveria ser uma string.
- [x] O construtor aceitará o inteiro, passado como parâmetro, pois estamos declarando o strict_types, porém com valor false, então o valor impresso será o número 2. 

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-7-novidades/302>

**Nível:** 2
 	
***

### 5 Analise o código abaixo e assinale a alternativa correta. 

```php
<?php
declare(strict_types=1);

function calcular(int $valor1, int $valor2) : float
{
    return $valor1 / $valor2;
}

$valor = calcular(7 , 2);
var_dump($valor);
```

Qual o valor retornado?

- [ ] 3
- [ ] false
- [ ] true
- [x] 3.5
- [ ] Retornará um erro, pois estamos declarando os parâmetros como inteiro e o retorno como float.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-7-novidades/303>

**Nível:** 2
 	
***

### 6 Qual estrutura abaixo representa um Operador Null Coalescing?

- [ ] `$name = isset($_GET['name']) ? $_GET['name'] : "null";` 
- [x] `$name = $_GET['name'] ?? "null";`
- [ ] `$name = $_GET['name'] ? "null";`
- [ ] `$name = $_GET['name'] :: "null";`
- [ ] `$name = $_GET['name'] ?: "null";`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-7-novidades/304>

**Nível:** 2
 	
***

### 7 Qual o valor resultante do código abaixo?

```php
echo 2 <=> 2;
echo 10 <=> 2;
echo 2 <=> 30;
```

- [ ] 0, -1 e 1
- [ ] 0, -1 e -1
- [ ] 1, -1 e 1
- [ ] 1, 0 e 1
- [x] 0, 1 e -1

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-7-novidades/305>

**Nível:** 2
 	
***

### 8 Qual o valor resultante do código abaixo?

```php
echo "Guilherme" <=> "Guilherme Ferreira";
```

- [ ] 1
- [ ] 0
- [x] -1
- [ ] Um erro, pois só podemos utilizar Operador Spaceship com números.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-7-novidades/305>

**Nível:** 2
 	
***

### 9 Qual o valor resultante do código abaixo?

```php
echo "a z" <=> "a b";
```

- [x] 1
- [ ] 0
- [ ] -1
- [ ] Um erro, pois só podemos utilizar Operador Spaceship com números.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-7-novidades/305>

**Nível:** 2
 	
***

### 10 Qual o valor resultante do código abaixo?

```php
echo [1,1] <=> [1,1];
```

- [ ] 1
- [x] 0
- [ ] -1
- [ ] Um erro, pois não podemos comparar arrays utilizando Operador Spaceship.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-7-novidades/305>

**Nível:** 2
 	
***

### 11 Analise o código e informe a alternativa que possue o resultado correto.

```php
<?php
declare(strict_types=1);

define('DADOS', [
   'primeiro' => 'Celular',
   'Óculos',
   'segundo' => 'Relógio',
   'Sapatos'
]);

echo DADOS[0];
```

Qual será o valor impresso pelo comando echo?

- [ ] Celular
- [ ] Relógio
- [ ] Sapatos
- [x] Óculos
- [ ] primeiro

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-7-novidades/306>

**Nível:** 2
 	
***

### 12 Em relação às classes anônimas, assinale a opção que acreditar ser a mais correta?

- [x] Podemos instanciar uma classe, em tempo de execução, e implementar uma interface sem que exista uma classe anteriormente declarada.
- [ ] As classes anônimas são ótimas para criarmos erros propositais no sistema, pois ninguém saberá de onde o erro vem.
- [ ] Classes anônimas são utilizadas apenas para casos em que os dados são sensíveis.
- [ ] Quando queremos executar algum código malicioso, sem deixar rastros no sistema, executamos uma função anônima. 
- [ ] Não temos benefício nenhum utilizando classes anônimas, portanto foi uma atualização sem muita importância.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-7-novidades/307>

**Nível:** 2
 	
***

### 13 Veja o código abaixo, referente a Closure Call.

```php
<?php
class ClassA
{
    public function __construct()
    {
        echo "Instanciado pela closure call";
    }
}

$exe = function (){
    return;
};

$exe->call(new ClassA);
```

O que é possível afirmar?

- [ ] Não teremos o funcionamento correto, pois a closure atribuída à variável $exe não executa nenhuma ação.
- [x] Teremos o construtor sende executado normalmente, pois a variável $exe é uma closure e pode acionar o método call.
- [ ] Não teremos nenhuma ação sendo executada, pois o processo terminará na closure passada para a variáve $exe.  
- [ ] Teremos a classe ClassA sendo instanciada, mas como não acionamos o método construtor nada aconceterá.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-7-novidades/308>

**Nível:** 2
 	
***

### 14 Analise a frase abaixo e assinale verdadeiro ou falso.

"Agora é possível utilizar a função unserialize passando um array para filtragem de dados, não precisando mais fazer esta filtragem manualmente."

- [x] Verdadeiro
- [ ] Falso

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-7-novidades/309>

**Nível:** 2
 	
***

### 15 Qual seria o novo padrão para declarar namespaces em grupos?

- [ ] `use App\(Classe1, Classe2, Classe3)`
- [ ] `use App\[Classe1, Classe2, Classe3]`
- [x] `use App\{Classe1, Classe2, Classe3}`
- [ ] `use App\"Classe1, Classe2, Classe3"`
- [ ] `use App\<Classe1, Classe2, Classe3>`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-7-novidades/310>

**Nível:** 2
 	
***

### 16 O que a função intdiv faz?

- [ ] Transforma a div do HTML em um elemento do tipo inteiro.
- [ ] Transforma valores em inteiros e imprime dentro de uma div.
- [x] Divide dois números e retorna só a parte inteira da divisão.
- [ ] Multiplica dois números inteiros e retorna como um número inteiro.
- [ ] Ela apenas soma dois números.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-7-novidades/311>

**Nível:** 2
 	
***