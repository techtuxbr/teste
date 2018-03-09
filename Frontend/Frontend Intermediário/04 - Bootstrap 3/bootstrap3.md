# Questões

| Questões 1 - 6            | Questões 7 - 12             | Questões 13 - 18            | Questões 19 - 24            |
|---------------------------|-----------------------------|-----------------------------|-----------------------------|
| [Question 1 - Nível 1][1] | [Question 7 - Nível 2][7]   | [Question 13 - Nível 2][13] | [Question 19 - Nível 3][19] |  
| [Question 2 - Nível 1][2] | [Question 8 - Nível 2][8]   | [Question 14 - Nível 2][14] | [Question 20 - Nível 3][20] |  
| [Question 3 - Nível 1][3] | [Question 9 - Nível 2][9]   | [Question 15 - Nível 3][15] | [Question 21 - Nível 3][21] |  
| [Question 4 - Nível 2][4] | [Question 10 - Nível 2][10] | [Question 16 - Nível 3][16] | [Question 22 - Nível 3][22] |  
| [Question 5 - Nível 2][5] | [Question 11 - Nível 2][11] | [Question 17 - Nível 3][17] | [Question 23 - Nível 3][23] |  
| [Question 6 - Nível 2][6] | [Question 12 - Nível 2][12] | [Question 18 - Nível 3][18] | [Question 24 - Nível 3][24] |  
                     
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
[16]:#questão-16
[17]:#questão-17
[18]:#questão-18
[19]:#questão-19
[20]:#questão-20
[21]:#questão-21
[22]:#questão-22
[23]:#questão-23
[24]:#questão-24

***

### Questão 1 

O que seria o Bootstrap 3?

- [ ] Uma linguagem de programação baseada em CSS.
- [ ] Uma extensão do CSS, que utilizamos para criar projetos com layouts responsivos.
- [ ] Uma extensão dos navegadores que converte um site normal em layout responsivo.
- [ ] Uma classe do CSS que transforma um projeto normal em responsivo.
- [x] Um framework css, que contém um conjunto de classes prontas para criação de projetos responsivos.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-bootstrap/29>

**Nível:** 1
 	
***

### Questão 2

Analise a afirmação abaixo e assinale verdadeiro ou falso.

A instalação do Bootstrap 3 pode ser feita de várias maneiras. Dentre elas estão:
    - download dos arquivos em zip
    - Link via CDN
    - Instalação via NPM
    - Instalação via Composer
    - Instalação via Bower

- [x] Verdadeiro
- [ ] Falso

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-bootstrap/29>
    2. <http://getbootstrap.com/docs/3.3/getting-started/#download>

**Nível:** 1
 	
***

### Questão 3

Qual meta tag faz com que o conteúdo seja adequado a diferentes tipos de dispositivos?

- [x] `<meta name="viewport" content="width=device-width, initial-scale=1">`
- [ ] `<meta charset="utf-8">`
- [ ] `<meta name="author" content="School Of Net">`
- [ ] `<meta name="description" content="School Of Net - Cursos Online">`
- [ ] `<meta name="keywords" content="cursos, web, desenvolvimento">`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/29> 

**Nível:** 1 

***

### Questão 4 

Qual atributo é responsável por fazer a ligação entre o menu responsivo e o evento de click do usuário. Sem este atributo o usuário clicaria no botão de menu, no dispositivo mobile, e o menu não seria aberto.
    
```html
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">Bootstrap brand</a>
    </div>
    <div id="navbarCollapse" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li class="dropdown"></li>
        </ul>
    </div>
```

- [ ] class
- [x] data-target
- [ ] type
- [ ] data-toggle
- [ ] aria-expanded

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/30> 
    2. Analise o código e veja se existem valores repetidos que poderiam fazer parte de algum tipo de identificação entre os elementos.

**Nível:** 2 
     
***

### Questão 5 

Quantos espaços temos em cada linha, quando falamos de grid no Bootstrap?

- [ ] 8
- [ ] 10
- [ ] 6
- [x] 12
- [ ] 1

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/31> 

**Nível:** 2

***

### Questão 6 

Analise o código abaixo e selecione a opção correta.

