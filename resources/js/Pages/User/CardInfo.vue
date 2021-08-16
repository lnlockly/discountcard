<template>
  <div>
    <div class="info page" id="page3">
      <div class="stemplen__container">
        <div class="main__logo-img info__logo">
          <img :src="`/storage/image/card/${card.logo}`" alt="" />
        </div>
        <div class="info__set-title-inner">
          <h3 class="stemple__set-title">{{ card.name }}</h3>
          <div class="info__setting-inner">
            <div class="info__setting-img">
              <img src="/storage/image/user/street.svg" alt="icon" />
            </div>
            <p class="info__setting-text">{{ client.address }}, {{ client.postcode }} {{ client.city }}</p>
          </div>
          <div class="info__setting-inner" v-if="client.website != null">
            <div class="info__setting-img">
              <img src="/storage/image/user/web.svg" alt="icon" />
            </div>
            <a :href="client.site" class="info__setting-text">{{ client.website }}</a>
          </div>
          <div class="info__setting-inner">
            <div class="info__setting-img">
              <img src="/storage/image/user/email.svg" alt="icon" />
            </div>
            <a :href="`mailto:${client.email}`" target="_blank" class="info__setting-text">{{ client.email }}</a>
          </div>
          <div class="info__setting-inner" v-if="client.phone != null">
            <div class="info__setting-img">
              <img src="/storage/image/user/phone.png" alt="icon" />
            </div>
            <a :href="`tel:${client.phone}`" class="info__setting-text">{{ client.phone }}</a>
          </div>
        </div>
        <div class="info__stock">
          <div class="info__title-inner">
            <div class="info__title-img">
              <img
                src="/storage/image/user/arrow-circle-right-solid.svg"
                alt=""
              />
            </div>
            <h3 class="stemple__set-title">{{ card.name }}</h3>
          </div>
          <p class="info__stock-text">{{ card.card_use }}</p>
        </div>
        <div class="info__use">
          <div class="info__title-inner">
            <div class="info__title-img">
              <img
                src="/storage/image/user/arrow-circle-right-solid.svg"
                alt=""
              />
            </div>
            <h3 class="stemple__set-title">{{ card.name }}</h3>
          </div>
          <ul class="info__use-list">
            {{
              card.condition
            }}
          </ul>
        </div>
        <div style="height: 50px"></div>
      </div>
    </div>
  </div>
</template>
<script>
import Layout from "./Components/Layout";
export default {
  props: {
    card: Object,
    client: Object,
  },
  layout: Layout,
};
</script>
