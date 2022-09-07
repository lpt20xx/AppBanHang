<?php
    include "connect.php";
    $id = $_POST['id'];


    $query = 'DELETE FROM `sanphammoi` WHERE `id`= '.$id;
    $data = mysqli_query($conn, $query);
        if($data == true){

            $arr = [
                'success' => true,
                'message' => "Xoá thành công"
            ];
        
        }else{
            $arr = [
                'success' => false,
                'message' => "Xoá không thành công"
            ];
        }
    
    

    

    print_r(json_encode($arr));
?>