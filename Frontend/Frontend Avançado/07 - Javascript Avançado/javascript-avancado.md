# Questões

| Questões 1 - 5            | Questões 6 - 10             | Questões 11 - 15            |
|---------------------------|-----------------------------|-----------------------------|
| [Question 1 - Nível 1][1] | [Question 6 - Nível 2][6]   | [Question 11 - Nível 2][11] |  
| [Question 2 - Nível 1][2] | [Question 7 - Nível 2][7]   | [Question 12 - Nível 3][12] |  
| [Question 3 - Nível 1][3] | [Question 8 - Nível 2][8]   | [Question 13 - Nível 3][13] |  
| [Question 4 - Nível 2][4] | [Question 9 - Nível 2][9]   | [Question 14 - Nível 3][14] |  
| [Question 5 - Nível 2][5] | [Question 10 - Nível 2][10] | [Question 15 - Nível 3][15] |  
                     
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

Qual elemento utilizamos para acessar tags do HTML diretamente, sem o uso do seletor de classe ou id?

- [ ] getElementById
- [ ] getElementsByClassName
- [ ] getElementsByName
- [x] document
- [ ] docElement

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-javascript-avancado/97>

**Nível:** 1
 	
***

### Questão 2

Qual o formato correto de um array de objetos?

- [x] `[ { }, { }, { } ]` 
- [ ] `[ ( ), ( ), ( ) ]` 
- [ ] `[ [ ], [ ], [ ] ]` 
- [ ] `{ [ ], [ ], [ ] }` 
- [ ] `{ { }, { }, { } }` 

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-javascript-avancado/98>

**Nível:** 1
 	
***

### Questão 3

Analise o código abaixo:

```javascript
var list = [
    { product: "rice", amount: 1, valor: 5.40 },
    { product: "beer", amount: 12, valor: 1.99 },
    { product: "meat", amount: 1, valor: 15.00 }
]

function getTotal(list) {
    var total = 0;
    for(var key in list){
        total = list[key].valor * list[key].amount;
    }
    return total;
}

console.log(getTotal(list));
```

O código acima, ao invés de calcular o total a cada iteração e somar ao total geral, está retornando apenas o último total, do array de objetos. Qual o erro que impede o retorno correto da soma de todos os totais?

- [ ] O método "for" não está fazendo a iteração correta, calculando apenas o último elemento. 
- [ ] O total não pode começar com zero para que a soma seja feita corretamente.  
- [ ] A variável "key" não está sendo reconhecido pelo método "for". 
- [x] A falta do operador de soma a cada iteração (+=);
- [ ] O array list, passado para a função, tem apenas um elemento. 

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-javascript-avancado/98>

**Nível:** 1
 	
***

### Questão 3

Seria possível renderizar uma tabela inteira com Javascript?

- [x] Sim
- [ ] Não

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-javascript-avancado/99>

**Nível:** 1
 	
***

### Questão 4

Qual o método responsável por inserir um HTML via Javascript?

- [ ] HTMLObjectElement
- [ ] HTMLElement
- [x] innerHTML
- [ ] inputHTML
- [ ] innerCodeHTML

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-javascript-avancado/99>

**Nível:** 2
 	
***

### Questão 5

Qual o formato correto de declarar uma função Javascript COM parâmetro?

- [ ] `function formatDesc(desc) ()`
- [ ] `function formatDesc(desc) []`
- [ ] `formatDesc(desc) {}`
- [ ] `function formatDesc() {}`
- [x] `function formatDesc(desc) {}`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-javascript-avancado/100>

**Nível:** 2
 	
***

### Questão 6

Analise os objetivos abaixo e assinale a alternativa tem o métodos que os solucionam. Siga a mesma ordem dos objetivos,

1. Deixar todas as letras minúsculas.
2. Deixar todas as letras maiúsculas.
3. Pegar uma parte de uma string à partir de uma valor informado.

- [ ] toUpperCase(), toLowerCase() e slice()
- [x] toLowerCase(), toUpperCase() e slice()
- [ ] slice(), toLowerCase() e toUpperCase()
- [ ] LowerCase(), UpperCase() e slice()
- [ ] low(), upper() e trim()

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-javascript-avancado/100>

**Nível:** 2
 	
***

### Questão 7

Caso seja necessário transformar uma string em float, qual função deve ser utilizada?

- [ ] convertFloat()
- [ ] toFloat()
- [x] parseFloat()
- [ ] floatParse()
- [ ] floatConvert()

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-javascript-avancado/100>

**Nível:** 2
 	
***

### Questão 8

Qual função, do Javascript, adiciona um elemento à primeira posição de um array?

- [ ] appendChild()
- [ ] firstAddElement()
- [ ] firstChild()
- [x] unshift()
- [ ] addArrayFirst()

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-javascript-avancado/101>

**Nível:** 2
 	
***

### Questão 9

Qual evento que é utilizado caso seja necessário chamar uma função ao clicar em um botão?

- [ ] onpress() 
- [ ] onselect()
- [ ] atclick()
- [ ] click()
- [x] onclick()

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-javascript-avancado/101>

**Nível:** 2
 	
***

### Questão 10

O que o método confirm faz?

- [ ] Exibe uma mensagem, como se fosse um alerta.
- [ ] Exibe uma mensagem no console do navegador.
- [x] Exibe uma mensagem de confirmação, onde você pode tratar o resultado de acordo com a escolha do usuário. 
- [ ] Pausa a aplicação até que outro comando confirm seja adicionado ao código.
- [ ] Força a confirmação de uma função que espera um parâmetro true ou false.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-javascript-avancado/104>

**Nível:** 2
 	
***

### Questão 10

O que o método pop faz?

- [ ] Remove o primeiro elemento de uma lista.
- [x] Remove o último elemento de uma lista. 
- [ ] Adiciona um elemento na primeiro posição de uma lista, assim como o unshift.
- [ ] Remove o primeiro elemento de uma lista.
- [ ] Lista todos os elementos de uma lista em forma de string.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-javascript-avancado/104>

**Nível:** 2
 	
***

### Questão 11

Analise o código abaixo:

```javascript
var fruits = [
    "Courses",
    "School",
    "of",
    "Net"
];
fruits.shift();
console.log(fruits);
```

Qual seria o resultado do código acima??

- [x] `[ 'School', 'of', 'Net' ]` 
- [ ] `[ 'Courses', 'School', 'of' ]`
- [ ] `[ 'School', School', 'of', 'Net' ]`
- [ ] `[ 'Courses', 'School', 'of', 'of' ]`
- [ ] `[ 'Courses', 'of', 'Net' ]`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-javascript-avancado/104>

**Nível:** 2
 	
***

### Questão 12

Quando se trata de uma aplicação web simples e não existe o banco de dados, qual recurso do navegador pode ser utilizado?

- [ ] Cookie
- [x] Local Storage
- [ ] Session
- [ ] Cache
- [ ] Não existe nenhuma alternativa para armazenamento de dados no navegador.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-javascript-avancado/108>

**Nível:** 3
 	
***

### Questão 13

Qual o método para acessar o Local Storage com o Javascript?

- [x] localStorage
- [ ] storage
- [ ] storageAccess
- [ ] myStorage
- [ ] toStorage

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-javascript-avancado/108>

**Nível:** 3
 	
***

### Questão 14

Qual método para configurar um valor no Local Storage?

- [ ] `localStorage.newItem('key', 'value');`
- [ ] `localStorage.saveItem('key', 'value');`
- [ ] `localStorage.configItem('key', 'value');`
- [x] `localStorage.setItem('key', 'value');`
- [ ] `localStorage.addItem('key', 'value');`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-javascript-avancado/108>

**Nível:** 3
 	
***

### Questão 15

Qual método para resgatar um valor no Local Storage?

- [ ] `localStorage.localItem('key', 'value');`
- [ ] `localStorage.item('key', 'value');`
- [x] `localStorage.getItem('key', 'value');`
- [ ] `localStorage.pullItem('key', 'value');`
- [ ] `localStorage.configItem('key', 'value');`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-javascript-avancado/108>

**Nível:** 3
 	
***