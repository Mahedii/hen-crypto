<?php ob_start(); ?>
<?php session_start(); ?>
<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<?php include 'include/connection.php' ?>


<!-- API & Currency Data Fetch -->

<?php

    $sql = mysqli_query($conn,"SELECT * FROM api_currency ");

    $row = mysqli_fetch_array($sql);

    do{

        $NOMICS_API  = $row['NOMICS_API'];  
        $COINGECKO_API  = $row['COINGECKO_API'];
        $COINMARKETCAP_API  = $row['COINMARKETCAP_API'];
        $CURRENCY_API  = $row['CURRENCY_API'];
        $CONVERT_TO  = $row['CONVERT_TO'];

    }while($row = mysqli_fetch_array($sql));

   

?>

<!-- Nomics Data Fetch -->

<?php

    $fetchCoinSql = mysqli_query($conn,"SELECT * FROM fetch_coins ");

    $fetchCoinRow = mysqli_fetch_array($fetchCoinSql);

    $fetchNomicsRowCount = mysqli_num_rows($fetchCoinSql);

    if($fetchNomicsRowCount > 0){

        do{

            $COIN_IDS  = $fetchCoinRow['COIN_IDS'];  

            $NOMICS_COIN_IDS = $COIN_IDS;

        }while($fetchCoinRow = mysqli_fetch_array($fetchCoinSql));

    }

    $COIN_ID_ARRAY = explode (",", $COIN_IDS);
    // echo $COIN_ID_ARRAY[0];
    // exit;

?>


<!-- CoinGecko Data Fetch -->
<?php

    $fetchCoinSql1 = mysqli_query($conn,"SELECT * FROM fetch_coingecko_coins ");

    $fetchCoinRow1 = mysqli_fetch_array($fetchCoinSql1);

    $fetchCoingeckoRowCount = mysqli_num_rows($fetchCoinSql1);

    if($fetchCoingeckoRowCount > 0){

        do{

            $COINGECKO_COIN_IDS  = $fetchCoinRow1['COINGECKO_COIN_IDS'];

        }while($fetchCoinRow1 = mysqli_fetch_array($fetchCoinSql1));
    }

    $COINGECKO_COIN_ID_ARRAY = explode ("%2C", $COINGECKO_COIN_IDS);
    // echo $COINGECKO_COIN_ID_ARRAY[0];
    // exit;

?>


<!-- CoinMarketCap Data Fetch -->
<?php

    $fetchCoinMarketCapSql = mysqli_query($conn,"SELECT * FROM fetch_coinmarketcap_coins ");

    $fetchCoinMarketCapRow = mysqli_fetch_array($fetchCoinMarketCapSql);

    $fetchCoinMarketCapRowCount = mysqli_num_rows($fetchCoinMarketCapSql);

    $CoinMarketCap_Symbol_Lists = "";
    $c = 1;

    if($fetchCoinMarketCapRowCount > 0){

        do{

            $COIN_SYMBOL  = $fetchCoinMarketCapRow['COIN_SYMBOL'];  

            

            if($c == $fetchCoinMarketCapRowCount){
                $CoinMarketCap_Symbol_Lists = $CoinMarketCap_Symbol_Lists.$COIN_SYMBOL;
            }
            else{
                $CoinMarketCap_Symbol_Lists = $CoinMarketCap_Symbol_Lists.$COIN_SYMBOL.",";
            }
            
            $c++;
            

        }while($fetchCoinMarketCapRow = mysqli_fetch_array($fetchCoinMarketCapSql));

    }

    $CoinMarketCap_Symbol_ARRAY = explode (",", $CoinMarketCap_Symbol_Lists);
    // echo $CoinMarketCap_Symbol_Lists;
    // exit;
    // echo count($CoinMarketCap_Symbol_ARRAY);

?>


<!-- API Call For Getting Currency Values -->

<?php


    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://v6.exchangerate-api.com/v6/$CURRENCY_API/latest/USD",
        // CURLOPT_URL => "https://api.exchangerate-api.com/v4/latest/USD",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        // CURLOPT_HTTPHEADER => [
        //     "X-RapidAPI-Host: coingecko.p.rapidapi.com",
        //     "X-RapidAPI-Key: 5d2a9e7cbfmsh680ee340bbd448fp1e478bjsn413ab474f526"
        // ],
    ]);

    $currency_converter_response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    // echo $response;
    // exit;

    $decoded_json_currency_converter = json_decode($currency_converter_response, true);

    $baseUSD = 1;
    $coin_rate_in_ZAR = $decoded_json_currency_converter['conversion_rates']['ZAR'];
    $coin_rate_in_USD = 1/$coin_rate_in_ZAR;
    


