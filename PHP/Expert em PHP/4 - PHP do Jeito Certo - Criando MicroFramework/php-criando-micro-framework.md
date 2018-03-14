# Questões

| Questões 1 - 5            | Questões 5 - 10             | Questões 11 - 15            |
|---------------------------|-----------------------------|-----------------------------|
| [Question 1 - Nível 1][1] | [Question 6 - Nível 2][6]   | [Question 11 - Nível 1][11] |
| [Question 2 - Nível 1][2] | [Question 7 - Nível 1][7]   | [Question 12 - Nível 1][a] |
| [Question 3 - Nível 1][3] | [Question 8 - Nível 1][8]   | [Question 13 - Nível 1][a] |
| [Question 4 - Nível 1][4] | [Question 9 - Nível 2][9]   | [Question 14 - Nível 1][a] |
| [Question 5 - Nível 1][5] | [Question 10 - Nível 1][10] | [Question 15 - Nível 1][a] |
                     
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

De acordo com a PSR-4, um nome de classe totalmente qualificado tem a seguinte forma:

- [ ] ```NamespaceName\subNamespace\Class```
- [ ] ```NamespaceName\SubNamespaceNames\className```
- [ ] ```NamespaceName\ClassName```
- [x] ```NamespaceVendor\SubNamespaceNames\ClassName```

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-do-jeito-certo-criando-um-micro-framework/6205>

**Nível:** 1

***

### Questão 2

De acordo com a PSR-4, o nome da classe totalmente qualificado deve ter um namespace de nível superior, 
também conhecido como “namespace vendor”.

- [x] Verdadeiro
- [ ] Falso

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-do-jeito-certo-criando-um-micro-framework/6205>

**Nível:** 1

***

### Questão 3

De acordo com a PSR-4, sublinhados não têm nenhum significado especial em qualquer parte do nome totalmente qualificado da classe.

- [x] Verdadeiro
- [ ] Falso

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-do-jeito-certo-criando-um-micro-framework/6205>

**Nível:** 1

***

### Questão 4

De acordo com a PSR-4, o nome da classe corresponde a um nome de arquivo que termina em .php

- [x] Verdadeiro
- [ ] Falso

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-do-jeito-certo-criando-um-micro-framework/6205>

**Nível:** 1

***

### Questão 5

De acordo com a PSR-1, os arquivos de código PHP devem utilizar apenas a codificação UTF-8 com BOM.

- [ ]  Verdadeiro
- [x] Falso

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-do-jeito-certo-criando-um-micro-framework/6206>

**Nível:** 1

***

### Questão 6

Analise o código abaixo:

```php
    <?php
    ini_set('error_reporting', E_ALL);

    include "file.php";

    echo "<html>\n";

    class foo
    {
        // class code
    }

    function Baar()
    {
        // function code
    }
```
O código acima é um exemplo a não ser seguido de acordo com a PSR-1, por quê?

- [ ] Nomes de classes devem ser sempre iniciadas com letra maiúscula.
- [ ] O arquivo imprime um ```echo "<html>\n"``` na tela, e não é recomendado imprimir código html com o PHP.
- [ ] Nesse trecho de código, se faz um include de um arquivo externo, onde deveria ser utilizado um autoload para fazer essa inclusão automática.
- [x] O mesmo arquivo declara novos símbolos (classes, funções, constantes, etc.) e executa lógica com efeitos colaterais.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-do-jeito-certo-criando-um-micro-framework/6206>

**Nível:** 2

***

### Questão 7

De acordo com a PSR-1, uma constante de classe deve ser declarada em todas as letras maiúsculas com separadores de sublinhado. 

- [x] Verdadeiro
- [ ] Falso

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-do-jeito-certo-criando-um-micro-framework/6206>

**Nível:** 1

***

### Questão 8

Analise o código a seguir:

```php
    <?php
    namespace Vendor\Model;

    class Foo
    {
        const VERSION = '1.0';
        const dateApproved = '2012-06-01';
    }
```

De acordo com a PSR-1, o padrão do código acima está:

- [ ] Correto.
- [x] Incorreto.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-do-jeito-certo-criando-um-micro-framework/6206>

**Nível:** 1

***

### Questão 9

Seguir à risca as regras definidas pela PSR-2 ajuda a melhorar a qualidade e eficiência do seu código.

- [ ] Verdadeiro
- [x] Falso

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-do-jeito-certo-criando-um-micro-framework/6207>

**Nível:** 2

***

### Questão 10

De acordo com a PSR-2, na identação de código devemos utilizar 4 espaços para recuar, e não tabs.

- [x] Verdadeiro
- [ ] Falso

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-do-jeito-certo-criando-um-micro-framework/6207>

**Nível:** 1

***

### Questão 11

São regras da PSR-2, EXCETO:

- [x] As chaves de abertura de métodos devem ficar na mesma linha da declaração do método, e as chaves de fechamento devem 
ir para a próxima linha após o corpo.
- [ ] Todo código deve seguir um “guia de estilo de codificação”, previsto na PSR-1.
- [ ] Deve haver uma linha em branco após a declaração do namespace, e não 
deve conter uma linha em branco após o bloco de declaração de uses.
- [ ] Ao abrir parênteses para estruturas de controle não deve ter um espaço atrás deles, 
e ao fechar parênteses para estruturas de controle não deve ter um espaço antes.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-do-jeito-certo-criando-um-micro-framework/6207>

**Nível:** 1

***