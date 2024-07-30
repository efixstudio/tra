        <?php $footer = get_field('footer_g','options'); ?>
        <?php $social = get_field('social_links','options'); ?>
        </main>
        <div class="c-footer">
            <?php if( ! is_404() ) : ?>
                <?php if($footer['membership_cta_url'] || $footer['newsletter_form_shortcode'] ): ?>
                <div class="c-footer-top">
                <div class="inner">
                    <div class="container">
                        <!-- Box -->
                        <?php if( $footer['membership_cta_url'] ): ?>
                            <div class="row">
                                <div class="u-cols fx fx--sb">
                                    <div class="u-col u-col--left">
                                        <div class="row__text">
                                            <span><?php echo $footer['membership_cta_title']; ?></span>
                                            <div class="c-editor">
                                                <?php echo $footer['membership_cta_description']; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="u-col u-col--right">
                                        <div class="row__button is-outline">
                                            <a href="<?php echo $footer['membership_cta_url']['url']; ?>" <?php echo $footer['membership_cta_url']['target'] ? 'target="' . $footer['membership_cta_url']['target'] . '"' : ''; ?>><?php echo $footer['membership_cta_url']['title']; ?>
                                                <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <!-- Box -->
                        <?php if( $footer['newsletter_form_shortcode'] ): ?>
                            <div class="row">
                                <div class="u-cols fx fx--sb">
                                    <div class="u-col u-col--left">
                                        <div class="row__text">
                                            <span><?php echo $footer['newsletter_title']; ?></span>
                                            <div class="c-editor">
                                                <?php echo $footer['newsletter_description']; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="u-col u-col--right">
                                        <div class="u-form u-form--white u-form--email">
                                            <?php echo do_shortcode( $footer['newsletter_form_shortcode'] ); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        
                <div class="c-footer-partners bg bg--white u-pd u-pd--md">
                <div class="container">
                    <h2 class="c-footer-partners__title"><fit-text><?php echo $footer['partners_title']; ?></fit-text></h2>
                    
                    <div class="c-ss c-ss--partners">
                        <div class="u-ss u-ss--partners">
                            <?php foreach($footer['partners_gallery'] as $item ) : ?>
                                <div class="u-ss__slide">
                                    <?php get_image($item, 'original-300'); ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="c-footer-bottom">
                <div class="container">
                    <div class="row row--top">
                        <div class="u-cols fx">
                            <div class="u-col u-col--left ">
                                <div class="row__logo">
                                    <a href="<?php echo site_url(); ?>" title="TrailRunning Academy">
                                        <svg height=60 viewBox="0 0 287 60"width=287 xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink><defs><clipPath id=clip-path-footerlogo-1><rect fill=none height=60 id=crop width=287 /></clipPath><clipPath id=clip-path-footerlogo-2><rect fill=none height=60.001 id=Rectangle_113 width=287 data-name="Rectangle 113"transform="translate(0 -0.001)"/></clipPath></defs><g data-name="Vector Smart Object"id=Vector_Smart_Object clip-path=url(#clip-path-footer-logo-1)><g data-name="Group 198"id=Group_198><g data-name="Group 197"id=Group_197 clip-path=url(#clip-path-footerlogo-2)><text fill=#fff font-family=Helvetica font-size=26 id=TRAILRUNNING transform="translate(0 22.222)"><tspan y=0 letter-spacing=-0.099em x=0>TR</tspan><tspan y=0 letter-spacing=-0.1em>AI</tspan><tspan y=0 letter-spacing=-0.099em>L</tspan><tspan y=0 letter-spacing=-0.104em>R</tspan><tspan y=0 letter-spacing=-0.099em>UN</tspan><tspan y=0 letter-spacing=-0.1em>N</tspan><tspan y=0 letter-spacing=-0.099em>I</tspan><tspan y=0 letter-spacing=-0.1em>N</tspan><tspan y=0>G</tspan></text><text fill=#fff font-family=Helvetica font-size=26 id=ACADEMY transform="translate(0 53.596)"><tspan y=0 letter-spacing=-0.12em x=0>A</tspan><tspan y=0 letter-spacing=-0.099em>C</tspan><tspan y=0 letter-spacing=-0.1em>A</tspan><tspan y=0 letter-spacing=-0.099em>DEM</tspan><tspan y=0>Y</tspan></text></g></g></g></svg>
                                    </a>
                                </div>

                                <div class="row__contact">
                                    <?php
                                        echo $footer['footer_contact'] ?? '';
                                    ?>
                                </div>
                                <div class="fx fx--ac fx--jc" style="gap: 15px; margin-top: 30px">
                                    <a href="https://anpc.ro/ce-este-sal/" target="_blank" rel=”nofollow” title="ANPC SAL">
                                        <img src="<?php echo  TRA_THEME_URI . '/assets/img/SAL.svg'; ?>" alt="ANPC SAL" />
                                    </a>
                                    <a href="https://ec.europa.eu/consumers/odr" target="_blank" rel=”nofollow” title="ANPC SOL">
                                        <img src="<?php echo TRA_THEME_URI . '/assets/img/SOL.svg'; ?>" alt="ANPC SOL"/>
                                    </a>
                                </div>
                            </div>

                            <div class="u-col u-col--right ">
                                    <?php
                                        $footerMenu = wp_nav_menu([
                                            'theme_location'  => 'footer_menu',
                                            'menu_class'      => 'c-menus',
                                            'menu_id'         => 'footer-menu',
                                            'walker'          => TrailRunningAcademy\Coordinator\Menus::instance()->footerMenu,
                                            'depth'           => 2,
                                            'echo'            => false,
                                            'fallback_cb'     => false,
                                        ]);
                                        if( $footerMenu !== null )
                                            echo $footerMenu;
                                    ?>
                            </div>
                        </div>
                    </div>

                    <div class="row row--lg row--middle">
                        <div class="u-cols fx fx--sb fx--ac">
                            <div class="u-col u-col--left">

                                <?php
                                $footerExtraMenu = wp_nav_menu([
                                    'theme_location'  => 'footer_extra_links',
                                    'menu_id'         => 'footer-extra-menu',
                                    'walker'          => TrailRunningAcademy\Coordinator\Menus::instance()->footerExtraMenu,
                                    'echo'            => false,
                                    'fallback_cb'     => false,
                                    'depth'           => 1
                                ]);
                                if( $footerExtraMenu !== null )
                                    echo $footerExtraMenu;
                                ?>
                            </div>

                            <div class="u-col u-col--right">
                                <div class="stripe">
                                    <span>Plati securizate prin</span>
                                    <svg id="Vector_Smart_Object" data-name="Vector Smart Object" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="86" height="36" viewBox="0 0 86 36"><defs><clipPath id="clip-path-stripe"><rect id="Rectangle_114" data-name="Rectangle 114" width="86" height="36" transform="translate(0 0)" fill="none"/></clipPath></defs><g id="Group_200" data-name="Group 200"><g id="Group_199" data-name="Group 199" clip-path="url(#clip-path-stripe)"><path id="Path_176" data-name="Path 176" d="M86,18.6C86,12.446,83.038,7.59,77.375,7.59c-5.684,0-9.126,4.855-9.126,10.959,0,7.235,4.061,10.887,9.89,10.887a13.25,13.25,0,0,0,6.617-1.562V23.068A12.615,12.615,0,0,1,78.9,24.389c-2.317,0-4.372-.818-4.635-3.653h11.68c0-.314.048-1.562.048-2.139ZM74.209,16.316c0-2.716,1.648-3.845,3.154-3.845,1.457,0,3.01,1.129,3.01,3.845ZM59.04,7.592a6.73,6.73,0,0,0-4.682,1.874l-.312-1.49H48.78V36l5.972-1.273.024-6.8a6.7,6.7,0,0,0,4.229,1.514c4.276,0,8.17-3.45,8.17-11.08-.024-6.97-3.965-10.768-8.147-10.768Zm-1.434,16.56a3.566,3.566,0,0,1-2.819-1.129l-.024-8.918a3.544,3.544,0,0,1,2.843-1.177c2.174,0,3.679,2.452,3.679,5.6,0,3.22-1.481,5.625-3.679,5.625M40.564,6.174l6-1.3V0l-6,1.273Zm0,1.826h6V29.03h-6ZM34.136,9.778,33.754,8h-5.16V29.032h5.972V14.778A4.2,4.2,0,0,1,39.1,13.529V8a4.042,4.042,0,0,0-4.969,1.777Zm-11.944-7L16.364,4.025,16.34,23.276a6.021,6.021,0,0,0,6.187,6.177,9.16,9.16,0,0,0,4.181-.795V23.779c-.765.314-4.539,1.418-4.539-2.139V13.12h4.539V8H22.166ZM6.044,14.094c0-.938.765-1.3,2.031-1.3A13.293,13.293,0,0,1,14,14.334V8.7A15.639,15.639,0,0,0,8.074,7.593C3.225,7.593,0,10.141,0,14.395c0,6.633,9.078,5.575,9.078,8.437,0,1.105-.956,1.466-2.293,1.466A14.8,14.8,0,0,1,.263,22.374v5.719a16.45,16.45,0,0,0,6.522,1.359c4.969,0,8.386-2.476,8.386-6.778-.024-7.161-9.126-5.888-9.126-8.58Z" fill="#fff" fill-rule="evenodd"/></g></g></svg>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row row--lg row--bottom">
                        <div class="u-cols fx fx--sb fx--ac">
                            <div class="u-col u-col--left">
                                <?php if( $social ) : ?>
                                <span>Urmareste-ne:</span>
                                <ul>
                                    <?php foreach( $social as $social_link ) : ?>
                                        <li><a href="<?php echo $social_link['link']['url']; ?>" target="_blank"><?php echo $social_link['link']['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                            </div>

                            <div class="u-col u-col--right">
                                <div class="credits">
                                    <a href="https://the4thfloor.ro/" target="_blank">
                                        <span>Baked and served by</span>
                                        <svg id="Vector_Smart_Object" data-name="Vector Smart Object" xmlns="http://www.w3.org/2000/svg" width="49" height="50" viewBox="0 0 49 50"><path id="Path_177" data-name="Path 177" d="M12.465,7.62v6.247L8.482,16.2,4.5,13.868V2.15L7.952.112V4.054l4.513-2.628V5.448L7.952,8.076v4.4l1.062-.616v-2.2Z" fill="#fff"/><path id="Path_178" data-name="Path 178" d="M21.716,0,18.31,2.117V5.741l-1.158.614V.113L13.747,2.123V20.6l3.405-2.01v-8.27l1.158-.615v7.55l3.406-2.117Z" fill="#fff"/><path id="Path_179" data-name="Path 179" d="M30.512,8.66v4.9l-3.895,2.281-3.894-2.281V2.394L26.618.113l3.895,2.281V7.979L26.1,10.548V12.2l1.038-.6v-.944ZM26.1,6.615l1.038-.6V3.757l-1.038.6Z" fill="#fff"/><path id="Path_180" data-name="Path 180" d="M0,17.4V31.767l4.413-2.6v5.571l3.376-1.993V18.106L4.413,20.1v5.139l-1.038.6V15.406Z" fill="#fff"/><path id="Path_181" data-name="Path 181" d="M17.136,26.324v6.336L13,35.12,8.965,32.754V17.473l3.5-2.067v7.4l4.671-2.759v4.078l-4.671,2.76V31.34l1.282-.746v-2.23Z" fill="#fff"/><path id="Path_182" data-name="Path 182" d="M18.31,18.491,21.685,16.5v8.373l1.038-.6V20.676L26.1,18.683V33.127L22.723,35.12V28.2l-1.038.6V40L18.31,41.988Z" fill="#fff"/><path id="Path_183" data-name="Path 183" d="M4.407,36.3V50l3.437-2.03V45.487l4.5-2.617V38.864l-4.5,2.617V38.3L8.9,37.689v2.483l3.438-2.029V36.3L8.373,33.977Z" fill="#fff"/><path id="Path_184" data-name="Path 184" d="M13.7,36.006v11.67L17.662,50l4.05-2.408V41.37l-3.4,2.1v2.19l-1.177.628V33.977Z" fill="#fff"/><path id="Path_185" data-name="Path 185" d="M26.161,38.3l1.058-.614v7.985l-1.058.614Zm-3.437-2V47.676L26.69,50l3.967-2.324V36.3L26.69,33.977Z" fill="#fff"/><path id="Path_186" data-name="Path 186" d="M35.333,38.3l1.058-.614v7.985l-1.058.614Zm-3.437-2V47.676L35.861,50l3.967-2.324V36.3l-3.967-2.324Z" fill="#fff"/><path id="Path_187" data-name="Path 187" d="M44.5,38.3l1.058-.614V40.6l-1.058.615Zm-3.437-2V50L44.5,47.97V44.98l1.058-.614V50L49,47.97V44.178L46.62,42.79,49,41.4V36.3l-3.967-2.324Z" fill="#fff"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        </div><!-- end of site wrapper -->

        <?php wp_footer(); ?>
    </body>
</html>