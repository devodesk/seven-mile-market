<?php
/**
* Template Name: shopping list
*/

get_header(); 

if(isset($_POST['submit'])){
?>
	<style>
		.seven-container1 {
			background-color: #FFFFFF;
			margin: auto;
			min-height: 500px;
			padding: 10px;
			width: 65%; 
			font-family:arial;
			
		}
		.seven-container table{width:100%;}

		.headingprint {
		    border: 1px solid #DDDDDD;
		    color: #3366CC;
		    font-size: 18px;
		    padding-bottom: 12px;
		    padding-left: 26px;
		}
		.rowbg {
			    background-color: #DDDDDD !important;
			    height: 38px !important; font-weight:bolder; font-family:Arial, Helvetica, sans-serif; 	
		       }

		.rowbg1 {
			    background-color: #DDDDDD !important;
			    height: 38px !important;font-family:Arial, Helvetica, sans-serif; 	
		       }

		 .rowbg1 th {
				font-weight: normal !important;
			}
	</style>
    
	<div class="seven-container1">
    	<div style="text-align: right;">
		<?php	 
			echo do_shortcode('[print-button target="div#printable_shoppinglist"]');
		?>
        </div>
        <div  id="printable_shoppinglist">
    	<div style="text-align: center;">
        	<img title="" alt="Seven Mile Market" src="http://sevenmilemarket.com/wp-content/uploads/2014/12/SMMlogoRGB.png">
        </div>
            
        <br>
		<?php	 
 
 
			echo '<div class="headingprint">';
			echo "<h2>Personal Shopping List</h2>";	
			echo '</div>';
			echo '<table width="100%" border="1" cellpadding="5" cellspacing="1"><tr class="rowbg"><th>Item No.</th><th>Product Name</th><th>Location</th><th>Amount</th><th>Note</th></tr>';
			//$newproducts = (preg_replace('/[0-9]+/', '', $_POST['products'])); 
			//print_r($_POST['products']);echo "<br />";

			foreach($_POST['products'] as $i){ @$j++; 
				$name = (preg_replace('/[0-9]+/', '', $i));	
				echo '<tr class="rowbg1"><th> '. $j .' </th><th>'.$_POST['productsname'][$name].'</th><th>'.$_POST['storepoint'][$i].'</th><th>'.$_POST['quantity'][$i].'</th><th>'.$_POST['notes'][$i].'</th></tr>';
			}
			echo '</table>';
		?>
	<script>
	$( document ).ready(function(){

		window.print();
	}); 


	</script>
    </div>
    </div>
<?php
 
 
die();
}

