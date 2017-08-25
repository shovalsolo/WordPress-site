<?php //Calling the header to get the menu
		get_header(); 

//echo "This is from front-page";
//echo "<br>";
?>

<?php echo'
			<section class="banner" style="background: linear-gradient(rgba(0,0,0,0.40), rgba(0,0,0,0.40)), url('.get_banner().'); background-size: cover;height: 80vh;">
			   <div class="overlap-logo flex flex-jus-cen flex-ali-cen">
				<img src="http://localhost/redstarter/wp-content/themes/redstarter-master/assets/images/logos/inhabitent-logo-full.svg">
				</div>
			</section>'; ?>


<!-- Shop Stuff -->

<div class="shop text-ali-c">
<h2 class="">Shop Stuff</h2>

<?php
$populateTaxonomies =  get_terms(array(
        "taxonomy" => "activity",
        'hide-empty'=> false,
    ));
?>
	<div class="tax_box flex ">
<?php
 foreach($populateTaxonomies as $taxon){
?>	
		<div class="tax_cube flex flex-dir-col flex-ali-cen border-color-top border-all ">
	        <div class="img_div ">
	        	<img class="tax_img" src="<?php echo bloginfo('template_directory').'/assets/images/product-type-icons/'.$taxon->slug.'.svg'; ?>" />
	        </div>

	        <div class="sec_div ">
	        	<p class="tax_des"><?php echo $taxon->description;?> </p>
	        </div>

	        <div class="btn_div ">
	        <a href='<?php echo get_term_link($taxon->slug, "activity"); ?>'>
                        <button class="taxon-btn bgc-green wcolor text-shadow-non box-shadow-non"><?php echo $taxon->name; ?></button>
                    </a>
	        </div>
		</div>
        <?php } ?>
        </div>
</div>


<!-- Journal -->

<!--  -->
<h2 class="text-ali-c">Journal</h2>
<div class="flex flex-jus-spa-aro ">
<?php
$journal = new WP_Query(array(

	"post_type"=> "post",
	"posts_per_page" => 3,
	));

while ($journal->have_posts()):$journal->the_post(); 
	get_template_part("template-parts/content",get_post_type());

endwhile;

?>
</div>


<!-- Adventures -->


<h2 class="text-ali-c">Adventures</h2>

<?php

$adventures = new WP_Query(array(

	"post_type"=> "adventures",
	"posts_per_page" => 4,
	)); ?>

<!-- flex flex-jus-spa-aro margin-bot -->

<!-- Going to -->

<div class="grid adv-grid ">

	<?php
	while ($adventures->have_posts()):$adventures->the_post(); 
		get_template_part("template-parts/content",get_post_type());

	endwhile;
	?>
	<a href="<?php echo get_post_type_archive_link( 'adventures' ); ?>">
		<button class="adv-more-btn  bgc-green wcolor text-shadow-non box-shadow-non">Read More</button>
	</a>
	
</div>




<div class="foot">
<?php

get_footer();

?>
</div>