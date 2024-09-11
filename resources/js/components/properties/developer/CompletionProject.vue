<template>
    <section>
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <div class="title mb-lg-4">
              <h2>Near Completion Projects by {{ developer.name }}</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div v-for="(project, index) in projects" :key="index" class="col-lg-4 col-md-4 col-sm-12">
            <div class="tp-author-box">
              <a :href="`/projects/${project.slug}`">
                <div class="author-cover-img">
                  <img :src="`/storage/${project.image}`" class="img-responsive" :alt="project.name" />
                  <div class="price">
                    <p>Starting From</p>
                    <span class="follow-btn">{{ project.starting_price }}</span>
                  </div>
                </div>
                <div class="tp-author-detail-wrapper">
                  <div class="tp-author-detail-box">
                    <div class="tp-author">
                      <img :src="project.developer.logo" class="img-responsive" :alt="project.developer.name" />
                    </div>
                    <div class="tp-author-header">
                      <h4>{{ project.name }}</h4>
                      <p class="mb-0">{{ project.community.name }}</p>
                    </div>
                  </div>
                  <div class="tp-author-basic-info">
                    <ul>
                      <li><strong>{{ project.payment_plan }}</strong> Payment Plan</li>
                      <li><strong>{{ project.handover }}</strong> Handover</li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="row text-center mt-3 justify-content-center">
            <div class="col-lg-8 col-md-8 col-sm-6 section-btn">
                <a class="btn-hover default-btn" href="/projects">More Projects</a>
            </div>
        </div>
      </div>

    </section>
   
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        developer: {},
        projects: []
      };
    },
    async created() {
      const slug = this.$route.params.slug; // Assuming slug is a route parameter
      try {
        const response = await axios.get(`/api/${slug}/near-completion`);
        this.developer = response.data.developer;
        this.projects = response.data.projects;
      } catch (error) {
        console.error('Error fetching near completion projects:', error);
      }
    }
  };
  </script>
 
  
