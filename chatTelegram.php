<?php
 
 define('BOT_TOKEN', '5499060637:AAFAO8JG3zsirWFm209WgGgYG7UIXJ7UkBk');
 define('CHAT_ID','5252321518');
  
 function kirimTelegram($pesan) {
     $pesan = json_encode($pesan);
     $API = "https://api.telegram.org/bot".BOT_TOKEN."/sendmessage?chat_id=".CHAT_ID."&text=$pesan";
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
     curl_setopt($ch, CURLOPT_URL, $API);
     $result = curl_exec($ch);
     curl_close($ch);
     return $result;
 }

 kirimTelegram("Bayu testing telegram bot 3");

 echo "sukses kirim notifikasi";


 ?>