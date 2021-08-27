<x-admin-layout>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <h1 class="mt-4">{{ __('main.Help') }}</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">{{ __('main.Help') }}</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        {{ __('main.FAQ') }}
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" data-page-length='1'>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>{{ __('main.question') }}</th>
                                    <th>{{ __('main.answer') }}</th>
                                    <th>{{ __('main.Delete') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($questions as $question)
                                <tr>
                                    <td>{{ $question->id }}</td>
                                    <td>{{ $question->name }}</td>
                                    <td>{{ $question->text }}</td>
                                    <td>
                                        <form method="POST" class="destroy" action="{{ route('admin.question.destroy', [$question->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <div class="d-grid">
                                                <button onclick="event.preventDefault();
                                                this.closest('.destroy').submit();" class="btn btn-primary btn-block">{{ __('main.Delete') }}</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <a class="btn btn-primary" type="submit" href="{{ route('admin.question.create') }}">{{ __('admin.add_question') }}</a>
                        </div>
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
    .dataTables-empty {
        display: none;
    }

    .dataTable-search {
        display: none;
    }

    </style>
</x-admin-layout>
