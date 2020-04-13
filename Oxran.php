<?php
define('API_KEY','1068970788:AAEHgHlD5XAsOcHcXHWbmJvDnar5YMzhGYs'); 
$token = "1068970788:AAEHgHlD5XAsOcHcXHWbmJvDnar5YMzhGYs";
$admin = "956751252"; //admin id
$secret = "-1001300667953";

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
$text = $message->text;
$status = $statjson['result']['status'];
$silent = file_get_contents("data/$chat_id/silent.txt");
$message = $update->message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$name = $message->from->first_name;
$username = $message->from->username;
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$ch_user2 = $update->callback_query->message->chat->username;
$message_id2 = $update->callback_query->message->message_id;
$fadmin2 = $update->callback_query->from->id;
$fadmin = $message->from->id;
$cty = $message->chat->type;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$rt = $update->message->reply_to_message;
$super_silent = explode("\n", $silent);
$re_name = $update->message->reply_to_message->from->first_name;
$mtext = $message->text;
$type = $message->chat->type;
$uid= $message->from->id;
$namegroup = $update->message->chat->title;
$ufname = $update->message->from->first_name;
$uname = $update->message->from->last_name;
$ulogin = $update->message->from->username;
$user_id = $update->message->from->id;
$capt = $message->caption;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$cty = $message->chat->type;
$from_id = $message->from->id;
$step=file_get_contents("data/$fadmin/name.txt");

$update = json_decode(file_get_contents('php://input'));
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$chatusername = $message->chat->username;
$botim="Qarawil24_bot"; //bot useri
$soat = date('H:i', strtotime('5 hour'));
$message = $update->message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$gif = $message->animation;
$doc = $message->document;
$title = $message->chat->title;
$fadmin = $message->from->id;
$lang = $message->from->language_code;
$from = $message->from;
$id = $message->reply_to_message->from->id;
$message_id = $message->reply_to_message->message_id;
$from_user_first_name = $message->reply_to_message->from->first_name;
$bugn = date('Y',strtotime('5 hour'));
$ertaga = date('Y',strtotime('5 hour'));
$ertaga += 1;
$tedadmsg = $update->message->message_id;

$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ism = $message->new_chat_member->first_name;
$username = $message->from->username;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$is_bot = $message->new_chat_member->is_bot;
$step = file_get_contents("stat/$chat_id.step");
$guruhlar = file_get_contents("stat/group.list");
$userlar = file_get_contents("stat/user.list");
mkdir("warn");
mkdir("stat");

