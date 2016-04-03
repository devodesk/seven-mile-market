<?php

/**

* Template Name: order form

*/


 
get_header(); ?>


<?php 

if(isset($_POST['orderform'])): 
//include('csvtest.php');
//print_r($_POST['orderform']);
//print_r($_POST['orderform']['order']);

//$to = 'ismailcseku@gmail.com, yael@staiman.com, order@sevenmilemarket.com';
//$to = 'ismailcseku@gmail.com, yael@staiman.com';
//$to = 'ismailcseku@gmail.com';
$to = 'order@sevenmilemarket.com';
$subject = 'Sevenmile Ordering Form';
$headers = array('Content-Type: text/html; charset=UTF-8');


$body = 'ONLINE ORDERING FORM'.'<br>';
$body .= '------------------------'.'<br>';

$body .= '<h3><strong>Delivery Information</strong></h3>';
$body .= 'Name: '.$_POST['orderform']['name'].'<br>';
$body .= 'Street Address: '.$_POST['orderform']['streetaddress'].'<br>';
$body .= 'Apt./Flr./Suite: '.$_POST['orderform']['apt_flr_suite'].'<br>';
$body .= 'City: '.$_POST['orderform']['city'].'<br>';
$body .= 'State: '.$_POST['orderform']['state'].'<br>';
$body .= 'Zip: '.$_POST['orderform']['zip'].'<br>';
$body .= 'Email: '.$_POST['orderform']['email'].'<br>';
$body .= 'Cell Phone: '.$_POST['orderform']['cellphone'].'<br>';
$body .= 'Home Phone: '.$_POST['orderform']['homephone'].'<br>';

$body .= '------------------------'.'<br>';
$body .= '<h3><strong>Billing Information</strong></h3>';
$body .= 'Full Name on the Card: '.$_POST['orderform']['fullcardname'].'<br>';
$body .= 'Type of Card: '.$_POST['orderform']['typeofcard'].'<br>';
$body .= 'Othercard: '.$_POST['orderform']['othercard'].'<br>';
$body .= 'CC#: '.$_POST['orderform']['cc_number'].'<br>';
$body .= 'Expiration Month: '.$_POST['orderform']['card_expire']['month'].'<br>';
$body .= 'Expiration Year: '.$_POST['orderform']['card_expire']['year'].'<br>';
$body .= 'Security Code: '.$_POST['orderform']['securitycode'].'<br>';
$body .= '------------------------'.'<br>';

$body .= '<h3><strong>My Order</strong></h3>';
	$body .= '<table border="1" cellpadding="5" cellspacing="0">';
	
		$body .= '<tr>';
		$body .= '<td>Item</td>';
		$body .= '<td>Brand</td>';
		$body .= '<td>Brand</td>';
		$body .= '<td>Size</td>';
		$body .= '<td>Size</td>';
		$body .= '<td>Qty</td>';
		$body .= '<td>Description</td>';
		$body .= '</tr>';
		
	foreach($_POST['orderform']['order'] as $eachorder) {
		$body .= '<tr>';
		$body .= '<td>'.$eachorder['item'].'</td>';
		$body .= '<td>'.$eachorder['item_brand'].'</td>';
		$body .= '<td>'.$eachorder['text_brand'].'</td>';
		$body .= '<td>'.$eachorder['item_size'].'</td>';
		$body .= '<td>'.$eachorder['text_size'].'</td>';
		$body .= '<td>'.$eachorder['qty'].'</td>';
		$body .= '<td>'.$eachorder['description'].'</td>';
		$body .= '</tr>';
	}
	$body .= '</table>';
	
$body .= '------------------------'.'<br>';

$body .= '<h3><strong>Delivery Options</strong></h3>';
$body .= 'Delivery Date: '.$_POST['orderform']['deliverydate'].'<br>';
$body .= 'Delivery Time: '.$_POST['orderform']['deliverytime'].'<br>';
$body .= 'Will be home during delivery hours?: '.$_POST['orderform']['home_during_deliver'].'<br>';
$body .= 'Additional information : '.$_POST['orderform']['additionalinformation'].'<br>';
$body .= '------------------------'.'<br>';
?>

<a style="display: none;" id="trigger-order-thank-you" href="" data-toggle="modal" data-target="#order-thank-you"></a>
<div class="modal fade" id="order-thank-you" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" name="orderform[city]" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Thank you for your order.</h4>
      </div>
      <div class="modal-body"> You should receive an email confirmation shortly. If you have any questions or comments, please contact our office at <a href="info:order@sevenmilemarket.com.">order@sevenmilemarket.com.</a></div>
    </div>
  </div>
