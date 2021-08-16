<x-app-layout>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <h1 class="mt-4">{{ __('main.Managers') }}</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('client.dashboard') }}">{{ __('main.Dashboard') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('main.Managers') }}</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        {{ __('main.Managers') }}
                    </div>
                    <form method="post" action="{{ route('client.managers.store') }}">
                        @csrf
                        <div class="input-group mb-3 mt-2">
                            <input type="text" class="form-control" placeholder="{{ __('main.Manager name') }}" aria-describedby="add-manager" name="name">
                            <button class="btn btn-outline-secondary" id="add-manager" type="submit"> {{ __('main.Add manager') }}</button>
                        </div>
                    </form>
                    <div class="card-body">
                        <table id="datatablesSimple" data-page-length='1'>
                            <thead>
                                <tr>
                                    <th>{{ __('main.Name') }}</th>
                                    <th>{{ __('main.Key') }}</th>
                                    <th>{{ __('main.Created_at') }}</th>
                                    <th>{{ __('main.Stamps') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($managers as $manager)
                                <tr>
                                    <td>{{ $manager->name }}</td>
                                    <td>{{ $manager->key }}</td>
                                    <td>{{ $manager->created_at->format('Y-m-d') }}</td>
                                    <td>{{ $manager->stamps->count() }}</td>
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
