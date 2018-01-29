# Questões

| Questões 1 - 7              | Questões 8 - 14             | Questões 15 - 21            |
|-----------------------------|-----------------------------|-----------------------------|
| [Question 1 - Nível 1][1]   | [Question 8 - Nível 2][8]   | [Question 15 - Nível 3][15] |  
| [Question 2 - Nível 1][2]   | [Question 9 - Nível 2][9]   | [Question 16 - Nível 3][16] |  
| [Question 3 - Nível 1][3]   | [Question 10 - Nível 2][10] | [Question 17 - Nível 3][17] |  
| [Question 4 - Nível 1][4]   | [Question 11 - Nível 2][11] | [Question 18 - Nível 3][18] |  
| [Question 5 - Nível 1][5]   | [Question 12 - Nível 2][12] | [Question 19 - Nível 3][19] |  
| [Question 6 - Nível 2][6]   | [Question 13 - Nível 2][13] | [Question 20 - Nível 3][20] |  
| [Question 7 - Nível 2][7]   | [Question 14 - Nível 3][14] | [Question 21 - Nível 3][21] |  
                         
***

[1]:#1-qual-comando-devemos-rodar-no-terminal-para-subir-o-servidor-embutido-do-php
[2]:#2-quais-são-os-paradigmas-mais-conhecidos-no-desenvolvimento
[3]:#3-analise-o-código-abaixo
[4]:#4-qual-objetivo-principal-da-orientação-a-objetos
[5]:#5-quais-são-as-principais-vantagens-de-utilizar-programação-orientada-a-objetos
[6]:#6-qual-é-a-estrutura-básica-para-uma-classe
[7]:#7-como-é-chamada-uma-função-que-está-dentro-de-uma-classe
[8]:#8-como-instanciamos-um-objeto-de-uma-determinada-classe
[9]:#9-analise-o-código-abaixo-e-assinale-a-alternativa-correta
[10]:#10-quando-falamos-de-classes-existem-alguns-padrões-a-serem-seguidos-qual-padrão-abaixo-está-incorreto
[11]:#11-analise-o-código-abaixo:
[12]:#12-qual-elemento-devemos-utilizar-para-acessar-métodos-e-atributos-de-uma-classe
[13]:#13-ao-criar-um-método-podemos-ou-não-passar-uma-assinatura-para-o-mesmo-analise-o-código-abaixo-e-marque-a-alternativa-correta
[14]:#14-responda-a-questão-referente-a-herança
[15]:#15-em-que-momento-o-método-construtor-é-executado
[16]:#16-como-podemos-executar-um-método-da-classe-mãe
[17]:#17-qual-o-objetivo-tornar-privado-um-atributo-de-uma-classe
[18]:#18-analise-o-código-abaixo
[19]:#19-analise-os-conceitos-abaixo
[20]:#20-qual-alternativa-está-correta-em-relação-ao-conceito-de-classes-abstratas
[21]:#21-analise-o-código-abaixo

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

- [x] Ambas terão a mesma saída: `Array ( [2] => 55 [3] => 44 )`
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

**Nível:** 2
 	
***

### 7 Como é chamada uma função que está dentro de uma classe?

- [ ] atributo
- [ ] propriedade
- [ ] elemento
- [ ] função
- [x] método

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/331>

**Nível:** 2
 	
***

### 8 Como instanciamos um objeto de uma determinada classe?

- [ ] `$objeto = implement classe;`
- [x] `$objeto = new classe;`
- [ ] `$objeto = extend classe;`
- [ ] `$objeto = start classe;`
- [ ] `$objeto = classe;`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/331>

**Nível:** 2
 	
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

**Nível:** 2
 	
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

**Nível:** 2
 	
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

**Nível:** 2
 	
***

### 12 Qual elemento devemos utilizar para acessar métodos e atributos de uma classe?

- [ ] `$this=>`
- [x] `$this->`
- [ ] `$this()`
- [ ] `$atributo->`
- [ ] `$->`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/335>

**Nível:** 2
 	
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

Referente ao código acima, marque a assinatura que contém as respostas para as duas perguntas abaixo:

* Além de assinatura, qual outro nome é utilizado para valores passados para os métodos?
* No código acima este valor é obrigatório ou não?

- [ ] Valor e obrigatório
- [ ] Valor e não obrigatório
- [ ] Dado e obrigatório
- [ ] Parâmetro e não obrigatório
- [x] Parâmetro e obrigatório

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/336>

