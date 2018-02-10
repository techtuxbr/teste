# Questões

| Questões 1 - 9            | Questões 10 - 18            |
|---------------------------|-----------------------------|
| [Question 1 - Nível 2][1] | [Question 10 - Nível 3][10] |  
| [Question 2 - Nível 2][2] | [Question 11 - Nível 3][11] |   
| [Question 3 - Nível 2][3] | [Question 12 - Nível 3][12] | 
| [Question 4 - Nível 2][4] | [Question 13 - Nível 3][13] | 
| [Question 5 - Nível 2][5] | [Question 14 - Nível 3][14] | 
| [Question 6 - Nível 2][6] | [Question 15 - Nível 3][15] | 
| [Question 7 - Nível 2][7] | [Question 16 - Nível 3][16] | 
| [Question 8 - Nível 3][8] | [Question 17 - Nível 3][17] | 
| [Question 9 - Nível 3][9] | [Question 18 - Nível 3][18] |   

[1]:#1-qual-das-tags-abaixo-caracterízam-um-documento-como-html5
[2]:#2-como-resolver-problemas-de-compatibilidade-do-html5-com-navegadores-antigos
[3]:#3-analise-os-metadados-abaixo-e-descubra-onde-está-o-erro-na-resposta-digite-o-erro-encontrado 
[4]:#4-com-o-html5-temos-novas-tags-que-são-recomendadas-por-serem-mais-semânticas-e-ajudarem-o-site-ser-melhor-indexado-por-motores-de-busca-dentre-as-opções-abaixo-qual-modelo-estaria-fora-destes-novos-padrões-de-tags 
[5]:#5-analise-o-código-abaixo 
[6]:#6-qual-tag-deve-ser-utilizada-para-a-criação-de-menus-de-navegação 
[7]:#7-analise-o-código-abaixo-e-depois-marque-verdadeiro-ou-falso 
[8]:#8-marque-a-alternativa-correta-em-relação-ao-código-abaixo 
[9]:#9-analise-o-código-abaixo-e-marque-a-alternativa-correta 
[10]:#10-quando-trabalhando-com-campos-do-tipo-número-ou-range-é-comum-utilizarmos-alguns-atributos-selecione-a-alternativa-que-possui-atributos-inexistentes-para-estes-campos
[11]:#11-no-código-abaixo-temos-uma-barra-numérica-para-que-o-usuário-possa-escolher-um-valor-de-0-a-100-adicione-o-atributo-necessário-na-tag-input-para-que-o-range-seja-alterado-de-20-em-20 
[12]:#12-caso-queiramos-liberar-um-botão-para-que-o-usuário-possa-apagar-todo-texto-digitado-qual-o-tipo-de-input-que-devemos-utilizar 
[13]:#13-no-código-abaixo-temos-uma-listagem-com-html5-adicione-o-código-faltante-para-que-o-autocomplete-funcione-corretamente-durante-a-listagem 
[14]:#14-analise-o-código-abaixo-e-marque-a-alternativa-correta 
[15]:#15-caso-seja-necessário-desabilitar-o-autocomplete-de-um-formulário-inteiro-onde-iremos-adicionar-a-configuração-autocompleteoff
[16]:#16-qual-atributo-faz-com-que-qualquer-validação-nativa-do-html-seja-anulada-em-formulários 
[17]:#17-qual-a-principal-objetivo-ao-usar-o-atributo-autofocus-no-formulário 
[18]:#18-para-conseguir-alterar-o-método-do-formulário-diretamente-no-botão-de-submissão-qual-atributo-devemos-utilizar 

***

### 1 Qual das tags abaixo caracterízam um documento como HTML5.

```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">	
        <title>Title of the document</title>
    </head>
    <body>

    </body>
</html>
```

- [ ] `<html lang="en">`
- [ ] `<meta charset="utf-8">`
- [ ] `<head>`
- [x] `<!DOCTYPE html>`
- [ ] `<body>`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-html5/66>

**Nível:** 2

****

### 2 Como resolver problemas de compatibilidade do HTML5 com navegadores antigos?

- [x] Utilizar CSS e Javascript para corrigir as incompatibilidades.
- [ ] Utilizar Java e PHP para corrigir as incompatibilidades.
- [ ] Devemos desenvolver com as tags antigas mesmo e esquecer as novas tecnologias.
- [ ] Criar um arquivo diferente para cada navegador e versão.
- [ ] Não existe solução para incompatibilidade entre os navegadores.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-html5/67>

**Nível:** 2

***

### 3 Analise os metadados abaixo e descubra onde está o erro. Na resposta, digite o erro encontrado.

```html
<meta charset="UTF-8">
<meta name="keywords" content="HTML5,tips,course">
<meta name="description" content="Learning to work whit HTML5">
<meta name="author" content="Guilherme Ferreira"></meta>
<meta name="robots" content="index,follow">
```

Resp.: `</meta>` 

* **Dica:**
    1. <https://www.schoolofnet.com/curso-html5/68>
    2. Lembrando que o navegador, as vezes, pode reconhecer algum erro e tratá-lo para você, mas como um bom desenvolvedor temos que estar atento a detalhes.

**Nível:** 2

***

### 4 Com o HTML5 temos novas tags que são recomendadas, por serem mais semânticas e ajudarem o site ser melhor indexado por motores de busca. Dentre as opções abaixo, qual modelo estaria FORA destes novos padrões de tags?

- [ ] `<header></header>`
- [ ] `<aside></aside>`
- [ ] `<main></main>`
- [ ] `<footer></footer>`
- [x] `<div class="article"></div>`
    
* **Dica:**
    1. <https://www.schoolofnet.com/curso-html5/69>

**Nível:** 2

***

### 5 Analise o código abaixo: 

```html
<section>
    <article>
        <header/>
            
        </header>
            ...content...
        <footer>
            
        <footer>
    </article>
</section>
```

Quantos erros você pode detectar no código acima?

- [ ] 1
- [x] 2
- [ ] 3
- [ ] 4
- [ ] Nenhum
	
* **Dica:**
    1. <https://www.schoolofnet.com/curso-html5/70>
	2. Atenção aos mínimos detalhes! Você pode se confundir! Então analise com calma.

**Nível:** 2
	
***

### 6 Qual tag deve ser utilizada para a criação de menus de navegação?

- [x] `<nav></nav>`
- [ ] `<header></header>`
- [ ] `<form method="get"></form>`
- [ ] `<input type="submit" name="navigation">`
- [ ] `<button></button>`
  
* **Dica:**
    1. <https://www.schoolofnet.com/curso-html5/69>

**Nível:** 2

***

### 7 Analise o código abaixo e depois marque verdadeiro ou falso.

```html
<!DOCTYPE html>
<html lang="en">
<body>
    <header>
        ...content...
    </header>
    <main>
        <section>
            <article>
                <header>
                    ...content header...
                </header>
                    ... contents article...
                <footer>
                    ...content footer...
                </footer>
            </article>
        </section>
    </main>
    <footer>
        <p>School Of Net</p>
        <small>&copy All rights reserve</small>
    </footer>
</body>
</html>
```

"Temos dois erros de semântica, no código acima. Não podemos repetir as tags header e footer."

A frase acima é verdadeira ou falsa?

- [ ] Verdadeira
- [x] Falsa
 
* **Dica:**
     1. <https://www.schoolofnet.com/curso-html5/72>
     
**Nível:** 2

***

### 8 Marque a alternativa correta em relação ao código abaixo.

```html
<figure>
    <img src="img/figure.jpg" alt="Description of the Figure">
    <figcaption>Description of the Figure</figcaption>
</figure>
```

- [ ] O fato de adicionar a tag figcaption e o atributo alt não influenciam em nada o seu código, portanto não há a necessidade de adicionar estes elementos.
- [x] O atributo alt e a tag figcaption são muito importantes para que os novos sistemas reconheçam tais elementos para a inclusão digital. Desta forma pessoas com deficiência visual poderiam ouvir algo a respeito da imagem.
- [ ] A tag figure não existe no HTML5.
- [ ] Os novos desenvolvedores não devem se importar com as novas tags do HTML5.
- [ ] Podemos utilizar a tag div, para envolver a tag img, e adicionar um parágrafo substituindo a tag figcaption que teremos o mesmo efeito e a mesma semântica. 

* **Dica:**
     1. <https://www.schoolofnet.com/curso-html5/73>

**Nível:** 3

***

### 9 Analise o código abaixo e marque a alternativa correta.

```html
<section>
    <form>
        <div class="form-group">r
            <label>Color</label>
            <input type="color">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date">
        </div>
        <div class="form-group">
            <label>DateTime-local</label>
            <input type="datetime-local">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email">
        </div>
        <button>Submit</button>
    </form>
</section>
```

- [ ] Todos os campos acima são de saída de dados. 
- [ ] Dois são de saída e um de entrada.
- [ ] Dois são de entrada e um de saída.
- [x] Todos os campos acima são de entrada de dados.
- [ ] Não são nem de entrada e nem de saída, pertencem a outro grupo de campos.

* **Dica:**
     1. <https://www.schoolofnet.com/curso-html5/74>

**Nível:** 3

***

### 10 Quando trabalhando com campos do tipo número, ou range, é comum utilizarmos alguns atributos. Selecione a alternativa que possui atributos INEXISTENTES para estes campos.

- [ ] max, min e step
- [ ] disabled, maxlength e pattern
- [ ] readonly, required e size
- [ ] value, max e min
- [x] empty, hide e blocked

* **Dica:**
     1. <https://www.schoolofnet.com/curso-html5/75>
     2. Lembrando que existem outros tipos de atributos que não foram citados na aula, portanto pesquise no link abaixo.
      - <https://www.w3schools.com/html/html_form_input_types.asp>

**Nível:** 3

***

### 11 No código abaixo, temos uma barra numérica para que o usuário possa escolher um valor de 0 a 100. Adicione o atributo necessário, na tag input, para que o range seja alterado de 20 em 20.

```html
<div class="form-group">
    <label>Range</label>
    <input type="text" id="textinput">
    <input type="range" min="0" max="10" onchange="updateTextInput(this.value);">
    <script>
        function updateTextInput(num){
            document.getElementById("textinput").value = num;
        }
    </script>
</div>
```

resp.: `step="20"`

* **Dica:**
     1. <https://www.schoolofnet.com/curso-html5/75>
     2. Não se preocupe com o código javascript agora, você aprenderá o que for necessário no momento correto.

**Nível:** 3

***

### 12 Caso queiramos liberar um botão para que o usuário possa apagar todo texto digitado, qual o tipo de input que devemos utilizar?

- [x] search
- [ ] text
- [ ] submit
- [ ] number
- [ ] hidden

* **Dica:**
     1. <https://www.schoolofnet.com/curso-html5/76>

**Nível:** 3

***

### 13 No código abaixo temos uma listagem com HTML5. Adicione o código faltante para que o autocomplete funcione corretamente durante a listagem.

```html
<div class="form-group">
    <label>List</label>
    <input list="codes" name="code" required>
    <datalist>
        <option value="Javascript"></option>
        <option value="PHP"></option>
        <option value="C#"></option>
        <option value="Delphi"></option>
        <option value="Java"></option>
        <option value="Pascal"></option>
        <option value="C++"></option>
        <option value="Ruby"></option>
        <option value="Python"></option>
    </datalist>
</div>
```

* **Dica:**
     1. <https://www.schoolofnet.com/curso-html5/77>
	 2. Exite um atributo que faz a ligação entre o campo input e a listagem.

Res.: `id="codes"`

**Nível:** 3

*** 

### 14 Analise o código abaixo e marque a alternativa correta.

```html
<form oninput="x.value=parseInt(a.value) + parseInt(b.value),y.value =parseInt(a.value)">
    0
    <input type="range" id="a" name="a" value="50" min="0" max="100">
    100
    +
    <input type="text" name="b" value="0">
    =
    <output name="x"></output>
    <output name="y"></output>
</form>
```

No código acima, qual tag é responsável por imprimir os dados na tela? Qual atributo é responsável por calcular os valores? Marque a alternativa correta seguindo a sequência das perguntas.

- [ ] input e output
- [ ] input e oninput
- [ ] input e parseInt
- [x] output e oninput
- [ ] output e parseInt

* **Dica:**
     1. <https://www.schoolofnet.com/curso-html5/78>

**Nível:** 3

***

### 15 Caso seja necessário desabilitar o autocomplete de um formulário inteiro, onde iremos adicionar a configuração "autocomplete='off'"?

- [ ] Em todos os campos existentes 
- [x] Na tag form 
- [ ] Somente no botão de submissão 
- [ ] Em nenhuma tag, pois só podemos fazer isso utilizando javascript 
- [ ] Só podemos desabilitar o autocomplete para campos de email 

* **Dica:**
     1. <https://www.schoolofnet.com/curso-html5/79>

**Nível:** 3

***

### 16 Qual atributo faz com que qualquer validação nativa do HTML seja anulada em formulários?

- [ ] nofilter
- [ ] filteroff
- [ ] offvalidator
- [ ] novalidator
- [x] novalidate


* **Dica:**
     1. <https://www.schoolofnet.com/curso-html5/80>
    
**Nível:** 3
 
***

### 17 Qual a principal objetivo ao usar o atributo autofocus no formulário?

- [ ] Preencher o campo automaticamente.
- [ ] Guardar dados anteriores para auto completar.
- [ ] Dar zoom no campo para destacar informação.
- [x] Deixar o campo selecionado, automaticamente, para preenchimento, no carregamento da página.
- [ ] O autofocus tem apenas caráter semântico e não influencia no formulário.


* **Dica:**
     1. <https://www.schoolofnet.com/curso-html5/80>

**Nível:** 3

***

### 18 Para conseguir alterar o método do formulário, diretamente no botão de submissão, qual atributo devemos utilizar?

- [ ] `formnovalidate`
- [ ] `form_method=""`
- [ ] `methodform=""`
- [x] `formmethod=""`
- [ ] `altermethod=""`

* **Dica:**
     1. <https://www.schoolofnet.com/curso-html5/81>
     
**Nível:** 3

***