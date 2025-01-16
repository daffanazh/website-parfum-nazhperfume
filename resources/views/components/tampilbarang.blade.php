
    <script>

      document.addEventListener('DOMContentLoaded', function() {
          var itemId = {{ $show->id }};
          var tambahButton = document.getElementById('tambahButton-' + itemId);
          var kurangButton = document.getElementById('kurangButton-' + itemId);
          var hargaElement = document.getElementById('harga-' + itemId);
          var countElement = document.getElementById('count-' + itemId);
      
          var hargaAwal = parseInt(tambahButton.getAttribute('data-harga')) || 0;
          var count = parseInt(countElement.textContent) || 1;
          var totalHarga = hargaAwal * count;
      
          // Update harga pada halaman
          function updateTotalHarga() {
              hargaElement.textContent = new Intl.NumberFormat('id-ID').format(totalHarga);
          }
      
          // Event listener untuk tombol tambah
          tambahButton.addEventListener('click', function() {
              count += 1;
              totalHarga = hargaAwal * count;
      
              // Update tampilan jumlah dan total harga
              countElement.textContent = count;
              updateTotalHarga();
          });
      
          // Event listener untuk tombol kurang
          kurangButton.addEventListener('click', function() {
              if (count > 1) {
                  count -= 1;
                  totalHarga = hargaAwal * count;
      
                  // Update tampilan jumlah dan total harga
                  countElement.textContent = count;
                  updateTotalHarga();
              }
          });
      
          // Inisialisasi harga total pada saat halaman dimuat
          updateTotalHarga();
      });
      
    </script>
  
  

<x-template.main>
  <div class="col-lg-12 mb-lg-0 mb-3 container-fluid py-4">
    <div class="col-lg-6 col-7 mt-2">
      <a href="{{ route('barang.index') }}"><p style="font-size:20px;" class="text-dark">{{ __(' < Kembali') }}</p></a>
    </div>
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-lg-6 col-sm-12">
            <div class="d-flex flex-column h-100 container-fluid mb-4">
              <img class="border-radius-lg" src="{{asset('upload/'.$show->photos)}}" width="100%" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-sm-12">
            <div class="d-flex flex-column h-100 container-fluid mb-4">
              <div class=" z-index-2">
                <div class="card-body p-3">
                  <h3>Parfume - {{$show->nama_barang}} Extrait de Parfum</h6>
                  <p class="text-sm">
                    <i class="fa fa-arrow-up text-success"></i>
                    <span class="font-weight-bold">30% lebih harum </span>
                  </p>
                </div>
                <div class="card-body p-3" style="margin-top: -10px;">
                  <p>Rp.{{$show->deskripsi_barang}}</p>
                </div>
                <div class="card-body p-3" style="margin-top: -15px;">
                  <h3>Rp.{{ number_format($show->harga_barang, 0, ',', '.') }}</h3>
                </div>
                <div class="card-body p-3">
                  <h5>Jumlah Barang :</h5>
                  <div class="d-flex mb-3 mt-3">
                      <button id="kurangButton-{{ $show->id }}" class="border-secondary bg-white" data-harga="{{ $show->harga_barang }}">-</button>&nbsp;&nbsp;
                      <span id="count-{{ $show->id }}">1</span>&nbsp;&nbsp;
                      <button id="tambahButton-{{ $show->id }}" class="border-secondary bg-white" data-harga="{{ $show->harga_barang }}">+</button>
                  </div>
                  <div class="d-flex">
                      <h3 style="margin-top: 40px;" class="font-weight-bolder">{{ __('Total :') }}</h3>
                  </div>
                  <div class="d-flex">
                      <h3 class="text-success font-weight-bolder">Rp.</h3>
                      <h3 id="harga-{{ $show->id }}" class="text-success font-weight-bolder">{{ number_format($show->harga_barang * ($cartItem ? $cartItem->jumlah : 1), 0, ',', '.') }}</h3>
                  </div>
                </div>
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-lg-6 col-sm-6">
                      <div class="d-flex mb-3 mt-3">
                        <button name="checkout" class="btn bg-gradient-info">Checkout</button>&nbsp;&nbsp;
                        <a href="{{route('tambahkeranjang',$show->id)}}"><button class="btn bg-gradient-warning">Keranjang</button></a>
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
  </div>
</x-template.main>