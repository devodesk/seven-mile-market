<?php

$data_array = array (
            array ('1','2'),
            array ('2','2'),
            array ('3','6'),
            array ('4','2'),
            array ('6','5')
            );

$csv = "Item,Brand,Size,Qty,Description \n";//Column headers
foreach($_POST['orderform']['order'] as $eachorder) {
    $csv.= $eachorder['item'].','.$eachorder['item_brand'].' '.$eachorder['text_brand'].','
	.$eachorder['item_size'].' '.$eachorder['text_size'].','.$eachorder['qty'].','.$eachorder['description']."\n"; 
}
$csv_handler = fopen ('csvfile.csv','w');
fwrite ($csv_handler,$csv);
fclose ($csv_handler);

echo 'Data saved to csvfile.csv aa2a';

$attachments = array('csvfile.csv');
$to = 'ismailcseku@gmail.com';
$subject = 'Sevenmile Ordering Form';
$headers = array('Content-Type: text/html; charset=UTF-8');
$body = 'babu';
wp_mail( $to, $subject, $body, $headers, $attachments );