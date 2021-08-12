<template>
  <div>
    <div class="pin page" id="page-pin">
      <div style="height: 50px"></div>
      <div class="stemplen__container">
        <h3 class="pin__title">{{ $trans("main.stamp_input") }}</h3>
        <form @submit.prevent="submit" class="pin__form">
          <label for="" class="pin__input">
            <input type="number" class="pin__pas-inp" v-model="form.key[0]" />
          </label>
          <label for="" class="pin__input">
            <input type="number" class="pin__pas-inp" v-model="form.key[1]" />
          </label>
          <label for="" class="pin__input">
            <input type="number" class="pin__pas-inp" v-model="form.key[2]" />
          </label>
          <label for="" class="pin__input">
            <input type="number" class="pin__pas-inp" v-model="form.key[3]" />
          </label>
        </form>
        <div class="pin__number-inner">
          <div class="pin__number" @click="form.key.push(1)">1</div>
          <div class="pin__number" @click="form.key.push(2)">2</div>
          <div class="pin__number" @click="form.key.push(3)">3</div>
          <div class="pin__number" @click="form.key.push(4)">4</div>
          <div class="pin__number" @click="form.key.push(5)">5</div>
          <div class="pin__number" @click="form.key.push(6)">6</div>
          <div class="pin__number" @click="form.key.push(7)">7</div>
          <div class="pin__number" @click="form.key.push(8)">8</div>
          <div class="pin__number" @click="form.key.push(9)">9</div>
          <div class="pin__number-hide">
            <span class="pin__number-hide"></span>
          </div>
          <div class="pin__number" @click="form.key.push(0)">0</div>
          <div class="pin__del" @click="form.key.pop()">
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
import Layout from "./Components/Layout";
export default {
  data() {
    return {
      form: {
        key: [],
      },
    };
  },
  watch: {
    form: {
      handler(val) {
        if (this.form.key[3] != null) {
          this.submit();
        }
      },
      deep: true,
    },
  },
  methods: {
    submit() {
      this.form.key = this.form.key.join("");
      this.$inertia.post(route("user.add_stamp"), this.form);
    },
  },
  layout: Layout,
};
</script>