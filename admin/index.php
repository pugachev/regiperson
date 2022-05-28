<?php
include '../lib/connect.php';
include '../lib/queryPersonalData.php';

$qpd=new QueryPersonalData();
$results = $qpd->getAllData();

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
                                <?php if(!empty($results))
                                { 
                                    foreach($results as $key=>$result)
                                    {
                                        print '<tr>';
                                        print '<th>'.$key.'</th>';
                                        print '<td><a href="detail.php">'.$result->getName().'</a></td>';
                                        print '<td>'.$result->getAge().'</td>';
                                        print '<td>'.$result->getCategory().'</td>';
                                        print '<td><a href="edit.php"'.aaa.'class="btn btn-primary btn-xs">編集</a></td>';
                                        print '<td><a href="" class="btn btn-primary btn-xs">削除</a></td>';
                                        print '</tr>';
                                    }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <nav class="mt-1 mb-4">
                    <ul class="pagination d-flex justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">前</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">次</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </main>
    </div>
    <?php include 'footer.php';?> 

</body>

</html>