<?php
    function dangnhap($user,$pass) {
        $sql="SELECT * FROM taikhoan WHERE username='$user' and password='$pass'";
        $taikhoan = pdo_query_one($sql);
        return $taikhoan;
    }
?>