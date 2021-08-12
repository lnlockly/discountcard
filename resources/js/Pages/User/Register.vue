<template>
  <div>
    <div class="form page">
      <form @submit.prevent="form.post(route('user.adduser'))">
        <div class="stemplen__container">
          <div v-for="error in errors">{{ error }}</div>
          <h2 class="form__title">{{ $trans("main.register") }}</h2>
          <form action="#" class="form__reg">
            <label for="" class="form__inner">
              <h4 class="form__input-title">{{ $trans("main.first_name") }}</h4>
              <input
                type="text"
                class="form__text-input"
                required
                v-model="form.first_name"
              />
            </label>
            <label for="" class="form__inner">
              <h4 class="form__input-title">{{ $trans("main.last_name") }}</h4>
              <input
                type="text"
                class="form__text-input"
                required
                v-model="form.last_name"
              />
            </label>
            <label for="" class="form__inner">
              <h4 class="form__input-title">{{ $trans("main.email") }}</h4>
              <input
                type="text"
                class="form__text-input"
                required
                v-model="form.email"
              />
            </label>
            <label for="" class="form__inner">
              <h4 class="form__input-title">{{ $trans("main.password") }}</h4>
              <input
                type="password"
                class="form__text-input"
                required
                v-model="form.password"
              />
            </label>
            <label for="" class="form__ques">
              <input type="checkbox" class="form__checkbox" required />
              <span class="form__ques-text">{{
                $trans("main.personal_data")
              }}</span>
            </label>
          </form>
          <div class="form__button-inner">
            <button
              type="submit"
              :disabled="form.processing"
              class="footer__logo form__button"
            >
              {{ $trans("main.sign_up") }}
            </button>
          </div>
          <div style="height: 25px"></div>
          <div class="form__button-inner">
            <Link :href="route('user.login')">
              <button type="submit" class="footer__logo form__button">
                {{ $trans("main.login") }}
              </button></Link
            >
          </div>
        </div>
        <div style="height: 50px"></div>
      </form>
    </div>
  </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue";
export default {
  components: {
    Link,
  },
  props: {
    errors: Object,
  },
  data() {
    return {
      form: this.$inertia.form({
        email: null,
        first_name: null,
        last_name: null,
        password: null,
      }),
    };
  },
};
</script>
