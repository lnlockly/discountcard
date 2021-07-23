<x-app-layout>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">{{ __('Dashboard') }}</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">{{ __('Dashboard') }}</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $users_count ?? 0 }}</h5>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <div class="small text-white">{{ __('Number of users') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $stamps_sum ?? 0 }}</h5>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <div class="small text-white">{{ __('Number of stamps') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $gifts_sum ?? 0}}</h5>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <div class="small text-white">{{ __('Number of gifts') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">
                                      {!! QrCode::size(100)->generate(url("/{$gifts_amount}")); !!}
                                    <h5 class="card-title">{{ $gifts_amount ?? 0 }} </h5>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <div class="small text-white">{{ __('Gifts price') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                  <!--   <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Area Chart Example
                                </div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Bar Chart Example
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Example
                        </div>
                    </div>
                </div> -->
            </main>
        </div>
    </div>
</x-app-layout>
