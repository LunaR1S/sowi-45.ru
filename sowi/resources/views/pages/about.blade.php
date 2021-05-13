@extends ('app')


@section('page_title')
    {{ "Галерея" }}
@endsection
@section ('content')

<section class="clean-block about-us" >
            <div class="container" style="padding-top:2% ;position: relative">
                <div class="block-heading">
                    <h2 class="text-info">Наши работы</h2>
                </div>
                <div class="row justify-content-center" style="margin-bottom: 14.5%;">

                        @foreach($applications as $el)
                            <div class="col-sm-6 col-lg-4">
                            <img class="card-img-top w-100 d-block" src="{{$el -> foto}}" alt=""><br>
                            </div>
                        @endforeach


                </div>
                <div class="void"></div>

                <span style="position: absolute; bottom: -30px;">{{ $applications->links() }}</span>
            </div>
            
        </section>

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