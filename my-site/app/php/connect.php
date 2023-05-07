<?php

class Connect {

    public static function getLink() {
        $link = mysqli_connect("127.0.0.1", "Knyazev_stud", "root", "fact_hw");

        if (!$link) {
            die('<p style="color:red">'.mysqli_connect_errno().' - '.mysqli_connect_error().'</p>');
        }

        return $link;
    }
}