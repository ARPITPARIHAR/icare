@extends('user.layouts.app')
@section('meta_title','game')

@include('user.includes.nav')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Titles with Icons</title>
    <!-- Include FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Service title blocks ko style karein */
        .service-title-block {
            background-color: #f2f2f2; /* Block ke liye background color */
            border: 1px solid #ddd; /* Block ke liye border */
            text-align: center; /* Text aur content ko center-align karein */
            padding: 10px; /* Spacing ke liye padding */
            margin: 100px; /* Blocks ke beech mein space banane ke liye margin */
            border-radius: 10px; /* Modern look ke liye rounded corners */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow add karein */
        }

        /* Service titles ko style karein */
        .service-title {
            font-size: 18px; /* Font size ko apne requirements ke hisab se adjust karein */
            color: #333; /* Text color ko customize karein */
        }

        /* FontAwesome icons ki styling */
        .service-title-block i {
            font-size: 24px; /* Icon size customize karein */
            color: #007BFF; /* Icon color customize karein */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-lg-4 service-title-block">
        <i class="fas fa-battery-full"></i>
        <h3 class="service-title">Battery</h3>
    </div>

    <div class="col-lg-4 service-title-block">
        <i class="fas fa-plug"></i>
        <h3 class="service-title">Charging Jack</h3>
    </div>

    <div class="col-lg-4 service-title-block">
        <i class="fas fa-microphone"></i>
        <h3 class="service-title">Mic</h3>
    </div>

    <div class="col-lg-4 service-title-block">
        <i class="fas fa-volume-up"></i>
        <h3 class="service-title">Ear Speaker</h3>
    </div>

 
        <div class="row service-title-row">
            <div class="col-lg-4 service-title-block">
                <i class="fas fa-camera"></i>
                <h3 class="service-title">Camera</h3>
            </div>

            <div class="col-lg-4 service-title-block">
                <i class="fas fa-headphones"></i>
                <h3 class="service-title">Aux Jack</h3>
            </div>

            <div class="col-lg-4 service-title-block">
                <i class="fas fa-volume-up"></i>
                <h3 class="service-title">Volume Button</h3>
            </div>
        </div>

        <div class="row service-title-row">
            <div class="col-lg-4 service-title-block">
                <i class="fas fa-power-off"></i>
                <h3 class="service-title">Power Button</h3>
            </div>

            <div class="col-lg-4 service-title-block">
                <i class="fas fa-home"></i>
                <h3 class="service-title">Home Button</h3>
            </div>

            <div class="col-lg-4 service-title-block">
                <i class="fas fa-motorcycle"></i>
                <h3 class="service-title">Diagnosis</h3>
            </div>
        </div>

        <div class="row service-title-row">
            <div class="col-lg-4 service-title-block">
                <i class="fas fa-tint"></i>
                <h3 class="service-title">Water Damage</h3>
            </div>
        </div>
    </div>
    </div>
</body>
</html>


@include('user.includes.footer')

@section('style')
    
@endsection
@section('script')
    
@endsection