<?php

namespace App;


class Book
{
    /**
     * ISBN
     *
     * @var string
     */
    protected $isbn;

    /**
     * タイトル
     *
     * @var string
     */
    protected $title;

    /**
     * 著者
     *
     * @var string
     */
    protected $author;

    /**
     * ISBNをセットする
     *
     * @param string $isbn
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    /**
     * タイトルをセットする
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * 著者をセットする
     *
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * 与えられた条件に一致するかどうかを返す
     *
     * @param array $condition
     * @return bool
     */
    public function matches($condition)
    {
        if (isset($condition['isbn']) && $this->isbn === $condition['isbn']) {
            return true;
        }

        if (isset($condition['title']) && strpos($this->title, $condition['title']) !== false) {
            return true;
        }

        if (isset($condition['author']) && strpos($this->author, $condition['author']) !== false) {
            return true;
        }

        return false;
    }

}