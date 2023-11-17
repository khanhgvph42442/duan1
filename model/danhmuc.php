<?php
    function loadall_danhmuc(){
        $sql = "SELECT * FROM danhmuc order by id desc";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }
    function loadone_danhmuc($id){
        $sql = "SELECT * FROM danhmuc where id=".$id;
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function get_name_dm($id){
        $sql = "SELECT name FROM danhmuc where id=?";
        return pdo_query_value($sql,$id);
    }
    function show_dm($dsdm){
        $html_dm = '';
        foreach($dsdm as $dm){
            extract($dm);
            $linkdm="index.php?act=sanpham&iddm=".$id;
            echo '<li><a href="'.$linkdm.'">'.$name.' </a></li>';
        }
        return $html_dm;
    }
?>