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
            <h2>Neuer Beitrag - angemeldet als NAME</h2>
            <br/>
            <?php if($error) : ?>                                       <!--If not both fields are filled-->
                <div class="alert alert-danger">                        <!--Show message in a red box-->
                    <h2>Please fill up every field!</h2>                <!--Message-->
                </div>
            <?php endif; ?>
            <form method="post" action="/newPost" >
                 <textarea name="title" class="form-control" placeholder="Please enter your title" rows="1" cols="80"><?php if($title) { echo($title); } ?></textarea> <!--Textfield for title-->
                      <br/><br/>
                  <textarea name="text" class="form-control" placeholder="Please enter your text" rows="15" cols="100"><?php if($text) : echo($text); endif; ?></textarea>  <!--Textfield for post-->
                      <br/><br/>
                  <input type="submit" value="Post" class="btn btn-primary"/>           <!--Submit button-->
            </form>
        </div>
    </div>
</div>
</div>
