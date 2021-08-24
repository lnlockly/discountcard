<template>
    <div>
        <div class="question page" id="page5">
            <div class="stemplen__container">
                <h3 class="form__title"> {{ $trans('main.push_subscribe') }}</h3>
                <span v-html="$trans('main.push_text')"></span>
                <div class="question__button-inner">
                    <button class="question__button-yes">{{ $trans('main.yes') }}</button>
                    <button class="question__button-no">{{ $trans('main.no') }}</button>
                </div>
            </div>
        </div>
    </div>
</template>
