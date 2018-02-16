# Questões

| Questões 1 - 10             | Questões 11 - 20            |
|-----------------------------|-----------------------------|
| [Question 1 - Nível 1][1]   | [Question 11 - Nível 2][11] |  
| [Question 2 - Nível 1][2]   | [Question 12 - Nível 2][12] |  
| [Question 3 - Nível 1][3]   | [Question 13 - Nível 2][13] |  
| [Question 4 - Nível 1][4]   | [Question 14 - Nível 2][14] |  
| [Question 5 - Nível 1][5]   | [Question 15 - Nível 3][15] |  
| [Question 6 - Nível 1][6]   | [Question 16 - Nível 3][16] |  
| [Question 7 - Nível 1][7]   | [Question 17 - Nível 3][17] |  
| [Question 8 - Nível 2][8]   | [Question 18 - Nível 3][18] |  
| [Question 9 - Nível 2][9]   | [Question 19 - Nível 3][19] |  
| [Question 10 - Nível 2][10] | [Question 20 - Nível 3][20] |  
     
[1]:#1-o-que-são-verbos-ou-métodos-http
[2]:#2-qual-a-diferença-básica-entre-o-método-get-e-post
[3]:#3-qual-é-o-método-padrão-de-um-formulário-caso-esta-informação-seja-omitida-no-código
[4]:#4-analise-a-url-abaixo-e-assinale-a-alternativa-correta
[5]:#5-o-que-é-uma-super-variável
[6]:#6-qual-super-variável-podemos-utilizar-para-reconhecer-o-tipo-da-requisição
[7]:#7-quais-super-variáveis-utilizamos-para-resgatar-os-dados-nas-requisições-do-tipo-get-e-post
[8]:#8-analise-o-código-abaixo
[9]:#9-assinale-a-alternativa-correta-depois-de-analisar-o-código-abaixo
[10]:#10-qual-alternativa-indica-uma-transformação-de-um-valor-passado-via-formulário-forçando-que-o-mesmo-seja-um-valor-do-tipo
[11]:#11-quando-precisamos-validar-se-um-valor-é-nulo-e-passar-um-valor-substituto-podemos-utilizar-a-operação-ternária-porém
[12]:#12-assinale-a-alternativa-que-nÃo-se-trata-de-uma-função-de-filtragem
[13]:#13-analise-as-opções-abaixo-e-assinale-a-que-estiver-errada-em-relação-a-filtragem-de-dados-com-php
[14]:#14-quando-possuímos-muitos-campos-em-um-formulário-qual-método-de-filtragem-é-mais-indicado-a-ser-utilizado
[15]:#15-se-é-preciso-verificar-a-existÊncia-de-uma-variável-qual-método-deve-ser-utilizado
[16]:#16-se-é-preciso-verificar-a-existÊncia-de-conteÚdo-em-uma-variável-qual-método-deve-ser-utilizado
[17]:#17-analise-o-código-abaixo
[18]:#18-analise-o-código-abaixo
[19]:#19-analise-o-código-abaixo
[20]:#20-qual-a-diferença-entre-a-super-variável-$_request-para-as-super-variáveis-$_post-e-$_get

***

### 1 O que são verbos, ou métodos, HTTP?

- [x] São formas de utilizar o protocolo HTTP para executar requisições, onde cada verbo tem sua própria característica.
- [ ] Verbos são conceitos separados do HTTP, pois eles trabalham de forma independente na criação de dados.
- [ ] São programas, pré-compilados, capazes de excluir informações de uma base de dados.
- [ ] São funções do PHP que podemos utilizar para escrever textos no servidor.
- [ ] São formas de fazer requisições, mas somente no sistema operacional Windows.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-php-e-formularios/8176> 

**Nível:** 1         
    
***

### 2 Qual a diferença básica entre o método GET e POST?

- [x] O GET apenas solicita informações e o POST, geralmente, solicita uma ação ao servidor.
- [ ] O GET executa uma ação de alteração no servidor e o POST apenas solicita informações.
- [ ] O GET so pode ser utilizado quando estamos trabalhando com banco de dados e o POST pode ser utilizado a qualquer momento.
- [ ] O POST é utilizado somente para requisição em banco de dados e o GET não.
- [ ] Não existe nenhuma diferença entre eles, somente o nome.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-php-e-formularios/8176> 

