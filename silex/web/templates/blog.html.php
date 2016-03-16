<?php
session_start();
$view->extend('layout.html.php') ?>
<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
?>
<?php foreach ($content as $key => $row) : ?>
    <div class="container">
        <div class="col-sm-12">
            <div class="row">
                <div class="jumbotron">
                    <strong>  <?= nl2br($row['title']) ?> </strong>             <!--big title-->
                    <br/>
                    <?= substr(nl2br($row['text']), 0, 75) ?>
                    <a href="blog/<?= $row['id'] ?>">[...]</a> <!--first 75 letters of the text-->
                    <div class="position">written by <?= $row['author'] ?> on
                        <em> <?= $row['created_at'] ?></em></div> <!--author & date in right bottom corner-->
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
