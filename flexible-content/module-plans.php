<!-- plans -->
<?php if( isset( $content[ 'plans'] ) && is_array($content['plans'] ) ) : ?>
<section class="module module--plans u-mg u-mg--md">
    <?php $countPlans = 0; foreach( $content[ 'plans' ] as $plan ): $countPlans++; ?>
    <div class="c-plans <?php echo $countPlans === 1 ?  'is-active' : ''; ?>">
        <div class="c-header-lines is-green c-plans__header">
            <div class="container">
                <div class="inner">
                    <span><?php echo $plan[ 'title' ];  ?></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="" viewBox="0 0 256 256"><path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path></svg>
                </div>
            </div>
        </div>

        <div class="c-plans__cards">
            <div class="container">
                <div class="c-cards c-cards--plans fx">
                    <?php if( isset( $plan['cards'] ) && is_array( $plan['cards'] ) ): ?>
                        <?php foreach($plan['cards'] as $item ) : ?>
                            <div class="c-card c-card--plan<?php if($item['items']) : ?> has-includes<?php endif; ?>">
                                <div class="inner c-card--info">
                                        <div>
                                            <div class="c-card__header">
                                                <span class="name"><?php echo $item['title']; ?></span>
                                                <span class="tagline"><?php echo $item['tagline']; ?></span>
                                            </div>

                                            <div class="c-card__text">
                                                <p><?php echo $item['text']; ?></p>
                                            </div>
                                        </div>
                                        <div class="c-card__footer">
                                            <div class="u-stripe-price">
                                            <span>
                                                <svg height=21 viewBox="0 0 48 21"width=48 xmlns=http://www.w3.org/2000/svg><path d=M1471.226,1381.653h2.939l.174.869a3.679,3.679,0,0,1,2.614-1.094h-.006c2.334,0,4.533,2.216,4.547,6.281,0,4.451-2.172,6.464-4.559,6.464a3.648,3.648,0,0,1-2.361-.883l-.014,3.967-3.333.743Zm3.339,3.575.013,5.2a1.951,1.951,0,0,0,1.574.659c1.227,0,2.053-1.4,2.053-3.281,0-1.837-.84-3.267-2.053-3.267A1.942,1.942,0,0,0,1474.565,1385.228Zm-21.445,5.35.013-11.229,3.254-.73-.014,3.049h2.534v2.986h-2.534v4.97c0,2.074,2.106,1.43,2.534,1.247v2.847a4.93,4.93,0,0,1-2.334.463A3.438,3.438,0,0,1,1453.119,1390.577Zm-8.973,2.81v-3.336a7.994,7.994,0,0,0,3.641,1.122c.746,0,1.28-.211,1.28-.855,0-1.669-5.067-1.052-5.067-4.921,0-2.481,1.8-3.968,4.506-3.968a8.4,8.4,0,0,1,3.307.645v3.288a7.168,7.168,0,0,0-3.307-.9c-.707,0-1.133.209-1.133.756h0c0,1.57,5.08.827,5.093,5,0,2.509-1.907,3.954-4.68,3.954A8.849,8.849,0,0,1,1444.146,1393.387Zm37.946-5.567c0-3.561,1.921-6.394,5.093-6.394s4.814,2.833,4.814,6.422h0c0,.337-.026,1.065-.026,1.247h-6.52c.147,1.654,1.293,2.131,2.587,2.131a6.791,6.791,0,0,0,3.267-.771v2.8a7.145,7.145,0,0,1-3.694.911C1484.358,1394.171,1482.092,1392.041,1482.092,1387.821Zm3.326-1.3h3.441c0-1.584-.868-2.243-1.68-2.243C1486.338,1384.275,1485.419,1384.934,1485.419,1386.518Zm-25.46,7.418v-12.268h2.881l.213,1.036a2.205,2.205,0,0,1,2.773-1.036v3.225a2.272,2.272,0,0,0-2.534.729v8.314Zm6.682,0v-12.267h3.346v12.267Zm0-16.192,3.346-.743v2.846l-3.346.756Z data-name="Color Overlay"fill=#faa61a transform="translate(-1444 -1377)"/></svg>
                                            </span>
                                                <span><strong><?php echo $item['price']; ?></strong> <sup>Ron</sup> </span>
                                            </div>

                                            <a href="<?php echo isset($item['button_url']['url']) ? $item['button_url']['url'] : "#"; ?>" class="btn btn--primary btn--green">
                                            <span>Abonare
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                                            </span>
                                            </a>
                                        </div>


                                </div>

                                <?php if($item['items']) : ?>
                                    <div class="inner inner--includes">
                                        <div class="c-card__includes">
                                            <h4>Include:</h4>
                                            <ul>
                                                <?php foreach($item['items'] as $line ) : ?>
                                                    <li>
                                                        <svg height=16 viewBox="0 0 26 16"width=26 xmlns=http://www.w3.org/2000/svg><g data-name="Vector Smart Object copy 8"id=Vector_Smart_Object_copy_8 transform=translate(0)><path d=M20.689,0V.792h3.794l-10.3,9.743L9.625,5.941,0,15.446.559,16,9.586,7.049l4.593,4.594L25.2,1.228v4H26V0Z data-name="Path 323"fill=#faa61a id=Path_323 /></g></svg>
                                                        <?php echo $line['item']; ?>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</section>
<?php endif; ?>
<!-- plans -->