```html
<main>
    <div class="container">
        <div class="row">
            <h1>Grid System</h1>
            <div class="col-md-4">Primeira coluna</div>
            <div class="col-md-5">Segunda coluna</div>
            <div class="col-md-4">Terceira coluna</div>
        </div>
    </div>
</main>
```

Analisando o código acima qual será o comportamento das colunas?

- [ ] Teremos todas as colunas na mesma linha normalmente.
- [ ] Teremos todas as colunas na mesma linha, porém o Bootstrap terá que ajustar automaticamente.
- [ ] A segunda coluna, por ser a maior, estará na linha de baixo, pois a soma ultrapassa o limite de 12.
- [x] A terceira coluna estará na linha de baixo, pois a soma das colunas ultrapassa o limite de 12.
- [ ] Não teremos nenhuma coluna sendo exibida, pois teríamos um erro sintaxe.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/31> 

**Nível:** 2

***

### Questão 7 

Imaginando que temos que mostrar quatro colunas, por linha, em telas maiores, duas em telas médias e uma em telas pequenas, qual seria a sequência de classes utilizadas?

- [ ] col-md-3 col-sm-6 col-lg-12
- [ ] col-lg-4 col-md-2 col-sm-1
- [ ] col-lg-12 col-md-6 col-sm-3
- [ ] col-lg-1 col-md-2 col-sm-4
- [x] col-lg-3 col-md-6 col-sm-12
	
* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/31> 

**Nível:** 2

***

### Questão 8 

Caso seja necessário que uma coluna comece à partir da QUARTA coluna, ignorando as anteriores, e preencha o restante da linha, quais classes devomos utilizar?

- [x] `<div class="col-md-offset-3 col-md-9">...</div>`
- [ ] `<div class="col-md-offset-4 col-md-9">...</div>`
- [ ] `<div class="col-md-offset-4 col-md-8">...</div>`
- [ ] `<div class="col-md-offset-3 col-md-7">...</div>`
- [ ] `<div class="col-md-offset-3 col-md-5">...</div>`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/31>

**Nível:** 2

***

### Questão 9 

Caso seja necessário exibir um conteúdo somente para celulares, ou dispositivos menores, qual classe eu deveria utilizar?

- [ ] show-sm
- [ ] show-xs
- [ ] show-sx
- [x] visible-xs
- [ ] visible-sx

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/31>

**Nível:** 2

***

### Questão 10 

Quais as classes de formulários existentes no Bootstrap? Qual a padrão, caso nenhuma seja informada?
    
- [ ] horizontal-form e inline-form, padrão é horizontal-form
- [ ] horizontal-form e form-inline, padrão é form-horizontal
- [ ] form-horizontal e form-inline, padrão é form-inline
- [x] form-horizontal e form-inline, padrão é form-horizontal
- [ ] form-horizontal e form-inline, não existe padrão

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/32>

**Nível:** 2

***

### Questão 11

Quais as duas classes que devem ser utilizadas em conjunto para obter a melhor formatação dos campos inputs?

- [ ] form-group e form-input
- [x] form-group e form-control
- [ ] form-group e form-item
- [ ] form-group-item e form-item
- [ ] form-item e form-subitem

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/32>

**Nível:** 2

***

### Questão 12 

Para criar um botão padrão que seja grande e de cor verde, quais classes são necessárias?

- [ ] btn-success btn-sm
- [x] btn btn-success btn-lg
- [ ] btn-danger btn-lg
- [ ] btn btn-info btn-xs
- [ ] btn btn-primary btn-xs

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/33>

**Nível:** 2

***

### Questão 13 

Qual das opções abaixo NÃO fazem parte das configurações de imagens?

- [ ] img-responsive
- [ ] img-rounded
- [ ] img-circle
- [ ] img-thumbnail
- [x] img-bordered

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/34>

**Nível:** 2

***

### Questão 14 

Das estruturas abaixo qual NÃO terá o icone funcionando corretamente?

- [ ] `<span class="btn btn-block btn-default glyphicon glyphicon-pencil">Editar</span>`
- [x] `<button id="btn btn-success glyphicon glyphicon-pencil"> Editar</button>`
- [ ] `<p class="glyphicon glyphicon-pencil"> Editar</p>`
- [ ] `<a href="" class="glyphicon glyphicon-pencil"> Editar</a>`
- [ ] `<button class="btn btn-success glyphicon glyphicon-pencil"> Editar</button>`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/35>

