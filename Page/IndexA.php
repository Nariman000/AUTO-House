<?php
require 'config.php';

// Получаем отчеты из базы данных
$stmt = $pdo->query('SELECT * FROM reports ORDER BY created_at DESC');
$reports = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Веб Отчеты</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Веб Отчеты</h1>
        <a class="btn btn-primary mb-3" href="add_report.php"><i class="fas fa-plus"></i> Добавить новый отчет</a>
        
        <?php if ($reports): ?>
            <ul class="list-unstyled">
                <?php foreach ($reports as $report): ?>
                    <li>
                        <h2><?php echo htmlspecialchars($report['title']); ?></h2>
                        <p><?php echo nl2br(htmlspecialchars($report['content'])); ?></p>
                        <small><i class="fas fa-calendar-alt"></i> Создано: <?php echo $report['created_at']; ?></small>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Нет доступных отчетов.</p>
        <?php endif; ?>
    </div>
</body>
</html>
