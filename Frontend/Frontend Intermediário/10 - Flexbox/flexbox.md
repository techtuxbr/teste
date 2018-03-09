# Questões

| Questões 1 - 6            | Questões 7 - 11           | Questões 9 - 12             | Questões 13 - 16            |
|---------------------------|---------------------------|-----------------------------|-----------------------------|
| [Question 1 - Nível 1][1] | [Question 5 - Nível 2][5] | [Question 9 - Nível 2][9]   | [Question 13 - Nível 3][13] |  
| [Question 2 - Nível 1][2] | [Question 6 - Nível 2][6] | [Question 10 - Nível 2][10] | [Question 14 - Nível 3][14] |  
| [Question 3 - Nível 2][3] | [Question 7 - Nível 2][7] | [Question 11 - Nível 2][11] | [Question 15 - Nível 3][15] |  
| [Question 4 - Nível 2][4] | [Question 8 - Nível 2][8] | [Question 12 - Nível 3][12] |                             |  

***

[1]:#questão-1
[2]:#questão-2
[3]:#questão-3
[4]:#questão-4
[5]:#questão-5
[6]:#questão-6
[7]:#questão-7
[9]:#questão-9
[9]:#questão-9
[10]:#questão-10
[11]:#questão-11
[12]:#questão-12
[13]:#questão-13
[14]:#questão-14
[15]:#questão-15

***

### Questão 1

O Node e o NPM são obrigatórios para o trabalho com Flexbox?

- [ ] Sim
- [x] Não

* **Dica:**
    1. <https://www.schoolofnet.com/curso-flexbox/2064> 

**Nível:** 1         
    
***

### Questão 2 

O que significa Boilerplate?

- [ ] Framework CSS.
- [ ] Tutorial de como criar esqueletos de projetos.
- [ ] Ferramenta que disponibiliza layouts prontos com páginas e CSS aplicado.
- [x] Ferramenta que disponibiliza esqueletos de projetos prontos.
- [ ] Sistema para geração de imagens de layouts.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-flexbox/2064>

**Nível:** 1         
    
***

### Questão 3 

Para que serve o comando npm install?

- [ ] O comando npm install serve para terminar de baixar o restante dos arquivos do boilerplate.
- [ ] O comando npm install serve para configurar o nosso sistema ou website.
- [ ] O comando npm install serve para fazer o deploy automático para produção.
- [ ] Npm install é responsável apenas por subir o servidor, para que possamos visualizar no navegador.
- [x] Npm é o gerenciador de pacotes do node. O comando npm install instala todas as dependências do boilerplate.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-flexbox/2064>
    2. <https://docs.npmjs.com/getting-started/what-is-npm>

**Nível:** 2

***

### Questão 4 

Para que serve o Gulp no Boilerplate?

- [x] Gulp é um gerenciador de tarefas que otimizam o projeto para uma melhor performance, tanto para desenvolvimento quanto para produção.
- [ ] Gulp serve apenas para limpar os arquivos antigos do projeto.
- [ ] Gulp é uma tarefa que limpa o cache da aplicação.
- [ ] Gulp é um otimizador de tarefas, mas só funciona em modo produção.
- [ ] Gulp é um otimizador de tarefas, mas só funciona em modo desenvolvimento.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-flexbox/2064>
    2. <https://github.com/gulpjs/gulp/blob/v3.9.1/docs/getting-started.md>

**Nível:** 2

***

### Questão 5

Analise as frases abaixo e marque a alternativa correta.

"O uso do Flexbox é obrigatório para um bom designer, pois caso não o utilize estará fora do mercado de trabalho. O fato de não ter suporte para todos os navegadores não importa."

"Precisamos avaliar projeto a projeto, em relação ao uso do mesmo, pois o Flexbox não é aceito 100% por todos os navegadores."

- [ ] Primeira frase correta e a segunda incorreta.
- [x] Segunda frase correta e a primeira incorreta.
- [ ] Ambas corretas.
- [ ] Ambas incorretas.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-flexbox/2065>

**Nível:** 2

***

### Questão 6

O que é o Flexbox?

- [ ] O Flexbox é um recurso do CSS capaz de criar caixas flexíveis para imagens.
- [ ] O Flexbox só pode ser aplicado ao elemento box do CSS.
- [ ] O Flexbox só pode ser aplicado à tag box do HTML.
- [ ] O Flexbox é uma cópia do recurso de grids utilizado pelo Bootstrap.
- [x] Um modelo que consiste em alinhar layouts, sem precisar de uma estrutura complexa de grids.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-flexbox/2065>

**Nível:** 2

***

### Questão 7

Qual a estrutura básica para o Flexbox funcionar?

