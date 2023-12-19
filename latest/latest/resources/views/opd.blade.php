@extends('layouts._layout')
   @section('content')
  <style>
    /*--------------------------------------------------------------
# About
--------------------------------------------------------------*/
#main{
    margin: 80px;
}

.about .content h3 {
  font-weight: 700;
  font-size: 28px;
  font-family: "Poppins", sans-serif;
  color: #00B4CC;
}
.about .content p {
  font-weight: 400;
  font-size: 20px;
  font-family: "Ubuntu", sans-serif;
}




.about .content p:last-child {
  margin-bottom: 0;
}
#hello{
  color: #FF4701;
  text-align: center;
  
}
.top-section {
            position: relative;
            background-image: url('surgery/opd.jpg'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            filter: brightness(70%); /* Apply a light filter */
            padding: 100px 0;
            height: 600px;
            text-align: center;
            color: #ffffff;
        }
      
        .overlay-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .overlay-text h1 {
            font-size: 36px;
            font-weight: 600;
            margin-bottom: 10px;
            color:#00B5E2;
        }

        .overlay-text p {
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto;
            color:#ffffff;
        }

  </style>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="assets/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/index_style.css">
  <!-- Template Main CSS File -->

  <!------------body--------------->
<div class="top-section">
  <div class="overlay-text">
      <h1> OPD</h1>
      <p>The Outpatient Department (OPD) is a vital component of modern healthcare systems, serving as the gateway to medical care for a diverse range of patients. Unlike inpatient services that require hospitalization, the OPD offers medical services and consultations to individuals on an outpatient basis. This means that patients receive the required medical attention and treatment without being admitted to the hospital.</p>
  </div>
</div>
  

  <main id="main">
     <!-- ======= Blog Header ======= -->
 <div class="section-title">
  <h2 id="hello"><b>OPD</b> <br>
    (Outpatient Department)</h2>
  
</div>
<p class="fst-italic">
  Laboratory services are a cornerstone of any hospital's diagnostic and treatment capabilities. These facilities are equipped with state-of-the-art technology and staffed by skilled professionals who play a critical role in patient care. The laboratory encompasses various departments, each specializing in different aspects of medical testing and analysis.
</p>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="surgery/44.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Medical Consultation.</h3>
            <p class="fst-italic">
                OPD provides a platform for patients to consult medical professionals, such as doctors and specialists, to discuss their health concerns, symptoms, and medical history. The doctor evaluates the patient's condition, provides diagnosis, and recommends appropriate treatment or further investigations.In the realm of modern healthcare, Outpatient Department (OPD) services play a crucial role in providing timely and efficient medical care to a vast number of patients. The OPD is an integral component of any medical facility, ranging from small clinics to large hospitals. 

            </p>
            </div>
        </div>

      </div>
      <br>
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="surgery/55.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Diagnosis and Testing</h3>
            <p class="fst-italic">
                OPD offers diagnostic services, including laboratory tests, radiology, and imaging services like X-rays, ultrasounds, and MRIs. These tests aid in confirming diagnoses, monitoring progress, and making informed treatment decisionsOPD offers diagnostic services, including laboratory tests, radiology, and imaging services like X-rays, ultrasounds, and MRIs. These tests aid in confirming diagnoses, monitoring progress, and making informed treatment decisions.


            </p>
            </div>
        </div>

      </div>
      <br>
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="surgery/56.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Preventive Care</h3>
            <p class="fst-italic">
                OPD services aren't solely reactive; they also emphasize preventive care. Routine check-ups, vaccinations, health screenings, and counseling on healthy lifestyles are integral components of OPD offerings. Preventive measures can help catch health issues early and reduce the risk of developing more serious conditions.                OPD services aren't solely reactive; they also emphasize preventive care. Routine check-ups, vaccinations, health screenings, and counseling on healthy lifestyles are integral components of OPD offerings. Preventive measures can help catch health issues early and reduce the risk of developing more serious conditions.


            </p>
            </div>
        </div>

      </div>
   <br>
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="surgery/22.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Diagnosis and Testing</h3>
            <p class="fst-italic">
                OPD offers diagnostic services, including laboratory tests, radiology, and imaging services like X-rays, ultrasounds, and MRIs. These tests aid in confirming diagnoses, monitoring progress, and making informed treatment decisions.                OPD offers diagnostic services, including laboratory tests, radiology, and imaging services like X-rays, ultrasounds, and MRIs. These tests aid in confirming diagnoses, monitoring progress, and making informed treatment decisions.
                OPD offers diagnostic services, including laboratory tests, radiology, and imaging services like X-rays, ultrasounds, and MRIs. These tests aid in confirming diagnoses, monitoring progress, and making informed treatment decisions.


            </p>
            </div>
        </div>

      </div>
      <br>
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="surgery/58.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Diagnosis and Treatment</h3>
            <p class="fst-italic">
                Physicians and specialists in the OPD conduct examinations, order diagnostic tests (such as blood tests, X-rays, and ultrasounds), interpret results, and provide appropriate treatment plans. For many patients, OPD services are a convenient and timely way to receive medical attention without the need for hospitalizationPhysicians and specialists in the OPD conduct examinations, order diagnostic tests (such as blood tests, X-rays, and ultrasounds), interpret results, and provide appropriate treatment plans. For many patients, OPD services are a convenient and timely way to receive medical attention without the need for hospitalization
                Physicians and specialists in the OPD conduct examinations, order diagnostic tests (such as blood tests, X-rays, and ultrasounds), interpret results, and provide appropriate treatment plans. For many patients, OPD services are a convenient and timely way to receive medical attention without the need for hospitalization


            </p>
            </div>
        </div>

      </div>
<br>
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="surgery/57.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Prescription and Medication</h3>
            <p class="fst-italic">
                Based on the diagnosis, doctors in the OPD prescribe medications and treatment plans. Patients can also seek advice on proper medication usage, potential side effects, and any The Outpatient Department, commonly referred to as OPD, is a fundamental component of modern healthcare systems. It plays a crucial role in providing medical care, diagnosis, treatment
                Based on the diagnosis, doctors in the OPD prescribe medications and treatment plans. Patients can also seek advice on proper medication usage, potential side effects, and any The Outpatient Department, commonly referred to as OPD, is a fundamental component of modern healthcare systems. It plays a crucial role in providing medical care, diagnosis, treatment
                Based on the diagnosis, doctors in the OPD prescribe medications and treatment plans. Patients can also seek advice on proper medication usage, potential side effects, and any The Outpatient Department, commonly referred to as OPD, is a fundamental component of modern healthcare systems. It plays a crucial role in providing medical care, diagnosis, treatment

            </p>
            </div>
        </div>

      </div>
    </section><!-- End About Section -->
     

    <!-- ---------------------------------footer------------------------ -->

    <!-- ----------------------------------end footer------------------------------ -->

    
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  @endsection