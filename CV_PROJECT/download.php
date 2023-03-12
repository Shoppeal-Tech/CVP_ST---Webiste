<?php 
$arg4 = $_GET['id'];
$file=$arg4;
$arg1 = $_GET['name'];
//path of the python code
$command = "python C:\Users\Srikanth\Desktop\sam1.py " . escapeshellarg($arg1) . " " . escapeshellarg($arg4);
$output1 = shell_exec($command);
if (headers_sent()) {
    echo 'HTTP header already sent';
} else {
        ob_end_clean();
        header("Content-Type: application/image");
        header("Content-Disposition: attachment; filename=\"".basename($file)."\"");
        readfile($file);
        unlink($file);
        exit;  
}

?>