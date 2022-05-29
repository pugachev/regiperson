<?php
include __DIR__.'/lib/connect.php';
include __DIR__.'/lib/queryPersonalData.php';

if(!empty($_GET['id']))
{
    $personaldata = new QueryPersonalData();
    $result = $personaldata->getDatum($_GET['id']);

}

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
                        <h3 class="text-muted text-center"><?php echo $result->getCategory(); ?></h3>
                        <h3 class="text-center"><?php echo $result->getName(); ?></h3>
                        <p class="lead text-center"><?php echo $result->getAge(); ?></p>
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
                                <img src="admin/uploads/<?php echo $result->getPicdata0(); ?>" class="img-fluid" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img src="admin/uploads/<?php echo $result->getPicdata1(); ?>" class="img-fluid" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img src="admin/uploads/<?php echo $result->getPicdata2(); ?>" class="img-fluid" alt="Third slide">
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
            <dt class="col-md-3">名前</dt>
            <dd class="col-md-9"><?php echo $result->getName(); ?></dd>
            <dt class="col-md-3">分類</dt>
            <dd class="col-md-9"><?php echo $result->getCategory(); ?></dd>
            <dt class="col-md-3">生年月日</dt>
            <dd class="col-md-9"><?php echo $result->getBirthday(); ?></dd>
            <dt class="col-md-3">身長</dt>
            <dd class="col-md-9"><?php echo $result->getHeight(); ?></dd>
            <dt class="col-md-3">出身地</dt>
            <dd class="col-md-9"><?php echo $result->getBirthPlace(); ?></dd>
            <dt class="col-md-3">特記事項</dt>
            <dd class="col-md-9"><?php echo $result->getNotices(); ?></dd>
        </dl>
    </div>
</main>

<?php include 'footer.php';?>
</body>

</html>