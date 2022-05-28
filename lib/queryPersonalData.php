<?php
include '../lib/personaldata.php';

class QueryPersonalData extends connect
{
    private $personaldata;

    public function __construct()
    {
        parent::__construct();
    }

    public function setPersonalData(PersonalData $personaldata)
    {
        $this->personaldata = $personaldata;
    }

    /**
     * 新規作成 or 画像修正
     */
    public function save()
    {
        $rcvId = $this->personaldata->getId();
        $rcvName = $this->personaldata->getName();
        $rcvAge = $this->personaldata->getAge();
        $rcvCategory = $this->personaldata->getCategory();
        $rcvBirthday = $this->personaldata->getBirthday();
        $rcvBirthPlace = $this->personaldata->getBirthplace();
        $rcvBloodType = $this->personaldata->getBloodtype();
        $rcvHeight = $this->personaldata->getHeight();
        $rcvNotices = $this->personaldata->getNotices();
        $rcvPicData0 = $this->personaldata->getPicdata0();
        $rcvPicData1 = $this->personaldata->getPicdata1();
        $rcvPicData2 = $this->personaldata->getPicdata2();
        
        try
        {
            if (!empty($this->personaldata->getId()))
            {
                // IDがあるときは上書き
                $id = $this->persodbhnaldata->getId();
                $stmt = $this->dbh->prepare("UPDATE personaldata
                SET womanname=:womanname, age=:age, category=:category, birthday=:birthday, birthplace=:birthplace,bloodtype=:bloodtype,height=:height,notices=:notices,picdata0=:picdata0,picdata1=:picdata1,picdata2=:picdata2,updated_at=NOW() WHERE id=:id");
                $stmt->bindParam(':id', $rcvId, PDO::PARAM_INT);
            }
            else 
            {
                // IDがなければ新規作成
                $stmt = $this->dbh->prepare("INSERT INTO personaldata (womanname, age, category, birthday, birthplace,bloodtype,height,notices,picdata0,picdata1,picdata2,created_at, updated_at) VALUES (:womanname, :age, :category, :birthday,:birthplace, :bloodtype,:height,:notices,:picdata0,:picdata1,:picdata2,NOW(), NOW())");                                                                     
            }
            $stmt->bindParam(':womanname', $rcvName, PDO::PARAM_STR);
            $stmt->bindParam(':age', $rcvAge, PDO::PARAM_INT);
            $stmt->bindParam(':category', $rcvCategory, PDO::PARAM_STR);
            $stmt->bindParam(':birthday', $rcvBirthday, PDO::PARAM_STR);
            $stmt->bindParam(':birthplace', $rcvBirthPlace, PDO::PARAM_STR);
            $stmt->bindParam(':bloodtype', $rcvBloodType, PDO::PARAM_STR);
            $stmt->bindParam(':height', $rcvHeight, PDO::PARAM_INT);
            $stmt->bindParam(':notices', $rcvNotices, PDO::PARAM_STR);
            $stmt->bindParam(':picdata0', $rcvPicData0, PDO::PARAM_STR);
            $stmt->bindParam(':picdata1', $rcvPicData1, PDO::PARAM_STR);
            $stmt->bindParam(':picdata2', $rcvPicData2, PDO::PARAM_STR);

            $stmt->execute();
            
        }
        catch( Exception $ex )
        {
            return "DB:Error";
        }
    }

    /**
     * 全データを取得する
     */
    public function getAllData()
    {

        try
        {
            $stmt = $this->dbh->prepare("SELECT  * FROM personaldata");
            $stmt->execute();
            $data = $this->setAllData($stmt->fetchAll(PDO::FETCH_ASSOC));
    
        }
        catch(Exception $ex)
        {
            return "DB:Error";
        }

        return $data;

    }

    /**
     * 指定したIDのデータを取得する
     */
    public function getData($id)
    {

        try
        {

        }
        catch(Exception $ex)
        {
            return "DB:Error";
        }

    }

    /**
     * 取得した全データをデータクラス(PersonData)の配列にする
     */
    public function setAllData($resutls)
    {
        $tmp = array();
        foreach ($resutls as $result) 
        {
            $pd = new PersonalData();
            $pd->setId($result["id"]);
            $pd->setName($result["womanname"]);
            $pd->setAge($result["age"]);
            $pd->setCategory($result["category"]);
            $pd->setBirthday($result["birthday"]);
            $pd->setBirthplace($result["birthplace"]);
            $pd->setHeight($result["height"]);
            $pd->setNotices($result["notices"]);
            $pd->setPicdata0($result["picdata0"]);
            $pd->setPicdata1($result["picdata1"]);
            $pd->setPicdata2($result["picdata2"]);

            $tmp[] = $pd;

        //     $tmp[]=array("id"=>$result["id"],"womanname"=>$result["womanname"],"age"=>$result["age"],"category"=>$result["category"],"birthday"=>$result["birthday"],"bloodtype"=>$result["bloodtype"],"height"=>$result["height"],"notices"=>$result["notices"]
        // ,"picdata0"=>$result["picdata0"],"picdata1"=>$result["picdata1"],"picdata2"=>$result["picdata2"]);
        }
        return  $tmp;
    }


}