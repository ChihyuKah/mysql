<?php


class profileController
{

    public function profileControl(){

        $statement = new dataReader();
        $student = $statement->getSingleUserData();

        //id van user
        echo $student;



        $singleData = new dataReader();
       $dbUsers = $singleData->dataRead();

        //array of all the users in DB



        $statement = new dataReader();
        $key = $statement->dataRead();

        foreach ($dbUsers as $user) {
            $idMatch = $user['id'];

            if ($idMatch == $student) {

                require "view/profile-view.php";
                return $user;

            }else {

            }
        }
//        $statement = new dataReader();
//        $students = $statement->dataRead();
//        echo $students;


    }





}
