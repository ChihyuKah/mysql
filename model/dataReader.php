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


}