</div>
<script type="text/javascript">

$(document).ready(function () {     

    function libertyPop(){  
        var popUp = jQuery("#trigger-order-thank-you");
            console.log(popUp);
        popUp.on('click',function(){
            console.log("WORKS!");
        }).click();
    }

    libertyPop();
});
</script>
<?php



//===========Start Create CSV and attach to email=========================
/*$csv = "Item,Brand,Size,Qty,Description \n";//Column headers
foreach($_POST['orderform']['order'] as $eachorder) {
    $csv.= $eachorder['item'].','.$eachorder['item_brand'].' '.$eachorder['text_brand'].','
	.$eachorder['item_size'].' '.$eachorder['text_size'].','.$eachorder['qty'].','.$eachorder['description']."\n"; 
}
$csv_handler = fopen ('csvfile.csv','w');
fwrite ($csv_handler,$csv);
fclose ($csv_handler);
$attachments = array('csvfile.csv');*/


/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');
/** Include PHPExcel */
require_once dirname(__FILE__) . '/PHPExcel/PHPExcel.php';
// Create new PHPExcel object
$objPHPExcel = new PHPExcel();
// Set document properties
$objPHPExcel->getProperties()->setCreator("SevenMileMarket")
							 ->setLastModifiedBy("SevenMileMarket")
							 ->setTitle("Office 2007 XLSX SevenMileMarket OrderForm")
							 ->setSubject("Office 2007 XLSX SevenMileMarket OrderForm")
							 ->setDescription("SevenMileMarket OrderForm for Office 2007 XLSX.")
							 ->setKeywords("office 2007 SevenMileMarket OrderForm")
							 ->setCategory("SevenMileMarket OrderForm");



// Add a drawing to the worksheet ===================================
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('SMM logo');
$objDrawing->setDescription('SMM logo');
$objDrawing->setPath('SMMlogoRGB.png');
$objDrawing->setHeight(70);
$objDrawing->setWidth(200);
$objDrawing->setCoordinates('B1');
$objDrawing->setOffsetX(30);
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objPHPExcel->getActiveSheet()->setCellValue('G3', 'ORDER FORM');
$objPHPExcel->getActiveSheet()->getStyle('G3')->getFont()->setSize(40);
$objPHPExcel->getActiveSheet()->getStyle('G3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G3')->getFont()->setUnderline(PHPExcel_Style_Font::UNDERLINE_SINGLE);
$objPHPExcel->getActiveSheet()->mergeCells('G3:L3');


// Add rich-text string===================================
$objRichText = new PHPExcel_RichText();
$objRichText->createText(' ');
$objPayable = $objRichText->createTextRun('Thank you for choosing Seven Mile Market for your grocery delivery service. Please fill out the form below with as much detail as possible. The following legend should be used for the Substitute and Kosher Specification columns. If you choose Other, please specify your reqest in the comment field. You are not required to use the specific terms and you can write any specific instructions. If you have any questions, do not hesitate to call or email! ');
$objPayable->getFont()->setBold(true);
$objPayable->getFont()->setItalic(true);
$objPayable->getFont()->setColor( new PHPExcel_Style_Color( PHPExcel_Style_Color::COLOR_DARKGREEN ) );
$objPHPExcel->getActiveSheet()->getCell('B10')->setValue($objRichText);
// Merge cells
$objPHPExcel->getActiveSheet()->mergeCells('B10:K20');
// Set alignments
$objPHPExcel->getActiveSheet()->getStyle('B10')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_JUSTIFY);
$objPHPExcel->getActiveSheet()->getStyle('B10')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

 

 
// Add some data ===================================
$objPHPExcel->setActiveSheetIndex(0)
            //->setCellValue('B23', 'Have you previously ordered from us?')
            ->setCellValue('B24', 'Will you be home during delivery hours?')
            ->setCellValue('G24', $_POST['orderform']['home_during_deliver'])
			
            ->setCellValue('B26', 'Name')
            ->setCellValue('D26', ''.$_POST['orderform']['name'])
			
            ->setCellValue('B27', 'Date')
            ->setCellValue('D27', $_POST['orderform']['deliverydate'])
			
            ->setCellValue('B28', 'Phone Number')
            ->setCellValue('D28', $_POST['orderform']['cellphone'])
			
            ->setCellValue('G26', 'Delivery Address')
            ->setCellValue('J26', $_POST['orderform']['streetaddress'].', '.$_POST['orderform']['apt_flr_suite'].',
 '.$_POST['orderform']['city'].''.$_POST['orderform']['state'].', '.$_POST['orderform']['zip'])			
			
            ->setCellValue('G27', 'Email Address')
            ->setCellValue('J27', $_POST['orderform']['email'])
			
            ->setCellValue('G28', 'Delivery Time Slot')
            ->setCellValue('J28', $_POST['orderform']['deliverytime']);
			
$objPHPExcel->getActiveSheet()->getStyle('B24')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B26')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B27')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B28')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G26')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G27')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G28')->getFont()->setBold(true);
			



