<?php

declare(strict_types=1);

//thuc hien thao tac CRUD tren bang tbModules
class Module
{
    //cac thuoc tinh
    public $empID, $password, $fullname, $email,$role,$salary;

    //ham dung / hàm ko có đối số 
    function __construct(string $empID = '' , $password = '' , $fullname='' , $email = '',$role = '',$Salary='')
    {
        $this->empID  = $empID; // this là Module (Ob contructor)
        $this->password = $password;
        $this->fullname = $fullname;
        $this->email = $email;
        $this->role = $role;
        $this->salary = $Salary;
       
    }
}

include_once("myconnect_Pretest2.php"); // kết nối với databse trên sql

class ModuleDAO // class thực hiện các thao tác CRDU
{

    //1a. doc du lieu trong bang tbbook -> mang ds
    public static function get()
    {
        $ds = [];

        //1. tao ket noi den CSDL
        $cn = getConnect();

        $sql = "SELECT * FROM `tbemployee`";

        //3. goi ham thi hanh lenh SELECT sql
        $r = $cn->query($sql);

        if ($r == false) {
            echo "<p> >> ERROR: cannot retrieve data ! </p>";
            die("<p> " . $cn->error . "</p>");
        } else {
             //doc cac dong trong ket qua tra ve luu vo bien ds[]
            //fetch_array(): Hàm sẽ trả về mảng kết hợp hoặc liên tục chứa thông tin của hàng kết quả. (row trong sql)
            while ($row = $r->fetch_array()) {
                $inf = new Module($row['empID'], $row['password'],$row['fullname'], $row['email'], $row['role'],$row['Salary']);

                $ds[] = $inf;
            }
        }
        //4. dong ket noi
        $cn->close();
        return $ds;
    }


    public static function getByid(string $userID)
    {
        //1. tao ket noi den CSDL
        $cn = getConnect();

        $sql = "SELECT * FROM `tbemployee` WHERE `empID` = '$userID'";

        //3. goi ham thi hanh lenh SELECT sql
        $r = $cn->query($sql);
        $user = null;

        if ($r == false) {
            echo "<p> >> ERROR: cannot retrieve data ! </p>";
            die("<p> " . $cn->error . "</p>");
        } else {
            //doc ket qua tra ve luu vo bien ds
            if ($row = $r->fetch_array()) {
                $user = new Module($row['empID'], $row['password'], intval($row['role']));
            }
        }

        //4. dong ket noi
        $cn->close();
        return $user;
    }



}


