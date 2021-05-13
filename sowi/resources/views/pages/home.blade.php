@extends ('app')


@section('page_title')
    {{ "Главная" }}
@endsection
@section ('content')
  

    <main class="page landing-page"  style="padding-top:5%">
        <div class="carousel slide " data-ride="carousel" id="carousel-2" style="margin-top: 3%">
            <div class="carousel-inner" role="listbox" style="">
                <div class="carousel-item active"><img class=" b-block" src="assets/img/slide/slide5.jpg" alt="Slide Image" style="height: 500px; width: 50%; margin-left:25%; border-radius: 15px"></div>
                <div class="carousel-item"><img class=" d-block" src="assets/img/slide/slide6.jpg" alt="Slide Image" style="height: 500px; width: 50%; margin-left:25%; border-radius: 15px"></div>
                <div class="carousel-item"><img class=" d-block" src="assets/img/slide/slide7.jpg" alt="Slide Image" style="height: 500px; width: 50%; margin-left:25%; border-radius: 15px"></div>
                <div class="carousel-item"><img class=" d-block" src="assets/img/slide/slide8.jpg" alt="Slide Image" style="height: 500px; width: 50%; margin-left:25%; border-radius: 15px"></div>
            </div>
            <div><a class="carousel-control-prev " style="margin-left: 10%;" href="#carousel-2" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" style="margin-right: 10%; color: black" href="#carousel-2" role="button"
                    data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
            <ol class="carousel-indicators ">
                <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-2" data-slide-to="1"></li>
                <li data-target="#carousel-2" data-slide-to="2"></li>
                <li data-target="#carousel-2" data-slide-to="3"></li>
            </ol>
        </div>
        
        <section class="clean-block clean-info " style="margin-top: 4%;" >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="assets/img/scenery/image7.jpg"></div>
                    <div class="col-md-6" style="color: white; margin-top: 15px">
                        <h3>О нас</h3>
                        <div class="getting-started-info" style="font-size: 1.35em;" >
                            <p  >Парикмахерская «Софи» - находится в центре города, район дом быта. В нашей парикмахерской вы можете получить услуги высокого уровня по доступным ценам. Вы так же можете воспользоваться услугами мастера по маникюру, педикюру. Все наши мастера — сертифицированные специалисты с многолетним опытом успешной работы. Об этом свидетельствуют многочисленные сертификаты и положительные отзывы постоянных клиентов. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block features" style="height: 650px; ">
            <div class="container">
                <div class="block-heading">
                    <h2 class="display-4 text-info">Услуги</h2>
                </div>
                <div class="row justify-content-center" style="height: 300px; font-size: 1.3em; font-weight: bold; ">
                    <div class="text-center d-flex flex-column justify-content-center align-items-start justify-content-xl-center align-items-xl-center col-md-5 feature-box" href="{{ route('manicure') }}" style="background-image: url(&quot;assets/img/tech/image4.jpg&quot;);background-position: center;background-size: cover;background-color: rgba(0,0,0,0.77);margin: 25px;color: rgb(255,255,255); border-radius: 15px">
                        <h4 class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="color: rgb(255,255,255); text-shadow: black 2px 2px 2px; ">Парикмахерские<br>услуги</h4>
                        <p class="text-left d-flex justify-content-center align-items-center" style="color: rgb(255,255,255); text-shadow: black 2px 2px 2px;">Стрижка детей, женщин, мучин, для всей семьи. Различные варианты стрижек по доступным ценам.</p>
                    </div>
                    <div class="d-flex d-xl-flex flex-column justify-content-center align-items-start justify-content-xl-center align-items-xl-center col-md-5 feature-box" style="background-image: url(&quot;assets/img/scenery/image5.jpg&quot;);background-position: center;background-size: cover;margin: 25px;color: rgb(255,255,255); text-shadow: black 2px 2px 2px; border-radius: 15px">
                        <h4 class="text-center">Услуги маникюра и педикюра &nbsp;</h4>
                        <p class="text-left d-flex justify-content-center align-items-center" style="color: rgb(255,255,255); text-shadow: black 2px 2px 2px;">Маникюр и педиюр классический.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block about-us" >
            <div class="container" style="padding-top:2% ;position: relative">
                <div class="block-heading">
                    <h2 class="text-info">Наши работы</h2>
                </div>
                <div class="row justify-content-center" style="margin-bottom: 14.5%;">

                    @foreach($applications as $el)
                        <div class="col-sm-8 col-lg-4">
                            <img class="card-img-top w-100 d-block" src="{{$el -> foto}}" alt=""><br>
                        </div>
                    @endforeach


                </div>
                <div class="void"></div>

                <span style="position: absolute; bottom: -30px;">{{ $applications->links() }}</span>
            </div>

        </section>
    </main>
    






    <div class="scrollup ">
        <i class="fa fa-chevron-up ">↑</i>
    </div>
    <footer class="footer" style="    ">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <img style="height: 100px;" src="assets/img/scenery/logo1.png">
                </div>
                <div class="col-sm-4">
                    <br><br>
                    <a href="https://vk.com/public177225014"><img style="height: 50px; margin-left: 50px; " src="assets/img/scenery/logovk.png" alt="VK"></a>
                    <a href="https://www.instagram.com/sowi_45/"><img style="height: 50px;" src="assets/img/scenery/logoin.png" alt="instagram" ></a>
                    <a href="https://ok.ru/group/53897550692491"><img style="height: 50px; margin-left: 15px; " src="assets/img/scenery/logook.png" alt="OK" ></a>
                    <a href="https://dikidi.ru/ru/profile/parikmaxerskaya_sofi_495473/"><img style="height: 50px; margin-left: 15px; " src="assets/img/scenery/dikidi.png" alt="dikidi" ></a>
                </div>
                <div class="col-sm-3">
                    <ul>
                        <br>
                        <li style="font-size: 15px;"><a href="{{ route('home') }}">Главная</a></li>
                        <li style="font-size: 15px;"><a href="{{ route('features') }}">Услуги</a></li>
                        <li style="font-size: 15px;"><a href="{{ route('about') }}">Галерея</a></li>
                        <li style="font-size: 15px;"><a href="{{ route('list') }}">Прайс лист</a></li>
                    </ul>
                </div>
                <div class="col-sm-3" style="padding-top: 12px; ">
                    <ul>
                        
                        <li style="color: #fff; font-size: 15px;" >Запись:+7 (908) 006-05-58 </li>
                        <li style="color: #fff; font-size: 15px;" >Запись:+7 (909) 146-37-80</li>
                        <li style="color: #fff; font-size: 15px;">г.Курган, К.Мяготина 54</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    @endsection