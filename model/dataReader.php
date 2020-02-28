<?php

class dataReader extends connection
{

    public function dataRead()
    {
        $sql = "SELECT * FROM students.student ORDER BY id ASC ";
        $stmt = $this->openConnection()->prepare($sql);
        $result = $stmt->execute([]);
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $user;

    }

    public function getSingleUserData()
    {
        $sql = "SELECT * FROM students.student WHERE id";
        $statement = $this->openConnection()->prepare($sql);
        $userID = $_GET["user"];
        $result = $statement->execute([$userID]);
        $singleUser = $statement->fetch(PDO:: FETCH_ASSOC);
        return $userID;



    }


}
