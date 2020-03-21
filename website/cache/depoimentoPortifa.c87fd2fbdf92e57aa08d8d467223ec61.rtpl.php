<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="depoimentoPortifa">
    <div class="extracontainer">
        <div class="container">
            <?php if( $depoimento!='' ){ ?>
            <div class="grid-1">
                <h3>Depoimento</h3>
            </div>
            <div class="grid-1">
                <p><?php echo htmlspecialchars( $depoimento, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                <span><?php echo htmlspecialchars( $nomeDepoente, ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
            </div>
            <?php } ?>
            <h2 class="grid-2">Tecnologias utilizada</h2>
            <ul>
                <?php $counter1=-1;  if( isset($tecnologias) && ( is_array($tecnologias) || $tecnologias instanceof Traversable ) && sizeof($tecnologias) ) foreach( $tecnologias as $key1 => $value1 ){ $counter1++; ?>
                    <li>
                        <?php require $this->checkTemplate('portifolio/'.htmlspecialchars( $value1, ENT_COMPAT, 'UTF-8', FALSE ));?>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <button href="" class="button1" onclick="vm_newProjectForm.open()">Iniciar projeto</button>
</div>