
<style>
    /* navigation bar start*/
  .custom-nav a{
    color: #00B4CC;
  }
  .custom-nav a:hover{
    color:#16c9e1;
  }

  .custom1-nav{
    background-color: #00B4CC;
  }
  .custom1-nav a{
    color:white;
  }
  .custom1-nav:hover{
    background-color: #16c9e1;

  }
  .custom1-nav a:hover{
    color:white;
  }

  /* navigation bar end */

    .image-section {
    text-align: center;
    background-color: #f5f5f5;
    opacity: 0.8;
  }

  .image-slider {
    width: 100%; 
    margin: 0 auto;
    text-align: center;
    display: flex; 
    flex-direction: row; 
  }

  .image-slider img {
    width: 100%; 
    object-fit: contain; 
    max-height: 100%; 
  }

  .image-slider img {
    max-width: 100%;
  }
  /* ===== Cards ====== */
  .card {
    margin-bottom: 20px;
    border: none;
    transition: transform 0.3s ease-in-out; 
  }

  .card:hover {
    transform: scale(1.1); 
  }

  .card-body {
    text-align: center;
  }

  .card:hover {
    /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
    /* box-shadow: 0 4px 6px rgba(0, 128, 128, 0.5);  */
    box-shadow: 0 4px 10px 2px rgba(0, 128, 128, 0.7); /* x-offset, y-offset, blur radius, spread, color */
    background-color: white;
  }
    
  
      .about-content {
        text-align: center;
      }
      
      .services-section {
      background: linear-gradient(135deg, #00B4CC 40%, white 50%, #ff4701 100%);
      padding: 50px 0;
      color: white;
    }

    .services-box {
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .services-list {
      list-style: none;
      padding: 0;
      margin-top: 20px;
    }

    .services-list li {
      margin: 10px 0;
      font-size: 18px;
      color: rgba(0, 0, 0, 0.8);
      text-transform: capitalize;
    }

    .services-list li:before {
      content: '\2022'; 
      color: #ff4701;
      margin-right: 10px;
    }

    .services-list li:hover {
      color: #00B4CC;
    }
      .hospital-section {
    padding: 5rem 0;
    /* background: linear-gradient(135deg, #00B4CC 40%, white 50%, #ff4701 10%); */
    background-image: url('images/download.jfif');
    background-size:cover ;
  }

  .hospital-image {
    max-width: 100%;
    height: auto;
  }

  .hospital-content {
    padding: 2rem;
    background-color: #ffffff;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
  }

  .hospital-content h2 {
    font-size: 24px;
    margin-bottom: 10px;
  }

  .hospital-content p {
    font-size: 16px;
    margin-bottom: 20px;
  }

  .btn-primary {
    background-color: #00B4CC;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
  }

  .btn-primary:hover {
    background-color: #00B4CC;
  }
  .about-section {
    padding: 4rem 0;
    /* background: linear-gradient(135deg, #00B4CC 40%, white 50%, #ff4701 10%); */
  }

  .about-content {
    max-width: 700px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    transform: scale(1.05); 
    box-shadow: 0 4px 6px rgba(0, 128, 128, 0.5); /* x-offset, y-offset, blur radius, color */
    background-color: white;
  }

  .about-content p {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 20px;
  }

  .about-content h2 {
    font-size: 32px;
    margin-bottom: 20px;
  }

  .about-section h2 {
    color: #333333;
  }

  .about-section p {
    color: #666666;
  }

  .about-content:hover {
    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
  }


  .zoom-effect {
    transition: transform 0.3s ease-in-out; /* Add a smooth transition effect */
  }


  .hospital-image:hover,
  .hospital-content:hover {
    transform: scale(1.05); 
    box-shadow: 0 4px 6px rgba(0, 128, 128, 0.5); /* x-offset, y-offset, blur radius, color */
    background-color: white;/* Adjust the scale factor for the zoom level */
  }

  .service-image {
      margin: 10px; /* Add some margin to separate images */
      display: inline-block; /* Display images in a row */
      position: relative; /* Allow positioning within the container */
      transition: transform 0.3s ease-in-out; /* Add a smooth animation on hover */
    }

    .service-image:hover {
      transform: scale(1.1); /* Zoom in slightly on hover */
    }
    .col-lg-2 {
      text-align: center; /* Center-align text */
      margin-top: 20px; /* Add some top margin to the text */
    }

    .col-lg-2 img {
      display: block; /* Ensure images are centered horizontally */
      margin: 0 auto;
    }

</style>  

@extends('layouts._layout')
 @section('content')
<!-- body -->
<section class="image-section">
    <div class="image-slider">
      <img src="images/1.jpg" alt="Image 1">
      <img src="images/2_ok.jpeg" alt="Image 2">
      <img src="images/3_ok.jpeg" alt="Image 3">
    </div>
  </section>

   <section class="containe mt-5 mx-5">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="images/pic4.jpeg" class="card-img-top" alt="Feature 1">
          <div class="card-body">
            <h5 class="card-title"> <b>Advanced Facilities</b></h5>
            <p class="card-text">State-of-the-art facilities to ensure the best care for our patients.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="images/pic1.jpeg" class="card-img-top" alt="Feature 2">
          <div class="card-body">
            <h5 class="card-title"> <b>Expert Team</b></h5>
            <p class="card-text">Highly skilled doctors and nurses dedicated to your well-being.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="images/pt1.jpeg" class="card-img-top" alt="Feature 3">
          <div class="card-body">
            <h5 class="card-title"> <b>Patient Care</b></h5>
            <p class="card-text">Compassionate care that puts our patients' comfort first.</p>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="hospital-section mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="images/Best Medical ServicE (Facebook Cover).png" alt="Hospital Image" class="hospital-image  zoom-effect">
      </div>
      <div class="col-md-6 hospital-content  zoom-effect">
        <h2> <b>About Our Hospital</b></h2>
        <p>We provide top-quality medical services with a focus on patient care and well-being. Our team of experienced doctors and nurses is dedicated to ensuring the best possible treatment for our patients.</p>
        <p>Our online booking system makes it convenient for you to schedule appointments and manage your healthcare needs. Book your appointment today and experience our exceptional healthcare services.</p>
       <a class="btn btn-primary" href="{{route('appoint.create')}}">Book Appointment</a>
      </div>
    </div>
  </div>
</section>

<section class="container mt-5 about-section text-center  zoom-effect">
  <div class="row">
    <div class="col-md-12  zoom-effect">
      <h2 class="mb-4">  <b>About Us</b></h2>
      <div class="about-content">
        <p>We are committed to providing exceptional healthcare services with a focus on patient comfort and well-being. Our team of experienced doctors and dedicated staff ensure that you receive the best care possible.</p>
        <p>At Hospital Haven, your health is our priority.</p>
      </div>
    </div>
  </div>
</section>
<section class="mt-5">
    <!-- <div style="text-align: center;background-repeat:no-repeat;background-size: cover; padding: 8%;    background: linear-gradient(135deg, #00B4CC 40%, white 50%, #ff4701 10%);
    "> -->
    <div style="text-align: center; padding: 8%; background: linear-gradient(135deg, #E6F7FF, #FFFFFF);">

      <h1> <b style="color: #02090a;">OUR SERVICES </b></h1>
      <p> services encompass a wide range of medical care and support,<br> making them vital institutions for
        promoting public health. These services include emergency care, diagnostic procedures, surgical interventions,
        specialized treatments, and ongoing medical management. In addition to medical expertise,<br> hospitals offer
        essential ancillary services such as laboratory testing, radiology, pharmacy, and rehabilitation facilities.
        Moreover,<br> hospitals play a crucial role in preventive care, health education, and community outreach
        programs.<br> With dedicated healthcare professionals and advanced technology,<br> hospitals provide a
        comprehensive approach to addressing various medical conditions,<br> ensuring the well-being of individuals and
        communities
      </p>
      <div class="container">
        <div class="row bg-light">
          <!-- <div class="col-lg-2 col-md-3 col-sm-4">
            <img src="images/cancer.jpeg" alt="" height="80px" width="80px">
            <h6>Cancer Care</h6>
          </div> -->
          <div class="col-lg-2 col-md-3 col-sm-4">
            <img src="images/cancer.jpeg" alt="" height="80px" width="80px" class="service-image">
            <h6>Cancer Care</h6>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4">
            <img src="images/emergency.jpg" alt="" height="80px" width="80px" class="service-image">
            <h6> Emergency</h6>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4">
            <img src="images/nutri.jpeg" alt="" height="80px" width="80px" class="service-image">
            <h6>Nutrition</h6>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4">
            <img src="images/sports.jpeg" alt="" height="80px" width="80px" class="service-image">
            <h6>Sports Medicine</h6>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4">
            <img src="images/heart.jpg" alt="" height="80px" width="80px" class="service-image">
            <h6>Heart Care</h6>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-4">
            <img src="images/ortho.jpeg" alt="" height="80px" width="80px" class="service-image">
            <h6>Orthopedics</h6>
          </div>
        </div>
      </div>
      <!-- <button type="submit" style="height: 7%;width: 13%; margin-top: 4%;"><a href="{{asset('service')}}" style="text-decoration: none;color:black;">Details</a></button> -->
    </div>
  </section>
</body>
  <script>
    // Automatic image rotation using JavaScript
    const imageSlider = document.querySelector('.image-slider');
    const images = imageSlider.querySelectorAll('img');
    let currentIndex = 0;

    function showImage(index) {
      images.forEach(image => image.style.display = 'none');
      images[index].style.display = 'block';
    }

    function rotateImages() {
      currentIndex = (currentIndex + 1) % images.length;
      showImage(currentIndex);
    }

    setInterval(rotateImages, 3000); // Change image every 3 seconds
    showImage(currentIndex);
  </script>
  @endsection
  

