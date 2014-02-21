<?php
/*
*
* Admin page
*
*/


    if($_POST['chnu_hidden'] == 'Y') {
        //Form data sent
		
		$chnu_color = $_POST['chnu_color'];
        update_option('chnu_color', $chnu_color);
		
		$chun_imgurl1 = $_POST['chun_imgurl1'];
        update_option('chun_imgurl1', $chun_imgurl1);
		
		$chun_imgurl2 = $_POST['chun_imgurl2'];
        update_option('chun_imgurl2', $chun_imgurl2);
		
		$chun_imgurl3 = $_POST['chun_imgurl3'];
        update_option('chun_imgurl3', $chun_imgurl3);
		
		$chun_donut1 = $_POST['chun_donut1'];
        update_option('chun_donut1', $chun_donut1);
		
		$chun_donut2 = $_POST['chun_donut2'];
        update_option('chun_donut2', $chun_donut2);
		
		$chun_donut3 = $_POST['chun_donut3'];
        update_option('chun_donut3', $chun_donut3);
		
		
		
		$chun_countvalue1 = $_POST['chun_countvalue1'];
        update_option('chun_countvalue1', $chun_countvalue1);
		
		$chun_counttitle1 = $_POST['chun_counttitle1'];
        update_option('chun_counttitle1', $chun_counttitle1);
		
		$chun_countvalue2 = $_POST['chun_countvalue2'];
        update_option('chun_countvalue2', $chun_countvalue2);
		
		$chun_counttitle2 = $_POST['chun_counttitle2'];
        update_option('chun_counttitle2', $chun_counttitle2);
		
		$chun_countvalue3 = $_POST['chun_countvalue3'];
        update_option('chun_countvalue3', $chun_countvalue3);
		
		$chun_counttitle3 = $_POST['chun_counttitle3'];
        update_option('chun_counttitle3', $chun_counttitle3);
		
		$chun_countvalue4 = $_POST['chun_countvalue4'];
        update_option('chun_countvalue4', $chun_countvalue4);
		
		$chun_counttitle4 = $_POST['chun_counttitle4'];
        update_option('chun_counttitle4', $chun_counttitle4);
         
        
        ?>
        <div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>
        <?php
    } else {
        //Normal page display
		
		$chnu_color = get_option('chnu_color');
		
		$chun_imgurl1 = get_option('chun_imgurl1');
		
		$chun_imgurl2 = get_option('chun_imgurl2');
		
		$chun_imgurl3 = get_option('chun_imgurl3');
		
		$chun_donut1 = get_option('chun_donut1');
		
		$chun_donut2 = get_option('chun_donut2');
		
		$chun_donut3 = get_option('chun_donut3');
		
		$chun_countvalue1 = get_option('chun_countvalue1');
		
		$chun_counttitle1 = get_option('chun_counttitle1');
		
		$chun_countvalue2 = get_option('chun_countvalue2');
		
		$chun_counttitle2 = get_option('chun_counttitle2');
		
		$chun_countvalue3 = get_option('chun_countvalue3');
		
		$chun_counttitle3 = get_option('chun_counttitle3');
		
		$chun_countvalue4 = get_option('chun_countvalue4');
		
		$chun_counttitle4 = get_option('chun_counttitle4');
		
		
    }


?>

<div class="wrap">
 <?php echo "<h2>" . __( 'Charts js and Numeric Counter Admin Panel', 'chnu_admin' ) . "</h2>"; ?>
 
  <form name="chnu_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
 <input type="hidden" name="chnu_hidden" value="Y">
 <?php echo "<h4>" . __( 'Donut Chart', 'chnu_admin' ) . "</h4>"; ?>
 <table>
 <tbody>
<tr><td><?php _e("Color: " ); ?><!--<div id="colorSelector"><div style="background-color: <?php echo $chnu_color; ?>"></div></div>--></td><td><input type="text" name="chnu_color" value="<?php echo $chnu_color; ?>" size="20"><?php _e("Hex colors" ); ?></p>
<tr><td><?php _e("Background image url for Donut 1: " ); ?></td><td><input type="text" name="chun_imgurl1" value="<?php echo $chun_imgurl1; ?>" size="20">&nbsp;<?php _e("Image URL" ); ?></td></tr>
<tr><td><?php _e("Donut 1 Value: " ); ?></td><td><input type="text" name="chun_donut1" value="<?php echo $chun_donut1; ?>" size="20">&nbsp;<?php _e("Value in Numbers between 1 - 100" ); ?></td></tr>
<tr><td><?php _e("Background image url for Donut 2: " ); ?></td><td><input type="text" name="chun_imgurl2" value="<?php echo $chun_imgurl2; ?>" size="20">&nbsp;<?php _e("Image URL" ); ?></p>
<tr><td><?php _e("Donut 2 Value: " ); ?></td><td><input type="text" name="chun_donut2" value="<?php echo $chun_donut2; ?>" size="20">&nbsp;<?php _e("Value in Numbers between 1 - 100" ); ?></td></tr>
<tr><td><?php _e("Background image url for Donut 3: " ); ?></td><td><input type="text" name="chun_imgurl3" value="<?php echo $chun_imgurl3; ?>" size="20">&nbsp;<?php _e("Image URL" ); ?></p>
<tr><td><?php _e("Donut 3 Value: " ); ?></td><td><input type="text" name="chun_donut3" value="<?php echo $chun_donut3; ?>" size="20">&nbsp;<?php _e("Value in Numbers between 1 - 100" ); ?></td></tr>
 
  <tr><td colspan="2"><hr /></td></tr>
 <tr><td colspan="2"><?php echo "<h4>" . __( 'Numeric Counter', 'chnu_admin' ) . "</h4>"; ?></td>
