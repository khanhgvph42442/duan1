<?php
        function loadall_sanpham_top10($limi){
            $sql = "SELECT * FROM sanpham where 1 order by luotxem desc limit ".$limi;
            $listsanpham = pdo_query($sql);
            return $listsanpham;
        }
        function loadall_sanpham_home($limi){
            $sql = "SELECT * FROM sanpham where 1 order by id desc limit ".$limi;
            $listsanpham = pdo_query($sql);
            return $listsanpham;
        }
        function loadall_sanpham($kyw, $iddm){
            $sql = "SELECT * FROM sanpham where 1";
            if($kyw!=""){
                $sql.=" AND name like '%".$kyw."%' ";
            }
            if($iddm > 0){
                $sql.=" AND iddm = '".$iddm."'";
            }
            $sql.=" order by id desc";
            $listsanpham = pdo_query($sql);
            return $listsanpham;
        }
        function load_ten_dm($iddm){
            if($iddm>0){
                $sql = "SELECT * FROM danhmuc where id=".$iddm;
                $dm = pdo_query_one($sql);
                extract($dm);
                return $name;
            } else{
                return "";
            }
            
        }
        function loadone_sanpham($id){
            $sql = "SELECT * FROM sanpham where id=".$id;
            $sp = pdo_query_one($sql);
            return $sp;
        }
        function load_sanpham_cungloai($id,$iddm){
            $sql = "SELECT * FROM sanpham where iddm =".$iddm." AND id <>".$id;
            $listsanpham = pdo_query($sql);
            return $listsanpham;
        }
        function show_sp($spnew){
            $html_spnew = '';
            $i=0;
            foreach ($spnew as $sp){
            extract($sp);
                if(($i==2)||($i==5)||($i==8)){
                    $mr="";
                }else{
                     $mr="mr";
                }
                $linksp="index.php?act=ctsanpham&idsp=".$id;
                    $html_spnew.= '<div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                                <div class="featured__item">
                                <div class="featured__item__pic set-bg '.$mr.'" data-setbg="'.$img.'">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="featured__item__text">
                                    <h6><a href="'.$linksp.'">'.$name.'</a></h6>
                                    <h5>'.$price.'$</h5>
                                </div>
                            </div>
                            </div>';
                $i+=1;
                }
                return $html_spnew;
        }
        function showspnew($spnew){
            $html_sp = '';
            $i=0;
            foreach ($spnew as $sp){
            extract($sp);
                if(($i==2)||($i==5)||($i==8)){
                    $mr="";
                }else{
                     $mr="mr";
                }
                $linksp="index.php?act=ctsanpham&idsp=".$id;
                $html_sp.='
                <div class="latest-prdouct__slider__item">
                <a href="#" class="latest-product__item">
                    <div class="latest-product__item__pic">
                        <img src="'.$img.'" alt="">
                    </div>
                    <div class="latest-product__item__text">
                        <h6>'.$name.'</h6>
                        <span>'.$price.'$</span>
                    </div>
                </a>
                </div>
                ';
                
                $i+=1;
                }
                return $html_sp;
        }
        function sp_top($dstop){
            $html_sptop = '';
            foreach($dstop as $sp){
                extract($sp);
                $linksp="index.php?act=ctsanpham&idsp=".$id;
                // $img=$img_path.$img;
                $html_sptop.= '  
                    <div class="latest-prdouct__slider__item">
                    <a href="'.$linksp.'" class="latest-product__item">
                        <div class="latest-product__item__pic">
                            <img src="'.$img.'" alt="">
                        </div>
                        <div class="latest-product__item__text">
                            <h6>'.$name.'</h6>
                            <span>'.$price.'$</span>
                        </div>
                    </a>
                    </div>';
            }
            return $html_sptop;
        }
?>