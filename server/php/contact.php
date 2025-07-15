<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'] ?? '';
  $message = $_POST['message'] ?? '';
  file_put_contents('messages.txt', "$name: $message\n", FILE_APPEND);
  echo "Thanks for your message, $name!";
}
?>