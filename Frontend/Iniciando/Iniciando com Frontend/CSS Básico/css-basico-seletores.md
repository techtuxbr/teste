# Questões

| Questões 1 - 6  | Questões 7 - 12  |
|-----------------|-------------------|
| [Question 1][1] | [Question 7][7] |  
| [Question 2][2] | [Question 8][8] |   
| [Question 3][3] | [Question 9][9] | 
| [Question 4][4] | [Question 10][10] | 
| [Question 5][5] | [Question 11][11] | 
| [Question 6][6] | [Question 12][12] | 

[1]:#1-qual-o-principal-objetivo-do-css
[2]:#2-dentro-de-qual-tag-devemos-inserir-nosso-código-css-quando-queremos-estilizar-diretamente-no-arquivo-html
[3]:#3-dentre-todas-as-tags-do-html-existem-duas-que-nÃo-devemos-aplicar-nenhum-estilo-com-css-a-maioria-dos-navegadores-não-dão-suporte-a-estilização-destas-tags-pois-elas-são-apenas-informativas-quais-são-estas-tags 
[4]:#4-a-maioria-dos-principais-frameworks-css-se-baseiam-em 
[5]:#5-além-de-aplicar-css-diretamente-às-tags-podemos-utilizar-atributos-específicos-para-estilizar-quais-são-estes-atributos 
[6]:#6-qual-afirmação-abaixo-está-correta-em-relação-a-classes-e-ids
[7]:#7-analise-o-código-abaixo-e-depois-selecione-a-alternativa-correta 
[8]:#8-analise-o-menu-de-navegação-abaixo 
[9]:#9-no-código-css-abaixo-temos-a-estilização-de-um-botão-adicione-a-propriedade-correta-para-que-a-borda-tenha-um-raio-de-20-pixels 
[10]:#10-qual-a-diferença-entre-padding-e-margin
[11]:#11-caso-seja-necessário-aplicar-um-css-padrão-para-todos-os-elementos-de-um-projeto-e-eliminar-as-configurações-nativas-do-navegador-qual-seletor-deverá-ser-utilizado-qual-o-nome-deste-procedimento-geralmente-utilizado-pelos-designers 
[12]:#12-qual-a-forma-correta-de-carregar-um-arquivo-externo-para-estilização-em-seu-arquivo-html 

***

### 1 Qual o principal objetivo do CSS?

- [ ] Tornar o conteúdo web mais acessível ao usuário.
- [ ] Otimizar o código HTML.
- [x] Estilizar páginas web ou sistemas em geral.
- [ ] Fazer conexão com banco de dados.
- [ ] Debugar o seu código HTML.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-css-basico/4474>

**Nível:** 1

***

### 2 Dentro de qual tag devemos inserir nosso código css, quando queremos estilizar diretamente no arquivo HTML?

- [ ] `<head></head>`
- [ ] `<title></title>`
- [ ] `<body></body>`
- [x] `<style></style>`
- [ ] Nenhuma das tags acima

* **Dica:**
    1. <https://www.schoolofnet.com/curso-css-basico/4474>

**Nível:** 1

***

### 3 Dentre todas as tags do HTML, existem duas que NÃO devemos aplicar nenhum estilo com CSS. A maioria dos navegadores não dão suporte a estilização destas tags, pois elas são apenas informativas. Quais são estas tags?

- [ ] `<body></body>` e `<head></head>`
- [x] `<head></head>` e `<!DOCTYPE html>`
- [ ] `<body></body>` e `<html></html>`
- [ ] `<a></a>` e `<p></p>`
- [ ] `<ul></ul>` e `<li></li>`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-css-basico/4475>

**Nível:** 1

***

### 4 A maioria dos principais frameworks CSS se baseiam em:

- [ ] atributos
- [ ] propriedades das tags
- [x] classes
- [ ] features
- [ ] nenhumas das opções acima

* **Dica:**
    1. <https://www.schoolofnet.com/curso-css-basico/4475>

**Nível:** 1

***

### 5 Além de aplicar CSS diretamente às tags, podemos utilizar atributos específicos para estilizar. Quais são estes atributos?

- [x] id e class
- [ ] class e href
- [ ] class e name
- [ ] id e name
- [ ] class e alt

* **Dica:**
    1. <https://www.schoolofnet.com/curso-css-basico/4475>