$kanali="@Yebayt18";
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
//
if((stripos($mtext,"Ким бар") !== false) or (stripos($mtext,"Kim bor")!==false) or (stripos($mtext,"Kim bar")!==false) or (stripos($mtext,"Квс")!==false)){
  $name = $message->from->first_name;
  $input = array("Hamma tayinli ishla bilan band, bitta san lox, gruppalada sang'ib yurbsan vaysaqilashib😆","Shmabek har doim online😎","Hamma tayinli ishla bilan band, bitta san lox, gruppalada sang'ib yurbsan vaysaqilashib😆","Bir ikkitasi o'tiribdi bekinvolib, *last seen recently* ni yoqvolib😂😆","Maaan😎","Saaaan😂😂","Hozir o'qib turib yozmidiganla *online* faqat😂","😆San bekorchidan boshqa hech kim yo'q hozir","Hech kim yo'q bo'sa kere, tez orada kelib qolishadi","Ko'pla *recently* yoqvogan ko'tla, bilib bo'midi *online*ligini😂","Kaminayu kamtarin Shmabek","Hamma uxlab yotbdiyu😴","Saaaan😂😂","Hammasi lichkada yozishib o'tiribdi😂","Hech kim yo, o'zin bilan o'zin yozishb tur kelishguncha😂😆","Tursunali nima gaap!😂😆");
  $rand=rand(0,20);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
  'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Kimmen") !== false) or (stripos($mtext,"Kimman")!==false)){
  $name = $message->from->first_name;
  $input = array("Kimligini bilmiman sani, o'zin etchi qani, Ismin bo'lsa kere G'ani😂, ko'p mazgini qoqmasdan qizitvor gruppani","Qunduz amaki😂","Shildirbek😂","Manga hozir 'Kimman' deb yozvotgan bitta chmosan😅😆","Yo'lni narigi tarafida 9 qavatli uyda yashidigan Oyshapani qo'shnisi bo'sen kere😂","$title gruppasidagi, eng aktiv odamsan🤘","Do'dirbek😆","Manga pasportini ko'rsatsen etaman kimligini, lekin aniq bilaman internetsiz yashomasligini😂","Kimligini bilmisanmi, deme *LOX*san😆😆","😅Loxga o'xshab manga 'kimman' deb yozib o'tirib, hamma hazilomus jovoblarimi ko'rmoqchi bovotgan bekorchisan","Nortoy😅","Man sani bilaman albattaaa, axir san gruppadigi Lattaaaa😂😂😂","Bichb ketgan bomsh😅😆","Ko'ti qichigan Maymun😅","Baabaaayaaaan😆😂","Telegramga qiz topish maqsadida kirib, haliyam dodirab😂, spamlaga tushib😂, chiqomi qiynalib yurgan bolasan😆","Qizlani quli😅","Aeroport kalla😆😅","Jakuuuuy 😆","Genrih😂","$name!","Do'dirbek😆","Slansi tapchka😆😅","Gulchapchap","Jinni qo'y😂","Magazinchi G'aybulla😂😂");
  $rand=rand(0,10);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
  'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Salom") !== false) or (stripos($mtext,"Qalay")!==false)  or (stripos($mtext,"Qaley")!==false) or (stripos($mtext,"Assalom")!==false)  or  (stripos($mtext,"Salam")!==false) or (stripos($mtext,"Salem")!==false)  or  (stripos($mtext,"Kala")!==false) or (stripos($mtext,"Қалай")!==false)){
$input = array("✋🏻🙄 εΥ QαLεSαη LιCнКαмႺα ΥοΖνοR ✍🏻 SᴘαΜ βοᴘ QoLιᴘΜαη 🤕","Kayfiyatlarim hozir a'lo, nima ishing bor sani baqalo😆","Salominga alik olaman, reklama tashasen Spam berib, Ban qivoraman!   © Creator","👋Salomcha, sandir gruppadigi g'alcha😆","👋Salam axli muxlis😁","Clash o'ynab yuribman, bir-bir farm qilib turimman… Clash o'ynasen chunasan, o'ynamasen yaxshi qilasan","Kayfiyatla cho'tki, gruppadila yozishvottimi nahotki😃","👋Salom bolakay, ishlaring qalay😉","😃Zo'r, o'zinchi?","*PizdeS*🤘","Yaxshimiza bo'tam, o'zizda nima gap😃","Salomingizga alik olayin, sermo'ylov amakingiz bo'lib qolayin😂","Messikalla qalesan😂😂😆","Ooo Jakuy tentak, qalesan 😂","Aa Chigirtka nma gap😆","Jonga teydi Salom bervurishing, boshqa qiladigan yo'mi ishing😂","✌️'Guten tak', Nima gap so'tak😂 Nemischa salom, o'rgangin bolam","Nima gap tinchmi bolam, naqadar go'zaldur bu olam🌸","😃 Salom, ishla qale $name!","💁‍♂️ Salom so'zini 2 ga bo'lib o'qisak: 'Sal' 'om' ya'ni Salom bervotgan odam sal omiroq degani🤣😆","✌️Salom qaleysan, man uchun maleysan😆","Salom berdim okasi, Shmabek siz bilan, qofiyani otasi!","👋Saley, Nma gap qaley Bovottimi ishla, oppomi tishla😂","👋Salom ey ukam, bo'lib qolmagin Spam Spam bu yomon, joning bo'lsin omon😉","Hm bolam nima disan😂","Eee o'siro qong'iz, nima gap😂😂😆","Bor chetroda o'ynagine😂","Vay vay vay","Qalesan bolam, yuriptilami Xolam😉","Qasqonkalla nima gap 🤘😂😆","👋Shmadan alangali salom, alik olmasang bo'lasan tamom","Nimala divossan","Kayfiyatla a'lo🤘","Manda kayfiyat vashee *ZO'R*🤘! Sanam kayfiyatni ko'tarishga harakat qilib ko'r Gruppamiz sho'takan, kayfyatti ko'tarmaganla... ..ko'tarila😆","Manda hammasi yaxshi, lekin Ota-onam uylanishimga qarshi Kinolada bo'ladi shunaqa, o'zin tuzumisan ishlarin qanaqa","Norm👍","✌️Nima gap tuzmisan bola, ichib yurbsanmi Cola Manda atak kayfiyat zo'ra, ishonmasen profilimni rasmiga qarab ko'ra😂","O'zinda nima gap, yuribsanmi dumalab😂 Telegramda o'tirma ko'p, undan ko'ra ko'chada o'yna chop😆","Yaxshi rahmat, qachon o'ynimniz shaxmat","Yaxshi😁","🤔 Manga etdinmi $name","😒 Xol-ahvol so'ravurarkande endi,$name","*Zo'r,* gruppai aktivligini san bir ko'r😎","😐Yomoooon, san bo'sen bo'ldi omon😉","🤘Takoy nastroeniya manda, kulguni qilmagin kanda Mana sanga zo'r maslahat, hayotda kulib yurgin faqat😄","Kayfiyatlarim hozir a'lo, nima ishing bor sani baqalo😆","Yaxshimiza bo'tam, o'zizda nima gap😃");
  $rand=rand(0,32);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}


