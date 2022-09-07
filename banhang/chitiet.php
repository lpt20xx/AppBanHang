<?php
    include "connect.php";
    $page = $_POST['page'];
    $total = 5; //5sp 1 trang
    $pos = ($page-1)*$total;
    $loai = $_POST['loai'];
    $query = 'SELECT * FROM `sanphammoi` WHERE `loai`='.$loai.' LIMIT '.$pos.','.$total.'';
    $data = mysqli_query($conn, $query);
    $result = array();
    while($row = mysqli_fetch_assoc($data)){
        $result[] = ($row);
    }

    if (!empty($result)) {

        $arr = [
            'success' => true,
            'message' => "thanh cong",
            'result' => $result
        ];
        
    }else{
        $arr = [
            'success' => false,
            'message' => "khong thanh cong",
            'result' => $result
        ];
    }

    print_r(json_encode($arr));
?>