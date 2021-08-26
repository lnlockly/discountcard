<template>
  <div class="wrap">
    <Head>
      <title>Card create</title>
    </Head>
    <form @submit.prevent="form.post(route('client.card.store'))">
      <div v-show="step == 1">
        <main class="redact">
          <div class="container">
            <h2 class="main-title">{{ $trans("card.setting_design") }}</h2>
          </div>
          <div class="background">
            <div class="container">
              <form action="#" class="main__form">
                <h3 class="sub-title">{{ $trans("card.card_name") }}</h3>
                <div class="input-text">
                  <input
                    class="card-input"
                    type="text"
                    v-model="form.name"
                    :placeholder="`${$trans('card.card_placeholder')}`"
                  />
                </div>
                <h5 class="background-hat">{{ $trans("card.logo") }}</h5>
                <div class="insert-inner">
                  <div class="drop-zone">
                    <input
                      type="file"
                      name="myFile"
                      class="drop-zone__input"
                      @input="form.logo = $event.target.files[0]"
                    />
                    <div class="logo-inner">
                      <img src="" alt="" />
                      <span> {{ $trans("card.image_placeholder") }} </span>
                    </div>
                    <label for="drop-zone__input" class="input__file-button">
                      <p class="input__file-button-text">
                        {{ $trans("card.select") }}
                      </p>
                    </label>
                  </div>
                  <ul class="bulleted-list">
                    <span v-html="$trans('card.image_rules')"></span>
                  </ul>
                </div>
                <h3 class="sub-title">{{ $trans("card.card_color") }}</h3>
                <div class="background2">
                  <div class="back">
                    <p class="background-hat">
                      {{ $trans("card.color_header") }}
                    </p>
                    <div class="input-colorr">
                      <input
                        type="color"
                        class="input-color"
                        value="#1100ff"
                        v-model="form.color_header"
                      />
                      <input
                        type="text"
                        class="input-color-text1"
                        v-model="form.color_header"
                      />
                    </div>
                  </div>
                  <div class="back">
                    <p class="background-hat">
                      {{ $trans("card.color_body") }}
                    </p>
                    <div class="input-colorr">
                      <input
                        type="color"
                        class="input-color2"
                        value="#ffffff"
                        v-model="form.color_body"
                      />
                      <input
                        type="text"
                        class="input-color-text2"
                        v-model="form.color_body"
                      />
                    </div>
                  </div>
                </div>
                <h3 class="sub-title">{{ $trans("card.nof_stamps") }}</h3>
                <div class="stamp">
                  <p
                    class="background-hat"
                    v-html="$trans('card.stamps_placeholder')"
                  ></p>
                </div>
                <div class="number-stamp">
                  <div
                    class="number"
                    v-for="stamp in 30"
                    @click="form.stamps = stamp"
                  >
                    {{ stamp }}
                  </div>
                </div>
                <div class="appearance">
                  <h3 class="sub-title">{{ $trans("card.stamps_font") }}</h3>
                  <p class="background-hat">
                    {{ $trans("card.active_stamp") }}
                  </p>
                  <div class="form__tab-inner">
                    <div class="form__tab">
                      <div class="form__tab-img">
                        <img
                          :src="`/storage/image/stamps/${form.stamp_icon}`"
                        />
                      </div>
                      <div class="form__tab-name-inenr"></div>
                      <div class="form__tab-arrow">
                        <img src="" alt="arrow" />
                      </div>
                    </div>
                    <div class="form__tab-content">
                      <img
                        style="max-width: 30%"
                        v-for="icon in stamp_icons"
                        :src="`/storage/image/stamps/${icon}`"
                        @click="form.stamp_icon = icon"
                      />
                    </div>
                  </div>
                  <div class="appearance-of-stamps"></div>
                </div>
                <div class="form__botton-inner">
                  <div @click="prev()" class="form__button">
                    <a class="form__but">{{ $trans("card.prev") }}</a>
                  </div>
                  <div @click="next()" class="form__button">
                    <a class="form__but">{{ $trans("card.next") }}</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </main>
      </div>
      <div v-show="step == 2">
        <div class="container">
          <h2 class="main-title">{{ $trans("card.info") }}</h2>
          <div v-for="error in errors">{{ error }}</div>
        </div>
        <div class="background">
          <div class="container">
            <div class="background3">
              <h3 class="sub-title">{{ $trans("card.card_use") }}</h3>
              <p class="text" v-html="$trans('card.card_use_text')"></p>
              <div class="input-text">
                <input
                  class="card-input"
                  type="text"
                  :placeholder="`${$trans('card.card_use_placeholder')}`"
                  v-model="form.card_use"
                />
              </div>
            </div>
            <div class="background3">
              <h3 class="sub-title">{{ $trans("card.gift_price") }}</h3>
              <p class="text" v-html="$trans('card.gift_price_text')"></p>
              <div class="input-text">
                <input
                  class="card-input"
                  type="number"
                  step="0.5"
                  placeholder="150.00"
                  v-model="form.gift_price"
                />
              </div>
            </div>
            <h2 class="main-title3">{{ $trans("card.condition") }}</h2>
            <p class="text" v-html="$trans('card.condition_text')"></p>
            <div class="input-text2">
              <textarea
                class="card-input2"
                type="text"
                :placeholder="`${$trans('card.condition')}`"
                v-model="form.condition"
              ></textarea>
            </div>
            <div class="form__botton-inner">
              <div @click="prev()" class="form__button">
                <a class="form__but">{{ $trans("card.prev") }}</a>
              </div>
              <div class="form__button">
                <button
                  type="submit"
                  :disabled="form.processing"
                  class="form__but"
                >
                  {{ $trans("card.card_create") }}
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>
<script>
import { Head } from "@inertiajs/inertia-vue";
import { trans } from "matice"

export default {
  components: {
    Head,
  },
  props: {
    stamp_icons: Array,
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
        stamp_icon: "3.png",
        gift_price: null,
        condition: trans("card.condition_value"),
        card_use: null,
      }),
    };
  },
  methods: {
    next() {
      window.scrollTo(0, 0);
      this.step = 2;
    },
    prev() {
      this.step = 1;
    },
  },
};
</script>
