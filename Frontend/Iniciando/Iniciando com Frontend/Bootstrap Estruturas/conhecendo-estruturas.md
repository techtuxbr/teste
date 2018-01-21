# Questões

| Questões 1 - 10             | Questões 11 - 19            |
|-----------------------------|-----------------------------|
| [Question 1 - Nível 1][1]   | [Question 11 - Nível 1][11] |  
| [Question 2 - Nível 2][2]   | [Question 12 - Nível 1][12] |  
| [Question 3 - Nível 1][3]   | [Question 13 - Nível 1][13] |  
| [Question 4 - Nível 1][4]   | [Question 14 - Nível 1][14] |  
| [Question 5 - Nível 2][5]   | [Question 15 - Nível 1][15] |  
| [Question 6 - Nível 2][6]   | [Question 16 - Nível 2][16] |  
| [Question 7 - Nível 1][7]   | [Question 17 - Nível 2][17] |  
| [Question 8 - Nível 1][8]   | [Question 18 - Nível 2][18] |  
| [Question 9 - Nível 1][9]   | [Question 19 - Nível 1][19] |  
| [Question 10 - Nível 1][10] |                             |  

[1]:#1-qual-meta-tag-faz-com-que-o-conteúdo-seja-adequado-a-diferentes-tipos-de-dispositivos
[2]:#2-qual-atributo-é-responsável-por-fazer-a-ligação-entre-o-menu-responsivo-e-o-evento-de-click-do-usuário-sem-este-atributo-o-usuário-clicaria-no-botão-de-menu-no-dispositivo-mobile-e-o-menu-não-seria-aberto
[3]:#3-quantos-espaços-temos-em-cada-linha-quando-falamos-de-grid-no-bootstrap
[4]:#4-analise-o-código-abaixo-e-selecione-a-opção-correta
[5]:#5-quando-falamos-em-grid-no-bootstrap-estamos-falando-em-divisão-de-conteúdo-em-diferentes-dispositivos-para-conseguirmos-divir-a-tela-em-partes-iguais-precisamos-utilizar-as-classes-de-grid-do-bootstrap
[6]:#6-caso-seja-necessário-que-uma-coluna-comece-à-partir-da-quarta-coluna-ignorando-as-anteriores-e-preencha-o-restante-da-linha-quais-classes-devomos-utilizar
[7]:#7-caso-seja-necessário-exibir-um-conteúdo-somente-para-celulares-ou-dispositivos-menores-qual-classe-eu-deveria-utilizar
[8]:#8-quais-as-classes-de-formulários-existentes-no-bootstrap-qual-a-padrão-caso-nenhuma-seja-informada
[9]:#9-para-criar-um-botão-padrão-que-seja-grande-e-de-cor-verde-quais-classes-são-necessárias
[10]:#10-qual-das-opções-abaixo-nÃo-fazem-parte-das-configurações-de-imagens
[11]:#11-das-estruturas-abaixo-qual-nÃo-terá-o-icone-funcionando-corretamente
[12]:#12-complete-o-código-abaixo-para-finalizar-a-paginação
[13]:#13-qual-seria-a-alternativa-que-contém-um-estrutura-de-classes-completa-e-correta-para-painel
[14]:#14-analise-a-frase-abaixo-e-responda-verdadeiro-ou-falso
[15]:#15-qual-component-do-bootstrap-devemos-utilizar-quando-queremos-associar-imagem-e-texto
[16]:#16-ao-estudar-as-tabs-do-bootstrap-você-aprende-a-seprar-conteúdos-de-forma-mais-organizada-de-acordo-com-seus-conhecimentos-analise-o-código-abaixo
[17]:#17-quando-trabalhamos-com-modal-precisamos-identificar-o-conteúdo-que-deverá-ser-mostrado-ao-clicar-no-botão-ou-no-evento-que-escolher-esta-identificação-é-necessária-principalmente-se-houver-mais-do-que-um-modal-em-uma-mesma-página
[18]:#18-utilizando-o-atributo-data-placement-posicione-o-popover-abaixo-do-botão
[19]:#19-analise-a-frase-abaixo-e-marque-verdadeiro-ou-falso

### 1 Qual meta tag faz com que o conteúdo seja adequado a diferentes tipos de dispositivos?

- [x] `<meta name="viewport" content="width=device-width, initial-scale=1">`
- [ ] `<meta charset="utf-8">`
- [ ] `<meta name="author" content="School Of Net">`
- [ ] `<meta name="description" content="School Of Net - Cursos Online">`
- [ ] `<meta name="keywords" content="cursos, web, desenvolvimento">`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/29> 

**Nível:** 1 

***

### 2 Qual atributo é responsável por fazer a ligação entre o menu responsivo e o evento de click do usuário. Sem este atributo o usuário clicaria no botão de menu, no dispositivo mobile, e o menu não seria aberto.
    
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

### 3 Quantos espaços temos em cada linha, quando falamos de grid no Bootstrap?

- [ ] 8
- [ ] 10
- [ ] 6
- [x] 12
- [ ] 1

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/31> 

**Nível:** 1

***

### 4 Analise o código abaixo e selecione a opção correta.

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

**Nível:** 1

***

### 5 Quando falamos em grid, no Bootstrap, estamos falando em divisão de conteúdo em diferentes dispositivos. Para conseguirmos divir a tela em partes iguais, precisamos utilizar as classes de grid do Bootstrap.

Imaginando que temos que mostrar quatro divisões, por linha, em telas maiores, duas em telas médias e uma em telas pequenas, qual seria a sequência de classes utilizadas?

