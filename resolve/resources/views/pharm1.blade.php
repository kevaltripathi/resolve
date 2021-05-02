@extends('layouts.app')
@section('title', 'Pharmacist')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ENTER PATIENT IDENTIFICATION NUMBER</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('sql') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control"
                                       name="id" required autofocus>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Proceed
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <p style="margin-left: 20px">*Valid ID's are 1234567890, 1111111111, 2222222222*</p>

    <div class="footer">
        <div class="overlap-group1">
            <img
                class="path-10-1"
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
@endsection
