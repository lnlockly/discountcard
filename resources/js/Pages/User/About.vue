<template>
  <div>
    <div class="burger__page page active">
      <div class="stemplen__container">
        <div v-if="show == 'welcome'">
          <div v-html="$trans('about.welcome')"></div>
        </div>
        <div v-if="show == 'how_to_get_stamps'">
          <div v-html="$trans('about.how_to_get_stamps')"></div>
        </div>
        <div v-if="show == 'about'">
          <div v-html="$trans('about.about')"></div>
          
        </div>
        <div v-if="show == 'privacy_policy'">
          <div v-html="$trans('about.privacy_policy')"></div>
          
        </div>
        <div v-if="show == 'contact'">
          <div v-html="$trans('about.contact')"></div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import Layout from "./Components/Layout";
export default {
  props: {
    show: String,
  },
  layout: Layout,
};
</script>
