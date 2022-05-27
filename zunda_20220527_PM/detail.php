<?php


?>
<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.3/assets/css/docs.min.css" crossorigin="anonymous">

    <title>美人登録システム</title>
</head>

<body style="padding-top: 50px;">
<?php include 'header.php';?>
<main>
    <div class="container-fluid px-0">
        <div class="jumbotron jumbotron-fluid py-4">
            <div class="row no-gutters">
                <div class="col-md-3">
                    <div class="container ">
                        <h3 class="text-muted text-center">男優</h3>
                        <h3 class="text-center">大川竜弥</h3>
                        <p class="lead text-center">オオカワタツヤ</p>
                    </div>
                </div>
                <div class="col-md-9">
                    <div id="foo" class="carousel slide shadow" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#foo" data-slide-to="0" class="active"></li>
                            <li data-target="#foo" data-slide-to="1"></li>
                            <li data-target="#foo" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/Tatsuya_OHKAWA_01.jpg" class="img-fluid" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img src="img/Tatsuya_OHKAWA_02.jpg" class="img-fluid" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img src="img/Tatsuya_OHKAWA_03.jpg" class="img-fluid" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#foo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#foo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-4  ">
        <dl class="row d-flex justify-content-center">
            <dt class="col-md-3">芸名</dt>
            <dd class="col-md-9">大川竜弥</dd>
            <dt class="col-md-3">芸名カナ</dt>
            <dd class="col-md-9">オオカワタツヤ</dd>
            <dt class="col-md-3">ジャンル</dt>
            <dd class="col-md-9">男優</dd>
            <dt class="col-md-3">生年月日</dt>
            <dd class="col-md-9">1984/4/20</dd>
            <dt class="col-md-3">血液型</dt>
            <dd class="col-md-9">A型</dd>
            <dt class="col-md-3">身長</dt>
            <dd class="col-md-9">173cm</dd>
            <dt class="col-md-3">出身地</dt>
            <dd class="col-md-9">岐阜県</dd>
            <dt class="col-md-3">性別</dt>
            <dd class="col-md-9">男性</dd>
            <dt class="col-md-3">特技</dt>
            <dd class="col-md-9">落語</dd>
        </dl>
    </div>
</main>

<?php include 'footer.php';?>
</body>

</html>