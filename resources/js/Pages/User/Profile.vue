<template>
  <div>
    <div class="profil page" id="page4">
      <div class="stemplen__container">
        <div class="profil__info-block">
          <h3 class="stemple__set-title">
            {{ user.first_name }} {{ user.last_name }}
          </h3>
          <div class="profil__settings-inner">
            <div class="profil__set-date">
              <span> {{ $trans("main.register") }}: {{ created_at }}</span>
            </div>
            <div class="profil__set-email">
              <div class="profil__email-img">
                <img src="/storage/image/user/email.svg" alt="icon" />
              </div>
              <span class="profil__email-text">{{ user.email }}</span>
            </div>
          </div>
        </div>
        <div class="profil__info-block">
          <button class="profil__button">{{ $trans("main.resend") }}</button>
          <span class="profil__button-text">{{
            $trans("main.forgot_password")
          }}</span>
        </div>
        <div class="profil__info-block">
          <button class="profil__button">{{ $trans("main.delete_profile") }}</button>
          <span class="profil__button-text">{{
            $trans("main.delete_profile_text")
          }}</span>
        </div>
        <div class="profil__title-inner">
          <div class="profil__title-img">
            <img
              src="/storage/image/user/bookmark.svg"
              alt=""
              style="fill: #ff006d"
            />
          </div>
          <h4 class="stemplen__sub-title">{{ $trans("main.my_cards") }}</h4>
        </div>
        <div class="profil__logo-inner">
          <div class="profil__logo-img" v-for="card in cards" :key="card.id">
            <Link :href="route('user.card_add', [card.id])">
              <img :src="`/storage/image/card/${card.logo}`" alt="" />
            </Link>
          </div>
        </div>
      </div>
      <div style="height: 50px"></div>
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
    user: Object,
    created_at: String,
  },
  layout: Layout,
};
</script>
