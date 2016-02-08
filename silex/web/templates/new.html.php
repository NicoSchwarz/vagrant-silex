<?php $view->extend('layout.html.php')?>

<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */

$slots = $view['slots'];
?>
<html>
<div class="container">
<div class="col-sm-12">
    <div class="row">
        <div class="jumbotron">
            <h2>Neuer Beitrag - angemeldet als NAME</h2>
            <br/>
            <?php if($error) : ?>
                <div class="alert alert-danger">
                    <h2>Please fill up every field!</h2>
                </div>
            <?php endif; ?>
            <form method="post" action="/newPost" >
                 <textarea name="title" class="form-control" placeholder="Please enter your title" rows="1" cols="80"><?php if($title) { echo($title); } ?></textarea>
                      <br/><br/>
                  <textarea name="text" class="form-control" placeholder="Please enter your text" rows="15" cols="100"><?php if($text) : echo($text); endif; ?></textarea>
                      <br/><br/>
                  <input type="submit" value="Post" class="btn btn-primary"/>
            </form>
        </div>
    </div>
</div>


</div>
</html>