**Nível:** 1         
    
***

### 3 Qual é o método padrão de um formulário, caso esta informação seja omitida no código?

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-php-e-formularios/8177> 

Resp.: get

**Nível:** 1         
    
***

### 4 Analise a URL abaixo e assinale a alternativa correta.

`http://localhost:8000/?name=School+of+Net&acao=Cursos+Online`

Qual método você associa, diretamente, ao ver uma URL com este padrão?

- [x] GET
- [ ] POST

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-php-e-formularios/8177> 

Resp.: get

**Nível:** 1         
    
***

### 5 O que é uma SUPER variável?

- [ ] Uma variável do sistema operacional que é capaz de alterar todo script PHP se necessário. 
- [ ] Uma variável que tem maior espaço de armazenamento.
- [ ] Uma variável que guarda dois tipos de dados diferentes.
- [x] Uma variável que você tem acesso durante todo o processo de execução e em qualquer contexto do script PHP.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-php-e-formularios/8178> 

**Nível:** 1         
    
***

### 6 Qual super variável podemos utilizar para reconhecer o tipo da requisição?

- [ ] `$_REQUEST`
- [ ] `$_TIPE_REQUEST`
- [x] `$_SERVER`
- [ ] `$_METHOD`
- [ ] `$_SERVERS`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-php-e-formularios/8178> 

**Nível:** 1         
    
***

### 7 Quais super variáveis utilizamos para resgatar os dados, nas requisições, do tipo get e post?

- [ ] `$GET` e `$POST`
- [ ] `$GET_` e `$POST_`
- [ ] `$_GET_` e `$_POST_`
- [x] `$_GET` e `$_POST`
- [ ] `$_get` e `$_post`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-php-e-formularios/8178> 

**Nível:** 1         
    
***

### 8 Analise o código abaixo.

```html
<form action="/">
    <input type="text" id="nome" class="item-form" name="name">
    <input type="submit" value="Enviar">
</form>
```

Imagine que você precisa resgatar o valor do nome digitado no formulário acima. Qual das alternativas abaixo você usaria?

- [ ] `$_GET['item-form']` 
- [ ] `$_POST['nome']` 
- [ ] `$_POST['name']` 
- [ ] `$_GET['nome']` 
- [x] `$_GET['name']`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-php-e-formularios/8178> 

**Nível:** 2         
    
***

### 9 Assinale a alternativa correta depois de analisar o código abaixo.

```html
<form action="/" method="post" enctype="multipart/form-data">
    <input type="file" id="imagem" class="pic" name="foto">
    <input type="submit" value="Enviar">
</form>
```

Qual alternativa você usaria para resgatar o dado do formulário acima?

- [ ] `$_POST['foto']` 
- [ ] `$_POST['imagem']` 
- [ ] `$_POST['pic']` 
- [x] `$_FILES['foto']`
- [ ] `$_FILE['foto']`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-php-e-formularios/8179> 

**Nível:** 2         
    
***

### 10 Qual alternativa indica uma transformação, de um valor passado via formulário, forçando que o mesmo seja um valor do tipo INTEIRO?

- [ ] `$valor = (fload) $_POST['valor']`
- [ ] `$valor = (integer) $_POST['valor']`
- [x] `$valor = (int) $_POST['valor']`
- [ ] `$valor = (inteiro) $_POST['valor']`
- [ ] `$valor = (i) $_POST['valor']`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-php-e-formularios/8180> 

**Nível:** 2         
    
***

### 11 Quando precisamos validar se um valor é nulo e passar um valor substituto, podemos utilizar a operação ternária. Porém existe uma forma reduzida chamada Null Coalescing Operator.

- [ ] `$valor = $_POST['valor'] ? $_POST['valor'] : 0`
- [ ] `$valor = $_POST['valor'] : $_POST['valor'] ? 0`
- [ ] `$valor = $_POST['valor'] ?: 0`
- [ ] `$valor = $_POST['valor'] :: 0`
- [x] `$valor = $_POST['valor'] ?? 0`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-php-e-formularios/8181> 

**Nível:** 2         
    
***

### 12 Assinale a alternativa que NÃO se trata de uma função de filtragem.

- [ ] trim
- [ ] stripslashes
- [ ] htmlspecialchars
- [x] nospace
- [ ] htmlspecialchars_decode

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-php-e-formularios/8182> 
    2. <http://php.net/manual/en/function.htmlspecialchars-decode.php> 

