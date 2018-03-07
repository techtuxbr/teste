# Questões

| Questões 1 - 6            | Questões 7 - 11             |
|---------------------------|-----------------------------|
| [Question 1 - Nível 1][1] | [Question 7 - Nível 3][7]   |  
| [Question 2 - Nível 1][2] | [Question 8 - Nível 3][8]   |  
| [Question 3 - Nível 1][3] | [Question 9 - Nível 3][9]   |  
| [Question 4 - Nível 2][4] | [Question 10 - Nível 3][10] |  
| [Question 5 - Nível 2][5] | [Question 11 - Nível 3][11] |  
| [Question 6 - Nível 2][6] |                             |
                  
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

***

### Questão 1 

Nas etapas iniciais de um projeto, não podemos perder muito tempo para descobrir o que o cliente deseja, portanto utilizamos os conceitos de prototipagem para nos auxiliar. Quais os três tipos de prototipagem citados no curso?
    
- [x] protótipo de baixa, média e alta fidelidade
- [ ] protótipo inicial, mediano e final
- [ ] protótipo de desenvolvimento, de execução e de acabamento
- [ ] protótipo de estudo, projeção e execução
- [ ] protótipo de análise, de prova e de conclusão

* **Dica:**
    1. <https://www.schoolofnet.com/curso-desenvolvimento-de-layouts-com-bootstrap/881> 

**Nível:** 1         
    
***

### Questão 2 

Analise a frase abaixo e assinale verdadeiro ou falso.

"A ferramenta draw.io, que foi indicada no curso, é obrigatória para o desenvolvimento do projeto."

- [ ] Verdadeiro
- [x] Falso

* **Dica:**
    1. Lembrando que os protótipos são muito importantes para ganho de tempo e produtividade em seus projetos. 
    2. Existem outras ferramentas que executam o mesmo processo? 

**Nível:** 1         
    
***

### Questão 3 

O que significa Boilerplate?

- [ ] Framework CSS.
- [ ] Tutorial de como criar esqueletos de projetos.
- [ ] Ferramenta que disponibiliza layouts prontos para uso.
- [x] Ferramenta que disponibiliza esqueletos de projetos prontos.
- [ ] Sistema para geração de imagens de layouts.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-desenvolvimento-de-layouts-com-bootstrap/889> 

**Nível:** 1         
    
***

### Questão 4 

Para que serve o comando npm install?

- [ ] O comando npm install serve para terminar de baixar o restante dos arquivos do boilerplate.
- [ ] O comando npm install serve para configurar o nosso sistema ou website.
- [ ] O comando npm install serve para fazer o deploy automático para produção.
- [ ] Npm install é responsável apenas por subir o servidor, para que possamos visualizar no navegador.
- [x] Npm é o gerenciador de pacotes do node. O comando npm install instala todas as dependências do boilerplate


* **Dica:**
    1. <https://www.schoolofnet.com/curso-desenvolvimento-de-layouts-com-bootstrap/889>
    2. <https://docs.npmjs.com/getting-started/what-is-npm>

**Nível:** 2

***

### Questão 5 

Para que serve o Gulp no Boilerplate?

- [x] Gulp é um gerenciador de tarefas que otimizam o projeto para uma melhor performance, tanto para desenvolvimento quanto para produção.
- [ ] Gulp serve apenas para limpar os arquivos antigos do projeto.
- [ ] Gulp é uma tarefa que limpa o cache da aplicação.
- [ ] Gulp é um otimizador de tarefas, mas só funciona em modo produção.
- [ ] Gulp é um otimizador de tarefas, mas só funciona em modo desenvolvimento.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-desenvolvimento-de-layouts-com-bootstrap/889>
    2. <https://github.com/gulpjs/gulp/blob/v3.9.1/docs/getting-started.md>

**Nível:** 2

***

### Questão 6

Analise o código abaixo e assinale a alternativa correta.

```html
<header id="header">
    <nav id="navigation" class="navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="" class="navbar-brand">Golf Courses</a>
            </div>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    ...
                </ul>
            </div>
        </div>
    </nav>
</header>
```

Abaixo temos três categorias:

1. Menu fixado no topo da página.
2. Logo alinhado a esquerda com seu espaço pré-definido.
3. Menu alinhado a direita.

Quais classes do bootstrap são responsáveis pelas carácterísticas acima, seguindo a mesma ordem?

- [ ] `navbar - navbar-brand - navbar-right`
- [ ] `navbar-fixed-top - navbar - collapse`
- [ ] `navigation - navbar-brand - navbar-nav`
- [x] `navbar-fixed-top - navbar-brand - navbar-right`
- [ ] `welcome - navbar-brand - navbar-nav`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-desenvolvimento-de-layouts-com-bootstrap/890>
    2. <https://www.schoolofnet.com/curso-desenvolvimento-de-layouts-com-bootstrap/891>

**Nível:** 2

***

### Questão 7

Analise o código abaixo.

