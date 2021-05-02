@extends('layouts.apphome')

@section('content')
    <div class="container-center-horizontal">
        <div class="home-page screen">
            <div class="header">
                <img
                    class="image-1"
                    src="https://anima-uploads.s3.amazonaws.com/projects/608e61ba502024036693ae93/releases/608e61c09c415e475086e021/img/image-1-1@1x.png"
                />
                <a href="/logout">
                    <div class="profile border-1px-dove-gray">
                        <img
                            class="union-1"
                            src="https://anima-uploads.s3.amazonaws.com/projects/608e61ba502024036693ae93/releases/608e61c09c415e475086e021/img/union-1-1@1x.png"
                        /></div
                    ></a>
            </div>
            <div class="body">
                <div class="title-1">
                    <h1 class="title myanmarmn-bold-gray-72px">RESOLVE</h1>
                    <div class="text-4 myanmarmn-regular-normal-gray-42px">UNIVERSAL HEALTH SYSTEM</div>
                </div>
                <div class="flex-row">
                    <a href="patient-page-1">
                        <div class="button-normal-2 border-2px-dodger-blue">
                            <div class="patient-login arial-bold-dodger-blue-20px">PATIENT LOGIN</div>
                        </div></a
                    >
                    <a href="doctor-1">
                        <div class="button-normal-1 border-2px-dodger-blue">
                            <div class="physician-login arial-bold-dodger-blue-20px">PHYSICIAN LOGIN</div>
                        </div></a
                    >
                    <a href="pharm-1">
                        <div class="button-normal border-2px-dodger-blue">
                            <div class="pharmacist-login arial-bold-dodger-blue-20px">PHARMACIST LOGIN</div>
                        </div></a
                    >
                </div>
            </div>
            <div class="footer">
                <div class="overlap-group">
                    <div class="links">
                        <div class="text-1 arial-bold-black-haze-16px">ABOUT US<br />BENEFITS<br />OVERVIEW</div>
                        <div class="text-2 arial-bold-black-haze-16px">SERVICES<br />DIGITAL HEALTH<br />MENTAL HEALTH</div>
                        <div class="text-3 arial-bold-black-haze-16px">SUPPORT<br />FAQ<br />CONTACT US</div>
                    </div>
                    <img
                        class="path-10"
                        src="https://anima-uploads.s3.amazonaws.com/projects/608e61ba502024036693ae93/releases/608e61c09c415e475086e021/img/path-10-2@1x.png"
                    />
                </div>
                <div class="info">
                    <div class="resolve-2021 arial-regular-normal-gray-10px">© RESOLVE 2021</div>
                    <img
                        class="path-37"
                        src="https://anima-uploads.s3.amazonaws.com/projects/608e61ba502024036693ae93/releases/608e61c09c415e475086e021/img/path-37-1@1x.png"
                    />
                    <img
                        class="path-36"
                        src="https://anima-uploads.s3.amazonaws.com/projects/608e61ba502024036693ae93/releases/608e61c09c415e475086e021/img/path-36-1@1x.png"
                    />
                    <img
                        class="path-35"
                        src="https://anima-uploads.s3.amazonaws.com/projects/608e61ba502024036693ae93/releases/608e61c09c415e475086e021/img/path-35-1@1x.png"
                    />
                </div>
            </div>
        </div>
    </div>
@endsection