**Nível:** 2         
    
***

### 13 Analise as opções abaixo e assinale a que estiver ERRADA, em relação a filtragem de dados com PHP.

- [ ] `$nome = filter_input(INPUT_POST, 'nome');` 
- [ ] `$nome = filter_input(INPUT_GET, 'nome');` 
- [ ] `$data = filter_input_array(INPUT_POST);` 
- [ ] `$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);` 
- [ ] `$data = filter_inputs(INPUT_POST_GET);` 

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-php-e-formularios/8183> 

**Nível:** 2         
    
***

### 14 Quando possuímos muitos campos em um formulário qual método de filtragem é mais indicado a ser utilizado?

- [ ] filter_input
- [x] filter_input_array

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-php-e-formularios/8183> 

**Nível:** 2         
    
***

### 15 Se é preciso verificar a EXISTÊNCIA de uma variável, qual método deve ser utilizado?

- [ ] `is_exists($var)` 
- [ ] `empty($var)`
- [ ] `is_defined($var)`
- [x] `isset($var)`
- [ ] `is_set($var)`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-php-e-formularios/8184> 

**Nível:** 3         
    
***

### 16 Se é preciso verificar a EXISTÊNCIA DE CONTEÚDO, em uma variável, qual método deve ser utilizado?

- [ ] `if(is_exists_content($var)){ echo "Conteúdo existente"; }` 
- [x] `if(!empty($var)){ echo "Conteúdo existente"; }`
- [ ] `if(empty($var)){ echo "Conteúdo existente"; }`
- [ ] `if(isset($var)){ echo "Conteúdo existente"; }`
- [ ] `if(is_content($var)){ echo "Conteúdo existente"; }`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-php-e-formularios/8184> 

**Nível:** 3         
    
***

### 17 Analise o código abaixo.

```php
<?php

method_name(filter_input_array(INPUT_POST));

echo $nome;
echo '<br>';
echo $idade;

?>
```

No local de "method_name", no código acima, qual seria o método indicado para utilizar?

- [x] extract
- [ ] compact

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-php-e-formularios/8185>
    2. Lembre da função de cada método e analise o código por inteiro para responder. 

**Nível:** 3         
    
***

### 18 Analise o código abaixo.

```php
<?php
$nome = "Erik";
$idade = 32;

$data = method_name('nome', 'idade');

echo $data['nome'];
echo '<br>';
echo $data['idade'];
?>
```

No local de "method_name", no código acima, qual seria o método indicado para utilizar?

- [ ] extract
- [x] compact

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-php-e-formularios/8185>
    2. Lembre da função de cada método e analise o código por inteiro para responder. 

**Nível:** 3          
    
***

### 19 Analise o código abaixo.

```php
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    var_dump($_REQUEST);
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<form action="/?nome=Wesley&peso=70" method="post">
    <input type="text" name="nome" value="Erik">
    <input type="text" name="idade" value="44">
    <input type="text" name="peso" value="75">
    <input type="submit" value="Enviar">
</form>

</body>
</html>
```

Quais serão os valores impressos na tela do usuário, através do comando var_dump? 

Ordem: nome -> idade -> peso.

- [x] Erik, 44 e 75
- [ ] Wesley, 44 e 75
- [ ] Wesley, 44 e 70
- [ ] Erik, 44 e 70
- [ ] Erik, 45 e 75 

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-php-e-formularios/8186>
    2. Vejam que a action está passando dados via método get, portando você deve analisar e levar em consideração a sobreposição de dados por relevância.
    3. Os dados não serão digitados pelo usuário, neste caso estamos forçando com o atributo value.

**Nível:** 3          
    
***

### 20 Qual a diferença entre a super variável $_REQUEST para as super variáveis $_POST e $_GET?

- [ ] $_REQUEST tem um processamento mais demorado, portanto não deve ser utilizada.
- [x] $_REQUEST resgata todos os dados da requisição independente do método utilizado.
- [ ] $_REQUEST resgata dados apenas se a requisição for do tipo GET.
- [ ] $_REQUEST resgata dados apenas se a requisição for do tipo POST.
- [ ] Nenhuma diferença.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-php-e-formularios/8186>

**Nível:** 3          
    
***