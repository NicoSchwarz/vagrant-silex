<?php
session_start();
$view->extend('layout.html.php');
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
$user = $_SESSION['user'];
?>
<?php if (!$user) : ?>              <!--if user is logged out, forward to login-->
    <?php header('location: /login'); exit(1); ?>
<?php else : ?>
    <div class="container">
        <div class="col-sm-12">
            <div class="row">
                <div class="jumbotron">
                    <h2>New post - logged in as <?= $user ?></h2>
                    <br/>
                    <form method="post" action="/newPost">
                        <textarea name="title" class="form-control" placeholder="Please enter your title" rows="1"
                                  cols="80" required><?php if ($title) : echo($title); endif; ?></textarea>
                        <br/>
                        <textarea name="text" class="form-control" placeholder="Please enter your text" rows="15"
                                  cols="100" required><?php if ($text) : echo($text); endif; ?></textarea>
                        <!--Textfield for post-->
                        <br/><br/>
                        <input type="submit" value="Post" class="btn btn-primary"/>           <!--Submit button-->
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>