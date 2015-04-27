<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../includes/head.html' ?>

    <title>Girls Photos | IASAS Softball 2015</title>

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
                <h1 class="page-header">Girls Photos</h1>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <br>
                <div class="text-center">Powered by:</div>
                <p style="text-align:right"><img src="../img/dt-dragon.png"><img src="../img/dt-tales.png"></p>
            </div>
        </div>

    </div><!-- /.container -->

    <div class="container" style="background:white">
        <div class="row" style="padding-left:14px"> <!-- day selector -->
            <ul class="nav nav-pills" id="colls">
                <li id="liday1"><a href="#">Day 1</a></li>
                <?php
                date_default_timezone_set('Asia/Jakarta');
                $date = getdate();
                $vidkey = '';
                if ($date['mon'] == 4) {
                    if ($date['mday'] > 10) echo '<li id="liday2"><a href="#">Day 2</a></li>';
                    if ($date['mday'] > 11) echo '<li id="liday3"><a href="#">Day 3</a></li>';
                }
                ?>
            </ul>
        </div>
        <hr>
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
                <br>
                <h4>Download Photos</h4>
                <a href="https://dragontales.jisedu.or.id/?c=13600&k=fbe5bfaee3">
                    <button type="button" class="btn btn-warning" style="width:84px; margin-bottom:5px; margin-right:10px">
                        <strong>Day 1</strong>
                    </button>
                </a>
                <?php
                if ($date['mon'] == 4) {
                    if ($date['mday'] > 10) echo '<a href="https://dragontales.jisedu.or.id/?c=13603&k=bc81270d84"><button type="button" class="btn btn-warning" style="width:84px; margin-bottom:5px; margin-right:10px"><strong>Day 2</strong></button></a>';
                    if ($date['mday'] > 11) echo '<a href="https://dragontales.jisedu.or.id/?c=13605&k=6cfbf73f09"><button type="button" class="btn btn-warning" style="width:84px; margin-bottom:5px; margin-right:10px"><strong>Day 3</strong></button></a>';
                }
                ?>
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
            /// --------- this for default collection
            $("#content").load(baseurl+"getcol.php?refcol=13600");
            $("#page").load(baseurl+"getpage.php?refcol=13600");

            $("#colls li").removeClass();
            $("#liday1").addClass("active");
            /// -- end default collection

            // --------- for each collection ---------
            $("#liday1").click(function(){
                $("#content").empty();
                $("#content").load(baseurl+"getcol.php?refcol=13600");
                $("#page").load(baseurl+"getpage.php?refcol=13600");
                $("#colls li").removeClass();
                $("#liday1").addClass("active");
            });
            $("#liday2").click(function(){
                $("#content").empty();
                $("#content").load(baseurl+"getcol.php?refcol=13603");
                $("#page").load(baseurl+"getpage.php?refcol=13603");
                $("#colls li").removeClass();
                $("#liday2").addClass("active");
            });
            $("#liday3").click(function(){
                $("#content").empty();
                $("#content").load(baseurl+"getcol.php?refcol=13605");
                $("#page").load(baseurl+"getpage.php?refcol=13605");
                $("#colls li").removeClass();
                $("#liday3").addClass("active");
            });
            // --- end for each collections ----------------
        });
    </script>

</body>
</html>