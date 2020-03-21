<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="listBlogs">
    <div class="container">
        <h2 class="grid-2"><?php echo htmlspecialchars( $titulo, ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
        <ul>
            <?php $counter1=-1;  if( isset($posts) && ( is_array($posts) || $posts instanceof Traversable ) && sizeof($posts) ) foreach( $posts as $key1 => $value1 ){ $counter1++; ?>
                <li class="grid-1">
                    <a href="<?php echo ROUTE; ?>/blog/<?php echo htmlspecialchars( $value1["link"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        <h3><?php echo htmlspecialchars( $value1["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>
                        <div class="img">
                            <img src="<?php echo ROUTE_WEBSITE; ?>/img/picture/<?php echo htmlspecialchars( $value1["img"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
                        </div>
                    </a>
                </li>
            <?php } ?> 
        </ul>
        <?php if( isset($buttonTitle) ){ ?>
            <button class="button1"><?php echo htmlspecialchars( $buttonTitle, ENT_COMPAT, 'UTF-8', FALSE ); ?></button>
        <?php } ?>
    </div>
</div>