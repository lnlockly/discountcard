<x-app-layout>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <h1 class="mt-4">{{ __('main.Users') }}</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('client.dashboard') }}">{{ __('main.Dashboard') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('main.Users') }}</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        {{ __('main.Users') }}
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" data-page-length='1'>
                            <thead>
                                <tr>
                                    <th>{{ __('main.First_name') }}</th>
                                    <th>{{ __('main.Last_name') }}</th>
                                    <th>{{ __('main.Email') }}</th>
                                    <th>{{ __('main.Registration_date') }}</th>
                                    <th>{{ __('main.Card_activation_date') }}</th>
                                    <th>{{ __('main.Stamps') }}</th>
                                    <th>{{ __('main.Gifts') }}</th>
                                    <th>{{ __('main.Web_push') }}</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($users ?? [] as $user)
                                <tr>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at->format('Y-m-d') }}</td>
                                    <td>{{ $user->pivot->created_at->format('Y-m-d') }}</td>
                                    <td><a class="btn btn-primary btn-sm" href="{{ route('client.statistic.users.show', [$user->id] ) }}">@if ($user->stamps != null) {{ $user->stamps->where('card_id', $card_id)->count() }}
                                            @else 0
                                            @endif
                                        </a></td>
                                    <td>@if ($user->gifts != null) {{ $user->gifts->where('card_id', $card_id)->count() }}
                                        @else 0
                                        @endif</td>
                                    <td>{{ $user->webpush }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        window.addEventListener('DOMContentLoaded', event => {
            // Simple-DataTables
            // https://github.com/fiduswriter/Simple-DataTables/wiki

            const datatablesSimple = document.getElementById('datatablesSimple');
            if (datatablesSimple) {
                new simpleDatatables.DataTable(datatablesSimple, {
                    paging: false,
                    language: {
                        info: "1",
                        infoEmpty: "n"
                    }
                });

            }
        });
    </script>
    <style>
    .dataTables-empty {
        display: none;
    }
    </style>
</x-app-layout>