<template>
  <div class="widget-boxed-header">
    <h4>Top Articles</h4>
  </div>
  <div class="widget-boxed-body">
    <div class="side-list">
      <ul id="topArticles" class="category-list top-articles">
        <li v-for="article in topArticles" :key="article.slug">
          <i class="fa fa-arrow-right mr-2"></i>
          <a :href="`/news-articles/${article.slug}`">{{ article.title }}</a>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      topArticles: []
    };
  },
  mounted() {
    this.fetchtopArticles();
  },
  methods: {
    async fetchtopArticles() {
      try {
        const response = await fetch('/api/articles/top');
        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }
        this.topArticles = await response.json();
      } catch (error) {
        console.error('Error fetching top articles:', error);
      }
    }
  }
};
</script>  
  <style scoped>
  .form-group,p,ul {
  margin-bottom: 1rem
}

.btn:active,.form-control {
  background-image: none
}

.navbar,html,sup {
  position: relative
}

.topbar.fixed-header .act-buttons .login,.topbar.fixed-header .act-buttons a.login,a {
  color: #546e7a
}

.card {
  word-wrap: break-word
}

.dropzone .dz-preview .dz-details .dz-filename:not(:hover),.side-list .top-articles li,.side-proj .proj-dtls h2,.walkthrough h3 {
  overflow: hidden;
  text-overflow: ellipsis
}

@media print {
  *,::after,::before {
      text-shadow: none!important;
      box-shadow: none!important
  }

  a,a:visited {
      text-decoration: underline
  }

  img {
      page-break-inside: avoid
  }

  h2,h3,p {
      orphans: 3;
      widows: 3
  }

  h2,h3 {
      page-break-after: avoid
  }

  .navbar {
      display: none
  }
}

.btn:focus,.btn:hover,.menuBox .content li a,.navbar-brand:focus,.navbar-brand:hover,a,a:focus,a:hover {
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
  min-height: 100%;
  background: #fff
}

*,::after,::before {
  box-sizing: inherit
}

aside,figure,footer,nav,section {
  display: block
}

body {
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif
}

p,ul {
  margin-top: 0
}

sup {
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
  top: -.5em
}

.btn,img {
  vertical-align: middle
}

a {
  -webkit-text-decoration-skip: objects;
  background-color: transparent;
  -webkit-text-decoration-skip: objects
}

a:hover {
  color: #0056b3
}

a:not([href]):not([tabindex]),a:not([href]):not([tabindex]):focus,a:not([href]):not([tabindex]):hover {
  color: inherit;
  text-decoration: none
}

*,a:not([href]):not([tabindex]):focus {
  outline: 0
}

figure {
  margin: 0 0 1rem
}

img {
  border-style: none
}

a,button,input,label,select {
  -ms-touch-action: manipulation;
  touch-action: manipulation
}

label {
  display: inline-block;
  margin-bottom: .5rem
}

button:focus {
  outline: -webkit-focus-ring-color auto 5px;
  outline: 0
}

button,input,select {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit
}

button,input {
  overflow: visible
}

button,select {
  text-transform: none
}



[type=button]::-moz-focus-inner,button::-moz-focus-inner {
  padding: 0;
  border-style: none
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button
}

h1,h2,h3,h4,h5 {
  margin-top: 0;
  margin-bottom: .5rem;
  line-height: 1.1
}

.small,small {
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

.menuBox,.menuBox .overlay {
  width: 100%;
  height: 100%;
  top: 0;
  right: 0
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
      max-width:540px
  }

  .col-sm-4 {
      -ms-flex: 0 0 33.333333%;
      flex: 0 0 33.333333%;
      max-width: 33.333333%
  }

  .col-sm-6 {
      -ms-flex: 0 0 50%;
      flex: 0 0 50%;
      max-width: 50%
  }

  .col-sm-8 {
      -ms-flex: 0 0 66.666667%;
      flex: 0 0 66.666667%;
      max-width: 66.666667%
  }

  .col-sm-12 {
      -ms-flex: 0 0 100%;
      flex: 0 0 100%;
      max-width: 100%
  }
}