**Nível:** 2
 	
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

**Nível:** 3
 	
***

### 15 Em que momento o método construtor é executado?

- [ ] No momento que executamos algum método.
- [ ] Quando atribuímos um valor a algum atributo.
- [ ] Quando o objeto é destruído.
- [ ] O método não é executado automaticamente, é necessário acioná-lo no momento que for necessário.
- [x] No momento em que um objeto é instanciado.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/338>

**Nível:** 3

***

### 16 Como podemos executar um método da classe mãe?

- [ ] `parent->nome_do_metodo`
- [ ] `$this->parent::nome_do_metodo`
- [ ] `$this->parent->nome_do_metodo`
- [x] `parent::nome_do_metodo`
- [ ] `$this->nome_do_metodo`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/339>

**Nível:** 3

***

### 17 Qual o objetivo tornar privado um atributo de uma classe?

- [ ] Não tem necessidade nenhuma.
- [x] Proteger a classes, assegurando que o usuário não tenha acesso externo.
- [ ] Para proteger contra ataques de vírus.
- [ ] Para deixar o código mais bonito apenas.
- [ ] Bloquear o acesso interno, permitindo apenas acesso externo.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/340>

**Nível:** 3

***

### 18 Analise o código abaixo.

```php
<?php

class Vehicle
{
    private $brand;
    private $color;

    public function __construct($brand = null){
        $this->brand = $brand;
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

}

class Car extends Vehicle
{

}

class Motorcycle extends Vehicle
{

}

$mustang = new Car('Mustang');
$honda = new Motorcycle('Honda');

// Atribuindo cores
$mustang->setColor('Red');
$honda->setColor('Yellow');

// Resgatando cores
echo $honda->color();
echo $mustang->color();
```

Existe um erro ao tentar resgatar as cores dos veículos. Qual deveria ser o método utilizado para não haver erros durante o resgate das cores.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/340>
    2. Lembrando que o acesso a um atributo privado só é possível de dentro da própria classe.

Resp.: `getName()`

**Nível:** 3

***

### 19 Analise os conceitos abaixo.

1. Private permite acesso apenas de dentro da classe.
2. Protected permite o acesso das classes filhas aos atributos e métodos da classe mãe.
3. Ambas protegem o acesso externo, e direto, aos métodos e atributos.

Analise os conceitos e julgue verdadeiro ou falso. Depois assinale a alternativa correta seguindo a mesma sequência.

- [ ] verdadeiro, verdadeiro e falso
- [ ] verdadeiro, falso e verdadeiro
- [ ] falso, falso e verdadeiro
- [ ] todos falsos
- [x] todos verdadeiros

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/341>

**Nível:** 3

***

### 20 Qual alternativa está correta em relação ao conceito de classes abstratas?

- [x] Classes abstratas são modelos, que obrigam as classes filhas implementarem os métodos nela declarados. Classes abstratas não podem ser instanciadas.
- [ ] Classes abstratas não tem participação ativa no sistema por serem abstratas.
- [ ] Classes abstratas são classes sem conteúdo.
- [ ] Classes abstratas são classes que devem ser instanciadas somente por objetos abstratos.
- [ ] Classe abstrata é só mais um nome para classe mãe.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/342>

**Nível:** 3

***

### 21 Analise o código abaixo.

```php
<?php

interface IPessoa
{
    public function getNome();
}

abstract class Pessoa implements IPessoa
{
    private $nome;
    private $endereco;
}

class Fisica extends Pessoa
{
    private $cpf;

    public function setCpf($cpf){
        $this->cpf = $cpf;
        return $this;
    }
}

class Juridica extends Pessoa
{
    private $cnpj;

    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
        return $this;
    }
}

$wesley = new Fisica();
$schoolofnet = new Juridica();
```

Qual o erro presente no código acima?

- [ ] Não podemos extender uma classe abstrata.
- [ ] Não podemos implementar uma interface em uma classe abstrata.
- [ ] Não é possível criar novos atributos em classes filhas.
- [ ] A interface deveria seguir os métodos e atributos da classe abstrata.
- [x] A classe abstrata deve implementar o método "getNome", presente na interface.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-iniciando-com-oo/343>
    2. Lembrando que a interface é um modelo, ou uma assinatura, de toda classe que a implementa.

**Nível:** 3

***