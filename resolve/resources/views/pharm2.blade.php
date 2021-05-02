@extends('layouts.app')
@section('title', 'Pharmacist')

@section('content')
    <style>
        .row {
            position: absolute;
            left: 400px;
        }
        .col-auto {
            margin: 20px;
        }
    </style>
    <div class="row">
        <div class="col-auto">
            <h3>Patient Information</h3>
            <span class="span myanmarmn-bold-gray-30px">Name: {{$data->FirstName}} {{$data->LastName}}<br /></span
            ><span class="span myanmarmn-bold-gray-20px"
            >ID: {{$data->ID}}<br />Age: {{$data->Age}}<br />Last visit: March 25th, 2021<br /></span
            ><span class="span myanmarmn-bold-gray-30px"></span></div>
        <div class="col-auto">
            <h3>Current Medications</h3>
                <span
                >{{$data->CurrentMed}}</span>
        </div>
        <div class="col-auto">
            <h3>Past Medications</h3>
                <span
                >{{$data->PreviousMed}}</span>
        </div>
        <div class="col-auto">
            <h3>Allergies</h3><span> {{$data->Allergens}}</span>
        </div>
    </div>

@endsection
