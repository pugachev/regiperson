<?php
include __DIR__.'/lib/connect.php';
include __DIR__.'/lib/queryPersonalData.php';

$limit=8;
$qpd=new QueryPersonalData();
$currentpage ="";

if(!empty($_GET['page']))
{
    $results = $qpd->getAllData($_GET['page']);
    $currentpage=$_GET['page'];
}
else
{
    $results = $qpd->getAllData(1);
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
            <?php if(!empty($results["people"]))
            { 
                for($i=0;$i<4;$i++)
                {
                    print '<div class="card">';
                    print '<a href="detail.php?id='.$results["people"][$i]->getId().'">';
                    print '<img src="admin/uploads/'.$results["people"][$i]->getPicdata0().'" class="card-img-top" alt="...">';
                    print '</a>';
                    print '<div class="card-body">';
                    print '<h3 class="card-title h4"><a href="detail.html" class="text-dark">'.$results["people"][$i]->getName().'</a></h3>';
                    print '<h6 class="card-subtitle text-secondary">'.$results["people"][$i]->getAge().'</h6>';
                    print '</div>';
                    print '</div>';
                }
            }?>
        </div>
        <div class="card-deck m-3">
            <?php if(!empty($results["people"]))
            { 
                for($i=4;$i<8;$i++)
                {
                    print '<div class="card">';
                    print '<a href="detail.php?id='.$results["people"][$i]->getId().'">';
                    print '<img src="admin/uploads/'.$results["people"][$i]->getPicdata0().'" class="card-img-top" alt="...">';
                    print '</a>';
                    print '<div class="card-body">';
                    print '<h3 class="card-title h4"><a href="detail.html" class="text-dark">'.$results["people"][$i]->getName().'</a></h3>';
                    print '<h6 class="card-subtitle text-secondary">'.$results["people"][$i]->getAge().'</h6>';
                    print '</div>';
                    print '</div>';
                }
            }?>
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