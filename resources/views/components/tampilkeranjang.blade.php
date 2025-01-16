      @php

          use App\Models\Barang;
          // use App\Models\User; = sudah digunakan diatas
          use App\Models\chart;

          $barang = Barang::all();

          $user = Auth::user();
          $userid = $user->id;

          $count = chart::where('user_id',$userid)->count();

      @endphp

      {{-- <script>

        document.addEventListener('DOMContentLoaded', function() {
            // Fungsi untuk menangani klik pada tombol
            function setupItem(id) {
                var tambahButton = document.getElementById('tambahButton-' + id);
                var kurangButton = document.getElementById('kurangButton-' + id);
                var hargaElement = document.getElementById('harga-' + id);
                var hargaAwalElement = document.getElementById('hargaAwal-' + id);
                var countElement = document.getElementById('count-' + id);

                // Ambil harga awal dari data atribut tombol
                var hargaAwal = parseInt(tambahButton.getAttribute('data-harga'));

                // Inisialisasi harga total berdasarkan jumlah
                var count = parseInt(countElement.textContent);
                var totalHarga = hargaAwal * count;

                // Update tampilan harga awal

                function updateTotalHarga() {
                  hargaElement.textContent = new Intl.NumberFormat('id-ID').format(totalHarga);
                }

                // Tambahkan event listener untuk klik pada tombol tambah
                tambahButton.addEventListener('click', function() {
                    count += 1;
                    totalHarga = hargaAwal * count;

                    // Update tampilan jumlah dan total harga
                    countElement.textContent = count;
                    updateTotalHarga();
                });

                // Tambahkan event listener untuk klik pada tombol kurang
                kurangButton.addEventListener('click', function() {
                    if (count > 1) { // Cek untuk memastikan jumlah tidak kurang dari 1
                        count -= 1;
                        totalHarga = hargaAwal * count;

                        // Update tampilan jumlah dan total harga
                        countElement.textContent = count;  
                        updateTotalHarga();
                    }
                });
            }

            // Loop untuk setup setiap item
            @foreach($cart as $item)
                setupItem({{ $item->id }});
            @endforeach
        });
        
      </script> --}}


<x-template.main>
    <div class="col-lg-12 mb-lg-0 mb-3 container-fluid py-4">
    <h3 class="font-weight-bolder">Keranjang Belanja</h3>
    <div class="col-lg-6 col-7 mt-2">
      <a href="{{ route('barang.index') }}"><p style="font-size:20px;" class="text-dark">{{ __(' < Kembali') }}</p></a>
    </div>
    @if ($count == 0)
      <h4 class="mt-4 text-center">Keranjangnya masih kosong nih!</h4>
    @endif
    @foreach ($cart as $item)
      <div class="card mt-3">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-lg-3 mt-3 col-sm-3">
              <div class="d-flex flex-column h-100 container-fluid mb-4">
                <img class="border-radius-lg" src="{{asset('upload/'.$item->barang->photos)}}" width="70%" alt="">
              </div>
            </div>
            <div class="col-lg-3 col-sm-3">
              <div class="d-flex flex-column mt-4 h-100 container-fluid">
                <p class="text-dark pt-3" style="font-size:20px;">{{ $item->barang->nama_barang }} | Penyedia : {{ $item->barang->penyedia_barang }}</p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-3" style="">
              <div class="d-flex container-fluid">
                <p id="hargaAwal-{{ $item->id }}" class="text-dark font-weight-bolder pt-5" style="font-size:20px;">Rp.{{ number_format($item->barang->harga_barang, 0, ',', '.') }}</p>
              </div>
            </div>
            {{-- <div class="col-lg-2 col-sm-2">
              <div class="d-flex mb-3 mt-5 container-fluid">
                <button id="kurangButton-{{ $item->id }}" class="border-secondary bg-white" onclick="decrement()" data-harga="{{ $item->barang->harga_barang }}">-</button>&nbsp;&nbsp;
                  <span id="count-{{ $item->id }}">1</span>
                  &nbsp;&nbsp;
                <button id="tambahButton-{{ $item->id }}" class="border-secondary bg-white" onclick="increment()" data-harga="{{ $item->barang->harga_barang }}">+</button>
              </div>
            </div>
            <div class="col-lg-2 col-sm-2">
              <div class="d-flex container-fluid mt-3">
                <p class="text-dark pt-3 font-weight-bolder">{{ __('Total :') }}</p>
              </div>
              <div class="d-flex container-fluid mb-4">
                <p class="text-success font-weight-bolder" style="font-size:20px;">Rp.</p><p id="harga-{{ $item->id }}" class="text-success font-weight-bolder" style="font-size:20px;">{{ number_format($item->barang->harga_barang, 0, ',', '.') }}</p>
              </div>
            </div> --}}
          <div class="col-lg-3 col-sm-3">
                <div class="d-flex flex-column h-100 container-fluid mb-4">
                    <a href="{{ route('hapus',$item->id) }}"><button class="btn bg-gradient-danger mt-5">Hapus</button></a>
                    <a href="{{ route('checkout',$item->id) }}"><button class="btn bg-gradient-info">Checkout</button></a>  
                </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach  
    </div>
  </x-template.main>