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
                                <tr>
                                    <th>1</th>
                                    <td><a href="detail.php">宇垣美里</a></td>
                                    <td>30</td>
                                    <td>フリー</td>
                                    <td><a href="edit.php" class="btn btn-primary btn-xs">編集</a></td>
                                    <td><a href="" class="btn btn-primary btn-xs">削除</a></td>
                                </tr>

                                <tr>
                                    <th>2</th>
                                    <td><a href="detail.phpl">相場詩織</a></td>
                                    <td>30</td>
                                    <td>フリー</td>
                                    <td><a href="edit.php" class="btn btn-primary btn-xs">編集</a></td>
                                    <td><a href="#" class="btn btn-primary btn-xs">削除</a></td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td><a href="detail.php">良原安美</a></td>
                                    <td>26</td>
                                    <td>TBS</td>
                                    <td><a href="edit.php" class="btn btn-primary btn-xs">編集</a></td>
                                    <td><a href="#" class="btn btn-primary btn-xs">削除</a></td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td><a href="detail.php">馬場典子</a></td>
                                    <td>48</td>
                                    <td>フリー</td>
                                    <td><a href="edit.php" class="btn btn-primary btn-xs">編集</a></td>
                                    <td><a href="#" class="btn btn-primary btn-xs">削除</a></td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td><a href="detail.php">加藤綾子</a></td>
                                    <td>36</td>
                                    <td>フリー</td>
                                    <td><a href="edit.php" class="btn btn-primary btn-xs">編集</a></td>
                                    <td><a href="#" class="btn btn-primary btn-xs">削除</a></td>
                                </tr>
                                <tr>
                                    <th>6</th>
                                    <td><a href="detail.php">堤礼実</a></td>
                                    <td>28</td>
                                    <td>フジテレビ</td>
                                    <td><a href="edit.php" class="btn btn-primary btn-xs">編集</a></td>
                                    <td><a href="#" class="btn btn-primary btn-xs">削除</a></td>
                                </tr>
                                <tr>
                                    <th>7</th>
                                    <td><a href="detail.php">高見侑里</a></td>
                                    <td>33</td>
                                    <td>フリー</td>
                                    <td><a href="edit.php" class="btn btn-primary btn-xs">編集</a></td>
                                    <td><a href="#" class="btn btn-primary btn-xs">削除</a></td>
                                </tr>
                                <tr>
                                    <th>8</th>
                                    <td><a href="detail.php">牧野結美</a></td>
                                    <td>32</td>
                                    <td>フリー</td>
                                    <td><a href="edit.php" class="btn btn-primary btn-xs">編集</a></td>
                                    <td><a href="#" class="btn btn-primary btn-xs">削除</a></td>
                                </tr>
                                <tr>
                                    <th>9</th>
                                    <td><a href="detail.php">後呂有紗</a></td>
                                    <td>28</td>
                                    <td>日テレ</td>
                                    <td><a href="edit.php" class="btn btn-primary btn-xs">編集</a></td>
                                    <td><a href="#" class="btn btn-primary btn-xs">削除</a></td>
                                </tr>
                                <tr>
                                    <th>10</th>
                                    <td><a href="detail.php">高田秋</a></td>
                                    <td>30</td>
                                    <td>フリー</td>
                                    <td><a href="edit.php" class="btn btn-primary btn-xs">編集</a></td>
                                    <td><a href="#" class="btn btn-primary btn-xs">削除</a></td>
                                </tr>
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