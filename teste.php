<?Php

$url = 'https://binance-docs.github.io/apidocs/spot/en/#change-log';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HEADER, true);    
curl_setopt($ch, CURLOPT_NOBODY, true);    
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_TIMEOUT,10);
$output = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if ($httpcode == 200){	
		    	                
				//$html = new simple_html_dom();

				//$html->load($httpcode['string']);
                //include('simple_html_dom.php');
                //$content = file_get_html($url);
                //$elems = $content->find('div[class=page-wrapper] font', 0)->plaintext;
                //echo $elems;					
                		
				//$nome = $html->find('div[class=page-wrapper] font', 0)->plaintext;

				echo '<pre>';
				echo 'DATA DA ULTIMA PUBLICACAO: ';
                die ('parou');
				//print_r($nome);
                //Excuta a interação do envio da msg aqui
				//echo '</pre>';
				
curl_close($ch);
echo "<br>";
echo 'HTTP code: ' . $httpcode;
echo "<br>";
die('Fim do Debug');


} else {
    echo "n pego";
    die ('dsa');
}