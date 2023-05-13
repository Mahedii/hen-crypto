<?php     
// Include database configuration file 
require_once 'dbConfig.php'; 
 
$postData = $statusMsg = $valErr = ''; 
$status = 'danger'; 
 
// If the form is submitted 
if(isset($_POST['submit'])){ 
     
    // Get event info 
    $_SESSION['postData'] = $_POST; 
    $title = !empty($_POST['title'])?trim($_POST['title']):''; 
    $description = !empty($_POST['description'])?trim($_POST['description']):''; 
    $location = !empty($_POST['location'])?trim($_POST['location']):''; 
    $date = !empty($_POST['date'])?trim($_POST['date']):''; 
    $time_from = !empty($_POST['time_from'])?trim($_POST['time_from']):''; 
    $time_to = !empty($_POST['time_to'])?trim($_POST['time_to']):''; 
     
    // Validate form input fields 
    if(empty($title)){ 
        $valErr .= 'Voer asseblief die titel van die geleentheid in .<br/>'; 
    } 
    if(empty($date)){ 
        $valErr .= 'Voer asseblief die gebeurtenis datum in .<br/>'; 
    } 
     
    // Check whether user inputs are empty 
    if(empty($valErr)){ 
        // Insert data into the database 
        $sqlQ = "INSERT INTO events (title,description,location,date,time_from,time_to,created) VALUES (?,?,?,?,?,?,NOW())"; 
        $stmt = $db->prepare($sqlQ); 
        $stmt->bind_param("ssssss", $db_title, $db_description, $db_location, $db_date, $db_time_from, $db_time_to); 
        $db_title = $title; 
        $db_description = $description; 
        $db_location = $location; 
        $db_date = $date; 
        $db_time_from = $time_from; 
        $db_time_to = $time_to; 
        $insert = $stmt->execute(); 
         
        if($insert){ 
            $event_id = $stmt->insert_id; 
             
            unset($_SESSION['postData']); 
             
            // Store event ID in session 
            $_SESSION['last_event_id'] = $event_id; 
             
            header("Location: $googleOauthURL"); 
            exit(); 
        }else{ 
            $statusMsg = 'Iets het verkeerd geloop, probeer asseblief weer na n geruime tyd.'; 
        } 
    }else{ 
        $statusMsg = '<p>Vul asseblief al die verpligte velde in:</p>'.trim($valErr, '<br/>'); 
    } 
}else{ 
    $statusMsg = 'Die indiening van vorms het misluk !'; 
} 
 
$_SESSION['status_response'] = array('status' => $status, 'status_msg' => $statusMsg); 
 
header("Location: MyKalendar.php"); 
exit(); 
?>