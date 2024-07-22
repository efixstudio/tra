<?php 
    global $post;
    $camp = get_field('tabere','options');
?>

<!-- camp timetable -->
<section class="module module--faqs u-mg u-mg--md">
    <div class="container">
        <div class="c-togglers c-togglers--timetable">
            <div class="c-togglers__header">
                <span><?php echo $camp['titlu_tabel_program']; ?></span>
            </div>
            <?php if( isset( $content['list'] ) && is_array( $content['list'] ) ) : ?>
                <?php foreach($content['list'] as $item) : ?>
                    <div class="c-toggler">
                        <div class="c-toggler__header">
                            <span class="c-toggler__header-date"><?php echo $item['date']; ?></span>
                            <span class="c-toggler__header-day"><?php echo $item['day']; ?></span>
                            <span class="c-toggler__header-location"><?php echo $item['location']; ?></span>
                            <span class="c-toggler__header-icon fx fx--je"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 7.21875 5.78125 L 5.78125 7.21875 L 14.5625 16 L 5.78125 24.78125 L 7.21875 26.21875 L 16 17.4375 L 24.78125 26.21875 L 26.21875 24.78125 L 17.4375 16 L 26.21875 7.21875 L 24.78125 5.78125 L 16 14.5625 Z"/></svg></span>
                        </div>

                        <div class="c-toggler__content">
                            <div class="c-editor">
                                <?php echo $item['content']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        
        <?php $organisers = $content['organisers']; if($organisers['event_organisers']) :  ?>
            <div class="c-organisers">
                <?php $orgLabel = $camp['label_organizatori']; if($orgLabel) : ?>
                    <h3 class="c-organisers__title"><?php echo $orgLabel; ?></h3>
                <?php endif; ?>

                <div class="u-cols fx fx--">
                    <div class="u-col u-col--left">
                        <?php get_image($organisers['image'],'full'); ?>
                    </div>

                    <div class="u-col u-col--right">
                        <?php if( isset( $organisers['event_organisers'] ) && is_array( $organisers['event_organisers'] ) ) : ?>
                            <?php foreach($organisers['event_organisers'] as $post) : ?>
                                <a href="<?php echo get_the_permalink($post->ID); ?>">
                                    <?php echo get_the_title($post->ID); ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                                </a>
                            <?php endforeach?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
        <?php if(is_singular('tabere')) : ?>
        <div class="module module--trainingplan">
            <div class="c-camp-details">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="c-plan">
                    <div class="c-plan-body">
                        <div class="container">    
                            <div class="c-plan-content is-active">
                                <div class="u-cols fx">
                                    <div class="u-col u-col--left">
                                        <div class="c-plan__image">
                                            <?php echo get_the_post_thumbnail($post->ID); ?>
                                        </div>
                                    </div>

                                    <div class="u-col u-col--right">
                                        <div class="c-plan__details">
                                            <div class="c-plan-meta">
                                                <div class="c-plan-meta__name">
                                                    <?php $uptitle = $camp['card_tabara']['uptitle']; if($uptitle) : ?>
                                                        <span><?php echo $uptitle; ?></span>
                                                    <?php endif; ?>

                                                    <span><?php echo get_the_title(); ?></span>
                                                </div>

                                                <div class="u-stripe-price">
                                                    <span>
                                                        <svg height=21 viewBox="0 0 48 21"width=48 xmlns=http://www.w3.org/2000/svg><path d=M1471.226,1381.653h2.939l.174.869a3.679,3.679,0,0,1,2.614-1.094h-.006c2.334,0,4.533,2.216,4.547,6.281,0,4.451-2.172,6.464-4.559,6.464a3.648,3.648,0,0,1-2.361-.883l-.014,3.967-3.333.743Zm3.339,3.575.013,5.2a1.951,1.951,0,0,0,1.574.659c1.227,0,2.053-1.4,2.053-3.281,0-1.837-.84-3.267-2.053-3.267A1.942,1.942,0,0,0,1474.565,1385.228Zm-21.445,5.35.013-11.229,3.254-.73-.014,3.049h2.534v2.986h-2.534v4.97c0,2.074,2.106,1.43,2.534,1.247v2.847a4.93,4.93,0,0,1-2.334.463A3.438,3.438,0,0,1,1453.119,1390.577Zm-8.973,2.81v-3.336a7.994,7.994,0,0,0,3.641,1.122c.746,0,1.28-.211,1.28-.855,0-1.669-5.067-1.052-5.067-4.921,0-2.481,1.8-3.968,4.506-3.968a8.4,8.4,0,0,1,3.307.645v3.288a7.168,7.168,0,0,0-3.307-.9c-.707,0-1.133.209-1.133.756h0c0,1.57,5.08.827,5.093,5,0,2.509-1.907,3.954-4.68,3.954A8.849,8.849,0,0,1,1444.146,1393.387Zm37.946-5.567c0-3.561,1.921-6.394,5.093-6.394s4.814,2.833,4.814,6.422h0c0,.337-.026,1.065-.026,1.247h-6.52c.147,1.654,1.293,2.131,2.587,2.131a6.791,6.791,0,0,0,3.267-.771v2.8a7.145,7.145,0,0,1-3.694.911C1484.358,1394.171,1482.092,1392.041,1482.092,1387.821Zm3.326-1.3h3.441c0-1.584-.868-2.243-1.68-2.243C1486.338,1384.275,1485.419,1384.934,1485.419,1386.518Zm-25.46,7.418v-12.268h2.881l.213,1.036a2.205,2.205,0,0,1,2.773-1.036v3.225a2.272,2.272,0,0,0-2.534.729v8.314Zm6.682,0v-12.267h3.346v12.267Zm0-16.192,3.346-.743v2.846l-3.346.756Z data-name="Color Overlay"fill=#faa61a transform="translate(-1444 -1377)"/></svg>
                                                    </span>

                                                    <span class="price">
                                                        <strong><?php the_field('pret'); ?></strong>
                                                        <sup><?php echo get_currency( get_field( 'currency' ) ); ?></sup>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            <div class="c-plan-features">
                                                <div class="c-features">
                                                    <?php $date = get_field('data_eveniment'); if($date) : ?>
                                                        <div class="c-feature">
                                                            <div class="c-feature__icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="66" height="41" viewBox="0 0 66 41"><g id="Vector_Smart_Object_copy_5" data-name="Vector Smart Object copy 5" transform="translate(-1265 -3549)"><g id="Vector_Smart_Object_copy_5-2" data-name="Vector Smart Object copy 5" transform="translate(1265 3549)"><path id="Path_340" data-name="Path 340" d="M52.565,0V2.029h9.643L36.037,26.948,24.4,15.178,0,39.569,1.43,41,24.386,18.05,36,29.789,63.972,3.155V13.443H66V0Z" fill="#006b38"></path></g><path id="Color_Overlay" data-name="Color Overlay" d="M1265,3588.57l24.4-24.391,11.641,11.77,26.171-24.919h-9.643V3549H1331v13.443h-2.028v-10.288L1301,3578.789l-11.611-11.739L1266.43,3590Z" fill="#faa61a"></path></g></svg>
                                                            </div>

                                                            <div class="c-feature__text">
                                                                <span><?php echo $camp['card_tabara']['features_labels']['date']; ?><br><?php echo $date; ?></span>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>

                                                    <?php $location = get_field('locatie'); if($location) : ?>
                                                        <div class="c-feature">
                                                            <div class="c-feature__icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="66" height="41" viewBox="0 0 66 41"><g id="Vector_Smart_Object_copy_5" data-name="Vector Smart Object copy 5" transform="translate(-1265 -3549)"><g id="Vector_Smart_Object_copy_5-2" data-name="Vector Smart Object copy 5" transform="translate(1265 3549)"><path id="Path_340" data-name="Path 340" d="M52.565,0V2.029h9.643L36.037,26.948,24.4,15.178,0,39.569,1.43,41,24.386,18.05,36,29.789,63.972,3.155V13.443H66V0Z" fill="#006b38"></path></g><path id="Color_Overlay" data-name="Color Overlay" d="M1265,3588.57l24.4-24.391,11.641,11.77,26.171-24.919h-9.643V3549H1331v13.443h-2.028v-10.288L1301,3578.789l-11.611-11.739L1266.43,3590Z" fill="#faa61a"></path></g></svg>
                                                            </div>

                                                            <div class="c-feature__text">
                                                                <span><?php echo $camp['card_tabara']['features_labels']['location']; ?><br><?php echo $location; ?></span>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>

                                                    <?php $transportation = get_field('transport'); if($transportation) : ?>
                                                        <div class="c-feature">
                                                            <div class="c-feature__icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="66" height="41" viewBox="0 0 66 41"><g id="Vector_Smart_Object_copy_5" data-name="Vector Smart Object copy 5" transform="translate(-1265 -3549)"><g id="Vector_Smart_Object_copy_5-2" data-name="Vector Smart Object copy 5" transform="translate(1265 3549)"><path id="Path_340" data-name="Path 340" d="M52.565,0V2.029h9.643L36.037,26.948,24.4,15.178,0,39.569,1.43,41,24.386,18.05,36,29.789,63.972,3.155V13.443H66V0Z" fill="#006b38"></path></g><path id="Color_Overlay" data-name="Color Overlay" d="M1265,3588.57l24.4-24.391,11.641,11.77,26.171-24.919h-9.643V3549H1331v13.443h-2.028v-10.288L1301,3578.789l-11.611-11.739L1266.43,3590Z" fill="#faa61a"></path></g></svg>
                                                            </div>

                                                            <div class="c-feature__text">
                                                                <span><?php echo $camp['card_tabara']['features_labels']['transport']; ?><br><?php echo $transportation; ?></span>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>

                                                    <?php $route = get_field('ruta'); if($route) : ?>
                                                        <div class="c-feature">
                                                            <div class="c-feature__icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="66" height="41" viewBox="0 0 66 41"><g id="Vector_Smart_Object_copy_5" data-name="Vector Smart Object copy 5" transform="translate(-1265 -3549)"><g id="Vector_Smart_Object_copy_5-2" data-name="Vector Smart Object copy 5" transform="translate(1265 3549)"><path id="Path_340" data-name="Path 340" d="M52.565,0V2.029h9.643L36.037,26.948,24.4,15.178,0,39.569,1.43,41,24.386,18.05,36,29.789,63.972,3.155V13.443H66V0Z" fill="#006b38"></path></g><path id="Color_Overlay" data-name="Color Overlay" d="M1265,3588.57l24.4-24.391,11.641,11.77,26.171-24.919h-9.643V3549H1331v13.443h-2.028v-10.288L1301,3578.789l-11.611-11.739L1266.43,3590Z" fill="#faa61a"></path></g></svg>
                                                            </div>

                                                            <div class="c-feature__text">
                                                                <span><?php echo $camp['card_tabara']['features_labels']['ruta']; ?><br><?php echo $route; ?></span>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>

                                                    <?php $accomodation = get_field('tip_cazare'); if($accomodation) : ?>
                                                        <div class="c-feature">
                                                            <div class="c-feature__icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="66" height="41" viewBox="0 0 66 41"><g id="Vector_Smart_Object_copy_5" data-name="Vector Smart Object copy 5" transform="translate(-1265 -3549)"><g id="Vector_Smart_Object_copy_5-2" data-name="Vector Smart Object copy 5" transform="translate(1265 3549)"><path id="Path_340" data-name="Path 340" d="M52.565,0V2.029h9.643L36.037,26.948,24.4,15.178,0,39.569,1.43,41,24.386,18.05,36,29.789,63.972,3.155V13.443H66V0Z" fill="#006b38"></path></g><path id="Color_Overlay" data-name="Color Overlay" d="M1265,3588.57l24.4-24.391,11.641,11.77,26.171-24.919h-9.643V3549H1331v13.443h-2.028v-10.288L1301,3578.789l-11.611-11.739L1266.43,3590Z" fill="#faa61a"></path></g></svg>
                                                            </div>

                                                            <div class="c-feature__text">
                                                                <span><?php echo $camp['card_tabara']['features_labels']['cazare']; ?><br><?php echo $accomodation; ?></span>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="c-plan-footer">
                                                <div class="c-plan-footer__notice">
                                                    
                                                </div>

                                                <div class="c-plan-footer__button">
                                                    <?php $btn = get_field('payment_url'); if($btn) : ?>
                                                    <a href="<?php echo $btn; ?>" class="btn btn--primary btn--green">
                                                        <span>
                                                            <?php echo $camp['card_tabara']['button_label']; ?>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                                                        </span>
                                                    </a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<!-- camp timetable -->