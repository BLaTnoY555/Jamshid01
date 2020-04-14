<?php 
$tikapp = '1131023833:AAH6BaPafXudjTBv2XR-gVC5tLni1s1Gc_s';
define('API_KEY',$tikapp);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//@UzMaxBoy orqalik @Web_Master_TM orqalik tarqatildibiltimos manba bilan oling//
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
//@UzMaxBoy orqalik @Web_Master_TM orqalik tarqatildibiltimos manba bilan oling//
 function sendmessage($chat_id, $text, $model){
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$text,
	'parse_mode'=>$mode
	]);
	}
	function sendvoice($chat_id, $voice, $caption){
	bot('sendvoice',[
	'chat_id'=>$chat_id,
	'voice'=>$voice,
	'caption'=>$caption
	]);
	}
	function sendaction($chat_id, $action){
	bot('sendchataction',[
	'chat_id'=>$chat_id,
	'action'=>$action
	]);
	}
      //@UzMaxBoy orqalik @Web_Master_TM orqalik tarqatildibiltimos manba bilan oling//
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
if(preg_match('/^\/([Ss]tart)/',$text)){
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"Салом сиз ботимизга русча хабар ёсангиз сизга голос килиб ташлаб беради😋",
                'parse_mode'=>$mode,
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"👨‍💻 Develper",'url'=>"http://telegram.me/UzMaxBoy"],['text'=>"✅Jamo'amiz",'url'=>"http://telegram.me/Web_Developed"]
              ]
              ]
        ])
            ]);
        }
else
{
$text = $message->text;
	$vo = file_get_contents('http://tts.baidu.com/text2audio?lan=ru&ie=UTF-8&text='.urlencode($text));
 file_put_contents('vo.ogg',$vo);
		   sendvoice($chat_id , new CURLFile('vo.ogg') , '@Web_Developed');
    }
		?>
