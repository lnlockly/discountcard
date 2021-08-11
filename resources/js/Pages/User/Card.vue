<template>
  <div>
<<<<<<< HEAD
    <div class="card page">
=======
    <div class="card page" id="page1">
>>>>>>> 3cf8dfcc976b3c553ef8f677ba320ad8edd88355
      <div class="stemplen__container"></div>
      <section class="card__logo">
        <div class="card__logo-inner">
          <div class="card__logo-img">
<<<<<<< HEAD
            <img :src="`/storage/image/card/${card.logo}`" alt="firm-logo" />
=======
            <img :src="`/storage/image/card/{$card.logo}`" alt="firm-logo" />
>>>>>>> 3cf8dfcc976b3c553ef8f677ba320ad8edd88355
          </div>
        </div>
      </section>
      <section class="card__info">
        <div class="stemplen__container">
          <h5 class="card__info-sub-title">
<<<<<<< HEAD
            {{ $trans("main.card_belongs") }}
=======
            {{ $trans("card_belongs") }}
>>>>>>> 3cf8dfcc976b3c553ef8f677ba320ad8edd88355
          </h5>
          <h2 class="card__info-title">
            {{ card.name }}
          </h2>
          <div class="card__info-img-inner">
            <div class="card__info-img" v-for="stamp in card.stamps">
<<<<<<< HEAD
              <img :src="`/storage/image/stamps/${card.stamp_icon}`" alt="img" />
=======
              <img :src="`/storage/image/stamp/${card.stamp_icon}`" alt="img" />
>>>>>>> 3cf8dfcc976b3c553ef8f677ba320ad8edd88355
            </div>
          </div>
          <p class="card__info-text">
            {{ card.condition }}
          </p>
<<<<<<< HEAD
          <div class="form__button-inner">
            <button
              v-if="register"
              type="submit"
              class="footer__logo form__button"
            >
              {{ $trans("main.sign_up") }}
            </button>
          </div>
=======
>>>>>>> 3cf8dfcc976b3c553ef8f677ba320ad8edd88355
          <div style="height: 50px"></div>
        </div>
      </section>
    </div>
  </div>
</template>
<script>
export default {
  props: {
<<<<<<< HEAD
    card: Object,
    register: Boolean,
    error: String
=======
    card,
>>>>>>> 3cf8dfcc976b3c553ef8f677ba320ad8edd88355
  },
};
</script>