# Questões

| Questões 1 - 5            | Questões 6 - 10             | Questões 11 - 15            |
|---------------------------|-----------------------------|-----------------------------|
| [Question 1 - Nível 1][1] | [Question 6 - Nível 2][6]   | [Question 11 - Nível 3][11] |  
| [Question 2 - Nível 1][2] | [Question 7 - Nível 2][7]   | [Question 12 - Nível 3][12] |  
| [Question 3 - Nível 1][3] | [Question 8 - Nível 2][8]   | [Question 13 - Nível 3][13] |  
| [Question 4 - Nível 1][4] | [Question 9 - Nível 2][9]   | [Question 14 - Nível 3][14] |  
| [Question 5 - Nível 2][5] | [Question 10 - Nível 3][10] | [Question 15 - Nível 3][15] |  
                     
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


***

### Questão 1 

Qual o principal conceito envolvido no conceito "Mobile First"?

- [ ] Foco no layout para versão mobile depois da versão de layout para dispositivos maiores.
- [x] Foco no layout para versão mobile antes da versão de layout para dispositivos maiores.
- [ ] Criar o layout pensando somente na versão mobile, pois se trata da maior quantidade de acessos atualmente.
- [ ] Criar o layout para os dispositivos móveis, mantendo exatamente o mesmo conteúdo das demais versões de layout.
- [ ] É apenas um novo conceito que não modifica a forma dos desenvolvedores frontend pensarem.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-css-intermediario-mobile-first/6268>

**Nível:** 1
 	
***

### Questão 2

Analise a afirmação abaixo e assinale verdadeiro ou falso.

"Página que são desenvolvidar com o conceito de mobile first são melhores renderizadas pelo Windows."

- [x] Verdadeiro
- [ ] Falso

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-css-intermediario-mobile-first/6268>

**Nível:** 1
 	
***

### Questão 3

Qual o passo mais simples e importante para um novo projeto responsivo?

- [ ] Ter um bom computador para que consiga programar de forma produtiva.
- [ ] Ter um framework todo configurado para começar a estruturar sua aplicação.
- [ ] Ter conhecimentos avançados em desenvolvimento 3D.
- [x] Ter o conteúdo renderizado no navegador sem que seja obrigatório o uso de uma folha de estilos.
- [ ] Criar toda lógica de programação, para disponibilização dos dados, antes de começar a estruturar o layout.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-css-intermediario-mobile-first/6269>

**Nível:** 1
 	
***

### Questão 4

Para que serve o recurso conhecido como "reset", configurado no arquivo de estilo?

- [ ] Remover o cache do navegador, para o desenvolvimento não ser comprometido.
- [x] Remover toda influência nativa de css dos navegadores, para que seu layout não sofra nenhuma interferência.
- [ ] Limpar algum possível cache na linguagem css, antes de começar a desenvolver o layout.
- [ ] Remover toda influência de navegadores no final do projeto, depois que o layout já está definido.
- [ ] Remover toda influência de css apenas para elementos de mídia.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-css-intermediario-mobile-first/6270>

**Nível:** 1
 	
***

### Questão 5

```css
.video-responsive {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 25px;
    height: 0;
}

.video-responsive iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
```

De acordo com o código acima, assinale a alternativa INCORRETA.

- [ ] A classe video-responsive serve como base para a tag iframe.
- [ ] O padding-bottom, definido como 56.25%, é um valor padrão para o formato 16:9 de vídeos.
- [ ] O iframe assume toda área definida pela classe video-responsive, sem espaços e em posição absoluta.
- [x] O padding-bottom com valor 57% e 56% não ficaram bons no layout responsivo e, por este motivo, foi definido como 56.25%.
- [ ] Não importa o tamanho da tela, o vídeo sempre assumirá o tamanho definido pela classe video-responsive.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-css-intermediario-mobile-first/6271>

**Nível:** 2
 	
***

### Questão 6

Qual é o real objetivo da criação de grids em layouts responsivos?

- [ ] Sempre manter os conteúdos em uma única coluna e jogando o mesmo para a linha de baixo.
- [ ] Sempre manter o conteúdo em uma única coluna, porém nunca previnir a disponibilidade na tela.
- [x] Separar os conteúdos em colunas que se adaptam ao tamanho do dispositivo.
- [ ] Ocultar conteúdos desnecessários.
- [ ] Deixar o conteúdo otimizado, aumentando a velocidade de carregamento.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-css-intermediario-mobile-first/6272>

**Nível:** 2
 	
***

### Questão 7

O que precisamos para utilizar o recurso flex box?

- [ ] É necessário instalar a ferramenta em seu código via npm.
- [x] O flex box é um recurso já disponível na linguagem CSS, portanto é necessário apenas aplicá-lo no projeto.
- [ ] Precisamos definir o flex box como dependência no projeto, mas não precisamos configurá-lo.
- [ ] Precisamos definir o flex box como dependência no projeto bem como configurá-lo.
- [ ] Precisaremos baixar os arquivos necessários e mantê-los em uma pasta dentro do projeto.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-css-intermediario-mobile-first/6273>

**Nível:** 2
 	
***

### Questão 8

