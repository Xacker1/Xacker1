<?php
ob_start();
define('API_KEY','5358729821:AAHTBzv_vYAdeiPbfGvFWXpFK0v2bW7Lxgw'); //bot tokeni
$admin = "5297487683"; //id raqamiz
$promo = "Xacker_07_UZ"; //promokod
$kanall = "supernanodasturlar4";
$robot = "@Xacker_xost_07_bot";
$redmi = "Xacker_07_UZ";
$ver = "14.1.2";
$sayt = " https://xolta12.000webhostapp.com/XVestBot.php"; //Botiz turgan papkani joylashuvi
function ty($ch){ 
return bot('sendChatAction', [
'chat_id' => $ch,
'action' => 'typing',
]);
}

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
function send($sid, $txt){
  bot('sendMessage',[
    'chat_id'=>$sid,
    'text'=>$txt,
    'parse_mode'=>"html"
    ]);
}
$chanel = "@supernanodasturlar4";
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $update->callback_query->message->message_id;
$tx = $message->text;
$name = $update->message->from->first_name;
$photo_id=$message->photo[1]->file_id;
$doc=$message->document;
$doc_id=$doc->file_id;
$data = $update->callback_query->data;
$botf = $id.'/bot$stol/'.$id.'.code.php';
$id = $message->from->id;
$user = $message->from->username;
$chatid = $update->callback_query->message->chat->id;
$step = file_get_contents("$id/$id.step");
$zashita = 'php_value open_basedir "/home/m/mirchat/mirchattojikiston2020/public_html/CODERNEW/telegrambot/XOST/'.$id.'/bots/"';
$token1 = file_get_contents("$id/token1.txt");
$token2 = file_get_contents("$id/token2.txt");
$token3 = file_get_contents("$id/token3.txt");
$token4 = file_get_contents("$id/token4.txt");
$token5 = file_get_contents("$id/token5.txt");
$token6 = file_get_contents("$id/token6.txt");
$token7 = file_get_contents("$id/token7.txt");
$token8 = file_get_contents("$id/token8.txt");
$token9 = file_get_contents("$id/token9.txt");
$token10 = file_get_contents("$id/token10.txt");
$token11 = file_get_contents("$id/token11.txt");
$token12 = file_get_contents("$id/token12.txt");
$token13 = file_get_contents("$id/token13.txt");
$token14 = file_get_contents("$id/token14.txt");
$token15 = file_get_contents("$id/token15.txt");
$token16 = file_get_contents("$id/token16.txt");
$token17 = file_get_contents("$id/token17.txt");
$token18 = file_get_contents("$id/token18.txt");
$token19 = file_get_contents("$id/token19.txt");
$token20 = file_get_contents("$id/token20.txt");
$token21 = file_get_contents("$id/token21.txt");
$token22 = file_get_contents("$id/token22.txt");
$token23 = file_get_contents("$id/token23.txt");
$token24 = file_get_contents("$id/token24.txt");
$token25 = file_get_contents("$id/token25.txt");
$token26 = file_get_contents("$id/token26.txt");
$token27 = file_get_contents("$id/token27.txt");
$token28 = file_get_contents("$id/token28.txt");
$token29 = file_get_contents("$id/token29.txt");
$token20 = file_get_contents("$id/token20.txt");
$name = $message->from->first_name;
$caption = $message->caption;
$video_id=$message->video->file_id;
$langue = file_get_contents("$id/langue.txt");
$stol = file_get_contents("$id/slot.txt");
$balance = file_get_contents("$id/balance.txt");
$time = date('H:i',strtotime('5 hour'));
$uz = json_encode([
'resize_keyboard'=>false,
'keyboard'=>[
[['text'=>"🧨 𝐁𝐨𝐭 𝐐𝐨‘𝐬𝐡𝐢𝐬𝐡"],['text'=>"👨‍💻 𝐀𝐝𝐦𝐢𝐧"]],
[['text'=>"📟 𝐊𝐚𝐛𝐢𝐧𝐞𝐭"],['text'=>"💸 𝐏𝐮𝐥 𝐈𝐬𝐡𝐥𝐚𝐬𝐡"]],
[['text'=>"📖 𝐐𝐨'𝐥𝐥𝐚𝐧𝐦𝐚"],['text'=>"🗑 𝐁𝐨𝐭 𝐨'𝐜𝐡𝐢𝐫𝐢𝐬𝐡"]],
[['text'=>"💾 𝐇𝐨𝐬𝐭𝐢𝐧𝐠 𝐢𝐧𝐟𝐨"],['text'=>"📊 𝐒𝐭𝐚𝐭𝐢𝐬𝐭𝐢𝐤𝐚"]],
[['text'=>"📣 𝐊𝐚𝐧𝐚𝐥𝐢𝐦𝐢𝐳"],['text'=>"🔐 𝐏𝐫𝐨𝐦𝐨𝐤𝐨𝐝"]],
[['text'=>"🖲 𝐀𝐝𝐦𝐢𝐧 𝐔𝐜𝐡𝐮𝐧 𝐏𝐚𝐧𝐞𝐥"]],
]
]);
$panel = json_encode([
  'resize_keyboard'=>false,
  'keyboard'=>[
    [['text'=>"↗️ 𝐗𝐚𝐛𝐚𝐫 𝐘𝐮𝐛𝐨𝐫𝐢𝐬𝐡"],['text'=>"📉 𝐒𝐭𝐚𝐭𝐢𝐬𝐭𝐢𝐤𝐚"]],
[['text'=>"💵 𝐏𝐮𝐥 𝐎'𝐭𝐤𝐚𝐳𝐢𝐬𝐡"],['text'=>"👤 𝐔𝐬𝐞𝐫𝐠𝐚 𝐗𝐚𝐛𝐚𝐫"]],
[['text'=>"🚫 𝐁𝐥𝐨𝐜𝐤 𝐐𝐢𝐥𝐢𝐬𝐡"],['text'=>"✅ 𝐁𝐥𝐨𝐜𝐤𝐝𝐚𝐧 𝐎𝐥𝐢𝐬𝐡"]],
[['text'=>"🗃 𝐁𝐨𝐭𝐢𝐦𝐢𝐳 𝐊𝐨𝐝𝐢"],['text'=>"🔙 𝐎𝐫𝐪𝐚𝐠𝐚"]],
    ]
  ]);
$orqaga = json_encode([
'resize_keyboard'=>false,
'keyboard'=>[
[['text'=>"🔙 𝐎𝐫𝐪𝐚𝐠𝐚"]]
]
]);
$stol_20 = json_encode([
  'resize_keyboard'=>false,
  'keyboard'=>[
    [['text'=>"1"],['text'=>"2"],['text'=>"3"],['text'=>'4'],['text'=>'5']],
    [['text'=>"6"],['text'=>"7"],['text'=>"8"],['text'=>'9'],['text'=>'10']],
    [['text'=>"11"],['text'=>"12"],['text'=>"13"],['text'=>'14'],['text'=>'15']],
    [['text'=>"16"],['text'=>"17"],['text'=>"18"],['text'=>'19'],['text'=>'20']],
    [['text'=>"21"],['text'=>"22"],['text'=>"23"],['text'=>'24'],['text'=>'25']],
    [['text'=>"26"],['text'=>"27"],['text'=>"28"],['text'=>'29'],['text'=>'20']],
    [['text'=>"🔙 𝐎𝐫𝐪𝐚𝐠𝐚"]]
    ]
  ]);
$del = json_encode([
'remove_keyboard'=>false,
]);
$kanal = bot('getChatmember',[
  'chat_id'=>-1001771742124,
  'user_id'=>$id,
  ]);
$kanals = bot('getChatmember',[
  'chat_id'=>-1001771742124,
  'user_id'=>$chatid,
  ]);  
$status = $kanal->result->status;
$status2 = $kanals->result->status;
if($data == "kanal" and $status2 != "left"){
mkdir("$chatid");
  bot('deleteMessage',[
    'chat_id'=>$chatid,
    'message_id'=>$mid
    ]);
$baza = file_get_contents("id.dat");
if(mb_stripos($baza, $chatid) !== false){
}else{
file_put_contents("id.dat", "$baza\n$chatid");
file_put_contents("$chatid/balance.txt", 100);
}
       bot('sendmessage',[   
    'chat_id'=>$chatid,   
     'parse_mode'=>'markdown',   
   'text'=>"👋𝐀𝐬𝐬𝐚𝐥𝐨𝐦𝐮 𝐀𝐥𝐞𝐲𝐤𝐮𝐦 𝐅𝐨𝐲𝐝𝐚𝐥𝐚𝐧𝐮𝐯𝐜𝐡𝐢, 𝐗𝐮𝐬𝐡 𝐊𝐞𝐥𝐢𝐛𝐬𝐢𝐳...",   
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
     [['text'=>'🏚𝗕𝗼𝘀𝗵 𝗦𝗮𝗵𝗶𝗳𝗮🏚', 'callback_data' => "uz"]],
     
]   
])   
]);  
    file_put_contents("$chatid/$chatid.step", 'logo');
    mkdir("$id");

}elseif($data == "kanal" and $status2 == "left"){
         bot('answercallbackquery', [
            'callback_query_id' => $update->callback_query->id,
            'text' => "❌𝐒𝐢𝐳 𝐤𝐚𝐧𝐚𝐥𝐠𝐚 𝐚𝐳𝐨 𝐛𝐨'𝐥𝐦𝐚𝐝𝐢𝐧𝐠𝐢𝐳! 𝐈𝐥𝐭𝐢𝐦𝐨𝐬 𝐚𝐳𝐨 𝐛𝐨'𝐥𝐢𝐧𝐠 ❕ 𝐁𝐨𝐭𝐧𝐢 𝐤𝐞𝐲𝐢𝐧 𝐭𝐨'𝐥𝐢𝐪 𝐢𝐬𝐡𝐥𝐚𝐭𝐢𝐬𝐡𝐢𝐧𝐠𝐢𝐳 𝐦𝐮𝐦𝐤𝐢𝐧!",
            'show_alert' => true
        ]);
}
if($status == "left"){
  bot('sendMessage',[
    'chat_id'=>$id,
    'text'=>"⚡️𝐐𝐮𝐲𝐢𝐝𝐚𝐠𝐢 𝐤𝐚𝐧𝐚𝐥𝐥𝐚𝐫𝐢𝐦𝐢𝐳𝐠𝐚 𝐨𝐛𝐮𝐧𝐚 𝐛𝐨ʻ𝐥𝐢𝐧𝐠.\n\n𝐊𝐚𝐧𝐚𝐥𝐥𝐚𝐫𝐠𝐚 𝐮𝐥𝐚𝐧𝐢𝐛 ✅ 𝐓𝐚𝐬𝐝𝐢𝐪𝐥𝐚𝐬𝐡 𝐧𝐢 𝐁𝐨𝐬𝐢𝐧𝐠!!!!",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"➕ 𝐀zo 𝐁𝐨ʻ𝐥𝐢𝐬𝐡",'url'=>"https://t.me/supernanodasturlar4"]],
        [['text'=>"➕ 𝐀'𝐳𝐨 𝐁𝐨ʻ𝐥𝐢𝐬𝐡",'url'=>"https://t.me/supernanodasturlar4"]],
        [['text'=>"✅ 𝐓𝐚𝐬𝐝𝐢𝐪𝐥𝐚𝐬𝐡",'callback_data'=>"kanal"]],
      ]])
    ]);
}else{
$ban = file_get_contents("ban.txt");
if(mb_stripos($ban, $id) !== false){
send($id, "😡𝐒𝐢𝐳 𝐁𝐨𝐭 𝐓𝐨𝐦𝐨𝐧𝐢𝐝𝐚𝐧 🚫𝐁𝐥𝐨𝐜𝐤𝐝𝐚𝐬𝐢𝐳!");
}else{

if($tx == "/start" and $id == $admin){
     bot('sendMessage',[
     'chat_id'=>$id,
     'text'=>"*🤚𝐀𝐬𝐬𝐚𝐥𝐨𝐦𝐮 𝐀𝐥𝐞𝐲𝐤𝐮𝐦 👨‍💻𝐂𝐫𝐞𝐚𝐭𝐨𝐫 @Xacker_07_UZ  Botga 𝐗𝐮𝐬𝐡 𝐊𝐞𝐥𝐢𝐛𝐬𝐢𝐳✌️*",
     'parse_mode'=>'markdown',
     'reply_markup'=> $uz,
     ]);
     file_put_contents("$id/$id.step", 'logo');
}
if($tx =="/start" and $id != $admin or $tx == "/panel"){
mkdir("$id");
$baza = file_get_contents("id.dat");
if(mb_stripos($baza, $id) !== false){
}else{
file_put_contents("id.dat", "$baza\n$id");
file_put_contents("$id/balance.txt", 200);
}
if(!file_exists("$id/ref")){
  file_put_contents("$id/ref","");
}
       bot('sendmessage',[   
    'chat_id'=>$id,   
     'parse_mode'=>'markdown',   
   'text'=>"👋𝐀𝐬𝐬𝐚𝐥𝐨𝐦𝐮 𝐀𝐥𝐞𝐲𝐤𝐮𝐦 𝐅𝐨𝐲𝐝𝐚𝐥𝐚𝐧𝐮𝐯𝐜𝐡𝐢, 𝐗𝐮𝐬𝐡 𝐊𝐞𝐥𝐢𝐛𝐬𝐢𝐳...",   
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
     [['text'=>'🏚B𝗼𝘀𝗵 𝗦𝗮𝗵𝗶𝗳𝗮🏚', 'callback_data' => "uz"]],
     
]   
])   
]);  

