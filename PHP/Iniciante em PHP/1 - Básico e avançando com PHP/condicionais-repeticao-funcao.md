# Questões

| Questões 1 - 10             | Questões 11 - 20            |
|-----------------------------|-----------------------------|
| [Question 1 - Nível 3][1]   | [Question 11 - Nível 3][11] |  
| [Question 2 - Nível 3][2]   | [Question 12 - Nível 3][12] |  
| [Question 3 - Nível 3][3]   | [Question 13 - Nível 3][13] |  
| [Question 4 - Nível 3][4]   | [Question 14 - Nível 3][14] |  
| [Question 5 - Nível 3][5]   | [Question 15 - Nível 3][15] |  
| [Question 6 - Nível 3][6]   | [Question 16 - Nível 3][16] |  
| [Question 7 - Nível 3][7]   | [Question 17 - Nível 3][17] |  
| [Question 8 - Nível 3][8]   | [Question 18 - Nível 3][18] |  
| [Question 9 - Nível 3][9]   | [Question 19 - Nível 3][19] |  
| [Question 10 - Nível 3][10] | [Question 20 - Nível 3][20] |  
                           
                         
[1]:#1-analise-o-código-abaixo-e-informa-qual-o-resultado-impresso-na-tela
[2]:#2-analise-a-condicional-abaixo-e-assinale-a-alternativa-correta
[3]:#3-analisando-o-código-abaixo-marque-se-o-aluno-foi-aprovado-ou-reprovado
[4]:#4-treine-um-pouco-mais-as-condicionais-marque-a-alternativa-correta
[5]:#5-com-a-condicional-ternária-podemos-fazer-uma-lógica-em-apenas-uma-linha-assina-le-a-alternativa-correta
[6]:#6-analise-com-atenção-o-código-e-assinale-a-alternativa-correta
[7]:#7-analise-o-código-abaixo-e-depois-analise-a-afirmação
[8]:#8-abaixo-temos-um-loop-simples-utilizando-a-estrutura-while-analise-o
[9]:#9-com-estruturas-de-repetição-somos-capazes-de-fazer-muitas-lógicas-inclusive-coisas-simples-e-brincadeiras-analise-o-código-abaixo
[10]:#10-altere-a-estrutura-de-repetição-for-abaixo-para-que-tenhamos-20-iterações
[11]:#11-vamos-falar-mais-um-pouco-da-estrutura-for
[12]:#12-analise-a-estrutura-foreach-abaixo-e-assinale-a-alternativa-correta
[13]:#13-qual-alternativa-contém-duas-constantes-do-php-que-possibilita-a-transferência-de-informações-de-uma-página-para-outra
[14]:#14-analise-a-url-abaixo-e-marque-a-alternativa-correta
[15]:#15-qual-método-devemos-utilizar-no-formulário-para-que-o-usuário-não-consiga-ter-acesso-visual-aos-valores-submetidos
[16]:#16-analise-o-código-dos-dois-arquivos-abaixo:
[17]:#17-analise-o-código-abaixo-e-depois-responda-a-questão
[18]:#18-analise-o-código-abaixo-e-preencha-o-valor-do-resultado-final
[19]:#19-analise-o-código-abaixo-e-revise-todos-os-conhecimentos-até-agora
[20]:#20-qual-função-do-php-devo-utilizar-para-eliminar-tags-malicionsas-durante-o-envio-de-formulários
[21]:#21-analise-o-código-abaixo
***

### 1 Analise o código abaixo e informa qual o resultado impresso na tela.

```php
<?php
$chovendo = false;

if($chovendo){
    echo "Vou ficar em casa";
}else {
    echo "Vou para piscina";
}
```

A resposta deve ser a string completa.

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-avancando-com-php/7808>

Resp.: Vou para piscina

**Nível:** 3

***

### 2 Analise a condicional abaixo e assinale a alternativa correta.

```php
<?php
$chovendo = false;
$ventando = true;

if($chovendo && $ventando){
    echo "Não vou ao clube.";
} elseif(!$chovendo && $ventando){
    echo "Vou ao clube, mas não vou nadar.";
}else {
    echo "Vou ao clube e vou nadar";
}
```

- [ ] "Não vou ao clube."
- [x] "Vou ao clube, mas não vou nadar."
- [ ] "Vou ao clube e vou nadar"

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-avancando-com-php/7810>
    2. <https://www.schoolofnet.com/curso-avancando-com-php/7811>

**Nível:** 3

***

### 3 Analisando o código abaixo marque se o aluno foi aprovado ou reprovado.

