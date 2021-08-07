<template>
    <div>
        <div class="question page" id="page5">
            <div class="stemplen__container">
                <h3 class="form__title"> {{ $trans('push_subscribe') }}</h3>
                <span v-html="$trans('push_text')"></span>
                <div class="question__button-inner">
                    <button class="question__button-yes">{{ $trans('yes') }</button>
                    <button class="question__button-no">{{ $trans('no') }}</button>
                </div>
            </div>
        </div>
    </div>
</template>
