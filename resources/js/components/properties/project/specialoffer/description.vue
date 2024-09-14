<script setup>
    import { ref, onMounted } from 'vue';
    import { useRoute } from 'vue-router';
    import axios from 'axios';
    import Contact from '../Component/Contact.vue'; 
    // import thumb2 from '@/assets/img/pdf.jpg';
    
    const route = useRoute();
    const special = ref({}); 
    
    onMounted(async () => {
      const slug = route.params.slug;
      console.log("Fetching data for slug:", slug);
      try {
        const response = await axios.get(`/api/special/${slug}`);
        console.log("API response:", response.data);
        special.value = response.data;
      } catch (error) {
        console.error("Error fetching special data:", error);
      }
    });
    </script>
    
    <template>
        <section class="property-single">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 pb-3">
                <div v-if="error" class="alert alert-danger">{{ error }}</div>
                <div v-else>
                  <div class="property-single-features card block mb-3">
                    <h2 class="h4 has-line">Best Deals on Properties</h2> 
                    <p v-html="special.description"></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 pb-3" id="enqs">
                <Contact />
                <!-- <div class="card download-new border-0">
                  <input type="hidden" name=""  value="" />
                  <div class="card-header">
                    Download
                    <img :src="thumb2" width="18" height="18" alt="Download" />
                  </div>
                  <div class="card-body p-0">
                    <ul>
                      <li><a href="" >
                          <img :src="thumb2" alt="Brochure" width="25" height="25" class="mr-2" />
                          Brochure
                        </a></li>
                      <li><a href="">
                          <img :src="thumb2" alt="Floor Plan" width="25" height="25" class="mr-2" />
                          Floor Plan
                        </a></li>
                      <li><a href="">
                          <img :src="thumb2" alt="Payment Plan" width="25" height="25" class="mr-2" />
                          Payment Plan
                        </a></li>
                      <li><a href="">
                          <img :src="thumb2" alt="Mortgage EMI Calculator" width="25" height="25" class="mr-2" />
                          Mortgage Calculator
                        </a></li>
                      <li  class="d-none"></li>
                    </ul>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </section>
      </template>
