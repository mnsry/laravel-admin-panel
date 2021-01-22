@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <img
                class="img-fluid"
                src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg"
                alt="Laravel"
            >
            <img
                class="img-fluid"
                src="{{asset('images/nuxt.png')}}"
                alt="Nuxt.js"
                width="150"
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



        <div class="row">
            <div align="center">
                <p> -= پنل ادمین با لاراول و ناکست جی اس و ویوتی فای =- </p>
                <br><br>
                <hr>
                <a class="btn btn-outline-primary" href="https://nuxt.laranuxt.ir" target="_blank">نمایش دمو</a>
                <hr>
                <br><br>
                <p>نسخه دسکتاپ</p>
                <img src="{{asset('images/demo.png')}}" class="img-fluid" height="400" alt="admin-panel">
                <br><br>
                <p>نسخه موبایل</p>
                <img src="{{asset('images/demo-mobile.png')}}" class="img-fluid" height="400" alt="admin-panel">
            </div>
        </div>

        <hr>

        <div class="row d-flex justify-content-center">
            <p></p>
        </div>
    </div>
@endsection