// Add rich-text string===================================
$objRichText = new PHPExcel_RichText();
$objRichText->createText(' ');
$objPayable = $objRichText->createTextRun('If you will not be home and you would like us to leave the delivery at your door, you may fill out the Drop Delivery Request form and send it along with your order.');
$objPayable->getFont()->setBold(true);
$objPayable->getFont()->setItalic(true);
$objPayable->getFont()->setColor( new PHPExcel_Style_Color( PHPExcel_Style_Color::COLOR_DARKGREEN ) );
$objPHPExcel->getActiveSheet()->getCell('B30')->setValue($objRichText);
// Merge cells
$objPHPExcel->getActiveSheet()->mergeCells('B30:K35');
// Set alignments
$objPHPExcel->getActiveSheet()->getStyle('B30')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_JUSTIFY);
$objPHPExcel->getActiveSheet()->getStyle('B30')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);





// Add rich-text string===================================
$objRichText = new PHPExcel_RichText();
$objRichText->createText(' ');
$objPayable = $objRichText->createTextRun('Please specify any additional information (e.g. elevator delivery, dog on premises, secure complex,etc):____________');
$objPayable->getFont()->setBold(true);
$objPayable->getFont()->setItalic(true);
$objPayable->getFont()->setColor( new PHPExcel_Style_Color( PHPExcel_Style_Color::COLOR_DARKGREEN ) );
$objPHPExcel->getActiveSheet()->getCell('B38')->setValue($objRichText);
// Merge cells
$objPHPExcel->getActiveSheet()->mergeCells('B38:K43');
// Set alignments
$objPHPExcel->getActiveSheet()->getStyle('B38')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_JUSTIFY);
$objPHPExcel->getActiveSheet()->getStyle('B38')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$objRichText->createText(' '.$_POST['orderform']['additionalinformation']);


// Add some data ===================================
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('B47', 'Sl')
            ->setCellValue('C47', 'Item')
            ->setCellValue('D47', 'Brand')
            ->setCellValue('E47', 'Size')
            ->setCellValue('F47', 'Qty')
            ->setCellValue('G47', 'Description');
$objPHPExcel->getActiveSheet()->getStyle('B47:G47')->getFont()->setBold(true);
//$objPHPExcel->getActiveSheet()->getStyle('B47:G47')->getFont()->setColor( new PHPExcel_Style_Color( PHPExcel_Style_Color::COLOR_DARKGREEN ) );

$index=48;			
foreach($_POST['orderform']['order'] as $eachorder) {
	// Add some data
	$objPHPExcel->setActiveSheetIndex(0)
				->setCellValue('B'.$index, $index-47)
				->setCellValue('C'.$index, $eachorder['item'])
				->setCellValue('D'.$index, $eachorder['item_brand'].' '.$eachorder['text_brand'])
				->setCellValue('E'.$index, $eachorder['item_size'].' '.$eachorder['text_size'])
				->setCellValue('F'.$index, $eachorder['qty'])
				->setCellValue('G'.$index, $eachorder['description']);
    //$csv.= $eachorder['item'].','.$eachorder['item_brand'].' '.$eachorder['text_brand'].','.$eachorder['item_size'].' '.$eachorder['text_size'].','.$eachorder['qty'].','.$eachorder['description']."\n"; 
	$objPHPExcel->getActiveSheet()->getStyle('B'.$index)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
	$objPHPExcel->getActiveSheet()->getStyle('F'.$index)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
	$index++;
}


// ========================== Rename worksheet ===========================
$objPHPExcel->getActiveSheet()->setTitle('Simple');
$objPHPExcel->setActiveSheetIndex(0);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('SevenMile-OrderForm.xls');
$attachments = array('SevenMile-OrderForm.xls');


//===========End Create CSV and attach to email=========================




wp_mail( $to, $subject, $body, $headers, $attachments );


//customer body text
$subject = 'Sevenmile Online Ordering';
$customerbody = ' 
Dear '.$_POST['orderform']['name'].',<br><br>

