<section class="recentArchives">
    <h1 class="type-C">ベッド一覧</h1>
    <ul class="archives">
        <?php
        $args = array(
            'title_li' => '',
            'show_count' => true,
            'taxonomy' => 'bed',
        );
        wp_list_categories($args);
        ?>
    </ul><!-- /.archives -->
</section><!-- /.recentArchives -->