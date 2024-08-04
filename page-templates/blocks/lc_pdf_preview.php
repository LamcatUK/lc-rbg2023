<?php
$fileID = get_field('file');
$pdf_url = wp_get_attachment_url($fileID);
$link = get_field('link');
?>
<section class="pdf_preview py-5">
    <div class="container-xl">
        <div class="pdf_preview__container">
            <div class="pdf_preview__title">
                <?=get_field('title')?>
            </div>
            <a class="btn btn-gold"
                href="<?=$link['url']?>"
                target="<?=$link['target']?>"><?=$link['title']?> <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            <a href="<?=$pdf_url?>" target="_blank" class="pdf_preview__dl"><?=wp_get_attachment_image($fileID, 'medium', false, array('class' => 'pdf_preview__image'))?></a>
        </div>
    </div>
</section>