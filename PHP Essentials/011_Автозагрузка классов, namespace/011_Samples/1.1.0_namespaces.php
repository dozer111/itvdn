<?php

// множественные namespaces

/// 2 вида namespace
/// -   глобальные(имеют глобальное пространство имён(\) ==> \Traversable )
/// -   локальные(имеют конкретное пространство имён  ==> ns1\User)


// явный пример локального namespace
namespace ns1{
    class User{}
    class User2{}
}

namespace ns2{
    class Article{}
    class ArticleCategory{}
}

namespace ns3{


    use ns2\Article;
    use ns1\User;

    $user = new User();
    $article = new Article();
}



