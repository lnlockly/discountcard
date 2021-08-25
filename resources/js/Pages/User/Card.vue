<template>
  <div>
    <div class="card page" :style="{ 'background-color': card.color_body }">
      <div class="stemplen__container"></div>
      <section class="card__logo">
        <div
          class="card__logo-inner"
          :style="{ 'background-color': card.color_header }"
        >
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
            <div class="card__info-img" v-for="(i, index) in parseInt(card.stamps)">
              <img
                :src="`/storage/image/stamps/${card.stamp_icon}`"
                alt="img"
                :style="{ opacity: opacity[index] }"
              />
            </div>
          </div>
          <p class="card__info-text">
            {{ card.card_use }}
          </p>
          <div class="form__button-inner" style="padding-bottom: 20px">
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
    stamps: Number,
  },
  data() {
    return {
      opacity: [],
    };
  },
  mounted() {
    for (let i = 0; i < this.card.stamps; i++) {
      this.opacity.push(0.3);
    }
    for (let i = 0; i < this.stamps; i++) {
      this.opacity[i] = 1;
    }
  },
  layout: Layout,
};
</script>