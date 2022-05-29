<?php
include '../lib/connect.php';
include '../lib/queryPersonalData.php';

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
    <?php include 'header.php';?>
    <div class="container padding-top: 50px;">
        <main>
            <div class="container-fluid mt-4">
                    <div class="table-responsive-md">
                        <table class="table table-hover table-striped text-nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>名前</th>
                                    <th>年齢</th>
                                    <th>所属</th>
                                    <th>編集</th>
                                    <th>削除</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($results["people"]))
                                { 
                                    foreach($results["people"] as $key=>$result)
                                    {
                                        print '<tr>';
                                        print '<th>'.$key.'</th>';
                                        print '<td><a href="detail.php?id='.$result->getId().'">'.$result->getName().'</a></td>';
                                        print '<td>'.$result->getAge().'</td>';
                                        print '<td>'.$result->getCategory().'</td>';
                                        print '<td><a href="edit.php?id='.$result->getId().'" class="btn btn-primary btn-xs">編集</a></td>';
                                        print '<td><a href="" class="btn btn-primary btn-xs">削除</a></td>';
                                        print '</tr>';
                                    }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <?php if(!empty($results["totalcnt"]) && intval($results["totalcnt"])>8)
                { 
                    print '<nav class="mt-1 mb-4">';
                    print '<ul class="pagination d-flex justify-content-center">';
                    for ($i = 1; $i <= ceil(intval($results["totalcnt"]) / $limit); $i++)
                    {
                        if($i==$currentpage)
                        {
                            print '<li class="page-item active"><a class="page-link" href="index.php?page='.$i.'">'.$i.'</a></li>';
                        }
                        else
                        {

                            print '<li class="page-item"><a class="page-link" href="index.php?page='.$i.'">'.$i.'</a></li>';
                        }
                        
                    }
                    print '</ul>';
                    print '</nav>';
                } ?>

            </div>
        </main>
    </div>
    <?php include 'footer.php';?> 

</body>

</html>