Thank you for placing your online order with Seven Mile Market. Your order is scheduled to 
arrive on '.$_POST['orderform']['deliverydate'].' between '.$_POST['orderform']['deliverytime'].', 
delivering to 
'.$_POST['orderform']['streetaddress'].', '.$_POST['orderform']['apt_flr_suite'].',
 '.$_POST['orderform']['city'].''.$_POST['orderform']['state'].', '.$_POST['orderform']['zip'].'.<br>
If we have any questions, we will contact you at '.$_POST['orderform']['cellphone'].'.
'.'<br><br>
Thank you for shopping with us!<br>
Seven Mile Market Management
';
wp_mail( $_POST['orderform']['email'], $subject, $customerbody, $headers );

endif;
?>
<div class="motopress-wrapper content-holder clearfix online-ordering-form">
  <div class="container">
    <div class="row">
      <div data-motopress-wrapper-type="content" data-motopress-wrapper-file="page.php" class="span12">
        <div class="row">
          <div data-motopress-static-file="static/static-title.php" data-motopress-type="static" class="span12">
            <section class="title-section">
              <h1 class="title-header"> </h1>
              
              <!-- BEGIN BREADCRUMBS-->
              
              <ul class="breadcrumb breadcrumb__t">
                <li><a href="http://staimanmedia.com/seven-mile-market">Home</a></li>
                <li class="divider">&thinsp;|&thinsp;</li>
                <li class="active">Make My Order</li>
              </ul>
              
              <!-- END BREADCRUMBS --> 
              
            </section>
            
            <!-- .title-section --> 
            
          </div>
        </div>
        <div class="row">
          <div data-motopress-loop-file="loop/loop-page.php" data-motopress-type="loop" id="content" class="span10 offset1 right order-contents">
            <div class="post-2297 page type-page status-publish hentry" id="post-2297"> 
              
              <!--Custom icon-->
              <?php
				// Start the Loop.
				if ( have_posts() ) : the_post();
 					the_content();
				endif;
			?> 
              <h2 class="color-blue">Online Ordering</h2>
              <div class="container-fluid" style="padding:0;">
              
              <?php get_template_part('page-order-form-times')?><br>
