<?php
   $content = '';
    foreach ($_POST as $key => $value) {
        if($value){
            $content .= "<b>$key</b>: <i>$value</i>\n";
        }
    }
    if(trim($content)){
        $content = "<b>Message from site:</b>\n".$content;

        $apiToken = "6977114338:AAHr2tCzdONyot_wD9cT0EABBnUJApuTSk4";
        $data = [
            'chat_id' => '6184615749',
            'text' => $content,
            'parse_mode' => 'HTML'
        ];
        $response = file_get_contents("https://api.telegram.org/bot${apitoken}/sendMessage?chat_id=${contact});
    }
    ?>