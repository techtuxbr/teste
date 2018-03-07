# Questões

| Questões 1 - 5            | Questões 5 - 10             | Questões 11 - 15            |
|---------------------------|-----------------------------|-----------------------------|
| [Question 1 - Nível 1][1] | [Question 6 - Nível 1][6]   | [Question 11 - Nível 3][11] |
| [Question 2 - Nível 1][2] | [Question 7 - Nível 1][7]   | [Question 12 - Nível 1][12] |
| [Question 3 - Nível 2][3] | [Question 8 - Nível 1][8]   | [Question 13 - Nível 1][13] |
| [Question 4 - Nível 1][4] | [Question 9 - Nível 2][9]   | [Question 14 - Nível 1][14] |
| [Question 5 - Nível 1][5] | [Question 10 - Nível 2][10] | [Question 15 - Nível 1][15] |
                     
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

Considerando os princípios de SOLID, marque a opção que represente o código de melhor qualidade.

- [ ] ```php
    if($cor1 == $cor2){
        $result = true;
    }else if($cor1 != $cor2){
        $result = false;
    }
    return $result;
```
- [ ] ```php
    if($cor1 == $cor2){
        return true;
    }else if($cor1 != $cor2){
        return false;
    }
```
- [ ] ```php
    if($cor1 == $cor2){
        return true;
    }else{
        return false;
    }
```
- [ ] ```php
    if($cor1 != $cor2){
        return false;
    }else{
        return true;
    }
```
- [x] ```php
    if($cor1 == $cor2){
        return true;
    }
    return false;
```

* **Dica:**
    1. <https://www.schoolofnet.com/curso-solid-com-php/2844>

**Nível:** 1

***

### Questão 2

Qual o significado do princípio "SOLID" na orientação a objetos?

- [ ] SOLID é um princípio da orientação a objetos que ajuda a manter o código cada vez menor.
- [ ] SOLID é um dos princípios mais importantes que existe na orientação a objetos. Com esse princípio você poderá projetar classes menores, mais coesas e de mais fácil entendimento.
- [ ] SOLID é um acrônimo onde cada letra corresponde a um princípio: Single Responsability Principle, Open/Closed Principle, Liskov Substitution Principle, Interface Segregation Principle e Dependency Intervension Principle.
- [x] SOLID é um acrônimo onde cada letra corresponde a um princípio: Princípio da Responsabilidade Única, Princípio do Aberto Fechado, Príncipio da Substituição de Liskov, Princípio da Segregação de Interfaces e Princípio da Inversão de Dependências.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-solid-com-php/2844>

**Nível:** 1

***

### Questão 3 

O Princípio da Responsabilidade Única (SRP) do SOLID foi desenvolvido para evitar determinados problemas na coesão do nosso código. 

Marque a alternativa que NÂO indica eventuais problemas causados pela violação deste princípio.

- [ ] Dificuldade de compreensão e manutenção.
- [ ] Dificuldade de reuso.
- [ ] Com responsabilidades entrelaçadas em uma mesma classe, há uma grande chance de ao alterar uma dessas responsabilidades comprometer todas as outras classes.
- [x] Acoplamento baixo.
- [ ] Uma classe que tem um número excessivo de dependências fica mais sujeita à mudanças, em decorrência de alterações em outras classes.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-solid-com-php/2845> 

**Nível:** 2

***

### Questão 4 

As classes devem ter seu comportamento facilmente estendido quando necessário, por meio de herança, interface e composição. Ao mesmo tempo, não deve ser necessário alterar a própria classe para realizar pequenas mudanças.

O conceito acima está relacionado a qual princípio do SOLID?

- [ ] Princípio da Responsabilidade Única.
- [x] Princípio do Aberto Fechado.
- [ ] Príncipio da Substituição de Liskov.
- [ ] Princípio da Segregação de Interfaces.
- [ ] Princípio da Inversão de Dependências.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-solid-com-php/2845> 

**Nível:** 1

***

### Questão 5

Uma classe que extende de outra, não pode retornar resultados diferentes. Ambas devem retornar o mesmo tipo de dados herdados da classe pai.

O conceito acima está relacionado a qual princípio do SOLID?

- [ ] Princípio da Responsabilidade Única.
- [ ] Princípio do Aberto Fechado.
- [x] Príncipio da Substituição de Liskov.
- [ ] Princípio da Segregação de Interfaces.
- [ ] Princípio da Inversão de Dependências.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-solid-com-php/2847> 

**Nível:** 1

***

### Questão 6 

Qual princípio do SOLID diz que não devemos fazer com que uma classe dependa de uma classe final?

- [ ] Princípio da Responsabilidade Única.
- [ ] Princípio do Aberto Fechado.
- [x] Príncipio da Substituição de Liskov.
- [ ] Princípio da Segregação de Interfaces.
- [ ] Princípio da Inversão de Dependências.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-solid-com-php/2852> 

**Nível:** 1

***