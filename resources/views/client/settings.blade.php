<x-app-layout>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <h1 class="mt-4">{{ __('main.Settings') }}</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('client.dashboard') }}">{{ __('main.Dashboard') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('main.Settings') }}</li>
                </ol>
                @if ($errors->any())
                <ul class="mt-3 text-center">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                <div class="card mb-4">
                    <div class="card-header">
                        {{ __('main.Settings') }}
                    </div>
                    <form method="post" action="{{ route('client.update') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputFirstName" type="text" name="first_name" placeholder value="{{ Auth::user()->first_name }}" />
                                    <label for="inputFirstName">{{ __('main.First_name') }}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="inputLastName" type="text" name="last_name" placeholder value="{{ Auth::user()->last_name }}" />
                                    <label for="inputLastName"> {{ __('main.Last_name') }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputCompanyName" type="text" name="company" placeholder value="{{ Auth::user()->company }}" />
                                    <label for="inputCompanyName">{{ __('main.Company_name') }}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="inputCity" type="text" name="city" placeholder value="{{ Auth::user()->city }}" />
                                    <label for="inputCity">{{ __('main.City') }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputAddress" type="text" name="address" placeholder value="{{ Auth::user()->address }}" />
                                    <label for="inputAddress">{{ __('main.Address') }}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="inputPostcode" type="text" name="postcode" placeholder value="{{ Auth::user()->postcode }}" />
                                    <label for="inputPostcode">{{ __('main.Postcode') }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputEmail" type="email" name="email" placeholder value="{{ Auth::user()->email }}" />
                            <label for="inputEmail">{{ __('Email') }}</label>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputPhone" type="tel" name="phone" placeholder value="{{ Auth::user()->phone }}" />
                                    <label for="inputPhone">{{ __('main.Phone') }}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="inputSite" type="url" name="website" placeholder value="{{ Auth::user()->website }}" />
                                    <label for="inputSite">{{ __('main.Site') }}</label>
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
                            <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">{{ __('main.Edit_Account') }}</button></div>
                        </div>
                    </form>
                    <div class="mt-4 mb-0">
                        <div class="d-grid"> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                {{ __('main.Delete_Account') }}
                            </button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('main.sure') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('main.close')}}</button>
                    <form method="POST" class="destroy" action="{{ route('client.destroy') }}">
                        @csrf
                        @method('DELETE')
                        <div class="d-grid">
                            <button onclick="event.preventDefault();
                            this.closest('.destroy').submit()" id="delete-user" class="btn btn-primary btn-block" type="submit">{{ __('main.Delete') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
