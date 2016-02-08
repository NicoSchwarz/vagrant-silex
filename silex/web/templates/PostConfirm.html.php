<?php $view->extend('layout.html.php')?>

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
                <div class="alert alert-success">
                  <h2>Your Post:</h2>
                </div>
                <br/>
                <br/>
                <h2><?= $title ?></h2>
                <p><?= $text ?></p>
                </form>
            </div>
        </div>
    </div>


</div>