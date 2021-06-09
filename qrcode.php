<?php
    function QR_CODE($content)
    {
        $filename = 'src/images/qrcode_etiquette.png';
        $errorCorrectionLevel = 'H';
        $matrixPointSize = 5;
        QRcode::png($content, $filename,
        $errorCorrectionLevel, $matrixPointSize, 1, false);
        echo '<br /><center id="qr"><h3>Voici votre QR Code:</h3><br /><center><img src="images/qrcode_etiquette.png" alt="qrcode" /></center></center><br /><br />';
    }
    function verifUrl($url) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, 1);
        curl_setopt($curl, CURLOPT_NOBODY, 1);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_FRESH_CONNECT, 1);

        if(!curl_exec($curl))
            return false;
        else 
            return true;
    }    
?>
<link rel='stylesheet' href='style/style.css'/>