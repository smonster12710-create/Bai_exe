@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">

            <div class="info-box">
                <h3 class="title">Màn hình chi tiết</h3>

                <div class="info-item">
                    <span class="label">ID:</span>
                    <span class="value">{{$messi->id}}</span>
                </div>

                <div class="info-item">
                    <span class="label">Name:</span>
                    <span class="value">{{$messi->name}}</span>
                </div>

                <div class="info-item">
                    <span class="label">Email:</span>
                    <span class="value">{{$messi->email}}</span>
                </div>
            </div>

        </div>
        
    </div>
</main>
@endsection