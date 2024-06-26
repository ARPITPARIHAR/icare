
@extends('user.layouts.app')
@section('meta_title','game')

@include('user.includes.nav')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div class="about">
    <div class="content">
        <h2><span class="about-text">Get In</span> <span class="us-text">Touch</span></h2>
    </div>
</div>
<div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.5s">
<div class="container" style="margin-left5px;">
    <div class="row">
      
         <div class="col-lg-6" >
          
            <div class="contact-container">
                  <h2 class="h2 text-center top-heading my-4">Drop Us A Quick Message</h2>
                <form id="contact" form action="{{ route('contact.store') }}" method="post">
                         @csrf
                    <div class="row">
                        <div class="col-lg-6">
                         
                            <fieldset>
                                <input type="text" name="name" id="name" placeholder="Full Name" autocomplete="on" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <input type="text" name="surname" id="surname" placeholder="Surname" autocomplete="on" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required="" style="color: white; font-size: 20px;"></textarea>


                            </fieldset>
                        </div>
                        <br>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
                <div class="contact-dec">
                    <img src="assets/images/contact-decoration.png" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d220.18644260501418!2d73.34259678603189!3d27.994414007983714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1687893595114!5m2!1sen!2sin" frameborder="0" allowfullscreen="" style="margin-top: 120px; width: 100%; height: 400px;"></iframe>
        </div>
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.7s">
        <div class="col-lg-12">
            <div class="container">
                <div class="row">
                    <!-- Address Block -->
                    <div class="col-md-4"> <!-- Increase the width to col-md-6 for a wider block -->
                        <div class="address-block" style="height:150px;">
                            <div class="ad" style="margin-top:15px;">Address</div>
                          
                            <span style="color:white;">i Care F1 1St floor, Bothra Complex Near Modern Market Bikaner  Rajasthan</span>
                        </div>
                    </div>
            
                    <!-- Contact Number Block -->
                    <div class="col-md-4"> <!-- Increase the width to col-md-6 for a wider block -->
                        <div class="contact-block" style="height:150px;">
                            <div class="ad" style="margin-top:30px;" >Contact Number</div>
                            <span style="color:white;">+1 514 648 256</span>
                          
                        </div>
                    </div>
            
                   
                    <div class="col-md-4"> <!-- Increase the width to col-md-6 for a wider block -->
                        <div class="email-block" style="height:150px;">
                            <div class="ad"style="margin-top:15px;" >Email Address</div>
                           
                            <span  style="color:white;"> service@icareindia.net</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
</div>
</div>

  <style>
  /* Apply custom text style to text within .custom-text */
  .custom-text {
      color: white !important;
      font-family:muli !important;
  }
  
  /* Reduce top padding for footer-top */
  .footer-top {
      padding-top: 20px !important; /* Adjust as needed */
  }
  
  /* Push quick links and logo to the left */
  .single-footer-caption h4 {
      margin-right: 20px !important; /* Adjust as needed */
  }
  
  /* Adjust spacing between quick links */
  .single-footer-caption ul li {
      margin-bottom: 10px !important; /* Adjust as needed */
  }
  
  /* Adjust spacing between address and contact number */
  .single-footer-caption p {
      margin-top: 10px !important; /* Adjust as needed */
  }
  


   
.ad{
    font-size: 30px;
    color:#fbff2d; 
}

    .address-block {
        background-color:#7f2b24;
        padding: 10px;
       
        border-radius: 15px;
        text-align: center;
        margin-top: 150px; /* Add a top margin of 80px */
    }

    /* Style for the contact number block */
    .contact-block {
        background-color:#04847f;
        padding: 1px;
   
        border-radius: 15px;
        text-align: center;
        margin-top: 150px; /* Add a top margin of 80px */
    }

    /* Style for the email address block */
    .email-block {
        background-color:crimson;
        padding: 20px;
  
        border-radius: 15px;
        text-align: center;
        margin-top: 150px; /* Add a top margin of 80px */
    }

    /* Add hover effect */
    .address-block:hover,
    .contact-block:hover,
    .email-block:hover {
        transform: scale(1.05);
        transition: transform 0.2s;
    }

    /* Style for headings */
    h3 {
        color: #333;
    }

    /* Style for text within the blocks */
    /* p {
        margin: 5px 0;
        font-size: 18px;
    }
    .container {
    margin-bottom: 40px;
} */