?>



<!-- Nomics API Call For Getting Crypto Currency Values -->


<?php

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.nomics.com/v1/currencies/ticker?key=$NOMICS_API&ids=$NOMICS_COIN_IDS&interval=1h,1d,7d,30d,365d&convert=$CONVERT_TO",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        // CURLOPT_HTTPHEADER => [
        //     "X-RapidAPI-Host: coingecko.p.rapidapi.com",
        //     "X-RapidAPI-Key: 5d2a9e7cbfmsh680ee340bbd448fp1e478bjsn413ab474f526"
        // ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    // echo $response;
    // exit;

    $decoded_json = json_decode($response, true);
    

    function colorSet($value){

        $color="";

        if($value > 0){
            $color = "lime";
        }
        else if($value < 0){
            $color = "red";
        }
        else{
            $color = "#EFE1CE";
        }

        return $color;
    }
    
    


    // echo $decoded_json[0]['symbol'];

    // if ($err) {
    //     echo "cURL Error #:" . $err;
    // } else {
    //     echo $response;
    // }

?>



<!-- Coingecko API Call For Getting Crypto Currency Values -->


<?php

    $coingecko_curl = curl_init();

    curl_setopt_array($coingecko_curl, [
        CURLOPT_URL => "https://coingecko.p.rapidapi.com/coins/markets?vs_currency=$CONVERT_TO&price_change_percentage=24h%2C7d%2C30d%2C1y&page=1&per_page=10000&ids=$COINGECKO_COIN_IDS&order=market_cap_desc",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: coingecko.p.rapidapi.com",
            "X-RapidAPI-Key: $COINGECKO_API"
        ],
    ]);

    $coingecko_response = curl_exec($coingecko_curl);
    $err = curl_error($coingecko_curl);

    curl_close($coingecko_curl);

    // echo $coingecko_response;
    // exit;

    $coingecko_decoded_json = json_decode($coingecko_response, true);
    


    // echo $coingecko_decoded_json[0]['symbol'];

    // if ($err) {
    //     echo "cURL Error #:" . $err;
    // } else {
    //     echo $coingecko_response;
    // }

?>



<!-- CoinMarketCap API Call For Getting Crypto Currency Logos -->


<?php

    $url = "https://pro-api.coinmarketcap.com/v1/cryptocurrency/info?symbol=$CoinMarketCap_Symbol_Lists";


    $headers = [
        "Accepts: application/json",
        "X-CMC_PRO_API_KEY: $COINMARKETCAP_API"
    ];

    $coinMarketCap_logo_request = "{$url}";


    $curl = curl_init(); // Get cURL resource
    // Set cURL options
    curl_setopt_array($curl, array(
    CURLOPT_URL => $coinMarketCap_logo_request,            // set the request URL
    CURLOPT_HTTPHEADER => $headers,     // set the headers 
    CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
    ));

    $coinMarketCap_logo_response = curl_exec($curl); // Send the request, save the response

    curl_close($curl); // Close request

    $decoded_json_coinMarketCap_logo = json_decode($coinMarketCap_logo_response, true);

    // echo $decoded_json_coinMarketCap['data']['BTC']['logo'];

    // echo $coinMarketCap_logo_response;
    // exit;

?>



<!-- CoinMarketCap API Call For Getting Crypto Currency Values -->


<?php

    $url = "https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest?symbol=$CoinMarketCap_Symbol_Lists&convert=$CONVERT_TO";

    $headers = [
        "Accepts: application/json",
        "X-CMC_PRO_API_KEY: $COINMARKETCAP_API"
    ];

    $CoinMarketCap_Value_request = "{$url}";


    $curl = curl_init(); // Get cURL resource
    // Set cURL options
    curl_setopt_array($curl, array(
    CURLOPT_URL => $CoinMarketCap_Value_request,            // set the request URL
    CURLOPT_HTTPHEADER => $headers,     // set the headers 
    CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
    ));

    $CoinMarketCap_Value_response = curl_exec($curl); // Send the request, save the response

    curl_close($curl); // Close request

    $decoded_json_coinMarketCap = json_decode($CoinMarketCap_Value_response, true);

    // echo $decoded_json_coinMarketCap['data'][0]['id'];

    // echo $CoinMarketCap_Value_response;
    // exit;

?>
