<form role="search" method="get" id="form1" action="<?php echo home_url('/') ?>">
    <input type="text" placeholder="
    <?php if (is_category(12)) {
        echo 'Найти документ';
    } else {
        echo 'Поиск по сайту';
    } ?>
    " value="<?php echo get_search_query() ?>" name="s" id="s"/>
    <?php if (is_category(12)) {
        echo '<input type="hidden" name="cat" value="12">';
    } ?>
    <input type="hidden" value="1" name="sentence"/>
    <button type="submit" form="form1">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon/search_icon.png" alt="search__icon">
    </button>
</form>