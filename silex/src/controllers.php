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
    return $templating->render(             //return 'home' template with an array
        'home.html.php',
        array(
            'active' => 'home'             //set 'home' to active (in template
        )                                    //home it sets home active in the navbar)
    );
});

$app->get('/blog', function () use ($dbConnection,$templating) {
        $content = $dbConnection->fetchAll('SELECT * FROM blog_post ORDER BY id DESC'); //Select all blog posts and order them
    return $templating->render(
        'blog.html.php',
        array(
            'active' => 'blog',
            'content' => $content                                                          //transfair variables
            )
    );
});

$app->get('/blog/{id}', function ($id) use ($app,$dbConnection,$templating) {
    $content = $dbConnection->fetchAssoc('SELECT * FROM blog_post WHERE id=?',array($id)); //Select only one post from a specific id
    if(!$content){              //if Database is empty
        $app->abort(404);       //display 404-error
    } else {
        return $templating->render(
            'blogDetail.html.php',
            array(
                'active' => 'blog',
                'content' => $content
            )
        );
    }
});

$app->get('/new', function () use ($templating) {
    return $templating->render(
        'new.html.php',
        array(
            'active' => 'new',
            'title' => '',
            'text' => '',
        )
    );
});



$app->match('/newPost', function (Request $request) use ($dbConnection,$templating) {
    session_start();
        if ($request->isMethod('POST')) {
        $title = $request->get('title');                    //Get input from the textareas on newPost
        $text = $request->get('text');
        $createdAt = date("c");                             //set current date to createdAt
        $author = $_SESSION['user'];                        //set current user as author
            $dbConnection->insert(
                'blog_post',
                array(
                'author' => $author,
                'title' => $title,
                'text' => $text,
                'created_at' => $createdAt
                )
            );
            return $templating->render(
                'PostConfirm.html.php',
                array(
                    'title' => $title,
                    'text' => $text,
                    'active' => 'new'
                )
            );
        }
});

$app->match('/login', function (Request $request) use ($app,$templating,$dbConnection) {
    $login = $dbConnection->fetchAll('SELECT * FROM user_login');       //get all users from database
    $user =  $request->get('user');
    $password =  $request->get('password');
    if(!$user || !$password) {
        $bool = true;
    } else {
        $bool = false;
    }
        return $templating->render(
            'login.html.php',
            array(
                'active' => 'login',
                'user' => $user,
                'password' => $password,
                'login' => $login,
                'empty' => $bool            //transfair, if a field is empty
            )
        );
});

$app->get('/logout', function () use ($templating) {
    return $templating->render(
        'logout.html.php',
        array(
            'active' => 'logout'
        )
    );
});

$app->get('/db', function () use ($app,$dbConnection) {
});
