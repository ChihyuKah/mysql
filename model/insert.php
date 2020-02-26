<?php

class getInfo extends connection {

public function setUserData($firstName, $lastName, $username, $linkedin, $github, $email, $preferred_language, $avatar, $video, $quote, $quote_author){
    $sql = "INSERT INTO student (first_name, last_name, username, linkdin, github, email, preferred_language, avatar, video, quote, quote_author) values(?,?,?,?,?,?,?,?,?,?,?)";
    $prep = $this->openConnection()->prepare($sql);
    $prep->execute([$firstName, $lastName, $username, $linkedin, $github, $email, $preferred_language, $avatar, $video, $quote, $quote_author]);
}

}






//if (!mysqli_query(mysqli,$sql)) {
//    echo "not inserted";
//
//} else {
//    echo "inserted";

//}

