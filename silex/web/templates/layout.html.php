<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
?>

<!doctype html>


<?php
include ("home.html.php");
include ("blog.html.php");
include ("new.html.php");
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <title><?php $slots->output('title', 'Default title') ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
          integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

       <!--

        if(page($page) == 1) {
            ?> -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="home.html.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
                <li><a href="blog.html.php"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Blog</a>
                <li><a href="new.html.php"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> New Blog Item</a>
            </ul>
        </div>
        <!--

        }
        else if($page == 2) {
            ?> <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li><a href="home.html.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
                    <li class="active"><a href="blog.html.php"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Blog</a>
                    <li><a href="new.html.php"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> New Blog Item</a>
                </ul>
            </div>
        }
        else if($page == 3) {
            ?> <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li><a href="home.html.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
                    <li><a href="blog.html.php"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Blog</a>
                    <li class="active"><a href="new.html.php"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> New Blog Item</a>
                </ul>
            </div>
        }
        else {
            ?> <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li><a href="home.html.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
                    <li><a href="blog.html.php"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Blog</a>
                    <li><a href="new.html.php"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> New Blog Item</a>
                </ul>
            </div>

        }
        ?>-->
    </div>
</nav>


<?php $slots->output('_content') ?>
CONTENT CONCONTENTCONTENTCONTENTCONTENTCONTENTCONTENTCONTENTCONTENTCONTENTTENT CONTENT CONTENTCONTENTCONTENTCONTENTCONTENTCONTENTCONTENTCONTENTCONTENT