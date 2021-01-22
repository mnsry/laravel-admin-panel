@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <img
                class="img-fluid"
                src="{{asset('images/nuxt.png')}}"
                alt="nuxt"
                width="200"
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
            <p>این پنل بدون سرور هیچ استفاده ای ندارد شما باید پروژه لاراول داخل همین پیج گیت هاب را هم دریافت کنید و سرور رو ران کنید</p>
            <p>بعد از دریافت باید یارن نصب یا ان پی ام نصب را اجرا کنید و فایل دات ای ان وی را بسازید و محتویات ای ان وی اگزمپل رو کپی کنید</p>
            <p>خب امیدواریم که کارکند. درسته؟</p>
        </div>
    </div>
@endsection
