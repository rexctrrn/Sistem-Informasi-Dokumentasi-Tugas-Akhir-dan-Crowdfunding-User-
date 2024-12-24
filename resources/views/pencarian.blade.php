@extends('layouts.beranda')

@section('main-content')
<section class="content fw-bolder">
    <div class="container" data-aos="fade-up">
      <div class="row d-flex justify-content-center">
        
        <div class="col-lg-8">
          <div class="card mb-4" style="border-radius: 15px;">
            <div class="ribbon">
                <span>Skripsi</span>
              </div>
            <div class="card-body p-4">
                <h5 class="fw-bolder mb-3 ">PENGARUH KEBIJAKAN DIVIDEN, PRICE EARNING RATIO (PER) DAN DEBT TO EQUITY RATIO (DER) TERHADAP HARGA SAHAM (STUDI EMPIRIS PADA PERUSAHAAN MANUFAKTUR YANG TERDAFTAR DI BURSA EFEK INDONESIA TAHUN 2006-2008)</h6>
                <span class="fw-medium ">Ebru Hajayati,</span>
                <p  class="fw-normal mb-5" style="text-align: justify">Harga Saham merupakan nilai suatu saham yang mencerminkan kekayaan perusahaan yang mengeluarkan saham tesebut, dimana perubahan atau fluktuasinya sangat ditentukan oleh kekuatan penawaran dan permintaan yang terjadi di pasar bursa. Ada beberapa faktor yang dapat mempengaruhi Harga saham, diantaranya yaitu Kebijakan Dividen, Price Earning Ratio, dan Debt to Equity Ratio. Oleh karena itu penelitian ini bertujuan untuk mengetahui dan menguji secara empiris . . . .</p>
                <div class="row d-flex align-items-center">
                  <div class="col-7">
                    <p class="fw-bolder text-secondary" style="font-size: 12px; margin-bottom: 0px">Fakultas Ekonomi dan Bisnis Akuntansi (S1) , Banda Aceh - 2024</p>
                  </div>
                  <div class="col-5 text-end">
                    <a href="#" class="btn btn-dark btn-sm fw-bolder">Lihat Selengkapnya</a>
                  </div>
                </div>
            </div>
          </div>
          <div class="card mb-4" style="border-radius: 15px;">
            <div class="ribbon">
                <span>Skripsi</span>
              </div>
            <div class="card-body p-4">
                <h5 class="fw-bolder mb-3 ">PENGARUH KEBIJAKAN DIVIDEN, PRICE EARNING RATIO (PER) DAN DEBT TO EQUITY RATIO (DER) TERHADAP HARGA SAHAM (STUDI EMPIRIS PADA PERUSAHAAN MANUFAKTUR YANG TERDAFTAR DI BURSA EFEK INDONESIA TAHUN 2006-2008)</h6>
                <span class="fw-medium ">Ebru Hajayati,</span>
                <p  class="fw-normal mb-5" style="text-align: justify">Harga Saham merupakan nilai suatu saham yang mencerminkan kekayaan perusahaan yang mengeluarkan saham tesebut, dimana perubahan atau fluktuasinya sangat ditentukan oleh kekuatan penawaran dan permintaan yang terjadi di pasar bursa. Ada beberapa faktor yang dapat mempengaruhi Harga saham, diantaranya yaitu Kebijakan Dividen, Price Earning Ratio, dan Debt to Equity Ratio. Oleh karena itu penelitian ini bertujuan untuk mengetahui dan menguji secara empiris . . . .</p>
                <div class="row d-flex align-items-center">
                  <div class="col-7">
                    <p class="fw-bolder text-secondary" style="font-size: 12px; margin-bottom: 0px">Fakultas Ekonomi dan Bisnis Akuntansi (S1) , Banda Aceh - 2024</p>
                  </div>
                  <div class="col-5 text-end">
                    <a href="#" class="btn btn-dark btn-sm fw-bolder">Lihat Selengkapnya</a>
                  </div>
                </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 mb-3">
          <div class="card px-2" style="border-radius: 15px;">
            <div class="card-header py-3 bg-white" style="border-radius: 15px 15px 0 0">
              <div class="row">
                <div class="col-6">
                  Filters
                </div>
                <div class="col-6 text-end">
                    <a class="btn-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <i class="bi-sliders fw-bolder text-dark"></i>
                      </a>
                </div>
              </div>
            </div>
            <div class="collapse show" id="collapseExample">
                <div class="card-body collapse show">
                 <form action="{{ url('/pencarian') }}" class="fw-normal">
                  <label for="" class="fw-bold mb-2">Jenis Akses</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jns_akses" id="jns_akses1">
                    <label class="form-check-label" for="jns_akses1">
                      Semua
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jns_akses" id="jns_akses2">
                    <label class="form-check-label" for="jns_akses2">
                      FullText
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jns_akses" id="jns_akses3">
                    <label class="form-check-label" for="jns_akses3">
                      Parsial
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jns_akses" id="jns_akses4">
                    <label class="form-check-label" for="jns_akses4">
                      Embargo
                    </label>
                  </div>
                  <hr>
                  <label for="" class="fw-bold mb-2">Pencarian</label>
                  <hr>
                  <label for="" class="fw-bold mb-2">Kategori</label>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="kategori1">
                    <label class="form-check-label" for="kategori1">
                      Karya Kerja Ilmiah
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="kategori2">
                    <label class="form-check-label" for="kategori2">
                      Laporan Kerja Praktek
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="kategori3">
                    <label class="form-check-label" for="kategori3">
                      Theses
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="kategori4">
                    <label class="form-check-label" for="kategori4">
                      Skripsi
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="kategori5">
                    <label class="form-check-label" for="kategori5">
                      Disertation
                    </label>
                  </div>
                  <hr>
                  <label for="" class="fw-bold mb-2">Tahun Terbit</label>
                  <select class="tahun_terbit form-control w-100" name="tahun_terbit">
                    <option value="" selected disabled>Pilih Tahun</option>
                    @for ($i = 2001; $i <= date('Y'); $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                  </select>
                  <button class="btn btn-primary btn-block w-100 my-3 fw-bolder">Terapkan</button>
                 </form>
                </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  
  
@endsection