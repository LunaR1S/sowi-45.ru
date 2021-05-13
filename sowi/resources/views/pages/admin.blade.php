@extends ('app')

@section('page_title')
    {{ "Админка" }}
@endsection
@section ('content')

    <section class="clean-block features" >
        <div class="container">
            <div class="block-heading" style=" padding-top: 20%; ">

            </div>
            <div class="row justify-content-center" style="height: 300px; font-size: 1.3em; font-weight: bold;">
                <div class="text-center d-flex flex-column justify-content-center align-items-start justify-content-xl-center align-items-xl-center col-md-5 feature-box" style=" background-position: center;background-size: cover;background-color: #6f42c199;margin: 25px;color: rgb(255,255,255);">
                    <a  href="{{ route('create') }}" class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="  height: 100%; color: rgb(255,255,255); text-shadow: black 2px 2px 2px; font-size: 1.6em">Добавить фото</a>
                </div>
                <div class="text-center d-flex flex-column justify-content-center align-items-start justify-content-xl-center align-items-xl-center col-md-5 feature-box" style=" background-position: center;background-size: cover;background-color: #6f42c199;margin: 25px;color: rgb(255,255,255);">
                    <a  href="{{ route('listzayvka') }}" class="text-center d-xl-flex justify-content-xl-center align-items-xl-center" style="  height: 100%; color: rgb(255,255,255); text-shadow: black 2px 2px 2px; font-size: 1.6em">Записи</a>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer" style=" position: absolute; bottom: 0; width: 100%;   ">
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