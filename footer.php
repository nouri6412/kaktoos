<?php
get_template_part('template-parts/footer/footer', 'popup-login');
get_template_part('template-parts/footer/footer', 'cols');
?>
<!-- JAVASCRIPT FILES ========================================= -->
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/combining.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/share.js"></script>
<script>
    <?php
    if (isset($_GET["login"])) {
    ?>
        $('#car-details').modal('show');
    <?php
    }
    ?>
</script>
<?php  
  get_template_part('template-parts/custom-js/custom-js', 'create-job');
?>
</body>

</html>