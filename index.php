

<!doctype html>
<html class="no-js" lang="">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!-- Add your site or application content here -->
        <?php include 'classes/PageBuilder.php' ?>
        <header>
            <h1><?php PageBuilder::showTitle(); ?></h1>
            <nav>
                <?php
                    PageBuilder::showNav();
                ?>
            </nav>
        </header>

        <main>
            <?php
                PageBuilder::showMain();
                $superHeroMan = new NewClass("nescessary"); 


            ?>
            <br>

            <?


            ?>


        </main>

        <aside>
            <?php
                PageBuilder::showAside();
            ?>

        </aside>

        <footer>
        <?php
            PageBuilder::showFooter();
            /*$footer = new Footer();
            $footer->showFooter();*/
        ?>
        </footer>



    </body>
</html>
