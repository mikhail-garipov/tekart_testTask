<main class="main">
    <div class="content">
        <div class="container">
            <div class="content__item">
                <div class="content__pages">
                    <span action="action" onclick="window.history.go(-1); return false;" class="content__pages-back">Главная  /</span> 
                    <span class="gray-text"><?=$post['title']?></span>
                </div>
                <h1 class="title"><?=$post['title']?></h1>
                <div class="content__post">                                              
                    <div class="content-date">
                        <span class="news__item-date"><?=date('d.m.Y',strtotime($post['date']))?></span>
                    </div>
                    <div class="content__post-items">
                        <div class="content__information">
                            <h3 class="content__subtitle"><?=$post['announce']?></h3>
                            <div class="content__text">
                                <?=$post['content']?>
                            </div>
                            <div class="button-back">
                                <button action="action" onclick="window.history.go(-1); return false;" type="submit" value="Cancel" class="button button-back">
                                    <img src="../../public/images/Arrow 1.svg" alt="" class="button__arrow button__arrow-back">
                                    <span class="button__text">Назад к новостям</span>
                                </button>
                            </div>
                        </div>
                        <div class="content__img">
                            <img src="../../public/images/news/<?=$post['image']?>" alt="title" class="content__img-item">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>