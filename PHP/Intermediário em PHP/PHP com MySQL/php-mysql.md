# Questões

| Questões 1 - 10             | Questões 11 - 20            | Questões 21 - 29            |
|-----------------------------|-----------------------------|-----------------------------|
| [Question 1 - Nível 1][1]   | [Question 11 - Nível 1][11] | [Question 21 - Nível 3][21] |  
                         

[1]:#

***

### 1 Qual o programa que devemos instalar para conseguir trabalhar com MySQL em nossa máquina?

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-com-mysql/361>

Resp.: MySQL Community Server

**Nível:** 1

***

### 2 Qual o arquivo que devemos configurar para integrar o PHP com o MySQL?

- [ ] config.ini
- [ ] ini.php
- [x] php.ini
- [ ] php.config
- [ ] php.init

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-com-mysql/362>

**Nível:** 1

***

### 3 Com qual comando podemos testar a conexão com algum banco de dados?

- [ ] `new mysql('host', 'username', 'passwd', 'dbname');`
- [ ] `new mysqli('username', 'passwd', 'dbname');`
- [ ] `new sqli('host', 'username', 'passwd', 'dbname');`
- [ ] `new sql('host', 'username', 'passwd', 'dbname');`
- [x] `new mysqli('host', 'username', 'passwd', 'dbname');`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-com-mysql/363>

**Nível:** 1

***

### 4 Qual a desvantagem do mysqli em relação ao PDO?

- [ ] O mysqli só trabalha com versões anteriores à 5.0 enquanto o PDO trabalha com as mais atuais.
- [ ] O mysqli é mais lento que o PDO.
- [x] O mysqli só trabalha com mysql enquanto o PDO trabalha com outros tipos de bancos.
- [ ] O mysqli é menos seguro que o PDO.
- [ ] O mysqli não pode ser utilizado com PHP enquanto o PDO pode.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-com-mysql/364>

**Nível:** 1

***

### 5 Analise o código abaixo:

```php
<?php
@$mysqli = new mysqli("localhost", "root", "root", "company");

if(mysqli_connect_errno()){
    echo "Connection failed (" . $mysqli->connect_errno . ") - " . $mysqli->connect_error;
    exit;
}

$sql = "SELECT * FROM clients";

$query = $mysqli->query($sql);

while($data = $query->fetch_assoc()){
    echo $data['name'] . '<br>';
}
?>
```

Acima temos uma conexão com o banco de dados de uma empresa, onde estamos buscando todos os clientes da mesma.

Na busca executada no banco, o que significa o asterísco e o que representa o nome clients?

- [ ] selecionar somente o primeiro e nome da tabela
- [x] selecionar todos os campos e nome da tabela
- [ ] selecionar apenas o último resultaldo e nome da tabela
- [ ] selecionar somente os ativos e nome do banco de dados
- [ ] selecionar somente os campos principais e nome do banco de dados

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-com-mysql/365>

**Nível:** 1

***

### 6 Qual a diferença entre fetch_all e fetch_array?

- [x] O fetch_all trás todos os resultados, enquanto fetch_array trás apenas um.
- [ ] O fetch_all trás um resultado apenas, enquanto fetch_array trás todos. 
- [ ] O fetch_all permite iteração com o loop while enquanto o fetch_array não. 
- [ ] Não existe nenhuma diferença entre os dois tipos de busca, basta escolher qual lhe agrada mais.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-com-mysql/366>

**Nível:** 1

***

### 7 Encontre o erro no código abaixo.

```php
<?php
@$mysqli = new mysqli("localhost", "root", "root", "company");

if(mysqli_connect_errno()){
    echo "Connection failed (" . $mysqli->connect_errno . ") - " . $mysqli->connect_error;
    exit;
}

$sql = "SELECT * FROM clients";

// Indices da tabela do banco de dados
// [0] = id, [1] = name

$query = $mysqli->query($sql);
$data = $query->fetch_all(MYSQLI_NUM);

foreach($data as $value){
    echo $value["name"] . '<br>';
}
```

