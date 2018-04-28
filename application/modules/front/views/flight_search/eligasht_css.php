<style>
@charset "UTF-8";@-webkit-keyframes flipInY {
    0% {
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
    0% {
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

@-webkit-keyframes toBottomFromTop {
    49% {
        -webkit-transform: translateY(100%)
    }

    50% {
        opacity: 0;
        -webkit-transform: translateY(-100%)
    }

    51% {
        opacity: 1
    }
}

@-moz-keyframes toBottomFromTop {
    49% {
        -moz-transform: translateY(100%)
    }

    50% {
        opacity: 0;
        -moz-transform: translateY(-100%)
    }

    51% {
        opacity: 1
    }
}

@keyframes toBottomFromTop {
    49% {
        transform: translateY(100%)
    }

    50% {
        opacity: 0;
        transform: translateY(-100%)
    }

    51% {
        opacity: 1
    }
}

@-webkit-keyframes fadeOut {
    0% {
        opacity: 1
    }

    to {
        opacity: 0
    }
}

@keyframes fadeOut {
    0% {
        opacity: 1
    }

    to {
        opacity: 0
    }
}

@-webkit-keyframes rotateThis {
    15%,to {
        -webkit-transform: rotateZ(-180deg);
        -moz-transform: rotateZ(-180deg);
        transform: rotateZ(-180deg)
    }
}

@keyframes rotateThis {
    15%,to {
        -webkit-transform: rotateZ(-180deg);
        -moz-transform: rotateZ(-180deg);
        transform: rotateZ(-180deg)
    }
}

@font-face {
    font-family: 'EliFont';
    src: url(/Content/Fonts/EliFont/EliFont.eot?51417194);
    src: url(/Content/Fonts/EliFont/EliFont.eot?51417194#iefix) format("embedded-opentype"),url(/Content/Fonts/EliFont/EliFont.woff?51417194) format("woff"),url(/Content/Fonts/EliFont/EliFont.ttf?51417194) format("truetype"),url(/Content/Fonts/EliFont/EliFont.svg?51417194#fontello) format("svg");
    font-weight: 400;
    font-style: normal
}

@font-face {
    font-family: 'iran_sans';
    src: url(/Content/Fonts/IranSans/iran_sans.eot) format("embedded-opentype"),url(/Content/Fonts/IranSans/iran_sans.svg) format("svg"),url(/Content/Fonts/IranSans/iran_sans.ttf) format("truetype"),url(/Content/Fonts/IranSans/iran_sans.woff) format("woff")
}

@font-face {
    font-family: 'yekan';
    src: url(/Content/Fonts/Yekan/web_Yekan.eot) format("embedded-opentype"),url(/Content/Fonts/Yekan/web_Yekan.ttf) format("truetype"),url(/Content/Fonts/Yekan/web_Yekan.woff) format("woff")
}

html {
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    font-size: 10px;
    -webkit-tap-highlight-color: transparent
}

body {
    line-height: 1.42857143;
    background-color: #fff
}

article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary {
    display: block
}

audio,canvas,progress,video {
    display: inline-block;
    vertical-align: baseline
}

audio:not([controls]) {
    display: none;
    height: 0
}

[hidden],template {
    display: none
}

a {
    background-color: transparent
}

a:active,a:hover {
    outline: 0;
    text-decoration: none
}

img {
    border: 0
}

svg:not(:root) {
    overflow: hidden
}

figure {
    margin: 0
}

hr {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #eee;
    box-sizing: content-box;
    height: 0
}

button,input,optgroup,select,textarea {
    margin: 0;
    font: inherit;
    color: inherit
}

button {
    overflow: visible
}

button,select {
    text-transform: none
}

button,html input[type=button],input[type=reset],input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer
}

button[disabled],html input[disabled] {
    cursor: default
}

button::-moz-focus-inner,input::-moz-focus-inner {
    padding: 0;
    border: 0
}

input[type=checkbox],input[type=radio] {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box
}

fieldset {
    min-width: 0;
    border: 0;
    margin: 0
}

legend {
    display: block;
    width: 100%;
    margin-bottom: 20px;
    font-size: 21px;
    line-height: inherit;
    color: #333;
    border: 0;
    border-bottom: 1px solid #e5e5e5
}

textarea {
    overflow: auto
}

optgroup {
    font-weight: 700
}

table {
    border-spacing: 0;
    border-collapse: collapse;
    background-color: transparent
}

fieldset,legend,td,th {
    padding: 0
}

input.error,textarea.error {
    border: red 1px solid;
    border-radius: 2px
}

@media print {
    *,:after,:before {
        color: #000!important;
        text-shadow: none!important;
        background: 0 0!important;
        -webkit-box-shadow: none!important;
        box-shadow: none!important
    }

    a,a:visited {
        text-decoration: underline
    }

    a[href]:after {
        content: " (" attr(href) ")"
    }

    abbr[title]:after {
        content: " (" attr(title) ")"
    }

    a[href^="#"]:after,a[href^="javascript:"]:after {
        content: ""
    }

    blockquote,pre {
        border: 1px solid #999
    }

    thead {
        display: table-header-group
    }

    blockquote,img,pre,tr {
        page-break-inside: avoid
    }

    img {
        max-width: 100%!important
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

    .btn>.caret,.dropup>.btn>.caret {
        border-top-color: #000!important
    }

    .label {
        border: 1px solid #000
    }

    .table {
        border-collapse: collapse!important
    }

    .table td,.table th {
        background-color: #fff!important
    }

    .table-bordered td,.table-bordered th {
        border: 1px solid #ddd!important
    }
}

*,:after,:before {
    box-sizing: border-box
}

*,:after,:before,input[type=search] {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box
}

button,input,select,textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit
}

a {
    color: #27107d;
    text-decoration: none
}

a:focus,a:hover {
    color: #23527c;
    text-decoration: none
}

a:focus,input[type=checkbox]:focus,input[type=file]:focus,input[type=radio]:focus {
    outline: thin dotted;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px
}

img {
    vertical-align: middle
}

.carousel-inner>.item>a>img,.carousel-inner>.item>img,.img-responsive,.thumbnail a>img,.thumbnail>img {
    display: block;
    max-width: 100%;
    height: auto
}

.img-rounded {
    border-radius: 6px
}

.img-thumbnail {
    display: inline-block;
    max-width: 100%;
    height: auto;
    padding: 4px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out
}

.img-circle {
    border-radius: 50%
}

[role=button] {
    cursor: pointer
}

.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6 {
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit
}

.h2,.h3,h2,h3 {
    margin-top: 20px;
    margin-bottom: 10px
}

.h4,.h5,.h6,h4,h5,h6 {
    margin-top: 10px;
    margin-bottom: 10px
}

.h1 {
    font-size: 16px;
    margin: 5px 0
}

.h2,h2 {
    font-size: 30px
}

.h3,h3 {
    font-size: 24px
}

.h4,h4 {
    font-size: 18px
}

.h5,h5 {
    font-size: 14px
}

.h6,h6 {
    font-size: 12px
}

p {
    margin: 0 0 10px
}

.lead {
    margin-bottom: 20px;
    font-size: 16px;
    font-weight: 300;
    line-height: 1.4
}

@media (min-width: 768px) {
    .lead {
        font-size:21px
    }
}

.text-left {
    text-align: left
}

.text-right,caption,th {
    text-align: right
}

.text-center {
    text-align: center
}

.text-justify {
    text-align: justify
}

dl,ol {
    margin-top: 0;
    margin-bottom: 20px
}

ol {
    margin-bottom: 10px
}

.alert>p,.alert>ul,ol ol,ol ul,ul ol,ul ul {
    margin-bottom: 0
}

.list-unstyled {
    padding-left: 0
}

.list-inline,.list-unstyled {
    list-style: none
}

.list-inline>li {
    display: inline-block;
    padding-right: 5px;
    padding-left: 5px
}

dd,dt {
    line-height: 1.42857143
}

dt {
    font-weight: 700
}

dd {
    margin-right: 0;
    margin-left: initial
}

@media (min-width: 768px) {
    .dl-horizontal dt {
        float:left;
        width: 160px;
        overflow: hidden;
        clear: left;
        text-align: right;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .dl-horizontal dd {
        margin-left: 180px
    }
}

abbr[data-original-title],abbr[title] {
    cursor: help;
    border-bottom: 1px dotted #777
}

.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto
}

@media (min-width: 992px) {
    .container {
        width:970px
    }
}

@media (min-width: 1200px) {
    .container {
        width:1170px
    }
}

.container-fluid {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto
}

.row {
    margin-right: -15px;
    margin-left: -15px
}

.col-xs-12 {
    width: 100%
}

.col-xs-11 {
    width: 91.66666667%
}

.col-xs-10 {
    width: 83.33333333%
}

.col-xs-9 {
    width: 75%
}

.col-xs-8 {
    width: 66.66666667%
}

.col-xs-7 {
    width: 58.33333333%
}

.col-xs-6 {
    width: 50%
}

.col-xs-5 {
    width: 41.66666667%
}

.col-xs-4 {
    width: 33.33333333%
}

.col-xs-3 {
    width: 25%
}

.col-xs-2 {
    width: 16.66666667%
}

.col-xs-1 {
    width: 8.33333333%
}

.col-sm-12 {
    width: 100%
}

.col-sm-11 {
    width: 91.66666667%
}

.col-sm-10 {
    width: 83.33333333%
}

.col-sm-9 {
    width: 75%
}

.col-sm-8 {
    width: 66.66666667%
}

.col-sm-7 {
    width: 58.33333333%
}

.col-sm-6 {
    width: 50%
}

.col-sm-5 {
    width: 41.66666667%
}

.col-sm-4 {
    width: 33.33333333%
}

.col-sm-3 {
    width: 25%
}

.col-sm-2 {
    width: 16.66666667%
}

.col-sm-1 {
    width: 8.33333333%
}

.col-md-12 {
    width: 100%
}

.col-md-11 {
    width: 91.66666667%
}

.col-md-10 {
    width: 83.33333333%
}

.col-md-9 {
    width: 75%
}

.col-md-8 {
    width: 66.66666667%
}

.col-md-7 {
    width: 58.33333333%
}

.col-md-6 {
    width: 50%
}

.col-md-5 {
    width: 41.66666667%
}

.col-md-4 {
    width: 33.33333333%
}

.col-md-3 {
    width: 25%
}

.col-md-2 {
    width: 16.66666667%
}

.col-md-1 {
    width: 8.33333333%
}

@media (min-width: 1200px) {
    .col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9 {
        float:left
    }

    .col-lg-12 {
        width: 100%
    }

    .col-lg-11 {
        width: 91.66666667%
    }

    .col-lg-10 {
        width: 83.33333333%
    }

    .col-lg-9 {
        width: 75%
    }

    .col-lg-8 {
        width: 66.66666667%
    }

    .col-lg-7 {
        width: 58.33333333%
    }

    .col-lg-6 {
        width: 50%
    }

    .col-lg-5 {
        width: 41.66666667%
    }

    .col-lg-4 {
        width: 33.33333333%
    }

    .col-lg-3 {
        width: 25%
    }

    .col-lg-2 {
        width: 16.66666667%
    }

    .col-lg-1 {
        width: 8.33333333%
    }
}

caption {
    padding-top: 8px;
    padding-bottom: 8px;
    color: #777
}

.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px
}

.table>tbody>tr>td,.table>tbody>tr>th,.table>tfoot>tr>td,.table>tfoot>tr>th,.table>thead>tr>td,.table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd
}

.table>thead>tr>th {
    vertical-align: bottom;
    border-bottom: 2px solid #ddd
}

.panel>.table>tbody:first-child>tr:first-child td,.panel>.table>tbody:first-child>tr:first-child th,.table>caption+thead>tr:first-child>td,.table>caption+thead>tr:first-child>th,.table>colgroup+thead>tr:first-child>td,.table>colgroup+thead>tr:first-child>th,.table>thead:first-child>tr:first-child>td,.table>thead:first-child>tr:first-child>th {
    border-top: 0
}

.table>tbody+tbody {
    border-top: 2px solid #ddd
}

.table .table {
    background-color: #fff
}

.table-condensed>tbody>tr>td,.table-condensed>tbody>tr>th,.table-condensed>tfoot>tr>td,.table-condensed>tfoot>tr>th,.table-condensed>thead>tr>td,.table-condensed>thead>tr>th {
    padding: 5px
}

.table-bordered,.table-bordered>tbody>tr>td,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>td,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>thead>tr>th {
    border: 1px solid #ddd
}

.table-bordered>thead>tr>td,.table-bordered>thead>tr>th {
    border-bottom-width: 2px
}

.table-striped>tbody>tr:nth-of-type(odd) {
    background-color: #f9f9f9
}

.table-hover>tbody>tr:hover,.table>tbody>tr.active>td,.table>tbody>tr.active>th,.table>tbody>tr>td.active,.table>tbody>tr>th.active,.table>tfoot>tr.active>td,.table>tfoot>tr.active>th,.table>tfoot>tr>td.active,.table>tfoot>tr>th.active,.table>thead>tr.active>td,.table>thead>tr.active>th,.table>thead>tr>td.active,.table>thead>tr>th.active {
    background-color: #f5f5f5
}

table col[class*=col-] {
    position: static;
    display: table-column;
    float: none
}

table td[class*=col-],table th[class*=col-] {
    position: static;
    display: table-cell;
    float: none
}

.table-hover>tbody>tr.active:hover>td,.table-hover>tbody>tr.active:hover>th,.table-hover>tbody>tr:hover>.active,.table-hover>tbody>tr>td.active:hover,.table-hover>tbody>tr>th.active:hover {
    background-color: #e8e8e8
}

.table>tbody>tr.success>td,.table>tbody>tr.success>th,.table>tbody>tr>td.success,.table>tbody>tr>th.success,.table>tfoot>tr.success>td,.table>tfoot>tr.success>th,.table>tfoot>tr>td.success,.table>tfoot>tr>th.success,.table>thead>tr.success>td,.table>thead>tr.success>th,.table>thead>tr>td.success,.table>thead>tr>th.success {
    background-color: #dff0d8
}

.table-hover>tbody>tr.success:hover>td,.table-hover>tbody>tr.success:hover>th,.table-hover>tbody>tr:hover>.success,.table-hover>tbody>tr>td.success:hover,.table-hover>tbody>tr>th.success:hover {
    background-color: #d0e9c6
}

.table>tbody>tr.info>td,.table>tbody>tr.info>th,.table>tbody>tr>td.info,.table>tbody>tr>th.info,.table>tfoot>tr.info>td,.table>tfoot>tr.info>th,.table>tfoot>tr>td.info,.table>tfoot>tr>th.info,.table>thead>tr.info>td,.table>thead>tr.info>th,.table>thead>tr>td.info,.table>thead>tr>th.info {
    background-color: #d9edf7
}

.table-hover>tbody>tr.info:hover>td,.table-hover>tbody>tr.info:hover>th,.table-hover>tbody>tr:hover>.info,.table-hover>tbody>tr>td.info:hover,.table-hover>tbody>tr>th.info:hover {
    background-color: #c4e3f3
}

.table>tbody>tr.warning>td,.table>tbody>tr.warning>th,.table>tbody>tr>td.warning,.table>tbody>tr>th.warning,.table>tfoot>tr.warning>td,.table>tfoot>tr.warning>th,.table>tfoot>tr>td.warning,.table>tfoot>tr>th.warning,.table>thead>tr.warning>td,.table>thead>tr.warning>th,.table>thead>tr>td.warning,.table>thead>tr>th.warning {
    background-color: #fcf8e3
}

.table-hover>tbody>tr.warning:hover>td,.table-hover>tbody>tr.warning:hover>th,.table-hover>tbody>tr:hover>.warning,.table-hover>tbody>tr>td.warning:hover,.table-hover>tbody>tr>th.warning:hover {
    background-color: #faf2cc
}

.table>tbody>tr.danger>td,.table>tbody>tr.danger>th,.table>tbody>tr>td.danger,.table>tbody>tr>th.danger,.table>tfoot>tr.danger>td,.table>tfoot>tr.danger>th,.table>tfoot>tr>td.danger,.table>tfoot>tr>th.danger,.table>thead>tr.danger>td,.table>thead>tr.danger>th,.table>thead>tr>td.danger,.table>thead>tr>th.danger {
    background-color: #f2dede
}

.table-hover>tbody>tr.danger:hover>td,.table-hover>tbody>tr.danger:hover>th,.table-hover>tbody>tr:hover>.danger,.table-hover>tbody>tr>td.danger:hover,.table-hover>tbody>tr>th.danger:hover {
    background-color: #ebcccc
}

.table-responsive {
    min-height: .01%;
    overflow-x: auto
}

label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700
}

input[type=checkbox],input[type=radio] {
    margin: 4px 0 0;
    margin-top: 1px\9;
    line-height: normal
}

input[type=file] {
    display: block
}

input[type=range] {
    display: block;
    width: 100%
}

select[multiple],select[size],textarea.form-control {
    height: auto
}

.form-control,output {
    display: block;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555
}

output {
    padding-top: 7px
}

.form-control {
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    background-color: #fff;
    background-image: none;
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s
}

.form-control:focus {
    border-color: #66afe9;
    outline: 0
}

.form-control::-moz-placeholder {
    color: #999;
    opacity: 1
}

.form-control:-ms-input-placeholder {
    color: #999
}

.form-control::-webkit-input-placeholder {
    color: #999
}

.form-control::-ms-expand {
    background-color: transparent;
    border: 0
}

