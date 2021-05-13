@extends ('app')


@section('page_title')
    {{ "Прайс лист" }}
@endsection
@section ('content')


    <section class="clean-block features" >
        <div class="container">
            <div class="block-heading" style=" padding-top: 19%; ">
                <h2 class="display-4 text-info">Категории</h2>
            </div>

            <div class="row justify-content-center" style="height: 1000px; font-size: 1.3em; font-weight: bold;">

                <div   class="text-center  flex-column justify-content-center align-items-start justify-content-xl-center align-items-xl-center col-md-5 feature-box" style="background-image: url(&quot;assets/img/tech/1.jpg&quot;);background-position: center;background-size: cover;background-color: rgba(0,0,0,0.77);margin: 25px;color: rgb(255,255,255); border-radius: 10px;">
                    <a  href="{{ route('price') }}" class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="  height: 100%; color: rgb(255,255,255); text-shadow: black 2px 2px 2px; font-size: 1.6em">Женский зал</a>
                </div>

                <div   class="text-center  flex-column justify-content-center align-items-start justify-content-xl-center align-items-xl-center col-md-5 feature-box" style="background-image: url(&quot;assets/img/tech/2.jpg&quot;);background-position: center;background-size: cover;background-color: rgba(0,0,0,0.77);margin: 25px;color: rgb(255,255,255); border-radius: 10px;">
                    <a  href="{{ route('men') }}" class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="  height: 100%; color: rgb(255,255,255); text-shadow: black 2px 2px 2px; font-size: 1.6em">Мужской зал</a>
                </div>

                <div   class="text-center  flex-column justify-content-center align-items-start justify-content-xl-center align-items-xl-center col-md-5 feature-box" style="background-image: url(&quot;assets/img/tech/3.jpg&quot;);background-position: center;background-size: cover;background-color: rgba(0,0,0,0.77);margin: 25px;color: rgb(255,255,255); border-radius: 10px;">
                    <a  href="{{ route('children') }}" class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="  height: 100%; color: rgb(255,255,255); text-shadow: black 2px 2px 2px; font-size: 1.6em">Детский зал</a>
                </div>

                <div   class="text-center  flex-column justify-content-center align-items-start justify-content-xl-center align-items-xl-center col-md-5 feature-box" style="background-image: url(&quot;assets/img/tech/4.jpg&quot;);background-position: center;background-size: cover;background-color: rgba(0,0,0,0.77);margin: 25px;color: rgb(255,255,255); border-radius: 10px;">
                    <a  href="{{ route('manicure') }}" class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="  height: 100%; color: rgb(255,255,255); text-shadow: black 2px 2px 2px; font-size: 1.6em">Маникюр</a>
                </div>

                <div   class="text-center  flex-column justify-content-center align-items-start justify-content-xl-center align-items-xl-center col-md-5 feature-box" style="background-image: url(&quot;assets/img/tech/5.jpg&quot;);background-position: center;background-size: cover;background-color: rgba(0,0,0,0.77);margin: 25px;color: rgb(255,255,255); border-radius: 10px;">
                    <a  href="{{ route('pedicure') }}" class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="  height: 100%; color: rgb(255,255,255); text-shadow: black 2px 2px 2px; font-size: 1.6em">Педикюр</a>
                </div>

            </div>
        </div>
    </section>

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