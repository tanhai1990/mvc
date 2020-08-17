<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/layout.css">
</head>
<body>
    <!--Header-->
    <div id="header">
    <?php
    require_once "blocks/headerMenu.php";
    ?>
    </div>
    <!--End Header-->
    <!--MAIN-->
    <div id="main">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <section class="left-main">
                        <!--Left-main_login-->
                        <div class="left-main_login">
                        <?php
                        require_once "blocks/login.php";
                        ?>
                        </div>
                        <!--End Left-main_login-->

                        <!--Left-main menu-->
                        <div class="left-main_list">
                        <?php
                        require_once "blocks/menu.php";
                        ?>
                        </div>
                         <!--End Left-main menu-->
                    </section>
                </div>
                <div class="col-sm-9">
                    <section class="right-main">
                    <?php
                    require_once "pages/".$data["page"].".php";
                    ?>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!--End Main-->

    <!--Footer-->
    <div id="footer">
    <?php
    require_once "blocks/footer.php";
    ?>
    </div>
    <!--End Footer-->
</body>
</html>