.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control {
    background-color: #eee;
    opacity: 1
}

.form-control[disabled],fieldset[disabled] .form-control {
    cursor: not-allowed
}

@media screen and (-webkit-min-device-pixel-ratio: 0) {
    input[type=date].form-control,input[type=datetime-local].form-control,input[type=month].form-control,input[type=time].form-control {
        line-height:34px
    }

    .input-group-sm input[type=date],.input-group-sm input[type=datetime-local],.input-group-sm input[type=month],.input-group-sm input[type=time],input[type=date].input-sm,input[type=datetime-local].input-sm,input[type=month].input-sm,input[type=time].input-sm {
        line-height: 30px
    }

    .input-group-lg input[type=date],.input-group-lg input[type=datetime-local],.input-group-lg input[type=month],.input-group-lg input[type=time],input[type=date].input-lg,input[type=datetime-local].input-lg,input[type=month].input-lg,input[type=time].input-lg {
        line-height: 46px
    }
}

.form-group {
    margin-bottom: 15px
}

.checkbox,.radio {
    position: relative;
    display: block;
    margin-top: 10px;
    margin-bottom: 10px
}

.checkbox label,.radio label {
    min-height: 20px;
    margin-bottom: 0;
    font-weight: 400;
    cursor: pointer;
    padding-right: 20px;
    padding-left: initial
}

.checkbox input[type=checkbox],.checkbox-inline input[type=checkbox],.radio input[type=radio],.radio-inline input[type=radio] {
    position: absolute;
    margin-top: 4px
}

.checkbox+.checkbox,.radio+.radio {
    margin-top: -5px
}

.btn,.checkbox-inline,.radio-inline {
    display: inline-block;
    margin-bottom: 0;
    font-weight: 400;
    vertical-align: middle;
    cursor: pointer
}

.checkbox-inline,.radio-inline {
    position: relative
}

.checkbox-inline+.checkbox-inline,.radio-inline+.radio-inline {
    margin-top: 0
}

.checkbox-inline.disabled,.checkbox.disabled label,.radio-inline.disabled,.radio.disabled label,fieldset[disabled] .checkbox label,fieldset[disabled] .checkbox-inline,fieldset[disabled] .radio label,fieldset[disabled] .radio-inline,fieldset[disabled] input[type=checkbox],fieldset[disabled] input[type=radio],input[type=checkbox].disabled,input[type=checkbox][disabled],input[type=radio].disabled,input[type=radio][disabled] {
    cursor: not-allowed
}

.btn {
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px
}

.btn.active.focus,.btn.active:focus,.btn.focus,.btn:active.focus,.btn:active:focus,.btn:focus {
    outline: 0
}

.btn.focus,.btn:focus,.btn:hover {
    color: #333;
    text-decoration: none
}

.btn.active,.btn:active {
    background-image: none;
    outline: 0;
    -webkit-box-shadow: inset 0 3px 5px rgba(0,0,0,.125);
    box-shadow: inset 0 3px 5px rgba(0,0,0,.125)
}

.btn.disabled,.btn[disabled],fieldset[disabled] .btn {
    cursor: not-allowed;
    filter: alpha(opacity=65);
    -webkit-box-shadow: none;
    box-shadow: none;
    opacity: .65
}

a.btn.disabled,fieldset[disabled] a.btn {
    pointer-events: none
}

.btn-default {
    color: #333;
    background-color: #fff;
    border-color: #ccc
}

.btn-default.focus,.btn-default:focus {
    color: #333;
    background-color: #e6e6e6;
    border-color: #8c8c8c
}

.btn-default.active,.btn-default:active,.btn-default:hover,.open>.dropdown-toggle.btn-default {
    color: #333;
    background-color: #e6e6e6;
    border-color: #adadad
}

.btn-default.active.focus,.btn-default.active:focus,.btn-default.active:hover,.btn-default:active.focus,.btn-default:active:focus,.btn-default:active:hover,.open>.dropdown-toggle.btn-default.focus,.open>.dropdown-toggle.btn-default:focus,.open>.dropdown-toggle.btn-default:hover {
    color: #333;
    background-color: #d4d4d4;
    border-color: #8c8c8c
}

.btn-default.active,.btn-default:active,.open>.dropdown-toggle.btn-default {
    background-image: none
}

.btn-default.disabled.focus,.btn-default.disabled:focus,.btn-default.disabled:hover,.btn-default[disabled].focus,.btn-default[disabled]:focus,.btn-default[disabled]:hover,fieldset[disabled] .btn-default.focus,fieldset[disabled] .btn-default:focus,fieldset[disabled] .btn-default:hover {
    background-color: #fff;
    border-color: #ccc
}

.btn-default .badge {
    color: #fff;
    background-color: #333
}

.btn-primary {
    background-color: #337ab7
}

.btn-primary.focus {
    color: #fff;
    border-color: #122b40
}

.btn-primary.focus,.btn-primary:focus {
    background-color: #286090
}

.btn-primary.active,.btn-primary:active,.btn-primary:hover,.open>.dropdown-toggle.btn-primary {
    color: #fff;
    background-color: #286090;
    border-color: #204d74
}

.btn-primary.active.focus,.btn-primary.active:focus,.btn-primary.active:hover,.btn-primary:active.focus,.btn-primary:active:focus,.btn-primary:active:hover,.open>.dropdown-toggle.btn-primary.focus,.open>.dropdown-toggle.btn-primary:focus,.open>.dropdown-toggle.btn-primary:hover {
    color: #fff;
    background-color: #204d74;
    border-color: #122b40
}

.btn-primary.active,.btn-primary:active,.open>.dropdown-toggle.btn-primary {
    background-image: none
}

.btn-primary.disabled.focus,.btn-primary.disabled:focus,.btn-primary.disabled:hover,.btn-primary[disabled].focus,.btn-primary[disabled]:focus,.btn-primary[disabled]:hover,fieldset[disabled] .btn-primary.focus,fieldset[disabled] .btn-primary:focus,fieldset[disabled] .btn-primary:hover {
    background-color: #337ab7;
    border-color: #2e6da4
}

.btn-primary .badge {
    color: #337ab7;
    background-color: #fff
}

.btn-success,.btn-success.active,.btn-success:active,.open>.dropdown-toggle.btn-success {
    color: #fff;
    background-color: #0ebb79;
    border-color: #0ebb79;
    border-radius: 3px;
    -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    -ms-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important
}

.btn-success.active.focus,.btn-success.active:focus,.btn-success.active:hover,.btn-success.focus,.btn-success:active.focus,.btn-success:active:focus,.btn-success:active:hover,.btn-success:focus,.btn-success:hover,.open>.dropdown-toggle.btn-success.focus,.open>.dropdown-toggle.btn-success:focus,.open>.dropdown-toggle.btn-success:hover {
    background-color: #07a86a;
    border-color: #07a86a;
    color: #fff
}

.btn-success.active,.btn-success:active,.open>.dropdown-toggle.btn-success {
    background-image: none
}

.btn-success.disabled.focus,.btn-success.disabled:focus,.btn-success.disabled:hover,.btn-success[disabled].focus,.btn-success[disabled]:focus,.btn-success[disabled]:hover,fieldset[disabled] .btn-success.focus,fieldset[disabled] .btn-success:focus,fieldset[disabled] .btn-success:hover {
    background-color: #5cb85c;
    border-color: #4cae4c
}

.btn-success .badge {
    color: #5cb85c;
    background-color: #fff
}

.btn-info {
    color: #fff;
    background-color: #5bc0de;
    border-color: #46b8da
}

.btn-info.focus,.btn-info:focus {
    color: #fff;
    background-color: #31b0d5;
    border-color: #1b6d85
}

.btn-info.active,.btn-info:active,.btn-info:hover,.open>.dropdown-toggle.btn-info {
    color: #fff;
    background-color: #31b0d5;
    border-color: #269abc
}

.btn-info.active.focus,.btn-info.active:focus,.btn-info.active:hover,.btn-info:active.focus,.btn-info:active:focus,.btn-info:active:hover,.open>.dropdown-toggle.btn-info.focus,.open>.dropdown-toggle.btn-info:focus,.open>.dropdown-toggle.btn-info:hover {
    color: #fff;
    background-color: #269abc;
    border-color: #1b6d85
}

.btn-info.active,.btn-info:active,.open>.dropdown-toggle.btn-info {
    background-image: none
}

.btn-info.disabled.focus,.btn-info.disabled:focus,.btn-info.disabled:hover,.btn-info[disabled].focus,.btn-info[disabled]:focus,.btn-info[disabled]:hover,fieldset[disabled] .btn-info.focus,fieldset[disabled] .btn-info:focus,fieldset[disabled] .btn-info:hover {
    background-color: #5bc0de;
    border-color: #46b8da
}

.btn-info .badge {
    color: #5bc0de;
    background-color: #fff
}

.btn-warning {
    color: #fff;
    background-color: #f0ad4e;
    border-color: #eea236
}

.btn-warning.focus,.btn-warning:focus {
    color: #fff;
    background-color: #ec971f;
    border-color: #985f0d
}

.btn-warning.active,.btn-warning:active,.btn-warning:hover,.open>.dropdown-toggle.btn-warning {
    color: #fff;
    background-color: #ec971f;
    border-color: #d58512
}

.btn-warning.active.focus,.btn-warning.active:focus,.btn-warning.active:hover,.btn-warning:active.focus,.btn-warning:active:focus,.btn-warning:active:hover,.open>.dropdown-toggle.btn-warning.focus,.open>.dropdown-toggle.btn-warning:focus,.open>.dropdown-toggle.btn-warning:hover {
    color: #fff;
    background-color: #d58512;
    border-color: #985f0d
}

.btn-warning.active,.btn-warning:active,.open>.dropdown-toggle.btn-warning {
    background-image: none
}

.btn-warning.disabled.focus,.btn-warning.disabled:focus,.btn-warning.disabled:hover,.btn-warning[disabled].focus,.btn-warning[disabled]:focus,.btn-warning[disabled]:hover,fieldset[disabled] .btn-warning.focus,fieldset[disabled] .btn-warning:focus,fieldset[disabled] .btn-warning:hover {
    background-color: #f0ad4e;
    border-color: #eea236
}

.btn-warning .badge {
    color: #f0ad4e;
    background-color: #fff
}

.btn-danger {
    background-color: #d9534f
}

.btn-danger.focus {
    color: #fff;
    border-color: #761c19
}

.btn-danger.focus,.btn-danger:focus {
    background-color: #c9302c
}

.btn-danger.active,.btn-danger:active,.btn-danger:hover,.open>.dropdown-toggle.btn-danger {
    color: #fff;
    background-color: #c9302c;
    border-color: #ac2925
}

.btn-danger.active.focus,.btn-danger.active:focus,.btn-danger.active:hover,.btn-danger:active.focus,.btn-danger:active:focus,.btn-danger:active:hover,.open>.dropdown-toggle.btn-danger.focus,.open>.dropdown-toggle.btn-danger:focus,.open>.dropdown-toggle.btn-danger:hover {
    color: #fff;
    background-color: #ea6400;
    border-color: #ea6400
}

.btn-danger.active,.btn-danger:active,.open>.dropdown-toggle.btn-danger {
    background-image: none
}

.btn-danger.disabled.focus,.btn-danger.disabled:focus,.btn-danger.disabled:hover,.btn-danger[disabled].focus,.btn-danger[disabled]:focus,.btn-danger[disabled]:hover,fieldset[disabled] .btn-danger.focus,fieldset[disabled] .btn-danger:focus,fieldset[disabled] .btn-danger:hover {
    background-color: #ea6400;
    border-color: #ea6400
}

.btn-danger .badge {
    color: #d9534f;
    background-color: #fff
}

.btn-block {
    display: block;
    width: 100%
}

.alert>p+p,.btn-block+.btn-block {
    margin-top: 5px
}

input[type=button].btn-block,input[type=reset].btn-block,input[type=submit].btn-block {
    width: 100%
}

.btn-flat {
    border-radius: 0;
    -webkit-border-radius: 0;
    -moz-border-radius: 0
}

.fade {
    opacity: 0;
    -webkit-transition: opacity .15s linear;
    -o-transition: opacity .15s linear;
    transition: opacity .15s linear
}

.fade.in {
    opacity: 1
}

.collapse {
    display: none
}

.collapse.in {
    display: block
}

tr.collapse.in {
    display: table-row
}

tbody.collapse.in {
    display: table-row-group
}

.collapsing {
    position: relative;
    height: 0;
    overflow: hidden;
    -webkit-transition-timing-function: ease;
    -o-transition-timing-function: ease;
    transition-timing-function: ease;
    -webkit-transition-duration: .35s;
    -o-transition-duration: .35s;
    transition-duration: .35s;
    -webkit-transition-property: height,visibility;
    -o-transition-property: height,visibility;
    transition-property: height,visibility
}

@media (min-width: 768px) {
    .navbar-right .dropdown-menu {
        right:0;
        left: auto
    }

    .navbar-right .dropdown-menu-left {
        right: auto;
        left: 0
    }
}

.btn-group,.btn-group-vertical {
    position: relative;
    display: inline-block;
    vertical-align: middle
}

.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
    border-radius: 0
}

.btn-group>.btn:first-child {
    margin-left: 0
}

.btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

[data-toggle=buttons]>.btn input[type=checkbox],[data-toggle=buttons]>.btn input[type=radio],[data-toggle=buttons]>.btn-group>.btn input[type=checkbox],[data-toggle=buttons]>.btn-group>.btn input[type=radio] {
    position: absolute;
    clip: rect(0,0,0,0);
    pointer-events: none
}

.input-group {
    position: relative;
    display: table;
    border-collapse: separate
}

.input-group[class*=col-] {
    float: none;
    padding-right: 0;
    padding-left: 0
}

.input-group .form-control {
    position: relative;
    z-index: 2;
    width: 100%;
    margin-bottom: 0
}

.input-group .form-control:focus {
    z-index: 3
}

.input-group-lg>.form-control,.input-group-lg>.input-group-addon,.input-group-lg>.input-group-btn>.btn {
    height: 46px;
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.3333333;
    border-radius: 6px
}

select.input-group-lg>.form-control,select.input-group-lg>.input-group-addon,select.input-group-lg>.input-group-btn>.btn {
    height: 46px;
    line-height: 46px
}

select[multiple].input-group-lg>.form-control,select[multiple].input-group-lg>.input-group-addon,select[multiple].input-group-lg>.input-group-btn>.btn,textarea.input-group-lg>.form-control,textarea.input-group-lg>.input-group-addon,textarea.input-group-lg>.input-group-btn>.btn {
    height: auto
}

.input-group-sm>.form-control,.input-group-sm>.input-group-addon,.input-group-sm>.input-group-btn>.btn {
    height: 30px;
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px
}

select.input-group-sm>.form-control,select.input-group-sm>.input-group-addon,select.input-group-sm>.input-group-btn>.btn {
    height: 30px;
    line-height: 30px
}

select[multiple].input-group-sm>.form-control,select[multiple].input-group-sm>.input-group-addon,select[multiple].input-group-sm>.input-group-btn>.btn,textarea.input-group-sm>.form-control,textarea.input-group-sm>.input-group-addon,textarea.input-group-sm>.input-group-btn>.btn {
    height: auto
}

.nav {
    margin-bottom: 0;
    list-style: none
}

.nav>li,.nav>li>a {
    position: relative;
    display: block
}

.nav>li>a {
    padding: 10px 15px
}

.nav>li>a:focus,.nav>li>a:hover {
    text-decoration: none;
    background-color: #eee
}

.nav>li.disabled>a {
    color: #777
}

.nav>li.disabled>a:focus,.nav>li.disabled>a:hover {
    color: #777;
    text-decoration: none;
    cursor: not-allowed;
    background-color: transparent
}

.nav .open>a,.nav .open>a:focus,.nav .open>a:hover {
    background-color: #eee;
    border-color: #337ab7
}

.nav .nav-divider {
    height: 1px;
    margin: 9px 0;
    overflow: hidden;
    background-color: #e5e5e5
}

.nav>li>a>img {
    max-width: none
}

.nav-tabs {
    border-bottom: 1px solid #ddd
}

.nav-tabs>li {
    margin-bottom: -1px
}

.nav-tabs>li>a {
    line-height: 1.42857143;
    border: 1px solid transparent
}

.nav-tabs>li>a:hover {
    border-color: #eee #eee #ddd
}

.nav-tabs>li.active>a,.nav-tabs>li.active>a:focus,.nav-tabs>li.active>a:hover {
    color: #555;
    cursor: default;
    background-color: #fff;
    border: 1px solid #ddd;
    border-bottom-color: transparent
}

.tab-content>.tab-pane {
    display: none
}

.divBotHeader .navbar-default ul.nav li:hover ul,.divBotHeader .navbar-default ul.nav li:hover ul .FirstItemBlock ul,.divBotHeader .navbar-default ul.nav li:hover ul li.ActiveTab ul,.navbar-brand>img,.tab-content>.active,.ulLoginCurrency li.ParentLoginCurr:hover ul {
    display: block
}

.nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 20px;
    border: 1px solid transparent
}

@media (min-width: 768px) {
    .navbar {
        border-radius:4px
    }

    .navbar-header {
        float: left
    }
}

.navbar-collapse {
    overflow-x: visible;
    -webkit-overflow-scrolling: touch;
    -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.1);
    box-shadow: inset 0 1px 0 rgba(255,255,255,.1);
    width: auto;
    border-top: 0;
    -webkit-box-shadow: none;
    box-shadow: none
}

