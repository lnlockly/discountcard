<template>
  <main class="stemplen">
    <header class="header">
      <nav class="header__menu">
        <a href="#" class="menu-logo">
          <img src="/user/web-logo.png" alt="logo" />
        </a>
        <ul class="header__list">
          <li class="link-home" data-tab="#page6">
            <a href="#" class="header__link">{{ $trans("welcome") }}</a>
          </li>
          <li class="link-home" data-tab="#page7">
            <a href="#" class="header__link">{{
              $trans("how_to_get_stamps")
            }}</a>
          </li>
          <li class="link-home" data-tab="#page8">
            <a href="#" class="header__link">{{ $trans("about") }}</a>
          </li>
          <li class="link-home" data-tab="#page9">
            <a href="#" class="header__link">{{ $trans("privacy_policy") }}</a>
          </li>
          <li class="link-home" data-tab="#page10">
            <a href="#" class="header__link">{{ $trans("contact") }}</a>
          </li>
          <li>
            <a href="#" class="header__link">{{ $trans("for_business") }}</a>
          </li>
        </ul>
        <div class="header__menu-del">
          <img src="/user/del.png" alt="del" />
        </div>
      </nav>
      <div class="stemplen__container">
        <div class="header__inner">
          <div class="header-arrow">
            <img src="/user/angle-left.svg" alt="ar" />
          </div>
          <div class="header__burger">
            <span></span>
          </div>
          <a href="#" class="header__logo">
            <img src="/user/web-logo.png" alt="logo" />
          </a>
          <div class="header__flex-elem"></div>
        </div>
      </div>
    </header>
    <div class="main__wrapper"></div>
    <footer class="footer">
      <div class="stemplen__container">
        <div class="footer__inner">
          <Link :href="route('user.card_region')">
            <div class="footer__logo">
              <img src="/user/1-icon.png" alt="page" />
            </div>
          </Link>
          <Link :href="route('user.card_ads')">
            <div class="footer__logo">
              <img src="/user/2-icon.png" alt="page" />
            </div>
          </Link>
          <Link :href="route('user.stamp')">
            <button class="footer__button footer__logo">штамп</button></Link
          >
          <Link :href="route('user.card_info')">
            <div class="footer__logo">
              <img src="/user/3-icon.png" alt="page" /></div
          ></Link>
          <Link :href="route('user.profile')">
            <div class="footer__logo">
              <img src="/user/4-icon.png" alt="page" /></div
          ></Link>
        </div>
      </div>
    </footer>
    <slot />
  </main>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue";
export default {
  components: {
    Link,
  },
  methods: {
    change_show(page) {
      this.$emit("change_show", page);
    },
  },
};
</script>