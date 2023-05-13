<?php

    session_start();
    include "../layouts/connection.php";

    // Update Coingecko Database

    if ((isset($_POST['db'])) && ('coingeckoDB' == $_POST['db'])) {
        $sql = mysqli_query($pdo, 'SELECT * FROM api_currency ');

        $row = mysqli_fetch_array($sql);

        $COINGECKO_API = $row['COINGECKO_API'];

        $coingecko_curl = curl_init();

        curl_setopt_array($coingecko_curl, [
            CURLOPT_URL => 'https://api.coingecko.com/api/v3/coins/list',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                'X-RapidAPI-Host: coingecko.p.rapidapi.com',
                "X-RapidAPI-Key: $COINGECKO_API",
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

        foreach ($coingecko_decoded_json as $coingecko) {
            $COINGECKO_ID = $coingecko['id'];
            $NAME = $coingecko['name'];
            $SYMBOL = $coingecko['symbol'];

            $NAME = htmlentities($NAME, ENT_QUOTES, 'UTF-8');

            // echo "</br>";

            $checkSql = mysqli_query($pdo, "SELECT * FROM cgo_munt_lys WHERE COINGECKO_ID = '$COINGECKO_ID' ") or exit(mysqli_error($pdo));
            $checkSqlCount = mysqli_num_rows($checkSql);

            if ($checkSqlCount > 0) {
                // continue;
            } else {
                $insertSql = mysqli_query($pdo, "INSERT INTO cgo_munt_lys (COINGECKO_ID, NAME, SYMBOL) 
                VALUES('$COINGECKO_ID', '$NAME', '$SYMBOL')") or exit(mysqli_error($pdo));
            }
        }
    }

// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Update CoinMarketCap Database

    if ((isset($_POST['db'])) && ('coinMarketCapDB' == $_POST['db'])) {
        $sql = mysqli_query($pdo, 'SELECT * FROM api_currency ');

        $row = mysqli_fetch_array($sql);

        $COINMARKETCAP_API = $row['COINMARKETCAP_API'];

        $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';

        $parameters = [
            'start' => '1',
            'limit' => '5000',
            'convert' => 'USD',
        ];

        $headers = [
            'Accepts: application/json',
            "X-CMC_PRO_API_KEY: $COINMARKETCAP_API",
        ];

        $qs = http_build_query($parameters); // query string encode the parameters
        $request = "{$url}?{$qs}"; // create the request URL

        // $request = "{$url}";

        $curl = curl_init(); // Get cURL resource
        // Set cURL options
        curl_setopt_array($curl, [
        CURLOPT_URL => $request,            // set the request URL
        CURLOPT_HTTPHEADER => $headers,     // set the headers
        CURLOPT_RETURNTRANSFER => 1,         // ask for raw response instead of bool
        ]);

        $response = curl_exec($curl); // Send the request, save the response

        curl_close($curl); // Close request

        $decoded_json_coinMarketCap = json_decode($response, true);

        // echo $decoded_json_coinMarketCap['data'][0]['id'];

        // echo $response;
        // exit;

        foreach ($decoded_json_coinMarketCap['data'] as $coinMarketCap) {
            $COINMARKETCAP_ID = $coinMarketCap['id'];
            $COINMARKETCAP_name = $coinMarketCap['name'];
            $COINMARKETCAP_symbol = $coinMarketCap['symbol'];
            $COINMARKETCAP_slug = $coinMarketCap['slug'];

            $COINMARKETCAP_name = htmlentities($COINMARKETCAP_name, ENT_QUOTES, 'UTF-8');

            // echo "</br>";

            $checkSql = mysqli_query($pdo, "SELECT * FROM cmc_munt_lys WHERE COINMARKETCAP_ID = '$COINMARKETCAP_ID' ") or exit(mysqli_error($pdo));
            $checkSqlCount = mysqli_num_rows($checkSql);

            if ($checkSqlCount > 0) {
                // continue;
            } else {
                $insertSql = mysqli_query($pdo, "INSERT INTO cmc_munt_lys (COINMARKETCAP_ID, COIN_NAME, SYMBOL, SLUG) 
                VALUES('$COINMARKETCAP_ID', '$COINMARKETCAP_name', '$COINMARKETCAP_symbol', '$COINMARKETCAP_slug')") or exit(mysqli_error($pdo));
            }
        }
    }

// ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  // Update LiveCoinWatch Database

   if ((isset($_POST['db'])) && ('LiveCoinWatchDB' == $_POST['db']))
	{
       $sql = mysqli_query($pdo, 'SELECT * FROM api_currency ');

       $row = mysqli_fetch_array($pdo);

       $LIVECOINWATCH_API = $row['LIVECOINWATCH_API'];

		$data = json_encode(array('currency' => 'USD', 'sort' => 'rank', 'order' => 'ascending', 'offset' => 0,'meta' => true));
			$context_options = array (
				'http' => array (
				'method' => 'POST',
				'header' => "Content-type: application/json\r\n"
				. "x-api-key: LIVECOINWATCH_API" . "\r\n",
				'content' => $data
			)
			);
		$context = stream_context_create($context_options);
		$fp = fopen('https://api.livecoinwatch.com/coins/list', 'r', true, $context);
		print_r(stream_get_contents($fp));
			

				$decoded_json_lcw = json_decode($context, true); // in index.php
				
		
				foreach ($decoded_json_lcw['data'] as $lcw) 
				{// in index.html
					$LCW_CODE = $lcw['CODE'];
					$LCW_NAME = $lcw['NAME'];
					$LCW_PNG64 = $lcw['PNG64'];
					$LCW_SYMBOL = $lcw['SYMBOL'];

					$LCW_NAME = htmlentities($LCW_NAME, ENT_QUOTES, 'UTF-8');
					$checkSql = mysqli_query($pdo, "SELECT * FROM lcw_munt_lys WHERE CODE = '$LCW_CODE' ") or exit(mysqli_error($pdo));
					$checkSqlCount = mysqli_num_rows($checkSql);

						if ($checkSqlCount > 0) 
						{
						} else 
						{
							$insertSql = mysqli_query($pdo, "INSERT INTO lcw_munt_lys (CODE, NAME, PNG64, SYMBOL) VALUES('$LCW_CODE', '$LCW_NAME', '$LCW_PNG64', '$LCW_SYMBOL')") or exit(mysqli_error($pdo));
						}
				}
   }
?>