```html
<style>
.row-flex{
    display: flex;
}
</style>

<section class="row-flex">
    <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel lectus sodales, fringilla metus eu, elementum est. Phasellus ultrices ante in elit mattis, vitae finibus dolor volutpat.</p>
    </div>
    <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel lectus sodales, fringilla metus eu, elementum est. Phasellus ultrices ante in elit mattis, vitae finibus dolor volutpat.</p>
    </div>
</section>
```

Analise o código acima qual alternativa está correta?

- [ ] Para dividir o conteúdo em colunas será necessário criar uma classe a mais para colocar na tag section.
- [ ] Para dividir o conteúdo em colunas precisamos definir uma nova classe para adicionar em cada tag p.
- [ ] Para dividir o conteúdo em colunas precisamos definir uma nova classe para adicionar em cada tag div interna.
- [x] Os elementos estarão divididos automaticamente porque a classe row-flex está configurando display:flex e este recurso é suficiente.
- [ ] Precisamos de muito css para conseguir fazer a divisão em duas colunas, mesmo utilizando o recurso display:flex.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-css-intermediario-mobile-first/6273>

**Nível:** 2
 	
***

### Questão 9

Foram apresentados dois recursos para trabalhar com grids: grid layout e flex box. Qual deles é melhor?

- [x] Não existe um melhor do que o outro, mas sim maneiras diferentes de trabalhar e suportes diferentes pelos navegadores.
- [ ] O flex box é melhor do que o grid layout pois trabalhar de forma automática.
- [ ] O grid layout é melhor do que o flex box pois trabalhar de forma automática.
- [ ] As duas tecnologias são ótimas mas de difícil acesso e configuração.
- [ ] O fex box é melhor do que o recurso de grid layout, pois não é necessário instalação.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-css-intermediario-mobile-first/6274>

**Nível:** 2
 	
***

### Questão 10

Qual estrutura de media queries está totalmente correta?

- [ ] `@media (min-width = 768px) and (max-width = 991px) {}`
- [x] `@media (min-width: 768px) and (max-width: 991px) {}`
- [ ] `@media {min-width: 768px} and {max-width: 991px} {}`
- [ ] `@media min-width: 768px {}`
- [ ] `@media <min-width: 768px> and <max-width: 991px> {}`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-css-intermediario-mobile-first/6275>

**Nível:** 3
 	
***

### Questão 11

Qual o principal objetivo do desenvolvedor ao utilizar as medias queries?

- [ ] Criar toda estilização em cima dos elementos de mídia.
- [ ] Criar estilização somente para as mídias do projetos, porém diferenciando a estilização por tamanho de dispositivos.
- [ ] Destacar as mídias em relação aos demais elementos HTML.
- [x] Diversificar os layouts de acordo com o tamanho dos dispositivos.
- [ ] Não existe nenhum objetivo específico, os desenvolvedores utilizam para se manterem atualizados com as tecnologias.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-css-intermediario-mobile-first/6275>

**Nível:** 3
 	
***

### Questão 12

Referente a menus e o conceito mobile first, qual a alternativa está correta?

- [ ] Os menus deve sempre estar visíveis da mesma forma, portanto não devemos aplicar o conceito mobile first à menus.
- [ ] Menus não merecem atenção especial para os dispositivos móveis, sendo que o usuário pode utilizar o recurso de zoom.
- [ ] Podemos aplicar mobile first aos menus de sites responsivos, porém não é nada muito importante.
- [x] Manter os sites navegáveis, projetando a melhor opção para o usuário em todos os dispositivos.
- [ ] É permitido apenas dois layouts diferentes para menus, mais do que isso fugirá do conceito de mobile first.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-css-intermediario-mobile-first/6276>

**Nível:** 3
 	
***

### Questão 13

Qual linguagem devemos utilizar parar fazer uma interação entre classes e produzir um melhor aproveitamento do layout?

- [ ] Java
- [ ] C++
- [ ] PHP
- [x] Javascript
- [ ] JQuery

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-css-intermediario-mobile-first/6277>

**Nível:** 3
 	
***

### Questão 14

Analise o código abaixo:

```css
.menu-active menu {
    transform: translateX(0);
}

.menu-active header, .menu-active main, .menu-active footer {
    transform: translateX(300px);
}
```

```javascript
$(document).ready(function () {
    $('.menu-icon').on('click', function(e) {
        e.preventDefault();
        $('x').toggleClass('menu-active');
    });
});
```

Sabendo que o menu mobile deve empurrar o conteúdo do site para frente, qual elemento HTML devemos adicionar no lugar do seletor "x" do código Javascript acima?

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-css-intermediario-mobile-first/6277>
    2. Não esqueça de analisar o Javascript e também o CSS para responder.

Resp.: body

**Nível:** 3
 	
***

### Questão 15

Qual a tag HTML que podemos utilizar para otimizar o carregamento de imagens, utilizando o conceito mobile first? Qual a subtag utilizada, seguida da propriedade responsável por diferenciar as imagens, de acordo com o tamanho do dispositivo?

Sequência da resposta: tag - subtag - propriedade

- [ ] picture - source - srcset
- [x] picture - source - media
- [ ] figure - source - media
- [ ] figure - source - srcset
- [ ] image - media - source

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-css-intermediario-mobile-first/6279>

**Nível:** 3
 	
***