<style scoped>
    .navbar,
    html {
        position: relative
    }

    .topbar.fixed-header .act-buttons a.login,
    a {
        color: #546e7a
    }

    .menuBox,
    .menuBox .overlay {
        right: 0;
        height: 100%;
        width: 100%
    }

    .topbar.fixed-header,
    body,
    html {
        background: #fff
    }

    .dropzone .dz-preview .dz-details .dz-filename:not(:hover),
    .pricing h3 {
        overflow: hidden;
        text-overflow: ellipsis
    }

    @-webkit-keyframes fadeIn {
        from {
            opacity: 0
        }

        to {
            opacity: 1
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0
        }

        to {
            opacity: 1
        }
    }

    .fadeIn {
        -webkit-animation-name: fadeIn;
        animation-name: fadeIn
    }

    @media print {

        *,
        ::after,
        ::before {
            text-shadow: none !important;
            box-shadow: none !important
        }

        a,
        a:visited {
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

        .navbar {
            display: none
        }
    }

    .menuBox .content li a,
    .navbar-brand:focus,
    .navbar-brand:hover,
    a,
    a:focus,
    a:hover {
        text-decoration: none
    }

    html {
        box-sizing: border-box;
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        -ms-overflow-style: scrollbar;
        -webkit-tap-highlight-color: transparent;
        scroll-behavior: smooth;
        min-height: 100%
    }

    *,
    ::after,
    ::before {
        box-sizing: inherit
    }

    aside,
    footer,
    nav,
    section {
        display: block
    }

    body {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    }

    p,
    ul {
        margin-top: 0;
        margin-bottom: 1rem
    }

    strong {
        font-weight: bolder
    }

    a {
        -webkit-text-decoration-skip: objects;
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

    *,
    a:not([href]):not([tabindex]):focus {
        outline: 0
    }

    img {
        vertical-align: middle;
        border-style: none
    }

    a,
    input {
        -ms-touch-action: manipulation;
        touch-action: manipulation
    }

    input {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        overflow: visible
    }

    ::-webkit-file-upload-button {
        font: inherit;
        -webkit-appearance: button
    }

    h1,
    h2,
    h3,
    h4 {
        margin-top: 0;
        margin-bottom: .5rem;
        line-height: 1.1
    }

    .small,
    small {
        font-size: 80%;
        font-weight: 400
    }

    .list-unstyled {
        padding-left: 0;
        list-style: none
    }

    .img-fluid {
        max-width: 100%;
        height: auto
    }

    .container {
        margin-right: auto;
        margin-left: auto;
        padding-right: 15px;
        padding-left: 15px;
        width: 100%
    }

    @media(min-width: 576px) {
        .container {
            max-width: 540px
        }

        .col-sm-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-sm-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }
    }

    @media(min-width: 768px) {
        .container {
            max-width: 720px
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

        .col-md-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }
    }

    @media(min-width: 992px) {
        .container {
            max-width: 960px
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
    .col-lg-3,
    .col-lg-4,
    .col-lg-8,
    .col-lg-9,
    .col-md-12,
    .col-md-3,
    .col-md-4,
    .col-md-8,
    .col-md-9,
    .col-sm-12,
    .col-sm-6 {
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

    .navbar {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: .5rem 1rem
    }

    .navbar-brand {
        display: inline-block;
        padding-top: .3125rem;
        padding-bottom: .3125rem;
        margin-right: 1rem;
        font-size: 1.25rem;
        line-height: inherit;
        white-space: nowrap
    }

    [class^=lni-],
    [class^=ti-] {
        line-height: 1;
        font-style: normal;
        speak: none;
        font-variant: normal;
        text-transform: none;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-weight: 400
    }

    .card,
    .card.pricing {
        -ms-flex-direction: column
    }

    .card {
        display: -ms-flexbox;
        display: flex;
        flex-direction: column;
        word-wrap: break-word
    }

    .border {
        border: 1px solid #e9ecef !important
    }

    .border-0 {
        border: 0 !important
    }

    .clearfix::after {
        display: block;
        clear: both;
        content: ""
    }

    .HideContent,
    .d-none {
        display: none !important
    }

    .fa,
    span {
        display: inline-block
    }

    .justify-content-center {
        -ms-flex-pack: center !important;
        justify-content: center !important
    }

    .justify-content-between {
        -ms-flex-pack: justify !important;
        justify-content: space-between !important
    }

    .float-right {
        float: right !important
    }

    .mt-0 {
        margin-top: 0 !important
    }

    .mt-3,
    .my-3 {
        margin-top: 1rem !important
    }

    .mb-0 {
        margin-bottom: 0 !important
    }

    .mr-1 {
        margin-right: .25rem !important
    }

    .my-3 {
        margin-bottom: 1rem !important
    }

    .mb-4 {
        margin-bottom: 1.5rem !important
    }

    .p-0 {
        padding: 0 !important
    }

    .p-1 {
        padding: .25rem !important
    }

    .py-1 {
        padding-top: .25rem !important;
        padding-bottom: .25rem !important
    }

    .pr-2 {
        padding-right: .5rem !important
    }

    .pr-3 {
        padding-right: 1rem !important
    }

    .mx-auto {
        margin-right: auto !important;
        margin-left: auto !important
    }

    .text-left {
        text-align: left !important
    }

    .text-center {
        text-align: center !important
    }

    .text-light {
        color: #f8f9fa !important
    }

    .default-btn,
    .section-btn .default-btn:hover {
        color: #9C3133 !important
    }

    @font-face {
        font-family: themify;
        src: url(/fonts/themify9f24.eot?-fvbane);
        src: url(/fonts/themifyd41d.eot?#iefix-fvbane) format("embedded-opentype"), url(/fonts/themify9f24.woff?-fvbane) format("woff"), url(/fonts/themify9f24.ttf?-fvbane) format("truetype"), url(/fonts/themify9f24.svg?-fvbane#themify) format("svg");
        font-weight: 400;
        font-style: normal;
        font-display: swap
    }

    [class^=ti-] {
        font-family: themify
    }

    .ti-menu:before {
        content: ""
    }

    @font-face {
        font-family: datedropper;
        src: url(src/datedropper.eot);
        src: url(src/datedropperd41d.eot?#iefix) format("embedded-opentype"), url(src/datedropper.woff) format("woff"), url(src/datedropper.ttf) format("truetype"), url(src/datedropper.svg#datedropper) format("svg");
        font-weight: 400;
        font-style: normal
    }

    .dropzone .dz-preview .dz-details .dz-filename:not(:hover) span {
        border: 1px solid transparent
    }

    @font-face {
        font-family: LineIcons;
        src: url(/fonts/LineIcons5594.eot?y2l643);
        src: url(/fonts/LineIcons5594.eot?y2l643#iefix) format("embedded-opentype"), url(/fonts/LineIcons5594.ttf?y2l643) format("truetype"), url(/fonts/LineIcons5594.woff?y2l643) format("woff"), url(/fonts/LineIcons5594.svg?y2l643#LineIcons) format("svg");
        font-weight: 400;
        font-style: normal;
        font-display: swap
    }

    [class^=lni-] {
        font-family: LineIcons !important
    }

    .lni-map-marker:before {
        content: ""
    }

    .lni-whatsapp:before {
        content: ""
    }

    @font-face {
        font-family: FontAwesome;
        src: url(/fonts/fontawesome-webfont78ce.eot?v=4.2.0);
        src: url(/fonts/fontawesome-webfontd41d.eot?#iefix&v=4.2.0) format("embedded-opentype"), url(/fonts/fontawesome-webfont78ce.woff?v=4.2.0) format("woff"), url(/fonts/fontawesome-webfont78ce.ttf?v=4.2.0) format("truetype"), url(/fonts/fontawesome-webfont78ce.svg?v=4.2.0#fontawesomeregular) format("svg");
        font-weight: 400;
        font-style: normal;
        font-display: swap
    }

    .fa {
        font: 14px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .pull-right {
        float: right
    }

    .fa-envelope-o:before {
        content: ""
    }

    .fa-home:before {
        content: ""
    }

    .fa-sign-in:before {
        content: ""
    }

    .fa-twitter:before {
        content: ""
    }

    .fa-facebook:before {
        content: ""
    }

    .fa-money:before {
        content: ""
    }

    .fa-linkedin:before {
        content: ""
    }

    .fa-youtube-play:before {
        content: ""
    }

    .fa-instagram:before {
        content: ""
    }

    @font-face {
        font-family: IcoFont;
        font-weight: 400;
        font-style: Regular
    }

    @font-face {
        font-family: fontello;
        src: url(/fonts/fontello6c7f.eot?59946131);
        src: url(/fonts/fontello6c7f.eot?59946131#iefix) format("embedded-opentype"), url(/fonts/fontello6c7f.woff2?59946131) format("woff2"), url(/fonts/fontello6c7f.woff?59946131) format("woff"), url(/fonts/fontello6c7f.ttf?59946131) format("truetype"), url(/fonts/fontello6c7f.svg?59946131#fontello) format("svg");
        font-weight: 400;
        font-style: normal;
        font-display: swap
    }

    [class^=icon-]:before {
        font-family: fontello;
        font-style: normal;
        font-weight: 400;
        speak: none;
        display: inline-block;
        text-decoration: inherit;
        width: 1em;
        margin-right: .2em;
        text-align: center;
        font-variant: normal;
        text-transform: none;
        line-height: 1em;
        margin-left: .2em;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .icon-calendar:before {
        content: ''
    }

    .icon-bed:before {
        content: ''
    }

    @media(min-width: 1200px) {
        .container {
            max-width: 1170px
        }

        .d-xl-none {
            display: none !important
        }

        .header .container {
            max-width: inherit;
            padding-left: 50px;
            padding-right: 50px
        }
    }

    .menuBox {
        position: fixed;
        z-index: 1900;
        top: 0;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: .3s ease-in;
        -o-transition: .3s ease-in;
        transition: .3s ease-in
    }

    .topbar.fixed-header {
        -webkit-box-shadow: 0 0 30px rgba(115, 128, 157, .1);
        box-shadow: 0 0 30px rgba(115, 128, 157, .1);
        -webkit-transition: .2s ease-in;
        -o-transition: .2s ease-in;
        transition: .2s ease-in;
        position: fixed
    }

    @-webkit-keyframes slideInDown {
        from {
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
            visibility: visible
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes slideInDown {
        from {
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
            visibility: visible
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    .slideInDown {
        -webkit-animation-name: slideInDown;
        animation-name: slideInDown
    }

    .menuBox .overlay {
        position: absolute;
        top: 0;
        background-color: rgba(0, 0, 0, .7)
    }

    .menuBox .clse span,
    .menuBox .clse span:before,
    .menuBox .content {
        background-color: #fff;
        position: absolute;
        height: 100%
    }

    .menuBox .content {
        padding-bottom: 30px;
        top: 0;
        right: 0;
        width: 250px;
        word-break: normal;
        -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, .5);
        box-shadow: 0 0 10px rgba(0, 0, 0, .5);
        -webkit-transition: .4s ease-in;
        -o-transition: .4s ease-in;
        transition: .4s ease-in;
        -moz-transform: translate(543%, 0);
        -o-transform: translate(543%, 0);
        -ms-transform: translate(543%, 0);
        -webkit-transform: translate(543%, 0);
        transform: translate(543%, 0);
        border-left: 3px solid #ff7600;
        border-top: 3px solid #ff7600
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
        right: 230px;
        top: -100%;
        color: #fff;
        width: 40px;
        height: 30px;
        cursor: pointer;
        transition: .5s;
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

    .menuBox ul {
        list-style: none;
        margin: 0;
        padding: 0
    }

    .menuBox .content li {
        border-bottom: 1px solid #dcdcdc
    }

    .menuBox .content li a {
        padding: 0 15px;
        font-size: 13px;
        height: 50px;
        line-height: 50px;
        display: block;
        color: #636363;
        text-transform: uppercase
    }

    .menuBox .content li a:hover,
    ul.footer-bottom-social li a:focus,
    ul.footer-bottom-social li a:hover {
        color: #ff7600
    }

    .menuBox .content li i {
        margin-right: 5px;
        width: 20px;
        text-align: center;
        display: inline-block;
        vertical-align: middle;
        color: #ff7600;
        line-height: 17px;
        height: 20px;
        font-size: 14px
    }

    .menuBox.go-show {
        opacity: 1;
        visibility: visible
    }

    .small.list-grid-layout a.list-thumb img {
        object-fit: cover;
        height: 100%;
        max-height: 250px
    }

    .small.modern-layout .grid-layout-body {
        padding: 15px;
        margin-top: 0
    }

    .small.modern-layout .gl-list-caption {
        padding: 0;
        display: block;
        vertical-align: bottom
    }

    .small.modern-layout .grid-layout-info {
        width: 100%;
        height: auto;
        padding: 0;
        font-size: 13px
    }

    .small .ft-loke {
        margin-top: 14px;
        text-align: right
    }

    .default-btn {
        display: inline-block;
        font-weight: 500;
        letter-spacing: 1px;
        line-height: 1;
        padding: 10px 15px;
        text-transform: uppercase;
        z-index: 9;
        position: relative;
        border: 1px solid #9C3133
    }

    .section-btn .default-btn {
        padding: 15px 55px;
        background-color: #9C3133;
        border: none;
        color: #fff !important
    }

    .btn-hover::before {
        background: #9C3133;
        bottom: 0;
        content: "";
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        transform: scaleX(0);
        transform-origin: 0 50% 0;
        transition-duration: .3s;
        transition-property: transform;
        transition-timing-function: ease-out;
        z-index: -1
    }

    .section-btn .btn-hover::before {
        background: #fff;
        border: 1px solid #9C3133
    }

    .btn-hover:hover::before {
        transform: scaleX(1)
    }

    .default-btn:hover {
        color: #fff !important
    }

    .title h2 {
        font-size: 22px;
        display: inline-block;
        border-top: 1px solid #b28d2b;
        border-bottom: 1px solid #b28d2b;
        padding: 3px 10px
    }

    .statics {
        padding: 5rem 0;
        background: url(../images/statics-bg.jpg) 0 0/cover no-repeat
    }

    .statics .num_count p,
    .statics p {
        font-size: 16px;
        color: #fff;
        letter-spacing: 1px;
        margin-top: 22px;
        font-style: italic;
        margin-bottom: 0
    }

    .statics .num_count h4 {
        font-size: 44px;
        color: #fff
    }

    @media(min-width: 768px) {
        .d-md-none {
            display: none !important
        }

        .d-md-block {
            display: block !important
        }

        .mr-md-4 {
            margin-right: 1.5rem !important
        }

        .pr-md-4 {
            padding-right: 1.5rem !important
        }

        .pl-md-4 {
            padding-left: 1.5rem !important
        }

        .act-buttons .d-md-block {
            display: inline-block !important
        }
    }

    @media(max-width: 768px) {
        .menuBox .content li a {
            height: 45px;
            line-height: 45px
        }

        .grid-layout-header {
            position: relative;
            min-height: 180px;
            max-height: 200px;
            overflow: hidden
        }

        .modern-layout .gl-list-caption {
            padding: 20px 10px 0
        }

        .tp-author-box .author-cover-img {
            height: 185px
        }

        h2 {
            line-height: 26px;
            font-size: 24px
        }

        .section-btn .default-btn {
            display: block
        }
    }

    .fixed-header .header.exchange-logo .sticky-logo,
    .header.exchange-logo .default-logo,
    .header.exchange-logo .sticky-logo {
        display: none
    }

    .fixed-header .header.exchange-logo .default-logo {
        display: block;
        max-width: 100% !important
    }

    @media(min-width: 992px) {
        .navbar-expand-lg {
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .d-lg-none {
            display: none !important
        }

        .ml-lg-2 {
            margin-left: .5rem !important
        }

        .my-lg-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important
        }

        .mb-lg-4 {
            margin-bottom: 1.5rem !important
        }

        .p-lg-4 {
            padding: 1.5rem !important
        }

        .pl-lg-5 {
            padding-left: 3rem !important
        }

        .page-title h1 {
            font-size: 55px;
            line-height: 1.4
        }

        h1.bnr-title {
            font-size: 36px;
            line-height: 1.4;
            margin-bottom: 15px;
            letter-spacing: 1px;
            font-weight: 500
        }
    }

    @media(max-width: 767px) {
        ul.banner-cat-list li {
            margin: 3px
        }

        h1.bnr-title {
            line-height: 40px;
            font-size: 22px
        }

        .statics {
            padding: 3rem 0 !important
        }

        .statics .num_count {
            color: #fff;
            line-height: 1.5;
            margin-bottom: 25px
        }

        .statics .num_count h4 {
            font-size: 28px !important
        }

        .statics .num_count p {
            margin-top: 5px !important
        }

        .modern-layout .grid-layout-body {
            margin-top: -24px;
            padding: 10px 15px
        }

        .modern-layout .gl-list-caption h4 {
            font-size: 16px
        }

        .modern-layout .gl-tagline {
            font-size: 12px
        }

        footer .border-right {
            border-right: 0;
            border-bottom: 1px solid #506275;
            margin-bottom: 17px;
            padding-bottom: 10px
        }

        .contact {
            border-top: 1px solid #506275;
            padding-top: 10px;
            padding-bottom: 10px
        }

        .footer-bottom small {
            float: inherit
        }
    }

    @media(max-width: 991px) {

        .act-buttons a.laung span,
        .header.exchange-logo .sticky-logo {
            display: none
        }

        .header .navbar-brand {
            line-height: 50px
        }

        .header .navbar-brand img {
            max-width: 70px
        }

        .act-buttons a.laung {
            width: 23px;
            margin-right: 7px
        }
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: local('Montserrat Light'), local('Montserrat-Light'), url(../fonts/JTURjIg1_i6t8kCHKm45_cJD3gTD_u50.woff2) format('woff2');
        unicode-range: U+460-52F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: local('Montserrat Light'), local('Montserrat-Light'), url(../fonts/JTURjIg1_i6t8kCHKm45_cJD3g3D_u50.woff2) format('woff2');
        unicode-range: U+400-45F, U+490-491, U+4B0-4B1, U+2116
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: local('Montserrat Light'), local('Montserrat-Light'), url(../fonts/JTURjIg1_i6t8kCHKm45_cJD3gbD_u50.woff2) format('woff2');
        unicode-range: U+102-103, U+110-111, U+128-129, U+168-169, U+1A0-1A1, U+1AF-1B0, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: local('Montserrat Light'), local('Montserrat-Light'), url(../fonts/JTURjIg1_i6t8kCHKm45_cJD3gfD_u50.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: local('Montserrat Light'), local('Montserrat-Light'), url(../fonts/JTURjIg1_i6t8kCHKm45_cJD3gnD_g.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Montserrat Regular'), local('Montserrat-Regular'), url(../fonts/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
        unicode-range: U+460-52F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Montserrat Regular'), local('Montserrat-Regular'), url(../fonts/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
        unicode-range: U+400-45F, U+490-491, U+4B0-4B1, U+2116
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Montserrat Regular'), local('Montserrat-Regular'), url(../fonts/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
        unicode-range: U+102-103, U+110-111, U+128-129, U+168-169, U+1A0-1A1, U+1AF-1B0, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Montserrat Regular'), local('Montserrat-Regular'), url(../fonts/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Montserrat Regular'), local('Montserrat-Regular'), url(../fonts/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: local('Montserrat Medium'), local('Montserrat-Medium'), url(../fonts/JTURjIg1_i6t8kCHKm45_ZpC3gTD_u50.woff2) format('woff2');
        unicode-range: U+460-52F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: local('Montserrat Medium'), local('Montserrat-Medium'), url(../fonts/JTURjIg1_i6t8kCHKm45_ZpC3g3D_u50.woff2) format('woff2');
        unicode-range: U+400-45F, U+490-491, U+4B0-4B1, U+2116
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: local('Montserrat Medium'), local('Montserrat-Medium'), url(../fonts/JTURjIg1_i6t8kCHKm45_ZpC3gbD_u50.woff2) format('woff2');
        unicode-range: U+102-103, U+110-111, U+128-129, U+168-169, U+1A0-1A1, U+1AF-1B0, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: local('Montserrat Medium'), local('Montserrat-Medium'), url(../fonts/JTURjIg1_i6t8kCHKm45_ZpC3gfD_u50.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: local('Montserrat Medium'), local('Montserrat-Medium'), url(../fonts/JTURjIg1_i6t8kCHKm45_ZpC3gnD_g.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url(../fonts/JTURjIg1_i6t8kCHKm45_bZF3gTD_u50.woff2) format('woff2');
        unicode-range: U+460-52F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url(../fonts/JTURjIg1_i6t8kCHKm45_bZF3g3D_u50.woff2) format('woff2');
        unicode-range: U+400-45F, U+490-491, U+4B0-4B1, U+2116
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url(../fonts/JTURjIg1_i6t8kCHKm45_bZF3gbD_u50.woff2) format('woff2');
        unicode-range: U+102-103, U+110-111, U+128-129, U+168-169, U+1A0-1A1, U+1AF-1B0, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url(../fonts/JTURjIg1_i6t8kCHKm45_bZF3gfD_u50.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url(../fonts/JTURjIg1_i6t8kCHKm45_bZF3gnD_g.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Montserrat Bold'), local('Montserrat-Bold'), url(../fonts/JTURjIg1_i6t8kCHKm45_dJE3gTD_u50.woff2) format('woff2');
        unicode-range: U+460-52F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Montserrat Bold'), local('Montserrat-Bold'), url(../fonts/JTURjIg1_i6t8kCHKm45_dJE3g3D_u50.woff2) format('woff2');
        unicode-range: U+400-45F, U+490-491, U+4B0-4B1, U+2116
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Montserrat Bold'), local('Montserrat-Bold'), url(../fonts/JTURjIg1_i6t8kCHKm45_dJE3gbD_u50.woff2) format('woff2');
        unicode-range: U+102-103, U+110-111, U+128-129, U+168-169, U+1A0-1A1, U+1AF-1B0, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Montserrat Bold'), local('Montserrat-Bold'), url(../fonts/JTURjIg1_i6t8kCHKm45_dJE3gfD_u50.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Montserrat Bold'), local('Montserrat-Bold'), url(../fonts/JTURjIg1_i6t8kCHKm45_dJE3gnD_g.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: local('Montserrat ExtraBold'), local('Montserrat-ExtraBold'), url(../fonts/JTURjIg1_i6t8kCHKm45_c5H3gTD_u50.woff2) format('woff2');
        unicode-range: U+460-52F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: local('Montserrat ExtraBold'), local('Montserrat-ExtraBold'), url(../fonts/JTURjIg1_i6t8kCHKm45_c5H3g3D_u50.woff2) format('woff2');
        unicode-range: U+400-45F, U+490-491, U+4B0-4B1, U+2116
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: local('Montserrat ExtraBold'), local('Montserrat-ExtraBold'), url(../fonts/JTURjIg1_i6t8kCHKm45_c5H3gbD_u50.woff2) format('woff2');
        unicode-range: U+102-103, U+110-111, U+128-129, U+168-169, U+1A0-1A1, U+1AF-1B0, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: local('Montserrat ExtraBold'), local('Montserrat-ExtraBold'), url(../fonts/JTURjIg1_i6t8kCHKm45_c5H3gfD_u50.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Montserrat;
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: local('Montserrat ExtraBold'), local('Montserrat-ExtraBold'), url(../fonts/JTURjIg1_i6t8kCHKm45_c5H3gnD_g.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: local('Poppins Light'), local('Poppins-Light'), url(../fonts/pxiByp8kv8JHgFVrLDz8Z11lFc-K.woff2) format('woff2');
        unicode-range: U+900-97F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: local('Poppins Light'), local('Poppins-Light'), url(../fonts/pxiByp8kv8JHgFVrLDz8Z1JlFc-K.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: local('Poppins Light'), local('Poppins-Light'), url(../fonts/pxiByp8kv8JHgFVrLDz8Z1xlFQ.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Poppins Regular'), local('Poppins-Regular'), url(../fonts/pxiEyp8kv8JHgFVrJJbecmNE.woff2) format('woff2');
        unicode-range: U+900-97F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Poppins Regular'), local('Poppins-Regular'), url(../fonts/pxiEyp8kv8JHgFVrJJnecmNE.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Poppins Regular'), local('Poppins-Regular'), url(../fonts/pxiEyp8kv8JHgFVrJJfecg.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: local('Poppins Medium'), local('Poppins-Medium'), url(../fonts/pxiByp8kv8JHgFVrLGT9Z11lFc-K.woff2) format('woff2');
        unicode-range: U+900-97F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: local('Poppins Medium'), local('Poppins-Medium'), url(../fonts/pxiByp8kv8JHgFVrLGT9Z1JlFc-K.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: local('Poppins Medium'), local('Poppins-Medium'), url(../fonts/pxiByp8kv8JHgFVrLGT9Z1xlFQ.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: local('Poppins SemiBold'), local('Poppins-SemiBold'), url(../fonts/pxiByp8kv8JHgFVrLEj6Z11lFc-K.woff2) format('woff2');
        unicode-range: U+900-97F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: local('Poppins SemiBold'), local('Poppins-SemiBold'), url(../fonts/pxiByp8kv8JHgFVrLEj6Z1JlFc-K.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: local('Poppins SemiBold'), local('Poppins-SemiBold'), url(../fonts/pxiByp8kv8JHgFVrLEj6Z1xlFQ.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Poppins Bold'), local('Poppins-Bold'), url(../fonts/pxiByp8kv8JHgFVrLCz7Z11lFc-K.woff2) format('woff2');
        unicode-range: U+900-97F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Poppins Bold'), local('Poppins-Bold'), url(../fonts/pxiByp8kv8JHgFVrLCz7Z1JlFc-K.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Poppins Bold'), local('Poppins-Bold'), url(../fonts/pxiByp8kv8JHgFVrLCz7Z1xlFQ.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: local('Poppins ExtraBold'), local('Poppins-ExtraBold'), url(../fonts/pxiByp8kv8JHgFVrLDD4Z11lFc-K.woff2) format('woff2');
        unicode-range: U+900-97F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: local('Poppins ExtraBold'), local('Poppins-ExtraBold'), url(../fonts/pxiByp8kv8JHgFVrLDD4Z1JlFc-K.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: local('Poppins ExtraBold'), local('Poppins-ExtraBold'), url(../fonts/pxiByp8kv8JHgFVrLDD4Z1xlFQ.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Crimson Text';
        font-style: italic;
        font-weight: 400;
        font-display: swap;
        src: local('Crimson Text Italic'), local('CrimsonText-Italic'), url(../fonts/wlpogwHKFkZgtmSR3NB0oRJfajhRK_Y.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Crimson Text';
        font-style: italic;
        font-weight: 600;
        font-display: swap;
        src: local('Crimson Text SemiBold Italic'), local('CrimsonText-SemiBoldItalic'), url(../fonts/wlprgwHKFkZgtmSR3NB0oRJfajCOD-NS_LU.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Crimson Text';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Crimson Text Regular'), local('CrimsonText-Regular'), url(../fonts/wlp2gwHKFkZgtmSR3NB0oRJfbwhT.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Crimson Text';
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: local('Crimson Text SemiBold'), local('CrimsonText-SemiBold'), url(../fonts/wlppgwHKFkZgtmSR3NB0oRJXsCxGDNNQ.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Charm;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Charm Regular'), local('Charm-Regular'), url(../fonts/7cHmv4oii5K0MdY8K-4E4Q.woff2) format('woff2');
        unicode-range: U+E01-E5B, U+200C-200D, U+25CC
    }

    @font-face {
        font-family: Charm;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Charm Regular'), local('Charm-Regular'), url(../fonts/7cHmv4oii5K0MdYnK-4E4Q.woff2) format('woff2');
        unicode-range: U+102-103, U+110-111, U+128-129, U+168-169, U+1A0-1A1, U+1AF-1B0, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: Charm;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Charm Regular'), local('Charm-Regular'), url(../fonts/7cHmv4oii5K0MdYmK-4E4Q.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Charm;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Charm Regular'), local('Charm-Regular'), url(../fonts/7cHmv4oii5K0MdYoK-4.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Charm;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Charm Bold'), local('Charm-Bold'), url(../fonts/7cHrv4oii5K0Md6TDvsvwH8RnA.woff2) format('woff2');
        unicode-range: U+E01-E5B, U+200C-200D, U+25CC
    }

    @font-face {
        font-family: Charm;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Charm Bold'), local('Charm-Bold'), url(../fonts/7cHrv4oii5K0Md6TDvs0wH8RnA.woff2) format('woff2');
        unicode-range: U+102-103, U+110-111, U+128-129, U+168-169, U+1A0-1A1, U+1AF-1B0, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: Charm;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Charm Bold'), local('Charm-Bold'), url(../fonts/7cHrv4oii5K0Md6TDvs1wH8RnA.woff2) format('woff2');
        unicode-range: U+100-24F, U+259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Charm;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Charm Bold'), local('Charm-Bold'), url(../fonts/7cHrv4oii5K0Md6TDvs7wH8.woff2) format('woff2');
        unicode-range: U+0-FF, U+131, U+152-153, U+2BB-2BC, U+2C6, U+2DA, U+2DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    body {
        font-family: Montserrat, sans-serif;
        margin: 0;
        font-size: 14px;
        overflow-x: hidden;
        color: #404244;
        font-weight: 400;
        line-height: 1.8
    }

    ::-webkit-scrollbar {
        width: 9px
    }

    ::-webkit-scrollbar-track {
        background-color: #eee
    }

    ::-webkit-scrollbar-track:hover {
        border: 1px solid #ddd;
        background-color: #ddd
    }

    ::-webkit-scrollbar-thumb {
        min-height: 25px;
        background-color: #bbb;
        box-shadow: inset 1px 1px 0 #aaa, inset 0 -1px 0 #aaa
    }

    ::-webkit-scrollbar-thumb:hover {
        background-color: #aaa;
        box-shadow: inset 1px 1px 0 #999, inset 0 -1px 0 #999
    }

    .img-responsive {
        width: 100%;
        height: auto;
        display: inline-block
    }

    section {
        padding: 50px 0 20px
    }

    .gray {
        background: #f8f8f9
    }

    h1,
    h2,
    h3,
    h4 {
        color: #37436c;
        font-weight: 600;
        font-family: Poppins, sans-serif
    }

    h1 {
        line-height: 40px;
        font-size: 36px
    }

    h2 {
        line-height: 36px;
        font-size: 30px
    }

    h3 {
        line-height: 30px;
        font-size: 24px
    }

    h4 {
        line-height: 26px;
        font-size: 21px
    }

    .footer-widget,
    .header-nav-bar,
    html body .p-0 {
        padding: 0
    }

    html body .font-16 {
        font-size: 16px
    }

    html body .font-18 {
        font-size: 18px
    }

    html body .font-20 {
        font-size: 20px
    }

    [type=radio]:not(:checked) {
        position: absolute;
        left: -9999px
    }

    [type=radio]:not(:checked)+label {
        position: relative;
        padding-left: 28px;
        cursor: pointer;
        line-height: 20px;
        display: inline-block
    }

    [type=radio]:not(:checked)+label:before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 18px;
        height: 18px;
        border: 1px solid #ddd;
        border-radius: 100%;
        background: #fff
    }

    [type=radio]:not(:checked)+label:after {
        content: '';
        width: 12px;
        height: 12px;
        background: #ff7600;
        position: absolute;
        top: 3px;
        left: 3px;
        border-radius: 100%;
        -webkit-transition: .2s;
        transition: .2s;
        opacity: 0;
        -webkit-transform: scale(0);
        transform: scale(0)
    }

    .list-grid-layout a.list-thumb,
    .tp-author-box .author-cover-img {
        transform: translate3d(0, 0, 0) scale(1);
        image-rendering: -webkit-optimize-contrast
    }

    .animated {
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        -webkit-animation-duration: .5s;
        animation-duration: .5s
    }

    .topbar {
        padding: 0;
        -webkit-transition: .2s ease-in;
        -o-transition: .2s ease-in;
        transition: .2s ease-in;
        width: 100%;
        position: absolute;
        z-index: 20
    }

    .header .navbar-brand {
        line-height: 55px;
        padding-top: 1px;
        padding-bottom: 2px
    }

    .header .navbar-brand img {
        max-width: 80px
    }

    .act-buttons a.laung {
        width: 38px;
        display: inline-block;
        text-align: center;
        line-height: 1;
        margin-bottom: -10px;
        position: initial;
        height: 35px;
        float: left;
        margin-right: 10px
    }

    .act-buttons a.laung img {
        width: 20px
    }

    .act-buttons a.laung span {
        display: inline-block;
        font-size: 8px;
        color: #fff;
        letter-spacing: .5px
    }

    .act-buttons a.login,
    .footer-widget ul li a,
    .page-title-wrap a,
    footer .contact a {
        color: #fff
    }

    .finding-overlay {
        content: "";
        display: block;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        position: absolute;
        background: #10223e
    }

    .finding-overlay.op-70 {
        opacity: .7
    }

    ul.banner-cat-list {
        margin: 1em auto;
        padding: 0;
        text-align: center
    }

    ul.banner-cat-list li {
        display: inline-block;
        margin: 5px
    }

    ul.banner-cat-list li a {
        width: 150px;
        height: 57px;
        display: table;
        flex-direction: column;
        justify-content: center;
        border-radius: 3px;
        color: #fff;
        background: rgba(255, 255, 255, .15);
        border: 1px solid rgba(255, 255, 255, .1);
        -webkit-transition: .3s;
        -o-transition: .3s;
        transition: .3s;
        font-size: 26px;
        line-height: 1.2
    }

    ul.banner-cat-list li span {
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: .5px;
        display: block
    }

    ul.banner-cat-list li a:focus,
    ul.banner-cat-list li a:hover {
        background: #fff;
        border: 1px solid #fff;
        box-shadow: 0 0 0 7px rgba(255, 255, 255, .4);
        -webkit-box-shadow: 0 0 0 7px rgba(255, 255, 255, .4);
        color: #ff7600
    }

    ul.banner-cat-list li a:focus span,
    ul.banner-cat-list li a:hover span {
        color: #575d67
    }

    .grid-layout-header {
        position: relative;
        max-height: 250px;
        overflow: hidden
    }

    .grid-layout-body {
        position: relative;
        padding: 0 20px;
        text-align: center;
        z-index: 1;
        margin-top: -40px
    }

    .ft-loke a {
        color: #747b8c
    }

    .ft-loke a:focus,
    .ft-loke a:hover {
        -webkit-transition: .5s;
        transition: .5s;
        color: #ff7600
    }

    .list-grid-layout.modern-layout {
        background: #fff;
        position: relative;
        width: 100%;
        border: 1px solid #e9ecf1;
        border-radius: 2px;
        overflow: hidden
    }

    .modern-layout .grid-layout-info {
        width: 100%;
        height: auto;
        padding: 10px 15px 1px 0;
        -webkit-transition: .5s;
        transition: .5s
    }

    .list-grid-layout a.list-thumb {
        position: relative;
        display: table;
        transition: transform .35s ease-out
    }

    .list-grid-layout:focus a.list-thumb,
    .list-grid-layout:hover a.list-thumb {
        transform: translate3d(0, 0, 0) scale(1.08)
    }

    .list-grid-layout a.list-thumb:before {
        content: "";
        position: absolute;
        background: #121e31;
        left: 0;
        top: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        opacity: .3;
        -webkit-transition: .5s;
        transition: .5s
    }

    .list-grid-layout.modern-layout:hover a.list-thumb:before {
        opacity: .6
    }

    .grid-layout-info ul,
    ul.footer-bottom-social {
        margin: 0;
        padding: 0
    }

    .grid-layout-info li {
        list-style: none;
        margin-bottom: 7px
    }

    .grid-layout-info li i,
    footer .contact p i,
    ul.footer-bottom-social li i {
        margin-right: 5px
    }

    .modern-layout .grid-layout-body {
        position: relative;
        padding: 10px 20px;
        text-align: left;
        z-index: 1;
        margin-top: -40px
    }

    .modern-layout .gl-list-caption {
        padding: 32px 10px 0;
        display: table-cell;
        vertical-align: bottom
    }

    .modern-layout .gl-list-caption h4 {
        font-weight: 500;
        margin-bottom: 1px;
        margin-top: 5px;
        font-size: 18px;
        line-height: 1
    }

    .modern-layout .gl-list-caption h4 a {
        color: #32343c
    }

    .modern-layout .gl-tagline {
        font-size: 14px;
        margin-bottom: 5px
    }

    .tp-author-box {
        border-radius: 2px;
        overflow: hidden;
        position: relative;
        margin-bottom: 30px;
        background: #fff;
        border: 1px solid #e9ecf1
    }

    .tp-author-box .author-cover-img {
        height: 200px;
        position: relative;
        overflow: hidden;
        border-top-right-radius: 2px;
        border-top-left-radius: 2px;
        background-size: cover;
        background-position: center;
        transition: transform .35s ease-out
    }

    .tp-author-detail-box {
        width: 100%;
        display: table
    }

    .tp-author {
        position: relative;
        left: 15px;
        margin-top: -22px;
        width: 80px;
        overflow: hidden;
        padding: 9px;
        background: #fff;
        display: table;
        height: 65px;
        float: left;
        box-shadow: 1px 1px 4px #ccc
    }

    .card,
    .card.pricing {
        display: -ms-flexbox;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box
    }

    .tp-author-header {
        margin-left: 112px;
        top: 7px;
        position: relative;
        left: -10px
    }

    .author-cover-img .price {
        position: absolute;
        right: 7px;
        left: auto;
        bottom: 7px
    }

    .card,
    .card.pricing,
    .page-title,
    footer.light-footer {
        position: relative
    }

    .author-cover-img .price p {
        margin: 0;
        font-size: 11px;
        color: #fff;
        letter-spacing: 1px;
        line-height: 1;
        text-align: center
    }

    .author-cover-img .price .follow-btn {
        color: #c59414;
        font-weight: 600;
        background: #fff;
        padding: 3px 5px;
        line-height: 1;
        border-radius: 2px;
        font-size: 12px
    }

    .tp-author-header h4 {
        margin: 0;
        padding: 0;
        font-size: 16px;
        line-height: 1
    }

    .tp-author-basic-info {
        margin: 15px 0 0;
        padding: 0 15px;
        border-top: 1px solid #ebedf1
    }

    .tp-author-basic-info ul {
        width: 100%;
        padding: 0;
        margin: 0;
        display: table
    }

    .tp-author-basic-info li {
        list-style: none;
        display: inline-block;
        width: 50%;
        padding: 10px 0;
        text-align: center;
        text-transform: uppercase;
        font-size: 10px;
        letter-spacing: .5px;
        color: #212121
    }

    .tp-author-basic-info li strong {
        display: block;
        font-size: 14px;
        font-weight: 600;
        color: #2b2b2b
    }

    .footer-widget ul li,
    ul.footer-bottom-social li {
        display: inline-block;
        list-style: none
    }

    .card.pricing {
        display: flex;
        flex-direction: column;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: 0;
        -webkit-transition: .3s;
        -o-transition: .3s;
        transition: .3s
    }

    .card.pricing:hover {
        margin-top: -5px;
        -webkit-box-shadow: 0 10px 40px rgba(0, 0, 0, .05);
        box-shadow: 0 10px 40px rgba(0, 0, 0, .05)
    }

    .pricing {
        text-align: center;
        border: 1px solid #e9ecf1;
        border-radius: 15px;
        margin-bottom: 30px
    }

    .pricing h3 {
        line-height: 1.5;
        font-size: 14px;
        white-space: nowrap;
        background: #505050;
        padding: 15px 10px;
        color: #fff;
        margin-bottom: 0
    }

    .pricing ul {
        line-height: 2.5;
        margin: 4px 0
    }

    .card {
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        border: 1px solid #e8eef1;
        border-radius: .25rem
    }

    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem
    }

    .page-title {
        height: 350px;
        width: 100%;
        display: flex;
        align-items: center;
        background: #ccc;
        justify-content: center
    }

    .page-title.image-title {
        height: 450px;
        text-align: center
    }

    .page-title.image-title h1 {
        color: #fff;
        line-height: 1.2
    }

    .page-title.image-title .page-title-wrap {
        position: relative;
        top: 25px
    }

    .contact-box {
        width: 100%;
        margin: 0 auto 10px;
        display: table;
        text-align: center;
        box-shadow: 0 0 12px 0 rgba(71, 119, 244, .2);
        border-radius: 6px;
        padding: 1.4em 1em .5em
    }

    .contact-box img {
        margin-bottom: 10px
    }

    footer {
        background-position: top;
        background-size: cover !important
    }

    footer.light-footer {
        padding-top: 8rem
    }

    footer .border-right {
        border-right: 1px solid #505050;
        margin-bottom: 25px
    }

    .border-b {
        border-bottom: 1px solid #505050
    }

    footer .contact p {
        line-height: 1;
        font-size: 13px;
        margin-bottom: 14px;
        max-width: 158px
    }

    .footer-widget ul li,
    h4.widget-title {
        margin-bottom: 10px;
        text-transform: uppercase
    }

    h4.widget-title {
        font-weight: 500;
        font-size: 14px;
        color: #fff;
        letter-spacing: .5px
    }

    .footer-widget ul {
        padding: 0;
        margin: 0
    }

    .footer-widget ul li {
        font-size: 11px;
        width: 50%;
        float: left;
        letter-spacing: .7px
    }

    .widget_media_image {
        margin-top: 1rem
    }

    .footer-bottom {
        padding: 15px 0;
        border-top: 1px solid #505050;
        font-size: 13px;
        margin-top: 10px
    }

    .footer-bottom p {
        color: #c2c7cc
    }

    .footer-bottom a {
        color: #e8e8e8;
        font-weight: 500
    }

    ul.footer-bottom-social li a {
        color: #e2e0e0
    }

    @media(min-width: 992px) {
        .page-title h1 {
            font-size: 55px;
            line-height: 1.4
        }

        h1.bnr-title {
            font-size: 36px;
            line-height: 1.4;
            margin-bottom: 15px;
            letter-spacing: 1px;
            font-weight: 500
        }
    }

    @media(max-width: 767px) {
        ul.banner-cat-list li {
            margin: 3px
        }

        h1.bnr-title {
            line-height: 40px;
            font-size: 22px
        }

        .statics {
            padding: 3rem 0 !important
        }

        .statics .num_count {
            color: #fff;
            line-height: 1.5;
            margin-bottom: 25px
        }

        .statics .num_count h4 {
            font-size: 28px !important
        }

        .statics .num_count p {
            margin-top: 5px !important
        }

        .modern-layout .grid-layout-body {
            margin-top: -24px;
            padding: 10px 15px
        }

        .modern-layout .gl-list-caption h4 {
            font-size: 16px
        }

        .modern-layout .gl-tagline {
            font-size: 12px
        }

        footer .border-right {
            border-right: 0;
            border-bottom: 1px solid #506275;
            margin-bottom: 17px;
            padding-bottom: 10px
        }

        .contact {
            border-top: 1px solid #506275;
            padding-top: 10px;
            padding-bottom: 10px
        }

        .footer-bottom small {
            float: inherit
        }
    }

    @media(max-width: 991px) {

        .act-buttons a.laung span,
        .header.exchange-logo .sticky-logo {
            display: none
        }

        .header .navbar-brand {
            line-height: 50px
        }

        .header .navbar-brand img {
            max-width: 70px
        }

        .act-buttons a.laung {
            width: 23px;
            margin-right: 7px
        }
    }
</style>