<br>
<br>
                <?php get_template_part('page-order-form-bullets')?>
              </div>
              <p> Thank you for choosing Seven Mile Market for your grocery delivery service. Please fill out the form below with as much detail as possible. Please click on “<a target="_blank" href="<?php echo home_url('/delivery-service/');?>" style="text-decoration:underline;">Read More</a>” for more information.  If you have any questions, do not hesitate to call or email! </p>
              <form id="online_order_form" action="<?php echo the_permalink(get_the_ID()) ?>" method="post">
                <div class="container-fluid" style="padding:0;">
                  <div class="row-fluid">
                    <div class="span6">
                      <h3 class="order-form-heading">Delivery Information</h3>
                      <table style="letter-spacing: -1px; font-weight: 500;">
                        <tr>
                          <td>Name
                            <input type="text" name="orderform[name]" style="margin-left: 4px; width: 364px;"></td>
                        </tr>
                        <tr>
                          <td>Street Address
                            <input type="text" name="orderform[streetaddress]" placeholder="" style="width: 150px; margin-left: 3px;">
                            Apt./Flr./Suite
                            <input type="text" name="orderform[apt_flr_suite]" style="width: 63px;">
                        </tr>
                        <tr>
                          <td>City
                            <input type="text" name="orderform[city]" style="width: 130px;">
                            State
                            <input type="text" name="orderform[state]" style="width: 61px;">
                            Zip
                            <input type="text" name="orderform[zip]" style="width: 100px;">
                        </tr>
                        <tr>
                          <td>Email
                          <input required type="email" name="orderform[email]" style="width: 364px;">
                        </tr>
                        <tr>
                          <td>Cell Phone
                            <input required type="text" name="orderform[cellphone]" style="width: 130px;">
                            Home Phone
                            <input type="text" name="orderform[homephone]" style="width: 118px;"></td>
                        </tr>
                      </table>
                    </div>
                    <div class="span6">
                      <h3 class="order-form-heading">Billing Information</h3>
                      <table style="letter-spacing: -1px; font-weight: 500;">
                        <tr>
                          <td>Full Name on the Card
                            <input type="text" name="orderform[fullcardname]" style="margin-left: 4px; width: 274px;"></td>
                        </tr>
                        <tr>
                          <td>Type of Card
                            <input type="radio" name="orderform[typeofcard]" value="female">
                            Visa
                            <input type="radio" name="orderform[typeofcard]" value="visa" checked>
                            MC
                            <input type="radio" name="orderform[typeofcard]" value="ms">
                            AmEx
                            <input type="radio" name="orderform[typeofcard]" value="amex">
                            Discover
                            <input type="radio" name="orderform[typeofcard]" value="amex">
                            Other
                            <input type="text" style="width: 78px; margin-left: 1px;" name="orderform[othercard]"></td>
                        </tr>
                        <tr>
                          <td>CC#
                            <input type="text" name="orderform[cc_number]" style="margin-left: 3px; width: 255px;"></td>
                        </tr>
                        <tr>
                          <td>Expiration Date
                            <select name="orderform[card_expire][month]" style="margin-left: 3px; width: 60px;">
                              <option value="01">01</option>
                              <option value="02">02</option>
                              <option value="03">03</option>
                              <option value="04">04</option>
                              <option value="04">04</option>
                              <option value="05">05</option>
                              <option value="06">06</option>
                              <option value="07">07</option>
                              <option value="08">08</option>
                              <option value="09">09</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                            </select>
                            <select name="orderform[card_expire][year]" style="margin-left: 2px; width: 60px;">
                              <option value="15">15</option>
                              <option value="16">16</option>
                              <option value="17">17</option>
                              <option value="18">18</option>
                              <option value="19">19</option>
                              <option value="20">20</option>
                              <option value="21">21</option>
                              <option value="22">22</option>
                              <option value="23">23</option>
                              <option value="24">24</option>
                              <option value="25">25</option>
                            </select>
                            Security Code:
                            <input type="text" name="orderform[securitycode]" style="margin-left: 4px; width: 96px;"></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="repeated-order-form-fields">
                  <h3 class="order-form-heading">My Order</h3>
                  <table width="100%" cellpadding="0" cellspacing="0">
                    <tr class="repeatingSection">
                      <td width="21%">Item
                        <input type="text" name="orderform[order][1][item]" style="width: 130px;"></td>
                      <td width="15%">Brand
                        <select id="orderform_brand-1" class="orderform_brand" name="orderform[order][1][item_brand]" style="margin-left: 2px; width: 90px;">
                          <option value="" selected>Options</option>
                          <option value="Generic">Generic</option>
                          <option value="Brand Name">Brand Name</option>
                          <option value="Specific Brand">Specific Brand</option>
                        </select>
                        <input style="width: 90px; display:none" type="text" name="orderform[order][1][text_brand]"></td>
                      <td width="13%">Size
                        <select id="orderform_size-1" class="orderform_size" name="orderform[order][1][item_size]" style="margin-left: 2px; width: 90px;">
                          <option value="" selected>Options</option>
                          <option value="Not Sure">Not Sure</option>
                          <option value="Specific Size">Specific Size</option>
                        </select>
                        <input style="width: 90px; display:none" type="text" name="orderform[order][1][text_size]"></td>
                      <td width="7%">Qty
                        <input type="number" name="orderform[order][1][qty]" style="width: 30px;" value="1" min="1"></td>
                      <td width="32%">Description
                        <textarea id="description" rows="10" cols="6" name="orderform[order][1][description]" placeholder="(optional: Kosher Certification,Cholov Yisroel, etc.)" style="height: 30px; width: 250px;"></textarea></td>
                    </tr>
                    <tr class="repeatingSection">
                      <td width="21%">Item
                        <input type="text" name="orderform[order][2][item]" style="width: 130px;"></td>
                      <td width="15%">Brand
                        <select id="orderform_brand-2" class="orderform_brand" name="orderform[order][2][item_brand]" style="margin-left: 2px; width: 90px;">
                          <option value="" selected>Options</option>
                          <option value="Generic">Generic</option>
                          <option value="Brand Name">Brand Name</option>
                          <option value="Specific Brand">Specific Brand</option>
                        </select>
                        <input style="width: 90px; display:none" type="text" name="orderform[order][2][text_brand]"></td>
                      <td width="13%">Size
                        <select id="orderform_size-2" class="orderform_size" name="orderform[order][2][item_size]" style="margin-left: 2px; width: 90px;">
                          <option value="" selected>Options</option>
                          <option value="Not Sure">Not Sure</option>
                          <option value="Specific Size">Specific Size</option>
                        </select>
                        <input style="width: 90px; display:none" type="text" name="orderform[order][2][text_size]"></td>
                      <td width="7%">Qty
                        <input type="number" name="orderform[order][2][qty]" style="width: 30px;" value="1" min="1"></td>
                      <td width="32%">Description
                        <textarea id="description" rows="10" cols="6" name="orderform[order][2][description]" placeholder="(optional: Kosher Certification,Cholov Yisroel, etc.)" style="height: 30px; width: 250px;"></textarea></td>
                    </tr>
                    <tr class="repeatingSection">
                      <td width="21%">Item
                        <input type="text" name="orderform[order][3][item]" style="width: 130px;"></td>
                      <td width="15%">Brand
                        <select id="orderform_brand-3" class="orderform_brand" name="orderform[order][3][item_brand]" style="margin-left: 2px; width: 90px;">
                          <option value="" selected>Options</option>
                          <option value="Generic">Generic</option>
                          <option value="Brand Name">Brand Name</option>
                          <option value="Specific Brand">Specific Brand</option>
                        </select>
                        <input style="width: 90px; display:none" type="text" name="orderform[order][3][text_brand]"></td>
                      <td width="13%">Size
                        <select id="orderform_size-3" class="orderform_size" name="orderform[order][3][item_size]" style="margin-left: 2px; width: 90px;">
                          <option value="" selected>Options</option>
                          <option value="Not Sure">Not Sure</option>
                          <option value="Specific Size">Specific Size</option>
                        </select>
                        <input style="width: 90px; display:none" type="text" name="orderform[order][3][text_size]"></td>
                      <td width="7%">Qty
                        <input type="number" name="orderform[order][3][qty]" style="width: 30px;" value="1" min="1"></td>
                      <td width="32%">Description
                        <textarea id="description" rows="10" cols="6" name="orderform[order][3][description]" placeholder="(optional: Kosher Certification,Cholov Yisroel, etc.)" style="height: 30px; width: 250px;"></textarea></td>
                    </tr>
                    <tr class="repeatingSection">
                      <td width="21%">Item
                        <input type="text" name="orderform[order][4][item]" style="width: 130px;"></td>
                      <td width="15%">Brand
                        <select id="orderform_brand-4" class="orderform_brand" name="orderform[order][4][item_brand]" style="margin-left: 2px; width: 90px;">
                          <option value="" selected>Options</option>
                          <option value="Generic">Generic</option>
                          <option value="Brand Name">Brand Name</option>
                          <option value="Specific Brand">Specific Brand</option>
                        </select>
                        <input style="width: 90px; display:none" type="text" name="orderform[order][4][text_brand]"></td>
                      <td width="13%">Size
                        <select id="orderform_size-4" class="orderform_size" name="orderform[order][4][item_size]" style="margin-left: 2px; width: 90px;">
                          <option value="" selected>Options</option>
                          <option value="Not Sure">Not Sure</option>
                          <option value="Specific Size">Specific Size</option>
                        </select>
                        <input style="width: 90px; display:none" type="text" name="orderform[order][4][text_size]"></td>
                      <td width="7%">Qty
                        <input type="number" name="orderform[order][4][qty]" style="width: 30px;" value="1" min="1"></td>
                      <td width="32%">Description
                        <textarea id="description" rows="10" cols="6" name="orderform[order][4][description]" placeholder="(optional: Kosher Certification,Cholov Yisroel, etc.)" style="height: 30px; width: 250px;"></textarea></td>
                    </tr>
                    <tr class="repeatingSection">
                      <td width="21%">Item
                        <input type="text" name="orderform[order][5][item]" style="width: 130px;"></td>
                      <td width="15%">Brand
                        <select id="orderform_brand-5" class="orderform_brand" name="orderform[order][5][item_brand]" style="margin-left: 2px; width: 90px;">
                          <option value="" selected>Options</option>
                          <option value="Generic">Generic</option>
                          <option value="Brand Name">Brand Name</option>
                          <option value="Specific Brand">Specific Brand</option>
                        </select>
                        <input style="width: 90px; display:none" type="text" name="orderform[order][5][text_brand]"></td>
                      <td width="13%">Size
                        <select id="orderform_size-5" class="orderform_size" name="orderform[order][5][item_size]" style="margin-left: 2px; width: 90px;">
                          <option value="" selected>Options</option>
                          <option value="Not Sure">Not Sure</option>
                          <option value="Specific Size">Specific Size</option>
                        </select>
                        <input style="width: 90px; display:none" type="text" name="orderform[order][5][text_size]"></td>
                      <td width="7%">Qty
                        <input type="number" name="orderform[order][5][qty]" style="width: 30px;" value="1" min="1"></td>
                      <td width="32%">Description
                        <textarea id="description" rows="10" cols="6" name="orderform[order][5][description]" placeholder="(optional: Kosher Certification,Cholov Yisroel, etc.)" style="height: 30px; width: 250px;"></textarea></td>
                    </tr>
                  </table>
                  <div style="text-align:right;"><a class="btn addNewRow" onclick="addImage();">Add another item (+)</a></div>
                </div>
                <h3 class="order-form-heading">Delivery Options</h3>
                <table width="100%">
                  <tr>
                    <td colspan="2">Delivery Time and Date <a style="text-decoration:underline;" href="" data-toggle="modal" data-target="#availableTimes">(click for available times)</a>
                      <input placeholder="Date" class="datepicker" type="text" name="orderform[deliverydate]">
                      <select name="orderform[deliverytime]" style="margin-left: 2px; width: 120px;">
                        <option value="">Options</option>
                        <option value="11-2">M-TH: 11-2</option>
                        <option value="2-6">M-TH: 2-6</option>
                        <option value="9-12">Friday: 9-12</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td colspan="2">Will you be home during delivery hours?
                      <input type="radio" name="orderform[home_during_deliver]" value="yes">
                      Yes
                      <input type="radio" name="orderform[home_during_deliver]" value="no">
                      No </td>
                  </tr>
                  <tr>
                    <td colspan="2"><table class="leave-at-door" style="display: none;">
                        <tr>
                          <td colspan="2">Please specify any additional information (e.g. elevator delivery, dog on premises, secure complex, etc):
                            <input type="text" name="orderform[additionalinformation]" style="width: 100%;"></td>
                        </tr>
                        <tr class="leave-at-door-no">
                          <td colspan="2"><input type="checkbox" name="orderform[i_understand]" style="margin-right: 4px;">
                            I authorize Seven Mile Market to leave the order I placed at my door. I understand that Seven Mile Market is not responsible for any damage or spoilage that may occur after the order is delivered. I understand that all perishable items are not returnable unless it was an item that I did not order.</td>
                        </tr>
                        <tr class="leave-at-door-yes">
                          <td colspan="2"><input type="checkbox" name="orderform[i_understand]" style="margin-right: 4px;">
                            I understand that Seven Mile Market is not responsible for any damage or spoilage that may occur after the order is delivered. I understand that all perishable items are not returnable unless it was an item that I did not order.</td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr class="i_agree_terms">
                    <td><p>
                        <label for=""></label>
                        <input type="checkbox" name="orderform[i_agree_terms]" style="margin-right: 4px;">
                        By clicking submit, you authorize SEVEN MILE MARKET to charge your card for deliveries. Your credit card will be charged prior to all deliveries. Seven Mile Market has the authority to charge your card any additional fees that may ensue. If you are not present to receive your order and you did not select the Drop Delivery Option we will charge you a $10 restocking fee and you will need to resubmit your order. I have read and agree to the <a target="_blank" href="<?php echo home_url('/delivery-service/');?>" style="text-decoration:underline;">general information</a> and <a target="_blank" href="<?php echo home_url('/delivery-terms-and-conditions/');?>" style="text-decoration:underline;">terms and conditions</a> </p></td>
                  </tr>
                  <tr>
                    <td style="text-align: center;"><input style="margin-top: 30px;" type="submit" name="orderform[submit]" value="Submit"></td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
              </form>
            </div>
            
            <!--#post--> 
            
          </div>
          <!--<div class="span3 sidebar" id="sidebar" data-motopress-type="static-sidebar"  data-motopress-sidebar-file="sidebar.php">
            <?php //get_sidebar(); ?>
          </div>-->
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
// Add a new repeating section
var attrs = ['for', 'id', 'name'];
function resetAttributeNames(section) { 
    var tags = section.find('input, label'), idx = section.index();
    tags.each(function() {
      var $this = $(this);
      $.each(attrs, function(i, attr) {
        var attr_val = $this.attr(attr);
        if (attr_val) {
            $this.attr(attr, attr_val.replace(/_\d+$/, '_'+(idx + 1)))
        }
      })
    })
}
              
