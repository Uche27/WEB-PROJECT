<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $projectTopic = $_POST['project_topic'];
    $projectDescription = $_POST['project_description'];
    $amount = $_POST['amount'];
    $reason = $_POST['reason'];

   
    $data = "Name: $name\nProject Topic: $projectTopic\nProject Description: $projectDescription\nAmount: $amount\nReason: $reason\n";
    file_put_contents('submissions.txt', $data, FILE_APPEND);

   
    header('Location: thank-you.html');
    exit();
}