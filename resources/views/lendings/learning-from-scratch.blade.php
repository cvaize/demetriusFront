<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

{!! SEO::generate() !!}

<!-- Bootstrap CSS -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css">
    <link href="{{ mix('css/style.css') }}" rel="stylesheet">
    <noscript>
        <style>
            [data-simplebar] {
                overflow: auto;
            }
        </style>
    </noscript>
    <style>
        .ekko-lightbox .modal-body{
            padding: 0;
        }
    </style>
</head>
<body class="site__body">
<div class="container">
    <div class="row">
        <div class="col-12 pt-5 pb-5">
            <div class="images-contain w-100"
                 style="height: 5rem; background-image: url(/images/lending/logo.svg);"></div>
        </div>
        <div class="col-12 text-center">
            <p class="text-uppercase text-spacing mb-1 h2">Парикмахер салона красоты</p>
            <p class="d-block text-uppercase text-spacing font-weight-bold" style="font-size: .7rem;">Обучение с
                нуля</p>
            <p>
                Обучение «С нуля» в DEMETRIUS для парикмахеров, которые хотят сразу <br class="d-none d-md-block">
                начать зарабатывать. Все деньги, вложенные в обучение в DEMETRIUS, <br class="d-none d-md-block">
                Вы сможете вернуть уже через 3 недели полной записи в салоне. <br class="d-none d-md-block">
                Задача DEMETRIUS – научить вас зарабатывать деньги благодаря <br class="d-none d-md-block">
                высокому уровню мастерства и правильному отношению <br class="d-none d-md-block">
                к своей профессии.
            </p>
        </div>
    </div>
</div>

@includeIf('layouts.modules._flash')

<div class="pt-4 pl-0 pr-0 ml-0 mr-0 pb-4 row no-gutters">
    <div class="col d-flex align-items-center">
        <div class="bg-line-left w-100" style="height: 2px;"></div>
    </div>
    <div class="col-auto">
        <a href="http://www.symmetron.ru/suppliers/infineon/files/pdf/infineon/INF12.pdf" target="_blank"
           class="landing-red-link text-decoration-none">
            <div class="row no-gutters align-items-center">
                <div class="col-auto">
                    <div class="images-contain m-1"
                         style="height: 2rem; width: 2rem; background-image: url(/images/lending/icon-pdf.svg);"></div>
                </div>
                <div class="col-auto">
                    <span class="mb-0 d-block border-bottom-dashed color-red">Подробная информация</span>
                </div>
            </div>
        </a>
    </div>
    <div class="col d-flex align-items-center">
        <div class="bg-line-right w-100" style="height: 2px;"></div>
    </div>
</div>

