<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../includes/head.html' ?>

    <title>Girls Game Results | IASAS Softball 2015</title>

    <script type='text/javascript'>
        function displayContent(json) {
            var len = json.feed.entry.length;
            for (var i = 0; i<len; i++) {
                if (document.getElementById(json.feed.entry[i].title.$t) != null) {
                    document.getElementById(json.feed.entry[i].title.$t).innerHTML = json.feed.entry[i].content.$t;
                }
            }
        }
    </script>
    <style>
        body {
            background:url(../img/backgrounds/JIS_blue.png) repeat;
        }
        .cell {
            border: solid 3px lightgray;
            padding: 5px;
            vertical-align: middle;
            text-align: center;
        }
        .cell-image {
            width: 15%;
        }
        .cell-total {
            width: 13%;
        }
        .cell-innings {
            width: 8%;
        }
        .img-responsive {
            margin: auto;
        }
    </style>
</head>
<body>

    <?php include '../includes/nav.html' ?>

    <div class="container" style="background-color: white">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h1 class="page-header">Girls Game Results</h1>
            </div>
        </div>
    </div><!-- /.container -->
    <div class="container" style="background:white">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#Day1" data-toggle="tab"><strong>Day 1</strong></a></li>
                    <li><a href="#Day2" data-toggle="tab"><strong>Day 2</strong></a></li>
                    <li><a href="#Day3" data-toggle="tab"><strong>Day 3</strong></a></li>
                </ul>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="Day1">
                    <div class="col-lg-12 text-center">
                        <h3>Game 1</h3>
                        <div class="table-responsive">
                            <table style="width: 100%; font-size: 1.2em;" class="text-center">
                                <tr>
                                    <td class="cell cell-image"></td>
                                    <td class="cell cell-innings"><strong>1</strong></td>
                                    <td class="cell cell-innings"><strong>2</strong></td>
                                    <td class="cell cell-innings"><strong>3</strong></td>
                                    <td class="cell cell-innings"><strong>4</strong></td>
                                    <td class="cell cell-innings"><strong>5</strong></td>
                                    <td class="cell cell-innings"><strong>6</strong></td>
                                    <td class="cell cell-innings"><strong>7</strong></td>
                                    <td class="cell cell-innings"><strong>8</strong></td>
                                    <td class="cell cell-innings"><strong>9</strong></td>
                                    <td class="cell cell-total"><strong>TOTAL</strong></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_ISM_100px.png"><br>VISITOR</td>
                                    <td class="cell cell-innings" id="B3"></td>
                                    <td class="cell cell-innings" id="C3"></td>
                                    <td class="cell cell-innings" id="D3"></td>
                                    <td class="cell cell-innings" id="E3"></td>
                                    <td class="cell cell-innings" id="F3"></td>
                                    <td class="cell cell-innings" id="G3"></td>
                                    <td class="cell cell-innings" id="H3"></td>
                                    <td class="cell cell-innings" id="I3"></td>
                                    <td class="cell cell-innings" id="J3"></td>
                                    <td class="cell cell-total" id="K3"></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_TAS_100px.png"><br>HOME</td>
                                    <td class="cell cell-innings" id="B5"></td>
                                    <td class="cell cell-innings" id="C5"></td>
                                    <td class="cell cell-innings" id="D5"></td>
                                    <td class="cell cell-innings" id="E5"></td>
                                    <td class="cell cell-innings" id="F5"></td>
                                    <td class="cell cell-innings" id="G5"></td>
                                    <td class="cell cell-innings" id="H5"></td>
                                    <td class="cell cell-innings" id="I5"></td>
                                    <td class="cell cell-innings" id="J5"></td>
                                    <td class="cell cell-total" id="K5"></td>
                                </tr>
                            </table>
                        </div>
                        <h3>Game 2</h3>
                        <div class="table-responsive">
                            <table style="width: 100%; font-size: 1.2em;" class="text-center">
                                <tr>
                                    <td class="cell cell-image"></td>
                                    <td class="cell cell-innings"><strong>1</strong></td>
                                    <td class="cell cell-innings"><strong>2</strong></td>
                                    <td class="cell cell-innings"><strong>3</strong></td>
                                    <td class="cell cell-innings"><strong>4</strong></td>
                                    <td class="cell cell-innings"><strong>5</strong></td>
                                    <td class="cell cell-innings"><strong>6</strong></td>
                                    <td class="cell cell-innings"><strong>7</strong></td>
                                    <td class="cell cell-innings"><strong>8</strong></td>
                                    <td class="cell cell-innings"><strong>9</strong></td>
                                    <td class="cell cell-total"><strong>TOTAL</strong></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_SAS_100px.png"><br>VISITOR</td>
                                    <td class="cell cell-innings" id="B9"></td>
                                    <td class="cell cell-innings" id="C9"></td>
                                    <td class="cell cell-innings" id="D9"></td>
                                    <td class="cell cell-innings" id="E9"></td>
                                    <td class="cell cell-innings" id="F9"></td>
                                    <td class="cell cell-innings" id="G9"></td>
                                    <td class="cell cell-innings" id="H9"></td>
                                    <td class="cell cell-innings" id="I9"></td>
                                    <td class="cell cell-innings" id="J9"></td>
                                    <td class="cell cell-total" id="K9"></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_ISKL_100px.png"><br>HOME</td>
                                    <td class="cell cell-innings" id="B11"></td>
                                    <td class="cell cell-innings" id="C11"></td>
                                    <td class="cell cell-innings" id="D11"></td>
                                    <td class="cell cell-innings" id="E11"></td>
                                    <td class="cell cell-innings" id="F11"></td>
                                    <td class="cell cell-innings" id="G11"></td>
                                    <td class="cell cell-innings" id="H11"></td>
                                    <td class="cell cell-innings" id="I11"></td>
                                    <td class="cell cell-innings" id="J11"></td>
                                    <td class="cell cell-total" id="K11"></td>
                                </tr>
                            </table>
                        </div>
                        <h3>Game 3</h3>
                        <div class="table-responsive">
                            <table style="width: 100%; font-size: 1.2em;" class="text-center">
                                <tr>
                                    <td class="cell cell-image"></td>
                                    <td class="cell cell-innings"><strong>1</strong></td>
                                    <td class="cell cell-innings"><strong>2</strong></td>
                                    <td class="cell cell-innings"><strong>3</strong></td>
                                    <td class="cell cell-innings"><strong>4</strong></td>
                                    <td class="cell cell-innings"><strong>5</strong></td>
                                    <td class="cell cell-innings"><strong>6</strong></td>
                                    <td class="cell cell-innings"><strong>7</strong></td>
                                    <td class="cell cell-innings"><strong>8</strong></td>
                                    <td class="cell cell-innings"><strong>9</strong></td>
                                    <td class="cell cell-total"><strong>TOTAL</strong></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_JIS_100px.png"><br>VISITOR</td>
                                    <td class="cell cell-innings" id="B15"></td>
                                    <td class="cell cell-innings" id="C15"></td>
                                    <td class="cell cell-innings" id="D15"></td>
                                    <td class="cell cell-innings" id="E15"></td>
                                    <td class="cell cell-innings" id="F15"></td>
                                    <td class="cell cell-innings" id="G15"></td>
                                    <td class="cell cell-innings" id="H15"></td>
                                    <td class="cell cell-innings" id="I15"></td>
                                    <td class="cell cell-innings" id="J15"></td>
                                    <td class="cell cell-total" id="K15"></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_ISB_100px.png"><br>HOME</td>
                                    <td class="cell cell-innings" id="B17"></td>
                                    <td class="cell cell-innings" id="C17"></td>
                                    <td class="cell cell-innings" id="D17"></td>
                                    <td class="cell cell-innings" id="E17"></td>
                                    <td class="cell cell-innings" id="F17"></td>
                                    <td class="cell cell-innings" id="G17"></td>
                                    <td class="cell cell-innings" id="H17"></td>
                                    <td class="cell cell-innings" id="I17"></td>
                                    <td class="cell cell-innings" id="J17"></td>
                                    <td class="cell cell-total" id="K17"></td>
                                </tr>
                            </table>
                        </div>
                        <h3>Game 4</h3>
                        <div class="table-responsive">
                            <table style="width: 100%; font-size: 1.2em;" class="text-center">
                                <tr>
                                    <td class="cell cell-image"></td>
                                    <td class="cell cell-innings"><strong>1</strong></td>
                                    <td class="cell cell-innings"><strong>2</strong></td>
                                    <td class="cell cell-innings"><strong>3</strong></td>
                                    <td class="cell cell-innings"><strong>4</strong></td>
                                    <td class="cell cell-innings"><strong>5</strong></td>
                                    <td class="cell cell-innings"><strong>6</strong></td>
                                    <td class="cell cell-innings"><strong>7</strong></td>
                                    <td class="cell cell-innings"><strong>8</strong></td>
                                    <td class="cell cell-innings"><strong>9</strong></td>
                                    <td class="cell cell-total"><strong>TOTAL</strong></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_ISKL_100px.png"><br>VISITOR</td>
                                    <td class="cell cell-innings" id="B21"></td>
                                    <td class="cell cell-innings" id="C21"></td>
                                    <td class="cell cell-innings" id="D21"></td>
                                    <td class="cell cell-innings" id="E21"></td>
                                    <td class="cell cell-innings" id="F21"></td>
                                    <td class="cell cell-innings" id="G21"></td>
                                    <td class="cell cell-innings" id="H21"></td>
                                    <td class="cell cell-innings" id="I21"></td>
                                    <td class="cell cell-innings" id="J21"></td>
                                    <td class="cell cell-total" id="K21"></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_ISM_100px.png"><br>HOME</td>
                                    <td class="cell cell-innings" id="B23"></td>
                                    <td class="cell cell-innings" id="C23"></td>
                                    <td class="cell cell-innings" id="D23"></td>
                                    <td class="cell cell-innings" id="E23"></td>
                                    <td class="cell cell-innings" id="F23"></td>
                                    <td class="cell cell-innings" id="G23"></td>
                                    <td class="cell cell-innings" id="H23"></td>
                                    <td class="cell cell-innings" id="I23"></td>
                                    <td class="cell cell-innings" id="J23"></td>
                                    <td class="cell cell-total" id="K23"></td>
                                </tr>
                            </table>
                        </div>
                        <h3>Game 5</h3>
                        <div class="table-responsive">
                            <table style="width: 100%; font-size: 1.2em;" class="text-center">
                                <tr>
                                    <td class="cell cell-image"></td>
                                    <td class="cell cell-innings"><strong>1</strong></td>
                                    <td class="cell cell-innings"><strong>2</strong></td>
                                    <td class="cell cell-innings"><strong>3</strong></td>
                                    <td class="cell cell-innings"><strong>4</strong></td>
                                    <td class="cell cell-innings"><strong>5</strong></td>
                                    <td class="cell cell-innings"><strong>6</strong></td>
                                    <td class="cell cell-innings"><strong>7</strong></td>
                                    <td class="cell cell-innings"><strong>8</strong></td>
                                    <td class="cell cell-innings"><strong>9</strong></td>
                                    <td class="cell cell-total"><strong>TOTAL</strong></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_TAS_100px.png"><br>VISITOR</td>
                                    <td class="cell cell-innings" id="B27"></td>
                                    <td class="cell cell-innings" id="C27"></td>
                                    <td class="cell cell-innings" id="D27"></td>
                                    <td class="cell cell-innings" id="E27"></td>
                                    <td class="cell cell-innings" id="F27"></td>
                                    <td class="cell cell-innings" id="G27"></td>
                                    <td class="cell cell-innings" id="H27"></td>
                                    <td class="cell cell-innings" id="I27"></td>
                                    <td class="cell cell-innings" id="J27"></td>
                                    <td class="cell cell-total" id="K27"></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_JIS_100px.png"><br>HOME</td>
                                    <td class="cell cell-innings" id="B29"></td>
                                    <td class="cell cell-innings" id="C29"></td>
                                    <td class="cell cell-innings" id="D29"></td>
                                    <td class="cell cell-innings" id="E29"></td>
                                    <td class="cell cell-innings" id="F29"></td>
                                    <td class="cell cell-innings" id="G29"></td>
                                    <td class="cell cell-innings" id="H29"></td>
                                    <td class="cell cell-innings" id="I29"></td>
                                    <td class="cell cell-innings" id="J29"></td>
                                    <td class="cell cell-total" id="K29"></td>
                                </tr>
                            </table>
                        </div>
                        <h3>Game 6</h3>
                        <div class="table-responsive">
                            <table style="width: 100%; font-size: 1.2em;" class="text-center">
                                <tr>
                                    <td class="cell cell-image"></td>
                                    <td class="cell cell-innings"><strong>1</strong></td>
                                    <td class="cell cell-innings"><strong>2</strong></td>
                                    <td class="cell cell-innings"><strong>3</strong></td>
                                    <td class="cell cell-innings"><strong>4</strong></td>
                                    <td class="cell cell-innings"><strong>5</strong></td>
                                    <td class="cell cell-innings"><strong>6</strong></td>
                                    <td class="cell cell-innings"><strong>7</strong></td>
                                    <td class="cell cell-innings"><strong>8</strong></td>
                                    <td class="cell cell-innings"><strong>9</strong></td>
                                    <td class="cell cell-total"><strong>TOTAL</strong></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_ISB_100px.png"><br>VISITOR</td>
                                    <td class="cell cell-innings" id="B33"></td>
                                    <td class="cell cell-innings" id="C33"></td>
                                    <td class="cell cell-innings" id="D33"></td>
                                    <td class="cell cell-innings" id="E33"></td>
                                    <td class="cell cell-innings" id="F33"></td>
                                    <td class="cell cell-innings" id="G33"></td>
                                    <td class="cell cell-innings" id="H33"></td>
                                    <td class="cell cell-innings" id="I33"></td>
                                    <td class="cell cell-innings" id="J33"></td>
                                    <td class="cell cell-total" id="K33"></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_SAS_100px.png"><br>HOME</td>
                                    <td class="cell cell-innings" id="B35"></td>
                                    <td class="cell cell-innings" id="C35"></td>
                                    <td class="cell cell-innings" id="D35"></td>
                                    <td class="cell cell-innings" id="E35"></td>
                                    <td class="cell cell-innings" id="F35"></td>
                                    <td class="cell cell-innings" id="G35"></td>
                                    <td class="cell cell-innings" id="H35"></td>
                                    <td class="cell cell-innings" id="I35"></td>
                                    <td class="cell cell-innings" id="J35"></td>
                                    <td class="cell cell-total" id="K35"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="Day2">
                    <div class="col-lg-12 text-center">
                        <h3>Game 7</h3>
                        <div class="table-responsive">
                            <table style="width: 100%; font-size: 1.2em;" class="text-center">
                                <tr>
                                    <td class="cell cell-image"></td>
                                    <td class="cell cell-innings"><strong>1</strong></td>
                                    <td class="cell cell-innings"><strong>2</strong></td>
                                    <td class="cell cell-innings"><strong>3</strong></td>
                                    <td class="cell cell-innings"><strong>4</strong></td>
                                    <td class="cell cell-innings"><strong>5</strong></td>
                                    <td class="cell cell-innings"><strong>6</strong></td>
                                    <td class="cell cell-innings"><strong>7</strong></td>
                                    <td class="cell cell-innings"><strong>8</strong></td>
                                    <td class="cell cell-innings"><strong>9</strong></td>
                                    <td class="cell cell-total"><strong>TOTAL</strong></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_ISM_100px.png"><br>VISITOR</td>
                                    <td class="cell cell-innings" id="B39"></td>
                                    <td class="cell cell-innings" id="C39"></td>
                                    <td class="cell cell-innings" id="D39"></td>
                                    <td class="cell cell-innings" id="E39"></td>
                                    <td class="cell cell-innings" id="F39"></td>
                                    <td class="cell cell-innings" id="G39"></td>
                                    <td class="cell cell-innings" id="H39"></td>
                                    <td class="cell cell-innings" id="I39"></td>
                                    <td class="cell cell-innings" id="J39"></td>
                                    <td class="cell cell-total" id="K39"></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_JIS_100px.png"><br>HOME</td>
                                    <td class="cell cell-innings" id="B41"></td>
                                    <td class="cell cell-innings" id="C41"></td>
                                    <td class="cell cell-innings" id="D41"></td>
                                    <td class="cell cell-innings" id="E41"></td>
                                    <td class="cell cell-innings" id="F41"></td>
                                    <td class="cell cell-innings" id="G41"></td>
                                    <td class="cell cell-innings" id="H41"></td>
                                    <td class="cell cell-innings" id="I41"></td>
                                    <td class="cell cell-innings" id="J41"></td>
                                    <td class="cell cell-total" id="K41"></td>
                                </tr>
                            </table>
                        </div>
                        <h3>Game 8</h3>
                        <div class="table-responsive">
                            <table style="width: 100%; font-size: 1.2em;" class="text-center">
                                <tr>
                                    <td class="cell cell-image"></td>
                                    <td class="cell cell-innings"><strong>1</strong></td>
                                    <td class="cell cell-innings"><strong>2</strong></td>
                                    <td class="cell cell-innings"><strong>3</strong></td>
                                    <td class="cell cell-innings"><strong>4</strong></td>
                                    <td class="cell cell-innings"><strong>5</strong></td>
                                    <td class="cell cell-innings"><strong>6</strong></td>
                                    <td class="cell cell-innings"><strong>7</strong></td>
                                    <td class="cell cell-innings"><strong>8</strong></td>
                                    <td class="cell cell-innings"><strong>9</strong></td>
                                    <td class="cell cell-total"><strong>TOTAL</strong></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_ISKL_100px.png"><br>VISITOR</td>
                                    <td class="cell cell-innings" id="B45"></td>
                                    <td class="cell cell-innings" id="C45"></td>
                                    <td class="cell cell-innings" id="D45"></td>
                                    <td class="cell cell-innings" id="E45"></td>
                                    <td class="cell cell-innings" id="F45"></td>
                                    <td class="cell cell-innings" id="G45"></td>
                                    <td class="cell cell-innings" id="H45"></td>
                                    <td class="cell cell-innings" id="I45"></td>
                                    <td class="cell cell-innings" id="J45"></td>
                                    <td class="cell cell-total" id="K45"></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_ISB_100px.png"><br>HOME</td>
                                    <td class="cell cell-innings" id="B47"></td>
                                    <td class="cell cell-innings" id="C47"></td>
                                    <td class="cell cell-innings" id="D47"></td>
                                    <td class="cell cell-innings" id="E47"></td>
                                    <td class="cell cell-innings" id="F47"></td>
                                    <td class="cell cell-innings" id="G47"></td>
                                    <td class="cell cell-innings" id="H47"></td>
                                    <td class="cell cell-innings" id="I47"></td>
                                    <td class="cell cell-innings" id="J47"></td>
                                    <td class="cell cell-total" id="K47"></td>
                                </tr>
                            </table>
                        </div>
                        <h3>Game 9</h3>
                        <div class="table-responsive">
                            <table style="width: 100%; font-size: 1.2em;" class="text-center">
                                <tr>
                                    <td class="cell cell-image"></td>
                                    <td class="cell cell-innings"><strong>1</strong></td>
                                    <td class="cell cell-innings"><strong>2</strong></td>
                                    <td class="cell cell-innings"><strong>3</strong></td>
                                    <td class="cell cell-innings"><strong>4</strong></td>
                                    <td class="cell cell-innings"><strong>5</strong></td>
                                    <td class="cell cell-innings"><strong>6</strong></td>
                                    <td class="cell cell-innings"><strong>7</strong></td>
                                    <td class="cell cell-innings"><strong>8</strong></td>
                                    <td class="cell cell-innings"><strong>9</strong></td>
                                    <td class="cell cell-total"><strong>TOTAL</strong></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_SAS_100px.png"><br>VISITOR</td>
                                    <td class="cell cell-innings" id="B51"></td>
                                    <td class="cell cell-innings" id="C51"></td>
                                    <td class="cell cell-innings" id="D51"></td>
                                    <td class="cell cell-innings" id="E51"></td>
                                    <td class="cell cell-innings" id="F51"></td>
                                    <td class="cell cell-innings" id="G51"></td>
                                    <td class="cell cell-innings" id="H51"></td>
                                    <td class="cell cell-innings" id="I51"></td>
                                    <td class="cell cell-innings" id="J51"></td>
                                    <td class="cell cell-total" id="K51"></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_TAS_100px.png"><br>HOME</td>
                                    <td class="cell cell-innings" id="B53"></td>
                                    <td class="cell cell-innings" id="C53"></td>
                                    <td class="cell cell-innings" id="D53"></td>
                                    <td class="cell cell-innings" id="E53"></td>
                                    <td class="cell cell-innings" id="F53"></td>
                                    <td class="cell cell-innings" id="G53"></td>
                                    <td class="cell cell-innings" id="H53"></td>
                                    <td class="cell cell-innings" id="I53"></td>
                                    <td class="cell cell-innings" id="J53"></td>
                                    <td class="cell cell-total" id="K53"></td>
                                </tr>
                            </table>
                        </div>
                        <h3>Game 10</h3>
                        <div class="table-responsive">
                            <table style="width: 100%; font-size: 1.2em;" class="text-center">
                                <tr>
                                    <td class="cell cell-image"></td>
                                    <td class="cell cell-innings"><strong>1</strong></td>
                                    <td class="cell cell-innings"><strong>2</strong></td>
                                    <td class="cell cell-innings"><strong>3</strong></td>
                                    <td class="cell cell-innings"><strong>4</strong></td>
                                    <td class="cell cell-innings"><strong>5</strong></td>
                                    <td class="cell cell-innings"><strong>6</strong></td>
                                    <td class="cell cell-innings"><strong>7</strong></td>
                                    <td class="cell cell-innings"><strong>8</strong></td>
                                    <td class="cell cell-innings"><strong>9</strong></td>
                                    <td class="cell cell-total"><strong>TOTAL</strong></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_ISB_100px.png"><br>VISITOR</td>
                                    <td class="cell cell-innings" id="B57"></td>
                                    <td class="cell cell-innings" id="C57"></td>
                                    <td class="cell cell-innings" id="D57"></td>
                                    <td class="cell cell-innings" id="E57"></td>
                                    <td class="cell cell-innings" id="F57"></td>
                                    <td class="cell cell-innings" id="G57"></td>
                                    <td class="cell cell-innings" id="H57"></td>
                                    <td class="cell cell-innings" id="I57"></td>
                                    <td class="cell cell-innings" id="J57"></td>
                                    <td class="cell cell-total" id="K57"></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_ISM_100px.png"><br>HOME</td>
                                    <td class="cell cell-innings" id="B59"></td>
                                    <td class="cell cell-innings" id="C59"></td>
                                    <td class="cell cell-innings" id="D59"></td>
                                    <td class="cell cell-innings" id="E59"></td>
                                    <td class="cell cell-innings" id="F59"></td>
                                    <td class="cell cell-innings" id="G59"></td>
                                    <td class="cell cell-innings" id="H59"></td>
                                    <td class="cell cell-innings" id="I59"></td>
                                    <td class="cell cell-innings" id="J59"></td>
                                    <td class="cell cell-total" id="K59"></td>
                                </tr>
                            </table>
                        </div>
                        <h3>Game 11</h3>
                        <div class="table-responsive">
                            <table style="width: 100%; font-size: 1.2em;" class="text-center">
                                <tr>
                                    <td class="cell cell-image"></td>
                                    <td class="cell cell-innings"><strong>1</strong></td>
                                    <td class="cell cell-innings"><strong>2</strong></td>
                                    <td class="cell cell-innings"><strong>3</strong></td>
                                    <td class="cell cell-innings"><strong>4</strong></td>
                                    <td class="cell cell-innings"><strong>5</strong></td>
                                    <td class="cell cell-innings"><strong>6</strong></td>
                                    <td class="cell cell-innings"><strong>7</strong></td>
                                    <td class="cell cell-innings"><strong>8</strong></td>
                                    <td class="cell cell-innings"><strong>9</strong></td>
                                    <td class="cell cell-total"><strong>TOTAL</strong></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_TAS_100px.png"><br>VISITOR</td>
                                    <td class="cell cell-innings" id="B63"></td>
                                    <td class="cell cell-innings" id="C63"></td>
                                    <td class="cell cell-innings" id="D63"></td>
                                    <td class="cell cell-innings" id="E63"></td>
                                    <td class="cell cell-innings" id="F63"></td>
                                    <td class="cell cell-innings" id="G63"></td>
                                    <td class="cell cell-innings" id="H63"></td>
                                    <td class="cell cell-innings" id="I63"></td>
                                    <td class="cell cell-innings" id="J63"></td>
                                    <td class="cell cell-total" id="K63"></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_ISKL_100px.png"><br>HOME</td>
                                    <td class="cell cell-innings" id="B65"></td>
                                    <td class="cell cell-innings" id="C65"></td>
                                    <td class="cell cell-innings" id="D65"></td>
                                    <td class="cell cell-innings" id="E65"></td>
                                    <td class="cell cell-innings" id="F65"></td>
                                    <td class="cell cell-innings" id="G65"></td>
                                    <td class="cell cell-innings" id="H65"></td>
                                    <td class="cell cell-innings" id="I65"></td>
                                    <td class="cell cell-innings" id="J65"></td>
                                    <td class="cell cell-total" id="K65"></td>
                                </tr>
                            </table>
                        </div>
                        <h3>Game 12</h3>
                        <div class="table-responsive">
                            <table style="width: 100%; font-size: 1.2em;" class="text-center">
                                <tr>
                                    <td class="cell cell-image"></td>
                                    <td class="cell cell-innings"><strong>1</strong></td>
                                    <td class="cell cell-innings"><strong>2</strong></td>
                                    <td class="cell cell-innings"><strong>3</strong></td>
                                    <td class="cell cell-innings"><strong>4</strong></td>
                                    <td class="cell cell-innings"><strong>5</strong></td>
                                    <td class="cell cell-innings"><strong>6</strong></td>
                                    <td class="cell cell-innings"><strong>7</strong></td>
                                    <td class="cell cell-innings"><strong>8</strong></td>
                                    <td class="cell cell-innings"><strong>9</strong></td>
                                    <td class="cell cell-total"><strong>TOTAL</strong></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_JIS_100px.png"><br>VISITOR</td>
                                    <td class="cell cell-innings" id="B69"></td>
                                    <td class="cell cell-innings" id="C69"></td>
                                    <td class="cell cell-innings" id="D69"></td>
                                    <td class="cell cell-innings" id="E69"></td>
                                    <td class="cell cell-innings" id="F69"></td>
                                    <td class="cell cell-innings" id="G69"></td>
                                    <td class="cell cell-innings" id="H69"></td>
                                    <td class="cell cell-innings" id="I69"></td>
                                    <td class="cell cell-innings" id="J69"></td>
                                    <td class="cell cell-total" id="K69"></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_SAS_100px.png"><br>HOME</td>
                                    <td class="cell cell-innings" id="B71"></td>
                                    <td class="cell cell-innings" id="C71"></td>
                                    <td class="cell cell-innings" id="D71"></td>
                                    <td class="cell cell-innings" id="E71"></td>
                                    <td class="cell cell-innings" id="F71"></td>
                                    <td class="cell cell-innings" id="G71"></td>
                                    <td class="cell cell-innings" id="H71"></td>
                                    <td class="cell cell-innings" id="I71"></td>
                                    <td class="cell cell-innings" id="J71"></td>
                                    <td class="cell cell-total" id="K71"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="Day3">
                    <div class="col-lg-12 text-center">
                        <h3>Game 13</h3>
                        <div class="table-responsive">
                            <table style="width: 100%; font-size: 1.2em;" class="text-center">
                                <tr>
                                    <td class="cell cell-image"></td>
                                    <td class="cell cell-innings"><strong>1</strong></td>
                                    <td class="cell cell-innings"><strong>2</strong></td>
                                    <td class="cell cell-innings"><strong>3</strong></td>
                                    <td class="cell cell-innings"><strong>4</strong></td>
                                    <td class="cell cell-innings"><strong>5</strong></td>
                                    <td class="cell cell-innings"><strong>6</strong></td>
                                    <td class="cell cell-innings"><strong>7</strong></td>
                                    <td class="cell cell-innings"><strong>8</strong></td>
                                    <td class="cell cell-innings"><strong>9</strong></td>
                                    <td class="cell cell-total"><strong>TOTAL</strong></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_ISB_100px.png"><br>VISITOR</td>
                                    <td class="cell cell-innings" id="B75"></td>
                                    <td class="cell cell-innings" id="C75"></td>
                                    <td class="cell cell-innings" id="D75"></td>
                                    <td class="cell cell-innings" id="E75"></td>
                                    <td class="cell cell-innings" id="F75"></td>
                                    <td class="cell cell-innings" id="G75"></td>
                                    <td class="cell cell-innings" id="H75"></td>
                                    <td class="cell cell-innings" id="I75"></td>
                                    <td class="cell cell-innings" id="J75"></td>
                                    <td class="cell cell-total" id="K75"></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_TAS_100px.png"><br>HOME</td>
                                    <td class="cell cell-innings" id="B77"></td>
                                    <td class="cell cell-innings" id="C77"></td>
                                    <td class="cell cell-innings" id="D77"></td>
                                    <td class="cell cell-innings" id="E77"></td>
                                    <td class="cell cell-innings" id="F77"></td>
                                    <td class="cell cell-innings" id="G77"></td>
                                    <td class="cell cell-innings" id="H77"></td>
                                    <td class="cell cell-innings" id="I77"></td>
                                    <td class="cell cell-innings" id="J77"></td>
                                    <td class="cell cell-total" id="K77"></td>
                                </tr>
                            </table>
                        </div>
                        <h3>Game 14</h3>
                        <div class="table-responsive">
                            <table style="width: 100%; font-size: 1.2em;" class="text-center">
                                <tr>
                                    <td class="cell cell-image"></td>
                                    <td class="cell cell-innings"><strong>1</strong></td>
                                    <td class="cell cell-innings"><strong>2</strong></td>
                                    <td class="cell cell-innings"><strong>3</strong></td>
                                    <td class="cell cell-innings"><strong>4</strong></td>
                                    <td class="cell cell-innings"><strong>5</strong></td>
                                    <td class="cell cell-innings"><strong>6</strong></td>
                                    <td class="cell cell-innings"><strong>7</strong></td>
                                    <td class="cell cell-innings"><strong>8</strong></td>
                                    <td class="cell cell-innings"><strong>9</strong></td>
                                    <td class="cell cell-total"><strong>TOTAL</strong></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_ISKL_100px.png"><br>VISITOR</td>
                                    <td class="cell cell-innings" id="B81"></td>
                                    <td class="cell cell-innings" id="C81"></td>
                                    <td class="cell cell-innings" id="D81"></td>
                                    <td class="cell cell-innings" id="E81"></td>
                                    <td class="cell cell-innings" id="F81"></td>
                                    <td class="cell cell-innings" id="G81"></td>
                                    <td class="cell cell-innings" id="H81"></td>
                                    <td class="cell cell-innings" id="I81"></td>
                                    <td class="cell cell-innings" id="J81"></td>
                                    <td class="cell cell-total" id="K81"></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_JIS_100px.png"><br>HOME</td>
                                    <td class="cell cell-innings" id="B83"></td>
                                    <td class="cell cell-innings" id="C83"></td>
                                    <td class="cell cell-innings" id="D83"></td>
                                    <td class="cell cell-innings" id="E83"></td>
                                    <td class="cell cell-innings" id="F83"></td>
                                    <td class="cell cell-innings" id="G83"></td>
                                    <td class="cell cell-innings" id="H83"></td>
                                    <td class="cell cell-innings" id="I83"></td>
                                    <td class="cell cell-innings" id="J83"></td>
                                    <td class="cell cell-total" id="K83"></td>
                                </tr>
                            </table>
                        </div>
                        <h3>Game 15</h3>
                        <div class="table-responsive">
                            <table style="width: 100%; font-size: 1.2em;" class="text-center">
                                <tr>
                                    <td class="cell cell-image"></td>
                                    <td class="cell cell-innings"><strong>1</strong></td>
                                    <td class="cell cell-innings"><strong>2</strong></td>
                                    <td class="cell cell-innings"><strong>3</strong></td>
                                    <td class="cell cell-innings"><strong>4</strong></td>
                                    <td class="cell cell-innings"><strong>5</strong></td>
                                    <td class="cell cell-innings"><strong>6</strong></td>
                                    <td class="cell cell-innings"><strong>7</strong></td>
                                    <td class="cell cell-innings"><strong>8</strong></td>
                                    <td class="cell cell-innings"><strong>9</strong></td>
                                    <td class="cell cell-total"><strong>TOTAL</strong></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_SAS_100px.png"><br>VISITOR</td>
                                    <td class="cell cell-innings" id="B87"></td>
                                    <td class="cell cell-innings" id="C87"></td>
                                    <td class="cell cell-innings" id="D87"></td>
                                    <td class="cell cell-innings" id="E87"></td>
                                    <td class="cell cell-innings" id="F87"></td>
                                    <td class="cell cell-innings" id="G87"></td>
                                    <td class="cell cell-innings" id="H87"></td>
                                    <td class="cell cell-innings" id="I87"></td>
                                    <td class="cell cell-innings" id="J87"></td>
                                    <td class="cell cell-total" id="K87"></td>
                                </tr>
                                <tr>
                                    <td class="cell cell-image"><img class="img-responsive" src="../img/schools/school_ISM_100px.png"><br>HOME</td>
                                    <td class="cell cell-innings" id="B89"></td>
                                    <td class="cell cell-innings" id="C89"></td>
                                    <td class="cell cell-innings" id="D89"></td>
                                    <td class="cell cell-innings" id="E89"></td>
                                    <td class="cell cell-innings" id="F89"></td>
                                    <td class="cell cell-innings" id="G89"></td>
                                    <td class="cell cell-innings" id="H89"></td>
                                    <td class="cell cell-innings" id="I89"></td>
                                    <td class="cell cell-innings" id="J89"></td>
                                    <td class="cell cell-total" id="K89"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->

    <?php include '../includes/footer.html' ?>

    <script src="https://spreadsheets.google.com/feeds/cells/1nbFx-Eefm0h8lbgwcEPR9Qn6ESji35XBpwqZfk1nKeE/3/public/values?alt=json-in-script&amp;callback=displayContent" type="text/javascript"></script>

</body>
</html>