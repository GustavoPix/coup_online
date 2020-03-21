<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="newsletter" id="newsletter">
    <div class="extracontainer">
        <div class="container">
            <div class="titulos">
                <div class="grid-1">
                    <h3>Assine nossa Newsletter</h3>
                </div>
                <div class="grid-1">
                    <p>Receba nossas novidades em primeira mão, assine nossa newsletter digitando seu e-mail abaixo!</p>
                </div>
            </div>
            <div
                :class="{active : status > 0}" 
                class="input" 
            >

                <div class="grid-1">
                    <input type="text" placeholder="email@email.com" v-model="email">
                    <div class="img" @click="sendEmail">
                        <?php require $this->checkTemplate("banners/check");?>
                    </div>
                    <span v-if="status == 1">Enviando</span>
                    <span v-if="status == 2">Obrigado por se cadastrar!</span>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="<?php echo ROUTE_WEBSITE; ?>/js/newsletter.js"></script>