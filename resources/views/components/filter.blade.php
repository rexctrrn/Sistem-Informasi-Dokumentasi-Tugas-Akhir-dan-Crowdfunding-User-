<div class="card px-2 card-shadow" style="border-radius: 15px;">
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
         <form action="{{ route('index') }}" class="fw-normal">
          <label for="" class="fw-bold mb-2">Tahun Terbit</label>
          <select class="tahun_terbit form-control w-100" name="year">
            <option value="" selected disabled>Pilih Tahun</option>
            @for ($i = 2022; $i <= date('Y'); $i++)
            <option value="{{ $i }}">{{ $i }}</option>
            @endfor
          </select>
          <button class="btn btn-primary btn-block w-100 my-3 fw-bolder">Terapkan</button>
         </form>
        </div>
    </div>
  </div>