```html
<section id="click-action">
    <div class="container">
        <div class="row text-center">
            <h2>Want to play best golf ? Please fill with your email</h2>
            <form action="" class="col-xs-12">
                <div class="form-group col-xs-11">
                    <input type="email" placeholder="Enter your email here" class="form-control input-custom">
                </div>
                <div class="col-xs-1">
                    <button type="submit" class="btn btn-large btn-primary white btn-custom">Send</button>
                </div>
            </form>
        </div>
    </div>
</section>
```

Depois de analisar o código acima, assinale a alternativa que esteja correta em relação ao código.

- [ ] O formulário terá o tamanho de 12 colunas apenas em dispositivos maiores do que 768px.
- [x] O formulário sempre terá o tamanho de 12 colunas, pois o breakpoint "xs".
- [ ] O campo input não terá o tamanho de 11 colunas, pois a classe form-group anula este comportamento.
- [ ] A classe "btn-custom" anula o comportamento das classes do bootstrap.
- [ ] A classe "input-custom" anula o comportamento da classe form-control.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-desenvolvimento-de-layouts-com-bootstrap/891>
    2. <https://bootstrapdocs.com/v3.3.5/docs/css/#grid-options>

**Nível:** 2

***

### Questão 8

Continue analisando o código para se habituar cada vez mais com as estruturas Bootstrap.

```html
<section id="about">
    <div class="container">
        <div class="row text-center">
            <h2>See more</h2>

            <div class="col-md-6 col-xs-12">
                <img src="/images/about-bg.jpg" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 col-xs-12">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
            </div>
        </div>
    </div>
</section>
```

Quando utilizamos duas classes juntas, qual é o comportamento do Bootstrap?

Ex.: "col-md-6 col-xs-12"

- [ ] O Bootstrap considera apenas a primeira.
- [ ] O Bootstrap considera apenas a segunda.
- [ ] O Bootstrap considera as duas e sempre tenta colocar os dois tamanhos simultâneos na tela.
- [ ] O Bootstrap considera as duas e faz uma média para estipular o tamanho da coluna.
- [x] O Bootstrap considera as duas e escolhe qual utilizar de acordo com o breakpoint ou tamanho do dispositivo.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-desenvolvimento-de-layouts-com-bootstrap/891>

**Nível:** 3

***

### Questão 9

Reconhecimento de classes.

```html
<section id="prices">
    <div class="container">
        <div class="row text-center">
            <h2> Prices and Conditions</h2>
            <div class="col-xs-12 col-sm-4 price-container">
                ... dados preço 1
            </div>
            <div class="col-xs-12 col-sm-4 price-container">
                ... dados preço 2
            </div>
            <div class="col-xs-12 col-sm-4 price-container">
                ... dados preço 3
            </div>
        </div>
    </div>
</section>
```

Qual classe é responsável por:

1. Criar um conteúdo centralizado para que a linha possa englobar o código.
2. Criar uma linha que abria todos os preços.
3. Configurar 3 colunas em dispositivos maiores que 576px.
4. Configurar uma coluna de tamanho 12 nos dispositivos menores que 576px.
5. Centraliza todo texto interno ao container.

A resposta deve manter a mesma ordem de classes.

- [ ] `col-xs-12 container row col-sm-4 text-center`
- [ ] `text-center row col-xs-12 col-sm-4 container`
- [ ] `row container col-xs-12 col-sm-4 text-center`
- [x] `container row col-sm-4 col-xs-12 text-center`
- [ ] `text-center row col-sm-4 col-xs-12 container`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-desenvolvimento-de-layouts-com-bootstrap/893>

**Nível:** 3

***

### Questão 10

Sobre as animações do projeto, o que é possível afirmar?

- [ ] O Bootstrap possui uma biblioteca acoplada chamada Wow.js que faz animações.
- [ ] O Bootstrap não possui nativamente, mas podemos instalar através de um comando "bootstrap install wow".
- [x] O Wow.js é uma biblioteca independente do Bootstrap, portanto sempre é necessária a instalação.
- [ ] O Bootstrap tem classes prontas para utililizar os recursos da biblioteca Wow.
- [ ] Todas as animações foram feitas somente com o Bootstrap, o Wow foi instalado só para complementar.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-desenvolvimento-de-layouts-com-bootstrap/896>

**Nível:** 3

***

### Questão 11

Analise as duas frases abaixo e assinale a alternativa correta.

"O Bootstrap nos auxilia na criação de grids e outros componentes como botões, formulários, tabelas e etc. Porém se quisermos fazer algo muito estilizado temos que criar nosso próprio css e integrar com as classes do Bootstrap."

"Podemos fazer qualquer tipo de layout e estilização utilizando somente as classes do Bootstrap, por isso é uma ferramenta tão maravilhosa."

As frases assim estão verdadeiras ou falsas? Seguindo a ordem das frases assinale a alternativa correta.

- [ ] Ambas verdadeiras
- [ ] Ambas falsas
- [ ] 1ª falsa e 2ª verdadeira
- [x] 1ª verdadeira e 2ª falsa

* **Dica:**
    1. Analisando todo curso, de layout com bootstrap, analise se todas as estilização foram feita com base no bootstrap ou não.

**Nível:** 3

***