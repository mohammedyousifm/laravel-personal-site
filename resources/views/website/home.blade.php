@extends('companies.website')

@section('content')
    {{-- home page --}}
    <section class="home_intro container text-center">
        <div class="content">
            <div class="text">
                <h1 class="intro-title mb-4">I'm Mohammed Yousif</h1>
                <p class="intro-subtitle">
                <p>مطور مواقع الاكتروني <br> & شبكات وأمن المعلومات</p>
                <strong>php | Laravel | Jquery | Ajax </strong>
                </p>
                <a href="#service" class="btn btn-primary mb-2">خدماتي</a>
            </div>
            <div class="image">
                <img src="{{ asset('dashboard/images/moh2.png') }}" alt="image" style="border-radius: 10px" />
            </div>
        </div>
    </section>

    {{-- about --}}
    <section id="about" class="about-mf sect-pt4 route mt-5" dir="ltr">
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="title-box text-center">
                                <h3 class="title-a">من أنا</h3>
                                <p class="subtitle-a">
                                    إليك نظرة على مسيرتي المهنية وخبراتي
                                </p>
                                <div class="line-mf"></div>
                            </div>


                            <div class="col-sm-12 col-lg-12">
                                <div class="about-me pt-4 pt-md-0">
                                    <p class="lead" dir="rtl">
                                        مرحبًا بكم في موقعي الشخصي. أنا محمد يوسف، مطور ويب مستقل وطالب في مجال تكنولوجيا
                                        المعلومات بجامعة Lovely Professional University في الهند<br><br>أجمع بين شغفي
                                        بتطوير
                                        الويب
                                        واهتمامي
                                        العميق بأمن المعلومات لتقديم حلول ويب متقدمة وبديهية.
                                        <br>
                                        <br>

                                        أتمتع بخلفية قوية في تطوير Full Stack، ولدي خبرة خاصة باستخدام Laravel، مما يمكنني
                                        من إضافة قيمة كبيرة إلى كل مشروع أعمل عليه. أسعى دومًا لاستخدام أحدث التقنيات وأفضل
                                        الممارسات لخلق تجارب ويب فعالة، آمنة، وجذابة بصريًا.
                                        <br>
                                        <br>

                                        أدعوكم للتعاون معي لتحويل أفكاركم إلى واقع ملموس، من خلال التفكير الابتكاري والدقة
                                        في التنفيذ. سواء كنتم تبحثون عن تطوير موقع ويب من الصفر، تحسين موقعكم الحالي، أو حتى
                                        إذا كان لديكم تحديات تتعلق بالأمن السيبراني، فأنا هنا لتقديم الدعم والخبرة التي
                                        تحتاجونها.
                                        <br>
                                        <br>

                                        لنعمل معًا لخلق حلول تقنية ترتقي بأعمالكم وتلبي تطلعاتكم الأكثر طموحًا. شكرًا
                                        لزيارتكم، وأتطلع إلى فرصة التعاون المثمر.
                                    </p>
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-12">
                                <div class="skill-mf">

                                    <p class="text-center"><strong>Technical skills</strong></p>
                                    @foreach ($skills as $index => $skill)
                                        <span>{{ $skill->skill_name }}</span> <span class="pull-right"></span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: {{ $skill->proficiency_level }}%" aria-valuenow="85"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        @if ($loop->iteration == 8)
                                            <p><strong>Additional skills</strong></p>
                                        @endif
                                    @endforeach

                                    <div>
                                        <p><strong>Additional skills</strong></p>
                                        <p>المرونة والتكيف</p>
                                        <p>مهارات التعلم الذاتي</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- achievements --}}
    <section id="achiev">
        <div class="section-counter  mb-5 paralax-mf  achievements">
            <div class="overlay-achievements"></div>
            <div class="container ">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">الإنجازات</h3>
                        <p class="subtitle-a">
                            فيما يلي الإنجازات التي حققتها
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="fa-solid fa-square-check"></i></span>
                            </div>
                            <div class="counter-num">
                                <p class="counter">{{ $info->project_complete }}</p>
                                <span class="counter-text">عدد المشاريع</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="fa-solid fa-calendar"></i></span>
                            </div>
                            <div class="counter-num">
                                <p class="counter">10</p>
                                <span class="counter-text">سنوات من الخبرة</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="fa-solid fa-people-group"></i></span>
                            </div>
                            <div class="counter-num">
                                <p class="counter">{{ $info->total_clients }}</p>
                                <span class="counter-text">إجمالي العملاء</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="fa-solid fa-ribbon"></i></span>
                            </div>
                            <div class="counter-num">
                                <p class="counter">{{ $info->count_companies }}</p>
                                <span class="counter-text">عمل</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section id="service" class="services-mf route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">خدماتي</h3>
                        <p class="subtitle-a">
                            فيما يلي الخدمات التي يمكنني القيام بها.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-12 col-lg-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <div class="service-image">
                                <img src="{{ asset('images/create-website.png') }}" alt="service-img" loading="lazy"
                                    style="min-width: 100%; max-width: 100%; height: 300px; border-radius: 10px;">
                                <span class="order-project">أطلب الخدمة</span>
                            </div>
                        </div>
                        <div class="service-content">
                            <h4 class="s-title">بناء موقعك الإلكتروني</h4>
                            <p class="s-description text-center">

                            </p>
                        </div>
                        <div class="get-service m-3 text-center">
                            <a href="https://wa.me/249905370486" target="out"> <button class="btn btn-primary">حجز
                                    الخدمة</button></a>
                            <a> <button class="btn  btn-primary">قرأ المزيد عن الخدمة</button></a>
                        </div>
                        <div class="feedback-link text-center mt-2">
                            <a style="color: #000000; font-size: 14px;">قراءة اراء العملاة</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <div class="service-image">
                                <img src="{{ asset('dashboard/images/2.jpg') }}" alt="service images" loading="lazy"
                                    style="min-width: 100%; max-width: 100%; height: 300px; border-radius: 10px;">
                                <span class="order-project">أطلب الخدمة</span>
                            </div>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">تصميم وانشاء المتاجر الإلكترونية
                            </h2>
                            <p class="s-description text-center">

                            </p>
                        </div>
                        <div class="get-service m-3 text-center">
                            <a href="https://wa.me/249905370486" target="out"> <button class="btn btn-primary">حجز
                                    الخدمة</button></a>
                            <a> <button class="btn  btn-primary">قرأ المزيد عن الخدمة</button></a>
                        </div>
                        <div class="feedback-link text-center mt-2">
                            <a style="color: #000000; font-size: 14px;">قراءة اراء العملاة</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <div class="service-image">
                                <img src="{{ asset('dashboard/images/3.png') }}" alt="service images" loading="lazy"
                                    style="min-width: 100%; max-width: 100%; height: 300px; border-radius: 10px;">
                                <span class="order-project">أطلب الخدمة</span>
                            </div>
                        </div>
                        <div class="service-content">
                            <h4 class="s-title">رفع موقع و حجز استضافه و دومين
                            </h4>
                            <p class="s-description text-center">

                            </p>
                        </div>
                        <div class="get-service m-3 text-center">
                            <a href="https://wa.me/249905370486" target="out"> <button class="btn btn-primary">حجز
                                    الخدمة</button></a>
                            <a> <button class="btn  btn-primary">قرأ المزيد عن الخدمة</button></a>
                        </div>
                        <div class="feedback-link text-center mt-2">
                            <a style="color: #000000; font-size: 14px;">قراءة اراء العملاة</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Portfolio --}}
    <section id="work" class="portfolio-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">الأعمال</h3>
                        <p class="subtitle-a">
                            فيما يلي المشاريع التي أكملتها بنجاح
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-12 col-lg-4">
                    <div class="work-box">
                        <a href="https://wa.me/249905370486" target="new" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <div class="work-image text-center">
                                    <img src="{{ asset('images/5.png') }}" alt="work images" loading="lazy"
                                        class="img-fluid" />
                                    <span class="order-project">أطلب عمل مماثل</span>
                                </div>
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">موقع التجارة الإلكترونية</h2>
                                        <div class="w-more">
                                            <span><a style="color: blue">ربط اللتجارة الإلكترلتجارة الإلكترلتجارة
                                                    الإلكترلتجارة الإلكترلتجارة الإلكترلتجارة الإلكترلتجارة
                                                    الإلكترموقع</a></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4">
                    <div class="work-box">
                        <a href="https://wa.me/249905370486" target="new" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <div class="work-image text-center">
                                    <img src="{{ asset('images/4.png') }}" alt="work images" loading="lazy"
                                        class="img-fluid" />
                                    <span class="order-project">أطلب عمل مماثل</span>
                                </div>
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">موقع شخصي</h2>
                                        <div class="w-more">
                                            <span><a style="color: blue">ربط الموقع</a></span>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4">
                    <div class="work-box">
                        <a href="https://wa.me/249905370486" target="new" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <div class="work-image text-center">
                                    <img src="{{ asset('images/3.png') }}" alt="work images" loading="lazy"
                                        class="img-fluid" />
                                    <span class="order-project">أطلب عمل مماثل</span>
                                </div>
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">موقع شخصي</h2>
                                        <div class="w-more">
                                            <span><a style="color: blue">ربط الموقع</a></span>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4">
                    <div class="work-box">
                        <a href="https://wa.me/249905370486" target="new" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <div class="work-image text-center">
                                    <img src="{{ asset('images/1.png') }}" alt="work images" loading="lazy"
                                        class="img-fluid" />
                                    <span class="order-project">أطلب عمل مماثل</span>
                                </div>
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">موقع لمطعم</h2>
                                        <div class="w-more">
                                            <span><a style="color: blue">ربط الموقع</a></span>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4">
                    <div class="work-box">
                        <a href="https://wa.me/249905370486" target="new" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <div class="work-image text-center">
                                    <img src="{{ asset('images/6.1.png') }}" alt="work images" loading="lazy"
                                        class="img-fluid" />
                                    <span class="order-project">أطلب عمل مماثل</span>
                                </div>
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">موقع شخصي</h2>
                                        <div class="w-more">
                                            <span><a style="color: blue">ربط الموقع</a></span>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Blog --}}
    <section id="blog" class="blog-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">المدونة</h3>
                        <p class="subtitle-a" style="width: 70%;    margin: 0 auto;">
                            مرحبًا بكم في مدونتي! هنا في قسم المدونة، أشارككم رحلتي في تعلم تطوير الويب، الشبكات،
                            وأمن المعلومات. أدعوكم لاستكشاف هذه المجالات معي وتبادل الخبرات والتجارب.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-12 col-lg-4">
                    <div class="card card-blog mt-5">
                        <div class="card-img blog-card-img text-center">
                            <a class="img-link">
                                <img src="{{ asset('images/travel.jpg') }}" alt="img" class="img-fluid blog-img" />
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category">رحلة نحو التعليم: قفزتي من الوطن إلى الهند</h6>
                                </div>
                            </div>
                            <h3 class="card-title">
                                <a href="#blog">قراءه المزيد عن هذه المدونه</a>
                            </h3>
                            <p class="card-description">
                                كان السفر آخر شيء فكرت فيه، ولكن بشكل غير متوقع، قررت أن أذهب للدراسة في الهند. في البداية،
                                لم أكن أصدق أنني سأسافر؛ فكرة مغادرة بلدي بدت مستحيلة. ومع ذلك، بعد التفكير في الفرص
                                التعليمية المتميزة في الهند، التي تعتبر أفضل بكثير من تلك المتوفرة في بلدي، شعرت بأن علي
                                الذهاب. كان الاستعداد للرحلة تحديًا، خاصةً مع قيود السفر خلال جائحة كوفيد-19 التي جعلت كل
                                شيء بدءًا من الحصول على تذكرة إلى التنقل في إجراءات المطار صعبًا للغاية.
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="post-author">
                                <a href="#">
                                    <img src="{{ asset('dashboard/images/moh2.png') }}" alt=""
                                        class="avatar rounded-circle" />

                                </a>
                            </div>
                            <div class="post-date ml-2">
                                <span class="ion-ios-clock-outline"></span>
                                2021
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4">
                    <div class="card card-blog mt-5">
                        <div class="card-img blog-card-img text-center">
                            <a class="img-link">
                                <img src="{{ asset('images/english.jpeg') }}" alt="img"
                                    class="img-fluid blog-img" />
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category">ضائع في الترجمة: معركتي وانتصاري مع الإنجليزية في الهند</h6>
                                </div>
                            </div>
                            <h3 class="card-title">
                                <a href="#blog">قراءه المزيد عن هذه المدونه</a>
                            </h3>
                            <p class="card-description">

                                عندما وصلت إلى الهند، واجهت تحديًا غير متوقع - على الرغم من أن اللغة الإنجليزية هي لغة
                                التعليم، إلا أنني لم أكن أعرف اللغة. قد يبدو الأمر ساخرًا أن تسافر إلى بلد آخر للدراسة
                                دون
                                معرفة لغتهم التعليمية، وأعترف بأنني لم أكن قد فكرت كثيرًا في هذه العقبة مسبقًا. عند
                                وصولي،
                                اكتشفت أن الفصل الدراسي قد بدأ بالفعل. ونتيجة لذلك، نصحوني بأخذ فصل دراسي إجازة لأركز
                                على
                                تعلم اللغة الإنجليزية. خصصت أربعة أشهر لدراسة الإنجليزية بشكل مكثف قبل العودة إلى متابعة
                                دراستي. ومع ذلك، كانت هناك تحديات مع اللغة، ولكنني استمررت دون السماح لها بعرقلة تقدمي
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="post-author">
                                <a href="#">
                                    <img src="{{ asset('dashboard/images/moh2.png') }}" alt=""
                                        class="avatar rounded-circle" />
                                </a>
                            </div>
                            <div class="post-date ml-2">
                                <span class="ion-ios-clock-outline"></span>
                                2021
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4">
                    <div class="card card-blog mt-5">
                        <div class="card-img blog-card-img text-center">
                            <a class="img-link">
                                <img src="{{ asset('images/laptop.jpg') }}" alt="img" class="img-fluid blog-img" />
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category">من مبتدئ إلى تقني: تجربتي الأولى مع الكمبيوتر المحمول</h6>
                                </div>
                            </div>
                            <h3 class="card-title">
                                <a href="#blog">قراءه المزيد عن هذه المدونه</a>
                            </h3>
                            <p class="card-description">

                                قد يبدو الأمر مضحكًا، ولكن عندما وصلت إلى الكلية لدراسة تكنولوجيا المعلومات، لم أكن قد
                                استخدمت الكمبيوتر المحمول من قبل. أدركت هذا بعد بدء الدورة مباشرة، وسرعان ما فهمت ضرورة
                                امتلاك واحد في مجالي. اتصلت بأخي، الذي اشترى لي كمبيوتر محمول بلطف.

                                كان استكشاف الكمبيوتر المحمول الجديد مغامرة. تعمقت في كل ميزة ووظيفة، من التنقل الأساسي
                                إلى
                                التطبيقات المعقدة. حولت هذه الرحلة من لم يكن لديه معرفة بأساسيات الكمبيوتر المحمول إلى
                                مستخدم ماهر قادر على البرمجة، تصميم المواقع الإلكترونية، والكثير غير ذلك. يشارك هذا
                                المدونة
                                قصة انتقالي، مسلطة الضوء على كيف يمكن للتكنولوجيا تغيير قدراتنا بسرعة وتوسيع آفاقنا.
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="post-author">
                                <a href="#">
                                    <img src="{{ asset('dashboard/images/moh2.png') }}" alt=""
                                        class="avatar rounded-circle" />
                                </a>
                            </div>
                            <div class="post-date ml-2">
                                <span class="ion-ios-clock-outline"></span>
                                2024
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-4">
                    <div class="card card-blog mt-5">
                        <div class="card-img blog-card-img text-center">
                            <a class="img-link">
                                <img src="{{ asset('images/web.jpeg') }}" alt="img" class="img-fluid blog-img" />
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category">غوص عميق في تطوير الويبة</h6>
                                </div>
                            </div>
                            <h3 class="card-title">
                                <a href="#blog">قراءه المزيد عن هذه المدونه</a>
                            </h3>
                            <p class="card-description">

                                عندما بدأت رحلتي في مجال تكنولوجيا المعلومات، كانت اهتماماتي الأساسية تتمحور حول الأمن
                                السيبراني ومفاهيم الشبكات والأمان. ومع ذلك، مع تعمقي أكثر، وجدت نفسي متجهاً نحو تطوير الويب.
                                بدأت بإتقان الأساسيات مثل تحرير الرسائل وتعلم JavaScript. قريبًا، كنت أستكشف مكتبات وأدوات
                                متنوعة، بما في ذلك Bootstrap وjQuery، الأمر الذي وسّع مهاراتي وفهمي بشكل أكبر.

                                لم تتوقف استكشافاتي عند هذا الحد. في النهاية، اكتشفت BGP (بروتوكول بوابة الحدود)، الذي أثار
                                اهتمامي بأطر العمل الأساسية للإنترنت نفسه. كان هذا الاكتشاف نقطة تحول بالنسبة لي، قادتني من
                                تقنيات الواجهة الأمامية إلى تطوير الواجهة الخلفية. اليوم، أنا منغمس تمامًا في تطوير الويب،
                                باستخدام Laravel بجانب BGP، مما يتيح لي إنشاء مواقع ويب أكثر قوة وديناميكية. لقد ساعدني هذا
                                الانتقال ليس فقط على تعزيز قدراتي التقنية ولكن أيضًا على تعميق شغفي بمجال تطوير الويب.
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="post-author">
                                <a href="#">
                                    <img src="{{ asset('dashboard/images/moh2.png') }}" alt=""
                                        class="avatar rounded-circle" />
                                </a>
                            </div>
                            <div class="post-date ml-2">
                                <span class="ion-ios-clock-outline"></span>
                                2024
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
