<a id="committee" class="anchor"></a>
<section class="committee">
    <div class="container-xl">
        <h2 class="underline text-green-400 mb-4">Meet The Committee</h2>
        <div class="people-cards">
            <?php
            $q = new WP_Query(array(
                'post_type' => 'people',
                'posts_per_page' => -1
            ));

            $biodata = array();
            while ($q->have_posts()) {
                $q->the_post();
                $img = wp_get_attachment_image_url(get_field('photo', get_the_ID()), 'large');
                ?>
            <div type="button"
                id="<?=basename(get_permalink(get_the_ID()))?>"
                class="person-card">
                <figure>
                    <img src="<?=$img?>"
                        alt="<?=get_the_title()?>">
                </figure>
                <figcaption>
                    <h3 class="person-card__name">
                        <?=get_the_title()?>
                    </h3>
                    <div class="person-card__role">
                        <?=get_field('role', get_the_ID())?>
                    </div>
                </figcaption>
            </div>
            <?php
                $bio = get_field('bio', get_the_ID());
                $email = get_field('email', get_the_ID()) ? '<a href="mailto:' . get_field('email', get_the_ID()) . '"><i class="fa-solid fa-envelope"></i> ' . get_field('email', get_the_ID()) . '</a>' : '';
                $biodata[] = '<div class="bio-card" id="' . basename(get_permalink(get_the_ID())) . '-info"><h3>' . get_the_title() . '</h3><p>' . $bio . '</p>' . $email . '</div>';
                ?>
            <div class="d-md-none px-2 pt-2 pb-5">
                <p><?=$bio?></p>
                <?=$email?>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="bio-data">
        <?php
                    foreach ($biodata as $b) {
                        echo $b;
                    }
            ?>
    </div>
</section>
<script>
    const people = document.querySelectorAll('.person-card');
    const bios = document.querySelectorAll('.bio-card');

    people.forEach((person) => {
        person.addEventListener('click', (e) => {

            people.forEach((member) => {
                member.classList.remove('reveal');
                member.classList.add('obscure');
            });

            person.classList.add('reveal');
            person.classList.remove('obscure');

            let who = person.getAttribute('id')

            const shown = document.querySelectorAll('.bio-show');
            shown.forEach((elem) => {
                elem.remove();
            });

            const newItem = document.createElement('div');
            newItem.classList.add('bio-show');

            const content = document.getElementById(who + '-info');

            newItem.innerHTML = content.innerHTML;

            person.after(newItem);

            e.stopPropagation();
        })
    })


    // Add click event listener to the document
    document.addEventListener("click", () => {
        // Remove "active" class from all elements
        people.forEach((member) => {
            member.classList.remove("reveal");
            member.classList.remove("obscure");
        });
        const shown = document.querySelectorAll('.bio-show');
        shown.forEach((elem) => {
            elem.remove();
        });

    });
</script>