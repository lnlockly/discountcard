<x-guest-layout>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        @if ($errors->any())
                            <ul class="mt-3 text-center">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">{{ __('main.Create_Account') }}</h3>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('client.register') }}">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" name="first_name" placeholder />
                                                <label for="inputFirstName">{{ __('main.First_name') }}</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input class="form-control" id="inputLastName" type="text" name="last_name" placeholder />
                                                <label for="inputLastName"> {{ __('main.Last_name') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputCompanyName" type="text" name="company" placeholder />
                                                <label for="inputCompanyName">{{ __('main.Company_name') }}</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input class="form-control" id="inputCity" type="text" name="city" placeholder />
                                                <label for="inputCity">{{ __('main.City') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputAddress" type="text" name="address" placeholder />
                                                <label for="inputAddress">{{ __('main.Address') }}</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input class="form-control" id="inputPostcode" type="text" name="postcode" placeholder />
                                                <label for="inputPostcode">{{ __('main.Postcode') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputEmail" type="email" name="email" placeholder />
                                                <label for="inputEmail">{{ __('main.Email') }}</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input class="form-control" id="inputPostcode" type="text" name="website" placeholder />
                                                <label for="inputPostcode">{{ __('main.Site') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder />
                                                <label for="inputPassword">{{ __('main.Password') }}</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputPasswordConfirm" type="password" name="password_confirmation" placeholder />
                                                <label for="inputPasswordConfirm">{{ __('main.Confirm_Password') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">{{ __('main.Create_Account') }}</button></div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="{{ route('client.login') }}">{{ __('main.Login') }}</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
