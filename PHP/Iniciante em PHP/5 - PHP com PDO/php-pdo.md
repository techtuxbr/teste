# Questões

| Questões 1 - 6            | Questões 7 - 12             | Questões 13 - 17            |
|---------------------------|-----------------------------|-----------------------------|
| [Question 1 - Nível 1][1] | [Question 7 - Nível 2][7]   | [Question 13 - Nível 3][13]  |  
| [Question 2 - Nível 1][2] | [Question 8 - Nível 2][8]   | [Question 14 - Nível 3][14]  |  
| [Question 3 - Nível 1][3] | [Question 9 - Nível 2][9]   | [Question 15 - Nível 3][15]  |  
| [Question 4 - Nível 1][4] | [Question 10 - Nível 2][10] | [Question 16 - Nível 3][16]  |  
| [Question 5 - Nível 1][5] | [Question 11 - Nível 2][11] | [Question 17 - Nível 3][17]  |  
| [Question 6 - Nível 2][6] | [Question 12 - Nível 2][12] |                              |  

[1]:#1-analise-a-frase-abaixo-e-assinale-verdadeiro-ou-falso
[2]:#2-onde-temos-que-ativar-a-extensão-pdo-para-utilizar-em-nossos-projetos
[3]:#3-qual-alternativa-descreve-melhor-o-pdo
[4]:#4-por-que-é-aconselhável-o-uso-do-pdo
[5]:#5-qual-alternativa-está-executando-uma-conexão-com-pdo-de-forma-correta
[6]:#6-analise-o-código-abaixo-e-assinale-a-alternativa-correta
[7]:#7-qual-o-papel-do-comando-exec
[8]:#8-analise-o-código-abaixo
[9]:#9-caso-não-seja-informado-nenhum-parâmetro-para-o-comando-fetchall-qual-o-padrão-adotado
[10]:#10-qual-a-diferença-entre-fetchall-e-fetch
[11]:#11-analise-o-código-abaixo-e-assinale-a-alternativa-correta
[12]:#12-analise-o-código-abaixo
[13]:#13-o-que-seria-o-sql-injection
[14]:#14-qual-métodos-podemos-utilizar-para-resolver-o-problema-do-sql-injection
[15]:#15-qual-a-função-do-método-bindvalue
[16]:#16-analise-o-código-abaixo-e-assinale-a-alternativa-correta
[17]:#17-analise-o-código-abaixo-e-assinale-a-alternativa-correta

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

**Nível:** 2
 	
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

**Nível:** 2
 	
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

**Nível:** 2
 	
***

### 9 Caso não seja informado nenhum parâmetro para o comando fetchAll, qual o padrão adotado?

- [ ] PDO::FETCH_ASSOC 
- [x] PDO::FETCH_BOTH
- [ ] PDO::FETCH_BOUND
- [ ] PDO::FETCH_CLASS
- [ ] PDO::FETCH_OBJ

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-pdo/377>

**Nível:** 2
 	
***

### 10 Qual a diferença entre fetchAll e fetch?

- [x] O fetchAll, mesmo que tenha apenas um resultado, retornará sempre um array e o fetch não.
- [ ] O fetchAll não precisa de uma query, enquando o fetch sempre presisa.
- [ ] O fetchAll sempre trará todos os resultados, independente da query executada, o fetch não.
- [ ] O fetchAll é mais rápido que o fetch.
- [ ] Não existem nenhuma diferença entre ambos.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-pdo/379>

**Nível:** 2
 	
***

### 11 Analise o código abaixo e assinale a alternativa correta.

```php
<?php
$conn = new \PDO("mysql:host=localhost;dbname=test_oo", "root", "root");
$query = "SELECT * FROM products WHERE id = 3";
$stmt = $conn->query($query);
$result = $stmt->fetch(PDO::FETCH_CLASS);
print_r($result);
```

Analisando o código acima o que você pode concluir?

