<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memorial Hospital</title>
    <link rel="stylesheet" href="./scss/main.css">
    <script src="./js/index.js"></script>
</head>

<body>
<div class="wrapper">
    <header class="header">
        <div class="header__nav container">
            <div class="nav__logo">
                <h3 class="logo"><a href="#">Memorial hospital</a></h3>
            </div>
            <ul class="nav__items">
                <li class="item"><a href="#aboutUs" class="item-link">Biz haqimizda</a></li>
                <li class="item"><a href="#opportun" class="item-link">Xizmatlar</a></li>
                <li class="item"><a href="#doctors" class="item-link">Shifokorlar</a></li>
                <li class="item"><a href="#contact" class="item-link">Aloqa</a></li>
                @if( Auth::check() )
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <li class="item">
                            <button type="submit" class="item-link">Chiqish</button>
                        </li>
                    </form>
                @else
                    <li class="item"><a href="{{ route('login') }}" class="item-link">Kirish</a></li>
                    <li class="item"><a href="{{ route('register') }}" class="item-link">Royxatdan otish</a></li>
                @endif
            </ul>
        </div>
    </header>
    <main class="main">
        <div class="main__text container">
            <h1 class="title">
                Memorial Hospital - eng yaxshi tibbiy xizmatlar uchun eng yaxshi manzil!
            </h1>
            <p class="desc">Memorial - bu bemorlar va ularning oilalari va do'stlari uchun sog'liqni saqlash bo'yicha onlayn ma'lumot manbai. Bu Milliy sog'liqni saqlash instituti (NIH) tarkibiga kiruvchi dunyodagi eng katta tibbiy kutubxona bo'lgan Milliy tibbiyot kutubxonasi (NLM) xizmatidir.</p>
        </div>
        <div class="main__down container">
            <a href="#aboutUs" class="down">↓</a>
        </div>
    </main>
    @if( Auth::check() )
        <section class="aboutUs" id="aboutUs">
        <h2 class="aboutUs__title">Biz haqimizda</h2>
        <div class="aboutUs__inner container">
            <div class="img__box">
                <div class="box__row">
                    <a href="./pages/qabulxona.htm">
                        <div class="card">
                            <div class="card__inner">
                                <img src="./images/about/about1.jpeg" alt="">
                                <div class="text">
                                    <h3>Qabulxona</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="./pages/palata.htm">
                        <div class="card">
                            <div class="card__inner">
                                <img src="./images/about/about2.jpeg" alt="">
                                <div class="text">
                                    <h3>Palata</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="./pages/stomatologiya.htm">
                        <div class="card">
                            <div class="card__inner">
                                <img src="./images/about/about3.jpeg" alt="">
                                <div class="text">
                                    <h3>Stomatologiya</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box__row">
                    <div class="card">
                        <div class="card__inner">
                            <img src="./images/about/about4.jpeg" alt="">
                            <div class="text">
                                <h3>Operatsiya xonasi</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__inner">
                            <img src="./images/about/about 5.jpeg" alt="">
                            <div class="text">
                                <h3>Reanimatsiya xonasi</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__inner">
                            <img src="./images/about/about6.jpeg" alt="">
                            <div class="text">
                                <h3>Palata</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text__box">
                <p class="desc">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id a aliquid dolorem cupiditate!
                    Expedita, iusto perspiciatis quod consectetur sit esse accusamus! Perspiciatis quaerat nostrum
                    excepturi adipisci nihil. Obcaecati omnis itaque beatae ab alias deserunt tenetur quos aliquam
                    recusandae qui neque blanditiis, consequuntur architecto esse rerum quaerat necessitatibus
                    laborum magnam ullam provident perspiciatis? Aut iure ratione dolor natus a dolorem earum
                    explicabo ad nesciunt adipisci repellat consequatur ullam nostrum accusamus aliquam delectus
                    quis iste veritatis quidem amet, similique soluta hic. Unde rem maxime necessitatibus libero
                    accusamus quos recusandae. Eveniet odio, velit esse culpa consequatur tempore voluptate odit
                    officia, nam aspernatur nesciunt. Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Consequatur labore eum mollitia odit obcaecati omnis. Distinctio odit deleniti sunt dolores
                    ipsum reprehenderit optio, provident neque. Ea, fugiat. Ad praesentium ab quo eos deleniti,
                    voluptates laudantium maxime dolorum dolorem a voluptas obcaecati alias natus sunt ipsum quidem
                    similique reprehenderit, expedita unde?Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Tempora voluptates consequatur officia dignissimos aliquam animi, temporibus eligendi debitis,
                    facilis ratione consequuntur sapiente natus voluptatem eaque possimus dolorem ea doloribus
                    reiciendis. Repellendus reprehenderit, quasi dicta laboriosam quod doloribus veniam aliquid
                    ratione illo sed velit et soluta sunt magnam cum.
                </p>
            </div>
        </div>
    </section>
        <section class="opportun" id="opportun">
            <h2 class="title opportun__title">Xizmatlar</h2>
            <div class="container opportun__inner">
                <div class="opportun__card-container">

                    <a class="opportun__card" href="routers/funksional-diagnostika.htm">
                        <div class="opportun__card-inner">
                            <div class="opportun__card-face">
                                    <span class="opportun__card-icon">
                                        <img class="img" src="images/articles/92/content-original-68x68.png" alt="">
                                    </span>

                                <div class="opportun__card-text-wrap">
                                    <span class="opportun__card-title">Funksional diagnostika</span>
                                    <p class="opportun__card-text">Kasalliklarni laborator va instrumental usullar
                                        yordamida tashxislash</p>
                                </div>
                            </div>

                            <div class="opportun__card-back">
                                <h2 class="open">Ko'rish</h2>
                            </div>
                        </div>
                    </a>
                    <a class="opportun__card" href="./routers/Jarroh.htm">
                        <div class="opportun__card-inner">
                            <div class="opportun__card-face">
                                    <span class="opportun__card-icon">
                                        <img class="img" src="images/articles/91/content-original-86x86.png" alt="">
                                    </span>

                                <div class="opportun__card-text-wrap">
                                    <span class="opportun__card-title">Jarroh</span>
                                    <p class="opportun__card-text">Jarrohlik – bolalar va kattalar bo`limi</p>
                                </div>
                            </div>

                            <div class="opportun__card-back">
                                <h2 class="open">Ko'rish</h2>
                            </div>
                        </div>
                    </a>
                    <a class="opportun__card" href="./routers/Statsionar.htm">
                        <div class="opportun__card-inner">
                            <div class="opportun__card-face">
                                    <span class="opportun__card-icon">
                                        <img class="img" src="images/articles/18/content-original-90x90.png" alt="">
                                    </span>

                                <div class="opportun__card-text-wrap">
                                    <span class="opportun__card-title">Statsionar</span>
                                    <p class="opportun__card-text">Memorial Hospital” statsionari aholi salomatigini
                                        asrash uchun noyob loyihani taklif etadi </p>
                                </div>
                            </div>

                            <div class="opportun__card-back">
                                <h2 class="open">Ko'rish</h2>
                            </div>
                        </div>
                    </a>
                    <a class="opportun__card" href="./routers/Endokrinologiya.htm">
                        <div class="opportun__card-inner">
                            <div class="opportun__card-face">
                                    <span class="opportun__card-icon">
                                        <img class="img" src="images/articles/16/content-original-96x96.png" alt="">
                                    </span>

                                <div class="opportun__card-text-wrap">
                                    <span class="opportun__card-title">Endokrinologiya</span>
                                    <p class="opportun__card-text">Endokrin tizimi kasalliklarini profilaktikasi,
                                        to`g`ri tashxislash va samarali davolash </p>
                                </div>
                            </div>

                            <div class="opportun__card-back">
                                <h2 class="open">Ko'rish</h2>
                            </div>
                        </div>
                    </a>
                    <a class="opportun__card" href="routers/Nevrologiya.htm">
                        <div class="opportun__card-inner">
                            <div class="opportun__card-face">
                                    <span class="opportun__card-icon">
                                        <img class="img" src="images/articles/17/content-original-94x94.png" alt="">
                                    </span>

                                <div class="opportun__card-text-wrap">
                                    <span class="opportun__card-title">Nevrologiya</span>
                                    <p class="opportun__card-text">Bolalar va kattalar nevrologiyasi sohasida
                                        kasalliklarni diagnostikalash va davolash.</p>
                                </div>
                            </div>

                            <div class="opportun__card-back">
                                <h2 class="open">Ko'rish</h2>
                            </div>
                        </div>
                    </a>
                    <a class="opportun__card" href="routers/Allergologiya.htm">
                        <div class="opportun__card-inner">
                            <div class="opportun__card-face">
                                    <span class="opportun__card-icon">
                                        <img class="img" src="images/articles/15/content-original-104x104.png" alt="">
                                    </span>

                                <div class="opportun__card-text-wrap">
                                    <span class="opportun__card-title">Allergologiya</span>
                                    <p class="opportun__card-text">Allergik kasalliklarni profilaktikasi, to`g`ri
                                        tashxislash va samarali davolash</p>
                                </div>
                            </div>

                            <div class="opportun__card-back">
                                <h2 class="open">Ko'rish</h2>
                            </div>
                        </div>
                    </a>
                    <a class="opportun__card" href="routers/Pulmonologiya.htm">
                        <div class="opportun__card-inner">
                            <div class="opportun__card-face">
                                    <span class="opportun__card-icon">
                                        <img class="img" src="images/articles/14/content-original-84x84.png" alt="">
                                    </span>

                                <div class="opportun__card-text-wrap">
                                    <span class="opportun__card-title">Pulmonologiya</span>
                                    <p class="opportun__card-text">Nafas olish a&#039;zolari patologiyasiga ega
                                        bemorlarni diagnostikalash va davolash.</p>
                                </div>
                            </div>

                            <div class="opportun__card-back">
                                <h2 class="open">Ko'rish</h2>
                            </div>
                        </div>
                    </a>
                    <a class="opportun__card" href="routers/Otoloringologiya.htm">
                        <div class="opportun__card-inner">
                            <div class="opportun__card-face">
                                    <span class="opportun__card-icon">
                                        <img class="img" src="images/articles/12/content-original-104x104.png" alt="">
                                    </span>

                                <div class="opportun__card-text-wrap">
                                    <span class="opportun__card-title">Otolaringologiya (LOR)</span>
                                    <p class="opportun__card-text">LOR – a`zolarining o`tkir va surunkali
                                        kasalliklarini ambulator, konservativ va jarrohlik yo`li bilan davolash</p>
                                </div>
                            </div>

                            <div class="opportun__card-back">
                                <h2 class="open">Ko'rish</h2>
                            </div>
                        </div>
                    </a>
                    <a class="opportun__card" href="routers/Gastroenterologiya.htm">
                        <div class="opportun__card-inner">
                            <div class="opportun__card-face">
                                    <span class="opportun__card-icon">
                                        <img class="img" src="images/articles/13/content-original-76x76.png" alt="">
                                    </span>

                                <div class="opportun__card-text-wrap">
                                    <span class="opportun__card-title">Gastroenterologiya</span>
                                    <p class="opportun__card-text">OIT kasalliklariga ega bemorlarni diagnostikalash va
                                        davolash.</p>
                                </div>
                            </div>

                            <div class="opportun__card-back">
                                <h2 class="open">Ko'rish</h2>
                            </div>
                        </div>
                    </a>
                    <a class="opportun__card" href="routers/Oftalmologiya.htm">
                        <div class="opportun__card-inner">
                            <div class="opportun__card-face">
                                    <span class="opportun__card-icon">
                                        <img class="img" src="images/articles/11/content-original-92x68.png" alt="">
                                    </span>

                                <div class="opportun__card-text-wrap">
                                    <span class="opportun__card-title">Oftalmologiya</span>
                                    <p class="opportun__card-text">Bolalar va kattalarda ko‘z kasalliklarini
                                        diagnostikalash, davolash va oldini olish.</p>
                                </div>
                            </div>

                            <div class="opportun__card-back">
                                <h2 class="open">Ko'rish</h2>
                            </div>
                        </div>
                    </a>
                    <a class="opportun__card" href="routers/Plastik jarrohlik.htm">
                        <div class="opportun__card-inner">
                            <div class="opportun__card-face">
                                    <span class="opportun__card-icon">
                                        <img class="img" src="images/articles/8/content-original-66x66.png" alt="">
                                    </span>

                                <div class="opportun__card-text-wrap">
                                    <span class="opportun__card-title">Plastik jarrohlik</span>
                                    <p class="opportun__card-text">Bolalardagi tug‘ma va orttirilgan patologiyalarni
                                        jarrohlik yo‘li bilan davolash.</p>
                                </div>
                            </div>

                            <div class="opportun__card-back">
                                <h2 class="open">Ko'rish</h2>
                            </div>
                        </div>
                    </a>
                    <a class="opportun__card" href="routers/Kardiologiya.htm">
                        <div class="opportun__card-inner">
                            <div class="opportun__card-face">
                                    <span class="opportun__card-icon">
                                        <img class="img" src="images/articles/9/content-original-90x90.png" alt="">
                                    </span>

                                <div class="opportun__card-text-wrap">
                                    <span class="opportun__card-title">Kardiologiya</span>
                                    <p class="opportun__card-text">Yurak-qon tomir tizimi kasalliklarini
                                        diagnostikalash va davolash.</p>
                                </div>
                            </div>

                            <div class="opportun__card-back">
                                <h2 class="open">Ko'rish</h2>
                            </div>
                        </div>
                    </a>
                    <a class="opportun__card" href="routers/KIDS.htm">
                        <div class="opportun__card-inner">
                            <div class="opportun__card-face">
                                    <span class="opportun__card-icon">
                                        <img class="img" src="images/articles/10/content-original-104x104.png" alt="">
                                    </span>

                                <div class="opportun__card-text-wrap">
                                    <span class="opportun__card-title">KIDS</span>
                                    <p class="opportun__card-text">Tug‘ilgandan 18 yoshgacha bo‘lgan bolalarda
                                        uchraydigan kasalliklarni diagnostikalash, davolash va oldini olish. </p>
                                </div>
                            </div>

                            <div class="opportun__card-back">
                                <h2 class="open">Ko'rish</h2>
                            </div>
                        </div>
                    </a>
                    <a class="opportun__card" href="routers/Urologiya.htm">
                        <div class="opportun__card-inner">
                            <div class="opportun__card-face">
                                    <span class="opportun__card-icon">
                                        <img class="img" src="images/articles/6/content-original-60x63.png" alt="">
                                    </span>

                                <div class="opportun__card-text-wrap">
                                    <span class="opportun__card-title">Urologiya</span>
                                    <p class="opportun__card-text">Tanosil tizimi kasalliklarini diagnostikalash va
                                        davolash</p>
                                </div>
                            </div>
                            <div class="opportun__card-back">
                                <h2 class="open">Ko'rish</h2>
                            </div>
                        </div>
                    </a>
                    <a class="opportun__card" href="routers/Ginekologiya.htm">
                        <div class="opportun__card-inner">
                            <div class="opportun__card-face">
                                    <span class="opportun__card-icon">
                                        <img class="img" src="images/articles/7/content-original-63x45.png" alt="">
                                    </span>

                                <div class="opportun__card-text-wrap">
                                    <span class="opportun__card-title">Ginekologiya</span>
                                    <p class="opportun__card-text">Ayollar reproduktiv tizimi kasalliklarini
                                        diagnostikalash va davolash</p>
                                </div>
                            </div>

                            <div class="opportun__card-back">
                                <h2 class="open">Ko'rish</h2>
                            </div>
                        </div>
                    </a>
                    <a class="opportun__card" href="routers/Laboratoriya.htm">
                        <div class="opportun__card-inner">
                            <div class="opportun__card-face">
                                    <span class="opportun__card-icon">
                                        <img class="img" src="images/articles/4/content-original-66x62.png" alt="">
                                    </span>

                                <div class="opportun__card-text-wrap">
                                    <span class="opportun__card-title">Laboratoriya</span>
                                    <p class="opportun__card-text">Keng ko‘lamdagi diagnostik tekshiruvlar </p>
                                </div>
                            </div>

                            <div class="opportun__card-back">
                                <h2 class="open">Ko'rish</h2>
                            </div>
                        </div>
                    </a>
                    <a class="opportun__card" href="routers/Tomir jarrohligi.htm">
                        <div class="opportun__card-inner">
                            <div class="opportun__card-face">
                                    <span class="opportun__card-icon">
                                        <img class="img" src="images/articles/3/content-original-69x69.png" alt="">
                                    </span>

                                <div class="opportun__card-text-wrap">
                                    <span class="opportun__card-title">Tomir jarrohligi</span>
                                    <p class="opportun__card-text">Tomir tizimi (vena va arteriya)ni diagnostikalash,
                                        davolash va profilaktika qilish.</p>
                                </div>
                            </div>

                            <div class="opportun__card-back">
                                <h2 class="open">Ko'rish</h2>
                            </div>
                        </div>
                    </a>
                    <a class="opportun__card" href="routers/Diagnostika.htm">
                        <div class="opportun__card-inner">
                            <div class="opportun__card-face">
                                    <span class="opportun__card-icon">
                                        <img class="img" src="images/articles/2/content-original-78x76.png" alt="">
                                    </span>

                                <div class="opportun__card-text-wrap">
                                    <span class="opportun__card-title">Diagnostika</span>
                                    <p class="opportun__card-text">Laboratoriya tekshiruvlarini o&#039;tkazish,
                                        funktsional diagnostika, tajribali mutaxassislarning maslahati</p>
                                </div>
                            </div>

                            <div class="opportun__card-back">
                                <h2 class="open">Ko'rish</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="aboutUs" id="doctors">
            <h2 class="aboutUs__title">Shifokorlar</h2>
            <div class="aboutUs__inner container">
                <div class="img__box">
                    <div class="box__row">
                        <a href="./pages/HayitbayevAsadbek.htm">
                            <div class="card">
                                <div class="card__inner">
                                    <img src="./images/doctors/doctor1.jpeg" class="d-img" alt="">
                                    <div class="text">
                                        <h3>Hayitbayev Asadbek</h3>
                                        <p>Travmatolog</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="./pages/Umidaxon.htm">
                            <div class="card">
                                <div class="card__inner">
                                    <img src="./images/doctors/doctor2.png" alt="">
                                    <div class="text">
                                        <h3>Saparbayeva Umidaxon</h3>
                                        <p>Akusher-ginekolog</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="./pages/Jaloladdin.htm">
                            <div class="card">
                                <div class="card__inner">
                                    <img src="./images/doctors/doctor3.jpeg" alt="">
                                    <div class="text">
                                        <h3>Yusupov Jaloladdin</h3>
                                        <p>Oftalmolog</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="box__row">
                        <div class="card">
                            <div class="card__inner">
                                <img src="./images/doctors/doctor4.png" alt="">
                                <div class="text">
                                    <h3>Sa'dullayeva Mavluda</h3>
                                    <p>Terapevt</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card__inner">
                                <img src="./images/doctors/doctor5.1.jpeg" alt="">
                                <div class="text">
                                    <h3>Ibragimova Surayyo</h3>
                                    <p>Bolalar shifokori</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card__inner">
                                <img src="./images/doctors/doctor6.png" alt="">
                                <div class="text">
                                    <h3>Davletov Murod</h3>
                                    <p>Jarrox</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact container" id="contact">
        <div class="contact__title">
            <h2 class="title">Aloqa</h2>
        </div>
        <div class="contact__inner">
            <div class="contact__inner__inputs">
                <input class="name" type="text" placeholder="Ismingizni kiriting...">
                <input class="email" type="email" placeholder="Emailingizni kiriting...">
                <textarea name="textarea" id="" cols="30" rows="10" placeholder="xabar yuboring..."></textarea>
                <input class="submit" type="submit" value="Yuborish">
            </div>
            <div class="contact__inner__map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1492.7253841568674!2d60.6155808!3d41.5594878!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ec05ff834521ed%3A0x8c1f817ca1390fb1!2sMemorial%20Hospital!5e0!3m2!1sru!2s!4v1702977965273!5m2!1sru!2s"
                    width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    @endif
    <footer class="footer">
        <div class="footer__top">
            <div class="footer__nav container">
                <div class="nav__logo">
                    <h3 class="logo"><a href="#">Memorial hospital</a></h3>
                    <div class="smm">
                        <a href="#"><img src="./images/telegram.png" alt=""></a>
                        <a href="#"><img src="./images/facebook.png" alt=""></a>
                        <a href="#"><img src="./images/instagram.png" alt=""></a>
                    </div>
                </div>
                <div class="inner">
                    <ul class="nav__items">
                        <li class="item"><a href="#aboutUs" class="item-link">Biz haqimizda</a></li>
                        <li class="item"><a href="#opportun" class="item-link">Xizmatlar</a></li>
                        <li class="item"><a href="#" class="item-link">Shifokorlar</a></li>
                        <li class="item"><a href="#contact" class="item-link">Aloqa</a></li>
                    </ul>
                    <div class="items__bottom">
                        <div class="tel"><img src="./images/phone.png" alt=""> +998(99) 000-00-00</div>
                        <div class="location"><img src="./images/location-pin.png" alt=""> Pahlavon Mahmud ko'chasi,
                            59/3 220100 Urganch Uzbekistan</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <!-- <div class="social__networks container">
                <a href="#"><img src="./images/svg/logo-instagram.svg" alt=""></a>
                <h3>|</h3>
                <a href="#"><img src="./images/svg/logo-facebook.svg" alt=""></a>
                <h3>|</h3>
                <a href="#"><img src="./images/svg/logo-linkedin.svg" alt=""></a>
                <h3>|</h3>
                <a href="#"><img src="./images/svg/telegram-outline.svg" alt=""></a>
                <h3>|</h3>
                <a href="#"><img src="./images/svg/mail-outline.svg" alt=""></a>
            </div> -->
        </div>
    </footer>
</div>
</body>

</html>