/* CSS for the footer */







/* Style for the icon */
.icon {
    float: left; /* Icons on the left side */
    font-size: 24px; /* Adjust icon size as needed */
    margin-right: 10px; /* Space between icon and text */
    color: cyan !important; /* Icon color */
}


/* Style for the address and contact content */
.single-address {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

/* Style for the content within .cont */
.single-address .cont {
    color: white!important; /* Set text color to white */
    font-size: 20px; /* Adjust font size as needed */
    margin-left: 10px; /* Add some margin between icon and text */
}
/* p {
    font-family: "Muli",sans-serif;
    color: white !important;
    font-size:18px!important;
  
    margin-bottom: 15px;
    font-weight: normal;
} */




form#contact input::placeholder,
form#contact textarea::placeholder {
    color:rgb(208, 218, 104);
    font-size: 22px;
}


    .contact-container{
        margin-top: 80px;
        margin-bottom: 50px;
        margin-left: -40px;
       
    }
    .about {
    background-image: url('assets/img/gallery/7.jpg');
    background-size: 100% 500px;
    background-repeat: no-repeat;
    text-align: center;
    display: flex;
    flex-direction: column; /* Stack child elements vertically */
    align-items: center;
    justify-content: center;
    height: 300px;
}
form#contact {
    margin-left: 30px;
    position: relative;
    background-image:url(assets/img/gallery/contact.jpg);
    padding: 60px 30px;
    border-radius: 20px;
}
.top-heading {
    font-size: 30px;
    font-weight: 700;
    color: #1a2a3e;
}
form#contact button {
    display: inline-block;
    background-color: #7f2b24;
    font-size: 15px;
    font-weight: 400;
    color: #fff;
    text-transform: capitalize;
    padding: 12px 25px;
    border-radius: 23px;
    letter-spacing: 0.25px;
    border: none;
    outline: none;
    transition: all 0.3s;
    text-align: center;
}

.col-lg-6 {
    flex: 0 0 auto;
    width: 50%;
}

.col-lg-12 {
    flex: 0 0 auto;
    width: 100%;
}

form#contact input {
    width: 100%;
    height: 46px;
    border-radius: 33px;
    background-color:#bddf11a6;
    border: none;
    outline: none;
    font-size: 18px;
    font-weight: 300;
    color:white;
    padding: 0px 20px;
    margin-bottom: 20px;
}

fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0;
}
/* Message Text Styling */
form#contact textarea {
    width: 100%;
    border-radius: 10px;
    background-color:#bddf11a6;
    border: none;
    outline: none;
    font-size: 15px;
    font-weight: 300;
    color: #2a2a2a;
    padding: 10px 20px;
    margin-bottom: 20px;
    resize: none; /* Prevent textarea resizing */
}

/* Send Button Position */
form#contact button {
    margin-top: 10px;
    margin-top: 10px; /* Adjust the margin to move the button down */
    display: block; /* Make the button a block-level element */
    margin: 0 auto;  /* Adjust the margin to move the button down */
}



.about-text {
    font-size: 80px;
    font-family:serif;
    color: aliceblue;
}
.us-text {
    font-size: 80px;
    font-family:serif;
    color: initial; /* Set the color for "Touch" */
}

/* Styling for info-container */
.info-container {
    background-image: url('assets/img/gallery/ok1.jpg');
    margin-top: 80px;
    margin-left: 200px;
    border-radius: 10px;
   height:400px;
   width:500px;
}




</style>

@include('user.includes.footer')
@section('style')
    
@endsection
@section('script')
    
@endsection