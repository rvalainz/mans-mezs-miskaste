<?php 
    var_dump($_POST);
    var_dump($_FILES);
?>
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ziņot par miskasti</title>
</head>
<header>
    <nav>
        <ul>
            <li><a href="/">Sākums</a></li>
        </ul>
    </nav>
</header>
<body>
    <form action="/submit-report.php" method="POST" enctype="multipart/form-data">
        <label for="title">Virsraksts</label>
        <input type="text" id="title" name="title" required>
        <label for="location">Atrašanās vieta</label>
        <input type="text" id="location" name="location" required>
        <label for="description">Apraksts</label>
        <textarea id="description" name="description" rows="5" cols="20" required></textarea>
        <label for="image_upload">Pievienot bildes:</label>
        <input type="file" accept="image/*" id="image_upload" name="image_upload" required>
        <button type="submit" formaction="/submit-report.php">Iesūtīt</button>
    </form>
</body>
</html>