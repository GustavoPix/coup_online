<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="banner1">
    <div class="extracontainer">
        <div class="container">
            <div class="grid-1">
                <h1><?php echo htmlspecialchars( $titulo, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
            </div>
            <div class="grid-1">
                <h2> <?php $counter1=-1;  if( isset($textoLines) && ( is_array($textoLines) || $textoLines instanceof Traversable ) && sizeof($textoLines) ) foreach( $textoLines as $key1 => $value1 ){ $counter1++; ?> <?php echo htmlspecialchars( $value1, ENT_COMPAT, 'UTF-8', FALSE ); ?></br><?php } ?></h2>
            </div>
        </div>
    </div>
</div>