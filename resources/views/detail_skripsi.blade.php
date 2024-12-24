@extends('layouts.beranda')

@section('main-content')
  
<section class="content">
    <div class="container">
        <div class="row gy-4 d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="card px-2 card-shadow" style="border-radius: 5 px;">
                    <div class="card-header py-3 bg-white" style="border-radius: 15px 15px 0 0">
                      <div class="row">
                        <div class="col-6 fw-bolder text-secondary">
                          Detail Informasi
                        </div>
                        <div class="col-6 text-end">
                            <a class="btn-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <i class="bi-arrow-down fw-bolder text-dark"></i>
                              </a>
                        </div>
                      </div>
                    </div>
                    <div class="collapse show" id="collapseExample">
                        <div class="card-body p-3 collapse show">
                            <div class="tagger mt-2">
                                <i class="bi-tag fw-bolder"></i>
                                <span class="h5 fw-bolder mx-4">SKRIPSI</span>
                            </div>
                            <p class="h4 fw-bolder mb-4" style="text-align: justify">{{ $tugasAkhir->judul }}</p>
                            <hr class="">
                            <table>
                                <tr>
                                    <th class="py-3" style="width: 300px">Penulis</th>
                                    <td>{{ $tugasAkhir->penulis }}</td>
                                </tr>
                                <tr>
                                    <th class="py-3">Dosen Pembimbing 1</th>
                                    <td>{{ $tugasAkhir->pembimbing_1 }}</td>
                                </tr>
                                <tr>
                                    <th class="py-3">Dosen Pembimbing 2</th>
                                    <td>{{ $tugasAkhir->pembimbing_2 }}</td>
                                </tr>
                            </table>
                            <hr class="">
                            <!-- <div class="row">
                                <div class="col-4">
                                    <a href="#" class="btn btn-dark w-100 fw-bolder"><i class="bi-newspaper"></i> Full Text</a>
                                </div>
                                <div class="col-4">
                                    <a href="#" class="btn btn-dark w-100 fw-bolder"><i class="bi-bookmark"></i> Abstrak</a>
                                </div>
                                <div class="col-4">
                                    <a href="#" class="btn btn-dark w-100 fw-bolder"><i class="bi-printer"></i> Pemesanan versi cetak</a>
                                </div>
                            </div> -->
                            <hr class="">
                            <table>
                                <tr>
                                    <th class="py-3" style="width: 300px">Nomor Induk Mahasiswa</th>
                                    <td>{{ $tugasAkhir->nim }}</td>
                                </tr>
                                <tr>
                                    <th class="py-3">Program Studi</th>
                                    <td>{{ $tugasAkhir->prodi }}</td>
                                </tr>
                                <tr>
                                    <th class="py-3">Kata Kunci</th>
                                    <td>{{ $tugasAkhir->kata_kunci }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                  </div>
                    <div class="card px-2 mt-5 card-shadow" style="border-radius: 2 px;">
                        <div class="card-header py-3 bg-white" style="border-radius: 15px 15px 0 0">
                        <div class="row">
                            <div class="col-6 fw-bolder text-secondary">
                                Abstrak Indonesia
                            </div>
                            <div class="col-6 text-end">
                                <a class="btn-link" data-bs-toggle="collapse" href="#abstrak" role="button" aria-expanded="false" aria-controls="abstrak">
                                    <i class="bi-arrow-down fw-bolder text-dark"></i>
                                </a>
                            </div>
                        </div>
                        </div>
                        <div class="collapse" id="abstrak">
                            <div class="card-body p-3 collapse show">
                                {!! $tugasAkhir->abstract !!}

                                <p class="mt-2 mb-5">Kata Kunci : {{ $tugasAkhir->kata_kunci }}.</p>
                            </div>
                        </div>
                    </div>
                    
            </div>
            <div class="col-lg-3">
                <div class="card px-2 mb-3 card-shadow" style="border-radius: 15px;">
                    <div class="card-body">
                        <label for="" class="fw-bold mb-2">Detail Cantuman</label>
                        <a href="#" id="btn-download" class="btn btn-dark fw-bolder">Download </a>
                    </div>
                </div>
                {{-- @include('components.filter') --}}
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="modal-download" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Download Tugas Akhir</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <input type="number" name="amount" id="donate_amount" class="form-control w-100" minlength="10000">
                <p class="text-center" style="font-size: 9px;">Masukkan jumlah donasi </p>
                <button class="btn btn-dark fw-bolder" id="button_donate">Download / Donasi</button>
            </div>
            
        </div>
    </div>
  </div>
  
@endsection


@section('script')
    <script>
      $("#button_donate").click(async function(){
        var hash = {!! json_encode($tugasAkhir->id) !!};

        var fileDownload = "http://127.0.0.1:8080/api/request/download/" + hash + "/simulation";
        // window.open(fileDownload, '_blank');

        await $.post("http://127.0.0.1:8080/api/request/qr-code",
        {
          amount: $("#donate_amount").val(),
        },
        function(data, status){
          console.log(data);
          window.open(data, '_blank');

          fetch(fileDownload)
        .then(response => response.blob())
        .then(blob => {
            var url = window.URL.createObjectURL(blob);
            var a = document.createElement('a');
            a.style.display = 'none';
            a.href = url;
            document.body.appendChild(a);
            a.click();
            window.URL.revokeObjectURL(url);
        })
        .catch(err => console.error('Download failed:', err));
        });
        
        
      });
    </script>
@endsection