if(stripos($mtext,"Kim bor") !== false){
  $input = array("Bu gruppamasu, do'dir 😂","Tursunali nima gaap!😂😆","Betta faqat man bilan sandan boshqa hech kim yo 😂");
  $rand=rand(0,4);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
  'reply_to_message_id'=>$mesid,
    'chat_id'=>$from_id,
    'text'=>$soz,
   ]));
}

if((stripos($mtext,"Kimsen") !== false) or (stripos($mtext,"Kimsan")!==false)){
  $input = array("Shmabek db chaqirishadi mani, hurmat qilaman mani gruppaga qo'shganlani","😎 Botlani dodasi, qofiyani otasi...   Shunaqa maqtonchomande endi hapa bo'misan😅","Otim profilimda yozilgan, eee anqov Lagaan😂😆","Gruppeni obrosi 😎","Shmabekman tanimi qoldinmi😎","It hillamas gruppeni a'zosiman 😆","Mashnaqa chirigan gruppalani qizdirvoradigan xazilkashman 😆","Otimmi o'qib keyin so'ragin, Mani otim Shmabek, G'ile bo'senam yaxshilab qaragin😂😆","Kaminayu kamtarin Shmabek bo'laman, lyuboy gapinga qofiya topaman😎","Boya lichkamdayam shu savolli berudin adashmasam...","Mani Shmabek db chaqirishadi, orada bir-bir so'kibam qo'yishadi😂 Chunki qo'pol hazillashaman, nervilaga saal tegaman😅","Sansiramasdan gapir, bir parcha patir olamga tatir, Eshitganmisan shunaqa maqol, Shmabek bo'laman bopti yaxshi qol","Gruppalada hammani asabiga o'ynidigan Shmabek bo'laman 😆");
  $rand=rand(0,4);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
  'reply_to_message_id'=>$mesid,
    'chat_id'=>$chat_id,
    'text'=>$soz,
   ]));
}

if((stripos($mtext,"Рахмет") !== false) or (stripos($mtext,"Rahmet")!==false)  or (stripos($mtext,"Rahmat")!==false) or (stripos($mtext,"Rahmat kotakon")!==false)  or  (stripos($mtext,"Ulken Rahmet")!==false) or (stripos($mtext," Спасибо")!==false)  or  (stripos($mtext,"спс")!==false) or (stripos($mtext,"Raxmet")!==false)){
  $input = array("Eng yaxshi minnatdorchiligingiz gruhimizga odam qo'shib berishingiz (ツ)");
  $rand=rand(0,1);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}
//
if(stripos($mtext,"/saat") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "⏰ Хазир саат: *$soat*";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode' => 'markdown'
  ]));
}

		if(stripos($mtext,"/bugin") !== false){
        $bugun = date('d.m.Y',strtotime('5 hour'));
  $text = "📆 Бугинги сəне: *$bugun*";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($mtext,"/id") !== false){
  $text = "*🆔 Сиздиң ID манзилиңиз:* `$fadmin`";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($mtext,"/gid") !== false){
  $text = "*🆔 Группа ID си:* `$chat_id`";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}
//Method
$us = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $us->result;

if(isset($text1)){
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
   $vaqti = strtotime("+120 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $new_chat_members,
      'until_date'=> $vaqti,
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<b>Guruhga faqat adminlar bot qoshishi mumkin!</b>",
      'parse_mode' => 'html'
  ]);
}
}

if($text1 == "/silent" &&$fadmin==$admin){
	 if($cty == "group" or $cty == "supergroup"){
   bot('restrictChatMember',[
   'user_id'=>$rtid,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>false,
   'can_send_media_messages'=>false,
         ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$re_name *umrbod* • guruh sukunati • ro'yxatiga qo'shildi❗",
'reply_to_message_id'=>$re_msgid,
 'parse_mode'=>'markdown',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
     [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ],
	[
	['text'=>"📡Kanalimiz",'url'=>"https://telegram.me/Yebayt18"]
	]
    ]
    ])
]);
file_put_contents("data/$chat_id/silent.txt",$rtid);
}
}

if($text1 == "/unsilent" &&$fadmin==$admin){
 if($cty == "group" or $cty == "supergroup"){
 bot('restrictChatMember',[
   'user_id'=>$rtid,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>true,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$re_name dan *jazo* olib tashlandi endi guruhda yozishi mumkin.☝️",
'reply_to_message_id'=>$re_msgid,
 'parse_mode'=>'markdown',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
     [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ],
	[
	['text'=>"📡Kanalimiz",'url'=>"https://telegram.me/Yebayt18"]
	]
    ]
    ])
]);
unlink("data/$chat_id/silent.txt");
}
}

 if($text1=="/link"){
 if($cty == "group" or $cty == "supergroup"){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"🔗<b>Guruh havolasi:</b>
\n$getlinkde",
    'parse_mode'=>'html',
     ]);
 }
}

if($text1 == "/start" or $text1 == "/start@Qarawil24_bot"){
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
'text'=>"",
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
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "<b>Салем $first_name мен группалардың хәзілкеш ботыман!</b>😊

🔹 <b>Мен группаны қыздыраман. Группада сөгинген сөзлерди кирди-шықтыларды хам рекламаларды өширемен. Мени группаларға қосың хам админ бериң!</b>

🍁 <b>Жаңалықлар:</b> @KaRaKaLPaKxD",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[
       [['text'=>"👨🏻‍💻Админ",'callback_data'=>"admin"]],
       [['text'=>'📣 Каналымыз','url'=>'t.me/Yebayt18'],['text'=>'👥 Группамыз','url'=>'t.me/Yebayt18']],
       [['text'=>"🛠 Буйрықлар",'callback_data'=>"help"],['text'=>"📊 Статистика",'callback_data'=>"stat1"]],
       [['text'=>"📪 Ботда реклама бериу",'callback_data'=>"reklama"]],
       [['text'=>'👥 Группаға қосыу','url'=>'https://telegram.me/Qarawil24_bot?startgroup=new']],
]   
]),
]);
}
}

if($data=="help"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>🔷 Группа админлери ислетиуи мумкин болған буйрықлар:</b>

/id - Сиздиң ID манзилиңиз;
/gid - Группаңыздың ID манзили;
/ban - Группа ағзасын группадан шығарады, Басқа қайтып кире алмайды;
/unban - Баннан шығарады;
/pin - Хабарды жоқарыға қыстырады;
/addadmin - Группа ағзасын группаға админ қылады;
/deladmin - Админликтен алады;
/del - Хабарды өширеди;
/botdev - Бот жаратыушысы;
/leavechat - Бот группадан шығып кетеди;
/saat - Анық уақытты көрсетеди;
/bugin - Кун, Ай хам жылды көрсетеди;
/soraw -  Ботға байланыслы сораулар хам пикирлер.

<b>- Бул бот группа ағзасы группаға реклама линклерди тасласа яки жаман сөз жазса, бот хабарды өширеди хам пайдаланыушыға ескертиу береди.

Жаратыушы 🛠:</b> @KaRaKaLPaKxD",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙Артқа', 'callback_data'=>"test"]]
]
]),
]);
}

if($data=="reklama"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>Салем , Сиз биздиң ботымызда реклама бермекшисизбе?
Сиздиң рекламаңыз пайдаланыушыларымызға жибериледи!
Реклама бахасын келисемиз!
Муражаат ушын төмендеги ‘‘📪 Реклама бериу‘‘ тугмесин басың!</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'📪 Реклама бериу', 'callback_data'=>"admin"]],
[['text'=>'🔙Артқа', 'callback_data'=>"test"]],
]
]),
]);
}

if($data=="admin"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>Салем , Админ менен илажы барынша, сөйлеу мадениятыңызды дурыслап жазыуыңызды илтимас етемиз!</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>"👨🏻‍💻Админ","url"=>"https://t.me/KaRaKaLPaKxD"]],
[['text'=>"🚫Спамлар ушын","url"=>"http://t.me/Yebayt18"]],
[['text'=>'📄 Мағлыумат', 'callback_data'=>"about"],['text'=>'🔙Артқа', 'callback_data'=>"test"]],
]
]),
]);
}

if($data=="stat1"){
$gr = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$obsh = $gr + $us;
$saat = date('H:i:s', strtotime('5 hour'));
  $bugin = date ('d-m-Y', strtotime('5 hour'));
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "🔷 <b>Бот статистикасы:</b>

👤 <b>Ағзалар: $us</b>
👥 <b>Группалар: $gr</b>
📣 <b>Барлығы: $obsh</b>

🗓 $bugin ⏰ $saat",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'♻️ Жаңалау', 'callback_data' => "stat1"]],
[['text'=>'👥 Группаға қосыу','url'=>'https://telegram.me/Qarawil24_bot?startgroup=new']],
[['text'=>'🔙Артқа', 'callback_data'=>"test"]],
]
]),
]);
}

if($data=="test"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>Салем $first_name мен группалардың хәзілкеш ботыман!</b>😊

🔹 <b>Мен группаны қыздыраман. Группада сөгинген сөзлерди кирди-шықтыларды хам рекламаларды өширемен. Мени группаларға қосың хам админ бериң!</b>

🍁 <b>Жаңалықлар:</b> @KaRaKaLPaKxD",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[ 
       [['text'=>"👨🏻‍💻Админ",'callback_data'=>"admin"]],
       [['text'=>'📣 Каналымыз','url'=>'t.me/Yebayt18'],['text'=>'👥 Группамыз','url'=>'t.me/Yebayt18']],
       [['text'=>"🛠 Буйрықлар",'callback_data'=>"help"],['text'=>"📊 Статистика",'callback_data'=>"stat1"]],
       [['text'=>"📪 Ботда реклама бериу",'callback_data'=>"reklama"]],
       [['text'=>'👥 Группаға қосыу','url'=>'https://telegram.me/Qarawil24_bot?startgroup=new']],
]
]),
]);
}

if($data == "about"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "🔷Бот админи: @KaRaKaLPaKxD 
Сизлергеде ботлар керек болса,бизге муражет қылың. Сіз қәлегендей ботларды тез,сапалы хәм арзан бахалардв жаратып беремиз!",
       'show_alert'=>true
        ]);
    }

//////////////////////////////////////
$fromid =  $message->from->id;
$city = $message->chat->type;
$fname = $message->from->first_name;
$lname = $message->from->last_name;
$username = $message->from->username;
/////////////////////////////////
if($city =="private"){
if((mb_strripos($text1, "/start")!==false)){
bot('sendMessage',[
'chat_id'=>$secret,
'parse_mode'=>"html",
'text'=>"•<b> Paydalaniwshi Haqqinda, </b>👋🏻
•<b>Ati;</b>  <a href='tg://user?id=$fromid'>$fname</a> ,
•<b>USER;</b>  @$username ,
•<b>ID;</b> <code> $fromid </code>, 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
]); 
}
}
//////////////the end//////////////////

$admin = "956751252";
$text = $update->message->text;
$chat_id = $update->message->chat->id;
if($text == '/code' and $chat_id == $admin){
bot('sendDocument',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$mid,
'document'=>new CURLFile(__FILE__),
'caption'=>"@Qarawil24_bot <b>code</b>", 
'parse_mode'=>"html",
]);
} 