```php
<?php

$media = 7;
$frequencia = 75;

$media_aluno = 8;
$frequencia_aluno = 50;

if($media_aluno >= $media || $frequencia_aluno >= $frequencia){
    echo "Aprovado!!!";
}else {
    echo "Reprovado!!!";
}
```

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-avancando-com-php/7810>

**Nível:** 3

***

### 4 Treine um pouco mais as condicionais. Marque a alternativa correta.

```php
<?php

$dirigir = false;
$brincar = false;

$idade = 16;

if($idade >= 18)
    $dirigir = false;
    $brincar = true;

var_dump($dirigir, $brincar);
```

Qual será o valor das variáveis no final da lógica?

- [ ] dirigir = false e brincar = false
- [x] dirigir = false e brincar = true
- [ ] dirigir = true e brincar = true

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-avancando-com-php/7810>
    2. <http://php.net/manual/en/control-structures.if.php>

**Nível:** 3

***

### 5 Com a condicional ternária podemos fazer uma lógica em apenas uma linha. Assina-le a alternativa correta.

```php
<?php

$idade = 18;

echo $idade >= 18 ? "Pode dirigir!!!" : "Não pode dirigir!!!";
```

- [x] Pode dirigir!!!
- [ ] Não pode dirigir!!!

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-avancando-com-php/7811>

**Nível:** 3

***

### 6 Analise, com atenção, o código e assinale a alternativa correta.

```php
<?php 
$num1 = '5';
$num2 = '5';
$op = '-';

if ($op == '+') {
    $soma = $num1 + $num2;
    echo 'A some é = ' . $soma;
}else {
    echo 'Esta calculadora só faz operação de soma!!!';
}
```

Qual seria o resultado impresso na tela do usuário?

- [ ] 5
- [ ] 10
- [ ] A some é = 5
- [ ] A some é = 10
- [x] Esta calculadora só faz operação de soma!!!

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-php-basico/7>

**Nível:** 3
    
***

### 7 Analise o código abaixo e depois analise a afirmação.

```php
<?php

$num1 = '5';
$num2 = '10';
$op = '-';

if ($op == '+') {
    if($num1 >= 5){
        $num1 += 10;
    }else {
        $num1 -= 10;
    }
    echo $num1 + $num2;
}else if ($op == '-') {
    if ($num1 >= 5) {
        $num1 = $num1 + $num2;
    } else {
        $num1 -= 10;
    }
    echo $num1 - $num2;
}else {
    echo 'Operation not found';
}
```

Analizando o código acima, qual será o resultado impresso na tela?

- [ ] 10
- [ ] 15
- [ ] 25
- [x] 5
- [ ] 30

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-php-basico/7>
    2. Não estamos seguindo o mesmo exemplo do curso, portanto preste atenção na sequência lógica do exemplo acima.
    3. Como é apenas um exemplo não é necessário que o código tenha muita lógica.

**Nível:** 3

***

### 8 Abaixo temos um loop simples utilizando a estrutura while. Analise-o.

```php
<?php
$i = 1;
$loop = 10;

while($i < $loop){
    if($i < 5){
        echo '<';
    } else if($i == 5) {
        echo '=';
    }else {
        echo '>';
    }
    $i++;
}
```

Quantas vezes teremos a impressão de cada símbolo acima, de acordo com a lógica?

Lembre que a sequência é: (<), (=) e (>). 

- [x] 4, 1 e 4 
- [ ] 3, 2 e 4
- [ ] 4, 4 e 1
- [ ] 1, 4 e 4
- [ ] 1, 4 e 4

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-php-basico/9>

**Nível:** 3 

***

### 9 Com estruturas de repetição somos capazes de fazer muitas lógicas, inclusive coisas simples e brincadeiras. Analise o código abaixo.

```php
<?php
// Início do índice do loop
$i = 0;

// Quantas letras tem as iniciais de School Of Net - SON
$loop = 3;

// Variável SON
$son = '';

echo 'Formando nome composto...';
echo '<br>';

while($i < $loop){
    if($i == 0){
        $son = 'School';
    } else if($i == 1) {
        $son = $son . ' of ';
    }else {
        $son = $son . 'Net';
    }
    $i++;
}

echo 'Imprimindo nome composto...';
echo '<br>';
echo strtolower($son);
```

Qual será a saída no final desta estrutura de repetição?

- [ ] SCHOOL OF NET
- [x] school of net
- [ ] School of Net
- [ ] Net of School
- [ ] SON

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-php-basico/9>
    2. <http://php.net/manual/en/function.strtolower.php>

**Nível:** 3 

***

### 10 Altere a estrutura de repetição FOR, abaixo, para que tenhamos 20 iterações.

```php
<?php

for($i = 1; $i < 15; $i++) {
    echo $i . '<br>';
}
```

Reescreva, como resposta, a lógica completa de dentro dos parênteses da estrutura.

Ex.: `($i = 1; $i < 15; $i++)`

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-php-basico/8>
    2. Lembre de analisar o valor inicial e também a lógica da repetição.

Res.: ($i = 1; $i < 21; $i++)

**Nível:** 3 

***

### 11 Vamos falar mais um pouco da estrutura for.

```php
<?php
// Número de repetições
$loop = 20;

// Variável GOL
$gol = '';

echo 'Um determinado time fez um gol e o narrador começou a narrar...';
echo '<hr>';

for($i = 1 ; $i < $loop ; $i++){
    if($i == 1){
        $gol = 'G';
    } else if($i <= ($loop-2) ) {
        $gol = $gol . 'O';
    }else {
        $gol = $gol . 'L';
    }
}

echo $gol;
echo '<hr>';

echo 'Fim da narração...';
```

O que é possível afirmar sobre o código acima?

- [ ] Existe alguma situação que a primeira letra não será o G.
- [ ] Existe alguma situação que a última letra não será o L.
- [ ] Em algum momento o loop vai ser alterado e haverá um erro.
- [ ] A variável L só é impressa porque o número do loop é 20, se fosse outro não existiria.
- [x] A primeira letra sempre será G, a última sempre será L e o tamanho da narração vai depender do tamanho do loop.

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-php-basico/8>

**Nível:** 3

***

### 12 Analise a estrutura Foreach abaixo e assinale a alternativa correta.

```php
<?php

$frutas = [ 'Banana', 'Maça', 'Pera', 'Uva', 'Manga', 'Abacaxi' ];

$promocao = ['Banana', 'Uva', 'Manga'];

foreach ($frutas as $fruta){
    if(in_array($fruta, $promocao)){
        echo $fruta . '<br>';
    }
}
```

Quais frutas serão impressas?

- [ ] Banana, Uva e Maça
- [ ] Banana, Uva e Abacaxi
- [x] Banana, Uva e Manga
- [ ] Banana e Manga
- [ ] Banana e Maça

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-avancando-com-php/7814>
    2. <https://www.w3schools.com/php/func_array_in_array.asp>
    3. <http://php.net/manual/es/function.in-array.php>

**Nível:** 3

***

### 13 Qual alternativa contém duas constantes do PHP que possibilita a transferência de informações de uma página para outra?

Lembrando que as variáveis devem estar com suas sintaxes corretas.

- [ ] `$GET` e `$POST`
- [x] `$_GET` e `$_POST`
- [ ] `$__GET` e `$__POST`
- [ ] `$_GET_` e `$_POST_`
- [ ] `$GET_` e `$POST_`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-iniciando-com-php/7721>

**Nível:** 3
 	
***

### 14 Analise a URL abaixo e marque a alternativa correta.

"http://localhost:8000/?nome=Luiz&sobrenome=Diniz"

Qual verbo HTTP você associa ao ver este tipo de URL?

- [x] get
- [ ] post

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-iniciando-com-php/7721>

**Nível:** 3
 	
*** 

### 15 Qual método devemos utilizar no formulário para que o usuário não consiga ter acesso visual aos valores submetidos?

- [ ] get 
- [x] post

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-iniciando-com-php/7721>

**Nível:** 3
 	
***

### 16 Analise o código dos dois arquivos abaixo:

Arquivo de formulário. (pode ter o nome que desejar)

```php
<!doctype html>
<html lang="en">
<head>
    <title>PHP básico</title>
</head>
<body>
<form action="http://localhost:8000/soma_porcentagem.php" method="post">
    <input type="number" id="number1" name="number1">
    <input type="number" id="number2" name="number2">
    <input type="number" id="porcentagem" name="porcentagem">
    <input type="submit" value="Calcular">
</form>
</body>
</html>
```

Código do arquivo de cálculo. (Deve ter o nome indicado na action do arquivo anterior).

```php
<?php
//Código do arquivo soma_porcentagem.php
$soma = $_POST['number1'] + $_POST['number2'];
$somaPorcentagem = $soma + ($soma * ($_POST['porcentagem'] / 100));

echo "<h1>O resultado é: $somaPorcentagem</h1>";
```

Vejam que estamos submetendo um formulário para um arquivo chamado soma_porcentagem.php e este arquivo executa uma soma com os valores submetidos pelo formulário.

