<template>
  <div>
    <div class="form page" id="page2">
      <form @submit.prevent="form.post(route('user.login'))">
        <div class="stemplen__container">
          <h2 class="form__title">{{ $trans("main.login") }}</h2>
          <form action="#" class="form__reg">
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
          </form>
          <div class="form__button-inner" style="margin-top:30px">
            <button
              type="submit"
              :disabled="form.processing"
              class="footer__logo form__button"
              data-tab="#page5"
            >
              {{ $trans("main.login") }}
            </button>
          </div>
          <div style="height: 25px"></div>
          <div class="form__button-inner">
            <Link :href="route('user.register')">
              <button type="submit" class="footer__logo form__button">
                {{ $trans("main.sign_up") }}
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
import Layout from "./Components/Layout";
export default {
  layout: Layout,
  components: {
    Link,
  },
  props: {
    errors: Array
  },
  data() {
    return {
      form: this.$inertia.form({
        email: null,
        password: null,
      }),
    };
  },
};
</script>
