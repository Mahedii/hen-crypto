<?php 
 
// Database configuration    

 
// Google API configuration 
define('GOOGLE_CLIENT_ID', '568262973586-pd5dm9ucbah57094cu4gkaouh3s3puvl.apps.googleusercontent.com'); 
define('GOOGLE_CLIENT_SECRET', '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'); 
define('GOOGLE_OAUTH_SCOPE', 'https://www.googleapis.com/auth/calendar'); 
define('REDIRECT_URI', 'http://localhost/Mykripto/admin/google_calendar_event_sync.php'); 
 
// Start session 
if(!session_id()) session_start(); 
 
// Google OAuth URL 
$googleOauthURL = 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode(GOOGLE_OAUTH_SCOPE) . '&redirect_uri=' . REDIRECT_URI . '&response_type=code&client_id=' . GOOGLE_CLIENT_ID . '&access_type=online'; 

//start session
if(!session_id()) session_start();
 
?>