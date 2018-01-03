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


