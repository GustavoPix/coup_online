<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="equipe">
    <div class="container">
        <h2 class="grid-2">Nossa equipe</h2>
        <?php $counter1=-1;  if( isset($equipe) && ( is_array($equipe) || $equipe instanceof Traversable ) && sizeof($equipe) ) foreach( $equipe as $key1 => $value1 ){ $counter1++; ?>
            <div class="img grid-1">
                <p><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                <img src="<?php echo ROUTE_WEBSITE; ?>/img/picture/<?php echo htmlspecialchars( $value1["foto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
            </div>
            <div class="infos grid-1">
                <p><?php echo htmlspecialchars( $value1["frase"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                <ul class="social">
                    <?php $counter2=-1;  if( isset($value1["social"]) && ( is_array($value1["social"]) || $value1["social"] instanceof Traversable ) && sizeof($value1["social"]) ) foreach( $value1["social"] as $key2 => $value2 ){ $counter2++; ?>
                        <li>
                            <a href="<?php echo htmlspecialchars( $value2["link"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" target="_blank">
                                <?php require $this->checkTemplate(''.htmlspecialchars( $value2["image"], ENT_COMPAT, 'UTF-8', FALSE ));?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
    </div>
</div>