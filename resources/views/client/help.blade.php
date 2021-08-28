@push('styles')
<link href="{{ asset('css/client/question.css') }}" rel="stylesheet">
@endpush
<x-app-layout>
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="question__container">
                    <div class="question__inner">
                        <div class="question__img-inner">
                          @foreach($templates ?? [] as $template)
                            <div class="question__img-block">
                                <div class="question__img-block">
                                    <img src="{{ '/storage/image/help/preview/' . $template->preview }}" alt="">
                                </div>
                                <a class="question__img-text" href="{{ route('client.template.download', [$template->id]) }}">
                                    {{ __('main.download' )}}
                                </a>
                            </div>
                          @endforeach
                        </div>
                        <div class="question__question-inner">
                            <h2 class="question__title">
                                {{ __('main.FAQ') }}
                            </h2>
                            @foreach($questions ?? [] as $question)
                            <div class="question__question-block" data-tab="#tab{{ $loop->iteration }}">
                                <h3 class="question__question-title">{{ $question->name }}</h3>
                                <div class="question__question-content" id="tab{{ $loop->iteration }}">
                                    <p>{{ $question->text }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script type="text/javascript">
    const tabPages = document.querySelectorAll('.question__question-block')

    tabPages.forEach((elem) => {
        elem.addEventListener('click', () => {
            elem.classList.toggle('active');
            let dataPage = elem.getAttribute('data-tab');
            let itemsPage = document.querySelector(dataPage);
            itemsPage.classList.toggle('active');
        })
    })

    </script>
</x-app-layout>
