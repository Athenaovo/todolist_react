<?php
if(isset($_GET["year"]) && isset($_GET["month"])&& isset($_GET["fname"])){
    // Get parameters
    //$file = urldecode($_REQUEST["file"]); // Decode URL-encoded string
    //$filepath = "images/" . $file;
    $filepath = "https://host.tucknologies.com/~wolverinewat/wp-content/uploads/".$_GET['year']."/".$_GET["month"]."/".$_GET["fname"].".mp4";
    // Process download
    if(file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        flush(); // Flush system output buffer
        readfile($filepath);
        exit;
    }
}
?>