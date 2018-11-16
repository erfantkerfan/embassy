@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-10 offset-1">
            <div class="card">
                {{--<img class="card-img-top" src="/img/france2.jpg">--}}
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/img/france2.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/img1.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/img2.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card-body">
                    {{--<h3 class="card-title text-center"></h3>--}}
                    <h4 class="card-text text-center" dir="rtl" style="line-height: 1.6;">
                        قدم نخست  برای گرفتن ویزا فرانسه یا شینگن جهت سفر های تفریحی، کاری یا تحصیلی ، گرفتن وقت مصاحبه حضوری در سفارت فرانسه است.
                        جهت تعیین وقت مصاحبه خود با ما تماس بگیرید.
                        <br>
                        <i class="fas fa-address-card" style="color: brown"></i>
                        09036515059
                        <i class="fas fa-address-card" style="color: brown"></i>
                        09123865710
                        <i class="fas fa-address-card" style="color: brown"></i>
                        02144468302
                    </h4>
                    <a href="{{ route('france') }}" class="btn btn-primary"><span class="flag-icon flag-icon-fr"></span>سفارت فرانسه</a>
                </div>
            </div>
        </div>

        <br>

        <div class="col-10 offset-1">
            <div class="card">
                <img class="card-img-top" src="/img/home.jpg">
                <div class="card-body">
                    <h3 class="card-title text-center" style="color:steelblue">مراحل اخذ ویزا</h3>
                    <h4 class="card-text text-right" dir="rtl">
                        <p class=" text-center">
                            <a class="btn btn-primary" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
                                1-	تعیین وقت مصاحبه سفارت
                            </a>
                            <a class="btn btn-primary" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
                                2-	حضور در محل مصاحبه و ارائه مدارک
                            </a>

                            <a class="btn btn-primary" data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false" aria-controls="collapse3">
                                3-	دریافت ویزا
                            </a>
                        </p>
                        <div class="collapse" id="collapse1">
                            <div class="card card-body" style="line-height: 1.6;">
                                بهتر است قبل از آماده کردن مدارک برای اخذ ویزای شینگن ، برای تعیین وقت سفارت اقدام کنید. درخواست تعیین وقت مصاحبه سفارت به صورت تلفنی و با تماس با شماره 09036515059 صورت میگیرد.زمان مصاحبه معمولا 6 تا 8 هفته پس از تماس مقرر میشود.
                            </div>
                        </div>
                        <div class="collapse" id="collapse2">
                            <div class="card card-body" style="line-height: 1.6;">
                                مدارک مورد نیاز برای همه کشور های عضو شینگن شبیه به هم است فقط در جزئیات کمی متفاوت است.
                                <div class="col-auto">
                                    <a class="btn btn-primary" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse1">
                                        مدارک روز مصاحبه:
                                    </a>
                                </div>
                                <div class="collapse" id="collapse3">
                                    <div class="card card-body" style="line-height: 1.6;">
                                        . اصل پاسپورت
                                        <br>
                                        . اصل و کپی شناسنامه کارت ملی
                                        <br>
                                        . گواهی اشتغال بکار
                                        <br>
                                        . 2 قطعه عکس رنگی پشت زمینه سفید(سایز عکس با توجه به نوع سفارت خانه ها متغیر میباشد)
                                        <br>
                                        . پرینت بانکی به اعضا هر نفر 40 میلیون تومان با مهر و امضا شعبه و مشخصات فردی
                                        <br>
                                        . بیمه تامین اجتماعی از محل اشتغال
                                        <br>
                                        •	هزینه تشکیل پرونده: 85 یورو نقد. برای کودکان 6 تا 12 سال هزینه 45 یورو است.
                                        <br>
                                        •	تعهدنامه عدم درخواست کارت اقامت که باید امضا و تائید شود.
                                        <br>
                                        •	پرسش نامه در مورد وضعیت خانوادگی که باید تکمیل شود.
                                        <br>
                                        توجه: حضور خود مسافر در تاریخهای مشخص شده در سفارت به جهت مصاحبه حضوری الزامی میباشد.

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="collapse" id="collapse4">
                            <div class="card card-body" style="line-height: 1.6;">
                                مراجعه به سفارت فرانسه پس از تایید مدارک و دریافت ویزا شینگن.
                                آدرس سفارتخانه فرانسه :تهران، خیابان نوفل لوشاتو، پلاک ۶۴-۶۶ می باشد . در جریان هم باشید که روزهای کاری فرانسه روزهای یکشنبه تا پنج شنبه می باشد
                            </div>
                        </div>
                    </h4>
                    {{--<a href="#" class="btn btn-primary">لینک</a>--}}
                </div>
            </div>
        </div>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection