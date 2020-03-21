<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="servicosOferecidos" id="servicosOferecidos">
    <div class="extracontainer">
        <div class="container">
            <div class="titulos">
                <div class="grid-1">
                    <h3>Serviços</h3>
                </div>
                <div class="grid-1">
                    <p>Clique em um tipo de serviço para saber mais.</p>
                </div>
            </div>
            <div class="listAllProjects">
                <ul>
                    <li :class="{active : servicoSelecionado == 1}" class="grid-1" @click="selectService(1)">
                        <span>Website</span>
                    </li>
                    <li :class="{active : servicoSelecionado == 2}" class="grid-1" @click="selectService(2)">
                        <span>Software</span>
                    </li>
                </ul>
            </div>
            <div v-if="servicoSelecionado == 1" class="sectionService">
                <h2 class="grid-2">Website</h2>
                <div>
                    <h3 class="grid-1">O que fazemos</h3>
                    <p class="grid-1">Criamos um site sob medida para a sua empresa, projeto ou evento, uma ferramenta
                        perfeita para marketing para atrair e manter novos clientes com foco em design, criatividade e
                        usabilidade.</p>
                </div>
                <div>
                    <h3 class="grid-1">O projeto</h3>
                    <p class="grid-1">Trabalhamos junto do cliente, explicando os processos e interando o cliente dentro
                        do projeto. A cada etapa do processo, o cliente esta dentro do projeto para sugerir melhoras e
                        aprovar as funcionalidades de seu novo website.</p>
                </div>
            </div>
            <div v-if="servicoSelecionado == 2" class="sectionService">
                <h2 class="grid-2">Software</h2>
                <div>
                    <h3 class="grid-1">O que fazemos</h3>
                    <p class="grid-1">Podemos criar um software para automação de processos, integrações de API,
                        organização de empresa, podendo ser online ou mesmo offline dependendo das necessidades de sua
                        aplicação.</p>
                </div>
                <div>
                    <h3 class="grid-1">O projeto</h3>
                    <p class="grid-1">A construção de um software costuma ter seu tempo prolongado com vários ajustes
                        conforme o tempo. Conversamos com o cliente e estabelecemos as prioridades das funções.
                        Trabalhamos em cima das prioridades e entregamos os poucos, onde o cliente já pode estar
                        utilizando mesmo sem possuir suas funcionalidades por completo.</p>
                </div>
            </div>
        </div>
    </div>
    <button href="" class="button1" onclick="vm_newProjectForm.open()">Iniciar projeto</button>
</div>
<script src="<?php echo ROUTE_WEBSITE; ?>/js/servicos.js"></script>