<?php get_header(); ?>

    <main class="main">
        
        <div class="container">
            <div class="main__inner">
            <div class="main__title">
            <?php the_field('main__title') ?>
            </div>
            <div class="main__text">
            <?php the_field('main__subtitle') ?>
            </div>
            </div>
            <div class="main__img">
                <img src="<?php bloginfo ( 'template_url' ); ?>/assets/images/timbers.png" alt="">
            </div>
            <div class="project">
                <div class="project__title">
                    ПРОЕКТЫ ДОМОВ ИЗ БРУСА
                </div>
                <div class="project__item">
                    <div class="project__name">
                        ДОМ #1
                    </div>
                    <div class="project__size">
                        Размер дома: 6 x 6
                    </div>
                    <div class="project__area">
                        Общая площадь дома: 54 кв. м
                    </div>
                    <div class="project__price">
                        Стоимость - 402 000 рублей
                    </div>
                    <div class="project__images">
                        <div class="project__images-item">
                            <img src="images/house1.jpg" alt="image of house made of timber">
                        </div>
                        <div class="project__images-blueprint">
                            <img src="images/house1plan.png" alt="blueprint of house">
                        </div>
                    </div>
                </div>

                <div class="project__item">
                    <div class="project__name">
                        ДОМ #2
                    </div>
                    <div class="project__size">
                        Размер дома: 6 x 7,5
                    </div>
                    <div class="project__area">
                        Общая площадь дома: 72 кв. м
                    </div>
                    <div class="project__price">
                        Стоимость - 457 000 рублей
                    </div>
                    <div class="project__images">
                        <div class="project__images-item">
                            <img src="images/house2.png" alt="image of house made of timber">
                        </div>
                        <div class="project__images-blueprint">
                            <img src="images/house2plan.png" alt="blueprint of house">
                        </div>
                    </div>
                </div>
                <div class="project__item">
                    <div class="project__name">
                        ДОМ #3
                    </div>
                    <div class="project__size">
                        Размер дома: 8 х 7,5
                    </div>
                    <div class="project__area">
                        Общая площадь дома: 92 кв. м
                    </div>
                    <div class="project__price">
                        Стоимость - 635 000 рублей
                    </div>
                    <div class="project__images">
                        <div class="project__images-item">
                            <img src="images/house3.jpg" alt="image of house made of timber">
                        </div>
                        <div class="project__images-blueprint">
                            <img src="images/house3plan.jpg" alt="blueprint of house">
                        </div>
                    </div>
                </div>
            </div> 
        </div>
            <div class="download">
                <img src="<?php bloginfo ( 'template_url' ); ?>/assets/images/downloadimg.png" alt="download panel image">
                <a class="download__btn" href="#">СКАЧАТЬ ВЕСЬ КАТАЛОГ ДОМОВ</a>
            </div>
            <div class="container">
            <div class="gallery">
                <div class="gallery__title">
                    ФОТОГРАФИИ НАШИХ РАБОТ
                </div>
                <div class="gallery__text">
                    некоторые фотографии построенных нами домов и бань из бруса
                </div>
                <div class="gallery__inner">
                <?php the_field('gallery__inner') ?> 
                </div>
            </div>
            <div class="main__img">
                <img class="filler" src="<?php bloginfo ( 'template_url' ); ?>/assets/images/timbers.png" alt="chunks of timber image">
            </div>
        </div>
    </main>
<?php get_footer(); ?>