@extends('user.layouts.app')
@section('meta_title','game')

@include('user.includes.nav')




    <style>
        /* CSS Styles */
   
        .about-container {
    background-color: #207466;
    color: #fff;
    text-align: center;

    height:1000px!important;
    margin-top: 0px!important;
    margin-bottom: 0px!important;
}


       

        h1 {
            color: #db8734;
            font-size: 32px;
        }

        .content{
            font-size: 24px!important;
            line-height: 1.5;
            color:white !important;
            font-family: cursive!important;
        }
        h1{
    color: #cbe108fc !important;
}

       .point{
        color:black;
        font-size: 24px;
        font-family: cursive!important;
       }
       .about {
    background-image: url('assets/img/gallery/1111.jpg');
    background-size: 100% 500px;
    background-repeat: no-repeat;
    text-align: center;
    display: flex;
    flex-direction: column; 
    align-items: center;
    justify-content: center;
    height: 400px;
}

.about-text,
.us-text {
    font-size: 80px;
    
}

.about-text {
    color: rgb(0 13 128);
font-family: auto;
}

.us-text {
    color:rgb(75, 128, 0);
    font-family: auto; /* Adjust vertical spacing between "ABOUT" and "US" */
}

    </style>
<div class="about">
    <div class="content">
        <h2><span class="about-text">ABOUT</span> <span class="us-text">US</span></h2>
    </div>
</div>
     
    <div class="about-container">
        <h1>Our Story</h1>
        <div class="content">Founded in [Year], iCare has evolved into a leading mobile repair and service center in [Your Location]. What began as a humble repair shop has grown into a reputable establishment known for its unwavering commitment to excellence.</div>

        <h1>Our Mission</h1>
        <div class="content">At iCare, our mission is simple yet profound: to provide top-quality mobile repair and service solutions that restore your devices to their full potential. We recognize the significance of staying connected in today's fast-paced world, and we are dedicated to delivering timely, reliable, and cost-effective services.</div>

        <h1>Why Choose iCare?</h1>
        <ul>
            <li><div class="point">Expert Technicians:</div> <div class="content">Our team of highly skilled technicians brings years of experience and in-depth knowledge of various mobile device brands.<div></li>
            <li><div class="point">Quality Repairs: </div><div class="content">We use only genuine parts and state-of-the-art equipment to ensure your devices function flawlessly.<div></li>
            <li><div class="point">Affordable Pricing: </div><div class="content">We offer competitive pricing without compromising on service quality.<div></li>
            <li><div class="point">Swift Turnaround:</div><div class="content"> We understand the urgency, and our goal is to minimize your device's downtime.<div></li>
            <li><div class="point">Customer Satisfaction:</div><div class="content"> Your satisfaction is our utmost priority, and we consistently strive to exceed your expectations.<div></li>
        </ul>

        <h1>Our Commitment</h1>
        <div class="content">We're not just about repairs; we're about solutions. Whether it's a cracked screen, software issues, or a battery replacement, iCare has you covered. We stand by our work, backing our repairs with warranties for your peace of mind.</div>

        
            <div class="content">Thank you for choosing iCare – where your devices are in caring hands.</div>
    </div>

</div>
</div>
@include('user.includes.footer')

@section('style')
    
@endsection
@section('script')
    
@endsection
