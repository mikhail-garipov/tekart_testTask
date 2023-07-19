<?php
    $pos = strpos("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", 'post');
    if ($pos === false) {
        echo '<header class="header header-main">';
    }
    else {
        echo '<header class="header">';
    }
?>
    <div class="container">
        <div class="header__item">
            <a href="/" class="logo">
                <img src="../../public/images/logo.svg" alt="logo" class="logo__img">
            </a>
        </div>
    </div>
</header>