<style scoped>
    *,
    ::after,
    ::before {
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

    dialog,
    figure,
    footer,
    header,
    main,
    nav,
    section {
        display: block
    }

    body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
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

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-top: 0;
        margin-bottom: .5rem
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem
    }

    dl,
    ol,
    ul {
        margin-top: 0;
        margin-bottom: 1rem
    }

    ol ol,
    ol ul,
    ul ol,
    ul ul {
        margin-bottom: 0
    }

    dd {
        margin-bottom: .5rem;
        margin-left: 0
    }

    b {
        font-weight: bolder
    }

    small {
        font-size: 80%
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

    a:not([href]):not([tabindex]):focus,
    a:not([href]):not([tabindex]):hover {
        color: inherit;
        text-decoration: none
    }

    a:not([href]):not([tabindex]):focus {
        outline: 0
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

    [type=reset],
    [type=submit],
    button,
    html [type=button] {
        -webkit-appearance: button
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

    input[type=date],
    input[type=datetime-local],
    input[type=month],
    input[type=time] {
        -webkit-appearance: listbox
    }

    textarea {
        overflow: auto;
        resize: vertical
    }

    [type=number]::-webkit-inner-spin-button,
    [type=number]::-webkit-outer-spin-button {
        height: auto
    }

    [type=search] {
        outline-offset: -2px;
        -webkit-appearance: none
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
        display: list-item;
        cursor: pointer
    }

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

    .small,
    small {
        font-size: 80%;
        font-weight: 400
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

    .img-fluid {
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

    .container {
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

    .no-gutters>.col,
    .no-gutters>[class*=col-] {
        padding-right: 0;
        padding-left: 0
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
    .col-sm-auto,
    .col-xl,
    .col-xl-1,
    .col-xl-10,
    .col-xl-11,
    .col-xl-12,
    .col-xl-2,
    .col-xl-3,
    .col-xl-4,
    .col-xl-5,
    .col-xl-6,
    .col-xl-7,
    .col-xl-8,
    .col-xl-9,
    .col-xl-auto {
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

    @media(min-width: 576px) {
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
    }

    @media(min-width: 768px) {
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
    }

    @media(min-width: 992px) {
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
    }

    @media(min-width: 1200px) {
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
    }

    .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 1rem;
        background-color: transparent
    }

    .table td,
    .table th {
        padding: .75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6
    }

    .table tbody+tbody {
        border-top: 2px solid #dee2e6
    }

    .table .table {
        background-color: #fff
    }

    .table-sm td,
    .table-sm th {
        padding: .3rem
    }

    .table-bordered {
        border: 1px solid #dee2e6
    }

    .table-bordered td,
    .table-bordered th {
        border: 1px solid #dee2e6
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, .05)
    }

    .table-primary,
    .table-primary>td,
    .table-primary>th {
        background-color: #b8daff
    }

    .table-info,
    .table-info>td,
    .table-info>th {
        background-color: #bee5eb
    }

    .table-danger,
    .table-danger>td,
    .table-danger>th {
        background-color: #f5c6cb
    }

    .table-light,
    .table-light>td,
    .table-light>th {
        background-color: #fdfdfe
    }

    .table-dark,
    .table-dark>td,
    .table-dark>th {
        background-color: #c6c8ca
    }

    .table-active,
    .table-active>td,
    .table-active>th {
        background-color: rgba(0, 0, 0, .075)
    }

    .table-dark {
        color: #fff;
        background-color: #212529
    }

    .table-dark td,
    .table-dark th {
        border-color: #32383e
    }

    .table-dark.table-bordered {
        border: 0
    }

    .table-dark.table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(255, 255, 255, .05)
    }

    @media(max-width: 575.98px) {
        .table-responsive-sm {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar
        }

        .table-responsive-sm>.table-bordered {
            border: 0
        }
    }

    @media(max-width: 767.98px) {
        .table-responsive-md {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar
        }

        .table-responsive-md>.table-bordered {
            border: 0
        }
    }

    @media(max-width: 991.98px) {
        .table-responsive-lg {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar
        }

        .table-responsive-lg>.table-bordered {
            border: 0
        }
    }

    @media(max-width: 1199.98px) {
        .table-responsive-xl {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar
        }

        .table-responsive-xl>.table-bordered {
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

    .table-responsive>.table-bordered {
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
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
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

    .form-control:disabled,
    .form-control[readonly] {
        background-color: #e9ecef;
        opacity: 1
    }

    select.form-control:not([size]):not([multiple]) {
        height: calc(2.25rem+2px)
    }

    select.form-control:focus::-ms-value {
        color: #495057;
        background-color: #fff
    }

    .col-form-label {
        padding-top: calc(.375rem+1px);
        padding-bottom: calc(.375rem+1px);
        margin-bottom: 0;
        font-size: inherit;
        line-height: 1.5
    }

    .col-form-label-lg {
        padding-top: calc(.5rem+1px);
        padding-bottom: calc(.5rem+1px);
        font-size: 1.25rem;
        line-height: 1.5
    }

    .col-form-label-sm {
        padding-top: calc(.25rem+1px);
        padding-bottom: calc(.25rem+1px);
        font-size: .875rem;
        line-height: 1.5
    }

    .form-control-sm,
    .input-group-sm>.form-control,
    .input-group-sm>.input-group-prepend>.btn,
    .input-group-sm>.input-group-prepend>.input-group-text {
        padding: .25rem .5rem;
        font-size: .875rem;
        line-height: 1.5;
        border-radius: .2rem
    }

    .input-group-sm>.input-group-prepend>select.btn:not([size]):not([multiple]),
    .input-group-sm>.input-group-prepend>select.input-group-text:not([size]):not([multiple]),
    .input-group-sm>select.form-control:not([size]):not([multiple]),
    select.form-control-sm:not([size]):not([multiple]) {
        height: calc(1.8125rem+2px)
    }

    .form-control-lg,
    .input-group-lg>.form-control,
    .input-group-lg>.input-group-prepend>.btn,
    .input-group-lg>.input-group-prepend>.input-group-text {
        padding: .5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: .3rem
    }

    .input-group-lg>.input-group-prepend>select.btn:not([size]):not([multiple]),
    .input-group-lg>.input-group-prepend>select.input-group-text:not([size]):not([multiple]),
    .input-group-lg>select.form-control:not([size]):not([multiple]),
    select.form-control-lg:not([size]):not([multiple]) {
        height: calc(2.875rem+2px)
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

    .form-row>.col,
    .form-row>[class*=col-] {
        padding-right: 5px;
        padding-left: 5px
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

    @media(min-width: 576px) {
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

        .form-inline .input-group {
            width: auto
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
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    .btn:focus,
    .btn:hover {
        text-decoration: none
    }

    .btn:focus {
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
    }

    .btn:disabled {
        opacity: .65
    }

    .btn:not(:disabled):not(.disabled) {
        cursor: pointer
    }

    .btn:not(:disabled):not(.disabled).active,
    .btn:not(:disabled):not(.disabled):active {
        background-image: none
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

    .btn-primary:focus {
        box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
    }

    .btn-primary:disabled {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff
    }

    .btn-primary:not(:disabled):not(.disabled).active,
    .btn-primary:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #0062cc;
        border-color: #005cbf
    }

    .btn-primary:not(:disabled):not(.disabled).active:focus,
    .btn-primary:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
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

    .btn-info:focus {
        box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
    }

    .btn-info:disabled {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8
    }

    .btn-info:not(:disabled):not(.disabled).active,
    .btn-info:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #117a8b;
        border-color: #10707f
    }

    .btn-info:not(:disabled):not(.disabled).active:focus,
    .btn-info:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
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

    .btn-danger:focus {
        box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
    }

    .btn-danger:disabled {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545
    }

    .btn-danger:not(:disabled):not(.disabled).active,
    .btn-danger:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #bd2130;
        border-color: #b21f2d
    }

    .btn-danger:not(:disabled):not(.disabled).active:focus,
    .btn-danger:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
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

    .btn-light:focus {
        box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
    }

    .btn-light:disabled {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa
    }

    .btn-light:not(:disabled):not(.disabled).active,
    .btn-light:not(:disabled):not(.disabled):active {
        color: #212529;
        background-color: #dae0e5;
        border-color: #d3d9df
    }

    .btn-light:not(:disabled):not(.disabled).active:focus,
    .btn-light:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
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

    .btn-dark:focus {
        box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
    }

    .btn-dark:disabled {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40
    }

    .btn-dark:not(:disabled):not(.disabled).active,
    .btn-dark:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #1d2124;
        border-color: #171a1d
    }

    .btn-dark:not(:disabled):not(.disabled).active:focus,
    .btn-dark:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
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

    .btn-link:focus {
        text-decoration: underline;
        border-color: transparent;
        box-shadow: none
    }

    .btn-link:disabled {
        color: #6c757d
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
        display: block;
        width: 100%
    }

    .btn-block+.btn-block {
        margin-top: .5rem
    }

    input[type=button].btn-block,
    input[type=reset].btn-block,
    input[type=submit].btn-block {
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

    .btn-group {
        position: relative;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        vertical-align: middle
    }

    .btn-group>.btn {
        position: relative;
        -webkit-box-flex: 0;
        -ms-flex: 0 1 auto;
        flex: 0 1 auto
    }

    .btn-group>.btn:hover {
        z-index: 1
    }

    .btn-group>.btn.active,
    .btn-group>.btn:active,
    .btn-group>.btn:focus {
        z-index: 1
    }

    .btn-group .btn+.btn,
    .btn-group .btn+.btn-group,
    .btn-group .btn-group+.btn,
    .btn-group .btn-group+.btn-group {
        margin-left: -1px
    }

    .btn-group>.btn:first-child {
        margin-left: 0
    }

    .btn-group>.btn-group:not(:last-child)>.btn,
    .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .btn-group>.btn-group:not(:first-child)>.btn,
    .btn-group>.btn:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .btn-group-toggle>.btn,
    .btn-group-toggle>.btn-group>.btn {
        margin-bottom: 0
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

    .input-group>.form-control {
        position: relative;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        width: 1%;
        margin-bottom: 0
    }

    .input-group>.form-control:focus {
        z-index: 3
    }

    .input-group>.form-control+.form-control {
        margin-left: -1px
    }

    .input-group>.form-control:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .input-group>.form-control:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .input-group-prepend {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
    }

    .input-group-prepend .btn {
        position: relative;
        z-index: 2
    }

    .input-group-prepend .btn+.btn,
    .input-group-prepend .btn+.input-group-text,
    .input-group-prepend .input-group-text+.btn,
    .input-group-prepend .input-group-text+.input-group-text {
        margin-left: -1px
    }

    .input-group-prepend {
        margin-right: -1px
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

    .input-group-text input[type=checkbox],
    .input-group-text input[type=radio] {
        margin-top: 0
    }

    .input-group>.input-group-prepend>.btn,
    .input-group>.input-group-prepend>.input-group-text {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .input-group>.input-group-prepend:first-child>.btn:not(:first-child),
    .input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child),
    .input-group>.input-group-prepend:not(:first-child)>.btn,
    .input-group>.input-group-prepend:not(:first-child)>.input-group-text {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
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

    .nav-link:focus,
    .nav-link:hover {
        text-decoration: none
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

    .nav-tabs .nav-link:focus,
    .nav-tabs .nav-link:hover {
        border-color: #e9ecef #e9ecef #dee2e6
    }

    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        color: #495057;
        background-color: #fff;
        border-color: #dee2e6 #dee2e6 #fff
    }

    .tab-content>.tab-pane {
        display: none
    }

    .tab-content>.active {
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

    .navbar>.container,
    .navbar>.container-fluid {
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

    .navbar-brand:focus,
    .navbar-brand:hover {
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

    .navbar-toggler:focus,
    .navbar-toggler:hover {
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

    @media(max-width: 575.98px) {

        .navbar-expand-sm>.container,
        .navbar-expand-sm>.container-fluid {
            padding-right: 0;
            padding-left: 0
        }
    }

    @media(min-width: 576px) {
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

        .navbar-expand-sm .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand-sm>.container,
        .navbar-expand-sm>.container-fluid {
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
    }

    @media(max-width: 767.98px) {

        .navbar-expand-md>.container,
        .navbar-expand-md>.container-fluid {
            padding-right: 0;
            padding-left: 0
        }
    }

    @media(min-width: 768px) {
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

        .navbar-expand-md .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand-md>.container,
        .navbar-expand-md>.container-fluid {
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
    }

    @media(max-width: 991.98px) {

        .navbar-expand-lg>.container,
        .navbar-expand-lg>.container-fluid {
            padding-right: 0;
            padding-left: 0
        }
    }

    @media(min-width: 992px) {
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

        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand-lg>.container,
        .navbar-expand-lg>.container-fluid {
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
    }

    @media(max-width: 1199.98px) {

        .navbar-expand-xl>.container,
        .navbar-expand-xl>.container-fluid {
            padding-right: 0;
            padding-left: 0
        }
    }

    @media(min-width: 1200px) {
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

        .navbar-expand-xl .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand-xl>.container,
        .navbar-expand-xl>.container-fluid {
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

    .navbar-expand>.container,
    .navbar-expand>.container-fluid {
        padding-right: 0;
        padding-left: 0
    }

    .navbar-expand .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row
    }

    .navbar-expand .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
    }

    .navbar-expand>.container,
    .navbar-expand>.container-fluid {
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

    .navbar-light .navbar-brand {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-brand:focus,
    .navbar-light .navbar-brand:hover {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-nav .nav-link {
        color: rgba(0, 0, 0, .5)
    }

    .navbar-light .navbar-nav .nav-link:focus,
    .navbar-light .navbar-nav .nav-link:hover {
        color: rgba(0, 0, 0, .7)
    }

    .navbar-light .navbar-nav .active>.nav-link,
    .navbar-light .navbar-nav .nav-link.active,
    .navbar-light .navbar-nav .nav-link.show,
    .navbar-light .navbar-nav .show>.nav-link {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-toggler {
        color: rgba(0, 0, 0, .5);
        border-color: rgba(0, 0, 0, .1)
    }

    .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3CsvgviewBox='003030'xmlns='http://www.w3.org/2000/svg'%3E%3Cpathstroke='rgba(0,0,0,0.5)'stroke-width='2'stroke-linecap='round'stroke-miterlimit='10'd='M47h22M415h22M423h22'/%3E%3C/svg%3E")
    }

    .navbar-light .navbar-text {
        color: rgba(0, 0, 0, .5)
    }

    .navbar-light .navbar-text a {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-text a:focus,
    .navbar-light .navbar-text a:hover {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-dark .navbar-brand {
        color: #fff
    }

    .navbar-dark .navbar-brand:focus,
    .navbar-dark .navbar-brand:hover {
        color: #fff
    }

    .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, .5)
    }

    .navbar-dark .navbar-nav .nav-link:focus,
    .navbar-dark .navbar-nav .nav-link:hover {
        color: rgba(255, 255, 255, .75)
    }

    .navbar-dark .navbar-nav .active>.nav-link,
    .navbar-dark .navbar-nav .nav-link.active,
    .navbar-dark .navbar-nav .nav-link.show,
    .navbar-dark .navbar-nav .show>.nav-link {
        color: #fff
    }

    .navbar-dark .navbar-toggler {
        color: rgba(255, 255, 255, .5);
        border-color: rgba(255, 255, 255, .1)
    }

    .navbar-dark .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3CsvgviewBox='003030'xmlns='http://www.w3.org/2000/svg'%3E%3Cpathstroke='rgba(255,255,255,0.5)'stroke-width='2'stroke-linecap='round'stroke-miterlimit='10'd='M47h22M415h22M423h22'/%3E%3C/svg%3E")
    }

    .navbar-dark .navbar-text {
        color: rgba(255, 255, 255, .5)
    }

    .navbar-dark .navbar-text a {
        color: #fff
    }

    .navbar-dark .navbar-text a:focus,
    .navbar-dark .navbar-text a:hover {
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
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: .25rem
    }

    .card>.list-group:first-child .list-group-item:first-child {
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem
    }

    .card>.list-group:last-child .list-group-item:last-child {
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

    .card-text:last-child {
        margin-bottom: 0
    }

    .card-link:hover {
        text-decoration: none
    }

    .card-link+.card-link {
        margin-left: 1.25rem
    }

    .card-header {
        padding: .75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, .03);
        border-bottom: 1px solid rgba(0, 0, 0, .125)
    }

    .card-header:first-child {
        border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
    }

    .card-header+.list-group .list-group-item:first-child {
        border-top: 0
    }

    .card-footer {
        padding: .75rem 1.25rem;
        background-color: rgba(0, 0, 0, .03);
        border-top: 1px solid rgba(0, 0, 0, .125)
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

    .card-group {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column
    }

    .card-group>.card {
        margin-bottom: 15px
    }

    @media(min-width: 576px) {
        .card-group {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap
        }

        .card-group>.card {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 0;
            flex: 1 0 0;
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

        .card-group>.card:not(:first-child):not(:last-child):not(:only-child) {
            border-radius: 0
        }

        .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-footer,
        .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-header,
        .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-top {
            border-radius: 0
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

    .breadcrumb-item+.breadcrumb-item::before {
        display: inline-block;
        padding-right: .5rem;
        padding-left: .5rem;
        color: #6c757d;
        content: "/"
    }

    .breadcrumb-item+.breadcrumb-item:hover::before {
        text-decoration: underline
    }

    .breadcrumb-item+.breadcrumb-item:hover::before {
        text-decoration: none
    }

    .breadcrumb-item.active {
        color: #6c757d
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
        box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
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

    .list-group-item-action:focus,
    .list-group-item-action:hover {
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
        border: 1px solid rgba(0, 0, 0, .125)
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

    .list-group-item:focus,
    .list-group-item:hover {
        z-index: 1;
        text-decoration: none
    }

    .list-group-item:disabled {
        color: #6c757d;
        background-color: #fff
    }

    .list-group-item.active {
        z-index: 2;
        color: #fff;
        background-color: #007bff;
        border-color: #007bff
    }

    .list-group-item-primary {
        color: #004085;
        background-color: #b8daff
    }

    .list-group-item-primary.list-group-item-action:focus,
    .list-group-item-primary.list-group-item-action:hover {
        color: #004085;
        background-color: #9fcdff
    }

    .list-group-item-primary.list-group-item-action.active {
        color: #fff;
        background-color: #004085;
        border-color: #004085
    }

    .list-group-item-info {
        color: #0c5460;
        background-color: #bee5eb
    }

    .list-group-item-info.list-group-item-action:focus,
    .list-group-item-info.list-group-item-action:hover {
        color: #0c5460;
        background-color: #abdde5
    }

    .list-group-item-info.list-group-item-action.active {
        color: #fff;
        background-color: #0c5460;
        border-color: #0c5460
    }

    .list-group-item-danger {
        color: #721c24;
        background-color: #f5c6cb
    }

    .list-group-item-danger.list-group-item-action:focus,
    .list-group-item-danger.list-group-item-action:hover {
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

    .list-group-item-light.list-group-item-action:focus,
    .list-group-item-light.list-group-item-action:hover {
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

    .list-group-item-dark.list-group-item-action:focus,
    .list-group-item-dark.list-group-item-action:hover {
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

    .close:focus,
    .close:hover {
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
        transition: transform .3s ease-out, -webkit-transform .3s ease-out;
        -webkit-transform: translate(0, -25%);
        transform: translate(0, -25%)
    }

    .modal.show .modal-dialog {
        -webkit-transform: translate(0, 0);
        transform: translate(0, 0)
    }

    .modal-dialog-centered {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        min-height: calc(100% -(.5rem * 2))
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
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: .3rem;
        outline: 0
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

    .modal-footer> :not(:first-child) {
        margin-left: .25rem
    }

    .modal-footer> :not(:last-child) {
        margin-right: .25rem
    }

    @media(min-width: 576px) {
        .modal-dialog {
            max-width: 500px;
            margin: 1.75rem auto
        }

        .modal-dialog-centered {
            min-height: calc(100% -(1.75rem * 2))
        }

        .modal-sm {
            max-width: 300px
        }
    }

    @media(min-width: 992px) {
        .modal-lg {
            max-width: 800px
        }
    }

    @supports((-webkit-transform-style: preserve-3d) or(transform-style:preserve-3d)) {

        .carousel-item-next.carousel-item-left,
        .carousel-item-prev.carousel-item-right {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @supports((-webkit-transform-style: preserve-3d) or(transform-style:preserve-3d)) {

        .active.carousel-item-right,
        .carousel-item-next {
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
    }

    @supports((-webkit-transform-style: preserve-3d) or(transform-style:preserve-3d)) {

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

    .bg-primary {
        background-color: #007bff !important
    }

    a.bg-primary:focus,
    a.bg-primary:hover,
    button.bg-primary:focus,
    button.bg-primary:hover {
        background-color: #0062cc !important
    }

    .bg-info {
        background-color: #17a2b8 !important
    }

    a.bg-info:focus,
    a.bg-info:hover,
    button.bg-info:focus,
    button.bg-info:hover {
        background-color: #117a8b !important
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

    .border-right {
        border-right: 1px solid #dee2e6 !important
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

    .border-left-0 {
        border-left: 0 !important
    }

    .border-primary {
        border-color: #007bff !important
    }

    .border-info {
        border-color: #17a2b8 !important
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

    @media(min-width: 576px) {
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

    @media(min-width: 768px) {
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

    @media(min-width: 992px) {
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

    @media(min-width: 1200px) {
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

    .flex-row {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: normal !important;
        -ms-flex-direction: row !important;
        flex-direction: row !important
    }

    .flex-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important
    }

    .justify-content-start {
        -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
        justify-content: flex-start !important
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

    .align-items-start {
        -webkit-box-align: start !important;
        -ms-flex-align: start !important;
        align-items: flex-start !important
    }

    .align-items-center {
        -webkit-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important
    }

    .align-content-start {
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important
    }

    .align-content-center {
        -ms-flex-line-pack: center !important;
        align-content: center !important
    }

    .align-content-between {
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important
    }

    @media(min-width: 576px) {
        .flex-sm-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important
        }

        .flex-sm-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important
        }

        .justify-content-sm-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important
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

        .align-items-sm-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important
        }

        .align-items-sm-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important
        }

        .align-content-sm-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important
        }

        .align-content-sm-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important
        }

        .align-content-sm-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important
        }
    }

    @media(min-width: 768px) {
        .flex-md-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important
        }

        .flex-md-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important
        }

        .justify-content-md-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important
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

        .align-items-md-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important
        }

        .align-items-md-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important
        }

        .align-content-md-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important
        }

        .align-content-md-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important
        }

        .align-content-md-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important
        }
    }

    @media(min-width: 992px) {
        .flex-lg-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important
        }

        .flex-lg-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important
        }

        .justify-content-lg-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important
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

        .align-items-lg-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important
        }

        .align-items-lg-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important
        }

        .align-content-lg-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important
        }

        .align-content-lg-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important
        }

        .align-content-lg-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important
        }
    }

    @media(min-width: 1200px) {
        .flex-xl-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important
        }

        .flex-xl-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important
        }

        .justify-content-xl-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important
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

        .align-items-xl-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important
        }

        .align-items-xl-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important
        }

        .align-content-xl-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important
        }

        .align-content-xl-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important
        }

        .align-content-xl-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important
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

    @media(min-width: 576px) {
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

    @media(min-width: 768px) {
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

    @media(min-width: 992px) {
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

    @media(min-width: 1200px) {
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

    @supports((position: -webkit-sticky) or(position:sticky)) {
        .sticky-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020
        }
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

    .m-0 {
        margin: 0 !important
    }

    .mt-0 {
        margin-top: 0 !important
    }

    .mr-0,
    .mx-0 {
        margin-right: 0 !important
    }

    .mb-0 {
        margin-bottom: 0 !important
    }

    .ml-0,
    .mx-0 {
        margin-left: 0 !important
    }

    .m-1 {
        margin: .25rem !important
    }

    .mt-1 {
        margin-top: .25rem !important
    }

    .mr-1,
    .mx-1 {
        margin-right: .25rem !important
    }

    .mb-1 {
        margin-bottom: .25rem !important
    }

    .ml-1,
    .mx-1 {
        margin-left: .25rem !important
    }

    .m-2 {
        margin: .5rem !important
    }

    .mt-2 {
        margin-top: .5rem !important
    }

    .mr-2,
    .mx-2 {
        margin-right: .5rem !important
    }

    .mb-2 {
        margin-bottom: .5rem !important
    }

    .ml-2,
    .mx-2 {
        margin-left: .5rem !important
    }

    .m-3 {
        margin: 1rem !important
    }

    .mt-3 {
        margin-top: 1rem !important
    }

    .mr-3,
    .mx-3 {
        margin-right: 1rem !important
    }

    .mb-3 {
        margin-bottom: 1rem !important
    }

    .ml-3,
    .mx-3 {
        margin-left: 1rem !important
    }

    .m-4 {
        margin: 1.5rem !important
    }

    .mt-4 {
        margin-top: 1.5rem !important
    }

    .mr-4,
    .mx-4 {
        margin-right: 1.5rem !important
    }

    .mb-4 {
        margin-bottom: 1.5rem !important
    }

    .ml-4,
    .mx-4 {
        margin-left: 1.5rem !important
    }

    .m-5 {
        margin: 3rem !important
    }

    .mt-5 {
        margin-top: 3rem !important
    }

    .mr-5,
    .mx-5 {
        margin-right: 3rem !important
    }

    .mb-5 {
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

    .px-0 {
        padding-right: 0 !important
    }

    .pb-0,
    .py-0 {
        padding-bottom: 0 !important
    }

    .pl-0,
    .px-0 {
        padding-left: 0 !important
    }

    .p-1 {
        padding: .25rem !important
    }

    .pt-1,
    .py-1 {
        padding-top: .25rem !important
    }

    .px-1 {
        padding-right: .25rem !important
    }

    .pb-1,
    .py-1 {
        padding-bottom: .25rem !important
    }

    .pl-1,
    .px-1 {
        padding-left: .25rem !important
    }

    .p-2 {
        padding: .5rem !important
    }

    .pt-2,
    .py-2 {
        padding-top: .5rem !important
    }

    .px-2 {
        padding-right: .5rem !important
    }

    .pb-2,
    .py-2 {
        padding-bottom: .5rem !important
    }

    .pl-2,
    .px-2 {
        padding-left: .5rem !important
    }

    .p-3 {
        padding: 1rem !important
    }

    .pt-3,
    .py-3 {
        padding-top: 1rem !important
    }

    .px-3 {
        padding-right: 1rem !important
    }

    .pb-3,
    .py-3 {
        padding-bottom: 1rem !important
    }

    .pl-3,
    .px-3 {
        padding-left: 1rem !important
    }

    .p-4 {
        padding: 1.5rem !important
    }

    .pt-4,
    .py-4 {
        padding-top: 1.5rem !important
    }

    .px-4 {
        padding-right: 1.5rem !important
    }

    .pb-4,
    .py-4 {
        padding-bottom: 1.5rem !important
    }

    .pl-4,
    .px-4 {
        padding-left: 1.5rem !important
    }

    .p-5 {
        padding: 3rem !important
    }

    .pt-5,
    .py-5 {
        padding-top: 3rem !important
    }

    .px-5 {
        padding-right: 3rem !important
    }

    .pb-5,
    .py-5 {
        padding-bottom: 3rem !important
    }

    .pl-5,
    .px-5 {
        padding-left: 3rem !important
    }

    .m-auto {
        margin: auto !important
    }

    .mt-auto {
        margin-top: auto !important
    }

    .mr-auto,
    .mx-auto {
        margin-right: auto !important
    }

    .mb-auto {
        margin-bottom: auto !important
    }

    .ml-auto,
    .mx-auto {
        margin-left: auto !important
    }

    @media(min-width: 576px) {
        .m-sm-0 {
            margin: 0 !important
        }

        .mt-sm-0 {
            margin-top: 0 !important
        }

        .mr-sm-0,
        .mx-sm-0 {
            margin-right: 0 !important
        }

        .mb-sm-0 {
            margin-bottom: 0 !important
        }

        .ml-sm-0,
        .mx-sm-0 {
            margin-left: 0 !important
        }

        .m-sm-1 {
            margin: .25rem !important
        }

        .mt-sm-1 {
            margin-top: .25rem !important
        }

        .mr-sm-1,
        .mx-sm-1 {
            margin-right: .25rem !important
        }

        .mb-sm-1 {
            margin-bottom: .25rem !important
        }

        .ml-sm-1,
        .mx-sm-1 {
            margin-left: .25rem !important
        }

        .m-sm-2 {
            margin: .5rem !important
        }

        .mt-sm-2 {
            margin-top: .5rem !important
        }

        .mr-sm-2,
        .mx-sm-2 {
            margin-right: .5rem !important
        }

        .mb-sm-2 {
            margin-bottom: .5rem !important
        }

        .ml-sm-2,
        .mx-sm-2 {
            margin-left: .5rem !important
        }

        .m-sm-3 {
            margin: 1rem !important
        }

        .mt-sm-3 {
            margin-top: 1rem !important
        }

        .mr-sm-3,
        .mx-sm-3 {
            margin-right: 1rem !important
        }

        .mb-sm-3 {
            margin-bottom: 1rem !important
        }

        .ml-sm-3,
        .mx-sm-3 {
            margin-left: 1rem !important
        }

        .m-sm-4 {
            margin: 1.5rem !important
        }

        .mt-sm-4 {
            margin-top: 1.5rem !important
        }

        .mr-sm-4,
        .mx-sm-4 {
            margin-right: 1.5rem !important
        }

        .mb-sm-4 {
            margin-bottom: 1.5rem !important
        }

        .ml-sm-4,
        .mx-sm-4 {
            margin-left: 1.5rem !important
        }

        .m-sm-5 {
            margin: 3rem !important
        }

        .mt-sm-5 {
            margin-top: 3rem !important
        }

        .mr-sm-5,
        .mx-sm-5 {
            margin-right: 3rem !important
        }

        .mb-sm-5 {
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

        .px-sm-0 {
            padding-right: 0 !important
        }

        .pb-sm-0,
        .py-sm-0 {
            padding-bottom: 0 !important
        }

        .pl-sm-0,
        .px-sm-0 {
            padding-left: 0 !important
        }

        .p-sm-1 {
            padding: .25rem !important
        }

        .pt-sm-1,
        .py-sm-1 {
            padding-top: .25rem !important
        }

        .px-sm-1 {
            padding-right: .25rem !important
        }

        .pb-sm-1,
        .py-sm-1 {
            padding-bottom: .25rem !important
        }

        .pl-sm-1,
        .px-sm-1 {
            padding-left: .25rem !important
        }

        .p-sm-2 {
            padding: .5rem !important
        }

        .pt-sm-2,
        .py-sm-2 {
            padding-top: .5rem !important
        }

        .px-sm-2 {
            padding-right: .5rem !important
        }

        .pb-sm-2,
        .py-sm-2 {
            padding-bottom: .5rem !important
        }

        .pl-sm-2,
        .px-sm-2 {
            padding-left: .5rem !important
        }

        .p-sm-3 {
            padding: 1rem !important
        }

        .pt-sm-3,
        .py-sm-3 {
            padding-top: 1rem !important
        }

        .px-sm-3 {
            padding-right: 1rem !important
        }

        .pb-sm-3,
        .py-sm-3 {
            padding-bottom: 1rem !important
        }

        .pl-sm-3,
        .px-sm-3 {
            padding-left: 1rem !important
        }

        .p-sm-4 {
            padding: 1.5rem !important
        }

        .pt-sm-4,
        .py-sm-4 {
            padding-top: 1.5rem !important
        }

        .px-sm-4 {
            padding-right: 1.5rem !important
        }

        .pb-sm-4,
        .py-sm-4 {
            padding-bottom: 1.5rem !important
        }

        .pl-sm-4,
        .px-sm-4 {
            padding-left: 1.5rem !important
        }

        .p-sm-5 {
            padding: 3rem !important
        }

        .pt-sm-5,
        .py-sm-5 {
            padding-top: 3rem !important
        }

        .px-sm-5 {
            padding-right: 3rem !important
        }

        .pb-sm-5,
        .py-sm-5 {
            padding-bottom: 3rem !important
        }

        .pl-sm-5,
        .px-sm-5 {
            padding-left: 3rem !important
        }

        .m-sm-auto {
            margin: auto !important
        }

        .mt-sm-auto {
            margin-top: auto !important
        }

        .mr-sm-auto,
        .mx-sm-auto {
            margin-right: auto !important
        }

        .mb-sm-auto {
            margin-bottom: auto !important
        }

        .ml-sm-auto,
        .mx-sm-auto {
            margin-left: auto !important
        }
    }

    @media(min-width: 768px) {
        .m-md-0 {
            margin: 0 !important
        }

        .mt-md-0 {
            margin-top: 0 !important
        }

        .mr-md-0,
        .mx-md-0 {
            margin-right: 0 !important
        }

        .mb-md-0 {
            margin-bottom: 0 !important
        }

        .ml-md-0,
        .mx-md-0 {
            margin-left: 0 !important
        }

        .m-md-1 {
            margin: .25rem !important
        }

        .mt-md-1 {
            margin-top: .25rem !important
        }

        .mr-md-1,
        .mx-md-1 {
            margin-right: .25rem !important
        }

        .mb-md-1 {
            margin-bottom: .25rem !important
        }

        .ml-md-1,
        .mx-md-1 {
            margin-left: .25rem !important
        }

        .m-md-2 {
            margin: .5rem !important
        }

        .mt-md-2 {
            margin-top: .5rem !important
        }

        .mr-md-2,
        .mx-md-2 {
            margin-right: .5rem !important
        }

        .mb-md-2 {
            margin-bottom: .5rem !important
        }

        .ml-md-2,
        .mx-md-2 {
            margin-left: .5rem !important
        }

        .m-md-3 {
            margin: 1rem !important
        }

        .mt-md-3 {
            margin-top: 1rem !important
        }

        .mr-md-3,
        .mx-md-3 {
            margin-right: 1rem !important
        }

        .mb-md-3 {
            margin-bottom: 1rem !important
        }

        .ml-md-3,
        .mx-md-3 {
            margin-left: 1rem !important
        }

        .m-md-4 {
            margin: 1.5rem !important
        }

        .mt-md-4 {
            margin-top: 1.5rem !important
        }

        .mr-md-4,
        .mx-md-4 {
            margin-right: 1.5rem !important
        }

        .mb-md-4 {
            margin-bottom: 1.5rem !important
        }

        .ml-md-4,
        .mx-md-4 {
            margin-left: 1.5rem !important
        }

        .m-md-5 {
            margin: 3rem !important
        }

        .mt-md-5 {
            margin-top: 3rem !important
        }

        .mr-md-5,
        .mx-md-5 {
            margin-right: 3rem !important
        }

        .mb-md-5 {
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

        .px-md-0 {
            padding-right: 0 !important
        }

        .pb-md-0,
        .py-md-0 {
            padding-bottom: 0 !important
        }

        .pl-md-0,
        .px-md-0 {
            padding-left: 0 !important
        }

        .p-md-1 {
            padding: .25rem !important
        }

        .pt-md-1,
        .py-md-1 {
            padding-top: .25rem !important
        }

        .px-md-1 {
            padding-right: .25rem !important
        }

        .pb-md-1,
        .py-md-1 {
            padding-bottom: .25rem !important
        }

        .pl-md-1,
        .px-md-1 {
            padding-left: .25rem !important
        }

        .p-md-2 {
            padding: .5rem !important
        }

        .pt-md-2,
        .py-md-2 {
            padding-top: .5rem !important
        }

        .px-md-2 {
            padding-right: .5rem !important
        }

        .pb-md-2,
        .py-md-2 {
            padding-bottom: .5rem !important
        }

        .pl-md-2,
        .px-md-2 {
            padding-left: .5rem !important
        }

        .p-md-3 {
            padding: 1rem !important
        }

        .pt-md-3,
        .py-md-3 {
            padding-top: 1rem !important
        }

        .px-md-3 {
            padding-right: 1rem !important
        }

        .pb-md-3,
        .py-md-3 {
            padding-bottom: 1rem !important
        }

        .pl-md-3,
        .px-md-3 {
            padding-left: 1rem !important
        }

        .p-md-4 {
            padding: 1.5rem !important
        }

        .pt-md-4,
        .py-md-4 {
            padding-top: 1.5rem !important
        }

        .px-md-4 {
            padding-right: 1.5rem !important
        }

        .pb-md-4,
        .py-md-4 {
            padding-bottom: 1.5rem !important
        }

        .pl-md-4,
        .px-md-4 {
            padding-left: 1.5rem !important
        }

        .p-md-5 {
            padding: 3rem !important
        }

        .pt-md-5,
        .py-md-5 {
            padding-top: 3rem !important
        }

        .px-md-5 {
            padding-right: 3rem !important
        }

        .pb-md-5,
        .py-md-5 {
            padding-bottom: 3rem !important
        }

        .pl-md-5,
        .px-md-5 {
            padding-left: 3rem !important
        }

        .m-md-auto {
            margin: auto !important
        }

        .mt-md-auto {
            margin-top: auto !important
        }

        .mr-md-auto,
        .mx-md-auto {
            margin-right: auto !important
        }

        .mb-md-auto {
            margin-bottom: auto !important
        }

        .ml-md-auto,
        .mx-md-auto {
            margin-left: auto !important
        }
    }

    @media(min-width: 992px) {
        .m-lg-0 {
            margin: 0 !important
        }

        .mt-lg-0 {
            margin-top: 0 !important
        }

        .mr-lg-0,
        .mx-lg-0 {
            margin-right: 0 !important
        }

        .mb-lg-0 {
            margin-bottom: 0 !important
        }

        .ml-lg-0,
        .mx-lg-0 {
            margin-left: 0 !important
        }

        .m-lg-1 {
            margin: .25rem !important
        }

        .mt-lg-1 {
            margin-top: .25rem !important
        }

        .mr-lg-1,
        .mx-lg-1 {
            margin-right: .25rem !important
        }

        .mb-lg-1 {
            margin-bottom: .25rem !important
        }

        .ml-lg-1,
        .mx-lg-1 {
            margin-left: .25rem !important
        }

        .m-lg-2 {
            margin: .5rem !important
        }

        .mt-lg-2 {
            margin-top: .5rem !important
        }

        .mr-lg-2,
        .mx-lg-2 {
            margin-right: .5rem !important
        }

        .mb-lg-2 {
            margin-bottom: .5rem !important
        }

        .ml-lg-2,
        .mx-lg-2 {
            margin-left: .5rem !important
        }

        .m-lg-3 {
            margin: 1rem !important
        }

        .mt-lg-3 {
            margin-top: 1rem !important
        }

        .mr-lg-3,
        .mx-lg-3 {
            margin-right: 1rem !important
        }

        .mb-lg-3 {
            margin-bottom: 1rem !important
        }

        .ml-lg-3,
        .mx-lg-3 {
            margin-left: 1rem !important
        }

        .m-lg-4 {
            margin: 1.5rem !important
        }

        .mt-lg-4 {
            margin-top: 1.5rem !important
        }

        .mr-lg-4,
        .mx-lg-4 {
            margin-right: 1.5rem !important
        }

        .mb-lg-4 {
            margin-bottom: 1.5rem !important
        }

        .ml-lg-4,
        .mx-lg-4 {
            margin-left: 1.5rem !important
        }

        .m-lg-5 {
            margin: 3rem !important
        }

        .mt-lg-5 {
            margin-top: 3rem !important
        }

        .mr-lg-5,
        .mx-lg-5 {
            margin-right: 3rem !important
        }

        .mb-lg-5 {
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

        .px-lg-0 {
            padding-right: 0 !important
        }

        .pb-lg-0,
        .py-lg-0 {
            padding-bottom: 0 !important
        }

        .pl-lg-0,
        .px-lg-0 {
            padding-left: 0 !important
        }

        .p-lg-1 {
            padding: .25rem !important
        }

        .pt-lg-1,
        .py-lg-1 {
            padding-top: .25rem !important
        }

        .px-lg-1 {
            padding-right: .25rem !important
        }

        .pb-lg-1,
        .py-lg-1 {
            padding-bottom: .25rem !important
        }

        .pl-lg-1,
        .px-lg-1 {
            padding-left: .25rem !important
        }

        .p-lg-2 {
            padding: .5rem !important
        }

        .pt-lg-2,
        .py-lg-2 {
            padding-top: .5rem !important
        }

        .px-lg-2 {
            padding-right: .5rem !important
        }

        .pb-lg-2,
        .py-lg-2 {
            padding-bottom: .5rem !important
        }

        .pl-lg-2,
        .px-lg-2 {
            padding-left: .5rem !important
        }

        .p-lg-3 {
            padding: 1rem !important
        }

        .pt-lg-3,
        .py-lg-3 {
            padding-top: 1rem !important
        }

        .px-lg-3 {
            padding-right: 1rem !important
        }

        .pb-lg-3,
        .py-lg-3 {
            padding-bottom: 1rem !important
        }

        .pl-lg-3,
        .px-lg-3 {
            padding-left: 1rem !important
        }

        .p-lg-4 {
            padding: 1.5rem !important
        }

        .pt-lg-4,
        .py-lg-4 {
            padding-top: 1.5rem !important
        }

        .px-lg-4 {
            padding-right: 1.5rem !important
        }

        .pb-lg-4,
        .py-lg-4 {
            padding-bottom: 1.5rem !important
        }

        .pl-lg-4,
        .px-lg-4 {
            padding-left: 1.5rem !important
        }

        .p-lg-5 {
            padding: 3rem !important
        }

        .pt-lg-5,
        .py-lg-5 {
            padding-top: 3rem !important
        }

        .px-lg-5 {
            padding-right: 3rem !important
        }

        .pb-lg-5,
        .py-lg-5 {
            padding-bottom: 3rem !important
        }

        .pl-lg-5,
        .px-lg-5 {
            padding-left: 3rem !important
        }

        .m-lg-auto {
            margin: auto !important
        }

        .mt-lg-auto {
            margin-top: auto !important
        }

        .mr-lg-auto,
        .mx-lg-auto {
            margin-right: auto !important
        }

        .mb-lg-auto {
            margin-bottom: auto !important
        }

        .ml-lg-auto,
        .mx-lg-auto {
            margin-left: auto !important
        }
    }

    @media(min-width: 1200px) {
        .m-xl-0 {
            margin: 0 !important
        }

        .mt-xl-0 {
            margin-top: 0 !important
        }

        .mr-xl-0,
        .mx-xl-0 {
            margin-right: 0 !important
        }

        .mb-xl-0 {
            margin-bottom: 0 !important
        }

        .ml-xl-0,
        .mx-xl-0 {
            margin-left: 0 !important
        }

        .m-xl-1 {
            margin: .25rem !important
        }

        .mt-xl-1 {
            margin-top: .25rem !important
        }

        .mr-xl-1,
        .mx-xl-1 {
            margin-right: .25rem !important
        }

        .mb-xl-1 {
            margin-bottom: .25rem !important
        }

        .ml-xl-1,
        .mx-xl-1 {
            margin-left: .25rem !important
        }

        .m-xl-2 {
            margin: .5rem !important
        }

        .mt-xl-2 {
            margin-top: .5rem !important
        }

        .mr-xl-2,
        .mx-xl-2 {
            margin-right: .5rem !important
        }

        .mb-xl-2 {
            margin-bottom: .5rem !important
        }

        .ml-xl-2,
        .mx-xl-2 {
            margin-left: .5rem !important
        }

        .m-xl-3 {
            margin: 1rem !important
        }

        .mt-xl-3 {
            margin-top: 1rem !important
        }

        .mr-xl-3,
        .mx-xl-3 {
            margin-right: 1rem !important
        }

        .mb-xl-3 {
            margin-bottom: 1rem !important
        }

        .ml-xl-3,
        .mx-xl-3 {
            margin-left: 1rem !important
        }

        .m-xl-4 {
            margin: 1.5rem !important
        }

        .mt-xl-4 {
            margin-top: 1.5rem !important
        }

        .mr-xl-4,
        .mx-xl-4 {
            margin-right: 1.5rem !important
        }

        .mb-xl-4 {
            margin-bottom: 1.5rem !important
        }

        .ml-xl-4,
        .mx-xl-4 {
            margin-left: 1.5rem !important
        }

        .m-xl-5 {
            margin: 3rem !important
        }

        .mt-xl-5 {
            margin-top: 3rem !important
        }

        .mr-xl-5,
        .mx-xl-5 {
            margin-right: 3rem !important
        }

        .mb-xl-5 {
            margin-bottom: 3rem !important
        }

        .ml-xl-5,
        .mx-xl-5 {
            margin-left: 3rem !important
        }

        .p-xl-0 {
            padding: 0 !important
        }

        .pt-xl-0,
        .py-xl-0 {
            padding-top: 0 !important
        }

        .px-xl-0 {
            padding-right: 0 !important
        }

        .pb-xl-0,
        .py-xl-0 {
            padding-bottom: 0 !important
        }

        .pl-xl-0,
        .px-xl-0 {
            padding-left: 0 !important
        }

        .p-xl-1 {
            padding: .25rem !important
        }

        .pt-xl-1,
        .py-xl-1 {
            padding-top: .25rem !important
        }

        .px-xl-1 {
            padding-right: .25rem !important
        }

        .pb-xl-1,
        .py-xl-1 {
            padding-bottom: .25rem !important
        }

        .pl-xl-1,
        .px-xl-1 {
            padding-left: .25rem !important
        }

        .p-xl-2 {
            padding: .5rem !important
        }

        .pt-xl-2,
        .py-xl-2 {
            padding-top: .5rem !important
        }

        .px-xl-2 {
            padding-right: .5rem !important
        }

        .pb-xl-2,
        .py-xl-2 {
            padding-bottom: .5rem !important
        }

        .pl-xl-2,
        .px-xl-2 {
            padding-left: .5rem !important
        }

        .p-xl-3 {
            padding: 1rem !important
        }

        .pt-xl-3,
        .py-xl-3 {
            padding-top: 1rem !important
        }

        .px-xl-3 {
            padding-right: 1rem !important
        }

        .pb-xl-3,
        .py-xl-3 {
            padding-bottom: 1rem !important
        }

        .pl-xl-3,
        .px-xl-3 {
            padding-left: 1rem !important
        }

        .p-xl-4 {
            padding: 1.5rem !important
        }

        .pt-xl-4,
        .py-xl-4 {
            padding-top: 1.5rem !important
        }

        .px-xl-4 {
            padding-right: 1.5rem !important
        }

        .pb-xl-4,
        .py-xl-4 {
            padding-bottom: 1.5rem !important
        }

        .pl-xl-4,
        .px-xl-4 {
            padding-left: 1.5rem !important
        }

        .p-xl-5 {
            padding: 3rem !important
        }

        .pt-xl-5,
        .py-xl-5 {
            padding-top: 3rem !important
        }

        .px-xl-5 {
            padding-right: 3rem !important
        }

        .pb-xl-5,
        .py-xl-5 {
            padding-bottom: 3rem !important
        }

        .pl-xl-5,
        .px-xl-5 {
            padding-left: 3rem !important
        }

        .m-xl-auto {
            margin: auto !important
        }

        .mt-xl-auto {
            margin-top: auto !important
        }

        .mr-xl-auto,
        .mx-xl-auto {
            margin-right: auto !important
        }

        .mb-xl-auto {
            margin-bottom: auto !important
        }

        .ml-xl-auto,
        .mx-xl-auto {
            margin-left: auto !important
        }
    }

    .text-justify {
        text-align: justify !important
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

    @media(min-width: 576px) {
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

    @media(min-width: 768px) {
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

    @media(min-width: 992px) {
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

    @media(min-width: 1200px) {
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

    .text-uppercase {
        text-transform: uppercase !important
    }

    .text-white {
        color: #fff !important
    }

    .text-primary {
        color: #007bff !important
    }

    a.text-primary:focus,
    a.text-primary:hover {
        color: #0062cc !important
    }

    .text-info {
        color: #17a2b8 !important
    }

    a.text-info:focus,
    a.text-info:hover {
        color: #117a8b !important
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

        img,
        tr {
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

        body {
            min-width: 992px !important
        }

        .container {
            min-width: 992px !important
        }

        .navbar {
            display: none
        }

        .table {
            border-collapse: collapse !important
        }

        .table td,
        .table th {
            background-color: #fff !important
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #ddd !important
        }
    }

    .bootstrap-select {
        width: 220px
    }

    .bootstrap-select>select {
        position: absolute !important;
        bottom: 0;
        left: 50%;
        display: block !important;
        width: .5px !important;
        height: 100% !important;
        padding: 0 !important;
        opacity: 0 !important;
        border: 0
    }

    .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
        width: 220px
    }

    .bootstrap-select.form-control:not([class*=col-]),
    .form-inline .bootstrap-select.btn-group .form-control {
        width: 100%
    }

    .bootstrap-select.form-control {
        margin-bottom: 0;
        padding: 0;
        border: 0
    }

    .bootstrap-select.form-control.input-group-btn {
        z-index: auto
    }

    .bootstrap-select.form-control.input-group-btn:not(:first-child):not(:last-child)>.btn {
        border-radius: 0
    }

    .bootstrap-select.btn-group:not(.input-group-btn),
    .bootstrap-select.btn-group[class*=col-] {
        float: none;
        display: inline-block;
        margin-left: 0
    }

    .form-group .bootstrap-select.btn-group,
    .form-inline .bootstrap-select.btn-group {
        margin-bottom: 0
    }

    .form-group-lg .bootstrap-select.btn-group.form-control,
    .form-group-sm .bootstrap-select.btn-group.form-control {
        padding: 0
    }

    @charset "UTF-8";

    @font-face {
        font-family: real-estate;
        src: url(/fonts/real-estate.eot);
        src: url(/fonts/real-estated41d.eot?#iefix) format("embedded-opentype"), url(/fonts/real-estate.woff) format("woff"), url(/fonts/real-estate.ttf) format("truetype"), url(/fonts/real-estate.svg#real-estate) format("svg");
        font-display: swap;
        font-weight: 400;
        font-style: normal
    }

    [data-icon]:before {
        font-family: real-estate !important;
        content: attr(data-icon);
        font-style: normal !important;
        font-weight: 400 !important;
        font-variant: normal !important;
        text-transform: none !important;
        speak: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    [class*=" icon-"]:before,
    [class^=icon-]:before {
        font-family: real-estate !important;
        font-style: normal !important;
        font-weight: 400 !important;
        font-variant: normal !important;
        text-transform: none !important;
        speak: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
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

    .icon-placeholder-2:before {
        content: "\69"
    }

    .icon-mortgage-4:before {
        content: "\41"
    }

    .icon-home-11:before {
        content: "\45"
    }

    .icon-real-estate-6:before {
        content: "\55"
    }

    .icon-title:before {
        content: "\39"
    }

    .icon-real-estate-5:before {
        content: "\2b"
    }

    .icon-real-estate-4:before {
        content: "\5b"
    }

    .icon-real-estate-3:before {
        content: "\5f"
    }

    .icon-single:before {
        content: "\e001"
    }

    .icon-up-1:before {
        content: "\e01d"
    }

    .icon-real-estate-2:before {
        content: "\e022"
    }

    .icon-up:before {
        content: "\e034"
    }

    .icon-wc:before {
        content: "\e035"
    }

    .icon-real-estate-1-1:before {
        content: "\e03e"
    }

    .icon-real-estate-7:before {
        content: "\e046"
    }

    .icon-bar:before {
        content: "\e055"
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

    .icon-placeholder:before {
        content: "\e0f2"
    }

    .icon-property:before {
        content: "\e0f4"
    }

    .icon-property-1:before {
        content: "\e0f5"
    }

    .icon-real-estate-1:before {
        content: "\e0f7"
    }

    .icon-real-state:before {
        content: "\e0f8"
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

    .icon-tv-tower:before {
        content: "\e11d"
    }

    .icon-placeholder-1:before {
        content: "\e125"
    }

    .icon-envelope:before {
        content: "\e128"
    }

    .icon-bed:before {
        content: "\e12a"
    }

    .icon-envelope-1:before {
        content: "\e12e"
    }

    .icon-search:before {
        content: "\e134"
    }

    @font-face {
        font-family: FontAwesome;
        src: url(/fonts/fontawesome-webfont.eot?v=4.7.0);
        src: url(/fonts/fontawesome-webfont.eot?#iefix&v=4.7.0) format('embedded-opentype'), url(/fonts/fontawesome-webfont.woff2?v=4.7.0) format('woff2'), url(/fonts/fontawesome-webfont.woff?v=4.7.0) format('woff'), url(/fonts/fontawesome-webfont.ttf?v=4.7.0) format('truetype'), url(/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular) format('svg');
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

    @-webkit-keyframes fa-spin {
        0 {
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }

        100% {
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg)
        }
    }

    @keyframes fa-spin {
        0 {
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }

        100% {
            -webkit-transform: rotate(359deg);
            transform: rotate(359deg)
        }
    }

    .fa-search:before {
        content: "\f002"
    }

    .fa-envelope-o:before {
        content: "\f003"
    }

    .fa-th:before {
        content: "\f00a"
    }

    .fa-th-list:before {
        content: "\f00b"
    }

    .fa-close:before,
    .fa-times:before {
        content: "\f00d"
    }

    .fa-search-plus:before {
        content: "\f00e"
    }

    .fa-cog:before {
        content: "\f013"
    }

    .fa-home:before {
        content: "\f015"
    }

    .fa-download:before {
        content: "\f019"
    }

    .fa-arrow-circle-o-up:before {
        content: "\f01b"
    }

    .fa-list-alt:before {
        content: "\f022"
    }

    .fa-tag:before {
        content: "\f02b"
    }

    .fa-font:before {
        content: "\f031"
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

    .fa-image:before {
        content: "\f03e"
    }

    .fa-map-marker:before {
        content: "\f041"
    }

    .fa-plus-circle:before {
        content: "\f055"
    }

    .fa-times-circle:before {
        content: "\f057"
    }

    .fa-info-circle:before {
        content: "\f05a"
    }

    .fa-times-circle-o:before {
        content: "\f05c"
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

    .fa-expand:before {
        content: "\f065"
    }

    .fa-plus:before {
        content: "\f067"
    }

    .fa-phone:before {
        content: "\f095"
    }

    .fa-twitter:before {
        content: "\f099"
    }

    .fa-facebook-f:before,
    .fa-facebook:before {
        content: "\f09a"
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

    .fa-group:before {
        content: "\f0c0"
    }

    .fa-link:before {
        content: "\f0c1"
    }

    .fa-copy:before {
        content: "\f0c5"
    }

    .fa-list-ul:before {
        content: "\f0ca"
    }

    .fa-list-ol:before {
        content: "\f0cb"
    }

    .fa-table:before {
        content: "\f0ce"
    }

    .fa-sort:before {
        content: "\f0dc"
    }

    .fa-sort-up:before {
        content: "\f0de"
    }

    .fa-envelope:before {
        content: "\f0e0"
    }

    .fa-linkedin:before {
        content: "\f0e1"
    }

    .fa-circle-o:before {
        content: "\f10c"
    }

    .fa-circle:before {
        content: "\f111"
    }

    .fa-location-arrow:before {
        content: "\f124"
    }

    .fa-info:before {
        content: "\f129"
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

    .fa-level-up:before {
        content: "\f148"
    }

    .fa-toggle-up:before {
        content: "\f151"
    }

    .fa-toggle-right:before {
        content: "\f152"
    }

    .fa-inr:before {
        content: "\f156"
    }

    .fa-bitcoin:before,
    .fa-btc:before {
        content: "\f15a"
    }

    .fa-youtube:before {
        content: "\f167"
    }

    .fa-instagram:before {
        content: "\f16d"
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

    .fa-vk:before {
        content: "\f189"
    }

    .fa-arrow-circle-o-right:before {
        content: "\f18e"
    }

    .fa-arrow-circle-o-left:before {
        content: "\f190"
    }

    .fa-toggle-left:before {
        content: "\f191"
    }

    .fa-ra:before {
        content: "\f1d0"
    }

    .fa-ge:before {
        content: "\f1d1"
    }

    .fa-qq:before {
        content: "\f1d6"
    }

    .fa-send:before {
        content: "\f1d8"
    }

    .fa-send-o:before {
        content: "\f1d9"
    }

    .fa-circle-thin:before {
        content: "\f1db"
    }

    .fa-header:before {
        content: "\f1dc"
    }

    .fa-calculator:before {
        content: "\f1ec"
    }

    .fa-copyright:before {
        content: "\f1f9"
    }

    .fa-at:before {
        content: "\f1fa"
    }

    .fa-toggle-on:before {
        content: "\f205"
    }

    .fa-cc:before {
        content: "\f20a"
    }

    .fa-whatsapp:before {
        content: "\f232"
    }

    .fa-bed:before {
        content: "\f236"
    }

    .fa-gg:before {
        content: "\f260"
    }

    .fa-gg-circle:before {
        content: "\f261"
    }

    .fa-tv:before {
        content: "\f26c"
    }

    .fa-500px:before {
        content: "\f26e"
    }

    .fa-map-o:before {
        content: "\f278"
    }

    .fa-map:before {
        content: "\f279"
    }

    .fa-first-order:before {
        content: "\f2b0"
    }

    .fa-fa:before,
    .fa-font-awesome:before {
        content: "\f2b4"
    }

    .fa-envelope-open:before {
        content: "\f2b6"
    }

    .fa-envelope-open-o:before {
        content: "\f2b7"
    }

    .fa-id-card:before {
        content: "\f2c2"
    }

    .fa-id-card-o:before {
        content: "\f2c3"
    }

    .fa-s15:before {
        content: "\f2cd"
    }

    .fa-window-close:before {
        content: "\f2d3"
    }

    .fa-window-close-o:before {
        content: "\f2d4"
    }

    .icon:after,
    .icon:before {
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

    span.nav-close:before {
        content: "CLOSE";
        font-family: Poppins, sans-serif;
        font-size: 1rem
    }

    @font-face {
        font-family: lg;
        src: url(/fonts/lg.eot?n1z373);
        src: url(/fonts/lg.eot?#iefixn1z373) format("embedded-opentype"), url(/fonts/lg.woff?n1z373) format("woff"), url(/fonts/lg.ttf?n1z373) format("truetype"), url(/fonts/lg.svg?n1z373#lg) format("svg");
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

    @-webkit-keyframes lg-right-end {

        0,
        100% {
            left: 0
        }

        50% {
            left: -30px
        }
    }

    @-moz-keyframes lg-right-end {

        0,
        100% {
            left: 0
        }

        50% {
            left: -30px
        }
    }

    @-ms-keyframes lg-right-end {

        0,
        100% {
            left: 0
        }

        50% {
            left: -30px
        }
    }

    @keyframes lg-right-end {

        0,
        100% {
            left: 0
        }

        50% {
            left: -30px
        }
    }

    @-webkit-keyframes lg-left-end {

        0,
        100% {
            left: 0
        }

        50% {
            left: 30px
        }
    }

    @-moz-keyframes lg-left-end {

        0,
        100% {
            left: 0
        }

        50% {
            left: 30px
        }
    }

    @-ms-keyframes lg-left-end {

        0,
        100% {
            left: 0
        }

        50% {
            left: 30px
        }
    }

    @keyframes lg-left-end {

        0,
        100% {
            left: 0
        }

        50% {
            left: 30px
        }
    }

    .lg-group:after {
        content: "";
        display: table;
        clear: both
    }

    .lg-css3.lg-fade .lg-item {
        opacity: 0
    }

    .lg-css3.lg-fade .lg-item.lg-current {
        opacity: 1
    }

    .lg-css3.lg-fade .lg-item.lg-current {
        -webkit-transition: opacity .1s ease 0;
        -moz-transition: opacity .1s ease 0;
        -o-transition: opacity .1s ease 0;
        transition: opacity .1s ease 0
    }

    .swiper-container {
        margin: 0 auto;
        position: relative;
        overflow: hidden;
        list-style: none;
        padding: 0;
        z-index: 1
    }

    .swiper-container-3d {
        -webkit-perspective: 1200px;
        perspective: 1200px
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

    @-webkit-keyframes bounce {

        20%,
        53%,
        80%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        40%,
        43% {
            -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
            animation-timing-function: cubic-bezier(.755, .05, .855, .06);
            -webkit-transform: translate3d(0, -30px, 0);
            transform: translate3d(0, -30px, 0)
        }

        70% {
            -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
            animation-timing-function: cubic-bezier(.755, .05, .855, .06);
            -webkit-transform: translate3d(0, -15px, 0);
            transform: translate3d(0, -15px, 0)
        }

        90% {
            -webkit-transform: translate3d(0, -4px, 0);
            transform: translate3d(0, -4px, 0)
        }
    }

    @keyframes bounce {

        20%,
        53%,
        80%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        40%,
        43% {
            -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
            animation-timing-function: cubic-bezier(.755, .05, .855, .06);
            -webkit-transform: translate3d(0, -30px, 0);
            transform: translate3d(0, -30px, 0)
        }

        70% {
            -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
            animation-timing-function: cubic-bezier(.755, .05, .855, .06);
            -webkit-transform: translate3d(0, -15px, 0);
            transform: translate3d(0, -15px, 0)
        }

        90% {
            -webkit-transform: translate3d(0, -4px, 0);
            transform: translate3d(0, -4px, 0)
        }
    }

    @-webkit-keyframes flash {

        50%,
        from,
        to {
            opacity: 1
        }

        25%,
        75% {
            opacity: 0
        }
    }

    @keyframes flash {

        50%,
        from,
        to {
            opacity: 1
        }

        25%,
        75% {
            opacity: 0
        }
    }

    @-webkit-keyframes pulse {
        from {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }

        50% {
            -webkit-transform: scale3d(1.05, 1.05, 1.05);
            transform: scale3d(1.05, 1.05, 1.05)
        }

        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }
    }

    @keyframes pulse {
        from {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }

        50% {
            -webkit-transform: scale3d(1.05, 1.05, 1.05);
            transform: scale3d(1.05, 1.05, 1.05)
        }

        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }
    }

    @-webkit-keyframes rubberBand {
        from {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }

        30% {
            -webkit-transform: scale3d(1.25, .75, 1);
            transform: scale3d(1.25, .75, 1)
        }

        40% {
            -webkit-transform: scale3d(.75, 1.25, 1);
            transform: scale3d(.75, 1.25, 1)
        }

        50% {
            -webkit-transform: scale3d(1.15, .85, 1);
            transform: scale3d(1.15, .85, 1)
        }

        65% {
            -webkit-transform: scale3d(.95, 1.05, 1);
            transform: scale3d(.95, 1.05, 1)
        }

        75% {
            -webkit-transform: scale3d(1.05, .95, 1);
            transform: scale3d(1.05, .95, 1)
        }

        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }
    }

    @keyframes rubberBand {
        from {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }

        30% {
            -webkit-transform: scale3d(1.25, .75, 1);
            transform: scale3d(1.25, .75, 1)
        }

        40% {
            -webkit-transform: scale3d(.75, 1.25, 1);
            transform: scale3d(.75, 1.25, 1)
        }

        50% {
            -webkit-transform: scale3d(1.15, .85, 1);
            transform: scale3d(1.15, .85, 1)
        }

        65% {
            -webkit-transform: scale3d(.95, 1.05, 1);
            transform: scale3d(.95, 1.05, 1)
        }

        75% {
            -webkit-transform: scale3d(1.05, .95, 1);
            transform: scale3d(1.05, .95, 1)
        }

        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }
    }

    @-webkit-keyframes shake {

        from,
        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        10%,
        30%,
        50%,
        70%,
        90% {
            -webkit-transform: translate3d(-10px, 0, 0);
            transform: translate3d(-10px, 0, 0)
        }

        20%,
        40%,
        60%,
        80% {
            -webkit-transform: translate3d(10px, 0, 0);
            transform: translate3d(10px, 0, 0)
        }
    }

    @keyframes shake {

        from,
        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        10%,
        30%,
        50%,
        70%,
        90% {
            -webkit-transform: translate3d(-10px, 0, 0);
            transform: translate3d(-10px, 0, 0)
        }

        20%,
        40%,
        60%,
        80% {
            -webkit-transform: translate3d(10px, 0, 0);
            transform: translate3d(10px, 0, 0)
        }
    }

    @-webkit-keyframes headShake {
        0 {
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
        0 {
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

    @-webkit-keyframes swing {
        20% {
            -webkit-transform: rotate3d(0, 0, 1, 15deg);
            transform: rotate3d(0, 0, 1, 15deg)
        }

        40% {
            -webkit-transform: rotate3d(0, 0, 1, -10deg);
            transform: rotate3d(0, 0, 1, -10deg)
        }

        60% {
            -webkit-transform: rotate3d(0, 0, 1, 5deg);
            transform: rotate3d(0, 0, 1, 5deg)
        }

        80% {
            -webkit-transform: rotate3d(0, 0, 1, -5deg);
            transform: rotate3d(0, 0, 1, -5deg)
        }

        to {
            -webkit-transform: rotate3d(0, 0, 1, 0);
            transform: rotate3d(0, 0, 1, 0)
        }
    }

    @keyframes swing {
        20% {
            -webkit-transform: rotate3d(0, 0, 1, 15deg);
            transform: rotate3d(0, 0, 1, 15deg)
        }

        40% {
            -webkit-transform: rotate3d(0, 0, 1, -10deg);
            transform: rotate3d(0, 0, 1, -10deg)
        }

        60% {
            -webkit-transform: rotate3d(0, 0, 1, 5deg);
            transform: rotate3d(0, 0, 1, 5deg)
        }

        80% {
            -webkit-transform: rotate3d(0, 0, 1, -5deg);
            transform: rotate3d(0, 0, 1, -5deg)
        }

        to {
            -webkit-transform: rotate3d(0, 0, 1, 0);
            transform: rotate3d(0, 0, 1, 0)
        }
    }

    @-webkit-keyframes tada {
        from {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }

        10%,
        20% {
            -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg)
        }

        30%,
        50%,
        70%,
        90% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg)
        }

        40%,
        60%,
        80% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg)
        }

        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }
    }

    @keyframes tada {
        from {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }

        10%,
        20% {
            -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg)
        }

        30%,
        50%,
        70%,
        90% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg)
        }

        40%,
        60%,
        80% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg)
        }

        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }
    }

    @-webkit-keyframes wobble {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        15% {
            -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
            transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg)
        }

        30% {
            -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
            transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg)
        }

        45% {
            -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
            transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg)
        }

        60% {
            -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
            transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg)
        }

        75% {
            -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
            transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg)
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes wobble {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        15% {
            -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
            transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg)
        }

        30% {
            -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
            transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg)
        }

        45% {
            -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
            transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg)
        }

        60% {
            -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
            transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg)
        }

        75% {
            -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
            transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg)
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @-webkit-keyframes jello {

        11.1%,
        from,
        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
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

        11.1%,
        from,
        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
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

    @-webkit-keyframes heartBeat {
        0 {
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
        0 {
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

    @-webkit-keyframes bounceIn {

        20%,
        40%,
        60%,
        80%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }

        0 {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3)
        }

        20% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1)
        }

        40% {
            -webkit-transform: scale3d(.9, .9, .9);
            transform: scale3d(.9, .9, .9)
        }

        60% {
            opacity: 1;
            -webkit-transform: scale3d(1.03, 1.03, 1.03);
            transform: scale3d(1.03, 1.03, 1.03)
        }

        80% {
            -webkit-transform: scale3d(.97, .97, .97);
            transform: scale3d(.97, .97, .97)
        }

        to {
            opacity: 1;
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }
    }

    @keyframes bounceIn {

        20%,
        40%,
        60%,
        80%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }

        0 {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3)
        }

        20% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1)
        }

        40% {
            -webkit-transform: scale3d(.9, .9, .9);
            transform: scale3d(.9, .9, .9)
        }

        60% {
            opacity: 1;
            -webkit-transform: scale3d(1.03, 1.03, 1.03);
            transform: scale3d(1.03, 1.03, 1.03)
        }

        80% {
            -webkit-transform: scale3d(.97, .97, .97);
            transform: scale3d(.97, .97, .97)
        }

        to {
            opacity: 1;
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }
    }

    @-webkit-keyframes bounceInDown {

        60%,
        75%,
        90%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }

        0 {
            opacity: 0;
            -webkit-transform: translate3d(0, -3000px, 0);
            transform: translate3d(0, -3000px, 0)
        }

        60% {
            opacity: 1;
            -webkit-transform: translate3d(0, 25px, 0);
            transform: translate3d(0, 25px, 0)
        }

        75% {
            -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0)
        }

        90% {
            -webkit-transform: translate3d(0, 5px, 0);
            transform: translate3d(0, 5px, 0)
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes bounceInDown {

        60%,
        75%,
        90%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }

        0 {
            opacity: 0;
            -webkit-transform: translate3d(0, -3000px, 0);
            transform: translate3d(0, -3000px, 0)
        }

        60% {
            opacity: 1;
            -webkit-transform: translate3d(0, 25px, 0);
            transform: translate3d(0, 25px, 0)
        }

        75% {
            -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0)
        }

        90% {
            -webkit-transform: translate3d(0, 5px, 0);
            transform: translate3d(0, 5px, 0)
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @-webkit-keyframes bounceInLeft {

        60%,
        75%,
        90%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }

        0 {
            opacity: 0;
            -webkit-transform: translate3d(-3000px, 0, 0);
            transform: translate3d(-3000px, 0, 0)
        }

        60% {
            opacity: 1;
            -webkit-transform: translate3d(25px, 0, 0);
            transform: translate3d(25px, 0, 0)
        }

        75% {
            -webkit-transform: translate3d(-10px, 0, 0);
            transform: translate3d(-10px, 0, 0)
        }

        90% {
            -webkit-transform: translate3d(5px, 0, 0);
            transform: translate3d(5px, 0, 0)
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes bounceInLeft {

        60%,
        75%,
        90%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }

        0 {
            opacity: 0;
            -webkit-transform: translate3d(-3000px, 0, 0);
            transform: translate3d(-3000px, 0, 0)
        }

        60% {
            opacity: 1;
            -webkit-transform: translate3d(25px, 0, 0);
            transform: translate3d(25px, 0, 0)
        }

        75% {
            -webkit-transform: translate3d(-10px, 0, 0);
            transform: translate3d(-10px, 0, 0)
        }

        90% {
            -webkit-transform: translate3d(5px, 0, 0);
            transform: translate3d(5px, 0, 0)
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @-webkit-keyframes bounceInRight {

        60%,
        75%,
        90%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }

        from {
            opacity: 0;
            -webkit-transform: translate3d(3000px, 0, 0);
            transform: translate3d(3000px, 0, 0)
        }

        60% {
            opacity: 1;
            -webkit-transform: translate3d(-25px, 0, 0);
            transform: translate3d(-25px, 0, 0)
        }

        75% {
            -webkit-transform: translate3d(10px, 0, 0);
            transform: translate3d(10px, 0, 0)
        }

        90% {
            -webkit-transform: translate3d(-5px, 0, 0);
            transform: translate3d(-5px, 0, 0)
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes bounceInRight {

        60%,
        75%,
        90%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }

        from {
            opacity: 0;
            -webkit-transform: translate3d(3000px, 0, 0);
            transform: translate3d(3000px, 0, 0)
        }

        60% {
            opacity: 1;
            -webkit-transform: translate3d(-25px, 0, 0);
            transform: translate3d(-25px, 0, 0)
        }

        75% {
            -webkit-transform: translate3d(10px, 0, 0);
            transform: translate3d(10px, 0, 0)
        }

        90% {
            -webkit-transform: translate3d(-5px, 0, 0);
            transform: translate3d(-5px, 0, 0)
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @-webkit-keyframes bounceInUp {

        60%,
        75%,
        90%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }

        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 3000px, 0);
            transform: translate3d(0, 3000px, 0)
        }

        60% {
            opacity: 1;
            -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0)
        }

        75% {
            -webkit-transform: translate3d(0, 10px, 0);
            transform: translate3d(0, 10px, 0)
        }

        90% {
            -webkit-transform: translate3d(0, -5px, 0);
            transform: translate3d(0, -5px, 0)
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes bounceInUp {

        60%,
        75%,
        90%,
        from,
        to {
            -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
            animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }

        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 3000px, 0);
            transform: translate3d(0, 3000px, 0)
        }

        60% {
            opacity: 1;
            -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0)
        }

        75% {
            -webkit-transform: translate3d(0, 10px, 0);
            transform: translate3d(0, 10px, 0)
        }

        90% {
            -webkit-transform: translate3d(0, -5px, 0);
            transform: translate3d(0, -5px, 0)
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @-webkit-keyframes bounceOut {
        20% {
            -webkit-transform: scale3d(.9, .9, .9);
            transform: scale3d(.9, .9, .9)
        }

        50%,
        55% {
            opacity: 1;
            -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1)
        }

        to {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3)
        }
    }

    @keyframes bounceOut {
        20% {
            -webkit-transform: scale3d(.9, .9, .9);
            transform: scale3d(.9, .9, .9)
        }

        50%,
        55% {
            opacity: 1;
            -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1)
        }

        to {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3)
        }
    }

    @-webkit-keyframes bounceOutDown {
        20% {
            -webkit-transform: translate3d(0, 10px, 0);
            transform: translate3d(0, 10px, 0)
        }

        40%,
        45% {
            opacity: 1;
            -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0)
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0)
        }
    }

    @keyframes bounceOutDown {
        20% {
            -webkit-transform: translate3d(0, 10px, 0);
            transform: translate3d(0, 10px, 0)
        }

        40%,
        45% {
            opacity: 1;
            -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0)
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0)
        }
    }

    @-webkit-keyframes bounceOutLeft {
        20% {
            opacity: 1;
            -webkit-transform: translate3d(20px, 0, 0);
            transform: translate3d(20px, 0, 0)
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0)
        }
    }

    @keyframes bounceOutLeft {
        20% {
            opacity: 1;
            -webkit-transform: translate3d(20px, 0, 0);
            transform: translate3d(20px, 0, 0)
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0)
        }
    }

    @-webkit-keyframes bounceOutRight {
        20% {
            opacity: 1;
            -webkit-transform: translate3d(-20px, 0, 0);
            transform: translate3d(-20px, 0, 0)
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0)
        }
    }

    @keyframes bounceOutRight {
        20% {
            opacity: 1;
            -webkit-transform: translate3d(-20px, 0, 0);
            transform: translate3d(-20px, 0, 0)
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0)
        }
    }

    @-webkit-keyframes bounceOutUp {
        20% {
            -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0)
        }

        40%,
        45% {
            opacity: 1;
            -webkit-transform: translate3d(0, 20px, 0);
            transform: translate3d(0, 20px, 0)
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0)
        }
    }

    @keyframes bounceOutUp {
        20% {
            -webkit-transform: translate3d(0, -10px, 0);
            transform: translate3d(0, -10px, 0)
        }

        40%,
        45% {
            opacity: 1;
            -webkit-transform: translate3d(0, 20px, 0);
            transform: translate3d(0, 20px, 0)
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0)
        }
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

    @-webkit-keyframes fadeInDown {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0)
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0)
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @-webkit-keyframes fadeInDownBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0)
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes fadeInDownBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0)
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @-webkit-keyframes fadeInLeft {
        from {
            opacity: 0;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0)
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0)
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @-webkit-keyframes fadeInLeftBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0)
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes fadeInLeftBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0)
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @-webkit-keyframes fadeInRight {
        from {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @-webkit-keyframes fadeInRightBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0)
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes fadeInRightBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0)
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @-webkit-keyframes fadeInUp {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0)
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0)
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @-webkit-keyframes fadeInUpBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0)
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes fadeInUpBig {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0)
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
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

    @-webkit-keyframes fadeOutDown {
        from {
            opacity: 1
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0)
        }
    }

    @keyframes fadeOutDown {
        from {
            opacity: 1
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0)
        }
    }

    @-webkit-keyframes fadeOutDownBig {
        from {
            opacity: 1
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0)
        }
    }

    @keyframes fadeOutDownBig {
        from {
            opacity: 1
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, 2000px, 0);
            transform: translate3d(0, 2000px, 0)
        }
    }

    @-webkit-keyframes fadeOutLeft {
        from {
            opacity: 1
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0)
        }
    }

    @keyframes fadeOutLeft {
        from {
            opacity: 1
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0)
        }
    }

    @-webkit-keyframes fadeOutLeftBig {
        from {
            opacity: 1
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0)
        }
    }

    @keyframes fadeOutLeftBig {
        from {
            opacity: 1
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(-2000px, 0, 0);
            transform: translate3d(-2000px, 0, 0)
        }
    }

    @-webkit-keyframes fadeOutRight {
        from {
            opacity: 1
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
    }

    @keyframes fadeOutRight {
        from {
            opacity: 1
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
    }

    @-webkit-keyframes fadeOutRightBig {
        from {
            opacity: 1
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0)
        }
    }

    @keyframes fadeOutRightBig {
        from {
            opacity: 1
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(2000px, 0, 0);
            transform: translate3d(2000px, 0, 0)
        }
    }

    @-webkit-keyframes fadeOutUp {
        from {
            opacity: 1
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0)
        }
    }

    @keyframes fadeOutUp {
        from {
            opacity: 1
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0)
        }
    }

    @-webkit-keyframes fadeOutUpBig {
        from {
            opacity: 1
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0)
        }
    }

    @keyframes fadeOutUpBig {
        from {
            opacity: 1
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(0, -2000px, 0);
            transform: translate3d(0, -2000px, 0)
        }
    }

    @-webkit-keyframes flip {
        from {
            -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);
            transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out
        }

        40% {
            -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
            transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out
        }

        50% {
            -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
            transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in
        }

        80% {
            -webkit-transform: perspective(400px) scale3d(.95, .95, .95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0);
            transform: perspective(400px) scale3d(.95, .95, .95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in
        }

        to {
            -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0);
            transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in
        }
    }

    @keyframes flip {
        from {
            -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);
            transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out
        }

        40% {
            -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
            transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out
        }

        50% {
            -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
            transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in
        }

        80% {
            -webkit-transform: perspective(400px) scale3d(.95, .95, .95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0);
            transform: perspective(400px) scale3d(.95, .95, .95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in
        }

        to {
            -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0);
            transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in
        }
    }

    @-webkit-keyframes flipInX {
        from {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
            opacity: 0
        }

        40% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in
        }

        60% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
            opacity: 1
        }

        80% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
        }

        to {
            -webkit-transform: perspective(400px);
            transform: perspective(400px)
        }
    }

    @keyframes flipInX {
        from {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
            opacity: 0
        }

        40% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in
        }

        60% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
            opacity: 1
        }

        80% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
        }

        to {
            -webkit-transform: perspective(400px);
            transform: perspective(400px)
        }
    }

    @-webkit-keyframes flipInY {
        from {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
            opacity: 0
        }

        40% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in
        }

        60% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
            opacity: 1
        }

        80% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -5deg)
        }

        to {
            -webkit-transform: perspective(400px);
            transform: perspective(400px)
        }
    }

    @keyframes flipInY {
        from {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
            opacity: 0
        }

        40% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in
        }

        60% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
            opacity: 1
        }

        80% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -5deg)
        }

        to {
            -webkit-transform: perspective(400px);
            transform: perspective(400px)
        }
    }

    @-webkit-keyframes flipOutX {
        from {
            -webkit-transform: perspective(400px);
            transform: perspective(400px)
        }

        30% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            opacity: 1
        }

        to {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            opacity: 0
        }
    }

    @keyframes flipOutX {
        from {
            -webkit-transform: perspective(400px);
            transform: perspective(400px)
        }

        30% {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
            opacity: 1
        }

        to {
            -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
            opacity: 0
        }
    }

    @-webkit-keyframes flipOutY {
        from {
            -webkit-transform: perspective(400px);
            transform: perspective(400px)
        }

        30% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
            opacity: 1
        }

        to {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            opacity: 0
        }
    }

    @keyframes flipOutY {
        from {
            -webkit-transform: perspective(400px);
            transform: perspective(400px)
        }

        30% {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
            transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
            opacity: 1
        }

        to {
            -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
            opacity: 0
        }
    }

    @-webkit-keyframes lightSpeedIn {
        from {
            -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
            transform: translate3d(100%, 0, 0) skewX(-30deg);
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
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes lightSpeedIn {
        from {
            -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
            transform: translate3d(100%, 0, 0) skewX(-30deg);
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
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @-webkit-keyframes lightSpeedOut {
        from {
            opacity: 1
        }

        to {
            -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
            transform: translate3d(100%, 0, 0) skewX(30deg);
            opacity: 0
        }
    }

    @keyframes lightSpeedOut {
        from {
            opacity: 1
        }

        to {
            -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
            transform: translate3d(100%, 0, 0) skewX(30deg);
            opacity: 0
        }
    }

    @-webkit-keyframes rotateIn {
        from {
            -webkit-transform-origin: center;
            transform-origin: center;
            -webkit-transform: rotate3d(0, 0, 1, -200deg);
            transform: rotate3d(0, 0, 1, -200deg);
            opacity: 0
        }

        to {
            -webkit-transform-origin: center;
            transform-origin: center;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            opacity: 1
        }
    }

    @keyframes rotateIn {
        from {
            -webkit-transform-origin: center;
            transform-origin: center;
            -webkit-transform: rotate3d(0, 0, 1, -200deg);
            transform: rotate3d(0, 0, 1, -200deg);
            opacity: 0
        }

        to {
            -webkit-transform-origin: center;
            transform-origin: center;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            opacity: 1
        }
    }

    @-webkit-keyframes rotateInDownLeft {
        from {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
            opacity: 0
        }

        to {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            opacity: 1
        }
    }

    @keyframes rotateInDownLeft {
        from {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
            opacity: 0
        }

        to {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            opacity: 1
        }
    }

    @-webkit-keyframes rotateInDownRight {
        from {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
            opacity: 0
        }

        to {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            opacity: 1
        }
    }

    @keyframes rotateInDownRight {
        from {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
            opacity: 0
        }

        to {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            opacity: 1
        }
    }

    @-webkit-keyframes rotateInUpLeft {
        from {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
            opacity: 0
        }

        to {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            opacity: 1
        }
    }

    @keyframes rotateInUpLeft {
        from {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
            opacity: 0
        }

        to {
            -webkit-transform-origin: left bottom;
            transform-origin: left bottom;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            opacity: 1
        }
    }

    @-webkit-keyframes rotateInUpRight {
        from {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: rotate3d(0, 0, 1, -90deg);
            transform: rotate3d(0, 0, 1, -90deg);
            opacity: 0
        }

        to {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            opacity: 1
        }
    }

    @keyframes rotateInUpRight {
        from {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: rotate3d(0, 0, 1, -90deg);
            transform: rotate3d(0, 0, 1, -90deg);
            opacity: 0
        }

        to {
            -webkit-transform-origin: right bottom;
            transform-origin: right bottom;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            opacity: 1
        }
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
            -webkit-transform: rotate3d(0, 0, 1, 200deg);
            transform: rotate3d(0, 0, 1, 200deg);
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
            -webkit-transform: rotate3d(0, 0, 1, 200deg);
            transform: rotate3d(0, 0, 1, 200deg);
            opacity: 0
        }
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
            -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
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
            -webkit-transform: rotate3d(0, 0, 1, 45deg);
            transform: rotate3d(0, 0, 1, 45deg);
            opacity: 0
        }
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
            -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
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
            -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
            opacity: 0
        }
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
            -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
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
            -webkit-transform: rotate3d(0, 0, 1, -45deg);
            transform: rotate3d(0, 0, 1, -45deg);
            opacity: 0
        }
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
            -webkit-transform: rotate3d(0, 0, 1, 90deg);
            transform: rotate3d(0, 0, 1, 90deg);
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
            -webkit-transform: rotate3d(0, 0, 1, 90deg);
            transform: rotate3d(0, 0, 1, 90deg);
            opacity: 0
        }
    }

    @-webkit-keyframes hinge {
        0 {
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out
        }

        20%,
        60% {
            -webkit-transform: rotate3d(0, 0, 1, 80deg);
            transform: rotate3d(0, 0, 1, 80deg);
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out
        }

        40%,
        80% {
            -webkit-transform: rotate3d(0, 0, 1, 60deg);
            transform: rotate3d(0, 0, 1, 60deg);
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
            opacity: 1
        }

        to {
            -webkit-transform: translate3d(0, 700px, 0);
            transform: translate3d(0, 700px, 0);
            opacity: 0
        }
    }

    @keyframes hinge {
        0 {
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out
        }

        20%,
        60% {
            -webkit-transform: rotate3d(0, 0, 1, 80deg);
            transform: rotate3d(0, 0, 1, 80deg);
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out
        }

        40%,
        80% {
            -webkit-transform: rotate3d(0, 0, 1, 60deg);
            transform: rotate3d(0, 0, 1, 60deg);
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
            opacity: 1
        }

        to {
            -webkit-transform: translate3d(0, 700px, 0);
            transform: translate3d(0, 700px, 0);
            opacity: 0
        }
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

    @-webkit-keyframes rollIn {
        from {
            opacity: 0;
            -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
            transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes rollIn {
        from {
            opacity: 0;
            -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
            transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
        }

        to {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @-webkit-keyframes rollOut {
        from {
            opacity: 1
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
            transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg)
        }
    }

    @keyframes rollOut {
        from {
            opacity: 1
        }

        to {
            opacity: 0;
            -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
            transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg)
        }
    }

    @-webkit-keyframes zoomIn {
        from {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3)
        }

        50% {
            opacity: 1
        }
    }

    @keyframes zoomIn {
        from {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3)
        }

        50% {
            opacity: 1
        }
    }

    @-webkit-keyframes zoomInDown {
        from {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }

        60% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    @keyframes zoomInDown {
        from {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }

        60% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    @-webkit-keyframes zoomInLeft {
        from {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
            transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }

        60% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    @keyframes zoomInLeft {
        from {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
            transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }

        60% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    @-webkit-keyframes zoomInRight {
        from {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
            transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }

        60% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    @keyframes zoomInRight {
        from {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
            transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }

        60% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    @-webkit-keyframes zoomInUp {
        from {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }

        60% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    @keyframes zoomInUp {
        from {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }

        60% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    @-webkit-keyframes zoomOut {
        from {
            opacity: 1
        }

        50% {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3)
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
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3)
        }

        to {
            opacity: 0
        }
    }

    @-webkit-keyframes zoomOutDown {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }

        to {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    @keyframes zoomOutDown {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }

        to {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    @-webkit-keyframes zoomOutLeft {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0)
        }

        to {
            opacity: 0;
            -webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
            transform: scale(.1) translate3d(-2000px, 0, 0);
            -webkit-transform-origin: left center;
            transform-origin: left center
        }
    }

    @keyframes zoomOutLeft {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0)
        }

        to {
            opacity: 0;
            -webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
            transform: scale(.1) translate3d(-2000px, 0, 0);
            -webkit-transform-origin: left center;
            transform-origin: left center
        }
    }

    @-webkit-keyframes zoomOutRight {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0)
        }

        to {
            opacity: 0;
            -webkit-transform: scale(.1) translate3d(2000px, 0, 0);
            transform: scale(.1) translate3d(2000px, 0, 0);
            -webkit-transform-origin: right center;
            transform-origin: right center
        }
    }

    @keyframes zoomOutRight {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
            transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0)
        }

        to {
            opacity: 0;
            -webkit-transform: scale(.1) translate3d(2000px, 0, 0);
            transform: scale(.1) translate3d(2000px, 0, 0);
            -webkit-transform-origin: right center;
            transform-origin: right center
        }
    }

    @-webkit-keyframes zoomOutUp {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }

        to {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
    }

    @keyframes zoomOutUp {
        40% {
            opacity: 1;
            -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
            transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
            -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
            animation-timing-function: cubic-bezier(.55, .055, .675, .19)
        }

        to {
            opacity: 0;
            -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
            transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
            -webkit-transform-origin: center bottom;
            transform-origin: center bottom;
            -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
            animation-timing-function: cubic-bezier(.175, .885, .32, 1)
        }
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

    @-webkit-keyframes slideInLeft {
        from {
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
            visibility: visible
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes slideInLeft {
        from {
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
            visibility: visible
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @-webkit-keyframes slideInRight {
        from {
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
            visibility: visible
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes slideInRight {
        from {
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
            visibility: visible
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @-webkit-keyframes slideInUp {
        from {
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
            visibility: visible
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @keyframes slideInUp {
        from {
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
            visibility: visible
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    @-webkit-keyframes slideOutDown {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        to {
            visibility: hidden;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0)
        }
    }

    @keyframes slideOutDown {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        to {
            visibility: hidden;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0)
        }
    }

    @-webkit-keyframes slideOutLeft {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        to {
            visibility: hidden;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0)
        }
    }

    @keyframes slideOutLeft {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        to {
            visibility: hidden;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0)
        }
    }

    @-webkit-keyframes slideOutRight {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        to {
            visibility: hidden;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
    }

    @keyframes slideOutRight {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        to {
            visibility: hidden;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
    }

    @-webkit-keyframes slideOutUp {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        to {
            visibility: hidden;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0)
        }
    }

    @keyframes slideOutUp {
        from {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        to {
            visibility: hidden;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0)
        }
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: local('Poppins Light'), local('Poppins-Light'), url(/fonts/pxiByp8kv8JHgFVrLDz8Z11lFc-K.woff2) format('woff2');
        unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: local('Poppins Light'), local('Poppins-Light'), url(/fonts/pxiByp8kv8JHgFVrLDz8Z1JlFc-K.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: local('Poppins Light'), local('Poppins-Light'), url(/fonts/pxiByp8kv8JHgFVrLDz8Z1xlFQ.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Poppins Regular'), local('Poppins-Regular'), url(/fonts/pxiEyp8kv8JHgFVrJJbecmNE.woff2) format('woff2');
        unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Poppins Regular'), local('Poppins-Regular'), url(/fonts/pxiEyp8kv8JHgFVrJJnecmNE.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Poppins Regular'), local('Poppins-Regular'), url(/fonts/pxiEyp8kv8JHgFVrJJfecg.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: local('Poppins Medium'), local('Poppins-Medium'), url(/fonts/pxiByp8kv8JHgFVrLGT9Z11lFc-K.woff2) format('woff2');
        unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: local('Poppins Medium'), local('Poppins-Medium'), url(/fonts/pxiByp8kv8JHgFVrLGT9Z1JlFc-K.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: local('Poppins Medium'), local('Poppins-Medium'), url(/fonts/pxiByp8kv8JHgFVrLGT9Z1xlFQ.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Poppins Bold'), local('Poppins-Bold'), url(/fonts/pxiByp8kv8JHgFVrLCz7Z11lFc-K.woff2) format('woff2');
        unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Poppins Bold'), local('Poppins-Bold'), url(/fonts/pxiByp8kv8JHgFVrLCz7Z1JlFc-K.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Poppins;
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: local('Poppins Bold'), local('Poppins-Bold'), url(/fonts/pxiByp8kv8JHgFVrLCz7Z1xlFQ.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'PT Sans';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('PT Sans'), local('PTSans-Regular'), url(/fonts/jizaRExUiTo99u79D0-ExdGM.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: 'PT Sans';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('PT Sans'), local('PTSans-Regular'), url(/fonts/jizaRExUiTo99u79D0aExdGM.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
    }

    @font-face {
        font-family: 'PT Sans';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('PT Sans'), local('PTSans-Regular'), url(/fonts/jizaRExUiTo99u79D0yExdGM.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: 'PT Sans';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('PT Sans'), local('PTSans-Regular'), url(/fonts/jizaRExUiTo99u79D0KExQ.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Roboto;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Roboto'), local('Roboto-Regular'), url(/fonts/KFOmCnqEu92Fr1Mu72xKOzY.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
    }

    @font-face {
        font-family: Roboto;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Roboto'), local('Roboto-Regular'), url(/fonts/KFOmCnqEu92Fr1Mu5mxKOzY.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
    }

    @font-face {
        font-family: Roboto;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Roboto'), local('Roboto-Regular'), url(/fonts/KFOmCnqEu92Fr1Mu7mxKOzY.woff2) format('woff2');
        unicode-range: U+1F00-1FFF
    }

    @font-face {
        font-family: Roboto;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Roboto'), local('Roboto-Regular'), url(/fonts/KFOmCnqEu92Fr1Mu4WxKOzY.woff2) format('woff2');
        unicode-range: U+0370-03FF
    }

    @font-face {
        font-family: Roboto;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Roboto'), local('Roboto-Regular'), url(/fonts/KFOmCnqEu92Fr1Mu7WxKOzY.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: Roboto;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Roboto'), local('Roboto-Regular'), url(/fonts/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Roboto;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Roboto'), local('Roboto-Regular'), url(/fonts/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: 'Squada One';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Squada One'), local('SquadaOne-Regular'), url(/fonts/BCasqZ8XsOrx4mcOk6Mtaac2WQ.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
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

    .bg-black-5 {
        background: #444 !important
    }

    .bg-black-6 {
        background: #1c1c1c !important
    }

    .bg-black-2 .form-control {
        background: #2c2c2c;
        border: dashed 1px #7b5e0b !important
    }

    .bg-black-2 .form-control:focus {
        background: #2c2c2c !important
    }

    .bg-black-3 .form-control {
        background: #303030
    }

    .bg-black-3 .form-control:focus {
        background: #303030 !important
    }

    .open {
        display: block !important
    }

    i[class*=icon-] {
        -webkit-transform: translateY(2px);
        transform: translateY(2px)
    }

    a {
        -webkit-transition: all .4s;
        transition: all .4s
    }

    a,
    button,
    i,
    small,
    span {
        display: inline-block
    }

    .table td,
    .table th {
        padding: .55rem
    }

    h1 span,
    h2 span,
    h3 span {
        margin-right: 15px
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

    p {
        color: #444
    }

    #font-setting-buttons .btn {
        margin: 0 2px;
        padding: 0;
        font-weight: 500;
        vertical-align: baseline;
        background: 0;
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

    .call-pont {
        display: none
    }

    .property-single-features ol,
    .property-single-features ul {
        color: #444;
        font-size: 16px;
        font-weight: 400
    }

    .text-small {
        font-size: .9rem
    }

    .text-thin {
        font-weight: 400 !important
    }

    .btn {
        -webkit-transition: all .3s !important;
        transition: all .3s !important
    }

    .table-responsive {
        display: table
    }

    .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
        width: 100%
    }

    .no-anchor-style {
        text-decoration: none !important;
        color: inherit !important
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
        background: rgba(17, 17, 17, .42);
        z-index: -1
    }

    .has-line::after,
    .quick_enq .has-line::after {
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
        font-family: Poppins, sans-serif;
        color: #999 !important
    }

    .form-control::-webkit-input-placeholder {
        font-size: .9rem;
        font-weight: 300;
        font-family: Poppins, sans-serif;
        color: #999 !important
    }

    .form-control:-ms-input-placeholder {
        font-size: .9rem;
        font-weight: 300;
        font-family: Poppins, sans-serif;
        color: #999 !important
    }

    label {
        color: #ccc;
        padding-left: 15px;
        margin-top: 15px
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

    .breadcrumb {
        background: 0;
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

    .breadcrumb a:focus,
    .breadcrumb a:hover {
        color: #f3c84b;
        text-decoration: none
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

    .top-bar a:focus,
    .top-bar a:hover {
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
        line-height: 2.5
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

    .top-bar .menu-right a:focus,
    .top-bar .menu-right a:hover {
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
        background: 0;
        border: 0;
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
        font-family: Poppins, sans-serif;
        font-weight: 300
    }

    .search-inner input::-webkit-input-placeholder {
        font-family: Poppins, sans-serif;
        font-weight: 300
    }

    .search-inner input:-ms-input-placeholder {
        font-family: Poppins, sans-serif;
        font-weight: 300
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

    .list-inline-item:not(:last-child) {
        margin-right: .7rem
    }

    nav.navbar {
        padding-top: 0;
        padding-bottom: 0;
        background: #ffffff8f;
        color: #fff;
        -webkit-box-shadow: 0 2px 6px 0 rgba(0, 0, 0, .14);
        box-shadow: 0 2px 6px 0 rgba(0, 0, 0, .14);
        z-index: 11;
        -webkit-transition: all .4s;
        transition: all .4s;
        height: 65px
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
        padding: 7px 15px
    }

    nav.navbar .es .nav-link,
    nav.navbar .ru .nav-link {
        letter-spacing: 0;
        margin-right: 0
    }

    nav.navbar .nav-link:hover {
        color: #f3c84b
    }

    nav.navbar .navbar-brand {
        max-width: 250px;
        min-height: 65px
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
        width: auto
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

    #a img,
    .btn-select img {
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

    #a li span,
    .btn-select li span {
        margin-left: 5px;
        font-size: 11px;
        margin-right: 5px;
    }

    .b {
        display: none;
        width: 100%;
        max-width: 100px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        border: 1px solid rgba(0, 0, 0, .15);
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
            display: none;
            float: left;
        }
    }

    @media(max-width: 992px) {
        .m-home {
            float: left;
        }
    }

    @keyframes blinkingText {
        0 {
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

    .form-control[readonly] {
        background-color: #999
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
        background-color: rgba(0, 0, 0, .38);
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
        background: -webkit-gradient(linear, right top, left top, from(#666), to(#000));
        background: linear-gradient(270deg, #666, #000);
        padding-top: 22vh
    }

    .main-slider.offer-bnr h2 {
        background: -webkit-linear-gradient(hsla(0, 0, 100%, .37), rgba(50, 50, 50, 0));
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

    .inner-banner:after {
        content: '';
        display: block;
        background: #000000a6;
        width: 100%;
        height: 65px;
        bottom: 0;
        z-index: 1;
        position: absolute
    }

    .offer-img {
        background: url(/images/sp-offers.png) no-repeat;
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
        background: rgba(34, 34, 34, .96);
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

    .property .price {
        font-size: 1.1rem
    }

    .property .price small {
        font-size: .8rem;
        color: #8c8c8c
    }

    .property .property-footer {
        padding: 30px
    }

    .property .property-footer .text {
        color: #999
    }

    .property .property-footer .text span {
        font-size: .8rem
    }

    .pro-type .row {
        margin-left: -7px;
        margin-right: -7px
    }

    .pro-type [class*=col-] {
        padding-left: 7px;
        padding-right: 7px
    }

    .communities {
        position: relative;
        overflow: hidden
    }

    .new-properties .container-fluid {
        padding-right: inherit;
        padding-left: inherit
    }

    .similar-properties {
        background: url(/images/pattern.png) #fafafa;
        padding: 4rem 0
    }

    .similar-properties .arrow-left {
        position: absolute;
        height: 32px;
        z-index: 2;
        width: 32px;
        border-radius: 50%;
        top: -47px;
        box-shadow: 0 1px 5px rgba(0, 0, 0, .7);
        outline: 0;
        background: url(/images/left-arrow.png) no-repeat 10px rgba(255, 255, 255, .71);
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
        box-shadow: 0 1px 5px rgba(0, 0, 0, .7);
        outline: 0;
        background: url(/images/right-arrow.png) no-repeat 10px rgba(255, 255, 255, .71);
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
        -webkit-box-shadow: 0 0 27px 0 rgba(0, 0, 0, .12);
        box-shadow: 0 0 27px 0 rgba(0, 0, 0, .12)
    }

    .about .image img {
        height: 100%
    }

    .about .text {
        padding: 30px;
        -webkit-box-shadow: 0 0 27px 0 rgba(0, 0, 0, .12);
        box-shadow: 0 0 27px 0 rgba(0, 0, 0, .12);
        background: #333;
        height: 100%
    }

    .about .text p {
        color: #8f8f8f;
        line-height: 1.8rem;
        margin-top: 15px
    }

    .about .text .price {
        color: #f3c84b
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

    footer.footer a:focus,
    footer.footer a:hover {
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

    footer.footer .social a:focus,
    footer.footer .social a:hover {
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
        background-image: -webkit-gradient(linear, left top, right top, from(#f3c84b), to(#37cfdc));
        background-image: linear-gradient(to right, #f3c84b, #37cfdc);
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
        background-image: -webkit-gradient(linear, left top, right top, from(#f3c84b), to(#37cfdc));
        background-image: linear-gradient(to right, #f3c84b, #37cfdc);
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

    .map {
        position: relative
    }

    .collapse-map {
        padding: 10px 30px;
        background: #383838;
        text-decoration: none !important;
        color: #eee !important;
        border-radius: 30px;
        -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, .1);
        box-shadow: 0 0 15px rgba(0, 0, 0, .1);
        position: absolute;
        top: 0;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
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

    .toggle-features:focus,
    .toggle-features:hover {
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

    .property-single .gallery-top {
        height: 80%;
        width: 100%
    }

    .floor-plan a,
    .payment-plan a,
    .property-single-description a,
    .property-single-features a,
    .property-single-map a {
        color: #585858
    }

    .floor-plan p a,
    .payment-plan p a,
    .property-single-features p a,
    .property-single-map p a {
        font-weight: 600
    }

    .floor-plan p a:hover,
    .payment-plan p a:hover,
    .property-single-features p a:hover,
    .property-single-map p a:hover {
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

    .property-single-details span {
        color: #999;
        font-size: .85rem;
        margin-bottom: 15px
    }

    .floor-plan .image {
        padding: 30px;
        margin-top: 40px
    }

    .floor-plan .nav-tabs,
    .property-single-map .nav-tabs {
        border-bottom: 0
    }

    .floor-plan a.nav-link,
    .property-single-map a.nav-link {
        border: 0;
        border-radius: 50px;
        font-size: .85rem;
        padding: 5px 20px;
        background: #383838;
        margin: 5px;
        color: #999
    }

    .floor-plan a.nav-link.active,
    .property-single-map a.nav-link.active {
        background: #f3c84b;
        color: #fff
    }

    .floor-plan .card-header {
        font-size: 14px;
        font-weight: 500;
        padding: .35rem .75rem;
        background: 0
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

    .floor-plan .table td,
    .floor-plan .table th {
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

    .payment-plan table td,
    .payment-plan table th {
        padding: 10px;
        font-size: 13px;
        border: 0;
        color: #343a40
    }

    .payment-plan table tbody tr {
        background: #fff
    }

    .payment-plan table tbody tr:nth-child(even) {
        background: #f5f5f5
    }

    .payment-plan h4 {
        font-size: 16px
    }

    .g-type {
        border-bottom: 0;
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
        box-shadow: 0 1px 3px rgba(0, 0, 0, .3);
        outline: 0;
        background: url(/images/left-arrow.png) no-repeat 10px #fff;
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
        box-shadow: 0 1px 3px rgba(0, 0, 0, .3);
        outline: 0;
        background: url(/images/right-arrow.png) no-repeat 10px #fff;
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

    .new_form input,
    .new_form select {
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

    .amenities .has-line::after,
    .property-gallery .has-line::after {
        margin: 10px auto
    }

    .bitcoin-modal img {
        height: 100%;
        object-fit: cover
    }

    .bitcoin-modal .close {
        margin: 6px 15px;
        font-size: 24px
    }

    .bitcoin-modal .close:focus {
        outline: 0;
        border: 0
    }

    .bitcoin-modal p {
        line-height: 1.3;
        font-size: 13px
    }

    .bitcoin-modal .form-group {
        margin-bottom: 18px
    }

    .bitcoin-modal .form-control {
        padding: 8px 15px
    }

    .bitcoin-modal textarea {
        padding: 8px 15px;
        min-height: 55px;
        font-size: 11px;
        color: #868e96
    }

    .bitcoin-modal .input-group-prepend {
        max-width: 121px
    }

    .bitcoin-modal .input-group-prepend select.form-control {
        height: 42px !important
    }

    @media(max-width: 992px) {
        .navbar-toggler {
            position: absolute;
            left: 0;
            top: 15px
        }
    }

    @media(max-width: 767px) {
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

        .quick_enq,
        .similar-properties {
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
            background: url(/images/sp-offers.png) no-repeat;
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

    #property-single-map {
        width: 100%;
        height: 400px
    }

    .about-brief img {
        -webkit-box-shadow: 0 0 27px 0 rgba(0, 0, 0, .12);
        box-shadow: 0 0 27px 0 rgba(0, 0, 0, .12)
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
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-brand:focus,
    .navbar-light .navbar-brand:hover {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-nav .nav-link {
        color: rgba(0, 0, 0, .5)
    }

    .navbar-light .navbar-nav .nav-link:focus,
    .navbar-light .navbar-nav .nav-link:hover {
        color: rgba(0, 0, 0, .7)
    }

    .navbar-light .navbar-nav .active>.nav-link,
    .navbar-light .navbar-nav .nav-link.active,
    .navbar-light .navbar-nav .nav-link.show,
    .navbar-light .navbar-nav .show>.nav-link {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-toggler {
        color: rgba(0, 0, 0, .5);
        border-color: rgba(0, 0, 0, .1)
    }

    .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3CsvgviewBox='003030'xmlns='http://www.w3.org/2000/svg'%3E%3Cpathstroke='rgba(0,0,0,0.5)'stroke-width='2'stroke-linecap='round'stroke-miterlimit='10'd='M47h22M415h22M423h22'/%3E%3C/svg%3E")
    }

    .navbar-light .navbar-text {
        color: rgba(0, 0, 0, .5)
    }

    .navbar-dark .navbar-brand {
        color: #fff
    }

    .navbar-dark .navbar-brand:focus,
    .navbar-dark .navbar-brand:hover {
        color: #fff
    }

    .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, .5)
    }

    .navbar-dark .navbar-nav .nav-link:focus,
    .navbar-dark .navbar-nav .nav-link:hover {
        color: rgba(255, 255, 255, .75)
    }

    .navbar-dark .navbar-nav .active>.nav-link,
    .navbar-dark .navbar-nav .nav-link.active,
    .navbar-dark .navbar-nav .nav-link.show,
    .navbar-dark .navbar-nav .show>.nav-link {
        color: #fff
    }

    .navbar-dark .navbar-toggler {
        color: rgba(255, 255, 255, .5);
        border-color: rgba(255, 255, 255, .1)
    }

    .navbar-dark .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3CsvgviewBox='003030'xmlns='http://www.w3.org/2000/svg'%3E%3Cpathstroke='rgba(255,255,255,0.5)'stroke-width='2'stroke-linecap='round'stroke-miterlimit='10'd='M47h22M415h22M423h22'/%3E%3C/svg%3E")
    }

    .navbar-dark .navbar-text {
        color: rgba(255, 255, 255, .5)
    }

    .btn {
        font-weight: 500;
        border: 1px solid transparent;
        text-transform: uppercase;
        padding: .625rem 1.5rem;
        font-size: .8rem;
        line-height: 1.5;
        border-radius: 5px;
        -webkit-transition: background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
        transition: background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
        transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out
    }

    .btn:focus {
        outline: 0;
        -webkit-box-shadow: 0 0 0 .2rem rgba(89, 137, 229, .25);
        box-shadow: 0 0 0 .2rem rgba(89, 137, 229, .25)
    }

    .btn:disabled {
        opacity: .65
    }

    .btn:not([disabled]):not(.disabled).active,
    .btn:not([disabled]):not(.disabled):active {
        background-image: none
    }

    .btn-primary {
        color: color-yiq(#f3c84b);
        background-color: #1d6aab;
        border-color: #1d6aab
    }

    .btn-primary:hover {
        color: color-yiq(#3871e0);
        background-color: #3871e0;
        border-color: #2d6ade
    }

    .btn-primary:focus {
        -webkit-box-shadow: 0 0 0 .2rem rgba(89, 137, 229, .5);
        box-shadow: 0 0 0 .2rem rgba(89, 137, 229, .5)
    }

    .btn-primary:disabled {
        background-color: #f3c84b;
        border-color: #f3c84b
    }

    .btn-primary:not([disabled]):not(.disabled).active,
    .btn-primary:not([disabled]):not(.disabled):active {
        color: color-yiq(#2d6ade);
        background-color: #2d6ade;
        border-color: #2262dc;
        -webkit-box-shadow: 0 0 0 .2rem rgba(89, 137, 229, .5);
        box-shadow: 0 0 0 .2rem rgba(89, 137, 229, .5)
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

    .btn-info:focus {
        -webkit-box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5);
        box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
    }

    .btn-info:disabled {
        background-color: #17a2b8;
        border-color: #17a2b8
    }

    .btn-info:not([disabled]):not(.disabled).active,
    .btn-info:not([disabled]):not(.disabled):active {
        color: color-yiq(#117a8b);
        background-color: #117a8b;
        border-color: #10707f;
        -webkit-box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5);
        box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
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

    .btn-danger:focus {
        -webkit-box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5);
        box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
    }

    .btn-danger:disabled {
        background-color: #dc3545;
        border-color: #dc3545
    }

    .btn-danger:not([disabled]):not(.disabled).active,
    .btn-danger:not([disabled]):not(.disabled):active {
        color: color-yiq(#bd2130);
        background-color: #bd2130;
        border-color: #b21f2d;
        -webkit-box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5);
        box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
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

    .btn-light:focus {
        -webkit-box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5);
        box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
    }

    .btn-light:disabled {
        background-color: #f8f9fa;
        border-color: #f8f9fa
    }

    .btn-light:not([disabled]):not(.disabled).active,
    .btn-light:not([disabled]):not(.disabled):active {
        color: color-yiq(#dae0e5);
        background-color: #dae0e5;
        border-color: #d3d9df;
        -webkit-box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5);
        box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
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

    .btn-dark:focus {
        -webkit-box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5);
        box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
    }

    .btn-dark:disabled {
        background-color: #343a40;
        border-color: #343a40
    }

    .btn-dark:not([disabled]):not(.disabled).active,
    .btn-dark:not([disabled]):not(.disabled):active {
        color: color-yiq(#1d2124);
        background-color: #1d2124;
        border-color: #171a1d;
        -webkit-box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5);
        box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
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
        font-family: 'PT Sans', sans-serif;
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

    a:focus,
    a:hover {
        color: #215dd1;
        text-decoration: underline
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
        line-height: 1.2
    }

    .h1,
    h1 {
        font-size: 2.5rem
    }

    .h2,
    h2 {
        font-size: 1.7rem
    }

    .h3,
    h3 {
        font-size: 1.4rem
    }

    .h4,
    h4 {
        font-size: 1.1rem
    }

    .h5,
    h5 {
        font-size: 1rem
    }

    .h6,
    h6 {
        font-size: 1rem
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

    .small,
    small {
        font-size: 80%;
        font-weight: 400
    }

    .text-primary {
        color: #f3c84b !important
    }

    a.text-primary:focus,
    a.text-primary:hover {
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

    .page-link {
        padding: .5rem .75rem;
        line-height: 1.25;
        color: #f3c84b;
        background-color: #fff;
        border: 1px solid #ddd
    }

    .page-link:focus,
    .page-link:hover {
        color: #215dd1;
        text-decoration: none;
        background-color: #e9ecef;
        border-color: #ddd
    }

    .bg-primary {
        background-color: #f3c84b !important
    }

    a.bg-primary:focus,
    a.bg-primary:hover {
        background-color: #2d6ade !important
    }

    .bg-info {
        background-color: #17a2b8 !important
    }

    a.bg-info:focus,
    a.bg-info:hover {
        background-color: #117a8b !important
    }

    .bg-danger {
        background-color: #dc3545 !important
    }

    a.bg-danger:focus,
    a.bg-danger:hover {
        background-color: #bd2130 !important
    }

    .bg-light {
        background-color: #f8f9fa !important
    }

    a.bg-light:focus,
    a.bg-light:hover {
        background-color: #dae0e5 !important
    }

    .bg-dark {
        background-color: #343a40 !important
    }

    a.bg-dark:focus,
    a.bg-dark:hover {
        background-color: #1d2124 !important
    }

    .border-primary {
        border-color: #f3c84b !important
    }

    .border-info {
        border-color: #17a2b8 !important
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

    a.text-primary:focus,
    a.text-primary:hover {
        color: #2d6ade !important
    }

    .text-info {
        color: #17a2b8 !important
    }

    a.text-info:focus,
    a.text-info:hover {
        color: #117a8b !important
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

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #c7d7f6;
        outline: 0;
        -webkit-box-shadow: 0 0 0 .2rem rgba(89, 137, 229, .25);
        box-shadow: 0 0 0 .2rem rgba(89, 137, 229, .25)
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

    .form-control:disabled,
    .form-control[readonly] {
        background-color: #e9ecef
    }

    select.form-control:not([size]):not([multiple]) {
        height: calc(2rem+8px)
    }

    .floating-label-wrap select.form-control:not([size]):not([multiple]) {
        height: calc(2rem+2px)
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
        height: calc(2.1125rem+2px)
    }

    .form-control-lg {
        padding: .8rem 1.8rem;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: .3rem
    }

    select.form-control-lg:not([size]):not([multiple]) {
        height: calc(3.475rem+2px)
    }

    @media only screen and (min-width: 1200px) {
        .container {
            max-width: 1250px
        }
    }

    @media(max-width: 767px) {
        .main-slider .img-banner {
            height: 76vh
        }

        .main-slider .inner-banner {
            height: 25vh;
            position: relative
        }

        .main-slider,
        .main-slider.h-auto {
            margin-top: 0
        }

        nav.navbar .navbar-brand {
            margin-left: 45px
        }

        nav.navbar img.logo {
            max-height: 50px;
            max-width: 130px;
            object-fit: cover;
            min-height: auto;
            width: auto;
            height: auto;
            vertical-align: -webkit-baseline-middle
        }

        footer.footer .copyrights {
            text-align: center
        }

        footer.footer .copyrights .text-right {
            text-align: center !important
        }

        footer .links,
        footer .newsletter {
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

        .inner-banner:after {
            background: 0
        }

        .pro-summary {
            background: #000000c4;
            margin-top: -54px;
            padding-top: 11px
        }

        .pro-summary header {
            margin-bottom: 0
        }

        .pro-summary header h1 {
            font-size: 16px
        }

        .pro-summary header .loc {
            margin-bottom: 9px
        }

        .pro-info .pro-info-warp {
            margin-bottom: 10px
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

    @media(max-width: 991px) {
        nav.navbar .navbar-collapse {
            max-height: 350px;
            overflow-y: auto;
            background: #fff
        }
    }

    .enq_top {
        min-width: 300px
    }

    .enq_top>div {
        background: #000000db;
        border-radius: 5px
    }

    .enq_top .text {
        color: #ccc;
        text-transform: uppercase;
        border-top: solid 1px #ccc;
        margin-bottom: 0;
        margin-top: 5px
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

    .floating-label {
        font: inherit;
        line-height: 1;
        display: block;
        width: 100%;
        min-height: inherit
    }

    .floating-label-wrap {
        position: relative;
        margin-bottom: 15px
    }

    .quick_enq {
        padding: 4rem 0
    }

    .floating-label-wrap {
        margin-bottom: 22px
    }

    .quick-input input,
    .quick-input textarea {
        border: 1px solid #ccc !important;
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

    .quick_enq .btn {
        color: #000
    }

    .enq_top .btn {
        padding: 5px;
        color: #000
    }

    @media(max-width: 767px) {
        .quick-input textarea {
            min-height: 95px
        }
    }

    .cover {
        object-fit: cover;
        height: 100%;
        width: 100%
    }

    #lg-counter,
    .lg-outer .lg-video-cont {
        vertical-align: middle;
        display: inline-block
    }

    #lg-zoom-out,
    .lg-actions .lg-next.disabled,
    .lg-actions .lg-prev.disabled {
        opacity: .5;
        pointer-events: none
    }

    .lg-sub-html,
    .lg-toolbar {
        background-color: rgba(0, 0, 0, .45)
    }

    @font-face {
        font-family: lg;
        src: url(/fonts/lg.eot?n1z373);
        src: url(/fonts/lg.eot?#iefixn1z373) format("embedded-opentype"), url(/fonts/lg.woff?n1z373) format("woff"), url(/fonts/lg.ttf?n1z373) format("truetype"), url(/fonts/lg.svg?n1z373#lg) format("svg");
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
        border: 0;
        outline: 0
    }

    .lg-outer .lg-toogle-thumb,
    .lg-toolbar .lg-icon {
        color: #999;
        font-size: 24px;
        line-height: 27px;
        text-align: center;
        cursor: pointer
    }

    .lg-actions .lg-next:hover,
    .lg-actions .lg-prev:hover,
    .lg-outer .lg-toogle-thumb:hover,
    .lg-outer.lg-dropdown-active #lg-share,
    .lg-toolbar .lg-icon:hover {
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

        0%,
        100% {
            left: 0
        }

        50% {
            left: -30px
        }
    }

    @-moz-keyframes lg-right-end {

        0%,
        100% {
            left: 0
        }

        50% {
            left: -30px
        }
    }

    @-ms-keyframes lg-right-end {

        0%,
        100% {
            left: 0
        }

        50% {
            left: -30px
        }
    }

    @keyframes lg-right-end {

        0%,
        100% {
            left: 0
        }

        50% {
            left: -30px
        }
    }

    @-webkit-keyframes lg-left-end {

        0%,
        100% {
            left: 0
        }

        50% {
            left: 30px
        }
    }

    @-moz-keyframes lg-left-end {

        0%,
        100% {
            left: 0
        }

        50% {
            left: 30px
        }
    }

    @-ms-keyframes lg-left-end {

        0%,
        100% {
            left: 0
        }

        50% {
            left: 30px
        }
    }

    @keyframes lg-left-end {

        0%,
        100% {
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

    .lg-next,
    .lg-prev,
    .lg-toolbar {
        opacity: 1;
        -webkit-transition: -webkit-transform .35s cubic-bezier(0, 0, .25, 1), opacity .35s cubic-bezier(0, 0, .25, 1), color .2s linear;
        -moz-transition: -moz-transform .35s cubic-bezier(0, 0, .25, 1), opacity .35s cubic-bezier(0, 0, .25, 1), color .2s linear;
        -o-transition: -o-transform .35s cubic-bezier(0, 0, .25, 1), opacity .35s cubic-bezier(0, 0, .25, 1), color .2s linear;
        transition: transform .35s cubic-bezier(0, 0, .25, 1), opacity .35s cubic-bezier(0, 0, .25, 1), color .2s linear
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
        -webkit-transition: -webkit-transform 250ms cubic-bezier(0, 0, .25, 1), opacity 250ms cubic-bezier(0, 0, .25, 1) !important;
        -moz-transition: -moz-transform 250ms cubic-bezier(0, 0, .25, 1), opacity 250ms cubic-bezier(0, 0, .25, 1) !important;
        -o-transition: -o-transform 250ms cubic-bezier(0, 0, .25, 1), opacity 250ms cubic-bezier(0, 0, .25, 1) !important;
        transition: transform 250ms cubic-bezier(0, 0, .25, 1), opacity 250ms cubic-bezier(0, 0, .25, 1) !important;
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

    .lg-outer .lg-thumb-outer.lg-grab .lg-thumb-item,
    .lg-outer.lg-grab img.lg-object {
        cursor: -webkit-grab;
        cursor: -moz-grab;
        cursor: -o-grab;
        cursor: -ms-grab;
        cursor: grab
    }

    .lg-outer .lg-thumb-outer.lg-grabbing .lg-thumb-item,
    .lg-outer.lg-grabbing img.lg-object {
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
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
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

    .lg-backdrop.in,
    .lg-css3.lg-fade .lg-item.lg-current,
    .lg-outer .lg-has-html5:hover .lg-video-play,
    .lg-outer.lg-show-after-load .lg-item.lg-complete .lg-object,
    .lg-outer.lg-show-after-load .lg-item.lg-complete .lg-video-play,
    .lg-outer.lg-visible,
    .lg-show-autoplay .lg-progress-bar {
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

    .lg-outer .lg-empty-html,
    .lg-outer .lg-has-video.lg-video-playing .lg-object,
    .lg-outer .lg-has-video.lg-video-playing .lg-video-play,
    .lg-outer.lg-hide-download #lg-download {
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

    .lg-outer.lg-css3.lg-zoom-dragging .lg-item.lg-complete.lg-zoomable .lg-image,
    .lg-outer.lg-css3.lg-zoom-dragging .lg-item.lg-complete.lg-zoomable .lg-img-wrap {
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
        -webkit-transition: left .3s cubic-bezier(0, 0, .25, 1), top .3s cubic-bezier(0, 0, .25, 1) 0;
        -moz-transition: left .3s cubic-bezier(0, 0, .25, 1), top .3s cubic-bezier(0, 0, .25, 1) 0;
        -o-transition: left .3s cubic-bezier(0, 0, .25, 1), top .3s cubic-bezier(0, 0, .25, 1) 0;
        transition: left .3s cubic-bezier(0, 0, .25, 1), top .3s cubic-bezier(0, 0, .25, 1) 0
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
        -webkit-transition: -webkit-transform .3s cubic-bezier(0, 0, .25, 1), opacity .15s !important;
        -moz-transition: -moz-transform .3s cubic-bezier(0, 0, .25, 1), opacity .15s !important;
        -o-transition: -o-transform .3s cubic-bezier(0, 0, .25, 1), opacity .15s !important;
        transition: transform .3s cubic-bezier(0, 0, .25, 1), opacity .15s !important;
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
        -webkit-transition: opacity .15s, -webkit-transform .15s 0;
        -moz-transition: opacity .15s, -moz-transform .15s 0;
        -o-transition: opacity .15s, -o-transform .15s 0;
        transition: opacity .15s, transform .15s 0;
        -webkit-transform: translate3d(0, 5px, 0);
        transform: translate3d(0, 5px, 0)
    }

    .lg-outer,
    .lg-outer .lg,
    .lg-outer .lg-inner,
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
        -webkit-transition: box-shadow .3s 0;
        -o-transition: box-shadow .3s 0;
        transition: box-shadow .3s 0;
        width: 12px
    }

    .lg-outer .lg-pager:focus,
    .lg-outer .lg-pager:hover {
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

    .lg-outer.lg-dropdown-active #lg-dropdown-overlay,
    .lg-outer.lg-dropdown-active .lg-dropdown {
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
        -webkit-transition: -webkit-transform .18s linear, visibility 0 linear .5s, opacity .18s linear 0;
        -moz-transition: -moz-transform .18s linear, visibility 0 linear .5s, opacity .18s linear 0;
        -o-transition: -o-transform .18s linear, visibility 0 linear .5s, opacity .18s linear 0;
        transition: transform .18s linear, visibility 0 linear .5s, opacity .18s linear 0
    }

    .lg-outer #lg-share,
    .lg-outer .lg {
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

    .lg-outer .lg-dropdown>li:last-child {
        margin-bottom: 0
    }

    .lg-outer .lg-dropdown>li:hover .lg-icon,
    .lg-outer .lg-dropdown>li:hover a {
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

    .lg-outer.lg-css3 .lg-item.lg-current,
    .lg-outer.lg-css3 .lg-item.lg-next-slide,
    .lg-outer.lg-css3 .lg-item.lg-prev-slide {
        -webkit-transition-duration: inherit !important;
        transition-duration: inherit !important;
        -webkit-transition-timing-function: inherit !important;
        transition-timing-function: inherit !important
    }

    .lg-outer.lg-css3.lg-dragging .lg-item.lg-current,
    .lg-outer.lg-css3.lg-dragging .lg-item.lg-next-slide,
    .lg-outer.lg-css3.lg-dragging .lg-item.lg-prev-slide {
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

    .lg-outer.lg-css .lg-current,
    .lg-outer.lg-css3 .lg-current,
    .lg-outer.lg-css3 .lg-next-slide,
    .lg-outer.lg-css3 .lg-prev-slide {
        display: inline-block !important
    }

    .lg-outer .lg-img-wrap,
    .lg-outer .lg-item {
        display: inline-block;
        text-align: center;
        position: absolute;
        width: 100%;
        height: 100%
    }

    .lg-outer .lg-img-wrap:before,
    .lg-outer .lg-item:before {
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

    .lg-css3.lg-no-trans .lg-current,
    .lg-css3.lg-no-trans .lg-next-slide,
    .lg-css3.lg-no-trans .lg-prev-slide {
        -webkit-transition: none 0 0 !important;
        -moz-transition: none 0 0 !important;
        -o-transition: none 0 0 !important;
        transition: none 0 0 !important
    }

    .lg-css3.lg-use-css3 .lg-item,
    .lg-css3.lg-use-left .lg-item {
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden
    }

    .lg-css3.lg-fade .lg-item,
    .lg-css3.lg-slide.lg-use-css3 .lg-item {
        opacity: 0
    }

    .lg-css3.lg-fade .lg-item.lg-current,
    .lg-css3.lg-fade .lg-item.lg-next-slide,
    .lg-css3.lg-fade .lg-item.lg-prev-slide {
        -webkit-transition: opacity .1s 0;
        -moz-transition: opacity .1s 0;
        -o-transition: opacity .1s 0;
        transition: opacity .1s 0
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

    .lg-css3.lg-slide.lg-use-css3 .lg-item.lg-current,
    .lg-css3.lg-slide.lg-use-css3 .lg-item.lg-next-slide,
    .lg-css3.lg-slide.lg-use-css3 .lg-item.lg-prev-slide {
        -webkit-transition: -webkit-transform 1s cubic-bezier(0, 0, .25, 1), opacity .1s 0;
        -moz-transition: -moz-transform 1s cubic-bezier(0, 0, .25, 1), opacity .1s 0;
        -o-transition: -o-transform 1s cubic-bezier(0, 0, .25, 1), opacity .1s 0;
        transition: transform 1s cubic-bezier(0, 0, .25, 1), opacity .1s 0
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

    .lg-css3.lg-slide.lg-use-left .lg-item.lg-current,
    .lg-css3.lg-slide.lg-use-left .lg-item.lg-next-slide,
    .lg-css3.lg-slide.lg-use-left .lg-item.lg-prev-slide {
        -webkit-transition: left 1s cubic-bezier(0, 0, .25, 1), opacity .1s 0;
        -moz-transition: left 1s cubic-bezier(0, 0, .25, 1), opacity .1s 0;
        -o-transition: left 1s cubic-bezier(0, 0, .25, 1), opacity .1s 0;
        transition: left 1s cubic-bezier(0, 0, .25, 1), opacity .1s 0
    }
</style>