<template>
    <div>
        <div class="pin page" id="page-pin">
            <div style="height: 50px;"></div>
            <div class="stemplen__container">
                <h3 class="pin__title"> {{ $trans('stamp_input') }}</h3>
                <form action="#" class="pin__form">
                    <label for="" class="pin__input">
                        <input type="number" class="pin__pas-inp">
                    </label>
                    <label for="" class="pin__input">
                        <input type="number" class="pin__pas-inp">
                    </label>
                    <label for="" class="pin__input">
                        <input type="number" class="pin__pas-inp">
                    </label>
                    <label for="" class="pin__input">
                        <input type="number" class="pin__pas-inp">
                    </label>
                </form>
                <div class="pin__number-inner">
                    <div class="pin__number">
                        1
                    </div>
                    <div class="pin__number">
                        2
                    </div>
                    <div class="pin__number">
                        3
                    </div>
                    <div class="pin__number">
                        4
                    </div>
                    <div class="pin__number">
                        5
                    </div>
                    <div class="pin__number">
                        6
                    </div>
                    <div class="pin__number">
                        7
                    </div>
                    <div class="pin__number">
                        8
                    </div>
                    <div class="pin__number">
                        9
                    </div>
                    <div class="pin__number-hide">
                        <span class=" pin__number-hide"></span>
                    </div>
                    <div class="pin__number">
                        0
                    </div>
                    <div class="pin__del">
                        <div class="pin__del-img">
                            <img src="/user/becks.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 50px;"></div>
        </div>
    </div>
</template>
