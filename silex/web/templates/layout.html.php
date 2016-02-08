<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
?>

<!doctype html>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <title><?php $slots->output('title', 'Default title') ?></title>
    <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/bootsrap/dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/Custom.css">
    <script src="/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="glyphicon glyphicon-menu-hamburger"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li <?= $active == 'home'? 'class="active"':''?>><a href="/home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
                <li <?= $active == 'blog'? 'class="active"':''?>><a href="/blog"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Blog</a>
                <li <?= $active == 'new'? 'class="active"':''?>><a href="/new"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> New Blog Item</a>
            </ul>
        </div>
    </div>
</nav>


<?php $slots->output('_content') ?>


</html>