file_put_contents("$id/$id.step", 'logo');
}
if(mb_stripos($tx, '/start')!==false and $tx != "/start"){
$tx = explode(" ", $tx);
if(!mb_stripos($baza, $id) !== false ){
file_put_contents("id.dat", "\n$id",FILE_APPEND);
}
       bot('sendmessage',[   
    'chat_id'=>$id,   
     'parse_mode'=>'markdown',   
   'text'=>"👋𝐀𝐬𝐬𝐚𝐥𝐨𝐦𝐮 𝐀𝐥𝐞𝐲𝐤𝐮𝐦 𝐅𝐨𝐲𝐝𝐚𝐥𝐚𝐧𝐮𝐯𝐜𝐡𝐢, 𝐗𝐮𝐬𝐡 𝐊𝐞𝐥𝐢𝐛𝐬𝐢𝐳...",   
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
     [['text'=>'🏚𝗕𝗼𝘀𝗵 𝗦𝗮𝗵𝗶𝗳𝗮🏚', 'callback_data' => "uz"]],
     
]   
])   
]);  
if(!file_exists("$id/ref")){
bot('sendMessage',[
    'chat_id'=>$tx[1],
    'text'=>"🎗𝐘𝐚𝐧𝐠𝐢 𝐫𝐞𝐟𝐞𝐫𝐚𝐥. 👤𝐒𝐢𝐳𝐧𝐢𝐧𝐠 𝐇𝐢𝐬𝐨𝐛𝐢𝐧𝐠𝐢𝐳𝐠𝐚 200 𝐬𝐨'𝐦 𝐁𝐞𝐫𝐢𝐥𝐝𝐢"
    ]);
file_put_contents("$id/ref",$tx[1]);
$balance = file_get_contents("$tx[1]/balance.txt");
$put = $balance + 200;
file_put_contents("$tx[1]/balance.txt",$put);
}
}
 /*------------#ADMIN---------------*/
if($tx == "🖲 𝐀𝐝𝐦𝐢𝐧 𝐔𝐜𝐡𝐮𝐧 𝐏𝐚𝐧𝐞𝐥" and $id == $admin){
  file_put_contents("$id/$id.step","admin"); 


  bot('sendMessage', [
    'chat_id' => $id,
    'text' => "✊𝐌𝐚𝐫𝐡𝐚𝐦𝐚𝐭 𝐀𝐝𝐦𝐢𝐧 𝐉𝐚𝐧𝐨𝐛𝐥𝐚𝐫𝐢, ⏳𝐊𝐞𝐫𝐚𝐤𝐥𝐢 𝐌𝐞𝐧𝐮𝐧𝐢 𝐓𝐚𝐧𝐥𝐚𝐧𝐠",
    'parse_mode' => "markdown",
    'reply_markup' => $panel
    ]);
}


if($tx == "💸 𝐏𝐮𝐥 𝐈𝐬𝐡𝐥𝐚𝐬𝐡"){
      bot('sendMessage',[
        'chat_id' => $id,
        'text' => "✅ 𝐔𝐬𝐡𝐛𝐮 𝐁𝐨‘𝐥𝐢𝐦𝐝𝐚 𝐒𝐢𝐳 👥 𝐑𝐞𝐟𝐞𝐫𝐚𝐥 𝐭𝐨‘𝐩𝐥𝐚𝐛 𝐏𝐮𝐥 𝐈𝐬𝐡𝐥𝐚𝐬𝐡𝐢𝐧𝐠𝐢𝐳 𝐯𝐚 𝐇𝐢𝐬𝐨𝐛𝐢𝐧𝐠𝐢𝐳𝐠𝐚 ↗️ 𝐎‘𝐭𝐤𝐚𝐳𝐢𝐛 𝐎𝐥𝐢𝐬𝐡𝐢𝐧𝐠𝐢𝐳 𝐌𝐮𝐦𝐤𝐢𝐧.
➖➖➖➖➖➖➖➖➖➖➖➖
✅ 𝐏𝐮𝐥 𝐢𝐬𝐡𝐥𝐚𝐬𝐡 𝐮𝐜𝐡𝐮𝐧 ⤵️ 𝐏𝐚𝐬𝐭𝐝𝐚𝐠𝐢 𝐡𝐚𝐯𝐨𝐥𝐚𝐧𝐢  𝐃𝐨‘𝐬𝐭𝐥𝐚𝐫𝐢𝐧𝐠𝐢𝐳𝐠𝐚 𝐘𝐮𝐛𝐨𝐫𝐢𝐧𝐠 𝐕𝐚 𝐇𝐚𝐫 𝐛𝐢𝐫 𝐃𝐨‘𝐬𝐭𝐢𝐧𝐠𝐢𝐳 𝐮𝐜𝐡𝐮𝐧 200 𝐬𝐨'𝐦𝐝𝐚𝐧 𝐎𝐥𝐢𝐧𝐠.
➖➖➖➖➖➖➖➖➖➖➖➖
✅ 20 𝐭𝐚 𝐃𝐨‘𝐬𝐭𝐢𝐧𝐠𝐢𝐳𝐧𝐢 𝐓𝐚𝐤𝐥𝐢𝐟 𝐪𝐢𝐥𝐢𝐛 𝐁𝐢𝐫 𝐎𝐲𝐥𝐢𝐤 💸 𝐓𝐨‘𝐥𝐨𝐯𝐧𝐢 𝐓𝐞𝐤𝐢𝐧𝐠𝐚 𝐓𝐨‘𝐥𝐚𝐧𝐠
➖➖➖➖➖➖➖➖➖➖➖➖",
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
    [['text'=>"♻️𝐃𝐨'𝐬𝐭𝐥𝐚𝐫𝐠𝐚 𝐘𝐮𝐛𝐨𝐫𝐢𝐬𝐡",'url'=>"https://telegram.me/share/url?url=@$robot?start=$id orqali Php Dasturlash Tilida botlar yarating va Pul ishlang. Botga Kiring va O'z Botingizni yarating. Kirish uchun ⬇️ ni ustiga bosing ⤵️⤵️⤵️
➖➖➖➖➖➖➖➖➖➖➖➖
https://t.me/$robot?start=$id
➖➖➖➖➖➖➖➖➖➖➖➖"]]
    ]
  ])
        ]);
        
}
/*------------#ADMIN---------------*/
if($tx == "↗️ 𝐗𝐚𝐛𝐚𝐫 𝐘𝐮𝐛𝐨𝐫𝐢𝐬𝐡" and $id == $admin){ 
      bot('sendMessage',[ 
      'chat_id'=>$id, 
      'text'=> '🔰𝐗𝐚𝐛𝐚𝐫 𝐌𝐚𝐭𝐧𝐢𝐧𝐢 𝐊𝐢𝐫𝐢𝐭𝐢𝐧𝐠', 
      'reply_markup'=>$orqaga, 
      ]); 
      file_put_contents("$id/$id.step","send"); 
    } 
if($id == $admin and $step == "send" and $tx != "🔙 𝐎𝐫𝐪𝐚𝐠𝐚"){
    file_put_contents("$id/$id.step",""); 
     $idss=file_get_contents("id.dat"); 
      $idszs=explode("\n",$idss); 
      foreach($idszs as $idlat){
   $send =  bot('copyMessage',[ 
      'chat_id'=>$idlat, 
      'from_chat_id'=>$admin, 
      'message_id'=> $message->message_id
      ]);
$res = $send->ok;
if($res == 'true'){
    $i++;
}
}
  send($admin, "♻️𝐗𝐚𝐛𝐚𝐫 $i 𝐭𝐚 𝐅𝐨𝐲𝐝𝐚𝐥𝐚𝐧𝐮𝐯𝐜𝐡𝐢𝐠𝐚 𝐌𝐮𝐯𝐚𝐟𝐟𝐚𝐪𝐢𝐲𝐚𝐭𝐥𝐢 𝐘𝐮𝐛𝐨𝐫𝐢𝐥𝐝𝐢✅");
}

if($tx == "📉 𝐒𝐭𝐚𝐭𝐢𝐬𝐭𝐢𝐤𝐚" and $id == $admin){
  $res = "";
   $a = scandir("./");
      foreach($a as $ids){
        if(is_dir($ids) and $ids !="." and $ids !=".."){
        $bal = file_get_contents("$ids/balance.txt");
        $res = "$res\n$ids - $bal";
      }}
  /*------------#ADMIN---------------*/     

      send($admin, $res);
} 

