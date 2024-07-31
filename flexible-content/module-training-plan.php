<?php

    $feed = $content['feed'];
    
    if($feed === 'individual') :
        $post = $content['coach'];
        $options = $post ?  get_field('abonamente',$post->ID) : [];

    endif;
?>

<!-- training plan -->
<section class="module module--trainingplan u-mg u-mg--md">
    <?php if(isset( $content['content'] )) : ?>
    <div class="module__heading">    
        <div class="container">
            <div class="c-editor">
                <?php echo $content['content']; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php if(isset( $content['title'] ) && ! empty( $content[ 'title' ] )) : ?>
        <div class="module__headline">
            <div class="container">
                <div class="c-content">
                    <h2><?php echo $content['title']; ?></h2>
                </div>
            </div>
        </div>
    <?php endif; ?>
    
    <?php if($feed === 'individual' && ! empty( $options ) ) : ?>
        <div class="c-plan">
            <header class="c-plan-header">
                <div class="container">
                    <nav class="c-nav" data-count="<?php echo count( $options['subscription'] ); ?>">
                        <?php $counterNavIndividualPlans = 0; foreach($options['subscription'] as $option) : $counterNavIndividualPlans++;?>
                            <a class="c-nav__item <?php echo $counterNavIndividualPlans === 1 ? 'is-active': ''; ?>" href="#<?php echo $post->post_name;?>-<?php echo $option['price']; ?>"><?php echo $option['time']; ?></a>
                        <?php endforeach; ?>
                    </nav>
                </div>
            </header>
            
            <div class="c-plan-body">
                <div class="container">
                    <?php $counterIndividualPlans = 0; foreach($options['subscription'] as $option) : $counterIndividualPlans++ ?>
                    <div class="c-plan-content is-single <?php echo $counterIndividualPlans === 1 ? 'is-active': ''; ?>" id="<?php echo $post->post_name; ?>-<?php echo $option['price']; ?>">
                        <div class="u-cols fx">
                            <div class="u-col u-col--left">
                                <div class="c-plan__image">
                                    <?php if($post->post_type === 'antrenori') : ?>
                                        <?php echo get_the_post_thumbnail($post->ID, 'original-600'); ?>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="u-col u-col--right">
                                <div class="c-plan__details">
                                    <div class="c-plan-meta">
                                        <div class="c-plan-meta__name">
                                            <?php if($post->post_type==='antrenori') : ?><span>By <?php echo get_the_title($post->ID); ?></span><?php endif; ?>
                                            <span><?php echo $option['name']; ?></span>
                                        </div>

                                        <div class="u-stripe-price">
                                            <span>
                                                <svg height=21 viewBox="0 0 48 21"width=48 xmlns=http://www.w3.org/2000/svg><path d=M1471.226,1381.653h2.939l.174.869a3.679,3.679,0,0,1,2.614-1.094h-.006c2.334,0,4.533,2.216,4.547,6.281,0,4.451-2.172,6.464-4.559,6.464a3.648,3.648,0,0,1-2.361-.883l-.014,3.967-3.333.743Zm3.339,3.575.013,5.2a1.951,1.951,0,0,0,1.574.659c1.227,0,2.053-1.4,2.053-3.281,0-1.837-.84-3.267-2.053-3.267A1.942,1.942,0,0,0,1474.565,1385.228Zm-21.445,5.35.013-11.229,3.254-.73-.014,3.049h2.534v2.986h-2.534v4.97c0,2.074,2.106,1.43,2.534,1.247v2.847a4.93,4.93,0,0,1-2.334.463A3.438,3.438,0,0,1,1453.119,1390.577Zm-8.973,2.81v-3.336a7.994,7.994,0,0,0,3.641,1.122c.746,0,1.28-.211,1.28-.855,0-1.669-5.067-1.052-5.067-4.921,0-2.481,1.8-3.968,4.506-3.968a8.4,8.4,0,0,1,3.307.645v3.288a7.168,7.168,0,0,0-3.307-.9c-.707,0-1.133.209-1.133.756h0c0,1.57,5.08.827,5.093,5,0,2.509-1.907,3.954-4.68,3.954A8.849,8.849,0,0,1,1444.146,1393.387Zm37.946-5.567c0-3.561,1.921-6.394,5.093-6.394s4.814,2.833,4.814,6.422h0c0,.337-.026,1.065-.026,1.247h-6.52c.147,1.654,1.293,2.131,2.587,2.131a6.791,6.791,0,0,0,3.267-.771v2.8a7.145,7.145,0,0,1-3.694.911C1484.358,1394.171,1482.092,1392.041,1482.092,1387.821Zm3.326-1.3h3.441c0-1.584-.868-2.243-1.68-2.243C1486.338,1384.275,1485.419,1384.934,1485.419,1386.518Zm-25.46,7.418v-12.268h2.881l.213,1.036a2.205,2.205,0,0,1,2.773-1.036v3.225a2.272,2.272,0,0,0-2.534.729v8.314Zm6.682,0v-12.267h3.346v12.267Zm0-16.192,3.346-.743v2.846l-3.346.756Z data-name="Color Overlay"fill=#faa61a transform="translate(-1444 -1377)"/></svg>
                                            </span>

                                            <span class="price">
                                                <strong id="<?php echo $option['price']; ?>"><?php echo $option['price']; ?></strong> 
                                                <sup><?php  echo get_currency( $option['currency'] ); ?></sup>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <?php $features = $options['features']; if($features) : ?>
                                    <div class="c-plan-features">
                                        <div class="c-features">
                                            <?php foreach($features as $feature) : ?>
                                                <div class="c-feature">
                                                    <div class="c-feature__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="66" height="41" viewBox="0 0 66 41"><g id="Vector_Smart_Object_copy_5" data-name="Vector Smart Object copy 5" transform="translate(-1265 -3549)"><g id="Vector_Smart_Object_copy_5-2" data-name="Vector Smart Object copy 5" transform="translate(1265 3549)"><path id="Path_340" data-name="Path 340" d="M52.565,0V2.029h9.643L36.037,26.948,24.4,15.178,0,39.569,1.43,41,24.386,18.05,36,29.789,63.972,3.155V13.443H66V0Z" fill="#006b38"></path></g><path id="Color_Overlay" data-name="Color Overlay" d="M1265,3588.57l24.4-24.391,11.641,11.77,26.171-24.919h-9.643V3549H1331v13.443h-2.028v-10.288L1301,3578.789l-11.611-11.739L1266.43,3590Z" fill="#faa61a"></path></g></svg>
                                                    </div>

                                                    <div class="c-feature__text">
                                                        <span><?php echo $feature['text']; ?></span>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>

                                    <div class="c-plan-footer">
                                        <div class="c-plan-footer__notice">
                                            <p><strong>Nu uita:</strong> Planul se factureaza trimestrial!</p>
                                        </div>

                                        <?php if( isset( $option['url'] ) && is_array( $option['url'] ) ): ?>
                                        <div class="c-plan-footer__button">
                                            <a href="<?php echo $option['url']['url']; ?>" class="btn btn--primary btn--green" id="<?php echo $post->post_name; ?>-url-<?php echo $option['price']; ?>">
                                                <span>
                                                    Abonare
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                                                </span>
                                            </a>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if($feed === 'all') : ?>
        <?php 
            global $post; 

            $args = array(  
                'post_type' => 'antrenori',
                'post_status' => 'publish',
                'posts_per_page' => -1,
            );
        
            $loop = new WP_Query( $args );
            $coaches = [];
            $subscriptions = [];

            if( $loop->have_posts() ):
                while( $loop->have_posts() ) :
                    $loop->the_post();
                    $coaches[ $post->post_name ]['name'] = $post->post_title;
                    $options = get_field('abonamente',$post->ID);
                    $subscriptions[ $post->post_name ] = $options;
                endwhile;
            endif;

            $subscription_periods = [];
            foreach( $subscriptions as $slug => $item ){
                foreach( $item as $key => $data ){
                    if( $key !== "subscription" || !is_array( $data ) ) continue;
                    foreach( $data as $key1 => $data1 ){
                        $subscription_periods[ sanitize_title( $data1[ 'time'] ) ] = $data1['time'];
                        $subscriptions[ $post->post_name ]['periods_available'][ sanitize_title( $data1[ 'time'] ) ] = $data1['time'];
                    }
                }
            }

            //Sort ASC the subscriptions period
            uasort($subscription_periods, function($a, $b) {
                return intval($a) <=> intval($b);
            });

            $subscription_first_period = key($subscription_periods);

            wp_reset_postdata();

        ?>

        <div class="c-plan">
            <header class="c-plan-header all-plans-filter">
                <div class="container">
                    <div class="c-nav c-nav--coaches">
                        <?php  while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <?php if( $subscriptions[ $post->post_name ]['subscription'] ): ?>
                                <a href="#<?php echo $post->post_name; ?>" class="c-nav__item" data-item="<?php echo $post->post_name; ?>" data-coach="true"><?php echo get_the_title(); ?></a>
                            <?php endif; ?>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                    <div class="c-nav c-nav--periods data-count="<?php echo count( $subscription_periods ); ?>"">
                        <?php $period_counter = 0; foreach( $subscription_periods as $slug => $name ): $period_counter++; ?>
                            <a href="#<?php echo $slug;?>" class="c-nav__item <?php  if( $period_counter === 1 ) echo "is-active"; ?>" data-item="<?php echo $slug; ?>" data-period="true"><?php echo ucwords( $name );?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </header>

            <div class="c-plan-body">
                <div class="container">
                    <?php  while ( $loop->have_posts() ) : $loop->the_post(); $options = get_field('abonamente',$post->ID); ?>
                    <?php if( array_key_is_array( $options, 'subscription',  ) ): ?>
                        <div class="item" id="<?php echo $post->post_name; ?>">
                            <?php  foreach($options['subscription'] as $option) : ?>
                                <div class="c-plan-content has-multiple <?php echo $subscription_first_period === sanitize_title( $option['time'] ) ? 'is-active' : '';?>" id="<?php echo $post->post_name; ?>-<?php echo $option['price']; ?>" data-coach="<?php echo $post->post_name;?>" data-period="<?php echo sanitize_title( $option[ 'time' ] ); ?>">
                                <div class="u-cols fx">
                                    <div class="u-col u-col--left">
                                        <div class="c-plan__image">
                                            <?php if($post->post_type === 'antrenori') : ?>
                                                <?php echo get_the_post_thumbnail(null, 'original-600', ['loading' => 'lazy']); ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="u-col u-col--right">
                                        <div class="c-plan__details">
                                            <div class="c-plan-meta">
                                                <div class="c-plan-meta__name">
                                                    <?php if($post->post_type==='antrenori') : ?><span>By <?php the_title(); ?></span><?php endif; ?>
                                                    <span><?php echo $option['name']; ?></span>
                                                </div>

                                                <div class="u-stripe-price">
                                                    <span>
                                                        <svg height=21 viewBox="0 0 48 21"width=48 xmlns=http://www.w3.org/2000/svg><path d=M1471.226,1381.653h2.939l.174.869a3.679,3.679,0,0,1,2.614-1.094h-.006c2.334,0,4.533,2.216,4.547,6.281,0,4.451-2.172,6.464-4.559,6.464a3.648,3.648,0,0,1-2.361-.883l-.014,3.967-3.333.743Zm3.339,3.575.013,5.2a1.951,1.951,0,0,0,1.574.659c1.227,0,2.053-1.4,2.053-3.281,0-1.837-.84-3.267-2.053-3.267A1.942,1.942,0,0,0,1474.565,1385.228Zm-21.445,5.35.013-11.229,3.254-.73-.014,3.049h2.534v2.986h-2.534v4.97c0,2.074,2.106,1.43,2.534,1.247v2.847a4.93,4.93,0,0,1-2.334.463A3.438,3.438,0,0,1,1453.119,1390.577Zm-8.973,2.81v-3.336a7.994,7.994,0,0,0,3.641,1.122c.746,0,1.28-.211,1.28-.855,0-1.669-5.067-1.052-5.067-4.921,0-2.481,1.8-3.968,4.506-3.968a8.4,8.4,0,0,1,3.307.645v3.288a7.168,7.168,0,0,0-3.307-.9c-.707,0-1.133.209-1.133.756h0c0,1.57,5.08.827,5.093,5,0,2.509-1.907,3.954-4.68,3.954A8.849,8.849,0,0,1,1444.146,1393.387Zm37.946-5.567c0-3.561,1.921-6.394,5.093-6.394s4.814,2.833,4.814,6.422h0c0,.337-.026,1.065-.026,1.247h-6.52c.147,1.654,1.293,2.131,2.587,2.131a6.791,6.791,0,0,0,3.267-.771v2.8a7.145,7.145,0,0,1-3.694.911C1484.358,1394.171,1482.092,1392.041,1482.092,1387.821Zm3.326-1.3h3.441c0-1.584-.868-2.243-1.68-2.243C1486.338,1384.275,1485.419,1384.934,1485.419,1386.518Zm-25.46,7.418v-12.268h2.881l.213,1.036a2.205,2.205,0,0,1,2.773-1.036v3.225a2.272,2.272,0,0,0-2.534.729v8.314Zm6.682,0v-12.267h3.346v12.267Zm0-16.192,3.346-.743v2.846l-3.346.756Z data-name="Color Overlay"fill=#faa61a transform="translate(-1444 -1377)"/></svg>
                                                    </span>

                                                    <span class="price">
                                                        <strong id="<?php echo $option['price']; ?>"><?php echo $option['price']; ?></strong>
                                                        <sup><?php  echo get_currency( $option['currency'] ); ?></sup>
                                                    </span>
                                                </div>
                                            </div>

                                            <?php $features = $options['features']; if($features) : ?>
                                            <div class="c-plan-features">
                                                <div class="c-features">
                                                    <?php foreach($features as $feature) : ?>
                                                        <div class="c-feature">
                                                            <div class="c-feature__icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="66" height="41" viewBox="0 0 66 41"><g id="Vector_Smart_Object_copy_5" data-name="Vector Smart Object copy 5" transform="translate(-1265 -3549)"><g id="Vector_Smart_Object_copy_5-2" data-name="Vector Smart Object copy 5" transform="translate(1265 3549)"><path id="Path_340" data-name="Path 340" d="M52.565,0V2.029h9.643L36.037,26.948,24.4,15.178,0,39.569,1.43,41,24.386,18.05,36,29.789,63.972,3.155V13.443H66V0Z" fill="#006b38"></path></g><path id="Color_Overlay" data-name="Color Overlay" d="M1265,3588.57l24.4-24.391,11.641,11.77,26.171-24.919h-9.643V3549H1331v13.443h-2.028v-10.288L1301,3578.789l-11.611-11.739L1266.43,3590Z" fill="#faa61a"></path></g></svg>
                                                            </div>

                                                            <div class="c-feature__text">
                                                                <span><?php echo $feature['text']; ?></span>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <div class="c-plan-footer">
                                                <div class="c-plan-footer__notice">
                                                    <p><strong>Nu uita:</strong> Planul se factureaza trimestrial!</p>
                                                </div>



                                                <div class="c-plan-footer__button">
                                                    <a href="<?php echo isset( $option['url'] ) && is_array($option['url']) ? $option['url']['url'] : ''; ?>" class="btn btn--primary btn--green" id="<?php echo $post->post_name; ?>-url-<?php echo $option['price']; ?>">
                                                        <span>
                                                            Abonare
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <?php endwhile; wp_reset_postdata(); ?>
                    <div class="item">
                        <div class="c-plan-content c-plan-content-error"><?php echo "Niciun rezultat de afișat pentru selecția făcută. Te rugăm să selectezi alte opțiuni.";?></div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>
<!-- training plan -->