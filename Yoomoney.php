<?php

	### Class for working with Yoomoney payment forms
	### Author https://github.com/PAIN045
	
	
		class Yoomoney  {
			
 private $receiver;
 private $key;
 
 
    function __construct($receiver,$key) {
        $this->receiver = $receiver;
		$this->key = $key;
    }
 
	

			
			public function form($amount,$label){
				
				
				$array = [	'receiver'	 => 	$this->receiver,
							'formcomment'	=>	'Оплата счета #'.$label,
							'short-dest'	=>	'Оплата счета #'.$label,
							'label'	=>	$label,
							'sum'	=>  $amount,
							'quickpay-form' => 'donate',
							'targets'	=>	'Оплата счета #'.$label,
							'comment'	=>	'Оплата счета #'.$label,
							'need-fio'	=>	'false',
							'need-email' => 'false',
							'need-phone' => 'false',
							'need-address' => 'false',
							'paymentType' => 'PC'
				
				
				
				
				
				];
				
				
				
				return $array;
				
				
				
			}
			
			
			
		public function sign($request)
		{
			
			$string = $request['notification_type'] . '&'. $request['operation_id']. '&' . $request['amount'] . '&643&'. $request['datetime'] . '&'. $request['sender'] . '&' . $request['codepro'] . '&' .$this->key. '&' . $request['label'];
			
			$sign = hash('sha1', $string);
			
			if($sign != $request['sha1_hash']) return false;
			
			return true;
			
		}
		
		
		
			
			
			
			
			
		}
