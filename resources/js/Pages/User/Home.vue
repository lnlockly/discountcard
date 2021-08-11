<template>
    <div>
        <card v-show="show == 'card'"/>
        <!-- Show card -->
        <!-- Register -->
        <!-- Login -->
        <stamp v-show="show == 'stamp'"/>
        <card-info v-show="show == 'card-info'"/>
        <profile v-show="show == 'profile'"/>
        <!-- push -->
        <about v-show="show == 'about'"/>
        <card-region v-show="show == 'card-region'"/>
        <card-ads v-show="show == 'card-ads'"/>
        <card-show v-show="show == 'card-show'"/>
       
    </div>
</template>
// <script>
// import Layout from './Components/Layout'
// import Card from './Components/Card'
// import Profile from './Components/Profile'
// import CardInfo from './Components/CardInfo'
// import CardRegion from './Components/CardRegion'
// import CardAds from '.Components/CardAds'
// import CardShow from '.Components/CardShow'
// import Stamp from './Components/Stamp'
// import About from './Components/About'
// import { Link } from '@inertiajs/inertia-vue'

// export default {
//     components: {
//         Card,
//         Link,
//         Profile,
//         CardInfo,
//         CardRegion,
//         CardAds,
//         CardShow,
//         Stamp,
//         About
//     },
//     layout: Layout
// }

// </script>
