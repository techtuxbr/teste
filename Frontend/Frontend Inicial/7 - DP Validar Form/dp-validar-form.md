# Questões

| Questões 1 - 2            | Questões 3 - 4             | Questões 5 - 6            |
|---------------------------|----------------------------|---------------------------|
| [Question 1 - Nível 2][1] | [Question 3 - Nível 2][3]  | [Question 5 - Nível 2][5] |  
| [Question 2 - Nível 2][2] | [Question 4 - Nível 2][4]  | [Question 6 - Nível 2][6] |  

[1]:#1-qual-o-atributo-que-torna-qualquer-campo-input-obrigatórios
[2]:#2-analise-o-código-abaixo-e-assinale-a-alternativa-correta
[3]:#3-analise-a-frase-abaixo-e-assinale-verdadeiro-ou-falso
[4]:#4-caso-seja-necessário-estipular-um-padrão-de-dado-personalizado-qual-atributo-devemos-utilizar
[5]:#5-como-é-possível-validar-e-estilizar-um-campo-em-tempo-real-caso-o-campo-esteja-válido-ou-inválido
[6]:#6-analise-o-código-abaixo-e-assinale-a-alternativa-correta

***

### 1 Qual o atributo que torna qualquer campo input obrigatórios?

- [ ] require
- [x] required
- [ ] obligatory
- [ ] necessary
- [ ] important

* **Dica:**
    1. <https://www.schoolofnet.com/canal-direto-ao-ponto/validar-forms-html/>

**Nível:** 2

***

### 2 Analise o código abaixo e assinale a alternativa correta.

```html
<form action="#">
    <input type="text" required>
    <input type="email" required>
    <input type="submit" value="Enviar">
</form>
```

Imagine que estamos submetendo o formulário com os seguintes valores.

Campo de texto: Leonan
Campo de email: leonan.meusite.com.br

De acordo com seus conhecimentos assinale a alternativa correta.

- [ ] O formulário não será enviado, pois existe required em ambos.
- [ ] O formulário será enviado corretamente, pois estamos preenchendo os dois valores obrigatórios.
- [ ] Está tudo correto, pois mesmo se os campos estivessem vazios não teríamos problema de validação.
- [x] O formulário não será enviado, pois apesar dos campos estarem preenchidos, não temos um email válido.
- [ ] O formulário será enviado corretamente pois estamos aplicando apenas a validação required, se tivessemos aplicando validação de email teríamos um erro.

* **Dica:**
    1. <https://www.schoolofnet.com/canal-direto-ao-ponto/validar-forms-html/>

**Nível:** 2

***

### 3 Analise a frase abaixo e assinale verdadeiro ou falso.

"Com os novos recursos do HTML5 podemos validar número máximo, número mínimo e até mesmo formatos de url e email."

- [x] Verdadeiro
- [ ] Falso

* **Dica:**
    1. <https://www.schoolofnet.com/canal-direto-ao-ponto/validar-forms-html/>

**Nível:** 2

***

### 4 Caso seja necessário estipular um padrão de dado personalizado, qual atributo devemos utilizar?

- [ ] min
- [ ] max
- [x] pattern
- [ ] placeholder
- [ ] regex

* **Dica:**
    1. <https://www.schoolofnet.com/canal-direto-ao-ponto/validar-forms-html/>

**Nível:** 2

***

### 5 Como é possível validar e estilizar um campo, em tempo real, caso o campo esteja válido ou inválido?

- [ ] Só é possível utilizando Javascript junto com CSS.
- [x] Basta utilizar CSS e aplicar estilo aos seletores input e select nas propriedades required, valid e invalid. 
- [ ] Devemos criar eventos Javascript para assistir as alterações e somente depois estilizar.
- [ ] Precisamos utilizar a API, específica do navegador, para poder trabalhar com as validações visuais.
- [ ] Não é possível validar e estilizar visualmente ao mesmo tempo, temos que escolher uma ou outra opção.

* **Dica:**
    1. <https://www.schoolofnet.com/canal-direto-ao-ponto/validar-forms-html/>

**Nível:** 2

***

### 6 Analise o código abaixo e assinale a alternativa correta.

```html
<style>
    input:required, select:required {
        border: 1px solid red;
    }
    input:valid, select:valid {
        border: 1px solid green;
    }
    input:invalid, select:invalid {
        border: 1px solid red;
    }
</style>
    
<select required>
    <option value="" selected disabled>Selecione uma opção</option>
    <option value="1">1</option>
    <option value="2">2</option>
</select>
```

- [x] A validação visual funcionará, pois adicionamos uma opção inicial sem nenhum valor.
- [ ] O código acima não terá uma validação visual válida, pois não é possível este procedimento com campos do tipo select.
- [ ] A validação visual não funcionará porque estamos deixando o primeiro campo sem um valor válido.
- [ ] A validação visual não funcionará porque o primeiro elemento está selecionado e desabilitado.
- [ ] A validação visual não funcionará porque o primeiro elemento está desabilitado.

* **Dica:**
    1. <https://www.schoolofnet.com/canal-direto-ao-ponto/validar-forms-html/>

**Nível:** 2

***