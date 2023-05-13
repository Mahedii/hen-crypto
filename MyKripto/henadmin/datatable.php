<?php
   // Database Connection
   include "layouts/connection.php";

   // Reading value
   $draw = $_POST['draw'];

    $ckmmSQL = mysqli_query($pdo, "SELECT * FROM cmc_kry_my_munte ORDER BY ID ASC");
    $ckmmRows = mysqli_fetch_array($ckmmSQL);
    $ckmmRowCount = mysqli_num_rows($ckmmSQL);

    $data = array();

    if($ckmmRowCount > 0){
        do {
            $coin_id = $ckmmRows["ID"];
            $coin_COINMARKETCAP_ID = $ckmmRows["COINMARKETCAP_ID"];
            $coin_lccl_id = $ckmmRows["lccl_id"];
            $coin_symbol = $ckmmRows["COIN_SYMBOL"];

            $data = array(
                'coin_id' => $coin_id,
                'coin_COINMARKETCAP_ID' => $coin_COINMARKETCAP_ID,
                'coin_lccl_id' => $coin_lccl_id,
                'coin_symbol' => $coin_symbol
            ); 

        } while ($ckmmRows = mysqli_fetch_array($ckmmSQL));
    }

   // Response
   $response = array(
      "draw" => intval($draw),
      "iTotalRecords" => count($data),
      "iTotalDisplayRecords" => count($data),
      "aaData" => $data
   );

   echo json_encode($response);