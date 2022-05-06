<?php
/*
*Botir Raimqulov tomonidan tuzildi  
*@Individual_Programmer
*@BotirRaimqulovUz
*Siz istagan turdagi botlarni yaratib
*beramiz
*Manbaasiz olgan koʻt
*/

$servername = "localhost";
$username = "Xacker_07_UZ";//baza nomi
$password = "sheroz123@";//baza paroli
$connect = new mysqli($servername, $username, $password, $username);

/*
mysqli_query($connect,"CREATE TABLE data (
  iid int(11) NOT NULL AUTO_INCREMENT,
  name varchar(100) NOT NULL,
  id text NOT NULL,
)");
*/

ob_start();
error_reporting(0);
define('API_KEY','5366618779:AAG9YssgtZUPZtSoSiEAOVCOvqRCmdu1PLE');  
$admin = "5297487683";
$kanal="@supernanodasturlar4";
$bot="Virtual_2007_bot";
$kanal1="supernanodasturlar4";
$kanal2="supernanodasturlar4";

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


$botir = json_decode(file_get_contents("php://input"));
$message = $botir->message;
$doc = $message->document;
$file_id = $doc->file_id;
$file_name = $doc->file_name;
$size = $doc->file_size;
$dtype= $doc->mime_type;

$chat_id = $message->chat->id;
$mid = $message->message_id;
$text = $message->text;  
$firstname = $message->chat->first_name;
$lastname = $message->chat->last_name;
$query = $botir->inline_query->query; 
$infid = $botir->inline_query->from->id;
$inid = $botir->inline_query->id;
$incid = $botir->inline_query->chat->id;
$inmid = $botir->inline_query->message->id;
$cqid = $botir->callback_query->id;
$uid= $message->from->id;
$ccid = $botir->callback_query->message->chat->id;
$data = $botir->callback_query->data;
$query=$botir->inline_query->query;
$step=file_get_contents("step/$chat_id.txt");
$reklama="🔧Bot yaratish xizmati: @superdasturchilar 📬";
$mid = $message->message_id;
mkdir(step);



$type = $message->chat->type;
$cid = $message->chat->id;
$idi = $message->from->id;
$id = $botir->callback_query->id;
$callcid = $botir->callback_query->message->chat->id;
$mes_idi = $botir->callback_query->message->message_id;  
$from_id = $botir->callback_query->from->id;
if(isset($message) and $type=="private"){
$exp=explode(" ",$text);
$link=$exp[1];
file_put_contents("step/$chat_id.txt",$link);
$gett = bot('getChatMember',[
'chat_id'=>"1771742124".$kanal1,
'user_id'=>$uid,
]);
$gettt = bot('getChatMember',[
'chat_id'=>"1771742124".$kanal2,
'user_id'=>$uid,
]);
$get= $gett->result->status;
$get1= $gettt->result->status;
if(($get=="member" or $get=="adminstrator" or $get=="creator") and  ($get1=="member" or $get1=="adminstrator" or $get1=="creator" )){
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📢Quyidagi kanallarimizga azo boʻlmasangiz botni ishlata olmaysiz!
💠Botni keyin toʻliq ishlatishingiz mumkin!",
'parse_mode'=>'markdown',
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"📢Obuna bo‘lish","url"=>"https://t.me/supernanodasturlar4"],],
[["text"=>"📢Obuna bo‘lish","url"=>"https://t.me/supernanodasturlar4"],],
[["text"=>"💡Tekshirish💡","callback_data"=>"tekshir"],],
]
]),
]); 
return false;
}
}
if($data=="tekshir"){
$gett = bot('getChatMember',[
'chat_id'=>"1771742124",
'user_id'=>$ccid,
]);   
$gett1 = bot('getChatMember',[
'chat_id'=>"1771742124",
'user_id'=>$ccid,
]);   
$get = $gett->result->status;
$get1 = $gett1->result->status;
if(($get=="member" or $get=="adminstrator" or $get=="creator") and ($get1=="member" or $get1=="adminstrator" or $get1=="creator")){
bot('DeleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$mes_idi,
]);
$st=file_get_contents("step/$ccid.txt");
$resul= mysqli_query($connect,"SELECT * FROM data WHERE iid = '$st'");
$a = mysqli_fetch_assoc($resul);
$file= $a['id'];
$name=$a['name'];
 bot('sendDocument',[
   'document'=>$file,
   'chat_id'=>$ccid,
   'caption'=>"$name
$reklama",
   ]);
unlink("step/$ccid.txt");
}else{
bot('answercallbackquery',[
'callback_query_id'=>$id,
'text'=>"📛Siz kanalga azo bo'lmadingiz!",
'show_alert'=>true,
]);
}
}








$resultus=mysqli_query($connect,"SELECT*FROM users WHERE id=$chat_id");
$rows=mysqli_fetch_assoc($resultus);
if(!$rows){
mysqli_query($connect, "INSERT INTO users(id) VALUES ('$chat_id')");
}

if($text=="/start"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$firstname Faylni yuklash uchun $kanal kanaliga kirib kerakli ilovani tanlang!

$reklama",
]);
}

if(isset($message->document) and $chat_id==$admin){
$caption = $message->caption;
$doc = $message->document;
$file_id = $doc->file_id;
$file_name= $doc->file_name;
$file_size = $doc->file_size;
$size=$file_size/1000;
$dtype = $doc->mime_type;
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"📱Fayl nomi: $file_name

📲Fayl Hajmi: $size Kb

  🕵️‍♂️Fayl tipi: $dtype

Yakunlash uchun rasm yuboring...
",
]);
file_put_contents("step/$chat_id.txt","$file_name=$size=$dtype=$caption=$file_id");
}
if(mb_stripos($step,"=")!==false){
if(isset($message->photo)){
$rasm = $message->photo[0]->file_id;
$ex=explode("=",$step);
$top=mysqli_query($connect,"SELECT * FROM data ORDER BY iid DESC LIMIT 1");
$a = mysqli_fetch_assoc($top);
$soni=$a['iid'];
$s=$soni+1;
mysqli_query($connect, "INSERT INTO data(id,name) VALUES ('$ex[4]','$ex[0]')");
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Document kanalga joylandi😎",
]);
bot('sendPhoto',[
  'chat_id'=>$kanal,
  'photo'=>"$rasm",
  'caption'=>"$ex[3]
  ",
  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
      [['text'=>"📥Yuklab olish📥",'url'=>"https://t.me/$bot?start=$s"],],
      ]
    ])
  ]);
unlink("step/$chat_id.txt");
}
}
if(mb_stripos($text,"/start")!==false){
$exp=explode(" ",$text);
$link=$exp[1];
$resul= mysqli_query($connect,"SELECT * FROM data WHERE iid = '$link'");
$a = mysqli_fetch_assoc($resul);
$file= $a['id'];
$name=$a['name'];
 bot('sendDocument',[
   'document'=>$file,
   'chat_id'=>$chat_id,
   'caption'=>"$name

$reklama",
   ]);
}


/*
*Botir Raimqulov tomonidan tuzildi  
*@Individual_Programmer
*@BotirRaimqulovUz
*Siz istagan turdagi botlarni yaratib
*beramiz
*Manbaasiz olgan koʻt
*/