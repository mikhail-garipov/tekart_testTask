<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница не найдена</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/styles/style.css">
</head>
<body>
    <div class="wrapper" style = 
    "   background: linear-gradient(0deg, rgba(0, 0, 0, 0.30) 0%, 
                    rgba(0, 0, 0, 0.30) 100%), 
                    url(../../public/images/404.jpg), 
                    lightgray 0px 11.632px / 100% 99.86% no-repeat;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    ">
        <div class="container">
            <div class="error">
                <p class="error__message">Сбой системы!</p>
                <div class="button-back">
                    <button action="action" onclick="window.location = '/'; return false;" type="submit" value="Cancel" class="button button-back">
                        <img src="../../public/images/Arrow 1.svg" alt="" class="button__arrow button__arrow-back">
                        <span class="button__text">Полететь обратно</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>