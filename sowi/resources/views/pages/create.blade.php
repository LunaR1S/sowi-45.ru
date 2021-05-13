@extends ('app')

@section('page_title')
    {{ "Добавить фото" }}
@endsection
@section ('content')



    <div style=" color: white; display: flex; justify-content: center; align-items: center; padding-top:12% ;   " class="pole">
        <div style="padding: 35px; text-align:center; background:#ffffff1f; width: 500px;  border-radius:15px ;" class="pole">



            <h3 style="">Добавить фото</h3>
            <br>
            <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data" >


                @csrf

                <div class="form-group row">
                    <label style="padding-left:inherit;" for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Добавить фото') }}</label>

                    <div class="col-md-6">
                        <input style=""  id="foto" type="file"   name="foto" required>


                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-4 offset-md-4">
                        <button type="submit" class="btn btn-info">
                            {{ __('Добавить') }}
                        </button>
                    </div>
                </div>
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
