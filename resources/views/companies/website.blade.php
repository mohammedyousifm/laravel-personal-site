<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'محمد يوسف - مطور مواقع الإلكترونية وخبير شبكات وأمن المعلومات')</title>
    <meta name="description"
        content="محمد يوسف، خبير تطوير مواقع الإلكترونية وشبكات وأمن المعلومات. استكشف الخدمات المتقدمة لتعزيز الأمان والكفاءة في مشاريعك الإلكترونية.">
    <meta property="og:title" content="محمد يوسف - مطور مواقع الإلكترونية وخبير شبكات وأمن المعلومات" />
    <meta property="og:description"
        content="محمد يوسف، خبير تطوير مواقع الإلكترونية وشبكات وأمن المعلومات. استكشف الخدمات المتقدمة لتعزيز الأمان والكفاءة في مشاريعك الإلكترونية." />
    <meta name="keywords"
        content="مطور مواقع الإلكترونية, خبير شبكات, أمن المعلومات, تطوير مواقع الإلكترونية, الحماية الإلكترونية, خدمات الشبكات وأمن المعلومات">
    <meta property="og:image" content="https://mohammedyousif.com/public/dashboard/images/moh2.png" />
    <meta property="og:url" content="http://www.mohammedyousif.com" />
    <meta property="og:type" content="website" />
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="http://www.mohammedyousif.com" />
    <link rel="icon" href="{{ asset('public/dashboard/images/moh2.png') }}">
    <meta name="author" content="محمد يوسف">


    <meta name="twitter:site" content="@mohmmedyouslf">

    <!-- Schema.org markup for Google+ -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Person",
            "name": "محمد يوسف",
            "url": "http://www.mohammedyousif.com",
            "sameAs": [
                "https://www.facebook.com/share/Z77FMbJwhzdTkW9k/?mibextid=qi2Omg",
                "https://twitter.com/mohmmedyouslf",
                "https://www.linkedin.com/in/mohammed-yousif-96a492261?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app",
                "https://www.instagram.com/m_d_yousif/"

            ],
            "jobTitle": "مطور مواقع الإلكترونية وخبير شبكات وأمن المعلومات",
            "worksFor": {
                "@type": "freelancer ",
                "name": "Mohammed Yousif"
            }
        }
        </script>



    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css.map') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
    <link rel="icon" href="{{ asset('dashboard/images/moh2.png') }}">

    {{-- jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

</head>

<body>

    <span class="loader"></span>
    <!--/ Nav Star /-->
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav" dir="ltr">
        <div class="container">
            <img class="logo" src="{{ asset('dashboard/images/logo1.png') }}" alt="">
            <a class="navbar-brand js-scroll" href="/">Mohammed Y</a>
            <button class="navbar-toggler collapsed" type="button">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#blog">مدونتي</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#contact">توصل معي</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#work">مشاريعي</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#service">خدماتي</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="#about">من انا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll" href="/">الرئيسية</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="whatsapp-contact">
        <div class="whatsapp-link">
            <a href="https://wa.me/249905370486" target="_blank">
                <img src="{{ asset('dashboard/images/whatsapp1.png') }}" alt=""
                    style="min-width: 50px; max-width: 50px; height: 50px; border-radius: 10px;">
            </a>
            <span class="whatsapp-message">تواصل معي على الواتساب!</span>
        </div>
    </div>

    @yield('content')


    {{-- footer --}}
    <section class="paralax-mf footer-paralax  sect-mt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-mf">
                        <div id="contact" class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-lg-6">
                                    <div class="title-box text-center">
                                        <h3 class="title-a">التواصل</h3>
                                        <p class="subtitle-a">
                                            يمكنك التواصل معي عبر البريد الالكتروني
                                        </p>
                                        <div class="line-mf"></div>
                                    </div>
                                    <div>
                                        <form id="sentemailform" action="{{ route('contact.send') }}" method="post"
                                            role="form" class="contactForm">
                                            @csrf
                                            <div id="errormessage"></div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control"
                                                            id="name" placeholder="اسمك" data-rule="minlen:4"
                                                            data-msg="Please enter at least 4 chars" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email"
                                                            id="email" placeholder="بريدك الالكتروني"
                                                            data-rule="email" data-msg="Please enter a valid email" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject"
                                                            id="subject" placeholder="الموضوع" data-rule="minlen:4"
                                                            data-msg="Please enter at least 8 chars of subject" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                                                            data-msg="Please write something for us" placeholder="الرسالة"></textarea>
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit"
                                                        class="button sent-email button-a button-big button-rouded">
                                                        <span id="button-text">أرسل رسالة</span>
                                                    </button>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-6">
                                    <div class="pt-4 pt-md-0">
                                        <div class="title-box text-center">
                                            <h3 class="title-a">التواصل</h3>
                                            <p class="subtitle-a">
                                                او يمكنك التواصل معي عبر مواقع السوشيال ميديا
                                            </p>
                                            <div class="line-mf"></div>
                                            <div class="socials ">
                                                <ul>
                                                    <li>
                                                        <a href="https://wa.me/249905370486" target="contact">
                                                            <span class="ico-circle"> <i
                                                                    class="fa-brands fa-whatsapp"></i></span></a>
                                                    </li>

                                                    <li>
                                                        <a href="https://www.linkedin.com/in/mohammed-yousif-96a492261?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                                                            target="contact">
                                                            <span class="ico-circle"><i
                                                                    class="fa-brands fa-linkedin"></i></span></a>
                                                    </li>

                                                    <li>
                                                        <a href="https://www.instagram.com/m_d_yousif/"
                                                            target="contact">
                                                            <span class="ico-circle"> <i
                                                                    class="fa-brands fa-instagram"></i></span></a>
                                                    </li>

                                                    <li>
                                                        <a
                                                            href="https://www.facebook.com/share/Z77FMbJwhzdTkW9k/?mibextid=qi2Omg">
                                                            <span class="ico-circle" target="contact"> <i
                                                                    class="fa-brands fa-facebook-messenger"></i></span></a>
                                                    </li>

                                                    <li>
                                                        <a
                                                            href="https://www.tiktok.com/@mohammed.yousiif?_t=8m41Ox8HzjK&_r=1">
                                                            <span class="ico-circle" target="contact"><i
                                                                    class="fa-brands fa-tiktok"></i></span></a>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="more-info">
                                        <p class="lead">
                                            يمكنكم التواصل معي بسهولة عبر استخدام نموذج الاتصال المتوفر داخل الموقع، أو
                                            من خلال الوسائل الأخرى مثل تطبيقات إنستغرام وفيسبوك. أنا متاح دائمًا للرد
                                            على استفساراتكم وتقديم المساعدة التي تحتاجونها. لا تترددوا في استخدام أي من
                                            هذه القنوات للتواصل معي
                                        </p>
                                        <ul class="list-ico">
                                            <li>

                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container pt-5">
                <div class="row ">
                    <div class="col-sm-12 text-white">
                        <div class="copyright-box">
                            <strong>
                                <p class="copyright" style="color: rgb(0, 0, 0)">
                                    حقوق النشر &copy; 2024 محمد يوسف كل الحقوق محفوظة
                                </p>
                            </strong>
                        </div>
                        <div style="color: rgb(0, 140, 255)">
                            <strong> contact@mohammedyousif.com</strong>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>

    {{-- bootstrap  --}}
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js.map') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js.map') }}"></script>

    {{-- script for sweet alert 2   --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- my script --}}
    <script src="{{ asset('website/js/script.js') }}"></script>
</body>

</html>