**Nível:** 1

***

### 6 Qual afirmação abaixo está correta, em relação a classes e ids?

- [ ] Não existe nenhuma diferença e podemos utilizar ambos do mesmo jeito.
- [ ] O atributo class deve ser único enquanto o id pode ser utilizando quantas vezes forem necessárias.
- [ ] Utilizo o id somente para estilizar formulários e a class para estilizar outras tags.
- [x] O id deve ser único enquanto a class pode ser utilizada quantas vezes forem necessárias.
- [ ] Devo utilizar apenas o id, pois ele tem mais relevância em relação ao atributo class.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-css-basico/4475>

**Nível:** 1

***

### 7 Analise o código abaixo e depois selecione a alternativa correta.

```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <style>
        .blue {
            color: blue;
        }
        .red {
            color: red;
        }
        #yellow {
            color: yellow;
        }
    </style>
    <body>

    <p id="yellow" class="blue red">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed tempor incididunt ut labore et dolore magna aliqua.</p>

    </body>
</html>
```
	
Qual cor o parágrafo assumirá ao ser renderizado pelo navegador? 

- [x] Amarelo
- [ ] Azul
- [ ] Vermelho
- [ ] Preto

* **Dica:**
    1. <https://www.schoolofnet.com/curso-css-basico/4476>
    2. Lembre-se da ordem de importância entre class e id e também leve em consideração a ordem em que elas são criadas.

**Nível:** 2

***

### 8 Analise o menu de navegação abaixo:

```html
<nav>
    <ul>
        <li>home</li>
        <li>sobre</li>
        <li>produtos</li>
        <li>contato</li>
    </ul>
</nav>
```

Se não aplicarmos nenhum estilo CSS, cada link estará em uma linha diferente. Para que consigamos deixar todos os links em uma mesma linha, qual configuração deveremos aplicar nos seletores abaixo:

```css 
nav ul li { }	        
```

* **Dica:**
    1. <https://www.schoolofnet.com/curso-css-basico/4477>

Resp.: `display: inline-block;`

**Nível:** 2

***

### 9 No código CSS abaixo temos a estilização de um botão. Adicione a propriedade correta para que a borda tenha um raio de 20 pixels.

```html
.btn {
    border-style: solid;
    border-top-width: 2px;
    border-bottom-width: 4px;
    border-left-width: 2px;
    border-right-width: 4px;
    color: white;
    cursor: pointer;
    display: inline-block;
    margin: 10px;
    padding: 10px;
    text-decoration: none;
}
```

* **Dica:**
    1. <https://www.schoolofnet.com/curso-css-basico/4480>
    2. A resposta deve conter apenas a propriedade padrão, não sendo necessário adicionar propriedades específicas para os diferentes navegadores.

Resp.: `border-radius: 20px;`	

**Nível:** 2

***

### 10 Qual a diferença entre padding e margin?

- [ ] Não existe diferença nenhuma, você decide qual utilizar de acordo com o navegador que suporta.
- [ ] Padding é o espaçamento das letras e margin é o espaçamento do elemento como um bloco.
- [x] Padding é o espaçamento interno e margin o espaçamento externo de um elemento.
- [ ] Padding é o espaçamento externo e margin o espaçamento interno de um elemento.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-css-basico/4478>

**Nível:** 2

***

### 11 Caso seja necessário aplicar um css padrão para todos os elementos de um projeto e eliminar as configurações nativas do navegador, qual seletor deverá ser utilizado? Qual o nome deste procedimento, geralmente utilizado pelos designers?

- [ ] `reset {}`, default
- [ ] `default {}`, default
- [x] `* {}`, reset
- [ ] `** {}`, reset
- [ ] `default {}`, reset

* **Dica:**
    1. <https://www.schoolofnet.com/curso-css-basico/4479>

**Nível:** 2

***

### 12 Qual a forma correta de carregar um arquivo externo, para estilização, em seu arquivo HTML?

- [ ] `<links rel="stylesheet" href="">`
- [ ] `<link rel="stylesheets" href="">`
- [x] `<link rel="stylesheet" src="">`
- [ ] `<link rel="stylesheet" href="">`
- [ ] `<link rel="stylesheet" hrefs="">`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-css-basico/4479>
    2. Lembrando que o caminho do arquivo deve ser informado.

**Nível:** 2