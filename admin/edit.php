<?php
include '../lib/connect.php';
include '../lib/queryPersonalData.php';

header('Expires: Tue, 1 Jan 2019 00:00:00 GMT');
header('Last-Modified:' . gmdate( 'D, d M Y H:i:s' ) . 'GMT');
header('Cache-Control:no-cache,no-store,must-revalidate,max-age=0');
header('Cache-Control:pre-check=0,post-check=0',false);
header('Pragma:no-cache');

$result="";
//他画面から遷移してきた場合
if(!empty($_GET['id']))
{
    $personaldata = new QueryPersonalData();
    $result = $personaldata->getDatum($_GET['id']);
}
//編集する場合
if(!empty($_POST['id']))
{
        $personaldata = new QueryPersonalData();
        $result = $personaldata->getDatum($_POST['id']);

        //入力画面から取得した項目
        $rcvId=$_POST['id'];
        $rcvName = $_POST['womanname'];
        $rcvAge = $_POST['age'];
        $rcvBirthday = $_POST['birthday'];
        $rcvBirthPlace = $_POST['birthplace'];
        $rcvBloodType = $_POST['bloodtype'];
        $rcvCategory = $_POST['category'];
        $rcvHeight = $_POST['height'];
        $rcvNotices = $_POST['notices'];
        $rcvPicData0 = $result->getPicdata0();
        $rcvPicData1 = $result->getPicdata1();
        $rcvPicData2 = $result->getPicdata2();
    
        //画像保存処理
        if (!empty($_FILES['picdata0']['name']))
        {
          $tgtfilename='';
          $tgtfilename .= $rcvName;
          $tgtfilename .= '_';
          $tgtfilename .= '0';
          $tgtfilename .= '.jpg';
          $rcvPicData0=$tgtfilename;
          move_uploaded_file($_FILES["picdata0"]["tmp_name"], "uploads/" . $tgtfilename);
        }
        
        if (!empty($_FILES['picdata1']['name']))
        {
          $tgtfilename='';
          $tgtfilename .= $rcvName;
          $tgtfilename .= '_';
          $tgtfilename .= '1';
          $tgtfilename .= '.jpg';
          $rcvPicData1=$tgtfilename;
          move_uploaded_file($_FILES["picdata1"]["tmp_name"], "uploads/" . $tgtfilename);
        }
        
        if (!empty($_FILES['picdata2']['name']))
        {
          $tgtfilename='';
          $tgtfilename .= $rcvName;
          $tgtfilename .= '_';
          $tgtfilename .= '2';
          $tgtfilename .= '.jpg';
          $rcvPicData2=$tgtfilename;
          move_uploaded_file($_FILES["picdata2"]["tmp_name"], "uploads/" . $tgtfilename);
        }
    
        $personaldata = new PersonalData();
        $personaldata->setId($rcvId);
        $personaldata->setName($rcvName);
        $personaldata->setAge($rcvAge);
        $personaldata->setBirthday($rcvBirthday);
        $personaldata->setBirthplace($rcvBirthPlace);
        $personaldata->setBloodtype($rcvBloodType);
        $personaldata->setCategory($rcvCategory);
        $personaldata->setHeight($rcvHeight);
        $personaldata->setNotices($rcvNotices);
        $personaldata->setPicdata0($rcvPicData0);
        $personaldata->setPicdata1($rcvPicData1);
        $personaldata->setPicdata2($rcvPicData2);
        $personaldata->save();

        header('Location: index.php');
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
                font-size: 0.5rem;
            }
        }
    </style>
    <title>編集画面</title>
</head>