- [ ] Precisamos ter sempre uma tag "p", antes dos elementos filhos, para que o Flexbox sejá corretamente aplicado.
- [ ] Precisamos ter 3 níveis na hierarquia de elementos para que o Flexbox funcione, nunca somente pai e filho.
- [x] É necessário que exista um elemento pai, para que o Flexbox seja corretamente aplicado aos elementos filhos.
- [ ] Não existe uma estrutura básica, o Flexbox pode ser aplicado a qualquer elemente e estrutura.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-flexbox/2065>

**Nível:** 2

***

### Questão 8

Analise o código abaixo:

```css
main {
    width: 100%;
    height: 200px;
}

main div {
    width: 100px;
    height: 100px;
    display: flex;
    border: 1px solid #000000;
}
```

```html
<main>
    <div></div>
    <div></div>
    <div></div>
</main>
```

Qual o erro do código acima?

- [ ] Não está sendo aplicada o conceito de Flexbox porque o elemento div não tem a propriedade `float: left`.
- [x] A propriedade `display: flex` deveria estar no elemento pai, chamado main.
- [ ] O Flexbox não trabalha com elementos em pixels, somente com porcentagem.
- [ ] Não existe nenhum erro e os elementos serão mostrados todos na mesma linha, seguindo o conceito de Flexbox.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-flexbox/2067>

**Nível:** 2

***

### Questão 9

Analise o CSS abaixo:

```css
main div {
    width: 100px;
    height: 100px;
    flex-grow: 2;
    border: 1px solid #000000;
}

main div:nth-child(2) {
    flex-grow: 1;
}
```

Qual o comportamento esperado, de acordo com a configuração acima?

- [x] As divs terão um tamanho de duas colunas, somente o segundo elemento div terá o tamanho de uma coluna.
- [ ] Todas as divs terão o tamanho de duas colunas, já que foi definido primeiro.
- [ ] Todas as divs terão o tamanho de uma coluna, pois foi definido por último.
- [ ] Não teremos efeito nenhum, pois uma configuração anula a outra.
- [ ] Não teremos efeito nenhum, pois a propriedade flex-grow não existe, o correto seria flex-size.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-flexbox/2068>

**Nível:** 2

***

### Questão 10

Qual a propriedade, do Flexbox, que define o elemento pai como coluna ou como linha?

* **Dica:**
    1. <https://www.schoolofnet.com/curso-flexbox/2069>

Resp.: flex-direction

**Nível:** 2

***

### Questão 11

Quais as configurações possíveis para a propriedade flex-direction, em relação a linhas e colunas?

- [ ] row, column, row-revert e column-revert
- [x] row, column, row-reverse e column-reverse
- [ ] row e column
- [ ] row-reverse e column-reverse
- [ ] Não possui nenhuma configuração, portanto é apenas true ou false.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-flexbox/2069>

**Nível:** 2

***

### Questão 12

Qual propriedade do Flexbox utilizamos para quebrar uma linha ou uma coluna?

- [ ] flex-grow
- [ ] flex-break 
- [x] flex-wrap 
- [ ] flex-gap 
- [ ] flex-broken  

* **Dica:**
    1. <https://www.schoolofnet.com/curso-flexbox/2070>

**Nível:** 3

***

### Questão 13

Analise o código abaixo:

```css
main {
display: flex;
flex-direction: row;
align-items: center;
}
```

Independente de saber o tamanho dos elementos filhos, qual o comportamento que os mesmos terão de acordo com a configuração acima?

- [ ] Estarão alinhados ao centro, em relação ao tamanho da linha horizontal, ou seja, eixo x.
- [x] Estarão alinhados ao centro, em relação ao tamanho da linha vertical, ou seja, eixo y.
- [ ] Estarão alinhados a esquerda, em relação ao eixo y.
- [ ] Estarão alinhados a direita, em relação ao eixo x.
- [ ] Não terá nenhum efeito, pois a propriedade align-items não trabalha juntamente com flex-direction.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-flexbox/2071>

**Nível:** 3

***

### Questão 14

Quando queremos alinhar elementos filhos específicos qual propriedade devemos utilizar?

- [ ] align-items-self
- [ ] align-own
- [ ] align-unique
- [x] align-self
- [ ] align-only

* **Dica:**
    1. <https://www.schoolofnet.com/curso-flexbox/2071>

**Nível:** 3

***

### Questão 15

Qual a propriedade que podemos utilizar para dividir os elementos filhos em espaços iguais dentro de uma coluna?

- [x] justify-content
- [ ] justify
- [ ] align-items
- [ ] divider
- [ ] Não existe nenhum elemento que faça este efeito.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-flexbox/2072>

**Nível:** 3

***