$('.addNewRow2').click(function(e){
	e.preventDefault();
	var lastRepeatingGroup = $('.repeatingSection').last();
	var cloned = lastRepeatingGroup.clone(true) 
	console.log(cloned); 
	cloned.insertAfter(lastRepeatingGroup);
	resetAttributeNames(cloned);
});

$(function() {
	$( ".datepicker" ).datepicker();
	$( ".timepicker" ).timepicker();
});	


//brand on change show input field
$("body").on( "change", ".orderform_brand", function() {
    var optionSelected = $("option:selected", this);
    var valueSelected = this.value;
    var this_id = $(this).attr('id');
    var this_id_array = this_id.split('-');
	if (valueSelected == 'Specific Brand') {
		$('input[name="orderform[order][' + this_id_array[1] + '][text_brand]"]').show();
	} else {
		$('input[name="orderform[order][' + this_id_array[1] + '][text_brand]"]').hide();
	}	
});

//size on change show input field
$("body").on( "change", ".orderform_size", function() {
    var optionSelected = $("option:selected", this);
    var valueSelected = this.value;
    var this_id = $(this).attr('id');
    var this_id_array = this_id.split('-');
	if (valueSelected == 'Specific Size') {
		$('input[name="orderform[order][' + this_id_array[1] + '][text_size]"]').show();
	} else {
		$('input[name="orderform[order][' + this_id_array[1] + '][text_size]"]').hide();
	}	
});

