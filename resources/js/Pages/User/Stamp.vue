<template>
  <div>
    <div class="pin page" id="page-pin">
      <div style="height: 50px"></div>
      <div class="stemplen__container">
        <h3 class="pin__title">{{ $trans("stamp_input") }}</h3>
        <form @submit.prevent="submit" class="pin__form">
          <label for="" class="pin__input">
            <input type="number" class="pin__pas-inp" v-model="code[0]" />
          </label>
          <label for="" class="pin__input">
            <input type="number" class="pin__pas-inp" v-model="code[1]" />
          </label>
          <label for="" class="pin__input">
            <input type="number" class="pin__pas-inp" v-model="code[2]" />
          </label>
          <label for="" class="pin__input">
            <input type="number" class="pin__pas-inp" v-model="code[3]" />
          </label>
        </form>
        <div class="pin__number-inner">
          <div class="pin__number">1</div>
          <div class="pin__number">2</div>
          <div class="pin__number">3</div>
          <div class="pin__number">4</div>
          <div class="pin__number">5</div>
          <div class="pin__number">6</div>
          <div class="pin__number">7</div>
          <div class="pin__number">8</div>
          <div class="pin__number">9</div>
          <div class="pin__number-hide">
            <span class="pin__number-hide"></span>
          </div>
          <div class="pin__number">0</div>
          <div class="pin__del">
            <div class="pin__del-img">
              <img src="/storage/image/user/becks.png" alt="" />
            </div>
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
  data() {
    return {
      code: [],
    };
  },
  watch: {
    code() {
      if (this.code[3] != null) {
        this.submit();
      }
    },
  },
  methods: {
    submit() {
      this.$inertia.post(route("user.add_stamp"), this.code);
    },
  },
  layout: Layout
};
</script>