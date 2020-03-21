<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="solucaoPortifa">
    <div class="container">
        <h2 class="grid-1">Solução</h2>
        <p class="grid-1"><?php echo htmlspecialchars( $solucao, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
        <div class="grid-1 imgGrande">
            <img src="<?php echo ROUTE_WEBSITE; ?>/img/portfolio/<?php echo htmlspecialchars( $image1, ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
        </div>
        <div class="grid-1 imgPequena">
            <div class="img">
                <img src="<?php echo ROUTE_WEBSITE; ?>/img/portfolio/<?php echo htmlspecialchars( $image2, ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
            </div>
            <div class="img">
                <img src="<?php echo ROUTE_WEBSITE; ?>/img/portfolio/<?php echo htmlspecialchars( $image3, ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
            </div>
        </div>
        <h2 class="grid-1">Resultado</h2>
        <p class="grid-1"><?php echo htmlspecialchars( $resultado, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
    </div>
</div>