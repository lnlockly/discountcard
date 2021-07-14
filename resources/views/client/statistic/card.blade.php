<x-app-layout>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <h1 class="mt-4">{{ __('Gifts') }}</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('Gifts') }}</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        {{ __('Gifts history') }}
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" data-page-length='1'>
                            <thead>
                                <tr>
                                    <th>{{ __('Number') }}</th>
                                    <th>{{ __('Received at') }}</th>
                                    <th>{{ __('User') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gifts ?? [] as $gift)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $gift->created_at }}</td>
                                    <td><a href="{{ route('statistic.users.show', [$gift->user->id] ) }}">{{ $gift->user->first_name }} {{ $gift->user->last_name }}</a></td>
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
                paging: false
            });
        }
    });

    </script>
    <style>
    .dataTable-search {
        display: none;
    }
    </style>
</x-app-layout>
