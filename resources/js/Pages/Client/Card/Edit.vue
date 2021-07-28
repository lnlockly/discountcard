<template>
    <div class="wrap">

        <Head>
            <title>Card create</title>
            <link href="../../css/form.css" rel="stylesheet">
            <script type="application/javascript" defer src="../../js/script.js"></script>
        </Head>
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <form @submit.prevent="form.post(route('client.card.update'))">
                    <div v-show="step == 1">
                        <main class="redact">
                            <div class="container">
                                <h2 class="main-title">Настройка дизайна</h2>
                            </div>
                            <div class="background">
                                <div class="container">
                                    <h3 class="sub-title">Название карты</h3>
                                    <div class="input-text">
                                        <input class="card-input" type="text" v-model="form.name" placeholder="Например: моя первая карта">
                                    </div>
                                    <h5 class="background-hat">Логотип</h5>
                                    <div class="insert-inner">
                                        <div class="drop-zone">
                                            <input type="file" name="myFile" class="drop-zone__input" @input="form.logo = $event.target.files[0]">
                                            <div class="logo-inner">
                                                <img src="" alt="">
                                                <span>Перетяните файл</span>
                                            </div>
                                            <label for="drop-zone__input" class="input__file-button">
                                                <p class="input__file-button-text">Выбрать</p>
                                            </label>
                                        </div>
                                        <ul class="bulleted-list">
                                            <li>Файл должен быть иметь формат png</li>
                                            <li>Рекомендованный размер: 480х150 пикселей.<br> Минимальная высота 150 пикселей.<br> Максимальная высота
                                                должна быть равна<br> пропорции (высота х 3.2).</li>
                                        </ul>
                                    </div>
                                    <h3 class="sub-title">Цвет карты</h3>
                                    <div class="background2">
                                        <div class="back">
                                            <p class="background-hat">Фон "шапки"</p>
                                            <div class="input-colorr">
                                                <input type="color" class="input-color" value="#1100ff" v-model="form.color_header" />
                                                <input type="text" class="input-color-text1" v-model="form.color_header">
                                            </div>
                                        </div>
                                        <div class="back">
                                            <p class="background-hat">Фон страницы</p>
                                            <div class="input-colorr">
                                                <input type="color" class="input-color2" value="#ffffff" v-model="form.color_body" />
                                                <input type="text" class="input-color-text2" v-model="form.color_body">
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="sub-title">Количество штампов</h3>
                                    <div class="stamp">
                                        <p class="background-hat">Выберите сколько всего штампов<br> будет размещено на карте (от 1 до 30)</p>
                                    </div>
                                    <div class="number-stamp">
                                        <div class="number" v-for="stamp in 30" @click="form.stamps = stamp">{{ stamp }}</div>
                                    </div>
                                    <div class="appearance">
                                        <h3 class="sub-title">Внешний вид штампов</h3>
                                        <p class="background-hat">Изображение активного штампа</p>
                                        <div class="form__tab-inner">
                                            <div class="form__tab">
                                                <div class="form__tab-img">
                                                    <img src="img/icons/3.png" alt="water">
                                                </div>
                                                <div class="form__tab-name-inenr">
                                                </div>
                                                <div class="form__tab-arrow">
                                                    <img src="" alt="arrow">
                                                </div>
                                            </div>
                                            <div class="form__tab-content">
                                                <img src="img/icons/1.png" alt="">
                                                <img src="img/icons/2.png" alt="">
                                                <img src="img/icons/3.png" alt="">
                                                <img src="img/icons/4.png" alt="">
                                                <img src="img/icons/5.png" alt="">
                                                <img src="img/icons/6.png" alt="">
                                                <img src="img/icons/7.png" alt="">
                                                <img src="img/icons/8.png" alt="">
                                                <img src="img/icons/9.png" alt="">
                                                <img src="img/icons/10.png" alt="">
                                                <img src="img/icons/11.png" alt="">
                                                <img src="img/icons/12.png" alt="">
                                                <img src="img/icons/13.png" alt="">
                                                <img src="img/icons/14.png" alt="">
                                                <img src="img/icons/15.png" alt="">
                                            </div>
                                        </div>
                                        <div class="appearance-of-stamps">
                                        </div>
                                    </div>
                                    <div class="form__botton-inner">
                                        <div @click="prev()" class="form__button">
                                            <a class="form__but">Назад</a>
                                        </div>
                                        <div @click="next()" class="form__button">
                                            <a class="form__but">Следующий шаг</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    <div v-show="step == 2">
                        <div class="container">
                            <h2 class="main-title">Информация</h2>
                            <div v-for="error in errors"> {{ error }}</div>
                        </div>
                        <div class="background">
                            <div class="container">
                                <div class="background3">
                                    <h3 class="sub-title">Описание карты</h3>
                                    <p class="text">Это будет отображаться в верхней части вашей карты<br> Apple Wallet и на вашей странице регистрации
                                    </p>
                                    <div class="input-text">
                                        <input class="card-input" type="text" placeholder="Например: собирайте штамы для получения наград" v-model="form.card_description">
                                    </div>
                                </div>
                                <div class="background3">
                                    <h3 class="sub-title">Как клиенту получить штамп</h3>
                                    <p class="text">Примеры: купите кофе стоимостью от 150 рублей, чтобы получить штамп;<br> получите 1 штамп за каждый кофе, который вы покупаете
                                    </p>
                                    <div class="input-text">
                                        <input class="card-input" type="text" placeholder="Например: купите кофе стоимостью от 150 рублей" v-model="form.card_use">
                                    </div>
                                </div>
                                <div class="background3">
                                    <h2 class="main-title2">Детали вознаграждения</h2>
                                    <h3 class="sub-title">Описание награды</h3>
                                    <p class="text">Опишите награду. (например, вы получите бесплатный кофе)<br> после получения 8 штампов; 4 штампа = 10% скидка
                                    </p>
                                    <div class="input-text">
                                        <input class="card-input" type="text" placeholder="Введите описание награды" v-model="form.gift_description">
                                    </div>
                                </div>
                                <div class="background3">
                                    <h3 class="sub-title">Цена за 1 подарок</h3>
                                    <p class="text">Введите стоимость 1 подарка для статистики
                                    </p>
                                    <div class="input-text">
                                        <input class="card-input" type="number" step="0.5" placeholder="150.00" v-model="form.gift_price">
                                    </div>
                                </div>
                                <h2 class="main-title3">Условия использования</h2>
                                <p class="text">Опишите награду. (например, вы получите бесплатный кофе)<br> после получения 8 штампов; 4 штампа = 10% скидка
                                </p>
                                <div class="input-text2">
                                    <textarea class="card-input2" type="text" placeholder="Условия использования" v-model="form.condition"></textarea>
                                </div>
                                <div class="form__botton-inner">
                                    <div @click="prev()" class="form__button">
                                        <a class="form__but">Назад</a>
                                    </div>
                                    <div class="form__button">
                                        <button type="submit" :disabled="form.processing" class="form__but">Создать карту</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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