if(mb_stripos($text,"/screen") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://api.site-shot.com/?url=$ex[1]",
'caption'=>"By @Qarawil24_bot 💎",
]);
}
////
file_get_contents("ball.dat");
if($message->new_chat_member->id != $message->new_chat_members->id){
$war=file_get_contents("ball.dat");
$jazo="$war\n$chat_id=$user_id";
file_put_contents("ball.dat",$jazo); 
$war=file_get_contents("ball.dat");
$soni="$chat_id=$user_id";
$str=substr_count($war,"$soni");
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
if($str=="50"){
$rep=str_replace($soni,"","$war");
file_put_contents("ball.dat",$rep);
$vaqti = strtotime("3 minutes");
bot('promoteChatmember',[
'chat_id'=>$chat_id,
'user_id'=>$user_id,
'can_change_info'=>true,
'can_post_messages'=>true,
'can_edit_messages'=>true,
'can_delete_messages'=>true,
'can_invite_users'=>true,
'can_restrict_members'=>true,
'can_pin_messages'=>true,
'can_promote_members'=>false
]); 
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"<a href='tg://user?id=$uid'>$name</a> <b>Сізде 50 балл болды. 👏Сіз енді админсіз!</b>",
'parse_mode'=>'html',
]); 
}if($str<"50"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🙋🏻‍♂️ <a href='tg://user?id=$uid'>$name</a> <b>группаға адам қосты!
➕ Сіз +1 баллға ийе болдыңвз, 
📈 Жәмі баллыңыз саны $str дана!</b>
➖➖➖➖➖
Баллар саны 50 данаға жетсе автоматик админ боласыз!
➖➖➖➖➖
<b>Группамызда $count ағза болды</b>",
'parse_mode'=>'html',
]);
}
}
////

   if(stristr($text1,"ض") or stristr($text1, 'ص') or stristr($text1, 'ث') or stristr($text1, 'ق') or stristr($text1, 'ف') or stristr($text1, 'غ') or stristr($text1, 'ع') or stristr($text1, 'ه') or stristr($text1, 'خ') or stristr($text1, 'ح') or stristr($text1, 'ج') or stristr($text1, 'ش') or stristr($text1, 'س') or stristr($text1, 'ي') or stristr($text1, 'ب') or stristr($text1, 'ل') or stristr($text1, 'ا') or stristr($text1, 'ت') or stristr($text1, 'ن') or stristr($text1, 'م') or stristr($text1, 'ك') or stristr($text1, 'ط') or stristr($text1, 'ذ') or stristr($text1, 'ء') or stristr($text1, 'ؤ') or stristr($text1, 'ر') or stristr($text1, 'ى') or stristr($text1, 'ئ') or stristr($text1, 'ة') or stristr($text1, 'و') or stristr($text1, 'ز') or stristr($text1, 'ظ') or stristr($text1, 'د') or stristr($text1, 'أ') or stristr($text1, 'إ') or stristr($text1, 'آ')){
bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
      ]);
bot('restrictChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$user_id,
        'until_date'=>strtotime("+ 180 minutes "),
      ]);
   bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"$ufname $uname Habarida Arab Harflari Qatnashgani Uchun 3 soatga MUTE Qilindi*",
      'parse_mode'=>"markdown", 
      ]);
  }
  
 if($text1=="/adminlar" or $text1 == "/adminlar@Qarawil24_bot"){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
   $owner2 = $result[$key]['user']['first_name'];
    }
if($found == "administrator"){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$idilar = $result[$key]['user']['id'];
$msg1 = "$msg1"."\n👨🏻‍💻[$innames](tg://user?id=$idilar)";
  }
   }
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍💻*Guruh yaratuvchisi:* [$owner2](tg://user?id=$owner)
👥*Guruh adminlari:* $msg1",
'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
 ]);
}

if($text1 == "/mute" or $text1 == "/mute@Qarawil24_bot"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  $minut = strtotime("+120 minutes");
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
      'text' => "<a href='tg://user?id=$id'>$from_user_first_name</a> 3 soatga <b>MUTE</b> qilindi!",
      'parse_mode' => 'html'
  ]);
}
}

if((stripos($capt,"https://")!==false)  or (stripos($capt,"http://")!==false) or (stripos($capt,".dog")!==false) or (stripos($capt,"bot?start=")!==false)  or (stripos($mtext,"t.me")!==false)  or  (stripos($mtext,"http://") !==false) or  (stripos($mtext,"https://")!==false)){
    bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $mid,
    ]);
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => " <a href='tg://user?id=$uid'>$ufname</a> gruppaga reklama tarqatmang!",
        'parse_mode' => 'html'
    ]);
}

  if($text1 == "/unmute" or $text1 == "/unmute@Qarawil24_bot"){
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
    'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> <b>ozod qilindi!</b>",
    'parse_mode'=>'html'
  ]);
}
}

