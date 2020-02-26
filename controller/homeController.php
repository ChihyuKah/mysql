<?php
require 'model/connection.php';
require 'model/insert.php';
require 'model/dataReader.php';

class homepageController
{


    public function render(array $GET, array $POST)
    {
        $testData = new getInfo();
        $readerer = new dataReader();
        if ($_POST['submit'] == 1) {

            $testData->setUserData($_POST['first_name'], $_POST['last_name'], $_POST['username'], $_POST['linkedin'], $_POST['github'], $_POST['email'], $_POST['preferred_language'], $_POST['avatar'], $_POST['video'], $_POST['quote'], $_POST['quote_author']);
            echo "submitted";
        }

        if (!empty($_POST['read'])) {

            $readerer->dataRead();
            echo "id posted";
        }

        $statement = new dataReader();
        $students = $statement->dataRead();
        require 'view/form-view.php';

        if (isset($_POST["refresh"])) {
            header("refresh");
        }

    }


}

//setstudent stuurt student naar insert insert gebruikt con voor naar db te sturen


