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


    .patient-page-1 {
        align-items: flex-start;
        background-color: var(--polar);
        display: flex;
        flex-direction: column;
        height: 1280px;
        width: 1920px;
    }
    .patient-page-1 .arrow-left {
        align-items: flex-start;
        cursor: pointer;
        display: flex;
        height: 56px;
        left: 0;
        min-width: 78px;
        position: absolute;
        top: 0;
    }
    .patient-page-1 .calendar {
        color: var(--white-2);
        font-family: var(--font-family-arial-bold);
        font-size: var(--font-size-xxl2);
        font-weight: 700;
        letter-spacing: 0;
        line-height: 30px;
        min-height: 35px;
        min-width: 170px;
        text-align: center;
        white-space: nowrap;
    }
    .patient-page-1 .documentation {
        letter-spacing: 0;
        line-height: 30px;
        margin-left: 180px;
        min-height: 35px;
        min-width: 220px;
        text-align: center;
        white-space: nowrap;
    }
    .patient-page-1 .flex-col {
        align-items: flex-start;
        display: flex;
        flex-direction: column;
        min-height: 262px;
        width: 1887px;
    }
    .patient-page-1 .flex-row {
        align-items: flex-start;
        align-self: center;
        display: flex;
        height: 310px;
        margin-right: 2.0px;
        margin-top: 149px;
        min-width: 1848px;
    }
    .patient-page-1 .flex-row-1 {
        align-items: flex-start;
        align-self: flex-end;
        display: flex;
        height: 35px;
        margin-right: 56px;
        margin-top: 6px;
        min-width: 1544px;
    }
    .patient-page-1 .footer {
        align-items: flex-start;
        display: flex;
        flex-direction: column;
        margin-top: 278px;
        min-height: 240px;
        width: 1920px;
    }
    .patient-page-1 .header {
        align-items: center;
        display: flex;
        height: 136px;
        left: 35px;
        min-width: 1852px;
        position: absolute;
        top: 26px;
    }
    .patient-page-1 .image-1 {
        height: 136px;
        object-fit: cover;
        width: 135px;
    }
    .patient-page-1 .image-4 {
        align-self: center;
        cursor: pointer;
        height: 255px;
        margin-bottom: 23.0px;
        margin-left: 130px;
        object-fit: cover;
        width: 353px;
    }
    .patient-page-1 .image-5 {
        cursor: pointer;
        height: 285px;
        margin-left: 130px;
        object-fit: cover;
        width: 235px;
    }
    .patient-page-1 .image-6 {
        align-self: flex-end;
        cursor: pointer;
        height: 306px;
        margin-left: 130px;
        object-fit: cover;
        width: 350px;
    }
    .patient-page-1 .image-7 {
        cursor: pointer;
        height: 265px;
        margin-left: 72px;
        margin-top: 4px;
        object-fit: cover;
        width: 230px;
    }
    .patient-page-1 .info {
        align-items: center;
        background-color: var(--polar);
        display: flex;
        height: 50px;
        justify-content: flex-end;
        min-width: 1920px;
        padding: 15px 50.7px;
    }
    .patient-page-1 .links {
        align-items: flex-start;
        align-self: flex-end;
        display: flex;
        height: 95px;
        min-width: 725px;
    }
    .patient-page-1 .overlap-group {
        height: 56px;
        margin-left: 84px;
        margin-top: 44px;
        position: relative;
        width: 130px;
    }
    .patient-page-1 .overlap-group1 {
        height: 162px;
        position: relative;
        width: 1887px;
    }
    .patient-page-1 .overlap-group2 {
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
    .patient-page-1 .path-10 {
        height: 56px;
        object-fit: cover;
        width: 56px;
    }
    .patient-page-1 .path-10-1 {
        height: 16px;
        margin-left: 530px;
        margin-top: 5px;
        object-fit: cover;
        width: 16px;
    }
    .patient-page-1 .path-35 {
        height: 14px;
        margin-left: 30px;
        object-fit: cover;
        width: 7px;
    }
    .patient-page-1 .path-36 {
        height: 11px;
        margin-bottom: 0.64px;
        margin-left: 29px;
        object-fit: cover;
        width: 14px;
    }
    .patient-page-1 .path-37 {
        height: 14px;
        margin-left: 1630px;
        object-fit: cover;
        width: 14px;
    }
    .patient-page-1 .place {
        left: 70px;
        letter-spacing: 0;
        line-height: 30px;
        position: absolute;
        text-align: center;
        top: 12px;
        white-space: nowrap;
    }
    .patient-page-1 .prescriptions {
        letter-spacing: 0;
        line-height: 30px;
        min-height: 35px;
        min-width: 194px;
        text-align: center;
        white-space: nowrap;
    }
    .patient-page-1 .pressed-button {
        align-items: flex-start;
        align-self: center;
        background-color: var(--azure-radiance);
        border-radius: 4px;
        cursor: pointer;
        display: flex;
        height: 94px;
        justify-content: flex-end;
        margin-top: 34.0px;
        min-width: 218px;
        padding: 24px 23px;
    }
    .patient-page-1 .profile {
        align-items: flex-start;
        background-color: var(--white);
        border-radius: 44px;
        display: flex;
        height: 88px;
        margin-left: 1629px;
        min-width: 88px;
        padding: 11px 15px;
    }
    .patient-page-1 .resolve-2021 {
        align-self: flex-start;
        letter-spacing: 0;
        line-height: 20px;
        min-height: 13px;
        min-width: 84px;
        text-align: right;
        white-space: nowrap;
    }
    .patient-page-1 .text-1 {
        letter-spacing: 0;
        line-height: 30px;
        margin-left: 150px;
        min-height: 35px;
        min-width: 322px;
        text-align: center;
        white-space: nowrap;
    }
    .patient-page-1 .text-2 {
        letter-spacing: 0;
        line-height: 30px;
        margin-left: 150px;
        min-height: 35px;
        min-width: 328px;
        text-align: center;
        white-space: nowrap;
    }
    .patient-page-1 .text-3 {
        letter-spacing: 0;
        line-height: 26px;
        margin-top: -4.5px;
        min-height: 97px;
        min-width: 88px;
        white-space: nowrap;
    }
    .patient-page-1 .text-4 {
        letter-spacing: 0;
        line-height: 26px;
        margin-left: 198px;
        margin-top: -4.5px;
        min-height: 71px;
        min-width: 135px;
        white-space: nowrap;
    }
    .patient-page-1 .text-5 {
        letter-spacing: 0;
        line-height: 26px;
        margin-left: 198px;
        margin-top: -4.5px;
        min-height: 97px;
        white-space: nowrap;
    }
    .patient-page-1 .title {
        left: 803px;
        letter-spacing: 0;
        line-height: 72px;
        position: absolute;
        text-align: center;
        top: 144px;
        white-space: nowrap;
    }
    .patient-page-1 .union-1 {
        height: 56px;
        object-fit: cover;
        width: 55px;
    }

    @import url("https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css");
    @font-face {
        font-family: "Arial-Bold";
        font-style: normal;
        font-weight: 700;
        src: url("https://fonts.animaapp.com/Arial-Bold") format("truetype");
    }

    @font-face {
        font-family: "Arial-Regular";
        font-style: normal;
        font-weight: 400;
        src: url("https://fonts.animaapp.com/Arial-Regular") format("opentype");
    }

    * {
        box-sizing: border-box;
    }
    .align-self-flex-center {
        align-self: flex-center;
    }
    .align-self-flex-end {
        align-self: flex-end;
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
    .pharm-1 {
        align-items: center;
        background-color: var(--polar);
        display: flex;
        flex-direction: column;
        height: 1280px;
        padding: 26px 0;
        width: 1920px;
    }
    .pharm-1 .arrow-left {
        align-items: flex-start;
        cursor: pointer;
        display: flex;
        height: 56px;
        left: 0;
        min-width: 78px;
        position: absolute;
        top: 0;
    }
    .pharm-1 .flex-row {
        align-items: flex-end;
        display: flex;
        margin-left: 11.0px;
        margin-top: 71px;
        min-width: 361px;
    }
    .pharm-1 .flex-row-1 {
        align-items: center;
        align-self: flex-start;
        display: flex;
        height: 104px;
        margin-left: 84px;
        margin-top: 9px;
        min-width: 1125px;
    }
    .pharm-1 .footer {
        align-items: flex-start;
        display: flex;
        flex-direction: column;
        margin-top: 380px;
        min-height: 240px;
        width: 1920px;
    }
    .pharm-1 .header {
        align-items: center;
        display: flex;
        margin-left: 2.0px;
        min-width: 1852px;
    }
    .pharm-1 .image-1 {
        height: 136px;
        object-fit: cover;
        width: 135px;
    }
    .pharm-1 .info {
        align-items: center;
        background-color: var(--polar);
        display: flex;
        height: 50px;
        justify-content: flex-end;
        min-width: 1920px;
        padding: 15px 50.7px;
    }
    .pharm-1 .links {
        align-items: flex-start;
        align-self: flex-end;
        display: flex;
        height: 95px;
        min-width: 725px;
    }
    .pharm-1 .overlap-group {
        height: 56px;
        margin-top: 20.79px;
        position: relative;
        width: 130px;
    }
    .pharm-1 .overlap-group1 {
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
    .pharm-1 .path-10 {
        height: 56px;
        object-fit: cover;
        width: 56px;
    }
    .pharm-1 .path-10-1 {
        height: 16px;
        margin-left: 530px;
        margin-top: 5px;
        object-fit: cover;
        width: 16px;
    }
    .pharm-1 .path-35 {
        height: 14px;
        margin-left: 30px;
        object-fit: cover;
        width: 7px;
    }
    .pharm-1 .path-36 {
        height: 11px;
        margin-bottom: 0.64px;
        margin-left: 29px;
        object-fit: cover;
        width: 14px;
    }
    .pharm-1 .path-37 {
        height: 14px;
        margin-left: 1630px;
        object-fit: cover;
        width: 14px;
    }
    .pharm-1 .patient-id {
        letter-spacing: 0;
        line-height: 20px;
        margin-bottom: 3px;
        min-height: 31px;
        min-width: 98px;
        text-align: center;
        white-space: nowrap;
    }
    .pharm-1 .place {
        left: 70px;
        letter-spacing: 0;
        line-height: 30px;
        position: absolute;
        text-align: center;
        top: 12px;
        white-space: nowrap;
    }
    .pharm-1 .profile {
        align-items: flex-start;
        background-color: var(--white);
        border-radius: 44px;
        display: flex;
        height: 88px;
        margin-left: 1629px;
        min-width: 88px;
        padding: 11px 15px;
    }
    .pharm-1 .rectangle-1094 {
        background-color: var(--polar);
        cursor: pointer;
        height: 45px;
        margin-left: 19px;
        opacity: 0.99;
        width: 244px;
    }
    .pharm-1 .resolve-2021 {
        align-self: flex-start;
        letter-spacing: 0;
        line-height: 20px;
        min-height: 13px;
        min-width: 84px;
        text-align: right;
        white-space: nowrap;
    }
    .pharm-1 .text-1 {
        letter-spacing: 0;
        line-height: 30px;
        margin-right: 21.0px;
        margin-top: 224px;
        min-height: 44px;
        min-width: 639px;
        text-align: center;
        white-space: nowrap;
    }
    .pharm-1 .text-2 {
        letter-spacing: 0;
        line-height: 26px;
        margin-top: -4.5px;
        min-height: 97px;
        min-width: 88px;
        white-space: nowrap;
    }
    .pharm-1 .text-3 {
        letter-spacing: 0;
        line-height: 26px;
        margin-left: 198px;
        margin-top: -4.5px;
        min-height: 71px;
        min-width: 135px;
        white-space: nowrap;
    }
    .pharm-1 .text-4 {
        letter-spacing: 0;
        line-height: 26px;
        margin-left: 198px;
        margin-top: -4.5px;
        min-height: 97px;
        white-space: nowrap;
    }
    .pharm-1 .title {
        letter-spacing: 0;
        line-height: 72px;
        margin-left: 499px;
        min-height: 104px;
        min-width: 496px;
        text-align: center;
        white-space: nowrap;
    }
    .pharm-1 .union-1 {
        height: 56px;
        object-fit: cover;
        width: 55px;
    }

    @import url("https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css");
    @font-face {
        font-family: "Arial-Bold";
        font-style: normal;
        font-weight: 700;
        src: url("https://fonts.animaapp.com/Arial-Bold") format("truetype");
    }

    @font-face {
        font-family: "Arial-Regular";
        font-style: normal;
        font-weight: 400;
        src: url("https://fonts.animaapp.com/Arial-Regular") format("opentype");
    }

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
        <div class="container-center-horizontal">
            <div class="patient-page-1 screen">
                <div class="flex-col">
                    <div class="overlap-group1">
                        <h1 class="title myanmarmn-bold-gray-72px">@yield('title')</h1>
                        <div class="header">
                            <img
                                class="image-1"
                                src="https://anima-uploads.s3.amazonaws.com/projects/608e61ba502024036693ae93/releases/608e61c09c415e475086e021/img/image-1-1@1x.png"
                            />
                            <div class="profile border-1px-dove-gray">
                                <img
                                    class="union-1"
                                    src="https://anima-uploads.s3.amazonaws.com/projects/608e61ba502024036693ae93/releases/608e61c09c415e475086e021/img/union-1-1@1x.png"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="overlap-group">
                        <a href="/">
                            <div class="arrow-left">
                                <img
                                    class="path-10"
                                    src="https://anima-uploads.s3.amazonaws.com/projects/608e61ba502024036693ae93/releases/608e61c09c415e475086e021/img/path-10-1@1x.png"
                                /></div
                            >
                        </a>
                        <div class="place arial-bold-slate-gray-20px">BACK</div>
                    </div>
                </div>
        <main class="py-4">
            @yield('content')
        </main>
            </div>
        </div>
    </div>
</body>
</html>
