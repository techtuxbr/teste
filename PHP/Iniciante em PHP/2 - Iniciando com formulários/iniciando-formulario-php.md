# Questões

| Questões 1 - 10             | Questões 11 - 19            |
|-----------------------------|-----------------------------|
| [Question 1 - Nível 1][1]   | [Question 11 - Nível 2][11] |  
     
[1]:#1-qual-a-tag-utilizar-para-vídeo-no-html5

***

### 1 O que são verbos, ou métodos, HTTP?

- [ ] São formas de utilizar o protocolo HTTP para executar requisições, onde cada verbo tem sua própria característica.
- [ ] Verbos são conceitos separados do HTTP, pois eles trabalham de forma independente na criação de dados.
- [ ] São programas, pré-compilados, capazes de excluir informações de uma base de dados.
- [ ] São funções do PHP que podemos utilizar para escrever textos no servidor.
- [ ] São formar de fazer requisições, mas somente no sistema operacional Windows.

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