<?php
session_start();
$view->extend('layout.html.php');
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
?>
<?php if (isset($_SESSION['user'])) : ?>            <!--if user is logged in-->
    <?php $_SESSION['user'] = null; ?>
    <div class="container">
        <div class="col-sm-12">
            <div class="row">
                <div class="jumbotron nobackground">
                    <div class="alert alert-success">
                        <h2>You are logged out!</h2>
                        <form action="/login"><input type="submit" value="Log in"
                                                     class="btn btn-primary"></form>   <!--button links to login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php else : ?>                                 <!--if user isn't logged in-->
    <div class="container">
        <div class="col-sm-12">
            <div class="row">
                <div class="jumbotron nobackground">
                    <div class="alert alert-warning">
                        <h2>You are already logged out!</h2>
                        <form action="/login"><input type="submit" value="Log in"
                                                     class="btn btn-primary"></form>   <!--button links to login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>
