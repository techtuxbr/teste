# Questões

| Questões 1 - 5            | Questões 5 - 10             |
|---------------------------|-----------------------------|
| [Question 1 - Nível 1][1] | [Question 6 - Nível 2][6]   |  
| [Question 2 - Nível 1][2] | [Question 7 - Nível 3][7]   |  
| [Question 3 - Nível 1][3] | [Question 8 - Nível 3][8]   |  
| [Question 4 - Nível 2][4] | [Question 9 - Nível 3][9]   |  
| [Question 5 - Nível 2][5] | [Question 10 - Nível 3][10]   |  
                     
***

[1]:#Questão-1
[2]:#Questão-2
[3]:#Questão-3
[4]:#Questão-4
[5]:#Questão-5
[6]:#Questão-6
[7]:#Questão-7
[8]:#Questão-8
[9]:#Questão-9
[10]:#Questão-10

***

### Questão 1

O padrão MVC foi criado na década de 70 com qual objetivo?

- [ ] Vender softwares que implementassem este padrão. 
- [ ] Vender cursos de programação para ensinar o novo padrão e movimentar o mercado.
- [ ] Manter o PHP vivo, pois estava perdendo a força.
- [x] Organizar aplicações e manter um padrão de qualidade de código.
- [ ] Não existia nenhum motivo para a criação, apenas um novo padrão que modificava um pouco a maneira de programar. 

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-mvc/346>

**Nível:** 1
 	
***

### Questão 2

Qual o significado de cada sigla do MVC?

- [ ] Moving, View e Creating
- [x] Model, View e Controller
- [ ] Moving, View e Controller
- [ ] Model, View e Creating
- [ ] Model, View e CRUD

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-mvc/346>

**Nível:** 1
 	
***

### Questão 3

Qual a sequência de operação mais completa do MVC?

- [ ] model -> controller -> view
- [x] controller -> model -> controller -> view
- [ ] controller -> view
- [ ] model -> view -> controller
- [ ] model -> view -> model -> controller

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-mvc/346>
    2. Tente imaginar uma busca no banco de dados, por exemplo, para ter um cenário mais completo, utilizando os 3 recursos.

**Nível:** 1
 	
***

### Questão 4

Por que o MVC é importante?

- [x] Separa as responsabilidades tornando seu sistema mais consistente e organizado.
- [ ] Porque o MVC sempre será o melhor e mais utilizado método de criação de aplicações.
- [ ] Porque o método facilita o desenvolvimento de aplicação por não separar em camadas.
- [ ] O MVC é importante porque não exige conhecimento dos desenvolvedores, tornando-se uma forma fácil de desenvolver aplicações.
- [ ] O MVC não tem importância no desenvolvimento de aplicação e este padrão não é indicado.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-mvc/346>

**Nível:** 2
 	
***

### Questão 5

Por que o composer é importante na criação de um framework MVC?

- [ ] Sem o composer não seria possível criar um sistema de rotas.
- [ ] Sem o composer seria possível criar um framework pois não teríamos recursos suficientes.
- [ ] O composer criar toda estrutura de pastas do nosso framework, por este motivo ele é muito importante.
- [x] O composer gerencia todos pacotes de forma fácil, além de rotear todas as classes com o recurso de autoload.
- [ ] O composer não tem importância nenhuma, apenas uma perda de tempo, uma vez que poderíamos fazer tudo do zero.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-mvc/348>

**Nível:** 2
 	
***

### Questão 6 

Por que as rotas são importantes na criação de um framework e para a estrutura MVC?

- [ ] As rotas é que definem qual controller é mais importante dentro de um sistema MVC, defininindo a hierarquia de actions.
- [ ] As rotas são responsáveis por toda persistência de informações no banco de dados, utilizando o MVC.
- [ ] As rotas fazem com que o usuário acesse o model diretamente.
- [x] As rotas direcionam as requisições para o controller e a action correspondente, fazendo com que o MVC funcione corretamente.
- [ ] As rotas não tem importância nenhuma para um sistema em MVC.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-mvc/349>
    2. <https://www.schoolofnet.com/curso-php-com-mvc/350>

**Nível:** 2
 	
***

### Questão 7 

Por que, em um framework MVC, geralmente existe a abstração das classes de rota e controller?

- [ ] Não tem um motivo exato, a abstração acaba sendo apenas uma forma de organizar e aumentar o código.
- [x] O objetivo da abstração é facilitar a criação de rotas e controllers, de acordo com a necessidade do usuário, sempre mantendo o funcionamento correto.
- [ ] A abstração deixa o código mais pesado e não tem ação direta ao framework.
- [ ] A abstração dificulta a vida do usuário do framework, uma vez que o mesmo tem que seguir um padrão pré-estabelecido.
- [ ] A abstração serve apenas para seguir um padrão antigo de criação de frameworks.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-mvc/351>
    2. <https://www.schoolofnet.com/curso-php-com-mvc/354>

**Nível:** 3
 	
***

### Questão 8 

Qual destes NÃO fere a arquitetura MVC?

- [ ] Acoplar HTML com a camada Model, já que isto facilita a integração das camadas.
- [ ] A camada Model receber as requisições HTTP, já que isto facilita a manipulação dos dados.
- [x] Tornar os controllers interceptores/intermediários no MVC, já que isto facilita a comunicação entre as views e os models.
- [ ] Fazer os controllers invocarem operações ao banco de dados diretamente, já que isto facilita a construção da aplicação.
- [ ] Enviar requisição diretamente para a camada Model para facilitar a busca no banco de dados e diminuir o caminho da resposta.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-mvc/346>

**Nível:** 3
 	
***

### Questão 9 

Para consolidar os conhecimentos analise as afirmações abaixo.

1. O MODEL representa as regras de negócio de um sistema, bem como é responsável pela atualização dos dados quando necessário.

2. A VIEW acessa os dados do sistema através do MODEL diretamente, sem passar por nenhum pré-direcionamento, e especifica como esses dados devem ser apresentados.

3. O CONTROLLER é acessado de acordo com a rota acionada podendo ou não acionar o MODEL, que por sua vez, pode ou não acessar o banco de dados para retornar um resultado para o CONTROLLER que enviará um resultado para a VIEW.

4. É permitido a criação de apenas uma única VIEW para cada entidade do sistema.

Quais afirmativas estão corretas?

- [ ] 1, 2 e 3
- [x] 1 e 3
- [ ] 2, 3 e 4
- [ ] 1 e 2 
- [ ] Todas estão corretas

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-mvc/346>

**Nível:** 3
 	
***

### Questão 10 

Quando falamos em exibição de páginas aos usuários e classes que direcionam o fluxo da aplicação MVC, qual camadas, do padrão MVC, estamos falando respectivamente?

- [ ] Controller e Model
- [ ] Controller e View
- [x] View e Controller
- [ ] Model e View
- [ ] View e Model

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-mvc/346>
    2. Fique atento a ordem das respostas.

**Nível:** 3
 	
***