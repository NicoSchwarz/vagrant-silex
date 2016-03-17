<?php
session_start();
$view->extend('layout.html.php') ?>

<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
?>
<?php if (!isset($_SESSION['user'])) : ?>       <!--if the user isn't logged in-->
    <?php if ($empty) : ?>
        <div class="container">
            <div class="col-sm-12">
                <div class="row">
                    <div class="jumbotron">
                        <div class="alert alert-warning">
                            <h2>Please log in to write a blog post!</h2>
                        </div>
                        <form method="post" action='/login'>
                            <table>
                                <tr>
                                    <td>Name:</td>
                                    <td><input type="text" name="user"
                                               class="textblack" required/></td>  <!--input field for username-->
                                </tr>
                                <tr>
                                    <td>Password:</td>
                                    <td><input type="password" name="password"
                                               class="textblack" required/></td>    <!--input field for password-->
                                </tr>
                            </table>
                            <input type="submit" value="Submit" class="btn btn-primary"/>   <!--submit button-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php else : ?>
        <?php
        $log = null;                                //Information, if user is logged in
        foreach ($login as $key => $row) {
            if ($row['username'] == $user && $row['password'] == $password) {     //test if the right data was given
                $log = $user;
            }
        }
        ?>
        <?php if (!$log) : ?>                               <!--if wrong data where entered-->
            <div class="container">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="jumbotron nobackground">
                            <div class="alert alert-danger">
                                <h1><span class="glyphicon glyphicon-remove glyphicon-big" aria-hidden="true"></span>
                                    Wrong username or password!</h1>
                                <form><input type="button" value="Back" class="btn btn-primary"
                                             onClick="history.go(-1);return true;"></form>      <!--'back' button-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>                                 <!--if the right data where entered-->
            <?php $_SESSION['user'] = $user; ?>         <!--set session to the username-->
            <div class="container">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="jumbotron nobackground">
                            <div class="alert alert-success">
                                <h1>
                                    <span class="glyphicon glyphicon-ok glyphicon-big" aria-hidden="true"></span>
                                    You are logged in as <?= $user ?>!
                                </h1>
                                <br/>
                                <form action="/new">
                                    <input type="submit" value="Write a blog post"
                                           class="btn btn-primary">     <!--button that links to write blog-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?>
    <?php endif ?>
<?php else : ?>             <!--if user is already logged in-->
    <div class="container">
        <div class="col-sm-12">
            <div class="row">
                <div class="jumbotron nobackground">
                    <div class="alert alert-warning">
                        <h2>You are already logged in as <?= $_SESSION['user'] ?>!</h2>
                        <form action="/logout"><input type="submit" value="Log out" class="btn btn-primary"></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

