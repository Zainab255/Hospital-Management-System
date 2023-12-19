<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Mission</title>
  <style>
    body {
      background-image: url("doctor.png");
      background-size: cover;
      color: white;
    }
    .mission-card {
      background-color: white; /* White background for cards */
      color: #333; /* Dark text color */
      margin: 20px;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .mission-heading {
      color: #ffff; /* Grey color for headings */
    }
    .mission-title {
      font-size: 24px;
      margin-bottom: 10px;
    }
    .mission-description {
      font-size: 16px;
    }
    .text-center {  
     color: #1d4851;
    }
  </style>
</head>
<body>
  @extends('layouts._layout')
  @section('content')
  <div class="container">
    <h1 class="text-center my-4"><B>MEDICAL HAVEN</B></h1>
    <h2 class="text-center my-4 mission-heading">OUR MISSION</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="mission-card">
          <h3 class="mission-title">Exceptional Patient Care</h3>
          <p class="mission-description">Our mission is to provide exceptional and compassionate patient care by prioritizing individual needs, offering personalized treatment plans, and maintaining the highest standards of medical excellence.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mission-card">
          <h3 class="mission-title">Advancement Through Innovation</h3>
          <p class="mission-description">At Medical Haven, we are dedicated to advancing medical science through continuous innovation. Our mission is to explore new treatment methods, techniques, and technologies to improve patient outcomes.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mission-card">
          <h3 class="mission-title">Empowerment Through Education</h3>
          <p class="mission-description">Our Mission extends beyond healthcare to empower our patients and community through health education. We believe that informed individuals are better equipped to make positive health decisions.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mission-card">
          <h3 class="mission-title">Community Well-Being</h3>
          <p class="mission-description">Community well-being is at the heart of our mission. We are committed to actively engaging with our community, promoting preventive care, and contributing to the overall health and happiness of the people we serve.</p>
        </div>
      </div>
    </div>
  </div>
  @endSection
</body>
</html>