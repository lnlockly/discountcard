<x-app-layout>
	<div id="layoutSidenav">
	<div id="layoutSidenav_content">
	  <div class="container-fluid px-4">
                        <h1 class="mt-4">{{ __('Users') }}</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('client.dashboard') }}">{{ __('Dashboard') }}</a></li>
                            <li class="breadcrumb-item active">{{ __('Users') }}</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                {{ __('Users') }}
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" data-page-length='1'>
                                    <thead>
                                        <tr>
                                            <th>{{ __('First name') }}</th>
                                            <th>{{ __('Last name') }}</th>
                                            <th>{{ __('Email') }}</th>
                                            <th>{{ __('Registration date') }}</th>
                                            <th>{{ __('Card activation date') }}</th>
                                            <th>{{ __('Stamps') }}</th>
                                            <th>{{ __('Gifts') }}</th>
                                            <th>{{ __('Web push') }}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    	@foreach ($users ?? [] as $user)
                                        <tr>
                                            <td>{{ $user->first_name }}</td>
                                            <td>{{ $user->last_name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>{{ $user->cardact_at }}</td>
                                            <td><a class="btn btn-primary btn-sm" href="{{ route('client.statistic.users.show', [$user->id] ) }}">@if ($user->stamps != null) {{ $user->stamps->count() }}
                                            @else 0
                                            @endif
                                             </a></td>
                                            <td>{{ $user->nof_gifts }}</td>
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
        });

    }
});
</script>
</x-app-layout>