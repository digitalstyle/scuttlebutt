<?php
/* Plugin Name: Scuttlebutt Social Tabbed Widget
Plugin URI: http://www.getdigitalstyle.com
Description: Tabbed widget to display Scuttlebutt social feeds.
Version: 1.0
Author: Digital Style
Author URI: http://www.getdigitalstyle.com
License: GPL2
*/

// creating a widget
class ScuttlebuttSocialWidget extends WP_Widget {

function ScuttlebuttSocialWidget() {
		$widget_ops = array(
		'classname' => 'ScuttlebuttSocialWidget',
		'description' => 'Scuttlebutt Social Tabbed Widget'
);
$this->WP_Widget(
		'ScuttlebuttSocialWidget',
		'Scuttlebutt Social Tabbed Widget',
		$widget_ops
);
}
function widget($args, $instance) { // widget sidebar output

function wpb_tabber() { 

// Now we enqueue our stylesheet and jQuery script

wp_register_style('ds-tabber-style', plugins_url('ds-tabber-style.css', __FILE__));
wp_register_script('ds-tabber-widget-js', plugins_url('ds-tabber.js', __FILE__), array('jquery'));
wp_enqueue_style('ds-tabber-style');
wp_enqueue_script('ds-tabber-widget-js');

// Creating tabs you will be adding you own code inside each tab
?>

<ul class="ds_tabs">
<li class="active"><a href="#tab1">Facebook</a></li>
<li><a href="#tab2">Twitter</a></li>
<li><a href="#tab3">Subscribe</a></li>
</ul>

<div class="ds_tab_container">

<div id="tab1" class="ds_tab_content">

<div class="fb-like-box"  data-href="https://www.facebook.com/sailingscuttlebutt" data-height="420" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
</div>
<div id="tab2" class="ds_tab_content" style="display:none;">
<a class="twitter-timeline" data-border-color="#fff" href="https://twitter.com/scuttbutt" data-widget-id="301188494238302208">Tweets by @scuttbutt</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

<div id="tab3" class="ds_tab_content" style="display:none;">

<div class="scuttle_subscribe">

<p>Get your daily dose of Scuttlebutt Sailing News delivered right to your inbox!</p>

<form action="http://email.sailingscuttlebutt.com/t/j/s/jdjiil/" method="post">
    <p>
        <label for="fieldName">Name</label><br />
        <input id="fieldName" name="cm-name" type="text" />
    </p>
    <p>
        <label for="fieldEmail">Email</label><br />
        <input id="fieldEmail" name="cm-jdjiil-jdjiil" type="email" required />
    </p>
    <p>
        <button class="scuttle_btn" type="submit">Subscribe</button>
    </p>
</form>

<a href="/about-scuttlebutt/">What is the Scuttlebutt e-Newsletter?</a>
</div>

</div>

</div>

<div class="ds_tab-clear"></div>

<?php

}

extract($args, EXTR_SKIP);
// pre-widget code from theme
echo $before_widget; 
$tabs = wpb_tabber(); 
// output tabs HTML
echo $tabs; 
// post-widget code from theme
echo $after_widget; 
}
}

// registering and loading widget
add_action(
'widgets_init',
create_function('','return register_widget("ScuttlebuttSocialWidget");')
);
?>
