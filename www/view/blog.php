<!DOCTYPE html>
<html>
 <head>
     <link rel="stylesheet"href="view/style.css">
     <meta charset="utf-8">
     <title>Мой блог</title>
 </head>
 <body>
    <header><h1>Мой Блог</h1>
    </header>
    <nav>
    <input type="button"value="Добавить новость">
    </nav>
    <main>
        <div class="newbox">
            <div class="img"></div>
            <div class="header"><h1>заголовок</h1></div>
            <div class="content">Ехал путин через путин видит путин в реке путин путин руку сунул в путин путин путин путин путин</div>
            <div class="newfooter">
                <div class="like"><div class="like1"><img id="lil" src="view/like.png"></div><div class="likeinf"><?php echo$like;?></div></div>
                <div class="view">Просмотры:<?php echo$view?></div>
                <div class="coment">Коментарии:<?php echo$coments?></div>
                <div class="link">>></div>
            </div>

        </div>
        <div class="newbox">
            <div class="img"></div>
            <div class="header"><h1>заголовок</h1></div>
            <div class="content">Ехал путин через путин видит путин в реке путин путин руку сунул в путин путин путин путин путин</div>
            <div class="newfooter">
                <div class="like"><div class="like1"><img id="lil" src="view/like.png"></div><div class="likeinf"><?php echo$like;?></div></div>
                <div class="view">Просмотры:<?php echo$view?></div>
                <div class="coment">Коментарии:<?php echo$coments?></div>
                <div class="link">>></div>
            </div>

        </div>
        <div class="newbox">
            <div class="img"></div>
            <div class="header"><h1>заголовок</h1></div>
            <div class="content">Ехал путин через путин видит путин в реке путин путин руку сунул в путин путин путин путин путин</div>
            <div class="newfooter">
                <div class="like"><div class="like1"><img id="lil" src="view/like.png"></div><div class="likeinf"><?php echo$like;?></div></div>
                <div class="view">Просмотры:<?php echo$view?></div>
                <div class="coment">Коментарии:<?php echo$coments?></div>
                <div class="link">>></div>
            </div>

        </div>
    </main>
 </body>
</html>
