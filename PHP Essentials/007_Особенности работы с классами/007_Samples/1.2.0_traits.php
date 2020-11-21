<?php

// базовый пример трейтов


// новое ключевое слово "trait"

trait Translate
{
    public function getRu()
    {
        return $this->title.'RU!!!';
    }
    public function getEn()
    {
        return $this->title.'EN!!!';
    }
}

class News
{
    protected $title;
    // новое ключевое слово "use"
    use Translate;

    public function __construct($title)
    {
        $this->title = $title;
    }
}

class NewsCategory
{
    protected $title;

    use Translate;

    public function __construct($title)
    {
        $this->title = $title;
    }
}

$newsCategory = new NewsCategory('спорт');
$news = new News('Ливерпуль обыгрывает Барселону на Энфилде');

// для русскоговорящего пользователя мы делаем:
var_dump(
    $newsCategory->getRu(),
    $news->getRu()
);

// для англоговорящего
var_dump(
    $newsCategory->getEn(),
    $news->getEn()
);