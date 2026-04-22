<?php

class Book
{
    public $id;
    public $title;
    public $author;
    public $description;

    public function __construct($id, $title, $author, $description)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->description = $description;
    }
}

?>
//menunjukkan isi buku secara singkat