<?php
include '../lib/connect.php';
include '../lib/queryPersonalData.php';

$result="";
//他画面から遷移してきた場合
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
    <style>
        @media (max-width: 600px) {
            .title {
                font-size: 1rem;
            }
        }
    </style>
    <title>詳細画面</title>
</head>
<body>
    <div style="padding-top: 50px;" class="mb-5">
        <?php include 'header.php';?>
        <main>
                <div class="container pb-4 mt-3">
                    <dl class=" row">
                        <dt class="col-sm-3">名前</dt>
                        <dd class="col-sm-9"><?php echo $result->getName(); ?></dd>
                        <dt class="col-sm-3">年齢</dt>
                        <dd class="col-sm-9"><?php echo $result->getAge(); ?></dd>
                        <dt class="col-sm-3">分類</dt>
                        <dd class="col-sm-9"><?php echo $result->getCategory(); ?></dd>
                        <dt class="col-sm-3">生年月日</dt>
                        <dd class="col-sm-9"><?php echo $result->getBirthday(); ?></dd>
                        <dt class="col-sm-3">血液型</dt>
                        <dd class="col-sm-9"><?php echo $result->getBloodtype(); ?></dd>
                        <dt class="col-sm-3">身長</dt>
                        <dd class="col-sm-9"><?php echo $result->getHeight(); ?></dd>
                        <dt class="col-sm-3">出身地</dt>
                        <dd class="col-sm-9"><?php echo $result->getBirthplace(); ?></dd>
                        <dt class="col-sm-3">特記事項</dt>
                        <dd class="col-sm-9"><?php echo $result->getNotices(); ?></dd>
                    </dl>
                    <div class="row my-2">
                        <div class="col-sm-12">
                            <img src="uploads/<?php echo $result->getPicdata0(); ?>" alt="" class="img-fluid img-thumbnail">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="uploads/<?php echo $result->getPicdata1(); ?>" alt="" class="img-fluid img-thumbnail">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="uploads/<?php echo $result->getPicdata2(); ?>" alt="" class="img-fluid img-thumbnail">
                        </div>
                    </div>
                </div>
        </main>
    </div>

    <?php include 'footer.php';?>
</body>

</html>