<body>
    <div style="padding-top: 50px;" class="mb-5">
    <?php include 'header.php';?>
        <!-- <main> -->
        <div class="container">
            <form class="mt-3 pb-3" action="edit.php" enctype="multipart/form-data" method="post">
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">名前</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" placeholder="名前" value="<?php echo $result->getName(); ?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">年齢</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" placeholder="年齢" value="<?php echo $result->getAge(); ?>" name="age">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-3 pt-0">分類</legend>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="announcer" value="局アナ" <?php if ($result->getCategory()=='局アナ') echo 'checked'; ?>>
                                <label class="form-check-label" for="announcer">
                                    局アナ
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="free" value="フリー" <?php if ($result->getCategory()=='フリー') echo 'checked'; ?>>
                                <label class="form-check-label" for="free">
                                    フリー
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="actress" value="女優" <?php if ($result->getCategory()=='女優') echo 'checked'; ?>>
                                <label class="form-check-label" for="actress">
                                    女優
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="model" value="モデル" <?php if ($result->getCategory()=='モデル') echo 'checked'; ?>>
                                <label class="form-check-label" for="model">
                                    モデル
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="category" id="other" value="その他" <?php if ($result->getCategory()=='その他') echo 'checked'; ?>>
                                <label class="form-check-label" for="other">
                                    その他
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <label for="dateOfBirth" class="col-sm-3 col-form-label">生年月日</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="dateOfBirth" placeholder="yyyy/mm/dd" name="birthday"
                        value="<?php echo $result->getBirthday() ?>">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-3 pt-0">血液型</legend>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bloodtype" id="bloodTypeA"
                                    value="A" <?php if ($result->getBloodtype()=='A') echo 'checked'; ?>>
                                <label class="form-check-label" for="bloodTypeA">
                                    A型
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bloodtype" id="bloodTypeB"
                                    value="B" <?php if ($result->getBloodtype()=='B') echo 'checked'; ?>>
                                <label class="form-check-label" for="bloodTypeB">
                                    B型
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bloodtype" id="bloodTypeAB"
                                    value="AB" <?php if ($result->getBloodtype()=='AB') echo 'checked'; ?>>
                                <label class="form-check-label" for="bloodTypeAB">
                                    AB型
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bloodtype" id="bloodTypeO"
                                    value="O" <?php if ($result->getBloodtype()=='O') echo 'checked'; ?>>
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
                        <input type="text" class="form-control" id="height" placeholder="165" value="<?php echo $result->getHeight(); ?>" name="height">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="speciality" class="col-sm-3 col-form-label">特記事項</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="tgtspeciality" placeholder="特記事項" value="<?php echo $result->getNotices(); ?>" name="notices">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hometown" class="col-sm-3 col-form-label">出身地</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="birthplace">
                            <option value="">都道府県</option>
                            <option value="北海道" <?php if ($result->getBirthplace()=='北海道') echo 'selected'; ?>>北海道</option>
                            <option value="青森県" <?php if ($result->getBirthplace()=='青森県') echo 'selected'; ?>>青森県</option>
                            <option value="岩手県" <?php if ($result->getBirthplace()=='岩手県') echo 'selected'; ?>>岩手県</option>
                            <option value="宮城県" <?php if ($result->getBirthplace()=='宮城県') echo 'selected'; ?>>宮城県</option>
                            <option value="秋田県" <?php if ($result->getBirthplace()=='秋田県') echo 'selected'; ?>>秋田県</option>
                            <option value="山形県" <?php if ($result->getBirthplace()=='山形県') echo 'selected'; ?>>山形県</option>
                            <option value="福島県" <?php if ($result->getBirthplace()=='福島県') echo 'selected'; ?>>福島県</option>
                            <option value="茨城県" <?php if ($result->getBirthplace()=='茨城県') echo 'selected'; ?>>茨城県</option>
                            <option value="栃木県" <?php if ($result->getBirthplace()=='栃木県') echo 'selected'; ?>>栃木県</option>
                            <option value="群馬県" <?php if ($result->getBirthplace()=='群馬県') echo 'selected'; ?>>群馬県</option>
                            <option value="埼玉県" <?php if ($result->getBirthplace()=='埼玉県') echo 'selected'; ?>>埼玉県</option>
                            <option value="千葉県" <?php if ($result->getBirthplace()=='千葉県') echo 'selected'; ?>>千葉県</option>
                            <option value="東京都" <?php if ($result->getBirthplace()=='東京都') echo 'selected'; ?>>東京都</option>
                            <option value="神奈川県" <?php if ($result->getBirthplace()=='神奈川県') echo 'selected'; ?>>神奈川県</option>
                            <option value="新潟県" <?php if ($result->getBirthplace()=='新潟県') echo 'selected'; ?>>新潟県</option>
                            <option value="富山県" <?php if ($result->getBirthplace()=='富山県') echo 'selected'; ?>>富山県</option>
                            <option value="石川県" <?php if ($result->getBirthplace()=='石川県') echo 'selected'; ?>>石川県</option>
                            <option value="福井県" <?php if ($result->getBirthplace()=='福井県') echo 'selected'; ?>>福井県</option>
                            <option value="山梨県" <?php if ($result->getBirthplace()=='山梨県') echo 'selected'; ?>>山梨県</option>
                            <option value="長野県" <?php if ($result->getBirthplace()=='長野県') echo 'selected'; ?>>長野県</option>
                            <option value="岐阜県" <?php if ($result->getBirthplace()=='岐阜県') echo 'selected'; ?>>岐阜県</option>
                            <option value="静岡県" <?php if ($result->getBirthplace()=='静岡県') echo 'selected'; ?>>静岡県</option>
                            <option value="愛知県" <?php if ($result->getBirthplace()=='愛知県') echo 'selected'; ?>>愛知県</option>
                            <option value="三重県" <?php if ($result->getBirthplace()=='三重県') echo 'selected'; ?>>三重県</option>
                            <option value="滋賀県" <?php if ($result->getBirthplace()=='滋賀県') echo 'selected'; ?>>滋賀県</option>
                            <option value="京都府" <?php if ($result->getBirthplace()=='京都府') echo 'selected'; ?>>京都府</option>
                            <option value="大阪府" <?php if ($result->getBirthplace()=='大阪府') echo 'selected'; ?>>大阪府</option>
                            <option value="兵庫県" <?php if ($result->getBirthplace()=='兵庫県') echo 'selected'; ?>>兵庫県</option>
                            <option value="奈良県" <?php if ($result->getBirthplace()=='奈良県') echo 'selected'; ?>>奈良県</option>
                            <option value="和歌山県" <?php if ($result->getBirthplace()=='和歌山県') echo 'selected'; ?>>和歌山県</option>
                            <option value="鳥取県" <?php if ($result->getBirthplace()=='鳥取県') echo 'selected'; ?>>鳥取県</option>
                            <option value="島根県" <?php if ($result->getBirthplace()=='島根県') echo 'selected'; ?>>島根県</option>
                            <option value="岡山県" <?php if ($result->getBirthplace()=='岡山県') echo 'selected'; ?>>岡山県</option>
                            <option value="広島県" <?php if ($result->getBirthplace()=='広島県') echo 'selected'; ?>>広島県</option>
                            <option value="山口県" <?php if ($result->getBirthplace()=='山口県') echo 'selected'; ?>>山口県</option>
                            <option value="徳島県" <?php if ($result->getBirthplace()=='徳島県') echo 'selected'; ?>>徳島県</option>
                            <option value="香川県" <?php if ($result->getBirthplace()=='香川県') echo 'selected'; ?>>香川県</option>
                            <option value="愛媛県" <?php if ($result->getBirthplace()=='愛媛県') echo 'selected'; ?>>愛媛県</option>
                            <option value="高知県" <?php if ($result->getBirthplace()=='高知県') echo 'selected'; ?>>高知県</option>
                            <option value="福岡県" <?php if ($result->getBirthplace()=='福岡県') echo 'selected'; ?>>福岡県</option>
                            <option value="佐賀県" <?php if ($result->getBirthplace()=='佐賀県') echo 'selected'; ?>>佐賀県</option>
                            <option value="長崎県" <?php if ($result->getBirthplace()=='長崎県') echo 'selected'; ?>>長崎県</option>
                            <option value="熊本県" <?php if ($result->getBirthplace()=='熊本県') echo 'selected'; ?>>熊本県</option>
                            <option value="大分県" <?php if ($result->getBirthplace()=='大分県') echo 'selected'; ?>>大分県</option>
                            <option value="宮崎県" <?php if ($result->getBirthplace()=='宮崎県') echo 'selected'; ?>>宮崎県</option>
                            <option value="鹿児島県" <?php if ($result->getBirthplace()=='鹿児島県') echo 'selected'; ?>>鹿児島県</option>
                            <option value="沖縄県" <?php if ($result->getBirthplace()=='沖縄県') echo 'selected'; ?>>沖縄県</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="removeImage0001">
                            <label class="form-check-label" for="removeImage0001">削除</label>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="picdata0">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                        <img src="uploads/<?php echo $result->getPicdata0(); ?>" alt="" class="img-fluid img-thumbnail">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="removeImage0002">
                            <label class="form-check-label" for="removeImage0002">削除</label>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="picdata1">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                        <img src="uploads/<?php echo $result->getPicdata1(); ?>" alt="" class="img-fluid img-thumbnail">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="removeImage0003">
                            <label class="form-check-label" for="removeImage0003">削除</label>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="picdata2">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                        <img src="uploads/<?php echo $result->getPicdata2(); ?>" alt="" class="img-fluid img-thumbnail">
                    </div>
                </div>
                <div class="mb-2  d-flex justify-content-center align-items-center">
                    <input type="hidden" value="<?php echo $result->getId(); ?>" name="id">
                    <input type="hidden" value="<?php echo $result->getName(); ?>"  name="womanname">
                    <input type="submit" class="btn btn-primary" value="更新登録"></input>
                </div>
            </form>
        </div>
    </div>
<!-- </main> -->

<?php include 'footer.php';?>
</body>

</html>