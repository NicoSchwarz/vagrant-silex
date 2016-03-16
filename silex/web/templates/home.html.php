<?php
session_start();
$view->extend('layout.html.php');
/**
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 */
$slots = $view['slots'];
?>
<div class="container">
    <div class="col-sm-12">
        <div class="row">
            <div class="jumbotron">
                <h1 class="text-center">Welcome to MyBlog.com!</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-md-6 col-lg-4">
        <div class="row">
            <div class="panel-body panelBackground">                            <!--panel with another background-->
                On this blog you can write a blog post and share it with the world. To do so, please log in with your
                account!<br/>
                <div class="alert alert-info margin5">Here is some more text:</div>
                <div class="jumbotron">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip
                    ex ea commodo consequat.
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-6 col-lg-4">
            <div class="row">
                <div class="floatRight width">
                    <div class="jumbotron">
                        <div class="text-center textAlt">                       <!--set another text size and form-->
                            <h3>Here you can see another block of random words (in another size and font:</h3>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et
                            dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                            et ea rebum. Stet
                            clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum
                            dolor sit amet, consetetur
                            sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                            erat, sed diam voluptua.
                            At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                            takimata sanctus est Lorem
                            ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                            nonumy eirmod tempor invidunt
                            ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
                            duo dolores et ea rebum. Stet
                            clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                            illum dolore eu feugiat
                            nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent
                            luptatum zzril delenit augue duis
                            dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                            ut aliquip ex ea commodo consequat.
                            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                            illum dolore eu feugiat nulla
                            facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum
                            zzril delenit augue duis dolore te
                            feugait nulla facilisi.
                            Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod
                            mazim placerat facer possim assum.
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna
                            aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                            suscipit lobortis nisl ut aliquip
                            ex ea commodo consequat.
                            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                            illum dolore eu feugiat nulla facilisis.
                            At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                            takimata sanctus est Lorem ipsum
                            dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                            eirmod tempor invidunt ut labore et
                            dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                            et ea rebum. Stet clita kasd gubergren,
                            no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                            consetetur sadipscing elitr, At accusam
                            aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt
                            justo labore Stet clita ea et gubergren,
                            kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit
                            amet. Lorem ipsum dolor sit amet, consetetur
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


