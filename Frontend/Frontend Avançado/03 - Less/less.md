# Questões

| Questões 1 - 5            | Questões 6 - 10              | Questões 11 - 15           | Questões 16 - 17            |
|---------------------------|-----------------------------|-----------------------------|-----------------------------|
| [Question 1 - Nível 1][1] | [Question 6 - Nível 2][6]   | [Question 11 - Nível 2][11] | [Question 16 - Nível 3][16] |  
| [Question 2 - Nível 1][2] | [Question 7 - Nível 2][7]   | [Question 12 - Nível 2][12] | [Question 17 - Nível 3][17] |  
| [Question 3 - Nível 1][3] | [Question 8 - Nível 2][8]   | [Question 13 - Nível 3][13] |                             |  
| [Question 4 - Nível 2][4] | [Question 9 - Nível 2][9]   | [Question 14 - Nível 3][14] |                             |  
| [Question 5 - Nível 2][5] | [Question 10 - Nível 2][10] | [Question 15 - Nível 3][15] |                             |  
                     
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

O que é Less?

- [ ] Uma nova linguagem CSS.
- [x] Um pré-processador para códigos CSS.
- [ ] Uma IDE para progamar somente em CSS.
- [ ] Um instalador de projetos em CSS.
- [ ] Um boilerplate, com estruturas pré-configuradas em CSS.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-less/165>

**Nível:** 1
 
***

### Questão 2

O que precisamos para trabalhar com o Less?

- [x] Instalar o Node.js e, com o npm, instalar a ferramenta de forma global, ou em cada projeto individualmente.
- [ ] Precisamos instalar o composer e depois instalar a biblioteca.
- [ ] Precisamos baixar os arquivos core do Less, adicionar à pasta do projeto e depois criar o arquivo config.js.
- [ ] Não precisamos de nada, pois o Less já é padrão do CSS e reconhecido por todos navegadores.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-less/165>

**Nível:** 1
 
***

### Questão 3

Quando é aconselhavel utilizar a compilação do código Less via Javascript?

- [ ] Aplicação de médio a grande porte.
- [ ] Apenas em aplicação de grande porte.
- [ ] Em qualquer tipo de aplicação independente do tamanho do projeto.
- [x] Aplicação pequenas somente.
- [ ] Nunca é aconselhável a utilização deste método de compilação.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-less/165>

**Nível:** 1
 
***

### Questão 4

O que precisamos fazar para que o navegador reconheça a estilização Less sem compilar um arquivo CSS?

- [ ] Não é preciso fazer nada, pois o arquivo Less sozinho já é reconhecido pelos navegadores.
- [x] Carregar o arquivo Less, como se fosse um arquivo CSS, mas carregando o arquivo Less Javascript, ou importando-o de uma CDN, logo após o carregamento do arquivo de estilo. 
- [ ] Precisamos carregar o arquivo Less e depois chamar um código PHP que faz a compilação automática.
- [ ] Basta utilizarmos a linguagem Less, em um arquivo com extensão ".css", e tudo estará funcionando corretamente.
- [ ] Ao chamar o arquivo Less, na tag link do HTML, precisamos passar um atributo chamado "data-less".

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-less/165>

**Nível:** 1
 
***

### Questão 5

Qual o comando para compilar o código Less para CSS?

- [ ] `lessc arquivo.less -> arquivo.css`
- [ ] `lessc arquivo.less => arquivo.css`
- [x] `lessc arquivo.less > arquivo.css`
- [ ] `lessc compile arquivo.less > arquivo.css`
- [ ] `lessc arquivo.less to arquivo.css`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-less/165>

**Nível:** 2
 
***

### Questão 6

Qual o comando para compilar o código Less para CSS em formato minificado?

- [ ] `lessc --min-css arquivo.less -> arquivo.min.css`
- [ ] `lessc --compress-css arquivo.less -> arquivo.min.css`
- [ ] `lessc --short-css arquivo.less -> arquivo.min.css`
- [x] `lessc --clean-css arquivo.less -> arquivo.min.css`
- [ ] `lessc --mini-css arquivo.less -> arquivo.min.css`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-less/166>

**Nível:** 2
 
***

### Questão 7

Qual o padrão de definição de variáveis no Less?

- [ ] `$color_primary -> blue;`
- [ ] `$color_primary: blue;`
- [ ] `color_primary: blue;`
- [ ] `@color_primary = blue;`
- [x] `@color_primary: blue;`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-less/166>

**Nível:** 2
 
***

### Questão 8

