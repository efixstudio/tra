<?php
        //@todo Done
        $args = array(  
            'post_type' => 'evenimente',
            'post_status' => 'publish',
            'posts_per_page' => 3,
        );
    
        $loop       = new WP_Query( $args );
        $cloneLoop  = sort_event_loop_by_event_date( $loop );

        //Get the event page set in WP Admin / Options / Page setup
        $events_page = get_general_page_url('general_pages', 'evenimente' );
?>

<!-- evenimente -->
<?php  if ( $cloneLoop->have_posts() ) : ?>
    <section class="module module--events bg bg--green">
        <div class="container">
            <div class="c-events is-white u-mg u-mg--bottom">
                <div class="c-events__header">
                    <span class="title">Evenimente TRA</span>
                    <a href="<?php echo $events_page && is_array( $events_page ) ? $events_page['url'] : '#'; ?>">
                        <span>Toate evenimentele</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                    </a>
                </div>

                <div class="c-table">
                    <?php  while ( $cloneLoop->have_posts() ) : $cloneLoop->the_post();

                        $date       = get_field('date');
                        $location   = get_field('location');

                        //Continue / skip if $date and $location are not set
                        if( ! $date || ! $location )
                            continue;

                        $cta        = get_field('cta');
                        //$btnLabel   = isset( $cta['label'] ) && ! empty( $cta['label'] ) ? $cta['label']:  'Detalii';
                        $btnURL     = isset( $cta['url'] ) && is_array($cta['url']) && ! empty( $cta['url']['url'] ) ? $cta['url']['url']:  '#';
                    ?>

                        <div class="c-table-row">
                            <div class="c-table-item">
                                <div class="c-table-item__column c-table-item__date" data-label="Data">
                                    <?php if($date) : ?>
                                        <span><?php echo $date; ?></span>
                                    <?php endif; ?>
                                </div>

                                <div class="c-table-item__column c-table-item__title" data-label="Eveniment">
                                    <span><?php echo get_the_title(); ?></span>
                                </div>

                                <div class="c-table-item__column c-table-item__location" data-label="Locatie">
                                    <?php if($location) : ?>
                                        <span><?php echo $location; ?></span>
                                    <?php endif; ?>
                                </div>

                                <div class="c-table-item__column c-table-item__url">
                                    <a href="<?php echo $events_page && is_array( $events_page ) ? $events_page['url'] . "?event=" . get_the_ID() : '#'; ?>" target="_blank">
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
<?php endif; ?>
<!-- evenimente -->