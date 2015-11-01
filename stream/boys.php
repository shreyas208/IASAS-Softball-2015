<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../includes/head.html' ?>

    <link href="../css/flags.css" rel="stylesheet">

    <title>Boys Stream | IASAS Softball 2015</title>

    <script type='text/javascript'>
        function reloadContent() {
            $.ajax({
                'async': true,
                'global': false,
                'url': 'https://spreadsheets.google.com/feeds/cells/1nbFx-Eefm0h8lbgwcEPR9Qn6ESji35XBpwqZfk1nKeE/4/public/values?alt=json&amp;callback=displayContent',
                'dataType': "json",
                'success': function (data) {
                    displayContent(data);
                }
            });
        }
        function displayContent(json) {
            if (json.feed.openSearch$totalResults.$t == '0') {
                document.getElementById('gameTitle').innerHTML = 'No Ongoing Game';
                $('#visitorCol').addClass('hidden');
                $('#homeCol').addClass('hidden');
            } else {
                document.getElementById('homeLabel').innerHTML = 'HOME';
                document.getElementById('visitorLabel').innerHTML = 'VISITOR';
                $('#visitorCol').removeClass('hidden');
                $('#homeCol').removeClass('hidden');
                clearScores();
                for (var i = 0 ; i < json.feed.entry.length ; i++) {
                    var cell = json.feed.entry[i].title.$t;
                    if (cell == 'A1') {
                        document.getElementById('gameTitle').innerHTML = json.feed.entry[i].content.$t;
                    } else if (cell == 'A3') {
                        document.getElementById('visitorLogo').src = '../img/schools/school_' + json.feed.entry[i].content.$t + '.png';
                    } else if (cell == 'A5') {
                        document.getElementById('homeLogo').src = '../img/schools/school_' + json.feed.entry[i].content.$t + '.png';
                    } else if (cell == 'K3') {
                        document.getElementById('visitorTotal').innerHTML = json.feed.entry[i].content.$t;
                    } else if (cell == 'K5') {
                        document.getElementById('homeTotal').innerHTML = json.feed.entry[i].content.$t;
                    } else if (document.getElementById(cell) != null) {
                        document.getElementById(cell).innerHTML = json.feed.entry[i].content.$t;
                    }
                }
            }
        }
        function clearScores() {
            var cells = ['B3','C3','D3','E3','F3','G3','H3','I3','J3','B5','C5','D5','E5','F5','G5','H5','I5','J5'];
            for (var i = 0 ; i < 18 ; i++) {
                document.getElementById(cells[i]).innerHTML = '';
            }
        }
    </script>

</head>
<style>
    body {
        background: url(../img/backgrounds/JIS_blue.png) repeat;
    }
</style>
<style type="text/css">
    .video-container {     position: relative;  padding-bottom: 56.25%;     padding-top: 30px; height: 0; overflow:visible; }
    .video-container iframe, .video-container object, .video-container embed  {     position: absolute;     top: 0;     left: 0;     width: 100%;     height: 100%; }
