<div class="bg--green-400 has-overlay position-relative">
    <div class="overlay-bg"></div>
    <div class="container-xl py-4 text-white">
        <?php
        $next = get_field('next_event', 'options');
        $next = explode(':', $next);
        echo '<div class="text-center h2">';
        $date = mktime($next['0'], $next['1'], 0, $next['3'], $next['4'], $next['5']);
        echo "Race Day is " . date('jS F, Y', $date);
        echo '</div>';
        echo do_shortcode("[countdown id='cnt' year='{$next['5']}' month='{$next['3']}' day='{$next['4']}' hour='{$next['0']}' min='{$next['1']}' sec='00']");
        ?>
    </div>
</div>