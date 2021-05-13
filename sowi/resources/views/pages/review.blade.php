@extends ('app')

@section('page_title')
    {{ "Отзывы" }}
@endsection
@section ('content')
    <div style="margin-top:60px">
        <div style="display: flex; justify-content: center; align-items: center; color: white;padding-top: 5%; ">   
            <div style="width: 40%;">

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors -> all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <h2>Оставить отзыв</h1>    
                <form action="/review/check" method="POST">
                    @csrf
                    <input type="name" name="name" id="name" placeholder="Введите имя" class="form-control"><br>
                    <input type="text" name="subject" id="subject" placeholder="Введите тему" class="form-control"><br>
                    <textarea name="message" id="message" cols="10" rows="3" class="form-control" placeholder="Введите Отзыв"></textarea><br>
                    <button type="submit" class="btn btn-success">отправить</button>
                </form>
                <br>
                <h2>Все отзывы</h2>
                @foreach($reviews as $el)
                <div class="alert alert-info " style="color:black;">
                    <div>
                    <h4> Имя:{{ $el->name }}</h4>
                    <b> Тема:{{ $el->subject }}</b>
                    <p> Отзыв:{{ $el->message }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

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


