<?php
define('API_KEY','1131023833:AAH6BaPafXudjTBv2XR-gVC5tLni1s1Gc_s');
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($datas));
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents('php://input'));
$chat_id = $update->message->chat->id;
$text = $update->message->text;
$message_id = $update->message->message_id;


function SendMessage($ChatId, $TextMsg)
{
 bot('sendMessage',[
'chat_id'=>$ChatId,
'text'=>$TextMsg,
'parse_mode'=>"html"
]);
}
if($text == "/start"){
 bot( sendMessage ,[
  chat_id =>$chat_id,
  text =>"I can help you create and manage Telegram bots. If you re new to the Bot API, please see the manual.

You can control me by sending these commands:

/newbot - create a new bot
/mybots - edit your bots [beta]
/mygames - edit your games [beta]

Edit Bots
/setname - change a bot s name
/setdescription - change bot description
/setabouttext - change bot about info
/setuserpic - change bot profile photo
/setcommands - change the list of commands
/deletebot - delete a bot

Bot Settings
/token - generate authorization token
/revoke - revoke bot access token
/setinline - toggle inline mode
/setinlinegeo - toggle inline location requests
/setinlinefeedback - change inline feedback settings
/setjoingroups - can your bot be added to groups?
/setprivacy - toggle privacy mode in groups

Games
/newgame - create a new game
/listgames - get a list of your games
/editgame - edit a game
/deletegame - delete an existing game
admin:
channel @kanal",
 ]);
 }
if($text == "/mybots"){
 bot( sendMessage ,[
  chat_id =>$chat_id,
  text =>"Choose a bot from the list below:
admin:@html_iq
channel @kanal",
 ]);
 }
if($text == "/mygames"){
 bot( sendMessage ,[
  chat_id =>$chat_id,
  text =>"You currently have no games. Use /newgame command to create a first game.
 admin:@html_iq
channel@codearab",
 ]);
 }
if($text == "/setname"){
 bot( sendMessage ,[
  chat_id =>$chat_id,
  text =>"Choose a bot to change name.
admin:@html_iq
channel @kanal",
 ]);
 }
if($text == "/setdescription"){
 bot( sendMessage ,[
  chat_id =>$chat_id,
  text =>"Choose a bot to change description.
admin:@html_iq
channel@codearab  ",
 ]);
 }
if($text == "/setabouttext"){
 bot( sendMessage ,[
  chat_id =>$chat_id,
  text =>"Choose a bot to change the about section.
admin:@html_iq
channel@codearab  ",
 ]);
 }
if($text == "/setuserpic"){
 bot( sendMessage ,[
  chat_id =>$chat_id,
  text =>"Choose a bot to change profile photo.",
 ]);
 }
if($text == "/setcommands"){
 bot( sendMessage ,[
  chat_id =>$chat_id,
  text =>"Choose a bot to change the list of commands.",
 ]);
 }
if($text == "/deletebot"){
 bot( sendMessage ,[
  chat_id =>$chat_id,
  text =>"Choose a bot to delete.",
 ]);
 }
if($text == "/token"){
 bot( sendMessage ,[
  chat_id =>$chat_id,
  text =>"Choose a bot to generate a new token.",
 ]);
 }
if($text == "/revoke"){
 bot( sendMessage ,[
  chat_id =>$chat_id,
  text =>"Choose a bot to generate a new token. Warning: your old token will stop working.",
 ]);
 }
if($text == "/setinline"){
 bot( sendMessage ,[
  chat_id =>$chat_id,
  text =>"Choose a bot to change inline queries status.
admin:@html_iq
channel@kanal ",
 ]);
 }
if($text == "/setinlinegeo"){
 bot( sendMessage ,[
  chat_id =>$chat_id,
  text =>"Choose a bot to change inline location request settings.",
 ]);
 }
if($text == "/setinlinefeedback"){
 bot( sendMessage ,[
  chat_id =>$chat_id,
  text =>"Choose a bot to change inline feedback settings.",
 ]);
 }
if($text == "/setjoingroups"){
 bot( sendMessage ,[
  chat_id =>$chat_id,
  text =>"Choose a bot to change group membership settings.",
 ]);
 }
if($text == "/setprivacy"){
 bot( sendMessage ,[
  chat_id =>$chat_id,
  text =>"Choose a bot to change group messages settings.",
 ]);
 }
if($text == "/newgame"){
 bot( sendMessage ,[
  chat_id =>$chat_id,
  text =>"Serving specific pages to particular Telegram users is an extremely powerful tool that allows you to build cool HTML5 games and integrated interfaces. But power of this kind also requires a lot of responsibility on the part of bot developers. Please read our Rules carefully, and accept them only if you agree with them.
admin:@html_iq
channel@codearab  ",
 ]);
 }
if($text == "/listgames"){
 bot( sendMessage ,[
  chat_id =>$chat_id,
  text =>"Please choose a bot to get a list of its games.",
 ]);
 }
if($text == "/editgame"){
 bot( sendMessage ,[
  chat_id =>$chat_id,
  text =>"Editing games. Please send me a game or a game link (e.g., t.me/bot?game=game).",
 ]);
 }
if($text == "/deletegame"){
 bot( sendMessage ,[
  chat_id =>$chat_id,
  text =>"To delete a game, please send me the game or a game link (e.g., t.me/bot?game=game) 
admin:@html_iq
channel@codearab ",
 ]);
 }
?>
