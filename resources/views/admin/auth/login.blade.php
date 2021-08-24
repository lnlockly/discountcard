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
                                    <form method="post" action="{{ route('admin.login') }}">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputName" type="text" name="name" placeholder="name" />
                                            <label for="inputname">{{ __('main.Login') }}</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password" name="password" placeholder="{{ __(
                                                'Password') }}" />
                                            <label for="inputPassword">{{ __(
                                                'main.Password') }}</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-primary" type="submit">{{ __('main.Login') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-guest-layout>
