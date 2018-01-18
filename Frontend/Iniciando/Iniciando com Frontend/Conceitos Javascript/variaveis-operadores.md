# Questões

| Questões 1 - 4               | Questões 5 - 8            | Questões 9 - 12            |
|-------------------------------|-----------------------------|-----------------------------|
| [Question 1 - Nível 1][1]     | [Question 5 - Nível 2][5] | [Question 27 - Nível 2][27] |  
| [Question 2 - Nível 1][2]     | [Question 6 - Nível 2][6] | [Question 27 - Nível 2][27] |  
| [Question 3 - Nível 1][3]     | [Question 7 - Nível 2][7] | [Question 27 - Nível 2][27] |  
| [Question 4 - Nível 1][4]     | [Question 8 - Nível 2][8] | [Question 27 - Nível 2][27] |  

[1]:#1-qual-o-principal-objetivo-do-css

### O que é uma variável?

- [x] Um objeto, gravado na memória do servidor, utilizado para gravar dados durante a execução de sistemas.
- [ ] Um objeto, gravado na memória do navegador.
- [ ] Um objeto que pode ser alterado a qualquer momento, mas não é gravado em nenhum local.
- [ ] Um objeto que guarda um valor fixo, apesar do nome ser variável.
- [ ] É apenas uma configuração que não utilizamos para nada nos sistemas atuais.

https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6560

***

### 3. Queremos imprimir uma mensagem na tela do usuário. Portanto complete o código abaixo para que isso seja possível, utilizando Javascript.
    
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
    
    	Res.: alert
https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6560
***

### 4. Qual variável NÃO está declarada corretamente?
    
    	a. var $lastname
    	b. var lastname
    	c. var lastName
    	d. var last_name
      x	e. var last-name
      https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6560

***

### Analise o código abaixo e marque a alternativa correta.

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

https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6560

***

### Quando sabemos que uma linguagem tem tipagem dinâmica para as variáveis?

- [ ] Quando uma linguagem exige a definição do tipo da variável.
- [x] Quando não é necessário definir o tipo, basta atribuir valores e a linguagem reconhecerá dinamicamente.
- [ ] Quando uma linguagem exige a definição do tipo da variável, mas permite alteração posterior.
- [ ] Quando não precisamos definir nem tipo e nem valores, pois a linguagem é capaz de reconhecer dinamicamente através do identificador.

https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6560

***

### 4. Qual variável NÃO está declarada corretamente?
    
    	a. var $lastname
    	b. var lastname
    	c. var lastName
    	d. var last_name
      x	e. var last-name
   https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6560  
    
***

### Analise o código abaixo e escreva o valor impresso pela função alert.

```javascript
<script>
    var name = "Leonan Luppi"

    alert(name.toUpperCase())
</script>
```

Resp.: LEONAN LUPPI

https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6561
***

### Analise o código abaixo e escreva o valor impresso pela função alert.

```javascript
<script>
    var name = "Leonan"
    var lastname = "Luppi"
    
    alert(name.toLowerCase().concat(' ').concat(lastname.toUpperCase()))
</script>
```

Resp.: leonan LUPPI

https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6561

***

### 5. Qual linha abaixo não será interpretada pelo browser?
   
    	a. var lastName = 'Last Name'
    	b. var num1 = 5
    	c. var num2 = 5
     x	d. // var soma = num1 + num2
    	e. var soma = num1 + num2
    	
    	https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6561
    	
***

### Analise o código abaixo e assinale a alternativa correta.

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

    https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6561
    
***
    
###	Analise o código abaixo e assinale a alternativa correga.

```javascript
<script>
    var frase = "Aprender javascript é impossível."
    frase = frase.replace('impossível', 'POSSÍVEL')

    alert(frase)
</script>
```

Resp.: Aprender javascript é POSSÍVEL

https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6561

***

### 6. Qual o valor final da variável "resultado"?
   
    	var num1 = 10
    	var num2 = 20
    	var resultado = 10 + 20 / 10
   
    	a. 3
     x	b. 12
    	c. 40
    	d. 21
    	e. 20 
    	
    	https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6562
    	
    	***
    	
### Analise o código abaixo.

```javascript
<script>
    var number1 = 5.01
    var number2 = 5.10
    var soma = number1 + number2

    alert(soma.toFixed(1))
</script>
```

Qual será o resultado impresso pelo comando alert?

https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6562

Resp.: 10.1

***

### Qual o objetivo da função parseInt?

- [ ] Transformar um número inteiro em parse
- [ ] Transformar um parse em um inteiro
- [x] Transformar qualquer tipo numérico em inteiro
- [ ] Arredontar números flutuantes
- [ ] Somar um número fixo a algum número inteiro

https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6562

***

### Qual o resultado do código abaixo?

```javascript
<script>
    var number1 = Math.sin(Math.PI/2)

    alert(number1)
</script>
```

Resp.: 1

***

### Analise a afimarção abaixo e responda verdadeiro ou falso.

Variáveis de tipo null e undefined são muito parecidas, pois ambas servem para indicar que uma variável não tem valor, porém utilizar variável undefined exige maior atenção, pois pode causar erros em nossos sistemas.

- [x] Verdadeiro 
- [ ] Falso 

***
    	
### 7. Dentre as alternativas abaixo, qual comando representa uma entrada de dados (INPUT) no Javascript?
    
    	a. console.log()
    	b. console.warm()
    	c. alert()
    	d. confirm()
      x e. prompt()
      
      https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6564
      
***

### Qual alternativa abaixo está com TODAS as opções de log corretas?

- [ ] `console.log`, `console.erro`, `console.infos` e `console.warn`
- [ ] `console.log`, `console.erro`, `console.info` e `console.warn`
- [ ] `console.logs`, `console.error`, `console.info` e `console.warn`
- [x] `console.log`, `console.error`, `console.info` e `console.warn`
- [ ] `console.logs`, `console.erros`, `console.infos` e `console.warns`

https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6564

***

### 8. Adicione o operador correto para que o resultado seja verdadeiro(true).
    	
    	<script>
    		var num1 = 10
            var num2 = '10'
            
            var compare = (num1  num2)
    
            alert(compare)
    	</script>
    
    	Res.: !==
    	
    	https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6565
    	
***

### Analise o código abaixo e assinale a alternativa correta.

```javascript
<script>
    var num1 = 10
    var num2 = 3

    var compare = ((num1 !== num2) || (num1 == num2))
    
    alert(compare)
</script>
```

Qual é o resultado, impresso pelo comando alert, e qual é a operação lógica responsável por tornar uma das comparações verdadeira? Vamos nos referir por primeira `(num1 !== num2)` e segunda `(num1 == num2)` condição.

- [ ] false, primeira
- [ ] false, segunda
- [x] true, primeira
- [ ] true, segunda
- [ ] nenhuma das alternativas

https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6565

***

### Analise o código abaixo.

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

Assinale a alternativa que tem o resultado correto da conta acima.

- [ ] 10
- [x] 0 
- [ ] 20
- [ ] 1000
- [ ] 100

https://www.schoolofnet.com/curso-iniciando-com-javascript-rev3/6565

*** 