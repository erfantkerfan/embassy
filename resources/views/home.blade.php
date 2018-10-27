@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-10 offset-1">
            <div class="card">
                <img class="card-img-top" src="/img/france.jpg">
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
                                بهتر است قبل از آماده کردن مدارک برای اخذ ویزای شینگن ، برای تعیین وقت سفارت اقدام کنید. درخواست تعیین وقت مصاحبه سفارت به صورت تلفنی و با تماس با شماره 09036010321 صورت میگیرد.زمان مصاحبه معمولا 6 تا 8 هفته پس از تماس مقرر میشود.
                            </div>
                        </div>
                        <div class="collapse" id="collapse2">
                            <div class="card card-body" style="line-height: 1.6;">
                                مدارک مورد نیاز برای همه کشور های عضو شینگن شبیه به هم است فقط در جزئیات کمی متفاوت است.
                                <a class="btn btn-primary col-2" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse1">
                                    مدارک روز مصاحبه:
                                </a>
                                <div class="collapse" id="collapse3">
                                    <div class="card card-body" style="line-height: 1.6;">
                                        •	فرم دریافت ویزا کوتاه مدت که به زبان فرانسوی یا انگلیسی تکمیل، امضا و تاریخ خورده باشد.
                                        <br>
                                        •	یک عکس جدید و رنگی از چهره در زمینه روشن (3.5 در 4.5 سانتی متر) که چهره 70 تا 80 درصد آن باشد.
                                        <br>
                                        •	گذرنامه: اعتبار گذرنامه حداقل باید سه ماه پس از پایان اعتبار ویزا درخواستی و گذرنامه دارای حداقل 2 صفحه مهر نخورده باشد و همراه با فتوکپی صفحه شناسایی صاحب گذرنامه ارائه شود. فتوکپی کلیه ویزاهای شنگن که تاکنون دریافت داشته اید (بر روی گذرنامه فعلی و گذرنامه های قبلی) و فتوکپی همه مهرهای ورود و خروج.
                                        <br>
                                        •	اصل و کپی شناسنامه درخواست کننده.
                                        <br>
                                        •	رونوشت کامل گواهی ولادت فرانسوی فرزند(چنانچه فرزند فرانسوی باشد) یا چنانچه فرزند فرانسوی نیست، رونوشت کامل (تنظیم شده یا برابر شده توسط یک مقام فرانسوی) سند ازدواج او با یک تبعه فرانسه.
                                        <br>
                                        •	سند دال بر تابعیت فرانسوی فرزند مقیم فرنسه یا همسر او (فتوکپی کارت ملی فرانسه یا کپی گذرنامه بیومتریک فرانسوی یا گواهی تابعیت فرانسه یا المثنی لایحه اعطای تابعیت یا کپی اظهارنامه ثبت شده دریافت تابعیت فرانسوی یا گواهی ولادت که در آن تابعیت فرانسوی ذکر شده باشد.
                                        <br>
                                        •	ارائه اسناد دال بر تمکن مالی: فیش جدید دریافت مستمری یا رانت برای بازنشستگان، اسناد مثبته حرفه ای برای اشخاص فعال، سه پرینت آخر بانکی، عنداللزوم گواهی تقبل هزینه که توسط همسر یا یکی از فرزندان در ایران یا یکی از فرزندان در فرانسه امضا و تاریخ خورده یاشد همراه با اسناد دال بر تمکن مالی و اسناد دال بر حرفه شخص تقبل کننده هزینه ها.
                                        <br>
                                        •	دعوتنامه تنظیم شده در شهرداری محل اقامت دعوت کننده در فرانسه (اصل) + کپی
                                        <br>
                                        •	بیمه نامه بین المللی پزشکی و بازگشت به کشور مبدا که بر پوشش هزینه های احتمالی بازگشت به کشور مبدا به دلیل پزشکی، درمان پزشکی اورژانس و یا هزینه های بستری اورژانس در سرتاسر فضای شنگن تا سقف تضمین شده حداقل 30هزار یورو برای تمام مدت اقامت گواهی کند (دارنده ویزا مالتی multiple visa موظف به ارائه بیمه نامه معتبر برای مدت اولین سفر بوده، تهیه بیمه نامه برای سفرهای بعدی بر عهده خود اوست).
                                        <br>
                                        •	رزرو بلیط هواپیمای رفت و برگشت
                                        <br>
                                        •	هزینه تشکیل پرونده: 85 یورو نقد. برای کودکان 6 تا 12 سال هزینه 45 یورو است.
                                        <br>
                                        •	تعهدنامه عدم درخواست کارت اقامت که باید امضا و تائید شود.
                                        <br>
                                        •	پرسش نامه در مورد وضعیت خانوادگی که باید تکمیل شود.
                                        <br>
                                        توجه: بهتر است مدارک به ترتیب بالا در پرونده قرار بگیرند.

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