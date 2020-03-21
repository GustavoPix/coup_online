<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="processos">
    <div class="container">
        <h2 class="grid-2">Processo de criação</h2>
        <?php $counter1=-1;  if( isset($etapas) && ( is_array($etapas) || $etapas instanceof Traversable ) && sizeof($etapas) ) foreach( $etapas as $key1 => $value1 ){ $counter1++; ?>
            <div class="grid-1">
                <div class="cabecalho">
                    <p class="number"><?php echo htmlspecialchars( $key1+1, ENT_COMPAT, 'UTF-8', FALSE ); ?>.</p>
                    <p class="titulo"><?php echo htmlspecialchars( $value1["titulo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                </div>
                <div class="resumo">
                    <p><?php echo htmlspecialchars( $value1["resumo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>