<template>
  <div>
    <div class="profil page" id="page4">
      <div class="stemplen__container">
        <div class="profil__info-block">
          <h3 class="stemple__set-title">{{ user.first_name }} {{ user.last_name }}</h3>
          <div class="profil__settings-inner">
            <div class="profil__set-date">
              <span> {{ $trans('register') }}: {{ user.created_at }}</span>
            </div>
            <div class="profil__set-email">
              <div class="profil__email-img">
                <img src="/user/email.svg" alt="icon" />
              </div>
              <span class="profil__email-text">{{ user.email }}</span>
            </div>
          </div>
        </div>
        <div class="profil__info-block">
          <button class="profil__button">{{ $trans("resend") }}</button>
          <span class="profil__button-text">{{
            $trans("forgot_password")
          }}</span>
        </div>
        <div class="profil__info-block">
          <button class="profil__button">{{ $trans("resend") }}</button>
          <span class="profil__button-text">{{
            $trans("forgot_password")
          }}</span>
        </div>
        <div class="profil__title-inner">
          <div class="profil__title-img">
            <img src="/user/bookmark.svg" alt="" style="fill: #ff006d" />
          </div>
          <h4 class="stemplen__sub-title"> {{ $trans('my_cards') }}</h4>
        </div>
        <div class="profil__logo-inner">
          <div class="profil__logo-img" v-for="card in cards">
            <img :src="`/storage/image/card/{$card.logo}`" alt="" />
          </div>
        </div>
      </div>
      <div style="height: 50px"></div>
    </div>
  </div>
</template>
<script>
import Layout from './Components/Layout'
export default {
  props: {
    cards: Object,
    user: Object
  },
  layout: Layout
}
</script>
