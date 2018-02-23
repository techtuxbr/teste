# Questões

| Questões 1 - 7            | Questões 8 - 13             |
|---------------------------|-----------------------------|
| [Question 1 - Nível 1][1] | [Question 8 - Nível 2][8]   |  
| [Question 2 - Nível 1][2] | [Question 9 - Nível 2][9]   |  
| [Question 3 - Nível 1][3] | [Question 10 - Nível 2][10] |  
| [Question 4 - Nível 1][4] | [Question 11 - Nível 3][11] |  
| [Question 5 - Nível 1][5] | [Question 12 - Nível 3][12] |  
| [Question 6 - Nível 1][6] | [Question 13 - Nível 3][13] |  
| [Question 7 - Nível 2][7] |                             |  

[1]:#1-o-que-é-o-composer
[2]:#2-qual-o-arquivo-de-configuração-que-o-composer-utilizar-para-gerenciar-os-pacotes
[3]:#3-qual-o-arquivo-que-temos-que-ter-dentro-dos-projetos-para-executar-todos-os-comandos-do-composer
[4]:#4-analise-a-frase-abaixo-e-assinale-verdadeiro-ou-falso
[5]:#5-qual-alternativa-representa-um-comando-de-instalação-de-pacotes-no-composer
[6]:#6-qual-alternativa-representa-um-comando-de-atualização-de-pacotes-no-composer
[7]:#7-qual-alternativa-representa-um-comando-de-instalação-que-ignora-os-pacotes-de-desenvolvimento
[8]:#8-em-qual-propriedade-do-arquivo-composerjson-devem-estar-as-dependências-do-projeto-ou-do-pacote
[9]:#9-como-o-composer-faz-a-instalação-das-dependências
[10]:#10-qual-o-nome-da-pasta-que-o-composer-utiliza-para-centralizar-os-pacotes-no-projeto
[11]:#11-qual-a-função-do-arquivo-composerlock
[12]:#12-referente-a-criação-de-pacotes-com-composer-qual-afirmativa-está-errada
[13]:#13-assinale-a-alternativa-correta-com-relação-aos-testes-em-seus-pacotes

***

### 1 O que é o composer?

- [ ] Um pacote de autoload.
- [ ] Um gerador de classes.
- [ ] Um gerador de código aleatório.
- [x] Um gerenciador de pacotes PHP.
- [ ] Um instalador de aplicações em terminal.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-composer/20>

**Nível:** 1

***

### 2 Qual o arquivo de configuração que o composer utilizar para gerenciar os pacotes?

- [ ] composer.php
- [ ] config.json
- [ ] composer.ini
- [ ] package.json 
- [x] composer.json

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-composer/21>

**Nível:** 1

***

### 3 Qual o arquivo que temos que ter, dentro dos projetos, para executar todos os comandos do composer?

- [ ] composer.json
- [x] composer.phar
- [ ] composer.php
- [ ] composer.bat
- [ ] composer.exe

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-composer/21>

**Nível:** 1

***

### 4 Analise a frase abaixo e assinale verdadeiro ou falso.

"O arquivo composer.json só pode ser criado pelo comando init. Caso o arquivo seja criado manualmente ele não funcionará."

- [ ] Verdadeiro
- [x] Falso

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-composer/21>

**Nível:** 1

***

### 5 Qual alternativa representa um comando de instalação de pacotes no composer?

- [ ] `php composer.phar run`
- [ ] `php composer.phar start`
- [x] `php composer.phar install`
- [ ] `php composer.phar load`
- [ ] `php composer.phar get`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-composer/22>

**Nível:** 1

***

### 6 Qual alternativa representa um comando de atualização de pacotes no composer?

- [ ] `php composer.phar renew`
- [ ] `php composer.phar restart`
- [ ] `php composer.phar reinstall`
- [ ] `php composer.phar reload`
- [x] `php composer.phar update`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-composer/22>

**Nível:** 1

***

### 7 Qual alternativa representa um comando de instalação que ignora os pacotes de desenvolvimento?

- [ ] `php composer.phar install --dev`
- [x] `php composer.phar install --no-dev`
- [ ] `php composer.phar install --nodev`
- [ ] `php composer.phar install --no_dev`
- [ ] `php composer.phar install no-dev`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-composer/22>

**Nível:** 2

***

### 8 Em qual propriedade, do arquivo composer.json, devem estar as dependências do projeto ou do pacote?

- [x] require
- [ ] require-dev
- [ ] authors
- [ ] scripts
- [ ] autoload

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-composer/23>

**Nível:** 2

***

### 9 Como o composer faz a instalação das dependências?

- [ ] Quando você instala o composer ele já possui todos os pacotes cadastrados, então ele só faz a ativação dos pacotes escolhidos.
- [ ] O composer não adiciona os arquivos do pacote ao projeto, apenas faz um link simbólico para o repositório. 
- [ ] O composer cria os arquivos em tempo real, de acordo com algumas regras internas.
- [x] O composer faz um clone do pacote através de um repositório central. 
- [ ] O composer apenas solicita uma instalação, para o proprietário do pacote, que precisa autorizar a instalação do mesmo.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-composer/22>

**Nível:** 2

***

### 10 Qual o nome da pasta que o composer utiliza para centralizar os pacotes no projeto?

- [ ]  app
- [ ]  packages
- [ ]  pack
- [x]  vendor
- [ ]  box

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-composer/22>

**Nível:** 2

***

### 11 Qual a função do arquivo composer.lock?

- [ ]  O composer.lock é um arquivo que bloqueia a reinstalação dos pacotes já instalados.
- [ ]  O composer.lock bloqueia o comando de update.
- [ ]  O composer.lock bloqueia os comandos install e update.
- [x]  Servir de histório de pacotes instalados e guardar as exatas versões para evitar conflitos em futuras instalações do projeto.
- [ ]  Não tem função nenhuma para o projeto ou para o composer, se trata apenas de um arquivo a mais que poderia ser ignorado.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-composer/22>
    2. <https://getcomposer.org/doc/01-basic-usage.md#installing-with-composer-lock>

**Nível:** 3

***

### 12 Referente a criação de pacotes com composer, qual afirmativa está ERRADA?

- [ ]  Preciso ter uma conta no Github para vincular o código fonte ao repositório do composer.
- [ ]  Preciso ter uma conta no site "https://packagist.org/" para subir o pacote.
- [x]  Precisamos pagar uma conta Premium para conseguir subir um pacote e disponibilizá-lo.
- [ ]  Preciso executar uma configuração no Github para que o pacote seja atualizado automaticamente a cada push enviado.
- [ ]  O nosso pacote pode ter outros pacotes como dependência.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-composer/25>

**Nível:** 3

***

### 13 Assinale a alternativa correta com relação aos testes em seus pacotes?

- [ ] O uso é obrigatório para garantir a qualidade do seu código, caso não aplique os testes seu pacote é bloqueado.
- [ ] Não faz diferença nenhuma, os testes só vão deixar seu pacote mais pesado.
- [ ] Os testes devem sempre fazer parte dos pacotes e devem estar na pasta raiz do mesmo.
- [ ] Testes são obrigatórios e devemos sempre utilizar o PHPunit, não podemos utilizar nenhuma outra biblioteca de teste.
- [x] Não é obrigatória a aplicação de testes, mas é altamente recomendável para garantir a qualidade do seu pacote.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-composer/27>

**Nível:** 3

***