.navbar-collapse.collapse {
    display: block!important;
    height: auto!important;
    padding-bottom: 0;
    overflow: visible!important
}

.navbar-collapse.in {
    overflow-y: visible
}

.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse,.navbar-static-top .navbar-collapse {
    padding-right: 0;
    padding-left: 0
}

.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse {
    max-height: 340px
}

@media (max-device-width: 480px) and (orientation:landscape) {
    .navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse {
        max-height:200px
    }
}

.navbar-fixed-bottom,.navbar-fixed-top {
    position: fixed;
    right: 0;
    left: 0;
    z-index: 1030
}

@media (min-width: 768px) {
    .navbar-fixed-bottom,.navbar-fixed-top {
        border-radius:0
    }
}

.navbar-fixed-top {
    top: 0;
    border-width: 0 0 1px
}

.navbar-fixed-bottom {
    bottom: 0;
    margin-bottom: 0;
    border-width: 1px 0 0
}

.navbar-brand {
    height: 50px;
    padding: 15px;
    font-size: 18px;
    line-height: 20px
}

.navbar-brand:focus,.navbar-brand:hover {
    text-decoration: none
}

@media (min-width: 768px) {
    .navbar>.container .navbar-brand,.navbar>.container-fluid .navbar-brand {
        margin-left:-15px
    }
}

.navbar-toggle {
    position: relative;
    padding: 9px 10px;
    margin-top: 8px;
    margin-bottom: 8px;
    background-color: transparent;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px
}

.navbar-toggle:focus {
    outline: 0
}

.navbar-toggle .icon-bar {
    display: block;
    width: 22px;
    height: 2px;
    border-radius: 1px
}

.navbar-toggle .icon-bar+.icon-bar {
    margin-top: 4px
}

@media (min-width: 768px) {
    .navbar-toggle {
        display:none
    }
}

.navbar-nav {
    margin: 7.5px -15px
}

.navbar-nav>li>a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px
}

@media (max-width: 767px) {
    .navbar-nav .open .dropdown-menu {
        position:static;
        float: none;
        width: auto;
        margin-top: 0;
        background-color: transparent;
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .navbar-nav .open .dropdown-menu .dropdown-header,.navbar-nav .open .dropdown-menu>li>a {
        padding: 5px 15px 5px 25px
    }

    .navbar-nav .open .dropdown-menu>li>a {
        line-height: 20px
    }

    .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-nav .open .dropdown-menu>li>a:hover {
        background-image: none
    }
}

@media (min-width: 768px) {
    .navbar-nav {
        float:left;
        margin: 0
    }

    .navbar-nav>li {
        float: left
    }

    .navbar-nav>li>a {
        padding-top: 15px;
        padding-bottom: 15px
    }
}

.navbar-nav>li>.dropdown-menu {
    margin-top: 0;
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.navbar-fixed-bottom .navbar-nav>li>.dropdown-menu {
    margin-bottom: 0;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.navbar-btn {
    margin-top: 8px;
    margin-bottom: 8px
}

.navbar-btn.btn-sm {
    margin-top: 10px;
    margin-bottom: 10px
}

.navbar-btn.btn-xs {
    margin-top: 14px;
    margin-bottom: 14px
}

.navbar-text {
    margin-top: 15px;
    margin-bottom: 15px
}

@media (min-width: 768px) {
    .navbar-text {
        float:left;
        margin-right: 15px;
        margin-left: 15px
    }

    .navbar-left {
        float: left!important
    }

    .navbar-right {
        float: right!important;
        margin-right: -15px
    }

    .navbar-right~.navbar-right {
        margin-right: 0
    }
}

.navbar-default {
    background-color: #f8f8f8
}

.navbar-default .navbar-brand,.navbar-default .navbar-nav>li>a,.navbar-default .navbar-text {
    color: #777
}

.navbar-default .navbar-brand:focus,.navbar-default .navbar-brand:hover {
    color: #5e5e5e;
    background-color: transparent
}

.navbar-default .navbar-nav>li>a:focus,.navbar-default .navbar-nav>li>a:hover {
    color: #333;
    background-color: transparent
}

.navbar-default .navbar-nav>.active>a,.navbar-default .navbar-nav>.active>a:focus,.navbar-default .navbar-nav>.active>a:hover {
    color: #555;
    background-color: #e7e7e7
}

.navbar-default .navbar-nav>.disabled>a,.navbar-default .navbar-nav>.disabled>a:focus,.navbar-default .navbar-nav>.disabled>a:hover {
    color: #ccc;
    background-color: transparent
}

.navbar-default .navbar-toggle {
    border-color: #ddd
}

.navbar-default .navbar-toggle:focus,.navbar-default .navbar-toggle:hover {
    background-color: #ddd
}

.navbar-default .navbar-toggle .icon-bar {
    background-color: #888
}

.navbar-default .navbar-collapse,.navbar-default .navbar-form {
    border-color: #e7e7e7
}

.navbar-default .navbar-nav>.open>a,.navbar-default .navbar-nav>.open>a:focus,.navbar-default .navbar-nav>.open>a:hover {
    color: #555;
    background-color: #e7e7e7
}

@media (max-width: 767px) {
    .navbar-default .navbar-nav .open .dropdown-menu>li>a {
        color:#777
    }

    .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
        color: #333;
        background-color: transparent
    }

    .navbar-default .navbar-nav .open .dropdown-menu>.active>a,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover {
        color: #555;
        background-color: #e7e7e7
    }

    .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover {
        color: #ccc;
        background-color: transparent
    }
}

.breadcrumb>.active,.navbar-default .btn-link,.navbar-default .navbar-link {
    color: #777
}

.navbar-default .navbar-link:hover {
    color: #333
}

.navbar-default .btn-link:focus,.navbar-default .btn-link:hover {
    color: #333
}

.navbar-default .btn-link[disabled]:focus,.navbar-default .btn-link[disabled]:hover,fieldset[disabled] .navbar-default .btn-link:focus,fieldset[disabled] .navbar-default .btn-link:hover {
    color: #ccc
}

.breadcrumb {
    padding: 8px 15px;
    margin-bottom: 20px;
    list-style: none;
    background-color: #f5f5f5;
    border-radius: 4px
}

.breadcrumb>li,.pagination {
    display: inline-block
}

.breadcrumb>li+li:before {
    padding: 0 5px;
    color: #ccc;
    content: "/\00a0"
}

.pagination {
    padding-left: 0;
    margin: 20px 0;
    border-radius: 4px
}

.pager li,.pagination>li {
    display: inline
}

.pagination>li>a,.pagination>li>span {
    position: relative;
    padding: 6px 12px;
    line-height: 1.42857143;
    color: #337ab7;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd
}

.pagination>li>a:focus,.pagination>li>a:hover,.pagination>li>span:focus,.pagination>li>span:hover {
    z-index: 2;
    color: #23527c;
    background-color: #eee;
    border-color: #ddd
}

.pagination>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover {
    z-index: 3;
    color: #fff;
    cursor: default;
    background-color: #337ab7;
    border-color: #337ab7
}

.pagination>.disabled>a,.pagination>.disabled>a:focus,.pagination>.disabled>a:hover,.pagination>.disabled>span,.pagination>.disabled>span:focus,.pagination>.disabled>span:hover {
    color: #777;
    cursor: not-allowed;
    background-color: #fff;
    border-color: #ddd
}

.pager {
    margin: 20px 0;
    text-align: center;
    list-style: none
}

.pager li>a,.pager li>span {
    display: inline-block;
    padding: 5px 14px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 15px
}

.pager li>a:focus,.pager li>a:hover {
    text-decoration: none;
    background-color: #eee
}

.pager .disabled>a,.pager .disabled>a:focus,.pager .disabled>a:hover,.pager .disabled>span {
    color: #777;
    cursor: not-allowed;
    background-color: #fff
}

.label {
    display: inline;
    padding: .2em .6em .3em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em
}

a.badge:focus,a.badge:hover,a.label:focus,a.label:hover {
    color: #fff;
    text-decoration: none;
    cursor: pointer
}

.label:empty {
    display: none
}

.btn .label {
    position: relative;
    top: -1px
}

.btn-group-xs>.btn .badge,.btn-xs .badge {
    top: 0;
    padding: 1px 5px
}

.list-group-item.active>.badge,.nav-pills>.active>a>.badge {
    color: #337ab7;
    background-color: #fff
}

.list-group-item>.badge {
    float: right
}

.list-group-item>.badge+.badge {
    margin-right: 5px
}

.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px
}

.alert h4 {
    margin-top: 0;
    color: inherit
}

.alert .alert-link {
    font-weight: 700
}

.alert-dismissable,.alert-dismissible {
    padding-right: 35px
}

.alert-dismissable .close,.alert-dismissible .close {
    position: relative;
    top: -2px;
    right: -21px;
    color: inherit
}

.alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6
}

.alert-success hr {
    border-top-color: #c9e2b3
}

.alert-success .alert-link {
    color: #2b542c
}

.alert-info {
    color: #31708f;
    background-color: #d9edf7;
    border-color: #bce8f1
}

.alert-info hr {
    border-top-color: #a6e1ec
}

.alert-info .alert-link {
    color: #245269
}

.alert-warning {
    color: #8a6d3b;
    background-color: #fcf8e3;
    border-color: #faebcc
}

.alert-warning hr {
    border-top-color: #f7e1b5
}

.alert-warning .alert-link {
    color: #66512c
}

.alert-danger {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1
}

.alert-danger hr {
    border-top-color: #e4b9c0
}

.alert-danger .alert-link {
    color: #843534
}

.close {
    font-size: 21px;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    filter: alpha(opacity=20);
    opacity: .2
}

.close:focus,.close:hover {
    color: #000;
    text-decoration: none;
    cursor: pointer;
    filter: alpha(opacity=50);
    opacity: .5
}

button.close {
    -webkit-appearance: none;
    padding: 0;
    cursor: pointer;
    background: 0 0;
    border: 0
}

.modal-open {
    padding-right: 0!important
}

.modal {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    display: none;
    -webkit-overflow-scrolling: touch;
    outline: 0
}

.modal.fade .modal-dialog {
    -webkit-transition: -webkit-transform .3s ease-out;
    -o-transition: -o-transform .3s ease-out;
    transition: transform .3s ease-out;
    -webkit-transform: translate(0,-25%);
    -ms-transform: translate(0,-25%);
    -o-transform: translate(0,-25%);
    transform: translate(0,-25%)
}

.modal.in .modal-dialog {
    -webkit-transform: translate(0,0);
    -ms-transform: translate(0,0);
    -o-transform: translate(0,0);
    transform: translate(0,0)
}

.modal,.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto
}

.modal-dialog {
    position: relative;
    width: auto;
    margin: 10px
}

.modal-content {
    border: 1px solid #999
}

.modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: #000;
    z-index: 1040
}

.modal-backdrop.fade {
    filter: alpha(opacity=0);
    opacity: 0
}

.modal-backdrop.in {
    filter: alpha(opacity=50);
    opacity: .5
}

.modal-header .close {
    margin-top: -2px
}

.modal-title {
    margin: 0;
    line-height: 1.42857143
}

.modal-footer {
    padding: 15px;
    border-top: 1px solid #e5e5e5
}

.modal-footer .btn+.btn {
    margin-bottom: 0;
    line-height: 1
}

.modal-scrollbar-measure {
    position: absolute;
    top: -9999px;
    width: 50px;
    height: 50px;
    overflow: scroll
}

@media (min-width: 768px) {
    .modal-dialog {
        width:600px;
        margin: 30px auto
    }

    .modal-content {
        -webkit-box-shadow: 0 5px 15px rgba(0,0,0,.5);
        box-shadow: 0 5px 15px rgba(0,0,0,.5)
    }

    .modal-sm {
        width: 300px
    }
}

@media (min-width: 992px) {
    .modal-lg {
        width:900px
    }
}

.tooltip {
    position: absolute;
    z-index: 1070;
    display: block;
    font-size: 12px;
    font-style: normal;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    word-wrap: normal;
    white-space: normal;
    filter: alpha(opacity=0);
    opacity: 0;
    line-break: auto
}

.tooltip.in {
    filter: alpha(opacity=90);
    opacity: .9
}

.tooltip.top {
    padding: 5px 0;
    margin-top: -3px
}

.tooltip.right {
    padding: 0 5px;
    margin-left: 3px
}

.tooltip.bottom {
    padding: 5px 0;
    margin-top: 3px
}

.tooltip.left {
    padding: 0 5px;
    margin-left: -3px
}

.tooltip-inner {
    max-width: 200px;
    padding: 3px 8px;
    color: #fff;
    text-align: center;
    background-color: #000;
    border-radius: 4px
}

.tooltip-arrow {
    position: absolute;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid
}

.tooltip.top .tooltip-arrow {
    bottom: 0;
    left: 50%;
    margin-left: -5px;
    border-width: 5px 5px 0;
    border-top-color: #000
}

.tooltip.top-left .tooltip-arrow,.tooltip.top-right .tooltip-arrow {
    bottom: 0;
    margin-bottom: -5px;
    border-width: 5px 5px 0;
    border-top-color: #000
}

.tooltip.top-left .tooltip-arrow {
    right: 5px
}

.tooltip.top-right .tooltip-arrow {
    left: 5px
}

.tooltip.right .tooltip-arrow {
    top: 50%;
    left: 0;
    margin-top: -5px;
    border-width: 5px 5px 5px 0;
    border-right-color: #000
}

.tooltip.left .tooltip-arrow {
    top: 50%;
    right: 0;
    margin-top: -5px;
    border-width: 5px 0 5px 5px;
    border-left-color: #000
}

.tooltip.bottom .tooltip-arrow {
    top: 0;
    left: 50%;
    margin-left: -5px;
    border-width: 0 5px 5px;
    border-bottom-color: #000
}

.tooltip.bottom-left .tooltip-arrow {
    top: 0;
    right: 5px;
    margin-top: -5px;
    border-width: 0 5px 5px;
    border-bottom-color: #000
}

.tooltip.bottom-right .tooltip-arrow {
    top: 0;
    left: 5px;
    margin-top: -5px;
    border-width: 0 5px 5px;
    border-bottom-color: #000
}

.btn-group-vertical>.btn-group:after,.btn-group-vertical>.btn-group:before,.btn-toolbar:after,.btn-toolbar:before,.clearfix:after,.clearfix:before,.container-fluid:after,.container-fluid:before,.container:after,.container:before,.dl-horizontal dd:after,.dl-horizontal dd:before,.form-horizontal .form-group:after,.form-horizontal .form-group:before,.modal-footer:after,.modal-footer:before,.modal-header:after,.modal-header:before,.nav:after,.nav:before,.navbar-collapse:after,.navbar-collapse:before,.navbar-header:after,.navbar-header:before,.navbar:after,.navbar:before,.pager:after,.pager:before,.panel-body:after,.panel-body:before,.row:after,.row:before {
    display: table;
    content: " "
}

.btn-group-vertical>.btn-group:after,.btn-toolbar:after,.clearfix:after,.container-fluid:after,.container:after,.dl-horizontal dd:after,.form-horizontal .form-group:after,.modal-footer:after,.modal-header:after,.nav:after,.navbar-collapse:after,.navbar-header:after,.navbar:after,.pager:after,.panel-body:after,.row:after {
    clear: both
}

.center-block {
    display: block;
    margin-right: auto;
    margin-left: auto
}

.pull-right {
    float: right!important
}

.pull-left {
    float: left!important
}

.hide {
    display: none!important
}

.show {
    display: block!important
}

.invisible {
    visibility: hidden
}

.text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0
}

.hidden {
    display: none!important
}

.affix {
    position: fixed
}

.visible-lg,.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block,.visible-md,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-sm,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-xs,.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block {
    display: none!important
}

@media (max-width: 767px) {
    .visible-xs,.visible-xs-block {
        display:block!important
    }

    table.visible-xs {
        display: table!important
    }

    tr.visible-xs {
        display: table-row!important
    }

    td.visible-xs,th.visible-xs {
        display: table-cell!important
    }

    .visible-xs-inline {
        display: inline!important
    }

    .visible-xs-inline-block {
        display: inline-block!important
    }
}

@media (min-width: 768px) and (max-width:991px) {
    .visible-sm,.visible-sm-block {
        display:block!important
    }

    table.visible-sm {
        display: table!important
    }

    tr.visible-sm {
        display: table-row!important
    }

    td.visible-sm,th.visible-sm {
        display: table-cell!important
    }

    .visible-sm-inline {
        display: inline!important
    }

    .visible-sm-inline-block {
        display: inline-block!important
    }
}

@media (min-width: 992px) and (max-width:1199px) {
    .visible-md,.visible-md-block {
        display:block!important
    }

    table.visible-md {
        display: table!important
    }

    tr.visible-md {
        display: table-row!important
    }

    td.visible-md,th.visible-md {
        display: table-cell!important
    }

    .visible-md-inline {
        display: inline!important
    }

    .visible-md-inline-block {
        display: inline-block!important
    }
}

@media (min-width: 1200px) {
    .visible-lg,.visible-lg-block {
        display:block!important
    }

    table.visible-lg {
        display: table!important
    }

    tr.visible-lg {
        display: table-row!important
    }

    td.visible-lg,th.visible-lg {
        display: table-cell!important
    }

    .visible-lg-inline {
        display: inline!important
    }

    .visible-lg-inline-block {
        display: inline-block!important
    }
}

@media (max-width: 767px) {
    .hidden-xs {
        display:none!important
    }
}

