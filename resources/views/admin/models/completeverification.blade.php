@extends('backend_layout.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            <section class="profile-sec">
                <div class="container">

                    <div class="isotope-item col-sm-12 fashion">

                        <div class="vertical-item content-absolute">
                            <div class="item-media">
                                <h1>Selfie Image</h1>
                            @if(isset($models['selfie']))

                            <img src="{{ asset('images/selfies/'.$models['selfie']) }}" alt="">

                            @else
                            <img src="{{ asset('images/no-image.png') }}" alt="">

                            @endif

                            </div>
                        </div>

                        <div class="vertical-item content-absolute">
                            <div class="item-media">
                            <h1>Model Update Image</h1>

                            @if(isset($models['image_name']))

                            <img src="{{ asset('images/'.$models['image_name']) }}" alt="">
                            {{-- <img src="{{ asset('images/no-image.png') }}" alt=""> --}}


                            @else
                            <img src="{{ asset('images/no-image.png') }}" alt="">

                            @endif

                            </div>
                        </div>
                    </div>

            </div>

            </section>
            <section class="profile-sec">
                <div class="container">
                    <div class="container-fluid">
                        <!-- multistep form -->
                        <form method="POST" action="{{url('admin/model/verificationupdate/'.encrypt($users->id))}}" class="">
                            @csrf
                            <div class="form-group">
                            <input type="submit" name="submit" value="verify" class="btn btn-success">
                            </div>
                     </form>
                </div>
                </div>
            </section>

            </div>

        </section>
    </div>
@endsection
