<?php
if (isset($_POST['download'])) {
    $file = 'C:\Users\LENOVO\Downloads\Resume.docx';  // Replace with your file path

    // Check if file exists
    if (file_exists($file)) {
        // Define headers
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        
        // Clear output buffer
        ob_clean();
        flush();

        // Read the file
        readfile($file);
        exit;
    } else {
        echo "File not found.";
    }
}
?>