@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Selamat Datang</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Selamat datang di rumah saya, anda bisa memilih sesuka hati anda, tapi jangan lupa tinggalkan jejak dengan comment.
                    
                    bagi yang mau donasi hubungi warga sekitar rumah yang tidak meimiliki pintu dan jendela.
                </div>

                <div class="card-header">Terima Kasih</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Terima Kasih buat bapak yang kami sayangi dan kami cintai setulus hati dan raga kami
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
