<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="featuresPortifa">
    <div class="container">
        <h2 class="grid-1">Features</h2>
        <p class="grid-1"><?php echo htmlspecialchars( $texto, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
        <div class="grid-1 img">
            <img src="<?php echo ROUTE_WEBSITE; ?>/img/portfolio/<?php echo htmlspecialchars( $image1, ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
        </div>
        <div class="grid-1 img">
            <img src="<?php echo ROUTE_WEBSITE; ?>/img/portfolio/<?php echo htmlspecialchars( $image2, ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
        </div>
    </div>
</div>