@media (min-width: 768px) and (max-width:991px) {
    .hidden-sm {
        display:none!important
    }
}

@media (min-width: 992px) and (max-width:1199px) {
    .hidden-md {
        display:none!important
    }
}

@media (min-width: 1200px) {
    .hidden-lg {
        display:none!important
    }
}

body,html {
    direction: rtl
}

.dl-horizontal dt {
    float: right;
    clear: right;
    text-align: left
}

.dl-horizontal dd {
    margin-right: 180px;
    margin-left: 0
}

.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9 {
    position: relative;
    min-height: 1px;
    padding-left: 15px;
    padding-right: 15px
}

.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9 {
    float: right
}

.tooltip {
    font-family: yekan,'yekan',tahoma
}

.checkbox input[type=checkbox],.checkbox-inline input[type=checkbox],.radio input[type=radio],.radio-inline input[type=radio] {
    margin-right: -20px;
    margin-left: auto
}

.checkbox-inline,.radio-inline {
    padding-right: 20px;
    padding-left: 0
}

.checkbox-inline+.checkbox-inline,.radio-inline+.radio-inline {
    margin-right: 10px;
    margin-left: 0
}

.navbar-right .dropdown-menu-left {
    left: 0;
    right: auto
}

.btn-group-vertical>.btn,.btn-group>.btn,.btn-toolbar .btn-group,.btn-toolbar .input-group {
    float: right
}

.btn-group .btn+.btn,.btn-group .btn+.btn-group,.btn-group .btn-group+.btn,.btn-group .btn-group+.btn-group,.btn-toolbar {
    margin-right: -1px;
    margin-left: 0
}

.btn-toolbar {
    margin-right: -5px
}

.btn-toolbar>.btn,.btn-toolbar>.btn-group,.btn-toolbar>.input-group {
    margin-right: 5px;
    margin-left: 0
}

.btn-group>.btn:first-child {
    margin-right: 0
}

.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0
}

.btn-group>.btn:last-child:not(:first-child),.btn-group>.dropdown-toggle:not(:first-child) {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 0;
    border-top-right-radius: 0
}

.btn-group>.btn-group {
    float: right
}

.btn-group.btn-group-justified>.btn,.btn-group.btn-group-justified>.btn-group {
    float: none
}

.btn-group>.btn-group:not(:first-child):not(:last-child)>.btn {
    border-radius: 0
}

.btn-group>.btn-group:first-child>.btn:last-child,.btn-group>.btn-group:first-child>.dropdown-toggle {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0
}

.btn-group>.btn-group:last-child>.btn:first-child {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 0;
    border-top-right-radius: 0
}

.btn .caret {
    margin-right: 0
}

.btn-group-vertical>.btn+.btn,.btn-group-vertical>.btn+.btn-group,.btn-group-vertical>.btn-group+.btn,.btn-group-vertical>.btn-group+.btn-group {
    margin-top: -1px;
    margin-right: 0
}

.input-group .form-control,.nav-tabs>li {
    float: right
}

.input-group .form-control:first-child,.input-group-addon:first-child,.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group>.btn,.input-group-btn:first-child>.dropdown-toggle,.input-group-btn:last-child>.btn-group:not(:last-child)>.btn,.input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {
    border-bottom-right-radius: 4px;
    border-top-right-radius: 4px;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0
}

.input-group-addon:first-child {
    border-left: 0;
    border-right: 1px solid
}

.input-group .form-control:last-child,.input-group-addon:last-child,.input-group-btn:first-child>.btn-group:not(:first-child)>.btn,.input-group-btn:first-child>.btn:not(:first-child),.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group>.btn,.input-group-btn:last-child>.dropdown-toggle {
    border-bottom-left-radius: 4px;
    border-top-left-radius: 4px;
    border-bottom-right-radius: 0;
    border-top-right-radius: 0
}

.input-group-addon:last-child {
    border-left-width: 1px;
    border-left-style: solid;
    border-right: 0
}

.input-group-btn>.btn+.btn {
    margin-right: -1px;
    margin-left: auto
}

.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group {
    margin-left: -1px;
    margin-right: auto
}

.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group {
    margin-right: -1px;
    margin-left: auto
}

.nav {
    padding-right: 0;
    padding-left: initial
}

.nav-tabs>li>a {
    margin-left: auto;
    margin-right: -2px
}

.nav-tabs-justified>li>a,.nav-tabs>li>a {
    border-radius: 4px 4px 0 0
}

.navbar-header {
    float: right
}

.navbar-collapse {
    padding-right: 15px;
    padding-left: 15px
}

.navbar-brand {
    float: right
}

.navbar>.container .navbar-brand,.navbar>.container-fluid .navbar-brand {
    margin-right: -15px;
    margin-left: auto
}

.navbar-toggle {
    float: left;
    margin-left: 15px;
    margin-right: auto
}

.navbar-nav .open .dropdown-menu .dropdown-header,.navbar-nav .open .dropdown-menu>li>a {
    padding: 5px 25px 5px 15px
}

.navbar-nav {
    float: right
}

.navbar-right {
    float: left!important
}

.navbar-left,.navbar-left.flip,.navbar-nav>li {
    float: right!important
}

.navbar-right:last-child {
    margin-left: -15px;
    margin-right: auto
}

.navbar-right.flip {
    float: left!important;
    margin-left: -15px;
    margin-right: auto
}

.navbar-right .dropdown-menu {
    left: 0;
    right: auto
}

.navbar-text {
    float: right
}

.navbar-text.navbar-right:last-child {
    margin-left: 0;
    margin-right: auto
}

.pagination {
    padding-right: 0
}

.pagination>li>a,.pagination>li>span {
    float: right;
    margin-right: -1px;
    margin-left: 0
}

.pagination>li:first-child>a,.pagination>li:first-child>span {
    margin-left: 0;
    border-bottom-right-radius: 4px;
    border-top-right-radius: 4px;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0
}

.pagination>li:last-child>a,.pagination>li:last-child>span {
    margin-right: -1px;
    border-bottom-left-radius: 4px;
    border-top-left-radius: 4px;
    border-bottom-right-radius: 0;
    border-top-right-radius: 0
}

.list-group,.pager {
    padding-right: 0;
    padding-left: initial
}

.close,.pager .next>a,.pager .next>span {
    float: left
}

.pager .previous>a,.pager .previous>span {
    float: right
}

.modal-footer {
    text-align: left
}

.modal-footer.flip {
    text-align: right
}

.modal-footer .btn+.btn {
    margin-left: auto;
    margin-right: 5px
}

.modal-footer .btn-group .btn+.btn {
    margin-right: -1px;
    margin-left: auto
}

.modal-footer .btn-block+.btn-block {
    margin-right: 0;
    margin-left: auto
}

body {
    margin: 0;
    padding: 0;
    min-width: 1000px;
    font-family: yekan,'yekan',tahoma;
    font-size: 13px;
    color: #555
}

.fa {
    font-family: "yekan"!important;
    direction: rtl!important
}

:focus {
    outline: 0
}

input[type=checkbox],input[type=radio] {
    box-sizing: border-box;
    padding: 0
}

input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button {
    height: auto
}

input[type=search] {
    -webkit-appearance: textfield;
    box-sizing: content-box
}

input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration {
    -webkit-appearance: none
}

ul {
    padding: 0;
    margin: 0;
    list-style: none
}

.arial {
    font-family: Arial
}

.justify {
    text-align: justify
}

.relative {
    position: relative
}

.clear {
    clear: both
}

.acsPopupBody ul.acsList li.acsItem:after,.clearAfter:after {
    content: '';
    display: block;
    clear: both
}

.footerMenu ul li a[rel~=nofollow],a.nofollow,a.nofollow[rel~=nofollow],a[rel~=nofollow] {
    outline: 0!important
}

.no-padding,select.form-control {
    padding: 0!important
}

.IranSans {
    font-family: 'iran_sans',yekan,tahoma
}

.noWrap {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    max-width: 100%
}

fieldset.loginField fieldset {
    margin-bottom: 10px
}

.mg-auto {
    margin-right: auto;
    margin-left: auto
}

.append-icon {
    margin-left: 4px
}

.overflow_hidden {
    overflow: hidden
}

.lineHeight2 {
    line-height: 2em
}

.btnShadow {
    box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    -ms-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    -o-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)
}

.tran_3s {
    -webkit-transition: .3s;
    -moz-transition: .3s;
    -o-transition: .3s;
    -ms-transition: .3s;
    transition: .3s
}

.checkbox-control input[type=checkbox],.none,.radio-control input[type=radio],span.MetaMarkUp {
    display: none
}

