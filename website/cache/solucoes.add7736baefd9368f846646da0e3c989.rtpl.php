<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="solucoes">
    <div class="extracontainer">
        <div class="container">
            <div class="grid-1">
                <h3>Nossas soluções</h3>
            </div>
            <div class="grid-1 listSolucao">
                <p>Procurando um website para a sua empresa ou evento? Gostaria de tirar um software da sua emrpesa do papel? Juntos, vamos fazer isso acontecer.</p>
                <ul>
                    <li><a href="">Website institucional</a></li>
                    <li><a href="">Software integrado</a></li>
                    <li><a href="">Integração de APIs</a></li>
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
    <button class="button1" onclick="vm_newProjectForm.open()">Iniciar projeto</button>
</div>