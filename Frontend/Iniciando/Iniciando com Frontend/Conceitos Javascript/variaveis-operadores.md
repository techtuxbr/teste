# Questões

| Questões 1 - 7            | Questões 8 - 14             | Questões 15 - 20            |
|---------------------------|-----------------------------|-----------------------------|
| [Question 1 - Nível 1][1] | [Question 8 - Nível 1][8]   | [Question 15 - Nível 1][15] |  
| [Question 2 - Nível 1][2] | [Question 9 - Nível 1][9]   | [Question 16 - Nível 1][16] |  
| [Question 3 - Nível 1][3] | [Question 10 - Nível 1][10] | [Question 17 - Nível 1][17] |  
| [Question 4 - Nível 1][4] | [Question 11 - Nível 1][11] | [Question 18 - Nível 1][18] |  
| [Question 5 - Nível 1][5] | [Question 12 - Nível 1][12] | [Question 19 - Nível 1][19] |  
| [Question 6 - Nível 1][6] | [Question 13 - Nível 1][13] | [Question 20 - Nível 1][20] |  
| [Question 7 - Nível 1][7] | [Question 14 - Nível 1][14] |                             |  

[1]:#1-o-que-é-uma-variável
[2]:#2-queremos-imprimir-uma-mensagem-na-tela-do-usuário-portanto-complete-o-código-abaixo-para-que-isso-seja-possível-utilizando-javascript
[3]:#3-qual-variável-nÃo-está-declarada-corretamente
[4]:#4-analise-o-código-abaixo-e-marque-a-alternativa-correta
[5]:#5-quando-sabemos-que-uma-linguagem-tem-tipagem-dinâmica-para-as-variáveis
[6]:#6-analise-o-código-abaixo-e-escreva-o-valor-impresso-pelo-método-alert
[7]:#7-analise-o-código-abaixo-e-escreva-o-valor-impresso-pelo-método-alert
[8]:#8-qual-linha-abaixo-não-será-interpretada-pelo-browser
[9]:#9-analise-o-código-abaixo-e-assinale-a-alternativa-correta
[10]:#10-analise-o-código-abaixo-e-assinale-a-alternativa-correga
[11]:#11-qual-o-valor-final-da-variável-resultado
[12]:#12-analise-o-código-abaixo
[13]:#13-qual-o-objetivo-da-função-parseint
[14]:#14-qual-o-resultado-do-código-abaixo
[15]:#15-analise-a-afimarção-abaixo-e-responda-verdadeiro-ou-falso
[16]:#16-dentre-as-alternativas-abaixo-qual-comando-representa-uma-entrada-de-dados-input-no-javascript
[17]:#17-qual-alternativa-abaixo-está-com-todas-as-opções-de-log-corretas
[18]:#18-adicione-o-operador-de-comparação-correto-para-que-o-resultado-seja-verdadeiro-true
[19]:#19-analise-o-código-abaixo-e-assinale-a-alternativa-correta
[20]:#20-analise-o-código-abaixo

### 1 O que é uma variável?

- [x] Um objeto, gravado na memória do servidor, utilizado para gravar dados durante a execução de sistemas.
- [ ] Um objeto, gravado na memória do navegador.
- [ ] Um objeto que pode ser alterado a qualquer momento, mas não é gravado em nenhum local.
- [ ] Um objeto que guarda um valor fixo, apesar do nome ser variável.
- [ ] É apenas uma configuração que não utilizamos para nada nos sistemas atuais.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6560>

**Nível:** 1

***

### 2 Queremos imprimir uma mensagem na tela do usuário. Portanto complete o código abaixo para que isso seja possível, utilizando Javascript.
    
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>    
    <script>
        ('Hello World from Javascript - School of net')
    </script>
</body>
</html>
```
     	
* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6560>    

Res.: alert

**Nível:** 1

***

### 3 Qual variável NÃO está declarada corretamente?
    
- [ ] var $lastname
- [ ] var lastname
- [ ] var lastName
- [ ] var last_name
- [x] var last-name

     	
* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6560>    

**Nível:** 1
      
***

### 4 Analise o código abaixo e marque a alternativa correta.

```javascript
<script>
    var name = "Leonan Luppi";
    var Name = ""
    
    name = "Leonan"
    Name = "Luppi"
    
    alert(name)
</script>
```

Qual o valor impresso, pela função alert, no browser?

- [ ] Leonan Luppi
- [ ] Luppi
- [x] Leonan
- [ ] Luppi Leonan
- [ ] Nenhuma das alternativas acima

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6560>

**Nível:** 1

***

### 5 Quando sabemos que uma linguagem tem tipagem dinâmica para as variáveis?

- [ ] Quando uma linguagem exige a definição do tipo da variável.
- [x] Quando não é necessário definir o tipo, basta atribuir valores e a linguagem reconhecerá dinamicamente.
- [ ] Quando uma linguagem exige a definição do tipo da variável, mas permite alteração posterior.
- [ ] Quando não precisamos definir nem tipo e nem valores, pois a linguagem é capaz de reconhecer dinamicamente através do identificador.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6560>

**Nível:** 1

***

### 6 Analise o código abaixo e escreva o valor impresso pelo método alert.

```javascript
<script>
    var name = "Leonan Luppi"

    alert(name.toUpperCase())