.btn-yellow {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background: #fc0;
    background: -moz-linear-gradient(top,#fc0 0%,#ffbf00 42%,#ffbf00 62%,#fc0 100%);
    background: -webkit-gradient(left top,left bottom,color-stop(0%,#fc0),color-stop(42%,#ffbf00),color-stop(62%,#ffbf00),color-stop(100%,#fc0));
    background: -webkit-linear-gradient(top,#fc0 0%,#ffbf00 42%,#ffbf00 62%,#fc0 100%);
    background: -o-linear-gradient(top,#fc0 0%,#ffbf00 42%,#ffbf00 62%,#fc0 100%);
    background: -ms-linear-gradient(top,#fc0 0%,#ffbf00 42%,#ffbf00 62%,#fc0 100%);
    border-image: none;
    border-style: none;
    cursor: pointer;
    font-size: 15px;
    line-height: normal;
    padding: 0 2px;
    color: #000;
    font-weight: 700;
    outline: 0;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-top: 1px solid #d4a900;
    border-right: 1px solid #aa8700;
    border-left: 1px solid #aa8700;
    border-bottom: 2px solid #aa8700
}

.btn-yellow:focus,.btn-yellow:hover {
    border-color: #b89300 #8a6e00 #8a6e00;
    background: #ffcb00;
    color: #000;
    box-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none
}

.pointer {
    cursor: pointer
}

.btn-primary {
    background: #2196f3;
    border: 1px solid #208de6;
    box-sizing: border-box;
    font-size: 13px;
    height: 37px;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    -ms-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    line-height: 27px;
    color: #fff
}

.btn-primary:active,.btn-primary:focus,.btn-primary:hover {
    background: #208de6;
    border: 1px solid #208de6;
    color: #fff
}

.btn-blue {
    background: #165e8d;
    border: 1px solid #165e8d;
    box-sizing: border-box;
    font-size: 13px;
    height: 37px;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    -ms-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    line-height: 27px;
    color: #fff
}

.btn-blue:active,.btn-blue:focus,.btn-blue:hover {
    background: #11527d;
    border: 1px solid #165e8d;
    color: #fff
}

.btn-danger {
    background: #ff6e03;
    border: 1px solid #ff6e03;
    box-sizing: border-box;
    font-size: 13px;
    height: 34px;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    -ms-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    line-height: 27px;
    color: #fff
}

.btn-danger:active,.btn-danger:focus,.btn-danger:hover {
    background: #ea6400;
    border: 1px solid #ea6400;
    color: #fff
}

.GreenWarning,.RedWarning {
    display: none;
    text-align: right;
    padding: 2px 15px 2px 10px;
    margin-bottom: 12px;
    border-radius: 2px;
    position: relative;
    clear: both
}

.RedWarning {
    background: #ff6363;
    color: #fff;
    font-size: 13px;
    border: 1px solid #f7b4b4
}

.GreenWarning:before,.RedWarning:before {
    content: '';
    width: 4px;
    height: 4px;
    position: absolute;
    top: 47%;
    right: 6px;
    border-radius: 50%
}

.RedWarning:before {
    background: #fefefe
}

.GreenWarning {
    color: green;
    font-size: 18px;
    background: rgba(0,128,0,.1);
    border: 1px solid green
}

.GreenWarning:before {
    background: green
}

.modal-header {
    background: #f0f1f2;
    padding: 10px 15px;
    border-bottom: 1px solid #e5e5e5;
    line-height: 25px
}

.modal-header .close {
    float: left!important;
    border: 1px solid #d6d9df;
    background: #ebeced;
    display: block;
    width: 27px;
    height: 27px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    opacity: 1;
    color: #77787b;
    position: relative
}

.modal-header .close span {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    width: 9px;
    margin: 0 auto;
    line-height: 25px;
    font-weight: 400
}

.modal-title {
    font-size: 13px
}

.modal-body {
    position: relative;
    padding: 15px
}

.modal-content {
    position: relative;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 0;
    outline: 0;
    -webkit-box-shadow: 0 5px 15px rgba(0,0,0,.5);
    -moz-box-shadow: 0 5px 15px rgba(0,0,0,.5);
    box-shadow: 0 5px 15px rgba(0,0,0,.5)
}

.modal-dialog {
    z-index: 1050
}

.rotate-90 {
    transform: rotate(90deg);
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    display: inline-block
}

.rotate-180,.rotate-270 {
    transform: rotate(180deg);
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    display: inline-block
}

.rotate-270 {
    transform: rotate(270deg);
    -webkit-transform: rotate(270deg);
    -moz-transform: rotate(270deg)
}

.radio-control label {
    position: relative;
    padding-right: 25px;
    cursor: pointer;
    line-height: 16px;
    font-weight: 400
}

.radio-control label:after,.radio-control label:before {
    content: '';
    position: absolute;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    background: #fff
}

.radio-control label:before {
    width: 16px;
    height: 16px;
    top: 0;
    right: 0;
    border: 1px solid #ccc
}

.radio-control label:after {
    width: 10px;
    height: 10px;
    top: 3px;
    right: 3px;
    border: 1px solid transparent;
    transition: ease all .5s;
    margin: 0 auto
}

.radio-control input[type=radio]:checked+label:after {
    background: #f7941d;
    border: 1px solid #ccc
}

.radio-control.disabled label:after,.radio-control.disabled label:before {
    opacity: .5
}

.radio-control label:hover:after {
    background: #0065b8;
    border: 1px solid #ccc
}

.checkbox-control label {
    position: relative;
    padding-right: 30px;
    cursor: pointer;
    line-height: 25px
}

.checkbox-control label:after {
    content: '';
    font-family: "EliFont";
    position: absolute;
    width: 20px;
    height: 20px;
    top: 3px;
    right: 3px;
    border: 1px solid #ccc;
    background: #fff;
    transition: ease all .5s;
    margin: 0 auto;
    line-height: 18px;
    font-size: 13px;
    font-weight: 700;
    text-align: center
}

.checkbox-control label.error:after {
    border: 1px solid red
}

.checkbox-control input[type=checkbox]:checked+label:after {
    content: '\e826';
    color: #f7941d
}

.checkbox-control.disabled label:after {
    opacity: .5
}

.form-group {
    position: relative
}

.form-group .input-icon {
    position: absolute;
    display: block;
    top: 27px;
    text-align: center;
    color: #b3b3b3;
    -webkit-transition: .3s;
    -moz-transition: .3s;
    -o-transition: .3s;
    -ms-transition: .3s;
    transition: .3s;
    z-index: 3;
    left: 0;
    width: 30px;
    height: 34px;
    line-height: 34px;
    font-size: 17px
}

.form-group-icon-right .input-icon {
    left: auto;
    right: 5px
}

.form-group .input-icon:before {
    margin: 0 auto;
    line-height: 34px
}

.form-group.form-group-icon-left .form-control {
    padding-left: 30px
}

.form-group.form-group-icon-left label,.form-group.form-group-icon-right label {
    font-weight: 400
}

input.text-left {
    direction: ltr
}

input.text-left::-webkit-input-placeholder {
    text-align: center
}

input.text-left:-moz-placeholder,input.text-left::-moz-placeholder {
    text-align: center
}

input.text-left:-ms-input-placeholder {
    text-align: center
}

.form-control {
    border-radius: 2px;
    outline: 0;
    border: 1px solid #ccc
}

.animated {
    -webkit-animation-duration: .8s;
    -webkit-animation-delay: 0;
    -webkit-animation-timing-function: ease;
    -webkit-animation-fill-mode: both;
    -moz-animation-duration: .8s;
    -moz-animation-delay: 0;
    -moz-animation-timing-function: ease;
    -moz-animation-fill-mode: both;
    -ms-animation-duration: .8s;
    -ms-animation-delay: 0;
    -ms-animation-timing-function: ease;
    -ms-animation-fill-mode: both;
    animation-duration: .8s;
    animation-delay: 0;
    animation-timing-function: ease;
    animation-fill-mode: both;
    opacity: 1
}

.flipInY {
    -webkit-backface-visibility: visible!important;
    backface-visibility: visible!important;
    -webkit-animation-name: flipInY;
    animation-name: flipInY
}

.ContractLoginContainer,.SwitchLogin input[type=radio],.acsPopup p {
    display: none
}

fieldset.loginField+span {
    background: #fffcf2;
    display: block;
    height: 37px;
    padding: 7px 0;
    text-align: center;
    position: absolute;
    bottom: 0;
    right: 0;
    left: 0
}

fieldset.loginField {
    max-width: 364px;
    margin: 0 auto;
    width: 100%;
    padding: 0
}

div#loginModal.modal .modal-dialog {
    max-width: 440px;
    width: 100%
}

fieldset.loginField fieldset label {
    display: block;
    float: right;
    width: 20%;
    line-height: 28px;
    color: #4d4d4d;
    font-weight: 400
}

fieldset.loginField fieldset input.form-control {
    width: 80%;
    float: left;
    direction: ltr;
    border: 1px solid #f0f1f2;
    box-shadow: none;
    border-radius: 2px;
    color: #acacac;
    font: 700 12px arial;
    text-align: left;
    padding: 6px 12px
}

fieldset.loginField fieldset input.form-control::-webkit-input-placeholder {
    text-align: left
}

fieldset.loginField fieldset input.form-control::-moz-placeholder {
    text-align: left
}

fieldset.loginField fieldset input.form-control:-ms-input-placeholder {
    text-align: left
}

fieldset.loginField fieldset input.form-control:-moz-placeholder {
    text-align: left
}

.ContractloginSubmit,.loginField .UserloginSubmit {
    float: left;
    margin-bottom: 10px;
    margin-right: 20px;
    background: #2196f3;
    border: 1px solid #208de6;
    width: 133px;
    box-sizing: border-box;
    font-size: 13px;
    height: 37px;
    border-radius: 2px;
    -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    -ms-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)
}

.ContractloginSubmit:hover,.loginField .UserloginSubmit:hover {
    background: #208de6
}

fieldset.loginField .remember-me label {
    color: #5d5252;
    font-weight: 400;
    width: 100%;
    float: none
}

.UsernameLogin {
    width: 50%;
    float: right;
    text-align: center;
    background: rgba(68,166,189,.7);
    color: #fff!important;
    font-size: 16px!important;
    padding: 5px 0;
    cursor: pointer;
    border-radius: 0 0 5px 0;
    position: relative;
    font-weight: 400!important;
    opacity: .7
}

.UsernameLogin:hover,input#UserLoginRadio:checked+label {
    background: #44a6bd;
    opacity: 1
}

.ContractLogin {
    float: right;
    width: 50%;
    text-align: center;
    padding: 5px 0;
    font-size: 16px!important;
    background: rgba(86,108,147,.8);
    color: #fff!important;
    cursor: pointer;
    border-radius: 0 0 0 5px;
    font-weight: 400!important;
    opacity: .7
}

.ContractLogin:hover,input#ContractLoginRadio:checked+label {
    background: #566c93;
    opacity: 1
}

.SwitchLogin {
    position: relative;
    margin: 0 auto 10px;
    width: 100%
}

.SwitchLoginDivider {
    position: absolute;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    right: 0;
    background: #5995af;
    left: 0;
    margin: 0 auto;
    top: 38%;
    box-shadow: inset 0 0 3px 1px #557a91;
    -webkit-box-shadow: inset 0 0 3px 1px #557a91;
    -moz-box-shadow: inset 0 0 3px 1px #557a91;
    border: 1px solid #7bc0d0;
    z-index: 5
}

a.ForgotPassLink {
    text-align: right;
    line-height: 34px;
    display: block;
    color: #2196f3!important;
    font-size: 11px;
    padding-bottom: 7px;
    padding-top: 5px
}

.register {
    background: rgba(33,150,243,.11);
    margin: 15px -37px -25px -38px;
    padding: 10px 37px;
    clear: both;
    text-align: center
}

.register a {
    color: #2196f3!important;
    border-bottom: 1px dotted #2196f3;
    padding-right: 5px
}

.acsWrapper * {
    direction: ltr;
    text-align: left
}

.acsPopup {
    position: absolute;
    border: 2px solid #ccc;
    margin-top: 7px;
    overflow: visible;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    z-index: 1000;
    background-color: #fff
}

.acsClose {
    background-color: #efefef;
    border-top: 1px solid #ccc;
    bottom: 0;
    clear: both;
    height: 25px;
    width: 100%;
    line-height: 25px
}

.acsClose a {
    float: right;
    font-size: 13px;
    cursor: pointer;
    color: #523339
}

.acsClose a i {
    float: right;
    clear: both
}

.acsClear {
    height: 16px;
    width: 16px;
    position: absolute;
    right: 5px;
    cursor: pointer;
    background: rgba(0,0,0,.3);
    top: 36px;
    color: #fff;
    font-size: 8px;
    text-align: center;
    border-radius: 50%;
    padding-top: 3px;
    transition: ease .3s all;
    -webkit-transition: ease .3s all;
    -moz-transition: ease .3s all
}

.acsClear:hover {
    background: rgba(255,0,0,.8)
}

.acsPopupBody ul.acsList {
    list-style-type: none;
    padding: 0;
    color: #0078d5;
    display: block;
    direction: ltr!important;
    box-sizing: border-box;
    margin: 3px auto
}

.acsPopupBody ul.acsList li.acsItem {
    clear: both;
    width: 100%;
    text-align: left;
    color: #333;
    font-size: 14px;
    padding-left: 34px;
    position: relative
}

.acsPopupBody ul.acsList li.acsItem strong {
    color: #000
}

.acsPopupBody ul.acsList li.acsItem i {
    position: absolute;
    left: 6px;
    top: 6px;
    color: #f7941d
}

.acsPopupBody ul.acsList li.acsItem.subairport i {
    margin-left: 25px;
    top: 4px
}

.acsPopupBody ul.acsList li.acsItem.subairport span {
    margin-left: 15px;
    padding-left: 0
}

.acsClear,i.acsCatAirport,i.acsCatCity,i.acsCatTrainStation,i.subairport {
    font-family: 'EliFont';
    font-style: normal
}

.acsClear:before {
    content: '\e824'
}

.acsPopupBody ul.acsList li.acsItem i.acsCatAirport:before {
    content: '\e833'
}

.acsPopupBody ul.acsList li.acsItem i.acsCatTrainStation:before {
    content: '\e888'
}

.acsPopupBody ul.acsList li.acsItem.subairport i.acsCatAirport:before,.acsPopupBody ul.acsList li.acsItem.subairport i.acsCatTrainStation:before {
    content: '\e838'
}

.acsPopupBody ul.acsList li.acsItem i.acsCatCity:before {
    content: '\e804'
}

.acsPopupBody ul.acsList li.acsItem.acsRtl {
    text-align: right;
    font-size: 12px;
    padding-left: 0;
    padding-right: 34px
}

.acsPopupBody ul.acsList li.acsItem.acsRtl i {
    left: auto;
    right: 6px;
    margin-right: 0;
    margin-left: 8px
}

.acsPopupBody ul.acsList li.acsItem.acsRtl span {
    float: right;
    width: 100%;
    padding-left: 0;
    margin-right: -8px;
    margin-left: 0;
    text-align: right;
    direction: rtl
}

.acsPopupBody ul.acsList li.acsItem.subairport.acsRtl i {
    margin-left: 0;
    margin-right: 25px;
    top: 7px;
    transform: rotateY(180deg);
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    display: block
}

.acsPopupBody ul.acsList li.acsItem.subairport.acsRtl span {
    margin-right: 15px
}

.acsTextboxRtl {
    direction: rtl!important;
    text-align: right
}

.acsWrapper i {
    margin-right: 8px
}

.acsPopupBody ul.acsList li.acsItem span {
    display: block;
    float: left;
    font-weight: 400;
    width: 82%;
    padding-left: 0;
    padding-top: 6px!important;
    margin-bottom: 4px;
    margin-top: 1px;
    margin-left: -8px
}

.acsPopupBody ul.acsList li.acsItem:hover,.acsSelectedItem {
    border: 0!important;
    box-shadow: 0 0 0 10px transparent;
    background: rgba(247,148,29,.3);
    cursor: pointer;
    display: block
}

.acsIcon {
    width: 0;
    top: -15px;
    left: 15px;
    display: block;
    position: absolute;
    border-right: 13px solid transparent;
    border-left: 13px solid transparent;
    border-bottom: 13px solid #f7941d
}

.datePicker,.datePickerControl {
    position: relative;
    display: inline-block;
    width: 100%
}

.datePickerPopup * {
    text-align: center!important
}

.datePickerMonth,.datePickerYear {
    display: block;
    width: 102px;
    margin: 0 2px
}

.datePickerYear {
    float: left
}

.datePickerMonth {
    float: right
}

.datePickerSide {
    float: left
}

.datePickerInput input[type=text] {
    cursor: pointer;
    text-align: center
}

.datePickerPage {
    clear: both;
    margin: 0 -5px
}

.datePickerPageMonth {
    list-style-type: none;
    padding: 0;
    display: block;
    float: left;
    margin: 0 5px
}

.datePickerPageMonth ul {
    list-style-type: none;
    margin: 0;
    padding: 0
}

.datePickerWeekDays {
    display: block;
    clear: both
}

.datePickerWeekDays li,.datePickerWeekDaysTitle {
    float: left;
    width: 30px;
    height: 30px;
    min-height: 30px;
    padding-top: 5px;
    text-align: center;
    box-sizing: border-box
}

.datePickerWeekDays li {
    color: #333;
    cursor: pointer;
    font-size: 13px;
    line-height: 21px;
    border-right: 1px solid #e6e6e6;
    border-bottom: 1px solid #e6e6e6
}

.datePickerPageMonth li.datePickerWeekDays>ul>li {
    border-top: 1px solid #e6e6e6
}

.datePickerPageMonth li.datePickerWeekDays~li.datePickerWeekDays>ul>li {
    border-top: none
}

.datePickerPageMonth li.datePickerWeekDays>ul>li:first-child {
    border-left: 1px solid #e6e6e6
}

.datePickerWeekDaysTitle {
    background: 0 0 #f2f2f2;
    font-weight: 700;
    font-size: 13px
}

.datePickerWeekDays li.datePickerDisabledDay {
    color: #dedede
}

.datePickerEnabledDay:hover {
    transition: all .1s ease 0;
    font-weight: 700;
    color: #fff
}

.datePickerFrom .datePickerEnabledDay:hover,.datePickerTo .datePickerEnabledDay:hover {
    background: #a7e6ff!important
}

.datePickerCurrentDay {
    background: #fff;
    color: #000
}

.datePickerSelectedDay {
    background: #fc0;
    color: #fff!important;
    font-weight: 700
}

.datePickerFrom .datePickerSelectedDay {
    background: #fc0!important
}

.datePickerPairFrom,.datePickerTo .datePickerSelectedDay {
    background: #00658d!important
}

.datePickerPairFrom,.datePickerPairTo {
    color: #fff!important;
    font-weight: 700
}

.datePickerPairTo {
    background: #fc0!important
}

.datePickerNext,.datePickerPrev {
    cursor: pointer;
    opacity: .7;
    background: #fff;
    font-weight: 700;
    color: #000;
    height: 35px;
    width: 35px;
    position: relative
}

.datePickerNext:before,.datePickerPrev:before {
    font-size: 13px;
    margin: 0 auto;
    position: absolute;
    line-height: 35px!important;
    display: block!important;
    right: 0;
    left: 0
}

.datePickerMonthName,.divBotHeader .navbar-default ul.nav li:hover ul li ul {
    display: none
}

.datePickerMonthRight,.datePickerNext,.liBoxLang span {
    float: right
}

.datePickerMonthLeft,.datePickerPrev {
    float: left
}

.datePickerMonthLeft,.datePickerMonthRight {
    padding: 10px 0;
    width: 128px;
    text-align: center;
    font-size: 13px
}

.datePickerNavigate {
    display: inline-block;
    width: 100%;
    margin-bottom: 5px
}

.datePickerCalendarSwitch {
    display: block;
    margin: 0 3px 10px
}

.datePickerPopupDouble .datePickerCalendarSwitch {
    margin: 6px auto 0!important
}

.datePickerCalendarSwitch .switchHand {
    font-size: 10px;
    width: 60px!important
}

.datePickerCalendarSwitch .switchOffValue,.datePickerCalendarSwitch .switchOnValue {
    padding: 0!important;
    width: 40px!important
}

.datePickerhsh input {
    direction: rtl!important
}

.datePickergrg input {
    direction: ltr!important
}

.datePickerSelectCalendar .datePicker {
    display: none!important
}

.datePickerPopup.datePickerPopupNoneDouble .datePickerSelects select,.singleDp .datePickerPopup .datePickerSelects select {
    height: 27px;
    margin-top: 10px!important;
    border: 1px solid #ccc;
    font-size: 13px;
    margin-right: auto;
    margin-left: auto
}

.datePickerPopup.datePickerPopupNoneDouble .switch,.singleDp .datePickerPopup .switch {
    margin-right: auto;
    margin-left: auto
}

.datePickerPopup.datePickerPopupNoneDouble .datePickerPageMonth:first-child,.singleDp .datePickerPopup .datePickerPageMonth:first-child {
    border-right: none;
    padding-right: 0
}

.datePickerPopup.datePickerPopupNoneDouble .datePickerWeekDays li,.datePickerPopup.datePickerPopupNoneDouble .datePickerWeekDaysTitle,.singleDp .datePickerPopup .datePickerWeekDays li,.singleDp .datePickerPopup .datePickerWeekDaysTitle {
    min-width: 35px
}

.datePickerPopup.datePickerPopupNoneDouble,.singleDp .datePickerPopup {
    width: 269px
}

.datePickerPopup {
    position: absolute;
    background: #fff;
    color: #555;
    display: none;
    z-index: 10000;
    font-size: 12px;
    padding: 10px;
    line-height: normal;
    font-weight: 400;
    border: 2px solid #f7941d;
    margin-top: 7px;
    overflow: visible;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    width: 467px
}

.datePickerWeekDaysTitle {
    background-color: transparent;
    color: #aaa
}

.datePickerPageMonth:first-child {
    border-right: 2px solid #f7941d;
    padding-right: 10px
}

.datePickerNext:hover,.datePickerPrev:hover {
    background-color: #eee
}

.datePickerEnabledDay:hover,.datePickerFrom .datePickerEnabledDay:hover,.datePickerTo .datePickerEnabledDay:hover {
    background-color: #f79826!important
}

.datePickerFrom .datePickerSelectedDay,.datePickerPairFrom,.datePickerPairTo,.datePickerSelectedDay,.datePickerTo .datePickerSelectedDay {
    background-color: #f47b20!important
}

.datePickerRange,.datePickerRangeHover {
    background-color: #efefef
}

.datePickerIcon {
    top: 0;
    right: 15px;
    display: block;
    position: absolute
}

.datePickerIcon:after,.datePickerIcon:before {
    content: "";
    position: absolute;
    width: 0;
    height: 0;
    border-style: solid;
    border-color: transparent;
    border-top: 0
}

.datePickerIcon:before {
    bottom: 0;
    right: 0;
    border-color: transparent transparent #f7941d;
    border-width: 16px
}

.datePickerIcon:after {
    bottom: 0;
    border-bottom-color: #fff;
    border-width: 12px;
    right: 4px
}

.switch {
    height: 22px;
    position: relative;
    overflow: hidden;
    cursor: pointer
}

.switch,.switch * {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.switch[disabled=disabled] {
    opacity: .5
}

.switchKey {
    height: inherit;
    position: absolute;
    top: 0;
    white-space: nowrap
}

.switchHand,.switchOffValue,.switchOnValue {
    height: inherit;
    text-align: center;
    white-space: nowrap;
    float: left;
    box-sizing: border-box
}

.switchHand {
    padding: 3px 5px;
    position: relative;
    background: #efefef;
    border: 1px solid #ccc;
    min-width: 20px
}

.switchHand:hover {
    background: #e4e4e4
}

.switchOffValue,.switchOnValue {
    min-width: 25px;
    margin: 0;
    box-shadow: inset 2px 2px 6px rgba(0,0,0,.2);
    color: rgba(255,255,255,.8)
}

.switchOnValue {
    background: 0 0 #ed8323;
    margin: 0 -10px 0 0;
    text-shadow: 1px 1px rgba(0,0,0,.2);
    padding: 0 10px 0 5px
}

.switchOnHand .switchOffValue,.switchOnHand .switchOnValue {
    background: #f47b20
}

.switchOffValue {
    background: #ed8323;
    text-shadow: 0 1px rgba(255,255,255,.2);
    padding: 0 5px 0 10px;
    margin-left: -10px
}

.sprite {
    background-image: url(/Content/Images/sprite.png);
    background-repeat: no-repeat;
    display: inline-block;
    margin-right: 5px;
    margin-left: 5px;
    position: relative;
    top: 2px;
    width: 20px;
    height: 20px
}

.ir-flag {
    background-position: -29px -191px
}

.uk-flag {
    background-position: -58px -191px
}

.tk-flag {
    background-position: -1px -191px
}

.ar-flag {
    background-position: -85px -191px
}

.divTopHeader {
    background-color: #333;
    height: 45px;
    font-size: 12px
}

.text-white {
    color: #fff;
    line-height: 43px
}

.divBotHeader {
    box-shadow: 0 2px 8px #333;
    -webkit-box-shadow: 0 2px 8px #333;
    -moz-box-shadow: 0 2px 8px #333;
    border-bottom: 1px solid #9e9e9e;
    position: relative;
    z-index: 2
}

.NavbarLogo {
    margin-top: 8px
}

.navbar-default {
    background: #f5f5f5;
    border: 0
}

.notloggedin .loginModalFrm {
    line-height: 26px
}

.notloggedin a {
    color: #333
}

.LoginTxt {
    cursor: pointer
}

.TagLine,.loggedin {
    height: 26px;
    line-height: 26px
}

.TagLine {
    text-align: left;
    float: left;
    font-size: .97em
}

.UserMenuLink {
    cursor: pointer;
    line-height: 45px
}

.userMenu .userMenuArrow {
    font-size: 10px;
    position: relative;
    top: 0
}

.MainMenu .megaMenu .listTab:hover a,.divBotHeader .navbar-default ul.nav li:hover ul .FirstItemBlock a,.userMenu .userMenuArrow:before {
    font-weight: 700
}

.userMenuList {
    top: 28px;
    position: absolute;
    z-index: 9999;
    display: block;
    visibility: hidden;
    opacity: 0;
    overflow: hidden;
    min-width: 200px;
    padding: 0;
    box-shadow: 0 10px 20px rgba(0,0,0,.09);
    -webkit-transform: translate3d(0,-12px,0);
    -moz-transform: translate3d(0,-12px,0);
    -ms-transform: translate3d(0,-12px,0);
    -o-transform: translate3d(0,-12px,0);
    transform: translate3d(0,-12px,0);
    border: 1px solid rgba(0,0,0,.2);
    border-top: 3px solid #f47b20;
    background: #f6f6f6
}

.userMenuList ul li {
    padding: 5px;
    border-bottom: 1px solid #ebebeb;
    border-top: 1px solid #fff;
    background: 0 0
}

.userMenuList ul li a {
    color: #242424;
    display: block
}

.userMenuList ul li:hover {
    background: #fff
}

.userMenu:hover div.userMenuList {
    visibility: visible;
    opacity: 1;
    -webkit-transform: translate3d(0,0,0);
    -moz-transform: translate3d(0,0,0);
    -ms-transform: translate3d(0,0,0);
    -o-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
    -webkit-transition: all 300ms cubic-bezier(.2,.06,.05,.95);
    -moz-transition: all 300ms cubic-bezier(.2,.06,.05,.95);
    -ms-transition: all 300ms cubic-bezier(.2,.06,.05,.95);
    -o-transition: all 300ms cubic-bezier(.2,.06,.05,.95);
    transition: all 300ms cubic-bezier(.2,.06,.05,.95)
}

.divBotHeader {
    background-color: #f7f7f7
}

.ulLoginCurrency {
    float: left;
    position: relative;
    top: 1px
}

.changeCurr {
    font-family: "Helvetica Neue",Helvetica,Arial;
    font-size: 14px;
    font-weight: 700;
    margin-left: 7px
}

.ulLoginCurrency ul {
    display: none;
    position: absolute;
    top: 9px;
    left: -13px;
    width: 115px;
    z-index: 9;
    padding: 0;
    margin: 0;
    min-height: 88px
}

.ulLoginCurrency ul ul {
    background: 0 0 #fff;
    box-shadow: 0 6px 12px rgba(0,0,0,.176);
    border-top: 3px solid #f47b20;
    position: absolute;
    right: 0;
    top: 27px;
    z-index: 2
}

.ulLoginCurrency ul ul:before {
    content: '';
    width: 0;
    height: 0;
    position: absolute;
    top: -7px;
    left: 20px;
    border-right: 7px solid transparent;
    border-left: 7px solid transparent;
    border-bottom: 7px solid #f47b20
}

.liBoxLang,.ulLoginCurrency .CurrencyUnit {
    padding: 2px;
    background: #fff;
    line-height: 25px;
    margin: 2px 0
}

.ulLoginCurrency .CurrencyUnit {
    margin: 2px 5px
}

.ulLoginCurrency li.ParentLoginCurr {
    position: relative;
    cursor: pointer;
    float: left;
    margin-right: 10px;
    z-index: 3;
    margin-left: 2px
}

#myImg {
    top: 11px
}

.divBoxTabRight ul li .bTitleTab i:before,li.lang.ParentLoginCurr {
    margin-right: 0
}

.MainMenu .megaMenu .listTab ul li a:after,.liBoxLang:after {
    content: '';
    display: block;
    clear: both
}

.CurrencyUnit:hover,.liBoxLang:hover {
    background: #efefef
}

ul.ulBoxCurrency li span {
    margin-left: 10px;
    width: 25px;
    display: inline-block;
    text-align: center;
    color: #169ed8
}

.MainMenu li span[class^=icon-] {
    display: block;
    margin: 5px auto 15px;
    font-size: 30px;
    transition: ease all .5s;
    -webkit-transition: ease all .5s;
    -moz-transition: ease all .5s
}

.MainMenu ul.nav {
    width: 100%
}

.MainMenu li {
    text-align: center;
    position: relative;
    width: 14.285%;
    border-right: 1px solid #e7e7e7;
    border-left: 1px solid transparent
}

.MainMenu li:last-child {
    border-left: 1px solid #e7e7e7
}

.MainMenu li:before {
    content: '';
    width: 0;
    height: 0;
    position: absolute;
    right: 0;
    left: 0;
    border-top: 5px solid #333;
    border-right: 5px solid transparent;
    border-left: 5px solid transparent;
    transition: ease all .3s;
    -webkit-transition: ease all .3s;
    -moz-transition: ease all .3s;
    margin: 0 auto;
    opacity: 0;
    visibility: hidden
}

.MainMenu li:hover:before,.divBotHeader .MainMenu li.liactive:before {
    opacity: 1;
    visibility: visible
}

.MainMenu li.liactive span[class^=icon-],.MainMenu li.liactive>a,.MainMenu li:hover a,.MainMenu li:hover span[class^=icon-],.MainMenu.navbar-default .navbar-nav>li>a:hover {
    color: #f47b20
}

.MainMenu li a {
    padding-right: 0;
    padding-left: 0;
    font-size: 13px;
    font-weight: 700
}

.sub-menu .sub-menu li {
    height: 82px
}

.loginhover:hover {
    color: #f7941d
}

.loggedin span[class^=icon-],.notloggedin span[class^=icon-] {
    margin-right: 0;
    margin-left: 10px;
    color: #777;
    position: relative;
    width: 22px;
    height: 22px;
    display: inline-block;
    text-align: center
}

.loggedin span[class^=icon-]:before,.notloggedin span[class^=icon-]:before {
    position: relative;
    z-index: 2;
    color: #444;
    margin: 0
}

.notloggedin i {
    vertical-align: middle;
    display: inline-block;
    line-height: 22px;
    font-size: 12px;
    top: 3px;
    position: relative
}

.divHeader {
    position: relative;
    z-index: 99
}

.modal-open .divHeader {
    z-index: auto
}

.MenuHasChild {
    position: absolute;
    bottom: -3px;
    left: 50%;
    font-size: 10px;
    margin-left: -11px
}

.MainMenu .megaMenu li {
    width: 135px;
    float: none;
    text-align: right;
    display: block;
    position: static;
    border: 1px solid #f0f0f0;
    border-top-width: 0;
    border-left-width: 0!important
}

.MainMenu .megaMenu .listTab:hover,.divBotHeader .navbar-default ul.nav li:hover ul .FirstItemBlock {
    background: #f3f3f3
}

.divBotHeader .navbar-default ul.nav .sub-menu {
    background-color: #fff;
    border: 3px solid #f6f6f7;
    position: absolute;
    left: -2px;
    z-index: 999999
}

.MainMenu .megaMenu li:first-child {
    border-top-width: 1px
}

.MainMenu .megaMenu {
    width: 100%;
    min-width: 468px;
    padding: 15px;
    -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.1);
    box-shadow: 0 2px 3px 0 rgba(0,0,0,.1);
    border: 1px solid #dfdfdf;
    display: none;
    height: 280px
}

.MainMenu .megaMenu li ul li {
    width: 100%;
    text-align: right
}

.MainMenu .megaMenu li ul {
    min-width: 300px;
    display: none;
    right: 150px;
    top: 15px;
    left: 15px;
    width: 286px;
    padding: 0;
    border: 0!important;
    border-left: 1px solid #f0f0f0!important;
    box-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    bottom: 15px;
    background: #fcfcfc!important;
    height: 247px
}

.MainMenu .megaMenu li ul li img {
    margin-left: 15px;
    border: 1px solid #efefef
}

.MainMenu .megaMenu li.current-menu-item {
    background: #f8f8f8
}

.MainMenu .megaMenu li.current-menu-item a {
    color: #333;
    font-weight: 700
}

.MainMenu .megaMenu .listTab a {
    padding: 15px 20px;
    font-weight: 400;
    display: block;
    color: #333;
    position: relative
}

.divBotHeader .navbar-default ul.nav li:hover ul .listTab i.MenuTabArrow {
    position: absolute;
    left: 15px;
    font-size: 8px;
    top: 20px;
    display: block;
    color: #bcbcbc
}

.divBotHeader .navbar-default ul.nav li:hover ul .FirstItemBlock a i.MenuTabArrow,.divBotHeader .navbar-default ul.nav li:hover ul .listTab:hover i.MenuTabArrow {
    left: 5px;
    color: #333
}

.MainMenu .megaMenu li:hover:before {
    content: none!important
}

.MainMenu .megaMenu .listTab ul li a {
    padding: 10px 10px 9px;
    white-space: normal
}

.MainMenu .megaMenu .listTab ul li a img,.MegaSprite {
    float: right;
    width: 60px
}

.MainMenu .MenuMegaWrap {
    float: right;
    width: 202px;
    font-size: 13px;
    font-weight: 400;
    margin: 0;
    display: block
}

.MainMenu .MenuMegaWrap .MenuDesc {
    font-size: 11px;
    line-height: 16px;
    display: block
}

.MainMenu .MenuMegaWrap .MenuTitle {
    margin-bottom: 5px;
    margin-top: 7px;
    color: #003181;
    transition: ease color .2s;
    -webkit-transition: ease color .2s;
    -moz-transition: ease color .2s;
    display: block
}

.MainMenu .megaMenu .listTab ul li a:hover .MenuTitle {
    color: #f47b20
}

.MegaSprite {
    display: block;
    height: 60px;
    margin-left: 15px;
    border: 1px solid #efefef;
    background-image: url(/Content/Images/sprite.png);
    background-repeat: no-repeat
}

.MegaSprite.EliNews {
    background-position: -308px -154px
}

.MegaSprite.IranNews {
    background-position: -372px -154px
}

.MegaSprite.WorldNews {
    background-position: -436px -154px
}

.MegaSprite.TravelMega {
    background-position: -500px -154px
}

.MegaSprite.TravelKnowledge {
    background-position: -564px -154px
}

.MegaSprite.TravelTech {
    background-position: -628px -154px
}

.MegaSprite.TourismIndust {
    background-position: -692px -154px
}

.MegaSprite.AviationIndust {
    background-position: -756px -154px
}

.MegaSprite.HotelIndust {
    background-position: -820px -154px
}

.MegaSprite.Management {
    background-position: -884px -154px
}

.MegaSprite.Marketing {
    background-position: -948px -154px
}

.MegaSprite.SuccessExp {
    background-position: -1012px -154px
}

.MegaSprite.ImageMega {
    background-position: -1076px -154px
}

.MegaSprite.VideoMega {
    background-position: -1140px -154px
}

.MegaSprite.Magazine {
    background-position: -1204px -154px
}

.footerContainer {
    padding-top: 80px;
    z-index: 2
}

.footerContainer,.footerContainer .grid.container {
    position: relative
}

.footerContainer .grid.container:before {
    background: url(/Content/Images/sprite.png) no-repeat 0 -18px;
    width: 270px;
    height: 64px;
    right: 15px;
    top: -74px;
    content: "";
    position: absolute
}

.foot-bottom {
    padding: 10px 0 6px;
    background: #ffbb39;
    color: #27107d
}

.SocialNetwork {
    padding: 7px 0 0;
    margin: 0 0 0 -5px
}

.SocialNetwork a,.SocialNetwork i {
    display: inline-block;
    overflow: hidden
}

.SocialNetwork a {
    float: left;
    width: 35px;
    height: 35px;
    color: #fff
}

.SocialNetwork a>span {
    position: relative;
    background: #ffbb39;
    display: inline-block
}

.SocialNetwork i {
    border: 2px solid #27107d;
    -webkit-transition: background .3s,color .3s,box-shadow .3s;
    -moz-transition: background .3s,color .3s,box-shadow .3s;
    transition: background .3s,color .3s,box-shadow .3s;
    cursor: pointer;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    color: #27107d
}

.SocialNetwork i:before {
    display: block;
    line-height: 27px;
    margin: 0 auto
}

.SocialNetwork i:hover {
    background: #27107d;
    color: #ffbb39
}

.SocialNetwork i:hover:before,.feature_wrapper:hover i {
    -webkit-animation: toBottomFromTop .3s forwards;
    -moz-animation: toBottomFromTop .3s forwards;
    animation: toBottomFromTop .3s forwards
}

.copyTxt {
    padding-top: 5px;
    display: block
}

.footerMenu {
    margin: 25px auto;
    padding: 0
}

.footerMenu .FMitem {
    float: right;
    padding: 0 2px
}

.footerMenu .slgraybold {
    font-weight: 700;
    margin: 0 0 10px;
    color: #27107d;
    display: block;
    padding: 5px 0 15px;
    font-size: 13px;
    position: relative;
    line-height: 1.1
}

.footerMenu .slgraybold:after {
    content: "";
    width: 100%;
    position: absolute;
    bottom: 3px;
    right: 0;
    border-top: 1px solid #eee
}

.footerMenu ul li {
    margin-bottom: 10px;
    line-height: 20px;
    width: 50%;
    float: right;
    position: relative;
    padding-right: 10px;
    text-indent: 1px
}

.footerMenu ul li:before {
    content: '';
    width: 5px;
    height: 5px;
    background: #27107d;
    position: absolute;
    right: 0;
    top: 6px;
    border-radius: 50%
}

.footerMenu ul li a {
    text-decoration: none;
    font-size: .95em;
    padding-right: 0;
    transition: .2s all linear;
    -webkit-transition: .2s all linear;
    -o-transition: .2s all linear;
    display: block;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden
}

.footerMenu li a:hover {
    padding-right: 7px
}

.newsletterDsc span {
    color: #27107d;
    margin: 6px 0 4px
}

.box-groups {
    border-bottom: 1px solid #eee;
    border-top: 1px solid #eee;
    padding-top: 15px
}

.footer-about {
    line-height: 2em
}

.footer-namad {
    padding-top: 5px
}

.group-brands>img {
    margin: -20px auto 5px
}

.mainCopyR {
    font-family: arial;
    font-size: 11.5px;
    color: gray;
    padding: 5px;
    border-top: 1px solid #eee;
    margin-top: 15px
}

.footerContainer .container.box-groups .box p,.footerContainer .container.box-groups .box p a {
    color: #9f9f9f;
    font-size: 12px
}

.footerContainer .sprite-logo {
    width: 81px;
    height: 53px;
    background-position: -1183px -320px;
    float: right;
    margin: 10px 0 0 10px
}

.sprite_bg {
    background-image: url(/Content/Images/sprite.png);
    display: inline-block
}

.bazaar-icon,.google-play-icon {
    background-position: -974px -323px;
    width: 149px;
    height: 45px
}

.google-play-icon {
    background-position: -974px -268px
}

.app-download {
    margin: 20px auto 30px
}

.app-download a.application-icon {
    padding-right: 3px;
    display: inline-block
}

.app-download a.application-icon:hover .sprite_bg {
    -webkit-transform: translate3d(0,-4px,0);
    transition: .3s;
    -webkit-transition: .3s;
    -moz-transition: .3s;
    transform: translate3d(0,-4px,0)
}

.app-desc {
    display: block;
    margin-bottom: 10px;
    color: #4d4d4d
}

.qualityIcns {
    margin: 30px -20px 0!important
}

.qualityIcns>div {
    padding: 20px 20px 0;
    text-align: center
}

.thumb-title {
    color: #3a465f;
    font-size: 17px;
    padding: 0;
    margin: 5px 0;
    font-weight: 400;
    font-family: 17px;
    line-height: 2em
}

.thumb-desc {
    font-size: 10pt;
    color: #818181;
    line-height: 2em
}

.flaticon-badge2:before,i.glyphicon.glyphicon-globe:before,i.pediaFav.pediaFav-plane:before {
    font-family: "EliFont";
    font-style: normal;
    font-weight: 400;
    speak: none;
    display: inline-block;
    text-decoration: inherit;
    text-align: center;
    font-variant: normal;
    text-transform: none;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

i.pediaFav.pediaFav-plane:before {
    content: '\e817'
}

i.glyphicon.glyphicon-globe:before {
    content: '\e807'
}

.flaticon-badge2:before {
    content: '\e81e'
}

[class^=F-icon-] {
    background: url(/Content/Images/sprite.png) no-repeat;
    display: inline-block
}

.feature_icon {
    overflow: hidden;
    height: 110px;
    width: 110px;
    margin: 15px auto;
    position: relative;
    text-align: center;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    flex-direction: column;
    display: flex;
    align-items: center;
    justify-content: center
}

.Values-wrap {
    position: relative;
    width: 96px;
    height: 96px;
    margin: auto
}

.F-icon-support-1 {
    background-position: -1105px -82px;
    width: 48px;
    height: 32px
}

.F-icon-support-2 {
    background-position: -1166px -63px;
    width: 70px;
    height: 70px;
    position: absolute;
    transition-delay: .5s;
    top: 24px;
    left: 14px;
    margin-top: -3.5px;
    margin-left: -.6px;
    -webkit-transform: rotateZ(180deg);
    transform: rotateZ(180deg);
    -webkit-animation: rotateThis 5s ease forwards infinite;
    animation: rotateThis 5s ease forwards infinite
}

.F-icon-Value {
    background-position: -749px -271px;
    width: 94px;
    height: 91px
}

.F-icon-Easy-Search {
    background-position: -866px -272px;
    width: 85px;
    height: 89px
}

.banner_ribbon>.container {
    position: relative;
    z-index: 1
}

.banner_ribbon,.slangContainer {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center
}

.banner_ribbon {
    height: 70px;
    margin-bottom: 20px;
    color: #333;
    background: #fefefe;
    overflow: hidden;
    border-bottom: solid 1px #bfbfbf;
    justify-content: center
}

.banner_ribbon+.flightSug {
    margin-top: -20px
}

.slangContainer {
    line-height: 24px;
    position: relative
}

.signin-context {
    display: none
}

.newsletter {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    padding-right: 70px
}

.mSlang h1,.mSlang>div,.mSlang>p {
    font-size: 14px
}

.giftIcon,.mSlang h1 {
    display: inline-block
}

.slangContainer .newBtn {
    position: absolute;
    left: -34px;
    top: 31px;
    line-height: 11px;
    color: #d0983c;
    cursor: pointer;
    transition: all .3s linear;
    -webkit-transiton: all .3s linear;
    -ms-transiton: all .3s linear;
    -o-transition: all .3s linear
}

.slangContainer .newBtn.active {
    transform: rotate(180deg);
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg)
}

.newsletter>input[type=text] {
    background: #f7f7f7 0 0;
    border: 1px solid #d6dee7;
    width: 270px;
    height: 40px;
    border-radius: 3px;
    background-color: #fefefe;
    border: solid 1px rgba(85,107,127,.2);
    color: #333;
    line-height: 28px;
    outline: 0;
    direction: ltr;
    text-align: left;
    padding: 0 10px;
    font-size: 16px;
    font-family: Montserrat,Arial;
    font-weight: 700;
    letter-spacing: .4px
}

.newsletter>input[type=text]::-webkit-input-placeholder {
    text-align: right;
    font-weight: 400;
    font-family: yekan;
    font-size: 15px
}

.newsletter>input[type=text]::-moz-placeholder {
    text-align: right;
    font-weight: 400;
    font-family: yekan;
    font-size: 15px
}

.newsletter>input[type=text]:-ms-input-placeholder {
    text-align: right;
    font-weight: 400;
    font-family: yekan;
    font-size: 15px
}

.newsletter>input[type=text]:-moz-placeholder {
    text-align: right;
    font-weight: 400;
    font-family: yekan;
    font-size: 15px
}

.newsletter>input[type=text].subscribeMobile {
    float: right;
    border-right: 0;
    border-radius: 0
}

.newsletter>input[type=text].subscribeMail {
    float: right
}

.NewsInput {
    position: relative;
    padding-left: 130px
}

.newsletter>input[type=button] {
    width: 145px;
    height: 40px;
    border-radius: 3px;
    border: solid 1px #007aff;
    margin-right: 16px;
    background: 0 0;
    color: #007aff
}

.newsletter>input[type=button]:hover {
    background: #007aff;
    color: #fff
}

.newsletter>input[type=button].succes:hover,.newsletter>input[type=button].success {
    background-color: #0ebb79;
    border-color: #0ebb79;
    color: transparent
}

.newsletter .subscribeMsg {
    left: 7px;
    position: absolute;
    top: 10px;
    color: #fff
}

.newsletterItem>span.subscribeMsg,.subscribeMsg {
    display: none
}

.subscribeMsg i {
    background-color: transparent!important;
    color: #fff;
    vertical-align: text-top;
    margin-left: 4px
}

.EliPhone {
    float: left;
    direction: ltr;
    font-size: 13px;
    line-height: 43px
}

.EliPhone a {
    cursor: pointer;
    position: relative;
    top: 1px;
    font-family: "Helvetica Neue",Helvetica,Arial;
    font-weight: 700;
    direction: ltr;
    display: inline-block
}

.EliPhone i {
    text-align: center;
    color: #fff;
    width: 25px;
    height: 25px;
    display: inline-block;
    background: #999;
    border-radius: 50%;
    vertical-align: middle
}

.HomeFestival h2 {
    display: block;
    text-align: center;
    color: #fff;
    font-size: 15px;
    background: #e2264d;
    height: 32px;
    line-height: 32px;
    position: relative;
    width: 168px;
    margin: 0 auto
}

.EliPhone .supportTxt,.EliPhone a {
    color: #fff;
    font-size: 14px;
    padding: 0 5px 0 10px
}

.EliPhone svg {
    width: 12px;
    height: 12px;
    position: relative;
    top: -6px;
    fill: #fff
}

.dividerPhone {
    position: absolute;
    height: 22px;
    color: #6d6d6d;
    background-color: #6d6d6d;
    left: 120px;
    top: 11px;
    border: 0;
    border-left: 1px solid #6d6d6d
}

.support_context {
    font-size: 13px;
    font-weight: 400
}

.box-body.MSearchContent {
    max-width: 870px
}

.divBodyHome {
    position: relative;
    padding-bottom: 30px;
    padding-top: 30px;
    background-size: cover;
    background-repeat: no-repeat
}

.divBodyHomePreLoad {
    min-height: 180px
}

.HomeBg {
    background-color: #fff;
    background-size: cover;
    background-position: center center
}

.HomeBg-1 {
    background-image: url(/Content/Images/Banner/Home/HomeBGs-snow-7.jpg)
}

.HomeBg-2 {
    background-image: url(/Content/Images/Banner/Home/HomeBg-02.jpg)
}

.HomeBg-3 {
    background-image: url(/Content/Images/Banner/Home/HomeBGs-snow-5.jpg)
}

.HomeBg-4 {
    background-image: url(/Content/Images/Banner/Home/HomeBGs-04.jpg)
}

.HomeBg-5 {
    background-image: url(/Content/Images/Banner/Home/HomeBg-05.jpg)
}

.HomeBg-6 {
    background-image: url(/Content/Images/Banner/Home/HomeBg-06.jpg)
}

.HomeFestival {
    position: absolute;
    left: 17px;
    top: 20px
}

.HomeFestival h2:after,.HomeFestival h2:before {
    content: '';
    display: block;
    position: absolute;
    border-top: 16px solid #e2264d;
    border-bottom: 16px solid #e2264d;
    top: 0
}

.HomeFestival h2:after {
    left: -16px;
    border-left: 16px solid transparent
}

.HomeFestival h2:before {
    right: -16px;
    border-right: 16px solid transparent
}

.WebFestivalLogo {
    width: 197px;
    margin-top: 7px
}

.divBoxHomeSearch {
    min-height: 328px;
    background-color: rgba(0,0,0,.72);
    position: relative;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    padding: 15px;
    box-shadow: 0 0 15px 0 rgba(0,0,0,.5);
    -webkit-box-shadow: 0 0 15px 0 rgba(0,0,0,.5);
    -moz-box-shadow: 0 0 15px 0 rgba(0,0,0,.5)
}

.MSearchContentPart .datePickerInput input {
    direction: ltr!important
}

.MSearchContentPart .datePickerInput .datePickerhsh input {
    direction: rtl!important
}

.MFormSearchAgainCheck,.MSearchAgeSample,.MSearchExtraCar,.MSearchMenuItem input[type=radio],.MSearchMenuItem>input,.MSearchRoomSample,.SearchRadio input[type=radio] {
    display: none
}

.MSearchCommand {
    height: 50px;
    margin: 2px auto;
    width: 100%
}

.box-footer {
    margin-top: 20px;
    position: relative;
    bottom: 8px
}

.MSearchGuarantee {
    color: #fff;
    width: 125px;
    position: absolute;
    left: 18px;
    top: 3px
}

.MSearchGuarantee p {
    display: block;
    float: left;
    line-height: 24px
}

.MSearchGuarantee span[class^=icon-] {
    float: right;
    margin-top: 3px;
    font-size: 30px
}

.MSearchGuarantee span {
    font-size: 13px;
    display: block;
    text-align: right
}

.divBoxTabRight {
    color: #fff;
    margin-bottom: 15px
}

.pediaEnamad {
    border-radius: 8px;
    height: 150px;
    padding: 10px 0;
    position: absolute;
    right: -13%;
    top: 0;
    width: 130px;
    border: 1px solid #ababab;
    background: rgba(215,214,220,.5)
}

.samanEnamad {
    top: 160px;
    cursor: pointer
}

.samanEnamad img {
    width: 125px;
    height: 136px;
    border: 0
}

.MSearchValidation {
    display: none;
    margin: 0 23px 10px;
    padding: 0
}

.MSearchValidation ul li {
    font-size: 17px;
    list-style: initial;
    margin: 7px 3px;
    color: red;
    display: none
}

.MSearchAddCar,.MSearchAddFlight,.MSearchAddHotel,.MSearchAdvanced>label,.addFlightBtn>label {
    background-position: left center;
    background-repeat: no-repeat;
    color: #57b3ff!important;
    display: inline-block;
    font-weight: 700;
    cursor: pointer;
    margin-left: 10px
}

.MSearch label {
    color: #c7c7c7;
    font-size: 13px;
    text-align: justify;
    white-space: nowrap;
    margin-bottom: 9px;
    font-weight: 700
}

.SearchRadio label,.divBoxTabRight ul li .bTitleTab {
    margin-bottom: 0;
    cursor: pointer;
    color: #fff;
    font-weight: 400
}

.FlightTypeSelect,.divBoxTabRight ul li .bTitleTab {
    background: rgba(107,107,107,.54);
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px
}

.divBoxTabRight ul li .bTitleTab {
    display: block;
    float: right;
    transition: ease all .3s;
    -webkit-transition: ease all .3s;
    -moz-transition: ease all .3s;
    text-align: center;
    margin-left: 6px;
    padding: 5px 10px
}

.divBoxTabRight ul li.liTabActiveS .bTitleTab,.divBoxTabRight ul li:hover .bTitleTab {
    background: #0065b8
}

.divBoxTabRight ul li .bTitleTab i {
    font-size: 22px;
    display: inline-block;
    text-align: center;
    position: absolute;
    top: 8px;
    right: 8px
}

.MSearch ul.ulTabMain li label {
    line-height: 30px;
    font-size: 15px;
    position: relative;
    padding-right: 35px!important
}

.MSearch ul.ulTabMain li label span.small {
    font-size: 10px;
    background: #f47b20;
    padding: 0 6px;
    border-radius: 10px;
    position: absolute;
    display: inline;
    line-height: 17px;
    top: -5px;
    left: -18px
}

.FlightTypeSelect {
    width: auto;
    margin: 5px auto 15px
}

.FlightTypeSelect,.SearchRadio,.ratingMain div#ratingDiv {
    display: inline-block
}

