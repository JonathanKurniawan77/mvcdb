<?php
require_once __DIR__ . '/Database.php';
require_once __DIR__ . '/Book.php';

class Model
{
    private $db;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->connect();
    }

    public function getBookList()
    {
        $stmt = $this->db->query(
        "SELECT id, title, author, description 
        FROM books 
        ORDER BY id ASC"
    );
    $rows = $stmt->fetchAll(PDO:: FETCH_ASSOC);

    $books = [];

    foreach ($rows as $row) {
        $books[] = new Book( 
            $row['id'], 
            $row['title'], 
            $row['author'], 
            $row['description']
        );
    }
        return $books;
    }

    public function getBook($id)
    {
        $stmt = $this->db->prepare(
            "SELECT id, title, author, description 
            FROM books 
            WHERE id = :id"
        );

        $stmt->bindValue('id', $id, PDO:: PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            return null;
        }

        return new Book (
            $row['id'],
            $row['title'],
            $row['author'],
            $row['description']
        );
    }
}
