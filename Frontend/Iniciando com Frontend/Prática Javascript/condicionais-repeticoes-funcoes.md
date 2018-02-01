# Questões

| Questões 1 - 7                | Questões 8 - 13             |
|-------------------------------|-----------------------------|
| [Question 1 - Nível 3][1]     | [Question 8 - Nível 3][8]   |  
| [Question 2 - Nível 3][2]     | [Question 9 - Nível 3][9]   |  
| [Question 3 - Nível 3][3]     | [Question 10 - Nível 3][10] |  
| [Question 4 - Nível 3][4]     | [Question 11 - Nível 3][11] |  
| [Question 5 - Nível 3][5]     | [Question 12 - Nível 3][12] |  
| [Question 6 - Nível 3][6]     | [Question 13 - Nível 3][13] |  
| [Question 7 - Nível 3][7]     |                             |  

[1]:#1-analise-o-código-abaixo-e-informe-o-erro-no-código
[2]:#2-analise-com-atenção-o-código-abaixo-e-assinale-a-alternativa-correta
[3]:#3-analise-o-código-abaixo-e-depois-analise-a-afirmação
[4]:#4-analisando-o-código-abaixo-assinale-a-resposta-correta-do-output-gerado-no-console-do-browser
[5]:#5-abaixo-temos-um-loop-simples-utilizando-a-estrutura-while-analise-o
[6]:#6-com-estruturas-de-repetição-somos-capazes-de-fazer-muitas-lógicas-inclusive-coisas-simples-e-brincadeiras-analise-o-código-abaixo
[7]:#7-altere-a-estrutura-de-repetição-for-abaixo-para-que-tenhamos-20-iterações
[8]:#8-vamos-falar-mais-um-pouco-da-estrutura-for
[9]:#9-utilizamos-a-diretiva-function-para-criar-tanto-funções-como-procedimentos-simples-analise-os-dois-códigos-abaixo-e-assinale-a-opção-correta
[10]:#10-altere-o-valor-da-variável-num2-da-função-soma-abaixo-para-que-o-resultado-do-console-seja-zero
[11]:#11-analise-o-código-abaixo-e-preencha-o-valor-do-resultado-final
[12]:#12-ainda-analisando-funções-vamos-pensar-um-pouco-em-escopos
[13]:#13-analise-o-código-abaixo-e-revise-todos-os-conhecimentos-até-agora

### 1 Analise o código abaixo e informe o erro no código.

```javascript
<script>
    var num1 = 10
    var num2 = 3

    if (num1 !== num2) || (num1 == num2) {
        console.log("It is true !!!")
    }
</script>
```

Qual o erro presente na sintax da condicional if.

- Resp.: `()`
- Resp.: `((num1 !== num2) || (num1 == num2))`
- Resp.: `Falta dos parenteses principais da estrutura`

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6566>

**Nível:** 3

***

### 2 Analise, com atenção, o código abaixo e assinale a alternativa correta.

```javascript
<script>
    var num1 = '5'
    var num2 = '5'
    var op = '+'

    num1 = parseFloat(num1)
    num2 = parseFloat(num2)

    if (op == '+') {
        console.log(num1 + num2)
    }else {
        console.error('Operation not found')
    }
</script>
```

Imagine um caso normal de execução do código acima e depois imagina que o código não tivesse os dois comando de parseFloat. Quais seriam os resultados com e sem o parseFloat, nesta mesma sequência:

- [ ] 55 e 55
- [ ] 10 e 10
- [x] 10 e 55
- [ ] 20 e 45
- [ ] 15 e 30

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6566>

**Nível:** 3
    
***

### 3 Analise o código abaixo e depois analise a afirmação.

```javascript
<script>
    var num1 = '5'
    var num2 = '5'
    var op = '-'

    num1 = parseFloat(num1)
    num2 = parseFloat(num2)

    if (op == '+') {
        if(num1 >= 5){
            num1 += 10
        }else {
            num1 -= 10
        }
        console.log(num1 + num2)
    }else if (op == '-') {
        if (num1 >= 5) {
            num1 += 10
        } else {
            num1 -= 10
        }
        console.log(num1 - num2)
    }else {
        console.error('Operation not found')
    }
</script>
```

Analizando o código acima, qual será o resultado no console?

- [ ] 20
- [ ] 15
- [ ] 25
- [x] 10
- [ ] 30

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6566>
    2. Não estamos seguindo o mesmo exemplo do curso, portanto preste atenção na sequência lógica do exemplo acima.
    3. Como é apenas um exemplo não é necessário que o código tenha muita lógica.

**Nível:** 3

***

### 4 Analisando o código abaixo, assinale a resposta correta do output gerado no console do browser.

```javascript
<script>
    var option = '15'
    
    switch (option) {
        case 15:
            console.log('Case 1')
        break;
        case '15':
            console.log('Case 2')
        break;
        case '':
            console.log('Case 3')
        break;
        default:
            console.error('Default') 
        break;         
    }      
</script>
```
    
- [ ] Case 1
- [x] Case 2
- [ ] Case 3
- [ ] Default

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6567>

**Nível:** 3        
        
***

### 5 Abaixo temos um loop simples utilizando a estrutura while. Analise-o.

```javascript
<script>
    var i = 1
    var loop = 10

    while(i < loop){
        if(i < 5){
            console.log('<')
        } else if(i == 5) {
            console.log('=')
        }else {
            console.log('>')
        }
        i++
    }
</script>
```

Quantas vezes teremos a impressão de cada símbolo acima, de acordo com a lógica?

Lembre que a sequência é: (<), (=) e (>). 