</script>
```

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6561>

Resp.: LEONAN LUPPI

**Nível:** 1

***

### 7 Analise o código abaixo e escreva o valor impresso pelo método alert.

```javascript
<script>
    var name = "Leonan"
    var lastname = "Luppi"
    
    alert(name.toLowerCase().concat(' ').concat(lastname.toUpperCase()))
</script>
```

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6561>

Resp.: leonan LUPPI

**Nível:** 1

***

### 8 Qual linha abaixo não será interpretada pelo browser?
   
- [ ] `var lastName = 'Last Name'`
- [ ] `var num1 = 5`
- [ ] `var num2 = 5`
- [x] `// var soma = num1 + num2`
- [ ] `var soma = num1 + num2`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6561>

**Nível:** 1
 	
***

### 9 Analise o código abaixo e assinale a alternativa correta.

```javascript
<script>
    var number1 = "2"
    var number2 = "2"
    var number3 = number1 + number2
    
    alert(number3)
</script>
```

- [ ] 2 2
- [ ] 4
- [ ] 24
- [ ] 4 4
- [x] 22

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6561>

**Nível:** 1
    
***
    
###	10 Analise o código abaixo e assinale a alternativa correga.

```javascript
<script>
    var frase = "Aprender javascript é impossível."
    frase = frase.replace('impossível', 'POSSÍVEL')

    alert(frase)
</script>
```

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6561>

Resp.: Aprender javascript é POSSÍVEL

**Nível:** 1

***

### 11 Qual o valor final da variável resultado?
   
```javascript
var num1 = 10
var num2 = 20
var resultado = 10 + 20 / 10
```

- [ ] 3
- [x] 12
- [ ] 40
- [ ] 21
- [ ] 20 

* **Dica:**   	
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6562>

**Nível:** 1
 	
***
    	
### 12 Analise o código abaixo.

```javascript
<script>
    var number1 = 5.01
    var number2 = 5.10
    var soma = number1 + number2

    alert(soma.toFixed(1))
</script>
```

Qual será o resultado impresso pelo comando alert?

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6562>
    2. Tente resolver antes de programar o teste.

Resp.: 10.1

**Nível:** 1

***

### 13 Qual o objetivo da função parseInt?

- [ ] Transformar um número inteiro em parse
- [ ] Transformar um parse em um inteiro
- [x] Transformar qualquer tipo numérico em inteiro
- [ ] Arredontar números flutuantes
- [ ] Somar um número fixo a algum número inteiro

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6562>

**Nível:** 1

***

### 14 Qual o resultado do código abaixo?

```javascript
<script>
    var number1 = Math.sin(Math.PI/2)

    alert(number1)
</script>
```

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6562>

Resp.: 1

**Nível:** 1

***

### 15 Analise a afimarção abaixo e responda verdadeiro ou falso.

Variáveis de tipo null e undefined são muito parecidas, pois ambas servem para indicar que uma variável não tem valor, porém utilizar variável undefined exige maior atenção, pois pode causar erros em nossos sistemas.

- [x] Verdadeiro 
- [ ] Falso 

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6563>

**Nível:** 1

***
    	
### 16 Dentre as alternativas abaixo, qual comando representa uma entrada de dados (INPUT) no Javascript?
    
- [ ] console.log()
- [ ] console.warm()
- [ ] alert()
- [ ] confirm()
- [x] prompt()

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6564>      
      
**Nível:** 1
     
***

### 17 Qual alternativa abaixo está com TODAS as opções de log corretas?

- [ ] `console.log`, `console.erro`, `console.infos` e `console.warn`
- [ ] `console.log`, `console.erro`, `console.info` e `console.warn`
- [ ] `console.logs`, `console.error`, `console.info` e `console.warn`
- [x] `console.log`, `console.error`, `console.info` e `console.warn`
- [ ] `console.logs`, `console.erros`, `console.infos` e `console.warns`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6564>

**Nível:** 1

***

### 18 Adicione o operador de comparação correto para que o resultado seja verdadeiro(true).

```javascript
<script>
    var num1 = 10
    var num2 = '10'
    
    var compare = (num1  num2)

    alert(compare)
</script>
```

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6565>    	

Res.: !==
    	
**Nível:** 1    	
    	
***

### 19 Analise o código abaixo e assinale a alternativa correta.

```javascript
<script>
    var num1 = 10
    var num2 = 3

    var compare = ((num1 !== num2) || (num1 == num2))
    
    alert(compare)
</script>
```

Qual é o resultado impresso pelo método alert?

- [ ] NaN
- [ ] undefined
- [x] true
- [ ] False
- [ ] null

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6565> 

**Nível:** 1 

***

### 20 Analise o código abaixo.

```javascript
<script>
    var valor = 0
    valor = valor + 1000
    valor /= 2
    valor += 300
    valor -= 2 * 800 / 2

    console.log(valor)
</script>
```

Tente interpretar a sequência de código acima e fazer a conta de cabeça, antes de testar em seu browser. Desta forma você se certificará de que realmente entendeu as operações no javascript.

Assinale a alternativa que tem o resultado correto da operação acima.

- [ ] 10
- [x] 0 
- [ ] 20
- [ ] 1000
- [ ] 100

* **Dica:**
    1. <https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6565> 

**Nível:** 1 

*** 