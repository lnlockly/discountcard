<x-app-layout>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">{{ __('main.Dashboard') }}</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">{{ __('main.Dashboard') }}</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $users_count ?? 0 }}</h5>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <div class="small text-white">{{ __('main.Number_of_users') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $stamps_sum ?? 0 }}</h5>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <div class="small text-white">{{ __('main.Number_of_stamps') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $gifts_sum ?? 0}}</h5>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <div class="small text-white">{{ __('main.Number_of_gifts') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $gifts_amount ?? 0 }} </h5>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <div class="small text-white">{{ __('main.Gifts_price') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-qrcode"></i>
                                    {{ __('main.QR-Code') }}
                                </div>
                                <div class="card-body">
                                    <div class="text-center">{!! QrCode::size(200)->generate(url("/?card_id=$card_id")); !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-link"></i>
                                    {{ __('main.Card_link') }}
                                </div>
                                <div class="card-body">
                                    <a href="{{ url("/?card_id=$card_id") }}">{{ url("/?card_id=$card_id") }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>