- [x] 4, 1 e 4 
- [ ] 3, 2 e 4
- [ ] 4, 4 e 1
- [ ] 1, 4 e 4
- [ ] 1, 4 e 4

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6568>

**Nível:** 3 

***

### 6 Com estruturas de repetição somos capazes de fazer muitas lógicas, inclusive coisas simples e brincadeiras. Analise o código abaixo.

```javascript
<script>
    // Início do índice do loop
    var i = 0

    // Quantas letras tem as iniciais de School Of Net - SON
    var loop = 3

    // Variável SON
    var son = ''

    console.log('Formando nome composto...')

    while(i < loop){
        if(i == 0){
            son = 'School'
        } else if(i == 1) {
            son = son + ' of '
        }else {
            son = son + 'Net'
        }
        i++
    }

    console.log('Imprimindo nome composto...')

    console.log(son.toLowerCase())
</script>
```

Qual será a saída no final desta estrutura de repetição?

- [ ] SCHOOL OF NET
- [x] school of net
- [ ] School of Net
- [ ] Net of School
- [ ] SON

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6568>

**Nível:** 3 

***

### 7 Altere a estrutura de repetição FOR, abaixo, para que tenhamos 20 iterações.

```javascript
<script>
    for(var i = 0; i < 15; i++) {
        console.log(i)
    }		
</script>
```

Reescreva, como resposta, a lógica completa de dentro dos parênteses da estrutura.

Ex.: `(var i = 0; i < 15; i++)`

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6569>

Res.: (var i = 0; i < 20; i++)

**Nível:** 3 

***

### 8 Vamos falar mais um pouco da estrutura for.

```javascript
<script>
    // Número de repetições
    var loop = 20

    // Variável GOL
    var gol = ''

    console.log('Um determinado time fez um gol e o narrador começou a narrar...')

    for(i = 1 ; i < loop ; i++){
        if(i == 1){
            gol = 'G'
        } else if(i <= (loop-2) ) {
            gol = gol + 'O'
        }else {
            gol = gol + 'L'
        }
    }

    console.log(gol)

    console.log('Fim da narração...')
</script>
```

O que é possível afirmar sobre o código acima?

- [ ] Existe alguma situação que a primeira letra não será o G.
- [ ] Existe alguma situação que a última letra não será o L.
- [ ] Em algum momento o loop vai ser alterado e haverá um erro.
- [ ] A variável L só é impressa porque o número do loop é 20, se fosse outro não existiria.
- [x] A primeira letra sempre será G, a última sempre será L e o tamanho da narração vai depender do tamanho do loop.

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6569>

**Nível:** 3

***

### 9 Utilizamos a diretiva function para criar tanto funções como procedimentos simples. Analise os dois códigos abaixo e assinale a opção correta.

```javascript
<script>
    function retornaNome() {
        return 'School of Net'
    }
    
    function imprimeNome() {
        console.log('School of Net')
    }
</script>
```

- [ ] imprimeNome é uma função e retornaNome é um procedimento. 
- [x] imprimeNome é um procedimento e retornaNome é uma função. 

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6570>

**Nível:** 3

***

### 10 Altere o valor da variável NUM2, da função soma abaixo, para que o resultado do console seja ZERO.

```javascript
<script>
    var soma = function(){
        var num1 = 10
        var num2 = 5
        console.log(num1 + num2)
    }     

    soma()
</script>
```    

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6570>
    2. Não estamos seguindo o mesmo exemplo do curso, portanto preste atenção na sequência lógica do exemplo acima.
    3. Como é apenas um exemplo não é necessário que o código tenha muita lógica.
    
Res.: -10

**Nível:** 3

***

### 11 Analise o código abaixo e preencha o valor do resultado final.

```javascript
<script>
    function soma(num1, num2) {
        return num1 + num2
    }

    function subtrai(num1, num2) {
        return num1 - num2
    }

    function multiplica(num1, num2) {
        return num1 * num2
    }

    function dobro(num) {
        return num * 2
    }

    var resultado = dobro( multiplica( soma(10, 10), subtrai(10, 5) ) )

    console.log(resultado)
</script>
```

Qual o valor impresso pelo comando console?

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6571>

Resp.: 200

**Nível:** 3

***

### 12 Ainda analisando funções, vamos pensar um pouco em escopos.

```javascript
<script>
    var num = 5

    function dobro(num) {
        return num * 2
    }

    console.log( dobro(10) )
</script>
```

* **Dica.:** 
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6571>

Resp.: 20

**Nível:** 3

***

### 13 Analise o código abaixo e revise todos os conhecimentos até agora.

```javascript
<script>
    function somaPar(totalPar, num) {
        return totalPar += num
    }

    function somaImpar(totalImpar, num) {
        return totalImpar += num
    }

    var loop = 10
    var totalPar = 0
    var totalImpar = 0

    for (i = 1 ; i <= loop ; i++){
        if((i % 2) == 0){
            totalPar = somaPar(totalPar, i)
        }else{
            totalImpar = somaImpar(totalImpar, i)
        }
    }

    console.log( 'A soma de todos os números pares é: ' + totalPar )
    console.log( 'A soma de todos os números ímpares é: ' + totalImpar )
</script>
```

No código acima estamos utilizado funções, variáveis, operadores, repetições e condicionais.

Qual a soma de números pares e números impares em um loop de 10 repetições.

* **Dica.:** 
    1.Lembrando que o módulo(%) pega o resto da divisão, podemos fazer a divisão por 2 e se o resto for zero sabemos que o número é par.
    2. As funções são chamadas mais do que uma vez e executam suas tarefas sempre que necessário chegando a um valor final.

Resp.: Par: 30 e Impar: 25

**Nível:** 3

***