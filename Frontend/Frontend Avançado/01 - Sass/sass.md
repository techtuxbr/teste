# Questões

| Questões 1 - 6            | Questões 7 - 12             | Questões 13 - 17            |
|---------------------------|-----------------------------|-----------------------------|
| [Question 1 - Nível 1][1] | [Question 7 - Nível 2][7]   | [Question 13 - Nível 3][13] |  
| [Question 2 - Nível 1][2] | [Question 8 - Nível 2][8]   | [Question 14 - Nível 3][14] |  
| [Question 3 - Nível 1][3] | [Question 9 - Nível 2][9]   | [Question 15 - Nível 3][15] |  
| [Question 4 - Nível 1][4] | [Question 10 - Nível 3][10] | [Question 16 - Nível 3][16] |  
| [Question 5 - Nível 2][5] | [Question 11 - Nível 3][11] | [Question 17 - Nível 3][17] |  
| [Question 6 - Nível 2][6] | [Question 12 - Nível 3][12] |                             |  
                     
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


***

### Questão 1 

O que é Sass?

- [ ] Uma nova linguagem CSS.
- [x] Um pré-processador para códigos CSS.
- [ ] Uma IDE para progamar somente em CSS.
- [ ] Um instalador de projetos em CSS.
- [ ] Um boilerplate, com estruturas pré-configuradas em CSS.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-sass/191>

**Nível:** 1
 	
***

### Questão 2

Qual a vantagem de utilizar o Sass?

- [ ] Com Sass você não precisa criar nada em CSS, pois ele trás tudo pronto.
- [ ] Com Sass você não precisa criar estrutura nenhuma, apenas configurar simples detalhes.
- [ ] Com Sass você pode estilizar seu projeto somente utilizando o HTML.
- [x] Com o Sass a manutenção dos projetos ficam mais fáceis e também se faz mais com muito menos código. 
- [ ] Não existe vantagem ao utilizar Sass, é apenas mais uma tecnologia para aumentar a complexidade dos projetos. 

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-sass/191>

**Nível:** 1
 	
***

### Questão 3

Analise a afirmação abaixo e assinale verdadeiro ou falso.

A instalação do Sass pode ser feita de duas maneiras.
    - Applications
    - Command Line

- [x] Verdadeiro
- [ ] Falso

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-sass/191>
    2. <https://sass-lang.com/install>

**Nível:** 1
 	
***

### Questão 4

Qual a extensão que deve conter um arquivo do tipo Sass?

- [ ] .sass
- [x] .scss
- [ ] .ssc
- [ ] .css
- [ ] .sacss

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-sass/192>

**Nível:** 1
 	
***

### Questão 5

Qual o comando para configurar o recurso watch diretamente à um arquivo?

- [ ] `sass --watcher arquivo.scss:arquivo.css`
- [ ] `sass watch arquivo.scss:arquivo.css`
- [x] `sass --watch arquivo.scss:arquivo.css`
- [ ] `sass --watch arquivo.scss > arquivo.css`
- [ ] `sass --watch arquivo.scss -> arquivo.css`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-sass/192>

**Nível:** 2
 	
***

### Questão 6

Qual o comando para configurar o recurso watch à uma pasta específica?

- [x] `sass --watch caminho_da_pasta`
- [ ] `sass --watcher caminho_da_pasta`
- [ ] `sass watch caminho_da_pasta`
- [ ] `sass --watch .`
- [ ] `sass --watch .:.`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-sass/192>

**Nível:** 2
 	
***

### Questão 7

O que é o Nesting?

- [ ] Uma função CSS que criar elementos HTML.
- [ ] Uma função CSS que é capaz de alinhas o código CSS antes de compilar.
- [ ] Uma função CSS que é capaz de alinhas o código CSS depois de compilar.
- [x] Uma maneira de aninhas os elementos pais e filhos de forma que o Sass entenda e compile para CSS.
- [ ] É apenas um novo nome para identação de código.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-sass/193>

**Nível:** 2
 	
***

### Questão 8

Qual a propriedade utilizada para criar uma herança entre elementos no Sass?