**Nível:** 2

***

### Questão 15

Analise o código abaixo:

```html
<div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Dropdown
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
    </ul>
</div>
```

O que é necessário para transformar o recurso dropdown em dropup, da maneira mais correta e semântica?

- [ ] Trocar todos os locais que possuam a palavra dropdown por dropup.
- [ ] Adicionar a classe dropup juntamente com a classe dropdown, no elemento principal.
- [ ] Criar uma classe interna, à classe principal dropdown, com a classe dropup.
- [x] Apenas trocar a classe principal dropdown por dropup. 
- [ ] Não tem como transformar uma classe dropdown em dropup facilmente, portanto seria melhor criar novamente.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/36>

**Nível:** 3

***

### Questão 16 

A resposta deve ser o nome da classe, que está faltando, para a paginação funcionar corretamente.
       
```html
<nav>
    <ul class="">
        <li class="disabled">
            <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
            <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
```

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/37>

Resp.: pagination

**Nível:** 3

***

### Questão 17 

Qual seria a alternativa que contém um estrutura de classes COMPLETA, e correta, para painel?

- [ ] panel, panel-heading, panel-body
- [ ] panel, panel-body
- [ ] panel, panel-info, panel-body e panel-footer
- [ ] panel, panel-heading, panel-body e panel-foot
- [x] panel, panel-heading, panel-body e panel-footer

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/39>

**Nível:** 3

***

### Questão 18 

Analise a frase abaixo e responda verdadeiro ou falso.

"Além de listagens utilizando as tags ul e li, podemos fazer também listagens de links utilizando a tag a. Com a listagem de links podemos destacar o link atual com a classe active."

- [x] Verdadeiro
- [ ] Falso

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/40>

**Nível:** 3

***

### Questão 19 

Qual componente, do Bootstrap, é indicado quando existe a necessidade de associar imagem e texto?

- [ ] List group
- [ ] Badges
- [x] Media object
- [ ] Panels
- [ ] Thumbnails

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/41>

**Nível:** 3

***

### Questão 20

Qual classe podemos utilizar quando é necessário exibir algum aviso ao usuário?

- [x] alert
- [ ] show
- [ ] message
- [ ] notes
- [ ] attention

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/42>

**Nível:** 3

***

### Questão 21 

De acordo com seus conhecimentos, analise o código abaixo.
    
```html
<div class="row">
    <h1>Usage</h1>
    <ul class="nav nav-tabs">
        <li><a href="#home" aria-controls="home" data-toggle="tab">Home</a></li>
        <li><a href="#images" aria-controls="images" data-toggle="tab" >Images</a></li>
        <li class="active"><a href="#blog" aria-controls="blog" data-toggle="tab" >Blog</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane" id="images">Images</div>
        <div role="tabpanel" class="tab-pane" id="home">Home</div>
        <div role="tabpanel" class="tab-pane active" id="blog">Blog</div>
    </div>
</div>
```
    
Depois de analisar o código, assinale qual conteúdo será mostrado primeiro, quando a página for renderizada pelo navegador.

- [ ] Home
- [ ] Images
- [x] Blog

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/43>

**Nível:** 3

***

### Questão 22 

Analise o código abaixo:
    
```html
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#mymodal">
    My Modal
</button>

<div id="x" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>

        </div>
    </div>
</div>
```
    
Que valor deveria estar no lugar letra "x", no atributo "id", do código acima, para que o modal funcione corretamente?

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/44>

Resp.: mymodal

**Nível:** 3

***

### Questão 23 

Qual atributo faz com que o Popover seja posicionado abaixo do botão?
    
```html
    <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-content="Meu Popover">
        Popover on click
    </button>
```

- [ ] `data-position="bottom"`
- [x] `data-placement="bottom"`
- [ ] `data-local="bottom"`
- [ ] `data-place="bottom"`
- [ ] `data-direction="bottom"`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/45>

**Nível:** 3

***

### Questão 24 

Analise a frase abaixo e assinale verdadeiro ou falso.

"O Bootstrap é uma ferramenta maravilhosa, mas infelizmente, para pequenos projetos, muitos recursos podem ser obsoletos, pois não é possível customizar a instalação."

- [ ] Verdadeiro
- [x] Falso

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/46>

**Nível:** 3

***