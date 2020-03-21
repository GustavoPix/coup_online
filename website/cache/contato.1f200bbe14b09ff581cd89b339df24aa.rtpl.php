<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="contato" id="contactForm">
    <button class="button1" onclick="vm_newProjectForm.open()">Iniciar Projeto</button>
    <div class="extracontainer">
        <div class="container">
            <div class="titulos">
                <div class="grid-1">
                    <h3>Diga um olá!</h3>
                </div>
                <transition name="newProject" mode="out-in">
                    <div class="grid-1" v-if="page == 0" key="form_one">
                        <p>Possui alguma duvida? envie-nos um email.</p>
                        <form action="none">
                            <label for="name">Como você se chama?</label>
                            <input type="text" name="name" id="name" placeholder="Seu nome" v-model="nome">
                            <label for="email">Qual o seu email?</label>
                            <input type="email" name="email" id="email" placeholder="email@meuemail.com" v-model="email">
                            <label for="message">Qual a sua dúvida?</label>
                            <textarea name="message" id="message" placeholder="Diga-nos qual a sua dúvida aqui" v-model="mensagem"></textarea>
                            <div v-if="error">
                                <p>{{error}}</p>
                            </div>
                            <button type="button" class="button1" @click="nextPage">Enviar</button>
                        </form>
                    </div>
                    <div class="grid-1" v-if="page == 1" key="form_two">
                        <p class="orange">Enviando...</p>
                    </div>
                    <div class="grid-1" v-if="page == 2" key="form_two">
                        <p class="orange">Recebemos sua mensagem, muito obrigado! Responderemos o mais breve possível.</p>
                    </div>
                </transition>
            </div>
        </div>
    </div>
    <button class="button1" onclick="vm_newProjectForm.open()">Iniciar Projeto</button>
</div>
<script src="<?php echo ROUTE_WEBSITE; ?>/js/contactForm.js"></script>