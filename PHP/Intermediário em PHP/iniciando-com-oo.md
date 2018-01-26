# Questões

| Questões 1 - 10             | Questões 11 - 20            | Questões 21 - 29            |
|-----------------------------|-----------------------------|-----------------------------|
| [Question 1 - Nível 1][1]   | [Question 11 - Nível 1][11] | [Question 21 - Nível 3][21] |  
                         

[1]:#

***

### 1 Qual comando devemos rodar, no terminal, para subir o servidor embutido do PHP?

- [ ] `php -s localhost:8000` 
- [x] `php -S localhost:8000`
- [ ] `-S localhost:8000`
- [ ] `php -localhost:8000`
- [ ] `php -S:8000`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/329>

**Nível:** 1
 	
***

### 2 Quais são os paradigmas mais conhecidos no desenvolvimento?

- [ ] Paradigmas parentais e estruturais.
- [ ] Paradigmas estruturais e funcionais.
- [ ] Paradigmas procedurais, estruturais e funcionais.
- [ ] Paradigmas funcionais, estruturais e de orientação a objetos
- [X] Paradigmas procedurais, funcionais e de orientação a objetos

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/330>

**Nível:** 1
 	
***

### 3 Analise o código abaixo.

```php
<?php
$ages = [13, 17, 55, 44, 10];

$filter = function(int $age){
    return ($age >= 18);
};

$output = array_filter($ages, $filter);
$output1 =  array_filter($ages, function(int $age){
    return ($age >= 18);
});

print_r($output);
print_r($output1);
```

Acima temos um caso de paradigma funcional. Depois de analisar o código marque a alternativa correta para as saídas das variáveis output e output1, nesta mesma ortem.

- [x] Ambas terão a mesma saída `Array ( [2] => 55 [3] => 44 )`
- [ ] `Array ( [2] => 55 [3] => 44 )` e `Array ( [0] => 13 [1] => 17 [4] => 10 )` 
- [ ] `Array ( [2] => 55 [3] => 44 )` e `Array ( [0] => 13 [1] => 17 )` 
- [ ] `Array ( [2] => 55 [3] => 44 )` e `Array ( )` 
- [ ] `Array ( )` e `Array ( [2] => 55 [3] => 44 )`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/330>

**Nível:** 1
 	
***

### 4 Qual objetivo principal da Orientação a Objetos?

Pensando no modo mais simples possível.

- [x] Transformar situações do dia a dia em objetos computacionais.
- [ ] Criar objetos sem ter ligação com situações reais.
- [ ] Criar objetos totalmente diferentes do dia a dia, porque seria impossível o computador entender.
- [ ] Criar objetos para serem utilizados apenas em grandes sistemas.
- [ ] Nenhuma das alternativas, pois o objeto já existe no PHP e apenas o utilizamos.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/331>

**Nível:** 1
 	
***

### 5 Quais são as principais vantagens de utilizar Programação Orientada a Objetos?

- [ ] Reconhecimento profissional.
- [x] Organização e reaproveitamento de código.
- [ ] Criar códigos mais complexos e de difícil entendimento para outros desenvolvedores.
- [ ] Ter códigos maiores, porém mais consistentes.
- [ ] Não existe nenhuma vantagem.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/331>

**Nível:** 1
 	
***

### 6 Qual é a estrutura básica para uma classe?

- [ ] `class pessoa[]`
- [ ] `class pessoa(){}`
- [ ] `class pessoa()`
- [x] `class pessoa{}`
- [ ] `class pessoa{}[]`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/331>

**Nível:** 1
 	
***

### 7 Como é chamada uma função que está dentro de uma classe?

- [ ] atributo
- [ ] propriedade
- [ ] elemento
- [ ] função
- [x] método

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/331>

**Nível:** 1
 	
***

### 8 Como instanciamos um objeto de uma determinada classe?

- [ ] `$objeto = implement classe;`
- [x] `$objeto = new classe;`
- [ ] `$objeto = extend classe;`
- [ ] `$objeto = start classe;`
- [ ] `$objeto = classe;`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/331>