if(mb_stripos($tx, "/coin") !== false and $id == $admin){
  $tx = explode(" ",$tx);
if($tx[1] > 1 and $tx[2] >= 1){
$balance = file_get_contents("$tx[1]/balance.txt");
$put = $balance + $tx[2];
  file_put_contents("$tx[1]/balance.txt", $put);
  send($tx[1], "💰𝐒𝐢𝐳𝐧𝐢𝐧𝐠 𝐁𝐚𝐥𝐚𝐧𝐬 $tx[2] 𝐬𝐨'𝐦 𝐠𝐚 𝐓𝐨'𝐥𝐝𝐢𝐫𝐢𝐥𝐝𝐢
➖➖➖➖➖➖➖➖➖➖➖➖
𝐉𝐚𝐦𝐢 𝐁𝐚𝐥𝐚𝐧𝐬: $put 𝐬𝐨'𝐦
➖➖➖➖➖➖➖➖➖➖➖➖");
  send($admin, "𝐅𝐨𝐲𝐝𝐚𝐥𝐚𝐧𝐮𝐯𝐜𝐡𝐢 <a href='tg://user?id=$tx[1]'>$tx[1]</a> 𝐇𝐢𝐬𝐨𝐛𝐢𝐠𝐚 $tx[2] 𝐬𝐨‘𝐦 𝐎'𝐭𝐤𝐚𝐳𝐝𝐢𝐧𝐠𝐢𝐳
➖➖➖➖➖➖➖➖➖➖➖➖
𝐉𝐚𝐦𝐢 𝐁𝐚𝐥𝐚𝐧𝐬𝐢: $put 𝐬𝐨'𝐦
➖➖➖➖➖➖➖➖➖➖➖➖");
}
}
if(mb_stripos($tx, "/get") !== false and $id == $admin){
  $tx = explode(" ",$tx);
  $balance = file_get_contents("$tx[1]/balance.txt");
$token1 = file_get_contents("$tx[1]/token1.txt");
$token2 = file_get_contents("$tx[1]/token2.txt");
$token3 = file_get_contents("$tx[1]/token3.txt");
$token4 = file_get_contents("$tx[1]/token4.txt");
$token5 = file_get_contents("$tx[1]/token5.txt");
$token6 = file_get_contents("$tx[1]/token6.txt");
$token7 = file_get_contents("$tx[1]/token7.txt");
$token8 = file_get_contents("$tx[1]/token8.txt");
$token9 = file_get_contents("$tx[1]/token9.txt");
$token10 = file_get_contents("$tx[1]/token10.txt");
$token11 = file_get_contents("$tx[1]/token11.txt");
$token12 = file_get_contents("$tx[1]/token12.txt");
$token13 = file_get_contents("$tx[1]/token13.txt");
$token14 = file_get_contents("$tx[1]/token14.txt");
$token15 = file_get_contents("$tx[1]/token15.txt");
$token16 = file_get_contents("$tx[1]/token16.txt");
$token17 = file_get_contents("$tx[1]/token17.txt");
$token18 = file_get_contents("$tx[1]/token18.txt");
$token19 = file_get_contents("$tx[1]/token19.txt");
$token20 = file_get_contents("$tx[1]/token20.txt");
$token21 = file_get_contents("$tx[1]/token21.txt");
$token22 = file_get_contents("$tx[1]/token22.txt");
$token23 = file_get_contents("$tx[1]/token23.txt");
$token24 = file_get_contents("$tx[1]/token24.txt");
$token25 = file_get_contents("$tx[1]/token25.txt");
$token26 = file_get_contents("$tx[1]/token26.txt");
$token27 = file_get_contents("$tx[1]/token27.txt");
$token28 = file_get_contents("$tx[1]/token28.txt");
$token29 = file_get_contents("$tx[1]/token29.txt");
$token20 = file_get_contents("$tx[1]/token20.txt");
$b = json_decode(file_get_contents("https://api.telegram.org/bot$token1/getMe"));
$bid = $b->result->id;
$botname = $b->result->first_name;
$c = $b->result->username;
$b2 = json_decode(file_get_contents("https://api.telegram.org/bot$token2/getMe"));
$bid2 = $b2->result->id;
$botname2 = $b2->result->first_name;
$c2 = $b2->result->username;
$b3 = json_decode(file_get_contents("https://api.telegram.org/bot$token3/getMe"));
$bid3 = $b3->result->id;
$botname3 = $b3->result->first_name;
$c3 = $b3->result->username;
$b4 = json_decode(file_get_contents("https://api.telegram.org/bot$token4/getMe"));
$bid4 = $b4->result->id;
$botname4 = $b4->result->first_name;
$c4 = $b4->result->username;
$b5 = json_decode(file_get_contents("https://api.telegram.org/bot$token5/getMe"));
$bid5 = $b5->result->id;
$botname5 = $b5->result->first_name;
$c5 = $b5->result->username;
$b6 = json_decode(file_get_contents("https://api.telegram.org/bot$token6/getMe"));
$bid6 = $b6->result->id;
$botname6 = $b6->result->first_name;
$c6 = $b6->result->username;
$b7 = json_decode(file_get_contents("https://api.telegram.org/bot$token7/getMe"));
$bid7 = $b7->result->id;
$botname7 = $b7->result->first_name;
$c7 = $b7->result->username;
$b8 = json_decode(file_get_contents("https://api.telegram.org/bot$token8/getMe"));
$bid8 = $b8->result->id;
$botname8 = $b8->result->first_name;
$c8 = $b8->result->username;
$b9 = json_decode(file_get_contents("https://api.telegram.org/bot$token9/getMe"));
$bid9 = $b9->result->id;
$botname9 = $b9->result->first_name;
$c9 = $b9->result->username;
$b10 = json_decode(file_get_contents("https://api.telegram.org/bot$token10/getMe"));
$bid10 = $b10->result->id;
$botname10 = $b10->result->first_name;
$c10 = $b10->result->username;
$b11 = json_decode(file_get_contents("https://api.telegram.org/bot$token11/getMe"));
$bid11 = $b11->result->id;
$botname11 = $b11->result->first_name;
$c11 = $b11->result->username;
$b12 = json_decode(file_get_contents("https://api.telegram.org/bot$token12/getMe"));
$bid12 = $b12->result->id;
$botname12 = $b12->result->first_name;
$c12 = $b12->result->username;
$b13 = json_decode(file_get_contents("https://api.telegram.org/bot$token13/getMe"));
$bid13 = $b13->result->id;
$botname13 = $b13->result->first_name;
$c13 = $b13->result->username;
$b14 = json_decode(file_get_contents("https://api.telegram.org/bot$token14/getMe"));
$bid14 = $b14->result->id;
$botname14 = $b14->result->first_name;
$c14 = $b14->result->username;
$b15 = json_decode(file_get_contents("https://api.telegram.org/bot$token15/getMe"));
$bid15 = $b15->result->id;
$botname15 = $b15->result->first_name;
$c15 = $b15->result->username;
$b16 = json_decode(file_get_contents("https://api.telegram.org/bot$token16/getMe"));
$bid16 = $b16->result->id;
$botname16 = $b16->result->first_name;
$c16 = $b16->result->username;
$b17 = json_decode(file_get_contents("https://api.telegram.org/bot$token17/getMe"));
$bid17 = $b17->result->id;
$botname17 = $b17->result->first_name;
$c17 = $b17->result->username;
$b18 = json_decode(file_get_contents("https://api.telegram.org/bot$token18/getMe"));
$bid18 = $b18->result->id;
$botname18 = $b18->result->first_name;
$c18 = $b18->result->username;
$b19 = json_decode(file_get_contents("https://api.telegram.org/bot$token19/getMe"));
$bid19 = $b19->result->id;
$botname19 = $b19->result->first_name;
$c19 = $b19->result->username;
$b20 = json_decode(file_get_contents("https://api.telegram.org/bot$token20/getMe"));
$bid20 = $b20->result->id;
$botname20 = $b20->result->first_name;
$c20 = $b20->result->username;
$b21 = json_decode(file_get_contents("https://api.telegram.org/bot$token21/getMe"));
$bid21 = $b21->result->id;
$botname21 = $b21->result->first_name;
$c21 = $b21->result->username;
$b22 = json_decode(file_get_contents("https://api.telegram.org/bot$token22/getMe"));
$bid22 = $b22->result->id;
$botname22 = $b22->result->first_name;
$c22 = $b22->result->username;
$b23 = json_decode(file_get_contents("https://api.telegram.org/bot$token23/getMe"));
$bid23 = $b23->result->id;
$botname23 = $b23->result->first_name;
$c23 = $b23->result->username;
$b24 = json_decode(file_get_contents("https://api.telegram.org/bot$token24/getMe"));
$bid24 = $b24->result->id;
$botname24 = $b24->result->first_name;
$c24 = $b24->result->username;
$b25 = json_decode(file_get_contents("https://api.telegram.org/bot$token25/getMe"));
$bid25 = $b25->result->id;
$botname25 = $b25->result->first_name;
$c25 = $b25->result->username;
$b26 = json_decode(file_get_contents("https://api.telegram.org/bot$token26/getMe"));
$bid26 = $b26->result->id;
$botname26 = $b26->result->first_name;
$c26 = $b26->result->username;
$b27 = json_decode(file_get_contents("https://api.telegram.org/bot$token27/getMe"));
$bid27 = $b27->result->id;
$botname27 = $b27->result->first_name;
$c27 = $b27->result->username;
$b28 = json_decode(file_get_contents("https://api.telegram.org/bot$token28/getMe"));
$bid28 = $b28->result->id;
$botname28 = $b28->result->first_name;
$c28 = $b28->result->username;
$b29 = json_decode(file_get_contents("https://api.telegram.org/bot$token29/getMe"));
$bid29 = $b29->result->id;
$botname29 = $b29->result->first_name;
$c29 = $b29->result->username;
$b20 = json_decode(file_get_contents("https://api.telegram.org/bot$token20/getMe"));
$bid20 = $b20->result->id;
$botname20 = $b20->result->first_name;
$c20 = $b20->result->username;
$res = "--------1-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c
➖➖➖➖➖➖➖➖➖➖➖➖
--------2-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid2
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname2
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c2
➖➖➖➖➖➖➖➖➖➖➖➖
--------3-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid3
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname3
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c3
➖➖➖➖➖➖➖➖➖➖➖➖
--------4-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid4
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname4
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c4
➖➖➖➖➖➖➖➖➖➖➖➖
--------5-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid5
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname5
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c5
➖➖➖➖➖➖➖➖➖➖➖➖
--------6-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid6
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname6
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c6
➖➖➖➖➖➖➖➖➖➖➖➖
--------7-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid7
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname7
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c7
➖➖➖➖➖➖➖➖➖➖➖➖
--------8-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid8
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname8
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c8
➖➖➖➖➖➖➖➖➖➖➖➖
--------9-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid9
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname9
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c9
➖➖➖➖➖➖➖➖➖➖➖➖
--------10-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid10
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname10
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c10
➖➖➖➖➖➖➖➖➖➖➖➖
--------11-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid11
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname11
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c11
➖➖➖➖➖➖➖➖➖➖➖➖
--------12-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid12
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname12
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c12
➖➖➖➖➖➖➖➖➖➖➖➖
--------13-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid13
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname13
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c13
➖➖➖➖➖➖➖➖➖➖➖➖
--------14-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid14
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname14
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c14
➖➖➖➖➖➖➖➖➖➖➖➖
--------15-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid15
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname15
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c15
➖➖➖➖➖➖➖➖➖➖➖➖
--------16-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid16
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname16
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c16
➖➖➖➖➖➖➖➖➖➖➖➖
--------17-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid17
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname17
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c17
➖➖➖➖➖➖➖➖➖➖➖➖
--------18-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid18
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname18
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c18
➖➖➖➖➖➖➖➖➖➖➖➖
--------19-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid19
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname19
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c19
➖➖➖➖➖➖➖➖➖➖➖➖
--------20-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid20
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname20
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c20
➖➖➖➖➖➖➖➖➖➖➖➖
--------21-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid21
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname21
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c21
➖➖➖➖➖➖➖➖➖➖➖➖
--------22-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid22
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname22
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c22
➖➖➖➖➖➖➖➖➖➖➖➖
--------23-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid23
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname23
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c23
➖➖➖➖➖➖➖➖➖➖➖➖
--------24-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid24
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname24
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c24
➖➖➖➖➖➖➖➖➖➖➖➖
--------25-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid25
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname25
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c25
➖➖➖➖➖➖➖➖➖➖➖➖
--------26-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid26
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname26
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c26
➖➖➖➖➖➖➖➖➖➖➖➖
--------27-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid27
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname27
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c27
➖➖➖➖➖➖➖➖➖➖➖➖
--------28-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid28
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname28
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c28
➖➖➖➖➖➖➖➖➖➖➖➖
--------29-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid29
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname29
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c29
➖➖➖➖➖➖➖➖➖➖➖➖
--------20-------
🆔 𝐁𝐨𝐭 𝐈𝐃 𝐬𝐢: $bid20
📝 𝐁𝐨𝐭 𝐍𝐨𝐦𝐢: $botname20
❇️ 𝐁𝐨𝐭 𝐔𝐬𝐞𝐫𝐢: @$c20";
  send($admin, "Id: <a href='tg://user?id=$tx[1]'>$tx[1]</a>\n💰𝐁𝐚𝐥𝐚𝐧𝐬𝐢: $balance\n$res");
}

if ($data == "ha") {
$stol2 = file_get_contents("$chatid/slot.txt");
$tokend = file_get_contents("$chatid/token$stol2.txt");
exec("rm -rf $chatid/bots/bot$stol2/");
fopen("https://api.telegram.org/bot$tokend/deleteWebhook", "r");
unlink("$chatid/token$stol2.txt");
        bot('answercallbackquery', [
            'callback_query_id' => $update->callback_query->id,
            'text' => "✅ 𝐁𝐨𝐭 𝐨'𝐜𝐡𝐢𝐫𝐢𝐛 𝐭𝐚𝐬𝐡𝐥𝐚𝐧𝐝𝐢!",
            'show_alert' => true
        ]);
        bot('deleteMessage', [
       'chat_id'=> $chatid,
       'message_id'=> $mid
       ]);
$lang = file_get_contents("$chatid/langue.txt");
if($lang == "ru"){
  bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>"Меню",
'reply_markup'=>$ru
    ]);
}
if($lang == "uz"){
  bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>"🏚 𝐁𝐨𝐬𝐡 𝐌𝐞𝐧𝐮",
'reply_markup'=>$uz
    ]);
}
}
if ($data == "net") {
     bot('deleteMessage', [
       'chat_id'=> $chatid,
       'message_id'=> $mid
       ]);
$lang = file_get_contents("$chatid/langue.txt");
if($lang == "ru"){
  bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>"Меню",
'reply_markup'=>$ru
    ]);
}
if($lang == "uz"){
  bot('sendMessage',[
'chat_id'=>$chatid,
'text'=>"🏚 𝐁𝐨𝐬𝐡 𝐌𝐞𝐧𝐮",
'reply_markup'=>$uz
    ]);
}       
}


