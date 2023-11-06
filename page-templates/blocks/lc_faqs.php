<?php
$r = random_str(8);
?>
<a id="<?=get_field('id')?>" class="anchor"></a>
<section class="faq mb-5">
    <div class="container-xl">
        <h2 class="underline text-green-400 mb-4">
            <?=get_field('title')?>
        </h2>

        <div id="accordion-<?=$r?>">
            <?php
            $i = 0;
$first = true;
$exp = "true";
while (have_rows('questions')) {
    the_row();
    ?>
            <div class="faq__entry itemscope itemprop=" mainEntity" itemtype="https://schema.org/Question">
                <div role="button"
                    class="faq__header <?= ($first != true) ? 'collasped' : '' ?>"
                    itemprop="name" data-bs-toggle="collapse"
                    aria-expanded="<?=$exp?>"
                    data-bs-target="#collapse-<?=$r?>-<?=$i?>">
                    <?=get_sub_field('question')?>
                </div>
                <div id="collapse-<?=$r?>-<?=$i?>"
                    class="collapse <?= ($first == true) ? 'show' : ''?>"
                    data-bs-parent="#accordion-<?=$r?>">
                    <div class="faq__body" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div class="faq__text" itemprop="text">
                            <?=get_sub_field('answer')?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
    $i++;
    $first = false;
    $exp = false;
}
?>
        </div>
    </div>
</section>