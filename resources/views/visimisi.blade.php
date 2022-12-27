@extends('layout/navbar')
@section('body')

{{-- Visi & Misi Section --}}
<section id="profile">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center title-profile">
                <div class="visi-misi">                
                    <h2>Visi dan Misi</h2>
                    <div class="col p-5">
                        <div class="text-left fs-2 mb-2">Visi</div>
                        <div class="d-flex">
                            <p class="visi">
                                Sekolah historis berbasis Teknologi Informasi dan berwawasan lingkungan, mantap dalam IMTAQ, unggul dalam IPTEK, berprestasi dalam olahraga dan seni serta siap bersaing dalam menghadapi era global.
                            </p>
                        </div>
                    </div>
                    <div class="col p-5">
                        <div class="text-left fs-2 mb-2">Misi</div>
                        <div class="d-flex">
                            <p class="misi">
                                Menciptakan lingkungan yang harmonis dalam upaya meningkatkan keimanan dan ketaqwaan terhadap Tuhan yang Maha Kuasa

                                Menciptakan lingkungan pembelajaran yang kondusif dalam upaya meningkatkan mutu pembelajaran
                                
                                Menciptakan lingkungan sekolah yang berwawasan adiwiyata, bersih, hijau dan terpelihara
                                
                                Menumbuh kembangkan semangat keunggulan dan bernalar sehat kepada para peserta didik, guru dan karyawan sehingga berkemauan kuat untuk terus maju
                                
                                Meraih prestasi terbaik baik akademik maupun non akademik mulai tingkat provinsi dan nasional maupun internasional
                                
                                Mengembangkan Teknologi Informasi dan komunikasi dalam pembelajaran dan administrasi sekolah
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layout/footer')
@endsection