**Nível:** 1
 	
***

### 9 Analise o código abaixo e assinale a alternativa correta.

```php
<?php

class pessoa
{
    public function getHello($name){
        echo "Hello {$name}!";
    }
}

$object = new pessoa;
```

Qual a maneira correta de utilizar o método getHello?

- [ ] `echo $object=>getHello('Guilerme');`
- [ ] `echo $object>getHello('Guilerme');`
- [X] `echo $object->getHello('Guilerme');`
- [ ] `echo $object>>getHello('Guilerme');`
- [ ] `echo $object.getHello('Guilerme');`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/331>

**Nível:** 1
 	
***

### 10 Quando falamos de classes existem alguns padrões a serem seguidos. Qual padrão abaixo está INCORRETO?

- [ ] Cada classe deve estar em um arquivo diferente.
- [ ] O nome do arquivo deve estar no singular e começar com a primeira letra maiúscula.
- [ ] O nome da classe deve ter o mesmo nome do arquivo.
- [x] Devemos criar um único arquivo para colocar todas as classes.
- [ ] Cada classe deve ter uma responsabilidade única, assim como seu nome.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/334>
    2. Lembrando que são padrões adotados, nem todos são obrigatórios mas são muito aconselhados.

**Nível:** 1
 	
***

### 11 Analise o código abaixo:

```php
<?php
class Car
{
    public $brand;
    public $color;
    public $engine;
}

$ferrari = new Car;
$ferrari->brand = 'Ferrari';
$ferrari->color = 'Red';
$ferrari->engine = 488;

$mustang = new Car;
$mustang->brand = 'Mustang';
$mustang->color = 'Yellow';
$mustang->engine = 300;
```

Como são chamadas as características de uma classe? 
Ex.: brand, color e engine.

- [ ] Características da classe
- [ ] Propriedades da classe
- [x] Atributos da classe
- [ ] Itens da classe
- [ ] Métodos da classe

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/333>

**Nível:** 1
 	
***

### 12 Qual elemento devemos utilizar para acessar métodos e atributos de uma classe?

- [ ] `$this=>`
- [x] `$this->`
- [ ] `$this()`
- [ ] `$atributo->`
- [ ] `$->`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/335>

**Nível:** 1
 	
***

### 13 Ao criar um método podemos, ou não, passar uma assinatura para o mesmo. Analise o código abaixo e marque a alternativa correta.

```php
<?php
class Car
{
    public $brand;
    public $color;
    public $engine;

    public function getEngine($type){
        return "{$this->engine} {$type}";
    }
}

$mustang = new Car;
$mustang->brand = 'Mustang';
$mustang->color = 'Yellow';
$mustang->engine = 300;

echo $mustang->getEngine('HP');
```

Referente ao código acima marque a assinatura que contém as respostas para as duas perguntas abaixo:

* Além de assinatura, qual outro nome é utilizado para valores passados para os métodos?
* No código acima este valor é obrigatório ou não?

- [ ] Valor e obrigatório
- [ ] Valor e não obrigatório
- [ ] Dado e obrigatório
- [ ] Parâmetro e não obrigatório
- [x] Parâmetro e obrigatório

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/336>

**Nível:** 1
 	
***

### 14 Responda a questão referente a herança.

```php
<?php
// Classe principal
class Vehicle
{
    public $brand;
    public $color;

    public function getEngine($type){
        return "{$this->engine} {$type}";
    }
}

// Classe Car que herda da classe principal
class Car extends Vehicle
{
    public $doors;
}

// Classe Motorcycle que herda da classe principal
class Motorcycle extends Vehicle
{
    
}
```

Quais elementos as classes Car e Motorcycle terão, em comum, por herdar a classe principal Vehicle?

- [x] brand, color e método getEngine
- [ ] brand, color, doors e método getEngine
- [ ] brand, color
- [ ] brand e método getEngine
- [ ] somente o método getEngine

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/337>
    2. Lembrando que com a herança, a classe filha passa a ter todos os métodos e atributos presentes na classe mãe.

**Nível:** 1
 	
***