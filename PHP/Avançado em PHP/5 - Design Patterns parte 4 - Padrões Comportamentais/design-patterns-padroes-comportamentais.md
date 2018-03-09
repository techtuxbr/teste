# Questões

| Questões 1 - 5            | Questões 5 - 10             | Questões 11 - 15            |
|---------------------------|-----------------------------|-----------------------------|
| [Question 1 - Nível 1][1] | [Question 6 - Nível 1][6]   | [Question 11 - Nível 2][11] |
| [Question 2 - Nível 3][2] | [Question 7 - Nível 1][7]   | [Question 12 - Nível 1][12] |
| [Question 3 - Nível 1][3] | [Question 8 - Nível 1][8]   | [Question 13 - Nível 1][13] |
| [Question 4 - Nível 3][4] | [Question 9 - Nível 2][9]   | [Question 14 - Nível 1][14] |
| [Question 5 - Nível 2][5] | [Question 10 - Nível 2][10] | [Question 15 - Nível 1][15] |
                     
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

Os middlewares em sua íntegra implementam qual Design Pattern do GoF?

- [ ] Façade.
- [ ] Singleton.
- [ ] Observer.
- [x] Chains of responsibility.
- [ ] Factory.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-design-patterns-parte-4>

**Nível:** 1

***


### Questão 2

```php
<?php

class Authenticate
{
    protected $auth;

    public function __construct($auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, $next)
    {
        if ($this->auth->guest()) {
            throw \Exception("Você não está autenticado!");
        }
        return $next($request);
    }
}
```

O exemplo de código acima implementa um padrão de projetos muito utilizado nos Frameworks PHP da atualidade.

Marque a alternativa que se refere ao Design Pattern do GOF utilizado no exemplo acima.

- [ ] Façade.
- [ ] Singleton.
- [ ] Observer.
- [x] Chains of responsibility.
- [ ] Factory.
- [ ] Middleware.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-design-patterns-parte-4>

**Nível:** 3

***

### Questão 3

O Design Pattern que permite encadear os objetos receptores, passando a solicitação ao longo da cadeia até que um objeto a trate é chamado de:

- [ ] Façade.
- [ ] Singleton.
- [ ] Observer.
- [x] Chains of responsibility.
- [ ] Factory.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-design-patterns-parte-4>

**Nível:** 1

***


### Questão 4

Sobre o Design Pattern Chains of Responsibility, é correto afirmar:

- [ ] Fornece um acoplamento mais forte por evitar a associação explícita do remetente de uma solicitação ao seu receptor e dar a mais de um objeto a oportunidade de tratar a solicitação.
- [ ] São focados no relacionamento entre as classes e os objetos, também se preocupa em como eles são compostos.
- [x] Permite encadear os objetos receptores, passando a solicitação ao longo da cadeia até que um objeto a trate.
- [ ] É um padrão de projetos de software usado para encapsular a lógica de construção de um objeto.
- [ ] Serve para gerenciar toda a complexidade imposta pelas lógicas condicionais.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-design-patterns-parte-4>

**Nível:** 3

***

### Questão 5

Marque a alternativa que melhor descreve o pattern Command do GoF.

- [ ] Fornece um acoplamento mais fraco por evitar a associação explícita do remetente de uma solicitação ao seu receptor e dar a mais de um objeto a oportunidade de tratar a solicitação.
- [ ] É focado no relacionamento entre as classes e os objetos, também se preocupa em como eles são compostos.
- [ ] Permite encadear os objetos receptores, passando a solicitação ao longo da cadeia até que um objeto a trate.
- [ ] É um padrão de projetos de software usado para encapsular a lógica de construção de um objeto.
- [x] Permite encapsular um objeto e fornecer a outro uma forma de executar o método do objeto encapsulado de forma dinâmica.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-design-patterns-parte-4/3368>

**Nível:** 2

***

### Questão 6

O Design Pattern Interpreter pertence a qual grupo de padrões definidos pela GoF?

- [ ] Comportalmental.
- [ ] Estrutural.
- [ ] Criacional
- [ ] É um padrão de projetos de software usado para encapsular a lógica de construção de um objeto.
- [x] Permite encapsular um objeto e fornecer a outro uma forma de executar o método do objeto encapsulado de forma dinâmica.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-design-patterns-parte-4/3368>

**Nível:** 1

***

### Questão 7

"Podemos utilizar o pattern Interator para acessar os conteúdos de um objeto agregado sem expor a sua representação interna."

- [x] Verdadeiro
- [ ] Falso

* **Dica:**
    1. <https://www.schoolofnet.com/curso-design-patterns-parte-4/3372>

**Nível:** 1

***


### Questão 8

"Uma desvantagem do pattern Mediator é o fato dele promover um alto acomplamento ao permitir que os objetos se refiram uns aos outros explicitamente."

- [ ] Verdadeiro
- [x] Falso

* **Dica:**
    1. <https://www.schoolofnet.com/curso-design-patterns-parte-4/3374>

**Nível:** 1

***


### Questão 9

"Podemos utlizar o pattern Mediator quando um comportamento que está distribuído entre várias classes deveria ser customizável, ou adaptável, com excessiva especialização em subclasses."

- [ ] Verdadeiro
- [x] Falso

* **Dica:**
    1. <https://www.schoolofnet.com/curso-design-patterns-parte-4/3374>

**Nível:** 2

***

### Questão 10

Quando existe no projeto a necessidade de fazer com que um conjunto de objetos seja notificado e atualizado automaticamente após um determinado evento no sistema podemos utilizar qual padrão de projeto?

- [ ] Façade.
- [ ] Singleton.
- [x] Observer.
- [ ] Chains of responsibility.
- [ ] Factory.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-design-patterns-parte-4>

**Nível:** 2

***

### Questão 11

Marque a opção que corresponda ao padrão projetos que visa definir o esqueleto de um algoritmo em uma operação, postergando alguns passos para as subclasses, permitindo que as subclasses redefinam certos passos de um algoritmo mudando a estrutura do mesmo.

- [ ] Template Method.
- [ ] Façade.
- [ ] Singleton.
- [ ] Observer.
- [x] Nenhuma das alternativas.


* **Dica:**
    1. <https://www.schoolofnet.com/curso-design-patterns-parte-4/3384>

**Nível:** 2

***


### Questão 12

Qual padrão de projetos que permite definir uma nova operação sem mudar as classes dos elementos sobre os quais opera?

- [ ] Template Method.
- [ ] Façade.
- [ ] Singleton.
- [ ] Observer.
- [x] Visitor.


* **Dica:**
    1. <https://www.schoolofnet.com/curso-design-patterns-parte-4>

**Nível:** 1

***