.SearchRadio label {
    padding: 7px 10px
}

.SearchRadio input[type=radio]:checked+label {
    background: #0065b8;
    outline: #0087f5 solid 1px
}

.divBoxListItem {
    display: inline-block;
    margin: 5px auto 15px;
    background: rgba(107,107,107,.54);
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px
}

.disabled,.disabled * {
    color: #999!important
}

.MSearchContentPartTitle.MSearchAdvanced.col-md-2 {
    padding-left: 0;
    max-width: 120px
}

.MFormSearchAgainCheck,.MSearchAdvancedContent,.MSearchExtraFlight,.MSearchExtraHotel,.moreFlightBg {
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    margin-bottom: 10px
}

.MFormSearchAgainCheck,.MSearchExtraFlight,.MSearchExtraHotel,.moreFlightBg {
    background: rgba(0,0,0,.54);
    padding: 15px 8px;
    color: #fff
}

.moreFlightBg {
    padding: 10px 8px;
    color: #5d5d5d
}

.MSearch hr {
    margin-top: 10px;
    border-top: 1px solid #939393
}

.MSearch label.MSearchRoomLabel {
    padding: 3px 0;
    color: #fff;
    font-size: 16px
}

.MSearchValidation ul {
    padding: 0 15px
}

.MSearch .btn-yellow {
    float: right;
    height: 49px;
    line-height: normal;
    width: 94px
}

