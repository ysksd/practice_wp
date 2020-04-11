<section class="recentArchives">
    <h1 class="type-C">月別アーカイブ</h1>
    <ul class="archives">
        <?php
        $args = array(
            'type' => 'monthly',
            'show_post_count' => 'true',
        );
        wp_get_archives($args);
        ?>
    </ul><!-- /.archives -->
</section><!-- /.recentArchives -->