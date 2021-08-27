<x-admin-layout>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <h1 class="mt-4">{{ __('admin.statistic') }}</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">{{ __('admin.statistic') }}</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        {{ __('admin.statistic') }}
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" data-page-length='1'>
                            <thead>
                                <tr>
                                    <th>{{ __('main.First_name') }}</th>
                                    <th>{{ __('main.Last_name') }}</th>
                                    <th>{{ __('main.Company_name') }}</th>
                                    <th>{{ __('main.City') }}</th>
                                    <th>{{ __('main.Address') }}</th>
                                    <th>{{ __('main.Website') }}</th>
                                    <th>{{ __('main.Phone') }}</th>
                                    <th>{{ __('main.Postcode') }}</th>
                                    <th>{{ __('main.Email') }}</th>
                                    <th>{{ __('main.Registration_date') }}</th>
                                    <th>{{ __('main.Delete_Account') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients ?? [] as $client)
                                <tr>
                                    <td>{{ $client->first_name }}</td>
                                    <td>{{ $client->last_name }}</td>
                                    <td>{{ $client->company }}</td>
                                    <td>{{ $client->city }}</td>
                                    <td>{{ $client->address }}</td>
                                    <td>{{ $client->website }}</td>
                                    <td>{{ $client->phone }}</td>
                                    <td>{{ $client->postcode }}</td>
                                    <td>{{ $client->email }}</td>
                                    <td>{{ $client->created_at->format('Y-m-d') }}</td>
                                    <td>
                                        <form method="POST" class="destroy" action="{{ route('admin.destroy_firm', [$client->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <div class="d-grid">
                                                <button onclick="event.preventDefault();
                                                this.closest('.destroy').submit();" class="btn btn-primary btn-block">{{ __('main.Delete_Account') }}</button>
                                            </div>
                                        </form>
                                    </td>
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
</x-admin-layout>