.SearchButtonPosition {
    position: absolute;
    right: 15px;
    left: 15px;
    bottom: 0
}

.TabHomeMain .tab-content {
    min-height: 244px;
    padding-bottom: 60px
}

.TabHomeMain .form-control {
    -webkit-box-shadow: 0 1px 2px 2px transparent;
    -moz-box-shadow: 0 1px 2px 2px transparent;
    box-shadow: 0 1px 2px 2px transparent;
    font-weight: 400;
    font-size: 16px;
    color: #000;
    padding-top: 0;
    padding-bottom: 0;
    height: 34px;
    line-height: 35px
}

.TabHomeMain .form-control.acsTextBox {
    padding-right: 25px
}

.TabHomeMain .form-control:focus {
    border-color: #f7941d;
    outline: 0;
    -webkit-box-shadow: 0 0 2px 2px #f7941d;
    -moz-box-shadow: 0 0 2px 2px #f7941d;
    box-shadow: 0 0 2px 2px #f7941d
}

.TabHomeMain .nightsNumber:not(:empty) {
    margin-top: 27px;
    text-align: center;
    color: #fff;
    border-radius: 2px;
    padding: 3px 8px;
    display: inline-block;
    height: 34px;
    line-height: 27px;
    font-size: 16px
}

#packageNightsNumber:empty,.nightsNumber:empty {
    display: none
}

.directionIconWrap,.offerBox figure {
    position: relative
}

.directionIcon {
    cursor: pointer;
    position: absolute;
    z-index: 2;
    color: #b0c7c7;
    display: inline-block;
    right: 0;
    left: 0;
    width: 24px;
    margin: 0 auto;
    bottom: 23px;
    font-size: 18px;
    transform: rotate(0);
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    transition: ease .3s all;
    -webkit-transition: ease .3s all;
    -moz-transition: ease .3s all;
    line-height: 15px
}

.directionIcon:hover {
    transform: rotate(180deg);
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg)
}

.TabHomeMain .form-control[readonly] {
    background: #fff
}

#packageNightsNumber,.nightsNumber {
    width: 80px;
    margin-top: 27px;
    text-align: center;
    color: #fff;
    border-radius: 2px;
    padding: 3px 8px;
    border: 1px solid #0065b8;
    background: #0065b8;
    height: 34px;
    line-height: 27px;
    font-size: 16px
}

