<?php if($post->post_type === 'atleti') : ?>
    <!-- page header -->
    <section class="module module--ph is-athlete u-mg u-mg--md">
        <div class="container">
            <div class="u-cols fx">
                <div class="u-col u-col--left">
                    <div class="c-text">
                        <h1 class="c-text__title"><?php the_title(); ?></h1>
                        
                        <div class="c-scroll">
                            <span>scroll to discover</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                        </div>
                    </div>
					
					<?php $details = get_field('details'); ?>
                    <div class="c-details inner">
                        <div class="c-details__item">
                            <span class="label"><strong>Data nasterii: </strong></span>
                            <span class="value"><?php echo $details['birthdate']; ?></span>
                        </div>

                        <div class="c-details__item">
                            <span class="label"><strong>Varsta: </strong></span>
                            <span class="value"><?php echo $details['age']; ?></span>
                        </div>

                        <div class="c-details__item">
                            <span class="label"><strong>Locul nasterii: </strong></span>
                            <span class="value"><?php echo $details['place_of_birth']; ?></span>
                        </div>

                        <div class="c-details__item">
                            <span class="label"><strong>Job: </strong></span>
                            <span class="value"><?php echo $details['job']; ?></span>
                        </div>
                    </div>
                </div>

                <div class="u-col u-col--right">
                    <div class="c-text__image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
            </div>
            <div class="c-details outer">
                <div class="c-details__item">
                    <span class="label"><strong>Proba preferata: </strong></span>
                    <span class="value"><?php echo $details['favorite_try']; ?></span>
                </div>

                <div class="c-details__item">
                    <span class="label"><strong>Membru TRA: </strong></span>
                    <span class="value"><?php echo $details['member_since']; ?></span>
                </div>

                <div class="c-details__item">
                    <span class="label"><strong>Antrenat de: </strong></span>
                    <span class="value"><?php echo $details['trainer']->post_title; ?></span>
                </div>
            </div>
        </div>
    </section>
    <!-- page header -->

    <!-- text box -->
    <section class="module module--textbox u-pd u-pd--md bg bg--green">
        <div class="container">
            <div class="c-box">
                <div class="c-box__content">
                    <div class="c-editor">
                        <?php the_field('intro');  ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- text box -->
<?php endif; ?>