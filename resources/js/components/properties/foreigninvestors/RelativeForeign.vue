<template>
    <div class="side-list menu-a">
        <a v-for="investor in investors.data" :key="investor.slug" :href="`/foreign-investors/${investor.slug}`"
            class="btn btn-primary btn-sm btn-block text-left" style="font-size: 15px;">
            <i class="fa-solid fa-arrow-right" style="color: #fff;"></i> {{ investor.name }}
        </a>
    </div>
</template>
<script>
    import axios from 'axios';

    export default {
        data() {
            return {
                investors: {
                    data: [],
                    current_page: 1,
                    last_page: 1,
                    prev_page_url: null,
                    next_page_url: null,
                },
                pages: [],
            };
        },
        created() {
            this.fetchInvestors();
        },
        methods: {
            async fetchInvestors(url = '/api/investors') {
                try {
                    const response = await axios.get(url);
                    this.investors = response.data;
                    this.pages = Array.from({ length: this.investors.last_page }, (_, i) => i + 1);
                } catch (error) {
                    console.error('Error fetching investors:', error);
                }
            },
            pageUrl(page) {
                return `/frontend/investors?page=${page}`;
            },
            // Strip HTML tags method
            stripHtmlTags(text) {
                return text.replace(/<\/?[^>]+(>|$)/g, ""); // Remove HTML tags
            },
            // Truncate text method
            truncateText(text, length) {
                const strippedText = this.stripHtmlTags(text);
                return strippedText.length > length ? strippedText.substring(0, length) + '...' : strippedText;
            },

        }
    }