- [ ] Teremos o elemento com id igual a três sendo exibido no formato PDO::FETCH_BOTH, pois é o modelo padrão de exibição.
- [ ] Teremos um erro, pois o fetch não aceita parâmetros de formatação. 
- [ ] Teremos todos os elementos listados, pois o comando fetch ignora a query informada anteriormente.
- [ ] Teremos o elemento com id igual a três sendo exibido no formato de objeto, pois o PDO::FETCH_CLASS é similar ao PDO::FETCH_OBJ.
- [x] Teremos um erro, pois o método fetch não funciona com o parâmetro PDO::FETCH_CLASS, somente com PDO::FETCH_OBJ.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-pdo/379>

**Nível:** 2
 	
***

### 12 Analise o código abaixo.

```php
<?php
$conn = new \PDO("mysql:host=localhost;dbname=test_oo", "root", "root");
$query = "SELECT * FROM products ORDER BY id ASC";

foreach ($conn->query($query) as $product){
    echo $product['name'] . "<br>";
}
```

Seria possível executar uma iteração, com foreach, em todos os resultados diretamente, sem acionar o comando query?

- [x] Sim
- [ ] Não

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-pdo/380>

**Nível:** 2
 	
***

### 13 O que seria o SQL Injection?

- [ ] É quando passamos um parâmetro para o comando exec.
- [ ] Quando injetamos um SQL para o comando query fazer a busca no banco de dados.
- [x] É uma forma que o usuário tem de executar comandos SQL através de brechas de segurança no código.
- [ ] Seria uma forma de alterar uma busca antes de que ela seja executada.
- [ ] É Apenas um outro termo utilizado para as operações executadas pelo PDO.

* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-pdo/381>

**Nível:** 3
 	
***

### 14 Qual métodos podemos utilizar para resolver o problema do SQL Injection?

- [ ] query
- [ ] execute
- [ ] make
- [x] prepare
- [ ] prep_first
 
* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-pdo/382>

**Nível:** 3
 	
***

### 15 Qual a função do método bindValue?

```php
<?php
$query = "INSERT INTO products (name, description) VALUES (:name, :description)";

$stmt = $conn->prepare($query);

$stmt->bindValue(':name', 'eBook');
$stmt->bindValue(':description', 'Learning PHP');

$stmt->execute();
```

- [x] Alimentar, com segurança, os dados omitidos na query, preparando o fluxo para o comando execute.
- [ ] Inserir os dados no bando de dados diretamente sem o comando execute.
- [ ] Acionar o comando execute diretamente.
- [ ] Tem a mesma função do método prepare.
 
* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-pdo/386>

**Nível:** 3
 	
***

### 16 Analise o código abaixo e assinale a alternativa correta.

```php
<?php
public function update()
{
    $query = "Update `products` set `name`=?, `desc`=? WHERE `id`=?";
    $stmt = $this->db->prepare($query);
    $stmt->bindValue(3,$this->product->getId());
    $stmt->bindValue(2,$this->product->getDesc());
    $stmt->bindValue(1,$this->product->getName());
    $ret = $stmt->execute();
    return $ret;
}
```

Vejam que a ordem dos bindValues acima está do maior para o menor. O que acontece quando alteramos a ordem?

- [ ] Teremos um erro, pois é obrigatório o uso da ordem crescente.
- [ ] Teremos o código funcionando, porém teremos que alterar a ordem da query.
- [x] Teremos o mesmo resultado independente da ordem que os binds estiverem, pois o PDO reconhece a ordem da query.
 
* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-pdo/387>

**Nível:** 3
 	
***

### 17 Analise o código abaixo e assinale a alternativa correta.

```php
<?php
public function update()
{
    $query = "Update `products` set `name`=?, `desc`=? WHERE `id`=?";
    $stmt = $this->db->prepare($query);
    $stmt->bindValue(2,'valor 2');
    $stmt->bindValue(3,'valor 3');
    $stmt->bindValue(1,'valor 1');
    $ret = $stmt->execute();
    return $ret;
}
```

Qual alternativa representa a relação correta entre os números e os elementos da query?

- [ ] 1: id, 2: desc e 3: name
- [ ] 1: name, 2: id e 3: desc
- [x] 1: name, 2: desc e 3: id
- [ ] 2: name, 3: desc e 1: id
- [ ] 2: id, 3: desc e 1: name
 
* **Dica:**    	
    1. <https://www.schoolofnet.com/curso-php-com-pdo/387>

**Nível:** 3
 	
***