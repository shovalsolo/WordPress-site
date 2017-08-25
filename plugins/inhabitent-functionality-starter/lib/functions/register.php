<?php

/**
 * Register
 *
 * @link  http://codex.wordpress.org/Function_Reference/register
 */
  // * Register custom post types and Taxonomy(ies)
  

add_action('init', 'register',0);

//A func that called from action and sending array to get_post_args and create_custom_taxonomies
function register(){
	$names = array("Adventures" =>"","Products" =>"Activity");

		foreach ($names as $key => $value ) {

			$args = get_post_args($key);
			register_post_type(strtolower($key),$args);

			if ($value=="") {
				// echo "<br>";
				//echo "no taxon no string";
				//echo "<br>";
			}
			elseif(is_array($value)){
				foreach ($value as $val) {
					// echo "<br>";
					// echo "xxx in the loop   $x";
					// echo "<br>";
					// echo "value in the loop   $value";
					// echo "<br>";
					$args = create_custom_taxonomies($val);
					register_taxonomy(strtolower($val),array(strtolower($key)),$args);
	
				}
			}
			else{
				$args = create_custom_taxonomies($value);
				
				register_taxonomy(strtolower($value),array(strtolower($key)),$args);
				
			}	
		}
}


?>