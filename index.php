<?php

$chat_id = '';
$bot_url = "";

//KIRIM PESAN
/*
$url     = $bot_url . "sendMessage?chat_id=" . $chat_id;
$post_fields = ['chat_id' => $chat_id,
'parse_mode'              => 'HTML',
'text'                    => '<b>Ricky Martin Ginting</b>',
];*/

//KIRIM DOCUMENT
/*
$url         = $bot_url . "sendDocument?chat_id=" . $chat_id;
$post_fields = ['chat_id' => $chat_id,
'document'                => new CURLFile(realpath("./assets/file.txt")),
];*/

//KIRIM FOTO
/*
$url         = $bot_url . "sendPhoto?chat_id=" . $chat_id;
$post_fields = ['chat_id' => $chat_id,
'photo'                => new CURLFile(realpath("./assets/180121001.png")),
];*/

//KIRIM AUDIO
/*
$url         = $bot_url . "sendAudio?chat_id=" . $chat_id;
$post_fields = ['chat_id' => $chat_id,
'audio'                => new CURLFile(realpath("./assets/180121001.mp3")),
];*/

//KIRIM VIDEO
/*
$url         = $bot_url . "sendVideo?chat_id=" . $chat_id;
$post_fields = ['chat_id' => $chat_id,
'video'                => new CURLFile(realpath("./assets/180121001.mp3")),
];*/

//KIRIM LOKASI
/*
$url         = $bot_url . "sendLocation?chat_id=" . $chat_id;
$post_fields = ['chat_id' => $chat_id,
'latitude'                => '43.4193408',
'longitude'               => '-2.7253832,16',
];*/

$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type:multipart/form-data",
]);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
$output = curl_exec($ch);

?>