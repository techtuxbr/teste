# Questões

| Questões 1 - 2            | Questões 3 - 4            | Questões 5 - 5            |
|---------------------------|---------------------------|---------------------------|
| [Question 1 - Nível 2][1] | [Question 3 - Nível 2][3] | [Question 5 - Nível 3][5] |  
| [Question 2 - Nível 2][2] | [Question 4 - Nível 3][4] |                           |  
  
                     
***

[1]:#questão-1
[2]:#questão-2
[3]:#questão-3
[4]:#questão-4
[5]:#questão-5

***

### Questão 1 

O que é o Parallax?

- [x] É o recurso de mover objetos na tela do usuário, dando a impressão de estarem em planos diferentes, ou seja, com profundidades diferentes.
- [ ] É um plugin CSS que faz animações.
- [ ] É uma forma totalmente atualizada para de trabalhar com vídeos.
- [ ] É um recuros de animação para mover objetos em tempos diferentes, mas no mesmo plano.
- [ ] É uma nova IDE para desenvolvimento CSS.

* **Dica:**    	
    1. <https://www.schoolofnet.com/canal-direto-ao-ponto/aplicando-efeito-parallax-com-css/>

**Nível:** 2
 
***

### Questão 2

Analise a frase abaixo e assinale verdadeiro ou falso.

"O efeito Parallax é muito interessante para ser utilizado em layouts modernos, porém só pode ser aplicado com o framework Bootstrap e em tags "p" do HTML."

- [ ] Verdadeiro
- [x] Falso

* **Dica:**    	
    1. <https://www.schoolofnet.com/canal-direto-ao-ponto/aplicando-efeito-parallax-com-css/>

**Nível:** 2
 
***

### Questão 3

Seria possível criar um efeito Parallax simples, sem nenhuma interferência do Javascript?

- [x] Sim
- [ ] Não

* **Dica:**    	
    1. <https://www.schoolofnet.com/canal-direto-ao-ponto/aplicando-efeito-parallax-com-css/>

**Nível:** 2
 
***

### Questão 4

Analise o código abaixo:

```
1  header::before {
2     bottom: 0;
3     left: 0;
4     right: 0;
5     top: 0;
6     position: absolute;
7     content: "";
8     background-image: url("../sunset.jpg");
9     z-index: -1;
10    background-size: cover;
11    transform-origin: center center 0;
12    transform: translateZ(-1px) scale(2);
13    min-height: 100vh;
14 }
```

Quais são as linhas mais importantes para o efeito de Parallax, utilizando somente CSS?

- [ ] 6 e 9
- [ ] 9 e 10
- [x] 11 e 12
- [ ] 11 e 13
- [ ] 12 e 13

* **Dica:**    	
    1. <https://www.schoolofnet.com/canal-direto-ao-ponto/aplicando-efeito-parallax-com-css/>

**Nível:** 3
 
***

### Questão 5

Qual o efeito que o código abaixo causa para que o Parallax seja efetivado?

```css
transform-origin: center center 0;
transform: translateZ(-1px) scale(2);
```

- [ ] Fixa a imagem ao fundo.
- [ ] Atribui um tempo maior de duração para a renderização.
- [ ] Aplica um efeito de delay ocultamente.
- [x] Aplica um efeito 3D no eixo Z, fazendo com que o elemento pareça estar em outro plano e mover-se mais lentamente.
- [ ] O código acima não tem efeito direto no Parallax. 

* **Dica:**    	
    1. <https://www.schoolofnet.com/canal-direto-ao-ponto/aplicando-efeito-parallax-com-css/>

**Nível:** 3
 
***