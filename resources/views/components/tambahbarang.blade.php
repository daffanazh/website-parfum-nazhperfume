<x-template.main>
    <div class="card-body">
        <form role="form text-left" action="{{route('barang.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="mb-3 col-md-6">
                <label for="">Nama Barang</label>
                <input type="text" value="{{ old('namabarang') }}" name="namabarang" class="form-control" placeholder="Contoh : Parfum Daffa">
                @error('namabarang')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-3 col-md-6">
                <label for="">Penyedia Barang</label>
                <input type="text" value="{{ old('penyediabarang') }}" name="penyediabarang" class="form-control" placeholder="Contoh : Berkah Parfume">
                @error('penyediabarang')
                    <small class="form-text text-danger">{{ $message }}</small>   
                @enderror
              </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="">Deskripsi Barang</label>
                  <input type="text" value="{{ old('deskripsibarang') }}" name="deskripsibarang" class="form-control" placeholder="Contoh : Parfum ini dibuat menggunakan bahan berkualitas">
                  @error('deskripsibarang')
                    <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="mb-3 col-md-6">
                  <label for="">Harga Barang</label>
                  <input type="number" value="{{ old('hargabarang') }}" name="hargabarang" class="form-control" placeholder="Contoh : 190000">
                  @error('hargabarang')
                    <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="">Stok Barang</label>
                  <input type="number" value="{{ old('stokbarang') }}" name="stokbarang" class="form-control" placeholder="Contoh : 10">
                  @error('stokbarang')
                    <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="mb-3 col-md-6">
                  <label for="">Foto</label>
                  <input type="file" value="{{ old('foto') }}" name="foto" class="form-control" placeholder="Masukkan foto barang...">
                  @error('foto')
                    <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <button type="submit" class="btn bg-gradient-dark my-4 mb-2">Tambah Data Barang</button>
                </div>
            </div>
        </form>
    </div>
</x-template.main>