$data = file_get_contents(get_stylesheet_directory().'/text-files/grocery.csv');
$convert = explode(":",$data);
?>
<style type="text/css" />
	body{margin:0px; padding:0px;background-color:#808000;}
	.seven-container {
		background-color: #FFFFFF;
		margin: auto;
		min-height: 500px;
		padding: 10px;
		/*width: 522px;*/ 
		font-family:arial;
	}
	.seven-container table{width:100%;}
	.heading {
		border-bottom: 1px solid #999999;
		color: #3366CC;
		font-size: 18px;
		padding-bottom: 12px;
		padding-left: 26px;
	}

	.heading1 {
		border-radius: 2px;
		color: #333;
		font-size: 15px;
		font-weight: bold;
		margin-top: 17px;
		padding: 5px;
		padding-left:10px;



	background: rgba(235,233,249,1);
	background: -moz-linear-gradient(top, rgba(235,233,249,1) 0%, rgba(216,208,239,1) 39%, rgba(206,199,236,1) 51%, rgba(193,191,234,1) 100%);
	background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(235,233,249,1)), color-stop(39%, rgba(216,208,239,1)), color-stop(51%, rgba(206,199,236,1)), color-stop(100%, rgba(193,191,234,1)));
	background: -webkit-linear-gradient(top, rgba(235,233,249,1) 0%, rgba(216,208,239,1) 39%, rgba(206,199,236,1) 51%, rgba(193,191,234,1) 100%);
	background: -o-linear-gradient(top, rgba(235,233,249,1) 0%, rgba(216,208,239,1) 39%, rgba(206,199,236,1) 51%, rgba(193,191,234,1) 100%);
	background: -ms-linear-gradient(top, rgba(235,233,249,1) 0%, rgba(216,208,239,1) 39%, rgba(206,199,236,1) 51%, rgba(193,191,234,1) 100%);
	background: linear-gradient(to bottom, rgba(235,233,249,1) 0%, rgba(216,208,239,1) 39%, rgba(206,199,236,1) 51%, rgba(193,191,234,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ebe9f9', endColorstr='#c1bfea', GradientType=0 );


	}
	.debug{border:1px solid #ff0000;}
	.sub-con{width:100%;}
	.product-left {
		color: #808000;
		float: left;
		font-weight: normal;
		margin-left: 34px;
		margin-top: 10px;
		width: 252px;
	}

	.product-right {
		color: #808000;
		float: left;
		font-weight: normal;
		margin-top: 10px;
		width: 170px;
	}


	.product-quantity-right {
		color: #808000;
		float: left;
		font-weight: normal;
		margin-top: 10px;
		width: 10px;
	}


	.item-text-l{
	color: #999999;
		float: left;
		font-weight: bold;
		margin-left: 41px;
		margin-top: 10px;
		width: 232px;
	}

	.item-text-r{
	 color: #999999;
		float: left;
		font-weight: bold;
		margin-top: 10px;
		width: 160px;
	}


	.item-quantity-r{
	 color: #999999;
		float: left;
		font-weight: bold;
		margin-top: 10px;
		width: 10px;
	}






	.btn-success {
	  height: 30px;
		padding-left: 20px;
		padding-right: 20px;border-radius:3px;
		background-color: #5BB75B;
		background-image: linear-gradient(to bottom, #62C462, #51A351);
		background-repeat: repeat-x;
		border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
		color: #FFFFFF;
		text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);margin-left:320px; font-weight:bolder; font-size:15px; font-family:Arial, Helvetica, sans-serif; margin-bottom:20px;
	}

	.btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active, .btn-success.disabled, .btn-success[disabled] {
		background-color: #51A351;
		color: #FFFFFF;
	}
	.product_print{
		clear:both;
	}

.back-to-top {
			position: fixed;
			bottom: 2em;
			right: 0px;
			text-decoration: none;
			color: #000000;
			background-color: rgba(235, 235, 235, 0.80);
			font-size: 12px;
			padding: 1em;
			display: none;
		}

		.back-to-top:hover {	
			background-color: rgba(135, 135, 135, 0.50);
		}


.headercontent {
	color: #808000;
	font-size: 15px;
	margin-bottom: 9px;
	margin-top: 5px;
	margin-left:5px;
	font-family: Arial, Helvetica, sans-serif;font-weight:bolder;	
	
}

#shopinglist {
background-color: #F6F6DE;
    border: 1px solid #DDDDDD;
    border-radius: 7px;
    padding: 0 5px 5px;
    clear:both;
    overflow:hidden;	
}


.botom-content {
	border-top:1px solid #999999; padding-top:18px;
}

.left { float:left; height:13px; width:auto; line-height:20px; color:#808000; font-family:Arial, Helvetica, sans-serif; font-size:16px; }
.right { width:100px; margin-top:40px; }
	</style>
    
<?php
$qty_options='';
for($i=1; $i<=100;$i++)
$qty_options .= "<option value='".$i."'>".$i."</option>"
?>    
<div class="motopress-wrapper content-holder clearfix">
  <div class="container">
    <div class="row-fluid">
<div data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php" class="span8 " id="content">
<img alt="" src="http://sevenmilemarket.com/wp-content/uploads/2014/12/shopping-list.png">
</div><div class="clearfix"></div>
        <!--=========================seven-container====================================-->
        <div class="row-fluid">
        <div class="seven-container span8 offset2">
        <?php 
        $html = '';
        $html1 = '';
        $html .="<div class='heading'>";
        $html .="<h2>Personal Shopping List</h2>";
        $html .="</div>\n";
        
        echo $html;
            
        
        $html1 .="<div class='headercontent'>";
        $html1 .="Check The Items You Wish To Add To Your List. When You Are Finished, Click The 'Create Shopping List' Button At The Bottom Of The Page. Your Personalized, Printable List Will Appear On A new Page.";
        $html1 .="</div>";
        $html1 .="<form method='POST' target='_blank' action='' id='shopinglist'>";
        $html1 .= do_shortcode('[accordions]');
        $abc='';
        asort($convert);
        foreach($convert as $key=>$value)
        {	
        	$bhtml1 = '';
            $axvalue = explode("=",$value);
            //$bhtml1 .= "<div class='heading1'>".$axvalue[0]. "</div>";     
            $bhtml1 .="<br clear='all' />\n";
            $bhtml1 .="<div class='item-text-l'>". "Products" ."</div>\n";
            $bhtml1 .="<div class='item-quantity-r'>". "Amount" ."</div>\n";
            $bhtml1 .="<div class='item-notes-r'>". "Notes" ."</div>\n";
            $val = explode(",",$axvalue[1]);
            asort($val);
            foreach($val as $key=>$value)
            { 
        
                //echo $storekey[0].$key;
                $storekey = explode("+",$value);	
                //echo $storekey[0]."<br />";	 
                $bhtml1 .="<div class='product_print'><div class='product-left'><input type='checkbox' class='check' id='qty-".preg_replace("/[^A-Za-z0-9]/","", $storekey[0].$key)."' name='products[]' value='".$storekey[0].$key."'  />&nbsp;&nbsp;<input type='hidden' name='productsname[".$storekey[0]."]' value='". $storekey[0]."'  /><input type='hidden' name='storepoint[".$storekey[0].$key."]' value='$storekey[1]'  />".$storekey[0]."<br />"."</div>";
                //$html1 .= "<div class='product-right'></div>\n";
                $bhtml1 .= "<div class='product-quantity-right'>
				
				<select class='qty-".preg_replace("/[^A-Za-z0-9]/", "", $storekey[0].$key)." uncheck' name='quantity[".$storekey[0].$key."]' id='quanty'>
					".$qty_options."
				</select>
				</div>"; 
                //$html1 .= "<div class='product-right'></div>\n";
                $bhtml1 .= "<div class='product-notes'><input type='text' id='notes' class='notes-".preg_replace("/[^A-Za-z0-9]/", "", $storekey[0].$key)." uncheck' name='notes[".$storekey[0].$key."]' size='2'/></div></div>\n"; 
             
            }
            $bhtml1 .="<br clear='all' />\n";
			$html1 .= do_shortcode('[accordion title="'.$axvalue[0].'"] '.$bhtml1.' [/accordion]');
        }
        
        //$html1 .= do_shortcode('[/accordions]');
        //$box = $_POST['select']; 
        $html1 .= "<br />";	
        $html1 .="<div class='botom-content'>";
        $html1 .="<div class='left'>";
        $html1 .="When Complete, Click The 'Create Shopping List ' Button At The Right To Create Your Personalized list.";
        $html1 .="</div>";
        $html1 .="<div class='right'>";
        $html1 .= "<input type='submit' class='btn-success' name='submit' value='Create Shoping List' />";
        $html1 .="</div>";
        $html1 .="</div>";
        $html1 .="<a href='#' class='back-to-top'>Back to Top</a>";
        $html1 .= "</form>";
        echo $html1;	
        ?>
        
        <script>
        $( document ).ready(function(){
            $('.check').on("click",function(){		
                var select = this.id;
                var class2 = '.'+select;
                 if (this.checked) {
                    var back = $(class2).val();
                    if(back != '')
                    {					
                        $(class2).css({"border":"solid #999999"});
                        //$(class2).removeClass("check");
                    }
                    else{
                        $(class2).css({"border":"solid #FF0000"});
                        $(this).parent().parent().find('input[type=text]').focus();
        
                                    
                    }
                }else if(!$(this).is(":checked")){
                    $(this).parent().parent().find('input[type=text]').val("").removeAttr("style");
                }else{
                    $(class2).css({"border":""});
        
        
                }
            }); 
            $(".uncheck").blur(function(){
                var back = $(this).val();
                if(back != '')
                {					
                    //$(this).css({"border":"solid #999999"});	
                    $(this).removeAttr("style");	
                
                }	
                
            });
            $("#shopinglist").on("submit",function(e){
        
                if($('.product_print input[type=checkbox]:checked').length == 0){
                        alert("Please Select At Least One Item");
                    $('html, body').animate({scrollTop: 0}, duration);
                    e.preventDefault();
                    return false;	
                 }
        
                $('.product_print input[type=checkbox]').each(function(){
                    var text = $(this).parent().parent().find('input[type=text]').val();
                    if(this.checked && text == '' ){
                        //$(this).parent().parent().find('input[type=text]').focus();
                        //alert("Please Fill Amount");
                        //e.preventDefault();
                        //return false;
                    }
                });
        
        
            });
        
                $(".uncheck").on("keyup",function(){
                    $('.product_print input[type=checkbox]').each(function(){
                        var text = $(this).parent().parent().find('input[type=text]').val();
                        if(text != '' && !$(this).is(":checked") ){
                            $(this).attr('checked','checked');	
                         }
                    });
        
                });
        
        
        
            /////// top button ////////
            var offset = 220;
            var duration = 500;
            jQuery(window).scroll(function() {
                if (jQuery(this).scrollTop() > offset) {
                    jQuery('.back-to-top').fadeIn(duration);
                } else {
                    jQuery('.back-to-top').fadeOut(duration);
                }
            });
            
            jQuery('.back-to-top').click(function(event) {
                event.preventDefault();
                jQuery('html, body').animate({scrollTop: 0}, duration);
                return false;
            })
            /////// end of top button ////////
        
        }); 
        
        
        </script>
        </div>
        <!--=========================/seven-container====================================-->

    </div> 
   </div>
  </div>
</div>
</div>
<?php get_footer(); ?>
