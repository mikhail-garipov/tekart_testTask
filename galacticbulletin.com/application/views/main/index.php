<?php $count = 5;
      $page = 4;
?> 

<main class="main">
    <section class="top" style = 
    "   background: linear-gradient(0deg, rgba(0, 0, 0, 0.30) 0%, 
                    rgba(0, 0, 0, 0.30) 100%), 
                    url(../../public/images/news/<?php echo $title['image']; ?>), 
                    lightgray 0px 11.632px / 100% 99.86% no-repeat;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    "
    >
        <div class="container">
            <div class="ban">
                <h1 class="ban__title"><?php echo $title['title']; ?></h1>
                <div class="ban__subtitle">
                    <?php echo $title['announce']; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <h2 class="title">Новости</h2>

            <div class="news__items">
                <?php foreach($news as $post):?>
                    <a href="/post/<?=$post['id']?>" class="news__item">
                        <div class="news__item-date-information">
                            <span class="news__item-date"><?=date('d.m.Y',strtotime($post['date']))?></span>
                        </div>                                
                        <div class="news__item-description">
                            <h4 class="news__item-title"><?=$post['title'] ?></h4>
                                <?=$post['announce']?>
                        </div>

                        <div class="button__wrapper">
                            <button class="button">
                                <span class="button__text">Подробнее</span>
                                <img src="../../public/images/Arrow 1.svg" alt="" class="button__arrow">
                            </button>
                        </div>
                    </a>
                <?php endforeach?>
            </div>
            
            <?php if ($maxPage != 1):?>
            <div class="pagination">
                <!-- Стрелка назад-->
                <?php
                    if(($currentPage > 1) && ($maxPage > 3)) {
                        echo '
                            <a href="/'.($currentPage-1).'" class="pagination__arrow pagination-back">
                                <img src="../../public/images/arrow-next.svg" alt="arrow" class="arrow-back">
                            </a>
                        ';
                    }
                    if ($maxPage == 2) {
                        if ($maxPage == $currentPage) {
                            echo '<a href="/'.($currentPage-1).'" class="pagination__number">'.($currentPage-1).'</a>';
                            echo '<a href="/'.($currentPage).'" class="pagination__number pagination__number-active">'.($currentPage).'</a>';
                        }
                        else {
                            echo '<a href="/'.$currentPage.'" class="pagination__number pagination__number-active">'.($currentPage).'</a>';
                            echo '<a href="/'.($currentPage+1).'" class="pagination__number">'.($currentPage + 1).'</a>';
                        }
                    }
                    elseif ($maxPage == 1) {
                        echo '<a href="/'.($currentPage).'" class="pagination__number pagination__number-active">'.($currentPage).'</a>';
                    }
                    elseif ($maxPage == $currentPage) {
                        echo '<a href="/'.($currentPage-2).'" class="pagination__number">'.($currentPage-2).'</a>';
                        echo '<a href="/'.($currentPage-1).'" class="pagination__number">'.($currentPage-1).'</a>';
                        echo '<a href="/'.($currentPage).'" class="pagination__number pagination__number-active">'.($currentPage).'</a>';
                    }
                    elseif($maxPage-1 == $currentPage) {
                        echo '<a href="/'.($currentPage - 1).'" class="pagination__number">'.($currentPage-1).'</a>';
                        echo '<a href="/'.($currentPage).'" class="pagination__number pagination__number-active">'.($currentPage).'</a>';
                        echo '<a href="/'.($currentPage+1).'" class="pagination__number">'.($currentPage+1).'</a>';
                    }
                    else {
                        echo '<a href="/'.$currentPage.'" class="pagination__number pagination__number-active">'.($currentPage).'</a>';
                        echo '<a href="/'.($currentPage+1).'" class="pagination__number">'.($currentPage + 1).'</a>';
                        echo '<a href="/'.($currentPage+2).'" class="pagination__number">'.($currentPage + 2).'</a>';
                    }
                    if (($currentPage != $maxPage) && ($maxPage > 3)) {
                        echo '
                            <a href="/'.($currentPage+1).'" class="pagination__arrow">
                                <img src="../../public/images/arrow-next.svg" alt="arrow" class="arrow-next">
                            </a>
                        ';
                    }
                ?>
            </div>
            <?endif?>
        </div>
    </section>
</main>


