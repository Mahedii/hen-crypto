<?php

    session_start();

	require_once 'DB.class.php';
    $db = new DB();


    // $rowSymbol = $_POST['symbol'];
    // $_SESSION['symbol'] = $rowSymbol;


    // Adding CoinMarketCap Coins

    $tblName = 'cmc_kry_my_munte';
    $tblName1 = 'cmc_my_munte';

    if(($_POST['action'] == 'addCoinMarketCapCoin') && !empty($_POST['symbol']) ){

        //insert data
        include "layouts/connection.php";
        $_SESSION['test'] = 1;
        $COIN_SYMBOL  = $_POST['symbol'];


        $userData = array('COIN_SYMBOL' => $COIN_SYMBOL);

        $query = mysqli_query($pdo,"SELECT * FROM cmc_kry_my_munte WHERE COIN_SYMBOL =  '$COIN_SYMBOL' ");
        $count = mysqli_num_rows($query);

        if($count == 0){
            
            $insertQuery = $db->insert($tblName, $userData);

            $query1 = mysqli_query($pdo,"SELECT * FROM cmc_my_munte WHERE COIN_SYMBOL =  '$COIN_SYMBOL' ");
            $count1 = mysqli_num_rows($query1);

            if($count1 == 0){
                
                $insertQuery1 = $db->insert($tblName1, $userData);
            }

            $status = "ok";
            $msg = "Coin has been added successfully.";

            $returnArr = [$status,$msg]; 
        }
        else{

            $status = "error";
            $msg = "Coin already added";

            $returnArr = [$status,$msg]; 
        }
        

        // if($insertQuery){
        //     $status = "ok";
        //     $msg = "Coin has been added successfully.";

        //     $returnArr = [$status,$msg];  

            
        // }else{

        //     $status = "error";
        //     $msg = "Some problem occurred, please try again.";

        //     $returnArr = [$status,$msg]; 

            
        // }

        // return response()->json(['success' => true, 'message' => 'Success' , 'val' => $val]);
        echo json_encode(array('status' => $status));
        
        // echo json_encode($msg);

    }


    if(($_POST['action'] == 'addcmcCoinDetail') && !empty($_POST['id']) && !empty($_POST['ckmm_id']) ){

        //insert data
        include "layouts/connection.php";
        $_SESSION['test'] = 1;
        $lccl_id  = $_POST['id'];
        $ckmm_id  = $_POST['ckmm_id'];

        $query = mysqli_query($pdo,"UPDATE cmc_kry_my_munte SET lccl_id = '$lccl_id' WHERE ID = '$ckmm_id' ");
        $count = mysqli_num_rows($query);

    }


    // Adding Coingecko Coins

    $tblName2 = 'cgo_kry_my_munte';
    $tblName3 = 'cgo_my_munte';

    if(($_POST['action'] == 'addCoingeckoCoin') && !empty($_POST['coingeckoID']) ){

        //insert data
        include "layouts/connection.php";
        $_SESSION['test'] = 1;
        $COINGECKO_COIN_ID  = $_POST['coingeckoID'];


        $userData = array('COINGECKO_COIN_IDS' => $COINGECKO_COIN_ID);

        $insertQuery = $db->insert($tblName2, $userData);

        $query = mysqli_query($pdo,"SELECT * FROM cgo_my_munte WHERE COINGECKO_COIN_ID =  '$COINGECKO_COIN_ID' ");
        $count = mysqli_num_rows($query);

        if($count == 0){
            
            $insertQuery1 = $db->insert($tblName3, $userData);
        }
        

        // if($insertQuery){
        //     $status = "ok";
        //     $msg = "Coin has been added successfully.";

        //     $returnArr = [$status,$msg];  

            
        // }else{

        //     $status = "error";
        //     $msg = "Some problem occurred, please try again.";

        //     $returnArr = [$status,$msg]; 

            
        // }
        
        // echo json_encode($returnArr);

    }


?>