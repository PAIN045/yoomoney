# yoomoney
Class for working with Yoomoney payment forms



### creat payments form

$yoomoney = new Yoomoney($your_receiver,$your_secret_key);


        $formValue = $yoomoney->form($amount,$sum);
        
        

								 echo '<form method="post" action="https://yoomoney.ru/quickpay/confirm.xml">';
									foreach ($formValue as $key => $value) {
										echo '<input type="hidden" name="' . $key . '" value="' . $value . '">';
									}
									echo '<button>Pay</button>
                                    </form>';
                                    
                                    
                                    
### check payments

                if(!$yoomoney->sign($_POST)) exit;
                
