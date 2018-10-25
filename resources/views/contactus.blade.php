@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-10 offset-1">
            <div class="card text-center">
                <div class="card-header">
                    <h3>
                        <i class="fas fa-info-circle"></i>
                        درباره ما
                    </h3>
                </div>
                <div class="card-body">
                    <h4 class="card-text" dir="rtl">
                        آدرس:
                        <i class="fas fa-map-marked-alt" style="color: red"></i>
                        تهران ، میدان عدل ، خیابان عدل جنوبی ، پلاک5 ، واحد 5
                        <br>
                        <br>
                        تلفن تماس:
                        <i class="fas fa-address-card" style="color: brown"></i>
                        02144468302
                        <i class="fas fa-address-card" style="color: brown"></i>
                        09123865710
                        <i class="fas fa-address-card" style="color: brown"></i>
                        09036515059
                        <br>
                        <br>
                        آیدی تلگرام:
                        <img class="col-1" src="/img/telegram.svg">
                        <a href="https://t.me/Timeofembassy" style="color: inherit">
                            Timeofembassy@
                        </a>
                    </h4>
                </div>
                <div class="card-footer text-muted" dir="auto">
                    <div>
                        طراح:
                        <a href="https://t.me/er_gholizade" style="color: inherit">
                            عرفان قلی زاده
                        </a>
                    </div>
                    <div>
                        erfantkerfan@yahoo.com
                        <i class="fas fa-mail-bulk"></i>
                    </div>
                    <div>
                        2018
                        <i class="fas fa-copyright"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection