<template>
   <section class="main-slider offer-bnr">
            <div class="container">
                <h2>Offers &amp; Promotions</h2>
                <p>Avail Special Discounts &amp; Benefits</p>
            </div>
        </section>
</template>
<style scoped>


*, ::after, ::before {
    box-sizing: border-box
}

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    -ms-overflow-style: scrollbar;
    -webkit-tap-highlight-color: transparent
}

@-ms-viewport {
    width: device-width
}

article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {
    display: block
}

body {
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff
}

[tabindex="-1"]:focus {
    outline: 0 !important
}

hr {
    box-sizing: content-box;
    height: 0;
    overflow: visible
}

h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    margin-bottom: .5rem
}

p {
    margin-top: 0;
    margin-bottom: 1rem
}

abbr[data-original-title], abbr[title] {
    text-decoration: underline;
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted;
    cursor: help;
    border-bottom: 0
}

address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: inherit
}

dl, ol, ul {
    margin-top: 0;
    margin-bottom: 1rem
}

ol ol, ol ul, ul ol, ul ul {
    margin-bottom: 0
}

dt {
    font-weight: 700
}

dd {
    margin-bottom: .5rem;
    margin-left: 0
}

blockquote {
    margin: 0 0 1rem
}

dfn {
    font-style: italic
}

b, strong {
    font-weight: bolder
}

small {
    font-size: 80%
}

sub, sup {
    position: relative;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline
}

sub {
    bottom: -.25em
}

sup {
    top: -.5em
}

a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent;
    -webkit-text-decoration-skip: objects
}

a:hover {
    color: #0056b3;
    text-decoration: underline
}

a:not([href]):not([tabindex]) {
    color: inherit;
    text-decoration: none
}

a:not([href]):not([tabindex]):focus, a:not([href]):not([tabindex]):hover {
    color: inherit;
    text-decoration: none
}

a:not([href]):not([tabindex]):focus {
    outline: 0
}

code, kbd, pre, samp {
    font-family: monospace,monospace;
    font-size: 1em
}

pre {
    margin-top: 0;
    margin-bottom: 1rem;
    overflow: auto;
    -ms-overflow-style: scrollbar
}

figure {
    margin: 0 0 1rem
}

img {
    vertical-align: middle;
    border-style: none
}

svg:not(:root) {
    overflow: hidden
}

table {
    border-collapse: collapse
}

caption {
    padding-top: .75rem;
    padding-bottom: .75rem;
    color: #6c757d;
    text-align: left;
    caption-side: bottom
}

th {
    text-align: inherit
}

label {
    display: inline-block;
    margin-bottom: .5rem
}

button {
    border-radius: 0
}

button:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color
}

button, input, optgroup, select, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit
}

button, input {
    overflow: visible
}

button, select {
    text-transform: none
}

[type=reset], [type=submit], button, html [type=button] {
    -webkit-appearance: button
}

[type=button]::-moz-focus-inner, [type=reset]::-moz-focus-inner, [type=submit]::-moz-focus-inner, button::-moz-focus-inner {
    padding: 0;
    border-style: none
}

input[type=checkbox], input[type=radio] {
    box-sizing: border-box;
    padding: 0
}

input[type=date], input[type=datetime-local], input[type=month], input[type=time] {
    -webkit-appearance: listbox
}

textarea {
    overflow: auto;
    resize: vertical
}

fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0
}

legend {
    display: block;
    width: 100%;
    max-width: 100%;
    padding: 0;
    margin-bottom: .5rem;
    font-size: 1.5rem;
    line-height: inherit;
    color: inherit;
    white-space: normal
}

progress {
    vertical-align: baseline
}

[type=number]::-webkit-inner-spin-button, [type=number]::-webkit-outer-spin-button {
    height: auto
}

[type=search] {
    outline-offset: -2px;
    -webkit-appearance: none
}

[type=search]::-webkit-search-cancel-button, [type=search]::-webkit-search-decoration {
    -webkit-appearance: none
}

::-webkit-file-upload-button {
    font: inherit;
    -webkit-appearance: button
}

output {
    display: inline-block
}

summary {
    display: list-item;
    cursor: pointer
}

template {
    display: none
}

[hidden] {
    display: none !important
}

.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-bottom: .5rem;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.2;
    color: inherit
}

.h1, h1 {
    font-size: 2.5rem
}

.h2, h2 {
    font-size: 2rem
}

.h3, h3 {
    font-size: 1.75rem
}

.h4, h4 {
    font-size: 1.5rem
}

.h5, h5 {
    font-size: 1.25rem
}

.h6, h6 {
    font-size: 1rem
}

.lead {
    font-size: 1.25rem;
    font-weight: 300
}

.display-1 {
    font-size: 6rem;
    font-weight: 300;
    line-height: 1.2
}

.display-2 {
    font-size: 5.5rem;
    font-weight: 300;
    line-height: 1.2
}

.display-3 {
    font-size: 4.5rem;
    font-weight: 300;
    line-height: 1.2
}

.display-4 {
    font-size: 3.5rem;
    font-weight: 300;
    line-height: 1.2
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1)
}

.small, small {
    font-size: 80%;
    font-weight: 400
}

.mark, mark {
    padding: .2em;
    background-color: #fcf8e3
}

.list-unstyled {
    padding-left: 0;
    list-style: none
}

.list-inline {
    padding-left: 0;
    list-style: none
}

.list-inline-item {
    display: inline-block
}

.list-inline-item:not(:last-child) {
    margin-right: .5rem
}

.initialism {
    font-size: 90%;
    text-transform: uppercase
}

.blockquote {
    margin-bottom: 1rem;
    font-size: 1.25rem
}

.blockquote-footer {
    display: block;
    font-size: 80%;
    color: #6c757d
}

.blockquote-footer::before {
    content: "\2014 \00A0"
}

.img-fluid {
    max-width: 100%;
    height: auto
}

.img-thumbnail {
    padding: .25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    max-width: 100%;
    height: auto
}

.figure {
    display: inline-block
}

.figure-img {
    margin-bottom: .5rem;
    line-height: 1
}

.figure-caption {
    font-size: 90%;
    color: #6c757d
}

code, kbd, pre, samp {
    font-family: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace
}

code {
    font-size: 87.5%;
    color: #e83e8c;
    word-break: break-word
}

a > code {
    color: inherit
}

kbd {
    padding: .2rem .4rem;
    font-size: 87.5%;
    color: #fff;
    background-color: #212529;
    border-radius: .2rem
}

kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: 700
}

pre {
    display: block;
    font-size: 87.5%;
    color: #212529
}

pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal
}

.pre-scrollable {
    max-height: 340px;
    overflow-y: scroll
}

.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto
}

@media (min-width: 576px) {
    .container {
        max-width: 540px
    }
}

@media (min-width: 768px) {
    .container {
        max-width: 720px
    }
}

@media (min-width: 992px) {
    .container {
        max-width: 960px
    }
}

@media (min-width: 1200px) {
    .container {
        max-width: 1140px
    }
}

.container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto
}

.row {
    display: -webkit-box;
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

.no-gutters > .col, .no-gutters > [class*=col-] {
    padding-right: 0;
    padding-left: 0
}

.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px
}

.col {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%
}

.col-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: none
}

.col-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%
}

.col-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%
}

.col-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%
}

.col-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%
}

.col-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%
}

.col-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%
}

.col-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%
}

.col-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%
}

.col-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%
}

.col-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%
}

.col-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%
}

.col-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%
}

.order-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1
}

.order-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13
}

.order-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0
}

.order-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1
}

.order-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2
}

.order-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3
}

.order-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4
}

.order-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5
}

.order-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6
}

.order-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7
}

.order-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8
}

.order-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9
}

.order-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10
}

.order-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11
}

.order-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12
}

.offset-1 {
    margin-left: 8.333333%
}

.offset-2 {
    margin-left: 16.666667%
}

.offset-3 {
    margin-left: 25%
}

.offset-4 {
    margin-left: 33.333333%
}

.offset-5 {
    margin-left: 41.666667%
}

.offset-6 {
    margin-left: 50%
}

.offset-7 {
    margin-left: 58.333333%
}

.offset-8 {
    margin-left: 66.666667%
}

.offset-9 {
    margin-left: 75%
}

.offset-10 {
    margin-left: 83.333333%
}

.offset-11 {
    margin-left: 91.666667%
}

@media (min-width: 576px) {
    .col-sm {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
    }

    .col-sm-auto {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: none
    }

    .col-sm-1 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
    }

    .col-sm-2 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }

    .col-sm-3 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-sm-4 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }

    .col-sm-5 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
    }

    .col-sm-6 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-sm-7 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
    }

    .col-sm-8 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
    }

    .col-sm-9 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-sm-10 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
    }

    .col-sm-11 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
    }

    .col-sm-12 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-sm-first {
        -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
        order: -1
    }

    .order-sm-last {
        -webkit-box-ordinal-group: 14;
        -ms-flex-order: 13;
        order: 13
    }

    .order-sm-0 {
        -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
        order: 0
    }

    .order-sm-1 {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1
    }

    .order-sm-2 {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2
    }

    .order-sm-3 {
        -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3
    }

    .order-sm-4 {
        -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
        order: 4
    }

    .order-sm-5 {
        -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
        order: 5
    }

    .order-sm-6 {
        -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
        order: 6
    }

    .order-sm-7 {
        -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
        order: 7
    }

    .order-sm-8 {
        -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
        order: 8
    }

    .order-sm-9 {
        -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
        order: 9
    }

    .order-sm-10 {
        -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
        order: 10
    }

    .order-sm-11 {
        -webkit-box-ordinal-group: 12;
        -ms-flex-order: 11;
        order: 11
    }

    .order-sm-12 {
        -webkit-box-ordinal-group: 13;
        -ms-flex-order: 12;
        order: 12
    }

    .offset-sm-0 {
        margin-left: 0
    }

    .offset-sm-1 {
        margin-left: 8.333333%
    }

    .offset-sm-2 {
        margin-left: 16.666667%
    }

    .offset-sm-3 {
        margin-left: 25%
    }

    .offset-sm-4 {
        margin-left: 33.333333%
    }

    .offset-sm-5 {
        margin-left: 41.666667%
    }

    .offset-sm-6 {
        margin-left: 50%
    }

    .offset-sm-7 {
        margin-left: 58.333333%
    }

    .offset-sm-8 {
        margin-left: 66.666667%
    }

    .offset-sm-9 {
        margin-left: 75%
    }

    .offset-sm-10 {
        margin-left: 83.333333%
    }

    .offset-sm-11 {
        margin-left: 91.666667%
    }
}

@media (min-width: 768px) {
    .col-md {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
    }

    .col-md-auto {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: none
    }

    .col-md-1 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
    }

    .col-md-2 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }

    .col-md-3 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-md-4 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }

    .col-md-5 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
    }

    .col-md-6 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-md-7 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
    }

    .col-md-8 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
    }

    .col-md-9 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-md-10 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
    }

    .col-md-11 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
    }

    .col-md-12 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-md-first {
        -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
        order: -1
    }

    .order-md-last {
        -webkit-box-ordinal-group: 14;
        -ms-flex-order: 13;
        order: 13
    }

    .order-md-0 {
        -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
        order: 0
    }

    .order-md-1 {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1
    }

    .order-md-2 {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2
    }

    .order-md-3 {
        -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3
    }

    .order-md-4 {
        -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
        order: 4
    }

    .order-md-5 {
        -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
        order: 5
    }

    .order-md-6 {
        -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
        order: 6
    }

    .order-md-7 {
        -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
        order: 7
    }

    .order-md-8 {
        -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
        order: 8
    }

    .order-md-9 {
        -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
        order: 9
    }

    .order-md-10 {
        -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
        order: 10
    }

    .order-md-11 {
        -webkit-box-ordinal-group: 12;
        -ms-flex-order: 11;
        order: 11
    }

    .order-md-12 {
        -webkit-box-ordinal-group: 13;
        -ms-flex-order: 12;
        order: 12
    }

    .offset-md-0 {
        margin-left: 0
    }

    .offset-md-1 {
        margin-left: 8.333333%
    }

    .offset-md-2 {
        margin-left: 16.666667%
    }

    .offset-md-3 {
        margin-left: 25%
    }

    .offset-md-4 {
        margin-left: 33.333333%
    }

    .offset-md-5 {
        margin-left: 41.666667%
    }

    .offset-md-6 {
        margin-left: 50%
    }

    .offset-md-7 {
        margin-left: 58.333333%
    }

    .offset-md-8 {
        margin-left: 66.666667%
    }

    .offset-md-9 {
        margin-left: 75%
    }

    .offset-md-10 {
        margin-left: 83.333333%
    }

    .offset-md-11 {
        margin-left: 91.666667%
    }
}

@media (min-width: 992px) {
    .col-lg {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
    }

    .col-lg-auto {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: none
    }

    .col-lg-1 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
    }

    .col-lg-2 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }

    .col-lg-3 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-lg-4 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }

    .col-lg-5 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
    }

    .col-lg-6 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-lg-7 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
    }

    .col-lg-8 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
    }

    .col-lg-9 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-lg-10 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
    }

    .col-lg-11 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
    }

    .col-lg-12 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-lg-first {
        -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
        order: -1
    }

    .order-lg-last {
        -webkit-box-ordinal-group: 14;
        -ms-flex-order: 13;
        order: 13
    }

    .order-lg-0 {
        -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
        order: 0
    }

    .order-lg-1 {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1
    }

    .order-lg-2 {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2
    }

    .order-lg-3 {
        -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3
    }

    .order-lg-4 {
        -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
        order: 4
    }

    .order-lg-5 {
        -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
        order: 5
    }

    .order-lg-6 {
        -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
        order: 6
    }

    .order-lg-7 {
        -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
        order: 7
    }

    .order-lg-8 {
        -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
        order: 8
    }

    .order-lg-9 {
        -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
        order: 9
    }

    .order-lg-10 {
        -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
        order: 10
    }

    .order-lg-11 {
        -webkit-box-ordinal-group: 12;
        -ms-flex-order: 11;
        order: 11
    }

    .order-lg-12 {
        -webkit-box-ordinal-group: 13;
        -ms-flex-order: 12;
        order: 12
    }

    .offset-lg-0 {
        margin-left: 0
    }

    .offset-lg-1 {
        margin-left: 8.333333%
    }

    .offset-lg-2 {
        margin-left: 16.666667%
    }

    .offset-lg-3 {
        margin-left: 25%
    }

    .offset-lg-4 {
        margin-left: 33.333333%
    }

    .offset-lg-5 {
        margin-left: 41.666667%
    }

    .offset-lg-6 {
        margin-left: 50%
    }

    .offset-lg-7 {
        margin-left: 58.333333%
    }

    .offset-lg-8 {
        margin-left: 66.666667%
    }

    .offset-lg-9 {
        margin-left: 75%
    }

    .offset-lg-10 {
        margin-left: 83.333333%
    }

    .offset-lg-11 {
        margin-left: 91.666667%
    }
}

@media (min-width: 1200px) {
    .col-xl {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
    }

    .col-xl-auto {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: none
    }

    .col-xl-1 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
    }

    .col-xl-2 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }

    .col-xl-3 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-xl-4 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }

    .col-xl-5 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
    }

    .col-xl-6 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-xl-7 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
    }

    .col-xl-8 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
    }

    .col-xl-9 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-xl-10 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
    }

    .col-xl-11 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
    }

    .col-xl-12 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-xl-first {
        -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
        order: -1
    }

    .order-xl-last {
        -webkit-box-ordinal-group: 14;
        -ms-flex-order: 13;
        order: 13
    }

    .order-xl-0 {
        -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
        order: 0
    }

    .order-xl-1 {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1
    }

    .order-xl-2 {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2
    }

    .order-xl-3 {
        -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3
    }

    .order-xl-4 {
        -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
        order: 4
    }

    .order-xl-5 {
        -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
        order: 5
    }

    .order-xl-6 {
        -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
        order: 6
    }

    .order-xl-7 {
        -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
        order: 7
    }

    .order-xl-8 {
        -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
        order: 8
    }

    .order-xl-9 {
        -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
        order: 9
    }

    .order-xl-10 {
        -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
        order: 10
    }

    .order-xl-11 {
        -webkit-box-ordinal-group: 12;
        -ms-flex-order: 11;
        order: 11
    }

    .order-xl-12 {
        -webkit-box-ordinal-group: 13;
        -ms-flex-order: 12;
        order: 12
    }

    .offset-xl-0 {
        margin-left: 0
    }

    .offset-xl-1 {
        margin-left: 8.333333%
    }

    .offset-xl-2 {
        margin-left: 16.666667%
    }

    .offset-xl-3 {
        margin-left: 25%
    }

    .offset-xl-4 {
        margin-left: 33.333333%
    }

    .offset-xl-5 {
        margin-left: 41.666667%
    }

    .offset-xl-6 {
        margin-left: 50%
    }

    .offset-xl-7 {
        margin-left: 58.333333%
    }

    .offset-xl-8 {
        margin-left: 66.666667%
    }

    .offset-xl-9 {
        margin-left: 75%
    }

    .offset-xl-10 {
        margin-left: 83.333333%
    }

    .offset-xl-11 {
        margin-left: 91.666667%
    }
}

.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent
}

.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6
}

.table tbody + tbody {
    border-top: 2px solid #dee2e6
}

.table .table {
    background-color: #fff
}

.table-sm td, .table-sm th {
    padding: .3rem
}

.table-bordered {
    border: 1px solid #dee2e6
}

.table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6
}

.table-bordered thead td, .table-bordered thead th {
    border-bottom-width: 2px
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0,0,0,.05)
}

.table-hover tbody tr:hover {
    background-color: rgba(0,0,0,.075)
}

.table-primary, .table-primary > td, .table-primary > th {
    background-color: #b8daff
}

.table-hover .table-primary:hover {
    background-color: #9fcdff
}

.table-hover .table-primary:hover > td, .table-hover .table-primary:hover > th {
    background-color: #9fcdff
}

.table-secondary, .table-secondary > td, .table-secondary > th {
    background-color: #d6d8db
}

.table-hover .table-secondary:hover {
    background-color: #c8cbcf
}

.table-hover .table-secondary:hover > td, .table-hover .table-secondary:hover > th {
    background-color: #c8cbcf
}

.table-success, .table-success > td, .table-success > th {
    background-color: #c3e6cb
}

.table-hover .table-success:hover {
    background-color: #b1dfbb
}

.table-hover .table-success:hover > td, .table-hover .table-success:hover > th {
    background-color: #b1dfbb
}

.table-info, .table-info > td, .table-info > th {
    background-color: #bee5eb
}

.table-hover .table-info:hover {
    background-color: #abdde5
}

.table-hover .table-info:hover > td, .table-hover .table-info:hover > th {
    background-color: #abdde5
}

.table-warning, .table-warning > td, .table-warning > th {
    background-color: #ffeeba
}

.table-hover .table-warning:hover {
    background-color: #ffe8a1
}

.table-hover .table-warning:hover > td, .table-hover .table-warning:hover > th {
    background-color: #ffe8a1
}

.table-danger, .table-danger > td, .table-danger > th {
    background-color: #f5c6cb
}

.table-hover .table-danger:hover {
    background-color: #f1b0b7
}

.table-hover .table-danger:hover > td, .table-hover .table-danger:hover > th {
    background-color: #f1b0b7
}

.table-light, .table-light > td, .table-light > th {
    background-color: #fdfdfe
}

.table-hover .table-light:hover {
    background-color: #ececf6
}

.table-hover .table-light:hover > td, .table-hover .table-light:hover > th {
    background-color: #ececf6
}

.table-dark, .table-dark > td, .table-dark > th {
    background-color: #c6c8ca
}

.table-hover .table-dark:hover {
    background-color: #b9bbbe
}

.table-hover .table-dark:hover > td, .table-hover .table-dark:hover > th {
    background-color: #b9bbbe
}

.table-active, .table-active > td, .table-active > th {
    background-color: rgba(0,0,0,.075)
}

.table-hover .table-active:hover {
    background-color: rgba(0,0,0,.075)
}

.table-hover .table-active:hover > td, .table-hover .table-active:hover > th {
    background-color: rgba(0,0,0,.075)
}

.table .thead-dark th {
    color: #fff;
    background-color: #212529;
    border-color: #32383e
}

.table .thead-light th {
    color: #495057;
    background-color: #e9ecef;
    border-color: #dee2e6
}

.table-dark {
    color: #fff;
    background-color: #212529
}

.table-dark td, .table-dark th, .table-dark thead th {
    border-color: #32383e
}

.table-dark.table-bordered {
    border: 0
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255,255,255,.05)
}

.table-dark.table-hover tbody tr:hover {
    background-color: rgba(255,255,255,.075)
}

@media (max-width: 575.98px) {
    .table-responsive-sm {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar
    }

    .table-responsive-sm > .table-bordered {
        border: 0
    }
}

@media (max-width: 767.98px) {
    .table-responsive-md {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar
    }

    .table-responsive-md > .table-bordered {
        border: 0
    }
}

@media (max-width: 991.98px) {
    .table-responsive-lg {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar
    }

    .table-responsive-lg > .table-bordered {
        border: 0
    }
}

@media (max-width: 1199.98px) {
    .table-responsive-xl {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar
    }

    .table-responsive-xl > .table-bordered {
        border: 0
    }
}

.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar
}

.table-responsive > .table-bordered {
    border: 0
}

.form-control {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
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
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(0,123,255,.25)
}

.form-control::-webkit-input-placeholder {
    color: #6c757d;
    opacity: 1
}

.form-control::-moz-placeholder {
    color: #6c757d;
    opacity: 1
}

.form-control:-ms-input-placeholder {
    color: #6c757d;
    opacity: 1
}

.form-control::-ms-input-placeholder {
    color: #6c757d;
    opacity: 1
}

.form-control::placeholder {
    color: #6c757d;
    opacity: 1
}

.form-control:disabled, .form-control[readonly] {
    background-color: #e9ecef;
    opacity: 1
}

select.form-control:not([size]):not([multiple]) {
    height: calc(2.25rem + 2px)
}

select.form-control:focus::-ms-value {
    color: #495057;
    background-color: #fff
}

.form-control-file, .form-control-range {
    display: block;
    width: 100%
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

.form-control-plaintext {
    display: block;
    width: 100%;
    padding-top: .375rem;
    padding-bottom: .375rem;
    margin-bottom: 0;
    line-height: 1.5;
    background-color: transparent;
    border: solid transparent;
    border-width: 1px 0
}

.form-control-plaintext.form-control-lg, .form-control-plaintext.form-control-sm, .input-group-lg > .form-control-plaintext.form-control, .input-group-lg > .input-group-append > .form-control-plaintext.btn, .input-group-lg > .input-group-append > .form-control-plaintext.input-group-text, .input-group-lg > .input-group-prepend > .form-control-plaintext.btn, .input-group-lg > .input-group-prepend > .form-control-plaintext.input-group-text, .input-group-sm > .form-control-plaintext.form-control, .input-group-sm > .input-group-append > .form-control-plaintext.btn, .input-group-sm > .input-group-append > .form-control-plaintext.input-group-text, .input-group-sm > .input-group-prepend > .form-control-plaintext.btn, .input-group-sm > .input-group-prepend > .form-control-plaintext.input-group-text {
    padding-right: 0;
    padding-left: 0
}

.form-control-sm, .input-group-sm > .form-control, .input-group-sm > .input-group-append > .btn, .input-group-sm > .input-group-append > .input-group-text, .input-group-sm > .input-group-prepend > .btn, .input-group-sm > .input-group-prepend > .input-group-text {
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem
}

.input-group-sm > .input-group-append > select.btn:not([size]):not([multiple]), .input-group-sm > .input-group-append > select.input-group-text:not([size]):not([multiple]), .input-group-sm > .input-group-prepend > select.btn:not([size]):not([multiple]), .input-group-sm > .input-group-prepend > select.input-group-text:not([size]):not([multiple]), .input-group-sm > select.form-control:not([size]):not([multiple]), select.form-control-sm:not([size]):not([multiple]) {
    height: calc(1.8125rem + 2px)
}

.form-control-lg, .input-group-lg > .form-control, .input-group-lg > .input-group-append > .btn, .input-group-lg > .input-group-append > .input-group-text, .input-group-lg > .input-group-prepend > .btn, .input-group-lg > .input-group-prepend > .input-group-text {
    padding: .5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: .3rem
}

.input-group-lg > .input-group-append > select.btn:not([size]):not([multiple]), .input-group-lg > .input-group-append > select.input-group-text:not([size]):not([multiple]), .input-group-lg > .input-group-prepend > select.btn:not([size]):not([multiple]), .input-group-lg > .input-group-prepend > select.input-group-text:not([size]):not([multiple]), .input-group-lg > select.form-control:not([size]):not([multiple]), select.form-control-lg:not([size]):not([multiple]) {
    height: calc(2.875rem + 2px)
}

.form-group {
    margin-bottom: 1rem
}

.form-text {
    display: block;
    margin-top: .25rem
}

.form-row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px
}

.form-row > .col, .form-row > [class*=col-] {
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

.form-check-input:disabled ~ .form-check-label {
    color: #6c757d
}

.form-check-label {
    margin-bottom: 0
}

.form-check-inline {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding-left: 0;
    margin-right: .75rem
}

.form-check-inline .form-check-input {
    position: static;
    margin-top: 0;
    margin-right: .3125rem;
    margin-left: 0
}

.valid-feedback {
    display: none;
    width: 100%;
    margin-top: .25rem;
    font-size: 80%;
    color: #28a745
}

.valid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: .5rem;
    margin-top: .1rem;
    font-size: .875rem;
    line-height: 1;
    color: #fff;
    background-color: rgba(40,167,69,.8);
    border-radius: .2rem
}

.custom-select.is-valid, .form-control.is-valid, .was-validated .custom-select:valid, .was-validated .form-control:valid {
    border-color: #28a745
}

.custom-select.is-valid:focus, .form-control.is-valid:focus, .was-validated .custom-select:valid:focus, .was-validated .form-control:valid:focus {
    border-color: #28a745;
    box-shadow: 0 0 0 .2rem rgba(40,167,69,.25)
}

.custom-select.is-valid ~ .valid-feedback, .custom-select.is-valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback, .form-control.is-valid ~ .valid-tooltip, .was-validated .custom-select:valid ~ .valid-feedback, .was-validated .custom-select:valid ~ .valid-tooltip, .was-validated .form-control:valid ~ .valid-feedback, .was-validated .form-control:valid ~ .valid-tooltip {
    display: block
}

.form-check-input.is-valid ~ .form-check-label, .was-validated .form-check-input:valid ~ .form-check-label {
    color: #28a745
}

.form-check-input.is-valid ~ .valid-feedback, .form-check-input.is-valid ~ .valid-tooltip, .was-validated .form-check-input:valid ~ .valid-feedback, .was-validated .form-check-input:valid ~ .valid-tooltip {
    display: block
}

.custom-control-input.is-valid ~ .custom-control-label, .was-validated .custom-control-input:valid ~ .custom-control-label {
    color: #28a745
}

.custom-control-input.is-valid ~ .custom-control-label::before, .was-validated .custom-control-input:valid ~ .custom-control-label::before {
    background-color: #71dd8a
}

.custom-control-input.is-valid ~ .valid-feedback, .custom-control-input.is-valid ~ .valid-tooltip, .was-validated .custom-control-input:valid ~ .valid-feedback, .was-validated .custom-control-input:valid ~ .valid-tooltip {
    display: block
}

.custom-control-input.is-valid:checked ~ .custom-control-label::before, .was-validated .custom-control-input:valid:checked ~ .custom-control-label::before {
    background-color: #34ce57
}

.custom-control-input.is-valid:focus ~ .custom-control-label::before, .was-validated .custom-control-input:valid:focus ~ .custom-control-label::before {
    box-shadow: 0 0 0 1px #fff,0 0 0 .2rem rgba(40,167,69,.25)
}

.custom-file-input.is-valid ~ .custom-file-label, .was-validated .custom-file-input:valid ~ .custom-file-label {
    border-color: #28a745
}

.custom-file-input.is-valid ~ .custom-file-label::before, .was-validated .custom-file-input:valid ~ .custom-file-label::before {
    border-color: inherit
}

.custom-file-input.is-valid ~ .valid-feedback, .custom-file-input.is-valid ~ .valid-tooltip, .was-validated .custom-file-input:valid ~ .valid-feedback, .was-validated .custom-file-input:valid ~ .valid-tooltip {
    display: block
}

.custom-file-input.is-valid:focus ~ .custom-file-label, .was-validated .custom-file-input:valid:focus ~ .custom-file-label {
    box-shadow: 0 0 0 .2rem rgba(40,167,69,.25)
}

.invalid-feedback {
    display: none;
    width: 100%;
    margin-top: .25rem;
    font-size: 80%;
    color: #dc3545
}

.invalid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: .5rem;
    margin-top: .1rem;
    font-size: .875rem;
    line-height: 1;
    color: #fff;
    background-color: rgba(220,53,69,.8);
    border-radius: .2rem
}

.custom-select.is-invalid, .form-control.is-invalid, .was-validated .custom-select:invalid, .was-validated .form-control:invalid {
    border-color: #dc3545
}

.custom-select.is-invalid:focus, .form-control.is-invalid:focus, .was-validated .custom-select:invalid:focus, .was-validated .form-control:invalid:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 .2rem rgba(220,53,69,.25)
}

.custom-select.is-invalid ~ .invalid-feedback, .custom-select.is-invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback, .form-control.is-invalid ~ .invalid-tooltip, .was-validated .custom-select:invalid ~ .invalid-feedback, .was-validated .custom-select:invalid ~ .invalid-tooltip, .was-validated .form-control:invalid ~ .invalid-feedback, .was-validated .form-control:invalid ~ .invalid-tooltip {
    display: block
}

.form-check-input.is-invalid ~ .form-check-label, .was-validated .form-check-input:invalid ~ .form-check-label {
    color: #dc3545
}

.form-check-input.is-invalid ~ .invalid-feedback, .form-check-input.is-invalid ~ .invalid-tooltip, .was-validated .form-check-input:invalid ~ .invalid-feedback, .was-validated .form-check-input:invalid ~ .invalid-tooltip {
    display: block
}

.custom-control-input.is-invalid ~ .custom-control-label, .was-validated .custom-control-input:invalid ~ .custom-control-label {
    color: #dc3545
}

.custom-control-input.is-invalid ~ .custom-control-label::before, .was-validated .custom-control-input:invalid ~ .custom-control-label::before {
    background-color: #efa2a9
}

.custom-control-input.is-invalid ~ .invalid-feedback, .custom-control-input.is-invalid ~ .invalid-tooltip, .was-validated .custom-control-input:invalid ~ .invalid-feedback, .was-validated .custom-control-input:invalid ~ .invalid-tooltip {
    display: block
}

.custom-control-input.is-invalid:checked ~ .custom-control-label::before, .was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before {
    background-color: #e4606d
}

.custom-control-input.is-invalid:focus ~ .custom-control-label::before, .was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before {
    box-shadow: 0 0 0 1px #fff,0 0 0 .2rem rgba(220,53,69,.25)
}

.custom-file-input.is-invalid ~ .custom-file-label, .was-validated .custom-file-input:invalid ~ .custom-file-label {
    border-color: #dc3545
}

.custom-file-input.is-invalid ~ .custom-file-label::before, .was-validated .custom-file-input:invalid ~ .custom-file-label::before {
    border-color: inherit
}

.custom-file-input.is-invalid ~ .invalid-feedback, .custom-file-input.is-invalid ~ .invalid-tooltip, .was-validated .custom-file-input:invalid ~ .invalid-feedback, .was-validated .custom-file-input:invalid ~ .invalid-tooltip {
    display: block
}

.custom-file-input.is-invalid:focus ~ .custom-file-label, .was-validated .custom-file-input:invalid:focus ~ .custom-file-label {
    box-shadow: 0 0 0 .2rem rgba(220,53,69,.25)
}

.form-inline {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.form-inline .form-check {
    width: 100%
}

@media (min-width: 576px) {
    .form-inline label {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-bottom: 0
    }

    .form-inline .form-group {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin-bottom: 0
    }

    .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle
    }

    .form-inline .form-control-plaintext {
        display: inline-block
    }

    .form-inline .input-group {
        width: auto
    }

    .form-inline .form-check {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: auto;
        padding-left: 0
    }

    .form-inline .form-check-input {
        position: relative;
        margin-top: 0;
        margin-right: .25rem;
        margin-left: 0
    }

    .form-inline .custom-control {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .form-inline .custom-control-label {
        margin-bottom: 0
    }
}

.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out
}

.btn:focus, .btn:hover {
    text-decoration: none
}

.btn.focus, .btn:focus {
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(0,123,255,.25)
}

.btn.disabled, .btn:disabled {
    opacity: .65
}

.btn:not(:disabled):not(.disabled) {
    cursor: pointer
}

.btn:not(:disabled):not(.disabled).active, .btn:not(:disabled):not(.disabled):active {
    background-image: none
}

a.btn.disabled, fieldset:disabled a.btn {
    pointer-events: none
}

.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.btn-primary:hover {
    color: #fff;
    background-color: #0069d9;
    border-color: #0062cc
}

.btn-primary.focus, .btn-primary:focus {
    box-shadow: 0 0 0 .2rem rgba(0,123,255,.5)
}

.btn-primary.disabled, .btn-primary:disabled {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #0062cc;
    border-color: #005cbf
}

.btn-primary:not(:disabled):not(.disabled).active:focus, .btn-primary:not(:disabled):not(.disabled):active:focus, .show > .btn-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(0,123,255,.5)
}

.btn-secondary {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d
}

.btn-secondary:hover {
    color: #fff;
    background-color: #5a6268;
    border-color: #545b62
}

.btn-secondary.focus, .btn-secondary:focus {
    box-shadow: 0 0 0 .2rem rgba(108,117,125,.5)
}

.btn-secondary.disabled, .btn-secondary:disabled {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d
}

.btn-secondary:not(:disabled):not(.disabled).active, .btn-secondary:not(:disabled):not(.disabled):active, .show > .btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #545b62;
    border-color: #4e555b
}

.btn-secondary:not(:disabled):not(.disabled).active:focus, .btn-secondary:not(:disabled):not(.disabled):active:focus, .show > .btn-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(108,117,125,.5)
}

.btn-success {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-success:hover {
    color: #fff;
    background-color: #218838;
    border-color: #1e7e34
}

.btn-success.focus, .btn-success:focus {
    box-shadow: 0 0 0 .2rem rgba(40,167,69,.5)
}

.btn-success.disabled, .btn-success:disabled {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-success:not(:disabled):not(.disabled).active, .btn-success:not(:disabled):not(.disabled):active, .show > .btn-success.dropdown-toggle {
    color: #fff;
    background-color: #1e7e34;
    border-color: #1c7430
}

.btn-success:not(:disabled):not(.disabled).active:focus, .btn-success:not(:disabled):not(.disabled):active:focus, .show > .btn-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(40,167,69,.5)
}

.btn-info {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-info:hover {
    color: #fff;
    background-color: #138496;
    border-color: #117a8b
}

.btn-info.focus, .btn-info:focus {
    box-shadow: 0 0 0 .2rem rgba(23,162,184,.5)
}

.btn-info.disabled, .btn-info:disabled {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-info:not(:disabled):not(.disabled).active, .btn-info:not(:disabled):not(.disabled):active, .show > .btn-info.dropdown-toggle {
    color: #fff;
    background-color: #117a8b;
    border-color: #10707f
}

.btn-info:not(:disabled):not(.disabled).active:focus, .btn-info:not(:disabled):not(.disabled):active:focus, .show > .btn-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(23,162,184,.5)
}

.btn-warning {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-warning:hover {
    color: #212529;
    background-color: #e0a800;
    border-color: #d39e00
}

.btn-warning.focus, .btn-warning:focus {
    box-shadow: 0 0 0 .2rem rgba(255,193,7,.5)
}

.btn-warning.disabled, .btn-warning:disabled {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-warning:not(:disabled):not(.disabled).active, .btn-warning:not(:disabled):not(.disabled):active, .show > .btn-warning.dropdown-toggle {
    color: #212529;
    background-color: #d39e00;
    border-color: #c69500
}

.btn-warning:not(:disabled):not(.disabled).active:focus, .btn-warning:not(:disabled):not(.disabled):active:focus, .show > .btn-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(255,193,7,.5)
}

.btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-danger:hover {
    color: #fff;
    background-color: #c82333;
    border-color: #bd2130
}

.btn-danger.focus, .btn-danger:focus {
    box-shadow: 0 0 0 .2rem rgba(220,53,69,.5)
}

.btn-danger.disabled, .btn-danger:disabled {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-danger:not(:disabled):not(.disabled).active, .btn-danger:not(:disabled):not(.disabled):active, .show > .btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #bd2130;
    border-color: #b21f2d
}

.btn-danger:not(:disabled):not(.disabled).active:focus, .btn-danger:not(:disabled):not(.disabled):active:focus, .show > .btn-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(220,53,69,.5)
}

.btn-light {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-light:hover {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5
}

.btn-light.focus, .btn-light:focus {
    box-shadow: 0 0 0 .2rem rgba(248,249,250,.5)
}

.btn-light.disabled, .btn-light:disabled {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-light:not(:disabled):not(.disabled).active, .btn-light:not(:disabled):not(.disabled):active, .show > .btn-light.dropdown-toggle {
    color: #212529;
    background-color: #dae0e5;
    border-color: #d3d9df
}

.btn-light:not(:disabled):not(.disabled).active:focus, .btn-light:not(:disabled):not(.disabled):active:focus, .show > .btn-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(248,249,250,.5)
}

.btn-dark {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-dark:hover {
    color: #fff;
    background-color: #23272b;
    border-color: #1d2124
}

.btn-dark.focus, .btn-dark:focus {
    box-shadow: 0 0 0 .2rem rgba(52,58,64,.5)
}

.btn-dark.disabled, .btn-dark:disabled {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-dark:not(:disabled):not(.disabled).active, .btn-dark:not(:disabled):not(.disabled):active, .show > .btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #1d2124;
    border-color: #171a1d
}

.btn-dark:not(:disabled):not(.disabled).active:focus, .btn-dark:not(:disabled):not(.disabled):active:focus, .show > .btn-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(52,58,64,.5)
}

.btn-outline-primary {
    color: #007bff;
    background-color: transparent;
    background-image: none;
    border-color: #007bff
}

.btn-outline-primary:hover {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.btn-outline-primary.focus, .btn-outline-primary:focus {
    box-shadow: 0 0 0 .2rem rgba(0,123,255,.5)
}

.btn-outline-primary.disabled, .btn-outline-primary:disabled {
    color: #007bff;
    background-color: transparent
}

.btn-outline-primary:not(:disabled):not(.disabled).active, .btn-outline-primary:not(:disabled):not(.disabled):active, .show > .btn-outline-primary.dropdown-toggle {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.btn-outline-primary:not(:disabled):not(.disabled).active:focus, .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(0,123,255,.5)
}

.btn-outline-secondary {
    color: #6c757d;
    background-color: transparent;
    background-image: none;
    border-color: #6c757d
}

.btn-outline-secondary:hover {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d
}

.btn-outline-secondary.focus, .btn-outline-secondary:focus {
    box-shadow: 0 0 0 .2rem rgba(108,117,125,.5)
}

.btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
    color: #6c757d;
    background-color: transparent
}

.btn-outline-secondary:not(:disabled):not(.disabled).active, .btn-outline-secondary:not(:disabled):not(.disabled):active, .show > .btn-outline-secondary.dropdown-toggle {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d
}

.btn-outline-secondary:not(:disabled):not(.disabled).active:focus, .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(108,117,125,.5)
}

.btn-outline-success {
    color: #28a745;
    background-color: transparent;
    background-image: none;
    border-color: #28a745
}

.btn-outline-success:hover {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-outline-success.focus, .btn-outline-success:focus {
    box-shadow: 0 0 0 .2rem rgba(40,167,69,.5)
}

.btn-outline-success.disabled, .btn-outline-success:disabled {
    color: #28a745;
    background-color: transparent
}

.btn-outline-success:not(:disabled):not(.disabled).active, .btn-outline-success:not(:disabled):not(.disabled):active, .show > .btn-outline-success.dropdown-toggle {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-outline-success:not(:disabled):not(.disabled).active:focus, .btn-outline-success:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(40,167,69,.5)
}

.btn-outline-info {
    color: #17a2b8;
    background-color: transparent;
    background-image: none;
    border-color: #17a2b8
}

.btn-outline-info:hover {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-outline-info.focus, .btn-outline-info:focus {
    box-shadow: 0 0 0 .2rem rgba(23,162,184,.5)
}

.btn-outline-info.disabled, .btn-outline-info:disabled {
    color: #17a2b8;
    background-color: transparent
}

.btn-outline-info:not(:disabled):not(.disabled).active, .btn-outline-info:not(:disabled):not(.disabled):active, .show > .btn-outline-info.dropdown-toggle {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-outline-info:not(:disabled):not(.disabled).active:focus, .btn-outline-info:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(23,162,184,.5)
}

.btn-outline-warning {
    color: #ffc107;
    background-color: transparent;
    background-image: none;
    border-color: #ffc107
}

.btn-outline-warning:hover {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-outline-warning.focus, .btn-outline-warning:focus {
    box-shadow: 0 0 0 .2rem rgba(255,193,7,.5)
}

.btn-outline-warning.disabled, .btn-outline-warning:disabled {
    color: #ffc107;
    background-color: transparent
}

.btn-outline-warning:not(:disabled):not(.disabled).active, .btn-outline-warning:not(:disabled):not(.disabled):active, .show > .btn-outline-warning.dropdown-toggle {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-outline-warning:not(:disabled):not(.disabled).active:focus, .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(255,193,7,.5)
}

.btn-outline-danger {
    color: #dc3545;
    background-color: transparent;
    background-image: none;
    border-color: #dc3545
}

.btn-outline-danger:hover {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-outline-danger.focus, .btn-outline-danger:focus {
    box-shadow: 0 0 0 .2rem rgba(220,53,69,.5)
}

.btn-outline-danger.disabled, .btn-outline-danger:disabled {
    color: #dc3545;
    background-color: transparent
}

.btn-outline-danger:not(:disabled):not(.disabled).active, .btn-outline-danger:not(:disabled):not(.disabled):active, .show > .btn-outline-danger.dropdown-toggle {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-outline-danger:not(:disabled):not(.disabled).active:focus, .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(220,53,69,.5)
}

.btn-outline-light {
    color: #f8f9fa;
    background-color: transparent;
    background-image: none;
    border-color: #f8f9fa
}

.btn-outline-light:hover {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-outline-light.focus, .btn-outline-light:focus {
    box-shadow: 0 0 0 .2rem rgba(248,249,250,.5)
}

.btn-outline-light.disabled, .btn-outline-light:disabled {
    color: #f8f9fa;
    background-color: transparent
}

.btn-outline-light:not(:disabled):not(.disabled).active, .btn-outline-light:not(:disabled):not(.disabled):active, .show > .btn-outline-light.dropdown-toggle {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-outline-light:not(:disabled):not(.disabled).active:focus, .btn-outline-light:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(248,249,250,.5)
}

.btn-outline-dark {
    color: #343a40;
    background-color: transparent;
    background-image: none;
    border-color: #343a40
}

.btn-outline-dark:hover {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-outline-dark.focus, .btn-outline-dark:focus {
    box-shadow: 0 0 0 .2rem rgba(52,58,64,.5)
}

.btn-outline-dark.disabled, .btn-outline-dark:disabled {
    color: #343a40;
    background-color: transparent
}

.btn-outline-dark:not(:disabled):not(.disabled).active, .btn-outline-dark:not(:disabled):not(.disabled):active, .show > .btn-outline-dark.dropdown-toggle {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-outline-dark:not(:disabled):not(.disabled).active:focus, .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(52,58,64,.5)
}

.btn-link {
    font-weight: 400;
    color: #007bff;
    background-color: transparent
}

.btn-link:hover {
    color: #0056b3;
    text-decoration: underline;
    background-color: transparent;
    border-color: transparent
}

.btn-link.focus, .btn-link:focus {
    text-decoration: underline;
    border-color: transparent;
    box-shadow: none
}

.btn-link.disabled, .btn-link:disabled {
    color: #6c757d
}

.btn-group-lg > .btn, .btn-lg {
    padding: .5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: .3rem
}

.btn-group-sm > .btn, .btn-sm {
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem
}

.btn-block {
    display: block;
    width: 100%
}

.btn-block + .btn-block {
    margin-top: .5rem
}

input[type=button].btn-block, input[type=reset].btn-block, input[type=submit].btn-block {
    width: 100%
}

.fade {
    opacity: 0;
    transition: opacity .15s linear
}

.fade.show {
    opacity: 1
}

.collapse {
    display: none
}

.collapse.show {
    display: block
}

tr.collapse.show {
    display: table-row
}

tbody.collapse.show {
    display: table-row-group
}

.collapsing {
    position: relative;
    height: 0;
    overflow: hidden;
    transition: height .35s ease
}

.dropdown, .dropup {
    position: relative
}

.dropdown-toggle::after {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: .255em;
    vertical-align: .255em;
    content: "";
    border-top: .3em solid;
    border-right: .3em solid transparent;
    border-bottom: 0;
    border-left: .3em solid transparent
}

.dropdown-toggle:empty::after {
    margin-left: 0
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: .5rem 0;
    margin: .125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: .25rem
}

.dropup .dropdown-menu {
    margin-top: 0;
    margin-bottom: .125rem
}

.dropup .dropdown-toggle::after {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: .255em;
    vertical-align: .255em;
    content: "";
    border-top: 0;
    border-right: .3em solid transparent;
    border-bottom: .3em solid;
    border-left: .3em solid transparent
}

.dropup .dropdown-toggle:empty::after {
    margin-left: 0
}

.dropright .dropdown-menu {
    margin-top: 0;
    margin-left: .125rem
}

.dropright .dropdown-toggle::after {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: .255em;
    vertical-align: .255em;
    content: "";
    border-top: .3em solid transparent;
    border-bottom: .3em solid transparent;
    border-left: .3em solid
}

.dropright .dropdown-toggle:empty::after {
    margin-left: 0
}

.dropright .dropdown-toggle::after {
    vertical-align: 0
}

.dropleft .dropdown-menu {
    margin-top: 0;
    margin-right: .125rem
}

.dropleft .dropdown-toggle::after {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: .255em;
    vertical-align: .255em;
    content: ""
}

.dropleft .dropdown-toggle::after {
    display: none
}

.dropleft .dropdown-toggle::before {
    display: inline-block;
    width: 0;
    height: 0;
    margin-right: .255em;
    vertical-align: .255em;
    content: "";
    border-top: .3em solid transparent;
    border-right: .3em solid;
    border-bottom: .3em solid transparent
}

.dropleft .dropdown-toggle:empty::after {
    margin-left: 0
}

.dropleft .dropdown-toggle::before {
    vertical-align: 0
}

.dropdown-divider {
    height: 0;
    margin: .5rem 0;
    overflow: hidden;
    border-top: 1px solid #e9ecef
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: .25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #212529;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0
}

.dropdown-item:focus, .dropdown-item:hover {
    color: #16181b;
    text-decoration: none;
    background-color: #f8f9fa
}

.dropdown-item.active, .dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #007bff
}

.dropdown-item.disabled, .dropdown-item:disabled {
    color: #6c757d;
    background-color: transparent
}

.dropdown-menu.show {
    display: block
}

.dropdown-header {
    display: block;
    padding: .5rem 1.5rem;
    margin-bottom: 0;
    font-size: .875rem;
    color: #6c757d;
    white-space: nowrap
}

.btn-group, .btn-group-vertical {
    position: relative;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    vertical-align: middle
}

.btn-group-vertical > .btn, .btn-group > .btn {
    position: relative;
    -webkit-box-flex: 0;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto
}

.btn-group-vertical > .btn:hover, .btn-group > .btn:hover {
    z-index: 1
}

.btn-group-vertical > .btn.active, .btn-group-vertical > .btn:active, .btn-group-vertical > .btn:focus, .btn-group > .btn.active, .btn-group > .btn:active, .btn-group > .btn:focus {
    z-index: 1
}

.btn-group .btn + .btn, .btn-group .btn + .btn-group, .btn-group .btn-group + .btn, .btn-group .btn-group + .btn-group, .btn-group-vertical .btn + .btn, .btn-group-vertical .btn + .btn-group, .btn-group-vertical .btn-group + .btn, .btn-group-vertical .btn-group + .btn-group {
    margin-left: -1px
}

.btn-toolbar {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start
}

.btn-toolbar .input-group {
    width: auto
}

.btn-group > .btn:first-child {
    margin-left: 0
}

.btn-group > .btn-group:not(:last-child) > .btn, .btn-group > .btn:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.btn-group > .btn-group:not(:first-child) > .btn, .btn-group > .btn:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.dropdown-toggle-split {
    padding-right: .5625rem;
    padding-left: .5625rem
}

.dropdown-toggle-split::after {
    margin-left: 0
}

.btn-group-sm > .btn + .dropdown-toggle-split, .btn-sm + .dropdown-toggle-split {
    padding-right: .375rem;
    padding-left: .375rem
}

.btn-group-lg > .btn + .dropdown-toggle-split, .btn-lg + .dropdown-toggle-split {
    padding-right: .75rem;
    padding-left: .75rem
}

.btn-group-vertical {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center
}

.btn-group-vertical .btn, .btn-group-vertical .btn-group {
    width: 100%
}

.btn-group-vertical > .btn + .btn, .btn-group-vertical > .btn + .btn-group, .btn-group-vertical > .btn-group + .btn, .btn-group-vertical > .btn-group + .btn-group {
    margin-top: -1px;
    margin-left: 0
}

.btn-group-vertical > .btn-group:not(:last-child) > .btn, .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle) {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.btn-group-vertical > .btn-group:not(:first-child) > .btn, .btn-group-vertical > .btn:not(:first-child) {
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.btn-group-toggle > .btn, .btn-group-toggle > .btn-group > .btn {
    margin-bottom: 0
}

.btn-group-toggle > .btn input[type=checkbox], .btn-group-toggle > .btn input[type=radio], .btn-group-toggle > .btn-group > .btn input[type=checkbox], .btn-group-toggle > .btn-group > .btn input[type=radio] {
    position: absolute;
    clip: rect(0,0,0,0);
    pointer-events: none
}

.input-group {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
    width: 100%
}

.input-group > .custom-file, .input-group > .custom-select, .input-group > .form-control {
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    width: 1%;
    margin-bottom: 0
}

.input-group > .custom-file:focus, .input-group > .custom-select:focus, .input-group > .form-control:focus {
    z-index: 3
}

.input-group > .custom-file + .custom-file, .input-group > .custom-file + .custom-select, .input-group > .custom-file + .form-control, .input-group > .custom-select + .custom-file, .input-group > .custom-select + .custom-select, .input-group > .custom-select + .form-control, .input-group > .form-control + .custom-file, .input-group > .form-control + .custom-select, .input-group > .form-control + .form-control {
    margin-left: -1px
}

.input-group > .custom-select:not(:last-child), .input-group > .form-control:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group > .custom-select:not(:first-child), .input-group > .form-control:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.input-group > .custom-file {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.input-group > .custom-file:not(:last-child) .custom-file-label, .input-group > .custom-file:not(:last-child) .custom-file-label::before {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group > .custom-file:not(:first-child) .custom-file-label, .input-group > .custom-file:not(:first-child) .custom-file-label::before {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.input-group-append, .input-group-prepend {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex
}

.input-group-append .btn, .input-group-prepend .btn {
    position: relative;
    z-index: 2
}

.input-group-append .btn + .btn, .input-group-append .btn + .input-group-text, .input-group-append .input-group-text + .btn, .input-group-append .input-group-text + .input-group-text, .input-group-prepend .btn + .btn, .input-group-prepend .btn + .input-group-text, .input-group-prepend .input-group-text + .btn, .input-group-prepend .input-group-text + .input-group-text {
    margin-left: -1px
}

.input-group-prepend {
    margin-right: -1px
}

.input-group-append {
    margin-left: -1px
}

.input-group-text {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: .375rem .75rem;
    margin-bottom: 0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    text-align: center;
    white-space: nowrap;
    background-color: #e9ecef;
    border: 1px solid #ced4da;
    border-radius: .25rem
}

.input-group-text input[type=checkbox], .input-group-text input[type=radio] {
    margin-top: 0
}

.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle), .input-group > .input-group-append:last-child > .input-group-text:not(:last-child), .input-group > .input-group-append:not(:last-child) > .btn, .input-group > .input-group-append:not(:last-child) > .input-group-text, .input-group > .input-group-prepend > .btn, .input-group > .input-group-prepend > .input-group-text {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group > .input-group-append > .btn, .input-group > .input-group-append > .input-group-text, .input-group > .input-group-prepend:first-child > .btn:not(:first-child), .input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child), .input-group > .input-group-prepend:not(:first-child) > .btn, .input-group > .input-group-prepend:not(:first-child) > .input-group-text {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.custom-control {
    position: relative;
    display: block;
    min-height: 1.5rem;
    padding-left: 1.5rem
}

.custom-control-inline {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    margin-right: 1rem
}

.custom-control-input {
    position: absolute;
    z-index: -1;
    opacity: 0
}

.custom-control-input:checked ~ .custom-control-label::before {
    color: #fff;
    background-color: #007bff
}

.custom-control-input:focus ~ .custom-control-label::before {
    box-shadow: 0 0 0 1px #fff,0 0 0 .2rem rgba(0,123,255,.25)
}

.custom-control-input:active ~ .custom-control-label::before {
    color: #fff;
    background-color: #b3d7ff
}

.custom-control-input:disabled ~ .custom-control-label {
    color: #6c757d
}

.custom-control-input:disabled ~ .custom-control-label::before {
    background-color: #e9ecef
}

.custom-control-label {
    margin-bottom: 0
}

.custom-control-label::before {
    position: absolute;
    top: .25rem;
    left: 0;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    content: "";
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: #dee2e6
}

.custom-control-label::after {
    position: absolute;
    top: .25rem;
    left: 0;
    display: block;
    width: 1rem;
    height: 1rem;
    content: "";
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 50% 50%
}

.custom-checkbox .custom-control-label::before {
    border-radius: .25rem
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
    background-color: #007bff
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E")
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
    background-color: #007bff
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E")
}

.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
    background-color: rgba(0,123,255,.5)
}

.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
    background-color: rgba(0,123,255,.5)
}

.custom-radio .custom-control-label::before {
    border-radius: 50%
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::before {
    background-color: #007bff
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E")
}

.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
    background-color: rgba(0,123,255,.5)
}

.custom-select {
    display: inline-block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: .375rem 1.75rem .375rem .75rem;
    line-height: 1.5;
    color: #495057;
    vertical-align: middle;
    background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right .75rem center;
    background-size: 8px 10px;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}

.custom-select:focus {
    border-color: #80bdff;
    outline: 0;
    box-shadow: inset 0 1px 2px rgba(0,0,0,.075),0 0 5px rgba(128,189,255,.5)
}

.custom-select:focus::-ms-value {
    color: #495057;
    background-color: #fff
}

.custom-select[multiple], .custom-select[size]:not([size="1"]) {
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
    padding-top: .375rem;
    padding-bottom: .375rem;
    font-size: 75%
}

.custom-select-lg {
    height: calc(2.875rem + 2px);
    padding-top: .375rem;
    padding-bottom: .375rem;
    font-size: 125%
}

.custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: calc(2.25rem + 2px);
    margin-bottom: 0
}

.custom-file-input {
    position: relative;
    z-index: 2;
    width: 100%;
    height: calc(2.25rem + 2px);
    margin: 0;
    opacity: 0
}

.custom-file-input:focus ~ .custom-file-control {
    border-color: #80bdff;
    box-shadow: 0 0 0 .2rem rgba(0,123,255,.25)
}

.custom-file-input:focus ~ .custom-file-control::before {
    border-color: #80bdff
}

.custom-file-input:lang(en) ~ .custom-file-label::after {
    content: "Browse"
}

.custom-file-label {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1;
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: .25rem
}

.custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: calc(calc(2.25rem + 2px) - 1px * 2);
    padding: .375rem .75rem;
    line-height: 1.5;
    color: #495057;
    content: "Browse";
    background-color: #e9ecef;
    border-left: 1px solid #ced4da;
    border-radius: 0 .25rem .25rem 0
}

.nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

.nav-link {
    display: block;
    padding: .5rem 1rem
}

.nav-link:focus, .nav-link:hover {
    text-decoration: none
}

.nav-link.disabled {
    color: #6c757d
}

.nav-tabs {
    border-bottom: 1px solid #dee2e6
}

.nav-tabs .nav-item {
    margin-bottom: -1px
}

.nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem
}

.nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover {
    border-color: #e9ecef #e9ecef #dee2e6
}

.nav-tabs .nav-link.disabled {
    color: #6c757d;
    background-color: transparent;
    border-color: transparent
}

.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff
}

.nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.nav-pills .nav-link {
    border-radius: .25rem
}

.nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    color: #fff;
    background-color: #007bff
}

.nav-fill .nav-item {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    text-align: center
}

.nav-justified .nav-item {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    text-align: center
}

.tab-content > .tab-pane {
    display: none
}

.tab-content > .active {
    display: block
}

.navbar {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: .5rem 1rem
}

.navbar > .container, .navbar > .container-fluid {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between
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

.navbar-brand:focus, .navbar-brand:hover {
    text-decoration: none
}

.navbar-nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

.navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0
}

.navbar-nav .dropdown-menu {
    position: static;
    float: none
}

.navbar-text {
    display: inline-block;
    padding-top: .5rem;
    padding-bottom: .5rem
}

.navbar-collapse {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.navbar-toggler {
    padding: .25rem .75rem;
    font-size: 1.25rem;
    line-height: 1;
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: .25rem
}

.navbar-toggler:focus, .navbar-toggler:hover {
    text-decoration: none
}

.navbar-toggler:not(:disabled):not(.disabled) {
    cursor: pointer
}

.navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    content: "";
    background: no-repeat center center;
    background-size: 100% 100%
}

@media (max-width: 575.98px) {
    .navbar-expand-sm > .container, .navbar-expand-sm > .container-fluid {
        padding-right: 0;
        padding-left: 0
    }
}

@media (min-width: 576px) {
    .navbar-expand-sm {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    .navbar-expand-sm .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row
    }

    .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-sm .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto
    }

    .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
    }

    .navbar-expand-sm > .container, .navbar-expand-sm > .container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
    }

    .navbar-expand-sm .navbar-collapse {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto
    }

    .navbar-expand-sm .navbar-toggler {
        display: none
    }

    .navbar-expand-sm .dropup .dropdown-menu {
        top: auto;
        bottom: 100%
    }
}

@media (max-width: 767.98px) {
    .navbar-expand-md > .container, .navbar-expand-md > .container-fluid {
        padding-right: 0;
        padding-left: 0
    }
}

@media (min-width: 768px) {
    .navbar-expand-md {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    .navbar-expand-md .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row
    }

    .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-md .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto
    }

    .navbar-expand-md .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
    }

    .navbar-expand-md > .container, .navbar-expand-md > .container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
    }

    .navbar-expand-md .navbar-collapse {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto
    }

    .navbar-expand-md .navbar-toggler {
        display: none
    }

    .navbar-expand-md .dropup .dropdown-menu {
        top: auto;
        bottom: 100%
    }
}

@media (max-width: 991.98px) {
    .navbar-expand-lg > .container, .navbar-expand-lg > .container-fluid {
        padding-right: 0;
        padding-left: 0
    }
}

@media (min-width: 992px) {
    .navbar-expand-lg {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    .navbar-expand-lg .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row
    }

    .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-lg .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto
    }

    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
    }

    .navbar-expand-lg > .container, .navbar-expand-lg > .container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
    }

    .navbar-expand-lg .navbar-collapse {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto
    }

    .navbar-expand-lg .navbar-toggler {
        display: none
    }

    .navbar-expand-lg .dropup .dropdown-menu {
        top: auto;
        bottom: 100%
    }
}

@media (max-width: 1199.98px) {
    .navbar-expand-xl > .container, .navbar-expand-xl > .container-fluid {
        padding-right: 0;
        padding-left: 0
    }
}

@media (min-width: 1200px) {
    .navbar-expand-xl {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    .navbar-expand-xl .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row
    }

    .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-xl .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto
    }

    .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
    }

    .navbar-expand-xl > .container, .navbar-expand-xl > .container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
    }

    .navbar-expand-xl .navbar-collapse {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto
    }

    .navbar-expand-xl .navbar-toggler {
        display: none
    }

    .navbar-expand-xl .dropup .dropdown-menu {
        top: auto;
        bottom: 100%
    }
}

.navbar-expand {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start
}

.navbar-expand > .container, .navbar-expand > .container-fluid {
    padding-right: 0;
    padding-left: 0
}

.navbar-expand .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row
}

.navbar-expand .navbar-nav .dropdown-menu {
    position: absolute
}

.navbar-expand .navbar-nav .dropdown-menu-right {
    right: 0;
    left: auto
}

.navbar-expand .navbar-nav .nav-link {
    padding-right: .5rem;
    padding-left: .5rem
}

.navbar-expand > .container, .navbar-expand > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap
}

.navbar-expand .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto
}

.navbar-expand .navbar-toggler {
    display: none
}

.navbar-expand .dropup .dropdown-menu {
    top: auto;
    bottom: 100%
}

.navbar-light .navbar-brand {
    color: rgba(0,0,0,.9)
}

.navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
    color: rgba(0,0,0,.9)
}

.navbar-light .navbar-nav .nav-link {
    color: rgba(0,0,0,.5)
}

.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
    color: rgba(0,0,0,.7)
}

.navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0,0,0,.3)
}

.navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show > .nav-link {
    color: rgba(0,0,0,.9)
}

.navbar-light .navbar-toggler {
    color: rgba(0,0,0,.5);
    border-color: rgba(0,0,0,.1)
}

.navbar-light .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
}

.navbar-light .navbar-text {
    color: rgba(0,0,0,.5)
}

.navbar-light .navbar-text a {
    color: rgba(0,0,0,.9)
}

.navbar-light .navbar-text a:focus, .navbar-light .navbar-text a:hover {
    color: rgba(0,0,0,.9)
}

.navbar-dark .navbar-brand {
    color: #fff
}

.navbar-dark .navbar-brand:focus, .navbar-dark .navbar-brand:hover {
    color: #fff
}

.navbar-dark .navbar-nav .nav-link {
    color: rgba(255,255,255,.5)
}

.navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
    color: rgba(255,255,255,.75)
}

.navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255,255,255,.25)
}

.navbar-dark .navbar-nav .active > .nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .show > .nav-link {
    color: #fff
}

.navbar-dark .navbar-toggler {
    color: rgba(255,255,255,.5);
    border-color: rgba(255,255,255,.1)
}

.navbar-dark .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
}

.navbar-dark .navbar-text {
    color: rgba(255,255,255,.5)
}

.navbar-dark .navbar-text a {
    color: #fff
}

.navbar-dark .navbar-text a:focus, .navbar-dark .navbar-text a:hover {
    color: #fff
}

.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem
}

.card > hr {
    margin-right: 0;
    margin-left: 0
}

.card > .list-group:first-child .list-group-item:first-child {
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem
}

.card > .list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: .25rem;
    border-bottom-left-radius: .25rem
}

.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem
}

.card-title {
    margin-bottom: .75rem
}

.card-subtitle {
    margin-top: -.375rem;
    margin-bottom: 0
}

.card-text:last-child {
    margin-bottom: 0
}

.card-link:hover {
    text-decoration: none
}

.card-link + .card-link {
    margin-left: 1.25rem
}

.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125)
}

.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
}

.card-header + .list-group .list-group-item:first-child {
    border-top: 0
}

.card-footer {
    padding: .75rem 1.25rem;
    background-color: rgba(0,0,0,.03);
    border-top: 1px solid rgba(0,0,0,.125)
}

.card-footer:last-child {
    border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px)
}

.card-header-tabs {
    margin-right: -.625rem;
    margin-bottom: -.75rem;
    margin-left: -.625rem;
    border-bottom: 0
}

.card-header-pills {
    margin-right: -.625rem;
    margin-left: -.625rem
}

.card-img-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1.25rem
}

.card-img {
    width: 100%;
    border-radius: calc(.25rem - 1px)
}

.card-img-top {
    width: 100%;
    border-top-left-radius: calc(.25rem - 1px);
    border-top-right-radius: calc(.25rem - 1px)
}

.card-img-bottom {
    width: 100%;
    border-bottom-right-radius: calc(.25rem - 1px);
    border-bottom-left-radius: calc(.25rem - 1px)
}

.card-deck {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column
}

.card-deck .card {
    margin-bottom: 15px
}

@media (min-width: 576px) {
    .card-deck {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        margin-right: -15px;
        margin-left: -15px
    }

    .card-deck .card {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px
    }
}

.card-group {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column
}

.card-group > .card {
    margin-bottom: 15px
}

@media (min-width: 576px) {
    .card-group {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap
    }

    .card-group > .card {
        -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
        margin-bottom: 0
    }

    .card-group > .card + .card {
        margin-left: 0;
        border-left: 0
    }

    .card-group > .card:first-child {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .card-group > .card:first-child .card-header, .card-group > .card:first-child .card-img-top {
        border-top-right-radius: 0
    }

    .card-group > .card:first-child .card-footer, .card-group > .card:first-child .card-img-bottom {
        border-bottom-right-radius: 0
    }

    .card-group > .card:last-child {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .card-group > .card:last-child .card-header, .card-group > .card:last-child .card-img-top {
        border-top-left-radius: 0
    }

    .card-group > .card:last-child .card-footer, .card-group > .card:last-child .card-img-bottom {
        border-bottom-left-radius: 0
    }

    .card-group > .card:only-child {
        border-radius: .25rem
    }

    .card-group > .card:only-child .card-header, .card-group > .card:only-child .card-img-top {
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem
    }

    .card-group > .card:only-child .card-footer, .card-group > .card:only-child .card-img-bottom {
        border-bottom-right-radius: .25rem;
        border-bottom-left-radius: .25rem
    }

    .card-group > .card:not(:first-child):not(:last-child):not(:only-child) {
        border-radius: 0
    }

    .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-footer, .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-header, .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom, .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-top {
        border-radius: 0
    }
}

.card-columns .card {
    margin-bottom: .75rem
}

@media (min-width: 576px) {
    .card-columns {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3;
        -webkit-column-gap: 1.25rem;
        -moz-column-gap: 1.25rem;
        column-gap: 1.25rem
    }

    .card-columns .card {
        display: inline-block;
        width: 100%
    }
}

.breadcrumb {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: .75rem 1rem;
    margin-bottom: 1rem;
    list-style: none;
    background-color: #e9ecef;
    border-radius: .25rem
}

.breadcrumb-item + .breadcrumb-item::before {
    display: inline-block;
    padding-right: .5rem;
    padding-left: .5rem;
    color: #6c757d;
    content: "/"
}

.breadcrumb-item + .breadcrumb-item:hover::before {
    text-decoration: underline
}

.breadcrumb-item + .breadcrumb-item:hover::before {
    text-decoration: none
}

.breadcrumb-item.active {
    color: #6c757d
}

.pagination {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: .25rem
}

.page-link {
    position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #007bff;
    background-color: #fff;
    border: 1px solid #dee2e6
}

.page-link:hover {
    color: #0056b3;
    text-decoration: none;
    background-color: #e9ecef;
    border-color: #dee2e6
}

.page-link:focus {
    z-index: 2;
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(0,123,255,.25)
}

.page-link:not(:disabled):not(.disabled) {
    cursor: pointer
}

.page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: .25rem;
    border-bottom-left-radius: .25rem
}

.page-item:last-child .page-link {
    border-top-right-radius: .25rem;
    border-bottom-right-radius: .25rem
}

.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.page-item.disabled .page-link {
    color: #6c757d;
    pointer-events: none;
    cursor: auto;
    background-color: #fff;
    border-color: #dee2e6
}

.pagination-lg .page-link {
    padding: .75rem 1.5rem;
    font-size: 1.25rem;
    line-height: 1.5
}

.pagination-lg .page-item:first-child .page-link {
    border-top-left-radius: .3rem;
    border-bottom-left-radius: .3rem
}

.pagination-lg .page-item:last-child .page-link {
    border-top-right-radius: .3rem;
    border-bottom-right-radius: .3rem
}

.pagination-sm .page-link {
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5
}

.pagination-sm .page-item:first-child .page-link {
    border-top-left-radius: .2rem;
    border-bottom-left-radius: .2rem
}

.pagination-sm .page-item:last-child .page-link {
    border-top-right-radius: .2rem;
    border-bottom-right-radius: .2rem
}

.badge {
    display: inline-block;
    padding: .25em .4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem
}

.badge:empty {
    display: none
}

.btn .badge {
    position: relative;
    top: -1px
}

.badge-pill {
    padding-right: .6em;
    padding-left: .6em;
    border-radius: 10rem
}

.badge-primary {
    color: #fff;
    background-color: #007bff
}

.badge-primary[href]:focus, .badge-primary[href]:hover {
    color: #fff;
    text-decoration: none;
    background-color: #0062cc
}

.badge-secondary {
    color: #fff;
    background-color: #6c757d
}

.badge-secondary[href]:focus, .badge-secondary[href]:hover {
    color: #fff;
    text-decoration: none;
    background-color: #545b62
}

.badge-success {
    color: #fff;
    background-color: #28a745
}

.badge-success[href]:focus, .badge-success[href]:hover {
    color: #fff;
    text-decoration: none;
    background-color: #1e7e34
}

.badge-info {
    color: #fff;
    background-color: #17a2b8
}

.badge-info[href]:focus, .badge-info[href]:hover {
    color: #fff;
    text-decoration: none;
    background-color: #117a8b
}

.badge-warning {
    color: #212529;
    background-color: #ffc107
}

.badge-warning[href]:focus, .badge-warning[href]:hover {
    color: #212529;
    text-decoration: none;
    background-color: #d39e00
}

.badge-danger {
    color: #fff;
    background-color: #dc3545
}

.badge-danger[href]:focus, .badge-danger[href]:hover {
    color: #fff;
    text-decoration: none;
    background-color: #bd2130
}

.badge-light {
    color: #212529;
    background-color: #f8f9fa
}

.badge-light[href]:focus, .badge-light[href]:hover {
    color: #212529;
    text-decoration: none;
    background-color: #dae0e5
}

.badge-dark {
    color: #fff;
    background-color: #343a40
}

.badge-dark[href]:focus, .badge-dark[href]:hover {
    color: #fff;
    text-decoration: none;
    background-color: #1d2124
}

.jumbotron {
    padding: 2rem 1rem;
    margin-bottom: 2rem;
    background-color: #e9ecef;
    border-radius: .3rem
}

@media (min-width: 576px) {
    .jumbotron {
        padding: 4rem 2rem
    }
}

.jumbotron-fluid {
    padding-right: 0;
    padding-left: 0;
    border-radius: 0
}

.alert {
    position: relative;
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .25rem
}

.alert-heading {
    color: inherit
}

.alert-link {
    font-weight: 700
}

.alert-dismissible {
    padding-right: 4rem
}

.alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: .75rem 1.25rem;
    color: inherit
}

.alert-primary {
    color: #004085;
    background-color: #cce5ff;
    border-color: #b8daff
}

.alert-primary hr {
    border-top-color: #9fcdff
}

.alert-primary .alert-link {
    color: #002752
}

.alert-secondary {
    color: #383d41;
    background-color: #e2e3e5;
    border-color: #d6d8db
}

.alert-secondary hr {
    border-top-color: #c8cbcf
}

.alert-secondary .alert-link {
    color: #202326
}

.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb
}

.alert-success hr {
    border-top-color: #b1dfbb
}

.alert-success .alert-link {
    color: #0b2e13
}

.alert-info {
    color: #0c5460;
    background-color: #d1ecf1;
    border-color: #bee5eb
}

.alert-info hr {
    border-top-color: #abdde5
}

.alert-info .alert-link {
    color: #062c33
}

.alert-warning {
    color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba
}

.alert-warning hr {
    border-top-color: #ffe8a1
}

.alert-warning .alert-link {
    color: #533f03
}

.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb
}

.alert-danger hr {
    border-top-color: #f1b0b7
}

.alert-danger .alert-link {
    color: #491217
}

.alert-light {
    color: #818182;
    background-color: #fefefe;
    border-color: #fdfdfe
}

.alert-light hr {
    border-top-color: #ececf6
}

.alert-light .alert-link {
    color: #686868
}

.alert-dark {
    color: #1b1e21;
    background-color: #d6d8d9;
    border-color: #c6c8ca
}

.alert-dark hr {
    border-top-color: #b9bbbe
}

.alert-dark .alert-link {
    color: #040505
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

.progress {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: 1rem;
    overflow: hidden;
    font-size: .75rem;
    background-color: #e9ecef;
    border-radius: .25rem
}

.progress-bar {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    color: #fff;
    text-align: center;
    background-color: #007bff;
    transition: width .6s ease
}

.progress-bar-striped {
    background-image: linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
    background-size: 1rem 1rem
}

.progress-bar-animated {
    -webkit-animation: progress-bar-stripes 1s linear infinite;
    animation: progress-bar-stripes 1s linear infinite
}

.media {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start
}

.media-body {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1
}

.list-group {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0
}

.list-group-item-action {
    width: 100%;
    color: #495057;
    text-align: inherit
}

.list-group-item-action:focus, .list-group-item-action:hover {
    color: #495057;
    text-decoration: none;
    background-color: #f8f9fa
}

.list-group-item-action:active {
    color: #212529;
    background-color: #e9ecef
}

.list-group-item {
    position: relative;
    display: block;
    padding: .75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,.125)
}

.list-group-item:first-child {
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem
}

.list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: .25rem;
    border-bottom-left-radius: .25rem
}

.list-group-item:focus, .list-group-item:hover {
    z-index: 1;
    text-decoration: none
}

.list-group-item.disabled, .list-group-item:disabled {
    color: #6c757d;
    background-color: #fff
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.list-group-flush .list-group-item {
    border-right: 0;
    border-left: 0;
    border-radius: 0
}

.list-group-flush:first-child .list-group-item:first-child {
    border-top: 0
}

.list-group-flush:last-child .list-group-item:last-child {
    border-bottom: 0
}

.list-group-item-primary {
    color: #004085;
    background-color: #b8daff
}

.list-group-item-primary.list-group-item-action:focus, .list-group-item-primary.list-group-item-action:hover {
    color: #004085;
    background-color: #9fcdff
}

.list-group-item-primary.list-group-item-action.active {
    color: #fff;
    background-color: #004085;
    border-color: #004085
}

.list-group-item-secondary {
    color: #383d41;
    background-color: #d6d8db
}

.list-group-item-secondary.list-group-item-action:focus, .list-group-item-secondary.list-group-item-action:hover {
    color: #383d41;
    background-color: #c8cbcf
}

.list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    background-color: #383d41;
    border-color: #383d41
}

.list-group-item-success {
    color: #155724;
    background-color: #c3e6cb
}

.list-group-item-success.list-group-item-action:focus, .list-group-item-success.list-group-item-action:hover {
    color: #155724;
    background-color: #b1dfbb
}

.list-group-item-success.list-group-item-action.active {
    color: #fff;
    background-color: #155724;
    border-color: #155724
}

.list-group-item-info {
    color: #0c5460;
    background-color: #bee5eb
}

.list-group-item-info.list-group-item-action:focus, .list-group-item-info.list-group-item-action:hover {
    color: #0c5460;
    background-color: #abdde5
}

.list-group-item-info.list-group-item-action.active {
    color: #fff;
    background-color: #0c5460;
    border-color: #0c5460
}

.list-group-item-warning {
    color: #856404;
    background-color: #ffeeba
}

.list-group-item-warning.list-group-item-action:focus, .list-group-item-warning.list-group-item-action:hover {
    color: #856404;
    background-color: #ffe8a1
}

.list-group-item-warning.list-group-item-action.active {
    color: #fff;
    background-color: #856404;
    border-color: #856404
}

.list-group-item-danger {
    color: #721c24;
    background-color: #f5c6cb
}

.list-group-item-danger.list-group-item-action:focus, .list-group-item-danger.list-group-item-action:hover {
    color: #721c24;
    background-color: #f1b0b7
}

.list-group-item-danger.list-group-item-action.active {
    color: #fff;
    background-color: #721c24;
    border-color: #721c24
}

.list-group-item-light {
    color: #818182;
    background-color: #fdfdfe
}

.list-group-item-light.list-group-item-action:focus, .list-group-item-light.list-group-item-action:hover {
    color: #818182;
    background-color: #ececf6
}

.list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #818182;
    border-color: #818182
}

.list-group-item-dark {
    color: #1b1e21;
    background-color: #c6c8ca
}

.list-group-item-dark.list-group-item-action:focus, .list-group-item-dark.list-group-item-action:hover {
    color: #1b1e21;
    background-color: #b9bbbe
}

.list-group-item-dark.list-group-item-action.active {
    color: #fff;
    background-color: #1b1e21;
    border-color: #1b1e21
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

.close:focus, .close:hover {
    color: #000;
    text-decoration: none;
    opacity: .75
}

.close:not(:disabled):not(.disabled) {
    cursor: pointer
}

button.close {
    padding: 0;
    background-color: transparent;
    border: 0;
    -webkit-appearance: none
}

.modal-open {
    overflow: hidden
}

.modal {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    display: none;
    overflow: hidden;
    outline: 0
}

.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto
}

.modal-dialog {
    position: relative;
    width: auto;
    margin: .5rem;
    pointer-events: none
}

.modal.fade .modal-dialog {
    transition: -webkit-transform .3s ease-out;
    transition: transform .3s ease-out;
    transition: transform .3s ease-out,-webkit-transform .3s ease-out;
    -webkit-transform: translate(0,-25%);
    transform: translate(0,-25%)
}

.modal.show .modal-dialog {
    -webkit-transform: translate(0,0);
    transform: translate(0,0)
}

.modal-dialog-centered {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    min-height: calc(100% - (.5rem * 2))
}

.modal-content {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: .3rem;
    outline: 0
}

.modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1040;
    background-color: #000
}

.modal-backdrop.fade {
    opacity: 0
}

.modal-backdrop.show {
    opacity: .5
}

.modal-header {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    -webkit-box-pack: justify;
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
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1rem
}

.modal-footer {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    padding: 1rem;
    border-top: 1px solid #e9ecef
}

.modal-footer > :not(:first-child) {
    margin-left: .25rem
}

.modal-footer > :not(:last-child) {
    margin-right: .25rem
}

.modal-scrollbar-measure {
    position: absolute;
    top: -9999px;
    width: 50px;
    height: 50px;
    overflow: scroll
}

@media (min-width: 576px) {
    .modal-dialog {
        max-width: 500px;
        margin: 1.75rem auto
    }

    .modal-dialog-centered {
        min-height: calc(100% - (1.75rem * 2))
    }

    .modal-sm {
        max-width: 300px
    }
}

@media (min-width: 992px) {
    .modal-lg {
        max-width: 800px
    }
}

.tooltip {
    position: absolute;
    z-index: 1070;
    display: block;
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: .875rem;
    word-wrap: break-word;
    opacity: 0
}

.tooltip.show {
    opacity: .9
}

.tooltip .arrow {
    position: absolute;
    display: block;
    width: .8rem;
    height: .4rem
}

.tooltip .arrow::before {
    position: absolute;
    content: "";
    border-color: transparent;
    border-style: solid
}

.bs-tooltip-auto[x-placement^=top], .bs-tooltip-top {
    padding: .4rem 0
}

.bs-tooltip-auto[x-placement^=top] .arrow, .bs-tooltip-top .arrow {
    bottom: 0
}

.bs-tooltip-auto[x-placement^=top] .arrow::before, .bs-tooltip-top .arrow::before {
    top: 0;
    border-width: .4rem .4rem 0;
    border-top-color: #000
}

.bs-tooltip-auto[x-placement^=right], .bs-tooltip-right {
    padding: 0 .4rem
}

.bs-tooltip-auto[x-placement^=right] .arrow, .bs-tooltip-right .arrow {
    left: 0;
    width: .4rem;
    height: .8rem
}

.bs-tooltip-auto[x-placement^=right] .arrow::before, .bs-tooltip-right .arrow::before {
    right: 0;
    border-width: .4rem .4rem .4rem 0;
    border-right-color: #000
}

.bs-tooltip-auto[x-placement^=bottom], .bs-tooltip-bottom {
    padding: .4rem 0
}

.bs-tooltip-auto[x-placement^=bottom] .arrow, .bs-tooltip-bottom .arrow {
    top: 0
}

.bs-tooltip-auto[x-placement^=bottom] .arrow::before, .bs-tooltip-bottom .arrow::before {
    bottom: 0;
    border-width: 0 .4rem .4rem;
    border-bottom-color: #000
}

.bs-tooltip-auto[x-placement^=left], .bs-tooltip-left {
    padding: 0 .4rem
}

.bs-tooltip-auto[x-placement^=left] .arrow, .bs-tooltip-left .arrow {
    right: 0;
    width: .4rem;
    height: .8rem
}

.bs-tooltip-auto[x-placement^=left] .arrow::before, .bs-tooltip-left .arrow::before {
    left: 0;
    border-width: .4rem 0 .4rem .4rem;
    border-left-color: #000
}

.tooltip-inner {
    max-width: 200px;
    padding: .25rem .5rem;
    color: #fff;
    text-align: center;
    background-color: #000;
    border-radius: .25rem
}

.popover {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1060;
    display: block;
    max-width: 276px;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: .875rem;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: .3rem
}

.popover .arrow {
    position: absolute;
    display: block;
    width: 1rem;
    height: .5rem;
    margin: 0 .3rem
}

.popover .arrow::after, .popover .arrow::before {
    position: absolute;
    display: block;
    content: "";
    border-color: transparent;
    border-style: solid
}

.bs-popover-auto[x-placement^=top], .bs-popover-top {
    margin-bottom: .5rem
}

.bs-popover-auto[x-placement^=top] .arrow, .bs-popover-top .arrow {
    bottom: calc((.5rem + 1px) * -1)
}

.bs-popover-auto[x-placement^=top] .arrow::after, .bs-popover-auto[x-placement^=top] .arrow::before, .bs-popover-top .arrow::after, .bs-popover-top .arrow::before {
    border-width: .5rem .5rem 0
}

.bs-popover-auto[x-placement^=top] .arrow::before, .bs-popover-top .arrow::before {
    bottom: 0;
    border-top-color: rgba(0,0,0,.25)
}

.bs-popover-auto[x-placement^=top] .arrow::after, .bs-popover-top .arrow::after {
    bottom: 1px;
    border-top-color: #fff
}

.bs-popover-auto[x-placement^=right], .bs-popover-right {
    margin-left: .5rem
}

.bs-popover-auto[x-placement^=right] .arrow, .bs-popover-right .arrow {
    left: calc((.5rem + 1px) * -1);
    width: .5rem;
    height: 1rem;
    margin: .3rem 0
}

.bs-popover-auto[x-placement^=right] .arrow::after, .bs-popover-auto[x-placement^=right] .arrow::before, .bs-popover-right .arrow::after, .bs-popover-right .arrow::before {
    border-width: .5rem .5rem .5rem 0
}

.bs-popover-auto[x-placement^=right] .arrow::before, .bs-popover-right .arrow::before {
    left: 0;
    border-right-color: rgba(0,0,0,.25)
}

.bs-popover-auto[x-placement^=right] .arrow::after, .bs-popover-right .arrow::after {
    left: 1px;
    border-right-color: #fff
}

.bs-popover-auto[x-placement^=bottom], .bs-popover-bottom {
    margin-top: .5rem
}

.bs-popover-auto[x-placement^=bottom] .arrow, .bs-popover-bottom .arrow {
    top: calc((.5rem + 1px) * -1)
}

.bs-popover-auto[x-placement^=bottom] .arrow::after, .bs-popover-auto[x-placement^=bottom] .arrow::before, .bs-popover-bottom .arrow::after, .bs-popover-bottom .arrow::before {
    border-width: 0 .5rem .5rem .5rem
}

.bs-popover-auto[x-placement^=bottom] .arrow::before, .bs-popover-bottom .arrow::before {
    top: 0;
    border-bottom-color: rgba(0,0,0,.25)
}

.bs-popover-auto[x-placement^=bottom] .arrow::after, .bs-popover-bottom .arrow::after {
    top: 1px;
    border-bottom-color: #fff
}

.bs-popover-auto[x-placement^=bottom] .popover-header::before, .bs-popover-bottom .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 1rem;
    margin-left: -.5rem;
    content: "";
    border-bottom: 1px solid #f7f7f7
}

.bs-popover-auto[x-placement^=left], .bs-popover-left {
    margin-right: .5rem
}

.bs-popover-auto[x-placement^=left] .arrow, .bs-popover-left .arrow {
    right: calc((.5rem + 1px) * -1);
    width: .5rem;
    height: 1rem;
    margin: .3rem 0
}

.bs-popover-auto[x-placement^=left] .arrow::after, .bs-popover-auto[x-placement^=left] .arrow::before, .bs-popover-left .arrow::after, .bs-popover-left .arrow::before {
    border-width: .5rem 0 .5rem .5rem
}

.bs-popover-auto[x-placement^=left] .arrow::before, .bs-popover-left .arrow::before {
    right: 0;
    border-left-color: rgba(0,0,0,.25)
}

.bs-popover-auto[x-placement^=left] .arrow::after, .bs-popover-left .arrow::after {
    right: 1px;
    border-left-color: #fff
}

.popover-header {
    padding: .5rem .75rem;
    margin-bottom: 0;
    font-size: 1rem;
    color: inherit;
    background-color: #f7f7f7;
    border-bottom: 1px solid #ebebeb;
    border-top-left-radius: calc(.3rem - 1px);
    border-top-right-radius: calc(.3rem - 1px)
}

.popover-header:empty {
    display: none
}

.popover-body {
    padding: .5rem .75rem;
    color: #212529
}

.carousel {
    position: relative
}

.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden
}

.carousel-item {
    position: relative;
    display: none;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
    transition: -webkit-transform .6s ease;
    transition: transform .6s ease;
    transition: transform .6s ease,-webkit-transform .6s ease;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px
}

.carousel-item-next, .carousel-item-prev, .carousel-item.active {
    display: block
}

.carousel-item-next, .carousel-item-prev {
    position: absolute;
    top: 0
}

.carousel-item-next.carousel-item-left, .carousel-item-prev.carousel-item-right {
    -webkit-transform: translateX(0);
    transform: translateX(0)
}

@supports ((-webkit-transform-style: preserve-3d) or (transform-style:preserve-3d)) {
    .carousel-item-next.carousel-item-left, .carousel-item-prev.carousel-item-right {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.active.carousel-item-right, .carousel-item-next {
    -webkit-transform: translateX(100%);
    transform: translateX(100%)
}

@supports ((-webkit-transform-style: preserve-3d) or (transform-style:preserve-3d)) {
    .active.carousel-item-right, .carousel-item-next {
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0)
    }
}

.active.carousel-item-left, .carousel-item-prev {
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%)
}

@supports ((-webkit-transform-style: preserve-3d) or (transform-style:preserve-3d)) {
    .active.carousel-item-left, .carousel-item-prev {
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0)
    }
}

.carousel-control-next, .carousel-control-prev {
    position: absolute;
    top: 0;
    bottom: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 15%;
    color: #fff;
    text-align: center;
    opacity: .5
}

.carousel-control-next:focus, .carousel-control-next:hover, .carousel-control-prev:focus, .carousel-control-prev:hover {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: .9
}

.carousel-control-prev {
    left: 0
}

.carousel-control-next {
    right: 0
}

.carousel-control-next-icon, .carousel-control-prev-icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    background: transparent no-repeat center center;
    background-size: 100% 100%
}

.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E")
}

.carousel-control-next-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E")
}

.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 10px;
    left: 0;
    z-index: 15;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none
}

.carousel-indicators li {
    position: relative;
    -webkit-box-flex: 0;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    background-color: rgba(255,255,255,.5)
}

.carousel-indicators li::before {
    position: absolute;
    top: -10px;
    left: 0;
    display: inline-block;
    width: 100%;
    height: 10px;
    content: ""
}

.carousel-indicators li::after {
    position: absolute;
    bottom: -10px;
    left: 0;
    display: inline-block;
    width: 100%;
    height: 10px;
    content: ""
}

.carousel-indicators .active {
    background-color: #fff
}

.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 20px;
    left: 15%;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    text-align: center
}

.align-baseline {
    vertical-align: baseline !important
}

.align-top {
    vertical-align: top !important
}

.align-middle {
    vertical-align: middle !important
}

.align-bottom {
    vertical-align: bottom !important
}

.align-text-bottom {
    vertical-align: text-bottom !important
}

.align-text-top {
    vertical-align: text-top !important
}

.bg-primary {
    background-color: #007bff !important
}

a.bg-primary:focus, a.bg-primary:hover, button.bg-primary:focus, button.bg-primary:hover {
    background-color: #0062cc !important
}

.bg-secondary {
    background-color: #6c757d !important
}

a.bg-secondary:focus, a.bg-secondary:hover, button.bg-secondary:focus, button.bg-secondary:hover {
    background-color: #545b62 !important
}

.bg-success {
    background-color: #28a745 !important
}

a.bg-success:focus, a.bg-success:hover, button.bg-success:focus, button.bg-success:hover {
    background-color: #1e7e34 !important
}

.bg-info {
    background-color: #17a2b8 !important
}

a.bg-info:focus, a.bg-info:hover, button.bg-info:focus, button.bg-info:hover {
    background-color: #117a8b !important
}

.bg-warning {
    background-color: #ffc107 !important
}

a.bg-warning:focus, a.bg-warning:hover, button.bg-warning:focus, button.bg-warning:hover {
    background-color: #d39e00 !important
}

.bg-danger {
    background-color: #dc3545 !important
}

a.bg-danger:focus, a.bg-danger:hover, button.bg-danger:focus, button.bg-danger:hover {
    background-color: #bd2130 !important
}

.bg-light {
    background-color: #f8f9fa !important
}

a.bg-light:focus, a.bg-light:hover, button.bg-light:focus, button.bg-light:hover {
    background-color: #dae0e5 !important
}

.bg-dark {
    background-color: #343a40 !important
}

a.bg-dark:focus, a.bg-dark:hover, button.bg-dark:focus, button.bg-dark:hover {
    background-color: #1d2124 !important
}

.bg-white {
    background-color: #fff !important
}

.bg-transparent {
    background-color: transparent !important
}

.border {
    border: 1px solid #dee2e6 !important
}

.border-top {
    border-top: 1px solid #dee2e6 !important
}

.border-right {
    border-right: 1px solid #dee2e6 !important
}

.border-bottom {
    border-bottom: 1px solid #dee2e6 !important
}

.border-left {
    border-left: 1px solid #dee2e6 !important
}

.border-0 {
    border: 0 !important
}

.border-top-0 {
    border-top: 0 !important
}

.border-right-0 {
    border-right: 0 !important
}

.border-bottom-0 {
    border-bottom: 0 !important
}

.border-left-0 {
    border-left: 0 !important
}

.border-primary {
    border-color: #007bff !important
}

.border-secondary {
    border-color: #6c757d !important
}

.border-success {
    border-color: #28a745 !important
}

.border-info {
    border-color: #17a2b8 !important
}

.border-warning {
    border-color: #ffc107 !important
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
    border-top-left-radius: .25rem !important;
    border-top-right-radius: .25rem !important
}

.rounded-right {
    border-top-right-radius: .25rem !important;
    border-bottom-right-radius: .25rem !important
}

.rounded-bottom {
    border-bottom-right-radius: .25rem !important;
    border-bottom-left-radius: .25rem !important
}

.rounded-left {
    border-top-left-radius: .25rem !important;
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

.d-none {
    display: none !important
}

.d-inline {
    display: inline !important
}

.d-inline-block {
    display: inline-block !important
}

.d-block {
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

.d-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important
}

.d-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important
}

@media (min-width: 576px) {
    .d-sm-none {
        display: none !important
    }

    .d-sm-inline {
        display: inline !important
    }

    .d-sm-inline-block {
        display: inline-block !important
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

    .d-sm-flex {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important
    }

    .d-sm-inline-flex {
        display: -webkit-inline-box !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important
    }
}

@media (min-width: 768px) {
    .d-md-none {
        display: none !important
    }

    .d-md-inline {
        display: inline !important
    }

    .d-md-inline-block {
        display: inline-block !important
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

    .d-md-flex {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important
    }

    .d-md-inline-flex {
        display: -webkit-inline-box !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important
    }
}

@media (min-width: 992px) {
    .d-lg-none {
        display: none !important
    }

    .d-lg-inline {
        display: inline !important
    }

    .d-lg-inline-block {
        display: inline-block !important
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

    .d-lg-flex {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important
    }

    .d-lg-inline-flex {
        display: -webkit-inline-box !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important
    }
}

@media (min-width: 1200px) {
    .d-xl-none {
        display: none !important
    }

    .d-xl-inline {
        display: inline !important
    }

    .d-xl-inline-block {
        display: inline-block !important
    }

    .d-xl-block {
        display: block !important
    }

    .d-xl-table {
        display: table !important
    }

    .d-xl-table-row {
        display: table-row !important
    }

    .d-xl-table-cell {
        display: table-cell !important
    }

    .d-xl-flex {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important
    }

    .d-xl-inline-flex {
        display: -webkit-inline-box !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important
    }
}

@media print {
    .d-print-none {
        display: none !important
    }

    .d-print-inline {
        display: inline !important
    }

    .d-print-inline-block {
        display: inline-block !important
    }

    .d-print-block {
        display: block !important
    }

    .d-print-table {
        display: table !important
    }

    .d-print-table-row {
        display: table-row !important
    }

    .d-print-table-cell {
        display: table-cell !important
    }

    .d-print-flex {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important
    }

    .d-print-inline-flex {
        display: -webkit-inline-box !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important
    }
}

.embed-responsive {
    position: relative;
    display: block;
    width: 100%;
    padding: 0;
    overflow: hidden
}

.embed-responsive::before {
    display: block;
    content: ""
}

.embed-responsive .embed-responsive-item, .embed-responsive embed, .embed-responsive iframe, .embed-responsive object, .embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0
}

.embed-responsive-21by9::before {
    padding-top: 42.857143%
}

.embed-responsive-16by9::before {
    padding-top: 56.25%
}

.embed-responsive-4by3::before {
    padding-top: 75%
}

.embed-responsive-1by1::before {
    padding-top: 100%
}

.flex-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important
}

.flex-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important
}

.flex-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important
}

.flex-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important
}

.flex-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important
}

.flex-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important
}

.flex-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important
}

.justify-content-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important
}

.justify-content-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important
}

.justify-content-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important
}

.justify-content-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important
}

.justify-content-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important
}

.align-items-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important
}

.align-items-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important
}

.align-items-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important
}

.align-items-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important
}

.align-items-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important
}

.align-content-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important
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

.align-content-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important
}

.align-self-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important
}

.align-self-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important
}

.align-self-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important
}

.align-self-center {
    -ms-flex-item-align: center !important;
    align-self: center !important
}

.align-self-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important
}

.align-self-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important
}

@media (min-width: 576px) {
    .flex-sm-row {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: normal !important;
        -ms-flex-direction: row !important;
        flex-direction: row !important
    }

    .flex-sm-column {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: normal !important;
        -ms-flex-direction: column !important;
        flex-direction: column !important
    }

    .flex-sm-row-reverse {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important
    }

    .flex-sm-column-reverse {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important
    }

    .flex-sm-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important
    }

    .flex-sm-nowrap {
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important
    }

    .flex-sm-wrap-reverse {
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important
    }

    .justify-content-sm-start {
        -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
        justify-content: flex-start !important
    }

    .justify-content-sm-end {
        -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
        justify-content: flex-end !important
    }

    .justify-content-sm-center {
        -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important
    }

    .justify-content-sm-between {
        -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
        justify-content: space-between !important
    }

    .justify-content-sm-around {
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important
    }

    .align-items-sm-start {
        -webkit-box-align: start !important;
        -ms-flex-align: start !important;
        align-items: flex-start !important
    }

    .align-items-sm-end {
        -webkit-box-align: end !important;
        -ms-flex-align: end !important;
        align-items: flex-end !important
    }

    .align-items-sm-center {
        -webkit-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important
    }

    .align-items-sm-baseline {
        -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
        align-items: baseline !important
    }

    .align-items-sm-stretch {
        -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
        align-items: stretch !important
    }

    .align-content-sm-start {
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important
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

    .align-content-sm-stretch {
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important
    }

    .align-self-sm-auto {
        -ms-flex-item-align: auto !important;
        align-self: auto !important
    }

    .align-self-sm-start {
        -ms-flex-item-align: start !important;
        align-self: flex-start !important
    }

    .align-self-sm-end {
        -ms-flex-item-align: end !important;
        align-self: flex-end !important
    }

    .align-self-sm-center {
        -ms-flex-item-align: center !important;
        align-self: center !important
    }

    .align-self-sm-baseline {
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important
    }

    .align-self-sm-stretch {
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important
    }
}

@media (min-width: 768px) {
    .flex-md-row {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: normal !important;
        -ms-flex-direction: row !important;
        flex-direction: row !important
    }

    .flex-md-column {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: normal !important;
        -ms-flex-direction: column !important;
        flex-direction: column !important
    }

    .flex-md-row-reverse {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important
    }

    .flex-md-column-reverse {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important
    }

    .flex-md-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important
    }

    .flex-md-nowrap {
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important
    }

    .flex-md-wrap-reverse {
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important
    }

    .justify-content-md-start {
        -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
        justify-content: flex-start !important
    }

    .justify-content-md-end {
        -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
        justify-content: flex-end !important
    }

    .justify-content-md-center {
        -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important
    }

    .justify-content-md-between {
        -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
        justify-content: space-between !important
    }

    .justify-content-md-around {
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important
    }

    .align-items-md-start {
        -webkit-box-align: start !important;
        -ms-flex-align: start !important;
        align-items: flex-start !important
    }

    .align-items-md-end {
        -webkit-box-align: end !important;
        -ms-flex-align: end !important;
        align-items: flex-end !important
    }

    .align-items-md-center {
        -webkit-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important
    }

    .align-items-md-baseline {
        -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
        align-items: baseline !important
    }

    .align-items-md-stretch {
        -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
        align-items: stretch !important
    }

    .align-content-md-start {
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important
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

    .align-content-md-stretch {
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important
    }

    .align-self-md-auto {
        -ms-flex-item-align: auto !important;
        align-self: auto !important
    }

    .align-self-md-start {
        -ms-flex-item-align: start !important;
        align-self: flex-start !important
    }

    .align-self-md-end {
        -ms-flex-item-align: end !important;
        align-self: flex-end !important
    }

    .align-self-md-center {
        -ms-flex-item-align: center !important;
        align-self: center !important
    }

    .align-self-md-baseline {
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important
    }

    .align-self-md-stretch {
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important
    }
}

@media (min-width: 992px) {
    .flex-lg-row {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: normal !important;
        -ms-flex-direction: row !important;
        flex-direction: row !important
    }

    .flex-lg-column {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: normal !important;
        -ms-flex-direction: column !important;
        flex-direction: column !important
    }

    .flex-lg-row-reverse {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important
    }

    .flex-lg-column-reverse {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important
    }

    .flex-lg-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important
    }

    .flex-lg-nowrap {
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important
    }

    .flex-lg-wrap-reverse {
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important
    }

    .justify-content-lg-start {
        -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
        justify-content: flex-start !important
    }

    .justify-content-lg-end {
        -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
        justify-content: flex-end !important
    }

    .justify-content-lg-center {
        -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important
    }

    .justify-content-lg-between {
        -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
        justify-content: space-between !important
    }

    .justify-content-lg-around {
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important
    }

    .align-items-lg-start {
        -webkit-box-align: start !important;
        -ms-flex-align: start !important;
        align-items: flex-start !important
    }

    .align-items-lg-end {
        -webkit-box-align: end !important;
        -ms-flex-align: end !important;
        align-items: flex-end !important
    }

    .align-items-lg-center {
        -webkit-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important
    }

    .align-items-lg-baseline {
        -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
        align-items: baseline !important
    }

    .align-items-lg-stretch {
        -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
        align-items: stretch !important
    }

    .align-content-lg-start {
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important
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

    .align-content-lg-stretch {
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important
    }

    .align-self-lg-auto {
        -ms-flex-item-align: auto !important;
        align-self: auto !important
    }

    .align-self-lg-start {
        -ms-flex-item-align: start !important;
        align-self: flex-start !important
    }

    .align-self-lg-end {
        -ms-flex-item-align: end !important;
        align-self: flex-end !important
    }

    .align-self-lg-center {
        -ms-flex-item-align: center !important;
        align-self: center !important
    }

    .align-self-lg-baseline {
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important
    }

    .align-self-lg-stretch {
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important
    }
}

@media (min-width: 1200px) {
    .flex-xl-row {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: normal !important;
        -ms-flex-direction: row !important;
        flex-direction: row !important
    }

    .flex-xl-column {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: normal !important;
        -ms-flex-direction: column !important;
        flex-direction: column !important
    }

    .flex-xl-row-reverse {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important
    }

    .flex-xl-column-reverse {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important
    }

    .flex-xl-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important
    }

    .flex-xl-nowrap {
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important
    }

    .flex-xl-wrap-reverse {
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important
    }

    .justify-content-xl-start {
        -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
        justify-content: flex-start !important
    }

    .justify-content-xl-end {
        -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
        justify-content: flex-end !important
    }

    .justify-content-xl-center {
        -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important
    }

    .justify-content-xl-between {
        -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
        justify-content: space-between !important
    }

    .justify-content-xl-around {
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important
    }

    .align-items-xl-start {
        -webkit-box-align: start !important;
        -ms-flex-align: start !important;
        align-items: flex-start !important
    }

    .align-items-xl-end {
        -webkit-box-align: end !important;
        -ms-flex-align: end !important;
        align-items: flex-end !important
    }

    .align-items-xl-center {
        -webkit-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important
    }

    .align-items-xl-baseline {
        -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
        align-items: baseline !important
    }

    .align-items-xl-stretch {
        -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
        align-items: stretch !important
    }

    .align-content-xl-start {
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important
    }

    .align-content-xl-end {
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important
    }

    .align-content-xl-center {
        -ms-flex-line-pack: center !important;
        align-content: center !important
    }

    .align-content-xl-between {
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important
    }

    .align-content-xl-around {
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important
    }

    .align-content-xl-stretch {
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important
    }

    .align-self-xl-auto {
        -ms-flex-item-align: auto !important;
        align-self: auto !important
    }

    .align-self-xl-start {
        -ms-flex-item-align: start !important;
        align-self: flex-start !important
    }

    .align-self-xl-end {
        -ms-flex-item-align: end !important;
        align-self: flex-end !important
    }

    .align-self-xl-center {
        -ms-flex-item-align: center !important;
        align-self: center !important
    }

    .align-self-xl-baseline {
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important
    }

    .align-self-xl-stretch {
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important
    }
}

.float-left {
    float: left !important
}

.float-right {
    float: right !important
}

.float-none {
    float: none !important
}

@media (min-width: 576px) {
    .float-sm-left {
        float: left !important
    }

    .float-sm-right {
        float: right !important
    }

    .float-sm-none {
        float: none !important
    }
}

@media (min-width: 768px) {
    .float-md-left {
        float: left !important
    }

    .float-md-right {
        float: right !important
    }

    .float-md-none {
        float: none !important
    }
}

@media (min-width: 992px) {
    .float-lg-left {
        float: left !important
    }

    .float-lg-right {
        float: right !important
    }

    .float-lg-none {
        float: none !important
    }
}

@media (min-width: 1200px) {
    .float-xl-left {
        float: left !important
    }

    .float-xl-right {
        float: right !important
    }

    .float-xl-none {
        float: none !important
    }
}

.position-static {
    position: static !important
}

.position-relative {
    position: relative !important
}

.position-absolute {
    position: absolute !important
}

.position-fixed {
    position: fixed !important
}

.position-sticky {
    position: -webkit-sticky !important;
    position: sticky !important
}

.fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030
}

.fixed-bottom {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1030
}

@supports ((position: -webkit-sticky) or (position:sticky)) {
    .sticky-top {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1020
    }
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    overflow: hidden;
    clip: rect(0,0,0,0);
    white-space: nowrap;
    -webkit-clip-path: inset(50%);
    clip-path: inset(50%);
    border: 0
}

.sr-only-focusable:active, .sr-only-focusable:focus {
    position: static;
    width: auto;
    height: auto;
    overflow: visible;
    clip: auto;
    white-space: normal;
    -webkit-clip-path: none;
    clip-path: none
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

.mw-100 {
    max-width: 100% !important
}

.mh-100 {
    max-height: 100% !important
}

.m-0 {
    margin: 0 !important
}

.mt-0, .my-0 {
    margin-top: 0 !important
}

.mr-0, .mx-0 {
    margin-right: 0 !important
}

.mb-0, .my-0 {
    margin-bottom: 0 !important
}

.ml-0, .mx-0 {
    margin-left: 0 !important
}

.m-1 {
    margin: .25rem !important
}

.mt-1, .my-1 {
    margin-top: .25rem !important
}

.mr-1, .mx-1 {
    margin-right: .25rem !important
}

.mb-1, .my-1 {
    margin-bottom: .25rem !important
}

.ml-1, .mx-1 {
    margin-left: .25rem !important
}

.m-2 {
    margin: .5rem !important
}

.mt-2, .my-2 {
    margin-top: .5rem !important
}

.mr-2, .mx-2 {
    margin-right: .5rem !important
}

.mb-2, .my-2 {
    margin-bottom: .5rem !important
}

.ml-2, .mx-2 {
    margin-left: .5rem !important
}

.m-3 {
    margin: 1rem !important
}

.mt-3, .my-3 {
    margin-top: 1rem !important
}

.mr-3, .mx-3 {
    margin-right: 1rem !important
}

.mb-3, .my-3 {
    margin-bottom: 1rem !important
}

.ml-3, .mx-3 {
    margin-left: 1rem !important
}

.m-4 {
    margin: 1.5rem !important
}

.mt-4, .my-4 {
    margin-top: 1.5rem !important
}

.mr-4, .mx-4 {
    margin-right: 1.5rem !important
}

.mb-4, .my-4 {
    margin-bottom: 1.5rem !important
}

.ml-4, .mx-4 {
    margin-left: 1.5rem !important
}

.m-5 {
    margin: 3rem !important
}

.mt-5, .my-5 {
    margin-top: 3rem !important
}

.mr-5, .mx-5 {
    margin-right: 3rem !important
}

.mb-5, .my-5 {
    margin-bottom: 3rem !important
}

.ml-5, .mx-5 {
    margin-left: 3rem !important
}

.p-0 {
    padding: 0 !important
}

.pt-0, .py-0 {
    padding-top: 0 !important
}

.pr-0, .px-0 {
    padding-right: 0 !important
}

.pb-0, .py-0 {
    padding-bottom: 0 !important
}

.pl-0, .px-0 {
    padding-left: 0 !important
}

.p-1 {
    padding: .25rem !important
}

.pt-1, .py-1 {
    padding-top: .25rem !important
}

.pr-1, .px-1 {
    padding-right: .25rem !important
}

.pb-1, .py-1 {
    padding-bottom: .25rem !important
}

.pl-1, .px-1 {
    padding-left: .25rem !important
}

.p-2 {
    padding: .5rem !important
}

.pt-2, .py-2 {
    padding-top: .5rem !important
}

.pr-2, .px-2 {
    padding-right: .5rem !important
}

.pb-2, .py-2 {
    padding-bottom: .5rem !important
}

.pl-2, .px-2 {
    padding-left: .5rem !important
}

.p-3 {
    padding: 1rem !important
}

.pt-3, .py-3 {
    padding-top: 1rem !important
}

.pr-3, .px-3 {
    padding-right: 1rem !important
}

.pb-3, .py-3 {
    padding-bottom: 1rem !important
}

.pl-3, .px-3 {
    padding-left: 1rem !important
}

.p-4 {
    padding: 1.5rem !important
}

.pt-4, .py-4 {
    padding-top: 1.5rem !important
}

.pr-4, .px-4 {
    padding-right: 1.5rem !important
}

.pb-4, .py-4 {
    padding-bottom: 1.5rem !important
}

.pl-4, .px-4 {
    padding-left: 1.5rem !important
}

.p-5 {
    padding: 3rem !important
}

.pt-5, .py-5 {
    padding-top: 3rem !important
}

.pr-5, .px-5 {
    padding-right: 3rem !important
}

.pb-5, .py-5 {
    padding-bottom: 3rem !important
}

.pl-5, .px-5 {
    padding-left: 3rem !important
}

.m-auto {
    margin: auto !important
}

.mt-auto, .my-auto {
    margin-top: auto !important
}

.mr-auto, .mx-auto {
    margin-right: auto !important
}

.mb-auto, .my-auto {
    margin-bottom: auto !important
}

.ml-auto, .mx-auto {
    margin-left: auto !important
}

@media (min-width: 576px) {
    .m-sm-0 {
        margin: 0 !important
    }

    .mt-sm-0, .my-sm-0 {
        margin-top: 0 !important
    }

    .mr-sm-0, .mx-sm-0 {
        margin-right: 0 !important
    }

    .mb-sm-0, .my-sm-0 {
        margin-bottom: 0 !important
    }

    .ml-sm-0, .mx-sm-0 {
        margin-left: 0 !important
    }

    .m-sm-1 {
        margin: .25rem !important
    }

    .mt-sm-1, .my-sm-1 {
        margin-top: .25rem !important
    }

    .mr-sm-1, .mx-sm-1 {
        margin-right: .25rem !important
    }

    .mb-sm-1, .my-sm-1 {
        margin-bottom: .25rem !important
    }

    .ml-sm-1, .mx-sm-1 {
        margin-left: .25rem !important
    }

    .m-sm-2 {
        margin: .5rem !important
    }

    .mt-sm-2, .my-sm-2 {
        margin-top: .5rem !important
    }

    .mr-sm-2, .mx-sm-2 {
        margin-right: .5rem !important
    }

    .mb-sm-2, .my-sm-2 {
        margin-bottom: .5rem !important
    }

    .ml-sm-2, .mx-sm-2 {
        margin-left: .5rem !important
    }

    .m-sm-3 {
        margin: 1rem !important
    }

    .mt-sm-3, .my-sm-3 {
        margin-top: 1rem !important
    }

    .mr-sm-3, .mx-sm-3 {
        margin-right: 1rem !important
    }

    .mb-sm-3, .my-sm-3 {
        margin-bottom: 1rem !important
    }

    .ml-sm-3, .mx-sm-3 {
        margin-left: 1rem !important
    }

    .m-sm-4 {
        margin: 1.5rem !important
    }

    .mt-sm-4, .my-sm-4 {
        margin-top: 1.5rem !important
    }

    .mr-sm-4, .mx-sm-4 {
        margin-right: 1.5rem !important
    }

    .mb-sm-4, .my-sm-4 {
        margin-bottom: 1.5rem !important
    }

    .ml-sm-4, .mx-sm-4 {
        margin-left: 1.5rem !important
    }

    .m-sm-5 {
        margin: 3rem !important
    }

    .mt-sm-5, .my-sm-5 {
        margin-top: 3rem !important
    }

    .mr-sm-5, .mx-sm-5 {
        margin-right: 3rem !important
    }

    .mb-sm-5, .my-sm-5 {
        margin-bottom: 3rem !important
    }

    .ml-sm-5, .mx-sm-5 {
        margin-left: 3rem !important
    }

    .p-sm-0 {
        padding: 0 !important
    }

    .pt-sm-0, .py-sm-0 {
        padding-top: 0 !important
    }

    .pr-sm-0, .px-sm-0 {
        padding-right: 0 !important
    }

    .pb-sm-0, .py-sm-0 {
        padding-bottom: 0 !important
    }

    .pl-sm-0, .px-sm-0 {
        padding-left: 0 !important
    }

    .p-sm-1 {
        padding: .25rem !important
    }

    .pt-sm-1, .py-sm-1 {
        padding-top: .25rem !important
    }

    .pr-sm-1, .px-sm-1 {
        padding-right: .25rem !important
    }

    .pb-sm-1, .py-sm-1 {
        padding-bottom: .25rem !important
    }

    .pl-sm-1, .px-sm-1 {
        padding-left: .25rem !important
    }

    .p-sm-2 {
        padding: .5rem !important
    }

    .pt-sm-2, .py-sm-2 {
        padding-top: .5rem !important
    }

    .pr-sm-2, .px-sm-2 {
        padding-right: .5rem !important
    }

    .pb-sm-2, .py-sm-2 {
        padding-bottom: .5rem !important
    }

    .pl-sm-2, .px-sm-2 {
        padding-left: .5rem !important
    }

    .p-sm-3 {
        padding: 1rem !important
    }

    .pt-sm-3, .py-sm-3 {
        padding-top: 1rem !important
    }

    .pr-sm-3, .px-sm-3 {
        padding-right: 1rem !important
    }

    .pb-sm-3, .py-sm-3 {
        padding-bottom: 1rem !important
    }

    .pl-sm-3, .px-sm-3 {
        padding-left: 1rem !important
    }

    .p-sm-4 {
        padding: 1.5rem !important
    }

    .pt-sm-4, .py-sm-4 {
        padding-top: 1.5rem !important
    }

    .pr-sm-4, .px-sm-4 {
        padding-right: 1.5rem !important
    }

    .pb-sm-4, .py-sm-4 {
        padding-bottom: 1.5rem !important
    }

    .pl-sm-4, .px-sm-4 {
        padding-left: 1.5rem !important
    }

    .p-sm-5 {
        padding: 3rem !important
    }

    .pt-sm-5, .py-sm-5 {
        padding-top: 3rem !important
    }

    .pr-sm-5, .px-sm-5 {
        padding-right: 3rem !important
    }

    .pb-sm-5, .py-sm-5 {
        padding-bottom: 3rem !important
    }

    .pl-sm-5, .px-sm-5 {
        padding-left: 3rem !important
    }

    .m-sm-auto {
        margin: auto !important
    }

    .mt-sm-auto, .my-sm-auto {
        margin-top: auto !important
    }

    .mr-sm-auto, .mx-sm-auto {
        margin-right: auto !important
    }

    .mb-sm-auto, .my-sm-auto {
        margin-bottom: auto !important
    }

    .ml-sm-auto, .mx-sm-auto {
        margin-left: auto !important
    }
}

@media (min-width: 768px) {
    .m-md-0 {
        margin: 0 !important
    }

    .mt-md-0, .my-md-0 {
        margin-top: 0 !important
    }

    .mr-md-0, .mx-md-0 {
        margin-right: 0 !important
    }

    .mb-md-0, .my-md-0 {
        margin-bottom: 0 !important
    }

    .ml-md-0, .mx-md-0 {
        margin-left: 0 !important
    }

    .m-md-1 {
        margin: .25rem !important
    }

    .mt-md-1, .my-md-1 {
        margin-top: .25rem !important
    }

    .mr-md-1, .mx-md-1 {
        margin-right: .25rem !important
    }

    .mb-md-1, .my-md-1 {
        margin-bottom: .25rem !important
    }

    .ml-md-1, .mx-md-1 {
        margin-left: .25rem !important
    }

    .m-md-2 {
        margin: .5rem !important
    }

    .mt-md-2, .my-md-2 {
        margin-top: .5rem !important
    }

    .mr-md-2, .mx-md-2 {
        margin-right: .5rem !important
    }

    .mb-md-2, .my-md-2 {
        margin-bottom: .5rem !important
    }

    .ml-md-2, .mx-md-2 {
        margin-left: .5rem !important
    }

    .m-md-3 {
        margin: 1rem !important
    }

    .mt-md-3, .my-md-3 {
        margin-top: 1rem !important
    }

    .mr-md-3, .mx-md-3 {
        margin-right: 1rem !important
    }

    .mb-md-3, .my-md-3 {
        margin-bottom: 1rem !important
    }

    .ml-md-3, .mx-md-3 {
        margin-left: 1rem !important
    }

    .m-md-4 {
        margin: 1.5rem !important
    }

    .mt-md-4, .my-md-4 {
        margin-top: 1.5rem !important
    }

    .mr-md-4, .mx-md-4 {
        margin-right: 1.5rem !important
    }

    .mb-md-4, .my-md-4 {
        margin-bottom: 1.5rem !important
    }

    .ml-md-4, .mx-md-4 {
        margin-left: 1.5rem !important
    }

    .m-md-5 {
        margin: 3rem !important
    }

    .mt-md-5, .my-md-5 {
        margin-top: 3rem !important
    }

    .mr-md-5, .mx-md-5 {
        margin-right: 3rem !important
    }

    .mb-md-5, .my-md-5 {
        margin-bottom: 3rem !important
    }

    .ml-md-5, .mx-md-5 {
        margin-left: 3rem !important
    }

    .p-md-0 {
        padding: 0 !important
    }

    .pt-md-0, .py-md-0 {
        padding-top: 0 !important
    }

    .pr-md-0, .px-md-0 {
        padding-right: 0 !important
    }

    .pb-md-0, .py-md-0 {
        padding-bottom: 0 !important
    }

    .pl-md-0, .px-md-0 {
        padding-left: 0 !important
    }

    .p-md-1 {
        padding: .25rem !important
    }

    .pt-md-1, .py-md-1 {
        padding-top: .25rem !important
    }

    .pr-md-1, .px-md-1 {
        padding-right: .25rem !important
    }

    .pb-md-1, .py-md-1 {
        padding-bottom: .25rem !important
    }

    .pl-md-1, .px-md-1 {
        padding-left: .25rem !important
    }

    .p-md-2 {
        padding: .5rem !important
    }

    .pt-md-2, .py-md-2 {
        padding-top: .5rem !important
    }

    .pr-md-2, .px-md-2 {
        padding-right: .5rem !important
    }

    .pb-md-2, .py-md-2 {
        padding-bottom: .5rem !important
    }

    .pl-md-2, .px-md-2 {
        padding-left: .5rem !important
    }

    .p-md-3 {
        padding: 1rem !important
    }

    .pt-md-3, .py-md-3 {
        padding-top: 1rem !important
    }

    .pr-md-3, .px-md-3 {
        padding-right: 1rem !important
    }

    .pb-md-3, .py-md-3 {
        padding-bottom: 1rem !important
    }

    .pl-md-3, .px-md-3 {
        padding-left: 1rem !important
    }

    .p-md-4 {
        padding: 1.5rem !important
    }

    .pt-md-4, .py-md-4 {
        padding-top: 1.5rem !important
    }

    .pr-md-4, .px-md-4 {
        padding-right: 1.5rem !important
    }

    .pb-md-4, .py-md-4 {
        padding-bottom: 1.5rem !important
    }

    .pl-md-4, .px-md-4 {
        padding-left: 1.5rem !important
    }

    .p-md-5 {
        padding: 3rem !important
    }

    .pt-md-5, .py-md-5 {
        padding-top: 3rem !important
    }

    .pr-md-5, .px-md-5 {
        padding-right: 3rem !important
    }

    .pb-md-5, .py-md-5 {
        padding-bottom: 3rem !important
    }

    .pl-md-5, .px-md-5 {
        padding-left: 3rem !important
    }

    .m-md-auto {
        margin: auto !important
    }

    .mt-md-auto, .my-md-auto {
        margin-top: auto !important
    }

    .mr-md-auto, .mx-md-auto {
        margin-right: auto !important
    }

    .mb-md-auto, .my-md-auto {
        margin-bottom: auto !important
    }

    .ml-md-auto, .mx-md-auto {
        margin-left: auto !important
    }
}

@media (min-width: 992px) {
    .m-lg-0 {
        margin: 0 !important
    }

    .mt-lg-0, .my-lg-0 {
        margin-top: 0 !important
    }

    .mr-lg-0, .mx-lg-0 {
        margin-right: 0 !important
    }

    .mb-lg-0, .my-lg-0 {
        margin-bottom: 0 !important
    }

    .ml-lg-0, .mx-lg-0 {
        margin-left: 0 !important
    }

    .m-lg-1 {
        margin: .25rem !important
    }

    .mt-lg-1, .my-lg-1 {
        margin-top: .25rem !important
    }

    .mr-lg-1, .mx-lg-1 {
        margin-right: .25rem !important
    }

    .mb-lg-1, .my-lg-1 {
        margin-bottom: .25rem !important
    }

    .ml-lg-1, .mx-lg-1 {
        margin-left: .25rem !important
    }

    .m-lg-2 {
        margin: .5rem !important
    }

    .mt-lg-2, .my-lg-2 {
        margin-top: .5rem !important
    }

    .mr-lg-2, .mx-lg-2 {
        margin-right: .5rem !important
    }

    .mb-lg-2, .my-lg-2 {
        margin-bottom: .5rem !important
    }

    .ml-lg-2, .mx-lg-2 {
        margin-left: .5rem !important
    }

    .m-lg-3 {
        margin: 1rem !important
    }

    .mt-lg-3, .my-lg-3 {
        margin-top: 1rem !important
    }

    .mr-lg-3, .mx-lg-3 {
        margin-right: 1rem !important
    }

    .mb-lg-3, .my-lg-3 {
        margin-bottom: 1rem !important
    }

    .ml-lg-3, .mx-lg-3 {
        margin-left: 1rem !important
    }

    .m-lg-4 {
        margin: 1.5rem !important
    }

    .mt-lg-4, .my-lg-4 {
        margin-top: 1.5rem !important
    }

    .mr-lg-4, .mx-lg-4 {
        margin-right: 1.5rem !important
    }

    .mb-lg-4, .my-lg-4 {
        margin-bottom: 1.5rem !important
    }

    .ml-lg-4, .mx-lg-4 {
        margin-left: 1.5rem !important
    }

    .m-lg-5 {
        margin: 3rem !important
    }

    .mt-lg-5, .my-lg-5 {
        margin-top: 3rem !important
    }

    .mr-lg-5, .mx-lg-5 {
        margin-right: 3rem !important
    }

    .mb-lg-5, .my-lg-5 {
        margin-bottom: 3rem !important
    }

    .ml-lg-5, .mx-lg-5 {
        margin-left: 3rem !important
    }

    .p-lg-0 {
        padding: 0 !important
    }

    .pt-lg-0, .py-lg-0 {
        padding-top: 0 !important
    }

    .pr-lg-0, .px-lg-0 {
        padding-right: 0 !important
    }

    .pb-lg-0, .py-lg-0 {
        padding-bottom: 0 !important
    }

    .pl-lg-0, .px-lg-0 {
        padding-left: 0 !important
    }

    .p-lg-1 {
        padding: .25rem !important
    }

    .pt-lg-1, .py-lg-1 {
        padding-top: .25rem !important
    }

    .pr-lg-1, .px-lg-1 {
        padding-right: .25rem !important
    }

    .pb-lg-1, .py-lg-1 {
        padding-bottom: .25rem !important
    }

    .pl-lg-1, .px-lg-1 {
        padding-left: .25rem !important
    }

    .p-lg-2 {
        padding: .5rem !important
    }

    .pt-lg-2, .py-lg-2 {
        padding-top: .5rem !important
    }

    .pr-lg-2, .px-lg-2 {
        padding-right: .5rem !important
    }

    .pb-lg-2, .py-lg-2 {
        padding-bottom: .5rem !important
    }

    .pl-lg-2, .px-lg-2 {
        padding-left: .5rem !important
    }

    .p-lg-3 {
        padding: 1rem !important
    }

    .pt-lg-3, .py-lg-3 {
        padding-top: 1rem !important
    }

    .pr-lg-3, .px-lg-3 {
        padding-right: 1rem !important
    }

    .pb-lg-3, .py-lg-3 {
        padding-bottom: 1rem !important
    }

    .pl-lg-3, .px-lg-3 {
        padding-left: 1rem !important
    }

    .p-lg-4 {
        padding: 1.5rem !important
    }

    .pt-lg-4, .py-lg-4 {
        padding-top: 1.5rem !important
    }

    .pr-lg-4, .px-lg-4 {
        padding-right: 1.5rem !important
    }

    .pb-lg-4, .py-lg-4 {
        padding-bottom: 1.5rem !important
    }

    .pl-lg-4, .px-lg-4 {
        padding-left: 1.5rem !important
    }

    .p-lg-5 {
        padding: 3rem !important
    }

    .pt-lg-5, .py-lg-5 {
        padding-top: 3rem !important
    }

    .pr-lg-5, .px-lg-5 {
        padding-right: 3rem !important
    }

    .pb-lg-5, .py-lg-5 {
        padding-bottom: 3rem !important
    }

    .pl-lg-5, .px-lg-5 {
        padding-left: 3rem !important
    }

    .m-lg-auto {
        margin: auto !important
    }

    .mt-lg-auto, .my-lg-auto {
        margin-top: auto !important
    }

    .mr-lg-auto, .mx-lg-auto {
        margin-right: auto !important
    }

    .mb-lg-auto, .my-lg-auto {
        margin-bottom: auto !important
    }

    .ml-lg-auto, .mx-lg-auto {
        margin-left: auto !important
    }
}

@media (min-width: 1200px) {
    .m-xl-0 {
        margin: 0 !important
    }

    .mt-xl-0, .my-xl-0 {
        margin-top: 0 !important
    }

    .mr-xl-0, .mx-xl-0 {
        margin-right: 0 !important
    }

    .mb-xl-0, .my-xl-0 {
        margin-bottom: 0 !important
    }

    .ml-xl-0, .mx-xl-0 {
        margin-left: 0 !important
    }

    .m-xl-1 {
        margin: .25rem !important
    }

    .mt-xl-1, .my-xl-1 {
        margin-top: .25rem !important
    }

    .mr-xl-1, .mx-xl-1 {
        margin-right: .25rem !important
    }

    .mb-xl-1, .my-xl-1 {
        margin-bottom: .25rem !important
    }

    .ml-xl-1, .mx-xl-1 {
        margin-left: .25rem !important
    }

    .m-xl-2 {
        margin: .5rem !important
    }

    .mt-xl-2, .my-xl-2 {
        margin-top: .5rem !important
    }

    .mr-xl-2, .mx-xl-2 {
        margin-right: .5rem !important
    }

    .mb-xl-2, .my-xl-2 {
        margin-bottom: .5rem !important
    }

    .ml-xl-2, .mx-xl-2 {
        margin-left: .5rem !important
    }

    .m-xl-3 {
        margin: 1rem !important
    }

    .mt-xl-3, .my-xl-3 {
        margin-top: 1rem !important
    }

    .mr-xl-3, .mx-xl-3 {
        margin-right: 1rem !important
    }

    .mb-xl-3, .my-xl-3 {
        margin-bottom: 1rem !important
    }

    .ml-xl-3, .mx-xl-3 {
        margin-left: 1rem !important
    }

    .m-xl-4 {
        margin: 1.5rem !important
    }

    .mt-xl-4, .my-xl-4 {
        margin-top: 1.5rem !important
    }

    .mr-xl-4, .mx-xl-4 {
        margin-right: 1.5rem !important
    }

    .mb-xl-4, .my-xl-4 {
        margin-bottom: 1.5rem !important
    }

    .ml-xl-4, .mx-xl-4 {
        margin-left: 1.5rem !important
    }

    .m-xl-5 {
        margin: 3rem !important
    }

    .mt-xl-5, .my-xl-5 {
        margin-top: 3rem !important
    }

    .mr-xl-5, .mx-xl-5 {
        margin-right: 3rem !important
    }

    .mb-xl-5, .my-xl-5 {
        margin-bottom: 3rem !important
    }

    .ml-xl-5, .mx-xl-5 {
        margin-left: 3rem !important
    }

    .p-xl-0 {
        padding: 0 !important
    }

    .pt-xl-0, .py-xl-0 {
        padding-top: 0 !important
    }

    .pr-xl-0, .px-xl-0 {
        padding-right: 0 !important
    }

    .pb-xl-0, .py-xl-0 {
        padding-bottom: 0 !important
    }

    .pl-xl-0, .px-xl-0 {
        padding-left: 0 !important
    }

    .p-xl-1 {
        padding: .25rem !important
    }

    .pt-xl-1, .py-xl-1 {
        padding-top: .25rem !important
    }

    .pr-xl-1, .px-xl-1 {
        padding-right: .25rem !important
    }

    .pb-xl-1, .py-xl-1 {
        padding-bottom: .25rem !important
    }

    .pl-xl-1, .px-xl-1 {
        padding-left: .25rem !important
    }

    .p-xl-2 {
        padding: .5rem !important
    }

    .pt-xl-2, .py-xl-2 {
        padding-top: .5rem !important
    }

    .pr-xl-2, .px-xl-2 {
        padding-right: .5rem !important
    }

    .pb-xl-2, .py-xl-2 {
        padding-bottom: .5rem !important
    }

    .pl-xl-2, .px-xl-2 {
        padding-left: .5rem !important
    }

    .p-xl-3 {
        padding: 1rem !important
    }

    .pt-xl-3, .py-xl-3 {
        padding-top: 1rem !important
    }

    .pr-xl-3, .px-xl-3 {
        padding-right: 1rem !important
    }

    .pb-xl-3, .py-xl-3 {
        padding-bottom: 1rem !important
    }

    .pl-xl-3, .px-xl-3 {
        padding-left: 1rem !important
    }

    .p-xl-4 {
        padding: 1.5rem !important
    }

    .pt-xl-4, .py-xl-4 {
        padding-top: 1.5rem !important
    }

    .pr-xl-4, .px-xl-4 {
        padding-right: 1.5rem !important
    }

    .pb-xl-4, .py-xl-4 {
        padding-bottom: 1.5rem !important
    }

    .pl-xl-4, .px-xl-4 {
        padding-left: 1.5rem !important
    }

    .p-xl-5 {
        padding: 3rem !important
    }

    .pt-xl-5, .py-xl-5 {
        padding-top: 3rem !important
    }

    .pr-xl-5, .px-xl-5 {
        padding-right: 3rem !important
    }

    .pb-xl-5, .py-xl-5 {
        padding-bottom: 3rem !important
    }

    .pl-xl-5, .px-xl-5 {
        padding-left: 3rem !important
    }

    .m-xl-auto {
        margin: auto !important
    }

    .mt-xl-auto, .my-xl-auto {
        margin-top: auto !important
    }

    .mr-xl-auto, .mx-xl-auto {
        margin-right: auto !important
    }

    .mb-xl-auto, .my-xl-auto {
        margin-bottom: auto !important
    }

    .ml-xl-auto, .mx-xl-auto {
        margin-left: auto !important
    }
}

.text-justify {
    text-align: justify !important
}

.text-nowrap {
    white-space: nowrap !important
}

.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

.text-left {
    text-align: left !important
}

.text-right {
    text-align: right !important
}

.text-center {
    text-align: center !important
}

@media (min-width: 576px) {
    .text-sm-left {
        text-align: left !important
    }

    .text-sm-right {
        text-align: right !important
    }

    .text-sm-center {
        text-align: center !important
    }
}

@media (min-width: 768px) {
    .text-md-left {
        text-align: left !important
    }

    .text-md-right {
        text-align: right !important
    }

    .text-md-center {
        text-align: center !important
    }
}

@media (min-width: 992px) {
    .text-lg-left {
        text-align: left !important
    }

    .text-lg-right {
        text-align: right !important
    }

    .text-lg-center {
        text-align: center !important
    }
}

@media (min-width: 1200px) {
    .text-xl-left {
        text-align: left !important
    }

    .text-xl-right {
        text-align: right !important
    }

    .text-xl-center {
        text-align: center !important
    }
}

.text-lowercase {
    text-transform: lowercase !important
}

.text-uppercase {
    text-transform: uppercase !important
}

.text-capitalize {
    text-transform: capitalize !important
}

.font-weight-light {
    font-weight: 300 !important
}

.font-weight-normal {
    font-weight: 400 !important
}

.font-weight-bold {
    font-weight: 700 !important
}

.font-italic {
    font-style: italic !important
}

.text-white {
    color: #fff !important
}

.text-primary {
    color: #007bff !important
}

a.text-primary:focus, a.text-primary:hover {
    color: #0062cc !important
}

.text-secondary {
    color: #6c757d !important
}

a.text-secondary:focus, a.text-secondary:hover {
    color: #545b62 !important
}

.text-success {
    color: #28a745 !important
}

a.text-success:focus, a.text-success:hover {
    color: #1e7e34 !important
}

.text-info {
    color: #17a2b8 !important
}

a.text-info:focus, a.text-info:hover {
    color: #117a8b !important
}

.text-warning {
    color: #ffc107 !important
}

a.text-warning:focus, a.text-warning:hover {
    color: #d39e00 !important
}

.text-danger {
    color: #dc3545 !important
}

a.text-danger:focus, a.text-danger:hover {
    color: #bd2130 !important
}

.text-light {
    color: #f8f9fa !important
}

a.text-light:focus, a.text-light:hover {
    color: #dae0e5 !important
}

.text-dark {
    color: #343a40 !important
}

a.text-dark:focus, a.text-dark:hover {
    color: #1d2124 !important
}

.text-muted {
    color: #6c757d !important
}

.text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0
}

.visible {
    visibility: visible !important
}

.invisible {
    visibility: hidden !important
}

@media print {
    *, ::after, ::before {
        text-shadow: none !important;
        box-shadow: none !important
    }

    a:not(.btn) {
        text-decoration: underline
    }

    abbr[title]::after {
        content: " (" attr(title) ")"
    }

    pre {
        white-space: pre-wrap !important
    }

    blockquote, pre {
        border: 1px solid #999;
        page-break-inside: avoid
    }

    thead {
        display: table-header-group
    }

    img, tr {
        page-break-inside: avoid
    }

    h2, h3, p {
        orphans: 3;
        widows: 3
    }

    h2, h3 {
        page-break-after: avoid
    }

    @page {
        size: a3
    }

    body {
        min-width: 992px !important
    }

    .container {
        min-width: 992px !important
    }

    .navbar {
        display: none
    }

    .badge {
        border: 1px solid #000
    }

    .table {
        border-collapse: collapse !important
    }

    .table td, .table th {
        background-color: #fff !important
    }

    .table-bordered td, .table-bordered th {
        border: 1px solid #ddd !important
    }
}

.bootstrap-select.btn-group .dropdown-menu li.disabled a, .bootstrap-select.btn-group.disabled, .bootstrap-select.btn-group > .disabled {
    cursor: not-allowed
}

select.bs-select-hidden, select.selectpicker {
    display: none !important
}

.bootstrap-select {
    width: 220px
}

.bootstrap-select > .dropdown-toggle {
    width: 100%;
    padding-right: 25px;
    z-index: 1
}

.bootstrap-select > .dropdown-toggle.bs-placeholder, .bootstrap-select > .dropdown-toggle.bs-placeholder:active, .bootstrap-select > .dropdown-toggle.bs-placeholder:focus, .bootstrap-select > .dropdown-toggle.bs-placeholder:hover {
    color: #999
}

.bootstrap-select > select {
    position: absolute !important;
    bottom: 0;
    left: 50%;
    display: block !important;
    width: .5px !important;
    height: 100% !important;
    padding: 0 !important;
    opacity: 0 !important;
    border: none
}

.bootstrap-select > select.mobile-device {
    top: 0;
    left: 0;
    display: block !important;
    width: 100% !important;
    z-index: 2
}

.error .bootstrap-select .dropdown-toggle, .has-error .bootstrap-select .dropdown-toggle {
    border-color: #b94a48
}

.bootstrap-select.fit-width {
    width: auto !important
}

.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
    width: 220px
}

.bootstrap-select.btn-group[class*=col-] .dropdown-toggle, .bootstrap-select.form-control:not([class*=col-]), .form-inline .bootstrap-select.btn-group .form-control {
    width: 100%
}

.bootstrap-select .dropdown-toggle:focus {
    outline: #333 dotted thin !important;
    outline: -webkit-focus-ring-color auto 5px !important;
    outline-offset: -2px
}

.bootstrap-select.form-control {
    margin-bottom: 0;
    padding: 0;
    border: none
}

.bootstrap-select.form-control.input-group-btn {
    z-index: auto
}

.bootstrap-select.form-control.input-group-btn:not(:first-child):not(:last-child) > .btn {
    border-radius: 0
}

.bootstrap-select.btn-group:not(.input-group-btn), .bootstrap-select.btn-group[class*=col-] {
    float: none;
    display: inline-block;
    margin-left: 0
}

.bootstrap-select.btn-group.dropdown-menu-right, .bootstrap-select.btn-group[class*=col-].dropdown-menu-right, .row .bootstrap-select.btn-group[class*=col-].dropdown-menu-right {
    float: right
}

.form-group .bootstrap-select.btn-group, .form-horizontal .bootstrap-select.btn-group, .form-inline .bootstrap-select.btn-group {
    margin-bottom: 0
}

.form-group-lg .bootstrap-select.btn-group.form-control, .form-group-sm .bootstrap-select.btn-group.form-control {
    padding: 0
}

.form-group-lg .bootstrap-select.btn-group.form-control .dropdown-toggle, .form-group-sm .bootstrap-select.btn-group.form-control .dropdown-toggle {
    height: 100%;
    font-size: inherit;
    line-height: inherit;
    border-radius: inherit
}

.bootstrap-select.btn-group.disabled:focus, .bootstrap-select.btn-group > .disabled:focus {
    outline: 0 !important
}

.bootstrap-select.btn-group.bs-container {
    position: absolute;
    height: 0 !important;
    padding: 0 !important
}

.bootstrap-select.btn-group.bs-container .dropdown-menu {
    z-index: 1060
}

.bootstrap-select.btn-group .dropdown-toggle .filter-option {
    display: inline-block;
    overflow: hidden;
    width: 100%;
    text-align: left
}

.bootstrap-select.btn-group .dropdown-toggle .caret {
    position: absolute;
    top: 50%;
    right: 12px;
    margin-top: -2px;
    vertical-align: middle
}

.bootstrap-select.btn-group .dropdown-menu {
    min-width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.bootstrap-select.btn-group .dropdown-menu.inner {
    position: static;
    float: none;
    border: 0;
    padding: 0;
    margin: 0;
    border-radius: 0;
    -webkit-box-shadow: none;
    box-shadow: none
}

.bootstrap-select.btn-group .dropdown-menu li {
    position: relative
}

.bootstrap-select.btn-group .dropdown-menu li.active small {
    color: #fff
}

.bootstrap-select.btn-group .dropdown-menu li a {
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.bootstrap-select.btn-group .dropdown-menu li a.opt {
    position: relative;
    padding-left: 2.25em
}

.bootstrap-select.btn-group .dropdown-menu li a span.check-mark {
    display: none
}

.bootstrap-select.btn-group .dropdown-menu li a span.text {
    display: inline-block
}

.bootstrap-select.btn-group .dropdown-menu li small {
    padding-left: .5em
}

.bootstrap-select.btn-group .dropdown-menu .notify {
    position: absolute;
    bottom: 5px;
    width: 96%;
    margin: 0 2%;
    min-height: 26px;
    padding: 3px 5px;
    background: #f5f5f5;
    border: 1px solid #e3e3e3;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
    pointer-events: none;
    opacity: .9;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.bootstrap-select.btn-group .no-results {
    padding: 3px;
    background: #f5f5f5;
    margin: 0 5px;
    white-space: nowrap
}

.bootstrap-select.btn-group.fit-width .dropdown-toggle .filter-option {
    position: static
}

.bootstrap-select.btn-group.fit-width .dropdown-toggle .caret {
    position: static;
    top: auto;
    margin-top: -1px
}

.bootstrap-select.btn-group.show-tick .dropdown-menu li.selected a span.check-mark {
    position: absolute;
    display: inline-block;
    right: 15px;
    margin-top: 5px
}

.bootstrap-select.btn-group.show-tick .dropdown-menu li a span.text {
    margin-right: 34px
}

.bootstrap-select.show-menu-arrow.open > .dropdown-toggle {
    z-index: 1061
}

.bootstrap-select.show-menu-arrow .dropdown-toggle:before {
    content: '';
    border-left: 7px solid transparent;
    border-right: 7px solid transparent;
    border-bottom: 7px solid rgba(204,204,204,.2);
    position: absolute;
    bottom: -4px;
    left: 9px;
    display: none
}

.bootstrap-select.show-menu-arrow .dropdown-toggle:after {
    content: '';
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-bottom: 6px solid #fff;
    position: absolute;
    bottom: -4px;
    left: 10px;
    display: none
}

.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:before {
    bottom: auto;
    top: -3px;
    border-top: 7px solid rgba(204,204,204,.2);
    border-bottom: 0
}

.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:after {
    bottom: auto;
    top: -3px;
    border-top: 6px solid #fff;
    border-bottom: 0
}

.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:before {
    right: 12px;
    left: auto
}

.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:after {
    right: 13px;
    left: auto
}

.bootstrap-select.show-menu-arrow.open > .dropdown-toggle:after, .bootstrap-select.show-menu-arrow.open > .dropdown-toggle:before {
    display: block
}

.bs-actionsbox, .bs-donebutton, .bs-searchbox {
    padding: 4px 8px
}

.bs-actionsbox {
    width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.bs-actionsbox .btn-group button {
    width: 50%
}

.bs-donebutton {
    float: left;
    width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.bs-donebutton .btn-group button {
    width: 100%
}

.bs-searchbox + .bs-actionsbox {
    padding: 0 8px 4px
}

.bs-searchbox .form-control {
    margin-bottom: 0;
    width: 100%;
    float: none
}

@charset "UTF-8";@font-face {
    font-family: real-estate;
    src: url(../fonts/real-estate.eot);
    src: url(../fonts/real-estated41d.eot?#iefix) format("embedded-opentype"),url(../fonts/real-estate.woff) format("woff"),url(../fonts/real-estate.ttf) format("truetype"),url(../fonts/real-estate.svg#real-estate) format("svg");
    font-display: swap;
    font-weight: 400;
    font-style: normal
}

[data-icon]:before {
    font-family: real-estate!important;
    content: attr(data-icon);
    font-style: normal!important;
    font-weight: 400!important;
    font-variant: normal!important;
    text-transform: none!important;
    speak: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

[class*=" icon-"]:before,[class^=icon-]:before {
    font-family: real-estate!important;
    font-style: normal!important;
    font-weight: 400!important;
    font-variant: normal!important;
    text-transform: none!important;
    speak: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

.icon-printed:before {
    content: "\61"
}

.icon-blackboard:before {
    content: "\62"
}

.icon-calendar:before {
    content: "\63"
}

.icon-plan:before {
    content: "\64"
}

.icon-real-estate:before {
    content: "\65"
}

.icon-mortgage-1-2:before {
    content: "\66"
}

.icon-up-2:before {
    content: "\67"
}

.icon-flats-1:before {
    content: "\68"
}

.icon-placeholder-2:before {
    content: "\69"
}

.icon-house-11-1:before {
    content: "\6a"
}

.icon-houses:before {
    content: "\6b"
}

.icon-house-10-2:before {
    content: "\6c"
}

.icon-plans:before {
    content: "\6d"
}

.icon-house-9-1:before {
    content: "\6e"
}

.icon-maps-and-flags-6:before {
    content: "\6f"
}

.icon-bridges:before {
    content: "\70"
}

.icon-construction-1:before {
    content: "\71"
}

.icon-house-8-1:before {
    content: "\72"
}

.icon-mechanics:before {
    content: "\73"
}

.icon-house-7-1:before {
    content: "\74"
}

.icon-sit-down:before {
    content: "\75"
}

.icon-hearth:before {
    content: "\76"
}

.icon-house-6-1:before {
    content: "\77"
}

.icon-moving-truck:before {
    content: "\78"
}

.icon-reading-glasses:before {
    content: "\79"
}

.icon-dialogue:before {
    content: "\7a"
}

.icon-mortgage-4:before {
    content: "\41"
}

.icon-house-5-1:before {
    content: "\42"
}

.icon-measuring-1:before {
    content: "\43"
}

.icon-deposit:before {
    content: "\44"
}

.icon-home-11:before {
    content: "\45"
}

.icon-deal:before {
    content: "\46"
}

.icon-door-key:before {
    content: "\47"
}

.icon-book-bag-1:before {
    content: "\48"
}

.icon-house-4-1:before {
    content: "\49"
}

.icon-attached:before {
    content: "\4a"
}

.icon-blueprint-2:before {
    content: "\4b"
}

.icon-fence:before {
    content: "\4c"
}

.icon-hacksaw:before {
    content: "\4d"
}

.icon-user:before {
    content: "\4e"
}

.icon-winch:before {
    content: "\4f"
}

.icon-house-3-1:before {
    content: "\50"
}

.icon-trucks:before {
    content: "\51"
}

.icon-contract:before {
    content: "\52"
}

.icon-gardener:before {
    content: "\53"
}

.icon-house-2-1:before {
    content: "\54"
}

.icon-real-estate-6:before {
    content: "\55"
}

.icon-calculations:before {
    content: "\56"
}

.icon-house-1-1:before {
    content: "\57"
}

.icon-house-42:before {
    content: "\58"
}

.icon-worker:before {
    content: "\59"
}

.icon-pincers:before {
    content: "\5a"
}

.icon-demostration:before {
    content: "\30"
}

.icon-maps-and-flags-5:before {
    content: "\31"
}

.icon-ventilation:before {
    content: "\32"
}

.icon-antennas:before {
    content: "\33"
}

.icon-line-chart:before {
    content: "\34"
}

.icon-closing:before {
    content: "\35"
}

.icon-industrial-park:before {
    content: "\36"
}

.icon-hand-phones:before {
    content: "\37"
}

.icon-storehouse:before {
    content: "\38"
}

.icon-title:before {
    content: "\39"
}

.icon-entrance:before {
    content: "\21"
}

.icon-lover:before {
    content: "\22"
}

.icon-fireplace-1:before {
    content: "\23"
}

.icon-text-file:before {
    content: "\24"
}

.icon-savings:before {
    content: "\25"
}

.icon-interior-design:before {
    content: "\26"
}

.icon-maps-and-flags-4:before {
    content: "\27"
}

.icon-reparation:before {
    content: "\28"
}

.icon-health-care:before {
    content: "\29"
}

.icon-chairs:before {
    content: "\2a"
}

.icon-real-estate-5:before {
    content: "\2b"
}

.icon-paper-printer:before {
    content: "\2c"
}

.icon-maps-and-flags-3:before {
    content: "\2d"
}

.icon-blocked:before {
    content: "\2e"
}

.icon-flats:before {
    content: "\2f"
}

.icon-wheelbarrow:before {
    content: "\3a"
}

.icon-archives:before {
    content: "\3b"
}

.icon-sand-clock:before {
    content: "\3c"
}

.icon-work-tools:before {
    content: "\3d"
}

.icon-ceremonial:before {
    content: "\3e"
}

.icon-maps-and-flags-2:before {
    content: "\3f"
}

.icon-step-ladder:before {
    content: "\40"
}

.icon-real-estate-4:before {
    content: "\5b"
}

.icon-draws:before {
    content: "\5d"
}

.icon-facade-1:before {
    content: "\5e"
}

.icon-real-estate-3:before {
    content: "\5f"
}

.icon-carrier:before {
    content: "\60"
}

.icon-security-system-1:before {
    content: "\7b"
}

.icon-pruners:before {
    content: "\7c"
}

.icon-studying:before {
    content: "\7d"
}

.icon-fireplace:before {
    content: "\7e"
}

.icon-glamour:before {
    content: "\5c"
}

.icon-fader:before {
    content: "\e000"
}

.icon-single:before {
    content: "\e001"
}

.icon-doorway:before {
    content: "\e002"
}

.icon-radiators:before {
    content: "\e003"
}

.icon-barrow:before {
    content: "\e004"
}

.icon-maps-and-flags-1:before {
    content: "\e005"
}

.icon-maps-and-flags:before {
    content: "\e006"
}

.icon-driller:before {
    content: "\e007"
}

.icon-cleaned:before {
    content: "\e008"
}

.icon-domestic-phone:before {
    content: "\e009"
}

.icon-religious:before {
    content: "\e00a"
}

.icon-house-things-2:before {
    content: "\e00b"
}

.icon-industrial:before {
    content: "\e00c"
}

.icon-packaging:before {
    content: "\e00d"
}

.icon-seventeen:before {
    content: "\e00e"
}

.icon-measuring:before {
    content: "\e00f"
}

.icon-indoor:before {
    content: "\e010"
}

.icon-bed-side:before {
    content: "\e011"
}

.icon-paint-roller:before {
    content: "\e012"
}

.icon-turned-off:before {
    content: "\e013"
}

.icon-mailed:before {
    content: "\e014"
}

.icon-gardening:before {
    content: "\e015"
}

.icon-mail:before {
    content: "\e016"
}

.icon-purses:before {
    content: "\e017"
}

.icon-motorhome:before {
    content: "\e018"
}

.icon-file-storage:before {
    content: "\e019"
}

.icon-actions:before {
    content: "\e01a"
}

.icon-door:before {
    content: "\e01b"
}

.icon-house-things-1:before {
    content: "\e01c"
}

.icon-up-1:before {
    content: "\e01d"
}

.icon-cooling:before {
    content: "\e01e"
}

.icon-graphic-design:before {
    content: "\e01f"
}

.icon-shower:before {
    content: "\e020"
}

.icon-transportation:before {
    content: "\e021"
}

.icon-real-estate-2:before {
    content: "\e022"
}

.icon-picket:before {
    content: "\e023"
}

.icon-roof-1:before {
    content: "\e024"
}

.icon-beds:before {
    content: "\e025"
}

.icon-disturbance:before {
    content: "\e026"
}

.icon-house-43:before {
    content: "\e027"
}

.icon-facade:before {
    content: "\e028"
}

.icon-ladders:before {
    content: "\e029"
}

.icon-trees:before {
    content: "\e02a"
}

.icon-paper-work:before {
    content: "\e02b"
}

.icon-online-store:before {
    content: "\e02c"
}

.icon-graphs:before {
    content: "\e02d"
}

.icon-kilograms:before {
    content: "\e02e"
}

.icon-electric-2:before {
    content: "\e02f"
}

.icon-headphones:before {
    content: "\e030"
}

.icon-electric-1:before {
    content: "\e031"
}

.icon-tools-and-utensils:before {
    content: "\e032"
}

.icon-mallet:before {
    content: "\e033"
}

.icon-up:before {
    content: "\e034"
}

.icon-wc:before {
    content: "\e035"
}

.icon-plumbering-1:before {
    content: "\e036"
}

.icon-plumbering:before {
    content: "\e037"
}

.icon-book-bag:before {
    content: "\e038"
}

.icon-relax:before {
    content: "\e039"
}

.icon-rent-1:before {
    content: "\e03a"
}

.icon-wheel-chair:before {
    content: "\e03b"
}

.icon-house-things:before {
    content: "\e03c"
}

.icon-security-system:before {
    content: "\e03d"
}

.icon-real-estate-1-1:before {
    content: "\e03e"
}

.icon-keyword:before {
    content: "\e03f"
}

.icon-garden-work:before {
    content: "\e040"
}

.icon-electric:before {
    content: "\e041"
}

.icon-monumental:before {
    content: "\e042"
}

.icon-metallic-blind:before {
    content: "\e043"
}

.icon-money-icons:before {
    content: "\e044"
}

.icon-hand-gesture:before {
    content: "\e045"
}

.icon-real-estate-7:before {
    content: "\e046"
}

.icon-advert:before {
    content: "\e047"
}

.icon-advertising:before {
    content: "\e048"
}

.icon-apartment-building:before {
    content: "\e049"
}

.icon-apartment-house:before {
    content: "\e04a"
}

.icon-apartment-house-1:before {
    content: "\e04b"
}

.icon-apartment-house-2:before {
    content: "\e04c"
}

.icon-appartment:before {
    content: "\e04d"
}

.icon-appartment-1:before {
    content: "\e04e"
}

.icon-appartments:before {
    content: "\e04f"
}

.icon-appartments-1:before {
    content: "\e050"
}

.icon-arch:before {
    content: "\e051"
}

.icon-award:before {
    content: "\e052"
}

.icon-bank:before {
    content: "\e053"
}

.icon-banker:before {
    content: "\e054"
}

.icon-bar:before {
    content: "\e055"
}

.icon-barn:before {
    content: "\e056"
}

.icon-bell:before {
    content: "\e057"
}

.icon-big-ben:before {
    content: "\e058"
}

.icon-big-castle:before {
    content: "\e059"
}

.icon-big-glamourous-house:before {
    content: "\e05a"
}

.icon-big-office-building:before {
    content: "\e05b"
}

.icon-big-skyscrapers:before {
    content: "\e05c"
}

.icon-blueprint:before {
    content: "\e05d"
}

.icon-blueprint-1:before {
    content: "\e05e"
}

.icon-bridge:before {
    content: "\e05f"
}

.icon-building:before {
    content: "\e060"
}

.icon-building-1:before {
    content: "\e061"
}

.icon-building-2:before {
    content: "\e062"
}

.icon-bunker:before {
    content: "\e063"
}

.icon-businessmen:before {
    content: "\e064"
}

.icon-castle:before {
    content: "\e065"
}

.icon-castle-with-three-towers:before {
    content: "\e066"
}

.icon-catholic-church:before {
    content: "\e067"
}

.icon-church:before {
    content: "\e068"
}

.icon-church-1:before {
    content: "\e069"
}

.icon-church-2:before {
    content: "\e06a"
}

.icon-church-3:before {
    content: "\e06b"
}

.icon-city-hall:before {
    content: "\e06c"
}

.icon-clock:before {
    content: "\e06d"
}

.icon-closed-barn:before {
    content: "\e06e"
}

.icon-closed-garage:before {
    content: "\e06f"
}

.icon-cloud:before {
    content: "\e070"
}

.icon-column:before {
    content: "\e071"
}

.icon-column-1:before {
    content: "\e072"
}

.icon-condo:before {
    content: "\e073"
}

.icon-condo-1:before {
    content: "\e074"
}

.icon-construction:before {
    content: "\e075"
}

.icon-country-family-house:before {
    content: "\e076"
}

.icon-country-house:before {
    content: "\e077"
}

.icon-crane:before {
    content: "\e078"
}

.icon-cupola:before {
    content: "\e079"
}

.icon-doors:before {
    content: "\e07a"
}

.icon-duplex:before {
    content: "\e07b"
}

.icon-duplex-house:before {
    content: "\e07c"
}

.icon-english-cottage:before {
    content: "\e07d"
}

.icon-expensive-house:before {
    content: "\e07e"
}

.icon-factory:before {
    content: "\e07f"
}

.icon-factory-1:before {
    content: "\e080"
}

.icon-factory-2:before {
    content: "\e081"
}

.icon-family-house-facade:before {
    content: "\e082"
}

.icon-farm:before {
    content: "\e083"
}

.icon-fire-station:before {
    content: "\e084"
}

.icon-flat-plant:before {
    content: "\e085"
}

.icon-for-rent:before {
    content: "\e086"
}

.icon-for-sale:before {
    content: "\e087"
}

.icon-frame:before {
    content: "\e088"
}

.icon-garage:before {
    content: "\e089"
}

.icon-garage-1:before {
    content: "\e08a"
}

.icon-gas-station:before {
    content: "\e08b"
}

.icon-gate:before {
    content: "\e08c"
}

.icon-greenhouse:before {
    content: "\e08d"
}

.icon-hall:before {
    content: "\e08e"
}

.icon-hangar:before {
    content: "\e08f"
}

.icon-heater:before {
    content: "\e090"
}

.icon-home:before {
    content: "\e091"
}

.icon-home-1:before {
    content: "\e092"
}

.icon-home-2:before {
    content: "\e093"
}

.icon-home-3:before {
    content: "\e094"
}

.icon-home-4:before {
    content: "\e095"
}

.icon-home-5:before {
    content: "\e096"
}

.icon-home-6:before {
    content: "\e097"
}

.icon-home-7:before {
    content: "\e098"
}

.icon-home-8:before {
    content: "\e099"
}

.icon-home-9:before {
    content: "\e09a"
}

.icon-home-10:before {
    content: "\e09b"
}

.icon-home-repair:before {
    content: "\e09c"
}

.icon-hospital:before {
    content: "\e09d"
}

.icon-hospital-with-cross:before {
    content: "\e09e"
}

.icon-hotel:before {
    content: "\e09f"
}

.icon-house:before {
    content: "\e0a0"
}

.icon-house-1:before {
    content: "\e0a1"
}

.icon-house-2:before {
    content: "\e0a2"
}

.icon-house-3:before {
    content: "\e0a3"
}

.icon-house-4:before {
    content: "\e0a4"
}

.icon-house-5:before {
    content: "\e0a5"
}

.icon-house-6:before {
    content: "\e0a6"
}

.icon-house-7:before {
    content: "\e0a7"
}

.icon-house-8:before {
    content: "\e0a8"
}

.icon-house-9:before {
    content: "\e0a9"
}

.icon-house-10:before {
    content: "\e0aa"
}

.icon-house-11:before {
    content: "\e0ab"
}

.icon-house-12:before {
    content: "\e0ac"
}

.icon-house-13:before {
    content: "\e0ad"
}

.icon-house-14:before {
    content: "\e0ae"
}

.icon-house-14-2:before {
    content: "\e0af"
}

.icon-house-15:before {
    content: "\e0b0"
}

.icon-house-15-2:before {
    content: "\e0b1"
}

.icon-house-16:before {
    content: "\e0b2"
}

.icon-house-16-2:before {
    content: "\e0b3"
}

.icon-house-17:before {
    content: "\e0b4"
}

.icon-house-18:before {
    content: "\e0b5"
}

.icon-house-19:before {
    content: "\e0b6"
}

.icon-house-20:before {
    content: "\e0b7"
}

.icon-house-21:before {
    content: "\e0b8"
}

.icon-house-22:before {
    content: "\e0b9"
}

.icon-house-23:before {
    content: "\e0ba"
}

.icon-house-24:before {
    content: "\e0bb"
}

.icon-house-25:before {
    content: "\e0bc"
}

.icon-house-26:before {
    content: "\e0bd"
}

.icon-house-27:before {
    content: "\e0be"
}

.icon-house-28:before {
    content: "\e0bf"
}

.icon-house-29:before {
    content: "\e0c0"
}

.icon-house-30:before {
    content: "\e0c1"
}

.icon-house-31:before {
    content: "\e0c2"
}

.icon-house-32:before {
    content: "\e0c3"
}

.icon-house-33:before {
    content: "\e0c4"
}

.icon-house-34:before {
    content: "\e0c5"
}

.icon-house-35:before {
    content: "\e0c6"
}

.icon-house-36:before {
    content: "\e0c7"
}

.icon-house-37:before {
    content: "\e0c8"
}

.icon-house-38:before {
    content: "\e0c9"
}

.icon-house-39:before {
    content: "\e0ca"
}

.icon-house-40:before {
    content: "\e0cb"
}

.icon-house-41:before {
    content: "\e0cc"
}

.icon-house-key:before {
    content: "\e0cd"
}

.icon-house-with-garage:before {
    content: "\e0ce"
}

.icon-house-with-hearth:before {
    content: "\e0cf"
}

.icon-industrial-plant:before {
    content: "\e0d0"
}

.icon-industrial-zone:before {
    content: "\e0d1"
}

.icon-industry:before {
    content: "\e0d2"
}

.icon-insurance:before {
    content: "\e0d3"
}

.icon-intersection:before {
    content: "\e0d4"
}

.icon-invention:before {
    content: "\e0d5"
}

.icon-lighthouse:before {
    content: "\e0d6"
}

.icon-lighthouse-construction:before {
    content: "\e0d7"
}

.icon-little-store:before {
    content: "\e0d8"
}

.icon-loft-building:before {
    content: "\e0d9"
}

.icon-loft-with-windows:before {
    content: "\e0da"
}

.icon-mall:before {
    content: "\e0db"
}

.icon-mall-1:before {
    content: "\e0dc"
}

.icon-mansion:before {
    content: "\e0dd"
}

.icon-mansion-1:before {
    content: "\e0de"
}

.icon-mansory:before {
    content: "\e0df"
}

.icon-mill:before {
    content: "\e0e0"
}

.icon-monument:before {
    content: "\e0e1"
}

.icon-mortgage:before {
    content: "\e0e2"
}

.icon-mortgage-1:before {
    content: "\e0e3"
}

.icon-mortgage-2:before {
    content: "\e0e4"
}

.icon-mortgage-3:before {
    content: "\e0e5"
}

.icon-moving:before {
    content: "\e0e6"
}

.icon-museum:before {
    content: "\e0e7"
}

.icon-museum-facade:before {
    content: "\e0e8"
}

.icon-neighborhood:before {
    content: "\e0e9"
}

.icon-nuclear-plant-chimneys:before {
    content: "\e0ea"
}

.icon-observatory:before {
    content: "\e0eb"
}

.icon-office-block:before {
    content: "\e0ec"
}

.icon-office-block-1:before {
    content: "\e0ed"
}

.icon-office-block-2:before {
    content: "\e0ee"
}

.icon-office-building:before {
    content: "\e0ef"
}

.icon-office-store:before {
    content: "\e0f0"
}

.icon-painted:before {
    content: "\e0f1"
}

.icon-placeholder:before {
    content: "\e0f2"
}

.icon-police-station-facade:before {
    content: "\e0f3"
}

.icon-property:before {
    content: "\e0f4"
}

.icon-property-1:before {
    content: "\e0f5"
}

.icon-pyramids:before {
    content: "\e0f6"
}

.icon-real-estate-1:before {
    content: "\e0f7"
}

.icon-real-state:before {
    content: "\e0f8"
}

.icon-rent:before {
    content: "\e0f9"
}

.icon-roof:before {
    content: "\e0fa"
}

.icon-rural-house:before {
    content: "\e0fb"
}

.icon-russian-orthodox-church:before {
    content: "\e0fc"
}

.icon-scarecrow:before {
    content: "\e0fd"
}

.icon-shop:before {
    content: "\e0fe"
}

.icon-showroom:before {
    content: "\e0ff"
}

.icon-skycraper:before {
    content: "\e100"
}

.icon-skyline:before {
    content: "\e101"
}

.icon-skyscraper-building:before {
    content: "\e102"
}

.icon-skyscraper-with-antennas:before {
    content: "\e103"
}

.icon-small-chapel:before {
    content: "\e104"
}

.icon-small-wind-mill:before {
    content: "\e105"
}

.icon-smartphone:before {
    content: "\e106"
}

.icon-snow-globe:before {
    content: "\e107"
}

.icon-solar-panel:before {
    content: "\e108"
}

.icon-stairs:before {
    content: "\e109"
}

.icon-store:before {
    content: "\e10a"
}

.icon-store-1:before {
    content: "\e10b"
}

.icon-store-2:before {
    content: "\e10c"
}

.icon-store-3:before {
    content: "\e10d"
}

.icon-store-building:before {
    content: "\e10e"
}

.icon-store-building-2:before {
    content: "\e10f"
}

.icon-stores:before {
    content: "\e110"
}

.icon-street-shop:before {
    content: "\e111"
}

.icon-supermaket:before {
    content: "\e112"
}

.icon-supermarket:before {
    content: "\e113"
}

.icon-switch-off:before {
    content: "\e114"
}

.icon-synagogue:before {
    content: "\e115"
}

.icon-towels:before {
    content: "\e116"
}

.icon-tower:before {
    content: "\e117"
}

.icon-tower-1:before {
    content: "\e118"
}

.icon-towers:before {
    content: "\e119"
}

.icon-towers-1:before {
    content: "\e11a"
}

.icon-towers-2:before {
    content: "\e11b"
}

.icon-trucks-1:before {
    content: "\e11c"
}

.icon-tv-tower:before {
    content: "\e11d"
}

.icon-wall:before {
    content: "\e11e"
}

.icon-water-tower:before {
    content: "\e11f"
}

.icon-mosque-facade:before {
    content: "\e120"
}

.icon-pet-shop:before {
    content: "\e121"
}

.icon-school-building:before {
    content: "\e122"
}

.icon-stairs-1:before {
    content: "\e123"
}

.icon-theater-facade:before {
    content: "\e124"
}

.icon-placeholder-1:before {
    content: "\e125"
}

.icon-clock-1:before {
    content: "\e126"
}

.icon-telephone:before {
    content: "\e127"
}

.icon-envelope:before {
    content: "\e128"
}

.icon-bathtub:before {
    content: "\e129"
}

.icon-bed:before {
    content: "\e12a"
}

.icon-electric-car:before {
    content: "\e12b"
}

.icon-car:before {
    content: "\e12c"
}

.icon-smart-phone-2:before {
    content: "\e12d"
}

.icon-envelope-1:before {
    content: "\e12e"
}

.icon-ios-people-outline:before {
    content: "\e12f"
}

.icon-briefcase:before {
    content: "\e131"
}

.icon-email-plane:before {
    content: "\e132"
}

.icon-user-1:before {
    content: "\e133"
}

.icon-users:before {
    content: "\e130"
}

.icon-close-round:before {
    content: "\e135"
}

.icon-search:before {
    content: "\e134"
}

/*!
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
@font-face {
    font-family: FontAwesome;
    src: url(/fonts/fontawesome-webfont.eot?v=4.7.0);
    src: url(/fonts/fontawesome-webfont.eot?#iefix&v=4.7.0) format('embedded-opentype'),url(/fonts/fontawesome-webfont.woff2?v=4.7.0) format('woff2'),url(/fonts/fontawesome-webfont.woff?v=4.7.0) format('woff'),url(/fonts/fontawesome-webfont.ttf?v=4.7.0) format('truetype'),url(../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular) format('svg');
    font-display: swap;
    font-weight: 400;
    font-style: normal
}

.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
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

.fa-fw {
    width: 1.28571429em;
    text-align: center
}

.fa-ul {
    padding-left: 0;
    margin-left: 2.14285714em;
    list-style-type: none
}

.fa-ul>li {
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
    border: solid .08em #eee;
    border-radius: .1em
}

.fa-pull-left {
    float: left
}

.fa-pull-right {
    float: right
}

.fa.fa-pull-left {
    margin-right: .3em
}

.fa.fa-pull-right {
    margin-left: .3em
}

.pull-right {
    float: right
}

.pull-left {
    float: left
}

.fa.pull-left {
    margin-right: .3em
}

.fa.pull-right {
    margin-left: .3em
}

.fa-spin {
    -webkit-animation: fa-spin 2s infinite linear;
    animation: fa-spin 2s infinite linear
}

.fa-pulse {
    -webkit-animation: fa-spin 1s infinite steps(8);
    animation: fa-spin 1s infinite steps(8)
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

.fa-rotate-90 {
    -webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg)
}

.fa-rotate-180 {
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg)
}

.fa-rotate-270 {
    -webkit-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg)
}

.fa-flip-horizontal {
    -webkit-transform: scale(-1,1);
    -ms-transform: scale(-1,1);
    transform: scale(-1,1)
}

.fa-flip-vertical {
    -webkit-transform: scale(1,-1);
    -ms-transform: scale(1,-1);
    transform: scale(1,-1)
}

:root .fa-flip-horizontal,:root .fa-flip-vertical,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-rotate-90 {
    filter: none
}

.fa-stack {
    position: relative;
    display: inline-block;
    width: 2em;
    height: 2em;
    line-height: 2em;
    vertical-align: middle
}

.fa-stack-1x,.fa-stack-2x {
    position: absolute;
    left: 0;
    width: 100%;
    text-align: center
}

.fa-stack-1x {
    line-height: inherit
}

.fa-stack-2x {
    font-size: 2em
}

.fa-inverse {
    color: #fff
}

.fa-glass:before {
    content: "\f000"
}

.fa-music:before {
    content: "\f001"
}

.fa-search:before {
    content: "\f002"
}

.fa-envelope-o:before {
    content: "\f003"
}

.fa-heart:before {
    content: "\f004"
}

.fa-star:before {
    content: "\f005"
}

.fa-star-o:before {
    content: "\f006"
}

.fa-user:before {
    content: "\f007"
}

.fa-film:before {
    content: "\f008"
}

.fa-th-large:before {
    content: "\f009"
}

.fa-th:before {
    content: "\f00a"
}

.fa-th-list:before {
    content: "\f00b"
}

.fa-check:before {
    content: "\f00c"
}

.fa-close:before,.fa-remove:before,.fa-times:before {
    content: "\f00d"
}

.fa-search-plus:before {
    content: "\f00e"
}

.fa-search-minus:before {
    content: "\f010"
}

.fa-power-off:before {
    content: "\f011"
}

.fa-signal:before {
    content: "\f012"
}

.fa-cog:before,.fa-gear:before {
    content: "\f013"
}

.fa-trash-o:before {
    content: "\f014"
}

.fa-home:before {
    content: "\f015"
}

.fa-file-o:before {
    content: "\f016"
}

.fa-clock-o:before {
    content: "\f017"
}

.fa-road:before {
    content: "\f018"
}

.fa-download:before {
    content: "\f019"
}

.fa-arrow-circle-o-down:before {
    content: "\f01a"
}

.fa-arrow-circle-o-up:before {
    content: "\f01b"
}

.fa-inbox:before {
    content: "\f01c"
}

.fa-play-circle-o:before {
    content: "\f01d"
}

.fa-repeat:before,.fa-rotate-right:before {
    content: "\f01e"
}

.fa-refresh:before {
    content: "\f021"
}

.fa-list-alt:before {
    content: "\f022"
}

.fa-lock:before {
    content: "\f023"
}

.fa-flag:before {
    content: "\f024"
}

.fa-headphones:before {
    content: "\f025"
}

.fa-volume-off:before {
    content: "\f026"
}

.fa-volume-down:before {
    content: "\f027"
}

.fa-volume-up:before {
    content: "\f028"
}

.fa-qrcode:before {
    content: "\f029"
}

.fa-barcode:before {
    content: "\f02a"
}

.fa-tag:before {
    content: "\f02b"
}

.fa-tags:before {
    content: "\f02c"
}

.fa-book:before {
    content: "\f02d"
}

.fa-bookmark:before {
    content: "\f02e"
}

.fa-print:before {
    content: "\f02f"
}

.fa-camera:before {
    content: "\f030"
}

.fa-font:before {
    content: "\f031"
}

.fa-bold:before {
    content: "\f032"
}

.fa-italic:before {
    content: "\f033"
}

.fa-text-height:before {
    content: "\f034"
}

.fa-text-width:before {
    content: "\f035"
}

.fa-align-left:before {
    content: "\f036"
}

.fa-align-center:before {
    content: "\f037"
}

.fa-align-right:before {
    content: "\f038"
}

.fa-align-justify:before {
    content: "\f039"
}

.fa-list:before {
    content: "\f03a"
}

.fa-dedent:before,.fa-outdent:before {
    content: "\f03b"
}

.fa-indent:before {
    content: "\f03c"
}

.fa-video-camera:before {
    content: "\f03d"
}

.fa-image:before,.fa-photo:before,.fa-picture-o:before {
    content: "\f03e"
}

.fa-pencil:before {
    content: "\f040"
}

.fa-map-marker:before {
    content: "\f041"
}

.fa-adjust:before {
    content: "\f042"
}

.fa-tint:before {
    content: "\f043"
}

.fa-edit:before,.fa-pencil-square-o:before {
    content: "\f044"
}

.fa-share-square-o:before {
    content: "\f045"
}

.fa-check-square-o:before {
    content: "\f046"
}

.fa-arrows:before {
    content: "\f047"
}

.fa-step-backward:before {
    content: "\f048"
}

.fa-fast-backward:before {
    content: "\f049"
}

.fa-backward:before {
    content: "\f04a"
}

.fa-play:before {
    content: "\f04b"
}

.fa-pause:before {
    content: "\f04c"
}

.fa-stop:before {
    content: "\f04d"
}

.fa-forward:before {
    content: "\f04e"
}

.fa-fast-forward:before {
    content: "\f050"
}

.fa-step-forward:before {
    content: "\f051"
}

.fa-eject:before {
    content: "\f052"
}

.fa-chevron-left:before {
    content: "\f053"
}

.fa-chevron-right:before {
    content: "\f054"
}

.fa-plus-circle:before {
    content: "\f055"
}

.fa-minus-circle:before {
    content: "\f056"
}

.fa-times-circle:before {
    content: "\f057"
}

.fa-check-circle:before {
    content: "\f058"
}

.fa-question-circle:before {
    content: "\f059"
}

.fa-info-circle:before {
    content: "\f05a"
}

.fa-crosshairs:before {
    content: "\f05b"
}

.fa-times-circle-o:before {
    content: "\f05c"
}

.fa-check-circle-o:before {
    content: "\f05d"
}

.fa-ban:before {
    content: "\f05e"
}

.fa-arrow-left:before {
    content: "\f060"
}

.fa-arrow-right:before {
    content: "\f061"
}

.fa-arrow-up:before {
    content: "\f062"
}

.fa-arrow-down:before {
    content: "\f063"
}

.fa-mail-forward:before,.fa-share:before {
    content: "\f064"
}

.fa-expand:before {
    content: "\f065"
}

.fa-compress:before {
    content: "\f066"
}

.fa-plus:before {
    content: "\f067"
}

.fa-minus:before {
    content: "\f068"
}

.fa-asterisk:before {
    content: "\f069"
}

.fa-exclamation-circle:before {
    content: "\f06a"
}

.fa-gift:before {
    content: "\f06b"
}

.fa-leaf:before {
    content: "\f06c"
}

.fa-fire:before {
    content: "\f06d"
}

.fa-eye:before {
    content: "\f06e"
}

.fa-eye-slash:before {
    content: "\f070"
}

.fa-exclamation-triangle:before,.fa-warning:before {
    content: "\f071"
}

.fa-plane:before {
    content: "\f072"
}

.fa-calendar:before {
    content: "\f073"
}

.fa-random:before {
    content: "\f074"
}

.fa-comment:before {
    content: "\f075"
}

.fa-magnet:before {
    content: "\f076"
}

.fa-chevron-up:before {
    content: "\f077"
}

.fa-chevron-down:before {
    content: "\f078"
}

.fa-retweet:before {
    content: "\f079"
}

.fa-shopping-cart:before {
    content: "\f07a"
}

.fa-folder:before {
    content: "\f07b"
}

.fa-folder-open:before {
    content: "\f07c"
}

.fa-arrows-v:before {
    content: "\f07d"
}

.fa-arrows-h:before {
    content: "\f07e"
}

.fa-bar-chart-o:before,.fa-bar-chart:before {
    content: "\f080"
}

.fa-twitter-square:before {
    content: "\f081"
}

.fa-facebook-square:before {
    content: "\f082"
}

.fa-camera-retro:before {
    content: "\f083"
}

.fa-key:before {
    content: "\f084"
}

.fa-cogs:before,.fa-gears:before {
    content: "\f085"
}

.fa-comments:before {
    content: "\f086"
}

.fa-thumbs-o-up:before {
    content: "\f087"
}

.fa-thumbs-o-down:before {
    content: "\f088"
}

.fa-star-half:before {
    content: "\f089"
}

.fa-heart-o:before {
    content: "\f08a"
}

.fa-sign-out:before {
    content: "\f08b"
}

.fa-linkedin-square:before {
    content: "\f08c"
}

.fa-thumb-tack:before {
    content: "\f08d"
}

.fa-external-link:before {
    content: "\f08e"
}

.fa-sign-in:before {
    content: "\f090"
}

.fa-trophy:before {
    content: "\f091"
}

.fa-github-square:before {
    content: "\f092"
}

.fa-upload:before {
    content: "\f093"
}

.fa-lemon-o:before {
    content: "\f094"
}

.fa-phone:before {
    content: "\f095"
}

.fa-square-o:before {
    content: "\f096"
}

.fa-bookmark-o:before {
    content: "\f097"
}

.fa-phone-square:before {
    content: "\f098"
}

.fa-twitter:before {
    content: "\f099"
}

.fa-facebook-f:before,.fa-facebook:before {
    content: "\f09a"
}

.fa-github:before {
    content: "\f09b"
}

.fa-unlock:before {
    content: "\f09c"
}

.fa-credit-card:before {
    content: "\f09d"
}

.fa-feed:before,.fa-rss:before {
    content: "\f09e"
}

.fa-hdd-o:before {
    content: "\f0a0"
}

.fa-bullhorn:before {
    content: "\f0a1"
}

.fa-bell:before {
    content: "\f0f3"
}

.fa-certificate:before {
    content: "\f0a3"
}

.fa-hand-o-right:before {
    content: "\f0a4"
}

.fa-hand-o-left:before {
    content: "\f0a5"
}

.fa-hand-o-up:before {
    content: "\f0a6"
}

.fa-hand-o-down:before {
    content: "\f0a7"
}

.fa-arrow-circle-left:before {
    content: "\f0a8"
}

.fa-arrow-circle-right:before {
    content: "\f0a9"
}

.fa-arrow-circle-up:before {
    content: "\f0aa"
}

.fa-arrow-circle-down:before {
    content: "\f0ab"
}

.fa-globe:before {
    content: "\f0ac"
}

.fa-wrench:before {
    content: "\f0ad"
}

.fa-tasks:before {
    content: "\f0ae"
}

.fa-filter:before {
    content: "\f0b0"
}

.fa-briefcase:before {
    content: "\f0b1"
}

.fa-arrows-alt:before {
    content: "\f0b2"
}

.fa-group:before,.fa-users:before {
    content: "\f0c0"
}

.fa-chain:before,.fa-link:before {
    content: "\f0c1"
}

.fa-cloud:before {
    content: "\f0c2"
}

.fa-flask:before {
    content: "\f0c3"
}

.fa-cut:before,.fa-scissors:before {
    content: "\f0c4"
}

.fa-copy:before,.fa-files-o:before {
    content: "\f0c5"
}

.fa-paperclip:before {
    content: "\f0c6"
}

.fa-floppy-o:before,.fa-save:before {
    content: "\f0c7"
}

.fa-square:before {
    content: "\f0c8"
}

.fa-bars:before,.fa-navicon:before,.fa-reorder:before {
    content: "\f0c9"
}

.fa-list-ul:before {
    content: "\f0ca"
}

.fa-list-ol:before {
    content: "\f0cb"
}

.fa-strikethrough:before {
    content: "\f0cc"
}

.fa-underline:before {
    content: "\f0cd"
}

.fa-table:before {
    content: "\f0ce"
}

.fa-magic:before {
    content: "\f0d0"
}

.fa-truck:before {
    content: "\f0d1"
}

.fa-pinterest:before {
    content: "\f0d2"
}

.fa-pinterest-square:before {
    content: "\f0d3"
}

.fa-google-plus-square:before {
    content: "\f0d4"
}

.fa-google-plus:before {
    content: "\f0d5"
}

.fa-money:before {
    content: "\f0d6"
}

.fa-caret-down:before {
    content: "\f0d7"
}

.fa-caret-up:before {
    content: "\f0d8"
}

.fa-caret-left:before {
    content: "\f0d9"
}

.fa-caret-right:before {
    content: "\f0da"
}

.fa-columns:before {
    content: "\f0db"
}

.fa-sort:before,.fa-unsorted:before {
    content: "\f0dc"
}

.fa-sort-desc:before,.fa-sort-down:before {
    content: "\f0dd"
}

.fa-sort-asc:before,.fa-sort-up:before {
    content: "\f0de"
}

.fa-envelope:before {
    content: "\f0e0"
}

.fa-linkedin:before {
    content: "\f0e1"
}

.fa-rotate-left:before,.fa-undo:before {
    content: "\f0e2"
}

.fa-gavel:before,.fa-legal:before {
    content: "\f0e3"
}

.fa-dashboard:before,.fa-tachometer:before {
    content: "\f0e4"
}

.fa-comment-o:before {
    content: "\f0e5"
}

.fa-comments-o:before {
    content: "\f0e6"
}

.fa-bolt:before,.fa-flash:before {
    content: "\f0e7"
}

.fa-sitemap:before {
    content: "\f0e8"
}

.fa-umbrella:before {
    content: "\f0e9"
}

.fa-clipboard:before,.fa-paste:before {
    content: "\f0ea"
}

.fa-lightbulb-o:before {
    content: "\f0eb"
}

.fa-exchange:before {
    content: "\f0ec"
}

.fa-cloud-download:before {
    content: "\f0ed"
}

.fa-cloud-upload:before {
    content: "\f0ee"
}

.fa-user-md:before {
    content: "\f0f0"
}

.fa-stethoscope:before {
    content: "\f0f1"
}

.fa-suitcase:before {
    content: "\f0f2"
}

.fa-bell-o:before {
    content: "\f0a2"
}

.fa-coffee:before {
    content: "\f0f4"
}

.fa-cutlery:before {
    content: "\f0f5"
}

.fa-file-text-o:before {
    content: "\f0f6"
}

.fa-building-o:before {
    content: "\f0f7"
}

.fa-hospital-o:before {
    content: "\f0f8"
}

.fa-ambulance:before {
    content: "\f0f9"
}

.fa-medkit:before {
    content: "\f0fa"
}

.fa-fighter-jet:before {
    content: "\f0fb"
}

.fa-beer:before {
    content: "\f0fc"
}

.fa-h-square:before {
    content: "\f0fd"
}

.fa-plus-square:before {
    content: "\f0fe"
}

.fa-angle-double-left:before {
    content: "\f100"
}

.fa-angle-double-right:before {
    content: "\f101"
}

.fa-angle-double-up:before {
    content: "\f102"
}

.fa-angle-double-down:before {
    content: "\f103"
}

.fa-angle-left:before {
    content: "\f104"
}

.fa-angle-right:before {
    content: "\f105"
}

.fa-angle-up:before {
    content: "\f106"
}

.fa-angle-down:before {
    content: "\f107"
}

.fa-desktop:before {
    content: "\f108"
}

.fa-laptop:before {
    content: "\f109"
}

.fa-tablet:before {
    content: "\f10a"
}

.fa-mobile-phone:before,.fa-mobile:before {
    content: "\f10b"
}

.fa-circle-o:before {
    content: "\f10c"
}

.fa-quote-left:before {
    content: "\f10d"
}

.fa-quote-right:before {
    content: "\f10e"
}

.fa-spinner:before {
    content: "\f110"
}

.fa-circle:before {
    content: "\f111"
}

.fa-mail-reply:before,.fa-reply:before {
    content: "\f112"
}

.fa-github-alt:before {
    content: "\f113"
}

.fa-folder-o:before {
    content: "\f114"
}

.fa-folder-open-o:before {
    content: "\f115"
}

.fa-smile-o:before {
    content: "\f118"
}

.fa-frown-o:before {
    content: "\f119"
}

.fa-meh-o:before {
    content: "\f11a"
}

.fa-gamepad:before {
    content: "\f11b"
}

.fa-keyboard-o:before {
    content: "\f11c"
}

.fa-flag-o:before {
    content: "\f11d"
}

.fa-flag-checkered:before {
    content: "\f11e"
}

.fa-terminal:before {
    content: "\f120"
}

.fa-code:before {
    content: "\f121"
}

.fa-mail-reply-all:before,.fa-reply-all:before {
    content: "\f122"
}

.fa-star-half-empty:before,.fa-star-half-full:before,.fa-star-half-o:before {
    content: "\f123"
}

.fa-location-arrow:before {
    content: "\f124"
}

.fa-crop:before {
    content: "\f125"
}

.fa-code-fork:before {
    content: "\f126"
}

.fa-chain-broken:before,.fa-unlink:before {
    content: "\f127"
}

.fa-question:before {
    content: "\f128"
}

.fa-info:before {
    content: "\f129"
}

.fa-exclamation:before {
    content: "\f12a"
}

.fa-superscript:before {
    content: "\f12b"
}

.fa-subscript:before {
    content: "\f12c"
}

.fa-eraser:before {
    content: "\f12d"
}

.fa-puzzle-piece:before {
    content: "\f12e"
}

.fa-microphone:before {
    content: "\f130"
}

.fa-microphone-slash:before {
    content: "\f131"
}

.fa-shield:before {
    content: "\f132"
}

.fa-calendar-o:before {
    content: "\f133"
}

.fa-fire-extinguisher:before {
    content: "\f134"
}

.fa-rocket:before {
    content: "\f135"
}

.fa-maxcdn:before {
    content: "\f136"
}

.fa-chevron-circle-left:before {
    content: "\f137"
}

.fa-chevron-circle-right:before {
    content: "\f138"
}

.fa-chevron-circle-up:before {
    content: "\f139"
}

.fa-chevron-circle-down:before {
    content: "\f13a"
}

.fa-html5:before {
    content: "\f13b"
}

.fa-css3:before {
    content: "\f13c"
}

.fa-anchor:before {
    content: "\f13d"
}

.fa-unlock-alt:before {
    content: "\f13e"
}

.fa-bullseye:before {
    content: "\f140"
}

.fa-ellipsis-h:before {
    content: "\f141"
}

.fa-ellipsis-v:before {
    content: "\f142"
}

.fa-rss-square:before {
    content: "\f143"
}

.fa-play-circle:before {
    content: "\f144"
}

.fa-ticket:before {
    content: "\f145"
}

.fa-minus-square:before {
    content: "\f146"
}

.fa-minus-square-o:before {
    content: "\f147"
}

.fa-level-up:before {
    content: "\f148"
}

.fa-level-down:before {
    content: "\f149"
}

.fa-check-square:before {
    content: "\f14a"
}

.fa-pencil-square:before {
    content: "\f14b"
}

.fa-external-link-square:before {
    content: "\f14c"
}

.fa-share-square:before {
    content: "\f14d"
}

.fa-compass:before {
    content: "\f14e"
}

.fa-caret-square-o-down:before,.fa-toggle-down:before {
    content: "\f150"
}

.fa-caret-square-o-up:before,.fa-toggle-up:before {
    content: "\f151"
}

.fa-caret-square-o-right:before,.fa-toggle-right:before {
    content: "\f152"
}

.fa-eur:before,.fa-euro:before {
    content: "\f153"
}

.fa-gbp:before {
    content: "\f154"
}

.fa-dollar:before,.fa-usd:before {
    content: "\f155"
}

.fa-inr:before,.fa-rupee:before {
    content: "\f156"
}

.fa-cny:before,.fa-jpy:before,.fa-rmb:before,.fa-yen:before {
    content: "\f157"
}

.fa-rouble:before,.fa-rub:before,.fa-ruble:before {
    content: "\f158"
}

.fa-krw:before,.fa-won:before {
    content: "\f159"
}

.fa-bitcoin:before,.fa-btc:before {
    content: "\f15a"
}

.fa-file:before {
    content: "\f15b"
}

.fa-file-text:before {
    content: "\f15c"
}

.fa-sort-alpha-asc:before {
    content: "\f15d"
}

.fa-sort-alpha-desc:before {
    content: "\f15e"
}

.fa-sort-amount-asc:before {
    content: "\f160"
}

.fa-sort-amount-desc:before {
    content: "\f161"
}

.fa-sort-numeric-asc:before {
    content: "\f162"
}

.fa-sort-numeric-desc:before {
    content: "\f163"
}

.fa-thumbs-up:before {
    content: "\f164"
}

.fa-thumbs-down:before {
    content: "\f165"
}

.fa-youtube-square:before {
    content: "\f166"
}

.fa-youtube:before {
    content: "\f167"
}

.fa-xing:before {
    content: "\f168"
}

.fa-xing-square:before {
    content: "\f169"
}

.fa-youtube-play:before {
    content: "\f16a"
}

.fa-dropbox:before {
    content: "\f16b"
}

.fa-stack-overflow:before {
    content: "\f16c"
}

.fa-instagram:before {
    content: "\f16d"
}

.fa-flickr:before {
    content: "\f16e"
}

.fa-adn:before {
    content: "\f170"
}

.fa-bitbucket:before {
    content: "\f171"
}

.fa-bitbucket-square:before {
    content: "\f172"
}

.fa-tumblr:before {
    content: "\f173"
}

.fa-tumblr-square:before {
    content: "\f174"
}

.fa-long-arrow-down:before {
    content: "\f175"
}

.fa-long-arrow-up:before {
    content: "\f176"
}

.fa-long-arrow-left:before {
    content: "\f177"
}

.fa-long-arrow-right:before {
    content: "\f178"
}

.fa-apple:before {
    content: "\f179"
}

.fa-windows:before {
    content: "\f17a"
}

.fa-android:before {
    content: "\f17b"
}

.fa-linux:before {
    content: "\f17c"
}

.fa-dribbble:before {
    content: "\f17d"
}

.fa-skype:before {
    content: "\f17e"
}

.fa-foursquare:before {
    content: "\f180"
}

.fa-trello:before {
    content: "\f181"
}

.fa-female:before {
    content: "\f182"
}

.fa-male:before {
    content: "\f183"
}

.fa-gittip:before,.fa-gratipay:before {
    content: "\f184"
}

.fa-sun-o:before {
    content: "\f185"
}

.fa-moon-o:before {
    content: "\f186"
}

.fa-archive:before {
    content: "\f187"
}

.fa-bug:before {
    content: "\f188"
}

.fa-vk:before {
    content: "\f189"
}

.fa-weibo:before {
    content: "\f18a"
}

.fa-renren:before {
    content: "\f18b"
}

.fa-pagelines:before {
    content: "\f18c"
}

.fa-stack-exchange:before {
    content: "\f18d"
}

.fa-arrow-circle-o-right:before {
    content: "\f18e"
}

.fa-arrow-circle-o-left:before {
    content: "\f190"
}

.fa-caret-square-o-left:before,.fa-toggle-left:before {
    content: "\f191"
}

.fa-dot-circle-o:before {
    content: "\f192"
}

.fa-wheelchair:before {
    content: "\f193"
}

.fa-vimeo-square:before {
    content: "\f194"
}

.fa-try:before,.fa-turkish-lira:before {
    content: "\f195"
}

.fa-plus-square-o:before {
    content: "\f196"
}

.fa-space-shuttle:before {
    content: "\f197"
}

.fa-slack:before {
    content: "\f198"
}

.fa-envelope-square:before {
    content: "\f199"
}

.fa-wordpress:before {
    content: "\f19a"
}

.fa-openid:before {
    content: "\f19b"
}

.fa-bank:before,.fa-institution:before,.fa-university:before {
    content: "\f19c"
}

.fa-graduation-cap:before,.fa-mortar-board:before {
    content: "\f19d"
}

.fa-yahoo:before {
    content: "\f19e"
}

.fa-google:before {
    content: "\f1a0"
}

.fa-reddit:before {
    content: "\f1a1"
}

.fa-reddit-square:before {
    content: "\f1a2"
}

.fa-stumbleupon-circle:before {
    content: "\f1a3"
}

.fa-stumbleupon:before {
    content: "\f1a4"
}

.fa-delicious:before {
    content: "\f1a5"
}

.fa-digg:before {
    content: "\f1a6"
}

.fa-pied-piper-pp:before {
    content: "\f1a7"
}

.fa-pied-piper-alt:before {
    content: "\f1a8"
}

.fa-drupal:before {
    content: "\f1a9"
}

.fa-joomla:before {
    content: "\f1aa"
}

.fa-language:before {
    content: "\f1ab"
}

.fa-fax:before {
    content: "\f1ac"
}

.fa-building:before {
    content: "\f1ad"
}

.fa-child:before {
    content: "\f1ae"
}

.fa-paw:before {
    content: "\f1b0"
}

.fa-spoon:before {
    content: "\f1b1"
}

.fa-cube:before {
    content: "\f1b2"
}

.fa-cubes:before {
    content: "\f1b3"
}

.fa-behance:before {
    content: "\f1b4"
}

.fa-behance-square:before {
    content: "\f1b5"
}

.fa-steam:before {
    content: "\f1b6"
}

.fa-steam-square:before {
    content: "\f1b7"
}

.fa-recycle:before {
    content: "\f1b8"
}

.fa-automobile:before,.fa-car:before {
    content: "\f1b9"
}

.fa-cab:before,.fa-taxi:before {
    content: "\f1ba"
}

.fa-tree:before {
    content: "\f1bb"
}

.fa-spotify:before {
    content: "\f1bc"
}

.fa-deviantart:before {
    content: "\f1bd"
}

.fa-soundcloud:before {
    content: "\f1be"
}

.fa-database:before {
    content: "\f1c0"
}

.fa-file-pdf-o:before {
    content: "\f1c1"
}

.fa-file-word-o:before {
    content: "\f1c2"
}

.fa-file-excel-o:before {
    content: "\f1c3"
}

.fa-file-powerpoint-o:before {
    content: "\f1c4"
}

.fa-file-image-o:before,.fa-file-photo-o:before,.fa-file-picture-o:before {
    content: "\f1c5"
}

.fa-file-archive-o:before,.fa-file-zip-o:before {
    content: "\f1c6"
}

.fa-file-audio-o:before,.fa-file-sound-o:before {
    content: "\f1c7"
}

.fa-file-movie-o:before,.fa-file-video-o:before {
    content: "\f1c8"
}

.fa-file-code-o:before {
    content: "\f1c9"
}

.fa-vine:before {
    content: "\f1ca"
}

.fa-codepen:before {
    content: "\f1cb"
}

.fa-jsfiddle:before {
    content: "\f1cc"
}

.fa-life-bouy:before,.fa-life-buoy:before,.fa-life-ring:before,.fa-life-saver:before,.fa-support:before {
    content: "\f1cd"
}

.fa-circle-o-notch:before {
    content: "\f1ce"
}

.fa-ra:before,.fa-rebel:before,.fa-resistance:before {
    content: "\f1d0"
}

.fa-empire:before,.fa-ge:before {
    content: "\f1d1"
}

.fa-git-square:before {
    content: "\f1d2"
}

.fa-git:before {
    content: "\f1d3"
}

.fa-hacker-news:before,.fa-y-combinator-square:before,.fa-yc-square:before {
    content: "\f1d4"
}

.fa-tencent-weibo:before {
    content: "\f1d5"
}

.fa-qq:before {
    content: "\f1d6"
}

.fa-wechat:before,.fa-weixin:before {
    content: "\f1d7"
}

.fa-paper-plane:before,.fa-send:before {
    content: "\f1d8"
}

.fa-paper-plane-o:before,.fa-send-o:before {
    content: "\f1d9"
}

.fa-history:before {
    content: "\f1da"
}

.fa-circle-thin:before {
    content: "\f1db"
}

.fa-header:before {
    content: "\f1dc"
}

.fa-paragraph:before {
    content: "\f1dd"
}

.fa-sliders:before {
    content: "\f1de"
}

.fa-share-alt:before {
    content: "\f1e0"
}

.fa-share-alt-square:before {
    content: "\f1e1"
}

.fa-bomb:before {
    content: "\f1e2"
}

.fa-futbol-o:before,.fa-soccer-ball-o:before {
    content: "\f1e3"
}

.fa-tty:before {
    content: "\f1e4"
}

.fa-binoculars:before {
    content: "\f1e5"
}

.fa-plug:before {
    content: "\f1e6"
}

.fa-slideshare:before {
    content: "\f1e7"
}

.fa-twitch:before {
    content: "\f1e8"
}

.fa-yelp:before {
    content: "\f1e9"
}

.fa-newspaper-o:before {
    content: "\f1ea"
}

.fa-wifi:before {
    content: "\f1eb"
}

.fa-calculator:before {
    content: "\f1ec"
}

.fa-paypal:before {
    content: "\f1ed"
}

.fa-google-wallet:before {
    content: "\f1ee"
}

.fa-cc-visa:before {
    content: "\f1f0"
}

.fa-cc-mastercard:before {
    content: "\f1f1"
}

.fa-cc-discover:before {
    content: "\f1f2"
}

.fa-cc-amex:before {
    content: "\f1f3"
}

.fa-cc-paypal:before {
    content: "\f1f4"
}

.fa-cc-stripe:before {
    content: "\f1f5"
}

.fa-bell-slash:before {
    content: "\f1f6"
}

.fa-bell-slash-o:before {
    content: "\f1f7"
}

.fa-trash:before {
    content: "\f1f8"
}

.fa-copyright:before {
    content: "\f1f9"
}

.fa-at:before {
    content: "\f1fa"
}

.fa-eyedropper:before {
    content: "\f1fb"
}

.fa-paint-brush:before {
    content: "\f1fc"
}

.fa-birthday-cake:before {
    content: "\f1fd"
}

.fa-area-chart:before {
    content: "\f1fe"
}

.fa-pie-chart:before {
    content: "\f200"
}

.fa-line-chart:before {
    content: "\f201"
}

.fa-lastfm:before {
    content: "\f202"
}

.fa-lastfm-square:before {
    content: "\f203"
}

.fa-toggle-off:before {
    content: "\f204"
}

.fa-toggle-on:before {
    content: "\f205"
}

.fa-bicycle:before {
    content: "\f206"
}

.fa-bus:before {
    content: "\f207"
}

.fa-ioxhost:before {
    content: "\f208"
}

.fa-angellist:before {
    content: "\f209"
}

.fa-cc:before {
    content: "\f20a"
}

.fa-ils:before,.fa-shekel:before,.fa-sheqel:before {
    content: "\f20b"
}

.fa-meanpath:before {
    content: "\f20c"
}

.fa-buysellads:before {
    content: "\f20d"
}

.fa-connectdevelop:before {
    content: "\f20e"
}

.fa-dashcube:before {
    content: "\f210"
}

.fa-forumbee:before {
    content: "\f211"
}

.fa-leanpub:before {
    content: "\f212"
}

.fa-sellsy:before {
    content: "\f213"
}

.fa-shirtsinbulk:before {
    content: "\f214"
}

.fa-simplybuilt:before {
    content: "\f215"
}

.fa-skyatlas:before {
    content: "\f216"
}

.fa-cart-plus:before {
    content: "\f217"
}

.fa-cart-arrow-down:before {
    content: "\f218"
}

.fa-diamond:before {
    content: "\f219"
}

.fa-ship:before {
    content: "\f21a"
}

.fa-user-secret:before {
    content: "\f21b"
}

.fa-motorcycle:before {
    content: "\f21c"
}

.fa-street-view:before {
    content: "\f21d"
}

.fa-heartbeat:before {
    content: "\f21e"
}

.fa-venus:before {
    content: "\f221"
}

.fa-mars:before {
    content: "\f222"
}

.fa-mercury:before {
    content: "\f223"
}

.fa-intersex:before,.fa-transgender:before {
    content: "\f224"
}

.fa-transgender-alt:before {
    content: "\f225"
}

.fa-venus-double:before {
    content: "\f226"
}

.fa-mars-double:before {
    content: "\f227"
}

.fa-venus-mars:before {
    content: "\f228"
}

.fa-mars-stroke:before {
    content: "\f229"
}

.fa-mars-stroke-v:before {
    content: "\f22a"
}

.fa-mars-stroke-h:before {
    content: "\f22b"
}

.fa-neuter:before {
    content: "\f22c"
}

.fa-genderless:before {
    content: "\f22d"
}

.fa-facebook-official:before {
    content: "\f230"
}

.fa-pinterest-p:before {
    content: "\f231"
}

.fa-whatsapp:before {
    content: "\f232"
}

.fa-server:before {
    content: "\f233"
}

.fa-user-plus:before {
    content: "\f234"
}

.fa-user-times:before {
    content: "\f235"
}

.fa-bed:before,.fa-hotel:before {
    content: "\f236"
}

.fa-viacoin:before {
    content: "\f237"
}

.fa-train:before {
    content: "\f238"
}

.fa-subway:before {
    content: "\f239"
}

.fa-medium:before {
    content: "\f23a"
}

.fa-y-combinator:before,.fa-yc:before {
    content: "\f23b"
}

.fa-optin-monster:before {
    content: "\f23c"
}

.fa-opencart:before {
    content: "\f23d"
}

.fa-expeditedssl:before {
    content: "\f23e"
}

.fa-battery-4:before,.fa-battery-full:before,.fa-battery:before {
    content: "\f240"
}

.fa-battery-3:before,.fa-battery-three-quarters:before {
    content: "\f241"
}

.fa-battery-2:before,.fa-battery-half:before {
    content: "\f242"
}

.fa-battery-1:before,.fa-battery-quarter:before {
    content: "\f243"
}

.fa-battery-0:before,.fa-battery-empty:before {
    content: "\f244"
}

.fa-mouse-pointer:before {
    content: "\f245"
}

.fa-i-cursor:before {
    content: "\f246"
}

.fa-object-group:before {
    content: "\f247"
}

.fa-object-ungroup:before {
    content: "\f248"
}

.fa-sticky-note:before {
    content: "\f249"
}

.fa-sticky-note-o:before {
    content: "\f24a"
}

.fa-cc-jcb:before {
    content: "\f24b"
}

.fa-cc-diners-club:before {
    content: "\f24c"
}

.fa-clone:before {
    content: "\f24d"
}

.fa-balance-scale:before {
    content: "\f24e"
}

.fa-hourglass-o:before {
    content: "\f250"
}

.fa-hourglass-1:before,.fa-hourglass-start:before {
    content: "\f251"
}

.fa-hourglass-2:before,.fa-hourglass-half:before {
    content: "\f252"
}

.fa-hourglass-3:before,.fa-hourglass-end:before {
    content: "\f253"
}

.fa-hourglass:before {
    content: "\f254"
}

.fa-hand-grab-o:before,.fa-hand-rock-o:before {
    content: "\f255"
}

.fa-hand-paper-o:before,.fa-hand-stop-o:before {
    content: "\f256"
}

.fa-hand-scissors-o:before {
    content: "\f257"
}

.fa-hand-lizard-o:before {
    content: "\f258"
}

.fa-hand-spock-o:before {
    content: "\f259"
}

.fa-hand-pointer-o:before {
    content: "\f25a"
}

.fa-hand-peace-o:before {
    content: "\f25b"
}

.fa-trademark:before {
    content: "\f25c"
}

.fa-registered:before {
    content: "\f25d"
}

.fa-creative-commons:before {
    content: "\f25e"
}

.fa-gg:before {
    content: "\f260"
}

.fa-gg-circle:before {
    content: "\f261"
}

.fa-tripadvisor:before {
    content: "\f262"
}

.fa-odnoklassniki:before {
    content: "\f263"
}

.fa-odnoklassniki-square:before {
    content: "\f264"
}

.fa-get-pocket:before {
    content: "\f265"
}

.fa-wikipedia-w:before {
    content: "\f266"
}

.fa-safari:before {
    content: "\f267"
}

.fa-chrome:before {
    content: "\f268"
}

.fa-firefox:before {
    content: "\f269"
}

.fa-opera:before {
    content: "\f26a"
}

.fa-internet-explorer:before {
    content: "\f26b"
}

.fa-television:before,.fa-tv:before {
    content: "\f26c"
}

.fa-contao:before {
    content: "\f26d"
}

.fa-500px:before {
    content: "\f26e"
}

.fa-amazon:before {
    content: "\f270"
}

.fa-calendar-plus-o:before {
    content: "\f271"
}

.fa-calendar-minus-o:before {
    content: "\f272"
}

.fa-calendar-times-o:before {
    content: "\f273"
}

.fa-calendar-check-o:before {
    content: "\f274"
}

.fa-industry:before {
    content: "\f275"
}

.fa-map-pin:before {
    content: "\f276"
}

.fa-map-signs:before {
    content: "\f277"
}

.fa-map-o:before {
    content: "\f278"
}

.fa-map:before {
    content: "\f279"
}

.fa-commenting:before {
    content: "\f27a"
}

.fa-commenting-o:before {
    content: "\f27b"
}

.fa-houzz:before {
    content: "\f27c"
}

.fa-vimeo:before {
    content: "\f27d"
}

.fa-black-tie:before {
    content: "\f27e"
}

.fa-fonticons:before {
    content: "\f280"
}

.fa-reddit-alien:before {
    content: "\f281"
}

.fa-edge:before {
    content: "\f282"
}

.fa-credit-card-alt:before {
    content: "\f283"
}

.fa-codiepie:before {
    content: "\f284"
}

.fa-modx:before {
    content: "\f285"
}

.fa-fort-awesome:before {
    content: "\f286"
}

.fa-usb:before {
    content: "\f287"
}

.fa-product-hunt:before {
    content: "\f288"
}

.fa-mixcloud:before {
    content: "\f289"
}

.fa-scribd:before {
    content: "\f28a"
}

.fa-pause-circle:before {
    content: "\f28b"
}

.fa-pause-circle-o:before {
    content: "\f28c"
}

.fa-stop-circle:before {
    content: "\f28d"
}

.fa-stop-circle-o:before {
    content: "\f28e"
}

.fa-shopping-bag:before {
    content: "\f290"
}

.fa-shopping-basket:before {
    content: "\f291"
}

.fa-hashtag:before {
    content: "\f292"
}

.fa-bluetooth:before {
    content: "\f293"
}

.fa-bluetooth-b:before {
    content: "\f294"
}

.fa-percent:before {
    content: "\f295"
}

.fa-gitlab:before {
    content: "\f296"
}

.fa-wpbeginner:before {
    content: "\f297"
}

.fa-wpforms:before {
    content: "\f298"
}

.fa-envira:before {
    content: "\f299"
}

.fa-universal-access:before {
    content: "\f29a"
}

.fa-wheelchair-alt:before {
    content: "\f29b"
}

.fa-question-circle-o:before {
    content: "\f29c"
}

.fa-blind:before {
    content: "\f29d"
}

.fa-audio-description:before {
    content: "\f29e"
}

.fa-volume-control-phone:before {
    content: "\f2a0"
}

.fa-braille:before {
    content: "\f2a1"
}

.fa-assistive-listening-systems:before {
    content: "\f2a2"
}

.fa-american-sign-language-interpreting:before,.fa-asl-interpreting:before {
    content: "\f2a3"
}

.fa-deaf:before,.fa-deafness:before,.fa-hard-of-hearing:before {
    content: "\f2a4"
}

.fa-glide:before {
    content: "\f2a5"
}

.fa-glide-g:before {
    content: "\f2a6"
}

.fa-sign-language:before,.fa-signing:before {
    content: "\f2a7"
}

.fa-low-vision:before {
    content: "\f2a8"
}

.fa-viadeo:before {
    content: "\f2a9"
}

.fa-viadeo-square:before {
    content: "\f2aa"
}

.fa-snapchat:before {
    content: "\f2ab"
}

.fa-snapchat-ghost:before {
    content: "\f2ac"
}

.fa-snapchat-square:before {
    content: "\f2ad"
}

.fa-pied-piper:before {
    content: "\f2ae"
}

.fa-first-order:before {
    content: "\f2b0"
}

.fa-yoast:before {
    content: "\f2b1"
}

.fa-themeisle:before {
    content: "\f2b2"
}

.fa-google-plus-circle:before,.fa-google-plus-official:before {
    content: "\f2b3"
}

.fa-fa:before,.fa-font-awesome:before {
    content: "\f2b4"
}

.fa-handshake-o:before {
    content: "\f2b5"
}

.fa-envelope-open:before {
    content: "\f2b6"
}

.fa-envelope-open-o:before {
    content: "\f2b7"
}

.fa-linode:before {
    content: "\f2b8"
}

.fa-address-book:before {
    content: "\f2b9"
}

.fa-address-book-o:before {
    content: "\f2ba"
}

.fa-address-card:before,.fa-vcard:before {
    content: "\f2bb"
}

.fa-address-card-o:before,.fa-vcard-o:before {
    content: "\f2bc"
}

.fa-user-circle:before {
    content: "\f2bd"
}

.fa-user-circle-o:before {
    content: "\f2be"
}

.fa-user-o:before {
    content: "\f2c0"
}

.fa-id-badge:before {
    content: "\f2c1"
}

.fa-drivers-license:before,.fa-id-card:before {
    content: "\f2c2"
}

.fa-drivers-license-o:before,.fa-id-card-o:before {
    content: "\f2c3"
}

.fa-quora:before {
    content: "\f2c4"
}

.fa-free-code-camp:before {
    content: "\f2c5"
}

.fa-telegram:before {
    content: "\f2c6"
}

.fa-thermometer-4:before,.fa-thermometer-full:before,.fa-thermometer:before {
    content: "\f2c7"
}

.fa-thermometer-3:before,.fa-thermometer-three-quarters:before {
    content: "\f2c8"
}

.fa-thermometer-2:before,.fa-thermometer-half:before {
    content: "\f2c9"
}

.fa-thermometer-1:before,.fa-thermometer-quarter:before {
    content: "\f2ca"
}

.fa-thermometer-0:before,.fa-thermometer-empty:before {
    content: "\f2cb"
}

.fa-shower:before {
    content: "\f2cc"
}

.fa-bath:before,.fa-bathtub:before,.fa-s15:before {
    content: "\f2cd"
}

.fa-podcast:before {
    content: "\f2ce"
}

.fa-window-maximize:before {
    content: "\f2d0"
}

.fa-window-minimize:before {
    content: "\f2d1"
}

.fa-window-restore:before {
    content: "\f2d2"
}

.fa-times-rectangle:before,.fa-window-close:before {
    content: "\f2d3"
}

.fa-times-rectangle-o:before,.fa-window-close-o:before {
    content: "\f2d4"
}

.fa-bandcamp:before {
    content: "\f2d5"
}

.fa-grav:before {
    content: "\f2d6"
}

.fa-etsy:before {
    content: "\f2d7"
}

.fa-imdb:before {
    content: "\f2d8"
}

.fa-ravelry:before {
    content: "\f2d9"
}

.fa-eercast:before {
    content: "\f2da"
}

.fa-microchip:before {
    content: "\f2db"
}

.fa-snowflake-o:before {
    content: "\f2dc"
}

.fa-superpowers:before {
    content: "\f2dd"
}

.fa-wpexplorer:before {
    content: "\f2de"
}

.fa-meetup:before {
    content: "\f2e0"
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0,0,0,0);
    border: 0
}

.sr-only-focusable:active,.sr-only-focusable:focus {
    position: static;
    width: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    clip: auto
}

.grid-gallery ul {
    list-style: none;
    margin: 0;
    padding: 0
}

.slideshow {
    z-index: 9999!important;
    padding: 0
}

.grid-gallery figure {
    margin: 0
}

.grid-gallery figure img {
    display: block;
    width: 100%
}

.grid-gallery figcaption h3 {
    margin: 0;
    padding: 0 0 .5em
}

.grid-gallery figcaption p {
    margin: 0
}

.grid-wrap {
    max-width: 69em;
    margin: 0 auto;
    padding: 150px 0
}

.grid {
    margin: 0 auto
}

.grid li {
    width: 33%;
    float: left;
    cursor: pointer
}

.grid figure {
    padding: 15px;
    -webkit-transition: opacity .2s;
    transition: opacity .2s
}

.grid li:hover figure {
    opacity: .7
}

.grid figcaption {
    background: #e4e4e4;
    padding: 25px
}

.slideshow {
    position: fixed;
    background: rgba(0,0,0,.9);
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 500;
    opacity: 0;
    visibility: hidden;
    overflow: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px;
    -webkit-transition: opacity .5s,visibility 0 .5s;
    transition: opacity .5s,visibility 0 .5s
}

.slideshow-open .slideshow {
    opacity: 1;
    visibility: visible;
    -webkit-transition: opacity .5s;
    transition: opacity .5s
}

.slideshow ul {
    width: 100%;
    height: 100%;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-transform: translate3d(0,0,150px);
    transform: translate3d(0,0,150px);
    -webkit-transition: -webkit-transform .5s;
    transition: transform .5s
}

.slideshow ul.animatable li {
    -webkit-transition: -webkit-transform .5s;
    transition: transform .5s
}

.slideshow-open .slideshow ul {
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0)
}

.slideshow li {
    width: 660px;
    height: 560px;
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -280px 0 0 -330px;
    visibility: hidden
}

.slideshow li.show {
    visibility: visible
}

.slideshow li:after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: rgba(255,255,255,.8);
    -webkit-transition: opacity .3s;
    transition: opacity .3s
}

.slideshow li.current:after {
    visibility: hidden;
    opacity: 0;
    -webkit-transition: opacity .3s,visibility 0 .3s;
    transition: opacity .3s,visibility 0 .3s
}

.slideshow figure {
    width: 100%;
    height: 100%;
    background: #fff;
    border: 50px solid #fff;
    overflow: hidden
}

.slideshow figcaption {
    padding-bottom: 20px
}

.slideshow figcaption h3 {
    font-weight: 300;
    font-size: 200%
}

.slideshow nav span {
    position: fixed;
    z-index: 1000;
    color: #fff;
    text-align: center;
    padding: 3%;
    cursor: pointer;
    font-size: 2.2em
}

.slideshow nav span.nav-next,.slideshow nav span.nav-prev {
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%)
}

.slideshow nav span.nav-next {
    right: 0
}

.slideshow nav span.nav-close {
    top: 0;
    right: 0;
    padding: .5em 1em;
    color: #fff
}

.icon:after,.icon:before {
    font-family: fontawesome;
    speak: none;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

span.nav-prev:before {
    content: "\f177"
}

span.nav-next:before {
    content: "\f178"
}

span.nav-close:before {
    content: "CLOSE";
    font-family: Poppins,sans-serif;
    font-size: 1rem
}

.info-keys {
    position: fixed;
    top: 10px;
    left: 10px;
    width: 60px;
    font-size: 8px;
    padding-top: 20px;
    text-transform: uppercase;
    color: #fff;
    letter-spacing: 1px;
    text-align: center
}

.info-keys:after,.info-keys:before {
    position: absolute;
    top: 0;
    width: 16px;
    height: 16px;
    border: 1px solid #fff;
    text-align: center;
    line-height: 14px;
    font-size: 12px
}

.info-keys:before {
    left: 10px;
    content: "\f177"
}

.info-keys:after {
    right: 10px;
    content: "\f178"
}

@media screen and (max-width: 60em) {
    .grid li {
        width:33.3%
    }

    .slideshow li {
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        margin: 0
    }

    .slideshow li figure img {
        width: auto;
        margin: 0 auto;
        max-width: 100%
    }

    .slideshow nav span,.slideshow nav span.nav-close {
        font-size: 1.8em;
        padding: .3em
    }

    .info-keys {
        display: none
    }
}

@media screen and (max-width: 991px) {
    .grid li {
        width:50%
    }
}

@media screen and (max-width: 768px) {
    .grid li {
        width:100%
    }
}

#lg-counter, .lg-outer .lg-video-cont {
    vertical-align: middle;
    display: inline-block
}

#lg-zoom-out, .lg-actions .lg-next.disabled, .lg-actions .lg-prev.disabled {
    opacity: .5;
    pointer-events: none
}

.lg-sub-html, .lg-toolbar {
    background-color: rgba(0,0,0,.45)
}

@font-face {
    font-family: lg;
    src: url(/fonts/lg.eot?n1z373);
    src: url(/fonts/lg.eot?#iefixn1z373) format("embedded-opentype"),url(/fonts/lg.woff?n1z373) format("woff"),url(/fonts/lg.ttf?n1z373) format("truetype"),url(/fonts/lg.svg?n1z373#lg) format("svg");
    font-display: swap;
    font-weight: 400;
    font-style: normal
}

.lg-icon {
    font-family: lg;
    speak: none;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

.lg-actions .lg-next, .lg-actions .lg-prev {
    background-color: rgba(0,0,0,.45);
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
    border: 0;
    outline: 0
}

.lg-outer .lg-toogle-thumb, .lg-toolbar .lg-icon {
    color: #999;
    font-size: 24px;
    line-height: 27px;
    text-align: center;
    cursor: pointer
}

.lg-actions .lg-next:hover, .lg-actions .lg-prev:hover, .lg-outer .lg-toogle-thumb:hover, .lg-outer.lg-dropdown-active #lg-share, .lg-toolbar .lg-icon:hover {
    color: #fff
}

.lg-actions .lg-next {
    right: 20px
}

.lg-actions .lg-next:before {
    content: "\e095"
}

.lg-actions .lg-prev {
    left: 20px
}

.lg-actions .lg-prev:after {
    content: "\e094"
}

@-webkit-keyframes lg-right-end {
    0%,100% {
        left: 0
    }

    50% {
        left: -30px
    }
}

@-moz-keyframes lg-right-end {
    0%,100% {
        left: 0
    }

    50% {
        left: -30px
    }
}

@-ms-keyframes lg-right-end {
    0%,100% {
        left: 0
    }

    50% {
        left: -30px
    }
}

@keyframes lg-right-end {
    0%,100% {
        left: 0
    }

    50% {
        left: -30px
    }
}

@-webkit-keyframes lg-left-end {
    0%,100% {
        left: 0
    }

    50% {
        left: 30px
    }
}

@-moz-keyframes lg-left-end {
    0%,100% {
        left: 0
    }

    50% {
        left: 30px
    }
}

@-ms-keyframes lg-left-end {
    0%,100% {
        left: 0
    }

    50% {
        left: 30px
    }
}

@keyframes lg-left-end {
    0%,100% {
        left: 0
    }

    50% {
        left: 30px
    }
}

.lg-outer.lg-right-end .lg-object {
    -webkit-animation: .3s lg-right-end;
    -o-animation: .3s lg-right-end;
    animation: .3s lg-right-end;
    position: relative
}

.lg-outer.lg-left-end .lg-object {
    -webkit-animation: .3s lg-left-end;
    -o-animation: .3s lg-left-end;
    animation: .3s lg-left-end;
    position: relative
}

.lg-toolbar {
    z-index: 1082;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%
}

.lg-toolbar .lg-icon {
    float: right;
    height: 47px;
    padding: 10px 0;
    width: 50px;
    text-decoration: none !important;
    outline: 0;
    -webkit-transition: color .2s linear;
    -o-transition: color .2s linear;
    transition: color .2s linear
}

.lg-toolbar .lg-close:after {
    content: "\e070"
}

.lg-toolbar .lg-download:after {
    content: "\e0f2"
}

.lg-sub-html {
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
    font-size: 16px;
    padding-left: 20px;
    padding-top: 12px
}

.lg-next, .lg-prev, .lg-toolbar {
    opacity: 1;
    -webkit-transition: -webkit-transform .35s cubic-bezier(0,0,.25,1),opacity .35s cubic-bezier(0,0,.25,1),color .2s linear;
    -moz-transition: -moz-transform .35s cubic-bezier(0,0,.25,1),opacity .35s cubic-bezier(0,0,.25,1),color .2s linear;
    -o-transition: -o-transform .35s cubic-bezier(0,0,.25,1),opacity .35s cubic-bezier(0,0,.25,1),color .2s linear;
    transition: transform .35s cubic-bezier(0,0,.25,1),opacity .35s cubic-bezier(0,0,.25,1),color .2s linear
}

.lg-hide-items .lg-prev {
    opacity: 0;
    -webkit-transform: translate3d(-10px,0,0);
    transform: translate3d(-10px,0,0)
}

.lg-hide-items .lg-next {
    opacity: 0;
    -webkit-transform: translate3d(10px,0,0);
    transform: translate3d(10px,0,0)
}

.lg-hide-items .lg-toolbar {
    opacity: 0;
    -webkit-transform: translate3d(0,-10px,0);
    transform: translate3d(0,-10px,0)
}

body:not(.lg-from-hash) .lg-outer.lg-start-zoom .lg-object {
    -webkit-transform: scale3d(.5,.5,.5);
    transform: scale3d(.5,.5,.5);
    opacity: 0;
    -webkit-transition: -webkit-transform 250ms cubic-bezier(0,0,.25,1),opacity 250ms cubic-bezier(0,0,.25,1) !important;
    -moz-transition: -moz-transform 250ms cubic-bezier(0,0,.25,1),opacity 250ms cubic-bezier(0,0,.25,1) !important;
    -o-transition: -o-transform 250ms cubic-bezier(0,0,.25,1),opacity 250ms cubic-bezier(0,0,.25,1) !important;
    transition: transform 250ms cubic-bezier(0,0,.25,1),opacity 250ms cubic-bezier(0,0,.25,1) !important;
    -webkit-transform-origin: 50% 50%;
    -moz-transform-origin: 50% 50%;
    -ms-transform-origin: 50% 50%;
    transform-origin: 50% 50%
}

body:not(.lg-from-hash) .lg-outer.lg-start-zoom .lg-item.lg-complete .lg-object {
    -webkit-transform: scale3d(1,1,1);
    transform: scale3d(1,1,1);
    opacity: 1
}

.lg-outer .lg-thumb-outer {
    background-color: #0d0a0a;
    bottom: 0;
    position: absolute;
    width: 100%;
    z-index: 1080;
    max-height: 350px;
    -webkit-transform: translate3d(0,100%,0);
    transform: translate3d(0,100%,0);
    -webkit-transition: -webkit-transform .25s cubic-bezier(0,0,.25,1) 0;
    -moz-transition: -moz-transform .25s cubic-bezier(0,0,.25,1) 0;
    -o-transition: -o-transform .25s cubic-bezier(0,0,.25,1) 0;
    transition: transform .25s cubic-bezier(0,0,.25,1) 0
}

.lg-outer .lg-thumb-outer.lg-grab .lg-thumb-item, .lg-outer.lg-grab img.lg-object {
    cursor: -webkit-grab;
    cursor: -moz-grab;
    cursor: -o-grab;
    cursor: -ms-grab;
    cursor: grab
}

.lg-outer .lg-thumb-outer.lg-grabbing .lg-thumb-item, .lg-outer.lg-grabbing img.lg-object {
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
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0)
}

.lg-outer .lg-thumb {
    padding: 10px 0;
    height: 100%;
    margin-bottom: -5px
}

.lg-outer .lg-thumb-item {
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
        -webkit-transition: border-color .25s;
        -o-transition: border-color .25s;
        transition: border-color .25s
    }
}

.lg-outer .lg-thumb-item.active, .lg-outer .lg-thumb-item:hover {
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
    -webkit-transition: bottom .25s;
    -o-transition: bottom .25s;
    transition: bottom .25s
}

.lg-outer.lg-pull-caption-up.lg-thumb-open .lg-sub-html {
    bottom: 100px
}

.lg-outer .lg-toogle-thumb {
    background-color: #0d0a0a;
    border-radius: 2px 2px 0 0;
    height: 39px;
    padding: 5px 0;
    position: absolute;
    right: 20px;
    top: -39px;
    width: 50px
}

.lg-outer .lg-toogle-thumb:after {
    content: "\e1ff"
}

.lg-outer .lg-video-cont {
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

.lg-outer .lg-has-vimeo .lg-video-play {
    background: url(../img/vimeo-play.png) no-repeat
}

.lg-outer .lg-has-vimeo:hover .lg-video-play {
    background: url(../img/vimeo-play.png) 0 -58px no-repeat
}

.lg-outer .lg-has-html5 .lg-video-play {
    background: url(../img/video-play.png) no-repeat;
    height: 64px;
    margin-left: -32px;
    margin-top: -32px;
    width: 64px;
    opacity: .8
}

.lg-backdrop.in, .lg-css3.lg-fade .lg-item.lg-current, .lg-outer .lg-has-html5:hover .lg-video-play, .lg-outer.lg-show-after-load .lg-item.lg-complete .lg-object, .lg-outer.lg-show-after-load .lg-item.lg-complete .lg-video-play, .lg-outer.lg-visible, .lg-show-autoplay .lg-progress-bar {
    opacity: 1
}

.lg-outer .lg-has-youtube .lg-video-play {
    background: url(../img/youtube-play.png) no-repeat
}

.lg-outer .lg-has-youtube:hover .lg-video-play {
    background: url(../img/youtube-play.png) 0 -60px no-repeat
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

.lg-outer .lg-empty-html, .lg-outer .lg-has-video.lg-video-playing .lg-object, .lg-outer .lg-has-video.lg-video-playing .lg-video-play, .lg-outer.lg-hide-download #lg-download {
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
    -webkit-transition: opacity 80ms 0;
    -moz-transition: opacity 80ms 0;
    -o-transition: opacity 80ms 0;
    transition: opacity 80ms 0
}

.lg-progress-bar .lg-progress {
    background-color: #a90707;
    height: 5px;
    width: 0
}

.lg-progress-bar.lg-start .lg-progress {
    width: 100%
}

.lg-autoplay-button:after {
    content: "\e01d"
}

.lg-show-autoplay .lg-autoplay-button:after {
    content: "\e01a"
}

.lg-outer.lg-css3.lg-zoom-dragging .lg-item.lg-complete.lg-zoomable .lg-image, .lg-outer.lg-css3.lg-zoom-dragging .lg-item.lg-complete.lg-zoomable .lg-img-wrap {
    -webkit-transition-duration: 0;
    transition-duration: 0
}

.lg-outer.lg-use-transition-for-zoom .lg-item.lg-complete.lg-zoomable .lg-img-wrap {
    -webkit-transition: -webkit-transform .3s cubic-bezier(0,0,.25,1) 0;
    -moz-transition: -moz-transform .3s cubic-bezier(0,0,.25,1) 0;
    -o-transition: -o-transform .3s cubic-bezier(0,0,.25,1) 0;
    transition: transform .3s cubic-bezier(0,0,.25,1) 0
}

.lg-outer.lg-use-left-for-zoom .lg-item.lg-complete.lg-zoomable .lg-img-wrap {
    -webkit-transition: left .3s cubic-bezier(0,0,.25,1),top .3s cubic-bezier(0,0,.25,1) 0;
    -moz-transition: left .3s cubic-bezier(0,0,.25,1),top .3s cubic-bezier(0,0,.25,1) 0;
    -o-transition: left .3s cubic-bezier(0,0,.25,1),top .3s cubic-bezier(0,0,.25,1) 0;
    transition: left .3s cubic-bezier(0,0,.25,1),top .3s cubic-bezier(0,0,.25,1) 0
}

.lg-outer .lg-item.lg-complete.lg-zoomable .lg-img-wrap {
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    backface-visibility: hidden
}

.lg-outer .lg-item.lg-complete.lg-zoomable .lg-image {
    -webkit-transform: scale3d(1,1,1);
    transform: scale3d(1,1,1);
    -webkit-transition: -webkit-transform .3s cubic-bezier(0,0,.25,1),opacity .15s !important;
    -moz-transition: -moz-transform .3s cubic-bezier(0,0,.25,1),opacity .15s !important;
    -o-transition: -o-transform .3s cubic-bezier(0,0,.25,1),opacity .15s !important;
    transition: transform .3s cubic-bezier(0,0,.25,1),opacity .15s !important;
    -webkit-transform-origin: 0 0;
    -moz-transform-origin: 0 0;
    -ms-transform-origin: 0 0;
    transform-origin: 0 0;
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    backface-visibility: hidden
}

#lg-zoom-in:after {
    content: "\e311"
}

#lg-actual-size {
    font-size: 20px
}

#lg-actual-size:after {
    content: "\e033"
}

#lg-zoom-out:after {
    content: "\e312"
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
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0)
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
    -webkit-transition: opacity .15s,-webkit-transform .15s 0;
    -moz-transition: opacity .15s,-moz-transform .15s 0;
    -o-transition: opacity .15s,-o-transform .15s 0;
    transition: opacity .15s,transform .15s 0;
    -webkit-transform: translate3d(0,5px,0);
    transform: translate3d(0,5px,0)
}

.lg-outer, .lg-outer .lg, .lg-outer .lg-inner, .lg-outer .lg-pager-thumb-cont img {
    width: 100%;
    height: 100%
}

.lg-outer .lg-pager {
    background-color: rgba(255,255,255,.5);
    border-radius: 50%;
    box-shadow: 0 0 0 8px rgba(255,255,255,.7) inset;
    display: block;
    height: 12px;
    -webkit-transition: box-shadow .3s 0;
    -o-transition: box-shadow .3s 0;
    transition: box-shadow .3s 0;
    width: 12px
}

.lg-outer .lg-pager:focus, .lg-outer .lg-pager:hover {
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
    content: "\e20c"
}

.lg-fullscreen-on .lg-fullscreen:after {
    content: "\e20d"
}

.lg-outer #lg-dropdown-overlay {
    background-color: rgba(0,0,0,.25);
    bottom: 0;
    cursor: default;
    left: 0;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 1081;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: visibility 0 linear .18s,opacity .18s linear 0;
    -o-transition: visibility 0 linear .18s,opacity .18s linear 0;
    transition: visibility 0 linear .18s,opacity .18s linear 0
}

.lg-outer.lg-dropdown-active #lg-dropdown-overlay, .lg-outer.lg-dropdown-active .lg-dropdown {
    -webkit-transition-delay: 0;
    transition-delay: 0;
    -moz-transform: translate3d(0,0,0);
    -o-transform: translate3d(0,0,0);
    -ms-transform: translate3d(0,0,0);
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
    opacity: 1;
    visibility: visible
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
    -moz-transform: translate3d(0,5px,0);
    -o-transform: translate3d(0,5px,0);
    -ms-transform: translate3d(0,5px,0);
    -webkit-transform: translate3d(0,5px,0);
    transform: translate3d(0,5px,0);
    -webkit-transition: -webkit-transform .18s linear,visibility 0 linear .5s,opacity .18s linear 0;
    -moz-transition: -moz-transform .18s linear,visibility 0 linear .5s,opacity .18s linear 0;
    -o-transition: -o-transform .18s linear,visibility 0 linear .5s,opacity .18s linear 0;
    transition: transform .18s linear,visibility 0 linear .5s,opacity .18s linear 0
}

.lg-outer #lg-share, .lg-outer .lg {
    position: relative
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

.lg-outer .lg-dropdown > li:last-child {
    margin-bottom: 0
}

.lg-outer .lg-dropdown > li:hover .lg-icon, .lg-outer .lg-dropdown > li:hover a {
    color: #333
}

.lg-outer .lg-dropdown a {
    color: #333;
    display: block;
    white-space: pre;
    padding: 4px 12px;
    font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 12px
}

.lg-outer .lg-dropdown a:hover {
    background-color: rgba(0,0,0,.07)
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

.lg-outer #lg-share:after {
    content: "\e80d"
}

.lg-outer #lg-share-facebook .lg-icon {
    color: #3b5998
}

.lg-outer #lg-share-facebook .lg-icon:after {
    content: "\e901"
}

.lg-outer #lg-share-twitter .lg-icon {
    color: #00aced
}

.lg-outer #lg-share-twitter .lg-icon:after {
    content: "\e904"
}

.lg-outer #lg-share-googleplus .lg-icon {
    color: #dd4b39
}

.lg-outer #lg-share-googleplus .lg-icon:after {
    content: "\e902"
}

.lg-outer #lg-share-pinterest .lg-icon {
    color: #cb2027
}

.lg-outer #lg-share-pinterest .lg-icon:after {
    content: "\e903"
}

.lg-group:after {
    content: "";
    display: table;
    clear: both
}

.lg-outer {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1050;
    text-align: left;
    opacity: 0;
    -webkit-transition: opacity .15s 0;
    -o-transition: opacity .15s 0;
    transition: opacity .15s 0
}

.lg-outer * {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.lg-outer.lg-css3 .lg-item.lg-current, .lg-outer.lg-css3 .lg-item.lg-next-slide, .lg-outer.lg-css3 .lg-item.lg-prev-slide {
    -webkit-transition-duration: inherit !important;
    transition-duration: inherit !important;
    -webkit-transition-timing-function: inherit !important;
    transition-timing-function: inherit !important
}

.lg-outer.lg-css3.lg-dragging .lg-item.lg-current, .lg-outer.lg-css3.lg-dragging .lg-item.lg-next-slide, .lg-outer.lg-css3.lg-dragging .lg-item.lg-prev-slide {
    -webkit-transition-duration: 0 !important;
    transition-duration: 0 !important;
    opacity: 1
}

.lg-outer .lg {
    overflow: hidden;
    margin-left: auto;
    margin-right: auto;
    max-width: 100%;
    max-height: 100%
}

.lg-outer .lg-inner {
    position: absolute;
    left: 0;
    top: 0;
    white-space: nowrap
}

.lg-outer .lg-item {
    background: url(/images/loading.gif) center center no-repeat;
    display: none !important
}

.lg-outer.lg-css .lg-current, .lg-outer.lg-css3 .lg-current, .lg-outer.lg-css3 .lg-next-slide, .lg-outer.lg-css3 .lg-prev-slide {
    display: inline-block !important
}

.lg-outer .lg-img-wrap, .lg-outer .lg-item {
    display: inline-block;
    text-align: center;
    position: absolute;
    width: 100%;
    height: 100%
}

.lg-outer .lg-img-wrap:before, .lg-outer .lg-item:before {
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

.lg-outer.lg-show-after-load .lg-item .lg-object, .lg-outer.lg-show-after-load .lg-item .lg-video-play {
    opacity: 0;
    -webkit-transition: opacity .15s 0;
    -o-transition: opacity .15s 0;
    transition: opacity .15s 0
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
    -webkit-transition: opacity .15s 0;
    -o-transition: opacity .15s 0;
    transition: opacity .15s 0
}

.lg-css3.lg-no-trans .lg-current, .lg-css3.lg-no-trans .lg-next-slide, .lg-css3.lg-no-trans .lg-prev-slide {
    -webkit-transition: none 0 0 !important;
    -moz-transition: none 0 0 !important;
    -o-transition: none 0 0 !important;
    transition: none 0 0 !important
}

.lg-css3.lg-use-css3 .lg-item, .lg-css3.lg-use-left .lg-item {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    backface-visibility: hidden
}

.lg-css3.lg-fade .lg-item, .lg-css3.lg-slide.lg-use-css3 .lg-item {
    opacity: 0
}

.lg-css3.lg-fade .lg-item.lg-current, .lg-css3.lg-fade .lg-item.lg-next-slide, .lg-css3.lg-fade .lg-item.lg-prev-slide {
    -webkit-transition: opacity .1s 0;
    -moz-transition: opacity .1s 0;
    -o-transition: opacity .1s 0;
    transition: opacity .1s 0
}

.lg-css3.lg-slide.lg-use-css3 .lg-item.lg-prev-slide {
    -webkit-transform: translate3d(-100%,0,0);
    transform: translate3d(-100%,0,0)
}

.lg-css3.lg-slide.lg-use-css3 .lg-item.lg-next-slide {
    -webkit-transform: translate3d(100%,0,0);
    transform: translate3d(100%,0,0)
}

.lg-css3.lg-slide.lg-use-css3 .lg-item.lg-current {
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
    opacity: 1
}

.lg-css3.lg-slide.lg-use-css3 .lg-item.lg-current, .lg-css3.lg-slide.lg-use-css3 .lg-item.lg-next-slide, .lg-css3.lg-slide.lg-use-css3 .lg-item.lg-prev-slide {
    -webkit-transition: -webkit-transform 1s cubic-bezier(0,0,.25,1),opacity .1s 0;
    -moz-transition: -moz-transform 1s cubic-bezier(0,0,.25,1),opacity .1s 0;
    -o-transition: -o-transform 1s cubic-bezier(0,0,.25,1),opacity .1s 0;
    transition: transform 1s cubic-bezier(0,0,.25,1),opacity .1s 0
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

.lg-css3.lg-slide.lg-use-left .lg-item.lg-current, .lg-css3.lg-slide.lg-use-left .lg-item.lg-next-slide, .lg-css3.lg-slide.lg-use-left .lg-item.lg-prev-slide {
    -webkit-transition: left 1s cubic-bezier(0,0,.25,1),opacity .1s 0;
    -moz-transition: left 1s cubic-bezier(0,0,.25,1),opacity .1s 0;
    -o-transition: left 1s cubic-bezier(0,0,.25,1),opacity .1s 0;
    transition: left 1s cubic-bezier(0,0,.25,1),opacity .1s 0
}

.swiper-container {
    margin: 0 auto;
    position: relative;
    overflow: hidden;
    list-style: none;
    padding: 0;
    z-index: 1
}

.swiper-container-no-flexbox .swiper-slide {
    float: left
}

.swiper-container-vertical>.swiper-wrapper {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column
}

.swiper-wrapper {
    position: relative;
    width: 100%;
    height: 100%;
    z-index: 1;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-transition-property: -webkit-transform;
    transition-property: -webkit-transform;
    -o-transition-property: transform;
    transition-property: transform;
    transition-property: transform,-webkit-transform;
    -webkit-box-sizing: content-box;
    box-sizing: content-box
}

.swiper-container-android .swiper-slide,.swiper-wrapper {
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0)
}

.swiper-container-multirow>.swiper-wrapper {
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap
}

.swiper-container-free-mode>.swiper-wrapper {
    -webkit-transition-timing-function: ease-out;
    -o-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
    margin: 0 auto
}

.swiper-slide {
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    width: 100%;
    height: 100%;
    position: relative;
    -webkit-transition-property: -webkit-transform;
    transition-property: -webkit-transform;
    -o-transition-property: transform;
    transition-property: transform;
    transition-property: transform,-webkit-transform
}

.swiper-invisible-blank-slide {
    visibility: hidden
}

.swiper-container-autoheight,.swiper-container-autoheight .swiper-slide {
    height: auto
}

.swiper-container-autoheight .swiper-wrapper {
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
    -webkit-transition-property: height,-webkit-transform;
    transition-property: height,-webkit-transform;
    -o-transition-property: transform,height;
    transition-property: transform,height;
    transition-property: transform,height,-webkit-transform
}

.swiper-container-3d {
    -webkit-perspective: 1200px;
    perspective: 1200px
}

.swiper-container-3d .swiper-cube-shadow,.swiper-container-3d .swiper-slide,.swiper-container-3d .swiper-slide-shadow-bottom,.swiper-container-3d .swiper-slide-shadow-left,.swiper-container-3d .swiper-slide-shadow-right,.swiper-container-3d .swiper-slide-shadow-top,.swiper-container-3d .swiper-wrapper {
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d
}

.swiper-container-3d .swiper-slide-shadow-bottom,.swiper-container-3d .swiper-slide-shadow-left,.swiper-container-3d .swiper-slide-shadow-right,.swiper-container-3d .swiper-slide-shadow-top {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 10
}

.swiper-container-3d .swiper-slide-shadow-left {
    background-image: -webkit-gradient(linear,right top,left top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));
    background-image: -webkit-linear-gradient(right,rgba(0,0,0,.5),rgba(0,0,0,0));
    background-image: -o-linear-gradient(right,rgba(0,0,0,.5),rgba(0,0,0,0));
    background-image: linear-gradient(to left,rgba(0,0,0,.5),rgba(0,0,0,0))
}

.swiper-container-3d .swiper-slide-shadow-right {
    background-image: -webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));
    background-image: -webkit-linear-gradient(left,rgba(0,0,0,.5),rgba(0,0,0,0));
    background-image: -o-linear-gradient(left,rgba(0,0,0,.5),rgba(0,0,0,0));
    background-image: linear-gradient(to right,rgba(0,0,0,.5),rgba(0,0,0,0))
}

.swiper-container-3d .swiper-slide-shadow-top {
    background-image: -webkit-gradient(linear,left bottom,left top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));
    background-image: -webkit-linear-gradient(bottom,rgba(0,0,0,.5),rgba(0,0,0,0));
    background-image: -o-linear-gradient(bottom,rgba(0,0,0,.5),rgba(0,0,0,0));
    background-image: linear-gradient(to top,rgba(0,0,0,.5),rgba(0,0,0,0))
}

.swiper-container-3d .swiper-slide-shadow-bottom {
    background-image: -webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));
    background-image: -webkit-linear-gradient(top,rgba(0,0,0,.5),rgba(0,0,0,0));
    background-image: -o-linear-gradient(top,rgba(0,0,0,.5),rgba(0,0,0,0));
    background-image: linear-gradient(to bottom,rgba(0,0,0,.5),rgba(0,0,0,0))
}

.swiper-container-wp8-horizontal,.swiper-container-wp8-horizontal>.swiper-wrapper {
    -ms-touch-action: pan-y;
    touch-action: pan-y
}

.swiper-container-wp8-vertical,.swiper-container-wp8-vertical>.swiper-wrapper {
    -ms-touch-action: pan-x;
    touch-action: pan-x
}

.swiper-button-next,.swiper-button-prev {
    position: absolute;
    top: 50%;
    width: 27px;
    height: 44px;
    margin-top: -22px;
    z-index: 10;
    cursor: pointer;
    background-size: 27px 44px;
    background-position: center;
    background-repeat: no-repeat
}

.swiper-button-next.swiper-button-disabled,.swiper-button-prev.swiper-button-disabled {
    opacity: .35;
    cursor: auto;
    pointer-events: none
}

.swiper-button-prev,.swiper-container-rtl .swiper-button-next {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
    left: 10px;
    right: auto
}

.swiper-button-next,.swiper-container-rtl .swiper-button-prev {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
    right: 10px;
    left: auto
}

.swiper-button-prev.swiper-button-white,.swiper-container-rtl .swiper-button-next.swiper-button-white {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E")
}

.swiper-button-next.swiper-button-white,.swiper-container-rtl .swiper-button-prev.swiper-button-white {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E")
}

.swiper-button-prev.swiper-button-black,.swiper-container-rtl .swiper-button-next.swiper-button-black {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E")
}

.swiper-button-next.swiper-button-black,.swiper-container-rtl .swiper-button-prev.swiper-button-black {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E")
}

.swiper-button-lock {
    display: none
}

.swiper-pagination {
    position: absolute;
    text-align: center;
    -webkit-transition: .3s opacity;
    -o-transition: .3s opacity;
    transition: .3s opacity;
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
    z-index: 10
}

.swiper-pagination.swiper-pagination-hidden {
    opacity: 0
}

.swiper-container-horizontal>.swiper-pagination-bullets,.swiper-pagination-custom,.swiper-pagination-fraction {
    bottom: 10px;
    left: 0;
    width: 100%
}

.swiper-pagination-bullets-dynamic {
    overflow: hidden;
    font-size: 0
}

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
    -webkit-transform: scale(.33);
    -ms-transform: scale(.33);
    transform: scale(.33);
    position: relative
}

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1)
}

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev {
    -webkit-transform: scale(.66);
    -ms-transform: scale(.66);
    transform: scale(.66)
}

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev {
    -webkit-transform: scale(.33);
    -ms-transform: scale(.33);
    transform: scale(.33)
}

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next {
    -webkit-transform: scale(.66);
    -ms-transform: scale(.66);
    transform: scale(.66)
}

.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next {
    -webkit-transform: scale(.33);
    -ms-transform: scale(.33);
    transform: scale(.33)
}

.swiper-pagination-bullet {
    width: 8px;
    height: 8px;
    display: inline-block;
    border-radius: 100%;
    background: #000;
    opacity: .2
}

button.swiper-pagination-bullet {
    border: none;
    margin: 0;
    padding: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}

.swiper-pagination-clickable .swiper-pagination-bullet {
    cursor: pointer
}

.swiper-pagination-bullet-active {
    opacity: 1;
    background: #007aff
}

.swiper-container-vertical>.swiper-pagination-bullets {
    right: 10px;
    top: 50%;
    -webkit-transform: translate3d(0,-50%,0);
    transform: translate3d(0,-50%,0)
}

.swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet {
    margin: 6px 0;
    display: block
}

.swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    width: 8px
}

.swiper-container-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
    display: inline-block;
    -webkit-transition: .2s top,.2s -webkit-transform;
    transition: .2s top,.2s -webkit-transform;
    -o-transition: .2s transform,.2s top;
    transition: .2s transform,.2s top;
    transition: .2s transform,.2s top,.2s -webkit-transform
}

.swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
    margin: 0 4px
}

.swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    white-space: nowrap
}

.swiper-container-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
    -webkit-transition: .2s left,.2s -webkit-transform;
    transition: .2s left,.2s -webkit-transform;
    -o-transition: .2s transform,.2s left;
    transition: .2s transform,.2s left;
    transition: .2s transform,.2s left,.2s -webkit-transform
}

.swiper-container-horizontal.swiper-container-rtl>.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
    -webkit-transition: .2s right,.2s -webkit-transform;
    transition: .2s right,.2s -webkit-transform;
    -o-transition: .2s transform,.2s right;
    transition: .2s transform,.2s right;
    transition: .2s transform,.2s right,.2s -webkit-transform
}

.swiper-pagination-progressbar {
    background: rgba(0,0,0,.25);
    position: absolute
}

.swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
    background: #007aff;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    -webkit-transform: scale(0);
    -ms-transform: scale(0);
    transform: scale(0);
    -webkit-transform-origin: left top;
    -ms-transform-origin: left top;
    transform-origin: left top
}

.swiper-container-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
    -webkit-transform-origin: right top;
    -ms-transform-origin: right top;
    transform-origin: right top
}

.swiper-container-horizontal>.swiper-pagination-progressbar {
    width: 100%;
    height: 4px;
    left: 0;
    top: 0
}

.swiper-container-vertical>.swiper-pagination-progressbar {
    width: 4px;
    height: 100%;
    left: 0;
    top: 0
}

.swiper-pagination-white .swiper-pagination-bullet-active {
    background: #fff
}

.swiper-pagination-progressbar.swiper-pagination-white {
    background: rgba(255,255,255,.25)
}

.swiper-pagination-progressbar.swiper-pagination-white .swiper-pagination-progressbar-fill {
    background: #fff
}

.swiper-pagination-black .swiper-pagination-bullet-active {
    background: #000
}

.swiper-pagination-progressbar.swiper-pagination-black {
    background: rgba(0,0,0,.25)
}

.swiper-pagination-progressbar.swiper-pagination-black .swiper-pagination-progressbar-fill {
    background: #000
}

.swiper-pagination-lock {
    display: none
}

.swiper-scrollbar {
    border-radius: 10px;
    position: relative;
    -ms-touch-action: none;
    background: rgba(0,0,0,.1)
}

.swiper-container-horizontal>.swiper-scrollbar {
    position: absolute;
    left: 1%;
    bottom: 3px;
    z-index: 50;
    height: 5px;
    width: 98%
}

.swiper-container-vertical>.swiper-scrollbar {
    position: absolute;
    right: 3px;
    top: 1%;
    z-index: 50;
    width: 5px;
    height: 98%
}

.swiper-scrollbar-drag {
    height: 100%;
    width: 100%;
    position: relative;
    background: rgba(0,0,0,.5);
    border-radius: 10px;
    left: 0;
    top: 0
}

.swiper-scrollbar-cursor-drag {
    cursor: move
}

.swiper-scrollbar-lock {
    display: none
}

.swiper-zoom-container {
    width: 100%;
    height: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    text-align: center
}

.swiper-zoom-container>canvas,.swiper-zoom-container>img,.swiper-zoom-container>svg {
    max-width: 100%;
    max-height: 100%;
    -o-object-fit: contain;
    object-fit: contain
}

.swiper-slide-zoomed {
    cursor: move
}

.swiper-lazy-preloader {
    width: 42px;
    height: 42px;
    position: absolute;
    left: 50%;
    top: 50%;
    margin-left: -21px;
    margin-top: -21px;
    z-index: 10;
    -webkit-transform-origin: 50%;
    -ms-transform-origin: 50%;
    transform-origin: 50%;
    -webkit-animation: swiper-preloader-spin 1s steps(12,end) infinite;
    animation: swiper-preloader-spin 1s steps(12,end) infinite
}

.swiper-lazy-preloader:after {
    display: block;
    content: '';
    width: 100%;
    height: 100%;
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%236c6c6c'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
    background-position: 50%;
    background-size: 100%;
    background-repeat: no-repeat
}

.swiper-lazy-preloader-white:after {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%23fff'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E")
}

@-webkit-keyframes swiper-preloader-spin {
    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg)
    }
}

@keyframes swiper-preloader-spin {
    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg)
    }
}

.swiper-container .swiper-notification {
    position: absolute;
    left: 0;
    top: 0;
    pointer-events: none;
    opacity: 0;
    z-index: -1000
}

.swiper-container-fade.swiper-container-free-mode .swiper-slide {
    -webkit-transition-timing-function: ease-out;
    -o-transition-timing-function: ease-out;
    transition-timing-function: ease-out
}

.swiper-container-fade .swiper-slide {
    pointer-events: none;
    -webkit-transition-property: opacity;
    -o-transition-property: opacity;
    transition-property: opacity
}

.swiper-container-fade .swiper-slide .swiper-slide {
    pointer-events: none
}

.swiper-container-fade .swiper-slide-active,.swiper-container-fade .swiper-slide-active .swiper-slide-active {
    pointer-events: auto
}

.swiper-container-cube {
    overflow: visible
}

.swiper-container-cube .swiper-slide {
    pointer-events: none;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    z-index: 1;
    visibility: hidden;
    -webkit-transform-origin: 0 0;
    -ms-transform-origin: 0 0;
    transform-origin: 0 0;
    width: 100%;
    height: 100%
}

.swiper-container-cube .swiper-slide .swiper-slide {
    pointer-events: none
}

.swiper-container-cube.swiper-container-rtl .swiper-slide {
    -webkit-transform-origin: 100% 0;
    -ms-transform-origin: 100% 0;
    transform-origin: 100% 0
}

.swiper-container-cube .swiper-slide-active,.swiper-container-cube .swiper-slide-active .swiper-slide-active {
    pointer-events: auto
}

.swiper-container-cube .swiper-slide-active,.swiper-container-cube .swiper-slide-next,.swiper-container-cube .swiper-slide-next+.swiper-slide,.swiper-container-cube .swiper-slide-prev {
    pointer-events: auto;
    visibility: visible
}

.swiper-container-cube .swiper-slide-shadow-bottom,.swiper-container-cube .swiper-slide-shadow-left,.swiper-container-cube .swiper-slide-shadow-right,.swiper-container-cube .swiper-slide-shadow-top {
    z-index: 0;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden
}

.swiper-container-cube .swiper-cube-shadow {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    background: #000;
    opacity: .6;
    -webkit-filter: blur(50px);
    filter: blur(50px);
    z-index: 0
}

.swiper-container-flip {
    overflow: visible
}

.swiper-container-flip .swiper-slide {
    pointer-events: none;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    z-index: 1
}

.swiper-container-flip .swiper-slide .swiper-slide {
    pointer-events: none
}

.swiper-container-flip .swiper-slide-active,.swiper-container-flip .swiper-slide-active .swiper-slide-active {
    pointer-events: auto
}

.swiper-container-flip .swiper-slide-shadow-bottom,.swiper-container-flip .swiper-slide-shadow-left,.swiper-container-flip .swiper-slide-shadow-right,.swiper-container-flip .swiper-slide-shadow-top {
    z-index: 0;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden
}

.swiper-container-coverflow .swiper-wrapper {
    -ms-perspective: 1200px
}

@charset "UTF-8";@-webkit-keyframes bounce {
    20%,53%,80%,from,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1);
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    40%,43% {
        -webkit-animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        -webkit-transform: translate3d(0,-30px,0);
        transform: translate3d(0,-30px,0)
    }

    70% {
        -webkit-animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        -webkit-transform: translate3d(0,-15px,0);
        transform: translate3d(0,-15px,0)
    }

    90% {
        -webkit-transform: translate3d(0,-4px,0);
        transform: translate3d(0,-4px,0)
    }
}

@keyframes bounce {
    20%,53%,80%,from,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1);
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    40%,43% {
        -webkit-animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        -webkit-transform: translate3d(0,-30px,0);
        transform: translate3d(0,-30px,0)
    }

    70% {
        -webkit-animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        -webkit-transform: translate3d(0,-15px,0);
        transform: translate3d(0,-15px,0)
    }

    90% {
        -webkit-transform: translate3d(0,-4px,0);
        transform: translate3d(0,-4px,0)
    }
}

.bounce {
    -webkit-animation-name: bounce;
    animation-name: bounce;
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom
}

@-webkit-keyframes flash {
    50%,from,to {
        opacity: 1
    }

    25%,75% {
        opacity: 0
    }
}

@keyframes flash {
    50%,from,to {
        opacity: 1
    }

    25%,75% {
        opacity: 0
    }
}

.flash {
    -webkit-animation-name: flash;
    animation-name: flash
}

@-webkit-keyframes pulse {
    from {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }

    50% {
        -webkit-transform: scale3d(1.05,1.05,1.05);
        transform: scale3d(1.05,1.05,1.05)
    }

    to {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }
}

@keyframes pulse {
    from {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }

    50% {
        -webkit-transform: scale3d(1.05,1.05,1.05);
        transform: scale3d(1.05,1.05,1.05)
    }

    to {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }
}

.pulse {
    -webkit-animation-name: pulse;
    animation-name: pulse
}

@-webkit-keyframes rubberBand {
    from {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }

    30% {
        -webkit-transform: scale3d(1.25,.75,1);
        transform: scale3d(1.25,.75,1)
    }

    40% {
        -webkit-transform: scale3d(.75,1.25,1);
        transform: scale3d(.75,1.25,1)
    }

    50% {
        -webkit-transform: scale3d(1.15,.85,1);
        transform: scale3d(1.15,.85,1)
    }

    65% {
        -webkit-transform: scale3d(.95,1.05,1);
        transform: scale3d(.95,1.05,1)
    }

    75% {
        -webkit-transform: scale3d(1.05,.95,1);
        transform: scale3d(1.05,.95,1)
    }

    to {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }
}

@keyframes rubberBand {
    from {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }

    30% {
        -webkit-transform: scale3d(1.25,.75,1);
        transform: scale3d(1.25,.75,1)
    }

    40% {
        -webkit-transform: scale3d(.75,1.25,1);
        transform: scale3d(.75,1.25,1)
    }

    50% {
        -webkit-transform: scale3d(1.15,.85,1);
        transform: scale3d(1.15,.85,1)
    }

    65% {
        -webkit-transform: scale3d(.95,1.05,1);
        transform: scale3d(.95,1.05,1)
    }

    75% {
        -webkit-transform: scale3d(1.05,.95,1);
        transform: scale3d(1.05,.95,1)
    }

    to {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }
}

.rubberBand {
    -webkit-animation-name: rubberBand;
    animation-name: rubberBand
}

@-webkit-keyframes shake {
    from,to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    10%,30%,50%,70%,90% {
        -webkit-transform: translate3d(-10px,0,0);
        transform: translate3d(-10px,0,0)
    }

    20%,40%,60%,80% {
        -webkit-transform: translate3d(10px,0,0);
        transform: translate3d(10px,0,0)
    }
}

@keyframes shake {
    from,to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    10%,30%,50%,70%,90% {
        -webkit-transform: translate3d(-10px,0,0);
        transform: translate3d(-10px,0,0)
    }

    20%,40%,60%,80% {
        -webkit-transform: translate3d(10px,0,0);
        transform: translate3d(10px,0,0)
    }
}

.shake {
    -webkit-animation-name: shake;
    animation-name: shake
}

@-webkit-keyframes headShake {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }

    6.5% {
        -webkit-transform: translateX(-6px) rotateY(-9deg);
        transform: translateX(-6px) rotateY(-9deg)
    }

    18.5% {
        -webkit-transform: translateX(5px) rotateY(7deg);
        transform: translateX(5px) rotateY(7deg)
    }

    31.5% {
        -webkit-transform: translateX(-3px) rotateY(-5deg);
        transform: translateX(-3px) rotateY(-5deg)
    }

    43.5% {
        -webkit-transform: translateX(2px) rotateY(3deg);
        transform: translateX(2px) rotateY(3deg)
    }

    50% {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
}

@keyframes headShake {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }

    6.5% {
        -webkit-transform: translateX(-6px) rotateY(-9deg);
        transform: translateX(-6px) rotateY(-9deg)
    }

    18.5% {
        -webkit-transform: translateX(5px) rotateY(7deg);
        transform: translateX(5px) rotateY(7deg)
    }

    31.5% {
        -webkit-transform: translateX(-3px) rotateY(-5deg);
        transform: translateX(-3px) rotateY(-5deg)
    }

    43.5% {
        -webkit-transform: translateX(2px) rotateY(3deg);
        transform: translateX(2px) rotateY(3deg)
    }

    50% {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
}

.headShake {
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    -webkit-animation-name: headShake;
    animation-name: headShake
}

@-webkit-keyframes swing {
    20% {
        -webkit-transform: rotate3d(0,0,1,15deg);
        transform: rotate3d(0,0,1,15deg)
    }

    40% {
        -webkit-transform: rotate3d(0,0,1,-10deg);
        transform: rotate3d(0,0,1,-10deg)
    }

    60% {
        -webkit-transform: rotate3d(0,0,1,5deg);
        transform: rotate3d(0,0,1,5deg)
    }

    80% {
        -webkit-transform: rotate3d(0,0,1,-5deg);
        transform: rotate3d(0,0,1,-5deg)
    }

    to {
        -webkit-transform: rotate3d(0,0,1,0deg);
        transform: rotate3d(0,0,1,0deg)
    }
}

@keyframes swing {
    20% {
        -webkit-transform: rotate3d(0,0,1,15deg);
        transform: rotate3d(0,0,1,15deg)
    }

    40% {
        -webkit-transform: rotate3d(0,0,1,-10deg);
        transform: rotate3d(0,0,1,-10deg)
    }

    60% {
        -webkit-transform: rotate3d(0,0,1,5deg);
        transform: rotate3d(0,0,1,5deg)
    }

    80% {
        -webkit-transform: rotate3d(0,0,1,-5deg);
        transform: rotate3d(0,0,1,-5deg)
    }

    to {
        -webkit-transform: rotate3d(0,0,1,0deg);
        transform: rotate3d(0,0,1,0deg)
    }
}

.swing {
    -webkit-transform-origin: top center;
    transform-origin: top center;
    -webkit-animation-name: swing;
    animation-name: swing
}

@-webkit-keyframes tada {
    from {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }

    10%,20% {
        -webkit-transform: scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg);
        transform: scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg)
    }

    30%,50%,70%,90% {
        -webkit-transform: scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg);
        transform: scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg)
    }

    40%,60%,80% {
        -webkit-transform: scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg);
        transform: scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg)
    }

    to {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }
}

@keyframes tada {
    from {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }

    10%,20% {
        -webkit-transform: scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg);
        transform: scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg)
    }

    30%,50%,70%,90% {
        -webkit-transform: scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg);
        transform: scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg)
    }

    40%,60%,80% {
        -webkit-transform: scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg);
        transform: scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg)
    }

    to {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }
}

.tada {
    -webkit-animation-name: tada;
    animation-name: tada
}

@-webkit-keyframes wobble {
    from {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    15% {
        -webkit-transform: translate3d(-25%,0,0) rotate3d(0,0,1,-5deg);
        transform: translate3d(-25%,0,0) rotate3d(0,0,1,-5deg)
    }

    30% {
        -webkit-transform: translate3d(20%,0,0) rotate3d(0,0,1,3deg);
        transform: translate3d(20%,0,0) rotate3d(0,0,1,3deg)
    }

    45% {
        -webkit-transform: translate3d(-15%,0,0) rotate3d(0,0,1,-3deg);
        transform: translate3d(-15%,0,0) rotate3d(0,0,1,-3deg)
    }

    60% {
        -webkit-transform: translate3d(10%,0,0) rotate3d(0,0,1,2deg);
        transform: translate3d(10%,0,0) rotate3d(0,0,1,2deg)
    }

    75% {
        -webkit-transform: translate3d(-5%,0,0) rotate3d(0,0,1,-1deg);
        transform: translate3d(-5%,0,0) rotate3d(0,0,1,-1deg)
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes wobble {
    from {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    15% {
        -webkit-transform: translate3d(-25%,0,0) rotate3d(0,0,1,-5deg);
        transform: translate3d(-25%,0,0) rotate3d(0,0,1,-5deg)
    }

    30% {
        -webkit-transform: translate3d(20%,0,0) rotate3d(0,0,1,3deg);
        transform: translate3d(20%,0,0) rotate3d(0,0,1,3deg)
    }

    45% {
        -webkit-transform: translate3d(-15%,0,0) rotate3d(0,0,1,-3deg);
        transform: translate3d(-15%,0,0) rotate3d(0,0,1,-3deg)
    }

    60% {
        -webkit-transform: translate3d(10%,0,0) rotate3d(0,0,1,2deg);
        transform: translate3d(10%,0,0) rotate3d(0,0,1,2deg)
    }

    75% {
        -webkit-transform: translate3d(-5%,0,0) rotate3d(0,0,1,-1deg);
        transform: translate3d(-5%,0,0) rotate3d(0,0,1,-1deg)
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.wobble {
    -webkit-animation-name: wobble;
    animation-name: wobble
}

@-webkit-keyframes jello {
    11.1%,from,to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    22.2% {
        -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
        transform: skewX(-12.5deg) skewY(-12.5deg)
    }

    33.3% {
        -webkit-transform: skewX(6.25deg) skewY(6.25deg);
        transform: skewX(6.25deg) skewY(6.25deg)
    }

    44.4% {
        -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
        transform: skewX(-3.125deg) skewY(-3.125deg)
    }

    55.5% {
        -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
        transform: skewX(1.5625deg) skewY(1.5625deg)
    }

    66.6% {
        -webkit-transform: skewX(-.78125deg) skewY(-.78125deg);
        transform: skewX(-.78125deg) skewY(-.78125deg)
    }

    77.7% {
        -webkit-transform: skewX(.390625deg) skewY(.390625deg);
        transform: skewX(.390625deg) skewY(.390625deg)
    }

    88.8% {
        -webkit-transform: skewX(-.1953125deg) skewY(-.1953125deg);
        transform: skewX(-.1953125deg) skewY(-.1953125deg)
    }
}

@keyframes jello {
    11.1%,from,to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    22.2% {
        -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
        transform: skewX(-12.5deg) skewY(-12.5deg)
    }

    33.3% {
        -webkit-transform: skewX(6.25deg) skewY(6.25deg);
        transform: skewX(6.25deg) skewY(6.25deg)
    }

    44.4% {
        -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
        transform: skewX(-3.125deg) skewY(-3.125deg)
    }

    55.5% {
        -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
        transform: skewX(1.5625deg) skewY(1.5625deg)
    }

    66.6% {
        -webkit-transform: skewX(-.78125deg) skewY(-.78125deg);
        transform: skewX(-.78125deg) skewY(-.78125deg)
    }

    77.7% {
        -webkit-transform: skewX(.390625deg) skewY(.390625deg);
        transform: skewX(.390625deg) skewY(.390625deg)
    }

    88.8% {
        -webkit-transform: skewX(-.1953125deg) skewY(-.1953125deg);
        transform: skewX(-.1953125deg) skewY(-.1953125deg)
    }
}

.jello {
    -webkit-animation-name: jello;
    animation-name: jello;
    -webkit-transform-origin: center;
    transform-origin: center
}

@-webkit-keyframes heartBeat {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1)
    }

    14% {
        -webkit-transform: scale(1.3);
        transform: scale(1.3)
    }

    28% {
        -webkit-transform: scale(1);
        transform: scale(1)
    }

    42% {
        -webkit-transform: scale(1.3);
        transform: scale(1.3)
    }

    70% {
        -webkit-transform: scale(1);
        transform: scale(1)
    }
}

@keyframes heartBeat {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1)
    }

    14% {
        -webkit-transform: scale(1.3);
        transform: scale(1.3)
    }

    28% {
        -webkit-transform: scale(1);
        transform: scale(1)
    }

    42% {
        -webkit-transform: scale(1.3);
        transform: scale(1.3)
    }

    70% {
        -webkit-transform: scale(1);
        transform: scale(1)
    }
}

.heartBeat {
    -webkit-animation-name: heartBeat;
    animation-name: heartBeat;
    -webkit-animation-duration: 1.3s;
    animation-duration: 1.3s;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out
}

@-webkit-keyframes bounceIn {
    20%,40%,60%,80%,from,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    0% {
        opacity: 0;
        -webkit-transform: scale3d(.3,.3,.3);
        transform: scale3d(.3,.3,.3)
    }

    20% {
        -webkit-transform: scale3d(1.1,1.1,1.1);
        transform: scale3d(1.1,1.1,1.1)
    }

    40% {
        -webkit-transform: scale3d(.9,.9,.9);
        transform: scale3d(.9,.9,.9)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(1.03,1.03,1.03);
        transform: scale3d(1.03,1.03,1.03)
    }

    80% {
        -webkit-transform: scale3d(.97,.97,.97);
        transform: scale3d(.97,.97,.97)
    }

    to {
        opacity: 1;
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }
}

@keyframes bounceIn {
    20%,40%,60%,80%,from,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    0% {
        opacity: 0;
        -webkit-transform: scale3d(.3,.3,.3);
        transform: scale3d(.3,.3,.3)
    }

    20% {
        -webkit-transform: scale3d(1.1,1.1,1.1);
        transform: scale3d(1.1,1.1,1.1)
    }

    40% {
        -webkit-transform: scale3d(.9,.9,.9);
        transform: scale3d(.9,.9,.9)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(1.03,1.03,1.03);
        transform: scale3d(1.03,1.03,1.03)
    }

    80% {
        -webkit-transform: scale3d(.97,.97,.97);
        transform: scale3d(.97,.97,.97)
    }

    to {
        opacity: 1;
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }
}

.bounceIn {
    -webkit-animation-duration: .75s;
    animation-duration: .75s;
    -webkit-animation-name: bounceIn;
    animation-name: bounceIn
}

@-webkit-keyframes bounceInDown {
    60%,75%,90%,from,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    0% {
        opacity: 0;
        -webkit-transform: translate3d(0,-3000px,0);
        transform: translate3d(0,-3000px,0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(0,25px,0);
        transform: translate3d(0,25px,0)
    }

    75% {
        -webkit-transform: translate3d(0,-10px,0);
        transform: translate3d(0,-10px,0)
    }

    90% {
        -webkit-transform: translate3d(0,5px,0);
        transform: translate3d(0,5px,0)
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes bounceInDown {
    60%,75%,90%,from,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    0% {
        opacity: 0;
        -webkit-transform: translate3d(0,-3000px,0);
        transform: translate3d(0,-3000px,0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(0,25px,0);
        transform: translate3d(0,25px,0)
    }

    75% {
        -webkit-transform: translate3d(0,-10px,0);
        transform: translate3d(0,-10px,0)
    }

    90% {
        -webkit-transform: translate3d(0,5px,0);
        transform: translate3d(0,5px,0)
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.bounceInDown {
    -webkit-animation-name: bounceInDown;
    animation-name: bounceInDown
}

@-webkit-keyframes bounceInLeft {
    60%,75%,90%,from,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    0% {
        opacity: 0;
        -webkit-transform: translate3d(-3000px,0,0);
        transform: translate3d(-3000px,0,0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(25px,0,0);
        transform: translate3d(25px,0,0)
    }

    75% {
        -webkit-transform: translate3d(-10px,0,0);
        transform: translate3d(-10px,0,0)
    }

    90% {
        -webkit-transform: translate3d(5px,0,0);
        transform: translate3d(5px,0,0)
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes bounceInLeft {
    60%,75%,90%,from,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    0% {
        opacity: 0;
        -webkit-transform: translate3d(-3000px,0,0);
        transform: translate3d(-3000px,0,0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(25px,0,0);
        transform: translate3d(25px,0,0)
    }

    75% {
        -webkit-transform: translate3d(-10px,0,0);
        transform: translate3d(-10px,0,0)
    }

    90% {
        -webkit-transform: translate3d(5px,0,0);
        transform: translate3d(5px,0,0)
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.bounceInLeft {
    -webkit-animation-name: bounceInLeft;
    animation-name: bounceInLeft
}

@-webkit-keyframes bounceInRight {
    60%,75%,90%,from,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    from {
        opacity: 0;
        -webkit-transform: translate3d(3000px,0,0);
        transform: translate3d(3000px,0,0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(-25px,0,0);
        transform: translate3d(-25px,0,0)
    }

    75% {
        -webkit-transform: translate3d(10px,0,0);
        transform: translate3d(10px,0,0)
    }

    90% {
        -webkit-transform: translate3d(-5px,0,0);
        transform: translate3d(-5px,0,0)
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes bounceInRight {
    60%,75%,90%,from,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    from {
        opacity: 0;
        -webkit-transform: translate3d(3000px,0,0);
        transform: translate3d(3000px,0,0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(-25px,0,0);
        transform: translate3d(-25px,0,0)
    }

    75% {
        -webkit-transform: translate3d(10px,0,0);
        transform: translate3d(10px,0,0)
    }

    90% {
        -webkit-transform: translate3d(-5px,0,0);
        transform: translate3d(-5px,0,0)
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.bounceInRight {
    -webkit-animation-name: bounceInRight;
    animation-name: bounceInRight
}

@-webkit-keyframes bounceInUp {
    60%,75%,90%,from,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    from {
        opacity: 0;
        -webkit-transform: translate3d(0,3000px,0);
        transform: translate3d(0,3000px,0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(0,-20px,0);
        transform: translate3d(0,-20px,0)
    }

    75% {
        -webkit-transform: translate3d(0,10px,0);
        transform: translate3d(0,10px,0)
    }

    90% {
        -webkit-transform: translate3d(0,-5px,0);
        transform: translate3d(0,-5px,0)
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes bounceInUp {
    60%,75%,90%,from,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    from {
        opacity: 0;
        -webkit-transform: translate3d(0,3000px,0);
        transform: translate3d(0,3000px,0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(0,-20px,0);
        transform: translate3d(0,-20px,0)
    }

    75% {
        -webkit-transform: translate3d(0,10px,0);
        transform: translate3d(0,10px,0)
    }

    90% {
        -webkit-transform: translate3d(0,-5px,0);
        transform: translate3d(0,-5px,0)
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.bounceInUp {
    -webkit-animation-name: bounceInUp;
    animation-name: bounceInUp
}

@-webkit-keyframes bounceOut {
    20% {
        -webkit-transform: scale3d(.9,.9,.9);
        transform: scale3d(.9,.9,.9)
    }

    50%,55% {
        opacity: 1;
        -webkit-transform: scale3d(1.1,1.1,1.1);
        transform: scale3d(1.1,1.1,1.1)
    }

    to {
        opacity: 0;
        -webkit-transform: scale3d(.3,.3,.3);
        transform: scale3d(.3,.3,.3)
    }
}

@keyframes bounceOut {
    20% {
        -webkit-transform: scale3d(.9,.9,.9);
        transform: scale3d(.9,.9,.9)
    }

    50%,55% {
        opacity: 1;
        -webkit-transform: scale3d(1.1,1.1,1.1);
        transform: scale3d(1.1,1.1,1.1)
    }

    to {
        opacity: 0;
        -webkit-transform: scale3d(.3,.3,.3);
        transform: scale3d(.3,.3,.3)
    }
}

.bounceOut {
    -webkit-animation-duration: .75s;
    animation-duration: .75s;
    -webkit-animation-name: bounceOut;
    animation-name: bounceOut
}

@-webkit-keyframes bounceOutDown {
    20% {
        -webkit-transform: translate3d(0,10px,0);
        transform: translate3d(0,10px,0)
    }

    40%,45% {
        opacity: 1;
        -webkit-transform: translate3d(0,-20px,0);
        transform: translate3d(0,-20px,0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,2000px,0);
        transform: translate3d(0,2000px,0)
    }
}

@keyframes bounceOutDown {
    20% {
        -webkit-transform: translate3d(0,10px,0);
        transform: translate3d(0,10px,0)
    }

    40%,45% {
        opacity: 1;
        -webkit-transform: translate3d(0,-20px,0);
        transform: translate3d(0,-20px,0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,2000px,0);
        transform: translate3d(0,2000px,0)
    }
}

.bounceOutDown {
    -webkit-animation-name: bounceOutDown;
    animation-name: bounceOutDown
}

@-webkit-keyframes bounceOutLeft {
    20% {
        opacity: 1;
        -webkit-transform: translate3d(20px,0,0);
        transform: translate3d(20px,0,0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(-2000px,0,0);
        transform: translate3d(-2000px,0,0)
    }
}

@keyframes bounceOutLeft {
    20% {
        opacity: 1;
        -webkit-transform: translate3d(20px,0,0);
        transform: translate3d(20px,0,0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(-2000px,0,0);
        transform: translate3d(-2000px,0,0)
    }
}

.bounceOutLeft {
    -webkit-animation-name: bounceOutLeft;
    animation-name: bounceOutLeft
}

@-webkit-keyframes bounceOutRight {
    20% {
        opacity: 1;
        -webkit-transform: translate3d(-20px,0,0);
        transform: translate3d(-20px,0,0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(2000px,0,0);
        transform: translate3d(2000px,0,0)
    }
}

@keyframes bounceOutRight {
    20% {
        opacity: 1;
        -webkit-transform: translate3d(-20px,0,0);
        transform: translate3d(-20px,0,0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(2000px,0,0);
        transform: translate3d(2000px,0,0)
    }
}

.bounceOutRight {
    -webkit-animation-name: bounceOutRight;
    animation-name: bounceOutRight
}

@-webkit-keyframes bounceOutUp {
    20% {
        -webkit-transform: translate3d(0,-10px,0);
        transform: translate3d(0,-10px,0)
    }

    40%,45% {
        opacity: 1;
        -webkit-transform: translate3d(0,20px,0);
        transform: translate3d(0,20px,0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,-2000px,0);
        transform: translate3d(0,-2000px,0)
    }
}

@keyframes bounceOutUp {
    20% {
        -webkit-transform: translate3d(0,-10px,0);
        transform: translate3d(0,-10px,0)
    }

    40%,45% {
        opacity: 1;
        -webkit-transform: translate3d(0,20px,0);
        transform: translate3d(0,20px,0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,-2000px,0);
        transform: translate3d(0,-2000px,0)
    }
}

.bounceOutUp {
    -webkit-animation-name: bounceOutUp;
    animation-name: bounceOutUp
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

@-webkit-keyframes fadeInDown {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0,-100%,0);
        transform: translate3d(0,-100%,0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0,-100%,0);
        transform: translate3d(0,-100%,0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.fadeInDown {
    -webkit-animation-name: fadeInDown;
    animation-name: fadeInDown
}

@-webkit-keyframes fadeInDownBig {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0,-2000px,0);
        transform: translate3d(0,-2000px,0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes fadeInDownBig {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0,-2000px,0);
        transform: translate3d(0,-2000px,0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.fadeInDownBig {
    -webkit-animation-name: fadeInDownBig;
    animation-name: fadeInDownBig
}

@-webkit-keyframes fadeInLeft {
    from {
        opacity: 0;
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes fadeInLeft {
    from {
        opacity: 0;
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.fadeInLeft {
    -webkit-animation-name: fadeInLeft;
    animation-name: fadeInLeft
}

@-webkit-keyframes fadeInLeftBig {
    from {
        opacity: 0;
        -webkit-transform: translate3d(-2000px,0,0);
        transform: translate3d(-2000px,0,0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes fadeInLeftBig {
    from {
        opacity: 0;
        -webkit-transform: translate3d(-2000px,0,0);
        transform: translate3d(-2000px,0,0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.fadeInLeftBig {
    -webkit-animation-name: fadeInLeftBig;
    animation-name: fadeInLeftBig
}

@-webkit-keyframes fadeInRight {
    from {
        opacity: 0;
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes fadeInRight {
    from {
        opacity: 0;
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.fadeInRight {
    -webkit-animation-name: fadeInRight;
    animation-name: fadeInRight
}

@-webkit-keyframes fadeInRightBig {
    from {
        opacity: 0;
        -webkit-transform: translate3d(2000px,0,0);
        transform: translate3d(2000px,0,0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes fadeInRightBig {
    from {
        opacity: 0;
        -webkit-transform: translate3d(2000px,0,0);
        transform: translate3d(2000px,0,0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.fadeInRightBig {
    -webkit-animation-name: fadeInRightBig;
    animation-name: fadeInRightBig
}

@-webkit-keyframes fadeInUp {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0,100%,0);
        transform: translate3d(0,100%,0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0,100%,0);
        transform: translate3d(0,100%,0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.fadeInUp {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp
}

@-webkit-keyframes fadeInUpBig {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0,2000px,0);
        transform: translate3d(0,2000px,0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes fadeInUpBig {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0,2000px,0);
        transform: translate3d(0,2000px,0)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.fadeInUpBig {
    -webkit-animation-name: fadeInUpBig;
    animation-name: fadeInUpBig
}

@-webkit-keyframes fadeOut {
    from {
        opacity: 1
    }

    to {
        opacity: 0
    }
}

@keyframes fadeOut {
    from {
        opacity: 1
    }

    to {
        opacity: 0
    }
}

.fadeOut {
    -webkit-animation-name: fadeOut;
    animation-name: fadeOut
}

@-webkit-keyframes fadeOutDown {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,100%,0);
        transform: translate3d(0,100%,0)
    }
}

@keyframes fadeOutDown {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,100%,0);
        transform: translate3d(0,100%,0)
    }
}

.fadeOutDown {
    -webkit-animation-name: fadeOutDown;
    animation-name: fadeOutDown
}

@-webkit-keyframes fadeOutDownBig {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,2000px,0);
        transform: translate3d(0,2000px,0)
    }
}

@keyframes fadeOutDownBig {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,2000px,0);
        transform: translate3d(0,2000px,0)
    }
}

.fadeOutDownBig {
    -webkit-animation-name: fadeOutDownBig;
    animation-name: fadeOutDownBig
}

@-webkit-keyframes fadeOutLeft {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0)
    }
}

@keyframes fadeOutLeft {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0)
    }
}

.fadeOutLeft {
    -webkit-animation-name: fadeOutLeft;
    animation-name: fadeOutLeft
}

@-webkit-keyframes fadeOutLeftBig {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(-2000px,0,0);
        transform: translate3d(-2000px,0,0)
    }
}

@keyframes fadeOutLeftBig {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(-2000px,0,0);
        transform: translate3d(-2000px,0,0)
    }
}

.fadeOutLeftBig {
    -webkit-animation-name: fadeOutLeftBig;
    animation-name: fadeOutLeftBig
}

@-webkit-keyframes fadeOutRight {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0)
    }
}

@keyframes fadeOutRight {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0)
    }
}

.fadeOutRight {
    -webkit-animation-name: fadeOutRight;
    animation-name: fadeOutRight
}

@-webkit-keyframes fadeOutRightBig {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(2000px,0,0);
        transform: translate3d(2000px,0,0)
    }
}

@keyframes fadeOutRightBig {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(2000px,0,0);
        transform: translate3d(2000px,0,0)
    }
}

.fadeOutRightBig {
    -webkit-animation-name: fadeOutRightBig;
    animation-name: fadeOutRightBig
}

@-webkit-keyframes fadeOutUp {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,-100%,0);
        transform: translate3d(0,-100%,0)
    }
}

@keyframes fadeOutUp {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,-100%,0);
        transform: translate3d(0,-100%,0)
    }
}

.fadeOutUp {
    -webkit-animation-name: fadeOutUp;
    animation-name: fadeOutUp
}

@-webkit-keyframes fadeOutUpBig {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,-2000px,0);
        transform: translate3d(0,-2000px,0)
    }
}

@keyframes fadeOutUpBig {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,-2000px,0);
        transform: translate3d(0,-2000px,0)
    }
}

.fadeOutUpBig {
    -webkit-animation-name: fadeOutUpBig;
    animation-name: fadeOutUpBig
}

@-webkit-keyframes flip {
    from {
        -webkit-transform: perspective(400px) scale3d(1,1,1) translate3d(0,0,0) rotate3d(0,1,0,-360deg);
        transform: perspective(400px) scale3d(1,1,1) translate3d(0,0,0) rotate3d(0,1,0,-360deg);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }

    40% {
        -webkit-transform: perspective(400px) scale3d(1,1,1) translate3d(0,0,150px) rotate3d(0,1,0,-190deg);
        transform: perspective(400px) scale3d(1,1,1) translate3d(0,0,150px) rotate3d(0,1,0,-190deg);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }

    50% {
        -webkit-transform: perspective(400px) scale3d(1,1,1) translate3d(0,0,150px) rotate3d(0,1,0,-170deg);
        transform: perspective(400px) scale3d(1,1,1) translate3d(0,0,150px) rotate3d(0,1,0,-170deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    80% {
        -webkit-transform: perspective(400px) scale3d(.95,.95,.95) translate3d(0,0,0) rotate3d(0,1,0,0deg);
        transform: perspective(400px) scale3d(.95,.95,.95) translate3d(0,0,0) rotate3d(0,1,0,0deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    to {
        -webkit-transform: perspective(400px) scale3d(1,1,1) translate3d(0,0,0) rotate3d(0,1,0,0deg);
        transform: perspective(400px) scale3d(1,1,1) translate3d(0,0,0) rotate3d(0,1,0,0deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }
}

@keyframes flip {
    from {
        -webkit-transform: perspective(400px) scale3d(1,1,1) translate3d(0,0,0) rotate3d(0,1,0,-360deg);
        transform: perspective(400px) scale3d(1,1,1) translate3d(0,0,0) rotate3d(0,1,0,-360deg);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }

    40% {
        -webkit-transform: perspective(400px) scale3d(1,1,1) translate3d(0,0,150px) rotate3d(0,1,0,-190deg);
        transform: perspective(400px) scale3d(1,1,1) translate3d(0,0,150px) rotate3d(0,1,0,-190deg);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }

    50% {
        -webkit-transform: perspective(400px) scale3d(1,1,1) translate3d(0,0,150px) rotate3d(0,1,0,-170deg);
        transform: perspective(400px) scale3d(1,1,1) translate3d(0,0,150px) rotate3d(0,1,0,-170deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    80% {
        -webkit-transform: perspective(400px) scale3d(.95,.95,.95) translate3d(0,0,0) rotate3d(0,1,0,0deg);
        transform: perspective(400px) scale3d(.95,.95,.95) translate3d(0,0,0) rotate3d(0,1,0,0deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    to {
        -webkit-transform: perspective(400px) scale3d(1,1,1) translate3d(0,0,0) rotate3d(0,1,0,0deg);
        transform: perspective(400px) scale3d(1,1,1) translate3d(0,0,0) rotate3d(0,1,0,0deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }
}

.animated.flip {
    -webkit-backface-visibility: visible;
    backface-visibility: visible;
    -webkit-animation-name: flip;
    animation-name: flip
}

@-webkit-keyframes flipInX {
    from {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,90deg);
        transform: perspective(400px) rotate3d(1,0,0,90deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
        opacity: 0
    }

    40% {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,-20deg);
        transform: perspective(400px) rotate3d(1,0,0,-20deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    60% {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,10deg);
        transform: perspective(400px) rotate3d(1,0,0,10deg);
        opacity: 1
    }

    80% {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,-5deg);
        transform: perspective(400px) rotate3d(1,0,0,-5deg)
    }

    to {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }
}

@keyframes flipInX {
    from {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,90deg);
        transform: perspective(400px) rotate3d(1,0,0,90deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
        opacity: 0
    }

    40% {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,-20deg);
        transform: perspective(400px) rotate3d(1,0,0,-20deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    60% {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,10deg);
        transform: perspective(400px) rotate3d(1,0,0,10deg);
        opacity: 1
    }

    80% {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,-5deg);
        transform: perspective(400px) rotate3d(1,0,0,-5deg)
    }

    to {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }
}

.flipInX {
    -webkit-backface-visibility: visible!important;
    backface-visibility: visible!important;
    -webkit-animation-name: flipInX;
    animation-name: flipInX
}

@-webkit-keyframes flipInY {
    from {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,90deg);
        transform: perspective(400px) rotate3d(0,1,0,90deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
        opacity: 0
    }

    40% {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,-20deg);
        transform: perspective(400px) rotate3d(0,1,0,-20deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    60% {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,10deg);
        transform: perspective(400px) rotate3d(0,1,0,10deg);
        opacity: 1
    }

    80% {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,-5deg);
        transform: perspective(400px) rotate3d(0,1,0,-5deg)
    }

    to {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }
}

@keyframes flipInY {
    from {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,90deg);
        transform: perspective(400px) rotate3d(0,1,0,90deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
        opacity: 0
    }

    40% {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,-20deg);
        transform: perspective(400px) rotate3d(0,1,0,-20deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    60% {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,10deg);
        transform: perspective(400px) rotate3d(0,1,0,10deg);
        opacity: 1
    }

    80% {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,-5deg);
        transform: perspective(400px) rotate3d(0,1,0,-5deg)
    }

    to {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }
}

.flipInY {
    -webkit-backface-visibility: visible!important;
    backface-visibility: visible!important;
    -webkit-animation-name: flipInY;
    animation-name: flipInY
}

@-webkit-keyframes flipOutX {
    from {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }

    30% {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,-20deg);
        transform: perspective(400px) rotate3d(1,0,0,-20deg);
        opacity: 1
    }

    to {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,90deg);
        transform: perspective(400px) rotate3d(1,0,0,90deg);
        opacity: 0
    }
}

@keyframes flipOutX {
    from {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }

    30% {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,-20deg);
        transform: perspective(400px) rotate3d(1,0,0,-20deg);
        opacity: 1
    }

    to {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,90deg);
        transform: perspective(400px) rotate3d(1,0,0,90deg);
        opacity: 0
    }
}

.flipOutX {
    -webkit-animation-duration: .75s;
    animation-duration: .75s;
    -webkit-animation-name: flipOutX;
    animation-name: flipOutX;
    -webkit-backface-visibility: visible!important;
    backface-visibility: visible!important
}

@-webkit-keyframes flipOutY {
    from {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }

    30% {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,-15deg);
        transform: perspective(400px) rotate3d(0,1,0,-15deg);
        opacity: 1
    }

    to {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,90deg);
        transform: perspective(400px) rotate3d(0,1,0,90deg);
        opacity: 0
    }
}

@keyframes flipOutY {
    from {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }

    30% {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,-15deg);
        transform: perspective(400px) rotate3d(0,1,0,-15deg);
        opacity: 1
    }

    to {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,90deg);
        transform: perspective(400px) rotate3d(0,1,0,90deg);
        opacity: 0
    }
}

.flipOutY {
    -webkit-animation-duration: .75s;
    animation-duration: .75s;
    -webkit-backface-visibility: visible!important;
    backface-visibility: visible!important;
    -webkit-animation-name: flipOutY;
    animation-name: flipOutY
}

@-webkit-keyframes lightSpeedIn {
    from {
        -webkit-transform: translate3d(100%,0,0) skewX(-30deg);
        transform: translate3d(100%,0,0) skewX(-30deg);
        opacity: 0
    }

    60% {
        -webkit-transform: skewX(20deg);
        transform: skewX(20deg);
        opacity: 1
    }

    80% {
        -webkit-transform: skewX(-5deg);
        transform: skewX(-5deg)
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes lightSpeedIn {
    from {
        -webkit-transform: translate3d(100%,0,0) skewX(-30deg);
        transform: translate3d(100%,0,0) skewX(-30deg);
        opacity: 0
    }

    60% {
        -webkit-transform: skewX(20deg);
        transform: skewX(20deg);
        opacity: 1
    }

    80% {
        -webkit-transform: skewX(-5deg);
        transform: skewX(-5deg)
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.lightSpeedIn {
    -webkit-animation-name: lightSpeedIn;
    animation-name: lightSpeedIn;
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out
}

@-webkit-keyframes lightSpeedOut {
    from {
        opacity: 1
    }

    to {
        -webkit-transform: translate3d(100%,0,0) skewX(30deg);
        transform: translate3d(100%,0,0) skewX(30deg);
        opacity: 0
    }
}

@keyframes lightSpeedOut {
    from {
        opacity: 1
    }

    to {
        -webkit-transform: translate3d(100%,0,0) skewX(30deg);
        transform: translate3d(100%,0,0) skewX(30deg);
        opacity: 0
    }
}

.lightSpeedOut {
    -webkit-animation-name: lightSpeedOut;
    animation-name: lightSpeedOut;
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
}

@-webkit-keyframes rotateIn {
    from {
        -webkit-transform-origin: center;
        transform-origin: center;
        -webkit-transform: rotate3d(0,0,1,-200deg);
        transform: rotate3d(0,0,1,-200deg);
        opacity: 0
    }

    to {
        -webkit-transform-origin: center;
        transform-origin: center;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
        opacity: 1
    }
}

@keyframes rotateIn {
    from {
        -webkit-transform-origin: center;
        transform-origin: center;
        -webkit-transform: rotate3d(0,0,1,-200deg);
        transform: rotate3d(0,0,1,-200deg);
        opacity: 0
    }

    to {
        -webkit-transform-origin: center;
        transform-origin: center;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
        opacity: 1
    }
}

.rotateIn {
    -webkit-animation-name: rotateIn;
    animation-name: rotateIn
}

@-webkit-keyframes rotateInDownLeft {
    from {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate3d(0,0,1,-45deg);
        transform: rotate3d(0,0,1,-45deg);
        opacity: 0
    }

    to {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
        opacity: 1
    }
}

@keyframes rotateInDownLeft {
    from {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate3d(0,0,1,-45deg);
        transform: rotate3d(0,0,1,-45deg);
        opacity: 0
    }

    to {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
        opacity: 1
    }
}

.rotateInDownLeft {
    -webkit-animation-name: rotateInDownLeft;
    animation-name: rotateInDownLeft
}

@-webkit-keyframes rotateInDownRight {
    from {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate3d(0,0,1,45deg);
        transform: rotate3d(0,0,1,45deg);
        opacity: 0
    }

    to {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
        opacity: 1
    }
}

@keyframes rotateInDownRight {
    from {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate3d(0,0,1,45deg);
        transform: rotate3d(0,0,1,45deg);
        opacity: 0
    }

    to {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
        opacity: 1
    }
}

.rotateInDownRight {
    -webkit-animation-name: rotateInDownRight;
    animation-name: rotateInDownRight
}

@-webkit-keyframes rotateInUpLeft {
    from {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate3d(0,0,1,45deg);
        transform: rotate3d(0,0,1,45deg);
        opacity: 0
    }

    to {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
        opacity: 1
    }
}

@keyframes rotateInUpLeft {
    from {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate3d(0,0,1,45deg);
        transform: rotate3d(0,0,1,45deg);
        opacity: 0
    }

    to {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
        opacity: 1
    }
}

.rotateInUpLeft {
    -webkit-animation-name: rotateInUpLeft;
    animation-name: rotateInUpLeft
}

@-webkit-keyframes rotateInUpRight {
    from {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate3d(0,0,1,-90deg);
        transform: rotate3d(0,0,1,-90deg);
        opacity: 0
    }

    to {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
        opacity: 1
    }
}

@keyframes rotateInUpRight {
    from {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate3d(0,0,1,-90deg);
        transform: rotate3d(0,0,1,-90deg);
        opacity: 0
    }

    to {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
        opacity: 1
    }
}

.rotateInUpRight {
    -webkit-animation-name: rotateInUpRight;
    animation-name: rotateInUpRight
}

@-webkit-keyframes rotateOut {
    from {
        -webkit-transform-origin: center;
        transform-origin: center;
        opacity: 1
    }

    to {
        -webkit-transform-origin: center;
        transform-origin: center;
        -webkit-transform: rotate3d(0,0,1,200deg);
        transform: rotate3d(0,0,1,200deg);
        opacity: 0
    }
}

@keyframes rotateOut {
    from {
        -webkit-transform-origin: center;
        transform-origin: center;
        opacity: 1
    }

    to {
        -webkit-transform-origin: center;
        transform-origin: center;
        -webkit-transform: rotate3d(0,0,1,200deg);
        transform: rotate3d(0,0,1,200deg);
        opacity: 0
    }
}

.rotateOut {
    -webkit-animation-name: rotateOut;
    animation-name: rotateOut
}

@-webkit-keyframes rotateOutDownLeft {
    from {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        opacity: 1
    }

    to {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate3d(0,0,1,45deg);
        transform: rotate3d(0,0,1,45deg);
        opacity: 0
    }
}

@keyframes rotateOutDownLeft {
    from {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        opacity: 1
    }

    to {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate3d(0,0,1,45deg);
        transform: rotate3d(0,0,1,45deg);
        opacity: 0
    }
}

.rotateOutDownLeft {
    -webkit-animation-name: rotateOutDownLeft;
    animation-name: rotateOutDownLeft
}

@-webkit-keyframes rotateOutDownRight {
    from {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        opacity: 1
    }

    to {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate3d(0,0,1,-45deg);
        transform: rotate3d(0,0,1,-45deg);
        opacity: 0
    }
}

@keyframes rotateOutDownRight {
    from {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        opacity: 1
    }

    to {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate3d(0,0,1,-45deg);
        transform: rotate3d(0,0,1,-45deg);
        opacity: 0
    }
}

.rotateOutDownRight {
    -webkit-animation-name: rotateOutDownRight;
    animation-name: rotateOutDownRight
}

@-webkit-keyframes rotateOutUpLeft {
    from {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        opacity: 1
    }

    to {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate3d(0,0,1,-45deg);
        transform: rotate3d(0,0,1,-45deg);
        opacity: 0
    }
}

@keyframes rotateOutUpLeft {
    from {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        opacity: 1
    }

    to {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate3d(0,0,1,-45deg);
        transform: rotate3d(0,0,1,-45deg);
        opacity: 0
    }
}

.rotateOutUpLeft {
    -webkit-animation-name: rotateOutUpLeft;
    animation-name: rotateOutUpLeft
}

@-webkit-keyframes rotateOutUpRight {
    from {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        opacity: 1
    }

    to {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate3d(0,0,1,90deg);
        transform: rotate3d(0,0,1,90deg);
        opacity: 0
    }
}

@keyframes rotateOutUpRight {
    from {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        opacity: 1
    }

    to {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate3d(0,0,1,90deg);
        transform: rotate3d(0,0,1,90deg);
        opacity: 0
    }
}

.rotateOutUpRight {
    -webkit-animation-name: rotateOutUpRight;
    animation-name: rotateOutUpRight
}

@-webkit-keyframes hinge {
    0% {
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }

    20%,60% {
        -webkit-transform: rotate3d(0,0,1,80deg);
        transform: rotate3d(0,0,1,80deg);
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }

    40%,80% {
        -webkit-transform: rotate3d(0,0,1,60deg);
        transform: rotate3d(0,0,1,60deg);
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
        opacity: 1
    }

    to {
        -webkit-transform: translate3d(0,700px,0);
        transform: translate3d(0,700px,0);
        opacity: 0
    }
}

@keyframes hinge {
    0% {
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }

    20%,60% {
        -webkit-transform: rotate3d(0,0,1,80deg);
        transform: rotate3d(0,0,1,80deg);
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }

    40%,80% {
        -webkit-transform: rotate3d(0,0,1,60deg);
        transform: rotate3d(0,0,1,60deg);
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
        opacity: 1
    }

    to {
        -webkit-transform: translate3d(0,700px,0);
        transform: translate3d(0,700px,0);
        opacity: 0
    }
}

.hinge {
    -webkit-animation-duration: 2s;
    animation-duration: 2s;
    -webkit-animation-name: hinge;
    animation-name: hinge
}

@-webkit-keyframes jackInTheBox {
    from {
        opacity: 0;
        -webkit-transform: scale(.1) rotate(30deg);
        transform: scale(.1) rotate(30deg);
        -webkit-transform-origin: center bottom;
        transform-origin: center bottom
    }

    50% {
        -webkit-transform: rotate(-10deg);
        transform: rotate(-10deg)
    }

    70% {
        -webkit-transform: rotate(3deg);
        transform: rotate(3deg)
    }

    to {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1)
    }
}

@keyframes jackInTheBox {
    from {
        opacity: 0;
        -webkit-transform: scale(.1) rotate(30deg);
        transform: scale(.1) rotate(30deg);
        -webkit-transform-origin: center bottom;
        transform-origin: center bottom
    }

    50% {
        -webkit-transform: rotate(-10deg);
        transform: rotate(-10deg)
    }

    70% {
        -webkit-transform: rotate(3deg);
        transform: rotate(3deg)
    }

    to {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1)
    }
}

.jackInTheBox {
    -webkit-animation-name: jackInTheBox;
    animation-name: jackInTheBox
}

@-webkit-keyframes rollIn {
    from {
        opacity: 0;
        -webkit-transform: translate3d(-100%,0,0) rotate3d(0,0,1,-120deg);
        transform: translate3d(-100%,0,0) rotate3d(0,0,1,-120deg)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes rollIn {
    from {
        opacity: 0;
        -webkit-transform: translate3d(-100%,0,0) rotate3d(0,0,1,-120deg);
        transform: translate3d(-100%,0,0) rotate3d(0,0,1,-120deg)
    }

    to {
        opacity: 1;
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.rollIn {
    -webkit-animation-name: rollIn;
    animation-name: rollIn
}

@-webkit-keyframes rollOut {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(100%,0,0) rotate3d(0,0,1,120deg);
        transform: translate3d(100%,0,0) rotate3d(0,0,1,120deg)
    }
}

@keyframes rollOut {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(100%,0,0) rotate3d(0,0,1,120deg);
        transform: translate3d(100%,0,0) rotate3d(0,0,1,120deg)
    }
}

.rollOut {
    -webkit-animation-name: rollOut;
    animation-name: rollOut
}

@-webkit-keyframes zoomIn {
    from {
        opacity: 0;
        -webkit-transform: scale3d(.3,.3,.3);
        transform: scale3d(.3,.3,.3)
    }

    50% {
        opacity: 1
    }
}

@keyframes zoomIn {
    from {
        opacity: 0;
        -webkit-transform: scale3d(.3,.3,.3);
        transform: scale3d(.3,.3,.3)
    }

    50% {
        opacity: 1
    }
}

.zoomIn {
    -webkit-animation-name: zoomIn;
    animation-name: zoomIn
}

@-webkit-keyframes zoomInDown {
    from {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(0,-1000px,0);
        transform: scale3d(.1,.1,.1) translate3d(0,-1000px,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(0,60px,0);
        transform: scale3d(.475,.475,.475) translate3d(0,60px,0);
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

@keyframes zoomInDown {
    from {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(0,-1000px,0);
        transform: scale3d(.1,.1,.1) translate3d(0,-1000px,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(0,60px,0);
        transform: scale3d(.475,.475,.475) translate3d(0,60px,0);
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

.zoomInDown {
    -webkit-animation-name: zoomInDown;
    animation-name: zoomInDown
}

@-webkit-keyframes zoomInLeft {
    from {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(-1000px,0,0);
        transform: scale3d(.1,.1,.1) translate3d(-1000px,0,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(10px,0,0);
        transform: scale3d(.475,.475,.475) translate3d(10px,0,0);
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

@keyframes zoomInLeft {
    from {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(-1000px,0,0);
        transform: scale3d(.1,.1,.1) translate3d(-1000px,0,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(10px,0,0);
        transform: scale3d(.475,.475,.475) translate3d(10px,0,0);
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

.zoomInLeft {
    -webkit-animation-name: zoomInLeft;
    animation-name: zoomInLeft
}

@-webkit-keyframes zoomInRight {
    from {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(1000px,0,0);
        transform: scale3d(.1,.1,.1) translate3d(1000px,0,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(-10px,0,0);
        transform: scale3d(.475,.475,.475) translate3d(-10px,0,0);
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

@keyframes zoomInRight {
    from {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(1000px,0,0);
        transform: scale3d(.1,.1,.1) translate3d(1000px,0,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(-10px,0,0);
        transform: scale3d(.475,.475,.475) translate3d(-10px,0,0);
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

.zoomInRight {
    -webkit-animation-name: zoomInRight;
    animation-name: zoomInRight
}

@-webkit-keyframes zoomInUp {
    from {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(0,1000px,0);
        transform: scale3d(.1,.1,.1) translate3d(0,1000px,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(0,-60px,0);
        transform: scale3d(.475,.475,.475) translate3d(0,-60px,0);
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

@keyframes zoomInUp {
    from {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(0,1000px,0);
        transform: scale3d(.1,.1,.1) translate3d(0,1000px,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(0,-60px,0);
        transform: scale3d(.475,.475,.475) translate3d(0,-60px,0);
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

.zoomInUp {
    -webkit-animation-name: zoomInUp;
    animation-name: zoomInUp
}

@-webkit-keyframes zoomOut {
    from {
        opacity: 1
    }

    50% {
        opacity: 0;
        -webkit-transform: scale3d(.3,.3,.3);
        transform: scale3d(.3,.3,.3)
    }

    to {
        opacity: 0
    }
}

@keyframes zoomOut {
    from {
        opacity: 1
    }

    50% {
        opacity: 0;
        -webkit-transform: scale3d(.3,.3,.3);
        transform: scale3d(.3,.3,.3)
    }

    to {
        opacity: 0
    }
}

.zoomOut {
    -webkit-animation-name: zoomOut;
    animation-name: zoomOut
}

@-webkit-keyframes zoomOutDown {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(0,-60px,0);
        transform: scale3d(.475,.475,.475) translate3d(0,-60px,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    to {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(0,2000px,0);
        transform: scale3d(.1,.1,.1) translate3d(0,2000px,0);
        -webkit-transform-origin: center bottom;
        transform-origin: center bottom;
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

@keyframes zoomOutDown {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(0,-60px,0);
        transform: scale3d(.475,.475,.475) translate3d(0,-60px,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    to {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(0,2000px,0);
        transform: scale3d(.1,.1,.1) translate3d(0,2000px,0);
        -webkit-transform-origin: center bottom;
        transform-origin: center bottom;
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

.zoomOutDown {
    -webkit-animation-name: zoomOutDown;
    animation-name: zoomOutDown
}

@-webkit-keyframes zoomOutLeft {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(42px,0,0);
        transform: scale3d(.475,.475,.475) translate3d(42px,0,0)
    }

    to {
        opacity: 0;
        -webkit-transform: scale(.1) translate3d(-2000px,0,0);
        transform: scale(.1) translate3d(-2000px,0,0);
        -webkit-transform-origin: left center;
        transform-origin: left center
    }
}

@keyframes zoomOutLeft {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(42px,0,0);
        transform: scale3d(.475,.475,.475) translate3d(42px,0,0)
    }

    to {
        opacity: 0;
        -webkit-transform: scale(.1) translate3d(-2000px,0,0);
        transform: scale(.1) translate3d(-2000px,0,0);
        -webkit-transform-origin: left center;
        transform-origin: left center
    }
}

.zoomOutLeft {
    -webkit-animation-name: zoomOutLeft;
    animation-name: zoomOutLeft
}

@-webkit-keyframes zoomOutRight {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(-42px,0,0);
        transform: scale3d(.475,.475,.475) translate3d(-42px,0,0)
    }

    to {
        opacity: 0;
        -webkit-transform: scale(.1) translate3d(2000px,0,0);
        transform: scale(.1) translate3d(2000px,0,0);
        -webkit-transform-origin: right center;
        transform-origin: right center
    }
}

@keyframes zoomOutRight {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(-42px,0,0);
        transform: scale3d(.475,.475,.475) translate3d(-42px,0,0)
    }

    to {
        opacity: 0;
        -webkit-transform: scale(.1) translate3d(2000px,0,0);
        transform: scale(.1) translate3d(2000px,0,0);
        -webkit-transform-origin: right center;
        transform-origin: right center
    }
}

.zoomOutRight {
    -webkit-animation-name: zoomOutRight;
    animation-name: zoomOutRight
}

@-webkit-keyframes zoomOutUp {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(0,60px,0);
        transform: scale3d(.475,.475,.475) translate3d(0,60px,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    to {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(0,-2000px,0);
        transform: scale3d(.1,.1,.1) translate3d(0,-2000px,0);
        -webkit-transform-origin: center bottom;
        transform-origin: center bottom;
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

@keyframes zoomOutUp {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(0,60px,0);
        transform: scale3d(.475,.475,.475) translate3d(0,60px,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    to {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(0,-2000px,0);
        transform: scale3d(.1,.1,.1) translate3d(0,-2000px,0);
        -webkit-transform-origin: center bottom;
        transform-origin: center bottom;
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

.zoomOutUp {
    -webkit-animation-name: zoomOutUp;
    animation-name: zoomOutUp
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

@-webkit-keyframes slideInLeft {
    from {
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0);
        visibility: visible
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes slideInLeft {
    from {
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0);
        visibility: visible
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.slideInLeft {
    -webkit-animation-name: slideInLeft;
    animation-name: slideInLeft
}

@-webkit-keyframes slideInRight {
    from {
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0);
        visibility: visible
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes slideInRight {
    from {
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0);
        visibility: visible
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.slideInRight {
    -webkit-animation-name: slideInRight;
    animation-name: slideInRight
}

@-webkit-keyframes slideInUp {
    from {
        -webkit-transform: translate3d(0,100%,0);
        transform: translate3d(0,100%,0);
        visibility: visible
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes slideInUp {
    from {
        -webkit-transform: translate3d(0,100%,0);
        transform: translate3d(0,100%,0);
        visibility: visible
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.slideInUp {
    -webkit-animation-name: slideInUp;
    animation-name: slideInUp
}

@-webkit-keyframes slideOutDown {
    from {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(0,100%,0);
        transform: translate3d(0,100%,0)
    }
}

@keyframes slideOutDown {
    from {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(0,100%,0);
        transform: translate3d(0,100%,0)
    }
}

.slideOutDown {
    -webkit-animation-name: slideOutDown;
    animation-name: slideOutDown
}

@-webkit-keyframes slideOutLeft {
    from {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0)
    }
}

@keyframes slideOutLeft {
    from {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0)
    }
}

.slideOutLeft {
    -webkit-animation-name: slideOutLeft;
    animation-name: slideOutLeft
}

@-webkit-keyframes slideOutRight {
    from {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0)
    }
}

@keyframes slideOutRight {
    from {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0)
    }
}

.slideOutRight {
    -webkit-animation-name: slideOutRight;
    animation-name: slideOutRight
}

@-webkit-keyframes slideOutUp {
    from {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(0,-100%,0);
        transform: translate3d(0,-100%,0)
    }
}

@keyframes slideOutUp {
    from {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(0,-100%,0);
        transform: translate3d(0,-100%,0)
    }
}

.slideOutUp {
    -webkit-animation-name: slideOutUp;
    animation-name: slideOutUp
}

.animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both
}

.animated.infinite {
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite
}

.animated.delay-1s {
    -webkit-animation-delay: 1s;
    animation-delay: 1s
}

.animated.delay-2s {
    -webkit-animation-delay: 2s;
    animation-delay: 2s
}

.animated.delay-3s {
    -webkit-animation-delay: 3s;
    animation-delay: 3s
}

.animated.delay-4s {
    -webkit-animation-delay: 4s;
    animation-delay: 4s
}

.animated.delay-5s {
    -webkit-animation-delay: 5s;
    animation-delay: 5s
}

.animated.fast {
    -webkit-animation-duration: .8s;
    animation-duration: .8s
}

.animated.faster {
    -webkit-animation-duration: .5s;
    animation-duration: .5s
}

.animated.slow {
    -webkit-animation-duration: 2s;
    animation-duration: 2s
}

.animated.slower {
    -webkit-animation-duration: 3s;
    animation-duration: 3s
}

@media(print),(prefers-reduced-motion) {
    .animated {
        -webkit-animation: unset!important;
        animation: unset!important;
        -webkit-transition: none!important;
        transition: none!important
    }
}

@font-face {
    font-family: Poppins;
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Poppins Light'),local('Poppins-Light'),url(/fonts/pxiByp8kv8JHgFVrLDz8Z11lFc-K.woff2) format('woff2');
    unicode-range: U+0900-097F,U+1CD0-1CF6,U+1CF8-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FB
}

@font-face {
    font-family: Poppins;
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Poppins Light'),local('Poppins-Light'),url(/fonts/pxiByp8kv8JHgFVrLDz8Z1JlFc-K.woff2) format('woff2');
    unicode-range: U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF
}

@font-face {
    font-family: Poppins;
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: local('Poppins Light'),local('Poppins-Light'),url(/fonts/pxiByp8kv8JHgFVrLDz8Z1xlFQ.woff2) format('woff2');
    unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD
}

@font-face {
    font-family: Poppins;
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Poppins Regular'),local('Poppins-Regular'),url(/fonts/pxiEyp8kv8JHgFVrJJbecmNE.woff2) format('woff2');
    unicode-range: U+0900-097F,U+1CD0-1CF6,U+1CF8-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FB
}

@font-face {
    font-family: Poppins;
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Poppins Regular'),local('Poppins-Regular'),url(/fonts/pxiEyp8kv8JHgFVrJJnecmNE.woff2) format('woff2');
    unicode-range: U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF
}

@font-face {
    font-family: Poppins;
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Poppins Regular'),local('Poppins-Regular'),url(/fonts/pxiEyp8kv8JHgFVrJJfecg.woff2) format('woff2');
    unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD
}

@font-face {
    font-family: Poppins;
    font-style: normal;
    font-weight: 500;
    font-display: swap;
    src: local('Poppins Medium'),local('Poppins-Medium'),url(/fonts/pxiByp8kv8JHgFVrLGT9Z11lFc-K.woff2) format('woff2');
    unicode-range: U+0900-097F,U+1CD0-1CF6,U+1CF8-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FB
}

@font-face {
    font-family: Poppins;
    font-style: normal;
    font-weight: 500;
    font-display: swap;
    src: local('Poppins Medium'),local('Poppins-Medium'),url(/fonts/pxiByp8kv8JHgFVrLGT9Z1JlFc-K.woff2) format('woff2');
    unicode-range: U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF
}

@font-face {
    font-family: Poppins;
    font-style: normal;
    font-weight: 500;
    font-display: swap;
    src: local('Poppins Medium'),local('Poppins-Medium'),url(/fonts/pxiByp8kv8JHgFVrLGT9Z1xlFQ.woff2) format('woff2');
    unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD
}

@font-face {
    font-family: Poppins;
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: local('Poppins Bold'),local('Poppins-Bold'),url(/fonts/pxiByp8kv8JHgFVrLCz7Z11lFc-K.woff2) format('woff2');
    unicode-range: U+0900-097F,U+1CD0-1CF6,U+1CF8-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FB
}

@font-face {
    font-family: Poppins;
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: local('Poppins Bold'),local('Poppins-Bold'),url(/fonts/pxiByp8kv8JHgFVrLCz7Z1JlFc-K.woff2) format('woff2');
    unicode-range: U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF
}

@font-face {
    font-family: Poppins;
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: local('Poppins Bold'),local('Poppins-Bold'),url(/fonts/pxiByp8kv8JHgFVrLCz7Z1xlFQ.woff2) format('woff2');
    unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD
}

@font-face {
    font-family: 'PT Sans';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('PT Sans'),local('PTSans-Regular'),url(/fonts/jizaRExUiTo99u79D0-ExdGM.woff2) format('woff2');
    unicode-range: U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F
}

@font-face {
    font-family: 'PT Sans';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('PT Sans'),local('PTSans-Regular'),url(/fonts/jizaRExUiTo99u79D0aExdGM.woff2) format('woff2');
    unicode-range: U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116
}

@font-face {
    font-family: 'PT Sans';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('PT Sans'),local('PTSans-Regular'),url(/fonts/jizaRExUiTo99u79D0yExdGM.woff2) format('woff2');
    unicode-range: U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF
}

@font-face {
    font-family: 'PT Sans';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('PT Sans'),local('PTSans-Regular'),url(/fonts/jizaRExUiTo99u79D0KExQ.woff2) format('woff2');
    unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Roboto'),local('Roboto-Regular'),url(/fonts/KFOmCnqEu92Fr1Mu72xKOzY.woff2) format('woff2');
    unicode-range: U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Roboto'),local('Roboto-Regular'),url(/fonts/KFOmCnqEu92Fr1Mu5mxKOzY.woff2) format('woff2');
    unicode-range: U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Roboto'),local('Roboto-Regular'),url(/fonts/KFOmCnqEu92Fr1Mu7mxKOzY.woff2) format('woff2');
    unicode-range: U+1F00-1FFF
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Roboto'),local('Roboto-Regular'),url(/fonts/KFOmCnqEu92Fr1Mu4WxKOzY.woff2) format('woff2');
    unicode-range: U+0370-03FF
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Roboto'),local('Roboto-Regular'),url(/fonts/KFOmCnqEu92Fr1Mu7WxKOzY.woff2) format('woff2');
    unicode-range: U+0102-0103,U+0110-0111,U+1EA0-1EF9,U+20AB
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Roboto'),local('Roboto-Regular'),url(/fonts/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');
    unicode-range: U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF
}

@font-face {
    font-family: Roboto;
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Roboto'),local('Roboto-Regular'),url(/fonts/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
    unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD
}

@font-face {
    font-family: 'Squada One';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Squada One'),local('SquadaOne-Regular'),url(/fonts/BCasqZ8XsOrx4mcOk6Mtaac2WQ.woff2) format('woff2');
    unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD
}

.bg-black-1 {
    background: #383838 !important
}

.bg-black-2 {
    background: #333 !important
}

.bg-black-3 {
    background: #252525 !important
}

#OverviewContent p .bg-black-4 {
    background: #252525 !important
}

.bg-black-5 {
    background: #444 !important
}

.bg-black-6 {
    background: #1c1c1c !important
}

.bg-black-2 .form-control, .bootstrap-select .btn.dropdown-toggle, .filter .search, .sidebar-search .form-control {
    background: #2c2c2c;
    border: dashed 1px #7b5e0b !important
}

.bg-black-2 .form-control:focus {
    background: #2c2c2c !important
}

.bg-black-2 .label-template-checkbox::before {
    background: #2c2c2c
}

.bg-black-3 .form-control {
    background: #303030
}

.bg-black-3 .form-control:focus {
    background: #303030 !important
}

.bg-black-3 .label-template-checkbox::before {
    background: #303030
}

.open {
    display: block !important
}

.showcontent {
    display: block !important
}

.hidecontent {
    display: none !important
}

.showlaung {
    display: block !important
}

.hidelaung {
    display: none !important
}

i[class*=icon-] {
    -webkit-transform: translateY(2px);
    transform: translateY(2px)
}

a {
    -webkit-transition: all .4s;
    transition: all .4s
}

a, button, i, small, span, strong {
    display: inline-block
}

.table td, .table th {
    padding: .55rem
}

h1 span, h2 span, h3 span {
    margin-right: 15px
}

h1 .badge, h2 .badge, h3 .badge {
    font-size: 1rem;
    font-weight: 500
}

button {
    cursor: pointer
}

section {
    padding: 2rem 0
}

section header {
    margin-bottom: 30px
}

section header label {
    margin-top: 0;
    text-transform: uppercase;
    font-size: 12px
}

blockquote.blockquote {
    background: #fafafa;
    padding: 30px
}

blockquote.blockquote p {
    font-size: 1rem;
    color: #555;
    line-height: 1.7rem
}

blockquote.blockquote .author {
    font-size: 1.1rem;
    margin-top: 20px;
    font-weight: 700;
    color: #333
}

p {
    color: #444
}

#font-setting-buttons .btn {
    margin: 0 2px;
    padding: 0;
    font-weight: 500;
    vertical-align: baseline;
    background: 0 0;
    color: #fff
}

#font-setting-buttons .btn:first-child {
    font-size: 12px
}

#font-setting-buttons .btn:last-child {
    font-size: 16px
}

#font-setting-buttons .btn:focus {
    outline: 0;
    box-shadow: none
}

.frameHide {
    display: none;
    visibility: hidden;
    height: 0;
    width: 0
}

.call-pont {
    display: none
}

.property-single-features ol, .property-single-features ul {
    color: #444;
    font-size: 16px;
    font-weight: 400
}

#style-switch-button {
    z-index: 9999 !important
}

.text-bold {
    font-weight: 700
}

.text-small {
    font-size: .9rem
}

.listing-home p, .template-text {
    font-weight: 300;
    line-height: 1.8rem;
    color: #b0b0b0
}

.text-thin {
    font-weight: 400 !important
}

.btn {
    -webkit-transition: all .3s !important;
    transition: all .3s !important
}

.btn-outline-light:hover {
    color: #f3c84b !important
}

.no-radius {
    border-radius: 0 !important
}

.radius-small {
    border-radius: 5px !important
}

.badge {
    font-weight: 500;
    margin-right: 5px
}

.table-responsive {
    display: table
}

.badge {
    border-radius: 0;
    color: #fff !important
}

.full-width {
    width: 100% !important
}

.bootstrap-select.show > .dropdown-menu > .dropdown-menu {
    display: block;
    overflow-y: hidden !important
}

.bootstrap-select > .dropdown-menu > .dropdown-menu li.hidden {
    display: none
}

.bootstrap-select > .dropdown-menu > .dropdown-menu li a {
    display: block;
    width: 100%;
    padding: 3px 1.5rem;
    clear: both;
    font-weight: 400;
    color: #999;
    text-align: inherit;
    white-space: nowrap;
    background: 0 0;
    border: 0;
    font-weight: 300;
    outline: 0
}

.bootstrap-select > .dropdown-menu > .dropdown-menu li a:hover {
    background: #eee;
    color: #333 !important
}

.bootstrap-select .dropdown-menu {
    margin: 0 !important;
    -webkit-transform: none !important;
    transform: none !important
}

.bootstrap-select .dropdown-menu::after, .bootstrap-select .dropdown-menu::before {
    display: none !important
}

.bootstrap-select .dropdown-menu {
    border-radius: 0;
    border: 0;
    -webkit-box-shadow: 2px 2px 2px rgba(0,0,0,.1),-1px -1px 2px rgba(0,0,0,.1);
    box-shadow: 2px 2px 2px rgba(0,0,0,.1),-1px -1px 2px rgba(0,0,0,.1);
    -webkit-transition: -webkit-transform .3s;
    transition: -webkit-transform .3s;
    transition: transform .3s;
    transition: transform .3s,-webkit-transform .3s;
    margin-top: 15px;
    -webkit-transform: translateY(30px);
    transform: translateY(30px);
    color: #999 !important;
    font-size: 1em;
    min-width: 200px
}

.bootstrap-select .dropdown-menu.open {
    max-height: 230px !important;
    overflow-y: scroll !important
}

.bootstrap-select .dropdown-menu.open::-webkit-scrollbar {
    width: 5px
}

.bootstrap-select .dropdown-menu.open::-webkit-scrollbar-thumb {
    background-color: #a9a9a9
}

.bootstrap-select .dropdown-menu::after {
    content: '';
    display: block;
    width: 0;
    height: 0;
    border-left: 7px solid transparent;
    border-right: 7px solid transparent;
    border-bottom: 7px solid #fff;
    position: absolute;
    top: -5px;
    left: 30px
}

.bootstrap-select .dropdown-menu::before {
    content: '';
    display: block;
    width: 0;
    height: 0;
    border-left: 7px solid transparent;
    border-right: 7px solid transparent;
    border-bottom: 8px solid #eee;
    position: absolute;
    top: -8px;
    left: 30px
}

.bootstrap-select .dropdown-menu a {
    color: #999
}

.bootstrap-select .dropdown-menu a:hover {
    background: #f3c84b;
    color: #fff
}

.bootstrap-select .dropdown-menu a {
    padding: 10px 20px
}

.bootstrap-select .dropdown-toggle {
    border: none !important;
    background: #333;
    color: #ccc !important;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 1.5rem
}

.bootstrap-select .dropdown-toggle span {
    color: #999;
    font-weight: 300;
    font-size: .9rem;
    text-transform: none
}

.bootstrap-select .dropdown-toggle span.bs-caret {
    margin-right: -10px
}

.bootstrap-select .dropdown-toggle:focus {
    outline: 0 !important;
    outline-offset: 0 !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important
}

.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
    width: 100%
}

.no-anchor-style {
    text-decoration: none !important;
    color: inherit !important
}

.bg-gray {
    background: #f5f5f5 !important
}

.pagination {
    margin-top: 30px
}

.pagination a.page-link {
    color: #999;
    border: none;
    background: #383838;
    border-radius: 0 !important;
    margin: 0 3px
}

.pagination a.page-link.active {
    color: #fff;
    background: #f3c84b
}

.pagination a.page-link:hover {
    background: #fff;
    color: #333
}

.nav-pills .nav-link {
    border-radius: 0;
    background: #f5f5f5;
    padding: 15px;
    text-transform: uppercase;
    font-weight: 400;
    color: #555
}

.nav-pills .nav-link.active {
    background: #f3c84b
}

.dropdown-menu {
    border-radius: 0;
    border: 0;
    font-size: 1rem;
    min-width: 200px;
    -webkit-box-shadow: 0 0 10px rgba(0,0,0,.2);
    box-shadow: 0 0 10px rgba(0,0,0,.2);
    background: #333;
    color: #ccc
}

.dropdown-menu a {
    color: #ccc;
    padding: 10px 15px !important;
    font-size: .9rem
}

.dropdown-menu a:hover {
    background: #f3c84b;
    color: #fff
}

.dropdown-menu a:active {
    background-color: #fff
}

.dropdown-submenu {
    position: relative
}

.dropdown-submenu > .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -2px;
    font-size: 1rem
}

.dropdown-toggle {
    background: 0 0;
    outline: 0;
    border-radius: 0
}

.dropdown-toggle span {
    color: #555
}

.dropdown-toggle::after {
    border: none !important;
    content: '\f107';
    vertical-align: baseline;
    font-family: FontAwesome;
    margin-left: 0
}

.megamenu {
    width: 100%;
    padding: 40px 30px;
    margin-top: 0;
    z-index: 9999 !important
}

.megamenu strong {
    margin-bottom: 10px;
    display: block;
    color: #fff;
    font-weight: 500;
    display: block
}

.megamenu strong::after {
    content: '';
    width: 30px;
    height: 2px;
    display: block;
    background: #f3c84b
}

.megamenu ul {
    padding: 0;
    margin: 0
}

.megamenu ul a {
    padding: 5px 0 !important;
    text-decoration: none;
    color: #bdbdbd;
    font-size: .9em !important
}

.megamenu ul a:hover {
    background: 0 0;
    color: #f3c84b !important
}

.menu-large {
    position: static !important
}

.has-overlay-dark {
    position: relative;
    z-index: 1
}

.has-overlay-dark::before {
    content: '';
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    background: rgba(17,17,17,.42);
    z-index: -1
}

.has-line::after, .quick_enq .has-line::after {
    content: '';
    width: 50px;
    height: 3px;
    display: block;
    margin-top: 5px;
    background: #f3c84b
}

.quick_enq .has-line::after {
    margin: 10px auto
}

.btn-gradient {
    background-color: #f3c84b;
    background-image: -webkit-gradient(linear,left top,right top,from(#f3c84b),to(#37cfdc));
    background-image: linear-gradient(to right,#f3c84b,#37cfdc);
    border-color: transparent !important;
    color: #fff;
    border-style: none !important
}

.btn-gradient:focus, .btn-gradient:hover {
    color: #fff;
    opacity: .9
}

.new-summery {
    background: #f3f3f3;
    border-radius: 5px;
    overflow: hidden
}

.new-summery img {
    float: left;
    margin-right: 7px;
    margin-left: 15px
}

.new-summery .sec {
    float: left
}

.new-summery label {
    margin: 0;
    padding: 0;
    color: #909090;
    font-size: 13px
}

.new-summery p {
    font-size: 14px;
    font-weight: 600 !important;
    text-transform: uppercase;
    margin-bottom: 0;
    line-height: 1
}

.stickys {
    position: sticky;
    top: 15px
}

.scrollUp {
    -webkit-transform: translateY(-110%);
    transform: translateY(-110%)
}

.swiper-pagination-bullet-active {
    background: #f3c84b
}

.swiper-pagination-bullet, .swiper-pagination-bullet-active {
    background: #ddd;
    width: 12px;
    height: 12px
}

.swiper-pagination-bullet-active {
    background: #f3c84b
}

.form-group {
    position: relative;
    margin-bottom: 25px
}

.form-control {
    border-radius: 0;
    padding: .245rem .75rem;
    font-weight: 300
}

.form-control::-moz-placeholder {
    font-size: .9rem;
    font-weight: 300;
    font-family: Poppins,sans-serif;
    color: #999 !important
}

.form-control::-webkit-input-placeholder {
    font-size: .9rem;
    font-weight: 300;
    font-family: Poppins,sans-serif;
    color: #999 !important
}

.form-control:-ms-input-placeholder {
    font-size: .9rem;
    font-weight: 300;
    font-family: Poppins,sans-serif;
    color: #999 !important
}

.form-group .sperr {
    position: absolute;
    top: 46px;
    left: 17px;
    color: #efc54b;
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 1px
}

label {
    color: #ccc;
    padding-left: 15px;
    margin-top: 15px
}

.label-template-checkbox {
    color: #999;
    font-family: Poppins,sans-serif;
    font-weight: 300;
    position: relative;
    padding-left: 25px;
    margin-right: 20px;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.label-template-checkbox::before {
    content: '';
    width: 16px;
    height: 16px;
    background: #333;
    display: inline-block;
    position: absolute;
    top: 50%;
    left: 0;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%)
}

.label-template-checkbox::after {
    content: '\f00c';
    width: 16px;
    height: 16px;
    background: #f3c84b;
    text-align: center;
    line-height: 16px;
    display: inline-block;
    position: absolute;
    top: 50%;
    left: 0;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    opacity: 0;
    -webkit-transition: all .3s;
    transition: all .3s;
    color: #fff;
    font-family: FontAwesome;
    font-size: .65rem
}

.label-template-checkbox input {
    display: none
}

.label-template-checkbox.active::after {
    opacity: 1
}

.placeholder-right::-moz-placeholder {
    text-align: right
}

.placeholder-right::-webkit-input-placeholder {
    text-align: right
}

.placeholder-right:-ms-input-placeholder {
    text-align: right
}

textarea {
    min-height: 150px
}

.radius-sm {
    border-radius: 10px !important
}

.upload-btn-wrapper {
    position: relative;
    overflow: hidden;
    color: #777;
    text-align: center;
    padding: 30px;
    border: 2px dashed #444;
    cursor: pointer;
    display: block;
    font-size: .85rem
}

.upload-btn-wrapper i {
    font-size: 1.5rem;
    margin-bottom: 10px
}

.upload-btn-wrapper input[type=file] {
    font-size: 100px;
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
    cursor: pointer
}

.breadcrumb {
    background: 0 0;
    padding: 0;
    font-size: .8rem;
    position: relative;
    padding-left: 20px;
    margin-bottom: 0
}

.breadcrumb::before {
    content: '\f015';
    display: block;
    position: absolute;
    top: 50%;
    left: 0;
    color: #f3c84b;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    font-family: FontAwesome
}

.breadcrumb a {
    text-decoration: none;
    color: #ececec
}

.breadcrumb a:focus, .breadcrumb a:hover {
    color: #f3c84b;
    text-decoration: none
}

hr.line {
    border-color: #333
}

.top-bar {
    background: #0e0e0e;
    color: #fff;
    padding: 7px 0;
    border-bottom: solid 1px #4e4e4e
}

.top-bar a {
    color: inherit
}

.top-bar a:focus, .top-bar a:hover {
    color: #fff;
    text-decoration: none
}

.top-bar ul {
    margin-bottom: 0
}

.top-bar .menu-left {
    color: #cbcbcb;
    font-size: .8rem;
    font-weight: 300;
    line-height: 2.5;
}

.top-bar .menu-right {
    color: #fff;
    font-size: .75rem
}

.top-bar .menu-right li {
    margin: 0
}

.top-bar .menu-right a {
    text-transform: uppercase;
    padding: 0 10px;
    border-right: 0;
    font-weight: 500
}

.top-bar .menu-right li:last-child a {
    border-right: 0
}

.top-bar .menu-right a:focus, .top-bar .menu-right a:hover {
    color: #f3c84b
}

.top-bar .menu-right i {
    margin-right: 5px
}

.top-bar .menu-right .laung {
    text-align: center
}

.top-bar .menu-right .laung img {
    width: 15px
}

.top-bar .menu-right .laung span {
    display: block;
    font-size: 10px;
    color: #fff;
    text-transform: capitalize
}

.search-area {
    -webkit-transform: translateX(-120%);
    transform: translateX(-120%);
    -webkit-transition: all .4s;
    transition: all .4s;
    opacity: 0;
    width: 100vw;
    height: 100vh;
    position: fixed;
    top: 0;
    right: 0;
    background: rgba(42,42,42,.98);
    z-index: 9999
}

.search-area.is-visible {
    -webkit-transform: none;
    transform: none;
    opacity: 1
}

.search-inner {
    width: 100%;
    height: 100%
}

.search-inner form {
    padding: 20px;
    max-width: 700px;
    width: 100%;
    padding: 40px
}

.search-inner .form-group {
    position: relative
}

.search-inner input {
    background: 0 0;
    border: none;
    outline: 0;
    color: #fff;
    width: 100%;
    padding: 5px 0;
    border-bottom: 1px solid #999;
    font-size: 1.2rem;
    font-weight: 300
}

.search-inner input:focus {
    border-color: #f3c84b
}

.search-inner input::-moz-placeholder {
    font-family: Poppins,sans-serif;
    font-weight: 300
}

.search-inner input::-webkit-input-placeholder {
    font-family: Poppins,sans-serif;
    font-weight: 300
}

.search-inner input:-ms-input-placeholder {
    font-family: Poppins,sans-serif;
    font-weight: 300
}

.search-inner .submit {
    background: 0 0;
    color: #999;
    border: none;
    text-transform: uppercase;
    font-family: Poppins,sans-serif;
    position: absolute;
    right: 0;
    bottom: 0;
    font-size: 1.2rem;
    -webkit-transition: all .3s;
    transition: all .3s
}

.search-inner .submit:hover {
    color: #f3c84b
}

.search-inner .close-btn {
    position: absolute;
    top: 20px;
    right: 40px;
    color: #fff;
    text-transform: uppercase;
    font-weight: 500;
    font-size: .8rem;
    letter-spacing: .08rem;
    color: #ccc;
    cursor: pointer
}

.search-inner .close-btn i {
    margin-left: 5px
}

.img-proj {
    height: 80vh;
    object-fit: cover;
    width: 100%
}

.list-inline-item:not(:last-child) {
    margin-right: .7rem
}

nav.navbar {
    padding-top: 0;
    padding-bottom: 0;
    background: #ffffff8f;
    color: #fff;
    -webkit-box-shadow: 0 2px 6px 0 rgba(0,0,0,.14);
    box-shadow: 0 2px 6px 0 rgba(0,0,0,.14);
    z-index: 11;
    -webkit-transition: all .4s;
    transition: all .4s;
    height: 65px
}

nav.navbar.sticky {
    background: #ffffff8f
}

nav.navbar .nav-item.active {
    color: #f3c84b
}

nav.navbar .nav-link {
    color: inherit;
    text-transform: uppercase;
    font-size: .8rem;
    font-weight: 600;
    letter-spacing: 1px;
    margin-right: .7rem;
    color: #000;
    padding: 7px 15px;
}

nav.navbar .ru .nav-link, nav.navbar .es .nav-link {
    letter-spacing: 0px;
    margin-right: 0;
}

nav.navbar .nav-link:hover {
    color: #f3c84b
}

nav.navbar .dropdown-menu {
    margin-top: 30px
}

nav.navbar .dropdown-submenu a, nav.navbar a.dropdown-item {
    font-weight: 400;
    text-transform: none
}

nav.navbar .dropdown-submenu a:hover, nav.navbar a.dropdown-item:hover {
    color: #fff
}

nav.navbar .megamenu {
    margin-top: 0
}

nav.navbar .navbar-brand {
    max-width: 250px;
    min-height: 65px;
}

nav.navbar .navbar-toggler {
    outline: 0
}

nav.navbar .navbar-toggler span {
    width: 25px;
    margin: 5px;
    display: block;
    height: 2px;
    background: #000;
    -webkit-transition: all .2s;
    transition: all .2s
}

nav.navbar .navbar-toggler.active span:first-of-type {
    -webkit-transform: rotate(45deg) translate(10px);
    transform: rotate(45deg) translate(10px)
}

nav.navbar .navbar-toggler.active span:last-of-type {
    -webkit-transform: rotate(-45deg) translate(10px);
    transform: rotate(-45deg) translate(10px)
}

nav.navbar .navbar-toggler.active span:nth-of-type(2) {
    opacity: 0
}

nav.navbar img.logo {
    max-height: 55px;
    max-width: 100%;
    width: auto;
}

nav.navbar a.laung {
    width: 35px;
    display: inline-block;
    text-align: center;
    line-height: 1;
    margin-top: -3px;
    position: initial;
    height: 35px;
    margin-right: 0
}

nav.navbar a.laung img {
    width: 18px
}

nav.navbar a.laung span {
    display: inline-block;
    font-size: 9px;
    color: #000;
    letter-spacing: .5px
}

.vodiapicker {
    display: none;
}

#a {
    padding-left: 0px;
    margin-bottom: 0;
}

#a img, .btn-select img {
    width: 18px;
}

#a li {
    list-style: none;
    padding-top: 2px;
    padding-bottom: 2px;
    line-height: 1;
    color: #000;
    border-bottom: solid 1px #dfdfdf;
}

#a li:hover {
    background-color: #F4F3F3;
}

#a li img {
    margin: 5px;
    margin-right: 0;
}

#a li span, .btn-select li span {
    margin-left: 5px;
    font-size: 11px;
    margin-right: 5px;
}

.b {
    display: none;
    width: 100%;
    max-width: 100px;
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 5px;
    background: #fff;
    position: absolute;
}

.open {
    display: block !important;
}

.btn-select {
    width: 100%;
    max-width: 100px;
    height: 30px;
    border-radius: 3px;
    background-color: #fff;
    border: 1px solid #ccc;
}

.btn-select li {
    list-style: none;
    float: left;
    padding-bottom: 0px;
    font-size: 12px;
}

.btn-select:hover li {
    margin-left: 0px;
}

.btn-select:hover {
    background-color: #F4F3F3;
    border: 1px solid transparent;
    box-shadow: inset 0 0px 0px 1px #ccc;
}

.btn-select:focus {
    outline: none;
}

.lang-select {
    margin-left: 40px;
    position: relative;
}

@media(max-width: 375px) {
    .lang-select {
        margin-left: 10px;
    }
}

@media(min-width: 992px) {
    .m-home {
        display:none;
        float: left;
    }
}

@media(max-width: 992px) {
    .m-home {
        float: left;
    }
}

.blink {
    animation: blinkingText .8s infinite;
    font-weight: 700 !important
}

@keyframes blinkingText {
    0% {
        color: red
    }

    49% {
        color: #000
    }

    50% {
        color: transparent
    }

    99% {
        color: red
    }

    100% {
        color: red
    }
}

.modal {
    z-index: 9999
}

.qk-con .row.con {
    margin-left: -5px;
    margin-right: -5px
}

.qk-con .row.con [class*=col-] {
    padding-left: 5px;
    padding-right: 5px
}

.qk-con {
    max-width: 650px;
    overflow: hidden;
    border-radius: 7px
}

.qk-con.down-bro {
    max-width: max-content
}

.qk-con .con-area {
    background: #a5842d url(../images/icon/eqn-bg.png);
    background-repeat: no-repeat;
    background-size: 100%;
    background-position: 0 235px;
    padding: 4rem 1rem 2rem 2.5rem
}

.con-area h5 {
    color: #fff;
    font-size: 2rem;
    line-height: 1;
    margin-bottom: 1.5rem
}

.con-area ul {
    list-style: none;
    margin: 0;
    padding: 0
}

.con-area ul li {
    font-size: 14px;
    line-height: 1.5;
    margin-bottom: 7px;
    position: relative;
    padding-left: 20px;
    color: #fff
}

.con-area ul li:before {
    content: '';
    font-family: FontAwesome;
    display: inline-block;
    content: \f178;
    padding-right: 10px;
    margin-bottom: -5px;
    position: absolute;
    left: 0
}

.qk-con .form-control {
    border-radius: 40px;
    font-size: 13px;
    border: solid 1px #c2d4dc !important;
    background: #ffffffd1;
    color: #000 !important;
    font-weight: 300;
    padding: 11px 17px !important
}

.qk-con.qk-reply .form-control {
    border-radius: 0
}

.qk-con.qk-reply textarea.form-control {
    min-height: 100px
}

.qk-con.qk-reply .modal-header {
    height: 65px;
    padding-top: 20px;
    box-sizing: border-box;
    background: #f4f4f4
}

.qk-con select.form-control {
    height: 43px !important;
    color: #999 !important;
    font-size: 14px
}

.qk-con textarea.form-control {
    min-height: 55px
}

.qk-con .form-control:focus {
    color: #000;
    background: #fff !important;
    border: solid 1px #999 !important;
    outline: 0;
    -webkit-box-shadow: none
}

.qk-con .form-control::-webkit-input-placeholder {
    color: #999
}

.qk-con .form-control:-ms-input-placeholder {
    color: #999
}

.qk-con .form-control::placeholder {
    color: #999
}

.form-control[readonly], .qk-con .form-control:disabled {
    background-color: #999
}

.qk-con .close {
    z-index: 2
}

.loader {
    background: #ffffffe6;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 11111;
    text-align: center;
    padding-top: 15%
}

.loader span {
    display: block;
    margin-top: -55px;
    color: #848282;
    letter-spacing: 1px
}

.send {
    background: #ffffffe6;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 11111;
    text-align: center;
    padding-top: 15%
}

.send span {
    display: block;
    margin-top: 15px;
    color: #77b43f;
    letter-spacing: 1px;
    font-size: 15px;
    font-weight: 500
}

.not-send {
    background: #ffffffe6;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    text-align: center;
    padding-top: 15%
}

.not-send span {
    display: block;
    margin-top: 15px;
    color: #999;
    letter-spacing: 1px;
    font-size: 15px;
    font-weight: 500
}

.qk-con.qk-reply .loader, .qk-con.qk-reply .not-send, .qk-con.qk-reply .send {
    padding-top: 6%
}

.main-slider.h-auto {
    margin-top: -65px;
    min-height: initial
}

.main-slider {
    margin: 0;
    padding: 0;
    margin-top: -65px;
    min-height: calc(100vh - 65px)
}

.main-slider .img-banner {
    height: 95vh;
    object-fit: cover;
    width: 100%
}

.main-slider .inner-banner {
    height: 45vh;
    position: relative
}

.main-slider .inner-banner:before {
    content: '';
    background-color: rgba(0,0,0,.38);
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
    height: 100%;
    z-index: 1
}

.main-slider .inner-banner .img-bnr {
    width: 100%;
    height: 100%;
    overflow: hidden;
    object-fit: cover
}

.main-slider.offer-bnr {
    min-height: calc(70vh - 75px);
    background: -webkit-gradient(linear,right top,left top,from(#666),to(#000));
    background: linear-gradient(270deg,#666,#000);
    padding-top: 22vh
}

.main-slider.offer-bnr h2 {
    background: -webkit-linear-gradient(hsla(0,0%,100%,.37),rgba(50,50,50,0));
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
    font-family: Didot-Bold;
    font-size: 64px;
    font-weight: 700;
    margin: -20px 0 0;
    line-height: 1.54;
    display: initial
}

.main-slider.offer-bnr p {
    color: #fff;
    font-family: Didot-Bold;
    font-size: 28px;
    font-weight: 700;
    position: relative;
    top: -31px
}

.carousel:after, .inner-banner:after {
    content: '';
    display: block;
    background: #000000a6;
    width: 100%;
    height: 65px;
    bottom: 0;
    z-index: 1;
    position: absolute
}

.carousel-item:after {
    content: '';
    background-color: rgba(0,0,0,.38);
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
    height: 100%;
    z-index: 7
}

.carousel-caption {
    top: 35%;
    z-index: 999999
}

.carousel-caption h5 {
    font-size: 2.1rem;
    margin-bottom: 15px;
    letter-spacing: 2px
}

.carousel-caption p {
    color: #dcdcdc;
    text-transform: uppercase
}

.off-banner img {
    object-fit: cover;
    width: 100%
}

.off-banner .carousel-item:after, .off-banner .carousel:after {
    background-color: none !important;
    display: none
}

.offer-img {
    background: url(../images/sp-offers.png) no-repeat;
    position: absolute;
    right: -9px;
    width: 178px;
    height: 195px;
    z-index: 1;
    top: -10px;
    background-size: contain
}

.offer-img a {
    display: block;
    height: 100%
}

.video-banner {
    width: 100%;
    height: 95vh;
    overflow: hidden;
    position: relative
}

.video-banner:after {
    content: '';
    display: block;
    background: #000000a6;
    width: 100%;
    height: 65px;
    bottom: 0;
    z-index: 1;
    position: absolute
}

.video-banner video {
    object-fit: cover
}

.vid-show .carousel-inner {
    z-index: 9;
    top: 35%
}

.vid-show .carousel-control-next, .vid-show .carousel-control-prev, .vid-show img {
    display: none !important
}

.carousel-control-next-icon {
    background-image: url(../images/next.png);
    width: 40px;
    height: 40px
}

.carousel-control-prev-icon {
    background-image: url(../images/back.png);
    width: 40px;
    height: 40px
}

.video {
    width: 100%;
    border: 1px solid #000
}

.wrapper {
    display: table;
    width: auto;
    position: relative;
    width: 50%
}

.playpause {
    background-image: url(../images/play.png);
    background-repeat: no-repeat;
    width: 15%;
    height: 15%;
    position: absolute;
    z-index: 9999;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    margin: auto;
    background-size: contain;
    background-position: center
}

#Priceinfo .modal-content {
    height: 350px;
    overflow-y: scroll
}

#Priceinfo .modal-content button {
    position: absolute;
    top: 5px;
    right: 5px;
    box-shadow: 1px 2px 1px #616161;
    border-radius: 50px;
    width: 23px;
    height: 23px;
    border: solid 1px #dadada;
    background: #fff
}

#Priceinfo .modal-content button:focus {
    outline: 0
}

#Priceinfo .modal-content table {
    margin-bottom: 0
}

#Priceinfo .modal-content table span {
    margin-left: 7px;
    font-weight: 600
}

#Priceinfo .modal-content table img {
    width: 13px;
    margin-bottom: 4px;
    margin-right: 5px
}

.pro-summary {
    margin-top: -115px;
    position: relative;
    z-index: 10
}

.pro-summary figure {
    box-shadow: 4px 3px 14px #a0a0a0;
    width: 100%;
    height: auto;
    position: relative;
    background: #fff;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 0
}

.pro-summary figure img {
    position: relative;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: auto;
    padding: 10px 0
}

.pro-summary .row {
    margin-left: -10px;
    margin-right: -10px
}

.pro-summary .row [class*=col-] {
    padding-left: 10px;
    padding-right: 10px
}

.pro-summary header {
    margin-top: 0
}

.pro-summary header h1 {
    font-size: 20px;
    margin: 0;
    color: #fff;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    margin-bottom: 15px;
    margin-top: 8px
}

.pro-summary header .loc {
    color: #c5c5c5;
    font-weight: 400;
    font-size: 16px;
    margin-top: 5px;
    letter-spacing: 1px;
    display: block
}

.pro-summary .price h3 {
    color: #f3c84b;
    font-size: 18px;
    margin: 0
}

.pro-summary .price h3 i {
    cursor: pointer
}

.pro-summary .price label {
    margin: 0;
    color: #fff;
    letter-spacing: 1px;
    font-size: 12px;
    font-weight: 400;
    padding-left: 0
}

.pro-summary .pro-info {
    margin-top: 0
}

.pro-summary .pro-info .table {
    border: 0;
    margin-bottom: 0
}

.pro-summary .pro-info .table td {
    border: 0
}

.h-auto .pro-summary .pro-info {
    margin-top: 14px;
    margin-bottom: 15px
}

.pro-summary .breadcrumb a {
    text-decoration: none;
    color: #191919;
    font-weight: 600
}

.pro-summary .breadcrumb::before {
    color: #949494
}

.pro-info .pro-info-warp img {
    float: left;
    margin-right: 10px;
    margin-top: 6px
}

.pro-info .pro-info-warp span {
    display: inline-block;
    color: #ccc;
    font-size: 12px;
    letter-spacing: 1px;
    line-height: 1
}

.pro-info .pro-info-warp p {
    font-size: 13px;
    margin: 0;
    padding: 0;
    font-weight: 500;
    color: #fff;
    letter-spacing: 1px
}

.pro-info .pro-info-warp p i {
    cursor: pointer
}

.light-video {
    width: 200px;
    position: relative;
    float: right;
    margin-bottom: 15px;
    margin-left: 15px
}

.light-video a {
    border: 3px solid #04070a;
    border-radius: 3px
}

.light-video a > img {
    -webkit-transition: -webkit-transform .15s ease 0;
    -moz-transition: -moz-transform .15s ease 0;
    -o-transition: -o-transform .15s ease 0;
    transition: transform .15s ease 0;
    -webkit-transform: scale3d(1,1,1);
    transform: scale3d(1,1,1);
    width: 100%
}

.light-video a .demo-gallery-poster {
    background-color: rgba(0,0,0,.1);
    bottom: 0;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    text-align: center;
    -webkit-transition: background-color .15s ease 0;
    -o-transition: background-color .15s ease 0;
    transition: background-color .15s ease 0
}

.light-video .demo-gallery-poster img {
    height: 48px;
    margin: 47px auto;
    opacity: .8;
    width: 48px
}

.hero-section {
    padding: 0;
    color: #fff
}

.hero-section .hero-content {
    min-height: calc(100vh - 200px);
    background-size: cover !important;
    background-position: center center !important;
    height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.hero-section .swiper-pagination-bullet, .hero-section .swiper-pagination-bullet-active {
    background: 0 0 !important;
    font-weight: 700;
    margin: 0 15px;
    width: auto;
    height: auto;
    font-size: 1.4rem
}

.hero-section .swiper-pagination-bullet-active {
    font-size: 3rem
}

.hero-section .swiper-pagination {
    max-width: 1140px;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    left: 50%;
    text-align: right;
    padding: 20px
}

.hero-section p {
    color: #ccc
}

.hero-page {
    padding: 50px 0;
    background: url(../images/banner1.jpg);
    background-size: cover;
    position: relative
}

.hero-page::after {
    content: '';
    display: block;
    background: #2f2303b3;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1
}

.hero-page h1, .hero-page nav {
    position: relative;
    z-index: 9
}

.search-property {
    padding: 25px 0
}

.search-property .form-group {
    margin-bottom: 20px
}

.property {
    border: solid 1px #e8e3e3
}

.property:hover .overlay {
    opacity: 1
}

.property:hover .overlay a {
    -webkit-transform: none;
    transform: none;
    -webkit-transition-delay: .5s;
    transition-delay: .5s
}

.property:hover {
    border-color: #f3c84b
}

.property .image {
    max-height: 190px;
    overflow: hidden;
    position: relative
}

.property .overlay {
    width: 100%;
    height: 100%;
    background: rgba(34,34,34,.96);
    opacity: 0;
    -webkit-transition: all .4s;
    transition: all .4s;
    position: absolute;
    top: 0;
    right: 0
}

.property .overlay a {
    -webkit-transform: translateY(20px);
    transform: translateY(20px)
}

.property .info {
    padding: 10px;
    background: #ffffff8c
}

.property .info h3 {
    font-size: 18px
}

.property .info .loc {
    font-size: 12px;
    color: #9c9c9c;
    margin-bottom: 5px
}

.property .tags li {
    margin: 0;
    line-height: 10px
}

.property .tags li:first-child {
    border-right: solid 1px #ccc;
    padding-right: 5px;
    margin-right: 5px
}

.property .tags a {
    font-size: .8rem;
    color: #999
}

.property .tags a:hover {
    text-decoration: none;
    color: #f3c84b
}

.property .price {
    font-size: 1.1rem
}

.property .price strong {
    font-weight: 400
}

.property .price small {
    font-size: .8rem;
    color: #8c8c8c
}

.property .statistics {
    background: #383838;
    padding: 20px 30px;
    color: #999
}

.property .statistics .item {
    width: 33.333%
}

.property .statistics span {
    font-size: .9rem
}

.property .property-footer {
    padding: 30px
}

.property .property-footer .avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 10px
}

.property .property-footer .text {
    color: #999
}

.property .property-footer .text strong {
    line-height: .8rem;
    font-weight: 500
}

.property .property-footer .text span {
    font-size: .8rem
}

.property .property-footer a.favourite {
    font-size: 1.5rem;
    color: #202020 !important
}

.property .property-footer a.favourite:focus, .property .property-footer a.favourite:hover {
    color: #f3c84b !important
}

.apartments .swiper-slide {
    padding: 5px
}

.featured-properties .image {
    max-height: 450px;
    overflow: hidden;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center
}

.featured-properties .text {
    padding: 100px 30px;
    -webkit-box-shadow: 0 0 27px 0 rgba(0,0,0,.12);
    box-shadow: 0 0 27px 0 rgba(0,0,0,.12);
    background: #333
}

.featured-properties .dev_logo {
    position: absolute;
    right: 40px;
    width: 100px;
    height: 100px;
    overflow: hidden;
    top: 25px
}

.featured-properties .text strong {
    color: #f3c84b;
    text-transform: uppercase;
    font-size: .9rem;
    margin-bottom: 10px;
    letter-spacing: .08rem
}

.featured-properties .text p {
    color: #8f8f8f;
    line-height: 1.8rem;
    margin-top: 30px
}

.featured-properties .text p.loc {
    color: #dadada;
    line-height: 1.8rem;
    margin-top: 10px;
    font-size: 14px
}

.featured-properties .text p.loc .fa {
    min-width: 1rem;
    color: #f3c84b;
    font-size: 1rem
}

.featured-properties .text .price {
    color: #f3c84b
}

.featured-properties .text .price strong {
    font-size: 1.2rem;
    color: inherit;
    margin-right: 5px;
    font-weight: 400
}

.pro-type .row {
    margin-left: -7px;
    margin-right: -7px
}

.pro-type [class*=col-] {
    padding-left: 7px;
    padding-right: 7px
}

.listing-home {
    position: relative;
    height: 270px;
    overflow: hidden;
    margin-bottom: 15px;
    border-radius: 3px
}

.listing-home:hover img {
    -webkit-transform: scale(1.15);
    transform: scale(1.15)
}

.listing-home img {
    -webkit-transition: all .7s;
    transition: all .7s;
    width: 100%
}

.listing-home h3 {
    margin-bottom: 0;
    font-size: 1rem;
    font-weight: 500
}

.listing-home p {
    margin-bottom: 0
}

.listing-home .text {
    padding: 15px;
    height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
    background-image: -webkit-linear-gradient(94deg,#121212 0,rgba(18,18,18,0) 50%,rgba(18,18,18,0) 100%)
}

.listing-home .ribbon {
    padding: 10px;
    background: #f3c84b;
    color: #fff;
    position: absolute;
    top: 0;
    right: 0
}

.listing-home .ribbon strong {
    font-size: 2rem;
    margin-top: 6px;
    line-height: 1rem
}

.communities {
    position: relative;
    overflow: hidden
}

.communities .over_head {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 7px;
    height: 75px;
    background-color: rgba(0,0,0,.5);
    text-align: center;
    padding: 30px 10px;
    -webkit-transition: all .7s;
    transition: all .7s
}

.communities:hover .over_head {
    padding: 22px
}

.communities .over_head h3 {
    margin-bottom: 30px;
    -webkit-transition: all .7s;
    transition: all .7s;
    font-size: 18px
}

.communities:hover .over_head h3 {
    margin-bottom: 5px
}

.communities .over_head p {
    color: #fff;
    font-size: 13px
}

.new-properties .owl-carousel .owl-item {
    opacity: .2
}

.new-properties .owl-carousel .owl-item.active {
    opacity: 1
}

.new-properties .container-fluid {
    padding-right: inherit;
    padding-left: inherit
}

.similar-properties {
    background: url(../images/pattern.png) #fafafa;
    padding: 4rem 0
}

.similar-properties .arrow-left {
    position: absolute;
    height: 32px;
    z-index: 2;
    width: 32px;
    border-radius: 50%;
    top: -47px;
    box-shadow: 0 1px 5px rgba(0,0,0,.7);
    outline: 0;
    background: url(../images/left-arrow.png) no-repeat 10px rgba(255,255,255,.71);
    right: 40px;
    padding: 0 3px 0 0;
    background-size: 15px
}

.similar-properties .arrow-right {
    position: absolute;
    height: 32px;
    z-index: 2;
    width: 32px;
    border-radius: 50%;
    top: -47px;
    box-shadow: 0 1px 5px rgba(0,0,0,.7);
    outline: 0;
    background: url(../images/right-arrow.png) no-repeat 10px rgba(255,255,255,.71);
    right: 0;
    padding: 0 3px 0 0;
    background-size: 15px
}

.about .image {
    height: 450px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-shadow: 0 0 27px 0 rgba(0,0,0,.12);
    box-shadow: 0 0 27px 0 rgba(0,0,0,.12)
}

.about .image img {
    height: 100%
}

.about .text {
    padding: 30px;
    -webkit-box-shadow: 0 0 27px 0 rgba(0,0,0,.12);
    box-shadow: 0 0 27px 0 rgba(0,0,0,.12);
    background: #333;
    height: 100%
}

.about .text strong {
    color: #6a6a6a;
    text-transform: uppercase;
    font-size: .8rem;
    margin-bottom: 20px;
    letter-spacing: .08rem
}

.about .text p {
    color: #8f8f8f;
    line-height: 1.8rem;
    margin-top: 15px
}

.about .text .price {
    color: #f3c84b
}

.about .text .price strong {
    font-size: 1.4rem;
    color: inherit;
    margin-right: 5px
}

.agent {
    -webkit-box-shadow: 0 0 16px 0 rgba(0,0,0,.14);
    box-shadow: 0 0 16px 0 rgba(0,0,0,.14);
    background: #333;
    position: relative;
    z-index: 1
}

.agent .image {
    height: 250px;
    overflow: hidden;
    position: relative
}

.agent::before {
    content: '';
    width: calc(100% + 8px);
    height: calc(100% + 8px);
    position: absolute;
    top: -4px;
    right: -4px;
    background: 0 0;
    display: block;
    border: 4px solid transparent;
    z-index: -1;
    -webkit-transition: all .4s;
    transition: all .4s
}

.agent:hover::before {
    border-color: #f3c84b
}

.agent:hover .contact-info {
    opacity: 1;
    -webkit-transform: none;
    transform: none
}

.agent .info {
    padding: 30px
}

.agent .info p {
    color: #999;
    font-weight: 300;
    font-size: .9rem
}

.agent .contact-info {
    background: rgba(150,129,69,.84);
    padding: 20px 30px;
    position: absolute;
    right: 0;
    bottom: 0;
    width: 100%;
    -webkit-transform: translateY(100%);
    transform: translateY(100%);
    opacity: 0;
    -webkit-transition: all .5s;
    transition: all .5s
}

.agent .contact-info li {
    padding: 5px 0
}

.agent .contact-info a {
    font-size: .9rem;
    color: #fff;
    font-weight: 300
}

.agent .contact-info a i {
    width: 30px;
    height: 30px;
    line-height: 30px;
    background: #fff;
    color: #f3c84b;
    text-align: center;
    border: 1px solid #fff;
    margin-right: 10px;
    border-radius: 50%;
    font-size: .75rem;
    -webkit-transition: all .3s;
    transition: all .3s
}

.agent .contact-info a:hover {
    text-decoration: none;
    color: #fff
}

.agent .agent-social {
    padding: 20px 30px;
    background: #383838
}

.agent .agent-social a {
    color: #999
}

.agent .agent-social a:focus, .agent .agent-social a:hover {
    color: #f3c84b;
    text-decoration: none
}

.agents-listing .agent {
    margin-bottom: 30px
}

.agents-listing .image {
    height: 220px
}

.agents-listing .contact-info {
    padding: 20px
}

.agents-listing .contact-info a {
    font-size: .85rem
}

.testimonial {
    background: #333;
    -webkit-box-shadow: 0 0 25px 0 rgba(0,0,0,.1);
    box-shadow: 0 0 25px 0 rgba(0,0,0,.1);
    color: #aaa;
    max-width: 700px;
    margin: 0 auto;
    padding: 50px
}

.testimonial .feedback {
    line-height: 1.9rem;
    font-size: 1rem;
    font-weight: 300;
    text-align: center;
    position: relative;
    z-index: 1
}

.testimonial .feedback::before {
    content: '';
    width: 200px;
    height: 200px;
    background: url(../img/quote.svg);
    background-size: 100%;
    position: absolute;
    top: calc(50% - 100px);
    left: calc(50% - 100px);
    display: block;
    z-index: -1
}

.testimonial .client {
    text-align: right
}

.testimonial .client span {
    font-size: .9rem;
    font-weight: 300
}

.clients {
    padding: 15px 0
}

.clients .client {
    height: 120px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.clients .client img {
    max-width: 140px;
    margin: 0 auto
}

footer.footer {
    padding: 25px 0 0
}

footer.footer p {
    color: #7e7e7e;
    font-size: .9rem;
    line-height: 1.5rem;
    font-size: 300
}

footer.footer .logo {
    margin-bottom: 20px
}

footer.footer a {
    color: #9e9e9e;
    font-size: .9rem
}

footer.footer a:focus, footer.footer a:hover {
    color: #f3c84b;
    text-decoration: none
}

footer.footer .social a {
    color: #000;
    font-size: 1.2rem;
    background: #9a9999;
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 2px 5px;
    border-radius: 5px
}

footer.footer .social a:focus, footer.footer .social a:hover {
    color: #000;
    text-decoration: none;
    background: #f3c84b
}

footer.footer .get-touch {
    list-style: none;
    margin: 0;
    padding: 0;
    color: #9e9e9e;
    font-size: .8rem
}

footer.footer .get-touch li {
    line-height: 2
}

footer.footer .get-touch li .fa {
    min-width: 1.1rem
}

footer.footer h3 {
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: .9rem;
    color: #ccc
}

footer.footer .newsletter-form .form-group {
    position: relative
}

footer.footer .newsletter-form .submit {
    position: absolute;
    right: 0;
    bottom: 0;
    padding-top: 11px;
    padding-bottom: 11px
}

footer.footer .copyrights {
    padding: 10px 0;
    margin-top: 25px
}

footer.footer .copyrights p {
    margin: 0;
    font-size: 12px
}

footer.footer .copyrights a {
    color: #c7c7c7;
    font-size: 12px
}

#scrollTopButton {
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    color: #fff;
    position: fixed;
    right: 30px;
    bottom: 30px;
    background-color: #f3c84b;
    background-image: -webkit-gradient(linear,left top,right top,from(#f3c84b),to(#37cfdc));
    background-image: linear-gradient(to right,#f3c84b,#37cfdc);
    z-index: 9995;
    cursor: pointer;
    display: none;
    border-radius: 40px
}

#scrollTopButton::before {
    content: 'Scroll Top';
    width: 110px;
    height: 40px;
    background-color: #f3c84b;
    background-image: -webkit-gradient(linear,left top,right top,from(#f3c84b),to(#37cfdc));
    background-image: linear-gradient(to right,#f3c84b,#37cfdc);
    color: #fff;
    text-align: center;
    line-height: 40px;
    cursor: pointer;
    font-size: .75rem;
    padding-right: 30px;
    position: absolute;
    top: 0;
    left: -70px;
    display: block;
    -webkit-transition: all .3s;
    transition: all .3s;
    -webkit-transform: translateX(40px);
    transform: translateX(40px);
    -webkit-transform-origin: top right;
    transform-origin: top right;
    border-radius: 40px;
    z-index: -1;
    opacity: 0
}

#scrollTopButton:hover::before {
    -webkit-transform: none;
    transform: none;
    opacity: 1
}

.p-summary {
    margin-bottom: 25px
}

.p-summary label {
    font-size: 14px;
    color: #757575;
    margin-bottom: 10px;
    text-transform: uppercase;
    margin-top: 10px !important
}

.p-summary h2 {
    font-size: 22px;
    color: #fff;
    background: #484848;
    padding: 10px
}

.p-summary p {
    font-size: 16px !important;
    color: #151515
}

.filter {
    padding: 10px 30px;
    margin-top: 30px;
    background: #333
}

.filter strong {
    min-width: 50px;
    color: #999
}

.filter .sort {
    padding: 10px 0
}

.filter .view {
    padding: 10px 0
}

.filter .view li {
    margin: 0
}

.filter .view a {
    width: 35px;
    height: 35px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-decoration: none
}

.filter .view a:hover {
    background: #383838;
    color: #f3c84b
}

.filter .view a.active {
    background: #2a2a2a
}

.filter .bootstrap-select .dropdown-toggle {
    background: #2a2a2a;
    padding: 10px 20px;
    padding-right: 40px
}

.filter .bootstrap-select .dropdown-toggle span {
    font-size: .85rem;
    line-height: 1.5rem
}

.filter .bootstrap-select .dropdown-toggle span.bs-caret {
    margin-right: 10px
}

.filter .search {
    min-width: 100%
}

.property-listing-item {
    margin-top: 40px
}

.property-listing-item .image {
    height: 220px;
    overflow: hidden;
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center
}

.thumbs .property-listing-item .image {
    height: 195px
}

.develper .property-listing-item .info, .thumbs .property-listing-item .info {
    background: #1b1b1b;
    padding-bottom: 5px
}

.develper .property-listing-item .info:after, .thumbs .property-listing-item .info:after {
    display: none
}

.develper .property-listing-item .image {
    height: 195px;
    background: #d4d4d4
}

.property-listing-item .image img {
    width: 100%
}

.property-listing-item .image .price {
    position: absolute;
    right: 0;
    bottom: 0;
    background: #f3c84b;
    padding: 5px 20px;
    color: #fff
}

.property-listing-item.list-full-width .image {
    height: 320px
}

.property-listing-item.list-full-width .image img {
    width: 100%
}

.property-listing-item .info {
    padding: 20px;
    padding-bottom: 0;
    background: #383838
}

.property-listing-item .info::after {
    content: '';
    background: #555;
    width: 100%;
    height: 1px;
    display: block;
    margin-top: 20px
}

.property-listing-item .info a {
    display: block
}

.property-listing-item .info .dev {
    color: #f3c84b;
    font-size: 14px
}

.property-listing-item .info h2 {
    font-size: 19px
}

.property-listing-item .info .badge {
    margin-bottom: 10px
}

.property-listing-item .info p {
    font-size: .95rem;
    color: #eee
}

.property-listing-item .info .address {
    font-size: .85rem;
    font-weight: 300;
    color: #999
}

.property-listing-item .footer {
    padding: 17px 20px;
    background: #383838;
    color: #999;
    font-size: .85rem
}

.property-listing-item .footer .price {
    color: #fff
}

.property-listing-item .footer .price strong {
    font-weight: 400
}

.property-listing-item ul i {
    color: #fff;
    margin-right: 5px
}

.property-listing-item .inner {
    height: 100%;
    padding: 10px
}

.property-listing-footer {
    font-size: .9rem
}

.widget {
    background: #333;
    margin-top: 40px;
    padding: 20px
}

.widget .widget-header {
    color: #fff;
    margin-bottom: 15px
}

.sidebar-search .form-control {
    background: #2a2a2a;
    height: 38px
}

.sidebar-search .bootstrap-select .dropdown-toggle {
    background: #2a2a2a
}

.sidebar-search textarea {
    min-height: inherit
}

.sidebar-search .row {
    margin-right: -5px;
    margin-left: -5px
}

.sidebar-search .row [class*=col-] {
    padding-left: 5px;
    padding-right: 5px
}

.sidebar-search select {
    font-size: 15px;
    color: #969494
}

.sidebar-search option {
    font-size: 15px
}

.sidebar-search label {
    display: none
}

.property-thumb {
    margin-bottom: 20px
}

.property-thumb .image {
    width: 85px;
    height: 85px;
    margin-right: 15px
}

.property-thumb a {
    color: #fff !important;
    font-weight: 500;
    font-size: .95rem
}

.property-thumb p {
    font-size: .8rem;
    margin-bottom: 0
}

.property-thumb .price {
    color: #f3c84b;
    font-weight: 500;
    font-size: .8rem
}

.property-thumb .price small {
    color: #ccc
}

.location-widget ul li {
    border-bottom: dashed 1px #5a5a5a;
    line-height: 2
}

.location-widget ul li:last-child {
    border-bottom: 0
}

.location-widget ul a {
    color: #999;
    font-size: .9rem;
    margin-bottom: 5px;
    text-decoration: none
}

.location-widget ul a:hover {
    color: #f3c84b
}

.map {
    position: relative
}

.map-holder {
    height: 500px;
    overflow: hidden
}

.map-holder::after {
    content: '';
    width: 100%;
    height: 30px;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-box-shadow: inset 0 10px 30px rgba(0,0,0,.2);
    box-shadow: inset 0 10px 30px rgba(0,0,0,.2)
}

.collapse-map {
    padding: 10px 30px;
    background: #383838;
    text-decoration: none !important;
    color: #eee !important;
    border-radius: 30px;
    -webkit-box-shadow: 0 0 15px rgba(0,0,0,.1);
    box-shadow: 0 0 15px rgba(0,0,0,.1);
    position: absolute;
    top: 0;
    left: 50%;
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    z-index: 999;
    font-size: .8rem
}

.toggle-features {
    margin-bottom: 15px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    margin-left: 15px
}

.toggle-features:focus, .toggle-features:hover {
    color: #f3c84b;
    text-decoration: none
}

.features {
    margin-left: 15px
}

.property-single .swiper-container {
    width: 100%;
    height: 447px !important;
    margin-left: auto;
    margin-right: auto
}

.property-single .swiper-slide {
    background-size: cover;
    background-position: center
}

.property-single .gallery-top {
    height: 80%;
    width: 100%
}

.property-single .gallery-thumbs {
    height: 150px !important;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    padding: 10px 0
}

.property-single .gallery-thumbs .swiper-wrapper {
    margin-left: -33.333%
}

.property-single .gallery-thumbs .swiper-slide {
    width: 33.33% !important;
    height: 100%;
    opacity: .4
}

.property-single .gallery-thumbs .swiper-slide-active {
    opacity: 1
}

.property-single-author {
    padding: 22px 25px 7px
}

.property-single-author .avatar {
    min-width: 80px;
    min-height: 80px;
    max-width: 80px;
    max-height: 80px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 20px
}

.property-single-author .text {
    color: #fff
}

.property-single-author .text strong {
    font-size: 1.2rem;
    display: block;
    line-height: 1
}

.property-single-author .text span {
    color: #999;
    font-size: .85rem;
    display: block
}

.property-single-author .agent-social {
    margin-bottom: 0;
    margin-top: 10px;
    font-size: .8rem
}

.property-single-author .agent-social a {
    color: #fff
}

.property-single-author .agent-social a:hover {
    color: #f3c84b
}

.property-single-author .contact-info {
    font-size: .85rem;
    padding: 15px 0
}

.property-single-author .contact-info a {
    text-decoration: none;
    font-weight: 500;
    color: #d4d4d4;
    margin-right: 5px;
    letter-spacing: .5px
}

.property-single-author .contact-info i {
    margin-right: 10px
}

.property-single-author .agent-contact {
    position: relative
}

.property-single-author .agent-contact .loader, .property-single-author .agent-contact .not-send, .property-single-author .agent-contact .send {
    background: #383838e8
}

.floor-plan a, .payment-plan a, .property-single-description a, .property-single-features a, .property-single-map a {
    color: #585858
}

#OverviewContent p {
    text-align: left
}

#OverviewContent p a, .floor-plan p a, .payment-plan p a, .property-single-features p a, .property-single-map p a {
    font-weight: 600
}

#OverviewContent p a:hover, .floor-plan p a:hover, .payment-plan p a:hover, .property-single-features p a:hover, .property-single-map p a:hover {
    text-decoration: none;
    color: inherit
}

.block {
    padding: 30px
}

.block h3 {
    margin-bottom: 15px
}

.block p {
    font-size: .9rem;
    font-weight: 300;
    line-height: 1.4rem
}

.property-single-details strong {
    color: #fff;
    font-size: .7rem;
    display: block;
    line-height: 1;
    font-weight: 300
}

.property-single-details span {
    color: #999;
    font-size: .85rem;
    margin-bottom: 15px
}

.property-single-features .label-template-checkbox {
    font-size: .9rem;
    margin-bottom: 15px;
    cursor: default
}

.property-single-features ul.feature {
    padding: 0;
    list-style: none;
    margin: 0 -15px
}

.property-single-features ul.feature li {
    line-height: 1.9;
    font-size: 14px;
    list-style: none;
    padding: 0;
    width: 21%;
    float: left;
    border: solid 1px #eaeaea;
    background: #fff;
    border-radius: 3px;
    margin: 0 15px;
    margin-bottom: 25px
}

.property-single-features ul.feature li:hover {
    background: #e6e6e6
}

.property-single-features ul.feature li:before {
    display: none
}

.property-single-features ul.feature li .ame-warp {
    border-radius: 3px;
    text-align: center
}

.property-single-features .feature .img {
    padding: 20px;
    background: #e6e6e6;
    border-radius: 50%;
    width: 100px;
    height: 100px;
    margin: 10px auto;
    display: block;
    border: dotted 1px #eaeaea
}

.property-single-features .feature .img img {
    max-width: 100%
}

.property-single-features .feature p {
    font-size: 14px;
    padding: 10px 5px 0;
    min-height: 25px;
    color: #3c3c3c;
    font-weight: 500
}

.floor-plan .image {
    padding: 30px;
    margin-top: 40px
}

.floor-plan .nav-tabs, .property-single-map .nav-tabs {
    border-bottom: none
}

.floor-plan a.nav-link, .property-single-map a.nav-link {
    border: none;
    border-radius: 50px;
    font-size: .85rem;
    padding: 5px 20px;
    background: #383838;
    margin: 5px;
    color: #999
}

.floor-plan a.nav-link.active, .property-single-map a.nav-link.active {
    background: #f3c84b;
    color: #fff
}

.floor-plan .card-header {
    font-size: 14px;
    font-weight: 500;
    padding: .35rem .75rem;
    background: 0 0
}

.floor-plan .btn {
    border: solid 1px #a77c00;
    border-radius: 3px;
    padding: 13px 15px;
    min-width: 125px;
    font-size: 11px;
    color: #946f03;
    max-width: 130px;
    margin-top: 15px
}

.floor-plan .table td, .floor-plan .table th {
    padding: 5px;
    vertical-align: top;
    border-top: 0;
    color: #636262;
    font-size: 14px
}

.floor a:hover {
    text-decoration: none
}

span.inlarge {
    display: block;
    font-size: 11px;
    margin-top: 10px;
    font-weight: 400;
    letter-spacing: 1px;
    color: #000
}

.payment-plan table {
    border: solid 1px #f5f5f5
}

.payment-plan table td, .payment-plan table th {
    padding: 10px;
    font-size: 13px;
    border: 0;
    color: #343a40
}

.payment-plan table thead tr {
    background: #ccc
}

.payment-plan table tbody tr {
    background: #fff
}

.payment-plan table tbody tr:nth-child(even) {
    background: #f5f5f5
}

.payment-plan .pay-warp {
    border: solid 1px #616161;
    text-align: center;
    max-width: 80%;
    margin-bottom: 30px
}

.payment-plan .pay-warp label {
    margin: 0;
    padding: 7px;
    font-size: 14px;
    color: #272525
}

.payment-plan .pay-warp h5 {
    background: #616161;
    padding: 10px;
    font-size: 18px;
    margin: 0;
    color: #fff
}

.payment-plan h4 {
    font-size: 16px
}

.g-type {
    border-bottom: none;
    margin: 0 auto;
    text-align: center;
    width: 390px;
    margin-bottom: 25px
}

.g-type .nav-item {
    border-left: 0;
    min-width: 175px;
    text-transform: uppercase;
    font-weight: 500;
    background-color: #ccc
}

.g-type.nav-tabs .nav-link.active {
    color: #fff;
    background-color: #00447b;
    border: 0;
    border-radius: 0;
    margin-bottom: -2px;
    padding-bottom: 10px
}

.property-single-map .arrow-left {
    position: absolute;
    height: 42px;
    z-index: 2;
    width: 42px;
    border-radius: 50%;
    top: calc(48% - 21px);
    box-shadow: 0 1px 3px rgba(0,0,0,.3);
    outline: 0;
    background: url(../images/left-arrow.png) no-repeat 10px #fff;
    left: -21px;
    padding: 0 4px 0 0
}

.property-single-map .arrow-right {
    position: absolute;
    height: 42px;
    z-index: 2;
    width: 42px;
    border-radius: 50%;
    top: calc(48% - 21px);
    box-shadow: 0 1px 3px rgba(0,0,0,.3);
    outline: 0;
    background: url(../images/right-arrow.png) no-repeat 10px #fff;
    right: -21px;
    padding: 0 4px 0 0
}

.property-gallery .gallery .row {
    margin-right: -1px;
    margin-left: -1px
}

.property-gallery .gallery .row [class*=col-] {
    padding-left: 1px;
    padding-right: 1px
}

.property-gallery .gallery figure {
    margin-bottom: 2px;
    overflow: hidden;
    position: relative
}

.property-gallery .gallery figure img {
    -webkit-transition: all .9s;
    transition: all .9s
}

.property-gallery .gallery figure:hover img {
    transform: scale(1.3);
    cursor: zoom-in
}

.property-gallery .gallery figure .more-img-count {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,.44);
    text-align: center;
    font-size: 22px;
    color: #fff;
    padding: 23%;
    z-index: 2;
    font-weight: 700
}

.mid-menu ul {
    padding: 0;
    margin: 15px -3px
}

.mid-menu ul li {
    list-style: none;
    display: inline-block;
    border: solid 1px #fff;
    margin: 10px;
    padding: 5px 15px;
    position: relative;
    padding-left: 45px;
    border-radius: 3px;
    overflow: hidden;
    margin-bottom: 5px
}

.mid-menu ul li a {
    color: #000
}

.mid-menu ul li a:hover {
    color: #c59509;
    text-decoration: none
}

.mid-menu ul li .fa {
    background: #1c1c1c;
    color: #ffc61e;
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 35px;
    text-align: center;
    vertical-align: middle;
    display: table;
    padding: 8px;
    font-size: 1.2rem
}

.new_form {
    border-radius: 5px;
    box-shadow: 0 0 8px 0 rgb(0 0 0 / 15%);
    border: solid 1px #efefef;
    background: #fff;
    overflow: hidden
}

.new_form .card-header {
    font-size: 16px;
    text-transform: uppercase;
    font-weight: 600;
    text-align: center;
    border-color: #f1f1f1
}

.new_form .card-body {
    padding: 1.5rem
}

.new_form input, .new_form select {
    border-radius: 5px;
    padding: 7px 11px
}

.new_form select {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    font-size: 14px;
    color: #8c8a8a
}

.new_form textarea {
    min-height: 70px;
    border-radius: 5px;
    padding: 7px 11px
}

.new_form .form-group {
    position: relative;
    margin-bottom: 15px
}

.new_form .custom-checkbox label {
    color: #000;
    padding-left: 0;
    margin-top: 0;
    font-size: 13px
}

.new_form .custom-checkbox label span {
    padding-left: 5px;
    color: #43c72f;
    font-weight: 500
}

.download-new {
    border-radius: 5px;
    box-shadow: 0 0 8px 0 rgb(0 0 0 / 15%);
    overflow: hidden
}

.download-new ul {
    margin: 0 auto;
    padding: 0;
    list-style: none;
    text-align: center
}

.download-new ul li {
    padding: 13px 13px;
    box-shadow: 0 0 8px 0 rgb(0 0 0 / 3%);
    font-size: 13px;
    font-weight: 600;
    border: solid 1px #efefef;
    border-bottom: 0;
    letter-spacing: 1px;
    text-align: left
}

.download-new ul li:last-child {
    border-bottom: solid 1px #efefef
}

.download-new ul li:first-child {
    border-top: 0
}

.download-new ul li:last-child {
    margin-bottom: 0
}

.download-new ul li a {
    color: #585858;
    text-decoration: none;
    text-transform: uppercase;
    display: block
}

.download-new ul li:hover {
    background: #f7f7f7
}

.download-new ul li i {
    color: #f90202;
    margin-right: 10px;
    background: #fff;
    height: 37px;
    width: 37px;
    border-radius: 100%;
    text-align: center;
    vertical-align: bottom;
    padding: 8px;
    font-size: 22px
}

.amenities .has-line::after, .property-gallery .has-line::after, .videos-sec .has-line::after {
    margin: 10px auto
}

.locttt {
    text-align: center !important
}

.locttt figure {
    border: solid 10px #e6e5e5;
    display: inline-block;
    border-radius: 50%;
    padding: 15px;
    margin: 15px auto 0
}

.locttt p {
    font-size: 13px;
    margin-bottom: 10px;
    color: #505050;
    font-weight: 500;
    line-height: 1.5;
    display: block
}

.locttt label {
    font-size: 16px;
    font-weight: 700;
    margin: 5px 0;
    color: #000;
    display: block
}

.bitcoin-modal img {
    height: 100%;
    object-fit: cover;
}

.bitcoin-modal .close {
    margin: 6px 15px;
    font-size: 24px;
}

.bitcoin-modal .close:focus {
    outline: none;
    border: 0;
}

.bitcoin-modal p {
    line-height: 1.3;
    font-size: 13px;
}

.bitcoin-modal .form-group {
    margin-bottom: 18px;
}

.bitcoin-modal .form-control {
    padding: 8px 15px;
}

.bitcoin-modal textarea {
    padding: 8px 15px;
    min-height: 55px;
    font-size: 11px;
    color: #868e96;
}

.bitcoin-modal .input-group-prepend {
    max-width: 121px;
}

.bitcoin-modal .input-group-prepend select.form-control {
    height: 42px !important;
}

@media(max-width: 992px) {
    .navbar-toggler {
        position: absolute;
        left: 0;
        top: 15px
    }
}

@media (max-width: 767px) {
    nav .navbar .navbar-brand {
        margin-left: 35px
    }

    .g-type {
        width: auto
    }

    .g-type .nav-item {
        min-width: 125px
    }

    .navbar-toggler {
        position: absolute;
        left: 0;
        top: 15px
    }

    .call-pont {
        display: block;
        position: fixed;
        width: 100%;
        background: #000;
        z-index: 999;
        bottom: 0;
        padding: 0 25px
    }

    .call-pont ul {
        list-style: none;
        margin: 0;
        padding: 0
    }

    .call-pont ul li {
        width: 50%;
        float: left;
        text-align: center;
        list-style: none;
        padding: 9px 0
    }

    .call-pont .fa {
        font-size: 1.7rem;
        color: #fff
    }

    .call-pont li.enqr a {
        background: #0284c1;
        padding: 5px 12px;
        border-radius: 4px;
        color: #fff;
        display: block
    }

    .top-bar .menu-right span {
        display: none
    }

    .top-bar .menu-right a {
        padding: 0 7px;
        border-right: 0
    }

    .quick_enq, .similar-properties {
        padding: 3rem 0
    }

    .mid-menu ul li {
        margin: 10px 5px;
        padding: 5px 10px;
        padding-left: 45px;
        min-width: 43%;
        max-width: 55%;
        background: #d0d0d0
    }

    .main-slider.offer-bnr {
        min-height: calc(40vh);
        padding-top: 7vh
    }

    .main-slider.offer-bnr h2 {
        font-size: 50px;
        line-height: 1
    }

    .main-slider.offer-bnr p {
        font-size: 20px;
        top: -1px
    }

    .offer-img {
        background: url(../images/sp-offers.png) no-repeat;
        position: absolute;
        right: -6px;
        width: 124px;
        height: 135px;
        z-index: 1;
        top: -7px;
        background-size: contain
    }

    .pro-summary .pro-info .table td {
        width: 100%;
        display: inline-block;
        padding: 5px;
        border-bottom: solid 1px #717171
    }

    .pro-summary .pro-info .table td:last-child {
        border-bottom: 0
    }
}

.review .card-inner {
    margin-left: 1rem
}

.comment-form label {
    color: #3a3a3a;
    padding-left: 0;
    margin-top: 15px;
    font-size: 14px;
    letter-spacing: 1px;
    font-weight: 400;
    margin-bottom: 3px
}

.comment-form .form-control {
    background: #fff;
    border: solid 1px #ccc !important
}

.comment-form .form-control:focus {
    background: #fff !important
}

.comment-form .form-control {
    border-radius: 7px;
    padding: 7px 12px
}

.comment-form textarea.form-control {
    min-height: 80px
}

@media (min-width: 768px) {
    .commnt-warp .card:before {
        content: "";
        position: absolute;
        width: 0;
        height: 0;
        border-style: solid;
        border-color: transparent;
        left: -32px;
        top: 30px;
        border-right-color: inherit;
        border-width: 16px
    }

    .commnt-warp .card:after {
        content: "";
        position: absolute;
        width: 0;
        height: 0;
        border-style: solid;
        border-color: transparent;
        left: -15px;
        top: 31px;
        border-right-color: #fff;
        border-width: 15px;
        border-left: 0
    }

    .review .card-inner {
        margin-left: 4rem
    }

    .carousel-item img {
        width: 100%;
        height: 95vh;
        object-fit: cover
    }
}

#property-single-map {
    width: 100%;
    height: 400px
}

.agent-full .image {
    max-height: 500px;
    overflow: hidden
}

.agent-full .text {
    height: 100%
}

.agent-full .header {
    padding: 30px;
    background: #f3c84b;
    color: #fff
}

.agent-full .header h2 {
    margin-bottom: 0
}

.agent-full .header p {
    color: #fff;
    font-weight: 300;
    font-size: .9rem
}

.agent-full .header a {
    color: #fff;
    font-size: .85rem;
    text-decoration: none;
    font-weight: 300
}

.agent-full .header a:hover {
    color: #fff;
    text-decoration: none;
    font-weight: 300
}

.agent-full .header i {
    margin-right: 5px
}

.agent-full .body {
    padding: 30px;
    font-size: .9rem
}

.agent-full .footer {
    color: #999;
    padding: 30px;
    padding-top: 0
}

.agent-full .footer .icon {
    font-size: 2.1rem;
    margin-right: 20px;
    color: #fff
}

.agent-full .footer i[class*=icon-] {
    -webkit-transform: translateY(2px);
    transform: translateY(2px);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex
}

.agent-full .footer strong {
    display: block;
    line-height: 1;
    font-size: 1.8rem;
    color: #f3c84b
}

.agent-full .footer span {
    font-size: .9rem;
    font-weight: 300
}

.agent-contact h4 {
    position: relative;
    font-size: 14px;
    margin-bottom: 15px
}

.agent-contact h4:after {
    content: '';
    display: block;
    border-bottom: solid 1px #7b5e0b;
    position: absolute;
    right: 0;
    width: 100%;
    bottom: 5px
}

.agent-contact h4 span {
    background: #383838;
    margin: 0 15px;
    padding: 0 10px;
    z-index: 9;
    position: relative;
    color: #f3c84b
}

.agent-contact-form textarea {
    min-height: 100px
}

.grid-gallery figcaption {
    background: #424242
}

.slideshow-open figure {
    background: #383838;
    border-color: #383838
}

.slideshow-open figcaption {
    background: 0 0 !important
}

.slideshow-open li::after {
    background: rgba(56,56,56,.8)
}

.customer-login h2 {
    margin-bottom: 30px
}

.customer-login h4 {
    color: #eee
}

.customer-login p {
    font-size: .9rem;
    font-weight: 300;
    margin: 30px 0;
    line-height: 1.7rem
}

.customer-login hr {
    margin: 30px 0;
    border-color: #555
}

.customer-login input {
    padding-top: 15px;
    padding-bottom: 15px
}

.about-brief img {
    -webkit-box-shadow: 0 0 27px 0 rgba(0,0,0,.12);
    box-shadow: 0 0 27px 0 rgba(0,0,0,.12)
}

.testimonial.bg-darker {
    background: #2e2e2e
}

.testimonial.bg-darker .feedback::before {
    opacity: .5
}

.error-page {
    padding: 80px 0
}

.error-page-holder h1 {
    font-size: 6rem
}

.error-page-holder .error-page-inner {
    width: 100%
}

.error-page-holder img {
    max-width: 600px;
    display: block;
    margin: 0 auto
}

#style-switch-button {
    position: fixed;
    top: 120px;
    left: 0;
    border-radius: 0;
    z-index: 2
}

#style-switch {
    width: 300px;
    padding: 20px;
    position: fixed;
    top: 160px;
    left: 0;
    background: #252525;
    border: solid 1px #ced4da;
    z-index: 2000
}

#style-switch h4 {
    color: #999
}

.navbar {
    padding: .5rem 1rem
}

.navbar-brand {
    display: inline-block;
    padding-top: .3125rem;
    padding-bottom: .3125rem;
    margin-right: 1rem;
    font-size: 1.25rem
}

.navbar-toggler {
    padding: .25rem .75rem;
    font-size: 1.25rem;
    line-height: 1;
    border: 1px solid transparent;
    border-radius: 50px
}

.navbar-light .navbar-brand {
    color: rgba(0,0,0,.9)
}

.navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
    color: rgba(0,0,0,.9)
}

.navbar-light .navbar-nav .nav-link {
    color: rgba(0,0,0,.5)
}

.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
    color: rgba(0,0,0,.7)
}

.navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0,0,0,.3)
}

.navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show > .nav-link {
    color: rgba(0,0,0,.9)
}

.navbar-light .navbar-toggler {
    color: rgba(0,0,0,.5);
    border-color: rgba(0,0,0,.1)
}

.navbar-light .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0,0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
}

.navbar-light .navbar-text {
    color: rgba(0,0,0,.5)
}

.navbar-dark .navbar-brand {
    color: #fff
}

.navbar-dark .navbar-brand:focus, .navbar-dark .navbar-brand:hover {
    color: #fff
}

.navbar-dark .navbar-nav .nav-link {
    color: rgba(255,255,255,.5)
}

.navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
    color: rgba(255,255,255,.75)
}

.navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255,255,255,.25)
}

.navbar-dark .navbar-nav .active > .nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .show > .nav-link {
    color: #fff
}

.navbar-dark .navbar-toggler {
    color: rgba(255,255,255,.5);
    border-color: rgba(255,255,255,.1)
}

.navbar-dark .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255,0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
}

.navbar-dark .navbar-text {
    color: rgba(255,255,255,.5)
}

.btn {
    font-weight: 500;
    border: 1px solid transparent;
    text-transform: uppercase;
    padding: .625rem 1.5rem;
    font-size: .8rem;
    line-height: 1.5;
    border-radius: 5px;
    -webkit-transition: background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out
}

.btn.focus, .btn:focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 .2rem rgba(89,137,229,.25);
    box-shadow: 0 0 0 .2rem rgba(89,137,229,.25)
}

.btn.disabled, .btn:disabled {
    opacity: .65
}

.btn:not([disabled]):not(.disabled).active, .btn:not([disabled]):not(.disabled):active {
    background-image: none
}

.btn-primary {
    color: #fff;
    background-color: #1d6aab;
    border-color: #1d6aab
}

.btn-primary:hover {
    color: color-yiq(#3871e0);
    background-color: #3871e0;
    border-color: #2d6ade
}

.btn-primary.focus, .btn-primary:focus {
    -webkit-box-shadow: 0 0 0 .2rem rgba(89,137,229,.5);
    box-shadow: 0 0 0 .2rem rgba(89,137,229,.5)
}

.btn-primary.disabled, .btn-primary:disabled {
    background-color: #f3c84b;
    border-color: #f3c84b
}

.btn-primary:not([disabled]):not(.disabled).active, .btn-primary:not([disabled]):not(.disabled):active, .show > .btn-primary.dropdown-toggle {
    color: color-yiq(#2d6ade);
    background-color: #2d6ade;
    border-color: #2262dc;
    -webkit-box-shadow: 0 0 0 .2rem rgba(89,137,229,.5);
    box-shadow: 0 0 0 .2rem rgba(89,137,229,.5)
}

.btn-secondary {
    color: color-yiq(#868e96);
    background-color: #868e96;
    border-color: #868e96
}

.btn-secondary:hover {
    color: color-yiq(#727b84);
    background-color: #727b84;
    border-color: #6c757d
}

.btn-secondary.focus, .btn-secondary:focus {
    -webkit-box-shadow: 0 0 0 .2rem rgba(134,142,150,.5);
    box-shadow: 0 0 0 .2rem rgba(134,142,150,.5)
}

.btn-secondary.disabled, .btn-secondary:disabled {
    background-color: #868e96;
    border-color: #868e96
}

.btn-secondary:not([disabled]):not(.disabled).active, .btn-secondary:not([disabled]):not(.disabled):active, .show > .btn-secondary.dropdown-toggle {
    color: color-yiq(#6c757d);
    background-color: #6c757d;
    border-color: #666e76;
    -webkit-box-shadow: 0 0 0 .2rem rgba(134,142,150,.5);
    box-shadow: 0 0 0 .2rem rgba(134,142,150,.5)
}

.btn-success {
    color: color-yiq(#28a745);
    background-color: #28a745;
    border-color: #28a745
}

.btn-success:hover {
    color: color-yiq(#218838);
    background-color: #218838;
    border-color: #1e7e34
}

.btn-success.focus, .btn-success:focus {
    -webkit-box-shadow: 0 0 0 .2rem rgba(40,167,69,.5);
    box-shadow: 0 0 0 .2rem rgba(40,167,69,.5)
}

.btn-success.disabled, .btn-success:disabled {
    background-color: #28a745;
    border-color: #28a745
}

.btn-success:not([disabled]):not(.disabled).active, .btn-success:not([disabled]):not(.disabled):active, .show > .btn-success.dropdown-toggle {
    color: color-yiq(#1e7e34);
    background-color: #1e7e34;
    border-color: #1c7430;
    -webkit-box-shadow: 0 0 0 .2rem rgba(40,167,69,.5);
    box-shadow: 0 0 0 .2rem rgba(40,167,69,.5)
}

.btn-info {
    color: color-yiq(#17a2b8);
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-info:hover {
    color: color-yiq(#138496);
    background-color: #138496;
    border-color: #117a8b
}

.btn-info.focus, .btn-info:focus {
    -webkit-box-shadow: 0 0 0 .2rem rgba(23,162,184,.5);
    box-shadow: 0 0 0 .2rem rgba(23,162,184,.5)
}

.btn-info.disabled, .btn-info:disabled {
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-info:not([disabled]):not(.disabled).active, .btn-info:not([disabled]):not(.disabled):active, .show > .btn-info.dropdown-toggle {
    color: color-yiq(#117a8b);
    background-color: #117a8b;
    border-color: #10707f;
    -webkit-box-shadow: 0 0 0 .2rem rgba(23,162,184,.5);
    box-shadow: 0 0 0 .2rem rgba(23,162,184,.5)
}

.btn-warning {
    color: color-yiq(#ffc107);
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-warning:hover {
    color: color-yiq(#e0a800);
    background-color: #e0a800;
    border-color: #d39e00
}

.btn-warning.focus, .btn-warning:focus {
    -webkit-box-shadow: 0 0 0 .2rem rgba(255,193,7,.5);
    box-shadow: 0 0 0 .2rem rgba(255,193,7,.5)
}

.btn-warning.disabled, .btn-warning:disabled {
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-warning:not([disabled]):not(.disabled).active, .btn-warning:not([disabled]):not(.disabled):active, .show > .btn-warning.dropdown-toggle {
    color: color-yiq(#d39e00);
    background-color: #d39e00;
    border-color: #c69500;
    -webkit-box-shadow: 0 0 0 .2rem rgba(255,193,7,.5);
    box-shadow: 0 0 0 .2rem rgba(255,193,7,.5)
}

.btn-danger {
    color: color-yiq(#dc3545);
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-danger:hover {
    color: color-yiq(#c82333);
    background-color: #c82333;
    border-color: #bd2130
}

.btn-danger.focus, .btn-danger:focus {
    -webkit-box-shadow: 0 0 0 .2rem rgba(220,53,69,.5);
    box-shadow: 0 0 0 .2rem rgba(220,53,69,.5)
}

.btn-danger.disabled, .btn-danger:disabled {
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-danger:not([disabled]):not(.disabled).active, .btn-danger:not([disabled]):not(.disabled):active, .show > .btn-danger.dropdown-toggle {
    color: color-yiq(#bd2130);
    background-color: #bd2130;
    border-color: #b21f2d;
    -webkit-box-shadow: 0 0 0 .2rem rgba(220,53,69,.5);
    box-shadow: 0 0 0 .2rem rgba(220,53,69,.5)
}

.btn-light {
    color: color-yiq(#f8f9fa);
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-light:hover {
    color: color-yiq(#e2e6ea);
    background-color: #e2e6ea;
    border-color: #dae0e5
}

.btn-light.focus, .btn-light:focus {
    -webkit-box-shadow: 0 0 0 .2rem rgba(248,249,250,.5);
    box-shadow: 0 0 0 .2rem rgba(248,249,250,.5)
}

.btn-light.disabled, .btn-light:disabled {
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-light:not([disabled]):not(.disabled).active, .btn-light:not([disabled]):not(.disabled):active, .show > .btn-light.dropdown-toggle {
    color: color-yiq(#dae0e5);
    background-color: #dae0e5;
    border-color: #d3d9df;
    -webkit-box-shadow: 0 0 0 .2rem rgba(248,249,250,.5);
    box-shadow: 0 0 0 .2rem rgba(248,249,250,.5)
}

.btn-dark {
    color: color-yiq(#343a40);
    background-color: #343a40;
    border-color: #343a40
}

.btn-dark:hover {
    color: color-yiq(#23272b);
    background-color: #23272b;
    border-color: #1d2124
}

.btn-dark.focus, .btn-dark:focus {
    -webkit-box-shadow: 0 0 0 .2rem rgba(52,58,64,.5);
    box-shadow: 0 0 0 .2rem rgba(52,58,64,.5)
}

.btn-dark.disabled, .btn-dark:disabled {
    background-color: #343a40;
    border-color: #343a40
}

.btn-dark:not([disabled]):not(.disabled).active, .btn-dark:not([disabled]):not(.disabled):active, .show > .btn-dark.dropdown-toggle {
    color: color-yiq(#1d2124);
    background-color: #1d2124;
    border-color: #171a1d;
    -webkit-box-shadow: 0 0 0 .2rem rgba(52,58,64,.5);
    box-shadow: 0 0 0 .2rem rgba(52,58,64,.5)
}

.btn-outline-primary {
    color: #f3c84b;
    background-color: transparent;
    background-image: none;
    border-color: #f3c84b
}

.btn-outline-primary:hover {
    color: #fff;
    background-color: #f3c84b;
    border-color: #f3c84b
}

.btn-outline-primary.focus, .btn-outline-primary:focus {
    -webkit-box-shadow: 0 0 0 .2rem rgba(89,137,229,.5);
    box-shadow: 0 0 0 .2rem rgba(89,137,229,.5)
}

.btn-outline-primary.disabled, .btn-outline-primary:disabled {
    color: #f3c84b;
    background-color: transparent
}

.btn-outline-primary:not([disabled]):not(.disabled).active, .btn-outline-primary:not([disabled]):not(.disabled):active, .show > .btn-outline-primary.dropdown-toggle {
    color: #fff;
    background-color: #f3c84b;
    border-color: #f3c84b;
    -webkit-box-shadow: 0 0 0 .2rem rgba(89,137,229,.5);
    box-shadow: 0 0 0 .2rem rgba(89,137,229,.5)
}

.btn-outline-secondary {
    color: #868e96;
    background-color: transparent;
    background-image: none;
    border-color: #868e96
}

.btn-outline-secondary:hover {
    color: #fff;
    background-color: #868e96;
    border-color: #868e96
}

.btn-outline-secondary.focus, .btn-outline-secondary:focus {
    -webkit-box-shadow: 0 0 0 .2rem rgba(134,142,150,.5);
    box-shadow: 0 0 0 .2rem rgba(134,142,150,.5)
}

.btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
    color: #868e96;
    background-color: transparent
}

.btn-outline-secondary:not([disabled]):not(.disabled).active, .btn-outline-secondary:not([disabled]):not(.disabled):active, .show > .btn-outline-secondary.dropdown-toggle {
    color: #fff;
    background-color: #868e96;
    border-color: #868e96;
    -webkit-box-shadow: 0 0 0 .2rem rgba(134,142,150,.5);
    box-shadow: 0 0 0 .2rem rgba(134,142,150,.5)
}

.btn-outline-success {
    color: #28a745;
    background-color: transparent;
    background-image: none;
    border-color: #28a745
}

.btn-outline-success:hover {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-outline-success.focus, .btn-outline-success:focus {
    -webkit-box-shadow: 0 0 0 .2rem rgba(40,167,69,.5);
    box-shadow: 0 0 0 .2rem rgba(40,167,69,.5)
}

.btn-outline-success.disabled, .btn-outline-success:disabled {
    color: #28a745;
    background-color: transparent
}

.btn-outline-success:not([disabled]):not(.disabled).active, .btn-outline-success:not([disabled]):not(.disabled):active, .show > .btn-outline-success.dropdown-toggle {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745;
    -webkit-box-shadow: 0 0 0 .2rem rgba(40,167,69,.5);
    box-shadow: 0 0 0 .2rem rgba(40,167,69,.5)
}

.btn-outline-info {
    color: #17a2b8;
    background-color: transparent;
    background-image: none;
    border-color: #17a2b8
}

.btn-outline-info:hover {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-outline-info.focus, .btn-outline-info:focus {
    -webkit-box-shadow: 0 0 0 .2rem rgba(23,162,184,.5);
    box-shadow: 0 0 0 .2rem rgba(23,162,184,.5)
}

.btn-outline-info.disabled, .btn-outline-info:disabled {
    color: #17a2b8;
    background-color: transparent
}

.btn-outline-info:not([disabled]):not(.disabled).active, .btn-outline-info:not([disabled]):not(.disabled):active, .show > .btn-outline-info.dropdown-toggle {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8;
    -webkit-box-shadow: 0 0 0 .2rem rgba(23,162,184,.5);
    box-shadow: 0 0 0 .2rem rgba(23,162,184,.5)
}

.btn-outline-warning {
    color: #ffc107;
    background-color: transparent;
    background-image: none;
    border-color: #ffc107
}

.btn-outline-warning:hover {
    color: #fff;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-outline-warning.focus, .btn-outline-warning:focus {
    -webkit-box-shadow: 0 0 0 .2rem rgba(255,193,7,.5);
    box-shadow: 0 0 0 .2rem rgba(255,193,7,.5)
}

.btn-outline-warning.disabled, .btn-outline-warning:disabled {
    color: #ffc107;
    background-color: transparent
}

.btn-outline-warning:not([disabled]):not(.disabled).active, .btn-outline-warning:not([disabled]):not(.disabled):active, .show > .btn-outline-warning.dropdown-toggle {
    color: #fff;
    background-color: #ffc107;
    border-color: #ffc107;
    -webkit-box-shadow: 0 0 0 .2rem rgba(255,193,7,.5);
    box-shadow: 0 0 0 .2rem rgba(255,193,7,.5)
}

.btn-outline-danger {
    color: #dc3545;
    background-color: transparent;
    background-image: none;
    border-color: #dc3545
}

.btn-outline-danger:hover {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-outline-danger.focus, .btn-outline-danger:focus {
    -webkit-box-shadow: 0 0 0 .2rem rgba(220,53,69,.5);
    box-shadow: 0 0 0 .2rem rgba(220,53,69,.5)
}

.btn-outline-danger.disabled, .btn-outline-danger:disabled {
    color: #dc3545;
    background-color: transparent
}

.btn-outline-danger:not([disabled]):not(.disabled).active, .btn-outline-danger:not([disabled]):not(.disabled):active, .show > .btn-outline-danger.dropdown-toggle {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
    -webkit-box-shadow: 0 0 0 .2rem rgba(220,53,69,.5);
    box-shadow: 0 0 0 .2rem rgba(220,53,69,.5)
}

.btn-outline-light {
    color: #f8f9fa;
    background-color: transparent;
    background-image: none;
    border-color: #f8f9fa
}

.btn-outline-light:hover {
    color: #fff;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-outline-light.focus, .btn-outline-light:focus {
    -webkit-box-shadow: 0 0 0 .2rem rgba(248,249,250,.5);
    box-shadow: 0 0 0 .2rem rgba(248,249,250,.5)
}

.btn-outline-light.disabled, .btn-outline-light:disabled {
    color: #f8f9fa;
    background-color: transparent
}

.btn-outline-light:not([disabled]):not(.disabled).active, .btn-outline-light:not([disabled]):not(.disabled):active, .show > .btn-outline-light.dropdown-toggle {
    color: #fff;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
    -webkit-box-shadow: 0 0 0 .2rem rgba(248,249,250,.5);
    box-shadow: 0 0 0 .2rem rgba(248,249,250,.5)
}

.btn-outline-dark {
    color: #343a40;
    background-color: transparent;
    background-image: none;
    border-color: #343a40
}

.btn-outline-dark:hover {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-outline-dark.focus, .btn-outline-dark:focus {
    -webkit-box-shadow: 0 0 0 .2rem rgba(52,58,64,.5);
    box-shadow: 0 0 0 .2rem rgba(52,58,64,.5)
}

.btn-outline-dark.disabled, .btn-outline-dark:disabled {
    color: #343a40;
    background-color: transparent
}

.btn-outline-dark:not([disabled]):not(.disabled).active, .btn-outline-dark:not([disabled]):not(.disabled):active, .show > .btn-outline-dark.dropdown-toggle {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40;
    -webkit-box-shadow: 0 0 0 .2rem rgba(52,58,64,.5);
    box-shadow: 0 0 0 .2rem rgba(52,58,64,.5)
}

.btn-lg {
    padding: .8rem 1.8rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 50px
}

.btn-sm {
    padding: .2rem 1rem;
    font-size: .7rem;
    line-height: 1.5;
    border-radius: 50px
}

body {
    font-family: 'PT Sans',sans-serif;
    font-size: 1rem;
    font-weight: 500;
    line-height: 1.5;
    color: #212529;
    background-color: #fff
}

a {
    color: #f3c84b;
    text-decoration: none
}

a:focus, a:hover {
    color: #215dd1;
    text-decoration: underline
}

.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-bottom: .5rem;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.2
}

.h1, h1 {
    font-size: 2.5rem
}

.h2, h2 {
    font-size: 1.7rem
}

.h3, h3 {
    font-size: 1.4rem
}

.h4, h4 {
    font-size: 1.1rem
}

.h5, h5 {
    font-size: 1rem
}

.h6, h6 {
    font-size: 1rem
}

.lead {
    font-size: 1.25rem;
    font-weight: 300
}

.display-1 {
    font-size: 6rem;
    font-weight: 300;
    line-height: 1.2
}

.display-2 {
    font-size: 5.5rem;
    font-weight: 300;
    line-height: 1.2
}

.display-3 {
    font-size: 4.5rem;
    font-weight: 300;
    line-height: 1.2
}

.display-4 {
    font-size: 3.5rem;
    font-weight: 300;
    line-height: 1.2
}

hr {
    border-top: 1px solid rgba(0,0,0,.1)
}

.small, small {
    font-size: 80%;
    font-weight: 400
}

.mark, mark {
    padding: .2em;
    background-color: #fcf8e3
}

.blockquote {
    padding: .5rem 1rem;
    margin-bottom: 2rem;
    font-size: 1.25rem;
    border-left: 5px solid #f3c84b
}

.blockquote-footer {
    color: #868e96
}

.blockquote-footer::before {
    content: "\2014 \00A0"
}

.text-primary {
    color: #f3c84b !important
}

a.text-primary:focus, a.text-primary:hover {
    color: #2d6ade !important
}

.page-item:first-child .page-link {
    border-top-left-radius: .25rem;
    border-bottom-left-radius: .25rem
}

.page-item:last-child .page-link {
    border-top-right-radius: .25rem;
    border-bottom-right-radius: .25rem
}

.page-item.active .page-link {
    color: #fff;
    background-color: #f3c84b;
    border-color: #f3c84b
}

.page-item.disabled .page-link {
    color: #868e96;
    background-color: #fff;
    border-color: #ddd
}

.page-link {
    padding: .5rem .75rem;
    line-height: 1.25;
    color: #f3c84b;
    background-color: #fff;
    border: 1px solid #ddd
}

.page-link:focus, .page-link:hover {
    color: #215dd1;
    text-decoration: none;
    background-color: #e9ecef;
    border-color: #ddd
}

.pagination-lg .page-link {
    padding: .75rem 1.5rem;
    font-size: 1.25rem;
    line-height: 1.5
}

.pagination-lg .page-item:first-child .page-link {
    border-top-left-radius: .3rem;
    border-bottom-left-radius: .3rem
}

.pagination-lg .page-item:last-child .page-link {
    border-top-right-radius: .3rem;
    border-bottom-right-radius: .3rem
}

.pagination-sm .page-link {
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5
}

.pagination-sm .page-item:first-child .page-link {
    border-top-left-radius: .2rem;
    border-bottom-left-radius: .2rem
}

.pagination-sm .page-item:last-child .page-link {
    border-top-right-radius: .2rem;
    border-bottom-right-radius: .2rem
}

.bg-primary {
    background-color: #f3c84b !important
}

a.bg-primary:focus, a.bg-primary:hover {
    background-color: #2d6ade !important
}

.bg-secondary {
    background-color: #868e96 !important
}

a.bg-secondary:focus, a.bg-secondary:hover {
    background-color: #6c757d !important
}

.bg-success {
    background-color: #28a745 !important
}

a.bg-success:focus, a.bg-success:hover {
    background-color: #1e7e34 !important
}

.bg-info {
    background-color: #17a2b8 !important
}

a.bg-info:focus, a.bg-info:hover {
    background-color: #117a8b !important
}

.bg-warning {
    background-color: #ffc107 !important
}

a.bg-warning:focus, a.bg-warning:hover {
    background-color: #d39e00 !important
}

.bg-danger {
    background-color: #dc3545 !important
}

a.bg-danger:focus, a.bg-danger:hover {
    background-color: #bd2130 !important
}

.bg-light {
    background-color: #f8f9fa !important
}

a.bg-light:focus, a.bg-light:hover {
    background-color: #dae0e5 !important
}

.bg-dark {
    background-color: #343a40 !important
}

a.bg-dark:focus, a.bg-dark:hover {
    background-color: #1d2124 !important
}

.border-primary {
    border-color: #f3c84b !important
}

.border-secondary {
    border-color: #868e96 !important
}

.border-success {
    border-color: #28a745 !important
}

.border-info {
    border-color: #17a2b8 !important
}

.border-warning {
    border-color: #ffc107 !important
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

.text-primary {
    color: #f3c84b !important
}

a.text-primary:focus, a.text-primary:hover {
    color: #2d6ade !important
}

.text-secondary {
    color: #868e96 !important
}

a.text-secondary:focus, a.text-secondary:hover {
    color: #6c757d !important
}

.text-success {
    color: #28a745 !important
}

a.text-success:focus, a.text-success:hover {
    color: #1e7e34 !important
}

.text-info {
    color: #17a2b8 !important
}

a.text-info:focus, a.text-info:hover {
    color: #117a8b !important
}

.text-warning {
    color: #ffc107 !important
}

a.text-warning:focus, a.text-warning:hover {
    color: #d39e00 !important
}

.text-danger {
    color: #dc3545 !important
}

a.text-danger:focus, a.text-danger:hover {
    color: #bd2130 !important
}

.text-light {
    color: #f8f9fa !important
}

a.text-light:focus, a.text-light:hover {
    color: #dae0e5 !important
}

.text-dark {
    color: #343a40 !important
}

a.text-dark:focus, a.text-dark:hover {
    color: #1d2124 !important
}

.badge-primary {
    color: color-yiq(#f3c84b);
    background-color: #f3c84b
}

.badge-primary[href]:focus, .badge-primary[href]:hover {
    color: color-yiq(#f3c84b);
    text-decoration: none;
    background-color: #2d6ade
}

.badge-secondary {
    color: color-yiq(#868e96);
    background-color: #868e96
}

.badge-secondary[href]:focus, .badge-secondary[href]:hover {
    color: color-yiq(#868e96);
    text-decoration: none;
    background-color: #6c757d
}

.badge-success {
    color: color-yiq(#28a745);
    background-color: #28a745
}

.badge-success[href]:focus, .badge-success[href]:hover {
    color: color-yiq(#28a745);
    text-decoration: none;
    background-color: #1e7e34
}

.badge-info {
    color: color-yiq(#17a2b8);
    background-color: #17a2b8
}

.badge-info[href]:focus, .badge-info[href]:hover {
    color: color-yiq(#17a2b8);
    text-decoration: none;
    background-color: #117a8b
}

.badge-warning {
    color: color-yiq(#ffc107);
    background-color: #ffc107
}

.badge-warning[href]:focus, .badge-warning[href]:hover {
    color: color-yiq(#ffc107);
    text-decoration: none;
    background-color: #d39e00
}

.badge-danger {
    color: color-yiq(#dc3545);
    background-color: #dc3545
}

.badge-danger[href]:focus, .badge-danger[href]:hover {
    color: color-yiq(#dc3545);
    text-decoration: none;
    background-color: #bd2130
}

.badge-light {
    color: color-yiq(#f8f9fa);
    background-color: #f8f9fa
}

.badge-light[href]:focus, .badge-light[href]:hover {
    color: color-yiq(#f8f9fa);
    text-decoration: none;
    background-color: #dae0e5
}

.badge-dark {
    color: color-yiq(#343a40);
    background-color: #343a40
}

.badge-dark[href]:focus, .badge-dark[href]:hover {
    color: color-yiq(#343a40);
    text-decoration: none;
    background-color: #1d2124
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #c7d7f6;
    outline: 0;
    -webkit-box-shadow: 0 0 0 .2rem rgba(89,137,229,.25);
    box-shadow: 0 0 0 .2rem rgba(89,137,229,.25)
}

.form-control::-webkit-input-placeholder {
    color: #868e96
}

.form-control:-ms-input-placeholder {
    color: #868e96
}

.form-control::placeholder {
    color: #868e96
}

.form-control:disabled, .form-control[readonly] {
    background-color: #e9ecef
}

select.form-control:not([size]):not([multiple]) {
    height: calc(2rem + 8px)
}

.floating-label-wrap select.form-control:not([size]):not([multiple]) {
    height: calc(2rem + 2px)
}

.floating-label-wrap .textarea {
    min-height: 146px
}

.floating-label-wrap label {
    display: none
}

select.form-control:focus::-ms-value {
    color: #495057;
    background-color: #fff
}

.form-control-sm {
    padding: .4rem 1.2rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem
}

select.form-control-sm:not([size]):not([multiple]) {
    height: calc(2.1125rem + 2px)
}

.form-control-lg {
    padding: .8rem 1.8rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: .3rem
}

select.form-control-lg:not([size]):not([multiple]) {
    height: calc(3.475rem + 2px)
}

.valid-feedback {
    display: none;
    margin-top: .25rem;
    font-size: .875rem;
    color: #28a745
}

.valid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    width: 250px;
    padding: .5rem;
    margin-top: .1rem;
    font-size: .875rem;
    line-height: 1;
    color: #fff;
    background-color: rgba(40,167,69,.8);
    border-radius: .2rem
}

.custom-select.is-valid, .form-control.is-valid, .was-validated .custom-select:valid, .was-validated .form-control:valid {
    border-color: #28a745
}

.custom-select.is-valid:focus, .form-control.is-valid:focus, .was-validated .custom-select:valid:focus, .was-validated .form-control:valid:focus {
    -webkit-box-shadow: 0 0 0 .2rem rgba(40,167,69,.25);
    box-shadow: 0 0 0 .2rem rgba(40,167,69,.25)
}

.custom-select.is-valid ~ .valid-feedback, .custom-select.is-valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback, .form-control.is-valid ~ .valid-tooltip, .was-validated .custom-select:valid ~ .valid-feedback, .was-validated .custom-select:valid ~ .valid-tooltip, .was-validated .form-control:valid ~ .valid-feedback, .was-validated .form-control:valid ~ .valid-tooltip {
    display: block
}

.form-check-input.is-valid + .form-check-label, .was-validated .form-check-input:valid + .form-check-label {
    color: #28a745
}

.custom-control-input.is-valid ~ .custom-control-indicator, .was-validated .custom-control-input:valid ~ .custom-control-indicator {
    background-color: rgba(40,167,69,.25)
}

.custom-control-input.is-valid ~ .custom-control-description, .was-validated .custom-control-input:valid ~ .custom-control-description {
    color: #28a745
}

.custom-file-input.is-valid ~ .custom-file-control, .was-validated .custom-file-input:valid ~ .custom-file-control {
    border-color: #28a745
}

.custom-file-input.is-valid ~ .custom-file-control::before, .was-validated .custom-file-input:valid ~ .custom-file-control::before {
    border-color: inherit
}

.custom-file-input.is-valid:focus, .was-validated .custom-file-input:valid:focus {
    -webkit-box-shadow: 0 0 0 .2rem rgba(40,167,69,.25);
    box-shadow: 0 0 0 .2rem rgba(40,167,69,.25)
}

.invalid-feedback {
    display: none;
    margin-top: .25rem;
    font-size: .875rem;
    color: #dc3545
}

.invalid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    width: 250px;
    padding: .5rem;
    margin-top: .1rem;
    font-size: .875rem;
    line-height: 1;
    color: #fff;
    background-color: rgba(220,53,69,.8);
    border-radius: .2rem
}

.custom-select.is-invalid, .form-control.is-invalid, .was-validated .custom-select:invalid, .was-validated .form-control:invalid {
    border-color: #dc3545
}

.custom-select.is-invalid:focus, .form-control.is-invalid:focus, .was-validated .custom-select:invalid:focus, .was-validated .form-control:invalid:focus {
    -webkit-box-shadow: 0 0 0 .2rem rgba(220,53,69,.25);
    box-shadow: 0 0 0 .2rem rgba(220,53,69,.25)
}

.custom-select.is-invalid ~ .invalid-feedback, .custom-select.is-invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback, .form-control.is-invalid ~ .invalid-tooltip, .was-validated .custom-select:invalid ~ .invalid-feedback, .was-validated .custom-select:invalid ~ .invalid-tooltip, .was-validated .form-control:invalid ~ .invalid-feedback, .was-validated .form-control:invalid ~ .invalid-tooltip {
    display: block
}

.form-check-input.is-invalid + .form-check-label, .was-validated .form-check-input:invalid + .form-check-label {
    color: #dc3545
}

.custom-control-input.is-invalid ~ .custom-control-indicator, .was-validated .custom-control-input:invalid ~ .custom-control-indicator {
    background-color: rgba(220,53,69,.25)
}

.custom-control-input.is-invalid ~ .custom-control-description, .was-validated .custom-control-input:invalid ~ .custom-control-description {
    color: #dc3545
}

.custom-file-input.is-invalid ~ .custom-file-control, .was-validated .custom-file-input:invalid ~ .custom-file-control {
    border-color: #dc3545
}

.custom-file-input.is-invalid ~ .custom-file-control::before, .was-validated .custom-file-input:invalid ~ .custom-file-control::before {
    border-color: inherit
}

.custom-file-input.is-invalid:focus, .was-validated .custom-file-input:invalid:focus {
    -webkit-box-shadow: 0 0 0 .2rem rgba(220,53,69,.25);
    box-shadow: 0 0 0 .2rem rgba(220,53,69,.25)
}

.con-form {
    border: dashed 1px #7b5e0b !important
}

.con-form h5 {
    position: relative;
    font-size: 14px;
    margin-bottom: 25px
}

.con-form h5 span {
    background: #2a2a2a;
    margin: 0 15px;
    padding: 0 10px;
    z-index: 9;
    position: relative
}

.con-form h5:after {
    content: '';
    display: block;
    border-bottom: solid 1px #7b5e0b;
    position: absolute;
    right: 0;
    width: 100%;
    bottom: 5px
}

@media only screen and (min-width: 1200px) {
    .container {
        max-width: 1250px
    }
}

@media (max-width: 767px) {
    .video-banner {
        height: 80vh
    }

    .main-slider .img-banner {
        height: 76vh
    }

    .main-slider .inner-banner {
        height: 25vh;
        position: relative
    }

    .main-slider, .main-slider.h-auto {
        margin-top: 0
    }

    .top-bar .search-area form .submit {
        position: static;
        margin: 10px 0;
        width: 100%;
        color: #f3c84b;
        font-weight: 500
    }

    nav.navbar .navbar-brand {
        margin-left: 45px;
        height: 65px;
    }

    nav.navbar img.logo {
        max-height: 50px;
        max-width: 130px;
        object-fit: cover;
        min-height: auto;
        width: auto;
        height: auto;
        vertical-align: -webkit-baseline-middle;
    }

    footer.footer .copyrights {
        text-align: center
    }

    footer.footer .copyrights .text-right {
        text-align: center !important
    }

    footer .links, footer .newsletter {
        text-align: center
    }

    footer.footer {
        margin-bottom: 48px
    }

    footer .links ul li {
        display: inline-block;
        margin: 3px 8px
    }

    section {
        margin-bottom: -1px
    }

    .testimonial {
        padding: 25px
    }

    .carousel:after, .inner-banner:after {
        background: 0 0
    }

    .pro-summary {
        background: #000000c4;
        margin-top: -54px;
        padding-top: 11px
    }

    .pro-summary header {
        margin-bottom: 0
    }

    .main-slider .carousel-item img {
        height: 96vh
    }

    .pro-summary header h1 {
        font-size: 16px
    }

    .pro-summary header .loc {
        margin-bottom: 9px
    }

    .carousel-caption {
        top: 25%;
        left: 5%;
        right: 5%
    }

    .pro-info .pro-info-warp {
        margin-bottom: 10px
    }

    .property-single-author {
        padding: 15px 15px 10px
    }

    .light-video {
        width: 100%
    }

    .block {
        padding: 15px
    }

    .property-gallery .gallery .row [class*=col-]:nth-child(n+4) {
        display: none
    }

    .nav-item {
        border-top: solid 1px #ccc
    }
}

@media (max-width: 991px) {
    nav.navbar .navbar-collapse {
        max-height: 350px;
        overflow-y: auto;
        background: #fff;
    }

    nav.navbar .dropdown-menu {
        -webkit-box-shadow: none;
        box-shadow: none;
        margin-top: 0;
        padding-left: 15px
    }

    nav.navbar .megamenu {
        padding: 10px
    }

    .carousel-caption h5 {
        font-size: 1.7rem
    }
}

.enq_top {
    min-width: 300px
}

.enq_top>div {
    background: #000000db;
    border-radius: 5px
}

.enq_top .commission {
    margin: 22px -20px -10px
}

.enq_top .commission ul {
    list-style: none;
    margin: 0;
    padding: 0
}

.enq_top .commission ul li {
    float: left;
    width: 50%;
    text-align: center;
    margin-bottom: 1em
}

.enq_top .commission ul li i {
    display: block;
    font-size: 28px;
    color: #fff
}

.enq_top .commission ul li a {
    color: #bfbfbf;
    font-weight: 500;
    margin-top: 7px;
    display: block;
    text-decoration: none
}

.enq_top .commission ul li a:hover {
    text-decoration: none
}

.enq_top .commission ul li span {
    font-size: 9px;
    display: block;
    color: #f3c84b;
    text-transform: uppercase;
    line-height: 1;
    letter-spacing: .5px;
    position: relative;
    bottom: auto
}

.enq_top .text {
    color: #ccc;
    text-transform: uppercase;
    border-top: solid 1px #ccc;
    margin-bottom: 0;
    margin-top: 5px
}

.c-code {
    position: absolute;
    border: 0;
    left: 0;
    bottom: 0;
    font-size: 14px;
    color: #5f5a5a;
    z-index: 9999;
    background: 0 0;
    height: 27px;
    width: 85px
}

.c-code:focus {
    outline: 0
}

.floating-label {
    position: absolute;
    top: 0;
    left: 0;
    user-select: none;
    z-index: 5;
    margin: 0;
    padding: 0
}

.floating-label-field {
    color: rgba(44,62,80,.75);
    border-width: 0;
    z-index: 5
}

.floating-label-field.contactn {
    padding-left: 90px
}

.floating-label-field:focus {
    outline: 0;
    box-shadow: 0
}

.floating-label-field::placeholder {
    color: rgba(44,62,80,.5)
}

.floating-label,.floating-label-field {
    font: inherit;
    line-height: 1;
    display: block;
    width: 100%;
    min-height: inherit
}

.floating-label-field,.floating-label-wrap {
    position: relative;
    margin-bottom: 15px
}

.floating-label-field--s1 {
    transition: border-color .25s ease-in-out;
    color: #fff;
    border-bottom: 1px solid #e0d9d9;
    background-color: transparent
}

.floating-label-field--s1+.floating-label {
    transition: transform .25s,opacity .25s ease-in-out;
    transform-origin: 0 0;
    opacity: .5
}

.floating-label-field--s1:focus,.floating-label-field--s1:not(:placeholder-shown) {
    border-color: #408403
}

.floating-label-field--s1:focus+.floating-label,.floating-label-field--s1:not(:placeholder-shown)+.floating-label {
    transform: translate(0,-35%) scale(.9);
    opacity: .5
}

.floating-label-field--s1:valid:not(:placeholder-shown) {
    border-color: #e0d9d9
}

.floating-label-field--s1:invalid {
    border-color: red
}

.error {
    display: block;
    position: absolute;
    left: 0;
    bottom: -16px;
    font-size: 11px;
    color: #fb0303;
    font-weight: 500;
    letter-spacing: .5px
}

.floating-label-field--s1:invalid~.error {
    display: block
}

.floating-label-field--s1:not(textarea) {
    max-height: 4em
}

.floating-label-field--s1,.floating-label-field--s1+.floating-label {
    padding: 22px 0 5px;
    font-size: 14px
}

.mobiles .contactn+.floating-label {
    padding-left: 90px;
    transition: transform .25s,opacity .25s ease-in-out
}

.mobiles .floating-label-field--s1:focus+.floating-label,.mobiles .floating-label-field--s1:not(:placeholder-shown)+.floating-label {
    padding-left: 0
}

.floating-label-field--s1+.floating-label {
    z-index: 0
}

.floating-label-field--s1::placeholder {
    color: transparent
}

.quick_enq {
    padding: 4rem 0
}

.floating-label-wrap,.quick-input.floating-label-field {
    margin-bottom: 22px
}

.quick-input input,.quick-input textarea {
    border: 1px solid #ccc!important;
    color: #000;
    padding-left: 10px;
    padding-top: .375rem;
    padding-right: .75rem;
    line-height: 1.3
}

.quick-input textarea {
    min-height: 185px
}

.quick-input .floating-label {
    opacity: 1;
    color: #8e8e8e;
    font-size: 16px
}

.quick-input .floating-label-field--s1+.floating-label {
    padding-left: 12px;
    transform: translate(0,-10%) scale(.9)
}

.quick-input .contactn+.floating-label {
    padding-left: 100px
}

.quick-input .floating-label-field--s1:focus+.floating-label,.quick-input .floating-label-field--s1:not(:placeholder-shown)+.floating-label {
    transform: translate(0,-35%) scale(.9);
    opacity: 1
}

.quick-input .contactn.floating-label-field--s1:focus+.floating-label,.quick-input .contactn.floating-label-field--s1:not(:placeholder-shown)+.floating-label {
    padding-left: 15px;
    transform: translate(0,-35%) scale(.9);
    opacity: 1
}

.quick-input .c-code {
    position: absolute;
    border: 0;
    left: 10px;
    bottom: 2px;
    font-size: 14px;
    color: #5f5a5a;
    z-index: 9999;
    background: 0 0;
    height: 27px;
    width: 75px
}

.quick_enq .btn {
    color: #000
}

.enq_top .btn {
    padding: 5px;
    color: #000
}

@media (max-width: 767px) {
    .quick-input textarea {
        min-height:95px
    }
}

.cover {
    object-fit: cover;
    height: 100%;
    width: 100%
}

.imgHolder {
    height: 260px;
    overflow: hidden;
    position: relative
}

#theGrid .box {
    cursor: pointer;
    margin-bottom: 10px;
    padding: 0 5px;
    min-height: 390px
}

p.article_name {
    font-size: 1.2rem;
    line-height: 24px;
    color: #0479c3;
    padding: 5px
}

#theGrid .imgHolder:hover .description-box {
    background-color: rgba(217,38,44,.8);
    cursor: pointer
}

#theGrid .in-box {
    width: 100%;
    height: 260px;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2
}

#theGrid .box-text p {
    opacity: 0;
    color: #fff;
    font-size: 32px;
    margin-bottom: 0
}

#theGrid .imgHolder:hover .box-text p {
    opacity: 1
}

#theGrid .imgHolder:hover .in-box {
    background-color: rgba(41,141,204,.701961);
    cursor: pointer
}

@media (max-width: 600px) {
    #theGrid .box {
        width:100%
    }
}

</style>