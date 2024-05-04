@extends('companies.dashboard')

@section('content')
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                <div class="card border border-light-subtle rounded-3 shadow-sm">
                    <div class="card-body p-3 p-md-4 p-xl-5">

                        <h1 class="text-center">sign=in</h1>

                        <form action="{{ route('signInStore.index') }}" method="POST">
                            @csrf
                            <div class="row gy-2 overflow-hidden">
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="name" class="form-control" name="name" id="name"
                                            placeholder="Enter Your Email" required>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Enter Your Email" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" name="password" id="password"
                                            value="" placeholder="Password" required>
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
