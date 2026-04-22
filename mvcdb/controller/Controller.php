<?php
require_once __DIR__ . '/../model/Model.php';

class Controller
{
    public $model;
    public function __construct()
    {
        $this->model = new Model();
    }
        public function invoke()
    {
        if (!isset($_GET['book']) || empty($_GET['book'])) {
            $books = $this->model->getBookList();
            require __DIR__ . '/../view/booklist.php';
        } else {
            $id = (int) $_GET['book'];
            $book = $this->model->getBook($id);

            if ($book === null) {
            echo "<h3>Book not found.</h3>";
            echo '<p><a href="index.php">Back to book list</a></p>';
            return;
        }

        require __DIR__ . '/../view/viewbook.php';
        }
    }
}

?>
