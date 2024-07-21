<?php 
    $content = get_field('features_g','options'); 

    $btn = $content['button'];
    $items = $content['features'];
    $form = $content['form'];
?>

<!-- features -->
<section class="module module--story bg bg--green u-pd u-pd--md no-mg no-mg--top">
    <div class="container">
        <div class="u-table">
            <div class="u-table-row">
                <div class="u-table-column has-logo">
                    <svg height=144 viewBox="0 0 140 144"width=140 xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink><defs><clipPath id=clip-path-tralogo><rect data-name="Rectangle 89"fill=none height=144 id=Rectangle_89 transform="translate(0 0)"width=140 /></clipPath></defs><g data-name="DE CE"id=DE_CE transform="translate(-443 -1387)"><g data-name="Vector Smart Object"id=Vector_Smart_Object transform="translate(443 1387)"><g data-name="Group 150"id=Group_150><g data-name="Group 149"id=Group_149 clip-path=url(#clip-path-tralogo)><path d=M139.776,131.79,80.4,9a2.359,2.359,0,0,0-1.221-1.128L61.619.191a2.294,2.294,0,0,0-3.011,1.163L.192,133.136a2.266,2.266,0,0,0,1.169,2.988l17.56,7.685a2.3,2.3,0,0,0,3.011-1.163l46.636-105.2,49.795,104.566a2.288,2.288,0,0,0,3.046,1.061l17.3-8.25a2.271,2.271,0,0,0,1.069-3.028m-15.788.705-1.98-4.089-4.146,1.976-1.722-3.61,4.131-1.966-1.98-4.1-4.107,1.962-1.722-3.611,7.875-3.752-1.979-4.094-7.853,3.747-1.722-3.61,4.05-1.932-1.977-4.094-4.028,1.924-1.724-3.61,4.008-1.915-1.975-4.085-3.987,1.9-1.722-3.611,7.754-3.7L107.2,88.146,99.47,91.832l-1.724-3.608,3.93-1.879L99.7,82.257l-3.91,1.865-1.722-3.61,3.891-1.855-1.979-4.09-3.868,1.847L90.391,72.8l7.634-3.648-1.977-4.085L88.436,68.7l-1.722-3.61,3.807-1.818-1.975-4.09L84.757,60.99l-1.722-3.61,3.768-1.8-1.977-4.09L81.078,53.28l-1.724-3.61,7.513-3.584L84.892,42,77.4,45.572l-1.72-3.61L79.366,40.2l-1.979-4.087L73.721,37.86,72,34.25l3.65-1.743L73.67,28.416,72.451,29,78.4,15.323,134.67,131.708,121.5,138l-1.675-3.512ZM12.964,127.038l-4.252-1.86,1.619-3.656,4.252,1.86,1.842-4.151-4.254-1.863,1.621-3.655,8.1,3.543L23.73,113.1l-8.1-3.541,1.619-3.655,4.254,1.862,1.84-4.158-4.252-1.86,1.619-3.655,4.254,1.862,1.84-4.151L22.556,93.94l1.619-3.655,8.1,3.546,1.842-4.156-8.1-3.543,1.621-3.656,4.252,1.86,1.842-4.151-4.252-1.86L31.1,74.669l4.254,1.858,1.839-4.151-4.25-1.86,1.619-3.656,8.1,3.541L44.5,66.25l-8.1-3.543,1.621-3.656,4.254,1.863,1.84-4.158L39.864,54.9l1.621-3.653,4.252,1.86,1.84-4.152L43.325,47.09l1.619-3.656,8.1,3.544,1.839-4.156-8.094-3.539,1.621-3.656,4.254,1.86L54.5,33.332l-4.252-1.86,1.621-3.655,4.25,1.862,1.842-4.152-4.252-1.862,1.621-3.656,8.095,3.543L65.267,19.4l-8.1-3.541L58.79,12.2l4.252,1.86,1.842-4.151L60.63,8.047l1.238-2.79,13.379,5.855L18.674,138.741,5.295,132.886l1.575-3.558,4.254,1.863Z data-name="Path 174"fill=#fff id=Path_174 /></g></g></g></g></svg>
                </div>

                <div class="u-table-column has-button">
                    <a class="btn btn--underline btn--underline--white lg" href="<?php echo $btn['url']['url']; ?>">
                        <span><?php echo $btn['label']; ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"/></svg>
                    </a>
                </div>
            </div>

            <?php if($items && is_array( $items ) ) : ?>
            <div class="u-table-row">
                <?php foreach($items as $item ) : ?>
                    <div class="u-table-column">
                        <div class="u-text">
                            <span class="title"><?php echo $item['title']; ?></span>
                            <span class="text"><?php echo $item['text']; ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <div class="u-table-row">
                <div class="u-table-column has-cta">
                    <div class="c-cta">
                        <span class="c-cta__title"><?php echo $form['title']; ?></span>
                        <p class="c-cta__text"><?php echo $form['subtitle']; ?></p>
                        <div class="u-form u-form--outline u-form--email">
                            <?php echo do_shortcode('[gravityform id="'. $form['form_id'] .'" title="false" description="false" ajax="true"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features -->