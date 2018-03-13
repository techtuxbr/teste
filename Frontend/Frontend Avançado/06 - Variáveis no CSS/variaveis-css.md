# Questões

| Questões 1 - 5            |
|---------------------------|
| [Question 1 - Nível 1][1] |  
| [Question 2 - Nível 2][2] |  
| [Question 3 - Nível 2][3] |  
| [Question 4 - Nível 3][4] |  
| [Question 5 - Nível 3][5] |  
                     
***

[1]:#questão-1
[2]:#questão-2
[3]:#questão-3
[4]:#questão-4
[5]:#questão-5

***

### Questão 1 

Qual alternativa expressa uma, ou mais vantagens, ao utilizar variáveis CSS em um projeto?

- [ ] Aumentar a complexidade dos códigos.
- [x] Facilitar a manutenção e reutilizar código.
- [ ] Agregar valor ao projeto.
- [ ] Aumentar a velocidade da carregamento no browser.
- [ ] Não existe vantagem nenhuma, é apenas uma perda de tempo.

* **Dica:**    	
    1. <https://www.schoolofnet.com/canal-direto-ao-ponto/variaveis-no-css/>

**Nível:** 1
 	
***

### Questão 2

Qual o padrão de declaração de uma variável no CSS?

- [ ] `:root { -cor1: #000; }`
- [ ] `:root { $cor1: #000; }` 
- [ ] `root { --cor1: #000; }`
- [x] `:root { --cor1: #000; }`
- [ ] `:root { @cor1: #000; }` 

* **Dica:**    	
    1. <https://www.schoolofnet.com/canal-direto-ao-ponto/variaveis-no-css/>

**Nível:** 2
 	
***

### Questão 3

Analise a frase abaixo e assinale verdadeiro ou falso.

"Quando o navegador não da suporte a uma determinada funcionalidade, como a variável CSS, podemos tentar encontrar um Polyfill, mas isso não garante 100% da resolução do nosso problema, temos sempre que avaliar caso a caso."

- [x] Verdadeiro
- [ ] Falso

* **Dica:**    	
    1. <https://www.schoolofnet.com/canal-direto-ao-ponto/variaveis-no-css/>

**Nível:** 2
 	
***

### Questão 4

Analise o código abaixo:

```css
:root {
    --cor1: #3e9a38;
    --cor2: #f5a649;
    --cor3: #29a3d5;
    --cor4: var(--cor1);
}

h1 {
    background-color: var(--cor4);
}
```

Qual seria a cor do background para a tag "h1"?

- [x] Seria a mesma que a cor 1, pois foi definida corretamente.
- [ ] Seria a mesma que a cor 3, pois foi a última a ser configurada.
- [ ] Seria preto, pois é a cor padrão adotada quando temos um erro de sintaxe.
- [ ] Não teria nenhuma cor, mas não teríamos nenhum erro.
- [ ] Não teria nenhuma cor e também teríamos um erro de sintaxe sendo informado.

* **Dica:**    	
    1. <https://www.schoolofnet.com/canal-direto-ao-ponto/variaveis-no-css/>

**Nível:** 3
 	
***

### Questão 5

Analise o código abaixo:

```css
:root {
    --cor1: green;
    --cor1: orange;
}

p {
    background-color: var(--cor1);
}
```

Qual seria a cor do background para a tag "h1"?

- [ ] Verde, pois definida primeiro.
- [x] Laranja, pois é possível sobrescrever a primeira atribuição.
- [ ] Seria preto, pois é a cor padrão adotada quando temos um erro de sintaxe.
- [ ] Não teria nenhuma cor, mas não teríamos nenhum erro.
- [ ] Não teria nenhuma cor e também teríamos um erro de sintaxe sendo informado.

* **Dica:**    	
    1. <https://www.schoolofnet.com/canal-direto-ao-ponto/variaveis-no-css/>

**Nível:** 3
 	
***