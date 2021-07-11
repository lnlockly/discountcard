<x-guest-layout>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">{{ __('Create Account') }}</h3>
                                </div>
                                <div class="card-body">
                                    <form>
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputFirstName" type="text" name="first_name"  placeholder/>
                                                    <label for="inputFirstName">{{ __('First name') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputLastName" type="text" name="last_name"  placeholder/>
                                                    <label for="inputLastName"> {{ __('Last name') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputCompanyName" type="text" name="company"  placeholder/>
                                                    <label for="inputCompanyName">{{ __('Company name') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputCity" type="text" name="company"  placeholder/>
                                                    <label for="inputCity">{{ __('City') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputAddress" type="text" name="address"  placeholder/>
                                                    <label for="inputAddress">{{ __('Address') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputPostcode" type="text" name="postcode"  placeholder/>
                                                    <label for="inputPostcode">{{ __('Postcode') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" name="email"  placeholder/>
                                            <label for="inputEmail">{{ __('Email address') }}</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPassword" type="password" name="password"  placeholder/>
                                                    <label for="inputPassword">{{ __('Password') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPasswordConfirm" type="password" name="password_confirmation" placeholder/>
                                                    <label for="inputPasswordConfirm">{{ __('Confirm Password') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">{{ __('Create Account') }}</button></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="{{ route('login') }}">{{ __('Login') }}</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</x-guest-layout>
