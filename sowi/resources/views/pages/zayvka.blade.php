@extends ('app')

@section('page_title')
    {{ "Запись" }}
@endsection
@section ('content')


    <div style="color: white; display: flex; justify-content: center; align-items: center; padding-top:8% ; " >
        <div style="padding: 60px 35px 60px 35px; text-align:center; background:#ffffff1f; width: 875px;  border-radius:15px ;" class="pole">
            <h3  >Онлайн запись</h3>
            <br>
            <form  action="{{ route('zayvk') }}" method="POST" enctype="multipart/form-data">

                @csrf


                <div class="form-group row">
                    <label for="fio" class="col-md-3 col-form-label text-md-right">{{ __('Имя') }}</label>

                    <div class="col-md-6">
                        <input id="fio" type="text" class="form-control" name="fio" required autofocus placeholder = "Введите имя">

                    </div>
                </div>

                <div class="form-group row">
                    <label for="telephone" class="col-md-3 col-form-label text-md-right">{{ __('Телефон') }}</label>

                    <div class="col-md-6">

                        <input id="telephone" type="tel" class="form-control" name="telephone" required autofocus value="+7" placeholder="Введите номер" >

                    </div>
                </div>

                <div class="form-group row">
                    <label style="padding-left:inherit;" for="category" class="col-md-3 col-form-label text-md-right">{{ __('Выберите тип услуги') }}</label>

                    <div class="col-md-6">
                        <select name="category" class="form-control" placeholder="Введите номер" >
                            <option>Женская стрижка</option>
                            <option>Мужская стрижка</option>
                            <option>Детская стрижка</option>
                            <option>Стрижка машинкой</option>
                            <option>Окрашивание</option>
                            <option>Маникюр</option>
                            <option>Педикюр</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label style="padding-left:inherit;" for="date"  class="col-md-3 col-form-label text-md-right">{{ __('Выберите дату записи') }}</label>

                    <div class="col-md-6">

                        <input style="height: 100%;"   id="date" type="date" class="form-control" name="date" required autofocus  >

                    </div>
                </div>

                <div class="form-group row">
                    <label style="padding-left:inherit;" for="time" class="col-md-3 col-form-label text-md-right">{{ __('Выберите время') }}</label>

                    <div class="col-md-6">
                        <input style="height: 100%;"  id="time" name="time" type="time" class="form-control" value="08:00" name="date" min="08:00" max="18:00"  required autofocus  >
                    </div>
                </div>
                <br>

                <button  class="btn btn-info">Записаться</button>
            </form>
        </div>
    </div>

    <footer class="footer" style=" position: absolute; bottom: 0; width: 100%;   ">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <img style="height: 100px;" src="{{asset('assets/img/scenery/logo1.png')}}">
                </div>
                <div class="col-sm-4">
                    <br><br>
                    <a href="https://vk.com/public177225014"><img style="height: 50px; margin-left: 50px; " src="{{asset('assets/img/scenery/logovk.png')}}" alt="VK"></a>
                    <a href="https://www.instagram.com/sowi_45/"><img style="height: 50px;" src="{{asset('assets/img/scenery/logoin.png')}}" alt="instagram" ></a>
                    <a href="https://ok.ru/group/53897550692491"><img style="height: 50px; margin-left: 15px; " src="{{asset('assets/img/scenery/logook.png')}}" alt="OK" ></a>
                    <a href="https://dikidi.ru/ru/profile/parikmaxerskaya_sofi_495473/"><img style="height: 50px; margin-left: 15px; " src="{{asset('assets/img/scenery/dikidi.png')}}" alt="dikidi" ></a>
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
