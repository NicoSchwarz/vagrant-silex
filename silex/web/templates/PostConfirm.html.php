<?php
$view->extend('layout.html.php');
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
$title = str_replace("\n", "<br/>", $title);            //Display the text with returns
$text = str_replace("\n", "<br/>", $text);              //instead all in one line
?>
<div class="container">
    <div class="col-sm-12">
        <div class="row">
            <div class="jumbotron">
                <div class="alert alert-success">
                    <h2>Your Post:</h2>
                </div>
                <h2><?= $title ?></h2>
                <p><?= $text ?></p>
                <form action="/blog"><input type="submit" value="View in blog" class="btn btn-primary"></form>
            </div>
        </div>
    </div>
</div>