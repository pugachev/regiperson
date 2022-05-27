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
    <style>
        @media (max-width: 600px) {
            .title {
                font-size: 1rem;
            }
        }
    </style>
    <title>美人登録システム</title>
</head>
<body>
<div style="padding-top: 50px;">

<?php include 'header.php';?>
<main>
<div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="h4">美女一覧</h1>
            <p class="lead">アナウンサー・キャスター</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card-deck m-3">
            <div class="card">
                <a href="detail.php">
                    <img src="img/Tatsuya_OHKAWA_01.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h3 class="card-title h4"><a href="detail.html" class="text-dark">大川竜弥</a></h3>
                    <h6 class="card-subtitle text-secondary">オオカワタツヤ</h6>
                </div>
            </div>
            <div class="card">
                <a href="detail.php">
                    <img src="img/Yuka_KAWAMURA_01.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h3 class="card-title h4"><a href="detail.html" class="text-dark">河村友歌</a></h3>
                    <h6 class="card-subtitle text-secondary">カワムラユカ</h6>
                </div>
            </div>
            <div class="card">
                <a href="detail.php">
                    <img src="img/Saya_AKENE_01.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h3 class="card-title h4"><a href="detail.html" class="text-dark">茜さや</a></h3>
                    <h6 class="card-subtitle text-secondary">アカネサヤ</h6>
                </div>
            </div>
            <div class="card">
                <a href="detail.php">
                    <img src="img/Hayato_DANDA_01.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h3 class="card-title h4"><a href="detail.html" class="text-dark">段田隼人</a></h3>
                    <h6 class="card-subtitle text-secondary">ダンダハヤト</h6>
                </div>
            </div>
        </div>
        <div class="card-deck m-3">
            <div class="card">
                <a href="detail.php">
                    <img src="img/Youko_01.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h3 class="card-title h4"><a href="detail.html" class="text-dark">暢子</a></h3>
                    <h6 class="card-subtitle text-secondary">ヨウコ</h6>
                </div>
            </div>
            <div class="card">
                <a href="detail.php">
                    <img src="img/Miu_SHIOTA_01.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h3 class="card-title h4"><a href="detail.html" class="text-dark">塩田みう</a></h3>
                    <h6 class="card-subtitle text-secondary">シオタミウ</h6>
                </div>
            </div>
            <div class="card">
                <a href="detail.php">
                    <img src="img/Yuusei_01.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h3 class="card-title h4"><a href="detail.html" class="text-dark">ゆうせい</a></h3>
                    <h6 class="card-subtitle text-secondary">ユウセイ</h6>
                </div>
            </div>
            <div class="card">
                <a href="detail.php">
                    <img src="img/Serina_KAWAKO_01.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h3 class="card-title h4"><a href="detail.html" class="text-dark">川子芹那</a></h3>
                    <h6 class="card-subtitle text-secondary">カワコセリナ</h6>
                </div>
            </div>
        </div>

        <nav class="m-4">
            <ul class="pagination d-flex justify-content-center align-items-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">前</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">次</a>
                </li>
            </ul>
        </nav>
    </div>
</main>

<?php include 'footer.php';?>
</body>

</html>