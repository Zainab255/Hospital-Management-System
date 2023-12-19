@extends('layouts._layout')
@section('content')

<head>
 <style>
     
/* Portfolio */

#hello{
  color: #00B4CC;
  text-align: center;
}

#portfolio{
  margin-top: 80px;
}


.portfolio .portfolio-item {
  margin-bottom: 30px;
}

.portfolio #portfolio-flters {
  padding: 0;
  margin: 0 auto 35px auto;
  list-style: none;
  text-align: center;
  background: #fff;
  border-radius: 50px;
  padding: 2px 15px;
}

.portfolio #portfolio-flters li {
  cursor: pointer;
  display: inline-block;
  padding: 10px 15px 8px 15px;
  font-size: 14px;
  font-weight: 600;
  line-height: 1;
  text-transform: uppercase;
  color: #272829;
  margin-bottom: 5px;
  transition: all 0.3s ease-in-out;
}

.portfolio #portfolio-flters li:hover,
.portfolio #portfolio-flters li.filter-active {
  color: #FF4701;
}

.portfolio #portfolio-flters li:last-child {
  margin-right: 0;
}

.portfolio .portfolio-wrap {
  transition: 0.3s;
  position: relative;
  overflow: hidden;
  z-index: 1;
}

.portfolio .portfolio-wrap::before {
  content: "";
  background: rgba(255, 255, 255, 0.5);
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  transition: all ease-in-out 0.3s;
  z-index: 2;
  opacity: 0;
}

.portfolio .portfolio-wrap .portfolio-links {
  opacity: 1;
  left: 0;
  right: 0;
  bottom: -60px;
  z-index: 3;
  position: absolute;
  transition: all ease-in-out 0.3s;
  display: flex;
  justify-content: center;
}

.portfolio .portfolio-wrap .portfolio-links a {
  color: #fff;
  font-size: 28px;
  text-align: center;
  background: rgba(20, 157, 221, 0.75);
  transition: 0.3s;
  width: 50%;
}

.portfolio .portfolio-wrap .portfolio-links a:hover {
  background: rgba(20, 157, 221, 0.95);
}

.portfolio .portfolio-wrap .portfolio-links a+a {
  border-left: 1px solid #37b3ed;
}

.portfolio .portfolio-wrap:hover::before {
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 1;
}

.portfolio .portfolio-wrap:hover .portfolio-links {
  opacity: 1;
  bottom: 0;
}

/*--------------------------------------------------------------
# Portfolio Details
--------------------------------------------------------------*/
.portfolio-details {
  padding-top: 40px;
}

.portfolio-details .portfolio-details-slider img {
  width: 100%;
}

.portfolio-details .portfolio-details-slider .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid #149ddd;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #149ddd;
}

.portfolio-details .portfolio-info {
  padding: 30px;
  box-shadow: 0px 0 30px rgba(5, 13, 24, 0.08);
}

.portfolio-details .portfolio-info h3 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #eee;
}

.portfolio-details .portfolio-info ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.portfolio-details .portfolio-info ul li+li {
  margin-top: 10px;
}

.portfolio-details .portfolio-description {
  padding-top: 30px;
}

.portfolio-details .portfolio-description h2 {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 20px;
}

.portfolio-details .portfolio-description p {
  padding: 0;
}


</style>
</head>
<body>
  <!-- ======= body ======= -->
  <section id="portfolio" class="portfolio section-bg">
    <div class="container">

      <div class="section-title">
        <h2 id="hello">Our LABOURITIES</h2>
        <p>Laboratory services are a cornerstone of any hospital's diagnostic and treatment capabilities. These facilities are equipped with state-of-the-art technology and staffed by skilled professionals who play a critical role in patient care. The laboratory encompasses various departments, each specializing in different aspects of medical testing and analysis.</p>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">MRI</li>
            <li data-filter=".filter-card">CT Scan</li>
            <li data-filter=".filter-web">UltraSound</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="surgery/5.jpg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="surgery/5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"></a>
              <a href="portfolio-details.html" title="More Details"></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="surgery/9.jpg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="surgery/9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"></a>
              <a href="portfolio-details.html" title="More Details"></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="surgery/2.jpg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="surgery/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"></a>
              <a href="portfolio-details.html" title="More Details"></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="surgery/5.jpg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="surgery/5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"></a>
              <a href="portfolio-details.html" title="More Details"></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="surgery/8.jpg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="surgery/8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"></a>
              <a href="portfolio-details.html" title="More Details"></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="surgery/4.jpg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="surgery/4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"></a>
              <a href="portfolio-details.html" title="More Details"></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="surgery/7.jpg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="surgery/7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"></a>
              <a href="portfolio-details.html" title="More Details"></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="surgery/8.jpg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="surgery/8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"></a>
              <a href="portfolio-details.html" title="More Details"></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="surgery/6.jpg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="surgery/6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"></a>
              <a href="portfolio-details.html" title="More Details"></a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->





     <!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Datepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<!-- ---------------------------------------------------------------------------------------------------------------------------- -->
<!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<!-- Include Isotope library for filtering -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

<!-- Include Magnific Popup library for lightbox -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script>
$(document).ready(function() {
  // Initialize Isotope for filtering
  var $grid = $('.portfolio-container').isotope({
    itemSelector: '.portfolio-item',
    layoutMode: 'fitRows'
  });

  // Filter items on button click
  $('#portfolio-flters li').on('click', function() {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });

    // Highlight the active filter button
    $('#portfolio-flters li').removeClass('filter-active');
    $(this).addClass('filter-active');
  });

  // Initialize Magnific Popup for lightbox
  $('.portfolio-lightbox').magnificPopup({
    type: 'image',
    gallery: { enabled: true }
  });
});
</script>
</body>
@endSection


    
    
    