<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $stmt = $pdo->prepare('INSERT INTO reports (title, content) VALUES (:title, :content)');
    $stmt->execute(['title' => $title, 'content' => $content]);

    header('Location: indexA.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить отчет</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Добавить новый отчет</h1>
        <form action="add_report.php" method="post">
            <div class="form-group">
                <label for="title">Name Surname</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea id="content" name="content" class="form-control" rows="10" required></textarea>
            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Сохранить</button>
        </form>
        <a class="btn btn-secondary mt-3" href="Page/indexA.php"><i class="fas fa-arrow-left"></i> Назад к списку отчетов</a>
    </div>
</body>
</html>
