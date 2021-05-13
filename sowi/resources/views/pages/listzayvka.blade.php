@extends ('app')

@section('page_title')
    {{ "Онлайн запись" }}
@endsection
@section ('content')

    <div style="color: white; display: flex; justify-content: center; align-items: center; padding-top:125px; margin-bottom:25px; ">
        <div style="position: relative; background:#ffffff1f; width: 1250px;  border-radius:15px ; padding: 25px;">
            <h1 style="font-weight:700; display: flex; justify-content: center; align-items: center;  ">Записи</h1><hr color="black">
            <div style="margin-top:25px;text-align: center;  ">
                @php
                    $admin = DB::table('users')->where([
                        ['id', Auth::id()],
                        ['admin' , 1 ]
                        ])->pluck('admin')->first();
                @endphp


                @foreach($zayvkas as $el)
                    <div class="container" style="font-size: 1.2em">
                        <div class="row">
                            <div class="col">
                                <label>{{$el -> fio}}</label><br>
                            </div>
                            <div class="col">
                                <label style="padding-left:inherit;" >{{$el -> category}}</label><br>
                            </div>
                            <div class="col">
                                <label style="padding-left:inherit;">{{ \Carbon\Carbon::parse($el->date)->format('d.m')}}</label><br>
                            </div>
                            <div class="col">
                                <label style="padding-left:inherit;">{{$el -> time}}</label><br>
                            </div>

                            @if($admin == 1)
                                <label style="padding-left:inherit;">{{$el -> telephone}}</label><br>
                                <a style="padding-left:inherit; padding-left: 15px; margin-left: 25px;" class="btn btn-danger" href="delete/{{$el -> id}}">Удалить</a><br>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
    <li class="nav-item " role="presentation"><a class="nav-link active btn  rounded-pill" style="width: 125px;background: #31b7bc; position: absolute; right: 10%" href="{{ route('zayvka') }}">Записаться</a></li>

    <footer class="footer"  style="      position: absolute;
  bottom: 0;
  width: 100%;"   >
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