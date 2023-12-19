<style>
    .lab5 {
        background-image: url(./images/sweeper9.jpeg);
        min-height: 300px;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .card-body {
        display: flex;

    }

    .card-body img {
        max-height: 200px;
    }

    @keyframes slideInLeft {
        from {
            transform: translateX(-100%);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .card .c1 {
        animation: slideInLeft 1s ease-in-out forwards;
    }

    /* Define the animation */
    @keyframes slideInRight {
        from {
            transform: translateX(100%);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }


    .card .c2 {
        animation: slideInRight 1s ease-in-out forwards;
    }
</style>

@extends('layouts._layout')
@section('content')
<!--body-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medical Haven</title>
 <link href="{{asset('css_bootstrap.min.css')}}" rel="stylesheet">
  <!-- <link rel="stylesheet" href="assets/index_style.css"> -->

  <style>
    /* Navbar Styles */
.custom-nav a{
    color: #00B4CC;
}
.custom-nav a:hover{
    color: #00B4CC;
}
.custom1-nav{
    background-color: #00B4CC;
}
.custom1-nav a{
    color: white;
}
.custom1-nav :hover{
    background-color: #00B4CC;
    
}
.custom1-nav a:hover{
    color: white;
}
/* Heading Section Styles */
.bg-heading {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    min-height: 70vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
    background-image: linear-gradient(hsla(187, 100%, 40%, 0.2), hsla(187, 100%, 40%, 0.7)), url('./images/backkimge.jpg');
}

.bg-heading h1 {
    font-size: 55px;
    margin: 0;
}

/* Sidebar Styles */
.bar {
    background-color: #f8f9fa; /* Background color for the sidebar */
    padding: 20px;
}

.bar h1 {
    font-size: 24px;
    font-weight: bold; /* Make the header text bold */
    color: #00B4CC;
}

.bar ul {
    list-style: none; /* Remove default list bullets */
    padding: 0;
    font-weight:bold;
}

.bar .nav-link {
    font-size: 16px;
    color:black; /* Default link color */
    margin-bottom: 0; /* Remove the space between sidebar items */
    text-decoration: none; /* Remove underline from links */
    display: block; /* Make links full width within the sidebar */
    padding: 1.5px ; /* Add some vertical padding to links */
}

.bar .nav-link.active {
    color:black; /* Active link color */
    font-weight: bold; /* Make the active link text bold */
}

/* Style the hover effect for links */
.bar .nav-link:hover {
    color:#00B4CC; /* Change link color on hover */

}


.card {
    border: 1px solid #ddd;
    border-radius:8px;
    margin: 1px;
    padding:0px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    
}

.card-img-top {
    max-width: 100%;
    height: auto;
}

.card-title {
    font-size:18px;
    margin-bottom:5px;
}

.card-body {
    padding:10px;
}

.card-body a {

    text-decoration: none;
    font-weight: bold;
    color: #00B4CC;
    
}

.card a:hover {
    color:#ff4701; /* Change the color to your desired hover color */
}
/* Container styles */
#hero-section{
    /* Add any specific styles for the hero section if needed */
}

/* Responsive styles for smaller screens */
@media (max-width: 768px) {
    .col-md-4 {
        flex: 0 0 100%;
        max-width: 100%;
    }
}

/*looking--------------------*/
.bi-heading {
    background-image: linear-gradient(hsl(187, 100%, 40%,0.1),hsl(187, 100%, 40%,0.6)), url('./images/istockphoto-1413600764-612x612.jpg');

    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    min-height: 70vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
}

.bi-heading h1{
    font-size: 40px;
}
.bi-heading p{
    font-size:20px;
}
/* Button Link Styles */
.button-link {
    display: inline-block;
    background-color:#ff4701; 
    color: #fff;
    text-decoration: none; 
    padding: 10px 20px; 
    border-radius: 5px; 
    transition: background-color 0.3s ease; 
    height: 45px;
    font-weight:bold;
}

/* Button Link hover effect */
.button-link:hover {
    background-color: #00B4CC; 
}


/* Footer Styles */

/* Center-align text and add some padding to the footer */
.text-center {
    text-align: center;
    padding: 20px 0;
}

/* Style the "Follow Us" heading */
.text-center h5 {
    font-size: 18px;
    color: #333;
}

/* Style the social media icons in the footer */
.footer-social {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-social li {
    display: inline-block;
    margin-right: 10px;
    font-size: 24px;
}

.footer-social a {
    text-decoration: none;
    color: #007bff; /* Link color */
    transition: color 0.3s ease;
}

/* Change link color on hover */
.footer-social a:hover {
    color: #0056b3; /* Hovered link color */
}

/* Style the horizontal line */
hr {
    border-color: #ccc;
}

/* Style the footer links */
.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 10px;
}

.footer-links a {
    text-decoration: none;
    color:#00B4CC;
    transition: color 0.3s ease;
}

/* Change link color on hover */
.footer-links a:hover {
    color:#00B4CC; /* Hovered link color */
}

/* Style the copyright notice */
.footer-copyright {
    background-color: #f8f9fa;
    padding: 10px 0;
    text-align: center;
    font-size: 14px;
    color: #777;
}
  </style>


    
</head> 
<body>

    <!--------------------bacgorund image------------->
    <div class="bg-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Meet Our Doctor</h1>
                </div>
            </div>
        </div>
    </div>
      <br><br><br>
  

       <!----------------------section index page---------------------------->

<section class="index page">
      <!---------------------------side bar----------------------------->



      <div class="bar">

        <div class="container">
        
         <div class="row">
             
          <div class="col-sm-4">
        <h1>Filter By</h1>
        <ul class="nav flex-column">
          <!-- Sidebar navigation items -->
          <li class="nav-item">
              <a class="nav-link active " href="find doctor.htm">All</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="medical oncology.htm">Medical Oncolog
          </li>
          <li class="nav-item">
              <a class="nav-link " href="general surgery .htm">General Surgery
          </li>
         
          <li class="nav-item">
              <a class="nav-link " href="radiology.htm">Radiology</a>
          </li>
          <li class="nav-item">
              <a class="nav-link " href="Plastic Surgery .htm">Plastic Surgery
          </li>
          <li class="nav-item">
              <a class="nav-link " href="Urology.htm">Urology</a>
          </li>
          <li class="nav-item">
              <a class="nav-link  " href="Paeds.htm">Paeds</a>
          </li>
          <li class="nav-item">
              <a class="nav-link " href="Paedartic Surgery .htm">Paedartic Sur
          </li>
          <li class="nav-item">
              <a class="nav-link" href="Oral  .htm">Oral and maxillofocail</a>
          </li>
          <li class="nav-item">
              <a class="nav-link " href="Obstatricas and gynecology.htm">Obsta
          </li>
          <li class="nav-item">
              <a class="nav-link " href="ENT.htm">ENT</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="Ophthalmology.htm">Ophthalmology</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="Emergency.htm">Emergency</a>
          </li>
        
        
        </ul>
        
          </div>
         
         <!----------------cards------------------->
         
         
        <div class="col-lg-8">
        
        
          <section id="hero-section">
        
        
            <!-- Image and other content in the hero section -->
        
        
            <div class="row">
        
                <div class="col-12 d-flex justify-content-center align-items-center">
        
                    <!-- <img src="" alt="Contact" class="img-fluid"> -->
        
                </div>
        
            </div>
        
        </section>



        <!-- Other content sections, e.g., blog posts -->

<div class="row">

    <!----------------Card 01 --------------------->

    <div class="col-md-4">

        <div class="card mb-4">
            <img src="./images/avatar-inner.jpg " alt="Card Image 01" class="card-img-top">
            <div class="card-body">
                <h6 class="card-title">Consultant-Oncologist</h6>
             
                <a href="fareeha.htm">Dr. Fareeha Sheikh</a>
            </div>
        </div>
    </div>




    <!------------------ Card 02 ------------------->
    <div class="col-md-4">
        <div class="card mb-4">
            <img src="./images/Dr.-Kausar-.jpg" alt="Card Image 02" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Consultant-Oncologist</h5>
                
                <a href="kausar.htm">Dr. Kausar Bano</a>
            </div>
        </div>
    </div>




    <!-------------------- Card 03------------------- -->
    <div class="col-md-4">
        <div class="card mb-4">
            <img src="./images/avatar-inner.jpg" alt="Card Image 03" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Consultant Oncologist</h5>
               
                <a href="arif.htm">Dr. Muhammad Arif</a>
            </div>
        </div>
    </div>

<!------------------card 4---------------------->


<div class="col-md-4">

  <div class="card mb-4">
      <img src="./images/Dr.-Afsar-Ali-Bhatti.jpg" alt="Card Image 01" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">Consultant-Surgeon</h5>
       
          <a href="ali akbar.htm">Dr. Ali Akbar</a>
      </div>
  </div>
</div>




<!------------------ Card 05 ------------------->
<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/Dr.-Ali-Akbar-2.jpg" alt="Card Image 02" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">Consultant-Surgeon</h5>
          
          <a href="asfer.htm">Dr. Afsar Ali Bhatti</a>
      </div>
  </div>
</div>




<!-------------------- Card 06------------------- -->
<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/avatar-inner.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">Consultant-Surgeon</h5>
         
          <a href="kamran.htm">Dr.Kamran</a>
      </div>
  </div>
</div>

<!-------------------------------card 7------------------------>


<div class="col-md-4">

  <div class="card mb-4">
      <img src="./images/Dr.-Kiran-Sarfraz.jpg" alt="Card Image 01" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title"> Consultant-Surgeon</h5>
       
          <a href="kiran.htm">Dr. Kiran Sarfraz</a>
      </div>
  </div>
</div>




<!------------------ Card 08 ------------------->
<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/Dr.-Mahboob-Alam-2.jpg" alt="Card Image 02" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">Consultant-Surgeon</h5>
          
          <a href="mahboob.htm">Dr. Mahboob Alam</a>
      </div>
  </div>
</div>




<!-------------------- Card 09------------------- -->
<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/Dr.-Mansab-Ali.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">Consultant-Surgeon</h5>
         
          <a href="Mansab.htm">Dr. Mansab Ali</a>
      </div>
  </div>
</div>



<!---------------------10----------------------->


<div class="col-md-4">

  <div class="card mb-4">
      <img src="./images/avatar-inner.jpg" alt="Card Image 01" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">Radiologist</h5>
       
          <a href="ammar.htm">Dr. Ammar Sarwar</a>
      </div>
  </div>
</div>




<!------------------ Card 11------------------->
<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/Dr.-Iftikhar-.jpg" alt="Card Image 02" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">plastic surgeon</h5>
          
          <a href="iftikhar.htm">Dr. Iftikhar</a>
      </div>
  </div>
</div>




<!-------------------- Card 12------------------- -->
<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/avatar-inner.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">plastic surgeon</h5>
         
          <a href="imran shazad.htm">Dr. Imran Shahzad</a>
      </div>
  </div>
</div>

<!--------------card 13--------------->

<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/Dr.-Farooq-Tajamul-Khan-scaled-e1680259229698-600x600.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">plastic surgeon</h5>
         
          <a href="farooq.htm">Dr. Farooq khan</a>
      </div>
  </div>
</div>

<!----------------card 14-------------->
<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/avatar-inner.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title"> Urologist</h5>
         
          <a href="irfan.htm">Dr. Irfan </a>
      </div>
  </div>
</div>
<!----------------card 15------------->
<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/Dr.-Muhammad-Saleem-Akhtar-scaled-e1680260094490-600x600.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title"> Urologist</h5>
         
          <a href="saleem.htm">Dr Saleem</a>
      </div>
  </div>
</div>

<!------------------card 16------------>

<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/Dr.-Munir-.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title"> Urologist</h5>
         
          <a href="munir.htm">Dr. Munir</a>
      </div>
  </div>
</div>

<!---------------------card 17-------------->

<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/Dr.-Muhammad-Shahzad.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">Pediatric</h5>
         
          <a href="shazad.htm">Dr. Shahzad</a>
      </div>
  </div>
</div>
   
<!------------------card 18---------------------->

<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/Dr.-Shahid-Aslam.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">Pediatric</h5>
         
          <a href="sahid .htm">Dr. Shahid</a>
      </div>
  </div>
</div>
<!---------------card 19--------------->


<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/avatar-inner.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">Consultant Pediatric</h5>
         
          <a href="shazia.htm">Dr. Shazia </a>
      </div>
  </div>
</div>


<!-------------------card 20------------------->
<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/avatar-inner.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">Consultant Pediatric</h5>
         
          <a href="haider.htm">Dr. Haider </a>
      </div>
  </div>
</div>
<!-------------------card 21------------->

<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/Dr.-Gulraiz-Zulfiqar.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title"> Oral & Maxillofacial</h5>
         
          <a href="zulfiqar.htm">Dr.Zulfiqar </a>
      </div>
  </div>
</div>


<!-----------------------------card 22-------------->

<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/Dr.-Alia-Bashir.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">Consultant Gynecologist</h5>
         
          <a href="alia.htm"> Dr. Alia</a>
      </div>
  </div>

  
</div>
<!----------------------card 23---------->
<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/Dr.-Asma-Sarwat.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">Consultant Gynecologist</h5>
         
          <a href="asma.htm">Dr. Asma Sarwat</a>
      </div>
  </div>

  
</div>

<!------------------card 24------------>

<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/Dr-Huma-Arshad.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">Consultant Gynecologist</h5>
         
          <a href="huma.htm">Dr. Huma Arshad</a>
      </div>
  </div>

  
</div>
<!------------------card 25--------------------->

<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/avatar-inner.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">Ear, Nose, Throat</h5>
         
          <a href="imran.htm">Dr. Imran Saeed</a>
      </div>
  </div>


</div>

<!------------------card 26--------------------->

<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/dr.khurshid.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">Ear, Nose, Throat</h5>
         
          <a href="khurshid.htm">Dr. Khurshid Alam</a>
      </div>
  </div>


</div>

<!------------------card 27--------------------->


<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/dr.sarfarz.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">Ear, Nose, Throat</h5>
         
          <a href="sarfraz.htm">Dr. Sarfraz Latif</a>
      </div>
  </div>


</div>

<!------------------card 28--------------------->

<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/Dr.-Hamza-Ali-Tayyab.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">Consultant Ophthalmologist</h5>
         
          <a href="hamza.htm">Dr. Hamza Ali </a>
      </div>
  </div>


</div>

<!------------------card 29--------------------->

<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/Dr.-Muhammad-Hassaan-Ali.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">Consultant Ophthalmologist</h5>
         
          <a href="ali akbar.htm">Dr.Hassaan Ali</a>
      </div>
  </div>


</div>

<!------------------card 30--------------------->

<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/Dr.-Muhammad-Tayyab.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">Consultant Ophthalmologist</h5>
         
          <a href="tyyab.htm">Dr.Tayyab</a>
      </div>
  </div>


</div>

<!------------------card 31--------------------->

<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/Dr.-Anjum-Habib.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">Consultant Emergency</h5>
         
          <a href="anjum.htm">Dr. Anjum Habib</a>
      </div>
  </div>


</div>

<!------------------card 32--------------------->
<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/avatar-inner.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">Consultant Emergency</h5>
         
          <a href="attique.htm ">Dr. Attique</a>
      </div>
  </div>


</div>

<!------------------card 32--------------------->
<div class="col-md-4">
  <div class="card mb-4">
      <img src="./images/Dr.-Rizwan.jpg" alt="Card Image 03" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title">Consultant Emergency</h5>
         
          <a href="rizwan.htm">Dr. Rizwan</a>
      </div>
  </div>
</div>

</div>

</div>
   </div>
</div>
      </div>
  </div>
      </div>
</div>


<br><br><br>





</section>


      
      
<!------------------------------------------->
      </div>
       </div>
      
         </div>
      
         </div>
      
           </div>
      
             </div>
      
                 </div>
      
                     </div>
         <br><br><br>
   
</section>

<!----------------------------------looking-------------------------->

<div class="looking">

      
     <div class="bi-heading">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <h1>Looking for Pediatric Care?</h1>
                  <p>The Pediatric Center at Doctors Hospital & Medical Center is among best in the country</p>

                  <a href="#" class="button-link">Find doctor</a>


              </div>
          </div>
      </div>
  </div>
    
   
</div>
<br><br><br>


<!-------------footer----------------------------------------------------------------->
@endSection

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
  crossorigin="anonymous"></script>
</body>
</html>
