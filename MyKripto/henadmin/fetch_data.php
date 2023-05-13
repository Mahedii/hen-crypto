<?php

    $host = 'localhost';
    $dbname = 'kripto';
    $username = 'root';
    $password = '';
    try{
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        // Handle the database connection error
        die("Database connection failed: " . $e->getMessage());
    }

    if (isset($_GET['token'])) {

        $token = $_GET['token'];
    }

    // Process the incoming request parameters from DataTables
    $start = $_GET['start']; // Starting index of the records for the current page
    $length = $_GET['length']; // Number of records to display per page
    $searchValue = $_GET['search']['value']; // Search keyword (if any)
    $orderByColumn = $_GET['order'][0]['column']; // Column index for sorting
    $orderByDirection = $_GET['order'][0]['dir']; // Sorting direction

    if ($token == "CMCvoegmunteby_lccl_data" || $token == "CGOvoegmunteby_lccl_data") {

        // Build the SQL query based on the request parameters
        $sql = "SELECT * FROM live_chart_coin_list_1 lccl";
        $totalRecords = $pdo->query($sql)->rowCount(); // Total number of records (before filtering)

        // Add search and filter conditions if a search keyword is provided
        if (!empty($searchValue)) {
            $sql .= " WHERE platform LIKE :search OR slug LIKE :search OR symbol LIKE :search OR tradingview_symbol LIKE :search OR baseAsset LIKE :search"; // Adjust column names as per your table structure
        }

        // Add sorting condition
        $columns = array('platform', 'slug', 'symbol', 'tradingview_symbol', 'baseAsset'); // Adjust column names as per your table structure
        $orderBy = $columns[$orderByColumn];
        $sql .= " ORDER BY $orderBy $orderByDirection";
    }
    else if ($token == "CMCvoegmunteby_cml_data"){

        // Build the SQL query based on the request parameters
        $sql = " SELECT cml.* FROM cmc_munt_lys cml WHERE ID 
        NOT IN(SELECT COINMARKETCAP_ID FROM cmc_kry_my_munte)";
        $totalRecords = $pdo->query($sql)->rowCount(); // Total number of records (before filtering)

        // Add search and filter conditions if a search keyword is provided
        if (!empty($searchValue)) {
            $sql .= " OR COINMARKETCAP_ID LIKE :search OR SYMBOL LIKE :search OR COIN_NAME LIKE :search"; // Adjust column names as per your table structure
        }

        // Add sorting condition
        $columns = array('COINMARKETCAP_ID', 'SYMBOL', 'COIN_NAME'); // Adjust column names as per your table structure
        $orderBy = $columns[$orderByColumn];
        $sql .= " ORDER BY $orderBy $orderByDirection";
    }
    else if ($token == "CGOvoegmunteby_cml_data"){

        // Build the SQL query based on the request parameters
        $sql = "SELECT c.* FROM cgo_munt_lys c WHERE COINGECKO_ID 
        NOT IN(SELECT COINGECKO_COIN_IDS FROM cgo_kry_my_munte)";
        $totalRecords = $pdo->query($sql)->rowCount(); // Total number of records (before filtering)

        // Add search and filter conditions if a search keyword is provided
        if (!empty($searchValue)) {
            $sql .= " OR COINGECKO_ID LIKE :search OR SYMBOL LIKE :search OR NAME LIKE :search"; // Adjust column names as per your table structure
        }

        // Add sorting condition
        $columns = array('COINGECKO_ID', 'SYMBOL', 'NAME'); // Adjust column names as per your table structure
        $orderBy = $columns[$orderByColumn];
        $sql .= " ORDER BY $orderBy $orderByDirection";
    }
    else if ($token == "LiveChartCoinList_data"){

        // // Fetch data from the database
        // $stmt = $pdo->prepare('SELECT * FROM live_chart_coin_list_1 lccl ORDER BY lccl.id DESC');
        // $stmt->execute();
        // $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // // Filter the data based on the search keyword
        // if(!empty($searchValue)) {
        //     $data = array_filter($data, function ($row) use ($searchValue) {
        //         return strpos($row['name'], $searchValue) !== false; // Modify this condition according to your requirements
        //     });
        // }

        // // Sort the data based on the requested column and direction
        // $columnToSort = array_column($data, array_keys($data[0])[$orderByColumn]);
        // array_multisort($columnToSort, ($orderByDirection == 'asc') ? SORT_ASC : SORT_DESC, $data);

        // // Prepare the response data structure for DataTables
        // $response = array(
        //     'recordsTotal' => count($data), // Total number of records (before filtering)
        //     'recordsFiltered' => count($data), // Total number of records (after filtering)
        //     'data' => array_slice($data, $start, $length), // Subset of data for the current page
        // );


        // Build the SQL query based on the request parameters
        $sql = "SELECT * FROM live_chart_coin_list_1 lccl";
        $totalRecords = $pdo->query($sql)->rowCount(); // Total number of records (before filtering)

        // Add search and filter conditions if a search keyword is provided
        if (!empty($searchValue)) {
            $sql .= " WHERE coin_name LIKE :search OR platform LIKE :search OR slug LIKE :search OR symbol LIKE :search OR tradingview_symbol LIKE :search OR baseAsset LIKE :search"; // Adjust column names as per your table structure
        }

        // Add sorting condition
        $columns = array('id', 'coin_name', 'platform','slug', 'symbol','tradingview_symbol', 'baseAsset'); // Adjust column names as per your table structure
        $orderBy = $columns[$orderByColumn];
        $sql .= " ORDER BY $orderBy $orderByDirection";
    }

    // Add pagination conditions
    $sql .= " LIMIT $start, $length";

    // Prepare and execute the SQL statement
    $stmt = $pdo->prepare($sql);

    if (!empty($searchValue)) {
        $searchParam = "%$searchValue%";
        $stmt->bindParam(':search', $searchParam);
    }

    $stmt->execute();

    // Fetch the result set
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Prepare the response data structure for DataTables
    $response = array(
        'recordsTotal' => $totalRecords, // Total number of records (before filtering)
        'recordsFiltered' => $totalRecords, // Total number of records (after filtering)
        'data' => $result, // Subset of data for the current page
    );

    // Return the response as JSON
    echo json_encode($response);
?>
