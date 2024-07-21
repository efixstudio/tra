<?php 
    $feed = $content['feed'];
    
    if($feed === 'global') :
        $content =  get_field('faqs_group','options');
    else :
        $content = $content['faqs'];
    endif;
?>

<!-- faq's -->
<section class="module module--faqs u-mg u-mg--md">
    <div class="container">
        <div class="c-togglers">
            <div class="c-togglers__header">
                <span><?php echo $content['heading_title']; ?></span>
            </div>

            <?php foreach($content['faqs'] as $item) : ?>
                <div class="c-toggler">
                    <div class="c-toggler__header">
                        <span class="c-toggler__header-title"><?php echo $item['title']; ?></span>
                        <span class="c-toggler__header-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 7.21875 5.78125 L 5.78125 7.21875 L 14.5625 16 L 5.78125 24.78125 L 7.21875 26.21875 L 16 17.4375 L 24.78125 26.21875 L 26.21875 24.78125 L 17.4375 16 L 26.21875 7.21875 L 24.78125 5.78125 L 16 14.5625 Z"/></svg></span>
                    </div>

                    <div class="c-toggler__content">
                        <div class="c-editor">
                            <?php echo $item['text']; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- faq's -->