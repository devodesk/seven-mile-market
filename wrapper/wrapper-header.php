<?php /* Wrapper Name: Header */ ?>
<?php global $variablesArray; ?>
<style type="text/css">
	body, p {
		color: <?php echo $variablesArray['textColor'];?>;
	}
</style>
<div class="row top-header">
  <div class="span12" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="header-sidebar">
    
  </div>
</div>
<div class="row">
  <div class="span12 header-right" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="header-sidebar-2">
    <div class="row-fluid">
    	<div class="span4 sabbat-time">
        	<?php dynamic_sidebar("header-sidebar"); ?>
        </div>
        <div class="span3 header-left" data-motopress-type="static" data-motopress-static-file="static/static-logo.php">
          <?php get_template_part("static/static-logo"); ?>
        </div>
    	<div class="span5 header-info">
      		<?php dynamic_sidebar("header-sidebar-2"); ?>
            CLOSED SHABBOS <a href="<?php echo get_field( "header_holiday_hours_popup", '203' );?>" title="Holidays" style="color: #d05f3d;"><i>For holiday hours click here</i></a>
            
        </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-nav.php">
    <?php get_template_part("static/static-nav"); ?>
  </div>
</div>