<section id="js-lending">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="h3 pt-3 pb-5 text-center">Факультеты</p>
            </div>
        </div>
    </div>

    <div class="container-fluid container-primary pl-3 pr-3">
        <div class="row justify-content-between">
            <div class="col-auto">
                <div @click="clickArrow(-1)" :class="activeLArrow"
                     class="t__link-left images-contain"></div>
            </div>
            <div v-for="(link, i) in links"
                 class="col-auto d-none d-md-block">
                <div @click="clickLink(i)" :key="i"
                     class="t__link-border" :class="link.class">
                    @{{link.title}}
                </div>
            </div>
            <div class="col d-flex d-md-none align-items-center">
                <div class="form-group mb-0 w-100">
                    <select @change="changeSelect"
                            name="links" class="form-control form-control-sm t__select">
                        <option v-for="(link, i) in links" :selected="link.class.active" :value="i">@{{link.title}}</option>
                    </select>
                </div>
            </div>
            <div class="col-auto">
                <div @click="clickArrow(+1)" :class="activeRArrow"
                     class="t__link-right images-contain"></div>
            </div>
        </div>
    </div>


    <section class="pt-5 pb-5">

        <div class="container-primary pb-5 pl-3 pr-3 pl-md-0 pr-md-0">
            <div class="row no-gutters">
                <div class="col-12 col-md-5 mb-5">
                    <div id="js-scroll" class="t__box-overflow-landing" data-simplebar data-simplebar-auto-hide="false">
                        <div class="pl-4 pr-2">
                            <div class="pl-4 mb-3 t__box-line-left t__box-line-left-fix">
                                <p class="h2">ЖЕНСКИЙ МАСТЕР</p>
                                <p class="mb-0">Женские стрижки, колористка, укладки, <br class="d-none d-md-block">
                                    трихология и массаж</p>
                            </div>
                            <div class="pl-4">
                                <p>
                                    Интенсивный тренинг подойдет для тех, <br class="d-none d-md-block">
                                    кто уже работает в салоне красоты <br class="d-none d-md-block">
                                    или только желает стать парикмахером. <br class="d-none d-md-block">
                                </p>
                                <div class="d-flex mb-3 small t__text-red align-items-center">
                                    <div class="t__big-number">21</div>
                                    <div>
                                        день интенсивного практического <br class="d-none d-md-block">
                                        обучения с максимальным <br class="d-none d-md-block">
                                        погружением в профессию
                                    </div>
                                </div>
                                <div class="d-flex mb-3 small t__text-red align-items-center">
                                    <div class="t__big-number">8</div>
                                    <div>
                                        часов в день и более <br class="d-none d-md-block">
                                        под контролем лучших тренеров
                                    </div>
                                </div>
                                <div class="d-flex mb-3 small t__text-red align-items-center">
                                    <div class="t__big-number">2</div>
                                    <div>
                                        модели в день <br class="d-none d-md-block">
                                        минимум
                                    </div>
                                </div>
                                <p>
                                    Практика с первого дня обучения. За время
                                    обучения каждый ученик отрабатывает
                                    минимум 45 стрижек и окрашиваний
                                    на моделях.
                                </p>
                                <p>
                                    Работа в уникальной технике, с помощью
                                    которой вы сможете воспроизвести
                                    любую стрижку, любой сложности.
                                </p>
                                <p>
                                    Малые группы до 7 человек.
                                </p>
                                <p>
                                    На время обучения предоставляем
                                    инструменты настоящего салонного мастера.
                                </p>
                                <p>
                                    Портфолио. Ваши работы снимает
                                    профессиональный фотограф.
                                </p>
                                <p>
                                    Иногородним ученикам предоставляем
                                    жилье по минимальной цене.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7 mb-5">
                    <div class="pl-md-2">
                        <a href="/images/lending/s_nulya_na_sayt/parikmaher_s_nulya,_zhenskiy_master,_muzhskoy_master,_kolorist,_barber_-27.jpg"
                           data-toggle="lightbox" data-gallery="gallery-01" data-type="image"
                           target="_blank" class="text-decoration-none">
                            <div class="embed-responsive embed-responsive-16by9">
                                <div class="embed-responsive-item">
                                    <div class="images-cover w-100 h-100" style="background-image: url(/images/lending/s_nulya_na_sayt/min/parikmaher_s_nulya,_zhenskiy_master,_muzhskoy_master,_kolorist,_barber_-27.jpg);"></div>
                                </div>
                            </div>
                        </a>
                        <p class="mt-3">
                            Так проходит обучение женским стрижкам
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid pb-5 container-primary">
            <div class="row">
                <div class="col-12">
                    <p class="text-center h4">Работы учеников</p>
                </div>
            </div>
            <div class="row no-gutters">

                <div class="col-6 col-md-4">
                    <div class="p-3">
                        <a href="/images/lending/s_nulya_na_sayt/parikmaher_s_nulya,_zhenskiy_master,_muzhskoy_master,_kolorist,_barber_-27.jpg"
                           data-toggle="lightbox" data-gallery="gallery-01" data-type="image"
                           target="_blank" class="text-decoration-none">
                            <div class="embed-responsive embed-responsive-1by1">
                                <div class="embed-responsive-item">
                                    <div class="images-cover w-100 h-100" style="background-image: url(/images/lending/s_nulya_na_sayt/min/parikmaher_s_nulya,_zhenskiy_master,_muzhskoy_master,_kolorist,_barber_-27.jpg);"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="p-3">
                        <a href="/images/lending/s_nulya_na_sayt/parikmaher_s_nulya,_zhenskiy_master,_muzhskoy_master,_kolorist,_barber_-27.jpg"
                           data-toggle="lightbox" data-gallery="gallery-01" data-type="image"
                           target="_blank" class="text-decoration-none">
                            <div class="embed-responsive embed-responsive-1by1">
                                <div class="embed-responsive-item">
                                    <div class="images-cover w-100 h-100" style="background-image: url(/images/lending/s_nulya_na_sayt/min/parikmaher_s_nulya,_zhenskiy_master,_muzhskoy_master,_kolorist,_barber_-27.jpg);"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="p-3">
                        <a href="/images/lending/s_nulya_na_sayt/parikmaher_s_nulya,_zhenskiy_master,_muzhskoy_master,_kolorist,_barber_-27.jpg"
                           data-toggle="lightbox" data-gallery="gallery-01" data-type="image"
                           target="_blank" class="text-decoration-none">
                            <div class="embed-responsive embed-responsive-1by1">
                                <div class="embed-responsive-item">
                                    <div class="images-cover w-100 h-100" style="background-image: url(/images/lending/s_nulya_na_sayt/min/parikmaher_s_nulya,_zhenskiy_master,_muzhskoy_master,_kolorist,_barber_-27.jpg);"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="p-3">
                        <a href="/images/lending/s_nulya_na_sayt/parikmaher_s_nulya,_zhenskiy_master,_muzhskoy_master,_kolorist,_barber_-27.jpg"
                           data-toggle="lightbox" data-gallery="gallery-01" data-type="image"
                           target="_blank" class="text-decoration-none">
                            <div class="embed-responsive embed-responsive-1by1">
                                <div class="embed-responsive-item">
                                    <div class="images-cover w-100 h-100" style="background-image: url(/images/lending/s_nulya_na_sayt/min/parikmaher_s_nulya,_zhenskiy_master,_muzhskoy_master,_kolorist,_barber_-27.jpg);"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="p-3">
                        <a href="/images/lending/s_nulya_na_sayt/parikmaher_s_nulya,_zhenskiy_master,_muzhskoy_master,_kolorist,_barber_-27.jpg"
                           target="_blank" class="text-decoration-none"
                           data-toggle="lightbox" data-gallery="gallery-01" data-type="image"
                        >
                            <div class="embed-responsive embed-responsive-1by1"

                            >
                                <div class="embed-responsive-item">
                                    <div class="images-cover w-100 h-100" style="background-image: url(/images/lending/s_nulya_na_sayt/min/parikmaher_s_nulya,_zhenskiy_master,_muzhskoy_master,_kolorist,_barber_-27.jpg);"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="p-3">
                        <a href="/images/lending/s_nulya_na_sayt/parikmaher_s_nulya,_zhenskiy_master,_muzhskoy_master,_kolorist,_barber_-27.jpg"
                           data-toggle="lightbox" data-gallery="gallery-01" data-type="image"
                           target="_blank" class="text-decoration-none">
                            <div class="embed-responsive embed-responsive-1by1">
                                <div class="embed-responsive-item">
                                    <div class="images-cover w-100 h-100" style="background-image: url(/images/lending/s_nulya_na_sayt/min/parikmaher_s_nulya,_zhenskiy_master,_muzhskoy_master,_kolorist,_barber_-27.jpg);"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

            <div class="row pt-3 pb-5">
                <div class="col-12 text-center">
                    <a href="#" class="btn t__btn-white">Еще</a>
                </div>
            </div>
        </div>

        <div class="mb-5 container-primary images-cover pt-5 pb-5 d-flex flex-column align-items-center" style="background-image: url(/images/lending/woman-min.png);">
            <p class="pt-5 pb-5 text-white h2 text-center">ЖЕНСКИЙ МАСТЕР</p>
            <div class="ml-3 mr-3 bg-g-yellow landing-border-radius p-5 d-flex flex-column align-items-center justify-content-center">
                <div class="row no-gutters pb-3 pb-md-5 pl-lg-5 pr-lg-5 w-100">
                    <div class="col-12 col-md-4 pb-3 pb-md-0">
                        <div class="landing__danger--label h-100 d-flex align-items-center justify-content-center">
                            <p class="mb-0 pt-2 pb-2 pt-md-0 pb-md-0">
                                Стоимость 89 000
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 pb-3 pb-md-0">
                        <a href="#" class="landing__danger--btn btn btn-danger btn-primary--gradient w-100 h-100">Записаться</a>
                    </div>
                    <div class="col-12 col-md-4 pb-3 pb-md-0">
                        <p class="mb-0 small pl-3 text-center text-md-left">
                            Возможна рассрочка <br>
                            Инструменты предоставляются
                        </p>
                    </div>
                </div>
                <div class="row pl-lg-5 pr-lg-5 pt-3">
                    <div class="col-12 col-sm-auto d-flex justify-content-center">
                        <div class="images-contain" style="height: 6rem; width: 6rem; background-image: url(/images/lending/icon-gift.svg);"></div>
                    </div>
                    <div class="col-12 col-sm text-center text-sm-left pt-3 pt-sm-0">
                        <p class="h5">В подарок!</p>
                        <p>Двухдневный тренинг Дмитрия Вашешникова «Клиентовладелец» — <br class="d-none d-lg-block">
                            тренинг о том, как правильно общаться с клиентом в салоне <br class="d-none d-lg-block">
                            от приветствия до оглашения цены на услуги.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid pb-5 container-primary">
            <div class="row">
                <div class="col-12">
                    <p class="text-center h4">Отзывы</p>
                </div>
            </div>

            <div class="row no-gutters pt-3">
                <div class="col-12 col-md-6">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-1 d-flex">
                            <div class="quote-left pr-2">
                                <img src="/images/static/quotes.svg" class="img-fluid" style="position: relative; top: -1rem;">
                            </div>
                        </div>
                        <div class="col-10 col-lg-8 d-flex">
                            <div class="reviews__text">
                                <p class="font-weight-bold">
                                    Марина Саяпина, Зеленоград <br class="d-md-none"><span class="text-muted font-weight-light pl-1">2 марта 2018</span>
                                </p>
                                <div class="js-text--truncate" style="margin: 0;">
                                    <div class="js-text--truncate--metka js-random-review--text">
                                        <p>Спасибо за&nbsp;работу от&nbsp;вашей школы! За&nbsp;мои 30&nbsp;лет меня так не&nbsp;стригли ещё, все в&nbsp;комплексе: и&nbsp;ощущения, и&nbsp;ожидания, и&nbsp;укладка самостоятельно дома, подбор под тип волос, форму лица, и&nbsp;модно, и&nbsp;новые технологии укладки))! Даже несмотря на&nbsp;то, что была моделью на&nbsp;мастер-классе! Теперь придётся ездить в&nbsp;Москву стричься, не&nbsp;доверю никому свои волосы))</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <div class="row no-gutters justify-content-center">
                        <div class="col-10 col-lg-8 mt-5 mb-5">
                            <div class="embed-responsive embed-responsive-16by9">
                                <div class="embed-responsive-item">
                                    <a class="text-decoration-none" data-toggle="lightbox" href="https://www.youtube.com/watch?v=rVNJ1HH0b3k">
                                        <div class="w-100 h-100 images-cover video-hover-icon" style="background-image: url(https://i.ytimg.com/vi/rVNJ1HH0b3k/hqdefault.jpg);">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters justify-content-center">
                        <div class="col-1 d-flex">
                            <div class="quote-left pr-2">
                                <img src="/images/static/quotes.svg" class="img-fluid" style="position: relative; top: -1rem;">
                            </div>
                        </div>
                        <div class="col-10 col-lg-8 d-flex">
                            <div class="reviews__text">
                                <p class="font-weight-bold">
                                    Марина Саяпина, Зеленоград <br class="d-md-none"><span class="text-muted font-weight-light pl-1">2 марта 2018</span>
                                </p>
                                <div class="js-text--truncate" style="margin: 0;">
                                    <div class="js-text--truncate--metka js-random-review--text">
                                        <p>Спасибо за&nbsp;работу от&nbsp;вашей школы! За&nbsp;мои 30&nbsp;лет меня так не&nbsp;стригли ещё, все в&nbsp;комплексе: и&nbsp;ощущения, и&nbsp;ожидания, и&nbsp;укладка самостоятельно дома, подбор под тип волос, форму лица, и&nbsp;модно, и&nbsp;новые технологии укладки))! Даже несмотря на&nbsp;то, что была моделью на&nbsp;мастер-классе! Теперь придётся ездить в&nbsp;Москву стричься, не&nbsp;доверю никому свои волосы))</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 pt-md-5">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-10 col-lg-8 mt-5 mb-5">
                            <div class="embed-responsive embed-responsive-16by9">
                                <div class="embed-responsive-item">
                                    <a class="text-decoration-none" data-toggle="lightbox" href="https://www.youtube.com/watch?v=rVNJ1HH0b3k">
                                        <div class="w-100 h-100 images-cover video-hover-icon" style="background-image: url(https://i.ytimg.com/vi/rVNJ1HH0b3k/hqdefault.jpg);">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters justify-content-center">
                        <div class="col-1 d-flex">
                            <div class="quote-left pr-2">
                                <img src="/images/static/quotes.svg" class="img-fluid" style="position: relative; top: -1rem;">
                            </div>
                        </div>
                        <div class="col-10 col-lg-8 d-flex">
                            <div class="reviews__text">
                                <p class="font-weight-bold">
                                    Марина Саяпина, Зеленоград <br class="d-md-none"><span class="text-muted font-weight-light pl-1">2 марта 2018</span>
                                </p>
                                <div class="js-text--truncate" style="margin: 0;">
                                    <div class="js-text--truncate--metka js-random-review--text">
                                        <p>Спасибо за&nbsp;работу от&nbsp;вашей школы! За&nbsp;мои 30&nbsp;лет меня так не&nbsp;стригли ещё, все в&nbsp;комплексе: и&nbsp;ощущения, и&nbsp;ожидания, и&nbsp;укладка самостоятельно дома, подбор под тип волос, форму лица, и&nbsp;модно, и&nbsp;новые технологии укладки))! Даже несмотря на&nbsp;то, что была моделью на&nbsp;мастер-классе! Теперь придётся ездить в&nbsp;Москву стричься, не&nbsp;доверю никому свои волосы))</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <div class="row no-gutters justify-content-center">
                        <div class="col-10 col-lg-8 mt-5 mb-5">
                            <div class="embed-responsive embed-responsive-16by9">
                                <div class="embed-responsive-item">
                                    <a class="text-decoration-none" data-toggle="lightbox" href="https://www.youtube.com/watch?v=rVNJ1HH0b3k">
                                        <div class="w-100 h-100 images-cover video-hover-icon" style="background-image: url(https://i.ytimg.com/vi/rVNJ1HH0b3k/hqdefault.jpg);">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-3 pb-5">
                <div class="col-12 text-center">
                    <a href="#" class="btn t__btn-white">Еще</a>
                </div>
            </div>
        </div>

    </section>


    <div class="container-fluid container-primary pl-3 pr-3">
        <div class="row justify-content-between">
            <div class="col-auto">
                <div @click="clickArrow(-1)" :class="activeLArrow"
                     class="t__link-left images-contain"></div>
            </div>
            <div v-for="(link, i) in links"
                 class="col-auto d-none d-md-block">
                <div @click="clickLink(i)" :key="i"
                     class="t__link-border" :class="link.class">
                    @{{link.title}}
                </div>
            </div>
            <div class="col d-flex d-md-none align-items-center">
                <div class="form-group mb-0 w-100">
                    <select @change="changeSelect"
                            name="links" class="form-control form-control-sm t__select">
                        <option v-for="(link, i) in links" :selected="link.class.active" :value="i">@{{link.title}}</option>
                    </select>
                </div>
            </div>
            <div class="col-auto">
                <div @click="clickArrow(+1)" :class="activeRArrow"
                     class="t__link-right images-contain"></div>
            </div>
        </div>
    </div>

    <div class="container pb-5 pt-5">
        <div class="row">
            <div class="col-12">
                <p class="h3 pt-4 pb-5 text-center">Наш адрес</p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 offset-lg-2 pb-5">
                {{ Form::open(['route'=>"call-requests.store",'method'=>'POST', 'class' => 'h-100']) }}
                <div class="d-flex flex-column h-100">

                    @include('forms._select',
                    [
                        'classFormGroup' => 'pb-2',
                        'class' => 't__select',
                        'name' => 'learning',
                        'list' =>
                        [
                            '1' => 'Обучение',
                            '2' => '2',
                            '3' => '3',
                            '4' => '4',
                        ],
                    ])
                    @include('forms._input',
                    [
                        'classFormGroup' => 'pb-2',
                        'class' => 't__input',
                        'placeholder' => 'Имя',
                        'type' => 'text',
                        'name' => 'name'

                    ])
                    @include('forms._input',
                    [
                        'classFormGroup' => 'pb-2',
                        'class' => 't__input',
                        'placeholder' => 'Телефон',
                        'type' => 'tel',
                        'name' => 'phone'

                    ])
                    @include('forms._input',
                    [
                        'classFormGroup' => 'pb-2',
                        'class' => 't__input',
                        'placeholder' => 'Эл. почта',
                        'type' => 'email',
                        'name' => 'email'

                    ])
                    <div class="mt-auto pb-2">
                        <button type="submit" class="btn btn-primary--gradient-lite">
                            Записаться
                        </button>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
            <div class="col-12 col-md-6 col-lg-5 offset-lg-1 pb-5 text-center text-md-left">
                <p>Москва, <img class="d-inline icon-small-top " style="height: .8rem;" src="/images/lending/metro.svg"
                                alt="metro">Текстильщики <br class="d-none d-md-block">
                    Волгоградский проспект, 47, <br class="d-none d-md-block">
                    Бизнес-центр «Cube»</p>
                <a href="tel:+79651085553" class="d-block link--hover-red">+7 965 108-55-53</a>
                <p class="font-italic">Ответим в любое время</p>
                <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                    <div class="images-contain m-2"
                         style="height: 6rem; width: 6rem; background-image: url(/images/lending/ava-min.png);">
                        <a href="#" class="w-100 h-100 d-block"></a>
                    </div>
                    <div class="text-left">
                        <p class="mb-0"><a href="#" class="font-weight-bold border-bottom-solid">Кристина</a><a
                                    href="#"><img class="d-inline pl-1 icon-small-top" style="height: .8rem;"
                                                  src="/images/lending/vk-blue.svg" alt="vk-blue"></a></p>
                        <p class="font-italic mb-0">Руководитель проекта</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="position-relative overflow-hidden container-primary" style="height: 20rem;">
    <a class="h-100 w-100 d-block d-md-none"
       href="https://yandex.ru/maps/?um=constructor%3Af683efc92ee432a7bc17743f6b15edbd8feae95ce09c5aeb4b68e5221b4fd340&amp;source=constructorStatic"
       target="_blank">
        <div class="images-cover"
             style="background-image: url('https://api-maps.yandex.ru/services/constructor/1.0/static/?um=constructor%3Af683efc92ee432a7bc17743f6b15edbd8feae95ce09c5aeb4b68e5221b4fd340&amp;width=600&amp;height=450&amp;lang=ru_RU');"></div>
    </a>
    <div class="w-100 h-100 d-none d-md-block">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A980839373fb3c161179882531fe3280a26ae743620f168f3a84734ab5524f101&amp;source=constructor"
                width="100%" height="400" frameborder="0"></iframe>
    </div>
