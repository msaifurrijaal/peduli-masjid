@extends('layouts.main')

@section('container')
<div class="container-fluid">
    <div class="container jumbotron mb-5">
        <div class="row mt-5">
            <div class="col-6 row align-items-center">
                <h2 class="" style="color: #3D8361; font-weight:bold;">SILAHKAN PILIH<br>METODE PEMBAYARAN</h2>
            </div>
            <div class="col-6 d-none d-md-block">
                <div class="text-center">
                    <img style="height: 350px; width:350px;" src="/img/asetDonasi.png" alt="">
                </div>
            </div>
        </div>
    </div>

    {{--  Payment  --}}
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Container wrapper -->
            <div class="container-fluid">
              <!-- Toggle button -->
              <button class="navbar-toggler px-0" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarExample1" aria-controls="navbarExample1" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
              </button>
          
              <!-- Collapsible wrapper -->
              <div class="collapse navbar-collapse" id="navbarExample1">
                <!-- Left links -->
                <ul class="navbar-nav me-auto ps-lg-0" style="padding-left: 0.15rem">
                  <!-- Navbar dropdown -->
                  <li class="nav-item dropdown position-static">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-mdb-toggle="dropdown" aria-expanded="false">
                      BANK
                    </a>
                    <!-- Dropdown menu -->
                    <div class="dropdown-menu w-100 mt-0" aria-labelledby="navbarDropdown" style="
                                    border-top-left-radius: 0;
                                    border-top-right-radius: 0;
                                  ">
                      <div class="container">
                        <div class="row my-4">
                          <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                            <div class="list-group list-group-flush">
                              <a href="" class="list-group-item list-group-item-action">Lorem ipsum</a>
                              <a href="" class="list-group-item list-group-item-action">Dolor sit</a>
                              <a href="" class="list-group-item list-group-item-action">Amet consectetur</a>
                              <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                              <a href="" class="list-group-item list-group-item-action">Adipisicing elit</a>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                            <div class="list-group list-group-flush">
                              <a href="" class="list-group-item list-group-item-action">Explicabo voluptas</a>
                              <a href="" class="list-group-item list-group-item-action">Perspiciatis quo</a>
                              <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                              <a href="" class="list-group-item list-group-item-action">Laudantium maiores</a>
                              <a href="" class="list-group-item list-group-item-action">Provident dolor</a>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                            <div class="list-group list-group-flush">
                              <a href="" class="list-group-item list-group-item-action">Iste quaerato</a>
                              <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                              <a href="" class="list-group-item list-group-item-action">Est iure</a>
                              <a href="" class="list-group-item list-group-item-action">Praesentium</a>
                              <a href="" class="list-group-item list-group-item-action">Laboriosam</a>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-3">
                            <div class="list-group list-group-flush">
                              <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                              <a href="" class="list-group-item list-group-item-action">Saepe</a>
                              <a href="" class="list-group-item list-group-item-action">Vel alias</a>
                              <a href="" class="list-group-item list-group-item-action">Sunt doloribus</a>
                              <a href="" class="list-group-item list-group-item-action">Cum dolores</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <!-- Left links -->
              </div>
              <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
          </nav>
    </div>
    {{--  dropdown kedua  --}}
    <br>
    <br>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Container wrapper -->
            <div class="container-fluid">
              <!-- Toggle button -->
              <button class="navbar-toggler px-0" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarExample1" aria-controls="navbarExample1" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
              </button>
          
              <!-- Collapsible wrapper -->
              <div class="collapse navbar-collapse" id="navbarExample1">
                <!-- Left links -->
                <ul class="navbar-nav me-auto ps-lg-0" style="padding-left: 0.15rem">
                  <!-- Navbar dropdown -->
                  <li class="nav-item dropdown position-static">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-mdb-toggle="dropdown" aria-expanded="false">
                      E-WALLET
                    </a>
                    <!-- Dropdown menu -->
                    <div class="dropdown-menu w-100 mt-0" aria-labelledby="navbarDropdown" style="
                                    border-top-left-radius: 0;
                                    border-top-right-radius: 0;
                                  ">
                      <div class="container">
                        <div class="row my-4">
                          <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                            <div class="list-group list-group-flush">
                              <a href="" class="list-group-item list-group-item-action">Lorem ipsum</a>
                              <a href="" class="list-group-item list-group-item-action">Dolor sit</a>
                              <a href="" class="list-group-item list-group-item-action">Amet consectetur</a>
                              <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                              <a href="" class="list-group-item list-group-item-action">Adipisicing elit</a>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                            <div class="list-group list-group-flush">
                              <a href="" class="list-group-item list-group-item-action">Explicabo voluptas</a>
                              <a href="" class="list-group-item list-group-item-action">Perspiciatis quo</a>
                              <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                              <a href="" class="list-group-item list-group-item-action">Laudantium maiores</a>
                              <a href="" class="list-group-item list-group-item-action">Provident dolor</a>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                            <div class="list-group list-group-flush">
                              <a href="" class="list-group-item list-group-item-action">Iste quaerato</a>
                              <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                              <a href="" class="list-group-item list-group-item-action">Est iure</a>
                              <a href="" class="list-group-item list-group-item-action">Praesentium</a>
                              <a href="" class="list-group-item list-group-item-action">Laboriosam</a>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-3">
                            <div class="list-group list-group-flush">
                              <a href="" class="list-group-item list-group-item-action">Cras justo odio</a>
                              <a href="" class="list-group-item list-group-item-action">Saepe</a>
                              <a href="" class="list-group-item list-group-item-action">Vel alias</a>
                              <a href="" class="list-group-item list-group-item-action">Sunt doloribus</a>
                              <a href="" class="list-group-item list-group-item-action">Cum dolores</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <!-- Left links -->
              </div>
              <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
          </nav>
    </div>
</div>
@endsection