<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../includes/head.html' ?>

    <title>Miscellaneous Photos | IASAS Softball 2015</title>

    <link href="../css/magnific-popup.css" rel="stylesheet" type="text/css">

</head>
<style>
    body {
        background: url(../img/backgrounds/JIS_blue.png) repeat;
    }
</style>
<style type="text/css">
    #content {
        text-align:center;
    }
    #content img {
        width:auto;
        max-height:20em;
        overflow:hidden
    }
</style>
<body>

    <?php include '../includes/nav.html' ?>

    <div class="container" style="background-color: white">

        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                <h1 class="page-header">Miscellaneous Photos</h1>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <br>
                <div class="text-center">Powered by:</div>
                <p style="text-align:right"><img src="../img/dt-dragon.png"><img src="../img/dt-tales.png"></p>
            </div>
        </div>

    </div><!-- /.container -->

    <div class="container" style="background:white">
        <div class="row">
            <div class="parent-container"><!---this tag for gallery mode-->
                <div class="tab-content" id="content"><!--Don't edit, but you can move-->
                </div>
            </div><!--/parent-container for gallery mode-->
        </div>
        <br>
        <div class="row"> <!-- page selector -->
            <div class="col-lg-12"><!---Don't edit, but move-->
                <ul class="nav nav-pills" id="page">
                </ul>
            </div>
        </div>
        <hr>
        <div class="row"> <!-- full resolution links -->
            <div class="col-lg-12">
                <a href="https://dragontales.jisedu.or.id/?c=13607&k=67c2c390be">
                    <button type="button" class="btn btn-warning" style="width:84px; margin-bottom:5px; margin-right:10px">
                        <strong>Download</strong>
                    </button>
                </a>
            </div>
        </div>
    </div><!-- /.container -->

    <?php include '../includes/footer.html' ?>

    <script src="../js/jquery.magnific-popup.min.js"></script>

    <script type="text/javascript">
        $('.parent-container').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image',
            mainClass: 'mfp-with-zoom',
            zoom:{enabled:true},
            gallery:{
                enabled:true,
                preload: [0,4]
            }
            // other options
        });
    </script>
    <script type="text/javascript" language="javascript">
        var baseurl = "https://dragontales.jisedu.or.id/plugins/get_collection/actions/";
        $(document).ready(function() {
            $("#content").load(baseurl+"getcol.php?refcol=13607");
            $("#page").load(baseurl+"getpage.php?refcol=13607");
        });
    </script>

</body>
</html>