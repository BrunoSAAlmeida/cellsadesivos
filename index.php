<?php include('config.php');?>
    <!DOCTYPE html>
    <html>
        <head>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&family=Roboto:wght@100&display=swap" rel="stylesheet">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="descrição do site">
        <meta name="keywords" content="palavra-chaves,do,site">
        <link href="<?php echo INCLUDE_PATH; ?>css/style.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/743a2175ee.js" crossorigin="anonymous"></script>
        <link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon"/>
        <title>Cells Adesivos</title>
        
        </head>
        <body>
            <base base="<?php echo INCLUDE_PATH; ?>" />
            <?php
                $url = isset($_GET['url']) ? $_GET['url']: 'home';
                switch($url){
                    case 'mercado':
                        echo '<target target="mercado" />';
                        break;
                    case 'sobre':
                        echo '<target target="sobre" />';
                        break;
                    case 'produtos':
                        echo '<target target="produtos" />';
                        break;
                    case 'contato':
                        echo '<target target="contato" />';
                        break;
                }
            ?>
            <?php // new Email(); 
            ?>
            <header>
                <div class="center">
                    <div class="logo left"><img src="<?php echo INCLUDE_PATH; ?>image/Logo.jpg"> </div><!--logo-->
                    <nav class="desktop right">
                        <ul>
                            <li><a href="<?php echo INCLUDE_PATH; ?>">HOME</a></li>
                            <li><a href="<?php echo INCLUDE_PATH; ?>mercado">NOSSO MERCADO</a></li>
                            <li><a href="<?php echo INCLUDE_PATH; ?>sobre">SOBRE A EMPRESA</a></li>
                            <li><a href="<?php echo INCLUDE_PATH; ?>produtos">PRODUTOS</a></li>
                            <li><a href="<?php echo INCLUDE_PATH; ?>contato">CONTATO</a></li>
                        </ul>

                    </nav>
                    <nav class="mobile right">
                        <div class="button-menu-mobile">
                        <i class="fa-solid fa-bars"></i>
                        </div>
                        <ul><li><a href="<?php echo INCLUDE_PATH; ?>">HOME</a></li>
                            <li><a href="<?php echo INCLUDE_PATH; ?>mercado">NOSSO MERCADO</a></li>
                            <li><a href="<?php echo INCLUDE_PATH; ?>sobre">SOBRE A EMPRESA</a></li>
                            <li><a href="<?php echo INCLUDE_PATH; ?>produtos">PRODUTOS</a></li>
                            <li><a href="<?php echo INCLUDE_PATH; ?>contato">CONTATO</a></li>
                        </ul>

                    </nav>
                    <div class="clear"></div>
                </div><!--center-->
                
            </header>
            <?php
        

                if(file_exists('pages/'.$url.'.php')){
                    include('pages/'.$url.'.php');
                }else{
                    if($url != 'mercado' && $url != 'sobre' && $url != 'produtos' && $url != 'contato'){
                        $pagina404 = true;
                        include('pages/404.php');
                    }else{
                        include('pages/home.php');
                        }
                }

                
            ?>
           
            <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"';?>>
                <div class="center">
                        <p>Cell Adesivos - Todos os direitos reservados.  <span> Desenvolvido por BSA CODE</span></p>
                       
                </div><!--center-->
            </footer>
            <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
            <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
            <script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
            <script src="<?php echo INCLUDE_PATH; ?>js/zoom.js"></script>
            <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
           
            <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAr4Y-z25K0ubloOn0Yx6OzXJKJMNzS4fQ"></script>
        
        </body>
    </html>
    