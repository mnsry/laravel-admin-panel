@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <img
                class="img-fluid"
                src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg"
                alt="Laravel"
            >
        </div>

        <div class="row d-flex justify-content-center mt-5">
            <p align="center">
                <a href="https://discord.gg/pJBWehRQud" target="_blank">
                    <img src="{{asset('images/discord.png')}}" width="118" alt="discord">
                </a>
                <a href="https://github.com/mnsry" target="_blank">
                    <img src="{{asset('images/github.png')}}" width="122" alt="github">
                </a>
                <a href="https://www.youtube.com/playlist?list=PLXChBR5rCkrheZRydB6C-ohLMGL1Q6gGz" target="_blank">
                    <img src="{{asset('images/youtube.png')}}" width="111" alt="youtube">
                </a>
                <a href="https://opensource.org/licenses/MIT" target="_blank">
                    <img src="{{asset('images/license.png')}}" width="98" alt="License">
                </a>
            </p>
        </div>

        <div class="row d-flex justify-content-center">
            <p> -= پنل ادمین با لاراول و ناکست جی اس و ویوتی فای =- </p>
        </div>

        <br><br>
        <hr>

        <div class="row d-flex justify-content-center">
            <a class="btn btn-outline-primary" href="https://nuxt.laranuxt.ir" target="_blank">نمایش دمو</a>
        </div>

        <hr>
        <br><br>

        <div class="text-right">
            <p><a href="https://www.youtube.com/playlist?list=PLXChBR5rCkrheZRydB6C-ohLMGL1Q6gGz" target="_blank">آموزش تصویری در کانال یوتیوب</a></p>
            <p>اگر توسعه دهنده هستید می توانید پروژه را فورک کنید و کانتری بیوت کنید تا از کدهای شما هم دیگران بتوانند استفاده کنند</p>
            <p>این سرور هیچ قالب و ویو ندارد. وفقط اطلاعلات ای پی ای هست. برای فرانت ما از ناکست استفاده کردیم که شما باید پروژه ناکست داخل همین پیج گیت هاب را دریافت کنید و سرور نود را ران کنید</p>
            <p>برای دانلود و اجرای اپلیکیشن ابتدا میتوانید پروژه را کلون یا دانلود زیپ کنید ، سپس باید در ترمینال دستور کامپوزر نصب را اجرا کنید، سپس فایل ای ان وی را باید تنظیم کنید و اطلاعات دیتابیس را ست کنید، و دستور مایگریشن همراه با سیدر را اجرا کنید تا دیتابیس شما با اطلاعات نمونه پر شود</p>
            <p>خب امیدواریم که کارکند. درسته؟</p>
        </div>
    </div>
@endsection
