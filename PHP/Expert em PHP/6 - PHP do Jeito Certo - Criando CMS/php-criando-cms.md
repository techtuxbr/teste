# Questões

| Questões 1 - 5            | Questões 5 - 10             | Questões 11 - 15            |
|---------------------------|-----------------------------|-----------------------------|
| [Question 1 - Nível 1][1] | [Question 6 - Nível 2][6]   | [Question 11 - Nível 1][a] |
| [Question 2 - Nível 1][2] | [Question 7 - Nível 1][7]   | [Question 12 - Nível 1][a] |
| [Question 3 - Nível 2][3] | [Question 8 - Nível 1][8]   | [Question 13 - Nível 1][a] |
| [Question 4 - Nível 2][4] | [Question 9 - Nível 1][9]   | [Question 14 - Nível 1][a] |
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

Quando atribuímos o DocumentRoot do nosso servidor para a pasta public da aplicação, onde todas as requisições serão tratadas a partir do arquivo public/index.php, estamos utilizando um padrão de projetos.

Qual padrão de projeto foi utilizado nesse caso?

- [ ] Strategy.
- [x] Front Controller.
- [ ] Singleton.    
- [ ] Builder.
- [ ] Prototype.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-do-jeito-certo-criando-um-cms/7514>

**Nível:** 1

***

### Questão 2

Analise o trecho de código abaixo, retirado de um arquivo composer.json.

```json
"repositories": [
    {
        "type": "path",
        "url": "../php-do-jeito-certo-orm"
    }
]
```

O trecho de código acima é utilizado quando:

- [ ] Precisamos adicionar uma dependência que está em um repositório git remoto.
- [ ] Precisamos definir a pasta que o projeto se encontra, quando o projeto está em uma pasta diferente da pasta original do arquivo composer.json.
- [x] Precisamos adicionar uma dependência que está em um repositório git local.
- [ ] Precisamos adicionar uma dependência que está em um repositório do packagist.org.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-do-jeito-certo-criando-um-cms/7515>

**Nível:** 1

***

### Questão 3

Analise o trecho de código abaixo:

```php
$container = new Pimple\Container();
$container['product'] = $container->factory(function($c){
    return new Product();
});
```
Sobre o valor armazenado na variável ```$container['product']```, é correto afirmar:

- [ ] Será retornado sempre a mesma instância da classe Product.
- [ ] Será armazenado um objeto do tipo Product.
- [x] Será retornado sempre uma nova instância da classe Product.
- [ ] Será armazenado uma string com o nome qualificado da classe.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-do-jeito-certo-criando-um-cms/7517>

**Nível:** 2

***

### Questão 4

Analise o trecho de código abaixo:

```php
$container = new Pimple\Container();
$container['product'] = function($c){
    return new Product();
};
```
Sobre o valor armazenado na variável ```$container['product']```, é correto afirmar:

- [x] Será retornado sempre a mesma instância da classe Product.
- [ ] Será armazenado um objeto do tipo User.
- [ ] Será retornado sempre uma nova instância da classe Product, pois cada vez que é executada a função anônima, é gerado uma nova instância da classe.
- [ ] Será armazenado uma string com o nome qualificado da classe.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-do-jeito-certo-criando-um-cms/7517>

**Nível:** 2

***

### Questão 5

Utilizando um Template Engine, como o Twig por exemplo, podemos manter uma separação mais clara entre o código HTML e o PHP.

- [x] Verdadeiro.
- [ ] Falso.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-do-jeito-certo-criando-um-cms/7519>

**Nível:** 1

***

### Questão 6

Analise o código abaixo:

```php
<ul>
{% for user in users %}
    <li>{% user.name %}</li>
{% else %}
    <li>Nenhum registro</li>
{% endfor %}
</ul>
```

Utilizando o Template Engine Twig, qual será o resultado do código acima?

- [ ] Será exibido uma lista de nomes de usuários, caso o array users esteja vazio, será listado a frase "Nenhum registro".
- [ ] Será exibido uma lista de nomes de usuários e o último ítem da lista será "Nenhum registro".
- [ ] Será exibido o nome do usuário, caso não seja encontrado o usuário, será listado a frase "Nenhum registro".
- [x] Resultará em um erro de sintax.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-do-jeito-certo-criando-um-cms/7521>

**Nível:** 2

***

### Questão 7

O WordPress é um Sistema de Gerenciamente de Conteúdo.

- [x] Verdadeiro.
- [ ] Falso.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-do-jeito-certo-criando-um-cms/7521>

**Nível:** 1

***

### Questão 8

Para enviar um objeto para ser renderizado na view do Twig, utilizamos a seguinte sintax:

- [ ] ```$container['view']->render('myview.phtml',['myObject'=$object]);```
- [ ] ```$container['view']->render('myview.phtml', $object);```
- [ ] ```$container['view']->render('myview.phtml', compact($object));```
- [ ] ```$container['view']->render('myview.phtml', compact('object'));```
- [x] ```$container['view']->render('myview.phtml',['myObject'=>$object]);```

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-do-jeito-certo-criando-um-cms/7522>

**Nível:** 1

***


### Questão 9

Para debugar uma variável com o Twig, utilizamos:

- [x] ```{{ dump(variavel) }}```
- [ ] ```{{ dd($variavel) }}```
- [ ] ```{{ dump($variavel) }}```
- [ ] ```{{ var_dump($variavel) }}```

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-do-jeito-certo-criando-um-cms/7523>

**Nível:** 1

***