<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="solucoes">
    <div class="extracontainer">
        <div class="container">
            <div class="grid-1">
                <h3>Todos os nossos projetos</h3>
            </div>
            <div class="grid-1 listSolucao">
                <p>Clique nos projetos para conhecer um pouco sobre o processo de criação de cada um deles.</p>
            </div>
            <div class="listAllProjects">
                <ul>
                    <?php $counter1=-1;  if( isset($projects) && ( is_array($projects) || $projects instanceof Traversable ) && sizeof($projects) ) foreach( $projects as $key1 => $value1 ){ $counter1++; ?>
                        <li class="grid-1"><a href="<?php echo ROUTE; ?>/projeto/<?php echo htmlspecialchars( $value1["link"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="grid-2">
                <h2>Nossos parceiros</h2>
            </div>
            <ul class="logos">
                <li>
                    <a href="https://ilustraviz.com" target="_blank"><?php require $this->checkTemplate("logoIlustraviz");?></a>
                </li>
            </ul>
        </div>
    </div>
    <button href="" class="button1" onclick="vm_newProjectForm.open()">Iniciar projeto</button>
</div>