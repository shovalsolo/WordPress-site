<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

 /**
  * Create custom Taxonomy(ies)
  */


// Add Custom Taxonomy for Custom Post Types

    function create_custom_taxonomies($value){
    	$taxon = $value;
        $labels = array (
                'name'              => $taxon,
                'singular_name'     => $taxon,
                'search_items'      => "Search $taxon",
                'all_items'         => "All $taxon",
                'parent_item'       => "Parent $taxon",
                'parent_item_colon' => "Parent $taxon:",
                'edit_item'         => "Edit $taxon",
                'update_item'       => "Update $taxon",
                'add_new _item'     => "Add New $taxon",
                'new_item_name'     => "New Type Name",
                'menu_name'         => $taxon,
        );
        $args = array (
                'labels'            => $labels,
                'hierarchical'      => true,
                'show_ui'           => true,
                'show_admin_column' => true,
                'query_var'         => true,
                'rewrite'           => array('slug' => $taxon)
        );
        return $args;
    }





 
 ?>