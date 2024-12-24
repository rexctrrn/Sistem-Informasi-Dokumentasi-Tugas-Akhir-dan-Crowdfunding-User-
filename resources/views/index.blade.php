@extends('layouts.beranda')

@section('main-content')
<section class="content fw-bolder">
    <div class="container" data-aos="fade-up">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-3 mb-3">
          @include('components.filter')
        </div>
        <div class="col-lg-8">
          @foreach ($tugasAkhir as $data)
          <div class="card mb-4 card-shadow" style="border-radius: 15px;">
            <div class="ribbon">
                <span>Skripsi</span>
              </div>
            <div class="card-body p-4">
                <h5 class="fw-bolder mb-3 ">{{ $data->judul }}</h6>
                <span class="fw-medium ">{{ $data->penulis }}</span>
                <div class="fw-normal mb-5" style="text-align: justify">{!! \App\Helpers\TextHelper::excerpt(strip_tags($data->abstract), 75) !!}</div>
                <div class="row d-flex align-items-center">
                  <div class="col-7">
                    <p class="fw-bolder text-secondary" style="font-size: 12px; margin-bottom: 0px">{{ $data->prodi }} , {{ $data->tahun }}</p>
                  </div>
                  <div class="col-5 text-end">
                    <a href="{{ route('view', $data->id)}}" class="btn btn-dark btn-sm fw-bolder">Lihat Selengkapnya</a>
                  </div>
                </div>
            </div>
          </div>
          @endforeach
          
          <div class="d-flex">
            {!! $tugasAkhir->links() !!}
        </div>
        </div>
      </div>
    </div>
  </section>
  
  
@endsection