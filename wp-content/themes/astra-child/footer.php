<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<div class="blue-bg">

    <div class="container">

        <div class="bottom-menu">

            <!-- <a href="#"><img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/countaudit-logo.png"
		alt=""></a> -->



            <ul class="bottom-menu-ul-outer-ul">

                <ul class=" bottom-menu-ul">


                    <?php
$main_menu = wp_get_menu_array('Menu');
foreach ($main_menu as $menu_item) {

$url = $menu_item['url'];
$title = $menu_item['title'];
$class = $menu_item['class'];

$temp_arr=explode(get_site_url(),$url);
$slug=str_replace('/en/','',$temp_arr[1]);
$slug=str_replace('/cn/','',$slug);
$slug=str_replace('/','',$slug);


if(count($menu_item['children']))
{

echo '<li><a class="level-1 parent '.$class.'" href="'.$url.'">'.$title;
?>
                    <img class="arrow"
                        src="<?php echo get_template_directory_uri();?>/assets/images/white-arrow-enter.png" alt="">

                    <?php
echo'</a>';


echo '<ul class="mobile-menu-submenu">';
?>

                    <?php

foreach ($menu_item['children'] as $sub_menu_item) 
{
$sub_url = $sub_menu_item['url'];
$sub_title = $sub_menu_item['title'];

$sub_temp_arr=explode(get_site_url(),$sub_url);
$sub_slug=str_replace('/en/','',$sub_temp_arr[1]);
$sub_slug=str_replace('/cn/','',$sub_slug);
$sub_slug=str_replace('/','',$sub_slug);
echo'<li><a class="'.$sub_slug.'" href="'.$sub_url.'">'.$sub_title.'</a></li>';
}
echo '</ul>';

}
else
{
echo '<li><a class="level-1 '.$slug.' '.$class.'" href="'.$url.'">'.$title.'</a>';

}
echo'</li>';


}



?>



                </ul>


        </div>


    </div>

</div>
<?php astra_content_bottom(); ?>

</div> <!-- ast-container -->

</div><!-- #content -->

<?php astra_content_after(); ?>

<?php astra_footer_before(); ?>

<?php astra_footer(); ?>

<?php astra_footer_after(); ?>

</div><!-- #page -->

<?php astra_body_bottom(); ?>

<?php wp_footer(); ?>

</body>

</html>