<?php
    /*
    Plugin Name: Donut Charts and Numeric Counter 
    Description: Plugin for displaying Charts using Charts.js and numeric Counter using jscounter.
    Author: Rachana Texeira
    Version: 1.0
    */
function charts_js_numeric_admin() {
    include('charts-js-numeric-admin.php');
}
 
function charts_js_numeric_admin_actions() {
 add_options_page("Donut Chart and Numeric Counter", "Donut Chart and Numeric Counter", 1, "charts-numeric-js.php", "charts_js_numeric_admin");
}
 
add_action('admin_menu', 'charts_js_numeric_admin_actions');

function chnu_scripts() {
	//wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	wp_enqueue_script( 'chartsjs_js', plugins_url() . '/donut-numeric-graps/charts_js/Chart.js' );
	wp_enqueue_script( 'number_counter_jquery', plugins_url() . '/donut-numeric-graps/numeric_counter/jquery.js' );
	wp_enqueue_script( 'number_counter_js', plugins_url() . '/donut-numeric-graps/numeric_counter/jscounter.js' );
	
}

add_action( 'wp_enqueue_scripts', 'chnu_scripts' );

function chnu_scripts_code() {


?>
<script type="text/javascript">
window.onload = function () {
      setValue1();
}

</script>

<script type="text/javascript">
/* Donut Chart Script */
var donutvalue1 = <?php echo get_option('chun_donut1'); ?>;
var donutvalue2 = <?php echo get_option('chun_donut2'); ?>;
var donutvalue3 = <?php echo get_option('chun_donut3'); ?>;
var donutvalue4 = 100 - 80;
var doughnutData = [
				
				{
					value : <?php echo get_option('chun_donut1'); ?>,
					color : "<?php echo get_option('chnu_color'); ?>"
				},
				{
					value : 100 - <?php echo get_option('chun_donut1'); ?>,
					color : "transparent"
				},
							
			];
			
			var doughnutData2 = [
				
				{
					value : <?php echo get_option('chun_donut2'); ?>,
					color : "<?php echo get_option('chnu_color'); ?>"
				},
				{
					value : 100 - <?php echo get_option('chun_donut2'); ?>,
					color : "transparent"
				},
							
			];
			
			var doughnutData3 = [
				
				{
					value : <?php echo get_option('chun_donut3'); ?>,
					color : "<?php echo get_option('chnu_color'); ?>"
				},
				{
					value : 100 - <?php echo get_option('chun_donut3'); ?>,
					color : "transparent"
				},
							
			];
			

	var myDoughnut = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(doughnutData);
	var myDoughnut2 = new Chart(document.getElementById("canvas2").getContext("2d")).Doughnut(doughnutData2);
	var myDoughnut3 = new Chart(document.getElementById("canvas3").getContext("2d")).Doughnut(doughnutData3);

/* JS counter Script */

var counter1 = new JSCounter.NumberCounter("counter_display1",{start:0, pretoken:false,comma:false});
	var counter2 = new JSCounter.NumberCounter("counter_display2",{start:0, pretoken:false,comma:false});
	var counter3 = new JSCounter.NumberCounter("counter_display3",{start:0, pretoken:false,comma:false});
	var counter4 = new JSCounter.NumberCounter("counter_display4",{start:0, pretoken:false,comma:false});
	counter1.render();
	counter2.render();
	counter3.render();
	counter4.render();

	setValue1 = function(){	
		if(isNaN(parseInt(document.getElementById("countvalue1").value))){
			alert("The input value is not a number.");
			return;
		}
		if(isNaN(parseInt(document.getElementById("countvalue2").value))){
			alert("The input value is not a number.");
			return;
		}
		if(isNaN(parseInt(document.getElementById("countvalue3").value))){
			alert("The input value is not a number.");
			return;
		}
		if(isNaN(parseInt(document.getElementById("countvalue4").value))){
			alert("The input value is not a number.");
			return;
		}
		var value1 = parseInt(document.getElementById("countvalue1").value,10);
		var value2 = parseInt(document.getElementById("countvalue2").value,10);
		var value3 = parseInt(document.getElementById("countvalue3").value,10);
		var value4 = parseInt(document.getElementById("countvalue4").value,10);
		counter1.setNumber(value1);
		counter2.setNumber(value2);
		counter3.setNumber(value3);
		counter4.setNumber(value4);

	}

	
	</script>
<?php
}

//add_action( 'wp_enqueue_scripts', 'chnu_scripts_code', false, null, true ); 
add_action('wp_footer', 'chnu_scripts_code');	

function chnu_css_code() {
?>
<style type="text/css">
.charts div.donut {
background: url('<?php echo plugins_url(); ?>/donut-numeric-graps/images/back.png') no-repeat;
}

.charts div.donut #canvas {
background: url('<?php echo get_option('chun_imgurl1'); ?>') no-repeat scroll center center transparent;
}

.charts div.donut #canvas2 {
background: url('<?php echo get_option('chun_imgurl2'); ?>') no-repeat scroll center center transparent;
}

.charts div.donut #canvas3 {
background: url('<?php echo get_option('chun_imgurl3'); ?>') no-repeat scroll center center transparent;
}

/* JS counter css */
.number-counter-title {
padding-top: 15px;
text-align: center;
}
.number_counter {
height: 40px;
padding: 0 95px;
}
</style>

<?php
}

add_action('wp_head', 'chnu_css_code');	

/* Charts JS shortcode */
add_shortcode( 'donutchartsjs', 'charts_js_display' );
add_shortcode( 'numbercounterjs', 'number_counter_display' );

function charts_js_display() {
ob_start();
?>
<div class="cols-wrapper cols-3 charts">
<div class="col animated-element">
<div class="donut"><canvas id="canvas" height="198" width="198"></canvas></div>
</div>
<div class="col animated-element">
<div class="donut"><canvas id="canvas2" height="198" width="198"></canvas></div>
</div>
<div class="col nomargin animated-element">
<div class="donut"><canvas id="canvas3" height="198" width="198"></canvas></div>
</div>
<div class="clear"></div>
</div>

<?php
return ob_get_clean();
}

function number_counter_display() {
ob_start();
?>
<div class="cols-wrapper cols-4">
<div class="col">
<div id="counter_display1" class="number_counter">
<div class="clear"></div>
</div>

<input type="hidden" value="<?php echo get_option('chun_countvalue1'); ?>" id="countvalue1"></input>
<div class="number-counter-title"><?php echo get_option('chun_counttitle1'); ?></div>
</div>
<div class="col">
<div id="counter_display2" class="number_counter">
<div class="clear"></div>
</div>
<input type="hidden" value="<?php echo get_option('chun_countvalue2'); ?>" id="countvalue2"></input>
<div class="number-counter-title"><?php echo get_option('chun_counttitle2'); ?></div>
</div>
<div class="col">
<div id="counter_display3" class="number_counter">
<div class="clear"></div>
</div>
<input type="hidden" value="<?php echo get_option('chun_countvalue3'); ?>" id="countvalue3"></input>
<div class="number-counter-title"><?php echo get_option('chun_counttitle3'); ?></div>
</div>
<div class="col nomargin">
<div id="counter_display4" class="number_counter">
<div class="clear"></div> 
</div>
<input type="hidden" value="<?php echo get_option('chun_countvalue4'); ?>" id="countvalue4"></input>
<div class="number-counter-title"><?php echo get_option('chun_counttitle4'); ?></div>
</div>
<div class="clear"></div>
</div>

<?php
return ob_get_clean();
}
?>