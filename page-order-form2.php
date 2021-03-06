<?php

/**

* Template Name: order form222

*/


 
get_header(); ?>

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
          <div data-motopress-loop-file="loop/loop-page.php" data-motopress-type="loop" id="content" class="span9 right order-contents">
            <div class="post-2297 page type-page status-publish hentry" id="post-2297"> 
              
              <!--Custom icon-->
              <?php
				// Start the Loop.
				if ( have_posts() ) : the_post();
 					//the_content();
				endif;
			?>
              <div class="info-page">
                <div class="page-title">
                  <h1>3 Convenient Ways to Order</h1>
                </div>
              </div>
              <div class="clear"></div>
              <div class="row-fluid order-way">
                <div class="span12 order-way-details">
                  <div class="banner-wrap" style="width: 250px;">
                    <h5> Appetizing </h5>
                    <div style="width: 50%; float: left;">
                    	<h5>Order Times: </h5>
                        <strong>Monday-Thursday</strong>
                        Phone Order- By 1 PM for next day delivery
                        Email/Online Order- By 7 AMfor same day delivery
                        <strong>Friday</strong>
                        Email/Online orders must be in before 6 PM Thursday night and
                        Friday phone orders must be in by 1 PM on Thursday
                    </div>
                    <div style="width: 50%; float: left;">
                    	<h5>Delivery Times: </h5>
                        <strong>Monday-Thursday</strong>
                        11 PM to 6 PM and Friday: 9-12
                        (No same day delivery for Friday)
                        **Orders received after these times will be delivered the next store day.**
                        -$5 delivery fee
                        -Only Credit Card for payment
                        -No sales on items
                    </div>
                  </div>
                  <div class="span3 "><img src="http://sevenmilemarket.com/wp-content/themes/theme51041/images/icon-online.png" alt="" /></div>
                  <div class="span9 order-way-text"> Simply fill out the form below and click Submit. </div>
                </div>
                <div class="span12 order-way-details">
                  <div class="span3 "><img src="http://sevenmilemarket.com/wp-content/themes/theme51041/images/icon-email.png" alt="" /></div>
                  <div class="span7 order-way-text">Click the button below, fill out the forms in Microsoft Word, save the file and email it back to us at <a style="color: #d05f3d;" href="mailto:order@sevenmilemarket.com">order@sevenmilemarket.com</a> Or just email us with a list of your products. Please be as specific as possible. Include the item, quantity, brand (if you want a substitute, let us know if you want similar, cheapest, etc), hechsher, Cholov Yisroel, yoshon; pas yisroel; other specifications or special instructions.</div>
                  <div class="span2"><a class="btn-download" href="http://sevenmilemarket.com/wp-content/uploads/2015/03/1-ORDER-FORM.xlsx"><img src="http://sevenmilemarket.com/wp-content/themes/theme51041/images/btn-download.jpg" alt="" /></a></div>
                </div>
                <div class="span12 order-way-details">
                  <div class="span3 "><img src="http://sevenmilemarket.com/wp-content/themes/theme51041/images/icon-phone.png" alt="" /></div>
                  <div class="span9 order-way-text">Call 410-653-2000 ext. 773 Monday-Thursday between 9:30 am-1:00 pm. If you reach our voicemail please leave a message with your name and phone number, and we will call you back at our earliest convenience to receive your order.
                    <div style="color: #d05f3d; font-weight: bold;">PLEASE DO NOT LEAVE YOUR ORDER AS A MESSAGE.</div>
                  </div>
                </div>
              </div>
              <!--End of Custome icon-->
              
              <h2>ONLINE ORDERING FORM</h2>
              <p> Thank you for choosing Seven Mile Market for your grocery delivery service. Please fill out the form below with as much detail as possible. Please click on “<a href="#" style="text-decoration:underline;">Read More</a>” for more information.  If you have any questions, do not hesitate to call or email! </p>
              <div class="container-fluid" style="padding:0;">
                <div class="row-fluid">
                  <div class="span6">
                    <h3 class="order-form-heading">Delivery Information</h3>
                    <table style="letter-spacing: -1px; font-weight: 500;">
                      <tr>
                        <td>Name
                          <input type="text" name="orderform['name']" style="margin-left: 4px; width: 364px;"></td>
                      </tr>
                      <tr>
                        <td>Street Address
                          <input type="text" name="orderform['streetaddress']" placeholder="" style="width: 150px; margin-left: 3px;">
                          Apt./Flr./Suite
                          <input type="text" name="orderform['apt./flr./suite']" style="width: 63px;">
                      </tr>
                      <tr>
                        <td>City
                          <input type="text" name="orderform['city']" style="width: 130px;">
                          State
                          <input type="text" name="orderform['state']" style="width: 61px;">
                          zip
                          <input type="text" name="orderform['zip']" style="width: 106px;">
                      </tr>
                      <tr>
                        <td>Cell Phone
                          <input type="text" name="orderform['cellphone']" style="width: 130px;">
                          Home Phone
                          <input type="text" name="orderform['homephone']" style="width: 118px;"></td>
                      </tr>
                    </table>
                  </div>
                  <div class="span6">
                    <h3 class="order-form-heading">Billing Information</h3>
                    <table style="letter-spacing: -1px; font-weight: 500;">
                      <tr>
                        <td>Full Name of the Card
                          <input type="text" name="orderform['fullcardname']" style="margin-left: 4px; width: 274px;"></td>
                      </tr>
                      <tr>
                        <td>Type of card
                          <input type="radio" name="orderform['typeofcard']" value="female">
                          Visa
                          <input type="radio" name="orderform['visacard']" value="visa" checked>
                          MC
                          <input type="radio" name="orderform['mccard']" value="ms">
                          AmEx
                          <input type="radio" name="orderform['amexcard']" value="amex">
                          Discover
                          <input type="radio" name="orderform['discovercard']" value="amex">
                          Other
                          <input type="text" style="width: 78px; margin-left: 1px;" name="orderform['othercard']"></td>
                      </tr>
                      <tr>
                        <td>CC# Number
                          <input type="text" name="orderform['cc#number']" style="margin-left: 3px; width: 255px;"></td>
                      </tr>
                      <tr>
                        <td>Expiration Date
                          <select name="orderform['expirationdate']" style="margin-left: 3px; width: 60px;">
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
                          <select name="orderform['select']" style="margin-left: 2px; width: 60px;">
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
                          <input type="text" name="orderform['securitycode']" style="margin-left: 4px; width: 96px;"></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="repeated-order-form-fields">
                <h3 class="order-form-heading">My Order</h3>
                <table>
                  <tr class="repeatingSection">
                    <td>Item
                      <input type="text" name="orderform['item']" style="width: 160px;"></td>
                    <td>Brand
                      <input type="radio" name="orderform['item-brand']" value="Name Brand">
                      Name Brand <br>
                      <input type="radio" name="orderform['item-brand']" value="Other" checked>
                      Other
                      <input  style="width: 62px; display:none" type="text" name="orderform['brand']"></td>
                    <td>Size
                      <input type="radio" name="orderform['item-size']" value="Not sure">
                      Not sure <br>
                      <input type="radio" name="orderform['item-size']" value="Other" checked>
                      Other
                      <input style="width: 45px; display:none" type="text" name="orderform['size']"></td>
                    <td>Qty
                      <input type="number" name="orderform['qty']" style="width: 48px;"></td>
                    <td>Description
                      <textarea id="description" rows="10" cols="10" name="orderform['description']" placeholder="(optional: Kosher Certification,Cholov Yisroel, etc.)" style="height: 30px; width: 253px;"></textarea></td>
                  </tr>
                </table>
                <div style="text-align:right;"><a href="#" class="btn addNewRow">Add another item (+)</a></div>
              </div>
              <h3 class="order-form-heading">Delivery Options</h3>
              <table>
                <tr>
                  <td colspan="2">Will you be home during delivery hours?
                    <input type="radio" name="orderform['radio-827']" value="Yes">
                    Yes
                    <input type="radio" name="orderform['radio-827']" value="No">
                    No </td>
                </tr>
                <tr>
                  <td colspan="2">Delivery Time and Date <a style="text-decoration:underline;" href="" data-toggle="modal" data-target="#availableTimes">(click for available times)</a> <br>
                    <input class="timepicker" type="text" name="orderform['timepicker']"></td>
                </tr>
                <tr>
                  <td colspan="2">Please specify any additional information (e.g. elevator delivery, dog on premises, secure complex, etc):
                    <input type="text" name="orderform['additionalinformation']" style="width: 100%;"></td>
                </tr>
                <tr>
                  <td>Leave at Door
                    <input type="radio" value="Yes" name="orderform['radio-827']" style="margin-left: 3px;">
                    Yes
                    <input type="radio" name="orderform['radio-827']" value="No">
                    No</td>
                </tr>
                <tr>
                  <td colspan="2"><input type="checkbox" name="orderform['checkbox']" style="margin-right: 4px;">
                    If no one is available to accept the order. I understand that Seven Mile Market is not responsible for any damage or spoilage that may occur after the order is delivered. I understand that all perishable items are not returnable unless it was an item that I did not order.</td>
                </tr>
                <tr>
                  <td colspan="2">specific instructions:
                    <input type="text" name="orderform['specificinstruction']" placeholder="Time,date,etc." style="margin-left: 3px; width: 70%;"></td>
                </tr>
                <tr>
                  <td><p>
                      <label for=""></label>
                      <input type="checkbox" name="orderform['checkbox']" style="margin-right: 4px;">
                      By clicking submit, you authorize SEVEN MILE MARKET to charge your card for deliveries. Your credit card will be charged prior to all deliveries. Seven Mile Market has the authority to charge your card any additional fees that may ensue. If you are not present to receive your order and you did not select a Drop Delivery Options we will charge you a $10 restocking fee and you will need to resubmit your order. 
                      
                      I have read and agree to the <a href="#" style="text-decoration: underline;">general information and terms and conditions</a> </p></td>
                </tr>
                <tr>
                  <td style="text-align: center;"><input type="submit" name="orderform['submit']" value="submit"></td>
                  <td>&nbsp;</td>
                </tr>
              </table>
              
              <!--.pagination--> 
              
            </div>
            
            <!--#post--> 
            
          </div>
          <div class="span3 sidebar" id="sidebar" data-motopress-type="static-sidebar"  data-motopress-sidebar-file="sidebar.php">
            <?php get_sidebar(); ?>
          </div>
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
              
$('.addNewRow').click(function(e){
	e.preventDefault();
	var lastRepeatingGroup = $('.repeatingSection').last();
	var cloned = lastRepeatingGroup.clone(true)  
	cloned.insertAfter(lastRepeatingGroup);
	resetAttributeNames(cloned);
});

$(function() {
	$( ".timepicker" ).datetimepicker();
});	
</script>
<style type="text/css">
.online-ordering-form input[type='checkbox'],
.online-ordering-form input[type='radio'] {
	margin-top: 0;
}
</style>

<!-- Modal -->
<div class="modal fade" id="availableTimes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" name="orderform['city']" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
