<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato|Space+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ROUTE_WEBSITE; ?>/css/style.css">
    <script src="<?php echo ROUTE_WEBSITE; ?>/js/plugins/vue.js"></script>
    <script src="<?php echo ROUTE_WEBSITE; ?>/js/plugins/axios.js"></script>
    <title>Prismacode</title>
</head>

<body>
    <script>
    const globalConfigs = {
        host: "<?php echo ROUTE; ?>",
        hostApi: "<?php echo ROUTE_API; ?>"
    }    
    </script>
    <?php require $this->checkTemplate("formularioProjeto");?>
    <div id="header" class="header" local=<?php echo htmlspecialchars( $local, ENT_COMPAT, 'UTF-8', FALSE ); ?>>
        <header class="container">
            <div class="logo grid-1">
                <a href="<?php echo ROUTE; ?>/">
                    <?php require $this->checkTemplate(''.htmlspecialchars( $logo, ENT_COMPAT, 'UTF-8', FALSE ));?>
                </a>
            </div>
            <div class="buttonMenu grid-1">
                <?php require $this->checkTemplate("menu");?>
            </div>
        </header>
        <transition name="overlay">
            <div class="overlay" v-if="menuOpen" @click="menuOpen = false">
            </div>
        </transition>
        <transition name="header">
            <div class="menu extracontainer" v-if="menuOpen">
                <nav class="container">
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
                    <ul class="listLink">
                        <li :class="{active: local=='sobre'}">
                            <a href="<?php echo ROUTE; ?>/sobre">Sobre</a>
                        </li>
                        <li :class="{active: local=='projetos'}">
                            <a href="<?php echo ROUTE; ?>/projetos">Projetos</a>
                        </li>
                        <li :class="{active: local=='servicos'}">
                            <a href="<?php echo ROUTE; ?>/servicos">Serviços</a>
                        </li>
                        <!--
                        <li :class="{active: local=='blog'}">
                            <a href="<?php echo ROUTE; ?>/blog">Blog</a>
                        </li>
                        -->
                        <li :class="{active: local=='contato'}">
                            <a href="<?php echo ROUTE; ?>/contato">Contato</a>
                        </li>
                    </ul>
                    <ul class="social">
                        <li>
                            <a href="">
                                <?php require $this->checkTemplate("facebook");?>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <?php require $this->checkTemplate("instagran");?>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </transition>
    </div>
    <script src="<?php echo ROUTE_WEBSITE; ?>/js/header.js"></script>