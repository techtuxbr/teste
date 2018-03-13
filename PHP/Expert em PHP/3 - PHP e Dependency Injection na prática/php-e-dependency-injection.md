# Questões

| Questões 1 - 5            | Questões 5 - 10             | Questões 11 - 15            |
|---------------------------|-----------------------------|-----------------------------|
| [Question 1 - Nível 1][1] | [Question 6 - Nível 1][6]   | [Question 11 - Nível 2][a] |
| [Question 2 - Nível 2][2] | [Question 7 - Nível 1][7]   | [Question 12 - Nível 1][a] |
| [Question 3 - Nível 1][3] | [Question 8 - Nível 2][8]   | [Question 13 - Nível 1][a] |
| [Question 4 - Nível 1][4] | [Question 9 - Nível 1][9]   | [Question 14 - Nível 1][a] |
| [Question 5 - Nível 1][5] | [Question 10 - Nível 1][a] | [Question 15 - Nível 1][a] |
                     
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

