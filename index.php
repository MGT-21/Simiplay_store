<?php
session_start(); // Inicia a sessão para gerenciar a autenticação do usuário

function connectDb() {
    return new SQLite3('db.db');
}

// Função para autenticar o usuário
function authenticateUser($db, $username, $password) {
    $stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindValue(':username', $username, SQLITE3_TEXT);
    $result = $stmt->execute()->fetchArray();

    // Verifica se o usuário existe e se a senha está correta
    if ($result && password_verify($password, $result['password'])) {
        $_SESSION['username'] = $result['username']; // Armazena o nome do usuário na sessão
        return true; // Autenticação bem-sucedida
    } else {
        return false; // Falha na autenticação
    }
}

// Conexão com o banco de dados
$db = connectDb();

// Processa o login quando o formulário é enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login_username'], $_POST['login_password'])) {
    $username = $_POST['login_username'];
    $password = $_POST['login_password'];

    if (authenticateUser($db, $username, $password)) {
        header("Location: home.php"); // Redireciona para a página inicial após o login
        exit;
    } else {
        $_SESSION['message'] = "E-mail ou senha incorretos!"; // Mensagem de erro
    }
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
    <title>Login page</title>
</head>
<body class="container-fluid">
  
  <div class="row">
    <div class="conteudo-img col-sm-6 col-xl-8">
    </div>
  
    <form method="POST" action="index.php" class="col-sm-6 col-xl-4 py-5 px-4 d-flex flex-column justify-content-center">
      
      <?php
        // Exibe mensagem de feedback, se existir
        if (isset($_SESSION['message'])) {
            echo "<div class='alert alert-danger text-center'>" . $_SESSION['message'] . "</div>";
            unset($_SESSION['message']); // Limpa a mensagem após exibir
        }
      ?>

      
      <img src="./imagens/logo.png" alt="">
      <h2 class="h2 mb-4 text-center">Login</h2>
      <div class="form-group">
        <label for="exampleInputEmail1" class="mb-2 h5">E-mail</label>
        <input type="email" name="login_username" class="form-control custom-input padding-1rem py-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email aqui" required>
      </div>
  
      <div class="form-group">
        <label for="exampleInputPassword1" class="mb-2 h5">Senha</label>
        <input type="password" name="login_password" class="form-control custom-input py-4" id="exampleInputPassword1" placeholder="Digite sua senha aqui" required>
      </div>
  
      <div class="form-group custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheck1">
        <label class="custom-control-label" for="customCheck1">lembrar de mim</label>
      </div>
      
      <button type="submit" class="btn btn-warning btn-block border-0 btn-lg custom-link">Log in</button>

      <a type="button" class="btn btn-outline-warning btn-lg" href="cadastro.php">cadastrar-se</a>

      <a href="" class="d-block text-center text-white mb-0 custom-outline-link">Esqueci minha senha</a>      
      

    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="./bootstrap/js-bootstrap/bootstrap.min.js"></script>
</body>
</html>
