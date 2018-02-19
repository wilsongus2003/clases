<?php
$token='299069896:AAE8YQ_fx8sknjbQgE5T0hxePiAfSixTS0U';
$chat='278922215';
define('BOT_TOKEN',$token);
define('CHAT_ID',$chat);
define('API_URL','https://api.telegram.org/bot'.BOT_TOKEN.'/');
enviar_telegram("mesaje telegram");
function enviar_telegram($msj)
		{
			$queryArray=[ 
			'chat_id'=> CHAT_ID,
			'text'=>$msj, ];
			$url='https://api.telegram.org/bot'.BOT_TOKEN.'/sendMessage?'
							.http_build_query($queryArray);
			$result=file_get_contents($url);
		}		
?>