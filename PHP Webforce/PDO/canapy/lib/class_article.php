<?php
class Article
{
    public $title;
    public $price;
    public $image;

    public function __construct($title, $price, $image)
    {
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
    }
    public function insert()
    {
        $image = $_FILES['imgArticle']['name'];
        $imageTmp = $_FILES['imgArticle']['tmp_name'];
    }
}