</style>
<body>

    <?php include '../includes/nav.html' ?>

    <div class="container" style="background-color: white">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Boys Stream</h1>
            </div>
        </div>
    </div><!-- /.container -->
    <div class="container" style="background:white">
        <div class="row">
            <div class="col-lg-8 col-md-8 text-center">
                <h3 id="gameTitle">Loading...</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 text-center">
                <h4>NOTE: Click <a href="https://www.youtube.com/watch?v=lfzQ0P33PFk" target="_blank">here</a> for previous Day 2 footage.</h4>
                <div class="video-container">
                    <?php
                    date_default_timezone_set('Asia/Jakarta');
                    $date = getdate();
                    $vidkey = '';
                    if ($date['mon'] == 4) {
                        if ($date['mday'] == 10) {
                            $vidkey = 'L8qILOGE9S8';
                        } else if ($date['mday'] == 11) {
                            $vidkey = '_dE3UvP1yGQ';
                        } else if ($date['mday'] == 12) {
                            $vidkey = '2vkTFWwvvkA';
                        }
                    }
                    if ($vidkey != '') {
                        echo '<iframe style="padding-bottom:16px" width="100%" height="100%" src="http://www.youtube.com/embed/'.$vidkey.'?autoplay=1" frameborder="0" allowfullscreen></iframe>';
                    }
                    if ($date['mon'] == 4 || $date['mday'] < 10 || $date['mday'] > 12) {
                        echo '<h3>The Live Stream will be available from 8:00AM, Friday  April 2015</h3>';
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 text-center hidden" id="visitorCol">
                <h4 id="visitorLabel"></h4>
                <img class="img-responsive" style="display: inline" id="visitorLogo">
                <br>
                <h1 id="visitorTotal"></h1>
                <table class="table table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th class="text-center">Innings</th>
                            <th class="text-center">Runs</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td><td id="B3"></td>
                    </tr>
                    <tr>
                        <td>2</td><td id="C3"></td>
                    </tr>
                    <tr>
                        <td>3</td><td id="D3"></td>
                    </tr>
                    <tr>
                        <td>4</td><td id="E3"></td>
                    </tr>
                    <tr>
                        <td>5</td><td id="F3"></td>
                    </tr>
                    <tr>
                        <td>6</td><td id="G3"></td>
                    </tr>
                    <tr>
                        <td>7</td><td id="H3"></td>
                    </tr>
                    <tr>
                        <td>8</td><td id="I3"></td>
                    </tr>
                    <tr>
                        <td>9</td><td id="J3"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 text-center hidden" id="homeCol">
                <h4 id="homeLabel"></h4>
                <img class="img-responsive" style="display: inline" id="homeLogo">
                <br>
                <h1 id="homeTotal"></h1>
                <table class="table table-bordered table-condensed">
                    <thead>
                    <tr>
                        <th class="text-center">Innings</th>
                        <th class="text-center">Runs</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td><td id="B5"></td>
                    </tr>
                    <tr>
                        <td>2</td><td id="C5"></td>
                    </tr>
                    <tr>
                        <td>3</td><td id="D5"></td>
                    </tr>
                    <tr>
                        <td>4</td><td id="E5"></td>
                    </tr>
                    <tr>
                        <td>5</td><td id="F5"></td>
                    </tr>
                    <tr>
                        <td>6</td><td id="G5"></td>
                    </tr>
                    <tr>
                        <td>7</td><td id="H5"></td>
                    </tr>
                    <tr>
                        <td>8</td><td id="I5"></td>
                    </tr>
                    <tr>
                        <td>9</td><td id="J5"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-8 col-md-8">
                <h4>Recorded Video</h4>
                <a href="https://www.youtube.com/watch?v=L8qILOGE9S8" target="_blank">
                    <button type="button" class="btn btn-warning" style="width:84px; margin-bottom:5px; margin-right:10px">
                        <strong>Day 1</strong>
                    </button>
                </a>
                <a href="https://www.youtube.com/watch?v=lfzQ0P33PFk" target="_blank">
                    <button type="button" class="btn btn-warning" style="width:84px; margin-bottom:5px; margin-right:10px">
                        <strong>Day 2 - 1</strong>
                    </button>
                </a>
                <a href="https://www.youtube.com/watch?v=_dE3UvP1yGQ" target="_blank">
                    <button type="button" class="btn btn-warning" style="width:84px; margin-bottom:5px; margin-right:10px">
                        <strong>Day 2 - 2</strong>
                    </button>
                </a>
                <!--<a href="https://www.youtube.com/watch?v=2vkTFWwvvkA" target="_blank">
                    <button type="button" class="btn btn-warning" style="width:84px; margin-bottom:5px; margin-right:10px">
                        <strong>Day 3</strong>
                    </button>
                </a>-->
            </div>
        </div>
    </div><!-- /.container -->

    <?php include '../includes/footer.html' ?>

    <script type="text/javascript">
        reloadContent();
        setInterval(reloadContent,5000);
    </script>

</body>
</html>