<?php
session_start();
$view->extend('layout.html.php') ?>
<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
?>
<div class="container">
    <div class="col-sm-12">
        <div class="row">
            <div class="jumbotron">
                <h2><?= nl2br($content['title']) ?></h2><?= " on " ?>          <!--big title-->
                <em> <?= $content['created_at'] ?></em>                                         <!--italic date-->
                <br/> <?= nl2br($content['text']) ?>                                            <!--content-->
                <form>
                    <input type="button" value="Back" class="btn btn-primary"
                           onClick="history.go(-1);return true;">                             <!--back button-->
                </form>
            </div>
        </div>
    </div>
</div>