.translateFareRule,.translatePolicy {
    float: right
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

.owl-carousel {
    display: none;
    width: 100%;
    -webkit-tap-highlight-color: transparent;
    position: relative;
    z-index: 1
}

.owl-carousel .owl-stage {
    position: relative;
    -ms-touch-action: pan-Y
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
    -webkit-transform: translate3d(0,0,0)
}

.owl-carousel .owl-controls .owl-dot,.owl-carousel .owl-controls .owl-nav .owl-next,.owl-carousel .owl-controls .owl-nav .owl-prev {
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
    -webkit-backface-visibility: hidden;
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
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d
}

.owl-carousel.owl-rtl {
    direction: rtl
}

.owl-carousel.owl-rtl .owl-item {
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

.owl-theme .owl-controls {
    margin-top: 10px;
    text-align: center;
    -webkit-tap-highlight-color: transparent
}

.owl-theme .owl-dots .owl-dot {
    display: inline-block;
    zoom:1}

.owl-theme .owl-dots .owl-dot span {
    width: 10px;
    height: 10px;
    margin: 5px 7px;
    background: #d6d6d6;
    display: block;
    -webkit-backface-visibility: visible;
    -webkit-transition: opacity 200ms ease;
    -moz-transition: opacity 200ms ease;
    -ms-transition: opacity 200ms ease;
    -o-transition: opacity 200ms ease;
    transition: opacity 200ms ease;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px
}

.owl-theme .owl-dots .owl-dot.active span,.owl-theme .owl-dots .owl-dot:hover span {
    background: #aaa
}

.pdrl-15 {
    padding-right: 15px;
    padding-left: 15px
}

.divHeader.HeaderWithCookie {
    margin-top: 30px
}

#cookie-clear-bar {
    direction: ltr;
    color: #ddd;
    font: 13px/28px sans-serif;
    height: 30px;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    min-width: 600px;
    z-index: 99999;
    padding: 2px 20px 0;
    background-color: #464646;
    background-image: -ms-linear-gradient(bottom,#373737,#464646 5px);
    background-image: -moz-linear-gradient(bottom,#373737,#464646 5px);
    background-image: -o-linear-gradient(bottom,#373737,#464646 5px);
    background-image: -webkit-gradient(linear,left bottom,left top,from(#373737),to(#464646));
    background-image: -webkit-linear-gradient(bottom,#373737,#464646 5px);
    background-image: linear-gradient(bottom,#373737,#464646 5px);
    text-align: center;
    display: none
}

#cookie-clear-bar a,.flip-clock-wrapper a:hover {
    color: #fff
}

button#CookieClear {
    margin: 0 20px;
    line-height: 20px;
    background: #45ae52;
    border: 0;
    color: #fff;
    padding: 0 12px;
    border-radius: 3px;
    cursor: pointer;
    font-size: 13px;
    font-weight: 700;
    font-family: sans-serif;
    text-shadow: #555 1px 1px
}

button#CookieClear:hover {
    background: #5ec544
}

.TopDeals {
    margin-bottom: 50px
}

.TopDeals .owl-dots {
    display: none!important
}

.TopDeals .h3 {
    font-size: 18px;
    color: #333;
    margin: 0
}

.TopDealsTitle p {
    line-height: 2em;
    color: gray;
    margin-bottom: 16px
}

.colorText {
    color: #000!important;
    font-size: 18px;
    position: relative
}

.rowoffer {
    margin-right: -8px;
    margin-left: -8px
}

.destination_items.row>div,.rowoffer>div {
    padding-right: 8px;
    padding-left: 8px
}

.offerBox>.offerLink {
    box-shadow: 0 0 3px rgba(0,0,0,.15);
    margin-bottom: 5px;
    color: gray;
    font-size: 12px;
    display: block
}

.offerBox .text-special {
    padding: 0 10px 20px;
    line-height: 2em
}

.offerBox .text-special>strong {
    font-weight: 500;
    font-size: 16px;
    color: #3965e0;
    margin-bottom: 10px
}

.offerBox img {
    height: 273px;
    width: 100%
}

.remainDay {
    text-align: center;
    font-size: 14px;
    margin-top: 0;
    color: #fe7815;
    background: #f7f7f7;
    margin-right: -10px;
    margin-left: -10px;
    display: none
}

.offerBox figure .FigureTxt {
    position: absolute;
    z-index: 1;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    color: #fff;
    opacity: 1;
    visibility: visible;
    transition: ease all .3s;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column
}

.offerBox figure .FigureTxt:before {
    content: "";
    z-index: -1;
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    background: #2f2f2f;
    opacity: .3;
    transition: .3s;
    -webkit-transition: .3s
}

.offerBox .hoverOrange:hover figure .FigureTxt:before {
    opacity: .05
}

.offerBox figure .FigureTxt .sp_title {
    text-shadow: 0 1px 1px rgba(0,0,0,.5);
    font-size: 19px;
    font-weight: 400;
    margin: 0
}

.offerBox figure .FigureTxt p {
    text-shadow: 0 1px 1px rgba(0,0,0,.5);
    font-size: 14px;
    right: 15px;
    transition: ease all .3s;
    transform: translateY(10px)
}

.specialLabel {
    margin-top: 8px;
    margin-bottom: 8px;
    background-color: #0a0;
    color: #fff;
    border-radius: 9999px;
    padding: 2px 8px
}

.promote_container {
    margin-top: 64px;
    margin-bottom: 64px;
    padding-left: 4px;
    padding-right: 4px
}

.app_promote {
    background-color: #f8f8f8;
    border-bottom: solid 1px #bfbfbf;
    border-top: solid 1px #bfbfbf;
    margin: 0 auto
}

.sub_pro_title {
    font-size: 13px;
    margin-bottom: 16px;
    text-transform: uppercase;
    font-weight: 700
}

.main_pro_title {
    font-size: 21px;
    margin-bottom: 16px;
    margin-top: 0
}

.pro_description {
    font-size: 14px;
    line-height: 2em;
    text-align: right;
    margin-bottom: 8px
}

.promote_image {
    background-color: transparent;
    background-size: 246px auto;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    background-image: url(/Content/Images/home/eligasht-mobile-app.png);
    height: 386px;
    background-position: center;
    background-repeat: no-repeat
}

.destinationContainer {
    padding-top: 64px;
    margin-bottom: 60px
}

.dest_main_title {
    font-size: 21px;
    margin-bottom: 18px
}

.destination_items.row {
    margin-right: -8px;
    margin-left: -8px
}

.destination_items.row>div {
    margin-bottom: 16px
}

.destination_items.row>div:first-child .dest_item .dest_content {
    padding-right: 15px;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: flex-start;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center
}

.destination_items.row>div:first-child .dest_item .dest_content .dest_link_container {
    font-size: 11px
}

.dest_item {
    position: relative;
    height: 275px;
    width: 100%
}

.dest_pic {
    height: 275px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%)
}

.dest_item_title {
    font-size: 24px;
    margin-bottom: 10px
}

.dest_content {
    z-index: 1;
    position: relative;
    height: 275px;
    color: #fff;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-shadow: 0 1px 1px rgba(0,0,0,.5)
}

.dest_content:active,.dest_content:focus,.dest_content:hover,.dest_content:visited {
    color: #fff
}

.dest_content:before {
    content: "";
    z-index: -1;
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    background: #000;
    opacity: .3;
    transition: .3s;
    -webkit-transition: .3s
}

.dest_item:hover .dest_content:before {
    opacity: .05
}

.offerBox .flip-clock-wrapper {
    width: 150px;
    margin-right: auto;
    margin-left: auto
}

.offerBox .CounterContainer {
    margin-top: 0;
    border-top: 1px solid #eee
}

.TopDealsTitle {
    margin-bottom: 18px;
    padding-top: 44px
}

.HometourBg {
    background: #f9f9f9
}

.flightSug {
    background-color: #f8f8f8;
    border-bottom: solid 1px #bfbfbf;
    border-top: solid 1px #bfbfbf
}

.flightSug .flightSug_content {
    padding-top: 60px;
    margin-bottom: 64px
}

.flightSug .tourTitle h2 {
    color: #000;
    font-size: 18px
}

.flightSug_content p {
    line-height: 2em;
    margin-bottom: 21px;
    color: gray
}

.air-dsc,.flightSug:after {
    position: absolute;
    width: 100%;
    right: 0
}

.flightSug_pic {
    margin-top: 15px
}

.iconContainer>i {
    font-size: 28px;
    display: inline-block;
    margin-bottom: 20px;
    border: 1px dashed #ccc;
    border-radius: 50%;
    padding: 10px;
    color: #2563d1
}

.iconContainer>i:hover {
    background: orange!important;
    box-shadow: inset 0 0 0 3px #fff
}

.iconContainer>i:hover:before {
    -webkit-animation: toBottomFromTop .3s forwards;
    -moz-animation: toBottomFromTop .3s forwards;
    animation: toBottomFromTop .3s forwards;
    color: #fff
}

.Airlinles {
    max-width: 100%;
    overflow: hidden
}

.Airlinles .airline-item {
    background: url(/Content/Images/AirLine/AirLineLogos.png) no-repeat -1075px -32px;
    width: 75px;
    height: 47px;
    display: inline-block;
    color: transparent;
    transition: transform .3s;
    -webkit-transition: transform .3s
}

.Airlinles .airline-item.mahan-air {
    background-position: -1075px -32px
}

.Airlinles .airline-item.thai-air {
    background-position: -1172px -21px;
    width: 65px;
    height: 65px
}

.Airlinles .airline-item.iran-air {
    background-position: -963px -29px;
    width: 63px;
    height: 53px
}

.Airlinles .airline-item.meraj-air {
    background-position: -856px -33px;
    width: 44px;
    height: 44px
}

.Airlinles .airline-item.taban-air {
    background-position: -722px -27px;
    width: 78px;
    height: 57px
}

.Airlinles .airline-item.turkish-air {
    background-position: -621px -34px;
    width: 46px;
    height: 42px
}

.Airlinles .airline-item.flydubai-air {
    background-position: -473px -43px;
    width: 107px;
    height: 24px
}

.Airlinles .airline-item.qatar-air {
    background-position: -381px -30px;
    width: 58px;
    height: 51px
}

.Airlinles .airline-item.klm-air {
    background-position: -248px -29px;
    width: 90px;
    height: 53px
}

.Airlinles .airline-item.etihad-air {
    background-position: -130px -33px;
    width: 92px;
    height: 45px
}

.Airlinles .airline-item.lufthansa-air {
    background-position: -33px -30px;
    width: 51px;
    height: 50px
}

.Airlinles .item {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 140px;
    padding-bottom: 20px
}

.Airlinles .item:hover .airline-item {
    transform: scale(1.1);
    -webkit-transform: scale(1.1)
}

.air-dsc {
    bottom: 20px;
    font-size: 11px;
    color: #535353;
    white-space: nowrap;
    text-align: center
}

.AirLineImg {
    padding-top: 5px;
    padding-bottom: 5px
}

.feature_wrapper p {
    line-height: 21px;
    margin-bottom: 0
}

.feature_wrapper h3 {
    color: #282828;
    text-transform: uppercase;
    font-size: 16px;
    margin-top: 5px;
    margin-bottom: 15px
}

#back-to-top {
    position: fixed;
    bottom: 5px;
    left: 5px;
    opacity: 1;
    cursor: pointer;
    z-index: 10;
    background: rgba(247,148,29,.8);
    color: #fff;
    width: 50px;
    height: 50px;
    text-align: center;
    font-size: 16px;
    display: none;
    line-height: 50px
}

.status-search {
    position: absolute;
    top: 15px;
    width: 126px;
    left: 20px
}

[class*=" icon-"]:before,[class^=icon-]:before {
    font-family: "EliFont";
    font-style: normal;
    font-weight: 400;
    speak: none;
    display: inline-block;
    text-decoration: inherit;
    margin-right: .2em;
    text-align: center;
    font-variant: normal;
    text-transform: none;
    line-height: 1em;
    margin-left: .2em;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

.icon-0001:before {
    content: '\e800'
}

.icon-0002:before {
    content: '\e801'
}

.icon-0003:before {
    content: '\e802'
}

.icon-0004:before {
    content: '\e803'
}

.icon-0005:before {
    content: '\e804'
}

.icon-0006:before {
    content: '\e805'
}

.icon-0007:before {
    content: '\e806'
}

.icon-0008:before {
    content: '\e807'
}

.icon-0009:before {
    content: '\e808'
}

.icon-0010:before {
    content: '\e809'
}

.icon-0011:before {
    content: '\e80a'
}

.icon-0012:before {
    content: '\e80b'
}

.icon-0013:before {
    content: '\e80c'
}

.icon-0014:before {
    content: '\e80d'
}

.icon-0015:before {
    content: '\e80e'
}

.icon-0016:before {
    content: '\e80f'
}

.icon-0017:before {
    content: '\e810'
}

.icon-0018:before {
    content: '\e811'
}

.icon-0019:before {
    content: '\e812'
}

.icon-0020:before {
    content: '\e813'
}

.icon-0021:before {
    content: '\e814'
}

.icon-0022:before {
    content: '\e815'
}

.icon-0023:before {
    content: '\e816'
}

.icon-0024:before {
    content: '\e817'
}

.icon-0025:before {
    content: '\e818'
}

.icon-0026:before {
    content: '\e819'
}

.icon-0027:before {
    content: '\e81a'
}

.icon-0028:before {
    content: '\e81b'
}

.icon-0029:before {
    content: '\e81c'
}

.icon-0030:before {
    content: '\e81d'
}

.icon-0031:before {
    content: '\e81e'
}

.icon-0032:before {
    content: '\e81f'
}

.icon-0033:before {
    content: '\e820'
}

.icon-0034:before {
    content: '\e821'
}

.icon-0035:before {
    content: '\e822'
}

.icon-0036:before {
    content: '\e823'
}

.icon-0037:before {
    content: '\e824'
}

.icon-0038:before {
    content: '\e825'
}

.icon-0039:before {
    content: '\e826'
}

.icon-0040:before {
    content: '\e827'
}

.icon-0041:before {
    content: '\e828'
}

.icon-0042:before {
    content: '\e829'
}

.icon-0043:before {
    content: '\e82a'
}

.icon-0044:before {
    content: '\e82b'
}

.icon-0045:before {
    content: '\e82c'
}

.icon-0046:before {
    content: '\e82d'
}

.icon-0047:before {
    content: '\e82e'
}

.icon-0048:before {
    content: '\e82f'
}

.icon-0049:before {
    content: '\e830'
}

.icon-0050:before {
    content: '\e831'
}

.icon-0051:before {
    content: '\e832'
}

.icon-0052:before {
    content: '\e833'
}

.icon-0053:before {
    content: '\e834'
}

.icon-0054:before {
    content: '\e835'
}

.icon-0055:before {
    content: '\e836'
}

.icon-0056:before {
    content: '\e837'
}

.icon-0057:before {
    content: '\e838'
}

.icon-0058:before {
    content: '\e839'
}

.icon-0065:before {
    content: '\e83a'
}

.icon-0066:before {
    content: '\e83b'
}

.icon-0067:before {
    content: '\e83c'
}

.icon-0068:before {
    content: '\e83d'
}

.icon-0069:before {
    content: '\e83e'
}

.icon-0070:before {
    content: '\e83f'
}

.icon-0071:before {
    content: '\e840'
}

.icon-0072:before {
    content: '\e841'
}

.icon-0073:before {
    content: '\e842'
}

.icon-0074:before {
    content: '\e843'
}

.icon-0075:before {
    content: '\e844'
}

.icon-0076:before {
    content: '\e845'
}

.icon-0077:before {
    content: '\e846'
}

.icon-0078:before {
    content: '\e847'
}

.icon-0079:before {
    content: '\e848'
}

.icon-0080:before {
    content: '\e849'
}

.icon-0112:before {
    content: '\e84a'
}

.icon-0113:before {
    content: '\e84b'
}

.icon-0114:before {
    content: '\e84c'
}

.icon-0115:before {
    content: '\e84d'
}

.icon-0116:before {
    content: '\e84e'
}

.icon-0059:before {
    content: '\e84f'
}

.icon-0060:before {
    content: '\e850'
}

.icon-0061:before {
    content: '\e851'
}

.icon-0062:before {
    content: '\e852'
}

.icon-0063:before {
    content: '\e853'
}

.icon-0064:before {
    content: '\e854'
}

.icon-0081:before {
    content: '\e855'
}

.icon-0082:before {
    content: '\e856'
}

.icon-0083:before {
    content: '\e857'
}

.icon-0084:before {
    content: '\e858'
}

.icon-0085:before {
    content: '\e859'
}

.icon-0086:before {
    content: '\e85a'
}

.icon-0087:before {
    content: '\e85b'
}

.icon-0088:before {
    content: '\e85c'
}

.icon-0089:before {
    content: '\e85d'
}

.icon-0090:before {
    content: '\e85e'
}

.icon-0091:before {
    content: '\e85f'
}

.icon-0092:before {
    content: '\e860'
}

.icon-0093:before {
    content: '\e861'
}

.icon-0094:before {
    content: '\e862'
}

.icon-0095:before {
    content: '\e863'
}

.icon-0096:before {
    content: '\e864'
}

.icon-0097:before {
    content: '\e865'
}

.icon-0098:before {
    content: '\e866'
}

.icon-0099:before {
    content: '\e867'
}

.icon-0100:before {
    content: '\e868'
}

.icon-0101:before {
    content: '\e869'
}

.icon-0102:before {
    content: '\e86a'
}

.icon-0103:before {
    content: '\e86b'
}

.icon-0104:before {
    content: '\e86c'
}

.icon-0105:before {
    content: '\e86d'
}

.icon-0106:before {
    content: '\e86e'
}

.icon-0107:before {
    content: '\e86f'
}

.icon-0108:before {
    content: '\e870'
}

.icon-0109:before {
    content: '\e871'
}

.icon-0110:before {
    content: '\e872'
}

.icon-0111:before {
    content: '\e873'
}

.icon-0117:before {
    content: '\e874'
}

.icon-0118:before {
    content: '\e875'
}

.icon-0119:before {
    content: '\e876'
}

.icon-0120:before {
    content: '\e877'
}

.icon-0121:before {
    content: '\e878'
}

.icon-0122:before {
    content: '\e879'
}

.icon-0123:before {
    content: '\e87a'
}

.icon-0124:before {
    content: '\e87b'
}

.icon-0125:before {
    content: '\e87c'
}

.icon-0126:before {
    content: '\e87d'
}

.icon-0127:before {
    content: '\e87e'
}

.icon-0128:before {
    content: '\e87f'
}

.icon-0129:before {
    content: '\e880'
}

.icon-0130:before {
    content: '\e881'
}

.icon-0131:before {
    content: '\e882'
}

.icon-0132:before {
    content: '\f102'
}

.icon-0133:before {
    content: '\f101'
}

.icon-0134:before {
    content: '\f100'
}

.icon-0135:before {
    content: '\e883'
}

.icon-0136:before {
    content: '\e884'
}

.icon-0137:before {
    content: '\e888'
}

.icon-0138:before {
    content: '\e889'
}

@media (max-width: 1250px) {
    .pediaEnamad {
        background:rgba(215,214,220,.5);
        border: 0;
        right: -117px;
        width: 111px
    }

    .pediaEnamad img {
        margin-right: -9px
    }
}

@media (max-width: 1199px) {
    .divBoxTabRight ul li .bTitleTab i {
        font-size:14px
    }

    .NavbarLogo {
        padding: 0!important
    }

    .NavbarResponsive {
        padding-right: 0!important
    }

    .divBotHeader .navbar-default ul.nav li a {
        font-size: 12px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis
    }

    .MSearch label,.mSlang h1,.mSlang>div,.mSlang>p .newsletterFBox input[type=text] {
        font-size: 12px
    }

    .navbar-header-logo img {
        position: relative;
        top: 9px
    }

    .HomeFlightSearch .MSearchContent.MSearchFlight .MSearchFlightSample,.HomeFlightSearch .MSearchContent.MSearchPackageFH {
        width: 100%
    }

    .insuranceFlight {
        background-size: cover;
        margin-bottom: -80px
    }

    .insuranceFlight .insurancceContainer img {
        height: 285px
    }

    .navbar-header img {
        position: relative;
        top: 0;
        transform: scale(.7);
        margin-right: -23px
    }

    .Airlinles>img {
        transform: scale(.8) translateX(12%);
        -webkit-transform: scale(.8) translateX(12%);
        -ms-transform: scale(.8) translateX(12%);
        -moz-transform: scale(.8) translateX(12%)
    }

    .offerBox figure {
        height: 217px;
        overflow: hidden;
        width: 100%
    }

    .form.HresultFlight div#OneWay label,.hotelPrice {
        font-size: 11px
    }

    .divBoxHomeSearch {
        width: 850px;
        float: left
    }

    .MSearchMenuDescription {
        margin-right: 14px
    }

    .TagLine {
        font-size: 11px
    }

    .flightSug_pic {
        margin-top: 56px
    }

    .footerMenu ul li a {
        font-size: .84em
    }

    .status-search {
        width: 80px
    }
}

@media (min-width: 1230px) {
    .container {
        width:1200px
    }
}
</style>