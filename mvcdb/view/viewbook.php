<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>View Book</title>
</head>
<body>
    <h2>Book Detail</h2>

    <p>Id: <?php echo htmlspecialchars($book->id); ?></p>
    <p>Title: <?php echo htmlspecialchars($book->title); ?></p>
    <p>Author: <?php echo htmlspecialchars($book->author); ?></p>
    <p>Description: <?php echo htmlspecialchars($book->description); ?></p>
    
    <p><a href="index.php">Back to book list</a></p>
</body>
</html>
//untuk menunjukkan detail buku yang dipilih