if($data == "promokod"){
  bot("sendMessage",[
    'chat_id'=>$chatid,
    'text'=>"➖➖➖➖➖➖➖➖➖➖➖➖
✌️𝐒𝐢𝐳𝐝𝐚 𝐏𝐫𝐨𝐦𝐨𝐤𝐨𝐝 𝐁𝐨𝐫𝐦𝐢?
➖➖➖➖➖➖➖➖➖➖➖➖
🤞𝐌𝐚𝐫𝐡𝐚𝐦𝐚𝐭, 🔐𝐏𝐫𝐨𝐦𝐨𝐤𝐨𝐝 𝐧𝐢 𝐊𝐢𝐫𝐢𝐭𝐢𝐧𝐠 𝐯𝐚 💰10000 𝐒𝐨‘𝐦𝐠𝐚 𝐄𝐠𝐚 𝐛𝐨‘𝐥𝐢𝐧𝐠✅.
➖➖➖➖➖➖➖➖➖➖➖➖",
    'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"🔐𝐏𝐫𝐨𝐦𝐨𝐤𝐨𝐝𝐧𝐢 ??𝐥𝐢𝐬𝐡",'url'=>"https://t.me/php_o1"]]
        ]
      ])
    ]);
}

if($data == 'uz'){
        bot('deleteMessage', [
       'chat_id'=> $chatid,
       'message_id'=> $mid
       ]);
       bot('sendMessage',[
     'chat_id'=>$chatid,
     'text'=>"*🤚 𝐀𝐬𝐬𝐚𝐥𝐨𝐦𝐮 𝐀𝐥𝐞𝐲𝐤𝐮𝐦 𝐅𝐨𝐲𝐝𝐚𝐥𝐚𝐧𝐮𝐯𝐜𝐡𝐢

💾 𝐇𝐨𝐬𝐭𝐢𝐧𝐠 𝐁𝐨𝐭𝐢𝐦𝐢𝐳𝐠𝐚 🎗𝐗𝐮𝐬𝐡 𝐊𝐞𝐥𝐢𝐛𝐬𝐢𝐳.
➖➖➖➖➖➖➖➖➖➖➖➖
⚡️ 𝐔𝐬𝐡𝐛𝐮 𝐁𝐨𝐭 𝐎𝐫𝐪𝐚𝐥𝐢 𝐒𝐢𝐳 🧩𝐓𝐞𝐥𝐞𝐠𝐫𝐚𝐦𝐝𝐚𝐧 𝐂𝐡𝐢𝐪𝐦𝐚𝐠𝐚𝐧 𝐡𝐨𝐥𝐝𝐚 🌐𝐒𝐞𝐫𝐯𝐞𝐫𝐝𝐚𝐧 𝐉𝐨𝐲 𝐎𝐥𝐚𝐬𝐢𝐳 𝐯𝐚
➖➖➖➖➖➖➖➖➖➖➖➖
📄𝐏𝐡𝐩 𝐅𝐚𝐲𝐥𝐥𝐚𝐫𝐢𝐧𝐠𝐢𝐳𝐧𝐢 𝐗𝐨𝐬𝐭𝐢𝐧𝐠𝐠𝐚 ⬇️𝐘𝐮𝐤𝐥𝐚𝐲 𝐎𝐥𝐚𝐬𝐢𝐳.
➖➖➖➖➖➖➖➖➖➖➖➖
📣 𝐊𝐚𝐧𝐚𝐥𝐢𝐦𝐢𝐳: @supernanodasturlar4 
➖➖➖➖➖➖➖➖➖➖➖➖
👨‍💻 𝐀𝐝𝐦𝐢𝐧: @Xacker_07_UZ 
➖➖➖➖➖➖➖➖➖➖➖➖*",
     'parse_mode'=>'markdown',
       'reply_markup'=> $uz,
     ]);
     file_put_contents("$chatid/langue.txt", "uz");
}
if($tx == "🧨 𝐁𝐨𝐭 𝐐𝐨‘𝐬𝐡𝐢𝐬𝐡"){ 
if($balance >= "1000"){
mkdir("$id");
mkdir("$id/bots");
mkdir("$id/bots/bot1");
mkdir("$id/bots/bot2");
mkdir("$id/bots/bot3");
mkdir("$id/bots/bot4");
mkdir("$id/bots/bot5");
mkdir("$id/bots/bot6");
mkdir("$id/bots/bot7");
mkdir("$id/bots/bot8");
mkdir("$id/bots/bot9");
mkdir("$id/bots/bot10");
mkdir("$id/bots/bot11");
mkdir("$id/bots/bot12");
mkdir("$id/bots/bot13");
mkdir("$id/bots/bot14");
mkdir("$id/bots/bot15");
mkdir("$id/bots/bot16");
mkdir("$id/bots/bot17");
mkdir("$id/bots/bot18");
mkdir("$id/bots/bot19");
mkdir("$id/bots/bot20");
mkdir("$id/bots/bot21");
mkdir("$id/bots/bot22");
mkdir("$id/bots/bot23");
mkdir("$id/bots/bot24");
mkdir("$id/bots/bot25");
mkdir("$id/bots/bot26");
mkdir("$id/bots/bot27");
mkdir("$id/bots/bot28");
mkdir("$id/bots/bot29");
mkdir("$id/bots/bot20");
bot('sendMessage',[
'chat_id'=>$id,
'text'=>"*⤵️ 𝐌𝐚𝐫𝐡𝐚𝐦𝐚𝐭 𝐒𝐭𝐨𝐥𝐧𝐢 𝐓𝐚𝐧𝐥𝐚𝐧𝐠*",
'reply_markup'=>$stol_20,
'parse_mode'=>'markdown',
]);
file_put_contents("$id/.htaccess", $zashita);
file_put_contents("$id/$id.step", "slot");
$baza = file_get_contents("id.dat");
if(mb_stripos($baza, $id) !== false){
}else{
file_put_contents("id.dat", "$baza\n$id");
}
}else{
  bot('sendMessage',[
    'chat_id'=>$id,
    'text'=>"⛔️ 𝐇𝐢𝐬𝐨𝐛𝐢𝐧𝐠𝐢𝐳𝐝𝐚 𝐌𝐚𝐛𝐥𝐚𝐠‘ 𝐘𝐞𝐭𝐚𝐫𝐥𝐢 𝐞𝐦𝐚𝐬
    ➖➖➖➖➖➖➖➖➖➖➖➖
    𝙓𝙞𝙨𝙤𝙗𝙞𝙣𝙜𝙞𝙯𝙙𝙖 𝙠𝙖𝙢𝙞𝙙𝙖 1000 𝙨𝙤ʻ𝙢 𝙗𝙤ʻ𝙡𝙞𝙨𝙝𝙞 𝙠𝙚𝙧𝙖𝙠
➖➖➖➖➖➖➖➖➖➖➖➖
💰 𝐇𝐢𝐬𝐨𝐛𝐢𝐧𝐠𝐢𝐳𝐧𝐢 𝐓𝐨‘𝐥𝐝𝐢𝐫𝐢𝐧𝐠 𝐯𝐚
➖➖➖➖➖➖➖➖➖➖➖➖
🔰 𝐊𝐞𝐲𝐢𝐧𝐫𝐨𝐪 𝐐𝐚𝐲𝐭𝐚 𝐔𝐫𝐢𝐧𝐢𝐛 𝐊𝐨‘𝐫𝐢𝐧𝐠!!!!
➖➖➖➖➖➖➖➖➖➖➖➖",
    'reply_markup'=>json_encode([
  'inline_keyboard'=>[
    [['text'=>"💰𝐇𝐢𝐬𝐨𝐛𝐧𝐢 𝐓𝐨‘𝐥𝐝𝐢𝐫𝐢𝐬𝐡",'url'=>"https://t.me/$redmi"]],
    ]
  ])
    ]);
}
}
if($tx >=1 and $tx <=20 and $tx !="🔙 𝐎𝐫𝐪𝐚𝐠𝐚" and $step == "slot" and $langue == "uz"){
  bot('sendMessage',[
'chat_id'=>$id,
'text'=>"*↖️ 𝐌𝐚𝐫𝐡𝐚𝐦𝐚𝐭 𝐏𝐡𝐩 𝐅𝐚𝐲𝐥𝐧𝐢 𝐘𝐮𝐛𝐨𝐫𝐢𝐧𝐠,
➖➖➖➖➖➖➖➖➖➖➖➖
📄 𝐅𝐚𝐲𝐥 𝐩𝐡𝐩 𝐠𝐚 𝐓𝐮𝐠𝐚𝐬𝐡𝐢 𝐊𝐞𝐫𝐚𝐤
➖➖➖➖➖➖➖➖➖➖➖➖*",
'reply_markup'=>  json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔙 𝐎𝐫𝐪𝐚𝐠𝐚"]],
]
]),
'parse_mode'=>'markdown',
]);
file_put_contents("$id/slot.txt", $tx);
file_put_contents("$id/$id.step", "load");
}
if(isset($message->document) and $step == "load" and $langue == "uz"){
file_put_contents("$id/arxiv.txt", $doc_id);
$url = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getFile?file_id='.$doc_id),true);
$path=$url['result']['file_path'];
$file = 'https://api.telegram.org/file/bot'.API_KEY.'/'.$path;
$tester = file_get_contents($file);
$type = strtolower(strrchr($file,'.')); 
$type=str_replace('.','',$type);
if($type == "php"){
if(!mb_stripos($tester, 'system(') !==false and !mb_stripos($tester, 'shell_exec(') !==false and  !mb_stripos($tester,'$_POST')!==false and !mb_stripos($tester,'$_GET')!==false and 
!mb_stripos($tester,'neoxost')!==false and 
!mb_stripos($tester,'$res = $res')!==false  and
!mb_stripos($tester,'setwebhook')!==false and
!mb_stripos($tester,'.php')!==false and
!mb_stripos($tester,'$p')!==false and
!mb_stripos($tester,'"p"')!==false and
!mb_stripos($tester,'"h"')!==false and
!mb_stripos($tester,'"hp"')!==false and
!mb_stripos($tester,'"ph"')!==false and
!mb_stripos($tester,'"php";')!==false and
!mb_stripos($tester,'$http_host')!==false and
!mb_stripos($tester,'save(clear($files));')!==false and 
!mb_stripos($tester,'Unable to open file!')!==false  and
!mb_stripos($tester,'function.php')!==false  and  !mb_stripos($tester,'$_SERVER')!==false and !mb_stripos($tester,'proc_popen')!==false and !mb_stripos($tester,'<script>')!==false and !mb_stripos($tester,'<html')!==false and !mb_stripos($tester,"exec('function.php")!==false and !mb_stripos($tester,'exec(" function.php')!==false ){
$okey = file_put_contents("$id/bots/bot$stol/$id.code.$type",file_get_contents($file));
  
}else{
  send($id, "➖➖➖➖➖➖➖➖➖➖➖➖
📄 𝐅𝐚𝐲𝐥𝐝𝐚 𝐞𝐧𝐠 𝐭𝐚𝐪𝐢𝐪𝐥𝐚𝐧𝐠𝐚𝐧 𝐤𝐨𝐝𝐥𝐚𝐫 𝐛𝐨𝐫
➖➖➖➖➖➖➖➖➖➖➖➖");
    file_put_contents("ba0n.txt","$id\n", FILE_APPEND);
  exec("rm -rf $id/bots/");
  send($admin, "👤 𝐅𝐨𝐲𝐝𝐚𝐥𝐚𝐧𝐮𝐯𝐜𝐡𝐢 $id 🚫 𝐁𝐥𝐨𝐜𝐤𝐥𝐚𝐧𝐝𝐢.
➖➖➖➖➖➖➖➖➖➖➖➖
⚠️ 𝐒𝐚𝐛𝐚𝐛: 𝐊𝐨𝐝𝐢𝐝𝐚𝐧 ❌ 𝐓𝐚𝐪𝐢𝐪𝐥𝐚𝐧𝐠𝐚𝐧 𝐊𝐨𝐝𝐥𝐚𝐫 𝐓𝐨𝐩𝐢𝐥𝐝𝐢❗️❗️❗️
➖➖➖➖➖➖➖➖➖➖➖➖");
  bot('sendDocument',[
    'chat_id'=>$admin,
    'document'=>$doc_id
    ]);
}
}else{
  send($id, "⚠️𝐔𝐬𝐡𝐛𝐮 𝐅𝐢𝐥𝐞 𝐓𝐮𝐫𝐢 𝐏𝐡𝐩 𝐞𝐦𝐚𝐬❗️");
}

if($okey and filesize("$id/bots/bot$stol/$id.code.$type") < "2097152"){
bot('sendMessage',[
'chat_id'=>$id,
'text'=>" *✅ 𝐏𝐡𝐩 𝐅𝐚𝐲𝐥𝐢𝐧𝐠𝐢𝐳 𝐲𝐮𝐤𝐥𝐚𝐧𝐝𝐢
➖➖➖➖➖➖➖➖➖➖➖➖
⚙ 𝐄𝐧𝐝𝐢 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 🔗𝐓𝐨𝐤𝐞𝐧𝐢𝐧𝐢 𝐘𝐮𝐛𝐨𝐫𝐢𝐧𝐠*",
'parse_mode'=>'markdown',
]);
file_put_contents("$id/$id.step", "token");
}elseif(filesize("$id/bots/bot$stol/$id.code.php") > "2097152"){
bot('sendMessage',[
'chat_id'=>$id,
'text'=>"📄𝐅𝐚𝐲𝐥 𝐗𝐚𝐣𝐦𝐢 🧭𝐌𝐚𝐤𝐬𝐢𝐦𝐚𝐥 2𝐌𝐛 𝐝𝐚𝐧 𝐎𝐬𝐡𝐦𝐚𝐬𝐥𝐢𝐠𝐢𝐧𝐢 𝐊𝐞𝐫𝐚𝐤",
'parse_mode'=>"markdown",
]);
unlink("$id/bots/bot$stol/$id.code.$type");
}

}
if($tx == $tx and $step == 'token' and $langue == "uz"){
$b = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getMe"));
$bn = $b->result->username;
if(!empty($bn)){
file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=$sayt$id/bots/bot$stol/$id.code.php");

    bot('sendMessage',[
     'chat_id'=>$id,
     'text'=>"*@$bn 📟𝐒𝐞𝐫𝐯𝐞𝐫𝐠𝐚 𝐌𝐮𝐯𝐚𝐟𝐟𝐚𝐪𝐢𝐲𝐚𝐭𝐥𝐢 𝐔𝐥𝐚𝐧𝐝𝐢✅
     ➖➖➖➖➖➖➖➖➖➖➖➖
👨‍💻 𝐘𝐚𝐫𝐚𝐭𝐢𝐥𝐠𝐚𝐧 𝐁𝐨𝐭𝐥𝐚𝐫𝐧𝐢 @superdasturchilar 𝐊𝐚𝐧𝐚𝐥𝐢𝐝𝐚 𝐊𝐨‘𝐫𝐢𝐬𝐡𝐢𝐧𝐠𝐢𝐳 𝐌𝐮𝐦𝐤𝐢𝐧*",
     'parse_mode'=>'markdown',
     'reply_markup'=> $uz,
     ]);
exec("php -l $id/bots/bot$stol/$id.code.php", $ress);
  if(!strpos(file_get_contents("$id/bots/bot$stol/$id.code.php"), "$tx") and $tx != "🔙 𝐎𝐫𝐪𝐚𝐠𝐚"){
    bot("sendMessage",[
      'chat_id'=>$id,
      'text'=>"🔎 𝐅𝐚𝐲𝐥𝐝𝐚 𝐒𝐢𝐳 𝐲𝐮𝐛𝐨𝐫𝐠𝐚𝐧 𝐓𝐨𝐤𝐞𝐧 𝐁𝐨'𝐥𝐦𝐚𝐬𝐥𝐢𝐠𝐢 𝐦𝐮𝐦𝐤𝐢𝐧!"
      ]);
  }
      
$ress = $ress[0];
if($ress[0] == "E"){
  send($id, "<b>❌ 𝐊𝐨𝐝𝐢𝐧𝐠𝐢𝐳𝐝𝐚 𝐗𝐚𝐭𝐨 𝐁o𝐫!
➖➖➖➖➖➖➖➖➖➖➖➖
📄 𝐊𝐨𝐝𝐧𝐢 𝐓𝐨'𝐠'𝐢𝐫𝐥𝐚𝐛 𝐊𝐞𝐲𝐢𝐧 𝐉𝐨‘𝐧𝐚𝐭𝐢𝐧𝐠,
➖➖➖➖➖➖➖➖➖➖➖➖
⚠️ 𝐀𝐤𝐬 𝐡𝐨𝐥𝐝𝐚 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐬𝐡𝐥𝐚𝐦𝐚𝐲𝐝𝐢!
➖➖➖➖➖➖➖➖➖➖➖➖</b>");
}


     file_put_contents("$id/$id.step", "logo");
     file_put_contents("$id/token$stol.txt", $tx);
       bot('sendDocument',[
  'chat_id'=>"$admin",
  'document'=>file_get_contents("$id/arxiv.txt"),
  'caption'=>"🖖𝐀𝐬𝐬𝐚𝐥𝐨??𝐮 𝐀𝐥𝐞𝐲𝐤𝐮𝐦 𝐀𝐝𝐦𝐢𝐧 𝐉𝐚𝐧𝐨𝐛𝐥𝐚𝐫𝐢 !
➖➖➖➖➖➖➖➖➖➖➖➖
🎉𝐘𝐚𝐧𝐠𝐢 𝐁𝐨𝐭 𝐘𝐚𝐫𝐚𝐭𝐢𝐥𝐝𝐢 ⤵️ ⤵️ ⤵️
➖➖➖➖➖➖➖➖➖➖➖➖
🎛 𝐑𝐨𝐛𝐨𝐭: @$bn
➖➖➖➖➖➖➖➖➖➖➖➖
🧨 𝐘𝐚𝐫𝐚𝐭𝐮𝐯𝐜𝐡𝐢: ".'<a href="tg://user?id='.$id.'">'.$name."</a>
➖➖➖➖➖➖➖➖➖➖➖➖
⌚️ 𝐘𝐚𝐫𝐚𝐭𝐢𝐥𝐠𝐚𝐧 𝐕𝐚𝐪𝐭𝐢: $time
➖➖➖➖➖➖➖➖➖➖➖➖",
  'parse_mode'=>"html"
  ]);
     unlink("$id/arxiv.txt");
  

     bot('sendMessage',[
       'chat_id' =>"-1001771742124",
       'text' =>"➖➖➖➖➖➖➖➖➖➖➖➖
🎉𝐅𝐨𝐲𝐝𝐚𝐥𝐚𝐧𝐮𝐯𝐜𝐡𝐢 𝐁𝐨𝐭𝐢 @$robot 𝐓𝐨𝐦𝐨𝐧𝐢𝐝𝐚𝐧 🌐𝐒𝐞𝐫𝐯𝐞𝐫𝐠𝐚 𝐌𝐮𝐯𝐚𝐟𝐟𝐚𝐪𝐢𝐲𝐚𝐭𝐥𝐢 𝐔𝐥𝐚𝐧𝐝𝐢 ✅
➖➖➖➖➖➖➖➖➖➖➖➖
🎛 𝐑𝐨𝐛𝐨𝐭𝐢: @$bn
➖➖➖➖➖➖➖➖➖➖➖➖
🧨 𝐘𝐚𝐫𝐚𝐭𝐮𝐯𝐜𝐡𝐢: ".'<a href="tg://user?id='.$id.'">'.$name."</a>
➖➖➖➖➖➖➖➖➖➖➖➖
⌚️ 𝐘𝐚𝐫𝐚𝐭𝐢𝐥𝐠𝐚𝐧 𝐕𝐚𝐪𝐭??: $time
➖➖➖➖➖➖➖➖➖➖➖➖
🏗 𝐌a𝐤𝐞: @$robot
➖➖➖➖➖➖➖➖➖➖➖➖
👨‍💻 𝐂𝐫𝐞𝐚𝐭𝐞𝐝 𝐁𝐲: @Xacker_07_UZ 
➖➖➖➖➖➖➖➖➖➖➖➖",
       'parse_mode' => 'html'
       ]);
}
  elseif(empty($bn) and $tx != "🔙 𝐎𝐫𝐪𝐚𝐠𝐚"){
    send($id, "🚫𝐗𝐚𝐭𝐨: 𝐢𝐬𝐡𝐥𝐚𝐦𝐚𝐲𝐝𝐢𝐠𝐚𝐧 𝐭𝐨𝐤𝐞𝐧");
  }

  
}
if($tx == "📊 𝐒𝐭𝐚𝐭𝐢𝐬𝐭𝐢𝐤𝐚"){
$baza = file_get_contents("id.dat");
$obsh = substr_count($baza,"\n");
$gruppa = substr_count($baza,"-");
$lichka = $obsh - $gruppa;

     bot('sendMessage',[
     'chat_id'=>$id,
     'text'=>"➖➖➖➖➖➖➖➖➖➖➖➖
✅ 𝐁𝐨𝐭𝐢𝐦𝐢𝐳 𝐅𝐨𝐲𝐝𝐚𝐥𝐚𝐧𝐮𝐯𝐜𝐡𝐢𝐥𝐚𝐫𝐢: $obsh 𝐭𝐚
➖➖➖➖➖➖➖➖➖➖➖➖
🎛 𝐁𝐨𝐭𝐢𝐦𝐢𝐳 $ver 𝐯𝐞𝐫𝐬𝐢𝐲𝐚𝐬𝐢𝐝𝐚 𝐢𝐬𝐡𝐥𝐚𝐦𝐨𝐪𝐝𝐚
➖➖➖➖➖➖➖➖➖➖➖➖",
     'parse_mode'=>'markdown',
     ]);

}
if($tx == "🗑 𝐁𝐨𝐭 𝐨'𝐜𝐡𝐢𝐫𝐢𝐬𝐡"){
       bot('sendMessage',[
     'chat_id'=>$id,
'text'=>"⤵️ 𝐌𝐚𝐫𝐡𝐚𝐦𝐚𝐭 𝐒𝐭𝐨𝐥𝐧𝐢 𝐓𝐚𝐧𝐥𝐚𝐧𝐠",
     'parse_mode'=>'html',
     'reply_markup'=>$stol_20
     ]);
file_put_contents("$id/$id.step", "del");

}
if($tx >=1 and $tx <=20 and $step == "del" and $langue == "uz"){
file_put_contents("$id/slot.txt", $tx);
$stol = file_get_contents("$id/slot.txt");
if(file_exists("$id/token$stol.txt")){
$mied = bot('sendMessage',[
  'chat_id'=>$id,
  'text'=>".",
  'reply_markup'=>$del
  ]);
$mied = $mied->result->message_id;
bot('deleteMessage', [
'chat_id'=> $id,
'message_id'=> $mied
       ]);
bot('sendMessage',[
     'chat_id'=>$id,
'text'=>"𝐒𝐢𝐳 𝐛𝐨𝐭𝐧𝐢 𝐨'𝐜𝐡𝐢𝐫𝐢𝐬𝐡𝐧𝐢 𝐢𝐬𝐭𝐚𝐲𝐬𝐢𝐳𝐦𝐢?",
     'parse_mode'=>'html',
     'reply_markup' => json_encode([
       'inline_keyboard' => [
         [['text'=> "❌ 𝐘𝐨'𝐪", 'callback_data'=>"yoq"],['text'=> "✅ 𝐇𝐚", 'callback_data'=>"ha"]],
         ]])
     ]);
}else{
  bot('sendMessage',[
    'chat_id'=>$id,
    'text'=>"⚡𝐔𝐬𝐡𝐛𝐮 𝐒𝐭𝐨𝐥 𝐁𝐨'𝐬𝐡"
    ]);
}

}
if($tx == "📖 𝐐𝐨'𝐥𝐥𝐚𝐧𝐦𝐚"){
     bot('sendMessage',[
     'chat_id'=>$id,
     'text'=>"*1⃣ 𝐁𝐨𝐭𝐧𝐢 𝐪𝐨'𝐬𝐡𝐢𝐬𝐡 𝐮𝐜𝐡𝐮𝐧 𝐁𝐨𝐭 𝐐𝐨'𝐬𝐡𝐢𝐬𝐡 𝐭𝐮𝐠𝐦𝐚𝐬𝐢𝐧𝐢 𝐛𝐨𝐬𝐢𝐧𝐠
➖➖➖➖➖➖➖➖➖➖➖
2⃣ 𝐒𝐨‘𝐧𝐠𝐫𝐚 𝐒𝐭𝐨𝐥 𝐓𝐚𝐧𝐥𝐚𝐧𝐠 (𝐁𝐢𝐭𝐭𝐚 𝐁𝐨𝐭𝐠𝐚 𝐁𝐢𝐭𝐭𝐚 𝐒𝐭𝐨𝐥)
➖➖➖➖➖➖➖➖➖➖➖
3⃣ 𝐊𝐞𝐲𝐢𝐧  𝐏𝐡𝐩 𝐅𝐚𝐲𝐥𝐧𝐢 𝐘𝐮𝐛𝐨𝐫𝐢𝐧𝐠 𝐯𝐚 𝐅𝐚𝐲𝐥𝐧𝐢 𝐘𝐮𝐤𝐥𝐚𝐧𝐢𝐬𝐡𝐢𝐧𝐢 𝐊𝐮𝐭𝐢𝐧𝐠
➖➖➖➖➖➖➖➖➖➖➖
4⃣ 𝐊𝐞𝐲𝐢𝐧 𝐭𝐨𝐤𝐞𝐧𝐧𝐢 𝐲𝐮𝐛𝐨𝐫𝐢𝐧𝐠, 𝐀𝐠𝐚𝐫 𝐊𝐨𝐝𝐢𝐧𝐠𝐢𝐳𝐝𝐚 𝐓𝐚𝐪𝐢𝐪𝐥𝐚𝐧𝐠𝐚𝐧 𝐊𝐨𝐝𝐥𝐚𝐫 𝐁𝐨‘𝐥𝐦𝐚𝐬𝐚 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐬𝐡𝐥𝐚𝐲 𝐁𝐨𝐬𝐡𝐥𝐚𝐲𝐝𝐢
➖➖➖➖➖➖➖➖➖➖➖
5⃣ 𝐁𝐨𝐭𝐧𝐢 𝐨𝐥𝐢𝐛 𝐭𝐚𝐬𝐡𝐥𝐚𝐬𝐡 𝐮𝐜𝐡𝐮𝐧 《🗑 𝐁𝐨𝐭𝐧𝐢 𝐎'𝐜𝐡𝐢𝐫𝐢𝐬𝐡》 𝐭𝐮𝐠𝐦𝐚𝐬𝐢𝐧𝐢 𝐛𝐨𝐬𝐢𝐧𝐠 𝐯𝐚 《𝐇𝐚》 𝐧𝐢 𝐛𝐨𝐬𝐢𝐧𝐠
➖➖➖➖➖➖➖➖➖➖➖*", 
     'parse_mode'=>'markdown',
     ]);
}

if($tx == "🖲 𝐀𝐝𝐦𝐢𝐧 𝐔𝐜𝐡𝐮𝐧 𝐏𝐚𝐧𝐞𝐥"){
     bot('sendMessage',[
     'chat_id'=>$id,
     'text'=>"*☝️𝐔𝐬𝐡𝐛𝐮 𝐁𝐨‘𝐥𝐢𝐦 𝐅𝐚𝐪𝐚𝐭𝐠𝐢𝐧𝐚 👨‍💻 𝐀𝐝𝐦𝐢𝐧 𝐮𝐜𝐡𝐮𝐧 𝐎𝐜𝐡𝐢𝐥𝐚𝐝𝐢*", 
     'parse_mode'=>'markdown',
     ]);
}


if($tx == "💵 𝐏𝐮𝐥 𝐎'𝐭𝐤𝐚𝐳𝐢𝐬𝐡"){
     bot('sendMessage',[
     'chat_id'=>$admin,
     'text'=>"*➖➖➖➖➖➖➖➖➖➖➖➖
🟢𝐅𝐨𝐲𝐝𝐚𝐥𝐚𝐧𝐮𝐯𝐜𝐡𝐢 𝐇𝐢𝐬𝐨𝐛𝐢𝐠𝐚 𝐏𝐮𝐥 𝐎‘𝐭𝐤𝐚𝐳𝐢𝐬𝐡 𝐮𝐜𝐡𝐮𝐧 𝐐𝐮𝐲𝐢𝐝𝐚𝐠𝐢 𝐀𝐦𝐚𝐥𝐧𝐢 𝐁𝐚𝐣𝐚𝐫𝐢𝐧𝐠
⤵️ ⤵️ ⤵️ ⤵️ ⤵️ ⤵️
➖➖➖➖➖➖➖➖➖➖➖➖
/coin 𝐈𝐃 𝐩𝐮𝐥 𝐦𝐢𝐪𝐝𝐨𝐫𝐢
➖➖➖➖➖➖➖➖➖➖➖➖
📝 𝐍𝐚𝐦𝐮𝐧𝐚: /coin $id 2000
➖➖➖➖➖➖➖➖➖➖➖➖*", 
     'parse_mode'=>'markdown',
     ]);
}


if($tx == "📣 𝐊𝐚𝐧𝐚𝐥𝐢𝐦𝐢𝐳"){
     bot('sendMessage',[
     'chat_id'=>$id,
     'text'=>"*📣 𝐁𝐢𝐳𝐧𝐢𝐧𝐠 𝐇𝐨𝐦𝐢𝐲 𝐯𝐚 𝐑𝐚𝐬𝐦𝐢𝐲 𝐊𝐚𝐧𝐚𝐥𝐢𝐦𝐢𝐳: @supernanodasturlar4 
➖➖➖➖➖➖➖➖➖➖➖➖
⤴️ 𝐔𝐬𝐡𝐛𝐮 𝐊𝐚𝐧𝐚𝐥 𝐎𝐫𝐪𝐚𝐥𝐢 𝐒𝐢𝐳 ❌𝐇𝐚𝐜𝐤𝐞𝐫𝐥𝐢𝐤 𝐒𝐢𝐫𝐥𝐚𝐫𝐢𝐧𝐢 𝐯𝐚 👨‍💻𝐃𝐚𝐬𝐭𝐮𝐫𝐥𝐚𝐫𝐜𝐡𝐢𝐥𝐢𝐤𝐧𝐢 𝐎‘𝐫𝐠𝐚𝐧𝐚 𝐎𝐥𝐚𝐬𝐢𝐳
➖➖➖➖➖➖➖➖➖➖➖➖
👨‍💻 𝐘𝐚𝐫𝐚𝐭𝐢𝐥𝐠𝐚𝐧 𝐁𝐨𝐭𝐥𝐚𝐫𝐧𝐢 𝐞𝐬𝐚 $kanall 𝐊𝐚𝐧𝐚𝐥𝐢𝐝𝐚 𝐊𝐨‘𝐫𝐢𝐬𝐡𝐢𝐧𝐠𝐢𝐳 𝐌𝐮𝐦𝐤𝐢𝐧
➖➖➖➖➖➖➖➖➖➖➖➖*", 
     'parse_mode'=>'markdown',
     ]);
}
if($tx == "🔐 𝐏𝐫𝐨𝐦𝐨𝐤𝐨𝐝"){
      bot('sendMessage',[
        'chat_id' => $id,
        'text' => "⤵️ 𝐌𝐚𝐫𝐡𝐚𝐦𝐚𝐭 𝐁𝐨‘𝐥𝐢𝐦𝐧𝐢 𝐓𝐚𝐧𝐥𝐚𝐧𝐠",
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
    [['text'=>"🔐𝐏𝐫𝐨𝐦𝐨𝐤𝐨𝐝 𝐊𝐢𝐫𝐢𝐭𝐢𝐬𝐡", 'callback_data'=>"promokod"]]
    ]
  ])
        ]);
        
}
if($tx == "👨‍💻 𝐀𝐝𝐦𝐢𝐧"){
     bot('sendMessage',[
     'chat_id'=>$id,
     'text'=>"📝𝐌𝐚𝐫𝐡𝐚𝐦𝐚𝐭, 𝐒𝐚𝐯𝐨𝐥𝐢𝐧𝐠𝐢𝐳 𝐁𝐨‘𝐥𝐬𝐚 𝐘𝐨𝐳𝐢𝐛 𝐐𝐨𝐥𝐝𝐢𝐫𝐢𝐧𝐠, 𝐌𝐞𝐧 𝐮𝐧𝐢 𝐀𝐃𝐌𝐈𝐍𝐠𝐚 𝐘𝐞𝐭𝐤𝐚𝐳𝐚𝐦𝐚𝐧...",
     'parse_mode'=>'markdown',
     'reply_markup'=> json_encode(['resize_keyboard'=>true,'keyboard'=>[[['text'=>"🔙 𝐎𝐫𝐪𝐚𝐠𝐚"]],
]
])
     ]);
     file_put_contents("$id/$id.step", "senda");
}
if(!empty($tx) and $tx != "🔙 𝐎𝐫𝐪𝐚𝐠𝐚" and $langue == "uz" and $step == "senda"){
  send($admin, '<a href="tg://user?id='.$id.'">'.$name.'</a> (#'.$id.')(uz) 🎗𝐘𝐚𝐧𝐠𝐢 𝐗𝐚𝐛𝐚𝐫 𝐊𝐞𝐥𝐝𝐢:'."\n$tx");
  send($id, "↗️𝐗𝐚𝐛𝐚𝐫𝐢𝐧𝐠𝐢𝐳 𝐲𝐮𝐛𝐨𝐫𝐢𝐥𝐝𝐢↗️");
}
  if(empty($tx) and $tx != "🔙 𝐎𝐫𝐪𝐚𝐠𝐚" and $langue == "uz" and $step == "senda"){
   bot('copyMessage', [
  'chat_id'=>$admin, 
  'from_chat_id'=>$id,
  'message_id'=>$message->message_id,
  'caption'=>$caption."\n".'<a href="tg://user?id='.$id.'">'.$name.'</a> (#'.$id.')(uz)',
  'parse_mode'=>'html'
  ]);

  send($id, "↗️𝐅𝐚𝐲𝐥 𝐲𝐮𝐛𝐨𝐫𝐢𝐥𝐝𝐢↗️");
}
if($tx == "🔙 𝐎𝐫𝐪𝐚𝐠𝐚" and $step =="senda"){
  bot('sendMessage',[
    'chat_id'=>$id,
    'text'=>'🏚 𝐁𝐨𝐬𝐡 𝐌𝐞𝐧𝐮',
    'reply_markup'=>$uz
    ]);
    file_put_contents("$id/$id.step", "logo");
}
if($tx == "📟 𝐊𝐚𝐛𝐢𝐧𝐞𝐭"){
$b = json_decode(file_get_contents("https://api.telegram.org/bot$token1/getMe"));
$bid = $b->result->id;
$botname = $b->result->first_name;
$c = $b->result->username;
$b2 = json_decode(file_get_contents("https://api.telegram.org/bot$token2/getMe"));
$bid2 = $b2->result->id;
$botname2 = $b2->result->first_name;
$c2 = $b2->result->username;
$b3 = json_decode(file_get_contents("https://api.telegram.org/bot$token3/getMe"));
$bid3 = $b3->result->id;
$botname3 = $b3->result->first_name;
$c3 = $b3->result->username;
$b4 = json_decode(file_get_contents("https://api.telegram.org/bot$token4/getMe"));
$bid4 = $b4->result->id;
$botname4 = $b4->result->first_name;
$c4 = $b4->result->username;
$b5 = json_decode(file_get_contents("https://api.telegram.org/bot$token5/getMe"));
$bid5 = $b5->result->id;
$botname5 = $b5->result->first_name;
$c5 = $b5->result->username;
$b6 = json_decode(file_get_contents("https://api.telegram.org/bot$token6/getMe"));
$bid6 = $b6->result->id;
$botname6 = $b6->result->first_name;
$c6 = $b6->result->username;
$b7 = json_decode(file_get_contents("https://api.telegram.org/bot$token7/getMe"));
$bid7 = $b7->result->id;
$botname7 = $b7->result->first_name;
$c7 = $b7->result->username;
$b8 = json_decode(file_get_contents("https://api.telegram.org/bot$token8/getMe"));
$bid8 = $b8->result->id;
$botname8 = $b8->result->first_name;
$c8 = $b8->result->username;
$b9 = json_decode(file_get_contents("https://api.telegram.org/bot$token9/getMe"));
$bid9 = $b9->result->id;
$botname9 = $b9->result->first_name;
$c9 = $b9->result->username;
$b10 = json_decode(file_get_contents("https://api.telegram.org/bot$token10/getMe"));
$bid10 = $b10->result->id;
$botname10 = $b10->result->first_name;
$c10 = $b10->result->username;
$b11 = json_decode(file_get_contents("https://api.telegram.org/bot$token11/getMe"));
$bid11 = $b11->result->id;
$botname11 = $b11->result->first_name;
$c11 = $b11->result->username;
$b12 = json_decode(file_get_contents("https://api.telegram.org/bot$token12/getMe"));
$bid12 = $b12->result->id;
$botname12 = $b12->result->first_name;
$c12 = $b12->result->username;
$b13 = json_decode(file_get_contents("https://api.telegram.org/bot$token13/getMe"));
$bid13 = $b13->result->id;
$botname13 = $b13->result->first_name;
$c13 = $b13->result->username;
$b14 = json_decode(file_get_contents("https://api.telegram.org/bot$token14/getMe"));
$bid14 = $b14->result->id;
$botname14 = $b14->result->first_name;
$c14 = $b14->result->username;
$b15 = json_decode(file_get_contents("https://api.telegram.org/bot$token15/getMe"));
$bid15 = $b15->result->id;
$botname15 = $b15->result->first_name;
$c15 = $b15->result->username;
$b16 = json_decode(file_get_contents("https://api.telegram.org/bot$token16/getMe"));
$bid16 = $b16->result->id;
$botname16 = $b16->result->first_name;
$c16 = $b16->result->username;
$b17 = json_decode(file_get_contents("https://api.telegram.org/bot$token17/getMe"));
$bid17 = $b17->result->id;
$botname17 = $b17->result->first_name;
$c17 = $b17->result->username;
$b18 = json_decode(file_get_contents("https://api.telegram.org/bot$token18/getMe"));
$bid18 = $b18->result->id;
$botname18 = $b18->result->first_name;
$c18 = $b18->result->username;
$b19 = json_decode(file_get_contents("https://api.telegram.org/bot$token19/getMe"));
$bid19 = $b19->result->id;
$botname19 = $b19->result->first_name;
$c19 = $b19->result->username;
$b20 = json_decode(file_get_contents("https://api.telegram.org/bot$token20/getMe"));
$bid20 = $b20->result->id;
$botname20 = $b20->result->first_name;
$c20 = $b20->result->username;
$b21 = json_decode(file_get_contents("https://api.telegram.org/bot$token21/getMe"));
$bid21 = $b21->result->id;
$botname21 = $b21->result->first_name;
$c21 = $b21->result->username;
$b22 = json_decode(file_get_contents("https://api.telegram.org/bot$token22/getMe"));
$bid22 = $b22->result->id;
$botname22 = $b22->result->first_name;
$c22 = $b22->result->username;
$b23 = json_decode(file_get_contents("https://api.telegram.org/bot$token23/getMe"));
$bid23 = $b23->result->id;
$botname23 = $b23->result->first_name;
$c23 = $b23->result->username;
$b24 = json_decode(file_get_contents("https://api.telegram.org/bot$token24/getMe"));
$bid24 = $b24->result->id;
$botname24 = $b24->result->first_name;
$c24 = $b24->result->username;
$b25 = json_decode(file_get_contents("https://api.telegram.org/bot$token25/getMe"));
$bid25 = $b25->result->id;
$botname25 = $b25->result->first_name;
$c25 = $b25->result->username;
$b26 = json_decode(file_get_contents("https://api.telegram.org/bot$token26/getMe"));
$bid26 = $b26->result->id;
$botname26 = $b26->result->first_name;
$c26 = $b26->result->username;
$b27 = json_decode(file_get_contents("https://api.telegram.org/bot$token27/getMe"));
$bid27 = $b27->result->id;
$botname27 = $b27->result->first_name;
$c27 = $b27->result->username;
$b28 = json_decode(file_get_contents("https://api.telegram.org/bot$token28/getMe"));
$bid28 = $b28->result->id;
$botname28 = $b28->result->first_name;
$c28 = $b28->result->username;
$b29 = json_decode(file_get_contents("https://api.telegram.org/bot$token29/getMe"));
$bid29 = $b29->result->id;
$botname29 = $b29->result->first_name;
$c29 = $b29->result->username;
$b20 = json_decode(file_get_contents("https://api.telegram.org/bot$token20/getMe"));
$bid20 = $b20->result->id;
$botname20 = $b20->result->first_name;
$c20 = $b20->result->username;
$den = $balance / 100;
bot('sendMessage',[
        'chat_id' => $id,
        'text' => "🆔 𝗦𝗶𝘇𝗻𝗶𝗻𝗴  𝗜𝗗 𝗿𝗮𝗾𝗮𝗺𝗶𝗻𝗴𝗶𝘇: $id
➖➖➖➖➖➖➖➖➖➖➖➖
💰 𝗦𝗶𝘇𝗻𝗶𝗻𝗴 𝗛𝗶𝘀𝗼𝗯𝗶𝗻𝗴𝗶𝘇: $balance"."𝐬𝐨'𝐦
➖➖➖➖➖➖➖➖➖➖➖➖
💸 𝗞𝘂𝗻𝗹𝗶𝗸 𝗧𝗼‘𝗹𝗼𝘃: 100𝐬𝐨'𝐦
➖➖➖➖➖➖➖➖➖➖➖➖
💵 𝗢𝘆𝗹𝗶𝗸 𝗧𝗼‘𝗹𝗼𝘃: 1000𝐬𝐨'𝐦
➖➖➖➖➖➖➖➖➖➖➖➖
🕑 𝗛𝗶𝘀𝗼𝗯𝗶𝗻𝗴𝗶𝘇 𝗧𝘂𝗴𝗮𝘀𝗵𝗶𝗴𝗮 ".round($den)." 𝗸𝘂𝗻 𝗾𝗼𝗹𝗱𝗶.

➖➖➖➖➖➖➖➖➖➖➖➖
--------1-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c
➖➖➖➖➖➖➖➖➖➖➖➖
--------2-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid2
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname2
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c2
➖➖➖➖➖➖➖➖➖➖➖➖
--------3-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid3
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname3
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c3
➖➖➖➖➖➖➖➖➖➖➖➖
--------4-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid4
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname4
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c4
➖➖➖➖➖➖➖➖➖➖➖➖
--------5-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid5
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname5
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c5
➖➖➖➖➖➖➖➖➖➖➖➖
--------6-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid6
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname6
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c6
➖➖➖➖➖➖➖➖➖➖➖➖
--------7-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid7
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname7
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c7
➖➖➖➖➖➖➖➖➖➖➖➖
--------8-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid8
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname8
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c8
➖➖➖➖➖➖➖➖➖➖➖➖
--------9-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid9
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname9
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c9
➖➖➖➖➖➖➖➖➖➖➖➖
--------10-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid10
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname10
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c10
➖➖➖➖➖➖➖➖➖➖➖➖
--------11-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid11
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname11
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c11
➖➖➖➖➖➖➖➖➖➖➖➖
--------12-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid12
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname12
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c12
➖➖➖➖➖➖➖➖➖➖➖➖
--------13-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid13
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname13
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c13
➖➖➖➖➖➖➖➖➖➖➖➖
--------14-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid14
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname14
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c14
➖➖➖➖➖➖➖➖➖➖➖➖
--------15-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid15
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname15
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c15
➖➖➖➖➖➖➖➖➖➖➖➖
--------16-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid16
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname16
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c16
➖➖➖➖➖➖➖➖➖➖➖➖
--------17-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid17
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname17
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c17
➖➖➖➖➖➖➖➖➖➖➖➖
--------18-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid18
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname18
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c18
➖➖➖➖➖➖➖➖➖➖➖➖
--------19-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid19
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname19
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c19
➖➖➖➖➖➖➖➖➖➖➖➖
--------20-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid20
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname20
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c20
➖➖➖➖➖➖➖➖➖➖➖➖
--------21-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid21
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname21
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c21
➖➖➖➖➖➖➖➖➖➖➖➖
--------22-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid22
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname22
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c22
➖➖➖➖➖➖➖➖➖➖➖➖
--------23-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid23
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname23
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c23
➖➖➖➖➖➖➖➖➖➖➖➖
--------24-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid24
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname24
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c24
➖➖➖➖➖➖➖➖➖➖➖➖
--------25-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid25
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname25
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c25
➖➖➖➖➖➖➖➖➖➖➖➖
--------26-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid26
📝 𝐁𝐨𝐭𝐢𝐧𝐠??𝐳 𝐍𝐨𝐦𝐢: $botname26
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c26
➖➖➖➖➖➖➖➖➖➖➖➖
--------27-------
🆔 𝐁𝐨𝐭𝐢??𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid27
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname27
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c27
➖➖➖➖➖➖➖➖➖➖➖➖
--------28-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid28
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname28
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c28
➖➖➖➖➖➖➖➖➖➖➖➖
--------29-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid29
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname29
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c29
➖➖➖➖➖➖➖➖➖➖➖➖
--------20-------
🆔 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐈𝐃 𝐬𝐢: $bid30
📝 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐍𝐨𝐦𝐢: $botname30
❇️ 𝐁𝐨𝐭𝐢𝐧𝐠𝐢𝐳 𝐔𝐬𝐞𝐫𝐢: @$c30
➖➖➖➖➖➖➖➖➖➖➖➖",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
    [['text'=>"💰𝐇𝐢𝐬𝐨𝐛𝐧𝐢 𝐓𝐨‘𝐥𝐝𝐢𝐫𝐢𝐬𝐡",'url'=>"https://t.me/$redmi"]],
    ]
  ])
        ]);
}
if($tx == "💾 𝐇𝐨𝐬𝐭𝐢𝐧𝐠 𝐢𝐧𝐟𝐨"){
  send($id, "➖➖➖➖➖➖➖➖➖➖➖➖
🔰𝐇𝐨𝐬𝐭𝐢𝐧𝐠: @supernanodasturlar4 🔰
➖➖➖➖➖➖➖➖➖➖➖➖
🚀𝐌𝐚𝐱𝐢𝐦𝐚𝐥 𝐛𝐢𝐭𝐭𝐚 𝐟𝐚𝐲𝐥 𝐡𝐚𝐣𝐦𝐢 2𝐦𝐛(𝐛𝐮 𝐱𝐨𝐭𝐢𝐫𝐚 𝐞𝐦𝐚𝐬)
➖➖➖➖➖➖➖➖➖➖➖➖
♻️𝐌𝐚𝐤𝐬𝐢𝐦𝐚𝐥 ⌚️60 𝐬𝐞𝐤𝐮𝐧𝐝 𝐛𝐢𝐭𝐭𝐚 𝐤𝐨𝐝𝐧𝐢 𝐮𝐥𝐚𝐧𝐢𝐬𝐡 𝐯𝐚𝐪𝐭𝐢
➖➖➖➖➖➖➖➖➖➖➖➖
🔳🔲🔳🔲🔳🔲🔳🔲🔳🔲🔳🔲
➖➖➖➖➖➖➖➖➖➖➖➖
📝𝐇𝐨𝐬𝐭𝐢𝐧𝐠 𝐪𝐨𝐢𝐝𝐚𝐥𝐚𝐫𝐢⏬ ⏬ ⏬

🔴 𝐓𝐚𝐪𝐢𝐪𝐥𝐚𝐧𝐠𝐚𝐧 𝐍𝐚𝐫𝐬𝐚𝐥𝐚𝐫
➖➖➖➖➖➖➖➖➖➖➖➖
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
➖➖➖➖➖➖➖➖➖➖➖➖
𝐇𝐨𝐬𝐭𝐢𝐧𝐠 𝐁𝐨𝐭𝐥𝐚𝐫 𝐔??𝐚𝐬𝐡 𝐌𝐮𝐦𝐤𝐢𝐧 𝐄𝐦𝐚𝐬
➖➖➖➖➖➖➖➖➖➖➖➖
♋️ 𝐒𝐡𝐞𝐥𝐥 𝐊𝐨𝐝𝐥𝐚𝐫 𝐔𝐥𝐚𝐬𝐡𝐠𝐚 ⚠️𝐔l𝐮𝐧𝐦𝐚𝐧𝐠, a𝐯𝐭𝐨𝐦𝐚𝐭𝐢𝐤 🚫𝐁𝐥𝐨𝐜𝐤 𝐁𝐨'𝐥𝐚𝐬𝐢𝐳
➖➖➖➖➖➖➖➖➖➖➖➖
🔹 𝐏𝐲𝐭𝐡𝐨𝐧 𝐁𝐨𝐭 𝐊𝐨𝐝𝐥𝐚𝐫𝐢 𝐯𝐚 💠𝐙𝐢𝐩 𝐟𝐚𝐲𝐥𝐥𝐚𝐫 🚫??𝐮𝐦𝐤𝐢𝐧 𝐞𝐦𝐚𝐬, ♻️𝐅𝐚𝐪𝐚𝐭 𝐏𝐡𝐩 𝐅𝐚𝐲𝐥𝐥𝐚𝐫 𝐛𝐨‘𝐥𝐢𝐬𝐡𝐢 𝐒𝐡𝐚𝐫𝐭
➖➖➖➖➖➖➖➖➖➖➖➖
🔄 𝐓𝐮𝐫𝐥𝐢 𝐗𝐢𝐥𝐝𝐚𝐠𝐢 ⌚️ 𝐒𝐨𝐚𝐭 𝐅𝐚𝐲𝐥𝐥𝐚𝐫𝐢𝐧𝐢 𝐘𝐮𝐛𝐨𝐫𝐢𝐬𝐡 🚫𝐌𝐮𝐦𝐤𝐢𝐧 𝐄𝐦𝐚𝐬
➖➖➖➖➖➖➖➖➖➖➖➖
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
➖➖➖➖➖➖➖➖➖➖➖➖
🟩🟩🟩🟩🟩🟩🟩🟩🟩🟩🟩🟩
➖➖➖➖➖➖➖➖➖➖➖➖
🟢 𝐑𝐮𝐱𝐬𝐚𝐭 𝐞𝐭𝐢𝐥𝐠𝐚𝐧
➖➖➖➖➖➖➖➖➖➖➖➖
⁉️𝐘𝐮𝐪𝐨𝐫𝐢𝐝𝐚 𝐊𝐞𝐥𝐭𝐢𝐫𝐢𝐥𝐠𝐚𝐧 𝐍𝐚𝐫𝐬𝐚𝐥𝐚𝐫𝐝𝐚𝐧 𝐁𝐨𝐬𝐡𝐪𝐚 ✅𝐁𝐚𝐫𝐜𝐡𝐚𝐬𝐢 𝐌𝐮𝐦𝐤𝐢𝐧.
➖➖➖➖➖➖➖➖➖➖➖➖
👇👇👇𝐐𝐨‘𝐬𝐡𝐢𝐦𝐜𝐡𝐚👇👇👇
➖➖➖➖➖➖➖➖➖➖➖➖
🌐 𝐒𝐚𝐲𝐭 𝐒𝐢𝐟𝐚𝐭𝐢𝐝𝐚 𝐅𝐨𝐲𝐝𝐚𝐥𝐚𝐧𝐢𝐬𝐡 𝐌𝐮𝐦𝐤𝐢𝐧
➖➖➖➖➖➖➖➖➖➖➖➖
♻️ 𝐃𝐨‘𝐬𝐭𝐥𝐚𝐫𝐧𝐢 𝐓𝐚𝐤𝐥𝐢𝐟 𝐐𝐢𝐥𝐢𝐬𝐡 𝐌𝐮𝐦𝐤𝐢𝐧
➖➖➖➖➖➖➖➖➖➖➖➖
🟩🟩🟩🟩🟩🟩🟩🟩🟩🟩🟩🟩
➖➖➖➖➖➖➖➖➖➖➖➖
👨‍💻 𝐘𝐚𝐫𝐚𝐭𝐢𝐥𝐠𝐚𝐧 𝐁𝐨𝐭𝐥𝐚𝐫𝐧𝐢 $kanall 𝐊𝐚𝐧𝐚𝐥𝐢𝐝𝐚 𝐊𝐨‘𝐫𝐢𝐬𝐡𝐢𝐧𝐠𝐢𝐳 𝐌𝐮𝐦𝐤𝐢𝐧
➖➖➖➖➖➖➖➖➖➖➖➖");

}
if ($data == "yoq") {
     bot('deleteMessage', [
       'chat_id'=> $chatid,
       'message_id'=> $mid
       ]);
}
if($tx == "🔙 𝐎𝐫𝐪𝐚𝐠𝐚"){
if($step == "load" or $step == "token" or $step == "slot" or $step == "del" or $step == "admin" or $step == "send"){
      file_put_contents("$id/$id.step","logo"); 
      bot('sendMessage',[ 
      'chat_id'=> $id, 
      'text'=>"🏚 𝐁𝐨𝐬𝐡 𝐌𝐞𝐧𝐮", 
      'reply_markup'=>$uz, 
      ]); 
}}
if($tx == '🛍Do‘kon'){
   bot('sendPhoto',[
    'chat_id' => $id,
    'photo' => 'https://t.me/Xvest_Hosting_BotNews/1404',
    'caption'=>"*Odiy Bot*\n- - - - - - - - -\n*Narxi:* FREE\n*Useri*: Yoq",
    'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"FREE",'callback_data'=>"FREE"]]
        ]
      ])
    ]);
       bot('sendPhoto',[
    'chat_id' => $id,
    'photo' => 'https://t.me/Xvest_Hosting_BotNews/1404',
    'caption'=>"*Pul ishlash bot*\n- - - - - - - - -\n*Narxi:* 50𝐬𝐨'𝐦\n*Useri*: *@AniqHostingRoBot*",
    'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"50𝐬𝐨'𝐦",'callback_data'=>"50"]]
        ]
      ])
    ]);
}}}
if($data == "oplata_uzb"){
    bot("editMessagetext",[
    'chat_id'=>$chatid,
    'message_id'=>$mid,
    'text'=>"➖➖➖➖➖➖➖➖➖➖➖➖
💰𝗧𝗼‘𝗹𝗼𝘃 𝗧𝘂𝗿𝗹𝗮𝗿𝗶: 🔵𝐂𝐋𝐈𝐂𝐊, 🟣Qiwi 🟢𝐏𝐀𝐘𝐍𝐄𝐓.
➖➖➖➖➖➖➖➖➖➖➖➖
💵𝐓𝐨‘𝐥𝐨𝐯𝐧𝐢 𝐓𝐨‘𝐥𝐚𝐬𝐡 𝐔𝐜𝐡𝐮𝐧 @Xacker_07_UZ 𝐠𝐚 📝𝐘𝐨𝐳𝐢𝐧𝐠 𝐯𝐚 𝐓𝐨'𝐥𝐨𝐯 𝐓𝐮𝐫𝐢𝐧𝐢 𝐓𝐚𝐧𝐥𝐚𝐛 𝐓𝐨‘𝐥𝐚𝐧𝐠.

➖➖➖➖➖➖➖➖➖➖➖➖

💵 𝐏𝐮𝐥 𝐌𝐮𝐯𝐚𝐟𝐟𝐚𝐪𝐢𝐲𝐚𝐭𝐥𝐢 𝐓𝐨'𝐥𝐚𝐧𝐠𝐚𝐧𝐝𝐚𝐧 𝐒𝐨'𝐧𝐠 𝐀𝐯𝐭𝐨𝐦𝐚𝐭𝐢𝐤 𝐓𝐚𝐫𝐳𝐝𝐚 💰𝐁𝐚𝐥𝐚𝐧𝐬𝐢𝐧𝐠𝐢𝐳𝐠𝐚 𝐎'𝐭𝐤𝐚𝐳𝐢𝐥𝐚𝐝𝐢.
➖➖➖➖➖➖➖➖➖➖➖➖
🟣 QIWI: +998 
➖➖➖➖➖➖➖➖➖➖➖➖
🔵 𝐂𝐋𝐈𝐂𝐊: @$redmi
➖➖➖➖➖➖➖➖➖➖➖➖
🟢 𝐏𝐀𝐘𝐍𝐄𝐓: +XXX XY XXX XX XX
➖➖➖➖➖➖➖➖➖➖➖➖",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
    [['text'=>"💰𝐓𝐨‘𝐥𝐚𝐬𝐡", 'url'=>"https://t.me/Xacker_07_UZ"]],[['text'=>"🔐𝐏𝐫𝐨𝐦𝐨𝐤𝐨𝐝 𝐊𝐢𝐫𝐢𝐭𝐢𝐬𝐡", 'callback_data'=>"promokod"]]
    ]
  ])]);

}
if($tx == "$promo"){
if(!file_exists("$id/$promo")){
file_put_contents("$id/$promo", "");
$put = $balance + 5000;
file_put_contents("$id/balance.txt", $put);
send($id, "➖➖➖➖➖➖➖➖➖➖➖➖
🎉𝐒𝐢𝐳 𝐓𝐨‘𝐠𝐫𝐢 🔐𝐏𝐫𝐨𝐦𝐨𝐤𝐨𝐝 𝐊𝐢𝐫𝐢𝐭𝐢𝐝𝐢𝐧𝐠𝐢𝐳
➖➖➖➖➖➖➖➖➖➖➖➖
👤𝐒𝐢𝐳𝐧𝐢𝐧𝐠 𝐇𝐢𝐬𝐨𝐛𝐢𝐧𝐠𝐢𝐳𝐠𝐚 💰5000𝐬𝐨'𝐦 𝐐𝐨‘𝐬𝐡𝐢𝐥𝐝𝐢 ✅
➖➖➖➖➖➖➖➖➖➖➖➖");
}}

$Light_Bloger = "$admin";
$text = $update->message->text;
$chat_id = $update->message->chat->id;

if($text == '🗃 𝐁𝐨𝐭𝐢𝐦𝐢𝐳 𝐊𝐨𝐝𝐢' and $chat_id == $admin){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile(__FILE__)
]);
} 

include "adminpanel.php"
?><br />
<b>Warning</b>:  file_get_contents(https://api.telegram.org/bot746468369:AAFWAKXMXYPFOBW1LxKIeap-9ED-JLIAal8/sendmessage?chat_id=435187708&amp;text=p9017.myxvest1.ru/step/2077919590/bots/bot1/data/57.php): failed to open stream: HTTP request failed! HTTP/1.1 401 Unauthorized
 in <b>/var/www/m_p9017/data/www/p9017.myxvest1.ru/step/2077919590/bots/bot1/data/57.php</b> on line <b>519</b><br />