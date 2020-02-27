<?php


class profileController
{

    public function profileControl(){

        $statement = new dataReader();
        $student = $statement->getSingleUserData();



        $statement = new dataReader();
        $students = $statement->dataRead();
        echo $student[0];
        require "view/profile-view.php";
    }




}