- [ ] col-md-3 col-sm-6 col-lg-12
- [ ] col-lg-4 col-md-2 col-sm-1
- [ ] col-lg-12 col-md-6 col-sm-3
- [ ] col-lg-1 col-md-2 col-sm-4
- [x] col-lg-3 col-md-6 col-sm-12
	
* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/31> 

**Nível:** 2

***

### 6 Caso seja necessário que uma coluna comece à partir da QUARTA coluna, ignorando as anteriores, e preencha o restante da linha, quais classes devomos utilizar?

- [x] `<div class="col-md-offset-3 col-md-9">...</div>`
- [ ] `<div class="col-md-offset-4 col-md-9">...</div>`
- [ ] `<div class="col-md-offset-4 col-md-8">...</div>`
- [ ] `<div class="col-md-offset-3 col-md-7">...</div>`
- [ ] `<div class="col-md-offset-3 col-md-5">...</div>`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/31>

**Nível:** 2

***

### 7 Caso seja necessário exibir um conteúdo somente para celulares, ou dispositivos menores, qual classe eu deveria utilizar?

- [ ] show-sm
- [ ] show-xs
- [ ] show-sx
- [x] visible-xs
- [ ] visible-sx

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/31>

**Nível:** 1

***

### 8 Quais as classes de formulários existentes no Bootstrap? Qual a padrão, caso nenhuma seja informada?
    
- [ ] horizontal-form e inline-form, padrão é horizontal-form
- [ ] horizontal-form e form-inline, padrão é form-horizontal
- [ ] form-horizontal e form-inline, padrão é form-inline
- [x] form-horizontal e form-inline, padrão é form-horizontal
- [ ] form-horizontal e form-inline, não existe padrão

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/32>

**Nível:** 1

***

### 9 Para criar um botão padrão que seja grande e de cor verde, quais classes são necessárias?

- [ ] btn-success btn-sm
- [x] btn btn-success btn-lg
- [ ] btn-danger btn-lg
- [ ] btn btn-info btn-xs
- [ ] btn btn-primary btn-xs

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/33>

**Nível:** 1

***

### 10 Qual das opções abaixo NÃO fazem parte das configurações de imagens?

- [ ] img-responsive
- [ ] img-rounded
- [ ] img-circle
- [ ] img-thumbnail
- [x] img-bordered

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/34>

**Nível:** 1

***

### 11 Das estruturas abaixo qual NÃO terá o icone funcionando corretamente?

- [ ] <span class="btn btn-block btn-default glyphicon glyphicon-pencil">Editar</span>
- [x] <button id="btn btn-success glyphicon glyphicon-pencil"> Editar</button>
- [ ] <p class="glyphicon glyphicon-pencil"> Editar</p>
- [ ] <a href="" class="glyphicon glyphicon-pencil"> Editar</a>
- [ ] <button class="btn btn-success glyphicon glyphicon-pencil"> Editar</button>

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/35>

**Nível:** 1

***

### 12 Complete o código abaixo para finalizar a paginação.
       
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

**Nível:** 1

***

### 13 Qual seria a alternativa que contém um estrutura de classes COMPLETA, e correta, para painel?

- [ ] panel, panel-heading, panel-body
- [ ] panel, panel-body
- [ ] panel, panel-info, panel-body e panel-footer
- [ ] panel, panel-heading, panel-body e panel-foot
- [x] panel, panel-heading, panel-body e panel-footer

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/39>

**Nível:** 1

***

### 14 Analise a frase abaixo e responda verdadeiro ou falso.

"Além de listagens utilizando as tags ul e li, podemos fazer também listagens de links utilizando a tag a. Com a listagem de links podemos destacar o link atual com a classe active."

- [x] Verdadeiro
- [ ] Falso

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/40>

**Nível:** 1

***

### 15 Qual component do Bootstrap devemos utilizar quando queremos associar imagem e texto?

- [ ] List group
- [ ] Badges
- [x] Media object
- [ ] Panels
- [ ] Thumbnails

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/41>

**Nível:** 1

***

### 16 Ao estudar as tabs, do Bootstrap, você aprende a seprar conteúdos de forma mais organizada. De acordo com seus conhecimentos, analise o código abaixo.
    
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

**Nível:** 2

***
    
### 17 Quando trabalhamos com modal, precisamos identificar o conteúdo que deverá ser mostrado ao clicar no botão ou no evento que escolher. Esta identificação é necessária, principalmente se houver mais do que um modal, em uma mesma página.
    
```html
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#mymodal">
    My Modal
</button>

<div class="modal fade" tabindex="-1" role="dialog">
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
    
Para que o modal seja acionado, adicione o atributo necessário ao código acima.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/44>

Resp.: id="mymodal"

**Nível:** 2

***
    
### 18 Utilizando o atributo data-placement, posicione o Popover abaixo do botão.
    
```html
    <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-content="Meu Popover">
        Popover on click
    </button>
```

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/45>

Resp.: data-placement="bottom"

**Nível:** 2

***
    
### 19 Analise a frase abaixo e marque verdadeiro ou falso.

"O Bootstrap é uma ferramenta maravilhosa, mas infelizmente, para pequenos projetos, muitos recursos podem ser obsoletos, pois não é possível customizar a instalação."

- [ ] Verdadeiro
- [x] Falso

* **Dica:**
    1. <https://www.schoolofnet.com/curso-bootstrap/46>

**Nível:** 1