$('input:radio[name="orderform[home_during_deliver]"]').change(function(){
	if ($(this).val() == 'no') {
		$('.leave-at-door').show();
		$('.i_agree_terms').show();
		$('.leave-at-door-no').show();
		$('.leave-at-door-yes').hide();
	} else {
		$('.leave-at-door').show();
		$('.i_agree_terms').show();
		$('.leave-at-door-yes').show();
		$('.leave-at-door-no').hide();
	}
});

$("#online_order_form").submit(function(e) {
    if(!$('input[name="orderform[i_agree_terms]"]:checked').length) {
        //alert("Please select at least one to upgrade.");

        //stop the form from submitting
        return false;
    }

    return true;
});
</script>


<script type="text/javascript"><!--
var image_row = 6;

function addImage() {
html  = '<tr class="repeatingSection">';
html += '    <td width="21%">Item';
html += '      <input type="text" name="orderform[order][' + image_row + '][item]" style="width: 130px;"></td>';
html += '    <td width="15%">Brand';
html += '      <select id="orderform_brand-' + image_row + '" class="orderform_brand" name="orderform[order][' + image_row + '][item_brand]" style="margin-left: 2px; width: 90px;">';
html += '        <option value="" selected>Options</option>';
html += '        <option value="Generic">Generic</option>';
html += '        <option value="Brand Name">Brand Name</option>';
html += '        <option value="Specific Brand">Specific Brand</option>';
html += '      </select>';
html += '      <input style="width: 90px; display:none" type="text" name="orderform[order][' + image_row + '][text_brand]"></td>';
html += '    <td width="13%">Size';
html += '      <select id="orderform_size-' + image_row + '" class="orderform_size" name="orderform[order][' + image_row + '][item_size]" style="margin-left: 2px; width: 90px;">';
html += '        <option value="" selected>Options</option>';
html += '        <option value="Not Sure">Not Sure</option>';
html += '        <option value="Specific Size">Specific Size</option>';
html += '      </select>';
html += '      <input style="width: 90px; display:none" type="text" name="orderform[order][' + image_row + '][text_size]"></td>';
html += '    <td width="7%">Qty';
html += '      <input type="number" name="orderform[order][' + image_row + '][qty]" style="width: 30px;" value="1" min="1"></td>';
html += '    <td width="32%">Description';
html += '      <textarea id="description" rows="10" cols="6" name="orderform[order][' + image_row + '][description]" placeholder="(optional: Kosher Certification,Cholov Yisroel, etc.)" style="height: 30px; width: 250px;"></textarea></td>';
html += '  </tr>';

	
	$('.repeated-order-form-fields table').append(html);
	
	image_row++;
}
//--></script>
<style type="text/css">
.online-ordering-form input[type='checkbox'],
.online-ordering-form input[type='radio'] {
	margin-top: 0;
}
.repeatingSection > td {
    padding: 12px 5px 12px 0;
}
</style>

<!-- Modal -->
<div class="modal fade" id="availableTimes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" name="orderform[city]" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Available times</h4>
      </div>
      <div class="modal-body"> You may submit an order for next day delivery or you may schedule a delivery for a future date. Orders are delivered Monday-Thursday between 11 AM- 6 PM, and Fridays between 9 AM-12 PM. Please allow up to 2 hours from your selected time. </div>
    </div>
  </div>
</div>
<style type="text/css">
.modal-backdrop {
	position: relative;
}

</style>
<?php get_footer(); ?>
