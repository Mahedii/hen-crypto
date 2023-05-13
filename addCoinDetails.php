<?php

    include "layouts/connection.php";

    if(isset($_POST['action']) && isset($_POST['id']) && isset($_POST['ckmm_id']) ){

        $lccl_id  = $_POST['id'];
        $ckmm_id  = $_POST['ckmm_id'];
        $action  = $_POST['action'];

        if($action == "addcmcCoinDetail"){
            $query = mysqli_query($pdo,"UPDATE cmc_kry_my_munte SET lccl_id = '$lccl_id' WHERE ID = '$ckmm_id' ");
            // update_data($lccl_id,$ckmm_id);

            $ckmmSQL = mysqli_query($pdo, "SELECT * FROM cmc_kry_my_munte ORDER BY ID ASC");
            $ckmmRows = mysqli_fetch_array($ckmmSQL);
            $ckmmRowCount = mysqli_num_rows($ckmmSQL);

            if($ckmmRowCount > 0){
                do {
                    $coin_id = $ckmmRows["ID"];
                    $coin_COINMARKETCAP_ID = $ckmmRows["COINMARKETCAP_ID"];
                    $coin_lccl_id = $ckmmRows["lccl_id"];
                    $coin_symbol = $ckmmRows["COIN_SYMBOL"];
                } while ($ckmmRows = mysqli_fetch_array($ckmmSQL));
            }
        }

        $status = "ok";

        // $returnArr = [$status,$coin_id,$coin_COINMARKETCAP_ID,$coin_lccl_id,$coin_symbol];
        // $returnArr = array(
        //     'status' => $status,
        //     'coin_id' => $coin_id,
        //     'coin_COINMARKETCAP_ID' => $coin_COINMARKETCAP_ID,
        //     'coin_lccl_id' => $coin_lccl_id,
        //     'coin_symbol' => $coin_symbol
        // ); 

        echo json_encode(array('status' => $status));
        // echo json_encode($returnArr);

    }

    // update data query
    // function update_data($lccl_id, $ckmm_id){

    //     $query = mysqli_query($pdo,"UPDATE cmc_kry_my_munte SET lccl_id = '$lccl_id' WHERE ID = '$ckmm_id' ");
    
    //     if($query){
            
    //         echo "data was updated"; 
            
    //     }else{
    //         $msg= "Error: " . $query . "<br>" . mysqli_error($pdo);
    //         echo $msg; 
    //     }
    // }

?>