if($text1 == "/pin" or $text1 == "Pin" or $text1 == "PIn" or $text1 == "PIN" or $text1 == "piN" or $text1 == "pIN" or $text1 == "pIn" or $text1 == "pIN"){
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

$is_botjoin = $message->new_chat_member->is_bot;
$is_botleft = $message->left_chat_member->is_bot;
if($is_botleft){ 
  bot('deletemessage',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$mid 
  ]); 
  bot('sendmessage',[ 
  'reply_to_message_id'=>$mid,
    'chat_id'=>$chat_id, 
    'text'=>"<b>Yaxshi qildin, o'zi loxcha botidi shu 😂</b>", 
    'parse_mode'=>'html' 
  ]); 
} 
if($is_botjoin){ 
  bot('deletemessage',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$mid 
  ]); 
  bot('sendmessage',[ 
  'reply_to_message_id'=>$mid,
    'chat_id'=>$chat_id, 
    'text'=>"<b>🤦‍♂ Ee bu botni nima qilasanla, man turganimda 😎</b>", 
    'parse_mode'=>'html' 
   ]); 
}

if($text1=="/leave"&&$fadmin==$admin) {
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "💎 @Qarawil24_bot
📋 $title gruppasida o'z ish faoliyatini $soat da to'xtatdi!",
      'parse_mode' => 'html'
  ]);
  bot('leaveChat',[
    'chat_id'=>$chat_id
  ]);
}

 if($text1 == "/ban" or $text1 == "/ban@Qarawil24_bot"){
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
        'text' => "<a href='tg://user?id=$id'>$from_user_first_name</a> <b>banlandi!</b>",
        'parse_mode'=>'html'
    ]);
  }
  }

 if($text1 == "/unban"  or  $text1 == "/unban@Qarawil24_bot"){
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
        'text' => "<a href='tg://user?id=$id'>$from_user_first_name</a> <b>bandan olindi!</b>",
        'parse_mode'=>'html'
    ]);
}
}

if($text1 == "warn" or $text1 == "/warn" or $text1 == "/warn"){
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
  'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> <b>ogohlantirish oldi.</b>\nEndi undagi ogohlantirishlar soni: <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
}else{
 bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
 bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> shu vaqtgacha unga berilgan ogohlantirishlarga <b>befarq boldi</b>, jazo sifatida esa guruhdan <b>chetlatiladi!</b>",
  'parse_mode'=>'html'
  ]);
 $vaqti = strtotime("+120 minutes");
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
  'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> <b>ogohlantirish oldi.</b>\nEndi undagi ogohlantirishlar soni <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
}
}
}

  if($text1 == "/nowarn" or  $text1 == "/unwarn@Qarawil24_bot"){
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
  'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> dan barcha <b>ogohlantirishlar</b> olib tashlandi.\nEndi undagi ogohlantirishlar soni <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
} 
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

$replyik = $message->reply_to_message->text;
    $yubbi = "📩 Yuboriladigan xabar matnini kiriting. Xabar turi markdown";

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
      'text'=>"$text",
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Userlarga yuborildi!",
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
      if($text == "/cancel"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$guruhlar);
      foreach($idszs as $idlat){
    $guruu =  bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>"$text",
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($guruu){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Guruhlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
}

if(mb_stripos($text,"/soraw") !== false){
  bot('sendmessage',[
    'reply_to_message_id'=>$mid,
    'chat_id'=>$chat_id,
    'text'=>"Xabaringiz <a href='tg://user?id=$admin'>Sardor🇺🇿</a> ga yetkazildi!",
    'parse_mode'=>'html'
  ]);
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Sizga yangi xabar bor.

Guruh haqida:
Guruh nomi: $title
Guruh useri: @$chatusername

Xabarchi haqida:
Ism: <a href='tg://user?id=$uid'>$name</a>
Useri: @$username

Xabar matni: 
<b>$text</b>",
   'parse_mode'=>'html'
  ]);
}
//xabar yuborish 
if($text == "/sendi" and $chat_id == $admin){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📩 Yuboriladigan xabar matnini kiriting. Xabar turi markdown",
]);
file_put_contents("stat/$chat_id.step","sendinline");
}

