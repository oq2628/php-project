<?php
    class home{
        function __construct(){
            require_once "./core/connDB.php";
            require_once "./models/getData.php";
        }

        function show(){
            require_once "./models/getData.php";
            $get=new get_data();
            $getalls=$get->get_data();

            require_once "./views/viewhome.php";
            $postview=new view();
            $postview->fullview($getalls);
        }
        function showpost($id){
            require_once "./models/getbyid.php";
            $getbyid=new getbyid();
            $getbyids=$getbyid->getbyid($id);

            require_once "./views/showpost.php";
            $showpost=new showpost();
            $showposts=$showpost->showpost($getbyids);
        }
    }
?>