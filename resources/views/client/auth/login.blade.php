<x-guest-layout>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            @if ($errors->any())
                            <ul class="mt-3 text-center">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            @endif
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">{{ __('main.Login') }}</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="{{ route('client.login') }}">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" />
                                            <label for="inputEmail">{{ __('main.Email') }}</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password" name="password" placeholder="{{ __(
                                                'main.Password') }}" />
                                            <label for="inputPassword">{{ __(
                                                'main.Password') }}</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" name="remember" value="" />
                                            <label class="form-check-label" for="inputRememberPassword">{{ __('main.Remember_Password') }}</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="{{ route('client.password.request') }}">{{ __('main.Forgot_Password') }}?</a>
                                            <button class="btn btn-primary" type="submit">{{ __('main.Login') }}</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="{{ route('client.register') }}">{{ __('main.Sign_Up') }}</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-guest-layout>
