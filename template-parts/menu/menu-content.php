<?php
$menuLocations = get_nav_menu_locations();

$menuID = $menuLocations['primary-menu'];

$primaryNav = wp_get_nav_menu_items($menuID);
$menus = [];
//var_dump($primaryNav);
$menus = get_menu_array_nav_item($primaryNav);
?>
<ul class="navbar-nav">
<li class="menu-item-has-children page_item_has_children">
        <a href="<?php echo home_url('search-job'); ?>">دسته بندی</a>

        <ul class="sub-menu">
            <?php
            $args = array(
                'post_type' => 'job-cat'
            );
            $the_query1 = new WP_Query($args);
            ?>
            <?php
            while ($the_query1->have_posts()) :
                $the_query1->the_post();
                $selected = "";
            ?>
                <li class="nav-item">
                    <a href="<?php echo home_url('search-job?cat_id=' . get_the_ID()); ?>"><?php echo get_the_title(); ?></a>
                </li>
            <?php
            endwhile;
            wp_reset_query();
            ?>
        </ul>
    </li>
    <?php
    foreach ($menus[0] as $navItem) {
        custom_generate_menu_li($navItem, $menus);
    }
    ?>
</ul>