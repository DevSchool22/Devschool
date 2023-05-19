<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/gpt.css">
  <title>Perguntas e respostas - CHATGPT</title>
</head>
<body>
  <div class="box-questions">
    <div class="header">
      <p>Perguntas e respostas - CHATGPT</p>
    </div>
    <p id="status"></p>
    <div id="history">
      <!-- Aqui vai o chat gerado conforme as respostas -->
    </div>
    <div class="footer">
      <input type="text" id="message-input" placeholder="Pergunte aqui...">
      <button class="btn-submit" id="btn-submit" onclick="sendMessage()">Enviar</button>
    </div>
  </div>
</body>
<script src="js/gpt.js"></script>
</html>