@media(min-width: 768px) {
  .container {
      max-width:720px
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

  .col-md-6 {
      -ms-flex: 0 0 50%;
      flex: 0 0 50%;
      max-width: 50%
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
      max-width:960px
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

.no-gutters {
  margin-right: 0;
  margin-left: 0
}

.no-gutters>[class*=col-] {
  padding-right: 0;
  padding-left: 0
}

.col,.col-lg-3,.col-lg-4,.col-lg-8,.col-lg-9,.col-md-12,.col-md-3,.col-md-4,.col-md-6,.col-md-8,.col-md-9,.col-sm-12,.col-sm-4,.col-sm-6,.col-sm-8 {
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

.form-control {
  display: block;
  width: 100%;
  padding: .5rem .75rem;
  line-height: 1.25;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0,0,0,.15);
  transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out
}

.form-control::-ms-expand {
  background-color: transparent;
  border: 0
}

.form-control:focus {
  color: #495057;
  background-color: #fff;
  border-color: #80bdff;
  outline: 0
}

.form-control::-webkit-input-placeholder {
  opacity: 1
}

.form-control:-ms-input-placeholder {
  opacity: 1
}

select.form-control:focus::-ms-value {
  color: #495057;
  background-color: #fff
}

.btn {
  display: inline-block;
  font-weight: 400;
  text-align: center;
  white-space: nowrap;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  border: 1px solid transparent;
  font-size: 1rem;
  line-height: 1.25
}

.btn:focus {
  outline: 0;
  box-shadow: 0 0 0 3px rgba(0,123,255,.25)
}

.btn:disabled {
  opacity: .65
}

.btn-primary,.btn-primary:hover,.btn-success:hover,.btn:hover,.footer-widget ul li a,.page-title-wrap a,footer .contact a {
  color: #fff
}

.btn-primary:focus {
  box-shadow: 0 0 0 3px rgba(0,123,255,.5)
}

.btn-primary:disabled {
  background-color: #007bff;
  border-color: #007bff
}

.btn-primary:active {
  border-color: #0062cc
}

.btn-success:focus {
  box-shadow: 0 0 0 3px rgba(40,167,69,.5)
}

.btn-success:disabled {
  background-color: #28a745;
  border-color: #28a745
}

.btn-success:active {
  border-color: #1e7e34
}

.btn-block {
  display: block;
  width: 100%
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

[class^=lni-],[class^=ti-] {
  speak: none;
  font-style: normal;
  font-weight: 400;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale
}

.card {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column
}

.card-img-top {
  width: 100%;
  border-top-left-radius: calc(.25rem - 1px);
  border-top-right-radius: calc(.25rem - 1px)
}

.border-0 {
  border: 0!important
}

.rounded {
  border-radius: .25rem!important
}

.rounded-0 {
  border-radius: 0
}

.clearfix::after {
  display: block;
  clear: both;
  content: ""
}

.HideContent,.d-none {
  display: none!important
}

.fa,span {
  display: inline-block
}

.justify-content-center {
  -ms-flex-pack: center!important;
  justify-content: center!important
}

.justify-content-between {
  -ms-flex-pack: justify!important;
  justify-content: space-between!important
}

.float-left {
  float: left!important
}

.mb-0 {
  margin-bottom: 0!important
}

.mr-1 {
  margin-right: .25rem!important
}

.mr-2 {
  margin-right: .5rem!important
}

.mb-2 {
  margin-bottom: .5rem!important
}

.mt-3 {
  margin-top: 1rem!important
}

.mb-3 {
  margin-bottom: 1rem!important
}

.mb-4 {
  margin-bottom: 1.5rem!important
}

.mt-5 {
  margin-top: 3rem!important
}

.p-0 {
  padding: 0!important
}

.p-1 {
  padding: .25rem!important
}

.py-1 {
  padding-top: .25rem!important;
  padding-bottom: .25rem!important
}

.pr-2 {
  padding-right: .5rem!important
}

.pl-2 {
  padding-left: .5rem!important
}

.pr-3 {
  padding-right: 1rem!important
}

.text-center {
  text-align: center!important
}

.text-light {
  color: #f8f9fa!important
}

.default-btn,.section-btn .default-btn:hover {
  color: #15273e!important
}



[class^=ti-] {
  font-family: themify
}

.ti-menu:before {
  content: ""
}



.dropzone .dz-preview .dz-details .dz-filename:not(:hover) span {
  border: 1px solid transparent
}


[class^=lni-] {
  font-family: LineIcons!important
}

.article-list small,.default-btn,.menuBox .content li a,.sec-heading h2,.side-proj .proj-dtls h5 {
  text-transform: uppercase
}

.lni-map-marker:before {
  content: ""
}

.lni-whatsapp:before {
  content: ""
}



.default-btn,.send span {
  font-weight: 500;
  letter-spacing: 1px
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

.fa-arrow-right:before {
  content: ""
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

.fa-linkedin:before {
  content: ""
}

.fa-youtube-play:before {
  content: ""
}

.fa-instagram:before {
  content: ""
}



@media(min-width: 1200px) {
  .container {
      max-width:1170px
  }

  .d-xl-none {
      display: none!important
  }

  .d-xl-block {
      display: block!important
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
  opacity: 0;
  visibility: hidden;
  -webkit-transition: .3s ease-in;
  -o-transition: .3s ease-in;
  transition: .3s ease-in
}

.topbar.fixed-header {
  -webkit-box-shadow: 0 0 30px rgba(115,128,157,.1);
  box-shadow: 0 0 30px rgba(115,128,157,.1);
  -webkit-transition: .2s ease-in;
  -o-transition: .2s ease-in;
  transition: .2s ease-in;
  background: #fff;
  position: fixed
}

@-webkit-keyframes slideInDown {
  from {
      -webkit-transform: translate3d(0,-100%,0);
      transform: translate3d(0,-100%,0);
      visibility: visible
  }

  to {
      -webkit-transform: translate3d(0,0,0);
      transform: translate3d(0,0,0)
  }
}

@keyframes slideInDown {
  from {
      -webkit-transform: translate3d(0,-100%,0);
      transform: translate3d(0,-100%,0);
      visibility: visible
  }

  to {
      -webkit-transform: translate3d(0,0,0);
      transform: translate3d(0,0,0)
  }
}

.slideInDown {
  -webkit-animation-name: slideInDown;
  animation-name: slideInDown
}

.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both
}

.menuBox .overlay {
  position: absolute;
  background-color: rgba(0,0,0,.7)
}

.menuBox .clse span,.menuBox .clse span:before,.menuBox .content {
  height: 100%;
  background-color: #fff;
  position: absolute
}

.menuBox .content {
  padding-bottom: 30px;
  top: 0;
  right: 0;
  width: 250px;
  word-break: normal;
  -webkit-box-shadow: 0 0 10px rgba(0,0,0,.5);
  box-shadow: 0 0 10px rgba(0,0,0,.5);
  -webkit-transition: .4s ease-in;
  -o-transition: .4s ease-in;
  transition: .4s ease-in;
  -moz-transform: translate(543%,0);
  -o-transform: translate(543%,0);
  -ms-transform: translate(543%,0);
  -webkit-transform: translate(543%,0);
  transform: translate(543%,0);
  border-left: 3px solid #ff7600;
  border-top: 3px solid #ff7600
}

.menuBox.go-show .content {
  -moz-transform: translate(0,0);
  -o-transform: translate(0,0);
  -ms-transform: translate(0,0);
  -webkit-transform: translate(0,0);
  transform: translate(0,0)
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
  color: #636363
}

.menuBox .content li a:hover,.page-title.image-title .page-title-wrap .current-page.active,ul.footer-bottom-social li a:focus,ul.footer-bottom-social li a:hover {
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

.default-btn {
  display: inline-block;
  line-height: 1;
  padding: 10px 15px;
  z-index: 9;
  position: relative;
  border: 1px solid #15273e
}

.section-btn .default-btn {
  padding: 15px 55px;
  background-color: #15273e;
  border: none;
  color: #fff!important
}

.btn-hover::before {
  background: #15273e;
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
  border: 1px solid #15273e
}

.btn-hover:hover::before {
  transform: scaleX(1)
}

.default-btn:hover {
  color: #fff!important
}

.booking-form .form-control,.widget-boxed .form-control,select.form-control:not([size]):not([multiple]) {
  height: 46px
}

.side-proj .proj-dtls h5 {
  color: #b9932d;
  font-size: 11px;
  line-height: 1.4;
  margin-bottom: 5px
}

.side-proj {
  border-bottom: 1px solid #e4e4e4;
  padding-bottom: 10px;
  margin-bottom: 10px
}

.side-proj:last-child {
  border-bottom: 0
}

.side-proj .proj-dtls h2 {
  line-height: 1;
  margin-bottom: 3px;
  font-size: 14px;
  font-weight: 600;
  white-space: nowrap
}

.side-proj .price {
  margin-bottom: 0;
  font-weight: 600;
  font-size: 14px
}

.side-proj .price span {
  font-weight: 400;
  color: #948e8e;
  font-size: 11px;
  margin-right: 10px
}

@media(min-width: 768px) {
  .d-md-none {
      display:none!important
  }

  .d-md-block {
      display: block!important
  }

  .mr-md-4 {
      margin-right: 1.5rem!important
  }

  .pr-md-4 {
      padding-right: 1.5rem!important
  }

  .pl-md-4 {
      padding-left: 1.5rem!important
  }

  .act-buttons .d-md-block {
      display: inline-block!important
  }
}

@media(max-width: 768px) {
  .menuBox .content li a {
      height:45px;
      line-height: 45px
  }

  h2 {
      line-height: 26px;
      font-size: 24px
  }

  .section-btn .default-btn {
      display: block
  }

  .page-title.search-head {
      height: 235px;
      text-align: center;
  }
}

body {
  background: #fff;
  font-family: Montserrat,sans-serif;
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

.full-width,.topbar {
  width: 100%
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
  box-shadow: inset 1px 1px 0 #aaa,inset 0 -1px 0 #aaa
}

::-webkit-scrollbar-thumb:hover {
  background-color: #aaa;
  box-shadow: inset 1px 1px 0 #999,inset 0 -1px 0 #999
}

section {
  padding: 50px 0 20px
}

.gray {
  background: #f8f8f9
}

.loader,.send {
  background: #ffffffe6;
  left: 0;
  z-index: 1;
  position: absolute;
  text-align: center;
  right: 0;
  top: 0;
  bottom: 0
}

h1,h2,h3,h4,h5 {
  color: #37436c;
  font-weight: 600;
  font-family: Poppins,sans-serif
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

h5 {
  line-height: 22px;
  font-size: 18px;
  font-weight: 400
}

.loader {
  padding-top: 15%
}

.send {
  padding-top: 25%
}

.loader span {
  display: block;
  margin-top: -55px;
  color: #848282;
  letter-spacing: 1px
}

.send span {
  display: block;
  margin-top: 15px;
  color: #77b43f;
  font-size: 15px
}

.footer-widget,.header-nav-bar,html body .p-0 {
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

html body .b-r {
  border-right: 1px solid #eceef3
}

.btn {
  color: #fff;
  padding: 10px 25px;
  cursor: pointer;
  -webkit-box-shadow: 0 1px 6px rgba(0,0,0,.1);
  box-shadow: 0 1px 6px rgba(0,0,0,.1);
  -webkit-transition: 0;
  -o-transition: 0;
  transition: 0;
  border-radius: .1rem
}

.btn:focus {
  -webkit-box-shadow: none;
  box-shadow: none
}

.btn-primary {
  background: #ff7600;
  border: 1px solid #ff7600;
  -webkit-transition: .2s ease-in;
  -o-transition: .2s ease-in;
  transition: .2s ease-in
}

.btn-primary:hover {
  background: #2d323d;
  border: 1px solid #2d323d
}

.btn-primary:active,.btn-primary:focus {
  background: #345bcb
}

.btn-success:active,.btn-success:focus,.btn-success:hover {
  background: #1fd628
}

.btn-success {
  background: #27b737;
  border: 1px solid #27b737;
  color: #fff
}

.btn-success:hover {
  border: 1px solid #1fd628
}

.btn-primary:active:focus,.btn-primary:active:hover,.btn-primary:focus {
  background-color: #345bcb;
  border: 1px solid #345bcb
}

.btn-success:active:focus,.btn-success:active:hover,.btn-success:focus {
  background-color: #1fd628;
  border: 1px solid #1fd628
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

.form-control {
  height: 60px;
  border-radius: 0;
  font-size: 15px;
  box-shadow: none
}

.fixed-header .header.exchange-logo .sticky-logo,.header.exchange-logo .default-logo {
  display: none
}

.fixed-header .header.exchange-logo .default-logo {
  display: block;
  max-width: auto!important
}

.topbar {
  padding: 0;
  -webkit-transition: .2s ease-in;
  -o-transition: .2s ease-in;
  transition: .2s ease-in;
  position: absolute;
  z-index: 20
}

.header.light {
  background-color: #fff;
  box-shadow: 0 0 20px 0 rgba(62,28,131,.1);
  -webkit-box-shadow: 0 0 20px 0 rgba(62,28,131,.1)
}

.header .navbar-brand {
  line-height: 55px;
  padding-top: 1px;
  padding-bottom: 2px
}

.header .navbar-brand img {
  max-width: 129px
}

.act-buttons a.laung {
  width: 38px;
  display: inline-block;
  text-align: center;
  line-height: 1;
  margin-bottom: -10px;
  position: initial;
  height: 35px;
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

.light .act-buttons a.laung span {
  color: #000
}

.act-buttons .login,.act-buttons a.login {
  cursor: pointer
}

.topbar .header.light .act-buttons a.login {
  color: #546e7a;
  cursor: pointer
}

.form-control::-moz-placeholder {
  color: #9dabb7
}

.form-control:-ms-input-placeholder {
  color: #9dabb7
}

.form-control::-webkit-input-placeholder {
  color: #9dabb7
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

.card,.widget-boxed {
  background-color: #fff
}

.finding-overlay.op-70 {
  opacity: .7
}

.article-list {
  border-bottom: 1px solid #ccc;
  margin-bottom: 15px;
  padding-bottom: 15px
}

.article-list small {
  line-height: 1;
  color: #8e8e8e;
  font-size: 12px;
  letter-spacing: 1px;
  font-weight: 600
}

.article-list small span {
  border-left: 1px solid #ccc;
  margin-left: 5px;
  padding-left: 7px
}

.article-list h4 {
  font-size: 20px;
  font-weight: 600;
  margin-top: 6px;
  margin-bottom: 6px;
  line-height: 1.2em
}

.article-list figure {
  position: relative;
  overflow: hidden;
  margin: 0
}

.article-list img {
  min-width: 380px;
  object-fit: cover;
  transition: transform .35s ease-out;
  transform: translate3d(0,0,0) scale(1)
}

.article-list p,.dtls p {
  margin-bottom: 4px;
  text-align: justify
}

.dtls p {
  margin-bottom: 12px
}

.widget-boxed {
  border-radius: 6px;
  padding: 0 20px 25px;
  margin-bottom: 35px;
  position: relative;
  border: 1px solid #eaeff5
}

.widget-boxed-header {
  padding: 14px 0 5px
}

.widget-boxed-header h4 {
  margin: 0;
  font-size: 16px;
  opacity: .9;
  font-weight: 500
}

.booking-form .form-group {
  position: relative;
  margin-bottom: 1.5rem
}

.booking-form span.sperr {
  position: absolute;
  left: 0;
  height: 25px;
  width: 100%;
  font-size: 11px;
  color: red
}

.booking-form label {
  margin-bottom: 0;
  line-height: 1;
  font-weight: 500;
  display: none
}

.page-title.search-head::after,.walkthrough span {
  display: block;
  z-index: 1;
  left: 0;
  right: 0;
  position: absolute
}

.article p {
  text-align: justify
}

.article ul {
  border-top: 1px solid #ccc
}

.article ul li {
  width: 50%;
  float: left;
  font-size: 11px;
  padding-top: 5px;
  color: #143258;
  font-weight: 600
}

.article ul li:last-child {
  text-align: right
}

.walkthrough .walk-warp {
  position: relative;
  background: #fff;
  border-radius: 3px;
  padding: 11px;
  box-shadow: 0 1px 6px 0 rgba(0,0,0,.06)
}

.walkthrough span {
  top: 39%;
  bottom: 10%;
  text-align: center
}

.walkthrough span img {
  background: #21202054;
  padding: 3px;
  border-radius: 5px
}

.walkthrough span:hover img {
  background: #00000091
}

.walkthrough h3 {
  text-align: center;
  font-size: 16px;
  margin-top: 6px;
  white-space: nowrap;
  margin-bottom: 25px
}

.widget-boxed .walkthrough .walk-warp {
  border-radius: 0;
  padding: 0
}

.widget-boxed .walkthrough span {
  position: absolute;
  top: 25%
}

.widget-boxed .walkthrough h3 {
  font-size: 12px;
  margin-top: 2px;
  margin-bottom: 10px
}

.sec-heading h2 {
  margin-bottom: 2px;
  line-height: 36px;
  font-size: 22px
}

.form-control:disabled {
  background-color: #fff;
  opacity: 1
}

.card {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  background-clip: border-box;
  border: 1px solid #e8eef1;
  border-radius: .25rem
}

.card-body {
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1.25rem
}

.sec-heading {
  max-width: 780px;
  margin-bottom: 20px
}

.page-title {
  height: 350px;
  width: 100%;
  display: flex;
  position: relative;
  align-items: center;
  background: #ccc;
  justify-content: center
}

.page-title.image-title {
  height: 450px;
  text-align: center
}

.page-title.search-head {
  height: 185px;
  text-align: center;
  position: relative
}

.page-title.search-head::after {
  content: '';
  background: #000000cf;
  top: 0;
  bottom: 0
}

.page-title.search-head .container {
  z-index: 2
}

.page-title.image-title .page-title-wrap {
  position: relative;
  top: 25px
}

.current-page {
  padding-left: 15px;
  position: relative
}

span.current-page:before {
  content: '';
  position: absolute;
  font-family: themify;
  color: #ff7600;
  left: -3px
}

.side-list ul,ul.footer-bottom-social {
  margin: 0;
  padding: 0
}

.side-list ul li {
  list-style: none;
  padding: 10px 5px;
  display: inline-block;
  width: 100%
}

.side-list .top-articles li {
  white-space: nowrap;
  font-weight: 500;
  padding: 1px 5px;
  font-size: 13px
}

footer {
  background-position: top;
  background-size: cover!important
}

footer.light-footer {
  position: relative;
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

.footer-widget ul li,h4.widget-title {
  margin-bottom: 10px;
  text-transform: uppercase
}

footer .contact p i,ul.footer-bottom-social li i {
  margin-right: 5px
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
  list-style: none;
  display: inline-block;
  font-size: 11px;
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

ul.footer-bottom-social li {
  display: inline-block;
  list-style: none
}

ul.footer-bottom-social li a {
  color: #e2e0e0
}

@media(min-width: 992px) {
  .navbar-expand-lg {
      -ms-flex-direction:row;
      flex-direction: row;
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
      -ms-flex-pack: start;
      justify-content: flex-start
  }

  .d-lg-none {
      display: none!important
  }

  .sec-heading h2 {
      font-size: 24px;
      line-height: 1;
      text-transform: uppercase;
      margin-bottom: 2px
  }
}

@media(max-width: 767px) {
  footer .border-right {
      border-right:0;
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
  .act-buttons a.laung span,.header.exchange-logo .sticky-logo {
      display:none
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
  