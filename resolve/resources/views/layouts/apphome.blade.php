<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: rgba(229,248,249,1);">
<style>
    .home-page {
        align-items: center;
        background-color: var(--polar);
        display: flex;
        flex-direction: column;
        height: 1280px;
        padding: 26px 0;
        width: 1920px;
    }
    .home-page .body {
        align-items: center;
        display: flex;
        flex-direction: column;
        margin-top: 31px;
        min-height: 487px;
        width: 1380px;
    }
    .home-page .button-normal {
        align-items: flex-start;
        border-radius: 4px;
        cursor: pointer;
        display: flex;
        height: 118px;
        margin-left: 147px;
        min-width: 362px;
        padding: 38px 79px;
    }
    .home-page .button-normal-1 {
        align-items: flex-start;
        border-radius: 4px;
        cursor: pointer;
        display: flex;
        height: 118px;
        margin-left: 147px;
        min-width: 362px;
        padding: 38px 88px;
    }
    .home-page .button-normal-2 {
        align-items: flex-start;
        border-radius: 4px;
        cursor: pointer;
        display: flex;
        height: 118px;
        min-width: 362px;
        padding: 38px 104px;
    }
    .home-page .flex-row {
        align-items: flex-start;
        display: flex;
        margin-top: 177px;
        min-width: 1380px;
    }
    .home-page .footer {
        align-items: flex-start;
        display: flex;
        flex-direction: column;
        margin-top: 360px;
        min-height: 240px;
        width: 1920px;
    }
    .home-page .header {
        align-items: center;
        display: flex;
        margin-left: 2.0px;
        min-width: 1852px;
    }
    .home-page .image-1 {
        height: 136px;
        object-fit: cover;
        width: 135px;
    }
    .home-page .info {
        align-items: center;
        background-color: var(--polar);
        display: flex;
        height: 50px;
        justify-content: flex-end;
        min-width: 1920px;
        padding: 15px 50.7px;
    }
    .home-page .links {
        align-items: flex-start;
        align-self: flex-end;
        display: flex;
        height: 95px;
        min-width: 725px;
    }
    .home-page .overlap-group {
        align-items: flex-start;
        background-image: url(https://anima-uploads.s3.amazonaws.com/projects/608e61ba502024036693ae93/releases/608e61c09c415e475086e021/img/base-1@1x.png);
        background-position: 50% 50%;
        background-size: cover;
        display: flex;
        height: 190px;
        justify-content: flex-end;
        min-width: 1920px;
        padding: 45px 50px;
    }
    .home-page .path-10 {
        height: 16px;
        margin-left: 530px;
        margin-top: 5px;
        object-fit: cover;
        width: 16px;
    }
    .home-page .path-35 {
        height: 14px;
        margin-left: 30px;
        object-fit: cover;
        width: 7px;
    }
    .home-page .path-36 {
        height: 11px;
        margin-bottom: 0.64px;
        margin-left: 29px;
        object-fit: cover;
        width: 14px;
    }
    .home-page .path-37 {
        height: 14px;
        margin-left: 1630px;
        object-fit: cover;
        width: 14px;
    }
    .home-page .patient-login {
        letter-spacing: 0;
        line-height: 30px;
        min-height: 24px;
        min-width: 154px;
        text-align: center;
        white-space: nowrap;
    }
    .home-page .pharmacist-login {
        letter-spacing: 0;
        line-height: 30px;
        min-height: 24px;
        min-width: 204px;
        text-align: center;
        white-space: nowrap;
    }
    .home-page .physician-login {
        letter-spacing: 0;
        line-height: 30px;
        min-height: 24px;
        min-width: 186px;
        text-align: center;
        white-space: nowrap;
    }
    .home-page .profile {
        align-items: flex-start;
        background-color: var(--white);
        border-radius: 44px;
        cursor: pointer;
        display: flex;
        height: 88px;
        margin-left: 1629px;
        min-width: 88px;
        padding: 11px 15px;
    }
    .home-page .resolve-2021 {
        align-self: flex-start;
        letter-spacing: 0;
        line-height: 20px;
        min-height: 13px;
        min-width: 84px;
        text-align: right;
        white-space: nowrap;
    }
    .home-page .text-1 {
        letter-spacing: 0;
        line-height: 26px;
        margin-top: -4.5px;
        min-height: 97px;
        min-width: 88px;
        white-space: nowrap;
    }
    .home-page .text-2 {
        letter-spacing: 0;
        line-height: 26px;
        margin-left: 198px;
        margin-top: -4.5px;
        min-height: 71px;
        min-width: 135px;
        white-space: nowrap;
    }
    .home-page .text-3 {
        letter-spacing: 0;
        line-height: 26px;
        margin-left: 198px;
        margin-top: -4.5px;
        min-height: 97px;
        white-space: nowrap;
    }
    .home-page .text-4 {
        height: 62px;
        letter-spacing: 0;
        line-height: 40px;
        margin-top: 28px;
        min-height: 62px;
        min-width: 790px;
        text-align: center;
        width: 790px;
    }
    .home-page .title {
        letter-spacing: 0;
        line-height: 72px;
        min-height: 104px;
        min-width: 340px;
        text-align: center;
        white-space: nowrap;
    }
    .home-page .title-1 {
        align-items: center;
        display: flex;
        flex-direction: column;
        margin-left: 2.0px;
        min-height: 191px;
        width: 790px;
    }
    .home-page .union-1 {
        height: 56px;
        object-fit: cover;
        width: 55px;
    }

    @import url("https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css");
    * {
        box-sizing: border-box;
    }
    .container-center-horizontal {
        pointer-events: none;
        display: flex;
        flex-direction: row;
        justify-content: center;
        width: 100%;
    }
    .container-center-horizontal > * {
        pointer-events: auto;
        flex-shrink: 0;
    }
    .screen a {
        text-decoration: none;
        display: contents;
    }

</style>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
