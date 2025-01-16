<x-template.main>
    <div class="col-lg-12 mb-lg-0 mb-3 container-fluid py-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <div class="d-flex flex-column h-100 container-fluid mb-4">
                <p class="mb-3 pt-2 text-bold">{{ __('Selamat Datang!') }}</p>
                <h2 class="font-weight-bolder mb-4 font-italic">NazhParfume</h2>
                <p class="mb-3" style="font-size: 17px;">{{ __('"Parfum terbaik adalah lebih dari sekadar aroma; 
                                                                ia merupakan sebuah karya seni yang mampu menyentuh jiwa dan merangkum esensi dari kepribadian seseorang. 
                                                                Setiap semprotan bukan hanya memberikan wewangian, tetapi juga menciptakan atmosfer yang mengubah suasana hati dan menciptakan kenangan tak terlupakan."') }}
                </p>
                <p style="font-size: 15px">{{ __('Daffa Nazhmi (Owner Toko)') }}</p>
                <div class="row">
                  <div class="text-left">
                      <a href="#produk"><button type="submit" class="btn bg-gradient-dark my-4 mb-2">{{ __('Lihat Produk') }}</button></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12">
              <img class="border-radius-lg class-image" src="{{ asset('soft-ui-dashboard/media/parfume13.jpeg') }}" width="100%">
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container-fluid py-4" id="produk">
        <div class="container-fluid">
          <h2 class="font-weight-bolder text-left">{{ __('Produk Kami') }}</h2>
            <p class="mb-3 text-left" style="font-size: 15px;">{{ __('Produk-Produk yang ada di NazhParfume') }}</p>
        </div>
        <div class="row mt-1 mb-5">
          @foreach ($barang as $item)
            <div class="col-lg-3 mt-4 mb-lg-0 mb-4">
              <div class="card z-index-2">
                <div class="card-body container-fluid p-3">
                  <img class="border-radius-lg" src="{{asset('upload/'.$item->photos)}}" width="100%" alt="">
                  <h6 class="ms-2 mt-4 mb-0">{{$item->nama_barang}}</h6>
                  <p class="text-sm ms-2">{{$item->penyedia_barang}}</p>
                  <div class="row">
                      <div class="col-lg-12">
                          <p class="text-sm ms-2">{{$item->deskripsi_barang}}</p>
                      </div>
                  </div>
                  <div class="container border-radius-lg">
                    <div class="row">
                      <div class="col-12 ps-0">
                        <p class="font-weight-bolder">Rp.{{ number_format($item->harga_barang, 0, ',', '.') }}</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-10 ps-0">
                        <a href="{{route('barang.show',$item->id)}}"><p class="text-xl text-secondary mt-1 mb-0 font-weight-bolder">Detail</p></a>
                      </div>
                      <div class="col-2 ps-0">
                        <a href="{{route('tambahkeranjang',$item->id)}}">
                          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg style="width: 20px; color:teal;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                  <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(0.000000, 148.000000)">
                                      <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                                      <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                    </g>
                                  </g>
                                </g>
                              </g>
                            </svg>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
    </div>
</x-template.main>