</section>

<footer class="pt-5 pb-5 main-bg-color-red">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col d-none d-lg-block"></div>
            <div class="col-auto">
                <div class="images-contain m-2"
                     style="height: 3rem; width: 3rem; background-image: url(/images/lending/social/fb.svg);">
                    <a href="#" class="w-100 h-100 d-block"></a>
                </div>
            </div>
            <div class="col-auto">
                <div class="images-contain m-2"
                     style="height: 3rem; width: 3rem; background-image: url(/images/lending/social/vk.svg);">
                    <a href="#" class="w-100 h-100 d-block"></a>
                </div>
            </div>
            <div class="w-100 d-sm-none d-block"></div>
            <div class="col-auto">
                <div class="images-contain m-2"
                     style="height: 3rem; width: 3rem; background-image: url(/images/lending/social/insta.svg);">
                    <a href="#" class="w-100 h-100 d-block"></a>
                </div>
            </div>
            <div class="col-auto">
                <div class="images-contain m-2"
                     style="height: 3rem; width: 3rem; background-image: url(/images/lending/social/youtube.svg);">
                    <a href="#" class="w-100 h-100 d-block"></a>
                </div>
            </div>
            <div class="col d-none d-lg-flex align-items-center">
                <p class="h3 mb-0 pl-2 text-white font-weight-light">
                    &mdash; Мы здесь!
                </p>
            </div>

            <div class="col-12 pt-5 mt-4 text-center">
                <a href="#" class="text-white border-bottom-dashed">
                    Политика конфиденциальности
                </a>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
