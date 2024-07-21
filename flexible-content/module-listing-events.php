<?php 
    global $post; 

    $args = array(  
        'post_type' => 'evenimente',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    );

    $loop = new WP_Query( $args );
?>

<!-- listing events -->
<section class="module module--listing u-mg u-mg--md">
    <div class="c-header-lines">
        <div class="container">
            <div class="inner">
                <span>Evenimente TRA</span>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="c-events is-green">
            <div class="c-table">
                <?php while ( $loop->have_posts() ) : $loop->the_post(); $btn = get_field('cta'); $date = get_field('date'); $location = get_field('location'); $text = get_field('event_description'); $members = get_field('membri'); ?>
                <div class="c-table-row">
                    <div class="c-table-item">
                        <div class="c-table-item__column c-table-item__date">
                            <?php if($date) : ?>
                                <span><?php echo $date; ?></span>
                            <?php endif; ?>
                        </div>

                        <div class="c-table-item__column c-table-item__title">
                            <span><?php echo get_the_title(); ?></span>
                        </div>

                        <div class="c-table-item__column c-table-item__location">
                            <?php if($location) : ?>
                                <span><?php echo $location; ?></span>
                            <?php endif; ?>
                        </div>

                        <div class="c-table-item__column c-table-item__url">
                            <?php if($text) : ?>
                                <a href="#">
                                    Detalii
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <?php if($text) : ?>
                        <div class="c-table-content">
                            <div class="u-cols<?php if($members) : ?> has-members<?php endif; ?> fx">
                                <div class="u-col u-col--left">
                                    <div class="c-editor">
                                        <?php echo $text; ?>
                                    </div>
                                </div>
                                
                                <?php if($members) : ?>
                                    <div class="u-col u-col--right">
                                        <span class="c-members-tagline"><strong>Membri TRA care vor participa:</strong></span>

                                        <div class="c-members-list">
                                            <?php foreach($members as $post ) : ?>
                                                <div class="c-members-list__item">
                                                    <?php echo get_the_post_thumbnail($post->ID); ?>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                        
                                        <?php if($btn['url']) : ?>
                                            <a href="<?php echo $btn['url']['url']; ?>" class="btn btn--primary btn--green">
                                                <span><?php echo $btn['label']; ?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                                                </span>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>
<!-- listing events -->