O que são mixins no Less?

- [ ] Mixin é um agrupamento de duas, ou mais, linguagens de estilização.
- [ ] Mixin é uma linguagem de programação que engloba algumas propriedades CSS.
- [ ] Mixin é um programa que gera código CSS.
- [x] Conjunto de propriedades feitas para evitar repetições e, consequentemente, otimizar o código.
- [ ] Um conjunto de propriedades internas que visa misturar outras propriedades externas.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-less/167>

**Nível:** 1
 
***

### Questão 9

Analise o código abaixo.

```css
.btn {
  border-radius: 20%;
}

.btn-sm {
  .btn;
  padding: 10px;
}

.btn-md {
  .btn;
  background-color: yellow;
}
```

De acordo com o código acima, quais configurações teriam a classe "btn-md"?

- [x] `border-radius background-color` 
- [ ] `border-radius padding background-color`
- [ ] `border-radius`
- [ ] `background-color`
- [ ] Nenhuma configuração pois o mixin está errado.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-less/168>

**Nível:** 2
 
***

### Questão 10

Como podemos passar variáveis para os mixins, configurando um valor padrão caso o mesmo não seja informado?

- [ ] `.btn(param @color default blue)`
- [x] `.btn(@color:blue)`
- [ ] `.btn(@color ? blue)`
- [ ] `.btn(@color = blue)`
- [ ] `.btn(@color or blue)`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-less/168>

**Nível:** 2
 
***

### Questão 11

Quantos parâmetros podemos passar para um mixin ou função?

- [ ] 1
- [ ] 2
- [ ] 3
- [ ] No máximo 5
- [x] Ilimitados

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-less/168>

**Nível:** 2
 
***

### Questão 12

Analise o código abaixo.

```css
@espacamento: round(29.5px / 4px);
```

Qual valor terá a variável "espacamento"?

- [x] 7px
- [ ] 8px
- [ ] 30px
- [ ] 4px
- [ ] Teremos um erro, pois não podemos criar operações matemática no Less.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-less/169>

**Nível:** 2
 
***

### Questão 13

Marque a alternativa que NÃO é uma função do Less.

- [ ] `percentage($number)`
- [ ] `saturate($color, $amount)`
- [ ] `round($number)`
- [ ] `darken($color, $amount)`
- [x] Todas as alternativas são funções do Less.

* **Dica:**   
    1. <https://www.schoolofnet.com/curso-less/169> 	
    2. <http://lesscss.org/functions/> 	

**Nível:** 3
 	
***

### Questão 14

Qual o operador que deve ser utilizar para trabalhar com o recurso Guard?

- [ ] guard
- [ ] if
- [x] when
- [ ] while
- [ ] case

* **Dica:**   
    1. <https://www.schoolofnet.com/curso-less/170> 	

**Nível:** 3
 	
***

### Questão 15

Analise o código abaixo:

```css
.btn(@color, @size) when (@color = #000) and (@size >= 20px) {
  padding: 20px;
}
```

Assinale a alternativa que descreve melhor a situação acima.

- [x] Um mixin, com guard, onde a configuração só será efetivada caso as duas lógicas sejam verdadeiras.
- [ ] Um mixin, com guard, onde a configuração só será efetivada caso as duas lógicas sejam falsas.
- [ ] Um mixin, com guard, onde a configuração só será efetivada caso ao menos uma das lógicas sejam verdadeiras.
- [ ] Uma classe padrão com a aplicação de uma função "when" e outra "end". 
- [ ] Uma classe normal sem aplicação de nenhuma recurso.

* **Dica:**   
    1. <https://www.schoolofnet.com/curso-less/171> 	

**Nível:** 3
 	
***

### Questão 16

Qual a sintaxe correta para apontar um namespace?

- [ ] `#namespace ->.mixin`
- [x] `#namespace >.mixin`
- [ ] `#namespace >>.mixin`
- [ ] `#namespace =>.mixin`
- [ ] `#namespace =.mixin`

* **Dica:**   
    1. <https://www.schoolofnet.com/curso-less/172> 	

**Nível:** 3
 	
***

### Questão 17

Qual a forma correta de utilizar o operador de importação de arquivos externos para o Less?

- [x] `@import 'path/_file';`
- [ ] `$import 'path/_file';`
- [ ] `&import 'path/_file';`
- [ ] `@import = 'path/_file';`
- [ ] `+import 'path/_file';`

* **Dica:**   
    1. <https://www.schoolofnet.com/curso-less/173> 	

**Nível:** 3
 	
***