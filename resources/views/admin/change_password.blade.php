
@extends('admin.body.main')
@section('title','Admin Change Password')
@section('main')
    @push('css')


    @endpush
    <div class="page-content">

        <div class="row profile-body">
            <!-- left wrapper start -->
            <div class="d-none d-md-block col-md-5 col-xl-4 left-wrapper">
                <div class="card rounded">
                    <div class="card-body">
                        <div class="d-flex  mb-2">
                            <img class="wd-70 rounded-circle" style="width: 224px;height: auto;"  src="{{ (!empty($adminData->photo))? url('upload/adminImages/'.$adminData->photo):url('upload/no_image.jpg') }}" alt="profile">
                            {{--                         <h6 class="card-title mb-0 mt-4">About</h6>--}}

                        </div>
                        <p> </p>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Name: </label>
                            <p class="text-muted">{{ $adminData->name }}</p>
                        </div>
                        <hr>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Username:</label>
                            <p class="text-muted">{{ $adminData->username }}</p>
                        </div>
                        <hr>

                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                            <p class="text-muted">{{ $adminData->email }}</p>
                        </div>
                        <hr>

                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                            <p class="text-muted">{{ $adminData->phone }}</p>
                        </div>
                        <hr>

                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                            <p class="text-muted">{{ $adminData->address }}</p>
                        </div>

                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Joined:</label>
                            @if(empty($adminData->created_at))
                                <p class="text-muted"> - </p>
                            @else
                                <p class="text-muted">{{$adminData->created_at->thaidate()}} : {{$adminData->created_at->thaidate('H:i:s น.')}}</p>

                            @endif
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Updated:</label>
                            @if(empty($adminData->updated_at))
                                <p class="text-muted"> - </p>
                            @else
                                <p class="text-muted">{{$adminData->updated_at->thaidate()}} : {{$adminData->updated_at->thaidate('H:i:s น.')}}</p>

                            @endif
                        </div>

                    </div>
                </div>
            </div>
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-7 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card rounded">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        {{--                                    <img class="img-xs rounded-circle" src="{{ (!empty($adminData->photo))? url('upload/adminImages/'.$adminData->photo):url('upload/no_image.jpg') }}" alt="">--}}
                                        <div class="ms-2">
                                            {{--                                        <p>{{ $adminData->name }}</p>--}}

                                            <p class="">Change Password</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-5 tx-14"></p>
                                {{--                            <h6 class="card-title">Horizontal Form</h6>--}}

                                {{--                                <form class="forms-sample" method="post" action="{{route('update.profile')}}" enctype="multipart/form-data">--}}
                                <form class="forms-sample" method="post" action="{{route('admin.update.password')}}" >
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="old_password" class="col-sm-2 col-form-label">Old Password</label>
                                        <div class="col-sm-10">
                                            <input type="password"
                                                   class="form-control @error('old_password') is-invalid @enderror"
                                                   id="old_password"
                                                   name="old_password" >
                                            @error('old_password')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="new_password" class="col-sm-2 col-form-label">New Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control @error('new_password') is-invalid @enderror"
                                                   id="new_password"
                                                   name="new_password" >
                                            @error('new_password')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="new_password_confirmation" class="col-sm-2 col-form-label">Confirm New Password</label>
                                        <div class="col-sm-10">
                                            <input type="password"
                                                   class="form-control @error('new_password') is-invalid @enderror @error('new_password_confirmation') is-invalid @enderror"
                                                   id="new_password_confirmation"
                                                   name="new_password_confirmation">
                                            @error('new_password')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            @error('new_password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <br>


                                    <button type="submit" class="btn btn-primary me-2">Update Password</button>

                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- middle wrapper end -->

        </div>
    </div>
    @push('script')
        <!-- custom js for this page -->


        <!-- end custom js for this page -->
        <script type="text/javascript">

            $(document).ready(function(){
                $('#image').change(function(e){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#showImage').attr('src',e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
            });

        </script>


        <script type="text/javascript">
            @if(Session::has('Profileupdated'))
            $(document).ready( function () {
                showSwal('profile-updated');
            });

            @endif


        </script>
    @endpush
@endsection

{{--dd($adminData)--}}
{{--@endphp--}}
