<template>
    <div class="wrap">

        <Head>
            <title>Card create</title>
            <link href="../../css/form.css" rel="stylesheet">
            <script type="application/javascript" defer src="../../js/script.js"></script>
        </Head>
        <form @submit.prevent="form.post(route('client.card.store'))">
            <div v-show="step == 1">
                <main class="redact">
                    <div class="container">
                        <h2 class="main-title">{{ $trans('card.setting_design') }}Настройка дизайна</h2>
                    </div>
                    <div class="background">
                        <div class="container">
                            <form action="#" class="main__form">
                                <h3 class="sub-title"> {{ $trans('card.card_name') }} Название карты</h3>
                                <div class="input-text">
                                    <input class="card-input" type="text" v-model="form.name" placeholder="{{ $trans('card.card_placeholder') }}Например: моя первая карта">
                                </div>
                                <h5 class="background-hat">{{ $trans('card.logo') }}Логотип</h5>
                                <div class="insert-inner">
                                    <div class="drop-zone">
                                        <input type="file" name="myFile" class="drop-zone__input" @input="form.logo = $event.target.files[0]">
                                        <div class="logo-inner">
                                            <img src="" alt="">
                                            <span>{{ $trans('card.image_placeholder') }}Перетяните файл</span>
                                        </div>
                                        <label for="drop-zone__input" class="input__file-button">
                                            <p class="input__file-button-text">{{ $trans('card.select') }}Выбрать</p>
                                        </label>
                                    </div>
                                    <ul class="bulleted-list">
                                        {{ $trans('card.image_rules') }}
                                        <li>Файл должен быть иметь формат png</li>
                                        <li>Рекомендованный размер: 480х150 пикселей.<br> Минимальная высота 150 пикселей.<br> Максимальная высота
                                            должна быть равна<br> пропорции (высота х 3.2).</li>
                                    </ul>
                                </div>
                                <h3 class="sub-title">{{ $trans('card.card_color') }}Цвет карты</h3>
                                <div class="background2">
                                    <div class="back">
                                        <p class="background-hat">{{ $trans('card.color_header') }}Фон "шапки"</p>
                                        <div class="input-colorr">
                                            <input type="color" class="input-color" value="#1100ff" v-model="form.color_header" />
                                            <input type="text" class="input-color-text1" v-model="form.color_header">
                                        </div>
                                    </div>
                                    <div class="back">
                                        <p class="background-hat">{{ $trans('card.color_body') }}Фон страницы</p>
                                        <div class="input-colorr">
                                            <input type="color" class="input-color2" value="#ffffff" v-model="form.color_body" />
                                            <input type="text" class="input-color-text2" v-model="form.color_body">
                                        </div>
                                    </div>
                                </div>
                                <h3 class="sub-title">{{ $trans('card.nof_stamps') }}Количество штампов</h3>
                                <div class="stamp">
                                    <p class="background-hat">{{ $trans('card.stamps_placeholder') }}Выберите сколько всего штампов<br> будет размещено на карте (от 1 до 30)</p>
                                </div>
                                <div class="number-stamp">
                                    <div class="number" v-for="stamp in 30" @click="form.stamps = stamp">{{ stamp }}</div>
                                </div>
                                <div class="appearance">
                                    <h3 class="sub-title">{{ $trans('card.stamps_font') }}Внешний вид штампов</h3>
                                    <p class="background-hat">{{ $trans('card.active_stamp') }}Изображение активного штампа</p>
                                    <div class="form__tab-inner">
                                        <div class="form__tab">
                                            <div class="form__tab-img">
                                                <img :src="`/storage/image/stamps/${form.stamp_icon}`">
                                            </div>
                                            <div class="form__tab-name-inenr">
                                            </div>
                                            <div class="form__tab-arrow">
                                                <img src="" alt="arrow">
                                            </div>
                                        </div>
                                        <div class="form__tab-content">
                                            <img v-for="icon in stamp_icons" :src="`/storage/image/stamps/${icon}`" @click="form.stamp_icon = icon">
                                        </div>
                                    </div>
                                    <div class="appearance-of-stamps">
                                    </div>
                                </div>
                                <div class="form__botton-inner">
                                    <div @click="prev()" class="form__button">
                                        <a class="form__but">{{ $trans('card.prev') }}Назад</a>
                                    </div>
                                    <div @click="next()" class="form__button">
                                        <a class="form__but">{{ $trans('card.next') }}Следующий шаг</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
            <div v-show="step == 2">
                <div class="container">
                    <h2 class="main-title">{{ $trans('card.info') }}Информация</h2>
                    <div v-for="error in errors"> {{ error }}</div>
                </div>
                <div class="background">
                    <div class="container">
                        <div class="background3">
                            <h3 class="sub-title">{{ $trans('card.description') }}Описание карты</h3>
                            <p class="text">{{ $trans('card.description_text') }}Это будет отображаться в верхней части вашей карты<br> Apple Wallet и на вашей странице регистрации
                            </p>
                            <div class="input-text">
                                <input class="card-input" type="text" placeholder="{{ $trans('card.description_placeholder') }}Например: собирайте штамы для получения наград" v-model="form.card_description">
                            </div>
                        </div>
                        <div class="background3">
                            <h3 class="sub-title">{{ $trans('card.card_use') }}Как клиенту получить штамп</h3>
                            <p class="text">{{ $trans('card.card_use_text') }}Примеры: купите кофе стоимостью от 150 рублей, чтобы получить штамп;<br> получите 1 штамп за каждый кофе, который вы покупаете
                            </p>
                            <div class="input-text">
                                <input class="card-input" type="text" placeholder="{{ $trans('card.card_use_placeholder') }}Например: купите кофе стоимостью от 150 рублей" v-model="form.card_use">
                            </div>
                        </div>
                        <div class="background3">
                            <h2 class="main-title2">{{ $trans('card.details') }}Детали вознаграждения</h2>
                            <h3 class="sub-title">{{ $trans('card.gift_description') }}Описание награды</h3>
                            <p class="text">{{ $trans('card.gift_description_text') }}Опишите награду. (например, вы получите бесплатный кофе)<br> после получения 8 штампов; 4 штампа = 10% скидка
                            </p>
                            <div class="input-text">
                                <input class="card-input" type="text" placeholder="{{ $trans('card.gift_description_placeholder') }}Введите описание награды" v-model="form.gift_description">
                            </div>
                        </div>
                        <div class="background3">
                            <h3 class="sub-title">{{ $trans('card.gift_price') }}Цена за 1 подарок</h3>
                            <p class="text">{{ $trans('card.gift_price_text') }}Введите стоимость 1 подарка для статистики
                            </p>
                            <div class="input-text">
                                <input class="card-input" type="number" step="0.5" placeholder="150.00" v-model="form.gift_price">
                            </div>
                        </div>
                        <h2 class="main-title3">{{ $trans('card.condition') }}Условия использования</h2>
                        <p class="text">{{ $trans('card.condition_text') }}Опишите награду. (например, вы получите бесплатный кофе)<br> после получения 8 штампов; 4 штампа = 10% скидка
                        </p>
                        <div class="input-text2">
                            <textarea class="card-input2" type="text" placeholder="{{ $trans('card.condition') }}Условия использования" v-model="form.condition"></textarea>
                        </div>
                        <div class="form__botton-inner">
                            <div @click="prev()" class="form__button">
                                <a class="form__but">{{ $trans('card.prev') }}</a>
                            </div>
                            <div class="form__button">
                                <button type="submit" :disabled="form.processing" class="form__but">{{ $trans('card.card_create') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>
<script>
import { Head } from '@inertiajs/inertia-vue'

export default {
    components: {
        Head
    },
    props: {
        errors: Object,
    },
    data() {
        return {
            step: 1,
            form: this.$inertia.form({
                name: null,
                logo: null,
                color_header: null,
                color_body: null,
                stamps: null,
                stamp_icon: '1111111',
                gift_price: null,
                condition: null,
                card_description: null,
                card_use: null,
                gift_description: null,
            }),
        }
    },
    methods: {
        next() {
            window.scrollTo(0, 0)
            this.step = 2
        },
        prev() {
            this.step = 1
        }

    }
}

</script>
