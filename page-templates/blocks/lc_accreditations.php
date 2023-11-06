<a id="accreditations" class="anchor"></a>
<section class="accreditations py-5">
    <div class="container-xl">
        <h2 class="underline text-green-400 mb-4">Accreditations</h2>
        <div class="d-flex justify-content-around flex-wrap" style="row-gap:1rem">
            <?php
        $badges = get_field('accreditations', 'options');
            foreach ($badges as $b) {
                echo '<img src="' . wp_get_attachment_image_url($b, 'full') . '">';
            }
            ?>
        </div>
    </div>
</section>