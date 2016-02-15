<?php
use Symfony\Component\HttpFoundation\Request;

/**
 * @var $app Silex\Application
 * @var $dbConnection Doctrine\DBAL\Connection
 * @var $templating \Symfony\Component\Templating\DelegatingEngine
 */
$templating = $app['templating'];
$dbConnection = $app['db'];


$app->get('/home', function () use ($templating) {
    return $templating->render(
        'home.html.php',
        array('active' => 'home')
    );
});

$app->get('/blog', function () use ($dbConnection,$templating) {
        $content = $dbConnection->fetchAll('SELECT * FROM blog_post');
    return $templating->render(
        'blog.html.php',
        array(
            'active' => 'blog',
            'content' => $content
            )
    );
});

$app->get('/new', function () use ($templating) {
    return $templating->render(
        'new.html.php',
        array(
            'active' => 'new',
            'title' => '',
            'text' => '',
            'error' => NULL
        )
    );
});


$app->match('/newPost', function (Request $request) use ($dbConnection,$templating) {
        if ($request->isMethod('POST')) {

        $title = $request->get('title');
        $text = $request->get('text');
        $createdAt = date("c");
        if ($title && $text){
            $dbConnection->insert(
                'blog_post',
                array(
                'title' => $title,
                'text' => $text,
                'created_at' => $createdAt
                )
            );
            return $templating->render(
                'PostConfirm.html.php',
                array(
                    'title' => $title,                       //transfer variables
                    'text' => $text,
                    'error' => false,
                    'active' => 'new'
                )
            );
        } else {
            return $templating->render(
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
});


$app->get('/db', function () use ($app,$dbConnection) {


});
