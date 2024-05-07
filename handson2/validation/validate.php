<?php
$file = fopen("customer.txt", "r");
 
$output = fopen("cust.txt", "w");
 
while (($line = fgets($file)) !== false) {
    $parts = explode(",", $line);
 
    
    if (count($parts) === 3) {
        list($company, $url, $email) = $parts;
 
        
        $company = trim($company);
        $url = trim($url);
        $email = trim($email);
 
        
        if (strpos($url, 'http://') === false && strpos($url, 'https://') === false) {
            $url = 'http://' . $url;
        }
 
        
        if (filter_var($url, FILTER_VALIDATE_URL) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            fwrite($output, $line);
        }
    }
}
echo "Valid records are inserted";
 
 
fclose($file);
fclose($output);
?>