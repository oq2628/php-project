<?php
class admin{
    // protected $result;
    function __construct(){
        require_once "./core/connDB.php";
    }

    function show(){
        require_once "./models/getData.php";
        require_once "./views/view.php";
        $get=new get_data();
        $getalls=$get->get_data();

        // require_once "./views/view.php";
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

    function news(){
        require_once "./views/news.php";
        $news=new news();
        $new=$news->news();
    }

    function inserts(){
        if (isset($_POST["submit"])){
            require_once "./models/insert.php";
            $link="http://localhost/new/models/image/";
            $title=$_POST["textarea"];
            $description=$_POST["textarea1"];
            $s=$_POST["myfile"];
            $status=$_POST["select"];
            $choosefile=$link."".$s;
            $insert=new insert();
            $inserts=$insert->insert($title,$description,$choosefile,$status);
        }
       
    }

    function edits($id){
        require_once "./models/getbyid.php";
        $getbyid=new getbyid();
        $getbyids=$getbyid->getbyid($id);

        // require_once "./template/edit.php";
        require_once "./views/edit.php";        
        $edit=new edit();
        $edits=$edit->edit($getbyids);

    }

    function edit($id){
        if (isset($_POST["submit"])){
            require "./models/edit.php";
            
            $link="./models/image/";
            $title=$_POST["textarea"];
            $description=$_POST["textarea1"];
            $s=$_POST["myfile"];
            $status=$_POST["select"];
            $choosefile=$link."".$s;
            $i=new edit();
            $a=$i->edit($title,$description,$choosefile,$status,$id);
        }
    }

    function delete($id){
        require_once "./models/delete.php";
        $del=new delete();
        $delete=$del->delete($id);
    }
}
?>