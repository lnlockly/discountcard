<x-admin-layout>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <h1 class="mt-4">{{ __('main.Help') }}</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('admin.help') }}">{{ __('main.Help') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('admin.add_question') }}</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        {{ __('main.FAQ') }}
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.question.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="inputName">{{ __('main.question') }}</label>
                                <input class="form-control" id="inputName" type="text" name="name" />
                            </div>
                            <div class="form-group">
                                <label for="inputText">{{ __('main.answer') }}</label>
                                <textarea class="form-control" id="inputText" name="text" /></textarea>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <a class="small"></a>
                                <button class="btn btn-primary" type="submit">{{ __('admin.add_question') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
