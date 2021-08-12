<template>
  <div>
    <div class="main__slider-page page" id="page11">
      <section class="main__slider">
        <div class="main__swip-slider swiper-container">
          <div class="main__swip-slider-wrapper swiper-wrapper">
            <div class="main__swip-slide swiper-slide">
              <div class="main__swip-slide-container">
                <img src="/storage/image/user/slider1.jpg" alt="banner" />
              </div>
            </div>
            <div class="main__swip-slide swiper-slide">
              <div class="main__swip-slide-container">
                <img src="/storage/image/user/slider1.jpg" alt="banner" />
              </div>
            </div>
            <div class="main__swip-slide swiper-slide">
              <div class="main__swip-slide-container">
                <img src="/storage/image/user/slider1.jpg" alt="banner" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="main__logo">
        <div class="stemplen__container">
          <div class="main__logo-inner">
            <Link v-for="card in cards" :href="route('user.card_add', [card.id])" :key="card.id">
              <div class="main__logo-img" >
                <img :src="`/storage/image/card/${card.logo}`" alt="" /></div
            ></Link>
          </div>
        </div>
      </section>
      <div></div>
    </div>
  </div>
</template>
<script>
import Layout from "./Components/Layout";
import { Link } from "@inertiajs/inertia-vue";
export default {
  components: {
    Link,
  },
  props: {
    cards: Array,
  },
  layout: Layout,
};
</script>
