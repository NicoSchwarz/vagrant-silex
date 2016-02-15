<?php $view->extend('layout.html.php')?>

<?php
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];

?>

                <?php
                    foreach ($content as $key => $row) {
                        echo ("<br/><br/>");
                        ?>
                        <div class="container">
                        <div class="col-sm-12">
                        <div class="row">
                        <div class="jumbotron">
                      <strong>  <?= nl2br($row['title']) ?> </strong> <?= " on " ?> <em> <?= $row['created_at'] ?></em>
                            </br> <?= substr(nl2br($row['text']), 0,20)?> <a href="blogDetail.html.php">[...]</a>
                                </div>
                            </div>
                          </div>
                        </div>
<?php
                    }
                ?>
