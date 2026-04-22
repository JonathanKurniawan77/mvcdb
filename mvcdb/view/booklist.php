<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Book List</title>
</head>
<body>
    <h2>Book List</h2>
        
    <table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Author</td>
        <td>Description</td>
    </tr>

    <?php foreach ($books as $book): ?>
        <tr>
            <td><?php echo htmlspecialchars($book->id); ?></td>
            <td>
                <a href="index.php?book=<?php echo urlencode($book->id); ?>">
                    <?php echo htmlspecialchars($book->title); ?>
                </a>
            </td>
            <td><?php echo htmlspecialchars($book->author); ?></td>
            <td><?php echo htmlspecialchars($book->description); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
//untuk menampilkan daftar buku yang tersedia