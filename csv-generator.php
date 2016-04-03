<?php
//Create CSV and attach to email
$csv = "Item,Brand,Size,Qty,Description \n";//Column headers
foreach($_POST['orderform']['order'] as $eachorder) {
    $csv.= $eachorder['item'].','.$eachorder['item_brand'].' '.$eachorder['text_brand'].','
	.$eachorder['item_size'].' '.$eachorder['text_size'].','.$eachorder['qty'].','.$eachorder['description']."\n"; 
}
$csv_handler = fopen ('csvfile.csv','w');
fwrite ($csv_handler,$csv);
fclose ($csv_handler);
$attachments = array('csvfile.csv');