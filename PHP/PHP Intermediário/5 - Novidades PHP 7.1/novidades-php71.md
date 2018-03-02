# Questões

| Questões 1 - 5            | Questões 5 - 10             |
|---------------------------|-----------------------------|
| [Question 1 - Nível 1][1] | [Question 6 - Nível 2][6]   |  
                     
***

[1]:#


***

### 1 Qual o nome do recurso utilizado no código abaixo, para permitir que o resultado possa ser nullo ou inteiro.

```php
<?php

function sum(?int $x = null) : ?int{
    return $x;
}

var_dump(sum());
```

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-novidades-do-php71/2473>

Resp.: Nullable types

**Nível:** 1
 	
***

### 2 Analise o código abaixo e assinale a alternativa correta.

```php
<?php
$array = [ "index1" => 1, "index2" => 2, "index3" => 3 ];

["primeiro" => $x, "segundo" => $y, "terceiro" => $z] = $array;
```

O que podemos concluir com o código acima?

- [ ] Teremos os valores atribuídos normalmente com o recurso array destructuring, pois temos o mesmo número de elementos a serem atribuídos. 
- [ ] A chave "terceiro" terá o valor 3 atribuído por causa da ordem seguida pelo recurso array destructuring.
- [x] Não teremos nenhum valor atribuído aos elementos, pois o recurso array destructuring exige que as chaves sejam iguais para a conclusão do processo.
- [ ] O PHP só permite chaves que possuam o prefixo "index" para serem atribuídos a qualquer chave de qualquer array.
- [ ] Não é possível utilizar o recurso array destructuring para arrays assossiativos.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-novidades-do-php71/2474>

**Nível:** 1
 	
***

### 3 Com base no código abaixo assinale a alternativa correta.

```php
<?php
$x = "10 laranjas" + "11 peras e 2 uvas";

var_dump($x);
```

O PHP 7.1 é capaz de fazer a conta acima, somando duas strings que possuam números no início das strings, porém qual a novidade do PHP 7.1 neste caso?

- [ ] O PHP faz o cálculo e grava o resultado em uma variável temporária.
- [ ] O PHP faz o cálculo, mas transforma a variável $x em string.
- [x] O PHP tenta fazer um cálculo, com base em sua lógica, mas avisa ao usuário que o cálculo não é totalmente concreto e que precisa ser avaliado.
- [ ] O PHP garante um cálculo preciso e a eliminação das strings de forma lógica e concreta.
- [ ] O PHP simplesmente pega todos os números presentes na string e faz um cálculo correto, de forma que é totalmente normal o uso deste procedimento.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-novidades-do-php71/2475>

**Nível:** 1
 	
***

### 4 O PHP 7.1 trouxe a novidade de pode trabalhar com offset negativo. Analise o código e assinale a alternativa correta.

```php
<?php
$string = "Cursos on-line - School of Net";

echo substr($string, -13, 13);
```

- [ ] Cursos on-line
- [ ] line - School
- [ ] School of
- [x] School of Net
- [ ] ool of Net

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-novidades-do-php71/2476>
    
**Nível:** 1
 	
***

### 5 Analisando o código abaixo, resposta a questão.

```php
<?php
$string = "Cursos on-line - School of Net";

echo strtoupper($string[17]) .  strtoupper($string[24]) . strtoupper($string[27]);
```

Qual a string impressa pelo comando echo?

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-novidades-do-php71/2476>

Resp.: SON
    
**Nível:** 1
 	
***

### 6 Analise o código abaixo e assinale a alternativa correta.

```php
<?php

function imprimeSoma($x, $y) : void {
    echo $x + $y;
}

imprimeSoma(10, 20);
```

Em relação a código acima, qual alternativa está correta?

- [ ] Teremos um erro, pois uma função com retorno void não pode imprimir nada, apenas ter um retorno void ou nada.
- [x] Teremos a impressão do valor 30, sem nenhum erro, pois a função não retorna nada, apenas executa a ação.
- [ ] Teremos um erro, pois precisávamos informar um retorno como inteiro ou fload, já que fazemos uma operação interna.
- [ ] Para não existir nenhum erro seria preciso retornar o resultado e não imprimir com o comando echo.
- [ ] Para existir a impressão é necessário remover a configuração de retorno void da função.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-novidades-do-php71/2477>
    
**Nível:** 1
 	
***