Qual o atributo HTML que o PHP utiliza para resgatar os valores, na constante $_POST, e qual o resultado será exibido, caso o usuário coloque os seguintes valores nos campos:

* number1: 5
* number2: 5
* porcentagem: 50

- [x] Atributo name e resultado 15
- [ ] Atributo name e resultado 25
- [ ] Atributo id e resultado 15
- [ ] Atributo id e resultado 25
- [ ] Atributo type e resultado 25

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-iniciando-com-php/7721>

**Nível:** 3
 	
***

### 17 Analise o código abaixo e depois responda a questão.

```php
<?php

function calculator($num1,$num2,$op){
    if($op == "+"){
        return $num1 + $num2;
    }elseif($op == "-"){
        return $num1 - $num2;
    }elseif($op == "/"){
        return $num1 / $num2;
    }elseif($op == "*"){
        return $num1 * $num2;
    }else{
        return "Error!";
    }
}
```

* O resultado que queremos é 20.
* A operação deve ser multiplicação.
* O primeiro parâmetro deve ser menor que o segundo parâmetro.

Atendendo as especificações acima, como deveria ser a chamada da função calculator?

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-php-basico/14>
    
Res.: `calculator(4,5,"*")`

**Nível:** 3

***

### 18 Analise o código abaixo e preencha o valor do resultado final.

```php
<?php

function soma($num1, $num2) {
    return $num1 + $num2;
}

function subtrai($num1, $num2) {
    return $num1 - $num2;
}

function multiplica($num1, $num2) {
    return $num1 * $num2;
}

function dobro($num) {
    return $num * 2;
}

$resultado = dobro( multiplica( soma(10, 10), subtrai(10, 5) ) );

echo $resultado;
```

Qual o valor final da variável resultado?

* **Dica.:**
    1. <https://www.schoolofnet.com/curso-php-basico/14>
    2. <https://www.schoolofnet.com/curso-iniciando-com-php/7715>

Resp.: 200

**Nível:** 3

***

### 19 Analise o código abaixo e revise todos os conhecimentos até agora.

```php
<?php
function somaPar($totalPar, $num) {
    return $totalPar += $num;
}

function somaImpar($totalImpar, $num) {
    return $totalImpar += $num;
}

$loop = 10;
$totalPar = 0;
$totalImpar = 0;

for ($i = 1 ; $i <= $loop ; $i++){
    if(($i % 2) == 0){
        $totalPar = somaPar($totalPar, $i);
    }else{
        $totalImpar = somaImpar($totalImpar, $i);
    }
}

echo 'Par:  ' . $totalPar;
echo '<br>';
echo 'Impar: ' . $totalImpar;
```

No código acima estamos utilizado funções, variáveis, operadores, repetições e condicionais.

Qual o valor da soma de números pares, e números impares, em um loop de 10 repetições.

* **Dica.:** 
    1.Lembrando que o módulo(%) pega o resto da divisão, podemos fazer a divisão por 2 e se o resto for zero sabemos que o número é par.
    2. As funções são chamadas mais do que uma vez e executam suas tarefas, sempre que necessário, chegando a um valor final.

Resp.: Par: 30 e Impar: 25

**Nível:** 3

***

### 20 Qual função, do PHP, devo utilizar para eliminar tags malicionsas durante o envio de formulários?

- [ ] `trim()`
- [ ] `remove_tags()`
- [ ] `clear_tags()`
- [x] `strip_tags()`
- [ ] `str_replace()`

* **Dica.:** 
    1.<https://www.schoolofnet.com/curso-avancando-com-php/7819>

**Nível:** 3

***

### 21 Analise o código abaixo:

Código do arquivo de formulário
```php
<h2>Digite sua idade para saber se pode jogar.</h2>

<form action="/permissao.php?idade=18" method="post">
    <input type="number" name="idade" value="16">
    <input type="submit" value="Enviar">
</form>
```

Código do arquivo permissao.php
```php
if($_REQUEST['idade'] >= 18){
    echo "Pode jogar";
}else {
    echo "Não pode jogar";
}
```

Fique atendo ao detalhe de que temos as requisições get e post sendo enviadas, ao mesmo tempo, com o mesmo identificador "idade".

Estamos utilizando a variável global $_REQUEST para resgatar o valor, portanto qual será o texto exibido, de acordo com a lógica condicional?

- [ ] Pode jogar
- [x] Não pode jogar

* **Dica.:** 
    1.<https://www.schoolofnet.com/curso-avancando-com-php/7820>

**Nível:** 3

*** 