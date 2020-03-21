<?php if(!class_exists('Rain\Tpl')){exit;}?><div id="newProjectForm">
    <transition name="overlay">
        <div class="overlay" v-if="menuOpen" @click="menuOpen = false">
        </div>
    </transition>
    <transition name="header">
        <div class="extracontainer formNewProject" key="formNewProject" v-if="menuOpen">
            <div class="container">
                <div class="logoAndClose">
                    <div class="logo">
                        <a href="<?php echo ROUTE; ?>/">
                            <?php require $this->checkTemplate(''.htmlspecialchars( $logo, ENT_COMPAT, 'UTF-8', FALSE ));?>
                        </a>
                    </div>
                    <div class="buttonMenu">
                        <?php require $this->checkTemplate("close");?>
                    </div>
                </div>
                <div class="grid-1">
                    <h3>Iniciar projeto</h3>
                </div>
                <transition name="newProject" mode="out-in">
                    <div class="grid-1" v-if="page == 0" key="project_one">
                        <h4>Obrigado por começar um projeto conosco! Bem, nos conte um pouco sobre você</h4>
                        <form action="">
                            <label for="name_project">Qual o seu nome?</label>
                            <input type="text" name="name" id="name_project" placeholder="Seu nome" v-model="nome">
                            <label for="email_project">Qual o seu email?</label>
                            <input type="text" name="email" id="email_project" placeholder="email@meuemail.com" v-model="email">
                            <label for="telefone_project">Se preferir, deixe o seu telefone</label>
                            <input type="text" name="telefone" id="telefone_project" placeholder="11 98888-7777" v-model="telefone">
                            <label for="company_project">Possui uma empresa? Como ela se chama?</label>
                            <input type="text" name="company" id="company_project" placeholder="Minha empresa" v-model="empresa">
                            <div v-if="errorPage1">
                                <p>{{errorPage1}}</p>
                            </div>
                            <button type="button" class="button1" @click="nextPage">Continuar</button>
                        </form>
                    </div>
                    <div class="grid-1" v-if="page == 1" key="project_two">
                        <button type="button" class="button1" @click="page=0">Voltar</button>
                        <h4>Nos conte um pouco bobra o seu projeto {{nome}}, se precisar editar alguma informação pessoal, basta
                            clicar no botão Voltar logo acima</h4>
                        <form action="">
                            <label for="project_project">Pretendo fazer</label>
                            <select name="project_project" id="project_project" v-model="tipo_projeto">
                                <option value="">Escolha uma das opções</option>
                                <option value="1">Um site de apenas 1 página</option>
                                <option value="2">Um site com várias páginas</option>
                                <option value="3">Um site com uma sessão blog</option>
                                <option value="4">Um sistema online</option>
                                <option value="5">Um sistema que trabalhe offline</option>
                                <option value="6">Gostaria de um projeto diferente</option>
                            </select>
                            <label for="note_project">Descreva um pouco sobre o seu projeto</label>
                            <textarea v-model="mensagem" name="note_project" id="note_project" placeholder="Descreva sobre o projeto, os requisitos e as metas a serem alcançadas."></textarea>
                            <label for="file_project">Gostaria de enviar algum arquivo?</label>
                        
                            <label class="input" for="file_project">
                                <p>{{files | fil_files}}</p>
                                <?php require $this->checkTemplate("check");?>
                            </label>
                            <p>Aceitamos os arquivos: doc, pdf, txt, jpg e png</p>
                            <input type="file" class="hidden" id="file_project" name="file_project" @change="activeFileChange" multiple>
                            <div v-if="errorPage2">
                                <p>{{errorPage2}}</p>
                            </div>
                            <button type="button" class="button1" @click="nextPage">Enviar</button>
                        </form>
                    </div>
                    <div class="grid-1" v-if="page == 2" key="project_tree">
                        <form action="">
                            <label>Enviando...</label>
                        </form>
                    </div>
                    <div class="grid-1" v-if="page == 3" key="project_tree">
                        <form action="">
                            <label>Recebemos sua mensagem, muito obrigado! Responderemos o mais breve possível.</label>
                        </form>
                    </div>
                </transition>
            </div>
        </div>
    </transition>
        
</div>
<script src="<?php echo ROUTE_WEBSITE; ?>/js/newProjectForm.js"></script>