if($step == "sendinline" and $chat_id == $admin){
file_put_contents("stat/$chat_id.step","link");
file_put_contents("stat/$chat_id.matn",$text);
bot('sendmessage',[
'chat_id'=>$admin,
'parse_mode'=>"markdown",
'text'=>"✅*Matn qabul qilindi endi namuna bo'yicha knopkani yuboring!
Namuna:*

KaRaKaLPaKxD+https://t.me/KaRaKaLPaKxD",
]);      
}

    
if($step == "link"){
if($text == "/otmen"){
file_put_contents("stat/$chat_id.step","");
}else{ 
$matn=file_get_contents("stat/$chat_id.matn");
$ex=explode("+",$text);
$mess=$ex[0];
$url=$ex[1];
$idszs=explode("\n",$userlar);
foreach($idszs as $idlat){
$userr = bot('sendMessage',[
'chat_id'=>$idlat,
'text'=>$matn,
'parse_mode'=>'markdown',
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([   
'inline_keyboard'=>[   
[['text'=>$mess, 'url' => $url]],
]
])
]);
}
if($userr){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Hammaga yuborildi!",
]);      
file_put_contents("stat/$chat_id.step","");
 }
 }
}

if($text == "/sendfor" and $chat_id == $admin){
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"📩 Forward qilinadigon xabarni yuboring!",
      ]);
      file_put_contents("stat/$chat_id.step","forward");
    }

    if($step == "forward" and $chat_id == $admin){
      if($text == "/otmen"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$userlar);
      foreach($idszs as $idlat){
     $userr = bot('forwardMessage', [
'chat_id'=>$idlat,
'from_chat_id'=>$admin,
'message_id'=>$mid,
      ]);
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"✅Forward userlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    }
    if($text == "/sendgi" and $chat_id == $admin){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"📩 Yuboriladigan xabar matnini kiriting. Xabar turi markdown",
]);
file_put_contents("stat/$chat_id.step","sendg");
}

if($step == "sendg" and $chat_id == $admin){
file_put_contents("stat/$chat_id.step","glink");
file_put_contents("stat/$chat_id.matn",$text);
bot('sendmessage',[
'chat_id'=>$admin,
'parse_mode'=>"markdown",
'text'=>"✅*Matn qabul qilindi endi namuna bo'yicha knopkani yuboring!
Namuna:*

KaRaKaLPaKxD+https://t.me/KaRaKaLPaKxD",
]);      
}

    
if($step == "glink"){
if($text == "/otmen"){
file_put_contents("stat/$chat_id.step","");
}else{ 
$matn=file_get_contents("stat/$chat_id.matn");
$ex=explode("+",$text);
$mess=$ex[0];
$url=$ex[1];
$idszs=explode("\n",$guruhlar);
foreach($idszs as $idlat){
$guruu = bot('sendMessage',[
'chat_id'=>$idlat,
'text'=>$matn,
'parse_mode'=>'markdown',
'disable_web_page_preview' => true,
'reply_markup'=>json_encode([   
'inline_keyboard'=>[   
[['text'=>$mess, 'url' => $url]],
]
])
]);
}
if($guruu){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Guruhlarga yuborildi!",
]);      
file_put_contents("stat/$chat_id.step","");
 }
 }
}

if($text == "/sendgfor" and $chat_id == $admin){
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"📩 Forward qilinadigon xabarni yuboring!",
      ]);
      file_put_contents("stat/$chat_id.step","sendfor");
    }

    if($step == "sendfor" and $chat_id == $admin){
      if($text == "/otmen"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$guruhlar);
      foreach($idszs as $idlat){
     $guruu = bot('forwardMessage', [
'chat_id'=>$idlat,
'from_chat_id'=>$admin,
'message_id'=>$mid,
      ]);
      }
        if($guruu){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"✅Forward guruhlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    }
    
    if(isset($message->new_chat_member) or isset($message->left_chat_member)){
    bot('deleteMessage',[
        'chat_id'=>$message->chat->id,
        'message_id'=>$message->message_id,
    ]);
}

?>