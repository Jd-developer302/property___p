<template>
    <Header />
    <div v-if="community" class="breadcrumb__area">
        <div class="breadcrumb__thumb" :style="{ backgroundImage: `url(${getImageUrl(community.image)})` }"></div>
        <div class="container mt-5">
            <div class="row justify-content-between">
                <div class="col-lg-6 bnr-text text-center">
                    <h2>{{ community.name }}</h2>
                    <p>Apartments, Villas &amp; Townhouses for Sale in Sharjah, UAE</p>
                    <a href="" class="btn btn-danger mr-2 dw_pdf">Download Brochure <i
                            class="fa fa-download ml-2"></i></a>
                </div>
                <div class="col-lg-4 projects" id="enq">

                    <ContactCommunity/>

                </div>
            </div>
        </div>
    </div>
    <div v-else>
        
    </div>
   <SlugDetail/>
    <Footer />
</template>

<script setup>
    import { ref, onMounted } from 'vue';
    import axios from 'axios';
    import Header from '../home/Header.vue';
    import Footer from '../home/Footer.vue';
 import SlugDetail from '../communties/SlugDetail.vue'
 import ContactCommunity from '../communties/ContactCommunity.vue'
    import { useRoute } from 'vue-router';

    const route = useRoute();
    const community = ref(null);

    const fetchCommunityData = async () => {
        const slug = route.params.slug;
        try {
            const response = await axios.get(`/api/communities/${slug}`);
            community.value = response.data;
        } catch (error) {
            console.error('Error fetching community data:', error);
        }
    };

    onMounted(() => {
        fetchCommunityData();
    });

    function getImageUrl(image) {
        return image ? `/storage/${image}` : '/images/default-image.png';

    }
</script>

