

      


<x-template.main>


    <script>
      document.addEventListener('DOMContentLoaded', function () {
          // Fungsi untuk format angka menjadi format rupiah
          function formatRupiah(angka) {
              return new Intl.NumberFormat('id-ID', {
                  style: 'currency',
                  currency: 'IDR',
              }).format(angka).replace('IDR', '');
          }

          // Fungsi untuk mengupdate jumlah dan harga
          function updateTotal(id, hargaBarang, jumlah) {
              var totalHarga = hargaBarang * jumlah;

              // Mengupdate elemen jumlah barang
              document.getElementById('count-' + id).textContent = jumlah;

              // Mengupdate elemen total harga dengan format rupiah
              document.getElementById('harga-' + id).textContent = formatRupiah(totalHarga);
          }

          // Fungsi untuk menambah jumlah barang
          function increment(event) {
              var id = event.target.id.split('-')[1];
              var hargaBarang = parseInt(event.target.getAttribute('data-harga'));
              var jumlahElement = document.getElementById('count-' + id);
              var jumlah = parseInt(jumlahElement.textContent);

              // Menambah jumlah barang
              jumlah += 1;

              // Memperbarui total
              updateTotal(id, hargaBarang, jumlah);
          }

          // Fungsi untuk mengurangi jumlah barang
          function decrement(event) {
              var id = event.target.id.split('-')[1];
              var hargaBarang = parseInt(event.target.getAttribute('data-harga'));
              var jumlahElement = document.getElementById('count-' + id);
              var jumlah = parseInt(jumlahElement.textContent);

              // Mengurangi jumlah barang jika lebih dari 1
              if (jumlah > 1) {
                  jumlah -= 1;
              }

              // Memperbarui total
              updateTotal(id, hargaBarang, jumlah);
          }

          // Menambahkan event listener pada tombol
          document.querySelectorAll('button[id^="kurangButton-"]').forEach(button => {
              button.addEventListener('click', decrement);
          });

          document.querySelectorAll('button[id^="tambahButton-"]').forEach(button => {
              button.addEventListener('click', increment);
          });
      });
    </script>



    <div class="row my-4 container-fluid">
        <h3 class="font-weight-bolder mb-4">Detail Pesanan</h3>
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7 mt-2">
                  <a href="{{ route('tampilkeranjang') }}"><p style="font-size:20px;" class="text-dark">{{ __(' < Kembali') }}</p></a>
                  <h4 class="mt-2">Informasi Profil</h4>
                </div>
                <hr>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="row container-fluid">

                <div class="mb-3 col-md-6">
                  <label for="" style="font-size: 18px;">Nama Pengguna</label>
                  <p class="text-dark" style="margin-left: 5px;">{{ Auth::user()->name }}</p>
                </div>

                <div class="mb-3 col-md-6">
                  <label for="" style="font-size: 18px;">Nomor Telepon</label>
                  @if(!isset($keranjang->user->nomor_telepon) || $keranjang->user->nomor_telepon === null)
                      <p class="text-danger" style="margin-left: 5px;">Data masih kosong!</p>
                  @else
                      <p class="text-dark" style="margin-left: 5px;" >{{ $keranjang->user->nomor_telepon }}</p>
                  @endif
                </div>

              </div>
              <div class="row container-fluid">
                <div class="mb-3 col-md-6">
                  <label for="" style="font-size: 18px;">Provinsi</label>
                  @if(!isset($keranjang->user->provinsi) || $keranjang->user->provinsi->provinsi === null)
                      <p class="text-danger" style="margin-left: 5px;">Data masih kosong!</p>
                  @else
                      <p class="text-dark" style="margin-left: 5px;">{{ $keranjang->user->provinsi->provinsi }}</p>
                  @endif
                </div>
                <div class="mb-3 col-md-6">
                  <label for="" style="font-size: 18px;">Kabupaten</label>
                  @if(!isset($keranjang->user->kabupaten) || $keranjang->user->kabupaten->kabupaten === null)
                      <p class="text-danger" style="margin-left: 5px;">Data masih kosong!</p>
                  @else
                      <p class="text-dark" style="margin-left: 5px;">{{ $keranjang->user->kabupaten->kabupaten }}</p>
                  @endif
                </div>
              </div>
              <div class="row container-fluid">
                <div class="mb-3 col-md-6">
                  <label for="" style="font-size: 18px;">Kecamatan</label>             
                  @if(!isset($keranjang->user->kecamatan) || $keranjang->user->kecamatan->kecamatan === null)
                    <p class="text-danger" style="margin-left: 5px;">Data masih kosong!</p>
                  @else
                    <p class="text-dark" style="margin-left: 5px;">{{ $keranjang->user->kecamatan->kecamatan }}</p>
                  @endif
                </div>
                <div class="mb-3 col-md-6">
                  <label for="" style="font-size: 18px;">Jalan</label>
                  @if(!isset($keranjang->user->nama_jalan) || $keranjang->user->nama_jalan === null)
                    <p class="text-danger" style="margin-left: 5px;">Data masih kosong!</p>
                  @else
                    <p class="text-dark" style="margin-left: 5px;">{{ $keranjang->user->nama_jalan }}</p>
                  @endif
                </div>
              </div>
              <div class="row container-fluid">
                <div class="mb-3 col-md-6">
                  <label for="" style="font-size: 18px;">Kode Pos</label>             
                  @if(!isset($keranjang->user->kode_pos) || $keranjang->user->kode_pos === null)
                    <p class="text-danger" style="margin-left: 5px;">Data masih kosong!</p>
                  @else
                    <p class="text-dark" style="margin-left: 5px;">{{ $keranjang->user->kode_pos }}</p>
                  @endif
                </div>
                <div class="mb-3 col-md-6">
                  <label for="" style="font-size: 18px;">Nomor Rekening</label>
                  @if(!isset($keranjang->user->nomor_rekening) || $keranjang->user->nomor_rekening === null)
                    <p class="text-danger" style="margin-left: 5px;">Data masih kosong!</p>
                  @else
                    <p class="text-dark" style="margin-left: 5px;">{{ $keranjang->user->nomor_rekening }}</p>
                  @endif
                </div>
              </div>
              <div class="row container-fluid">
                <div class="mb-3 col-md-6">
                  <label for="" style="font-size: 18px;">Bank</label>
                  @if(!isset($keranjang->user->bank) || $keranjang->user->bank->nama_bank === null)
                    <p class="text-danger " style="margin-left: 5px;">Data masih kosong!!</p>
                  @else
                    <p class="text-dark" style="margin-left: 5px;">{{ $keranjang->user->bank->nama_bank }}</p>
                  @endif             
                </div>
              </div>
              <hr>
              <div class="row container-fluid">
                <div class="mb-3 col-md-6">
                  <h5><span class="text-danger">*</span>Informasi Profil belum lengkap?</h5>      
                  <a href="{{ route('editprofilenazhparfume',$keranjang->user->id) }}" class="text-dark" style="margin-left: 5px;">Klik Disini</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h3 class="font-weight-bolder" style="margin-left:18px;">{{ __('Pesanan') }}</h3>
            </div>
            <div class="card-body p-3 mt-4">
                <div class="col-lg-12 col-sm-12">
                  <div class="d-flex flex-column h-100 container-fluid mb-4">
                    <img class="border-radius-lg" src="{{asset('upload/'.$keranjang->barang->photos)}}" width="80%" alt="">
                  </div>
                </div>
                <div class="col-lg-12 col-sm-12">
                  <div class="d-flex flex-column h-100 container-fluid mb-4">
                    <h4 class="mt-3 font-weight-bolder">{{ $keranjang->barang->nama_barang }} - {{ $keranjang->barang->penyedia_barang }}</h4>
                  </div>
                </div>
                <hr>



                <div class="col-lg-12 col-sm-12">
                  <div class="d-flex flex-column h-100 container-fluid mb-4">
                      <h5>Jumlah Barang :</h5>
                      <div class="d-flex mb-3 mt-3">
                          <button id="kurangButton-{{ $keranjang->id }}" class="border-secondary bg-white" data-harga="{{ $keranjang->barang->harga_barang }}">-</button>&nbsp;&nbsp;
                          <span id="count-{{ $keranjang->id }}">1</span>&nbsp;&nbsp;
                          <button id="tambahButton-{{ $keranjang->id }}" class="border-secondary bg-white" data-harga="{{ $keranjang->barang->harga_barang }}">+</button>
                      </div>
                      <div class="d-flex">
                          <h3 style="margin-top: 40px;" class="font-weight-bolder">{{ __('Total :') }}</h3>
                      </div>
                      <div class="d-flex">
                          <h3 class="text-success font-weight-bolder">Rp.</h3>
                          <h3 id="harga-{{ $keranjang->id }}" class="text-success font-weight-bolder">{{ number_format($keranjang->barang->harga_barang, 0, ',', '.') }}</h3>
                      </div>
                  </div>
                </div>

                

                <hr>
                <div class="col-lg-12 col-sm-12">
                  <div class="d-flex flex-column h-100 container-fluid mb-4">
                    <a href="">
                      <button class="btn mb-4 my-2 bg-gradient-success">{{ __('Pesan Sekarang') }}</button>
                    </a>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
</x-template.main>