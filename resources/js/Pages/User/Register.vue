<template>
    <div class="form page" id="page">
        <form @submit.prevent="form.post(route('user.register'))">
            <div class="stemplen__container">
                <h2 class="form__title">{{ $trans('main.register') }} Регистрация</h2>
                <form action="#" class="form__reg">
                    <label for="" class="form__inner">
                        <h4 class="form__input-title">{{ $trans('main.first_name') }}Имя</h4>
                        <input type="text" class="form__text-input" required v-model="form.first_name">
                    </label>
                    <label for="" class="form__inner">
                        <h4 class="form__input-title">{{ $trans('main.last_name') }}Фамилия</h4>
                        <input type="text" class="form__text-input" required v-model="form.last_name">
                    </label>
                    <label for="" class="form__inner">
                        <h4 class="form__input-title">{{ $trans('main.email') }}Емаил</h4>
                        <input type="text" class="form__text-input" required v-model="form.email">
                    </label>
                    <label for="" class="form__inner">
                        <h4 class="form__input-title">{{ $trans('main.password') }}Пароль</h4>
                        <input type="password" class="form__text-input" required v-model="form.password">
                    </label>
                    <label for="" class="form__ques">
                        <input type="checkbox" class="form__checkbox" required>
                        <span class="form__ques-text">{{ $trans('main.personal_data') }}Я согласен на обработку персональных данных</span>
                    </label>
                </form>
                <div class="form__button-inner">
                    <button type="submit" class="footer__logo form__button" data-tab="#page5">{{ $trans('main.sign_up') }}Зарегестрироваться</button>
                </div>
            </div>
            <div style="height: 50px;"></div>
        </form>
    </div>
    <script>
    export default {
        data() {
            return {
                form: this.$inertia.form({
                    email: null,
                    first_name: null,
                    last_name: null,
                    password: null,
                }),
            }
        },
    }

    </script>
</template>
