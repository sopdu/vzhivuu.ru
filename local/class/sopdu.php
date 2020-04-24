<?php
	class sopdu {
		function copyright($currentYeare, $copyright){
			if($currentYeare == date('Y')){
				$yeare = date('Y');
			} else {
				$yeare = $currentYeare.' - '.date('Y');
			}
			$result = '&copy;'.$yeare.'&nbsp;'.$copyright;
			return $result;
		}
		function phone($path){
			$phone = file_get_contents($path);
			$result = preg_replace('/[^0-9]/', '', $phone);
			return 'tel:+'.$result;
		}
		function phone_text($phone){
			return 'tel:+'.preg_replace('/[^0-9]/', '', $phone);
		}
		function createLead($title, $name, $phone, $note){
			define('CRM_HOST', 'vzhivuu.bitrix24.ru'); // Ваш домен CRM системы
			define('CRM_PORT', '443'); // Порт сервера CRM. Установлен по умолчанию
			define('CRM_PATH', '/crm/configs/import/lead.php'); // Путь к компоненту lead.rest
			define('CRM_LOGIN', 'quazar1@mail.ru'); // Логин пользователя Вашей CRM по управлению лидами
			define('CRM_PASSWORD', 'vzhivuutest'); // Пароль пользователя Вашей CRM по управлению лидами
			
			$postData = array(
				'TITLE'                 =>  $title, // Установить значение
				'NAME'                  =>  $name,
				'PHONE_MOBILE'          =>  $phone, // мобильный телефон
				'COMMENTS'              =>  $note, // комментарий
				'STATUS_DESCRIPTION'    =>  'Сайт vzhivuu.ru'
			);
			$fp = fsockopen("ssl://".CRM_HOST, CRM_PORT, $errno, $errstr, 30);
			if ($fp) {
				$strPostData = '';
				foreach ($postData as $key => $value) {
					$strPostData .= ($strPostData == '' ? '' : '&').$key.'='.urlencode($value);
				}
				$str = "POST ".CRM_PATH." HTTP/1.0\r\n";
				$str .= "Host: ".CRM_HOST."\r\n";
				$str .= "Content-Type: application/x-www-form-urlencoded\r\n";
				$str .= "Content-Length: ".strlen($strPostData)."\r\n";
				$str .= "Connection: close\r\n\r\n";
				$str .= $strPostData;
				fwrite($fp, $str);
				$result = '';
				while (!feof($fp)){
					$result .= fgets($fp, 128);
				}
				fclose($fp);
				$response = explode("\r\n\r\n", $result);
				$output = '<pre>'.print_r($response[1], 1).'</pre>';
			} else 	{
				echo 'Connection Failed! '.$errstr.' ('.$errno.')';
			}
		}
	}
	$sopdu = new sopdu();
?>