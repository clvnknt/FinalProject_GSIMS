@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <br>
<div class="row justify-content-center">
            <div class="container-fluid px-4">
            <div class="p-3 mb-2 bg-dark text-white col-md-20">  
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">What's to see here?</li>
                        </ol>
                        <div class="row">
                        <div class="card text-white bg-black mb-3">
                                <img class="card-img-top" src="images/header.png" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Welcome to GameStar Inventory System</h5>
                                                    <p class="card-text">This is the GameStar's Inventory System. Create, Edit, and Organize the store's inventory.</p>
                                                    <p class="card-text"><small class="text-muted">You can start working now. :)</small></p>
                            </div>
                                    </div>
             </div>
             </div>
             </div>
             </div>
             <br>
             <br>

<div class="row justify-content-center">
            <div class="container-fluid px-4">
            <div class="p-3 mb-2 bg-dark text-white col-md-20">  
             <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/organize.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/config.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/create.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/organize.png" alt="Fourth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
@endsection