</script>
<style scoped>
    h1,
    h2,
    h4,
    p,
    ul {
        margin-top: 0
    }

    h1,
    h2,
    h4,
    label {
        margin-bottom: .5rem
    }

    .form-group,
    p,
    ul {
        margin-bottom: 1rem
    }

    .btn:active,
    .form-control {
        background-image: none
    }

    .navbar,
    html {
        position: relative
    }

    .btn,
    .navbar-brand {
        white-space: nowrap
    }

    .topbar .header.light .act-buttons a.login,
    .topbar.fixed-header .act-buttons a.login,
    a {
        color: #546e7a
    }

    .btn,
    .menuBox .content li i {
        text-align: center;
        vertical-align: middle
    }

    .btn,
    img {
        vertical-align: middle
    }

    .card {
        word-wrap: break-word
    }

    .card-body p {
        color: #333;
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
        p {
            orphans: 3;
            widows: 3
        }

        h2 {
            page-break-after: avoid
        }

        .navbar {
            display: none
        }
    }

    .btn:focus,
    .btn:hover,
    .menuBox .content li a,
    .navbar-brand:focus,
    .navbar-brand:hover,
    .proj-list-item a,
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
        -webkit-tap-highlight-color: transparent;
        scroll-behavior: smooth;
        min-height: 100%;
        background: #fff
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
        border-style: none
    }

    a,
    button,
    input,
    label,
    select {
        -ms-touch-action: manipulation;
        touch-action: manipulation
    }

    label {
        display: inline-block
    }

    button:focus {
        outline: -webkit-focus-ring-color auto 5px;
        outline: 0
    }

    button,
    input,
    select {
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
    button::-moz-focus-inner {
        padding: 0;
        border-style: none
    }

    ::-webkit-file-upload-button {
        font: inherit;
        -webkit-appearance: button
    }

    h1,
    h2,
    h4 {
        line-height: 1.1
    }

    .small,
    small {
        font-size: 80%;
        font-weight: 400
    }

    .img-fluid {
        max-width: 100%;
        height: auto
    }

    .menuBox,
    .menuBox .overlay {
        height: 100%;
        top: 0;
        right: 0;
        width: 100%
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

        .col-sm-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
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

        .col-md-5 {
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%
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

    .no-gutters {
        margin-right: 0;
        margin-left: 0
    }

    .no-gutters>[class*=col-] {
        padding-right: 0;
        padding-left: 0
    }

    .col-lg-3,
    .col-lg-4,
    .col-lg-8,
    .col-lg-9,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-sm-12,
    .col-sm-4,
    .col-sm-8 {
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px
    }

    .form-control {
        display: block;
        width: 100%;
        padding: .5rem .75rem;
        line-height: 1.25;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .15);
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
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
        box-shadow: 0 0 0 3px rgba(0, 123, 255, .25)
    }

    .btn:disabled {
        opacity: .65
    }

    .btn-primary {
        color: #fff;
        background-color: #000 !important;
        border-color: #000 !important
    }

    .btn-primary:hover,
    .btn-success:hover,
    .btn:hover,
    .footer-widget ul li a,
    .page-title-wrap a,
    footer .contact a {
        color: #fff
    }

    .btn-primary:focus {
        box-shadow: 0 0 0 3px rgba(0, 123, 255, .5)
    }

    .btn-primary:disabled {
        background-color: #007bff;
        border-color: #007bff
    }

    .btn-primary:active {
        border-color: #0062cc
    }

    .btn-success:focus {
        box-shadow: 0 0 0 3px #9C3133
    }

    .btn-success:disabled {
        background-color: #9C3133;
        border-color: #9C3133
    }

    .btn-success:active {
        border-color: #9C3133
    }

    .btn-sm {
        line-height: 1.5;
        border-radius: .2rem
    }

    .btn-block {
        display: block;
        width: 100%
    }

    .btn-block+.btn-block {
        margin-top: .5rem
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
        line-height: inherit
    }

    [class^=lni-],
    [class^=ti-] {
        font-style: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-weight: 400
    }

    .card {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column
    }

    .border-0 {
        border: 0 !important
    }

    .rounded-0 {
        border-radius: 0
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

    .float-left {
        float: left !important
    }

    .mb-0 {
        margin-bottom: 0 !important
    }

    .mr-1 {
        margin-right: .25rem !important
    }

    .mt-3 {
        margin-top: 1rem !important
    }

    .mb-4 {
        margin-bottom: 1.5rem !important
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

    .text-left {
        text-align: left !important
    }

    .text-center {
        text-align: center !important
    }

    .text-light {
        color: #f8f9fa !important
    }



    [class^=ti-] {
        font-family: themify
    }

    .ti-menu:before {
        content: ""
    }



    .dropzone .dz-preview .dz-details .dz-filename:not(:hover) {
        overflow: hidden;
        text-overflow: ellipsis
    }

    .dropzone .dz-preview .dz-details .dz-filename:not(:hover) span {
        border: 1px solid transparent
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
            max-width: 1170px
        }

        .d-xl-none {
            display: none !important
        }

        .d-xl-block {
            display: block !important
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
        -webkit-box-shadow: 0 0 30px rgba(115, 128, 157, .1);
        box-shadow: 0 0 30px rgba(115, 128, 157, .1);
        -webkit-transition: .2s ease-in;
        -o-transition: .2s ease-in;
        transition: .2s ease-in;
        background: #fff;
        position: fixed
    }

    .topbar.fixed-header .act-buttons .login {
        color: #546e7a;
        cursor: pointer
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

    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both
    }

    .menuBox .overlay {
        position: absolute;
        background-color: rgba(0, 0, 0, .7)
    }

    .menuBox .clse span,
    .menuBox .clse span:before,
    .menuBox .content {
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
    .page-title.image-title .page-title-wrap .current-page.active,
    ul.footer-bottom-social li a:focus,
    ul.footer-bottom-social li a:hover {
        color: #ff7600
    }

    .menuBox .content li i {
        margin-right: 5px;
        width: 20px;
        display: inline-block;
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
        font-weight: 500;
        letter-spacing: 1px;
        line-height: 1;
        padding: 10px 15px;
        text-transform: uppercase;
        z-index: 9;
        position: relative;
        border: 1px solid #9C3133;
        color: #9C3133 !important
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

    .btn-hover:hover::before {
        transform: scaleX(1)
    }

    .default-btn:hover {
        color: #fff !important
    }

    .booking-form .form-control,
    .widget-boxed .form-control,
    select.form-control:not([size]):not([multiple]) {
        height: 46px
    }

    .title h2 {
        font-size: 22px;
        display: inline-block;
        border-top: 1px solid #9C3133;
        border-bottom: 1px solid #9C3133;
        padding: 3px 10px
    }

    .loader span,
    .send span {
        display: block;
        letter-spacing: 1px
    }

    .proj-list-item img {
        height: 100%;
        object-fit: cover;
        width: 100%;
        object-position: center
    }

    .proj-list-item a {
        color: inherit
    }

    .proj-list-item .proj-dtls {
        height: 100%;
        box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important
    }

    .proj-list-item:hover .proj-dtls {
        background: #fff;
        box-shadow: 2px 2px 12px 1px rgba(0, 0, 0, .2) !important
    }

    .proj-list-item .proj-dtls h2 {
        font-size: 18px;
        font-weight: 700;
        line-height: 1;
        margin-bottom: 3px
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

        h2 {
            line-height: 26px;
            font-size: 24px
        }
    }

    body {
        background: #fff;
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

    .full-width,
    .topbar {
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
        box-shadow: inset 1px 1px 0 #aaa, inset 0 -1px 0 #aaa
    }

    ::-webkit-scrollbar-thumb:hover {
        background-color: #aaa;
        box-shadow: inset 1px 1px 0 #999, inset 0 -1px 0 #999
    }

    section {
        padding: 50px 0 20px
    }

    .gray {
        background: #f8f8f9
    }

    .loader,
    .send {
        background: #ffffffe6;
        left: 0;
        z-index: 1;
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        text-align: center
    }

    h1,
    h2,
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

    h4 {
        line-height: 26px;
        font-size: 21px
    }

    .loader {
        padding-top: 15%
    }

    .send {
        padding-top: 25%
    }

    .loader span {
        margin-top: -55px;
        color: #848282
    }

    .send span {
        margin-top: 15px;
        color: #77b43f;
        font-size: 15px;
        font-weight: 500
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
        -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, .1);
        box-shadow: 0 1px 6px rgba(0, 0, 0, .1);
        -webkit-transition: 0;
        -o-transition: 0;
        transition: 0;
        border-radius: .1rem
    }

    .btn:focus {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .btn-sm {
        padding: .25rem .5rem;
        font-size: 12px
    }

    .footer-widget,
    .header-nav-bar,
    .topbar {
        padding: 0
    }

    .btn-primary {
        -webkit-transition: .2s ease-in;
        -o-transition: .2s ease-in;
        transition: .2s ease-in
    }

    .btn-primary:hover {
        background: #ccc;
        border: 1px solid #ccc
    }

    .btn-primary:active,
    .btn-primary:focus {
        background: #345bcb
    }

    .btn-success:active,
    .btn-success:focus,
    .btn-success:hover {
        background: #9C3133
    }

    .btn-success {
        background: #9C3133;
        border: 1px solid #9C3133;
        color: #fff
    }

    .btn-success:hover {
        border: 1px solid #9C3133
    }

    .btn-primary:active:focus,
    .btn-primary:active:hover,
    .btn-primary:focus {
        background-color: #345bcb;
        border: 1px solid #345bcb
    }

    .btn-success:active:focus,
    .btn-success:active:hover,
    .btn-success:focus {
        background-color: #9C3133;
        border: 1px solid #9C3133
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

    .fixed-header .header.exchange-logo .sticky-logo,
    .header.exchange-logo .default-logo {
        display: none
    }

    .fixed-header .header.exchange-logo .default-logo {
        display: block;
        max-width: auto !important
    }

    .topbar {
        -webkit-transition: .2s ease-in;
        -o-transition: .2s ease-in;
        transition: .2s ease-in;
        position: absolute;
        z-index: 20
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

    .act-buttons .login,
    .act-buttons a.login {
        color: #fff;
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

    .card,
    .widget-boxed {
        background-color: #fff
    }

    .finding-overlay.op-70 {
        opacity: .7
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

    .page-title.image-title h1 {
        color: #fff;
        line-height: 1.2
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

    footer {
        background-position: top;
        background-size: cover !important
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

    .footer-widget ul li,
    h4.widget-title {
        margin-bottom: 10px;
        text-transform: uppercase
    }

    footer .contact p i,
    ul.footer-bottom-social li i {
        margin-right: 5px
    }

    h4.widget-title {
        font-weight: 500;
        font-size: 14px;
        color: #fff;
        letter-spacing: .5px
    }

    .footer-widget ul,
    ul.footer-bottom-social {
        margin: 0;
        padding: 0
    }

    .footer-widget ul li {
        list-style: none;
        display: inline-block;
        font-size: 11px;
        width: 50%;
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

        .my-lg-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important
        }

        .page-title h1 {
            font-size: 55px;
            line-height: 1.4
        }
    }

    @media(max-width: 767px) {
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