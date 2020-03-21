<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="bannerPricipalPortifa">
    <div class="container">
        <?php if( isset($button) ){ ?>
            <a href="<?php echo htmlspecialchars( $button["link"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="button1" target="_blank"><?php echo htmlspecialchars( $button["text"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
        <?php } ?>
        <div class="img grid-2">
            <img src="<?php echo ROUTE_WEBSITE; ?>/img/portfolio/<?php echo htmlspecialchars( $image, ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
        </div>
    </div>
</div>