<style scoped>
    .breadcrumb__area {
        position: relative;
        height: 800px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .breadcrumb__thumb {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    .breadcrumb__thumb::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        /* Black color with 50% opacity */
    }

    .breadcrumb__content {
        z-index: 2;
        color: #fff;
    }

    .breadcrumb__title {
        font-size: 36px;
        color: inherit;
        margin-bottom: 15px;
    }

    .breadcrumb__menu {
        display: flex;
        justify-content: center;
    }

    .breadcrumb__menu ul {
        display: flex;
        align-items: center;
        gap: 12px;
        font-weight: 500;
    }

    .breadcrumb__menu ul li {
        list-style: none;
        font-size: 16px;
        text-transform: capitalize;
        font-weight: 700;
        color: #9C3133;
    }

    .breadcrumb__menu ul li span a {
        color: #fff;
        text-decoration: none;
    }

    .breadcrumb__menu ul li span i {
        margin-right: 10px;
    }

    .search-wrapper {
        position: relative;
    }

    .no-gutters {
        margin-right: 0;
        margin-left: 0;
    }

    .ui-helper-hidden-accessible {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }

    .search-wrapper input {
        border: none;
        width: 100%;
    }

    @media only screen and (max-width: 1024px) {
        .breadcrumb__area {
            padding: 80px 0;
        }
    }





    .owl-carousel .animated {
        -webkit-animation-duration: 1000ms;
        animation-duration: 1000ms;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both
    }

    .owl-carousel .owl-animated-in {
        z-index: 0
    }

    .owl-carousel .owl-animated-out {
        z-index: 1
    }

    .owl-carousel .fadeOut {
        -webkit-animation-name: fadeOut;
        animation-name: fadeOut
    }

    @-webkit-keyframes fadeOut {
        0% {
            opacity: 1
        }

        100% {
            opacity: 0
        }
    }

    @keyframes fadeOut {
        0% {
            opacity: 1
        }

        100% {
            opacity: 0
        }
    }

    .owl-height {
        -webkit-transition: height 500ms ease-in-out;
        -moz-transition: height 500ms ease-in-out;
        -ms-transition: height 500ms ease-in-out;
        -o-transition: height 500ms ease-in-out;
        transition: height 500ms ease-in-out
    }

    .owl-carousel {
        display: none;
        width: 100%;
        -webkit-tap-highlight-color: transparent;
        position: relative;
        z-index: 1
    }

    .owl-carousel .owl-stage {
        position: relative;

    }

    .owl-carousel .owl-stage:after {
        content: ".";
        display: block;
        clear: both;
        visibility: hidden;
        line-height: 0;
        height: 0
    }

    .owl-carousel .owl-stage-outer {
        position: relative;
        overflow: hidden;
 
    }

    .owl-carousel .owl-controls .owl-nav .owl-prev,
    .owl-carousel .owl-controls .owl-nav .owl-next,
    .owl-carousel .owl-controls .owl-dot {
        cursor: pointer;
        cursor: hand;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .owl-carousel.owl-loaded {
        display: block
    }

    .owl-carousel.owl-loading {
        opacity: 0;
        display: block
    }

    .owl-carousel.owl-hidden {
        opacity: 0
    }

    .owl-carousel .owl-refresh .owl-item {
        display: none
    }

    .owl-carousel .owl-item {
        position: relative;
        min-height: 1px;
        float: left;

        -webkit-tap-highlight-color: transparent;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .owl-carousel .owl-item img {
        display: block;
        width: 100%;

    }

    .owl-carousel.owl-text-select-on .owl-item {
        -webkit-user-select: auto;
        -moz-user-select: auto;
        -ms-user-select: auto;
        user-select: auto
    }

    .owl-carousel .owl-grab {
        cursor: move;
        cursor: -webkit-grab;
        cursor: -o-grab;
        cursor: -ms-grab;
        cursor: grab
    }

    .owl-carousel .owl-rtl {
        direction: rtl
    }

    .owl-carousel .owl-rtl .owl-item {
        float: right
    }

    .no-js .owl-carousel {
        display: block
    }

    .owl-carousel .owl-item .owl-lazy {
        opacity: 0;
        -webkit-transition: opacity 400ms ease;
        -moz-transition: opacity 400ms ease;
        -ms-transition: opacity 400ms ease;
        -o-transition: opacity 400ms ease;
        transition: opacity 400ms ease
    }

    .owl-carousel .owl-item img {
        transform-style: preserve-3d
    }

    .owl-carousel .owl-video-wrapper {
        position: relative;
        height: 100%;
        background: #000
    }

    .owl-carousel .owl-video-play-icon {
        position: absolute;
        height: 80px;
        width: 80px;
        left: 50%;
        top: 50%;
        margin-left: -40px;
        margin-top: -40px;

        cursor: pointer;
        z-index: 1;

        -webkit-transition: scale 100ms ease;
        -moz-transition: scale 100ms ease;
        -ms-transition: scale 100ms ease;
        -o-transition: scale 100ms ease;
        transition: scale 100ms ease
    }

    .owl-carousel .owl-video-play-icon:hover {
        -webkit-transition: scale(1.3, 1.3);
        -moz-transition: scale(1.3, 1.3);
        -ms-transition: scale(1.3, 1.3);
        -o-transition: scale(1.3, 1.3);
        transition: scale(1.3, 1.3)
    }

    .owl-carousel .owl-video-playing .owl-video-tn,
    .owl-carousel .owl-video-playing .owl-video-play-icon {
        display: none
    }

    .owl-carousel .owl-video-tn {
        opacity: 0;
        height: 100%;
        background-position: center center;
        background-repeat: no-repeat;
        -webkit-background-size: contain;
        -moz-background-size: contain;
        -o-background-size: contain;
        background-size: contain;
        -webkit-transition: opacity 400ms ease;
        -moz-transition: opacity 400ms ease;
        -ms-transition: opacity 400ms ease;
        -o-transition: opacity 400ms ease;
        transition: opacity 400ms ease
    }

    .owl-carousel .owl-video-frame {
        position: relative;
        z-index: 1
    }



    .lg-icon {
        font-family: 'lg';

        font-style: normal;
        font-weight: 400;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .lg-actions .lg-next,
    .lg-actions .lg-prev {
        background-color: rgba(0, 0, 0, .45);
        border-radius: 2px;
        color: #999;
        cursor: pointer;
        display: block;
        font-size: 22px;
        margin-top: -10px;
        padding: 8px 10px 9px;
        position: absolute;
        top: 50%;
        z-index: 1080;
        border: none;
        outline: none
    }

    .lg-actions .lg-next.disabled,
    .lg-actions .lg-prev.disabled {
        pointer-events: none;
        opacity: .5
    }

    .lg-actions .lg-next:hover,
    .lg-actions .lg-prev:hover {
        color: #fff
    }

    .lg-actions .lg-next {
        right: 20px
    }

    .lg-actions .lg-next:before {
        content: ""
    }

    .lg-actions .lg-prev {
        left: 20px
    }

    .lg-actions .lg-prev:after {
        content: ""
    }

    @-webkit-keyframes lg-right-end {
        0% {
            left: 0
        }

        50% {
            left: -30px
        }

        100% {
            left: 0
        }
    }

    @-moz-keyframes lg-right-end {
        0% {
            left: 0
        }

        50% {
            left: -30px
        }

        100% {
            left: 0
        }
    }

    @-ms-keyframes lg-right-end {
        0% {
            left: 0
        }

        50% {
            left: -30px
        }

        100% {
            left: 0
        }
    }

    @keyframes lg-right-end {
        0% {
            left: 0
        }

        50% {
            left: -30px
        }

        100% {
            left: 0
        }
    }

    @-webkit-keyframes lg-left-end {
        0% {
            left: 0
        }

        50% {
            left: 30px
        }

        100% {
            left: 0
        }
    }

    @-moz-keyframes lg-left-end {
        0% {
            left: 0
        }

        50% {
            left: 30px
        }

        100% {
            left: 0
        }
    }

    @-ms-keyframes lg-left-end {
        0% {
            left: 0
        }

        50% {
            left: 30px
        }

        100% {
            left: 0
        }
    }

    @keyframes lg-left-end {
        0% {
            left: 0
        }

        50% {
            left: 30px
        }

        100% {
            left: 0
        }
    }

    .lg-outer.lg-right-end .lg-object {
        -webkit-animation: lg-right-end .3s;
        -o-animation: lg-right-end .3s;
        animation: lg-right-end .3s;
        position: relative
    }

    .lg-outer.lg-left-end .lg-object {
        -webkit-animation: lg-left-end .3s;
        -o-animation: lg-left-end .3s;
        animation: lg-left-end .3s;
        position: relative
    }

    .lg-toolbar {
        z-index: 1082;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        background-color: rgba(0, 0, 0, .45)
    }

    .lg-toolbar .lg-icon {
        color: #999;
        cursor: pointer;
        float: right;
        font-size: 24px;
        height: 47px;
        line-height: 27px;
        padding: 10px 0;
        text-align: center;
        width: 50px;
        text-decoration: none !important;
        outline: medium none;
        -webkit-transition: color .2s linear;
        -o-transition: color .2s linear;
        transition: color .2s linear
    }

    .lg-toolbar .lg-icon:hover {
        color: #fff
    }

    .lg-toolbar .lg-close:after {
        content: ""
    }

    .lg-toolbar .lg-download:after {
        content: ""
    }

    .lg-sub-html {
        background-color: rgba(0, 0, 0, .45);
        bottom: 0;
        color: #eee;
        font-size: 16px;
        left: 0;
        padding: 10px 40px;
        position: fixed;
        right: 0;
        text-align: center;
        z-index: 1080
    }

    .lg-sub-html h4 {
        margin: 0;
        font-size: 13px;
        font-weight: 700
    }

    .lg-sub-html p {
        font-size: 12px;
        margin: 5px 0 0
    }

    #lg-counter {
        color: #999;
        display: inline-block;
        font-size: 16px;
        padding-left: 20px;
        padding-top: 12px;
        vertical-align: middle
    }

    .lg-toolbar,
    .lg-prev,
    .lg-next {
        opacity: 1;
        -webkit-transition: -webkit-transform .35s cubic-bezier(0, 0, .25, 1) 0s, opacity .35s cubic-bezier(0, 0, .25, 1) 0s, color .2s linear;
        -moz-transition: -moz-transform .35s cubic-bezier(0, 0, .25, 1) 0s, opacity .35s cubic-bezier(0, 0, .25, 1) 0s, color .2s linear;
        -o-transition: -o-transform .35s cubic-bezier(0, 0, .25, 1) 0s, opacity .35s cubic-bezier(0, 0, .25, 1) 0s, color .2s linear;
        transition: transform .35s cubic-bezier(0, 0, .25, 1) 0s, opacity .35s cubic-bezier(0, 0, .25, 1) 0s, color .2s linear
    }

    .lg-hide-items .lg-prev {
        opacity: 0;
        -webkit-transform: translate3d(-10px, 0, 0);
        transform: translate3d(-10px, 0, 0)
    }

    .lg-hide-items .lg-next {
        opacity: 0;
        -webkit-transform: translate3d(10px, 0, 0);
        transform: translate3d(10px, 0, 0)
    }

    .lg-hide-items .lg-toolbar {
        opacity: 0;
        -webkit-transform: translate3d(0, -10px, 0);
        transform: translate3d(0, -10px, 0)
    }

    body:not(.lg-from-hash) .lg-outer.lg-start-zoom .lg-object {
        -webkit-transform: scale3d(.5, .5, .5);
        transform: scale3d(.5, .5, .5);
        opacity: 0;
        -webkit-transition: -webkit-transform 250ms cubic-bezier(0, 0, .25, 1) 0s, opacity 250ms cubic-bezier(0, 0, .25, 1) !important;
        -moz-transition: -moz-transform 250ms cubic-bezier(0, 0, .25, 1) 0s, opacity 250ms cubic-bezier(0, 0, .25, 1) !important;
        -o-transition: -o-transform 250ms cubic-bezier(0, 0, .25, 1) 0s, opacity 250ms cubic-bezier(0, 0, .25, 1) !important;
        transition: transform 250ms cubic-bezier(0, 0, .25, 1) 0s, opacity 250ms cubic-bezier(0, 0, .25, 1) !important;
        -webkit-transform-origin: 50% 50%;
        -moz-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%
    }

    body:not(.lg-from-hash) .lg-outer.lg-start-zoom .lg-item.lg-complete .lg-object {
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        opacity: 1
    }

    .lg-outer .lg-thumb-outer {
        background-color: #0d0a0a;
        bottom: 0;
        position: absolute;
        width: 100%;
        z-index: 1080;
        max-height: 350px;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0);
        -webkit-transition: -webkit-transform .25s cubic-bezier(0, 0, .25, 1) 0;
        -moz-transition: -moz-transform .25s cubic-bezier(0, 0, .25, 1) 0;
        -o-transition: -o-transform .25s cubic-bezier(0, 0, .25, 1) 0;
        transition: transform .25s cubic-bezier(0, 0, .25, 1) 0
    }

    .lg-outer .lg-thumb-outer.lg-grab .lg-thumb-item {
        cursor: -webkit-grab;
        cursor: -moz-grab;
        cursor: -o-grab;
        cursor: -ms-grab;
        cursor: grab
    }

    .lg-outer .lg-thumb-outer.lg-grabbing .lg-thumb-item {
        cursor: move;
        cursor: -webkit-grabbing;
        cursor: -moz-grabbing;
        cursor: -o-grabbing;
        cursor: -ms-grabbing;
        cursor: grabbing
    }

    .lg-outer .lg-thumb-outer.lg-dragging .lg-thumb {
        -webkit-transition-duration: 0 !important;
        transition-duration: 0 !important
    }

    .lg-outer.lg-thumb-open .lg-thumb-outer {
        -webkit-transform: translate3d(0, 0%, 0);
        transform: translate3d(0, 0%, 0)
    }

    .lg-outer .lg-thumb {
        padding: 10px 0;
        height: 100%;
        margin-bottom: -5px
    }

    .lg-outer .lg-thumb-item {
        border-radius: 5px;
        cursor: pointer;
        float: left;
        overflow: hidden;
        height: 100%;
        border: 2px solid #fff;
        border-radius: 4px;
        margin-bottom: 5px
    }

    @media(min-width: 1025px) {
        .lg-outer .lg-thumb-item {
            -webkit-transition: border-color .25s ease;
            -o-transition: border-color .25s ease;
            transition: border-color .25s ease
        }
    }

    .lg-outer .lg-thumb-item.active,
    .lg-outer .lg-thumb-item:hover {
        border-color: #a90707
    }

    .lg-outer .lg-thumb-item img {
        width: 100%;
        height: 100%;
        object-fit: cover
    }

    .lg-outer.lg-has-thumb .lg-item {
        padding-bottom: 120px
    }

    .lg-outer.lg-can-toggle .lg-item {
        padding-bottom: 0
    }

    .lg-outer.lg-pull-caption-up .lg-sub-html {
        -webkit-transition: bottom .25s ease;
        -o-transition: bottom .25s ease;
        transition: bottom .25s ease
    }

    .lg-outer.lg-pull-caption-up.lg-thumb-open .lg-sub-html {
        bottom: 100px
    }

    .lg-outer .lg-toogle-thumb {
        background-color: #0d0a0a;
        border-radius: 2px 2px 0 0;
        color: #999;
        cursor: pointer;
        font-size: 24px;
        height: 39px;
        line-height: 27px;
        padding: 5px 0;
        position: absolute;
        right: 20px;
        text-align: center;
        top: -39px;
        width: 50px
    }

    .lg-outer .lg-toogle-thumb:after {
        content: ""
    }

    .lg-outer .lg-toogle-thumb:hover {
        color: #fff
    }

    .lg-outer .lg-video-cont {
        display: inline-block;
        vertical-align: middle;
        max-width: 1140px;
        max-height: 100%;
        width: 100%;
        padding: 0 5px
    }

    .lg-outer .lg-video {
        width: 100%;
        height: 0;
        padding-bottom: 56.25%;
        overflow: hidden;
        position: relative
    }

    .lg-outer .lg-video .lg-object {
        display: inline-block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important
    }

    .lg-outer .lg-video .lg-video-play {
        width: 84px;
        height: 59px;
        position: absolute;
        left: 50%;
        top: 50%;
        margin-left: -42px;
        margin-top: -30px;
        z-index: 1080;
        cursor: pointer
    }

    .lg-outer .lg-has-iframe .lg-video {
        -webkit-overflow-scrolling: touch;
        overflow: auto
    }

 
   

    .lg-outer .lg-has-html5:hover .lg-video-play {
        opacity: 1
    }

    .lg-outer .lg-has-youtube .lg-video-play {
        background: url(../img/youtube-play.png) no-repeat scroll 0 0 transparent
    }

  

    .lg-outer .lg-video-object {
        width: 100% !important;
        height: 100% !important;
        position: absolute;
        top: 0;
        left: 0
    }

    .lg-outer .lg-has-video .lg-video-object {
        visibility: hidden
    }

    .lg-outer .lg-has-video.lg-video-playing .lg-object,
    .lg-outer .lg-has-video.lg-video-playing .lg-video-play {
        display: none
    }

    .lg-outer .lg-has-video.lg-video-playing .lg-video-object {
        visibility: visible
    }

    .lg-progress-bar {
        background-color: #333;
        height: 5px;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 1083;
        opacity: 0;
        -webkit-transition: opacity .08s ease 0;
        -moz-transition: opacity .08s ease 0;
        -o-transition: opacity .08s ease 0;
        transition: opacity .08s ease 0
    }

    .lg-progress-bar .lg-progress {
        background-color: #a90707;
        height: 5px;
        width: 0
    }

    .lg-progress-bar.lg-start .lg-progress {
        width: 100%
    }

    .lg-show-autoplay .lg-progress-bar {
        opacity: 1
    }

    .lg-autoplay-button:after {
        content: ""
    }

    .lg-show-autoplay .lg-autoplay-button:after {
        content: ""
    }

    .lg-outer.lg-css3.lg-zoom-dragging .lg-item.lg-complete.lg-zoomable .lg-img-wrap,
    .lg-outer.lg-css3.lg-zoom-dragging .lg-item.lg-complete.lg-zoomable .lg-image {
        -webkit-transition-duration: 0;
        transition-duration: 0
    }

    .lg-outer.lg-use-transition-for-zoom .lg-item.lg-complete.lg-zoomable .lg-img-wrap {
        -webkit-transition: -webkit-transform .3s cubic-bezier(0, 0, .25, 1) 0;
        -moz-transition: -moz-transform .3s cubic-bezier(0, 0, .25, 1) 0;
        -o-transition: -o-transform .3s cubic-bezier(0, 0, .25, 1) 0;
        transition: transform .3s cubic-bezier(0, 0, .25, 1) 0
    }

    .lg-outer.lg-use-left-for-zoom .lg-item.lg-complete.lg-zoomable .lg-img-wrap {
        -webkit-transition: left .3s cubic-bezier(0, 0, .25, 1) 0s, top .3s cubic-bezier(0, 0, .25, 1) 0;
        -moz-transition: left .3s cubic-bezier(0, 0, .25, 1) 0s, top .3s cubic-bezier(0, 0, .25, 1) 0;
        -o-transition: left .3s cubic-bezier(0, 0, .25, 1) 0s, top .3s cubic-bezier(0, 0, .25, 1) 0;
        transition: left .3s cubic-bezier(0, 0, .25, 1) 0s, top .3s cubic-bezier(0, 0, .25, 1) 0
    }

    .lg-outer .lg-item.lg-complete.lg-zoomable .lg-img-wrap {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden
    }

    .lg-outer .lg-item.lg-complete.lg-zoomable .lg-image {
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        -webkit-transition: -webkit-transform .3s cubic-bezier(0, 0, .25, 1) 0s, opacity .15s !important;
        -moz-transition: -moz-transform .3s cubic-bezier(0, 0, .25, 1) 0s, opacity .15s !important;
        -o-transition: -o-transform .3s cubic-bezier(0, 0, .25, 1) 0s, opacity .15s !important;
        transition: transform .3s cubic-bezier(0, 0, .25, 1) 0s, opacity .15s !important;
        -webkit-transform-origin: 0 0;
        -moz-transform-origin: 0 0;
        -ms-transform-origin: 0 0;
        transform-origin: 0 0;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden
    }

    #lg-zoom-in:after {
        content: ""
    }

    #lg-actual-size {
        font-size: 20px
    }

    #lg-actual-size:after {
        content: ""
    }

    #lg-zoom-out {
        opacity: .5;
        pointer-events: none
    }

    #lg-zoom-out:after {
        content: ""
    }

    .lg-zoomed #lg-zoom-out {
        opacity: 1;
        pointer-events: auto
    }

    .lg-outer .lg-pager-outer {
        bottom: 60px;
        left: 0;
        position: absolute;
        right: 0;
        text-align: center;
        z-index: 1080;
        height: 10px
    }

    .lg-outer .lg-pager-outer.lg-pager-hover .lg-pager-cont {
        overflow: visible
    }

    .lg-outer .lg-pager-cont {
        cursor: pointer;
        display: inline-block;
        overflow: hidden;
        position: relative;
        vertical-align: top;
        margin: 0 5px
    }

    .lg-outer .lg-pager-cont:hover .lg-pager-thumb-cont {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }

    .lg-outer .lg-pager-cont.lg-pager-active .lg-pager {
        box-shadow: 0 0 0 2px #fff inset
    }

    .lg-outer .lg-pager-thumb-cont {
        background-color: #fff;
        color: #fff;
        bottom: 100%;
        height: 83px;
        left: 0;
        margin-bottom: 20px;
        margin-left: -60px;
        opacity: 0;
        padding: 5px;
        position: absolute;
        width: 120px;
        border-radius: 3px;
        -webkit-transition: opacity .15s ease 0s, -webkit-transform .15s ease 0;
        -moz-transition: opacity .15s ease 0s, -moz-transform .15s ease 0;
        -o-transition: opacity .15s ease 0s, -o-transform .15s ease 0;
        transition: opacity .15s ease 0s, transform .15s ease 0;
        -webkit-transform: translate3d(0, 5px, 0);
        transform: translate3d(0, 5px, 0)
    }

    .lg-outer .lg-pager-thumb-cont img {
        width: 100%;
        height: 100%
    }

    .lg-outer .lg-pager {
        background-color: rgba(255, 255, 255, .5);
        border-radius: 50%;
        box-shadow: 0 0 0 8px rgba(255, 255, 255, .7) inset;
        display: block;
        height: 12px;
        -webkit-transition: box-shadow .3s ease 0;
        -o-transition: box-shadow .3s ease 0;
        transition: box-shadow .3s ease 0;
        width: 12px
    }

    .lg-outer .lg-pager:hover,
    .lg-outer .lg-pager:focus {
        box-shadow: 0 0 0 8px #fff inset
    }

    .lg-outer .lg-caret {
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 10px dashed;
        bottom: -10px;
        display: inline-block;
        height: 0;
        left: 50%;
        margin-left: -5px;
        position: absolute;
        vertical-align: middle;
        width: 0
    }

    .lg-fullscreen:after {
        content: ""
    }

    .lg-fullscreen-on .lg-fullscreen:after {
        content: ""
    }

    .lg-outer #lg-dropdown-overlay {
        background-color: rgba(0, 0, 0, .25);
        bottom: 0;
        cursor: default;
        left: 0;
        position: fixed;
        right: 0;
        top: 0;
        z-index: 1081;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: visibility 0 linear .18s, opacity .18s linear 0;
        -o-transition: visibility 0 linear .18s, opacity .18s linear 0;
        transition: visibility 0 linear .18s, opacity .18s linear 0
    }

    .lg-outer.lg-dropdown-active .lg-dropdown,
    .lg-outer.lg-dropdown-active #lg-dropdown-overlay {
        -webkit-transition-delay: 0;
        transition-delay: 0;
        -moz-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        opacity: 1;
        visibility: visible
    }

    .lg-outer.lg-dropdown-active #lg-share {
        color: #fff
    }

    .lg-outer .lg-dropdown {
        background-color: #fff;
        border-radius: 2px;
        font-size: 14px;
        list-style-type: none;
        margin: 0;
        padding: 10px 0;
        position: absolute;
        right: 0;
        text-align: left;
        top: 50px;
        opacity: 0;
        visibility: hidden;
        -moz-transform: translate3d(0, 5px, 0);
        -o-transform: translate3d(0, 5px, 0);
        -ms-transform: translate3d(0, 5px, 0);
        -webkit-transform: translate3d(0, 5px, 0);
        transform: translate3d(0, 5px, 0);
        -webkit-transition: -webkit-transform .18s linear 0s, visibility 0 linear .5s, opacity .18s linear 0;
        -moz-transition: -moz-transform .18s linear 0s, visibility 0 linear .5s, opacity .18s linear 0;
        -o-transition: -o-transform .18s linear 0s, visibility 0 linear .5s, opacity .18s linear 0;
        transition: transform .18s linear 0s, visibility 0 linear .5s, opacity .18s linear 0
    }

    .lg-outer .lg-dropdown:after {
        content: "";
        display: block;
        height: 0;
        width: 0;
        position: absolute;
        border: 8px solid transparent;
        border-bottom-color: #fff;
        right: 16px;
        top: -16px
    }

    .lg-outer .lg-dropdown>li:last-child {
        margin-bottom: 0
    }

    .lg-outer .lg-dropdown>li:hover a,
    .lg-outer .lg-dropdown>li:hover .lg-icon {
        color: #333
    }

    .lg-outer .lg-dropdown a {
        color: #333;
        display: block;
        white-space: pre;
        padding: 4px 12px;
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 12px
    }

    .lg-outer .lg-dropdown a:hover {
        background-color: rgba(0, 0, 0, .07)
    }

    .lg-outer .lg-dropdown .lg-dropdown-text {
        display: inline-block;
        line-height: 1;
        margin-top: -3px;
        vertical-align: middle
    }

    .lg-outer .lg-dropdown .lg-icon {
        color: #333;
        display: inline-block;
        float: none;
        font-size: 20px;
        height: auto;
        line-height: 1;
        margin-right: 8px;
        padding: 0;
        vertical-align: middle;
        width: auto
    }

    .lg-outer #lg-share {
        position: relative
    }

    .lg-outer #lg-share:after {
        content: ""
    }

    .lg-outer #lg-share-facebook .lg-icon {
        color: #3b5998
    }

    .lg-outer #lg-share-facebook .lg-icon:after {
        content: ""
    }

    .lg-outer #lg-share-twitter .lg-icon {
        color: #00aced
    }

    .lg-outer #lg-share-twitter .lg-icon:after {
        content: ""
    }

    .lg-outer #lg-share-googleplus .lg-icon {
        color: #dd4b39
    }

    .lg-outer #lg-share-googleplus .lg-icon:after {
        content: ""
    }

    .lg-outer #lg-share-pinterest .lg-icon {
        color: #cb2027
    }

    .lg-outer #lg-share-pinterest .lg-icon:after {
        content: ""
    }

    .lg-group:after {
        content: "";
        display: table;
        clear: both
    }

    .lg-outer {
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1050;
        text-align: left;
        opacity: 0;
        -webkit-transition: opacity .15s ease 0;
        -o-transition: opacity .15s ease 0;
        transition: opacity .15s ease 0
    }

    .lg-outer * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }

    .lg-outer.lg-visible {
        opacity: 1
    }

    .lg-outer.lg-css3 .lg-item.lg-prev-slide,
    .lg-outer.lg-css3 .lg-item.lg-next-slide,
    .lg-outer.lg-css3 .lg-item.lg-current {
        -webkit-transition-duration: inherit !important;
        transition-duration: inherit !important;
        -webkit-transition-timing-function: inherit !important;
        transition-timing-function: inherit !important
    }

    .lg-outer.lg-css3.lg-dragging .lg-item.lg-prev-slide,
    .lg-outer.lg-css3.lg-dragging .lg-item.lg-next-slide,
    .lg-outer.lg-css3.lg-dragging .lg-item.lg-current {
        -webkit-transition-duration: 0 !important;
        transition-duration: 0 !important;
        opacity: 1
    }

    .lg-outer.lg-grab img.lg-object {
        cursor: -webkit-grab;
        cursor: -moz-grab;
        cursor: -o-grab;
        cursor: -ms-grab;
        cursor: grab
    }

    .lg-outer.lg-grabbing img.lg-object {
        cursor: move;
        cursor: -webkit-grabbing;
        cursor: -moz-grabbing;
        cursor: -o-grabbing;
        cursor: -ms-grabbing;
        cursor: grabbing
    }

    .lg-outer .lg {
        height: 100%;
        width: 100%;
        position: relative;
        overflow: hidden;
        margin-left: auto;
        margin-right: auto;
        max-width: 100%;
        max-height: 100%
    }

    .lg-outer .lg-inner {
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        white-space: nowrap
    }

    

    .lg-outer.lg-css3 .lg-prev-slide,
    .lg-outer.lg-css3 .lg-current,
    .lg-outer.lg-css3 .lg-next-slide {
        display: inline-block !important
    }

    .lg-outer.lg-css .lg-current {
        display: inline-block !important
    }

    .lg-outer .lg-item,
    .lg-outer .lg-img-wrap {
        display: inline-block;
        text-align: center;
        position: absolute;
        width: 100%;
        height: 100%
    }

    .lg-outer .lg-item:before,
    .lg-outer .lg-img-wrap:before {
        content: "";
        display: inline-block;
        height: 50%;
        width: 1px;
        margin-right: -1px
    }

    .lg-outer .lg-img-wrap {
        position: absolute;
        padding: 0 5px;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0
    }

    .lg-outer .lg-item.lg-complete {
        background-image: none
    }

    .lg-outer .lg-item.lg-current {
        z-index: 1060
    }

    .lg-outer .lg-image {
        display: inline-block;
        vertical-align: middle;
        max-width: 100%;
        max-height: 100%;
        width: auto !important;
        height: auto !important
    }

    .lg-outer.lg-show-after-load .lg-item .lg-object,
    .lg-outer.lg-show-after-load .lg-item .lg-video-play {
        opacity: 0;
        -webkit-transition: opacity .15s ease 0;
        -o-transition: opacity .15s ease 0;
        transition: opacity .15s ease 0
    }

    .lg-outer.lg-show-after-load .lg-item.lg-complete .lg-object,
    .lg-outer.lg-show-after-load .lg-item.lg-complete .lg-video-play {
        opacity: 1
    }

    .lg-outer .lg-empty-html {
        display: none
    }

    .lg-outer.lg-hide-download #lg-download {
        display: none
    }

    .lg-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1040;
        background-color: #000;
        opacity: 0;
        -webkit-transition: opacity .15s ease 0;
        -o-transition: opacity .15s ease 0;
        transition: opacity .15s ease 0
    }

    .lg-backdrop.in {
        opacity: 1
    }

    .lg-css3.lg-no-trans .lg-prev-slide,
    .lg-css3.lg-no-trans .lg-next-slide,
    .lg-css3.lg-no-trans .lg-current {
        -webkit-transition: none 0 ease 0 !important;
        -moz-transition: none 0 ease 0 !important;
        -o-transition: none 0 ease 0 !important;
        transition: none 0 ease 0 !important
    }

    .lg-css3.lg-use-css3 .lg-item {
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden
    }

    .lg-css3.lg-use-left .lg-item {
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden
    }

    .lg-css3.lg-fade .lg-item {
        opacity: 0
    }

    .lg-css3.lg-fade .lg-item.lg-current {
        opacity: 1
    }

    .lg-css3.lg-fade .lg-item.lg-prev-slide,
    .lg-css3.lg-fade .lg-item.lg-next-slide,
    .lg-css3.lg-fade .lg-item.lg-current {
        -webkit-transition: opacity .1s ease 0;
        -moz-transition: opacity .1s ease 0;
        -o-transition: opacity .1s ease 0;
        transition: opacity .1s ease 0
    }

    .lg-css3.lg-slide.lg-use-css3 .lg-item {
        opacity: 0
    }

    .lg-css3.lg-slide.lg-use-css3 .lg-item.lg-prev-slide {
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0)
    }

    .lg-css3.lg-slide.lg-use-css3 .lg-item.lg-next-slide {
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0)
    }

    .lg-css3.lg-slide.lg-use-css3 .lg-item.lg-current {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        opacity: 1
    }

    .lg-css3.lg-slide.lg-use-css3 .lg-item.lg-prev-slide,
    .lg-css3.lg-slide.lg-use-css3 .lg-item.lg-next-slide,
    .lg-css3.lg-slide.lg-use-css3 .lg-item.lg-current {
        -webkit-transition: -webkit-transform 1s cubic-bezier(0, 0, .25, 1) 0s, opacity .1s ease 0;
        -moz-transition: -moz-transform 1s cubic-bezier(0, 0, .25, 1) 0s, opacity .1s ease 0;
        -o-transition: -o-transform 1s cubic-bezier(0, 0, .25, 1) 0s, opacity .1s ease 0;
        transition: transform 1s cubic-bezier(0, 0, .25, 1) 0s, opacity .1s ease 0
    }

    .lg-css3.lg-slide.lg-use-left .lg-item {
        opacity: 0;
        position: absolute;
        left: 0
    }

    .lg-css3.lg-slide.lg-use-left .lg-item.lg-prev-slide {
        left: -100%
    }

    .lg-css3.lg-slide.lg-use-left .lg-item.lg-next-slide {
        left: 100%
    }

    .lg-css3.lg-slide.lg-use-left .lg-item.lg-current {
        left: 0;
        opacity: 1
    }

    .lg-css3.lg-slide.lg-use-left .lg-item.lg-prev-slide,
    .lg-css3.lg-slide.lg-use-left .lg-item.lg-next-slide,
    .lg-css3.lg-slide.lg-use-left .lg-item.lg-current {
        -webkit-transition: left 1s cubic-bezier(0, 0, .25, 1) 0s, opacity .1s ease 0;
        -moz-transition: left 1s cubic-bezier(0, 0, .25, 1) 0s, opacity .1s ease 0;
        -o-transition: left 1s cubic-bezier(0, 0, .25, 1) 0s, opacity .1s ease 0;
        transition: left 1s cubic-bezier(0, 0, .25, 1) 0s, opacity .1s ease 0
    }

    dd,
    label {
        margin-bottom: .5rem
    }

    .img-fluid,
    .img-thumbnail {
        max-width: 100%;
        height: auto
    }

    .img-thumbnail,
    .table .table,
    body {
        background-color: #fff
    }

    .input-group-text input[type=checkbox],
    .input-group-text input[type=radio],
    p,
    ul {
        margin-top: 0
    }

    .btn,
    .btn-group,
    .custom-select,
    img,
    svg {
        vertical-align: middle
    }

    .btn,
    .input-group-text,
    .navbar-brand {
        white-space: nowrap
    }

    .card-img-overlay,
    .modal {
        bottom: 0;
        left: 0;
        right: 0;
        top: 0
    }

    #Project-Overview h4,
    .contact .card p,
    body {
        text-align: left
    }

    .btn:not(:disabled):not(.disabled),
    .close:not(:disabled):not(.disabled),
    .menu-btn,
    .menuBox .clse,
    summary {
        cursor: pointer
    }

    #a li,
    .btn-select li,
    .con-area2 ul,
    .menuBox ul,
    .nav,
    .navbar-nav,
    .pro_overview .download ul,
    .pro_overview li,
    .pro_overview ul,
    .pro_overview ul.feature,
    .social ul li {
        list-style: none
    }

    .cover,
    .video-banner video {
        object-fit: cover
    }

    *,
    ::after,
    ::before {
        box-sizing: border-box
    }

    html {
        scroll-behavior: smooth;
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        -ms-overflow-style: scrollbar;
        -webkit-tap-highlight-color: transparent
    }

    .carousel-inner,
    .modal,
    .pro_head .offers,
    .pro_overview p,
    .projects .enq-form,
    .video-banner,
    svg {
        overflow: hidden
    }

    .download_bro .loader_form span,
    aside,
    footer,
    header,
    nav,
    section {
        display: block
    }

    body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529
    }

    [tabindex="-1"]:focus {
        outline: 0 !important
    }

    p,
    ul {
        margin-bottom: 1rem
    }

    .btn-group-toggle>.btn,
    .btn-group-toggle>.btn-group>.btn,
    .card-text:last-child,
    .form-check-label,
    ul ul {
        margin-bottom: 0
    }

    dt {
        font-weight: 700
    }

    dd {
        margin-left: 0
    }

    b {
        font-weight: bolder
    }

    a {
        color: #007bff;
        background-color: transparent;
        -webkit-text-decoration-skip: objects
    }

    a:hover {
        color: #0056b3
    }

    a:not([href]):not([tabindex]),
    a:not([href]):not([tabindex]):focus,
    a:not([href]):not([tabindex]):hover {
        color: inherit;
        text-decoration: none
    }

    .btn-select:focus,
    .projects .enq-form .contact-form .phone-code:focus,
    a:not([href]):not([tabindex]):focus {
        outline: 0
    }

    code {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
    }

    img {
        border-style: none
    }

    table {
        border-collapse: collapse
    }

    label {
        display: inline-block
    }

    button {
        border-radius: 0
    }

    button:focus {
        outline: dotted 1px;
        outline: -webkit-focus-ring-color auto 5px
    }

    button,
    input,
    select,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit
    }

    button,
    input {
        overflow: visible
    }

    button,
    select {
        text-transform: none
    }

  

    [type=button]::-moz-focus-inner,
    [type=reset]::-moz-focus-inner,
    [type=submit]::-moz-focus-inner,
    button::-moz-focus-inner {
        padding: 0;
        border-style: none
    }

    input[type=checkbox],
    input[type=radio] {
        box-sizing: border-box;
        padding: 0
    }

 

    textarea {
        overflow: auto;
        resize: vertical
    }

    [type=number]::-webkit-inner-spin-button,
    [type=number]::-webkit-outer-spin-button {
        height: auto
    }



    [type=search]::-webkit-search-cancel-button,
    [type=search]::-webkit-search-decoration {
        -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
        font: inherit;
        -webkit-appearance: button
    }

    summary {
        display: list-item
    }

    .d-none,
    [hidden] {
        display: none !important
    }

    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-bottom: .5rem;
        font-family: inherit;
        font-weight: 500;
        line-height: 1.2;
        color: inherit
    }

    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: Lato, sans-serif
    }

    .display-1,
    .display-2,
    .display-3,
    .display-4 {
        font-weight: 300;
        line-height: 1.2
    }

    .h1,
    h1 {
        font-size: 2.5rem
    }

    .h2,
    h2 {
        font-size: 2rem
    }

    .h3,
    h3 {
        font-size: 1.75rem
    }

    .h4,
    h4 {
        font-size: 1.5rem
    }

    .h5,
    h5 {
        font-size: 1.25rem
    }

    .h6,
    h6 {
        font-size: 1rem
    }

    .display-1 {
        font-size: 6rem
    }

    .display-2 {
        font-size: 5.5rem
    }

    .display-3 {
        font-size: 4.5rem
    }

    .display-4 {
        font-size: 3.5rem
    }

    .btn,
    .btn-link {
        font-weight: 400
    }

    .img-thumbnail {
        padding: .25rem;
        border: 1px solid #dee2e6;
        border-radius: .25rem
    }

    code {
        font-size: 87.5%;
        color: #e83e8c;
        word-break: break-word
    }

    a>code {
        color: inherit
    }

    .container,
    .container-fluid {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto
    }

    @media(min-width: 576px) {
        .container {
            max-width: 540px
        }
    }

    @media(min-width: 768px) {
        .container {
            max-width: 720px
        }
    }

    @media(min-width: 992px) {
        .container {
            max-width: 960px
        }
    }

    @media(min-width: 1200px) {
        .container {
            max-width: 1140px
        }
    }

    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px
    }

    .col,
    .col-1,
    .col-10,
    .col-11,
    .col-12,
    .col-2,
    .col-3,
    .col-4,
    .col-5,
    .col-6,
    .col-7,
    .col-8,
    .col-9,
    .col-auto,
    .col-lg,
    .col-lg-1,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-lg-auto,
    .col-md,
    .col-md-1,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-md-auto,
    .col-sm,
    .col-sm-1,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-sm-auto {
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px
    }

    .col {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
    }

    .col-auto {
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: none
    }

    .col-1 {
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
    }

    .col-2 {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }

    .col-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }

    .col-5 {
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
    }

    .col-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-7 {
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
    }

    .col-8 {
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
    }

    .col-9 {
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-10 {
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
    }

    .col-11 {
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
    }

    .col-12,
    .pro_overview .feature .img img {
        max-width: 100%
    }

    .col-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%
    }

    .order-0 {
        -ms-flex-order: 0;
        order: 0
    }

    .order-1 {
        -ms-flex-order: 1;
        order: 1
    }

    .order-2 {
        -ms-flex-order: 2;
        order: 2
    }

    .order-3 {
        -ms-flex-order: 3;
        order: 3
    }

    .order-4 {
        -ms-flex-order: 4;
        order: 4
    }

    .order-5 {
        -ms-flex-order: 5;
        order: 5
    }

    .order-6 {
        -ms-flex-order: 6;
        order: 6
    }

    .order-7 {
        -ms-flex-order: 7;
        order: 7
    }

    .order-8 {
        -ms-flex-order: 8;
        order: 8
    }

    .order-9 {
        -ms-flex-order: 9;
        order: 9
    }

    .order-10 {
        -ms-flex-order: 10;
        order: 10
    }

    .order-11 {
        -ms-flex-order: 11;
        order: 11
    }

    .order-12 {
        -ms-flex-order: 12;
        order: 12
    }

    .btn-block,
    .card-img,
    .card-img-top,
    .carousel img,
    .input-group,
    .table,
    input[type=button].btn-block,
    input[type=reset].btn-block,
    input[type=submit].btn-block {
        width: 100%
    }

    .table {
        margin-bottom: 1rem;
        background-color: transparent
    }

    .table-danger {
        background-color: #f5c6cb
    }

    .table-light {
        background-color: #fdfdfe
    }

    .table-active {
        background-color: rgba(0, 0, 0, .075)
    }

    .table-dark {
        color: #fff;
        background-color: #212529
    }

    .col-form-label {
        padding-top: calc(.375rem + 1px);
        padding-bottom: calc(.375rem + 1px);
        margin-bottom: 0;
        font-size: inherit;
        line-height: 1.5
    }

    .col-form-label-lg {
        padding-top: calc(.5rem + 1px);
        padding-bottom: calc(.5rem + 1px);
        font-size: 1.25rem;
        line-height: 1.5
    }

    .col-form-label-sm {
        padding-top: calc(.25rem + 1px);
        padding-bottom: calc(.25rem + 1px);
        font-size: .875rem;
        line-height: 1.5
    }

    .form-group {
        margin-bottom: 1rem
    }

    .form-text {
        display: block;
        margin-top: .25rem
    }

    .form-row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -5px;
        margin-left: -5px
    }

    .form-row>.col,
    .form-row>[class*=col-] {
        padding-right: 5px;
        padding-left: 5px
    }

    .form-check {
        position: relative;
        display: block;
        padding-left: 1.25rem
    }

    .form-check-input {
        position: absolute;
        margin-top: .3rem;
        margin-left: -1.25rem
    }

    .btn-group,
    .btn-group>.btn,
    .card,
    .input-group,
    .navbar {
        position: relative
    }

    .form-check-input:disabled~.form-check-label {
        color: #6c757d
    }

    .btn {
        display: inline-block;
        text-align: center;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: 1px solid transparent;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    .btn:focus,
    .btn:hover,
    .card-link:hover,
    .nav-link:focus,
    .nav-link:hover,
    .navbar-brand:focus,
    .navbar-brand:hover {
        text-decoration: none
    }

    .btn:focus {
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
    }

    .btn:disabled {
        opacity: .65
    }

    .btn-danger,
    .btn-danger:disabled,
    .btn-outline-danger:hover,
    .btn-outline-danger:not(:disabled):not(.disabled).active,
    .btn-outline-danger:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545
    }

    .btn-danger:hover {
        color: #fff;
        background-color: #c82333;
        border-color: #bd2130
    }

    .btn-danger:focus,
    .btn-danger:not(:disabled):not(.disabled).active:focus,
    .btn-danger:not(:disabled):not(.disabled):active:focus,
    .btn-outline-danger:focus,
    .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .btn-outline-danger:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
    }

    .btn-danger:not(:disabled):not(.disabled).active,
    .btn-danger:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #bd2130;
        border-color: #b21f2d
    }

    .btn-light,
    .btn-light:disabled,
    .btn-outline-light:hover,
    .btn-outline-light:not(:disabled):not(.disabled).active,
    .btn-outline-light:not(:disabled):not(.disabled):active {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa
    }

    .btn-light:hover {
        color: #212529;
        background-color: #e2e6ea;
        border-color: #dae0e5
    }

    .btn-light:focus,
    .btn-light:not(:disabled):not(.disabled).active:focus,
    .btn-light:not(:disabled):not(.disabled):active:focus,
    .btn-outline-light:focus,
    .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .btn-outline-light:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
    }

    .btn-light:not(:disabled):not(.disabled).active,
    .btn-light:not(:disabled):not(.disabled):active {
        color: #212529;
        background-color: #dae0e5;
        border-color: #d3d9df
    }

    .btn-dark,
    .btn-dark:disabled,
    .btn-outline-dark:hover,
    .btn-outline-dark:not(:disabled):not(.disabled).active,
    .btn-outline-dark:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40
    }

    .btn-dark:hover {
        color: #fff;
        background-color: #23272b;
        border-color: #1d2124
    }

    .btn-dark:focus,
    .btn-dark:not(:disabled):not(.disabled).active:focus,
    .btn-dark:not(:disabled):not(.disabled):active:focus,
    .btn-outline-dark:focus,
    .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .btn-outline-dark:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
    }

    .btn-dark:not(:disabled):not(.disabled).active,
    .btn-dark:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #1d2124;
        border-color: #171a1d
    }

    .btn-outline-danger,
    .btn-outline-danger:disabled {
        color: #dc3545;
        background-color: transparent
    }

    .btn-link:focus,
    .btn-link:hover {
        text-decoration: underline;
        border-color: transparent
    }

    .btn-outline-danger {
        background-image: none;
        border-color: #dc3545
    }

    .btn-outline-light {
        color: #f8f9fa;
        background-color: transparent;
        background-image: none;
        border-color: #f8f9fa
    }

    .btn-outline-light:disabled {
        color: #f8f9fa;
        background-color: transparent
    }

    .btn-outline-dark,
    .btn-outline-dark:disabled {
        color: #343a40;
        background-color: transparent
    }

    .btn-outline-dark {
        background-image: none;
        border-color: #343a40
    }

    .btn-link {
        color: #007bff;
        background-color: transparent
    }

    .btn-link:hover {
        color: #0056b3;
        background-color: transparent
    }

    .btn-link:focus {
        box-shadow: none
    }

    .btn-link:disabled {
        color: #6c757d;
        pointer-events: none
    }

    .btn-group-lg>.btn,
    .btn-lg {
        padding: .5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: .3rem
    }

    .btn-group-sm>.btn,
    .btn-sm {
        padding: .25rem .5rem;
        font-size: .875rem;
        line-height: 1.5;
        border-radius: .2rem
    }

    .btn-block {
        display: block
    }

    .btn-block+.btn-block {
        margin-top: .5rem
    }

    .fade {
        transition: opacity .15s linear
    }

    .fade:not(.show) {
        opacity: 0
    }

    .btn-group {
        display: -ms-inline-flexbox;
        display: inline-flex
    }

    .btn-group>.btn {
        -ms-flex: 0 1 auto;
        flex: 0 1 auto
    }

    .btn-group>.btn.active,
    .btn-group>.btn:active,
    .btn-group>.btn:focus,
    .btn-group>.btn:hover {
        z-index: 1
    }

    .btn-group .btn+.btn,
    .btn-group .btn+.btn-group,
    .btn-group .btn-group+.btn,
    .btn-group .btn-group+.btn-group,
    .input-group>.custom-select+.custom-select {
        margin-left: -1px
    }

    .btn-group>.btn:first-child,
    .btn-select:hover li {
        margin-left: 0
    }

    .btn-group>.btn-group:not(:last-child)>.btn,
    .btn-group>.btn:not(:last-child):not(.dropdown-toggle),
    .input-group>.custom-select:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .btn-group>.btn-group:not(:first-child)>.btn,
    .btn-group>.btn:not(:first-child),
    .input-group>.custom-select:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .btn-group-toggle>.btn input[type=checkbox],
    .btn-group-toggle>.btn input[type=radio],
    .btn-group-toggle>.btn-group>.btn input[type=checkbox],
    .btn-group-toggle>.btn-group>.btn input[type=radio] {
        position: absolute;
        clip: rect(0, 0, 0, 0);
        pointer-events: none
    }

    .input-group {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -ms-flex-align: stretch;
        align-items: stretch
    }

    .input-group>.custom-select {
        position: relative;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        width: 1%;
        margin-bottom: 0
    }

    .input-group>.custom-select:focus {
        z-index: 3
    }

    .input-group-text {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding: .375rem .75rem;
        margin-bottom: 0;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        text-align: center;
        background-color: #e9ecef;
        border: 1px solid #ced4da;
        border-radius: .25rem
    }

  

    .custom-select {
        display: inline-block;
        width: 100%;
        height: calc(2.25rem + 2px);
        padding: .375rem 1.75rem .375rem .75rem;
        line-height: 1.5;
        color: #495057;
        background: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") right .75rem center/8px 10px no-repeat #fff;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    .custom-select-lg,
    .custom-select-sm {
        padding-top: .375rem;
        padding-bottom: .375rem
    }

    .custom-select:focus {
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(128, 189, 255, .5)
    }

    .custom-select:focus::-ms-value {
        color: #495057;
        background-color: #fff
    }

    .custom-select[multiple],
    .custom-select[size]:not([size="1"]) {
        height: auto;
        padding-right: .75rem;
        background-image: none
    }

    .custom-select:disabled {
        color: #6c757d;
        background-color: #e9ecef
    }

    .custom-select::-ms-expand {
        opacity: 0
    }

    .custom-select-sm {
        height: calc(1.8125rem + 2px);
        font-size: 75%
    }

    .custom-select-lg {
        height: calc(2.875rem + 2px);
        font-size: 125%
    }

    .nav {
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        padding-left: 0;
        margin-bottom: 0
    }

    .nav-link,
    .navbar {
        padding: .5rem 1rem
    }

    .nav-link {
        display: block
    }

    .nav-fill .nav-item {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        text-align: center
    }

    .navbar {
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .navbar>.container,
    .navbar>.container-fluid {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .navbar-brand {
        display: inline-block;
        padding-top: .3125rem;
        padding-bottom: .3125rem;
        margin-right: 1rem;
        font-size: 1.25rem;
        line-height: inherit
    }

    .navbar-nav {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0
    }

    .navbar-nav .nav-link {
        padding-right: 0;
        padding-left: 0
    }

    .navbar-text {
        display: inline-block;
        padding-top: .5rem;
        padding-bottom: .5rem
    }

    .card,
    .card-group {
        display: -ms-flexbox
    }

    @media(max-width: 575.98px) {

        .navbar-expand-sm>.container,
        .navbar-expand-sm>.container-fluid {
            padding-right: 0;
            padding-left: 0
        }
    }

    @media(max-width: 767.98px) {

        .navbar-expand-md>.container,
        .navbar-expand-md>.container-fluid {
            padding-right: 0;
            padding-left: 0
        }
    }

    @media(max-width: 991.98px) {

        .navbar-expand-lg>.container,
        .navbar-expand-lg>.container-fluid {
            padding-right: 0;
            padding-left: 0
        }
    }

    .navbar-expand {
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    .navbar-expand .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row
    }

    .navbar-expand .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
    }

    .navbar-expand>.container,
    .navbar-expand>.container-fluid {
        padding-right: 0;
        padding-left: 0;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
    }

    .navbar-light .navbar-brand,
    .navbar-light .navbar-brand:focus,
    .navbar-light .navbar-brand:hover,
    .navbar-light .navbar-nav .active>.nav-link,
    .navbar-light .navbar-nav .nav-link.active,
    .navbar-light .navbar-nav .nav-link.show,
    .navbar-light .navbar-nav .show>.nav-link,
    .navbar-light .navbar-text a,
    .navbar-light .navbar-text a:focus,
    .navbar-light .navbar-text a:hover {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-nav .nav-link,
    .navbar-light .navbar-text {
        color: rgba(0, 0, 0, .5)
    }

    .navbar-light .navbar-nav .nav-link:focus,
    .navbar-light .navbar-nav .nav-link:hover {
        color: rgba(0, 0, 0, .7)
    }

    .navbar-dark .navbar-brand,
    .navbar-dark .navbar-brand:focus,
    .navbar-dark .navbar-brand:hover,
    .navbar-dark .navbar-nav .active>.nav-link,
    .navbar-dark .navbar-nav .nav-link.active,
    .navbar-dark .navbar-nav .nav-link.show,
    .navbar-dark .navbar-nav .show>.nav-link,
    .navbar-dark .navbar-text a,
    .navbar-dark .navbar-text a:focus,
    .navbar-dark .navbar-text a:hover {
        color: #fff
    }

    .navbar-dark .navbar-nav .nav-link,
    .navbar-dark .navbar-text {
        color: rgba(255, 255, 255, .5)
    }

    .navbar-dark .navbar-nav .nav-link:focus,
    .navbar-dark .navbar-nav .nav-link:hover {
        color: rgba(255, 255, 255, .75)
    }

    .card {
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: .25rem
    }

    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem
    }

    .card-footer,
    .card-header {
        padding: .75rem 1.25rem;
        background-color: rgba(0, 0, 0, .03)
    }

    .card-title {
        margin-bottom: .75rem
    }

    .card-subtitle {
        margin-top: -.375rem;
        margin-bottom: 0
    }

    .card-link+.card-link {
        margin-left: 1.25rem
    }

    .card-header {
        margin-bottom: 0;
        border-bottom: 1px solid rgba(0, 0, 0, .125)
    }

    .card-header:first-child {
        border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
    }

    .card-footer {
        border-top: 1px solid rgba(0, 0, 0, .125)
    }

    .card-footer:last-child {
        border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px)
    }

    .card-img-overlay {
        position: absolute;
        padding: 1.25rem
    }

    .card-img {
        border-radius: calc(.25rem - 1px)
    }

    .card-img-top {
        border-top-left-radius: calc(.25rem - 1px);
        border-top-right-radius: calc(.25rem - 1px)
    }

    .card-group {
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column
    }

    .card-group>.card {
        margin-bottom: 15px
    }

    @-webkit-keyframes progress-bar-stripes {
        from {
            background-position: 1rem 0
        }

        to {
            background-position: 0 0
        }
    }

    @keyframes progress-bar-stripes {
        from {
            background-position: 1rem 0
        }

        to {
            background-position: 0 0
        }
    }

    .media {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: start;
        align-items: flex-start
    }

    .media-body {
        -ms-flex: 1;
        flex: 1
    }

    .close {
        float: right;
        font-size: 1.5rem;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: .5
    }

    .close:not(:disabled):not(.disabled):focus,
    .close:not(:disabled):not(.disabled):hover {
        color: #000;
        text-decoration: none;
        opacity: .75
    }

    button.close {
        padding: 0;
        background-color: transparent;
        border: 0;

    }

    .modal {
        position: fixed;
        z-index: 1050;
        display: none;
        outline: 0
    }

    .carousel-inner,
    .carousel-item,
    .modal-body,
    .modal-content,
    .modal-dialog {
        position: relative
    }

    .modal-dialog {
        width: auto;
        margin: .5rem;
        pointer-events: none
    }

    .modal.fade .modal-dialog {
        transition: transform .3s ease-out;
        transition: transform .3s ease-out, -webkit-transform .3s ease-out;
        -webkit-transform: translate(0, -25%);
        transform: translate(0, -25%)
    }

    .modal.show .modal-dialog {
        -webkit-transform: translate(0, 0);
        transform: translate(0, 0)
    }

    .modal-content {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: .3rem;
        outline: 0
    }

    .modal-header {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: start;
        align-items: flex-start;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 1rem;
        border-bottom: 1px solid #e9ecef;
        border-top-left-radius: .3rem;
        border-top-right-radius: .3rem
    }

    .modal-header .close {
        padding: 1rem;
        margin: -1rem -1rem -1rem auto
    }

    .modal-title {
        margin-bottom: 0;
        line-height: 1.5
    }

    .modal-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1rem
    }

    .modal-footer {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: end;
        justify-content: flex-end;
        padding: 1rem;
        border-top: 1px solid #e9ecef
    }

    .modal-footer>:not(:first-child) {
        margin-left: .25rem
    }

    .modal-footer>:not(:last-child) {
        margin-right: .25rem
    }

    .b,
    .btn-select {
        max-width: 100px
    }

    .carousel-inner {
        width: 100%
    }

    .carousel-item {
        display: none;
        -ms-flex-align: center;
        align-items: center;
        width: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-perspective: 1000px;
        perspective: 1000px
    }

    .carousel-item.active {
        display: block;
        transition: transform .6s;
        transition: transform .6s, -webkit-transform .6s
    }

    @media screen and (prefers-reduced-motion:reduce) {

        .btn,
        .carousel-item.active,
        .custom-select,
        .fade,
        .modal.fade .modal-dialog {
            transition: none
        }
    }

    .active.carousel-item-left {
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%)
    }

    .carousel-fade .carousel-item {
        opacity: 0;
        transition-duration: .6s;
        transition-property: opacity
    }

    #Floor-Plans .owl-carousel .owl-item.active,
    .carousel-fade .carousel-item.active {
        opacity: 1
    }

    .carousel-fade .active.carousel-item-left,
    .menuBox {
        opacity: 0
    }

    .carousel-fade .active.carousel-item-left,
    .carousel-fade .carousel-item.active {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }

    @supports((-webkit-transform-style: preserve-3d)or(transform-style:preserve-3d)) {

        .carousel-fade .active.carousel-item-left,
        .carousel-fade .active.carousel-item-prev,
        .carousel-fade .carousel-item-next,
        .carousel-fade .carousel-item-prev,
        .carousel-fade .carousel-item.active,
        .carousel-item-next.carousel-item-left,
        .carousel-item-prev.carousel-item-right {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        .active.carousel-item-right,
        .carousel-item-next {
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }

        .active.carousel-item-left,
        .carousel-item-prev {
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0)
        }
    }

    .align-top {
        vertical-align: top !important
    }

    .align-text-top {
        vertical-align: text-top !important
    }

    .bg-danger {
        background-color: #dc3545 !important
    }

    a.bg-danger:focus,
    a.bg-danger:hover,
    button.bg-danger:focus,
    button.bg-danger:hover {
        background-color: #bd2130 !important
    }

    .bg-light {
        background-color: #f8f9fa !important
    }

    a.bg-light:focus,
    a.bg-light:hover,
    button.bg-light:focus,
    button.bg-light:hover {
        background-color: #dae0e5 !important
    }

    .bg-dark {
        background-color: #343a40 !important
    }

    a.bg-dark:focus,
    a.bg-dark:hover,
    button.bg-dark:focus,
    button.bg-dark:hover {
        background-color: #1d2124 !important
    }

    .bg-white {
        background-color: #fff !important
    }

    .border {
        border: 1px solid #dee2e6 !important
    }

    .border-top {
        border-top: 1px solid #dee2e6 !important
    }

    .border-left {
        border-left: 1px solid #dee2e6 !important
    }

    .border-0 {
        border: 0 !important
    }

    .rounded-left,
    .rounded-top {
        border-top-left-radius: .25rem !important
    }

    .border-top-0 {
        border-top: 0 !important
    }

    .border-left-0 {
        border-left: 0 !important
    }

    .border-danger {
        border-color: #dc3545 !important
    }

    .border-light {
        border-color: #f8f9fa !important
    }

    .border-dark {
        border-color: #343a40 !important
    }

    .border-white {
        border-color: #fff !important
    }

    .rounded {
        border-radius: .25rem !important
    }

    .rounded-top {
        border-top-right-radius: .25rem !important
    }

    .rounded-left {
        border-bottom-left-radius: .25rem !important
    }

    .rounded-circle {
        border-radius: 50% !important
    }

    .rounded-0 {
        border-radius: 0 !important
    }

    .clearfix::after {
        display: block;
        clear: both;
        content: ""
    }

    .d-block,
    .open {
        display: block !important
    }

    .d-table {
        display: table !important
    }

    .d-table-row {
        display: table-row !important
    }

    .d-table-cell {
        display: table-cell !important
    }

    .justify-content-end {
        -ms-flex-pack: end !important;
        justify-content: flex-end !important
    }

    .justify-content-center {
        -ms-flex-pack: center !important;
        justify-content: center !important
    }

    .justify-content-between {
        -ms-flex-pack: justify !important;
        justify-content: space-between !important
    }

    .justify-content-around {
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important
    }

    .align-items-end {
        -ms-flex-align: end !important;
        align-items: flex-end !important
    }

    .align-items-center {
        -ms-flex-align: center !important;
        align-items: center !important
    }

    .align-content-end {
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important
    }

    .align-content-center {
        -ms-flex-line-pack: center !important;
        align-content: center !important
    }

    .align-content-between {
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important
    }

    .align-content-around {
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important
    }

    @supports((position: -webkit-sticky)or(position:sticky)) {
        .sticky-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020
        }
    }

    .shadow-sm {
        box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important
    }

    .shadow {
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important
    }

    .shadow-lg {
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important
    }

    .shadow-none {
        box-shadow: none !important
    }

    .w-25 {
        width: 25% !important
    }

    .w-50 {
        width: 50% !important
    }

    .w-75 {
        width: 75% !important
    }

    .w-100 {
        width: 100% !important
    }

    .w-auto {
        width: auto !important
    }

    .h-25 {
        height: 25% !important
    }

    .h-50 {
        height: 50% !important
    }

    .h-75 {
        height: 75% !important
    }

    .h-100 {
        height: 100% !important
    }

    .h-auto {
        height: auto !important
    }

    .m-0 {
        margin: 0 !important
    }

    .mt-0,
    .my-0 {
        margin-top: 0 !important
    }

    .mr-0,
    .mx-0 {
        margin-right: 0 !important
    }

    .mb-0,
    .my-0 {
        margin-bottom: 0 !important
    }

    .ml-0,
    .mx-0 {
        margin-left: 0 !important
    }

    .m-1 {
        margin: .25rem !important
    }

    .mt-1,
    .my-1 {
        margin-top: .25rem !important
    }

    .mr-1,
    .mx-1 {
        margin-right: .25rem !important
    }

    .mb-1,
    .my-1 {
        margin-bottom: .25rem !important
    }

    .ml-1,
    .mx-1 {
        margin-left: .25rem !important
    }

    .m-2 {
        margin: .5rem !important
    }

    .mt-2,
    .my-2 {
        margin-top: .5rem !important
    }

    .mr-2,
    .mx-2 {
        margin-right: .5rem !important
    }

    .mb-2,
    .my-2 {
        margin-bottom: .5rem !important
    }

    .ml-2,
    .mx-2 {
        margin-left: .5rem !important
    }

    .m-3 {
        margin: 1rem !important
    }

    .mt-3,
    .my-3 {
        margin-top: 1rem !important
    }

    .mr-3,
    .mx-3 {
        margin-right: 1rem !important
    }

    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important
    }

    .ml-3,
    .mx-3 {
        margin-left: 1rem !important
    }

    .m-4 {
        margin: 1.5rem !important
    }

    .mt-4,
    .my-4 {
        margin-top: 1.5rem !important
    }

    .mr-4,
    .mx-4 {
        margin-right: 1.5rem !important
    }

    .mb-4,
    .my-4 {
        margin-bottom: 1.5rem !important
    }

    .ml-4,
    .mx-4 {
        margin-left: 1.5rem !important
    }

    .m-5 {
        margin: 3rem !important
    }

    .mt-5,
    .my-5 {
        margin-top: 3rem !important
    }

    .mr-5,
    .mx-5 {
        margin-right: 3rem !important
    }

    .mb-5,
    .my-5 {
        margin-bottom: 3rem !important
    }

    .ml-5,
    .mx-5 {
        margin-left: 3rem !important
    }

    .p-0 {
        padding: 0 !important
    }

    .pt-0,
    .py-0 {
        padding-top: 0 !important
    }

    .pb-0,
    .py-0 {
        padding-bottom: 0 !important
    }

    .p-1 {
        padding: .25rem !important
    }

    .pt-1,
    .py-1 {
        padding-top: .25rem !important
    }

    .pb-1,
    .py-1 {
        padding-bottom: .25rem !important
    }

    .p-2 {
        padding: .5rem !important
    }

    .pt-2,
    .py-2 {
        padding-top: .5rem !important
    }

    .pb-2,
    .py-2 {
        padding-bottom: .5rem !important
    }

    .p-3 {
        padding: 1rem !important
    }

    .pt-3,
    .py-3 {
        padding-top: 1rem !important
    }

    .pb-3,
    .py-3 {
        padding-bottom: 1rem !important
    }

    .p-4 {
        padding: 1.5rem !important
    }

    .pt-4,
    .py-4 {
        padding-top: 1.5rem !important
    }

    .pb-4,
    .py-4 {
        padding-bottom: 1.5rem !important
    }

    .p-5 {
        padding: 3rem !important
    }

    .pt-5,
    .py-5 {
        padding-top: 3rem !important
    }

    .pb-5,
    .py-5 {
        padding-bottom: 3rem !important
    }

    .m-auto {
        margin: auto !important
    }

    .mt-auto,
    .my-auto {
        margin-top: auto !important
    }

    .mr-auto,
    .mx-auto {
        margin-right: auto !important
    }

    .mb-auto,
    .my-auto {
        margin-bottom: auto !important
    }

    .ml-auto,
    .mx-auto {
        margin-left: auto !important
    }

    #a,
    .fa-ul {
        padding-left: 0
    }

    .text-justify {
        text-align: justify !important
    }

    .text-left {
        text-align: left !important
    }

    .text-center {
        text-align: center !important
    }

    @media(min-width: 576px) {
        .col-sm {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%
        }

        .col-sm-auto {
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: none
        }

        .col-sm-1 {
            -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
            max-width: 8.333333%
        }

        .col-sm-2 {
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%
        }

        .col-sm-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-sm-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .col-sm-5 {
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%
        }

        .col-sm-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-sm-7 {
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%
        }

        .col-sm-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%
        }

        .col-sm-9 {
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-sm-10 {
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
            max-width: 83.333333%
        }

        .col-sm-11 {
            -ms-flex: 0 0 91.666667%;
            flex: 0 0 91.666667%;
            max-width: 91.666667%
        }

        .col-sm-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }

        .order-sm-0 {
            -ms-flex-order: 0;
            order: 0
        }

        .order-sm-1 {
            -ms-flex-order: 1;
            order: 1
        }

        .order-sm-2 {
            -ms-flex-order: 2;
            order: 2
        }

        .order-sm-3 {
            -ms-flex-order: 3;
            order: 3
        }

        .order-sm-4 {
            -ms-flex-order: 4;
            order: 4
        }

        .order-sm-5 {
            -ms-flex-order: 5;
            order: 5
        }

        .order-sm-6 {
            -ms-flex-order: 6;
            order: 6
        }

        .order-sm-7 {
            -ms-flex-order: 7;
            order: 7
        }

        .order-sm-8 {
            -ms-flex-order: 8;
            order: 8
        }

        .order-sm-9 {
            -ms-flex-order: 9;
            order: 9
        }

        .order-sm-10 {
            -ms-flex-order: 10;
            order: 10
        }

        .order-sm-11 {
            -ms-flex-order: 11;
            order: 11
        }

        .order-sm-12 {
            -ms-flex-order: 12;
            order: 12
        }

        .navbar-expand-sm {
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .navbar-expand-sm .navbar-nav {
            -ms-flex-direction: row;
            flex-direction: row
        }

        .navbar-expand-sm .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand-sm>.container,
        .navbar-expand-sm>.container-fluid {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap
        }

        .card-group {
            -ms-flex-flow: row wrap;
            flex-flow: row wrap
        }

        .card-group>.card {
            -ms-flex: 1 0 0%;
            flex: 1 0 0%;
            margin-bottom: 0
        }

        .card-group>.card+.card {
            margin-left: 0;
            border-left: 0
        }

        .card-group>.card:first-child {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .card-group>.card:first-child .card-header,
        .card-group>.card:first-child .card-img-top {
            border-top-right-radius: 0
        }

        .card-group>.card:first-child .card-footer {
            border-bottom-right-radius: 0
        }

        .card-group>.card:last-child {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .card-group>.card:last-child .card-header,
        .card-group>.card:last-child .card-img-top {
            border-top-left-radius: 0
        }

        .card-group>.card:last-child .card-footer {
            border-bottom-left-radius: 0
        }

        .card-group>.card:only-child {
            border-radius: .25rem
        }

        .card-group>.card:only-child .card-header,
        .card-group>.card:only-child .card-img-top {
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem
        }

        .card-group>.card:only-child .card-footer {
            border-bottom-right-radius: .25rem;
            border-bottom-left-radius: .25rem
        }

        .card-group>.card:not(:first-child):not(:last-child):not(:only-child),
        .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-footer,
        .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-header,
        .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-top {
            border-radius: 0
        }

        .modal-dialog {
            max-width: 500px;
            margin: 1.75rem auto
        }

        .modal-sm {
            max-width: 300px
        }

        .d-sm-none {
            display: none !important
        }

        .d-sm-block {
            display: block !important
        }

        .d-sm-table {
            display: table !important
        }

        .d-sm-table-row {
            display: table-row !important
        }

        .d-sm-table-cell {
            display: table-cell !important
        }

        .justify-content-sm-end {
            -ms-flex-pack: end !important;
            justify-content: flex-end !important
        }

        .justify-content-sm-center {
            -ms-flex-pack: center !important;
            justify-content: center !important
        }

        .justify-content-sm-between {
            -ms-flex-pack: justify !important;
            justify-content: space-between !important
        }

        .justify-content-sm-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important
        }

        .align-items-sm-end {
            -ms-flex-align: end !important;
            align-items: flex-end !important
        }

        .align-items-sm-center {
            -ms-flex-align: center !important;
            align-items: center !important
        }

        .align-content-sm-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important
        }

        .align-content-sm-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important
        }

        .align-content-sm-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important
        }

        .align-content-sm-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important
        }

        .m-sm-0 {
            margin: 0 !important
        }

        .mt-sm-0,
        .my-sm-0 {
            margin-top: 0 !important
        }

        .mr-sm-0,
        .mx-sm-0 {
            margin-right: 0 !important
        }

        .mb-sm-0,
        .my-sm-0 {
            margin-bottom: 0 !important
        }

        .ml-sm-0,
        .mx-sm-0 {
            margin-left: 0 !important
        }

        .m-sm-1 {
            margin: .25rem !important
        }

        .mt-sm-1,
        .my-sm-1 {
            margin-top: .25rem !important
        }

        .mr-sm-1,
        .mx-sm-1 {
            margin-right: .25rem !important
        }

        .mb-sm-1,
        .my-sm-1 {
            margin-bottom: .25rem !important
        }

        .ml-sm-1,
        .mx-sm-1 {
            margin-left: .25rem !important
        }

        .m-sm-2 {
            margin: .5rem !important
        }

        .mt-sm-2,
        .my-sm-2 {
            margin-top: .5rem !important
        }

        .mr-sm-2,
        .mx-sm-2 {
            margin-right: .5rem !important
        }

        .mb-sm-2,
        .my-sm-2 {
            margin-bottom: .5rem !important
        }

        .ml-sm-2,
        .mx-sm-2 {
            margin-left: .5rem !important
        }

        .m-sm-3 {
            margin: 1rem !important
        }

        .mt-sm-3,
        .my-sm-3 {
            margin-top: 1rem !important
        }

        .mr-sm-3,
        .mx-sm-3 {
            margin-right: 1rem !important
        }

        .mb-sm-3,
        .my-sm-3 {
            margin-bottom: 1rem !important
        }

        .ml-sm-3,
        .mx-sm-3 {
            margin-left: 1rem !important
        }

        .m-sm-4 {
            margin: 1.5rem !important
        }

        .mt-sm-4,
        .my-sm-4 {
            margin-top: 1.5rem !important
        }

        .mr-sm-4,
        .mx-sm-4 {
            margin-right: 1.5rem !important
        }

        .mb-sm-4,
        .my-sm-4 {
            margin-bottom: 1.5rem !important
        }

        .ml-sm-4,
        .mx-sm-4 {
            margin-left: 1.5rem !important
        }

        .m-sm-5 {
            margin: 3rem !important
        }

        .mt-sm-5,
        .my-sm-5 {
            margin-top: 3rem !important
        }

        .mr-sm-5,
        .mx-sm-5 {
            margin-right: 3rem !important
        }

        .mb-sm-5,
        .my-sm-5 {
            margin-bottom: 3rem !important
        }

        .ml-sm-5,
        .mx-sm-5 {
            margin-left: 3rem !important
        }

        .p-sm-0 {
            padding: 0 !important
        }

        .pt-sm-0,
        .py-sm-0 {
            padding-top: 0 !important
        }

        .pb-sm-0,
        .py-sm-0 {
            padding-bottom: 0 !important
        }

        .p-sm-1 {
            padding: .25rem !important
        }

        .pt-sm-1,
        .py-sm-1 {
            padding-top: .25rem !important
        }

        .pb-sm-1,
        .py-sm-1 {
            padding-bottom: .25rem !important
        }

        .p-sm-2 {
            padding: .5rem !important
        }

        .pt-sm-2,
        .py-sm-2 {
            padding-top: .5rem !important
        }

        .pb-sm-2,
        .py-sm-2 {
            padding-bottom: .5rem !important
        }

        .p-sm-3 {
            padding: 1rem !important
        }

        .pt-sm-3,
        .py-sm-3 {
            padding-top: 1rem !important
        }

        .pb-sm-3,
        .py-sm-3 {
            padding-bottom: 1rem !important
        }

        .p-sm-4 {
            padding: 1.5rem !important
        }

        .pt-sm-4,
        .py-sm-4 {
            padding-top: 1.5rem !important
        }

        .pb-sm-4,
        .py-sm-4 {
            padding-bottom: 1.5rem !important
        }

        .p-sm-5 {
            padding: 3rem !important
        }

        .pt-sm-5,
        .py-sm-5 {
            padding-top: 3rem !important
        }

        .pb-sm-5,
        .py-sm-5 {
            padding-bottom: 3rem !important
        }

        .m-sm-auto {
            margin: auto !important
        }

        .mt-sm-auto,
        .my-sm-auto {
            margin-top: auto !important
        }

        .mr-sm-auto,
        .mx-sm-auto {
            margin-right: auto !important
        }

        .mb-sm-auto,
        .my-sm-auto {
            margin-bottom: auto !important
        }

        .ml-sm-auto,
        .mx-sm-auto {
            margin-left: auto !important
        }

        .text-sm-left {
            text-align: left !important
        }

        .text-sm-center {
            text-align: center !important
        }
    }

    @media(min-width: 992px) {
        .col-lg {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%
        }

        .col-lg-auto {
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: none
        }

        .col-lg-1 {
            -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
            max-width: 8.333333%
        }

        .col-lg-2 {
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%
        }

        .col-lg-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-lg-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .col-lg-5 {
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%
        }

        .col-lg-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-lg-7 {
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%
        }

        .col-lg-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%
        }

        .col-lg-9 {
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-lg-10 {
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
            max-width: 83.333333%
        }

        .col-lg-11 {
            -ms-flex: 0 0 91.666667%;
            flex: 0 0 91.666667%;
            max-width: 91.666667%
        }

        .col-lg-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }

        .order-lg-0 {
            -ms-flex-order: 0;
            order: 0
        }

        .order-lg-1 {
            -ms-flex-order: 1;
            order: 1
        }

        .order-lg-2 {
            -ms-flex-order: 2;
            order: 2
        }

        .order-lg-3 {
            -ms-flex-order: 3;
            order: 3
        }

        .order-lg-4 {
            -ms-flex-order: 4;
            order: 4
        }

        .order-lg-5 {
            -ms-flex-order: 5;
            order: 5
        }

        .order-lg-6 {
            -ms-flex-order: 6;
            order: 6
        }

        .order-lg-7 {
            -ms-flex-order: 7;
            order: 7
        }

        .order-lg-8 {
            -ms-flex-order: 8;
            order: 8
        }

        .order-lg-9 {
            -ms-flex-order: 9;
            order: 9
        }

        .order-lg-10 {
            -ms-flex-order: 10;
            order: 10
        }

        .order-lg-11 {
            -ms-flex-order: 11;
            order: 11
        }

        .order-lg-12 {
            -ms-flex-order: 12;
            order: 12
        }

        .navbar-expand-lg {
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .navbar-expand-lg .navbar-nav {
            -ms-flex-direction: row;
            flex-direction: row
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand-lg>.container,
        .navbar-expand-lg>.container-fluid {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap
        }

        .modal-lg {
            max-width: 800px
        }

        .d-lg-none {
            display: none !important
        }

        .d-lg-block {
            display: block !important
        }

        .d-lg-table {
            display: table !important
        }

        .d-lg-table-row {
            display: table-row !important
        }

        .d-lg-table-cell {
            display: table-cell !important
        }

        .justify-content-lg-end {
            -ms-flex-pack: end !important;
            justify-content: flex-end !important
        }

        .justify-content-lg-center {
            -ms-flex-pack: center !important;
            justify-content: center !important
        }

        .justify-content-lg-between {
            -ms-flex-pack: justify !important;
            justify-content: space-between !important
        }

        .justify-content-lg-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important
        }

        .align-items-lg-end {
            -ms-flex-align: end !important;
            align-items: flex-end !important
        }

        .align-items-lg-center {
            -ms-flex-align: center !important;
            align-items: center !important
        }

        .align-content-lg-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important
        }

        .align-content-lg-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important
        }

        .align-content-lg-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important
        }

        .align-content-lg-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important
        }

        .m-lg-0 {
            margin: 0 !important
        }

        .mt-lg-0,
        .my-lg-0 {
            margin-top: 0 !important
        }

        .mr-lg-0,
        .mx-lg-0 {
            margin-right: 0 !important
        }

        .mb-lg-0,
        .my-lg-0 {
            margin-bottom: 0 !important
        }

        .ml-lg-0,
        .mx-lg-0 {
            margin-left: 0 !important
        }

        .m-lg-1 {
            margin: .25rem !important
        }

        .mt-lg-1,
        .my-lg-1 {
            margin-top: .25rem !important
        }

        .mr-lg-1,
        .mx-lg-1 {
            margin-right: .25rem !important
        }

        .mb-lg-1,
        .my-lg-1 {
            margin-bottom: .25rem !important
        }

        .ml-lg-1,
        .mx-lg-1 {
            margin-left: .25rem !important
        }

        .m-lg-2 {
            margin: .5rem !important
        }

        .mt-lg-2,
        .my-lg-2 {
            margin-top: .5rem !important
        }

        .mr-lg-2,
        .mx-lg-2 {
            margin-right: .5rem !important
        }

        .mb-lg-2,
        .my-lg-2 {
            margin-bottom: .5rem !important
        }

        .ml-lg-2,
        .mx-lg-2 {
            margin-left: .5rem !important
        }

        .m-lg-3 {
            margin: 1rem !important
        }

        .mt-lg-3,
        .my-lg-3 {
            margin-top: 1rem !important
        }

        .mr-lg-3,
        .mx-lg-3 {
            margin-right: 1rem !important
        }

        .mb-lg-3,
        .my-lg-3 {
            margin-bottom: 1rem !important
        }

        .ml-lg-3,
        .mx-lg-3 {
            margin-left: 1rem !important
        }

        .m-lg-4 {
            margin: 1.5rem !important
        }

        .mt-lg-4,
        .my-lg-4 {
            margin-top: 1.5rem !important
        }

        .mr-lg-4,
        .mx-lg-4 {
            margin-right: 1.5rem !important
        }

        .mb-lg-4,
        .my-lg-4 {
            margin-bottom: 1.5rem !important
        }

        .ml-lg-4,
        .mx-lg-4 {
            margin-left: 1.5rem !important
        }

        .m-lg-5 {
            margin: 3rem !important
        }

        .mt-lg-5,
        .my-lg-5 {
            margin-top: 3rem !important
        }

        .mr-lg-5,
        .mx-lg-5 {
            margin-right: 3rem !important
        }

        .mb-lg-5,
        .my-lg-5 {
            margin-bottom: 3rem !important
        }

        .ml-lg-5,
        .mx-lg-5 {
            margin-left: 3rem !important
        }

        .p-lg-0 {
            padding: 0 !important
        }

        .pt-lg-0,
        .py-lg-0 {
            padding-top: 0 !important
        }

        .pb-lg-0,
        .py-lg-0 {
            padding-bottom: 0 !important
        }

        .p-lg-1 {
            padding: .25rem !important
        }

        .pt-lg-1,
        .py-lg-1 {
            padding-top: .25rem !important
        }

        .pb-lg-1,
        .py-lg-1 {
            padding-bottom: .25rem !important
        }

        .p-lg-2 {
            padding: .5rem !important
        }

        .pt-lg-2,
        .py-lg-2 {
            padding-top: .5rem !important
        }

        .pb-lg-2,
        .py-lg-2 {
            padding-bottom: .5rem !important
        }

        .p-lg-3 {
            padding: 1rem !important
        }

        .pt-lg-3,
        .py-lg-3 {
            padding-top: 1rem !important
        }

        .pb-lg-3,
        .py-lg-3 {
            padding-bottom: 1rem !important
        }

        .p-lg-4 {
            padding: 1.5rem !important
        }

        .pt-lg-4,
        .py-lg-4 {
            padding-top: 1.5rem !important
        }

        .pb-lg-4,
        .py-lg-4 {
            padding-bottom: 1.5rem !important
        }

        .p-lg-5 {
            padding: 3rem !important
        }

        .pt-lg-5,
        .py-lg-5 {
            padding-top: 3rem !important
        }

        .pb-lg-5,
        .py-lg-5 {
            padding-bottom: 3rem !important
        }

        .m-lg-auto {
            margin: auto !important
        }

        .mt-lg-auto,
        .my-lg-auto {
            margin-top: auto !important
        }

        .mr-lg-auto,
        .mx-lg-auto {
            margin-right: auto !important
        }

        .mb-lg-auto,
        .my-lg-auto {
            margin-bottom: auto !important
        }

        .ml-lg-auto,
        .mx-lg-auto {
            margin-left: auto !important
        }

        .text-lg-left {
            text-align: left !important
        }

        .text-lg-center {
            text-align: center !important
        }
    }

    .text-capitalize {
        text-transform: capitalize !important
    }

    .text-white {
        color: #fff !important
    }

    .text-danger {
        color: #dc3545 !important
    }

    a.text-danger:focus,
    a.text-danger:hover {
        color: #bd2130 !important
    }

    .text-light {
        color: #f8f9fa !important
    }

    a.text-light:focus,
    a.text-light:hover {
        color: #dae0e5 !important
    }

    .text-dark {
        color: #343a40 !important
    }

    a.text-dark:focus,
    a.text-dark:hover {
        color: #1d2124 !important
    }

    .text-body {
        color: #212529 !important
    }

    .text-white-50 {
        color: rgba(255, 255, 255, .5) !important
    }

    @media print {

        *,
        ::after,
        ::before {
            text-shadow: none !important;
            box-shadow: none !important
        }

        a:not(.btn) {
            text-decoration: underline
        }

        img {
            page-break-inside: avoid
        }

        h2,
        h3,
        p {
            orphans: 3;
            widows: 3
        }

        h2,
        h3 {
            page-break-after: avoid
        }

        @page {
            size: a3
        }

        .container,
        body {
            min-width: 992px !important
        }

        .navbar {
            display: none
        }

        .table {
            border-collapse: collapse !important
        }

        .table-dark {
            color: inherit
        }
    }

    
    .fa {
        display: inline-block;
        font: 14px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .fa-lg {
        font-size: 1.33333333em;
        line-height: .75em;
        vertical-align: -15%
    }

    .fa-2x {
        font-size: 2em
    }

    .fa-3x {
        font-size: 3em
    }

    .fa-4x {
        font-size: 4em
    }

    .fa-5x {
        font-size: 5em
    }

    .fa-ul {
        margin-left: 2.14285714em;
        list-style-type: none
    }

    .bg_inner_img,
    .download_bro .form-group,
    .fa-ul>li,
    .pro-images,
    .projects .enq-form .form-group {
        position: relative
    }

    .fa-li {
        position: absolute;
        left: -2.14285714em;
        width: 2.14285714em;
        top: .14285714em;
        text-align: center
    }

    .fa-li.fa-lg {
        left: -1.85714286em
    }

    .fa-border {
        padding: .2em .25em .15em;
        border: .08em solid #eee;
        border-radius: .1em
    }

    @-webkit-keyframes fa-spin {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }

        100% {
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg)
        }
    }

    @keyframes fa-spin {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }

        100% {
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg)
        }
    }

    .fa-envelope-o:before {
        content: ""
    }

    .fa-heart:before {
        content: ""
    }

    .fa-check:before {
        content: ""
    }

    .fa-close:before,
    .fa-times:before {
        content: ""
    }

    .fa-cog:before {
        content: ""
    }

    .fa-home:before {
        content: ""
    }

    .fa-download:before {
        content: ""
    }

    .fa-play-circle-o:before {
        content: ""
    }

    .fa-repeat:before {
        content: ""
    }

    .fa-tag:before {
        content: ""
    }

    .fa-font:before {
        content: ""
    }

    .fa-text-height:before {
        content: ""
    }

    .fa-text-width:before {
        content: ""
    }

    .fa-align-left:before {
        content: ""
    }

    .fa-align-center:before {
        content: ""
    }

    .fa-align-justify:before {
        content: ""
    }

    .fa-image:before {
        content: ""
    }

    .fa-map-marker:before {
        content: ""
    }

    .fa-play:before {
        content: ""
    }

    .fa-times-circle:before {
        content: ""
    }

    .fa-check-circle:before {
        content: ""
    }

    .fa-times-circle-o:before {
        content: ""
    }

    .fa-check-circle-o:before {
        content: ""
    }

    .fa-expand:before {
        content: ""
    }

    .fa-plane:before {
        content: ""
    }

    .fa-key:before {
        content: ""
    }

    .fa-heart-o:before {
        content: ""
    }

    .fa-phone:before {
        content: ""
    }

    .fa-twitter:before {
        content: ""
    }

    .fa-facebook-f:before,
    .fa-facebook:before {
        content: ""
    }

    .fa-group:before {
        content: ""
    }

    .fa-link:before {
        content: ""
    }

    .fa-table:before {
        content: ""
    }

    .fa-sort:before {
        content: ""
    }

    .fa-sort-down:before {
        content: ""
    }

    .fa-sort-up:before {
        content: ""
    }

    .fa-envelope:before {
        content: ""
    }

    .fa-linkedin:before {
        content: ""
    }

    .fa-angle-left:before {
        content: ""
    }

    .fa-angle-right:before {
        content: ""
    }

    .fa-angle-up:before {
        content: ""
    }

    .fa-angle-down:before {
        content: ""
    }

    .fa-circle-o:before {
        content: ""
    }

    .fa-circle:before {
        content: ""
    }

    .fa-code:before {
        content: ""
    }

    .fa-html5:before {
        content: ""
    }

    .fa-css3:before {
        content: ""
    }

    .fa-play-circle:before {
        content: ""
    }

    .fa-toggle-down:before {
        content: ""
    }

    .fa-toggle-up:before {
        content: ""
    }

    .fa-youtube:before {
        content: ""
    }

    .fa-youtube-play:before {
        content: ""
    }

    .fa-instagram:before {
        content: ""
    }

    .fa-toggle-left:before {
        content: ""
    }

    .fa-google:before {
        content: ""
    }

    .fa-support:before {
        content: ""
    }

    .fa-paper-plane:before,
    .fa-send:before {
        content: ""
    }

    .fa-paper-plane-o:before,
    .fa-send-o:before {
        content: ""
    }

    .fa-header:before {
        content: ""
    }

    .fa-copyright:before {
        content: ""
    }

    .fa-at:before {
        content: ""
    }

    .fa-toggle-off:before {
        content: ""
    }

    .fa-toggle-on:before {
        content: ""
    }

    .fa-whatsapp:before {
        content: ""
    }

    .fa-bed:before,
    .fa-hotel:before {
        content: ""
    }

    .fa-get-pocket:before {
        content: ""
    }

    .fa-map-o:before {
        content: ""
    }

    .fa-map:before {
        content: ""
    }

    .fa-fa:before,
    .fa-font-awesome:before {
        content: ""
    }

    .fa-id-card:before {
        content: ""
    }

    .fa-id-card-o:before {
        content: ""
    }

    .fa-s15:before {
        content: ""
    }

    .owl-theme .owl-controls {
        margin-top: 10px;
        text-align: center
    }

    .owl-theme .owl-controls .owl-buttons div {
        color: #fff;
        display: inline-block;
        zoom: 1;
        margin: 5px;
        padding: 3px 10px;
        font-size: 12px;
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        border-radius: 30px;
        background: #869791;
        filter: Alpha(Opacity=50);
        opacity: .5
    }

    

    .owl-fade-in {
        -webkit-animation: .7s both fadeIn;
        -moz-animation: .7s both fadeIn;
        animation: .7s both fadeIn
    }

    @-webkit-keyframes empty {
        0% {
            opacity: 1
        }
    }

    @-moz-keyframes empty {
        0% {
            opacity: 1
        }
    }

    @keyframes empty {
        0% {
            opacity: 1
        }
    }

    @-webkit-keyframes fadeIn {
        0% {
            opacity: 0
        }

        100% {
            opacity: 1
        }
    }

    @-moz-keyframes fadeIn {
        0% {
            opacity: 0
        }

        100% {
            opacity: 1
        }
    }

    @keyframes fadeIn {
        0% {
            opacity: 0
        }

        100% {
            opacity: 1
        }
    }

    @-webkit-keyframes fadeOut {
        0% {
            opacity: 1
        }

        100% {
            opacity: 0
        }
    }

    @-moz-keyframes fadeOut {
        0% {
            opacity: 1
        }

        100% {
            opacity: 0
        }
    }

    @keyframes fadeOut {
        0% {
            opacity: 1
        }

        100% {
            opacity: 0
        }
    }

    @-webkit-keyframes backSlideOut {
        25% {
            opacity: .5;
            -webkit-transform: translateZ(-500px)
        }

        100%,
        75% {
            opacity: .5;
            -webkit-transform: translateZ(-500px) translateX(-200%)
        }
    }

    @-moz-keyframes backSlideOut {
        25% {
            opacity: .5;
            -moz-transform: translateZ(-500px)
        }

        100%,
        75% {
            opacity: .5;
            -moz-transform: translateZ(-500px) translateX(-200%)
        }
    }

    @keyframes backSlideOut {
        25% {
            opacity: .5;
            transform: translateZ(-500px)
        }

        100%,
        75% {
            opacity: .5;
            transform: translateZ(-500px) translateX(-200%)
        }
    }

    @-webkit-keyframes backSlideIn {

        0%,
        25% {
            opacity: .5;
            -webkit-transform: translateZ(-500px) translateX(200%)
        }

        75% {
            opacity: .5;
            -webkit-transform: translateZ(-500px)
        }

        100% {
            opacity: 1;
            -webkit-transform: translateZ(0) translateX(0)
        }
    }

    @-moz-keyframes backSlideIn {

        0%,
        25% {
            opacity: .5;
            -moz-transform: translateZ(-500px) translateX(200%)
        }

        75% {
            opacity: .5;
            -moz-transform: translateZ(-500px)
        }

        100% {
            opacity: 1;
            -moz-transform: translateZ(0) translateX(0)
        }
    }

    @keyframes backSlideIn {

        0%,
        25% {
            opacity: .5;
            transform: translateZ(-500px) translateX(200%)
        }

        75% {
            opacity: .5;
            transform: translateZ(-500px)
        }

        100% {
            opacity: 1;
            transform: translateZ(0) translateX(0)
        }
    }

    @-webkit-keyframes scaleToFade {
        to {
            opacity: 0;
            -webkit-transform: scale(.8)
        }
    }

    @-moz-keyframes scaleToFade {
        to {
            opacity: 0;
            -moz-transform: scale(.8)
        }
    }

    @keyframes scaleToFade {
        to {
            opacity: 0;
            transform: scale(.8)
        }
    }

    @-webkit-keyframes goDown {
        from {
            -webkit-transform: translateY(-100%)
        }
    }

    @-moz-keyframes goDown {
        from {
            -moz-transform: translateY(-100%)
        }
    }

    @keyframes goDown {
        from {
            transform: translateY(-100%)
        }
    }

    @-webkit-keyframes scaleUpFrom {
        from {
            opacity: 0;
            -webkit-transform: scale(1.5)
        }
    }

    @-moz-keyframes scaleUpFrom {
        from {
            opacity: 0;
            -moz-transform: scale(1.5)
        }
    }

    @keyframes scaleUpFrom {
        from {
            opacity: 0;
            transform: scale(1.5)
        }
    }

    @-webkit-keyframes scaleUpTo {
        to {
            opacity: 0;
            -webkit-transform: scale(1.5)
        }
    }

    @-moz-keyframes scaleUpTo {
        to {
            opacity: 0;
            -moz-transform: scale(1.5)
        }
    }

    @keyframes scaleUpTo {
        to {
            opacity: 0;
            transform: scale(1.5)
        }
    }

    @media(min-width: 768px) {
        .col-md {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%
        }

        .col-md-auto {
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: none
        }

        .col-md-1 {
            -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
            max-width: 8.333333%
        }

        .col-md-2 {
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%
        }

        .col-md-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-md-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .col-md-5 {
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%
        }

        .col-md-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-md-7 {
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%
        }

        .col-md-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%
        }

        .col-md-9 {
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-md-10 {
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
            max-width: 83.333333%
        }

        .col-md-11 {
            -ms-flex: 0 0 91.666667%;
            flex: 0 0 91.666667%;
            max-width: 91.666667%
        }

        .col-md-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }

        .order-md-0 {
            -ms-flex-order: 0;
            order: 0
        }

        .order-md-1 {
            -ms-flex-order: 1;
            order: 1
        }

        .order-md-2 {
            -ms-flex-order: 2;
            order: 2
        }

        .order-md-3 {
            -ms-flex-order: 3;
            order: 3
        }

        .order-md-4 {
            -ms-flex-order: 4;
            order: 4
        }

        .order-md-5 {
            -ms-flex-order: 5;
            order: 5
        }

        .order-md-6 {
            -ms-flex-order: 6;
            order: 6
        }

        .order-md-7 {
            -ms-flex-order: 7;
            order: 7
        }

        .order-md-8 {
            -ms-flex-order: 8;
            order: 8
        }

        .order-md-9 {
            -ms-flex-order: 9;
            order: 9
        }

        .order-md-10 {
            -ms-flex-order: 10;
            order: 10
        }

        .order-md-11 {
            -ms-flex-order: 11;
            order: 11
        }

        .order-md-12 {
            -ms-flex-order: 12;
            order: 12
        }

        .navbar-expand-md {
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .navbar-expand-md .navbar-nav {
            -ms-flex-direction: row;
            flex-direction: row
        }

        .navbar-expand-md .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand-md>.container,
        .navbar-expand-md>.container-fluid {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap
        }

        .d-md-none {
            display: none !important
        }

        .d-md-block {
            display: block !important
        }

        .d-md-table {
            display: table !important
        }

        .d-md-table-row {
            display: table-row !important
        }

        .d-md-table-cell {
            display: table-cell !important
        }

        .justify-content-md-end {
            -ms-flex-pack: end !important;
            justify-content: flex-end !important
        }

        .justify-content-md-center {
            -ms-flex-pack: center !important;
            justify-content: center !important
        }

        .justify-content-md-between {
            -ms-flex-pack: justify !important;
            justify-content: space-between !important
        }

        .justify-content-md-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important
        }

        .align-items-md-end {
            -ms-flex-align: end !important;
            align-items: flex-end !important
        }

        .align-items-md-center {
            -ms-flex-align: center !important;
            align-items: center !important
        }

        .align-content-md-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important
        }

        .align-content-md-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important
        }

        .align-content-md-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important
        }

        .align-content-md-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important
        }

        .m-md-0 {
            margin: 0 !important
        }

        .mt-md-0,
        .my-md-0 {
            margin-top: 0 !important
        }

        .mr-md-0,
        .mx-md-0 {
            margin-right: 0 !important
        }

        .mb-md-0,
        .my-md-0 {
            margin-bottom: 0 !important
        }

        .ml-md-0,
        .mx-md-0 {
            margin-left: 0 !important
        }

        .m-md-1 {
            margin: .25rem !important
        }

        .mt-md-1,
        .my-md-1 {
            margin-top: .25rem !important
        }

        .mr-md-1,
        .mx-md-1 {
            margin-right: .25rem !important
        }

        .mb-md-1,
        .my-md-1 {
            margin-bottom: .25rem !important
        }

        .ml-md-1,
        .mx-md-1 {
            margin-left: .25rem !important
        }

        .m-md-2 {
            margin: .5rem !important
        }

        .mt-md-2,
        .my-md-2 {
            margin-top: .5rem !important
        }

        .mr-md-2,
        .mx-md-2 {
            margin-right: .5rem !important
        }

        .mb-md-2,
        .my-md-2 {
            margin-bottom: .5rem !important
        }

        .ml-md-2,
        .mx-md-2 {
            margin-left: .5rem !important
        }

        .m-md-3 {
            margin: 1rem !important
        }

        .mt-md-3,
        .my-md-3 {
            margin-top: 1rem !important
        }

        .mr-md-3,
        .mx-md-3 {
            margin-right: 1rem !important
        }

        .mb-md-3,
        .my-md-3 {
            margin-bottom: 1rem !important
        }

        .ml-md-3,
        .mx-md-3 {
            margin-left: 1rem !important
        }

        .m-md-4 {
            margin: 1.5rem !important
        }

        .mt-md-4,
        .my-md-4 {
            margin-top: 1.5rem !important
        }

        .mr-md-4,
        .mx-md-4 {
            margin-right: 1.5rem !important
        }

        .mb-md-4,
        .my-md-4 {
            margin-bottom: 1.5rem !important
        }

        .ml-md-4,
        .mx-md-4 {
            margin-left: 1.5rem !important
        }

        .m-md-5 {
            margin: 3rem !important
        }

        .mt-md-5,
        .my-md-5 {
            margin-top: 3rem !important
        }

        .mr-md-5,
        .mx-md-5 {
            margin-right: 3rem !important
        }

        .mb-md-5,
        .my-md-5 {
            margin-bottom: 3rem !important
        }

        .ml-md-5,
        .mx-md-5 {
            margin-left: 3rem !important
        }

        .p-md-0 {
            padding: 0 !important
        }

        .pt-md-0,
        .py-md-0 {
            padding-top: 0 !important
        }

        .pb-md-0,
        .py-md-0 {
            padding-bottom: 0 !important
        }

        .p-md-1 {
            padding: .25rem !important
        }

        .pt-md-1,
        .py-md-1 {
            padding-top: .25rem !important
        }

        .pb-md-1,
        .py-md-1 {
            padding-bottom: .25rem !important
        }

        .p-md-2 {
            padding: .5rem !important
        }

        .pt-md-2,
        .py-md-2 {
            padding-top: .5rem !important
        }

        .pb-md-2,
        .py-md-2 {
            padding-bottom: .5rem !important
        }

        .p-md-3 {
            padding: 1rem !important
        }

        .pt-md-3,
        .py-md-3 {
            padding-top: 1rem !important
        }

        .pb-md-3,
        .py-md-3 {
            padding-bottom: 1rem !important
        }

        .p-md-4 {
            padding: 1.5rem !important
        }

        .pt-md-4,
        .py-md-4 {
            padding-top: 1.5rem !important
        }

        .pb-md-4,
        .py-md-4 {
            padding-bottom: 1.5rem !important
        }

        .p-md-5 {
            padding: 3rem !important
        }

        .pt-md-5,
        .py-md-5 {
            padding-top: 3rem !important
        }

        .pb-md-5,
        .py-md-5 {
            padding-bottom: 3rem !important
        }

        .m-md-auto {
            margin: auto !important
        }

        .mt-md-auto,
        .my-md-auto {
            margin-top: auto !important
        }

        .mr-md-auto,
        .mx-md-auto {
            margin-right: auto !important
        }

        .mb-md-auto,
        .my-md-auto {
            margin-bottom: auto !important
        }

        .ml-md-auto,
        .mx-md-auto {
            margin-left: auto !important
        }

        .text-md-left {
            text-align: left !important
        }

        .text-md-center {
            text-align: center !important
        }

        .header-project {
            background: #0000008c !important;
            padding: 9px 30px !important;
            top: 0 !important
        }
    }

    .pro-details .row,
    .projects {
        margin: 0
    }

    .projects .enq-form {
        border: 0 !important;
        border-radius: 15px;
        -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, .03);
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, .03);
        background: #fff;
        position: relative;
        z-index: 11;
        margin-top: 50px;
        margin-bottom: 150px;
        -webkit-transition: .7s ease-in-out;
        transition: .7s ease-in-out;
    }

    .projects .sending {
        left: 0
    }

    .projects .enq-form .card-header {
        color: #000;
        text-transform: capitalize;
        text-align: center;
        background: #fff;
        padding: 11px;
        font-size: 18px;
        font-weight: 500
    }

    .download_bro input,
    .download_bro select,
    .projects .enq-form .contact-form input,
    .projects .enq-form .contact-form textarea {
        padding: 10px 15px;
        border: 1px solid #dcdcdc;
        width: 100%;
        margin-bottom: 5px
    }

    .download_bro select {
        padding: 11px 15px;
        background: #fff
    }

    .projects .enq-form .contact-form textarea {
        height: 65px
    }

    .projects .enq-form .contact-form .phone-code {
        border: 1px solid #dcdcdc;
        padding: 10px;
        width: 100%;
        background: #fff
    }

    .download_bro .row,
    .projects .enq-form .row {
        margin-right: -2px;
        margin-left: -2px
    }

    .download_bro [class*=col-],
    .projects .enq-form [class*=col-] {
        padding-right: 2px;
        padding-left: 2px
    }

    .projects .enq-form .card-footer {
        background: #fff;
        text-align: center;
        text-transform: uppercase;
        font-weight: 600;
        font-size: 13px;
        color: #0284c1;
        position: relative
    }

    .projects .enq-form .card-footer p {
        margin-bottom: 0;
        color: #0284c1;
        font-weight: 700;
        font-size: 14px
    }

    .download_bro .modal-body span,
    .projects .enq-form .card-body span {
        color: #ea1125;
        font-size: 12px;
        position: absolute;
        width: 100%;
        bottom: -16px;
        left: 0
    }

    .download_bro .modal-body span {
        bottom: -12px
    }

    .download_bro .loader_form,
    .projects .enq-form .loader_form {
        position: absolute;
        background-color: #fafafa;
        z-index: 2147483647 !important;
        opacity: .8;
        overflow: hidden;
        text-align: center;
        top: 0;
        left: 0;
        padding-top: 10%;
        right: 0;
        bottom: 0
    }

    .pro_head {
        background: #fff
    }

    .pro_head h1 {
        font-size: 26px;
        border-bottom: 0;
        margin: 0;
        font-weight: 700
    }

    .pro_head h2.location {
        font-size: 16px;
        font-weight: 500;
        color: #525151;
        border-bottom: 0;
        margin: 0;
        padding: 0
    }

    .pro_head h2.location span {
        color: #00b15c;
        font-size: 15px;
        margin-right: 5px
    }

    .pro_head .offers {
        background: #eaeaea;
        position: relative;
        padding: 4px 10px 4px 90px;
        border-radius: 3px;
        color: #000;
        margin-bottom: 10px;
        display: inline-block;
        font-size: 13px;
        line-height: 1.5;
        margin-top: 15px
    }

    .pro_head .offers span {
        background: #0284c1;
        color: #fff;
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        padding: 5px 15px;
        text-transform: uppercase
    }

    .pro_head .btn {
        padding: 10px 25px;
        border-radius: 5px
    }

    .sticky.is-sticky {
        position: fixed;
        z-index: 11;
        top: 70px;
        min-width: 262px;
        margin-top: 0
    }

    .pro-images a img {
        height: 500px;
        object-fit: cover;
        width: initial !important
    }

    .pro-images .pro-logo {
        position: absolute;
        right: 32px;
        top: -20px;
        background: #fff;
        padding: 10px;
        max-width: 210px;
        z-index: 1;
        box-shadow: -1px 0 3px #ccc;
        border-radius: 10px
    }

    .pro-images .pro-logo.left {
        right: inherit;
        left: 0
    }

    .pro-images .pro-logo img {
        width: inherit !important
    }

    .pro_overview .summary .row {
        margin-right: -7px;
        margin-left: -7px
    }

    .pro_overview .summary [class*=col-] {
        padding-right: 7px;
        padding-left: 7px
    }

    .pro_overview h3 {
        font-size: 28px;
        color: #696969
    }

    .pro_overview h3 span {
        font-weight: 600;
        color: #272727
    }

    .pro_overview p {
        line-height: 1.5;
        margin-bottom: 14px;
        text-align: justify;
        display: -webkit-box;
        -webkit-box-orient: vertical
    }

    .pro_overview p a {
        color: inherit;
        font-weight: 600
    }

    .pro_overview .card-header h3 {
        border-bottom: 2px solid #33d085;
        display: inline-block;
        margin-bottom: 0
    }

    .pro_overview ul {
        padding: 0
    }

    .pro_overview li {
        line-height: 1.9;
        color: #6e6868
    }

    .pro_overview li:before {
        content: "";
        font-family: FontAwesome;
        margin: 5px;
        color: #d64500
    }

    .contact .card {
        min-height: 123px
    }

    .contact .card h4 {
        text-transform: uppercase;
        font-size: 14px;
        font-weight: 600
    }

    .contact .card p {
        margin-bottom: 0
    }

    .pro_overview ul.feature {
        padding: 0;
        margin: 0 -29px
    }

    .pro_overview ul.feature li {
        line-height: 1.9;
        font-size: 14px;
        list-style: none;
        text-align: center;
        padding: 0;
        width: 17.5%;
        float: left;
        border: 4px solid #eaeaea;
        background: #fff;
        margin: 55px 15px 35px
    }

    .call-pont,
    .logo .logo-dark,
    .pro_overview ul.feature li:before,
    .vodiapicker {
        display: none
    }

    .pro_overview .feature .img {
        padding: 20px;
        background: #fff;
        border-radius: 50%;
        width: 100px;
        height: 100px;
        margin: -27% auto 10px;
        display: block;
        border: 2px solid #e0e0e0
    }

    .pro_overview .feature h4 {
        font-size: 20px;
        font-weight: 700;
        color: #000;
        margin-bottom: 0;
        line-height: 1;
        margin-top: 25px
    }

    .pro_overview .feature p {
        font-size: 14px;
        padding: 5px;
        min-height: 40px;
        color: #3c3c3c
    }

    #Floor-Plans .owl-next,
    #Floor-Plans .owl-prev,
    #gly .owl-next,
    #gly .owl-prev,
    .proj .owl-next,
    .proj .owl-prev {
        position: absolute;
        left: 25px;
        top: 45%;
        background: #08080891;
        padding: 0;
        width: 43px;
        height: 43px;
        color: #fff;
        font-size: 28px;
        border-radius: 3px
    }

    #Floor-Plans .owl-next,
    #gly .owl-next,
    .proj .owl-next {
        right: 25px;
        left: inherit
    }

    #Floor-Plans {
        background: #f1f1f1
    }

    #Floor-Plans img:hover {
        cursor: zoom-in
    }

    .pro_overview h4 {
        font-size: 20px;
        font-weight: 500
    }

    .pro_overview .location h4 {
        font-size: 18px;
        font-weight: 700;
        border-left: 2px solid #ea1125;
        padding-left: 5px;
        margin-bottom: 10px;
        text-align: left
    }

    .pro_overview .location ul li {
        line-height: 1.5;
        font-size: 15px;
        margin-bottom: 5px
    }

    .pro_overview .location ul li:before {
        content: "";
        font-family: FontAwesome;
        margin-right: 10px;
        color: #d64500
    }

    .pro_overview .download h5 {
        font-size: 13px;
        text-transform: uppercase;
        font-weight: 600;
        margin-bottom: 5px
    }

    .pro_overview .download ul li {
        float: left;
        margin-right: 25px;
        font-size: 14px
    }

    .pro_overview .download ul li a {
        color: #888a89
    }

    .pro_overview .download ul li a:hover {
        color: #000;
        text-decoration: underline !important
    }

    .pro_overview .download ul li:before {
        content: "";
        font-family: FontAwesome;
        margin: 5px;
        color: #008398;
        font-size: 14px
    }

    #Floor-Plans .floor-plan {
        max-width: 100px;
        border-radius: 5px;
        cursor: zoom-in
    }

    .down_brochure {
        margin: 25px 0
    }

    .down_brochure .btn {
        border-radius: 3px
    }

    @media(max-width: 768px) {

        .pro_head h1,
        .pro_overview h3 {
            font-size: 24px
        }

        .call-pont ul li,
        .pro_overview h4 {
            text-align: center
        }

        .pro-images .pro-logo {
            right: 32px
        }

        .pro-images a img {
            height: auto;
            object-fit: cover
        }

        .details .btn {
            display: block;
            margin-bottom: 10px
        }

        .owl-carousel .owl-item img {
            height: auto
        }

        .img-gly img {
            height: 70vh !important;
            object-fit: cover
        }

        .back_top_angle_up {
            bottom: 85px !important
        }

        .footer_detail {
            margin-bottom: 45px
        }

        .projects {
            margin: .5rem 0
        }

        .pro_head {
            background: #fff;
            margin-top: 0;
            padding-bottom: 1rem
        }

        .pro_head h1 {
            padding-bottom: 8px;
            margin-top: 0
        }

        .pro_head h3.location {
            margin: 7px 0
        }

        .pro_overview ul.feature {
            margin: 0 -14px
        }

        .pro_overview ul.feature li {
            width: 42%;
            margin: 65px 14px 0
        }

        .pro_overview {
            padding: 18px 0
        }

        .call-pont {
            display: block;
            position: fixed;
            width: 100%;
            background: #000;
            z-index: 999;
            bottom: 0;
            left: 0;
            right: 0
        }

        .call-pont ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        .call-pont ul li {
            width: 50%;
            float: left;
            list-style: none;
            padding: 8px 0
        }

        .call-pont .fa {
            font-size: 1.7rem;
            color: #fff
        }

        #gly .owl-next,
        #gly .owl-prev,
        .proj .owl-next,
        .proj .owl-prev {
            left: 7px;
            top: 17%
        }

        #gly .owl-next,
        .proj .owl-next {
            right: 7px;
            left: inherit
        }

        .inner-pg aside {
            display: block !important
        }
    }

    body {
        overflow-x: hidden
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-top: 0
    }

    a,
    a:focus,
    a:hover,
    button {
        text-decoration: none !important;
        outline: 0 !important
    }

    ::-webkit-scrollbar {
        width: 7px
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1
    }

    ::-webkit-scrollbar-thumb {
        background: #888
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #555
    }

    p {
        line-height: 1.6;
        color: #5d5d5d
    }

    .back_top_angle_up {
        position: fixed;
        right: 30px;
        bottom: 60px;
        height: 45px;
        width: 45px;
        line-height: 43px;
        text-align: center;
        background: #30b140;
        color: #fff;
        font-size: 24px;
        border-radius: 100%;
        border: 1px solid #30b140;
        -webkit-animation: .4s ease-in-out both slideInRight;
        animation: .4s ease-in-out both slideInRight;
        z-index: 1000 !important;
        -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        box-shadow: 0 0 10px rgba(0, 0, 0, .15)
    }

    .back_top_angle_up i {
        color: #fff;
        line-height: 42px;
        font-size: 26px;
        display: block
    }

    #Floor-Plans .owl-carousel .owl-item {
        opacity: .3
    }

    #Floor-Plans .owl-carousel .owl-item.active img {
        border: 1px solid #f4e2d8
    }

    .bg_overlay_cover_on {
        background-color: rgba(0, 0, 0, .63);
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        z-index: 7
    }

    .new {
        transform: rotate(-18deg)
    }

    .text_custom {
        color: #0284c1
    }

    .bg_cover_custom {
        background-color: #0284c1
    }

    .btn_custom {
        border: 1px solid #ea1125;
        background-color: #ea1125
    }

    .btn_custom.active,
    .btn_custom:active,
    .btn_custom:focus,
    .btn_custom:hover {
        color: #f3f3f3;
        background-color: #0284c1;
        border-color: #0284c1
    }

    .btn_outline_custom {
        border: 2px solid #f5f5f5
    }

    .btn_outline_custom.active,
    .btn_outline_custom:active,
    .btn_outline_custom:focus,
    .btn_outline_custom:hover {
        color: #000;
        background-color: #fff;
        border-color: #fff
    }

    #a li:hover,
    .btn-select:hover {
        background-color: #f4f3f3
    }

    .section_all {
        position: relative;
        padding-top: 80px;
        padding-bottom: 80px
    }

    .custom_nav_menu {
        padding: 5px 0;
        width: 100%;
        border-radius: 0;
        z-index: 99;
        margin-bottom: 0;
        transition: .5s ease-in-out;
        position: absolute;
        background: #ffffffab
    }

    .btn-select,
    .con-area {
        background-color: #fff
    }

    .custom_nav_menu .navbar-nav li a {
        color: #fff;
        font-size: 12px;
        background-color: transparent !important;
        padding: 15px 0;
        margin: 0 3px;
        transition: .4s;
        text-transform: uppercase;
        letter-spacing: 1px
    }

    .custom_nav_menu .navbar-brand.logo img {
        height: 50px;
        width: auto;
        transition: .5s ease-in-out
    }

    .navbar-toggle {
        font-size: 24px;
        margin-top: 5px;
        margin-bottom: 0;
        color: #fff
    }

    .custom_nav_menu .btn-custom {
        margin-top: 5px;
        margin-bottom: 5px
    }

    .logo .logo-light {
        display: inline-block
    }

    #a {
        margin-bottom: 0
    }

    #a img,
    .act-buttons a.laung img,
    .btn-select img {
        width: 18px
    }

    #a li {
        padding-top: 2px;
        padding-bottom: 2px;
        line-height: 1;
        color: #000;
        border-bottom: 1px solid #dfdfdf
    }

    #a li img {
        margin: 5px 0 5px 5px
    }

    #a li span,
    .btn-select li span {
        margin-left: 5px;
        font-size: 11px;
        margin-right: 5px
    }

    .b {
        display: none;
        width: 100%;
        box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: 5px;
        background: #fff;
        position: absolute
    }

    #contact,
    .bg_inner,
    .con-area2 ul li,
    .lang-select {
        position: relative
    }

    .btn-select {
        width: 100%;
        height: 30px;
        border-radius: 3px;
        border: 1px solid #ccc;
        line-height: 1
    }

    .carousel,
    .carousel-inner {
        height: 70vh
    }

    .btn-select li {
        float: left;
        padding-bottom: 0;
        font-size: 12px
    }

    .btn-select:hover {
        border: 1px solid transparent;
        box-shadow: inset 0 0 0 1px #ccc
    }

    .lang-select {
        margin-right: 10px;
        float: left;
        line-height: 1;
        margin-top: 8px
    }

    @media(max-width: 375px) {
        .lang-select {
            margin-right: 10px;
            line-height: 1;
            margin-top: 2px
        }

        .menu-btn {
            padding: 7px 10px 12px !important
        }
    }

    .call-btn {
        color: #000;
        line-height: 1.7;
        font-size: 14px;
        font-weight: 600;
        display: inline-block
    }

    .call-btn .fa {
        color: #7aff00;
        font-size: 20px
    }

    .btm-menu a,
    .call-btn a,
    call-btn a:hover {
        color: #000
    }

    #contact.section-padding {
        padding: 90px 0
    }

    #contact {
        background: url() 0 0/cover no-repeat #eaf2ff
    }

    .con-area2 ul,
    .menuBox ul {
        margin: 0;
        padding: 0
    }

    .con-area2 ul li {
        font-size: 18px;
        line-height: 1.5;
        margin-bottom: 7px
    }

    .con-area2 ul li a {
        color: #000;
        text-decoration: none
    }

    .con-area2 h5 {
        color: #fff;
        font-size: 1.5rem;
        line-height: 1.5;
        margin-bottom: 1.5rem
    }

    #projects .summary label,
    .con-area label {
        margin-bottom: 0;
        text-transform: uppercase;
        font-weight: 400
    }

    .con-area {
        max-width: 650px;
        border-radius: 10px;
        margin: auto;
        width: 100%;
        padding: 40px;
        box-shadow: 0 5px 14px rgba(15, 31, 41, .1), 0 0 3px rgba(15, 31, 41, .06)
    }

    .section-header.style-2 {
        padding-bottom: 0;
        margin-bottom: 30px
    }

    .con-area h3 {
        text-transform: uppercase
    }

    .con-area .section-title {
        font-size: 1.8rem;
        font-weight: 600;
        color: #000;
        line-height: 1;
        margin: 0 0 10px;
        letter-spacing: 1px
    }

    .con-area label {
        font-size: 12px;
        display: block
    }

    .contact-form input:not([type=radio]):not([type=checkbox]):not([type=range]),
    .contact-form select,
    .contact-form textarea {
        display: block;
        width: 100%;
        font-size: 14px;
        line-height: 2;
        padding: 5px 15px;
        border-radius: 7px;
        border: 1px solid #c1c1c1
    }

    .contact-form select {
        padding: 11px 15px
    }

    .contact-form .btn {
        border-radius: 10px
    }

    .bg_inner {
       
        background-size: cover;
        background-position: center center
    }

    .bg_inner .home_title {
        font-size: 24px
    }

    .carousel {
        position: absolute;
        width: 100%
    }

    .carousel-item:after {
        content: '';
        background-color: rgba(0, 0, 0, .38);
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        z-index: 7
    }

    .video-banner {
        width: 100%;
        height: 100vh
    }

    .bnr-text {
        padding-top: 100px;
        color: #fff;
        margin-top: 0px;
    }

    .bnr-text h2 {
        font-size: 38px;
        letter-spacing: 2px;
        color: #fff;
        font-weight: 700
    }

    .loader1 span,
    .send span {
        letter-spacing: 1px;
        display: block
    }

    .bnr-text p {
        font-size: 20px;
        color: #fff
    }

    .bnr-text .btn {
        padding: 10px 25px;
        border-radius: 50px;
        text-transform: uppercase
    }

    @media only screen and (min-width: 1200px) {
        .container {
            max-width: 1250px
        }
    }

    @media only screen and (min-width: 1200px) {
        section.container-fluid {
            padding: 0 30px !important
        }
    }

    .home_title {
        font-size: 42px;
        font-weight: 600;
        line-height: 1.2;
        max-width: 700px
    }

    .home_subtitle {
        color: #dadada;
        max-width: 600px;
        line-height: 1.8
    }

    .home_table_cell_center {
        display: table-cell;
        vertical-align: middle
    }

    .home_table_cell {
        display: table;
        width: 100%;
        position: absolute;
        z-index: 9;
        bottom: 71px;
        left: 0;
        right: 0
    }

    .home_table_cell .home-scroll__icon {
        display: block;
        height: 2.8rem;
        width: 2.8rem;
        background-color: #fff;
      
        background-position: center center;
        background-repeat: no-repeat;
        background-size: 15px 15px;
        border-radius: 50%;
        margin: 10px auto
    }

    .innerpage_25vh {
        height: 45vh
    }

    .innerpage_50vh {
        height: 50vh
    }

    .innerpage_75vh {
        height: 75vh
    }

    .innerpage_80vh {
        height: 100vh
    }

    .up-index {
        z-index: 2
    }

    .pro-details,
    .social ul li a:hover {
        background: #333
    }

    .pro-details .row [class*=col-] {
        padding: 0
    }

    .menu-btn {
        padding: 13px 10px 12px;
        margin: 0 0 -8px 3px;
        float: right;
        width: 44px
    }

    .menuBox,
    .menuBox .overlay {
        width: 100%;
        height: 100%;
        top: 0;
        right: 0
    }

    .menu-btn span {
        display: block;
        background-color: #000;
        height: 2px
    }

    .menu-btn span+span {
        margin-top: 6px
    }

    .menuBox {
        position: fixed;
        z-index: 1900;
        visibility: hidden;
        -webkit-transition: .3s ease-in;
        -o-transition: .3s ease-in;
        transition: .3s ease-in
    }

    .menuBox.go-show {
        opacity: 1;
        visibility: visible
    }

    .menuBox .overlay {
        position: absolute;
        background-color: rgba(0, 0, 0, .7)
    }

    .menuBox .clse span,
    .menuBox .clse span:before,
    .menuBox .content {
        position: absolute;
        height: 100%;
        background-color: #fff
    }

    .menuBox .content {
        padding-bottom: 30px;
        top: 0;
        right: 0;
        width: 250px;
        overflow: auto;
        -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, .5);
        box-shadow: 0 0 10px rgba(0, 0, 0, .5);
        -webkit-transition: .3s ease-in;
        -o-transition: .3s ease-in;
        transition: .3s ease-in;
        -moz-transform: translate(543%, 0);
        -o-transform: translate(543%, 0);
        -ms-transform: translate(543%, 0);
        -webkit-transform: translate(543%, 0);
        transform: translate(543%, 0)
    }

    .menuBox.go-show .content {
        -moz-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -webkit-transform: translate(0, 0);
        transform: translate(0, 0)
    }

    .menuBox .clse {
        position: absolute;
        right: 231px;
        top: -100%;
        color: #fff;
        width: 40px;
        height: 30px;
        transition: .3s;
        -moz-transform: scale(.7);
        -o-transform: scale(.7);
        -ms-transform: scale(.7);
        -webkit-transform: scale(.7);
        transform: scale(.7)
    }

    .menuBox .clse span {
        width: 2px;
        transform: rotate(45deg);
        display: block
    }

    .menuBox .clse span:before {
        content: '';
        width: 2px;
        transform: rotate(90deg);
        display: block
    }

    .menuBox.go-show .clse {
        top: 10px
    }

    .menuBox .content li {
        border-bottom: 1px solid #dcdcdc
    }

    .menuBox .content li a {
        padding: 0 15px;
        height: 50px;
        line-height: 50px;
        display: block;
        color: #636363;
        text-decoration: none
    }

    #projects h2 a,
    .menuBox .content li a:hover {
        color: #101010
    }

    .menuBox .content li i {
        margin-left: 5px;
        width: 20px;
        text-align: center;
        display: inline-block;
        vertical-align: middle;
        color: #00a59b;
        line-height: 17px;
        height: 20px;
        font-size: 16px
    }

    .bg_inner+.btm-menu {
        z-index: 9;
        position: relative
    }

    .btm-menu .container {
        margin-top: -35px
    }

    .bg_inner+.btm-menu .card {
        border-radius: 45px
    }

    .payment h2 {
        font-size: 16px;
        color: #484848
    }

    .contact .payment .card {
        min-height: inherit !important
    }

    #projects h2 {
        font-size: 17px;
        text-transform: uppercase;
        font-weight: 700;
        position: relative;
        margin-bottom: 15px;
        letter-spacing: .5px
    }

    #projects h2::after {
        content: '';
        display: block;
        border-bottom: 2px solid #ff0204;
        bottom: 1px;
        width: 62px
    }

    #projects .details .card {
        margin-left: -95px;
        margin-top: 15px;
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out
    }

    #projects .details .card.left {
        margin-left: inherit;
        margin-right: -95px;
        z-index: 2
    }

    #projects .pro-thum:hover .details .card {
        margin-left: -35px;
        margin-right: -60px
    }

    #projects .pro-thum:hover .details .card.left {
        margin-left: -60px;
        margin-right: -35px
    }

    #projects .summary {
        border: 1px solid #e2e2e2;
        padding: 0 7px;
        border-bottom: 0
    }

    #projects .summary .row {
        border-bottom: 1px solid #e2e2e2
    }

    #projects .summary .row:last-child {
        border-bottom: 0
    }

    #projects .summary .row [class*=col-] {
        border-right: 1px solid #e2e2e2;
        border-bottom: 1px solid #e2e2e2
    }

    #projects .summary .row [class*=col-]:last-child,
    #projects .summary .row [class*=col-]:nth-child(3) {
        border-right: 0
    }

    #projects .summary label {
        color: #717171;
        font-size: 10px;
        letter-spacing: .5px;
        margin-top: 0;
        padding-left: 0
    }

    #projects .summary p {
        color: #000;
        font-weight: 700;
        margin-bottom: 5px;
        font-size: 12px;
        text-transform: uppercase;
        line-height: 1;
        letter-spacing: .5px
    }

    #projects .summary p span {
        font-size: 12px;
        color: #585757
    }

    .proj .owl-item .summary2 img {
        display: inline-block;
        width: auto !important;
        max-width: 30px;
        -webkit-transform-style: preserve-3d
    }

    .features_border_top {
        height: 4px;
        background: #0284c1;
        width: 60px;
        margin-bottom: 15px;
        margin-top: 15px
    }

    .loader1,
    .send {
        background: #ffffffe6;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1;
        text-align: center
    }

    .features_video .features_video_icon {
        height: 46px;
        width: 46px;
        background-color: #0284c1;
        line-height: 46px;
        text-align: center;
        border-radius: 50%;
        display: inline-block;
        color: #fff;
        font-size: 23px
    }

    .features_video span {
        font-size: 14px;
        position: relative;
        top: -3px;
        color: #000 !important
    }

    .loader1 {
        padding-top: 15%
    }

    .send {
        padding-top: 25%
    }

    .loader1 span {
        margin-top: -55px;
        color: #848282
    }

    .send span {
        margin-top: 15px;
        color: #77b43f;
        font-size: 15px;
        font-weight: 500
    }

    .act-buttons a.laung {
        width: 30px;
        display: inline-block;
        text-align: center;
        line-height: 1;
        margin-bottom: -10px;
        position: initial;
        height: 35px;
        float: left;
        margin-right: 10px
    }

    .act-buttons a.laung span {
        display: inline-block;
        font-size: 9px;
        color: #000;
        letter-spacing: .5px
    }

    .bg_video_img_cover {
        position: relative;
        background-size: cover;
        background-position: center center;
        background-attachment: fixed
    }

    .contact_icon {
        font-size: 30px;
        background: rgba(51, 208, 133, .1);
        height: 60px;
        width: 60px;
        display: inline-block;
        text-align: center;
        line-height: 64px;
        border-radius: 50px
    }

    .footer_detail h6 {
        font-size: .9rem
    }

    .footer_about p {
        max-width: 680px;
        color: rgba(255, 255, 255, .5)
    }

    .footer_detail .footer_logo {
        height: 34px
    }

    .text_footer,
    .text_footer a {
        font-size: 12px;
        color: #ccc
    }

    .copyright {
        font-size: 14px;
        letter-spacing: .7px
    }

    .copyright a {
        color: #fff;
        font-weight: 700
    }

    .social ul {
        padding-left: 0
    }

    .social ul li {
        display: inline-block;
        margin: 0 2px
    }

    .social ul li a {
        background: #828284;
        width: 30px;
        height: 30px;
        padding: 5px;
        color: #fff;
        display: block;
        text-align: center
    }

    @media(max-width: 768px) {

        .innerpage_80vh,
        .video-banner {
            min-height: 100vh;
            height: auto
        }

        #projects .details .card {
            margin-left: 0
        }

        #projects .pro-thum:hover .details .card,
        #projects .pro-thum:hover .details .card.left {
            margin-left: 0;
            margin-right: 0
        }

        #projects .summary+.btn,
        #projects .summary+.btn+.btn {
            display: block;
            width: 100%;
            margin-bottom: 15px
        }

        .bg_inner+.btm-menu .card {
            max-width: 370px;
            margin: 0 auto 10px;
            font-size: 18px
        }

        #projects .details .card.left {
            margin-right: 0
        }

        .pro-details .col-xs-6 {
            width: 48%
        }

        .custom_nav_menu {
            margin-top: 0;
            padding: 10px !important
        }

        .carousel,
        .carousel-inner {
            height: 91vh
        }

        .carousel img {
            height: 91vh;
            object-fit: cover
        }

        .home_title {
            font-size: 32px
        }

        .custom_nav_menu .navbar-nav li a {
            margin: 0;
            padding: 6px 0
        }

        .custom_nav_menu>.container {
            width: 90%
        }

        .back_top_angle_up,
        .call-btn span.call,
        .custom_nav_menu .logo .logo-dark {
            display: none
        }

        .custom_nav_menu .navbar-brand.logo img {
            height: 26px
        }

        .navbar-nav {
            margin-top: 0
        }

        .h-100vh {
            height: auto
        }

        .enq-form .col-md-4 {
            max-width: 33.333333%
        }

        .enq-form .col-md-8 {
            max-width: 66.666667%
        }

        .section_all {
            padding-top: 40px;
            padding-bottom: 40px
        }

        .mt-xs-2 {
            margin-top: 10px !important
        }

        .call-btn {
            color: #000;
            line-height: 3.5;
            font-size: 14px
        }

        .call-btn .fa {
            font-size: 22px
        }

        .bnr-text {
            padding-top: 85px;
            color: #fff
        }

        .bnr-text h2 {
            font-size: 28px
        }

        .bnr-text p {
            font-size: 13px;
            color: #fff
        }

        .bnr-text .btn {
            padding: 4px 25px;
            border-radius: 50px;
            text-transform: uppercase
        }

        .projects .enq-form {
            margin-top: 15px !important;
            max-width: 350px;
            margin: 0 auto 25px
        }

        .video-banner {
            padding-bottom: 25px
        }

        .con-area {
            padding: 30px
        }

        .card-body .btn:last-child {
            display: block;
            margin-top: 15px
        }
    }

    .property {
        background: #e2e2e2
    }

    .properties .card {
        border: 1px solid #f3f3f3;
        box-shadow: 0 0 5px #04040430
    }

    .properties .card-title {
        font-size: 16px;
        text-align: center;
        font-weight: 600
    }

    .properties .card-img-top {
        padding: 10px
    }

    .properties .card-text {
        font-size: 13px;
        line-height: 2.1;
        margin-bottom: 7px;
        color: #000
    }

    .properties .card-text img {
        margin-right: 5px
    }

    .properties .card-text span {
        width: 115px;
        color: #717171;
        font-weight: 400;
        min-width: 110px;
        display: inline-block
    }

    .properties .price {
        text-align: center
    }

    .properties .price label {
        margin: 0;
        font-size: 12px;
        color: #847a7a;
        padding-left: 0
    }

    .properties .price h3 {
        margin-bottom: 15px;
        font-size: 18px;
        color: #000
    }

    .cover {
        height: 100%;
        width: 100%
    }
</style>