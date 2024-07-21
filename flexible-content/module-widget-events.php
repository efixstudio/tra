<?php 
        $args = array(  
            'post_type' => 'evenimente',
            'post_status' => 'publish',
            'posts_per_page' => 3,
        );
    
        $loop = new WP_Query( $args );
?>

<!-- evenimente -->
<section class="module module--events bg bg--green">
    <div class="container">
        <div class="c-events is-white u-mg u-mg--bottom">
            <div class="c-events__header">
                <span class="title">Evenimente TRA</span>
                <a href="#">
                    <span>Toate evenimentele</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                </a>
            </div>

            <div class="c-table">
                <?php  while ( $loop->have_posts() ) : $loop->the_post(); $date = get_field('date'); $location = get_field('location'); ?>
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
                                <a href="#">
                                    Detalii
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>
<!-- evenimente -->