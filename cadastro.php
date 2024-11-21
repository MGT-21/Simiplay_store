<?php
session_start(); // Inicia a sessão para exibir mensagens de feedback

// Conectar ao banco de dados
function connectDb() {
    return new SQLite3('db.db');
}

// Função para criar a tabela "users" caso não exista
function createTable($db) {
    $db->exec('CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY AUTOINCREMENT, nome VARCHAR(80), username VARCHAR(50) UNIQUE, password VARCHAR(255))');
}

// Função para verificar se um usuário já existe
function userExists($db, $username) {
    $stmt = $db->prepare("SELECT COUNT(*) as count FROM users WHERE username = :username");
    $stmt->bindValue(':username', $username, SQLITE3_TEXT);
    $result = $stmt->execute()->fetchArray();
    return $result['count'] > 0;
}

// Função para inserir um usuário na tabela "users"
function insertUser($db, $nome, $username, $password) {
    if (!userExists($db, $username)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash da senha
        $stmt = $db->prepare("INSERT INTO users (nome, username, password) VALUES (:nome, :username, :password)");
        $stmt->bindValue(':nome', $nome, SQLITE3_TEXT);
        $stmt->bindValue(':username', $username, SQLITE3_TEXT);
        $stmt->bindValue(':password', $hashedPassword, SQLITE3_TEXT);
        $stmt->execute();
        return "Usuário registrado com sucesso.";
    } else {
        return "Erro: Nome de usuário já existe.";
    }
}

// Conexão com o banco de dados e criação da tabela
$db = connectDb();
createTable($db);

// Processar registro de novo usuário
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register_nome'], $_POST['register_username'], $_POST['register_password'])) {
    $nome = $_POST['register_nome'];
    $username = $_POST['register_username'];
    $password = $_POST['register_password'];
    $message = insertUser($db, $nome, $username, $password);
    $_SESSION['message'] = $message; // Armazena a mensagem na sessão
    header("Location: index.php"); // Redireciona para evitar reenvio do formulário ao atualizar
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imagens/ico pessoa.png" type="image/x-icon">
    <link rel="stylesheet" href="./bootstrap/css-bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/vars.css">
    <link rel="stylesheet" href="./style/forms.css">
    <title>Cadastro do Usuário</title>
</head>
<body class="container-fluid">
  
  <div class="row">
    <div class="conteudo-img col-sm-6 col-xl-8"></div>
  
    <form method="POST" class="col-sm-6 col-xl-4 py-5 px-4 d-flex flex-column justify-content-center">
      <img src="./imagens/logo.png" alt="">
      <h2 class="h2 mb-4 text-center">Cadastrar-se</h2>

        <?php
            // Exibe mensagem de feedback, se existir
        if (isset($_SESSION['message'])) {
            echo "<div class='alert alert-info'>" . $_SESSION['message'] . "</div>";
            unset($_SESSION['message']); // Limpa a mensagem após exibir
        }
        ?>

      <div class="form-group">
          <label for="exampleInputName" class="mb-2 h5">Nome</label>
          <input type="text" name="register_nome" class="form-control custom-input padding-1rem py-4" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Digite seu Nome aqui" required>
      </div>

      <div class="form-group">
          <label for="exampleInputEmail1" class="mb-2 h5">E-mail</label>
          <input type="email" name="register_username" class="form-control custom-input padding-1rem py-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email aqui" required>
      </div>
  
      <div class="form-group">
          <label for="exampleInputPassword1" class="mb-2 h5">Senha</label>
          <input type="password" name="register_password" class="form-control custom-input py-4" id="exampleInputPassword1" placeholder="Digite sua senha aqui" required>
      </div>
      
      <button type="submit" name="submit" class="btn btn-warning btn-block border-0 btn-lg custom-link">Cadastrar</button>
      <a href="index.php" class="d-block text-center text-white mb-0">já tenho conta</a> 
    </form>
    
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="./bootstrap/js-bootstrap/bootstrap.min.js"></script>
</body>
</html>
