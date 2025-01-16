<x-template.main>
    <div class="col-lg-12 mb-lg-0 mb-3 container-fluid py-4">
      <div class="card">
            <div class="card-body">
                <a href="{{ route('barang.index') }}"><p style="font-size:20px;" class="text-dark">{{ __(' < Kembali') }}</p></a>
                <h4 class="mt-3">Informasi Profil</h4>
                <form role="form text-left" action="{{route('updateprofilenazhparfume',$user['id'])}}" method="POST" enctype="multipart/form-data">
                  @method('PUT')
                    @csrf
                    <div class="row mt-5">
                        <div class="mb-3 col-md-6">
                          <label for="" style="font-size: 18px;">Nama Pengguna</label>
                          <input type="number" readonly class="form-control" placeholder="{{ $user->name }}">
                        </div>
                        <div class="mb-3 col-md-6">
                          <label for="" style="font-size: 18px;">Email Pengguna</label>
                          <input type="number" readonly class="form-control" placeholder="{{ $user->email }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                          <label for="" style="font-size: 18px;">Nomor Telepon</label>
                          <input type="number" value="{{ $user->nomor_telepon }}" name="nomortelepon" class="form-control" placeholder="Masukkan nomor telepon">
                          @error('nomortelepon')
                            <small class="form-text text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                          <label for="" style="font-size: 18px;">Provinsi</label>
                          <select name="provinsi" id="provinsi" class="form-control">
                            <option value="{{ old('provinsi') }}">== PILIH PROVINSI ==</option>

                            @foreach ($provinsi as $item)
                               <option value="{{ $item->id }}">
                                {{ $item->provinsi}}
                               </option>
                            @endforeach   

                          </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                          <label for="" style="font-size: 18px;">Kabupaten</label>
                          <select name="kabupaten" id="kabupaten" class="form-control">
                            <option value="{{ old('kabupaten') }}">== PILIH KABUPATEN ==</option>

                            {{-- DARI AJAX --}}

                          </select>
                        </div>
                        <div class="mb-3 col-md-6">
                          <label for="" style="font-size: 18px;">Kecamatan</label>
                          <select name="kecamatan" id="kecamatan" class="form-control">
                            <option value="{{ old('kecamatan') }}">== PILIH NAMA KECAMATAN ==</option>
                            
                            {{-- DARI AJAX --}}

                          </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                          <label for="" style="font-size: 18px;">Jalan</label>
                          <input type="text" value="{{ $user->nama_jalan }}" name="namajalan" class="form-control" placeholder="Masukkan nama jalan">
                          @error('namajalan')
                            <small class="form-text text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                          <label for="" style="font-size: 18px;">Kode Pos</label>
                          <input type="number" value="{{ $user->kode_pos }}" name="kodepos" class="form-control" placeholder="Masukkan Kode Pos">
                          @error('kodepos')
                            <small class="form-text text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                          <label for="" style="font-size: 18px;">Nomor Rekening</label>
                          <input type="number" value="{{ $user->nomor_rekening }}" name="nomorrekening" class="form-control" placeholder="Masukkan nomor rekening">
                          @error('nomorrekening')
                            <small class="form-text text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                          <label for="" style="font-size: 18px;">Bank</label>
                          <select name="bank" id="" class="form-control">
                            <option value="{{ old('bank') }}">== PILIH BANK ==</option>

                            @foreach ($bank as $item)
                            <option value="{{$item->id}}">
                                {{$item->nama_bank}}
                            </option>  
                            @endforeach

                          </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-dark my-4 mb-2">Update Profil</button>
                        </div>
                    </div>
                </form>
            </div>
      </div>
    </div>
  </x-template.main>