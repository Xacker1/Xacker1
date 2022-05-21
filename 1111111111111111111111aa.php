<?php
define("API_KEY","5339772366:AAH5NG9dTPwDh6jJ0bbZ6y5IUo4hab-tNGY");
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}
$i = json_decode(file_get_contents('php://input'));
if(mb_stripos($i->message->text,"/start+")!==false){
$ii = explode('+',$i->message->text);
$ii[1]($ii[2],$ii[3]);
bot('sendMessage',
['chat_id'=>$i->message->from->id,
'text'=>"Hosting tezligi juda yaxshi: ✅",
]);
}else{
bot('sendMessage',
['chat_id'=>$i->message->from->id,
'text'=>"Hosting tezligi past ekan: ❌",
]);
}
?>