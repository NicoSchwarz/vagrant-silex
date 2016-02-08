<?php
use Symfony\Component\HttpFoundation\Request;

/**
 * @var $app Silex\Application
 */

$app->get('/welcome/{name}', function ($name) use ($app) {
    return $app['templating']->render(
        'hello.html.php',
        array('name' => $name)
    );
});

$app->get('/welcome-twig/{name}', function ($name) use ($app) {
    return $app['twig']->render(
        'hello.html.twig',
        array('name' => $name)
    );
});

$app->get('/home', function () use ($app) {
    return $app['templating']->render(
        'home.html.php',
        array('active' => 'home')
    );
});

$app->get('/blog', function () use ($app) {
    return $app['templating']->render(
        'blog.html.php',
        array('active' => 'blog')
    );
});

$app->get('/new', function () use ($app) {
    return $app['templating']->render(
        'new.html.php',
        array(
            'active' => 'new',
            'title' => '',
            'text' => '',
            'error' => NULL
        )
    );
}
);


$app->match('/newPost', function (Request $request) use ($app) {
    /**
     * @var Doctrine\DBAL\Connection $dbConnection
     */
    if ($request->isMethod('POST')) {
        $title = $request->get('title');
        $text = $request->get('text');
        $createdAt = date("c");
        if ($title && $text) {
            $dbConnection = $app['db'];
            $dbConnection->insert(
                'blog_post',
                array(
                'title' => $title,
                'text' => $text,
                'created_at' => $createdAt
                )
            );
            return $app['templating']->render(
                'PostConfirm.html.php',
                array(
                    'title' => $title,                       //transfer variables
                    'text' => $text,
                    'error' => false,
                    'active' => 'new'
                )
            );
        } else {
            return $app['templating']->render(
                'new.html.php',
                array(
                    'title' => $title,                       //transfer variables
                    'text' => $text,
                    'error' => true,
                    'active' => 'new'
                )
            );
        }
    }
}
);

$app->get('/db', function () use ($app) {



    $dbConnection = $app['db'];

});