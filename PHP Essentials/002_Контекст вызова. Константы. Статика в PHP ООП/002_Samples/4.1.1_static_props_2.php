<?php

// пример1. учимся работать со статическим свойством
// принцип, схож с константой
// названиеКласса :: $названиеПеременной
class Cat
{
    // ключевое свово public
    // + ключево словов static
    public static $defaultName = 'Murzik';
}

class Dog
{
    public static $defaultName = 'Mukhtar';
}

echo "In ukraine default cat name is ".Cat::$defaultName;
echo "In ukraine default dog name is ".Dog::$defaultName;




