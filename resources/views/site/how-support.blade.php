@extends('layouts.site')

@section('seo_meta')
    <meta name="description" content="Присоединяйтесь к teenjob.by и развивайте проект вместе с нами либо становитесь нашим партнером."/>
    <meta name="language" content="RU"/>

    <title>Поддержать волонтерский проект для подростков teenjob.by</title>
@endsection

@section('og_meta')
    <meta property="og:image" content="{{url('/')}}/images/support.png">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="vk:image" content="{{url('/')}}/images/support.png">
@endsection

@section('body_class', 'page-home')

@section('content')
    <div class="container-fluid background">
        <div class="container how-support">
            <h2>Поддержать проект</h2>
            <div class="row justify-content-center">
                <div class="card-wrapper">
                    <div class="support-card">
                        <div class="circle">
                            <img src="/images/charity.png">
                        </div>
                            <h3>Стань волонтером</h3>
                            <p><a href="https://docs.google.com/forms/d/130lf1zM6lgpancdpPOBCTfyKaML5hAgE-CMtRAam6Ws/edit#responses">Присоединяйтесь к нашей команде!</a><br> Над развитием портала трудятся дизайнеры, разработчики, смм, seo, пр-специалисты, сисадмины, модераторы и нетолько! Будем рады как специалистам, так и желающим приобрести опыт!</p>

                    </div>
                    <div class="support-card">
                        <div class="circle">
                            <img src="/images/gift.png">
                        </div>
                            <h3>Донейт</h3>
                            <p>Наш проект волонтерский, поэтому на его поддержку всегда нужна помощь. Если вы хотите сделать донейт, пожауйста, напишите нам <a href="mailto:teenjob.by@gmail.com">teenjob.by@gmail.com</a></p>

                    </div>
                    <div class="support-card">
                        <div class="circle">
                            <img src="/images/heart.png">
                        </div>
                            <h3>Лайк</h3>
                            <p>Расшарьте информацию о нашем проекте в социальных сетях, чтобы платформа становилась все более популярной и заполняемой!</p>

                    </div>
                    <div class="support-card">
                        <div class="circle">
                            <img src="/images/collaboration.png">
                        </div>
                        <h3>Стань партнером</h3>
                        <p>Мы готовы к сотрудничеству с различными организациями. Напишите ваше предложение нам на почту <a href="mailto:teenjob.by@gmail.com">teenjob.by@gmail.com</a><br> Расскажите о себе и как мы можем сотрудничать!</p>

                    </div>
                </div>
                <h2 class="partners-title">Партнеры</h2>
                <div class="row">

                    <div class="partner-card mx-auto">
                        <a href="https://hoster.by" target="_blank"> <img src="images/partners/partner-logo-1.png"></a>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection