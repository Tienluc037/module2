<?php
class Students {
    public $dsn;
    public $username;
    public $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=students;charset=utf8";
        $this->username = "luc";
        $this->password = "123456@Abc";
    }
    public function connect() {
        try {
            $connect = new  PDO($this->dsn, $this->username,$this->password);
            return $connect;
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    public function show()
    {
     $sql = "select * from students";
     $resurl = $this->connect()->query($sql);
     return $resurl->fetchAll();
    }

    public function create($request)
    {
        $name = $request['name'];
        $phone = $request['phone'];
        $sql = "insert into from students (name,phone) values ('$name','$phone')";
        $return = $this->connect()->query($sql);
        return $return->fetch();
    }
}
//$adt = new Students();
//$adt->connect();