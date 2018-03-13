# Questões

| Questões 1 - 5            | Questões 5 - 10             | Questões 11 - 15            |
|---------------------------|-----------------------------|-----------------------------|
| [Question 1 - Nível 1][1] | [Question 6 - Nível 2][6]   | [Question 11 - Nível 2][a] |
| [Question 2 - Nível 2][2] | [Question 7 - Nível 2][7]   | [Question 12 - Nível 1][a] |
| [Question 3 - Nível 1][3] | [Question 8 - Nível 1][8]   | [Question 13 - Nível 1][a] |
| [Question 4 - Nível 2][4] | [Question 9 - Nível 1][9]   | [Question 14 - Nível 1][a] |
| [Question 5 - Nível 2][5] | [Question 10 - Nível 1][10] | [Question 15 - Nível 1][a] |
                     
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

O padrão de projeto Injeção de Dependências (Dependency Injection) visa manter o forte acoplamento entre as classes dependentes.

- [ ] Verdadeiro
- [x] Falso

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-e-dependency-inje>

**Nível:** 1

***

### Questão 2

Analise o código:

```php
    class Database{

        private $pdo;

        public function __construct(){
            $this->pdo = new \PDO("dsn","user","password");            
        }
    }
```
No exemplo acima temos um problema de alto acoplamento na classe, que pode ser resolvido com a utilização do pattern Dependency Injection, da seguinte forma:

- [ ] Alterando o modificador de acesso da propriedade $pdo de ```private``` para ```public```.
- [ ] Injetando os argumentos ```$dns```, ```$user``` e ```$password``` diretamente no construtor para serem passados na criação do objeto ```\PDO```.
- [x] Injetando o objeto ```\PDO $pdo``` diretamente no método construtor para ser atribuído à variável ```$this->pdo```.
- [ ] Transformando a classe Database em uma classe abstrata.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-e-dependency-inje>

**Nível:** 2

***

### Questão 3

A biblioteca Pimple é utilizada para criar e gerenciar containers de dependências.

- [x] Verdadeiro
- [ ] Falso

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-e-dependency-inje>

**Nível:** 1

***

### Questão 4

Uma das principais vantagens de se utilizar o container de dependências da biblioteca Pimple é que ele trás sempre a mesma instância para uma classe.

Porém, nem sempre queremos trazer a mesma instância de uma classe, então, devemos:

- [ ] Utilizar o método build().
- [ ] Criar o nosso próprio container personalizado.
- [ ] Salvar a nova instância em uma nova variável.
- [ ] Utilizar a biblioteca Zend Service Manager.
- [x] Utilizar o método factory().

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-e-dependency-inje>

**Nível:** 2

***


### Questão 5

Para retornar sempre a mesma instância de uma classe com o Zend Service Manager, podemos:

- [x] Utilizar as factories.
- [ ] Criar o nosso próprio container personalizado.
- [ ] Salvar a nova instância em uma nova variável.
- [ ] Utilizar um container de dependências.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-e-dependency-inje>

**Nível:** 2

***


### Questão 6

Uma das principais vantagens de se utilizar o container de dependências Zend Service Manager é que ele trás sempre a mesma instância para uma classe.

Porém, nem sempre queremos trazer a mesma instância de uma classe, então, devemos:

- [ ] Utilizar o método factory().
- [ ] Criar o nosso próprio container personalizado.
- [ ] Salvar a nova instância em uma nova variável.
- [ ] Utilizar a biblioteca Pimple.
- [x] Utilizar o método build().

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-e-dependency-inje>

**Nível:** 2

***

### Questão 7

Para adicionar uma nova responsabilidade à um objeto existente, em tempo de execução, com o Zend Service Manager, podemos utilizar os:

- [ ] Decorators.
- [ ] Services.
- [x] Delegators.
- [ ] Abstract Factory.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-e-dependency-inje>

**Nível:** 2

***

### Questão 8

Os delegators do Zend Service Manager implementam o padrão de projeto:

- [ ] Factory.
- [ ] Singleton.
- [x] Decorator.
- [ ] Delegate.
- [ ] Composite.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-e-dependency-inje>

**Nível:** 1

***

### Questão 9

Para descobrir todas as dependências de classe e posteriormente injetar essas dependencias automaticamente no método construtor, podemos utilizar o:

- [ ] Factory.
- [x] Reflection Class.
- [ ] Decorator.
- [ ] Delegate.
- [ ] Composite.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-e-dependency-inje>

**Nível:** 1

***


### Questão 10

A classe ReflectionClass é uma classe nativa do PHP, onde, através dela, podemos descobrir diversas informações referente à uma classe.

- [x] Verdadeiro
- [ ] Falso
* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-e-dependency-inje>

**Nível:** 1

***
