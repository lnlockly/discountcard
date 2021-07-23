<x-app-layout>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <h1 class="mt-4">{{ __('Managers') }}</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('client.dashboard') }}">{{ __('Dashboard') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('Managers') }}</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        {{ __('Managers') }}
                    </div>
                    <form method="post" action="{{ route('client.managers.store') }}">
                        @csrf
                        <div class="input-group mb-3 mt-2">
                            <input type="text" class="form-control" placeholder="{{ __('Manager name') }}" aria-describedby="add-manager" name="name">
                            <button class="btn btn-outline-secondary" id="add-manager" type="submit"> {{ __('Add manager') }}</button>
                        </div>
                    </form>
                    <div class="card-body">
                        <table id="datatablesSimple" data-page-length='1'>
                            <thead>
                                <tr>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Key') }}</th>
                                    <th>{{ __('Created at') }}</th>
                                    <th>{{ __('Stamps') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($managers as $manager)
                                <tr>
                                    <td>{{ $manager->name }}</td>
                                    <td>{{ $manager->key }}</td>
                                    <td>{{ $manager->created_at }}</td>
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
