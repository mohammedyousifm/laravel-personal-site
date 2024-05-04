@extends('companies.dashboard')

@section('content')
    <div class="container" id="loign-Container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                <div class="card border border-light-subtle rounded-3 shadow-sm">
                    <div class="card-body p-3 p-md-4 p-xl-5">

                        <h1 class="text-center">login</h1>

                        <form action="{{ route('loginStore.index') }}" method="POST">
                            @extends('companies.errors')
                            @csrf
                            <div class="row gy-2 mt-4 overflow-hidden">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" ::value="old('email')" name="email"
                                            id="email" placeholder="Enter Your Email" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <input type="password" class="form-control" name="password" id="password"
                                            value="" placeholder="Enter Your Password" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid my-3">
                                        <button class="btn btn-primary btn-lg" type="submit">Log in</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-12">
                            <div class="d-flex gap-2 justify-content-between">
                                <a href="" style="cursor: pointer" class="link-primary text-decoration-none">Forgot
                                    password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .sidebar-wrapper {
        display: none;
    }

    .main-header {
        display: none;
    }
</style>
