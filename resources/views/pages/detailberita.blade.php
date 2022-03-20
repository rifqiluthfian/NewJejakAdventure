@extends('layouts.app')
@section('tittle')
Detail Berita
@endsection
@section('content')
        <!-- detailheader -->
        <main class="details-header">
            <section class="section-details-header">
            </section>
            <section class="section-details-content">
              <div class="container">
                <div class="row">
                  <div class="col-sm-d-none p-0">
                    <nav>
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item-berita active">
                          Details
                        </li>
                      </ol>
                    </nav>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-lg-10 pl-lg-0">
                    <div class="row">
                      <div class="col border-right text-center">
                        <img src="{{url('frontend/images/berita-bromo.png')}}" width="500" alt="">
                      </div>
                      <div class="col-lg-4">
                        <p>Maret 08 12 2000</p><br>
                        <h1>Wisata Gunung Bromo Telah Dibuka Kembali</h1>
                      </div>
                    </div>
                  </div>
  
                </div>
              </div>
            </section>
          </main>
          <!-- tutupdetailheader -->
  
          <main class="container content-berita">
            <p>
              What is Lorem Ipsum?
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
               standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
                including versions of Lorem Ipsum.
            </p>
            <p>
              What is Lorem Ipsum?
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
               standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
                including versions of Lorem Ipsum.
            </p>
            <p>
              What is Lorem Ipsum?
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
               standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
                including versions of Lorem Ipsum.
            </p>
          </main>
  
@endsection