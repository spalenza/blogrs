<div id="sidebar">
    <div id="sidebar_categorias" class="sidebar_cotent">
        <div id="sidebar_categorias_title" class="sidebar_title"><h2>Categorias</h2></div>
        <ul>
            <li>
                <?php
                $args = array(
                    'orderby' => 'name',
                    'order' => 'ASC'
                );
                $categories = get_categories($args);
                foreach ($categories as $category) {
                    if ($category->term_id != 1) {
                        $category_color = $category->description;
                ?>

                        <div class="sidebar_link">
                            <a href="<?php echo get_category_link($category->term_id) ?>">
                        <?php echo $category->name; ?>
                    </a>
                    <p><?php echo $category->count ?></p>
                </div>

                <?php
                    }
                }
                ?>
            </li>
        </ul>
    </div>


    <div id="sidebar_blogroll" class="sidebar_cotent">
        <div id="sidebar_blogroll_title" class="sidebar_title"><h2>Blogroll</h2></div>
        <?php wp_list_bookmarks('category_name=Blogroll&categorize=0&title_li=0&before=<div class="sidebar_link">&after=</div>'); ?>
            </div>

            <div id="sidebar_tag" class="sidebar_cotent">
                <div id="sidebar_tag_title" class="sidebar_title"><h2>Tags</h2></div>
        <?php wp_tag_cloud('number=18&largest=16'); ?>
            </div>

            <div id="sidebar_links" class="sidebar_cotent">
                <div id="sidebar_links_title" class="sidebar_title"><h2>Links</h2></div>
        <?php wp_list_bookmarks('category_name=Links&categorize=0&title_li=0&before=<div class="sidebar_link">&after=</div>'); ?>
    </div>
</div>