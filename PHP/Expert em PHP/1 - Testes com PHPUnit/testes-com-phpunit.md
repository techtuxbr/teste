# Questões

| Questões 1 - 5            | Questões 5 - 10             | Questões 11 - 15            |
|---------------------------|-----------------------------|-----------------------------|
| [Question 1 - Nível 1][1] | [Question 6 - Nível 2][6]   | [Question 11 - Nível 2][11] |
| [Question 2 - Nível 1][2] | [Question 7 - Nível 1][7]   | [Question 12 - Nível 1][12] |
| [Question 3 - Nível 1][3] | [Question 8 - Nível 1][8]   | [Question 13 - Nível 1][13] |
| [Question 4 - Nível 1][4] | [Question 9 - Nível 1][9]   | [Question 14 - Nível 1][14] |
| [Question 5 - Nível 2][5] | [Question 10 - Nível 1][10] | [Question 15 - Nível 1][15] |
                     
***

[1]:#questão-1
[2]:#questão-2
[3]:#questão-3
[4]:#questão-4
[5]:#questão-5
[6]:#questão-6
[7]:#questão-7
[8]:#questão-8
[9]:#questão-9
[10]:#questão-10
[11]:#questão-11
[12]:#questão-12
[13]:#questão-13
[14]:#questão-14
[15]:#questão-15

***

### Questão 1

"Como o PHPUnit trabalha de forma orientada à objetos, podemos criar uma classe para cada teste a ser realizado."

- [x] Verdadeiro
- [ ] Falso

* **Dica:**
    1. <https://www.schoolofnet.com/curso-testes-com-phpunit/2587>

**Nível:** 1

***

### Questão 2

"Para criar um teste no PHPUnit, basta criar uma classe com o sufixo 'Test' que extende da classe TestCase e criar os métodos privados com o prefix 'test'."

- [ ] Verdadeiro
- [x] Falso

* **Dica:**
    1. <https://www.schoolofnet.com/curso-testes-com-phpunit/2587>

**Nível:** 1

***

### Questão 3

Em uma classe de testes do PHPUnit, é INCORRETO afirmar:

- [ ] Todos os testes devem conter o prefixo test.
- [ ] A classe de testes deve conter o sufixo Test.
- [x] Todos os testes serão métodos privados.
- [ ] A classe de testes deve estender da class TestCase.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-testes-com-phpunit/2587>

**Nível:** 1

***

### Questão 4

Com o PHPUnit podemos testar uma classe, tipo ou valor, onde verificamos se o resultado da operação corresponde ao valor esperado pelo teste.

O conceito utilizado para testar algo no nosso código é chamado de: 

- [ ] Testes unitários.
- [ ] TDD.
- [x] Asserções.
- [ ] TestCase.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-testes-com-phpunit/2589>

**Nível:** 1

***

### Questão 5

Analise o código abaixo:

Código do arquivo Book.php:
```php
<?php
namespace SON\Model;

class Book{
    private $title;

    public function __construct($title){
        $this->title = $title;
    }

    public function getTitle(){
        return "Meu Livro";
    }
}
```

Código do arquivo BookTest.php
```php
<?php
class BookTest extends PHPUnit_Framework_TestCase{

    public function testGetTitle(){
        $book = new SON\Model\Book("Meu Book");
        $this->assertEquals("Meu Book", $book->getTitle());
    }
}
```
Ao ser executado os testes no PHPUnit, receberemos um resultado positivo ou negativo para o teste testGetTitle()?

- [ ] Positivo
- [x] Negativo

* **Dica.:** 
    1.<https://www.schoolofnet.com/curso-testes-com-phpunit/2589>

**Nível:** 2

*** 

### Questão 6

Para testarmos se um objeto é uma instancia de alguma classe com o PHPUnit, utilizamos:

- [ ] ```if($objeto instanceof MinhaClasse){ return true; }```
- [ ] ```$this->assertInstanceOf($objeto, MinhaClasse::class);```
- [ ] ```if($objeto is_a MinhaClasse){ return true; }```
- [x] ```$this->assertInstanceOf(MinhaClasse::class, $objeto);```

* **Dica:**
    1. <https://www.schoolofnet.com/curso-testes-com-phpunit/2589>

**Nível:** 2

***


### Questão 7

Para testarmos se um valor é null com o PHPUnit, utilizamos:

- [ ] ```if($objeto === null){ return true; }```
- [ ] ```if(empty($objeto)){ return true; }```
- [ ] ```$this->assertEquals($objeto, null);```
- [ ] ```if(!$objeto){ return true; }```
- [ ] ```$this->assertIsNull($objeto);```
- [x] ```$this->assertNull($objeto);```

* **Dica:**
    1. <https://www.schoolofnet.com/curso-testes-com-phpunit/2589>

**Nível:** 1

***

### Questão 8

Para automatizar os testes de encapsulamento de uma classe com o PHPUnit, podemos utilizar:

- [x] Provedores de dados.
- [ ] Recursividade.
- [ ] Métodos mágicos.
- [ ] Laço de repetição.
- [ ] Asserções.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-testes-com-phpunit/2591>

**Nível:** 1

***

### Questão 9

O que acontece com os demais testes caso algum deles falhe no PHPUnit?

- [x] Os próximos testes serão executados normalmente.
- [ ] Será exibido um erro e os próximos testes não serão executados.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-testes-com-phpunit/2593>

**Nível:** 1

***

### Questão 10

Analise o código:

```php
    /**
    * @expectedExcepction \Exception
    */
    public function testIfProductNotFound(){
        global $db;
        $product = new \SON\Model\Product($db);
        $product->find(1);
    }
```
O que faz o teste acima?

- [ ] Verifica se o produto não existe.
- [ ] Verifica se o produto existe.
- [x] Verifica se é lançado uma excessão.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-testes-com-phpunit/2594>

**Nível:** 1

***

