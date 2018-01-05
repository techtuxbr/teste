1. Qual meta tag faz com que o conteúdo seja adequado a diferentes tipos de dispositivos?

	- [x] ```<meta name="viewport" content="width=device-width, initial-scale=1">```
	- [ ] ```<meta charset="utf-8">```
	- [ ] ```<meta name="author" content="School Of Net">```
	- [ ] ```<meta name="description" content="School Of Net - Cursos Online">```
	- [ ] ```<meta name="keywords" content="cursos, web, desenvolvimento">```

***

2. Qual atributo é responsável por fazer a ligação entre o menu responsivo e o evento de click do usuário. Sem este atributo o usuário clicaria no botão de menu, no dispositivo mobile, e o menu não seria aberto.

	> Analise o código abaixo:

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

	**Dica.:** Analise o código e veja se existem valores repetidos que poderiam fazer parte de algum tipo de identificação entre os elementos.
      
***

3. Quando falamos em grid, no Bootstrap, estamos falando em divisão de conteúdo em diferentes dispositivos. Para conseguirmos divir a tela em partes iguais, precisamos utilizar as classes de grid do Bootstrap.

	Imaginando que temos que mostrar 4 divisões por row em telas maiores, 2 em telas médias e 1 em telas pequenas, qual seria a sequência de classes utilizadas?

	- [ ] col-md-3 col-sm-6 col-lg-12
	- [ ] col-lg-4 col-md-2 col-sm-1
	- [ ] col-lg-12 col-md-6 col-sm-3
	- [ ] col-lg-1 col-md-2 col-sm-4
	- [x] col-lg-3 col-md-6 col-sm-12

***

4. Existem dois tipos de classes principais para formulários. Quais são estas classes e qual a padrão, caso eu não informe nenhuma classe para o meu formulário?

	- [ ] horizontal-form e inline-form, padrão é horizontal-form.
	- [ ] horizontal-form e form-inline, padrão é form-horizontal.
	- [ ] form-horizontal e form-inline, padrão é form-inline.
	- [x] form-horizontal e form-inline, padrão é form-horizontal.
	- [ ] form-horizontal e form-inline, não existe padrão, temos sempre que informar alguma classe para termos o efeito aplicado.

***

5. Para criar um botão padrão, grande e de cor verde, quais classes eu preciso utilizar.

	- [ ] btn-success btn-sm
	- [x] btn btn-success btn-lg
	- [ ] btn-danger btn-lg
	- [ ] btn btn-info btn-xs
	- [ ] btn btn-primary btn-xs

***

6. Complete o código abaixo para finalizar a paginação.

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

	- [x] pagination

***

7. Ao estudar as tabs, do Bootstrap, você aprende a seprar conteúdos de forma mais organizada. De acordo com seus conhecimentos, analise o código abaixo.

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

***

8. Quando trabalhamos com modal, precisamos identificar o conteúdo que deverá ser mostrado ao clicar no botão ou no evento que escolher. Esta identificação é necessária, principalmente se houver mais do que um modal, em uma mesma página.

	```html
		<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#mymodal">
            My Modal
        </button>

        <div class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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

    - [x] id="mymodal"

***

9. Utilizando o atributo data-placement, posicione o Popover abaixo do botão.

	```html
		<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-content="Meu Popover">
       		Popover on click
        </button>
    ```

    - [x] data-placement="bottom"