- [ ] @childOf
- [ ] @child
- [ ] @implements
- [ ] extend
- [x] @extend

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-sass/194>

**Nível:** 2
 	
***

### Questão 9

Analise o código abaixo:

```scss
.btn {
  border: none;
  background: transparent;
}

.btn-sm {
  @extend .btn;
  font-size: 1em;
}

.btn-primary {
  @extend .btn-sm;
  background-color: dodgerblue;
}
```

Qual característica a classe "btn-primary" terá no final da compilação?

- [x] As próprias configurações, bem como as configurações das classe "btn" e "btn-sm".
- [ ] Apenas `background-color: dodgerblue;`
- [ ] Apenas `background-color: dodgerblue;` e `font-size: 1em;`
- [ ] Apenas `background-color: dodgerblue;`, `font-size: 1em;` e `border: none;`
- [ ] Nenhuma das alternativas acima.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-sass/194>

**Nível:** 2
 	
***

### Questão 10

Qual a propriedade que utilizamos para fazer a importação de outros arquivos Sass, para o arquivo principal?

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-sass/195>

Resp.: @import

**Nível:** 3
 	
***

### Questão 11

Qual o padrão utilizado para nomear os arquivos a serem importados?

- [ ] file_.scss
- [x] _file.scss
- [ ] i_file.scss
- [ ] __file.scss
- [ ] \_file_.scss

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-sass/195>

**Nível:** 3
 	
***

### Questão 12

Qual o padrão de definição de variáveis no Sass?

- [ ] `color_primary: blue;`
- [ ] `$color_primary = blue;`
- [x] `$color_primary: blue;`
- [ ] `$color_primary.blue;`
- [ ] `$color_primary -> blue;`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-sass/196>

**Nível:** 3
 	
***

### Questão 13

Qual o parâmetro que devemos adicionar, na configuração de uma variável, para transformá-la em um valor default?

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-sass/196>

Resp.: !default

**Nível:** 3
 	
***

### Questão 14

Marque a alternativa que NÃO é uma função do Sass.

- [ ] `percentagem($number)`
- [ ] `saturate($color, $amount)`
- [ ] `desaturate($color, $amount)`
- [ ] `darken($color, $amount)`
- [x] Todas as alternativas são funções do Sass.

* **Dica:**   
    1. <https://www.schoolofnet.com/curso-sass/197> 	
    2. <http://sass-lang.com/documentation/Sass/Script/Functions.html>

**Nível:** 3
 	
***

### Questão 15

Qual a estrutura de criação de função está correta?

- [ ] `@function myFunction()()`
- [x] `@function myFunction(){}`
- [ ] `function myFunction(){}`
- [ ] `$function myFunction(){}`
- [ ] `&function myFunction(){}`

* **Dica:**   
    1. <https://www.schoolofnet.com/curso-sass/198> 	

**Nível:** 3
 	
***

### Questão 16

Qual o comando responsável por minificar o arquivo CSS para produção?

- [x] `sass --watch arquivo.scss:arquivo.min.css --style compressed`
- [ ] `sass watch arquivo.scss:arquivo.min.css --style compressed`
- [ ] `sass watch arquivo.scss:arquivo.min.css style compressed`
- [ ] `sass --watch arquivo.scss = arquivo.min.css --style compressed`
- [ ] `sass --watch arquivo.scss arquivo.min.css --style compressed`

* **Dica:**   
    1. <https://www.schoolofnet.com/curso-sass/199> 	

**Nível:** 3
 	
***

### Questão 17

Qual o recurso que você pode encontrar no código abaixo?

```css
@mixin NewButton($c_fonte, $c_background, $size){
  border: none;
  font-size: $size;
  color: $c_fonte;
  background-color: $c_background;
}

.btn_primary {
  @include NewButton($color_black, $color_success, 2em)
}

.btn_default {
  @include NewButton($color_white, $color_black, 2em)
}
```

- [ ] import
- [ ] herança
- [ ] nesting
- [x] mixin
- [ ] Nenhum recurso é encontrado.

* **Dica:**   
    1. <https://www.schoolofnet.com/curso-sass/200> 	

**Nível:** 3
 	
***