<tr><td><?php _e("Counter Value 1: " ); ?></td><td><input type="text" name="chun_countvalue1" id="countvalue1" value="<?php echo $chun_countvalue1; ?>" size="20">&nbsp;<?php _e("Numeric Number" ); ?></td></tr>
<tr><td><?php _e("Counter Title 1: " ); ?></td><td><input type="text" name="chun_counttitle1" id="counttitle1" value="<?php echo $chun_counttitle1; ?>" size="20">&nbsp;<?php _e("Title" ); ?></td></tr>
<tr><td><?php _e("Counter Value 2: " ); ?></td><td><input type="text" name="chun_countvalue2" id="countvalue2" value="<?php echo $chun_countvalue2; ?>" size="20">&nbsp;<?php _e("Numeric Number" ); ?></td></tr>
<tr><td><?php _e("Counter Title 2: " ); ?></td><td><input type="text" name="chun_counttitle2" id="counttitle2" value="<?php echo $chun_counttitle2; ?>" size="20">&nbsp;<?php _e("Title" ); ?></td></tr>
<tr><td><?php _e("Counter Value 3: " ); ?></td><td><input type="text" name="chun_countvalue3" id="countvalue3" value="<?php echo $chun_countvalue3; ?>" size="20">&nbsp;<?php _e("Numeric Number" ); ?></td></tr>
<tr><td><?php _e("Counter Title 3: " ); ?></td><td><input type="text" name="chun_counttitle3" id="counttitle3" value="<?php echo $chun_counttitle3; ?>" size="20">&nbsp;<?php _e("Title" ); ?></td></tr>
<tr><td><?php _e("Counter Value 4: " ); ?></td><td><input type="text" name="chun_countvalue4" id="countvalue4" value="<?php echo $chun_countvalue4; ?>" size="20">&nbsp;<?php _e("Numeric Number" ); ?></td></tr>
<tr><td><?php _e("Counter Title 4: " ); ?></td><td><input type="text" name="chun_counttitle4" id="counttitle4" value="<?php echo $chun_counttitle4; ?>" size="20">&nbsp;<?php _e("Title" ); ?></td></tr>
  
 <tr><td colspan="2">
 <p class="submit">
 <input type="submit" name="Submit" value="<?php _e('Update Options', 'chnu_admin' ) ?>" />
 </p></td>
 </tbody>
 </table>
 </form>
 <p><em>
 Note: The donut chart displays 3 donut charts. </em</p>
 <p><em>Color: Add the color of the donut </em></p>
 <p><em>Background image url: add the image url that needs to be shown inside the donut </em></p>
 <p><em>Donut Value: value between 1-100 </em></p>
 
 
 <p><em>Counter Value: Enter the counter value to be displayed</em></p>
 <p><em>Counter Title: Enter the title to be displayed</em></p>
   

 
 <link rel="stylesheet" href="http://ip-208-109-186-112.ip.secureserver.net/rachana/testnew/wp-content/plugins/donut-numeric-graps/colorpicker/css/colorpicker.css" type="text/css" />
    <link rel="stylesheet" media="screen" type="text/css" href="http://ip-208-109-186-112.ip.secureserver.net/rachana/testnew/wp-content/plugins/donut-numeric-graps/colorpicker/css/layout.css" />
    <script type="text/javascript" src="http://ip-208-109-186-112.ip.secureserver.net/rachana/testnew/wp-content/plugins/donut-numeric-graps/colorpicker/js/jquery.js"></script>
	<script type="text/javascript" src="http://ip-208-109-186-112.ip.secureserver.net/rachana/testnew/wp-content/plugins/donut-numeric-graps/colorpicker/js/colorpicker.js"></script>
    <script type="text/javascript" src="http://ip-208-109-186-112.ip.secureserver.net/rachana/testnew/wp-content/plugins/donut-numeric-graps/colorpicker/js/eye.js"></script>
    <script type="text/javascript" src="http://ip-208-109-186-112.ip.secureserver.net/rachana/testnew/wp-content/plugins/donut-numeric-graps/colorpicker/js/utils.js"></script>
    <script type="text/javascript" src="http://ip-208-109-186-112.ip.secureserver.net/rachana/testnew/wp-content/plugins/donut-numeric-graps/colorpicker/js/layout.js?ver=1.0.2"></script>
 <p></p>
</div>

<?php

?>