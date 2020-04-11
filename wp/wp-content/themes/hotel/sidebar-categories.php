<section class="recentCategories">
    <h1 class="type-C">カテゴリー一覧</h1>
    <ul class="categories">
        <?php
        $args = array(
            'title_li' => '',
            'show_count' => true,
        );
        wp_list_categories($args);
        ?>
    </ul>
</section><!-- /.recentCategories -->