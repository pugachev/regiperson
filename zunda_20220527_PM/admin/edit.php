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
                font-size: 0.5rem;
            }
        }
    </style>
    <title>ずんだ芸能</title>
</head>

<body>
    <div style="padding-top: 50px;" class="mb-5">
    <?php include 'header.php';?>
        <!-- <main> -->
        <div class="container">
            <form class="mt-3 pb-3" action="detail.html">
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">芸名</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" placeholder="芸名" value="大川竜弥">
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label for="nameKana" class="col-sm-3 col-form-label">芸名カナ</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nameKana" placeholder="芸名カナ" value="オオカワタツヤ">
                    </div>
                </div> -->
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-3 pt-0">ジャンル</legend>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genre" id="genreActor"
                                    value="genreActor" checked>
                                <label class="form-check-label" for="genreActor">
                                    男優
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genre" id="genreActress"
                                    value="genreActress">
                                <label class="form-check-label" for="genreActress">
                                    女優
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genre" id="genreSinger"
                                    value="genreSinger">
                                <label class="form-check-label" for="genreSinger">
                                    歌手
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genre" id="genreVariety"
                                    value="genreVariety">
                                <label class="form-check-label" for="genreVariety">
                                    バラエティ
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <label for="dateOfBirth" class="col-sm-3 col-form-label">生年月日</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="dateOfBirth" placeholder="yyyy/mm/dd"
                            value="1984/4/20">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-3 pt-0">血液型</legend>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bloodType" id="bloodTypeA"
                                    value="bloodTypeA" checked>
                                <label class="form-check-label" for="bloodTypeA">
                                    A型
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bloodType" id="bloodTypeB"
                                    value="bloodTypeB">
                                <label class="form-check-label" for="bloodTypeB">
                                    B型
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bloodType" id="bloodTypeAB"
                                    value="bloodTypeAB">
                                <label class="form-check-label" for="bloodTypeAB">
                                    AB型
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bloodType" id="bloodTypeO"
                                    value="bloodTypeO">
                                <label class="form-check-label" for="bloodTypeO">
                                    O型
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <label for="height" class="col-sm-3 col-form-label">身長（cm）</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="height" placeholder="165" value="173">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hometown" class="col-sm-3 col-form-label">出身地</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="hometown">
                            <option value="" selected>都道府県</option>
                            <option value="北海道">北海道</option>
                            <option value="青森県">青森県</option>
                            <option value="岩手県">岩手県</option>
                            <option value="宮城県">宮城県</option>
                            <option value="秋田県">秋田県</option>
                            <option value="山形県">山形県</option>
                            <option value="福島県">福島県</option>
                            <option value="茨城県">茨城県</option>
                            <option value="栃木県">栃木県</option>
                            <option value="群馬県">群馬県</option>
                            <option value="埼玉県">埼玉県</option>
                            <option value="千葉県">千葉県</option>
                            <option value="東京都">東京都</option>
                            <option value="神奈川県">神奈川県</option>
                            <option value="新潟県">新潟県</option>
                            <option value="富山県">富山県</option>
                            <option value="石川県">石川県</option>
                            <option value="福井県">福井県</option>
                            <option value="山梨県">山梨県</option>
                            <option value="長野県">長野県</option>
                            <option value="岐阜県" selected>岐阜県</option>
                            <option value="静岡県">静岡県</option>
                            <option value="愛知県">愛知県</option>
                            <option value="三重県">三重県</option>
                            <option value="滋賀県">滋賀県</option>
                            <option value="京都府">京都府</option>
                            <option value="大阪府">大阪府</option>
                            <option value="兵庫県">兵庫県</option>
                            <option value="奈良県">奈良県</option>
                            <option value="和歌山県">和歌山県</option>
                            <option value="鳥取県">鳥取県</option>
                            <option value="島根県">島根県</option>
                            <option value="岡山県">岡山県</option>
                            <option value="広島県">広島県</option>
                            <option value="山口県">山口県</option>
                            <option value="徳島県">徳島県</option>
                            <option value="香川県">香川県</option>
                            <option value="愛媛県">愛媛県</option>
                            <option value="高知県">高知県</option>
                            <option value="福岡県">福岡県</option>
                            <option value="佐賀県">佐賀県</option>
                            <option value="長崎県">長崎県</option>
                            <option value="熊本県">熊本県</option>
                            <option value="大分県">大分県</option>
                            <option value="宮崎県">宮崎県</option>
                            <option value="鹿児島県">鹿児島県</option>
                            <option value="沖縄県">沖縄県</option>
                        </select>
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-3 pt-0">性別</legend>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="genderMen"
                                    value="genderMen" checked>
                                <label class="form-check-label" for="genderMen">
                                    男性
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="genderWomen"
                                    value="genderWomen">
                                <label class="form-check-label" for="genderWomen">
                                    女性
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <label for="speciality" class="col-sm-3 col-form-label">特技</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="speciality" placeholder="鉄棒" value="落語">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addImage" class="col-sm-3 col-form-label">画像（追加）</label>
                    <div class="col-sm-9">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="addImage" lang="ja">
                            <label class="custom-file-label" for="addImage">ファイル選択...</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">画像（削除）</label>
                    <div class="col-sm-9">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="removeImage0001">
                            <label class="form-check-label" for="removeImage0001">削除</label>
                        </div>
                        <img src="../img/Tatsuya_OHKAWA_01.jpg" alt="" class="img-fluid img-thumbnail">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="removeImage0002">
                            <label class="form-check-label" for="removeImage0002">削除</label>
                        </div>
                        <img src="../img/Tatsuya_OHKAWA_02.jpg" alt="" class="img-fluid img-thumbnail">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="removeImage0003">
                            <label class="form-check-label" for="removeImage0003">削除</label>
                        </div>
                        <img src="../img/Tatsuya_OHKAWA_03.jpg" alt="" class="img-fluid img-thumbnail">
                    </div>
                </div>
                <div class="mb-2  d-flex justify-content-center align-items-center">
                    <input type="submit" class="btn btn-primary" value="更新登録"></input>
                </div>
            </form>
        </div>
    </div>
<!-- </main> -->

<?php include 'footer.php';?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script> -->
</body>

</html>