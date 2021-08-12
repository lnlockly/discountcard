<template>
  <div>
    <div class="card page" :style="{'background-color': card.color_body}">
      <div class="stemplen__container"></div>
      <section class="card__logo">
        <div class="card__logo-inner" :style="{'background-color': card.color_header}">
          <div class="card__logo-img">
            <img :src="`/storage/image/card/${card.logo}`" alt="firm-logo" />
          </div>
        </div>
      </section>
      <section class="card__info">
        <div class="stemplen__container">
          <h5 class="card__info-sub-title">
            {{ $trans("main.card_belongs") }}
          </h5>
          <h2 class="card__info-title">
            {{ card.name }}
          </h2>
          <div class="card__info-img-inner">
            <div class="card__info-img" v-for="i in parseInt(card.stamps)">
              <img
                :src="`/storage/image/stamps/${card.stamp_icon}`"
                alt="img"
              />
            </div>
          </div>
          <p class="card__info-text">
            {{ card.condition }}
          </p>
          <div class="form__button-inner">
            <Link :href="route('user.register')">
              <button
                v-if="register"
                type="submit"
                class="footer__logo form__button"
              >
                {{ $trans("main.sign_up") }}
              </button></Link
            >
          </div>
          <div style="height: 50px"></div>
        </div>
      </section>
    </div>
  </div>
</template>
<script>
import Layout from "./Components/Layout.vue";
import { Link } from "@inertiajs/inertia-vue";
export default {
  components: {
    Link,
  },
  props: {
    card: Object,
    register: Boolean,
    error: String,
  },
  layout: Layout,

};
</script>