<script>
    new SimpleBar(document.getElementById('js-scroll'));
    var js_lending__setting = {
        el: '#js-lending',
        data: {
            links: [
                {
                    title: 'Мастер-универсал',
                    class: {active: false}
                },
                {
                    title: 'Женский мастер',
                    class: {active: true}
                },
                {
                    title: 'Мужской мастер',
                    class: {active: false}
                },
                {
                    title: 'Колорист. Шаг 1',
                    class: {active: false}
                }
            ],
            linksActive: 1,
            linksArrow: 0
        },
        computed: {
            activeLArrow: function () {
                if (this.linksActive > 0) {
                    return {active: true};
                } else {
                    return {active: false};
                }
            },
            titleLArrow: function () {
                if (this.linksActive > 0) {
                    return {active: true};
                } else {
                    return {active: false};
                }
            },
            activeRArrow: function () {
                if (this.linksActive < (this.links.length - 1)) {
                    return {active: true};
                } else {
                    return {active: false};
                }
            },
            titleRArrow: function () {
                if (this.linksActive < (this.links.length - 1)) {
                    return {active: true};
                } else {
                    return {active: false};
                }
            }
        },
        methods: {
            clickLink(i) {
                this.links[this.linksActive].class.active = false;
                this.links[i].class.active = true;
                this.linksActive = i;
            },
            clickArrow(i) {
                this.linksArrow = this.linksActive + i;
                if (this.linksArrow >= 0 && this.linksArrow < this.links.length) {
                    this.clickLink(this.linksArrow);
                }
            },
            changeSelect(e){
                this.clickLink(parseInt(e.target.value));
            }
        }
    };
    var js_lending = new Vue(js_lending__setting);
</script>
<script src="{{ mix('js/scripts.js') }}"></script>
</body>
</html>
