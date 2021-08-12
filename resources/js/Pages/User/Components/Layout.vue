<template>
  <main class="stemplen">
    <header class="header">
      <div class="stemplen__container">
        <div class="header__inner">
          <div class="header-arrow active">
            <Link :href="route('user.index')">
              <img src="/storage/image/user/angle-left.svg" alt="ar" />
            </Link>
          </div>

          <div class="header__burger">
            <span></span>
          </div>
          <a href="#" class="header__logo">
            <img src="/storage/image/user/web-logo.png" alt="logo" />
          </a>
          <div class="header__flex-elem"></div>
        </div>
      </div>
      <nav class="header__menu">
        <a href="#" class="menu-logo">
          <img src="/storage/image/user/web-logo.png" alt="logo" />
        </a>
        <ul class="header__list">
          <li class="link-home" data-tab="#page6">
            <a href="#" class="header__link">{{ $trans("main.welcome") }}</a>
          </li>
          <li class="link-home" data-tab="#page7">
            <a href="#" class="header__link">{{
              $trans("main.how_to_get_stamps")
            }}</a>
          </li>
          <li class="link-home" data-tab="#page8">
            <a href="#" class="header__link">{{ $trans("main.about") }}</a>
          </li>
          <li class="link-home" data-tab="#page9">
            <a href="#" class="header__link">{{
              $trans("main.privacy_policy")
            }}</a>
          </li>
          <li class="link-home" data-tab="#page10">
            <a href="#" class="header__link">{{ $trans("main.contact") }}</a>
          </li>
          <li>
            <a href="#" class="header__link">{{
              $trans("main.for_business")
            }}</a>
          </li>
        </ul>
        <div class="header__menu-del">
          <img src="/storage/image/user/del.png" alt="del" />
        </div>
      </nav>
    </header>
    <div class="main__wrapper"></div>
    <footer class="footer">
      <div class="stemplen__container">
        <div class="footer__inner">
          <Link :href="route('user.card_region')">
            <div class="footer__logo">
              <img src="/storage/image/user/1-icon.png" alt="page" />
            </div>
          </Link>
          <Link :href="route('user.card_ads')">
            <div class="footer__logo">
              <img src="/storage/image/user/2-icon.png" alt="page" />
            </div>
          </Link>
          <Link :href="route('user.stamp')">
            <button class="footer__button footer__logo">
              {{ $trans("main.stamp") }}
            </button></Link
          >
          <Link :href="route('user.card_info')">
            <div class="footer__logo">
              <img src="/storage/image/user/3-icon.png" alt="page" /></div
          ></Link>
          <Link :href="route('user.profile')">
            <div class="footer__logo">
              <img src="/storage/image/user/4-icon.png" alt="page" /></div
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
  data() {
    return {
      about: false,
      prev: 1,
    };
  },
  methods: {
    change_show(page) {
      this.$emit("change_show", page);
    },
  },
  mounted() {
    const burger = document.querySelector(".header__burger");
    const burgerMenu = document.querySelector(".header__menu");
    const burgerDel = document.querySelector(".header__menu-del");
    burger.addEventListener("click", (e) => {
      burgerMenu.classList.add("active");
      burgerDel.classList.add("active");
      burger.classList.add("active");
    });
    burgerDel.addEventListener("click", (e) => {
      burgerMenu.classList.remove("active");
      burgerDel.classList.remove("active");
      burger.classList.remove("active");
    });
  },
};
</script>