O código acima tenta fazer uma listagem de todos clientes, porém contém um erro.

A resposta deve conter o código correto para que tenhamos a listagem funcionando.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-com-mysql/366>
    2. Não precisa repetir a linha inteira, apenas o ponto do erro.

Resp.: `$value[1]` ou `[1]`

**Nível:** 1

***

### 8 Por que devemos utilizar o prepare ao invés de fazer cunsultas diretamente no banco de dados?

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-com-mysql/366>

Resp.: Evitar o sql injection
Resp.: Por segurança

**Nível:** 1

***

### 9 O que significa CRUD?

- [ ] Processo de autenticação de um sistema.
- [ ] Nome utilizado para funções de usuários de um sistema.
- [ ] Sigla para "Create Rules Using Database".
- [x] Sigla para todos os processos no banco de dados - "Create Read Update Delete".
- [ ] Sigla para processos de criação e atualização no banco de dados - "Create Update".

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-com-mysql/366>
    
**Nível:** 1

***

### 10 Qual método é responsável por retornar o id do item inserido no banco de dados?

- [ ] `$stmt->id_insert`
- [x] `$stmt->insert_id`
- [ ] `$stmt->get_id`
- [ ] `$stmt->insert_get_id`
- [ ] `$stmt->id_get`

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-com-mysql/368>
    
**Nível:** 1

***

### 11 Analise o código abaixo e assinale a alternativa correta.

```php
<?php
class User {
    public function insert(){
        $stmt = $this->db->stmt_init();
        $stmt->prepare("INSERT INTO user(name,email) VALUES(?,?)");
        $stmt->bind_param("ss",$this->name,$this->email);
        $stmt->execute();
        return $stmt->insert_id;
    }
}
```

Acima temos o método de inserção do nosso CRUD. Os símbolos de interrogação indicam o valor que será inserido e depois, no bind_param, temos que informar os tipos e os valores.

Qual dos tipos abaixo NÃO é permitido, de acordo com a documentação?

- [ ] i - integer
- [ ] d - double
- [ ] s - string
- [ ] b - boolean
- [x] a - array

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-com-mysql/368>
    2. <http://php.net/manual/en/mysqli-stmt.bind-param.php>
    
**Nível:** 1

***

### 12 Analise o código abaixo.

```php
<?php
class User {
	public function list($order = null){
	    $order = 'id ASC';
		if($order){
			$sql = "SELECT * FROM user ORDER BY {$order}";
		}else{
			$sql = "SELECT * FROM user";
		}		
		$query = $this->db->query($sql);
		return $query->fetch_all(MYSQLI_ASSOC);
	}
}
```

O programador tentou fazer com que o parâmetro de ordenação, da nossa classe de listagem, fosse dinâmico. Desta forma o usuário poderia escolher a ordem de listagem.

Analisando o código acima, você acredita que está correto e que é possível alterar a ordenação passando um parâmetro para o método list?

- [ ] Sim
- [x] Não

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-com-mysql/369>
    2. Não analise apenas a aula em si, mas o código como um todo. Em qualquer lugar pode haver um erro.
    
**Nível:** 1

***

### 13 Por que nos métodos de update e delete se faz necessário o uso da cláusula WHERE?

- [ ] Porque estas duas ações do CRUD só funcionam desta maneira.
- [ ] Não é necessário o uso, mas acabamos padronizando para deixar mais completo o código.
- [x] Precisamos informar o id para não apagar ou atualizar itens errados.
- [ ] O WHERE ajuda a ação ser finalizada mais rapidamente, porém não é necessário.
- [ ] Não existe uma regra para o uso do WHERE.

* **Dica:**
    1. <https://www.schoolofnet.com/curso-php-com-mysql/370>
    2. <https://www.schoolofnet.com/curso-php-com-mysql/371>
    
**Nível:** 1

***