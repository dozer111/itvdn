<?php

// множественно наследование трейтов

trait Translate
{
    public function getRu()
    {
        return $this->title . 'RU!!!';
    }

    // допустим, что здесь выбирается английский вариант title
    public function getEn()
    {
        return $this->title . 'EN!!!';
    }
}

trait Author
{
    public function getAuthor()
    {
        return ucfirst($this->author);
    }
}


class News
{
    protected $title;
    protected $author;

    // несколько use
    // в дальнейшем, будем щитать, что может быть неограниченно много use-ов
    use Translate;
    use Author;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }
}

class NewsCategory
{
    protected $title;
    protected $author;

    // альтернативный вариант записи нескольких трейтов
    use Translate,Author;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }
}

$newsCategory = new NewsCategory('спорт', 'dozer111');
$news = new News('Ливерпуль обыгрывает Барселону на Энфилде', 'redactor_1409');

// для русскоговорящего пользователя мы делаем:
var_dump(
    [
        $newsCategory->getRu(),
        $news->getRu(),
        $news->getAuthor(),
    ]
);

// для англоговорящего
var_dump(
    [
        $newsCategory->getEn(),
        $news->getEn(),
        $news->getAuthor(),
    ]
);