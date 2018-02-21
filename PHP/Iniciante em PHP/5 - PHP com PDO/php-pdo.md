# Questões

| Questões 1 - 7            | Questões 8 - 13             |
|---------------------------|-----------------------------|
| [Question 1 - Nível 1][1] | [Question 8 - Nível 3][11]  |  

[1]:#

***

### 1 Analise a frase abaixo e assinale verdadeiro ou falso.

"O PDO é uma extensão que já vem junto com a instalação do PHP."

- [x] Verdadeiro
- [ ] Falso

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-pdo/374>

**Nível:** 1
 	
***

### 2 Onde temos que ativar a extensão PDO para utilizar em nossos projetos?

- [ ] Diretamente com o código PHP.
- [ ] Utilizando Javascript.
- [ ] Devemos habilitar a extensão no MySQL, ou em outro serviço de banco de dados utilizado.
- [x] Devemos habilitar a extensão diretamente no PHP, através do arquivo php.ini.
- [ ] Nunca devemos nos preocupar pois a extensão sempre virá ativa.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-pdo/374>

**Nível:** 1
 	
***

### 3 Qual alternativa descreve melhor o PDO?

- [ ] Production Database Object é o significado da sigla PDO. 
- [ ] PHP Data Objects é o significado da sigla e serve para gerenciar aplicações sem banco de dados.
- [ ] PDO é uma extensão utilizada para gerenciar bancos de dados MySQL, em qualquer linguagem de programação.
- [x] PDO é uma classe, orientada a objetos, que possibilita, através de métodos, gravar, ler, apagar ou editar dados de um determinado banco.
- [ ] PDO é um tipo de servidor de banco de dados.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-pdo/374>

**Nível:** 1
 	
***

### 4 Por que é aconselhável o uso do PDO?

- [ ] O PDO é mais leve que as outras interfaces para acesso a banco de dados.
- [x] O PDO, além de ser seguro, fornece suporte à diversos drives de banco de dados, não apenas o MySQL. 
- [ ] O PDO é mais rápido que as demais interfaces, porém mais pesado e não deve ser utilizado para pequenos projetos.
- [ ] Por ter uma linguagem muito antiga ele funciona muito bem em todos os bancos atuais.
- [ ] Não existe nenhuma razão para o uso do mesmo, apenas por questão de escolha e por ser o mais famoso.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-pdo/374>

**Nível:** 1
 	
***

### 5 Qual alternativa está executando uma conexão com PDO de forma correta?

- [ ] `$conn = new \PDO("mysql", "host=localhost", "dbname=test_oo", "root", "root");`
- [ ] `$conn = new \PDO("mysql:host=localhost;dbname=test_oo", "root");`
- [ ] `$conn = \PDO("mysql:host=localhost;dbname=test_oo", "root", "root");`
- [x] `$conn = new \PDO("mysql:host=localhost;dbname=test_oo", "root", "root");`
- [ ] `$conn = new \PDO("mysql:host=localhost", "dbname=test_oo", "root", "root");`

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-pdo/374>

**Nível:** 1
 	
***

### 6 Analise o código abaixo e assinale a alternativa correta.

```php
<?php
try{
    $conn = new \PDO("mysql:host=localhost;dbname=test_oo", "root", "root");
    echo "Conectado!!!";
}catch(){
    echo "Error! Message:".$e->getMessage()." Code:".$e->getCode();
}
```

Para mostrar um erro mais simples e customizado ao usuário podemos utilizar o recurso try / catch, porém temos um erro no código acima. Qual seria este erro?

- [ ] Não é permitido imprimir uma mensagem de sucesso dentro do método try.
- [x] O código acima não passa a instância do PDOException para o método catch.
- [ ] Não podemos passar o host e o nome do banco em uma mesma string.
- [ ] O usuário e o password devem ser informado dentro de um mesmo array e não como duas strings.
- [ ] O recurso try e catch está com a estrutura completamente errada, pois eles são independentes um do outros.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-pdo/375>

**Nível:** 1
 	
***

### 7 Qual o papel do comando exec?

```php
<?php
$conn = new \PDO("mysql:host=localhost;dbname=test_oo", "root", "root");
$query = "INSERT INTO products (name , description) VALUES ('eBook', 'Learn Javascript')";
$result = $conn->exec($query);
print_r($result);
```

- [ ] Ele apenas prepara um comando, para depois algum outro método executar.
- [ ] Ele serve apenas para inserir dados no banco.
- [ ] O comando exec apenas executa buscas no banco, ou seja, não podemos adicionar, nem editar nenhum elemento com o mesmo.
- [x] Tem o simples papel de executar um comando no banco de dados, através de uma instância PDO.
- [ ] O comando exec faz a conexão com o banco de dados.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-pdo/376>

**Nível:** 1
 	
***

### 8 Analise o código abaixo.

```php
<?php
$conn = new \PDO("mysql:host=localhost;dbname=test_oo", "root", "root");
$query = "SELECT * FROM products";
$stmt = $conn->query($query);
$result = $stmt->fetchAll();
print_r($result);
```

Qual a função do comando query?

- [ ] Atualizar os dados e buscar posteriormente.
- [x] Apenas buscas os dados no banco, de acordo com a query determinada.
- [ ] Criar um elemento e depois listá-lo.
- [ ] Fazer uma busca de todos os elementos, independente da query informada.
- [ ] Desconectar o banco após uma busca de dados.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-pdo/378>

**Nível:** 1
 	
***

### 











