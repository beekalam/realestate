<style>
@charset "utf-8";@font-face {
    font-family: 'Facility';
    src: url(<?php echo base_url('assets/fonts/facility/'); ?>Facility.eot) format("embedded-opentype"),
         url(<?php echo base_url('assets/fonts/facility/'); ?>Facility.svg) format("svg"),
         url(<?php echo base_url('assets/fonts/facility/'); ?>Facility.ttf) format("truetype"),
         url(<?php echo base_url('assets/fonts/facility/'); ?>Facility.woff) format("woff")
}

body {
    background: url(/Content/Images/flowers-left.png) no-repeat left top
}

.loading-bg .loading_Title {
    width: 320px;
    display: inline-block;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    vertical-align: middle;
    line-height: 20px
}

.loading-bg .progress-bar-box .inner-box-progress:before {
    content: "";
    width: 17px;
    height: 17px;
    background: url(/Content/Images/loadingAirplane.png) no-repeat;
    font-style: normal;
    background-size: 100% auto;
    font-weight: 400;
    line-height: 1;
    top: -8px;
    display: inline-block;
    position: absolute;
    color: #9ea3a7;
    left: 0
}

.loading-bg.trainBg .progress-bar-box .inner-box-progress:before {
    background-image: url(/Content/Images/loadingTrain-1.png);
    width: 34px;
    height: 17px;
    top: -16px
}

.loading-bg .progress-bar-box {
    height: 1px;
    margin-top: -1px
}

.loading-bg .progress-bar-box .inner-box-progress {
    width: 0;
    height: 1px;
    background-image: linear-gradient(to right,#bec4c4,#9ea3a7);
    background-size: 100% 100%;
    transition: width 100ms;
    position: relative
}

.loading-bg .percent-box-progress {
    padding-left: 5px
}

.loading-bg {
    background: #fff url(/Content/Images/ELiLoadinBack1.jpg) no-repeat bottom right;
    height: 100%;
    width: 100%;
    position: fixed;
    background-size: 100%;
    top: 0;
    bottom: 0;
    z-index: 10000
}

.loading-bg.hotelBg {
    background: #fff url(/Content/Images/hotels7-1.jpg) no-repeat center center;
    background-size: cover
}

.loading-bg.hotelBg .loading-content {
    top: 22%
}

.loading-bg.trainBg {
    background: #fff url(/Content/Images/train-bg.jpg) no-repeat center center;
    background-size: cover
}

.loading-bg.trainBg .loading-content {
    top: 11%
}

.loading-content {
    top: 28%;
    left: 50%;
    margin-left: -225px;
    min-height: 664px;
    padding: 6px 0 0;
    position: absolute;
    width: 450px
}

.loading-bg.loading-ltr .loading-content {
    top: 20%
}

.loading-content strong.h1 {
    font-weight: 400;
    margin: 0;
    font-size: 13px;
    text-transform: uppercase;
    color: #333;
    border-bottom: 1px solid #d6d9dc;
    padding-bottom: 10px;
    display: block
}

.trainBg .loading-content strong.h1 {
    padding-bottom: 20px
}

.loading-content p {
    color: #65707b;
    padding-top: 20px
}

.loading-content img {
    float: right;
    margin-left: 30px;
    margin-top: 3px
}

.loading-content strong.h1 img {
    float: left;
    margin-right: 30px;
    margin-left: 0;
    margin-top: -10px
}

.loading-content p>span {
    float: right;
    display: inline-block;
    width: 300px;
    padding-top: 6px;
    color: #f47b20
}

.loading-content p span span {
    color: #900652;
    float: none
}

.loading-content p strong {
    display: block;
    font-size: 23px;
    color: #900652;
    line-height: 24px;
    font-weight: 300;
    padding-bottom: 20px;
    padding-top: 10px;
    height: 54px;
    white-space: nowrap
}

.notice-wrap {
    position: fixed;
    z-index: 9999;
    bottom: 40px;
    top: auto;
    right: 20px;
    left: auto;
    font-family: yekan,Tahoma
}

.notice-item-wrapper.animated.fadeOut {
    width: 0;
    height: 0
}

.win .notice-item-wrapper .sr_better_growl_win {
    padding-left: 120px
}

.win .notice-item {
    background-color: #fff;
    font-family: yekan;
    font-size: 11px;
    opacity: 1;
    padding: 0;
    box-shadow: 0 4px 10px 0 rgba(0,0,0,.12);
    border: 1px solid #e8e8e8;
    position: relative;
    width: 360px
}

#preloader,.NoticeIcon {
    position: absolute;
    left: 20px;
    top: 15px
}

.NoticeIcon svg {
    width: 80px
}

.Notic-p h4 {
    margin-top: 0;
    font-size: 15px
}

#WhoIsSearching .NoticeIcon svg {
    width: 65px
}

#WhoIsSearching .NoticeIcon {
    left: 27px;
    top: 21px
}

.notice-item {
    background-color: #333;
    background-position: 12px 12px;
    background-repeat: no-repeat;
    border: 2px solid #333;
    color: #eee!important;
    cursor: default;
    display: block;
    margin: 0 0 20px;
    min-height: 40px;
    opacity: .95;
    padding: 12px 12px 12px 70px;
    position: relative;
    text-align: right;
    box-shadow: -1px 1px 2px 1px rgba(0,0,0,.1)
}

.win div.notice-item-close-x {
    display: block;
    height: 16px;
    left: auto;
    right: 6px;
    top: 6px;
    width: 16px;
    font-size: 13px;
    position: absolute;
    color: #fff
}

.Notic-p span {
    display: block;
    line-height: 22px
}

.win .notice-item .Notic-p {
    color: #fff!important;
    background: #900652;
    padding: 20px 30px 20px 15px;
    min-height: 112px
}

#modal-dialog-err #modal-header-err {
    background: #f55252;
    color: #fff
}

#modal-dialog-err .modal-header .close {
    border: 1px solid #f1a8a8;
    background: #f58282;
    color: #fff
}

#preloader {
    background: url(/Content/Images/loadingEli_default_ten.gif) no-repeat center #fff;
    height: 100%;
    left: 0;
    top: 0;
    width: 100%;
    z-index: 10000;
    opacity: .8
}

#status {
    font-size: 32px;
    height: 30px;
    left: 50%;
    margin: -15px 0 0 -15px;
    position: absolute;
    top: 50%;
    width: 30px
}

.modal-body #preloader {
    min-height: 150px;
    position: static;
    background-size: 50% auto;
    height: 116px
}

.upsellBlock a.primary span[class^="icon-"] {
    position: absolute;
    top: 1px;
    left: 10px;
    font-size: 11px;
    font-weight: 400;
    opacity: 0;
    transition: all .4s;
    -webkit-transition: all .4s;
    -ms-transition: all .4s;
    -o-transition: all .4s
}

.upsellBlock a.primary:hover span[class^="icon-"] {
    left: 6px;
    opacity: 1
}

.bodyMain {
    padding: 20px 0
}

.fa {
    font-family: "yekan",Arial
}

.divrecent {
    border-radius: 3px 3px 0 0;
    box-sizing: border-box;
    margin: 0;
    padding: 7px 0;
    width: 100%;
    position: relative
}

.Recents {
    color: #003580;
    float: right;
    font-size: 13px;
    width: 20%;
    line-height: 31px;
    height: 31px;
    text-align: center
}

.HResultRecents {
    float: left;
    margin-top: 0;
    padding: 0;
    width: 80%
}

.HResultRecents>li {
    float: left;
    margin-right: 1%;
    width: 24%
}

.btn2 {
    background-color: #eee;
    background-image: -webkit-linear-gradient(#fcfcfc,#eee);
    background-image: -webkit-gradient(linear,left top,left bottom,from(#fcfcfc),to(#eee));
    background-image: linear-gradient(#fcfcfc,#eee);
    background-repeat: repeat-x;
    border: 1px solid #d5d5d5;
    border-radius: 3px;
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.7);
    box-shadow: 0 1px 0 rgba(255,255,255,.7);
    color: #0093ff;
    direction: ltr;
    display: inline-block;
    width: 100%;
    font-family: arial;
    font-weight: 700;
    padding: 1px 12px;
    position: relative;
    text-align: center;
    text-decoration: none;
    text-shadow: 0 1px 0 rgba(255,255,255,.9);
    vertical-align: middle;
    font-size: 11px
}

.btn2 span {
    font-family: Arial
}

.btn2 span:last-child {
    clear: both;
    float: left;
    font-size: 8px;
    text-align: center;
    width: 100%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.btn-Flight {
    height: 36px;
    background: #f7f7f7;
    color: #000;
    line-height: 22px;
    transition: ease all 0.3s;
    -webkit-transition: ease all 0.3s;
    -moz-transition: ease all 0.3s;
    padding: 6px 8px;
    font-size: 12px
}

.btn-Flight:hover {
    background: #efefef
}

.btn-Flight i {
    font-size: 11px;
    position: relative;
    top: 2px;
    padding: 0 5px;
    color: #f47b20!important
}

.btn-Flight:active {
    box-shadow: none
}

.margin-r-15 {
    margin-right: 15px
}

.HResultSearchedButton {
    padding: 0 0 0 10px
}

.btn3 {
    display: inline-block;
    margin: 0;
    padding: 5px;
    font-size: 15px;
    text-decoration: none;
    outline: none;
    color: #fff;
    background-color: #ACA9A9;
    border: none;
    -webkit-transition: -webkit-box-shadow .3s;
    -webkit-transition: box-shadow .3s;
    transition: box-shadow .3s;
    width: 100%;
    box-shadow: 0 0 0 2px #fefefe,0 0 0 4px #ACA9A9
}

.btn3:hover {
    box-shadow: 0 0 0 3px #fefefe,0 0 0 5px #ACA9A9;
    -webkit-transition-timing-function: cubic-bezier(.6,4,.3,.8);
    transition-timing-function: cubic-bezier(.6,4,.3,.8);
    -webkit-animation: gelatine .5s 1;
    animation: gelatine .5s 1
}

.HResultSearchedButton .btn3>i:before {
    font-size: 11px;
    vertical-align: middle;
    transition: linear .3s;
    -webkit-transition: linear .3s;
    -moz-transition: linear .3s;
    -o-transition: linear .3s;
    transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    padding-right: 5px;
    padding-left: 5px
}

.HResultSearchedButton .btn3.showSearch>i:before {
    transform: rotate(180deg);
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    -moz-transform: rotate(180deg)
}

.pediaLeft .HResultFilterCount {
    background-color: #f7f7f7;
    text-align: center;
    direction: ltr;
    font-family: Arial;
    font-weight: 600;
    border-bottom: 1px solid #ddd;
    padding: 4px 5px;
    position: relative
}

.HResultFilterCount .tell {
    padding: 7px 4px 7px 30px;
    width: 136px;
    margin: 0 auto;
    text-align: left;
    position: relative
}

.HResultFilterCount .tell i {
    position: absolute;
    left: 0;
    width: 24px;
    height: 24px;
    color: #fff;
    border-radius: 50%;
    background: #000;
    text-align: center;
    line-height: 24px;
    top: 3px
}

.HResultFilterBox {
    padding: 0
}

.HResultFilterTitle {
    background-color: #f7f7f7;
    text-align: center;
    border-bottom: 1px solid #ddd;
    padding: 5px;
    height: 37px;
    line-height: 27px;
    width: 100%;
    position: relative
}

.pediaRight .HResultFilterTitle {
    height: 37px
}

.HResultFilterTitle span {
    color: #36c;
    font-size: 15px;
    font-weight: 700
}

.HResultFilterTitle input {
    background-color: #fff;
    border: 1px solid #ccc;
    color: #003580;
    direction: ltr;
    text-align: center;
    width: 100%;
    height: 26px;
    line-height: 24px
}

.HResultFilterTitle input:before {
    text-align: center
}

.table-responsive {
    min-height: .01%;
    overflow-x: auto;
    overflow-y: hidden;
    direction: ltr;
    padding-bottom: 15px
}

.table-responsive .tooltip-hide {
    display: none!important
}

.table-responsive .HResultDetailsRoomsNotes a {
    cursor: pointer;
    font-size: 12px;
    white-space: nowrap
}

.HResultDetailsMain.table-responsive {
    padding-bottom: 0
}

.HResultDetailsLeft {
    line-height: 20px;
    color: #FF6363;
    direction: rtl;
    font-size: 11px;
    float: left;
    margin-left: 5px;
    -webkit-animation-name: blinkeColor;
    animation-name: blinkeColor;
    -webkit-animation-duration: 1.5s;
    animation-duration: 1.5s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
    visibility: visible;
    animation-iteration-count: infinite;
    -webkit-animation-iteration-count: infinite;
    -ms-animation-iteration-count: infinite;
    -o-animation-iteration-count: infinite;
    -moz-animation-iteration-count: infinite;
    -ms-animation-timing-function: linear;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
    display: inline-block;
    margin-left: 5px
}

.commentLine {
    color: red;
    font-size: 11px
}

.HResultSearched.sec.ltr {
    padding: 5px 5px 10px;
    direction: ltr;
    text-align: left;
    margin-bottom: 0;
    background: #f7f7f7
}

.HResultSearched.sec.ltr.colorChange {
    padding: 0
}

.HResultSearched.sec.ltr.colorChange>ul {
    background: #f7f7f7;
    padding: 0 5px 10px
}

.HResultSearched li {
    color: #003580!important;
    direction: rtl;
    padding: 5px 0;
    text-align: right;
    font-size: 13px
}

.HResultSearched h1 {
    font-size: 13px;
    margin: 0
}

.HResultSearched li.HResultSearchedDates.HResultSearchedDatesMiladi span {
    direction: ltr;
    display: inline-block
}

.HResultSearched i {
    display: block;
    float: right;
    margin-left: 5px;
    width: 23px;
    height: 20px;
    background-position: top left;
    background-repeat: no-repeat;
    font-size: 16px
}

.HResultFilter {
    direction: ltr;
    text-align: left;
    background: #f1f2f2;
    padding: 10px;
    margin-top: 2px
}

.HResultFilterSpecialOffers.discount,.HResultFilterSpecialOffers.BestSellers {
    padding: 0 0 5px;
    font-size: 11px
}

.HResultFilterSpecialOffers.SpecialOffer label {
    font-weight: 700!important;
    position: relative;
    top: 3px
}

.HResultFilterSpecialOffers.BestSellers label:hover,.HResultFilterBoxContent label:hover {
    cursor: pointer
}

.HResultFilterBoxContent .checkboxFilter {
    position: relative
}

.HResultFilter .SpecialOffer:hover .HResultFilterSpecialOffers label {
    color: #fff
}

.discount .discount1 {
    float: right;
    width: 19px;
    position: relative;
    top: 3PX
}

.BestSellers .bests {
    float: right;
    width: 30px;
    position: relative;
    top: 1PX
}

.BestSeller {
    position: absolute;
    left: -6px;
    z-index: 2;
    background: #ffc343;
    padding: 5px 15px 5px 33px;
    border-radius: 2px;
    top: 51px;
    font-weight: 700;
    text-shadow: 0 1px 1px #fff
}

.BestSeller svg {
    width: 25px;
    display: block;
    height: 25px;
    margin: 0 auto;
    position: absolute;
    left: 3px;
    top: 1px
}

.alignfa .BestSellers .bests,.alignfa .discount .discount1 {
    float: left!important
}

.HResultFilterSpecialOffers label {
    margin-bottom: 0;
    position: relative
}

.HResultFilterBoxContent label:not(.flightStepNumber) {
    font-weight: 400;
    width: 100%;
    white-space: nowrap!important;
    overflow: hidden;
    text-overflow: ellipsis
}

.HResultFilterBoxTitle {
    background-color: transparent;
    color: #333!important;
    border-bottom: 1px solid #ddd;
    cursor: pointer;
    display: block;
    font-size: 14px;
    font-weight: 400;
    padding: 0 6px 6px;
    margin-bottom: 14px;
    width: 100%;
    text-align: right
}

.HResultFilterBoxTitle span {
    background-repeat: no-repeat;
    display: inline-block;
    float: right;
    margin-left: 7px;
    margin-right: -2px;
    position: relative;
    top: 6px;
    vertical-align: middle
}

.HResultFilterBoxTitle span:before {
    content: '';
    color: #f60;
    display: block;
    width: 0;
    height: 0;
    border-bottom: 5px solid transparent;
    border-left: 5px solid #333;
    border-top: 5px solid transparent
}

.HResultFilterBoxTitle:hover {
    color: #ed9316
}

.HResultFilterBoxCount {
    color: #067acc;
    float: right;
    font-size: 12px;
    margin-top: 2px;
    font-family: Helvetica,Arial,Tahoma;
    margin-left: 5px
}

.alignfa .HResultFilterBoxCount {
    float: left!important
}

.HResultFilterBoxContent div:hover span.HResultFilterBoxCount {
    color: #fff
}

.star {
    background-image: url(/Content/New/images/stars.png);
    height: 15px;
    margin: 0;
    padding: 0;
    width: 66px;
    display: inline-block
}

.star.s0 {
    display: none!important
}

.star.s1 {
    background-position: 0 23px;
    width: 78px!important
}

.star.s2 {
    background-position: 0 39px;
    width: 78px!important
}

.star.s3 {
    background-position: 0 55px;
    width: 78px!important
}

.star.s4 {
    background-position: 0 71px;
    width: 78px!important
}

.star.s5 {
    background-position: 0 -8px;
    width: 78px
}

.s-1 {
    display: none;
    background: none;
    top: 0!important
}

.HResultFilterBoxContent .spanLableSort {
    display: block;
    float: right;
    overflow-x: hidden;
    overflow-y: hidden;
    position: relative;
    text-overflow: ellipsis;
    white-space: nowrap;
    width: 100%
}

.HResultFilterBoxContent .spanLableSort i:before {
    margin-left: 5px;
    color: #067acc;
    font-weight: 700
}

.HResultFilterBoxContent .spin {
    display: block;
    float: left;
    font-size: 12px;
    right: 3px;
    opacity: .5;
    position: absolute;
    top: 50%;
    line-height: 10px;
    margin-top: -6px;
    z-index: 0
}

.spin.icon-0055:before,.spin:not(.icon-0055) {
    display: inline-block;
    animation: spin2 .9s infinite linear;
    -webkit-animation: spin2 .9s infinite linear;
    -moz-animation: spin2 .9s infinite linear
}

.HResultFilterStarRating .star {
    display: inline-block;
    position: relative;
    top: 2px
}

.HResultFilterBoxContent i.HResultFIcon {
    display: inline-block;
    float: left;
    height: 15px;
    margin-right: 3px;
    position: relative;
    top: 2px;
    width: 17px
}

.alignfa .HResultFilterBoxContent i.HResultFIcon {
    margin-left: 3px;
    margin-right: 0!important;
    float: none!important
}

.HResultFilterCount {
    background-color: #f5f5f5;
    border-bottom: 1px solid #ddd;
    padding: 5px;
    text-align: center;
    width: 100%;
    height: 40px
}

.HResultFilterCount .count {
    margin: 0 auto;
    padding: 4px;
    text-align: center;
    height: 28px;
    font-size: 13px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.HResultFilterCount strong.HResultHotelCount {
    padding: 0 3px;
    font-weight: 700
}

.HResultFilterCount .count span {
    margin-left: 5px;
    font-weight: 700;
    font-family: Arial
}

.divCroselTour {
    display: none
}

.HResultFilterBoxContent .SelectD {
    height: 26px;
    line-height: 22px
}

.HResultFilterBoxContent {
    display: none;
    padding-bottom: 20px
}

.HResultFilterBoxContent.pdb-0 {
    padding-bottom: 0
}

.HResultFilterBoxContent.pdb-5 {
    padding-bottom: 5px
}

.HResultFilterResult.packageTopInfo {
    padding-right: 15px;
    font-size: 15px;
    margin-top: 6px;
    margin-bottom: -8px
}

.secnobg .HResultFilterBoxContent {
    display: block
}

.mapLeadIn {
    display: block;
    margin-bottom: 10px
}

.upsellBlock {
    margin-bottom: 12px;
    font-size: 12px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 10px;
    padding-right: 10px
}

.upsellBlock .weak {
    margin-bottom: 10px
}

.upsellBlock .primary {
    background: #2196f3;
    border: 1px solid #208de6;
    width: 165px;
    box-sizing: border-box;
    font-size: 14px;
    height: 27px;
    border-radius: 2px;
    -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    -ms-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    display: block;
    margin: auto;
    color: #fff;
    line-height: 25px;
    text-align: center;
    position: relative
}

.upsellBlock .primary:hover {
    background: #208de6
}

.upsellBlock .spanTitle {
    font-size: 15px;
    display: block;
    margin-bottom: 5px;
    color: #E97301
}

.upsellBlock .spanTitle img {
    width: 22px;
    margin-right: 3px
}

.HResultListItems {
    background: #fff;
    clear: none;
    padding: 0
}

.HResultListItems .liResultItem {
    border: 1px solid #DDD;
    position: relative;
    margin-bottom: 0;
    margin-top: 15px;
    background: #f7f7f7;
    margin-right: 15px;
    transition: box-shadow ease .3s
}

.HotelBoxes {
    position: relative;
    padding-left: 210px;
    min-height: 192px;
    padding-right: 150px
}

.HResultListItems .liResultItem:hover {
    -webkit-box-shadow: 2px 4px 6px 1px rgba(0,0,0,.2);
    -moz-box-shadow: 2px 4px 6px 1px rgba(0,0,0,.2);
    box-shadow: 2px 4px 6px 1px rgba(0,0,0,.2)
}

.HotelRight {
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    width: 140px;
    padding-top: 15px;
    background: #fff
}

.HotelRight .HResultPrice {
    font-size: 19px
}

.HResultListItems .liResultItem:hover {
    background-color: #f9f9f9;
    cursor: pointer
}

.HResultGallery {
    position: absolute;
    left: 0
}

.HResultMain {
    padding: 15px 0;
    position: relative
}

.HResultInfoRight {
    min-height: 160px
}

.RoomTxt.clearAfter {
    margin-top: 0
}

.Hotel-Offer {
    display: none;
    top: 4px;
    position: absolute;
    z-index: 2;
    text-align: center;
    left: -5px;
    background: #EE595D;
    padding: 2px 10px;
    border-radius: 2px;
    clear: both;
    width: 95px;
    height: 40px
}

.Hotel-Offer span {
    color: #fff;
    font-family: mallory,"Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 16px;
    font-weight: 700
}

.Hotel-Offer span span.OffTxt {
    display: block;
    font-family: yekan,'yekan',tahoma;
    font-size: 12px;
    font-weight: 400;
    position: relative;
    top: -2px
}

li.BannerList {
    margin: 15px 15px 0 0
}

li.BannerList img {
    width: 100%;
    height: 80px
}

.HResultImage {
    display: block;
    background-image: url(/Content/Hotel/image_background.png);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    cursor: pointer;
    width: 100%;
    display: block;
    width: 100%;
    height: 192px;
    object-fit: cover
}

.HResultImage_container {
    overflow: hidden
}

.HResultImage_container>img,.HResultGallery .HResultImage_container>img {
    -webkit-transition: 3s transform;
    -moz-transition: 3s transform;
    -o-transition: 3s transform;
    -ms-transition: 3s transform;
    transition: 3s transform
}

.HResultImage_container:hover>img,.HResultGallery:hover .HResultImage_container>img {
    -webkit-transform: scale(1.4);
    -moz-transform: scale(1.4);
    -o-transform: scale(1.4);
    -ms-transform: scale(1.4);
    transform: scale(1.4)
}

.HResultMainDetails {
    text-align: left;
    direction: ltr
}

.HResultMainTitle {
    color: #3C3C3C;
    cursor: pointer;
    font-family: Helvetica,Arial,sans-serif;
    font-size: 15px;
    font-weight: 700;
    margin-right: 10px;
    overflow-x: hidden;
    overflow-y: hidden;
    position: relative;
    text-overflow: ellipsis;
    white-space: nowrap;
    max-width: calc(100% - 115px);
    text-align: left;
    direction: ltr
}

.FHMainTitle {
    max-width: 65%
}

.HResultMainTitle:hover {
    color: #feba2b
}

.HResultMainType {
    background-color: #63C355;
    border-radius: 3px;
    color: #fff;
    min-width: 50px;
    padding: 0 6px;
    text-align: center;
    white-space: nowrap;
    margin-right: 8px;
    font-size: 10px;
    font-weight: 400;
    margin-top: 2px;
    height: 16px;
    line-height: 16px
}

.left {
    float: left
}

.right {
    float: right
}

.tblResTour .HResultMainTitle {
    max-width: calc(100% - 156px)
}

.HResultMainLike a,.HResultMainLike span {
    background-image: url(/Content/New/images/Like.png);
    background-position: 0 0;
    display: block;
    float: left;
    height: 17px;
    margin: 0;
    width: 16px
}

.HResultMainLocation {
    color: #0896ff;
    display: block;
    font-size: 13px;
    text-align: left;
    margin-bottom: 10px
}

.dirfa {
    direction: rtl
}

.HResultMainLocation span,.HResultMainLocation strong {
    display: inline;
    font-size: 11px;
    color: #0283DF;
    font-weight: 700
}

.HResultMainScore {
    color: #0896ff;
    display: none!important;
    font-size: 16px;
    font-weight: 700;
    margin-top: -3px
}

.HResultMainScore span {
    display: inline!important
}

.HResultMainPrice.HResultHelvetica.pri {
    font-size: 14px;
    text-align: left;
    width: 125px;
    padding-left: 5px
}

.pri span {
    display: block
}

.linethrough {
    font-family: Arial;
    font-size: 12px;
    text-decoration: line-through;
    text-align: left;
    font-weight: 700
}

.HResultPrice {
    color: #f75900;
    font-weight: 700
}

.riall {
    color: #690;
    float: left;
    font-size: 13px;
    font-weight: 700
}

.HResultMainLocation .address {
    display: inline
}

.HResultShowMapInfo i {
    display: inline-block;
    margin: 1px -2px 0 0;
    float: left
}

.HResultShowMapInfo:after {
    content: '';
    display: block;
    clear: both
}

.HResultShowMap {
    color: #fe5702;
    font-size: 11px;
    position: relative;
    top: -1px
}

.HResultShowMap:hover {
    color: #FEBA2B
}

.HotelAddr {
    clear: both;
    text-align: left;
    max-width: 100%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    direction: ltr;
    color: #888;
    font-weight: 400;
    font-family: Helvetica;
    font-size: 12px
}

.LastBook {
    clear: both;
    position: absolute;
    bottom: 58px;
    font-size: 11px;
    text-align: center;
    color: #A0A0A0;
    right: 0;
    left: 0
}

.HResultMainDetailsFirst {
    height: 27px
}

.HResultMainBestSell {
    margin-left: 10px;
    right: 0;
    top: 92px;
    width: 60px;
    position: absolute
}

.HResultDetailsTitle {
    color: #003580;
    font-family: Helvetica,Arial,sans-serif;
    font-size: 12px;
    margin-right: 5px;
    padding-top: 0;
    font-weight: 700;
    direction: ltr;
    max-width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    margin-bottom: 0;
    text-align: left
}

.HResultDetailsTitle + .tooltip {
    direction: ltr;
    text-align: left
}

.w100 .HResultDetailsTitle {
    max-width: 72%!important
}

p.HResultDetailsTitle.HResultDetailsTtl {
    max-width: 100%!important
}

.HResultSelectedRoom p {
    margin-bottom: 0
}

p.HResultDetailsTitle.HResultDetailsTtl span {
    max-width: 300px!important;
    display: block;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis
}

p.HResultDetailsTitle.HResultDetailsTtl div.tooltip {
    max-width: 100%;
    white-space: normal;
    left: 15px!important
}

.HResultMainSelectRoom .HResultDetailsBoard {
    font-size: 12px;
    text-align: left;
    display: block;
    position: relative;
    left: 5px;
    top: 0;
    float: left;
    margin-bottom: 0
}

.gridBox .HResultInfoRight {
    float: none;
    width: 100%;
    min-height: 100%;
    padding-bottom: 10px
}

.HResultMainDetailsFirst .star {
    position: relative;
    top: 2px;
    margin-right: 10px
}

.HResultMainActions {
    text-align: left;
    position: absolute;
    bottom: 15px;
    left: 0
}

ul.RoomBoards {
    box-shadow: 1px 1px 10px 1px #eaeaea;
    display: inline-block;
    background: #fff;
    position: relative;
    top: 9px;
    padding-left: 40px;
    max-width: 100%;
    height: 20px;
    float: left
}

li.RoomBoardIcon {
    background: #335d99;
    border-radius: 2px 0 0 2px;
    color: #fff;
    font-size: 16px;
    height: 20px;
    padding: 0 6px;
    position: absolute;
    left: 0;
    z-index: 1
}

li.RoomBoardIcon:after {
    content: '';
    position: absolute;
    right: -5px;
    display: block;
    width: 0;
    height: 0;
    top: 0;
    border-top: 20px solid #335d99;
    border-right: 5px solid transparent
}

.HResultMainSelectRoom .HResultDetailsBoard {
    font-size: 12px;
    text-align: center;
    display: block;
    position: relative;
    top: 0;
    margin-bottom: 0;
    width: 100%;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    padding-right: 15px;
    line-height: 20px
}

.HResultMainActions ul {
    float: left
}

.HResultMainActions li {
    color: #85a3e0;
    float: left;
    list-style: outside none none!important;
    margin-right: 15px;
    font-size: 11px;
    font-weight: 700
}

.HResultMainActions li a {
    color: #85a3e0
}

.HResultQuickLook.left,.FlightChange,.FlightFareRule,.HResultQuickLook1 {
    border: 1px solid #fff;
    border-radius: 3px;
    color: #616161;
    font-size: 12px;
    font-weight: 700;
    padding: 3px 8px;
    text-align: center;
    -webkit-transition: background .3s linear 0;
    -moz-transition: background .3s linear 0;
    -o-transition: background .3s linear 0;
    transition: background .3s linear 0;
    min-width: 78px;
    background: #eee;
    border: 1px solid #efefef
}

.FlightChange {
    margin-right: 15px
}

.HResultQuickLook {
    cursor: pointer
}

.HResultListItems .liResultItem:hover .HResultQuickLook,.HResultListItems .liResultItem:hover .HResultQuickLook1,.HResultListItems .liResultItem:hover .FlightChange,.HResultListItems .liResultItem:hover .FlightFareRule {
    background-color: #ddd;
    background-image: none;
    border-radius: 3px;
    color: #314c69!important;
    padding: 3px 8px;
    text-decoration: none
}

.HResultQuickLook:hover,.HResultQuickLook1:hover,.HResultListItems .liResultItem:hover .HResultQuickLook1:hover,.HResultListItems .liResultItem:hover .HResultQuickLook:hover,.HResultListItems .liResultItem:hover .FlightChange:hover,.HResultListItems .liResultItem:hover .FlightFareRule:hover,.FlightChange.btnloading,.HResultListItems .liResultItem:hover .FlightChange.btnloading {
    color: #FFF!important;
    text-shadow: none!important;
    background-color: #3B6BD6!important
}

.HResultButton {
    background: #F7941D;
    border: none;
    border-radius: 3px;
    -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    -ms-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    color: #f9f9f9;
    cursor: pointer;
    font-size: 14px;
    font-weight: 400;
    overflow: visible;
    padding: 2px 0;
    text-decoration: none;
    width: auto;
    width: 110px;
    position: relative
}

.HotelRight .HResultButton {
    clear: both;
    position: absolute;
    bottom: 15px;
    right: 15px
}

.HResultDetails {
    padding: 0 0 10px
}

.HResultButton .spin {
    line-height: 10px;
    position: absolute;
    left: 3px;
    top: 5px
}

.HResultButton:hover,.booking:hover {
    -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    -ms-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    border: none!important;
    background: #F58907
}

.HResultDetailsRooms {
    width: 100%
}

.HResultDetailsContent {
    padding-top: 10px;
    border-top: 1px solid #ddd
}

.HResultDetailsFacilities {
    margin-bottom: 10px
}

.HResultDetailsFacilities span {
    display: inline-block;
    float: left;
    margin: 0 5px;
    padding: 5px 0
}

.HResultDetailsFacilities span:before {
    font-weight: 700!important;
    color: #adadad
}

.HResultDetailsRooms {
    border-collapse: collapse;
    width: 100%;
    direction: ltr;
    text-align: left;
    margin-bottom: -10px;
    table-layout: fixed
}

.HResultListItems .liResultItem:hover .HResultDetailsRooms th {
    background: #EEE
}

.HResultDetailsRooms th {
    background-color: #f9f9f9;
    border-bottom: 1px solid #ccc;
    border-top: 1px solid #ccc;
    color: #666;
    font-weight: 400;
    padding: 5px 5px 5px 17px;
    text-align: left;
    white-space: nowrap;
    font-size: 12px
}

.HResultDetailsRooms th.fa.width20 {
    text-align: right
}

.HResultDetailsRooms tfoot {
    border-top: 1px solid #ccc;
    color: #666;
    direction: rtl;
    text-align: right
}

.HResultDetailsRooms tbody td {
    border-bottom: 1px solid #ccc;
    padding: 5px 5px 5px 17px;
    position: relative
}

.HResultDetailsRooms tbody td .tooltip {
    left: 15px!important
}

.HResultDetailsRooms tbody td:last-child {
    padding: 0;
    text-align: right
}

.HResultDetailsRooms tbody tr:last-child td {
    border: 0 none
}

.HResultDetailsRooms .HResultDetailsBoard {
    color: #690;
    font-size: 12px;
    line-height: 21px;
    float: left;
    white-space: nowrap;
    overflow: hidden;
    max-width: 69%;
    text-overflow: ellipsis
}

.HResultDetailsRoomsNotes a {
    cursor: pointer;
    font-size: 12px
}

.HResultRoomsSelect button {
    background: #0ebb79;
    border: none;
    border-radius: 3px;
    -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    -ms-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    color: #f9f9f9;
    cursor: pointer;
    font-size: 11px;
    font-weight: 700;
    overflow: visible;
    padding: .35em 1em .4em;
    text-decoration: none;
    width: auto;
    text-shadow: 1px 1px 1px #666;
    min-width: 90px
}

.HResultRoomsSelect button:hover {
    background: #07A86A
}

.HResultRoomsSelect .booking:hover {
    color: #fff
}

.HResultRoomsSelect button span:last-child {
    display: none
}

.HResultPrice {
    font-weight: 700;
    margin-left: 0;
    font-size: 14px;
    font-family: Arial;
    text-align: left
}

.rialll {
    font-size: 11px;
    font-weight: 700;
    color: #690;
    margin-right: 5px;
    display: inline-block;
    position: relative;
    vertical-align: middle
}

.divToltip {
    border: 1px solid #888;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 5px
}

.spanToltip {
    font-weight: 700;
    color: #5F5F5F;
    display: block;
    border-bottom: 2px solid #888;
    padding-bottom: 5px
}

.tblToltipRoom {
    width: 100%
}

.tblToltipRoom td {
    border-bottom: 1px solid #888!important;
    color: #5F5F5F;
    padding: 5px;
    text-align: left
}

.priceli {
    color: #690!important;
    font-size: 12px;
    font-weight: 700;
    font-family: Arial;
    width: 32%
}

.tblToltipRoom td1 {
    width: 68%
}

.priceli span {
    color: #5F5F5F;
    margin-left: 10px;
    font-size: 11px;
    font-family: Arial
}

.HResultDetailsRoomsPrice .tooltip-inner {
    max-width: 350px;
    width: 350px;
    background-color: #FBF095;
    border: 2px solid #F1D031
}

.HResultDetailsRoomsPrice {
    text-align: right;
    direction: rtl
}

.HResultDetailsRooms .priceTitle {
    text-align: right
}

.HResultQuickLookRed {
    background: #2196F3!important;
    color: #fff!important
}

.HResultListItems .liResultItem:hover .HResultQuickLookRed {
    color: #fff!important
}

.HResultQuickLookRed:hover {
    background: #BCD0FC!important
}

.scroll-top-wrapper {
    position: fixed;
    opacity: 0;
    visibility: hidden;
    overflow: hidden;
    text-align: center;
    z-index: 99999999;
    background-color: #777;
    color: #eee;
    width: 50px;
    height: 48px;
    line-height: 48px;
    right: 30px;
    bottom: 30px;
    padding-top: 2px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
    -webkit-transition: all .5s ease-in-out;
    -moz-transition: all .5s ease-in-out;
    -ms-transition: all .5s ease-in-out;
    -o-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out
}

.scroll-top-wrapper:hover {
    background-color: #888
}

.scroll-top-wrapper.show {
    visibility: visible;
    cursor: pointer;
    opacity: 1
}

.scroll-top-wrapper i.fa {
    line-height: inherit
}

.scroll-top-inner .glyphicon-chevron-up {
    margin-right: 0!important;
    font-size: 20px
}

.ResultHotelFlightButton {
    padding: 0
}

.ResultHotelFlightButton .HResultMainPrice.HResultHelvetica {
    margin-top: 0
}

.divFullPage {
    position: absolute;
    top: 6px;
    left: 4px;
    z-index: 1;
    cursor: pointer;
    padding: 0;
    color: #fff;
    font-size: 17px;
    line-height: 20px
}

.divHiddenRight {
    position: absolute;
    top: 30px;
    left: 5px;
    z-index: 1;
    cursor: pointer;
    padding: 0;
    color: #fff;
    font-size: 17px;
    line-height: 20px
}

.divProcessBar {
    height: 76px;
    padding: 13px;
    text-align: center;
    font-weight: 700;
    font-family: "yekan";
    font-size: 11px;
    border-bottom: 1px solid #ddd
}

.divProcessBar .progress {
    margin-bottom: 10px
}

.flightSearched i {
    display: block;
    float: right;
    margin-left: 5px;
    width: 23px;
    height: 20px;
    background-position: top left;
    background-repeat: no-repeat;
    font-size: 16px
}

.inputrangef {
    float: left
}

.flightStepNumber {
    display: block;
    margin: 0
}

.icoRight {
    float: left;
    font-size: 15px;
    font-weight: 700;
    height: 17px;
    line-height: 17px;
    margin-right: 5px
}

#time-range p {
    font-family: "Arial",sans-serif;
    font-size: 14px;
    color: #333
}

.ui-slider-horizontal {
    height: 8px;
    clear: both;
    margin: 8px 0 12px;
    box-shadow: none;
    -webkit-box-shadow: none;
    background: #ccc;
    border: 1px solid #ccc
}

.ui-slider {
    position: relative;
    text-align: left
}

.ui-slider-horizontal .ui-slider-range {
    top: -1px;
    height: 100%
}

.ui-slider .ui-slider-range {
    position: absolute;
    z-index: 1;
    height: 8px;
    font-size: .7em;
    display: block;
    border: 0;
    background: #0a84c1
}

.ui-slider .ui-slider-handle {
    border-radius: 50%;
    border: 1px solid rgba(0,0,0,.25);
    background: #fff;
    box-shadow: none;
    -webkit-box-shadow: none;
    position: absolute;
    z-index: 2;
    width: 26px;
    height: 26px;
    cursor: pointer
}

.ui-slider .ui-slider-handle:after {
    content: "";
    position: absolute;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    top: 50%;
    margin-top: -5px;
    left: 50%;
    margin-left: -5px;
    background: #0a84c1
}

.ui-slider-horizontal .ui-slider-handle {
    top: -.85em;
    margin-left: -.8em
}

.ui-slider a:focus {
    outline: none
}

.time-range {
    padding: 0 25px
}

.time-range .timeRangeTo {
    float: right
}

.time-range .timeRangeFrom {
    float: left
}

.timeRangeDisplay {
    margin-bottom: 16px;
    font-size: 14px;
    direction: ltr;
    text-align: left
}

.timeRangeDisplay .timeRangeFrom,.timeRangeDisplay .timeRangeTo {
    color: #333;
    direction: ltr;
    font-family: 'Helvetica Neue-Medium','Helvetica Neue Medium','Helvetica Neue',Helvetica,Arial,sans-serif;
    float: none
}

.divRenewSearch {
    background-color: #F5F5F5;
    display: none;
    padding: 10px 5px;
    border-bottom: 1px solid #DDD
}

.divRenewSearch .row>.field {
    direction: rtl;
    display: inline-block;
    text-align: right;
    width: 100%;
    margin-bottom: 5px;
    padding: 5px 0
}

.divRenewSearch .row label {
    margin-bottom: 2px;
    width: 100%;
    font-size: 12px;
    font-weight: 400
}

.divRenewSearch .row input {
    font-size: 12px
}

.divRenewSearch .acsClear {
    display: none!important
}

.divRenewSearch .maro td {
    font-size: 12px;
    font-weight: 700
}

.divRenewSearch .maro input[type="checkbox"],input[type="radio"] {
    position: relative
}

.selectRenewSearch {
    border-bottom: 1px solid #EEE;
    border-top: 1px solid #EEE;
    font-size: 12px;
    padding: 10px 0;
    margin: 10px 0
}

.CabinClass {
    width: 100%;
    color: #006a33;
    font-size: 12px;
    display: block;
    margin-top: 10px
}

.CabinClass.PremiumEconomy {
    color: #1c4cab
}

.CabinClass.Business {
    color: green
}

.CabinClass.First {
    color: red
}

.ticketTitle h1 {
    font-size: 14px
}

.divRenewSearch .btn {
    background: #0ebb79;
    border: none;
    border-radius: 3px;
    -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    -ms-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    height: auto;
    margin: 0 0 0 5px;
    padding: 7px 5px;
    text-align: center;
    text-decoration: none;
    transition: all .1s linear 0;
    width: 100%;
    color: #fff
}

.divRenewSearch .btn:hover {
    background: #07A86A
}

.cneterResult {
    z-index: 2
}

.alignfa {
    direction: rtl!important;
    text-align: right!important
}

.divFlightRslt {
    background-color: #fff;
    box-shadow: -2px 2px 3px #eeeeee,2px 2px 2px #eee;
    -webkit-box-shadow: 0 -1px 3px #eeeeee,2px 2px 2px #eee;
    -moz-box-shadow: 0 -1px 3px #eeeeee,2px 2px 2px #eee;
    margin-right: 15px
}

.divFlightRslt .tblFlightRslt {
    width: 100%;
    direction: ltr;
    height: auto!important;
    transition: none!important
}

.divFlightRslt .tblFlightRslt .vendor img {
    width: 76px;
    height: 33px
}

.packagehoteldes {
    font-size: 12px;
    position: relative;
    padding-left: 25px;
    display: block
}

.packagehoteldes + .packagehoteldes {
    margin-top: 10px
}

.packageInfoIcon {
    position: absolute;
    left: 0;
    display: block;
    top: -1px
}

.packageInfoIcon svg {
    width: 20px
}

.PackageBed {
    -moz-transform: scaleX(-1);
    -o-transform: scaleX(-1);
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
    filter: FlipH;
    -ms-filter: "FlipH"
}

.resultDuration {
    color: #999;
    font-size: 12px;
    font-family: Helvetica
}

td.vendor.lst.RaftLogo:not(.DiffLogo) img {
    margin-top: -10px
}

tr.way-False td.vendor.lst.RaftLogo:not(.DiffLogo) img {
    margin-top: 12px
}

td.vendor.lst.RaftLogo.DiffLogo .CabinClass {
    position: relative;
    top: 12px
}

.RetLogo.DiffLogo {
    margin-top: 10px
}

.divFlightRslt .tblFlightRslt th {
    background-color: #fff;
    text-align: center;
    padding: 4px 0;
    border-bottom: 1px solid #D3E4F5;
    color: #3D7CB7;
    font-size: 12px;
    margin-bottom: 10px
}

.divFlightRslt .tblFlightRslt th a {
    display: block;
    font-family: yekan;
    font-weight: 400
}

.divFlightRslt .tblFlightRslt td {
    text-align: center;
    font-size: 13px;
    position: relative;
    vertical-align: top
}

.divFlightRslt .tblFlightRslt .price .tooltip-inner {
    width: 180px
}

.divFlightRslt .tblFlightRslt.oneway .tdResult {
    border-bottom: none!important
}

.divFlightRslt .tblFlightRslt.oneway td .riall {
    margin-bottom: 5px!important
}

.divFlightRslt .tblFlightRslt .thSpace {
    border: 0;
    background-color: #fff;
    padding: 10px
}

.divFlightRslt .bold {
    font-weight: 700
}

.divFlightRslt .gray {
    font-size: 12px;
    color: #999;
    display: block
}

.divFlightRslt .tblFlightRslt td label {
    display: block;
    margin-bottom: 0
}

.divFlightRslt .tblFlightRslt td.duration label {
    direction: rtl;
    font-weight: 400
}

td.tdResult.lblRaft.date.lst {
    vertical-align: top
}

.FlightNumber {
    font-family: Helvetica
}

.TimeStyle {
    color: #023f88;
    font-size: 18px;
    display: block;
    position: relative;
    top: -12px
}

.CityInfo {
    position: relative;
    top: -12px
}

.TimeStyle label {
    font-weight: 400;
    display: inline-block!important
}

.AirportCode {
    display: inline-block;
    font-weight: 400;
    color: #9b9b9b;
    font-size: 13px;
    margin: 0 2px;
    font-family: Helvetica
}

.FlightDate .rtl {
    font-family: yekan,'yekan',tahoma;
    font-size: 14px
}

.FlightDate {
    font-size: 14px;
    color: #999;
    font-family: Helvetica;
    position: relative;
    top: 1px
}

.TdRaftLogo .HasDirCircle {
    margin-bottom: 10px
}

.FlightNumber {
    margin: 0 2px;
    font-size: 15px;
    font-weight: 700;
    display: block;
    color: #023f88
}

.CityName {
    margin: 0 2px;
    display: inline-block;
    font-weight: 400;
    color: #f47b1f;
    font-size: 13px;
    position: relative;
    top: -1px
}

td.lblBargasht.date .HasDirCircle {
    position: relative;
    top: 12px
}

td.lblBargasht.date .DirCircle {
    top: 0
}

.Legs {
    font-family: Helvetica;
    font-size: 15px;
    color: #f7941d;
    font-weight: 700
}

.flightStop {
    display: inline-block;
    direction: rtl
}

.way-True .TdRaftLogo {
    background: none!important;
    padding-right: 0!important
}

.way-True + tr .height10 {
    height: 0
}

.way-True td.vendor.lst.RaftLogo {
    vertical-align: top
}

.way-True .riall {
    margin-bottom: 20px!important
}

td.duration.lst.en .bold,td.tdResult.duration.lst.en .bold {
    font-weight: 400;
    font-size: 16px
}

span.rtl {
    display: inline-block;
    direction: rtl
}

.FlightDateNormal {
    font-size: 11px
}

.FlightDateBold {
    font-size: 16px
}

.divFlightRslt .tblFlightRslt td .riall {
    display: block;
    float: none;
    font-weight: 700;
    text-align: left;
    margin: 0 0 40px 1px
}

.divFlightRslt .tblFlightRslt td .lablePrice {
    color: #e55022;
    font-size: 16px;
    text-align: left;
    line-height: 14px
}

.TblLeft {
    float: left;
    width: 25%
}

.TblMiddle {
    float: left;
    width: 50%
}

.TblRight {
    float: left;
    width: 25%
}

.DirCircle {
    display: block;
    border-radius: 50%;
    background-color: #fff;
    position: absolute;
    right: 0;
    top: 0;
    color: #d8d8d8;
    font-size: 21px
}

.HasDirCircle {
    padding-right: 28px;
    position: relative
}

.DirCircleInner {
    height: 8px;
    width: 8px;
    display: block;
    margin: 4px;
    border-radius: 50%;
    background-color: #4a90e2
}

.TblMiddleLine {
    display: block
}

.TopLine {
    margin-bottom: 5px
}

.LegsLine {
    display: flex;
    width: 100%;
    height: 2px;
    background: #ccc;
    position: relative;
    direction: rtl
}

.Segment {
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1
}

.SegmentBullet {
    display: block;
    border-radius: 50%;
    width: 8px;
    height: 8px;
    background: #fff;
    border: 1px solid #acacac;
    margin: 0 auto;
    position: relative;
    top: -2px
}

.SegmentCode {
    color: #f7941d;
    font-family: Helvetica;
    position: relative;
    top: -2px
}

.LegsStart,.LegsEnd {
    position: absolute;
    display: block;
    border-radius: 50%;
    width: 8px;
    height: 8px;
    background: #d8d8d8;
    border: 1px solid #acacac;
    top: -3px
}

.LegsStart {
    right: 0
}

.LegsEnd {
    left: 0
}

.way-True .tdResult {
    border-bottom: 0!important
}

.way-True .tdResult.lblRaft.date.lst {
    vertical-align: top
}

.divFlightRslt .tblFlightRslt .TdRaftLogo {
    background-position: right center;
    background-repeat: no-repeat;
    padding-right: 30px;
    white-space: nowrap
}

.divFlightRslt .tblFlightRslt .TdRetLogo {
    white-space: nowrap;
    background-position: right center;
    background-repeat: no-repeat;
    padding-right: 30px
}

.divFlightRslt .indr {
    cursor: pointer;
    display: block;
    font-size: 11px;
    padding: 0;
    text-align: right;
    height: 25px;
    margin: 0;
    position: relative;
    top: -1px;
    font-size: 11px;
    line-height: 25px;
    color: #484848;
    font-weight: 400;
    background: #f7f7f7;
    padding-left: 25px;
    padding-right: 17px
}

span.RaftTxt {
    position: absolute;
    right: 4px
}

span.RaftTxt svg {
    width: 24px;
    height: 24px;
    display: block;
    margin: 0 0 0 auto;
    fill: #adadad
}

.TdRaftLogo .RaftTxt svg {
    -moz-transform: scaleX(-1);
    -o-transform: scaleX(-1);
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
    filter: FlipH;
    -ms-filter: "FlipH"
}

span.RaftTxt span {
    display: block;
    font-size: 10px;
    color: #023f88
}

tr.way-True span.RaftTxt {
    display: none
}

.divFlightRslt .indr:hover {
    color: #ff8d00
}

.divFlightRslt .divBoxListDetFlight {
    border-radius: 2px;
    border-top: 1px solid #ccc;
    box-shadow: 0 1px 5px #ddd inset;
    -webkit-box-shadow: 0 1px 5px #ddd inset;
    -moz-box-shadow: 0 1px 5px #ddd inset;
    margin: 10px;
    padding: 10px 1.5%;
    background-color: #f7f7f7;
    display: none
}

.divBoxListDetFlight .dflt {
    float: left;
    padding: 0 10px 0 5px;
    width: 25%;
    border-right: 1px solid #ccc
}

.divBoxListDetFlight .headi {
    border-bottom: 1px dotted #ccc;
    color: #003580;
    font-size: 13px;
    font-weight: 700;
    margin-top: 0;
    padding-bottom: 5px;
    font-family: 'Yekan';
    direction: rtl
}

.divBoxListDetFlight .lrow {
    border-bottom: 1px dotted #ccc;
    color: #777;
    display: table;
    font-size: 12px;
    padding: 5px 0;
    width: 100%;
    white-space: nowrap;
    direction: rtl;
    font-family: 'Yekan'
}

.divBoxListDetFlight .marginTop10 {
    margin-top: 10px
}

.divBoxListDetFlight .lrows .right {
    float: right;
    padding: 3px 0
}

.divBoxListDetFlight .lrow .left {
    float: left;
    font-family: "yekan",Arial;
    padding: 3px 0;
    direction: ltr
}

.divBoxListDetFlight .bestpriceimg {
    max-width: 145px;
    margin-bottom: 10px;
    width: 100%
}

.divBoxListDetFlight .css_btn_class i {
    float: right;
    height: 16px;
    width: 16px;
    font-size: 16px;
    line-height: 17px
}

.divBoxListDetFlight .itinerary {
    padding-left: 5px;
    float: right;
    width: 75%
}

.divDetRaft .subRaft {
    direction: ltr;
    text-align: left
}

.divDetRaft .subRaft label {
    display: inline!important
}

.tblRaftAndBargasht,.tblRaftAndBargasht tbody,.tblRaftAndBargasht tr {
    width: 100%
}

.tblRaftAndBargasht td:first-child {
    width: 16%
}

.tblRaftAndBargasht td:nth-child(2) {
    width: 15%
}

.tblRaftAndBargasht td:nth-child(3) {
    width: 27%
}

.tblRaftAndBargasht td:nth-child(4) {
    width: 15%
}

.tblRaftAndBargasht td:nth-child(5) {
    width: 27%
}

.divBoxListDetFlight .gray2 {
    color: #999;
    font-size: 11px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis
}

.tblRaftAndBargasht .fltdetairlinelogo {
    width: 55px
}

.tblRaftAndBargasht .divTime {
    color: #000;
    font-size: 16px;
    font-weight: 700
}

.tblRaftAndBargasht .divTime .subdetail {
    color: #36c;
    font-weight: 400
}

.divDetRaft {
    margin-bottom: 20px
}

.tblRaftAndBargasht .divDate {
    font-size: 12px
}

.divDetRaft .connector {
    border-bottom: 1px solid #D6D6D6;
    text-align: center
}

.divDetRaft .layOver {
    position: relative;
    top: 9px;
    padding: 0 10px;
    font-weight: 700;
    font-family: Arial;
    text-transform: capitalize;
    font-size: 12px;
    color: #717171
}

.divDetRaft .layOver .operating-airline {
    color: #023f88
}

.divDetRaft .layOver:not(:empty) {
    background-color: #f7f7f7
}

.divDetRaft .itineraryClock {
    background-image: url(../images/iconSprite20.png);
    background-position: center center;
    display: block;
    height: 19px;
    margin: 5px auto;
    width: 19px
}

.divDetRaftBar {
    width: 100%
}

.box3sort button {
    font-size: 11px
}

.box3sort button:hover {
    box-shadow: none!important;
    border: 1px solid #888!important;
    background: #A1A1A1;
    color: #fff
}

.css_btn_class {
    background: #2196f3;
    cursor: pointer;
    border: 1px solid #208de6;
    border-radius: 2px;
    -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    -ms-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    color: #fff!important;
    display: block;
    font-size: 12px;
    font-weight: 400;
    padding: 3px;
    text-align: center;
    text-decoration: none;
    width: 100%
}

.css_btn_class:hover {
    background: #208de6
}

.css_btn_class.red_bg {
    background: #ff6363;
    border-color: #f94f4f
}

.css_btn_class.red_bg:hover {
    background: #f94f4f
}

.textLeft {
    text-align: left!important;
    padding-left: 27px!important
}

.HResultFilterBoxClose {
    transform: rotate(90deg);
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease
}

.HResultFilterBoxOpen {
    transform: rotate(180deg);
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
    top: -4px!important
}

.liPagination {
    margin: 0 auto;
    text-align: center
}

.liPagination .pagination {
    margin: 10px
}

.liPagination .pagination-sm>li>a,.liPagination .pagination-sm>li>span {
    height: 28px;
    padding: 6px 10px;
    font-family: Helvetica,Arial,Tahoma
}

.liPagination .pagination>.disabled>a {
    background-color: #eee;
    color: #ccc
}

.liPagination a span {
    font-size: 9px;
    line-height: 10px;
    position: relative;
    top: -2px
}

.liPagination a span[class^="rotate-"] {
    width: 16px
}

.divLeftHideBox {
    background-image: url(/Content/New/images/bg_lft_scroll.png);
    background-position: center left;
    background-repeat: no-repeat;
    width: 25px;
    height: 30px;
    padding: 7px 0;
    position: absolute;
    left: 0;
    cursor: pointer;
    top: 4px
}

.divLeftHideBox .glyphicon {
    margin-right: 0!important
}

.HResultMainDetails1 {
    float: left;
    font-size: 13px!important;
    max-width: 48%;
    min-width: 48%;
    white-space: nowrap
}

.ResultDetPackHF {
    width: 50%;
    min-height: 162px
}

.resultFlHorowright {
    float: right;
    max-width: 40%;
    font-family: Arial
}

.resultFlHorowleft {
    float: left;
    text-align: left;
    direction: ltr;
    font-family: Arial;
    max-width: 26%
}

.resultflhoimgD {
    float: left;
    margin: 0 10px 0 0;
    width: 24%;
    font-family: Arial
}

.resultFlHorowleft .resultFlHoAirline {
    color: #36c;
    font-size: 12px;
    font-family: Arial;
    width: 125px;
    overflow: hidden;
    text-overflow: ellipsis
}

.resultFlHorowleft .resultFlHonoFlight {
    color: #003580;
    font-size: 12px
}

.resultflhorowFH {
    padding-bottom: 5px;
    padding-top: 3px;
    border-bottom: 1px dashed #CCCBCB;
    position: relative;
    z-index: 1
}

.ResultTour .HResultMainDetails1 .resultflhorowFH:nth-child(2n):before {
    transform: rotate(270deg);
    left: -21px;
    top: -2px
}

.resultflhorowFH:after {
    position: absolute;
    border-top: 2px solid transparent;
    background: #F5F5F5;
    left: -24px;
    top: -2px;
    height: 47px;
    display: block;
    content: "";
    width: 17px;
    z-index: -1
}

.ResultTour .HResultMainDetails1 .resultflhorowFH:nth-child(2n):after {
    border-top: 2px solid #fff
}

.HResultListItems .liResultItem.ResultTour:hover .resultflhorowFH:nth-child(2n):after {
    border-top-color: #f9f9f9
}

.HResultMainBestSellFH {
    left: 42%;
    top: 36px;
    width: 35px;
    position: absolute
}

.resultFlHorowleft .resultFlHonoFlight {
    color: #003580;
    font-size: 11px
}

.resultFlHorowright .resultFlHoTime {
    color: #36c;
    direction: ltr
}

.resultFlHorowright .resultFlHoDuration {
    color: #003580;
    font-size: 10px
}

.resultFlHorowright .resultFlHoDuration>span {
    display: inline-block
}

.FHResultButton {
    background: #F7941D;
    border-radius: 3px;
    -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    -ms-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    color: #f9f9f9;
    cursor: pointer;
    font-size: 14px;
    font-weight: 400;
    overflow: visible;
    padding: 2px 0;
    text-decoration: none;
    width: auto;
    width: 110px
}

.FHResultButton:hover,.booking:hover {
    -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    -ms-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    border: none!important;
    background: #F78E11
}

.HResultInProcess {
    background-position: center center;
    height: 24px
}

.ifreamFH {
    height: 700px;
    border: 2px solid #C2D9F1;
    border-radius: 10px
}

.modal-header .modal-title {
    direction: ltr;
    text-align: right;
    display: block
}

.PriceAlbaghi {
    color: #888;
    font-size: 13px;
    font-weight: 400;
    font-family: yekan;
    margin-bottom: 5px;
    margin-left: 6px;
    display: block
}

.ifreamPolicy {
    border: 0
}

.warningMessage {
    padding: 11% 0;
    text-align: center
}

.warningMessage h2 {
    color: #2196F3;
    font-size: 24px
}

.warningMessage h1 {
    font-size: 22px
}

.warningMessage .msg {
    direction: rtl;
    word-wrap: break-word;
    color: #27107D
}

.warningMessage a {
    display: inline-block;
    background: #9a9a9a;
    padding: 3px 10px 0;
    font-size: 16px;
    color: #fff!important;
    line-height: 21px;
    display: inline-block;
    background: #969ba8;
    padding: 0 15px;
    font-size: 16px;
    color: #fff!important;
    transition: ease all .3s;
    -webkit-transition: ease all .3s;
    -moz-transition: ease all .3s;
    margin-top: 15px;
    -webkit-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    -ms-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    height: 38px;
    line-height: 38px
}

.warningMessage a:hover {
    background: #777c86
}

.searchSprite {
    background-image: url(/Content/New/images/noresult.png);
    background-repeat: no-repeat;
    display: block;
    height: 120px;
    margin: 0 auto;
    width: 128px
}

a.primary2,input.primary2,button.primary2 {
    background: #2196f3;
    border: 1px solid #208de6;
    width: 133px;
    box-sizing: border-box;
    font-size: 13px;
    height: 37px;
    border-radius: 2px;
    -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    -ms-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    color: #fff;
    text-align: center
}

a.primary2:hover,input.primary2:hover,button.primary2:hover {
    background: #208de6
}

.warningMessage p {
    display: block;
    padding: 5px
}

.SearchSetTimeOut {
    text-align: center;
    background-color: #FAF9C6;
    padding: 10px;
    border-radius: 7px;
    border: 1px solid #D3C789;
    direction: rtl
}

.SearchSetTimeOut h3 {
    margin: 0 0 5px
}

.SearchSetTimeOut p {
    margin: 0 0 15px
}

.HResultFilterFacilities .HResultFilterBoxContent div,.HResultFilterLocations .HResultFilterBoxContent div,.HResultFilterPrice #HResultFilterPriceRange div,.HResultFilterStarRating .HResultFilterBoxContent div,.HResultFilterHotelTypes .HResultFilterBoxContent div,.HResultFilterSpecialOffers .HResultFilterBoxContent div,#HResultFilterAirlines div,#HResultFilterPriceRange div,#HResultFilterAirports div,#HResultFilterStops .checkboxFilter,#HResultFilterCabinClasses .checkboxFilter {
    height: 32px;
    line-height: 24px;
    overflow: hidden
}

.HResultFilterBoxContent label {
    margin-bottom: 0
}

.HResultFilterFacilities .checkboxFilter i:before {
    margin-left: 5px;
    color: #067acc;
    font-weight: 700
}

.divRenewSearch .acsTextBox {
    text-align: center;
    direction: ltr
}

.divProcessBar #process-status {
    direction: ltr
}

.tblTooltipPrice {
    text-align: right;
    direction: rtl
}

.tblTooltipPrice td {
    padding: 5px;
    border-radius: 3px;
    font-family: yekan!important;
    line-height: .5em
}

.divRenewSearch .MSearchRoomSample,.divRenewSearch .MSearchAgeSample {
    display: none
}

input[name=ChangeDate] {
    display: none
}

.divRenewSearch input#Trip {
    bottom: -3px
}

.divRenewSearch .MSearchRoomLabel {
    padding: 5px;
    background-color: gray;
    color: #fff;
    width: 100%!important;
    border-radius: 3px;
    text-align: center
}

.tblPCountAC td {
    padding: 5px;
    width: 33.33%
}

.liPagination li:not(.active) {
    cursor: pointer
}

.HResultFilterBoxOpen {
    margin-top: 8px!important
}

.HResultFilterBoxContent label {
    color: #333;
    font-size: 12px!important;
    line-height: 31.5px
}

.HResultFilterBoxContent div#HResultFilterPriceRange label span e:last-child,.HResultFilterBoxContent div#HResultFilterPriceRange div label h:last-child {
    display: inline-block;
    position: relative;
    top: -1px;
    color: #2E9900;
    padding-right: 3px
}

.HResultFilterBoxContent input[type=checkbox] {
    display: none
}

.divRenewSearch .form-control {
    box-shadow: none;
    font-size: 12px
}

.divRenewSearch .form-group {
    margin-bottom: 10px
}

.form-group.form-group-icon-right .form-control {
    padding-right: 34px!important
}

.form.HresultFlight {
    padding: 0 5px
}

.form.HresultFlight div#OneWay {
    margin: 10px 0
}

.divRenewSearch .form-control[disabled],.divRenewSearch .form-control[readonly],.divRenewSearch fieldset[disabled] .form-control {
    background: #fff
}

.divRenewSearch .form-control {
    box-shadow: none;
    font-size: 12px
}

.divRenewSearch .form-group label {
    font-weight: 400;
    font-size: 11px
}

.divRenewSearch .form-control:focus {
    border-color: #F7941D;
    outline: 0;
    box-shadow: none
}

.form-group.form-group-icon-right .input-icon {
    right: 0
}

.divRenewSearch .input-icon {
    top: 23px;
    font-size: 14px
}

.checkboxFilter label {
    position: relative;
    padding-right: 30px
}

.checkboxFilter label:before {
    content: '';
    position: absolute;
    right: 0;
    width: 24px;
    height: 24px;
    border: 1px solid rgba(221,221,221,1);
    background: #FFF;
    top: 3px;
    transition: ease .2s all;
    -webkit-transition: ease .2s all;
    -moz-transition: ease .2s all;
    text-align: center;
    font-family: "EliFont";
    font-size: 14px
}

.checkboxFilter input[type="checkbox"]:checked + label:before {
    content: '\e826';
    color: #60afd7;
    background: #fff;
    line-height: 21px
}

.prl-5 {
    padding-right: 5px;
    padding-left: 5px
}

.pr-0 {
    padding-right: 0!important
}

.pl-0 {
    padding-left: 0!important
}

.activeCheck {
    background-image: url(/Content/Images/ico-checkbox.png)!important;
    background-position: top left!important;
    background-repeat: no-repeat!important
}

.SpecialOffer label {
    font-weight: 700;
    width: 70%!important
}

.flightStepNumber {
    font-weight: 400
}

.timeRange {
    margin-left: 15px;
    margin-right: 13px
}

@keyframes spin2 {
    from {
        transform: rotate(0deg)
    }

    to {
        transform: rotate(360deg)
    }
}

@-webkit-keyframes spin2 {
    from {
        -webkit-transform: rotate(0deg)
    }

    to {
        -webkit-transform: rotate(360deg)
    }
}

@-moz-keyframes spin2 {
    from {
        -moz-transform: rotate(0deg)
    }

    to {
        -moz-transform: rotate(360deg)
    }
}

.HResultFilterPriceRange label * {
    width: 90%
}

.HResultFilterBoxContent label[for^="HResultFilterPrice"] {
    width: 100%!important
}

.loading .mainloading {
    display: none
}

.HResultFilterSpecialOffers label {
    white-space: pre-line!important
}

.MSearchValidate input {
    border: 2px solid red!important;
    color: red!important;
    border-radius: 5px
}

.HResultRoomMoreRoomsShow span:first-child {
    display: none
}

.diableOverlay {
    box-shadow: 0 0 20px 10px rgba(255,255,255,1);
    -webkit-box-shadow: 0 0 20px 10px rgba(255,255,255,1);
    -moz-box-shadow: 0 0 20px 10px rgba(255,255,255,1);
    transform: scale(.98);
    -webkit-transform: scale(.98);
    -moz-transform: scale(.98);
    opacity: .4;
    cursor: not-allowed;
    pointer-events: none
}

.height15 {
    height: 15px
}

.height10 {
    height: 10px
}

.height3 {
    height: 3px
}

.selectRenewSearch .divNights .labelNights {
    font-size: 15px;
    background: #335D99;
    color: #fff;
    display: inline-block;
    padding: 6px 20px;
    border-radius: 3px;
    line-height: 20px;
    text-align: center;
    border: 1px solid #335D99
}

.HResultRoomMoreRoomsContainer {
    font-size: 11px;
    font-weight: 700;
    padding: 8px;
    padding-right: 17px
}

.nopadding {
    padding: 2px!important
}

.no-border {
    border: 0 none!important
}

.fltrow tr td {
    padding-bottom: 6px;
    padding-top: 8px
}

.acsPopup {
    margin-left: 6px!important
}

.HotelsMap {
    border: none;
    padding: 0;
    width: 100%;
    height: 100%;
    min-height: 500px;
    margin: 0 auto
}

.removeAdditionalFlt:hover {
    text-decoration: none
}

.removeAdditionalFlt {
    font-size: 11px;
    font-weight: 700;
    float: left;
    padding-left: 19px
}

.removeAdditionalFlt i {
    top: 1px;
    position: relative;
    font-size: 7px;
    font-weight: 700;
    margin-left: 3px
}

.HResultProgressState {
    padding-top: 9px;
    color: #3e3b3e;
    font-size: 12px;
    text-align: center;
    font-weight: 700;
    height: 14px;
    font-family: "yekan"
}

.HResultRoomsSelect button.btn.right.booking {
    margin-right: 17px
}

.HResultRoomsSelect .btnloading {
    animation: move 3s linear infinite!important;
    -webkit-animation: move 3s linear infinite!important;
    overflow: hidden!important;
    background-size: 50px 50px!important;
    -webkit-background-size: 50px 50px!important;
    -moz-background-size: 50px 50px!important;
    box-shadow: none!important;
    -webkit-box-shadow: none!important;
    -moz-box-shadow: none!important;
    color: #fff
}

.hotel-loc .address {
    padding-right: 4px;
    position: relative
}

.EachHotel .hotel-loc .address {
    font-family: Helvetica
}

.hotel-loc {
    display: inline-block;
    position: relative;
    top: 1px
}

.HResultMainStarRating {
    margin-right: 7px
}

.PackageResult .hotel-loc {
    direction: ltr
}

p.big-line {
    line-height: 29px;
    background: #fff3e0;
    padding: 5px 15px;
    margin: -3px 0 0
}

span.changeFlight-checkin {
    direction: rtl;
    display: inline-block
}

span.rowpackk.fontsizebigpack.totalprice span {
    float: left;
    margin-top: 2px
}

.iframe .priceflpk .fontsizebigpack {
    max-width: 130px;
    margin: 0 auto!important;
    float: none;
    display: block!important
}

p#TermsCondition span {
    font-weight: 700
}

.HResultFilterSpecialOffers.SpecialOffer label div {
    margin-top: 0
}

span.spanLableSort span.mgTopLabel {
    position: relative;
    top: -1px
}

.HResultFilterBox.HResultFilterStarRating .HResultFilterBoxContent label {
    margin-bottom: 2px
}

td.resultflhoimg img {
    width: auto;
    max-height: 33px;
    max-width: 76px
}

.HResultQuickLookL {
    margin-top: 7px
}

.HResultMainPrice.HResultHelvetica {
    padding-left: 15px
}

.divProcessBar .CopyRight {
    margin-top: 240px;
    font-family: Arial;
    font-size: 15px;
    text-align: center;
    color: #002f94;
    opacity: .7
}

.divProcessBar .CopyRight>p {
    margin-bottom: 20px
}

.strong {
    font-weight: 700
}

.col-md-3-20 {
    width: 20%
}

.col-md-6-60 {
    width: 60%
}

.col-md-9-80 {
    width: 80%
}

.cneterResult.col-md-9 {
    width: 80%;
    padding-left: 15px!important
}

.cneterResult.col-md-12 {
    width: 100%;
    padding: 0 15px!important
}

.ChangeDate .datePickerSelectCalendar .datePickerPopup {
    position: static;
    display: inline-block!important
}

.ChangeDate .datePickerMonthLeft {
    padding: 7px 10px 6px;
    width: 100%;
    position: relative
}

.ChangeDate .datePickerSelectedDay {
    background-color: transparent!important;
    background-image: url(/Content/Images/dor2.png);
    background-repeat: no-repeat;
    color: #000!important;
    background-size: 100% auto
}

.ChangeDate .datePickerEnabledDay:hover {
    background-color: #fff!important;
    color: #F47B20
}

.ChangeDate .datePickerWrapper {
    display: inline-block;
    margin-top: 10px;
    width: 100%
}

.ChangeDate .datePickerPopup {
    background-color: transparent;
    box-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    padding: 0;
    width: 100%
}

.ChangeDate * {
    direction: ltr!important
}

.ChangeDate .datePickerCalendarSwitch,.ChangeDate .datePickerNext,.ChangeDate .datePickerPrev,.ChangeDate .datePickerMonthRight,.ChangeDate .datePickerPageMonth:last-child,.ChangeDate .datePickerIcon {
    display: none
}

.ChangeDate .datePickerPageMonth,.ChangeDate .datePickerPage {
    margin: -3px 0 0;
    width: 100%
}

.ChangeDate .datePickerWeekDays li,.ChangeDate .datePickerWeekDaysTitle {
    height: 14.28%;
    width: 14.28%;
    border-left: 1px solid #eee;
    border-bottom: 1px solid #eee;
    border-top: none;
    border-right: none
}

.ChangeDate .datePickerWrapper,.ChangeDate .datePickerPopup {
    margin-top: 0
}

.ChangeDate .datePickerPopup {
    border: none
}

.ChangeDate .datePickerPageMonth:first-child {
    border-right: 1px solid #eee!important;
    padding-right: 0!important;
    background: #fcfcfc
}

.ChangeDate .datePickerWeekDaysTitle {
    background: none repeat scroll 0 0 #f2f2f2;
    color: #000;
    font-weight: 700
}

input[name=ChangeDate] {
    display: none
}

.ChangeDate .datePickerNavigate {
    margin-bottom: 0;
    background: #eae7e7;
    color: #335d99;
    border-bottom: 1px solid #ddd
}

.ChangeDate .datePickerWeekDaysTitle,.ChangeDate .datePickerWeekDays li {
    font-size: 11px
}

.ChangeDate .datePickerWeekDays li {
    color: #0065b8
}

.ChangeDate .datePickerWeekDays li.datePickerDisabledDay {
    color: #cdcdcd
}

.ChangeDate .datePickerMonthLeft:before {
    background: url(/Content/Images/ticketImg.png) no-repeat -76px -3px;
    width: 21px;
    height: 22px;
    content: "";
    display: block;
    position: absolute;
    top: 5px;
    right: 8px
}

.paddingL5 {
    padding-left: 5px
}

.lBox {
    padding: 10px;
    background: #f3f9fe;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2YzZjlmZSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjUwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmM2Y5ZmUiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top,#f3f9fe 0%,#fff 50%,#f3f9fe 100%);
    background: -webkit-linear-gradient(top,#f3f9fe 0%,#fff 50%,#f3f9fe 100%);
    background: linear-gradient(to bottom,#f3f9fe 0%,#fff 50%,#f3f9fe 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f3f9fe',endColorstr='#f3f9fe',GradientType=0)
}

.ticketInfo.lBox {
    margin-bottom: 10px
}

.lBox .ticketTitle {
    background: #f7941d;
    color: #fff;
    padding: 5px 20px 5px 5px;
    margin-right: 5px;
    position: relative
}

.ticketTitle>div,.ticketTitle>h2 {
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    margin: 0;
    font-size: 14px
}

.lBox .ticketTitle:after {
    content: "";
    display: block;
    position: absolute;
    right: -9px;
    top: -5px;
    background: url(/Content/Images/ticketImg.png) no-repeat -77px -53px;
    width: 27px;
    height: 27px
}

.lBox .ticketTitle h1 {
    display: inline;
    margin: 0;
    padding-right: 5px
}

.ticketInfo.lBox .ticketItem,.aboutCity.lBox .ticketItem {
    font-size: 12px;
    border-bottom: 1px solid #eee;
    padding-bottom: 10px
}

.aboutCity.lBox {
    margin-bottom: 10px
}

.ticketInfo.lBox .ticketItem:last-child,.aboutCity.lBox .ticketItem:last-child {
    border-bottom: none
}

.ticketInfo.lBox h2,.aboutCity.lBox .ticketItem h2,.aboutCity.lBox .ticketItem h3 {
    color: #335d99;
    line-height: 24px;
    font-size: 14px;
    margin: 10px 0 5px;
    position: relative;
    padding-right: 15px
}

.ticketInfo.lBox h2:after,.aboutCity.lBox .ticketItem h2:after,.aboutCity.lBox .ticketItem h3:after {
    content: "";
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 7px solid orange;
    position: absolute;
    top: 8px;
    right: 0;
    transform: rotate(41deg);
    -webkit-transform: rotate(41deg);
    -ms-transform: rotate(41deg)
}

.ticketInfo.lBox .ticketItem p,.aboutCity.lBox .ticketItem p,.ticketInfo.lBox .tourSights {
    line-height: 20px;
    padding-right: 7px
}

.ticketInfo.lBox .tourSights li:before {
    content: "■ ";
    font-size: 7px;
    padding-left: 5px;
    color: orange
}

.ticketWeather.lBox {
    background: url(/Content/Images/weatherBg.jpg) no-repeat center top;
    margin-bottom: 10px
}

.ticketWeather.lBox:after {
    content: "";
    display: table;
    clear: both
}

.ticketWeather .weatherInfo {
    padding: 7px 0
}

.lBox.ticketWeather .ticketTitle:after {
    background-position: -40px -53px
}

.ticketWeather .weatherInfo .wIcon {
    padding-top: 5px
}

.ticketWeather .weatherInfo .wIcon img {
    margin: auto
}

.ticketWeather .wDesc {
    padding-right: 7px;
    color: #335d99;
    line-height: 22px
}

.ticketWeather .wDesc div>span {
    display: inline-block;
    direction: ltr
}

.wTemp>span {
    font-size: 16px
}

.relatedLink {
    margin-bottom: 10px
}

.lBox.relatedLink .ticketTitle:after {
    background-position: 0 -53px
}

.relatedLink ul {
    padding: 10px 7px 0
}

.relatedLink li {
    position: relative;
    padding: 0 10px 5px 0;
    line-height: 20px;
    font-size: 12px;
    color: #335d99
}

.relatedLink li a {
    color: #335d99;
    transition: .4s;
    -ms-transition: .4s;
    -moz-transition: .4s;
    -webkit-transition: .4s;
    padding-right: 0
}

.relatedLink li a:hover {
    color: #F7941D;
    padding-right: 5px
}

.relatedLink li i {
    right: -7px;
    top: 1px;
    position: absolute;
    font-size: 9px;
    color: #FF9009
}

.hotelBook {
    position: relative
}

.hotelBook img {
    width: 100%
}

.hotelBook .hotelBDetail {
    position: absolute;
    background: rgba(0,0,0,.6);
    color: #fefefe;
    bottom: 0;
    right: 0;
    width: 100%;
    padding: 5px 17px;
    font-size: 12px;
    height: 48px;
    overflow: hidden;
    transition: all .8s linear;
    -webkit-transition: all .8s linear;
    -ms-transition: all .8s linear
}

.hotelBook:hover .hotelBDetail {
    height: 100%
}

.hotelBook .hotelBDetail .hTitle span,.hotelBook .hotelBDetail .hTitle strong {
    font-size: 14px;
    font-weight: 500
}

.hotelBook .hotelBDetail p {
    font-size: 12px;
    padding-top: 5px
}

.filterFlight {
    padding: 10px;
    direction: rtl;
    text-align: right;
    font-size: 12px;
    position: relative
}

.HResultFilterTitle.notifiction:after {
    content: "";
    display: block;
    background: url(/Content/Images/ticketImg.png) no-repeat -33px 0;
    width: 26px;
    height: 29px;
    position: absolute;
    top: 3px;
    right: 2px
}

.callSupport {
    margin-top: 10px
}

.callSupport img {
    max-width: 224px;
    margin: 0 auto
}

.aboutTour {
    font-size: 12px;
    line-height: 24px;
    clear: both;
    border: 1px solid #eee;
    padding: 20px 10px 10px;
    text-align: justify
}

.aboutTour .newsList {
    padding-bottom: 0
}

.aboutTour .tourAboutDsc {
    padding-left: 10px
}

.aboutTour h1 {
    color: #fefefe;
    font-size: 18px;
    position: relative;
    padding: 7px 10px;
    float: right
}

.aboutTourHeading {
    background: #335d99;
    min-height: 34px;
    padding: 0 0 0 8px;
    margin-bottom: 15px
}

.rating {
    float: left;
    color: #fff;
    line-height: 34px
}

.ratingStars {
    margin-left: 5px
}

.ratingStars i {
    margin: 0!important;
    color: #FFDF00
}

.rating {
    float: left;
    color: #fff;
    line-height: 43px
}

.aboutTour h2,.aboutTour .h2 {
    font-size: 16px;
    margin-top: 15px;
    margin-bottom: 10px;
    color: #335d99;
    clear: both
}

.aboutTour h3,.aboutTour .h3 {
    font-size: 15px;
    margin-top: 10px;
    margin-bottom: 10px;
    color: #335d99;
    clear: both
}

.aboutTour .relatedNews:after {
    content: "";
    width: 100%;
    height: 1px;
    border-top: 1px dotted;
    margin-top: 10px;
    display: inline-block;
    margin-right: 15px
}

.aboutTour .tourSights {
    margin: 0 px!important
}

.aboutTour .tourSights>div {
    padding: 5px 10px;
    position: relative
}

.aboutTour .tourSights>div:after {
    background: url(/Content/Images/ticketImg.png) no-repeat -41px -34px;
    width: 13px;
    height: 12px;
    display: block;
    position: absolute;
    right: 20px;
    top: 12px;
    content: ""
}

.aboutTour .tourSights>div>div {
    background: #f5f5f5;
    padding: 3px 30px 3px 5px;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden
}

.aboutTourImg img {
    width: 100%;
    height: 206px
}

.tourService {
    line-height: 24px
}

.aboutTour .aboutTitle {
    color: #335d99;
    font-size: 14px;
    margin: 5px 0
}

.aboutTour .tourPrice .aboutTitle {
    font-size: 18px
}

.aboutTour .tourPrice h2 {
    font-size: 16px
}

.aboutTour .ticketWeather.lBox {
    width: 234px;
    float: left;
    margin-right: 10px;
    margin-bottom: 10px;
    background-size: 100% 100%;
    padding-bottom: 15px
}

.tourrelatedLink {
    margin: 0 -10px
}

.tourrelatedLink>div {
    padding: 10px
}

.tourrelatedLink>div>div {
    padding: 15px;
    border: 1px solid #F6FAFE
}

.tourrelatedLink>div>div:hover {
    border: 1px solid #DEEBF6
}

.aboutTour .tourrelatedLink .aboutTitle {
    margin-top: 0
}

.aboutTour .tourrelatedLink li {
    position: relative;
    padding: 0 10px 5px 0;
    line-height: 20px;
    font-size: 12px;
    color: #151515;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.aboutTour .tourrelatedLink li a {
    color: #151515;
    transition: .4s;
    -webkit-transition: .4s;
    -ms-transition: .4s;
    -moz-transition: .4s;
    padding-right: 0
}

.aboutTour .tourrelatedLink li a:hover {
    color: #F7941D;
    padding-right: 5px
}

.aboutTour .tourrelatedLink li:after {
    content: "";
    background: url(/Content/Images/ticketImg.png) no-repeat -86px -36px;
    width: 7px;
    height: 6px;
    right: 0;
    top: 7px;
    position: absolute
}

.aboutTour .reltitle {
    color: #F7941D;
    clear: both;
    font-size: 18px
}

.partial_newsFeed {
    padding: 1px 0;
    clear: both
}

.ResultTour .HResultMainDetailsFirst {
    height: 41px
}

.ResultTour .HResultMainTitle {
    font-family: 'Yekan',Arial;
    font-weight: 500;
    direction: ltr;
    max-width: 100%;
    display: block;
    cursor: pointer;
    color: #36c;
    font-size: 14px;
    margin-right: 0
}

.ResultTour .HResultMainTitle .hoelNameEn {
    font-family: Arial;
    font-size: 13px;
    font-weight: 700
}

.ResultTour .HResultMainDetailsFirst .star {
    top: 0;
    height: 15px;
    float: left
}

.ResultTour .HResultMainDetailsFirst .star.s-1 {
    background-position: left 18px;
    background-image: url(/Content/New/images/Newstars.png);
    width: 78px!important;
    display: block;
    visibility: hidden
}

.ResultTour .HResultMainLocation .address {
    border-bottom: none
}

.ResultTour .HResultMainLocation {
    margin-bottom: 6px;
    margin-top: 3px
}

.HResultFilterResult {
    padding-right: 15px;
    font-size: 15px;
    margin-top: 6px;
    margin-bottom: 0
}

.PackageBodyMid .HResultFilterResult {
    padding-right: 0
}

.ResultTour .HResultQuickLookL {
    margin-top: 50px
}

.ResultTour .HResultMainDetails1 .resultflhorowFH:nth-child(2n) {
    margin-bottom: 0;
    padding-top: 5px;
    border-top: 1px dashed #fff;
    padding-bottom: 5px
}

.resultflhorowFH .FIcon {
    line-height: 1;
    position: absolute;
    left: -24px;
    top: 0;
    height: 47px;
    color: #425b75;
    text-align: center;
    width: 17px;
    display: block;
    padding-top: 15px;
    font-size: 11px
}

.ResultTour .hotel-loc .address {
    padding-left: 4px;
    position: relative;
    margin-right: 4px
}

.ResultTour .w100 .HResultDetailsTitle {
    max-width: 60%!important;
    margin-bottom: 0
}

.liNotFound .NotFoundContainer {
    clear: both;
    padding: 10px 18px;
    text-align: center
}

.liNotFound .NotFound {
    display: block;
    min-height: 100px;
    clear: both;
    padding-top: 30px;
    background: rgba(255,234,154,.73);
    margin: 20px auto;
    border-radius: 5px;
    border: 1px solid #ffdc73;
    font-size: 15px;
    padding-bottom: 30px;
    color: #164993
}

.liNotFound .NotFound>div {
    font-size: 21px
}

.notfoundContainer {
    min-height: 0
}

.not_found_c {
    margin-top: -25px;
    box-shadow: 0 0 5px #ccc;
    -webkit-box-shadow: 0 0 5px #ccc;
    -moz-box-shadow: 0 0 5px #ccc;
    padding: 80px 20px;
    text-align: center;
    background: #fff
}

.not_found_c h2 {
    color: #27107D
}

.not_found_c a {
    color: #27107D;
    font-size: 18px
}

.not_found_c a.btn {
    min-width: 100px;
    color: #fff;
    font-family: arial;
    line-height: 20px;
    height: 35px
}

.listView {
    color: #003181;
    line-height: 24px;
    height: 38px;
    border: 1px solid #d6d6d6;
    position: relative;
    top: -3px;
    background: #fff
}

.gridBox .listView {
    margin-bottom: 9px
}

.listView i {
    vertical-align: middle;
    padding-left: 5px;
    color: #003181;
    margin-right: 0!important
}

.listView span.active i,.listView span.active,.listView span:hover {
    color: #0283DF
}

.listView span {
    padding-left: 15px;
    cursor: pointer;
    position: relative;
    top: 5px
}

.listBox .HResultMainLocation {
    margin-bottom: 7px
}

.gridBox.HResultListItems .liResultItem {
    -webkit-animation-name: fadeInUpShort;
    animation-name: zoomIn
}

.gridBox.HResultListItems:after,.gridBox .HResultMainSelectRoom:after {
    clear: both;
    content: "";
    display: table
}

.gridBox.HResultListItems .liResultItem {
    width: 50%;
    float: right;
    padding: 5px 10px;
    position: relative;
    margin: 0;
    background: #fff
}

#col-md-6.col-md-12 .gridBox.HResultListItems .liResultItem {
    width: 33.33333333%
}

#col-md-6.col-md-6:not(.col-md-12) .gridBox.HResultListItems .liResultItem:nth-child(2n+1) {
    padding-right: 5px
}

#col-md-6.col-md-6:not(.col-md-12) .gridBox.HResultListItems .liResultItem:nth-child(2n) {
    padding-left: 5px;
    clear: right
}

.gridBox.HResultListItems .HotelBoxes {
    padding: 0;
    min-height: 100%
}

.gridBox.HResultListItems .HotelRight {
    position: static;
    width: 100%;
    padding-bottom: 10px
}

#col-md-6.col-md-12 .gridBox.HResultListItems .liResultItem:nth-child(3n+1) {
    padding-left: 10px;
    padding-right: 0
}

#col-md-6.col-md-12 .gridBox.HResultListItems .liResultItem:nth-child(3n+2) {
    padding-right: 10px;
    padding-left: 0;
    clear: right
}

.gridBox.HResultListItems .HResultGallery {
    float: none;
    width: 100%;
    margin: 0;
    box-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    border: none!important;
    padding: 0;
    position: relative
}

.gridBox.HResultListItems .HResultImage {
    min-width: 100%!important;
    height: 150px!important;
    object-fit: cover
}

.gridBox.HResultListItems .HResultImage_container {
    width: 100%;
    height: auto
}

.gridBox.HResultListItems .Hotel-Offer {
    background: none;
    left: 3px;
    z-index: 5;
    top: 0;
    text-align: left;
    position: absolute;
    left: 2px;
    right: auto
}

.gridBox.HResultListItems .Hotel-Offer span span.OffTxt {
    display: none
}

.gridBox.HResultListItems .Hotel-Offer:before {
    font-family: helvetica;
    color: #fff;
    font-weight: 700;
    content: "OFF";
    display: block;
    position: absolute;
    z-index: 1;
    left: 5px;
    top: 25px;
    font-size: 15px
}

.gridBox.HResultListItems .Hotel-Offer:after {
    content: "";
    display: block;
    width: 0;
    height: 0;
    border-top: 70px solid #EE595D;
    border-right: 100px solid transparent;
    position: absolute;
    z-index: -1;
    top: 0;
    left: -3px
}

.gridBox .HResultMainBestSell {
    z-index: 20;
    display: inline-block;
    right: 0;
    left: auto;
    position: absolute;
    top: -27px;
    width: 80px;
    background: #F7941D;
    height: 27px;
    padding: 2px 0;
    text-align: center;
    padding-top: 5px
}

.gridBox .HResultMainBestSell img {
    width: auto;
    margin: auto
}

.gridBox .Hotel-Offer span {
    padding-top: 4px;
    display: inline-block;
    color: #fff
}

.gridBox .liResultItem:hover {
    background-color: inherit;
    cursor: pointer
}

.gridBox .HResultMain {
    padding: 2px
}

.gridBox .HResultMainDetailsFirst {
    margin-top: 0
}

.gridBox .HResultMainActions {
    top: 0
}

.gridBox .HResultDsc {
    padding: 10px;
    background: rgba(238,238,238,.5)
}

.gridBox .HResultGallery:before {
    content: "";
    display: block;
    width: 0;
    height: 0;
    border-left: 7px solid transparent;
    border-right: 7px solid transparent;
    border-bottom: 7px solid #f7f7f7;
    position: absolute;
    z-index: 10;
    bottom: 0;
    left: 4px
}

.gridBox .HResultQuickLook.left,.FlightChange,.gridBox .FlightFareRule,.HResultQuickLook1 {
    border: 1px solid #fff;
    color: #85a3e0;
    font-size: 12px;
    font-weight: 700;
    padding: 3px 8px;
    text-align: center;
    -webkit-transition: background .3s linear 0;
    -moz-transition: background .3s linear 0;
    -o-transition: background .3s linear 0;
    transition: background .3s linear 0;
    min-width: 78px
}

.gridBox .liResultItem {
    border-bottom: 0
}

.gridBox .HResultMainPrice.HResultHelvetica.pri>span {
    text-align: right;
    float: none
}

.gridBox .HResultMainLike,.gridBox .HResultChangeRoom,.gridBox .HResultButton,.gridBox .HResultType,.gridBox .HResultQuickLook.left,.gridBox .HResultDetails {
    display: none!important
}

.gridBox .HResultMainTitle {
    max-width: 60%
}

.gridBox .HResultMainPrice.HResultHelvetica.pri {
    clear: both;
    height: 55px;
    float: none
}

.gridBox .HResultButton:hover,.gridBox .booking:hover,.gridBox .btn:hover {
    -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    -ms-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    box-shadow: 0 2px 3px 0 rgba(0,0,0,.15)!important;
    border: none!important;
    background: #07A86A;
    border: none
}

.gridBox .HResultMainSelectRoom {
    margin-bottom: 0
}

.BannerDiv {
    border: 1px solid #3a74b9;
    position: relative;
    line-height: 25px;
    transition: ease all .3s;
    background: #eff6ff;
    height: 56px;
    padding: 0 160px 0 115px
}

.BannerMain {
    padding: 14px 15px 0 0;
    color: #023f88
}

.FlightHotelTxt,.CityTxt {
    font-size: 18px;
    font-weight: 700
}

.BannerDiv.SingleBanner {
    padding-left: 170px
}

.BannerBtn {
    position: absolute;
    left: 13px;
    top: 12px;
    width: 97px;
    background: #023f88;
    color: #fff;
    text-align: center;
    height: 31px;
    line-height: 31px;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px
}

.BannerBtn i {
    position: relative;
    top: 1px;
    font-size: 11px
}

.SingleBannerIcon {
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 14px;
    color: #000;
    line-height: 30px
}

.SingleBannerIcon span {
    float: left;
    width: 30px;
    height: 30px;
    background: #000;
    text-align: center;
    line-height: 32px;
    color: #e0c36d;
    border-radius: 50%;
    margin-right: 10px;
    font-size: 12px
}

.SingleCityTxt {
    font-size: 17px;
    font-weight: 700
}

.SingleClickHere {
    color: #000;
    padding-right: 12px
}

.BannerRed .BannerDiv {
    border: 1px solid #900652;
    background: #fff1f9
}

.BannerRed .BannerDiv .BannerLogo,.BannerRed .BannerBtn {
    background: #900652
}

.BannerRed .BannerDiv .BannerMain {
    color: #900652
}

.VBox.gridBox li.BannerList {
    display: none
}

.BannerDiv .BannerLogo {
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    width: 155px;
    background: #023f88;
    border-radius: 28px 0 0 28px;
    -webkit-border-radius: 28px 0 0 28px;
    -moz-border-radius: 28px 0 0 28px
}

.BannerDiv .BannerLogo span {
    color: #fff;
    position: relative;
    top: 14px;
    right: 10px;
    font-size: 13px
}

.BannerLogo i {
    color: #fff;
    position: absolute;
    left: 5px;
    top: 10px;
    font-size: 33px
}

.BannerLogo svg {
    fill: #fff;
    width: 40px;
    position: absolute;
    left: 17px;
    top: 5px;
    height: 40px
}

.BookScore {
    padding: 13px 20px;
    background-color: #fff3e0;
    display: table;
    margin: 0 15px 0 0;
    width: calc(100% - 15px)
}

.BookScoreTxt p {
    margin: 0
}

.BookScoreTxt p span {
    color: #F99E00
}

.BookScoreTxt p + p {
    margin-top: 8px
}

.BookScoreTxt,.BookScoreIcon {
    display: table-cell;
    vertical-align: middle
}

.gauge {
    position: relative;
    width: 100px;
    height: 50px;
    zoom:101%;overflow: hidden
}

.gauge .gauge-range {
    width: 100px;
    height: 50px;
    display: block;
    z-index: 1;
    background-color: #ccc;
    border-radius: 100px 100px 0 0
}

.gauge .gauge-range:after {
    position: absolute;
    top: 6px;
    left: 6px;
    z-index: 1;
    width: 88px;
    height: 62px;
    content: '';
    background-color: #fff3e0;
    border-radius: 100px 100px 0 0;
    position: absolute;
    top: 6px;
    left: 6px;
    z-index: 1;
    width: 88px;
    height: 62px;
    background-color: #fff3e0;
    border-radius: 100px 100px 0 0
}

.gauge .gauge-level {
    position: absolute;
    z-index: 0;
    width: 100px;
    height: 50px;
    background-color: #F99E00;
    transform: rotate(90deg);
    transform-origin: top center;
    border-radius: 0 0 100px 100px
}

.gauge .gauge-label {
    position: absolute;
    top: 40%;
    z-index: 1;
    width: 100%;
    font-size: 20px;
    line-height: 15px;
    line-height: 1.5rem;
    color: #F99E00;
    text-align: center
}

.book-percent-text {
    display: block;
    font-size: 10px
}

.btnGreen {
    background: #6CCC1F!important;
    border: 1px solid #6CCC1F!important;
    color: #fff!important
}

.btnGreen:not(.btnloading):hover {
    border: 1px solid #55B905!important;
    background: #55B905!important
}

#col-md-6.col-md-12 .tourPart {
    width: auto
}

.colors {
    color: #feaa80
}

.navigator {
    padding: 5px 10px
}

.navigator a {
    color: #33639E
}

.navigator a:hover {
    color: #F7941D
}

.anotherDate .notificationDate {
    height: 20px;
    line-height: 20px;
    z-index: 1;
    background: #074a81;
    text-align: center;
    color: #fff;
    font-size: 13px
}

.anotherDate .notificationDate:before {
    width: 0;
    height: 0;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-top: 6px solid #074a81;
    display: block;
    content: "";
    position: absolute;
    bottom: -5px;
    left: 50%;
    margin-left: -3px
}

.loadingBox {
    color: #000;
    text-align: center;
    line-height: 30px;
    overflow: hidden
}

.customProgressBar {
    border-bottom: 0;
    margin: 0 -5px;
    height: auto
}

.noshadow {
    box-shadow: none!important;
    -webkit-box-shadow: none!important;
    -moz-box-shadow: none!important
}

.loadingBox .HResultProgressState {
    height: auto
}

.loadingBox .mainTitle {
    font-size: 22px;
    padding-top: 22px
}

.loadingBox .mainTitle span {
    color: #f47b20;
    font-style: italic;
    padding-right: 5px;
    font-size: 25px
}

.loadingBox ul {
    position: relative;
    min-height: 50px;
    padding-top: 20px;
    text-align: center;
    font-size: 14px;
    margin: auto
}

.loadingBox ul li {
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    margin-bottom: 10px;
    font-size: 11px;
    float: right!important;
    padding: 5px
}

.loadingBox ul li:after {
    clear: both;
    content: "";
    clear: both
}

.loadingBox ul li:nth-child(2n) {
    text-align: right;
    -webkit-animation-name: fadeInRightShort;
    animation-name: fadeInRightShort
}

.loadingBox ul li:nth-child(2n+1) {
    text-align: left;
    direction: rtl;
    -webkit-animation-name: fadeInLeftShort;
    animation-name: fadeInLeftShort
}

.loadingBox li:nth-child(2n) i {
    margin-left: 15px
}

.loadingBox li:nth-child(2n+1) i {
    margin-right: 15px;
    float: left
}

.loadingBox li i,.loadingBox li:hover i {
    background: url(/Content/Images/whyEli1.png) no-repeat
}

.loadingBox li i {
    width: 40px;
    height: 40px;
    background: url(/Content/Images/whyEli2.png) no-repeat;
    display: inline-block;
    vertical-align: middle
}

.loadingBox li i.icon1 {
    background-position: -99px -1px
}

.loadingBox li i.icon2 {
    background-position: -146px 0
}

.loadingBox li i.icon3 {
    background-position: 0 -1px
}

.loadingBox li i.icon4 {
    background-position: -50px 0
}

.loadingBox li i.icon5 {
    background-position: -54px -48px
}

.loadingBox li i.icon6 {
    background-position: -2px -48px
}

.loadingBox li i.icon7 {
    background-position: -150px -47px
}

.loadingBox li i.icon8 {
    background-position: -101px -48px
}

.loader {
    position: relative;
    padding: 100px 0 50px;
    width: 150px;
    margin: auto;
    background: url(/Content/Images/eliLoading.png) no-repeat center center;
    height: 150px
}

.loader .circle {
    position: absolute;
    width: 200px;
    height: 120px;
    opacity: 0;
    top: 50%;
    transform: rotate(225deg);
    animation-iteration-count: infinite;
    animation-name: orbit;
    animation-duration: 5.5s;
    left: 50%;
    margin-left: -100px;
    margin-top: -60px
}

.loader .circle:after {
    content: '';
    position: absolute;
    width: 5px;
    height: 5px;
    border-radius: 5px;
    background: #f47b20
}

.loader .circle:nth-child(2) {
    animation-delay: 240ms
}

.loader .circle:nth-child(3) {
    animation-delay: 480ms
}

.loader .circle:nth-child(4) {
    animation-delay: 720ms
}

.loader .circle:nth-child(5) {
    animation-delay: 960ms
}

.baggage-note {
    padding: 7px;
    max-height: 75px;
    border-radius: 2px;
    overflow: hidden;
    text-align: justify;
    -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    -ms-box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    box-shadow: 0 2px 3px 0 rgba(0,0,0,.15);
    color: #636363;
    border: 1px solid #d2cbcb;
    direction: ltr;
    background: #d8d1d1;
    font-size: 13px;
    line-height: 16px
}

.baggage-note-icon:before {
    margin-left: 0
}

.baggage-note-icon {
    font-size: 14px;
    margin-right: 4px
}

@keyframes orbit {
    0% {
        transform: rotate(225deg);
        opacity: 1;
        animation-timing-function: ease-out
    }

    7% {
        transform: rotate(345deg);
        animation-timing-function: linear
    }

    30% {
        transform: rotate(455deg);
        animation-timing-function: ease-in-out
    }

    39% {
        transform: rotate(690deg);
        animation-timing-function: linear
    }

    70% {
        transform: rotate(815deg);
        opacity: 1;
        animation-timing-function: ease-out
    }

    75% {
        transform: rotate(945deg);
        animation-timing-function: ease-out
    }

    76% {
        transform: rotate(945deg);
        opacity: 0
    }

    100% {
        transform: rotate(945deg);
        opacity: 0
    }
}

@-webkit-keyframes orbit {
    0% {
        -webkit-transform: rotate(225deg);
        opacity: 1;
        -webkit-animation-timing-function: ease-out
    }

    7% {
        -webkit-transform: rotate(345deg);
        -webkit-animation-timing-function: linear
    }

    30% {
        -webkit-transform: rotate(455deg);
        -webkit-animation-timing-function: ease-in-out
    }

    39% {
        -webkit-transform: rotate(690deg);
        -webkit-animation-timing-function: linear
    }

    70% {
        -webkit-transform: rotate(815deg);
        opacity: 1;
        -webkit-animation-timing-function: ease-out
    }

    75% {
        -webkit-transform: rotate(945deg);
        -webkit-animation-timing-function: ease-out
    }

    76% {
        -webkit-transform: rotate(945deg);
        opacity: 0
    }

    100% {
        -webkit-transform: rotate(945deg);
        opacity: 0
    }
}

@-moz-keyframes orbit {
    0% {
        -moz-transform: rotate(225deg);
        opacity: 1;
        -moz-animation-timing-function: ease-out
    }

    7% {
        -moz-transform: rotate(345deg);
        -moz-animation-timing-function: linear
    }

    30% {
        -moz-transform: rotate(455deg);
        -moz-animation-timing-function: ease-in-out
    }

    39% {
        -moz-transform: rotate(690deg);
        -moz-animation-timing-function: linear
    }

    70% {
        -moz-transform: rotate(815deg);
        opacity: 1;
        -moz-animation-timing-function: ease-out
    }

    75% {
        -moz-transform: rotate(945deg);
        -moz-animation-timing-function: ease-out
    }

    76% {
        -moz-transform: rotate(945deg);
        opacity: 0
    }

    100% {
        -moz-transform: rotate(945deg);
        opacity: 0
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

.animated.flipOutX,.animated.flipOutY,.animated.bounceIn,.animated.bounceOut {
    -webkit-animation-duration: .75s;
    animation-duration: .75s
}

@-webkit-keyframes bounce {
    from,20%,53%,80%,to {
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
    from,20%,53%,80%,to {
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

@keyframes fadeInRight {
    from {
        opacity: 0;
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

@-webkit-keyframes fadeInRight {
    from {
        opacity: 0;
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

.fadeInRight {
    -webkit-animation-name: fadeInRight;
    animation-name: fadeInRight
}

@keyframes fadeOut {
    from {
        opacity: 1
    }

    to {
        opacity: 0
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

.fadeOut {
    -webkit-animation-name: fadeOut;
    animation-name: fadeOut
}

@-webkit-keyframes fadeInLeft {
    from {
        opacity: 0;
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
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
        -webkit-transform: none;
        transform: none
    }
}

.fadeInLeft {
    -webkit-animation-name: fadeInLeft;
    animation-name: fadeInLeft
}

.animated {
    -webkit-animation-duration: .8s;
    animation-duration: .8s;
    -moz-animation-duration: .8s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both
}

.Normalanimated {
    -webkit-animation-duration: 2s;
    animation-duration: 2s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both
}

.Midanimated {
    -webkit-animation-duration: 1.3s;
    animation-duration: 1.3s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both
}

.animatedFast {
    -webkit-animation-duration: .3s;
    animation-duration: .3s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both
}

.delay0 {
    animation-delay: .5s!important;
    -webkit-animation-delay: .5s!important
}

.delay1 {
    animation-delay: 1s!important;
    -webkit-animation-delay: 1s!important
}

.delay1>i {
    animation-delay: 1.3s!important;
    -webkit-animation-delay: 1.3s!important
}

.delay2 {
    animation-delay: 2s!important;
    -webkit-animation-delay: 2s!important
}

.delay2>i {
    animation-delay: 2.3s!important;
    -webkit-animation-delay: 2.3s!important
}

.delay3 {
    animation-delay: 3s!important;
    -webkit-animation-delay: 3s!important
}

.delay3>i {
    animation-delay: 3.3s!important;
    -webkit-animation-delay: 3.3s!important
}

.delay4 {
    animation-delay: 4s!important;
    -webkit-animation-delay: 4s
}

.delay4>i {
    animation-delay: 4.3s!important;
    -webkit-animation-delay: 4.3s!important
}

.delay5 {
    animation-delay: 5s!important;
    -webkit-animation-delay: 5s!important
}

.delay5>i {
    animation-delay: 5.3s!important;
    -webkit-animation-delay: 5.3s!important
}

.delay6 {
    animation-delay: 6s!important;
    -webkit-animation-delay: 6s!important
}

.delay6>i {
    animation-delay: 6.3s!important;
    -webkit-animation-delay: 6.3s!important
}

.delay7 {
    animation-delay: 7s!important;
    -webkit-animation-delay: 7s!important
}

.delay7>i {
    animation-delay: 7.3s!important;
    -webkit-animation-delay: 7.3s!important
}

.delay8 {
    animation-delay: 8s!important;
    -webkit-animation-delay: 8s!important
}

.delay8>i {
    animation-delay: 8.3s!important;
    -webkit-animation-delay: 8.3s!important
}

@keyframes gelatine {
    from,to {
        -webkit-transform: scale(1,1);
        transform: scale(1,1)
    }

    25% {
        -webkit-transform: scale(.9,1.1);
        transform: scale(.9,1.1)
    }

    50% {
        -webkit-transform: scale(1.1,.9);
        transform: scale(1.1,.9)
    }

    75% {
        -webkit-transform: scale(.95,1.05);
        transform: scale(.95,1.05)
    }

    from,to {
        -webkit-transform: scale(1,1);
        transform: scale(1,1)
    }

    25% {
        -webkit-transform: scale(.9,1.1);
        transform: scale(.9,1.1)
    }

    50% {
        -webkit-transform: scale(1.1,.9);
        transform: scale(1.1,.9)
    }

    75% {
        -webkit-transform: scale(.95,1.05);
        transform: scale(.95,1.05)
    }
}

@-webkit-keyframes gelatine {
    from,to {
        -webkit-transform: scale(1,1);
        transform: scale(1,1)
    }

    25% {
        -webkit-transform: scale(.9,1.1);
        transform: scale(.9,1.1)
    }

    50% {
        -webkit-transform: scale(1.1,.9);
        transform: scale(1.1,.9)
    }

    75% {
        -webkit-transform: scale(.95,1.05);
        transform: scale(.95,1.05)
    }

    from,to {
        -webkit-transform: scale(1,1);
        transform: scale(1,1)
    }

    25% {
        -webkit-transform: scale(.9,1.1);
        transform: scale(.9,1.1)
    }

    50% {
        -webkit-transform: scale(1.1,.9);
        transform: scale(1.1,.9)
    }

    75% {
        -webkit-transform: scale(.95,1.05);
        transform: scale(.95,1.05)
    }
}

@-webkit-keyframes zoomIn {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(.3,.3,.3);
        transform: scale3d(.3,.3,.3)
    }

    50% {
        opacity: 1
    }
}

@-moz-keyframes zoomIn {
    0% {
        opacity: 0;
        -moz-transform: scale3d(.3,.3,.3)
    }

    50% {
        opacity: 1
    }
}

@keyframes zoomIn {
    0% {
        opacity: 0;
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

@keyframes fadeIn {
    0% {
        opacity: 0
    }

    100% {
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

.fadeIn {
    -webkit-animation-name: fadeIn;
    -moz-animation-name: fadeIn;
    animation-name: fadeIn
}

@-moz-keyframes blinkeColor {
    0% {
        opacity: 1
    }

    50% {
        opacity: .5
    }

    100% {
        opacity: 1
    }
}

@-webkit-keyframes blinkeColor {
    0% {
        opacity: 1
    }

    50% {
        opacity: .5
    }

    100% {
        opacity: 1
    }
}

@keyframes blinkeColor {
    0% {
        opacity: 1
    }

    50% {
        opacity: .5
    }

    100% {
        opacity: 1
    }
}

.blinkeColor {
    -webkit-animation-name: blinkeColor;
    animation-name: blinkeColor;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
    visibility: visible;
    animation-iteration-count: infinite;
    -webkit-animation-iteration-count: infinite;
    -ms-animation-iteration-count: infinite;
    -o-animation-iteration-count: infinite;
    -moz-animation-iteration-count: infinite;
    -ms-animation-timing-function: linear;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear
}

@-webkit-keyframes fadeInRightShort {
    0% {
        opacity: 0;
        -webkit-transform: translateX(100px)
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0)
    }
}

@-moz-keyframes fadeInRightShort {
    0% {
        opacity: 0;
        -moz-transform: translateX(100px)
    }

    100% {
        opacity: 1;
        -moz-transform: translateX(0)
    }
}

@keyframes fadeInRightShort {
    0% {
        opacity: 0;
        transform: translateX(100px)
    }

    100% {
        opacity: 1;
        transform: translateX(0)
    }
}

.fadeInRightShort {
    opacity: 0;
    -webkit-transform: translateX(100px);
    -moz-transform: translateX(100px);
    transform: translateX(100px)
}

.fadeInRightShort.go {
    -webkit-animation-name: fadeInRightShort;
    -moz-animation-name: fadeInRightShort;
    animation-name: fadeInRightShort
}

@-webkit-keyframes fadeInLeftShort {
    0% {
        opacity: 0;
        -webkit-transform: translateX(-100px)
    }

    100% {
        opacity: 1;
        -webkit-transform: translateX(0)
    }
}

@-moz-keyframes fadeInLeftShort {
    0% {
        opacity: 0;
        -moz-transform: translateX(-100px)
    }

    100% {
        opacity: 1;
        -moz-transform: translateX(0)
    }
}

@keyframes fadeInLeftShort {
    0% {
        opacity: 0;
        transform: translateX(-100px)
    }

    100% {
        opacity: 1;
        transform: translateX(0)
    }
}

.fadeInLeftShort {
    opacity: 0;
    -webkit-transform: translateX(-100px);
    -moz-transform: translateX(-100px);
    transform: translateX(-100px)
}

.fadeInLeftShort.go {
    -webkit-animation-name: fadeInLeftShort;
    -moz-animation-name: fadeInLeftShort;
    animation-name: fadeInLeftShort
}

@-webkit-keyframes fadeInUpShort {
    0% {
        opacity: 0;
        -webkit-transform: translateY(20px)
    }

    100% {
        opacity: 1;
        -webkit-transform: translateY(0)
    }
}

@-moz-keyframes fadeInUpShort {
    0% {
        opacity: 0;
        -moz-transform: translateY(20px)
    }

    100% {
        opacity: 1;
        -moz-transform: translateY(0)
    }
}

@keyframes fadeInUpShort {
    0% {
        opacity: 0;
        transform: translateY(20px)
    }

    100% {
        opacity: 1;
        transform: translateY(0)
    }
}

.fadeInUpShort.go {
    -webkit-animation-name: fadeInUpShort;
    -moz-animation-name: fadeInUpShort;
    animation-name: fadeInUpShort
}

@-webkit-keyframes fadeInDownShort {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-20px)
    }

    100% {
        opacity: 1;
        -webkit-transform: translateY(0)
    }
}

@-moz-keyframes fadeInDownShort {
    0% {
        opacity: 0;
        -moz-transform: translateY(-20px)
    }

    100% {
        opacity: 1;
        -moz-transform: translateY(0)
    }
}

@keyframes fadeInDownShort {
    0% {
        opacity: 0;
        transform: translateY(-20px)
    }

    100% {
        opacity: 1;
        transform: translateY(0)
    }
}

.fadeInDownShort.go {
    -webkit-animation-name: fadeInDownShort;
    -moz-animation-name: fadeInDownShort;
    animation-name: fadeInDownShort
}

@keyframes bounceIn {
    from,20%,40%,60%,80%,to {
        animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    0% {
        opacity: 0;
        transform: scale3d(.3,.3,.3)
    }

    20% {
        transform: scale3d(1.1,1.1,1.1)
    }

    40% {
        transform: scale3d(.9,.9,.9)
    }

    60% {
        opacity: 1;
        transform: scale3d(1.03,1.03,1.03)
    }

    80% {
        transform: scale3d(.97,.97,.97)
    }

    to {
        opacity: 1;
        transform: scale3d(1,1,1)
    }
}

@-webkit-keyframes bounceIn {
    from,20%,40%,60%,80%,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    0% {
        opacity: 0;
        -webkit-transform: scale3d(.3,.3,.3)
    }

    20% {
        -webkit-transform: scale3d(1.1,1.1,1.1)
    }

    40% {
        -webkit-transform: scale3d(.9,.9,.9)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(1.03,1.03,1.03)
    }

    80% {
        -webkit-transform: scale3d(.97,.97,.97)
    }

    to {
        opacity: 1;
        -webkit-transform: scale3d(1,1,1)
    }
}

@-moz-keyframes bounceIn {
    from,20%,40%,60%,80%,to {
        -moz-animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    0% {
        opacity: 0;
        -moz-transform: scale3d(.3,.3,.3)
    }

    20% {
        -moz-transform: scale3d(1.1,1.1,1.1)
    }

    40% {
        -moz-transform: scale3d(.9,.9,.9)
    }

    60% {
        opacity: 1;
        -moz-transform: scale3d(1.03,1.03,1.03)
    }

    80% {
        -moz-transform: scale3d(.97,.97,.97)
    }

    to {
        opacity: 1;
        -moz-transform: scale3d(1,1,1)
    }
}

.bounceIn {
    -webkit-animation-name: bounceIn;
    animation-name: bounceIn
}

@-webkit-keyframes bounce {
    from,20%,53%,80%,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        -webkit-transform: translate3d(0,0,0)
    }

    40%,43% {
        -webkit-animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        -webkit-transform: translate3d(0,-30px,0)
    }

    70% {
        -webkit-animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        -webkit-transform: translate3d(0,-15px,0)
    }

    90% {
        -webkit-transform: translate3d(0,-4px,0)
    }
}

@-moz-keyframes bounce {
    from,20%,53%,80%,to {
        -moz-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        -moz-transform: translate3d(0,0,0)
    }

    40%,43% {
        -moz-animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        -moz-transform: translate3d(0,-30px,0)
    }

    70% {
        -moz-animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        -moz-transform: translate3d(0,-15px,0)
    }

    90% {
        -moz-transform: translate3d(0,-4px,0)
    }
}

@keyframes bounce {
    from,20%,53%,80%,to {
        animation-timing-function: cubic-bezier(.215,.61,.355,1);
        transform: translate3d(0,0,0)
    }

    40%,43% {
        animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        transform: translate3d(0,-30px,0)
    }

    70% {
        animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        transform: translate3d(0,-15px,0)
    }

    90% {
        transform: translate3d(0,-4px,0)
    }
}

.bounce {
    -webkit-animation-name: bounce;
    -moz-animation-name: bounce;
    animation-name: bounce;
    -webkit-transform-origin: center bottom;
    -moz-transform-origin: center bottom;
    transform-origin: center bottom
}

@-webkit-keyframes bounceCustom {
    from {
        opacity: 0;
        -webkit-animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        -webkit-transform: translate3d(0,-30px,0)
    }

    10%,26%,40%,50% {
        opacity: 1;
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        -webkit-transform: translate3d(0,0,0)
    }

    20%,23% {
        -webkit-animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        -webkit-transform: translate3d(0,-30px,0)
    }

    35% {
        -webkit-animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        -webkit-transform: translate3d(0,-15px,0)
    }

    45% {
        -webkit-transform: translate3d(0,-4px,0)
    }

    55% {
        -webkit-transform: scale3d(1 1 1)
    }

    75% {
        -webkit-transform: scale3d(1.05,1.05,1.05)
    }

    to {
        -webkit-transform: scale3d(1 1 1)
    }
}

@-moz-keyframes bounceCustom {
    from {
        opacity: 0;
        -moz-animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        -moz-transform: translate3d(0,-30px,0)
    }

    10%,26%,40%,50% {
        opacity: 1;
        -moz-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        -moz-transform: translate3d(0,0,0)
    }

    20%,23% {
        -moz-animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        -moz-transform: translate3d(0,-30px,0)
    }

    35% {
        -moz-animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        -moz-transform: translate3d(0,-15px,0)
    }

    45% {
        -moz-transform: translate3d(0,-4px,0)
    }

    55% {
        -moz-transform: scale3d(1 1 1)
    }

    75% {
        -moz-transform: scale3d(1.05,1.05,1.05)
    }

    to {
        -moz-transform: scale3d(1 1 1)
    }
}

@keyframes bounceCustom {
    from {
        opacity: 0;
        animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        transform: translate3d(0,-30px,0)
    }

    10%,26%,40%,50% {
        opacity: 1;
        animation-timing-function: cubic-bezier(.215,.61,.355,1);
        transform: translate3d(0,0,0)
    }

    20%,23% {
        animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        transform: translate3d(0,-30px,0)
    }

    35% {
        animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        transform: translate3d(0,-15px,0)
    }

    45% {
        transform: translate3d(0,-4px,0)
    }

    51% {
        transform: scale3d(1,1,1)
    }

    63% {
        transform: scale3d(1.05,1.05,1.05)
    }

    73% {
        transform: scale3d(1,1,1)
    }

    84% {
        transform: scale3d(1.05,1.05,1.05)
    }

    to {
        transform: scale3d(1,1,1)
    }
}

.bounceCustom {
    -webkit-animation-name: bounceCustom;
    -moz-animation-name: bounceCustom;
    animation-name: bounceCustom;
    -webkit-transform-origin: center bottom;
    -moz-transform-origin: center bottom;
    transform-origin: center bottom
}

@-webkit-keyframes flash {
    from,50%,to {
        opacity: 1
    }

    25%,75% {
        opacity: 0
    }
}

@-moz-keyframes flash {
    from,50%,to {
        opacity: 1
    }

    25%,75% {
        opacity: 0
    }
}

@keyframes flash {
    from,50%,to {
        opacity: 1
    }

    25%,75% {
        opacity: 0
    }
}

.flash {
    -webkit-animation-name: flash;
    -moz-animation-name: flash;
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

@-moz-keyframes pulse {
    from {
        -moz-transform: scale3d(1,1,1)
    }

    50% {
        -moz-transform: scale3d(1.05,1.05,1.05)
    }

    to {
        -moz-transform: scale3d(1,1,1)
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
    -moz-animation-name: pulse;
    animation-name: pulse
}

@-moz-keyframes swing {
    20% {
        -moz-transform: rotate3d(0,0,1,15deg);
        transform: rotate3d(0,0,1,15deg)
    }

    40% {
        -moz-transform: rotate3d(0,0,1,-10deg);
        transform: rotate3d(0,0,1,-10deg)
    }

    60% {
        -moz-transform: rotate3d(0,0,1,5deg);
        transform: rotate3d(0,0,1,5deg)
    }

    80% {
        -moz-transform: rotate3d(0,0,1,-5deg);
        transform: rotate3d(0,0,1,-5deg)
    }

    to {
        -moz-transform: rotate3d(0,0,1,0deg);
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
    -moz-transform-origin: top center;
    transform-origin: top center;
    -webkit-animation-name: swing;
    -moz-animation-name: swing;
    animation-name: swing
}

.width40 {
    width: 40%
}

.width20 {
    width: 20%
}

.loading-ltr {
    direction: ltr
}

.loading-rtl {
    direction: rtl
}

.page-clouds-1,.page-clouds-2,.page-clouds-3 {
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    height: 100%;
    width: 300%;
    background-repeat: repeat;
    transform: translate3d(0,0,0);
    -webkit-transform: translate3d(0,0,0);
    -moz-transform: translate3d(0,0,0);
    -ms-transform: translate3d(0,0,0);
    -o-transform: translate3d(0,0,0)
}

.page-clouds-1 {
    background-position: center;
    animation: cloud_left_to_right 180s linear infinite;
    -webkit-animation: cloud_left_to_right 180s linear infinite;
    -moz-animation: cloud_left_to_right 180s linear infinite;
    -ms-animation: cloud_left_to_right 180s linear infinite;
    -o-animation: cloud_left_to_right 180s linear infinite;
    background-image: url(/Content/Images/bg_404_Cloud-1.png);
    z-index: 1
}

.page-clouds-2 {
    z-index: 3;
    background-position: top;
    background-image: url(/Content/Images/bg_404_Cloud-2.png);
    animation: cloud_right_to_left 250s linear infinite;
    -webkit-animation: cloud_right_to_left 250s linear infinite;
    -moz-animation: cloud_right_to_left 250s linear infinite;
    -ms-animation: cloud_right_to_left 250s linear infinite;
    -o-animation: cloud_right_to_left 250s linear infinite
}

.page-clouds-3 {
    background-position: center;
    animation: cloud_left_to_right 400s linear infinite;
    -webkit-animation: cloud_left_to_right 400s linear infinite;
    -moz-animation: cloud_left_to_right 400s linear infinite;
    -ms-animation: cloud_left_to_right 400s linear infinite;
    -o-animation: cloud_left_to_right 400s linear infinite;
    background-image: url(/Content/Images/bg_404_Cloud-3.png);
    z-index: 3
}

@keyframes cloud_left_to_right {
    0% {
        left: -200%
    }

    100% {
        left: 0
    }
}

@-webkit-keyframes cloud_left_to_right {
    0% {
        left: -200%
    }

    100% {
        left: 0
    }
}

@-moz-keyframes cloud_left_to_right {
    0% {
        left: -200%
    }

    100% {
        left: 0
    }
}

@keyframes cloud_right_to_left {
    0% {
        left: 0
    }

    100% {
        left: -200%
    }
}

@-webkit-keyframes cloud_right_to_left {
    0% {
        left: 0
    }

    100% {
        left: -200%
    }
}

@-moz-keyframes cloud_right_to_left {
    0% {
        left: 0
    }

    100% {
        left: -200%
    }
}

.hotelBg.flightHotelBg .loading-content {
    width: 567px;
    margin-left: -283px
}

.hotelBg.flightHotelBg .loading-content p>span {
    width: 420px
}

.hotelBg .loading-content {
    width: 500px;
    margin-left: -250px
}

.hotelBg .loading-content p>span {
    width: 348px;
    color: #F47B20
}

.modal-body .policyrule {
    max-height: 500px;
    overflow-y: auto;
    margin: 0 -15px;
    padding: 0 15px;
    position: relative;
    width: auto;
    min-height: 150px
}

.modal-body #preloader {
    min-height: 150px
}

.translate-btn>i {
    opacity: 0;
    position: relative;
    right: -5px;
    transition: .3s all linear;
    vertical-align: middle;
    padding-right: 3px
}

.translate-btn:hover>i {
    opacity: 1;
    right: 0
}

.translate-btn {
    padding-right: 33px
}

.modal-body #preloader {
    background-size: 50% auto;
    height: 116px
}

.translatePolicy,.translateFareRule {
    float: right
}

.HResultListItemsTour .HResultHelveticaTour {
    background: #fff;
    border: 1px solid #ddd;
    margin-bottom: 15px;
    transition: ease all .3s
}

.ResultXfer i {
    color: #999;
    font-size: 10px
}

.HResultListItemsTour .HResultHelveticaTour:hover {
    -webkit-box-shadow: 2px 4px 6px 1px rgba(0,0,0,.2);
    -moz-box-shadow: 2px 4px 6px 1px rgba(0,0,0,.2);
    box-shadow: 2px 4px 6px 1px rgba(0,0,0,.2)
}

.SearchPackrightKh {
    background-color: #f7f7f7;
    padding: 10px 10px 75px;
    width: 200px;
    box-shadow: 1px -1px 2px 0 #ddd inset;
    -moz-box-shadow: 0 0 1px #c5c5c5 inset;
    position: absolute;
    top: 0;
    right: 0;
    text-align: right;
    min-height: 100%
}

.SearchPackrightKh>strong {
    display: block;
    background: #fff;
    padding: 5px;
    text-align: center;
    color: #0283DF;
    margin: 0 0 13px;
    font-weight: 400;
    border: 1px solid #ebebeb
}

.SearchPackrightKh li {
    display: block;
    width: 100%;
    clear: both;
    line-height: 22px;
    position: relative;
    margin-bottom: 5px
}

.SearchPackrightKh i {
    color: #F60;
    font-style: normal;
    position: absolute;
    right: 0;
    top: 0;
    font-size: 9px
}

.EachHotel .Hotel-Offer {
    display: block!important
}

.SearchPackrightKh ul li>span {
    font-size: 12px;
    padding-right: 17px;
    display: inline-block
}

.divReseverPack {
    position: absolute;
    width: 88%;
    bottom: 6px
}

.divButTour {
    text-align: center;
    margin-top: 20PX
}

.width100 {
    width: 100%!important
}

.mb-5 {
    margin-bottom: 5px
}

.MainInfo {
    position: relative;
    padding: 0 200px 0 0
}

.EachHotel {
    border-bottom: 1px solid #ddd;
    position: relative;
    padding-left: 195px
}

.EachHotel .HResultImage {
    height: 182px
}

.EachHotel .HResultImage_container {
    width: 182px;
    height: 182px
}

.packagehoteltextslider {
    direction: ltr;
    text-align: left
}

.HResultMainDetailsFirst .star {
    position: relative;
    top: 2px;
    margin-right: 10px
}

.HResultMainNew {
    direction: ltr;
    width: 46px;
    text-align: center;
    background: red;
    color: #fff;
    padding: 2px;
    line-height: 15px;
    height: 16px;
    border-radius: 2px;
    z-index: 30;
    margin-top: 2px
}

.HResultImage_container {
    overflow: hidden;
    height: 192px;
    width: 192px
}

.HResultImage_container>img,.HResultGallery .HResultImage_container>img {
    -webkit-transition: 3s transform;
    -moz-transition: 3s transform;
    -o-transition: 3s transform;
    -ms-transition: 3s transform;
    transition: 3s transform
}

.nemeAirporta,.nemeAirporta2 {
    color: #757575;
    font-size: 10px;
    display: block
}

.Packagetextlite {
    display: inline-block;
    direction: rtl;
    text-align: left
}

.Ptime {
    font-size: 18px;
    color: #023f88;
    display: block
}

.PCity {
    display: inline-block;
    font-size: 12px;
    color: #000
}

.PDate {
    display: inline-block;
    direction: rtl;
    font-size: 11px;
    color: #717171
}

.PRaftTxt svg {
    width: 28px;
    display: block;
    fill: #717171
}

.PRaftTxt span {
    font-family: Yekan;
    font-size: 13px;
    color: #717171
}

.LegsContainer {
    display: block;
    position: relative;
    top: -10px;
    float: right;
    width: calc(100% - 75px);
    margin: 0 auto
}

.SegmentLine {
    display: block;
    position: relative
}

.SegmentStart {
    display: block;
    position: absolute;
    left: 0;
    top: -3px;
    background: #ccc;
    z-index: 1;
    color: #000;
    width: 8px;
    height: 8px;
    border-radius: 50%
}

.LegsPoints {
    display: block
}

.SegmentEnd {
    display: block;
    position: absolute;
    right: 0;
    top: -3px;
    background: #ccc;
    z-index: 1;
    color: #000;
    width: 8px;
    height: 8px;
    border-radius: 50%
}

.SegmentLines {
    display: block;
    height: 2px;
    width: 100%;
    background: #ccc;
    position: absolute;
    right: 0;
    left: 0;
    top: 0
}

.PStop {
    display: inline-block;
    position: relative;
    top: 21px;
    z-index: 2;
    font-size: 12px;
    direction: ltr
}

.PStop i {
    font-size: 9px
}

.PflightNum {
    display: block;
    position: absolute;
    top: 0;
    z-index: 2;
    right: 0;
    font-size: 12px;
    left: 0;
    color: #999;
    font-family: Helvetica
}

.PStop span {
    font-size: 11px
}

.StartPoint {
    display: block;
    float: right;
    width: 35px
}

.PFlightClass {
    font-size: 10px;
    display: block
}

.EndPoint {
    display: block;
    float: right;
    width: 35px
}

img.DirImg {
    display: block;
    transform: rotate(180deg);
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg)
}

.BusinessClass {
    position: absolute;
    top: 90px;
    right: 15px;
    width: 100px
}

.PackageTableprice .RoomHeader {
    color: #000;
    font-weight: 700;
    margin-bottom: 0;
    text-align: center;
    font-size: 13px;
    margin-top: 10px;
    display: block;
    line-height: 1.1;
    background: #f7f7f7;
    border: 1px solid #ddd;
    padding: 7px 0;
    border-bottom: 0
}

.PackageTableprice {
    margin: 15px 0 0;
    width: 100%;
    padding: 0 10px 10px
}

.packageflightbutton td {
    padding: 10px 0;
    vertical-align: middle;
    float: none
}

.PackageTableprice table.room-table th,.PackageTableprice table.room-table td {
    border: 1px solid #ddd;
    padding: 5px;
    color: #00338e
}

.PackageTableprice table.room-table th {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    color: #00338e;
    background: #fff;
    font-weight: 700;
    padding: 5px;
    text-align: center;
    white-space: nowrap
}

.PackageTableprice .room-table .col-roomname {
    text-align: right;
    width: 30%
}

.PackHotelRoomSelected .extra {
    font-weight: 400;
    display: block
}

.PackageTableprice table.room-table td {
    line-height: 26px;
    font-size: 11px;
    word-spacing: -1px
}

.PackageTableprice .col-roompricedetail {
    text-align: center;
    width: 13%
}

table td[class*=col-],table th[class*=col-] {
    position: static;
    display: table-cell;
    float: none
}

.PackageTableprice .col-roomprice {
    font-weight: 700;
    font-size: 12px!important;
    text-align: center;
    color: #ff5a00!important
}

.PackHotelRoomSelected .col-roomprice {
    background: #ffeee5 none repeat scroll 0 0
}

.PackageTableprice p {
    margin: 0
}

.PackageTableprice .order-extra .strong {
    color: #ff5a00
}

.insuranceBox {
    margin-right: -5px;
    margin-left: -5px;
    max-height: 700px;
    overflow: auto
}

.tblRaftAndBargasht,.tblRaftAndBargasht,.room-table {
    table-layout: fixed
}

.tblRaftAndBargasht td,.tblRaftAndBargasht td {
    width: 20%
}

.HResultPriceDesc.linethrough {
    color: #555
}

.tblRaftAndBargasht i {
    font-size: 19px
}

.loading_restItems .progress-bar-box {
    height: 15px;
    border-radius: 2px;
    background: #f5f5f5
}

.loading_restItems .progress-bar-box .inner-box-progress {
    width: 55%;
    height: 15px;
    background-image: linear-gradient(to right,#0087f5,#50ABF5);
    background-size: 100% 100%;
    transition: width 100ms;
    position: relative;
    border-radius: 2px
}

.loading_restItems {
    padding: 15px 10px;
    text-align: center;
    font-size: 12px;
    border-left: 1px solid #f5f5f5
}

.loading_restItems .loading_Title {
    margin-bottom: 14px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.sorting_option {
    float: right;
    text-align: left;
    background: #fff;
    padding: 5px 10px
}

.listView.SingleView .sorting_option {
    float: none;
    text-align: right;
    border-left: 0
}

.packageflightbutton {
    text-align: center
}

.col-md-9.col-md-9-80 {
    padding-right: 10px;
    padding-left: 8px
}

.sorting_option {
    font-weight: 400;
    padding-right: 7px
}

.sorting_option select {
    display: inline-block;
    width: auto;
    min-width: 150px;
    border: 0;
    height: 24px;
    color: gray;
    font-size: 12px;
    font-weight: 400;
    padding: 0 5px;
    vertical-align: middle;
    border-radius: 0;
    box-shadow: none;
    background: #fff;
    position: relative;
    text-indent: 10px
}

.btn-group.box3sort .btn {
    border-radius: 0!important;
    border-top: 0;
    border-bottom: 0;
    height: 36px;
    border-left: 0
}

.foundflt {
    margin-bottom: 19px;
    background: #fff3e0;
    height: 39px;
    margin-top: -5px;
    padding: 8px 22px 0
}

.sorting_option.hasSortByTxt {
    position: relative;
    padding-right: 150px
}

.SortByTxt {
    position: absolute;
    right: 0;
    background: #f7f7f7;
    top: 0;
    bottom: -2px;
    width: 150px;
    text-align: center;
    padding-top: 5px;
    color: #333
}

.reward {
    background: url(/Content/Images/zigzag.png) repeat-x right 0;
    display: block;
    min-height: 80px;
    width: 100%;
    padding-top: 2px;
    background-color: #eee;
    position: relative;
    z-index: 1;
    margin: 10px 0 22px;
    padding-bottom: 0
}

.reward>span {
    display: block;
    background: #EEE;
    position: relative;
    margin: 10px 0;
    padding: 10px 10px 0
}

.reward .img_container {
    vertical-align: middle;
    padding-left: 10px;
    display: inline-block;
    width: 29%
}

.reward:before {
    content: "";
    display: block;
    border-bottom: 1px solid #DDD;
    position: absolute;
    bottom: -15px;
    z-index: 2;
    height: 1px;
    width: 100%;
    right: 0
}

.reward:after {
    content: "";
    display: block;
    background: url(/Content/Images/zigzag.png) repeat-x right 0;
    height: 12px;
    margin-top: 0;
    position: relative;
    z-index: 1;
    transform: rotate(180deg);
    background-color: #EEE
}

.reward .text_container {
    width: 70%;
    display: inline-block;
    vertical-align: -10px
}

tbody .reward {
    margin-top: -22px;
    direction: rtl;
    text-align: right
}

.fareAlertBrand:before,.featureIcon:before {
    background-color: transparent;
    background-image: url(/Content/Images/fareAlertSprite.png);
    background-repeat: no-repeat;
    position: absolute;
    content: "";
    right: 0;
    top: 0;
    display: block
}

.fareAlertBrand:before {
    width: 90px;
    height: 89px;
    background-position: 0 0
}

.fareAlertBrand {
    position: relative;
    padding-right: 100px;
    min-height: 90px
}

.faretitle {
    font-size: 16px;
    color: #000;
    margin-bottom: 25px
}

.featureIcon {
    padding-right: 80px;
    position: relative
}

.featureIcon:before {
    height: 64px;
    width: 64px
}

.featureList {
    margin: 0;
    padding: 5px 0 0 10px
}

.featureList li {
    list-style: none;
    font-size: 14px;
    color: #333;
    font-weight: 500;
    padding: 5px;
    margin-bottom: 10px;
    line-height: 2em
}

.featureList li .weak {
    display: block;
    font-size: 12px;
    line-height: 16px;
    color: #999
}

.featureIcon.holiday:before {
    background-position: -233px -17px
}

.featureIcon.track:before {
    background-position: -104px -19px
}

.featureIcon.book:before {
    background-position: -168px -14px
}

.featureIcon.inbox:before {
    background-position: -297px -18px
}

.fareFieldContainer {
    background: #f1f1f1;
    padding: 15px;
    padding-bottom: 17px
}

.bgColor {
    background: #f9f9f9;
    padding: 15px
}

.fareField.form-group.form-group-icon-left .input-icon {
    right: auto;
    top: 24px;
    width: 35px;
    height: 32px;
    left: 16px
}

.fareField.form-group.form-group-icon-left .form-control {
    padding-left: 35px
}

.fareAlertModal .modal-body {
    padding-top: 0;
    padding-bottom: 0
}

.fareAlertModal .form-group {
    margin-bottom: 0
}

.fareField .form-control {
    text-align: left;
    direction: ltr
}

#slider1 {
    height: 1%;
    overflow: hidden;
    padding: 0 0 10px
}

#slider1 .viewport {
    float: left;
    overflow: hidden;
    position: relative
}

#slider1 .buttons {
    background: #C01313;
    border-radius: 35px;
    display: block;
    margin: 30px 10px 0 0;
    float: left;
    width: 35px;
    height: 35px;
    position: relative;
    color: #fff;
    font-weight: 700;
    text-align: center;
    line-height: 35px;
    text-decoration: none;
    font-size: 22px
}

#slider1 .buttons:hover {
    color: #C01313;
    background: #fff
}

#slider1 .disable {
    background: linear-gradient(#fff,#ccc) repeat scroll 0 0 rgba(0,0,0,0)
}

#slider1 .overview {
    list-style: none;
    position: absolute;
    padding: 0;
    margin: 0;
    left: 0;
    top: 0
}

.next.disabled,.prev.disabled {
    pointer-events: none;
    opacity: .5;
    background: #CCC
}

#slider1 .overview li {
    float: left;
    margin: 0 20px 0 0;
    padding: 1px;
    height: 121px;
    border-right: 1px solid #dcdcdc;
    width: 236px;
    text-align: center
}

#slider1 {
    cursor: pointer
}

#slider1 .viewport {
    width: 93.5%!important;
    height: 76px;
    margin-left: .5%;
    border: 1px solid #ccc;
    background: #f7f7f7
}

#slider1 .overview li {
    margin: 0!important;
    height: 76px;
    width: 85px!important
}

#slider1 .overview li img.soon {
    padding-top: 25px
}

#slider1 .active {
    width: 100px!important;
    background: linear-gradient(to bottom,rgba(252,234,187,1) 0,rgba(252,205,77,1) 50%,rgba(248,181,0,1) 51%,rgba(251,223,147,1) 100%) repeat scroll 0 0 rgba(0,0,0,0)
}

#slider1 .buttons {
    background: #003580!important;
    padding: 0!important;
    margin: 0!important
}

#slider1 .prev_pack {
    height: 22px;
    background: #074a81;
    float: left;
    text-align: center;
    cursor: pointer;
    color: #fff;
    margin-top: 27px;
    max-width: 3%;
    width: 22px;
    line-height: 22px
}

#slider1 .next_pack {
    width: 22px;
    line-height: 22px;
    height: 22px;
    float: right;
    text-align: center;
    cursor: pointer;
    color: #fff;
    background: #074a81;
    line-height: 22px;
    margin-top: 27px;
    max-width: 3%
}

#slider1 .next_pack:hover,#slider1 .prev_pack:hover {
    background: #f9be1f
}

#slider1 {
    padding: 0!important
}

.arrow_pack {
    font-weight: 700;
    display: block;
    text-align: center;
    margin-top: 28px
}

#slider1 .prev_pack span {
    position: relative;
    left: -2px
}

#slider1 .next_pack span {
    position: relative;
    right: -3px
}

#slider1 .text_date {
    clear: both;
    color: #070772;
    direction: rtl;
    display: block;
    float: left!important;
    font-size: 11px!important;
    font-weight: 700;
    margin-top: 8px;
    text-align: center;
    width: 100%
}

#slider1 .title_top_ca {
    border-bottom: 1px solid #ccc;
    float: left;
    height: 38px;
    width: 81px
}

#slider1 .HResultFilterTitle {
    border-radius: 0!important;
    width: 96%
}

#slider1 .colorfilter {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background: none repeat scroll 0 0 #f5f5f5;
    border-color: #ddd -moz-use-text-color;
    border-image: none;
    border-style: solid none;
    border-width: 1px medium;
    padding: 5px 2px 3px 5px
}

#slider1 .HResultFilterBoxContent {
    display: block;
    margin-top: -3px;
    padding: 5px 0 2px 5px!important
}

#slider1 .avail:hover,#slider1 .notavail:hover {
    background: none repeat scroll 0 0 #f9efd1
}

#slider1 .AvailParent {
    display: none
}

#slider1 .centerpage {
    bottom: 10%;
    height: 80%;
    left: 10%;
    position: absolute;
    top: 10%;
    width: 80%
}

#slider1 .loading {
    clear: both;
    display: block;
    height: 0;
    margin-bottom: 70px;
    margin-top: -80px;
    width: 100%
}

.bg-spinner {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255,255,255,.8);
    z-index: 100
}

.middle-abs {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    -moz-transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
    -o-transform: translate(-50%,-50%)
}

.spinner {
    width: 65px;
    text-align: center;
    display: block
}

.spinner .spinner__item1 {
    -webkit-animation-delay: -.3s;
    animation-delay: -.3s
}

.spinner .spinner__item2 {
    -webkit-animation-delay: -.2s;
    animation-delay: -.2s
}

.spinner .spinner__item3 {
    -webkit-animation-delay: -.1s;
    animation-delay: -.1s
}

.spinner>span {
    width: 8px;
    height: 8px;
    background-color: #337ab7;
    display: inline-block;
    -webkit-animation: skBouncedelay 1.5s infinite ease-in-out both;
    animation: skBouncedelay 1.2s infinite ease-in-out both;
    margin-right: 5px
}

@keyframes skBouncedelay {
    0%,80%,100% {
        -webkit-transform: scale(0);
        transform: scale(0);
        opacity: 0
    }

    40% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1
    }
}

@-webkit-keyframes skBouncedelay {
    0%,80%,100% {
        -webkit-transform: scale(0);
        transform: scale(0);
        opacity: 0
    }

    40% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1
    }
}

@-moz-keyframes spin {
    0% {
        -moz-transform: rotate(0deg)
    }

    100% {
        -moz-transform: rotate(360deg)
    }
}

@-moz-keyframes spinoff {
    0% {
        -moz-transform: rotate(0deg)
    }

    100% {
        -moz-transform: rotate(-360deg)
    }
}

@-webkit-keyframes spin {
    0% {
        -webkit-transform: rotate(0deg)
    }

    100% {
        -webkit-transform: rotate(360deg)
    }
}

@-webkit-keyframes spinoff {
    0% {
        -webkit-transform: rotate(0deg)
    }

    100% {
        -webkit-transform: rotate(-360deg)
    }
}

.userguide {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,.701961);
    z-index: 202;
    background-position: initial initial;
    background-repeat: initial initial;
    color: white;
    line-height: 2em;
    padding-top: 330px
}

.userguide-btn {
    border: 1px solid white;
    padding: 2px 15px;
    background: none;
    margin-bottom: 10px;
    position: relative;
    z-index: 1
}

.userguide-btn:after {
    width: 0%;
    height: 100%;
    top: 0;
    left: 0;
    background: #fff;
    content: "";
    display: block;
    position: absolute;
    transition: 0.3s;
    -moz-transition: 0.3s;
    -webkit-transition: 0.3s;
    z-index: -1
}

.userguide-btn:hover,.userguide-btn:active {
    color: #0e83cd
}

.userguide-btn:hover:after {
    width: 100%
}

.userguide-icon {
    width: 88px;
    height: 69px;
    margin-bottom: 12px
}

.userguide-timer {
    width: 15px;
    display: inline-block;
    margin-right: 1px;
    margin-left: 1px;
    text-align: center
}

.cd-single-step>span {
    position: relative;
    z-index: 1;
    display: block;
    width: 10px;
    height: 10px;
    border-radius: inherit;
    background: #ff962c;
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    -ms-transform: scale(0);
    -o-transform: scale(0);
    transform: scale(0);
    -webkit-transition: -webkit-transform 0.4s;
    -moz-transition: -moz-transform 0.4s;
    transition: transform 0.4s;
    overflow: hidden;
    text-indent: 100%;
    white-space: nowrap;
    display: none
}

.cd-single-step>span,.cd-single-step::before {
    display: block
}

.cd-single-step.is-selected>span {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1)
}

.cd-single-step>span,.cd-single-step::before {
    display: block
}

.cd-single-step.is-selected::before {
    content: "";
    -webkit-animation: cd-pulse 2s infinite;
    -moz-animation: cd-pulse 2s infinite;
    animation: cd-pulse 2s infinite;
    -webkit-animation-delay: 0.5s;
    -moz-animation-delay: 0.5s;
    animation-delay: 0.5s
}

@-webkit-keyframes cd-pulse {
    0% {
        box-shadow: 0 0 0 0 #ff962c
    }

    100% {
        box-shadow: 0 0 0 20px rgba(255,150,44,0)
    }
}

@-moz-keyframes cd-pulse {
    0% {
        box-shadow: 0 0 0 0 #ff962c
    }

    100% {
        box-shadow: 0 0 0 20px rgba(255,150,44,0)
    }
}

@keyframes cd-pulse {
    0% {
        box-shadow: 0 0 0 0 #ff962c
    }

    100% {
        box-shadow: 0 0 0 20px rgba(255,150,44,0)
    }
}

#slider1 .loadingbal {
    height: 130px
}

#slider1 .mainloading {
    background: none repeat scroll 0 0 #002f94;
    border-radius: 7px;
    box-shadow: 0 0 10px 4px #ccc;
    float: left;
    height: 350px!important;
    left: 35%;
    margin: 0 auto!important;
    opacity: 1;
    position: absolute;
    top: 360px;
    width: 30%!important;
    z-index: 10000;
    display: none
}

#slider1 .textload {
    clear: both;
    display: block;
    height: 35px;
    margin-bottom: 60px;
    margin-top: -39px;
    text-align: center;
    width: 100%
}

#slider1 .ball {
    background-color: rgba(0,0,0,0);
    border: 5px solid #fff;
    opacity: .9;
    border-top: 5px solid rgba(0,0,0,0);
    border-left: 5px solid rgba(0,0,0,0);
    border-radius: 50px;
    box-shadow: 0 0 35px #fff;
    width: 80px;
    height: 80px;
    margin: 0 auto;
    -moz-animation: spin .5s infinite linear;
    -webkit-animation: spin .5s infinite linear
}

#slider1 .ball1 {
    background-color: rgba(0,0,0,0);
    border: 5px solid #fff;
    opacity: .9;
    border-top: 5px solid rgba(0,0,0,0);
    border-left: 5px solid rgba(0,0,0,0);
    border-radius: 50px;
    box-shadow: 0 0 15px #fff;
    width: 60px;
    height: 60px;
    margin: 0 auto;
    position: relative;
    top: -80px;
    -moz-animation: spinoff 1s infinite linear;
    -webkit-animation: spinoff 1s infinite linear
}

#slider1 .textload span {
    color: #fff;
    display: block;
    font-size: 17px;
    margin: 0 auto;
    padding-top: 40px;
    text-align: center;
    width: 100%
}

#slider1 .loading h1 {
    font-size: 14px;
    color: #00338e;
    font-weight: 700
}

#slider1 .loading img {
    clear: both
}

#slider1 .loading p {
    font-size: 17px;
    color: #fff;
    margin-bottom: 0;
    margin-top: 20px;
    text-align: center
}

#slider1 .loading .des {
    font-size: 12px;
    font-weight: 700;
    margin-top: 18px;
    width: 100%!important
}

#slider1 .loading>div {
    display: block;
    text-align: center
}

#slider1 .loading>.logos>img {
    margin: 15px 0 0
}

#slider1 .colorfilter {
    background: #F5F5F5;
    border: 1px solid #ddd;
    padding: 5px 2px 3px 5px;
    border-left: none;
    border-right: none
}

#slider1 .availimg {
    margin-top: 3px;
    width: 70px
}

.inline {
    display: inline-block!important
}

.priceDesc {
    width: 60%;
    vertical-align: middle;
    overflow: hidden;
    text-overflow: ellipsis;
    display: inline-block;
    white-space: nowrap
}

.lowPrice {
    font-size: 11px;
    color: #999;
    width: 40%;
    text-align: left;
    vertical-align: text-top;
    overflow: hidden;
    text-overflow: ellipsis;
    display: inline-block;
    white-space: nowrap;
    line-height: 21px
}

#HResultFilterAirlines .checkboxFilter label {
    display: block;
    width: 100%
}

@media(max-width: 1199px) {
    .lowPrice {
        display:none
    }

    .priceDesc {
        width: 100%
    }

    .lowPrice {
        display: none
    }

    .tblRaftAndBargasht .divTime {
        font-size: 14px
    }

    .divBoxListDetFlight .gray2 {
        font-size: 10px
    }

    .divFlightRslt .tblFlightRslt td {
        font-size: 11px
    }

    .hideMid {
        display: none
    }

    .resultflhoimgD {
        margin: 0 5px 0 0
    }

    .ResultTour .HResultMainTitle,.HResultMainSelectRoom {
        margin-right: 20px
    }

    .w100 .HResultDetailsTitle {
        max-width: 55%!important
    }

    .FHResultButton {
        width: 90px;
        font-size: 13px
    }

    .FHResultButton span.glyphicon.glyphicon-refresh.glyphicon-refresh-animate {
        position: relative;
        top: 3px
    }

    .HResultFilterBoxContent .spanLableSort {
        width: 85%
    }

    .ticketTitle>div,.ticketTitle>h2 {
        font-size: 13px
    }

    .ticketInfo.lBox h2 {
        font-size: 12px
    }

    .lBox .ticketTitle h1 {
        font-size: 13px
    }

    .supportTelIcon {
        width: 56%
    }

    .telSupport .supportTelDsc .titleS {
        font-size: 13px;
        padding-bottom: 15px
    }

    .telSupport .supportTelDsc .dscS {
        font-size: 9px;
        padding-bottom: 15px
    }

    .telSupport .supportTelDsc .telS {
        font-size: 13px
    }

    .HResultFilterResult p>span>.tourInfo {
        padding-right: 40px;
        width: 88%
    }

    .HResultFilterResult p .tourTitle {
        width: 14%;
        font-size: 12px
    }

    .HResultFilterResult p .tourInfo>span {
        font-size: 11px
    }

    #slider1 .viewport {
        width: 91.5%!important
    }

    .listView {
        font-size: 12px
    }

    .sorting_option select {
        min-width: 85px!important
    }

    .divrecent.packageRecent {
        margin-left: -15px;
        width: auto
    }

    .selectRenewSearch .divNights {
        padding-right: 0
    }
}

.FacIcon[class^="icon-"]:before,.FacIcon[class*=" icon-"]:before {
    font-family: "Facility";
    font-style: normal;
    font-weight: 400;
    speak: none;
    display: inline-block;
    text-decoration: inherit;
    width: auto;
    margin-right: 0;
    text-align: center;
    font-variant: normal;
    text-transform: none;
    line-height: inherit;
    margin-left: 0;
    font-size: 18px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

.icon-uniF100:before {
    content: '\f100'
}

.icon-24hour-check-in:before {
    content: '\f101'
}

.icon-24hour-frontdesk:before {
    content: '\f102'
}

.icon-24hour-room-service:before {
    content: '\f103'
}

.icon-24hour-security:before {
    content: '\f104'
}

.icon-internet:before {
    content: '\f108'
}

.icon-iron:before {
    content: '\f109'
}

.icon-additional-bathroom:before {
    content: '\f10a'
}

.icon-additional-information:before {
    content: '\f10b'
}

.icon-additional-toilet:before {
    content: '\f10c'
}

.icon-air-conditioning:before {
    content: '\f10d'
}

.icon-air-purifier:before {
    content: '\f10e'
}

.icon-airport-transfer:before {
    content: '\f111'
}

.icon-alarm-clock:before {
    content: '\f112'
}

.icon-american-express:before {
    content: '\f113'
}

.icon-apartment:before {
    content: '\f114'
}

.icon-atm-cash-machine-on-site:before {
    content: '\f11b'
}

.icon-babysitting:before {
    content: '\f11c'
}

.icon-badminton-court:before {
    content: '\f11d'
}

.icon-balcony-terrace:before {
    content: '\f11e'
}

.icon-bathrobes:before {
    content: '\f120'
}

.icon-bathroom-basics:before {
    content: '\f121'
}

.icon-bathroom-phone:before {
    content: '\f122'
}

.icon-bathrooms:before {
    content: '\f123'
}

.icon-bathtub:before {
    content: '\f124'
}

.icon-bbq-facilities:before {
    content: '\f125'
}

.icon-bed:before {
    content: '\f126'
}

.icon-bedroom:before {
    content: '\f127'
}

.icon-bicycle-rental:before {
    content: '\f128'
}

.icon-billiards:before {
    content: '\f129'
}

.icon-blackout-curtains:before {
    content: '\f12a'
}

.icon-boat:before {
    content: '\f12b'
}

.icon-book-now-pay-later:before {
    content: '\f12c'
}

.icon-book-without-a-creditcard:before {
    content: '\f12d'
}

.icon-bowling-alley:before {
    content: '\f12e'
}

.icon-breakfast:before {
    content: '\f12f'
}

.icon-business-center:before {
    content: '\f130'
}

.icon-business-facilities:before {
    content: '\f131'
}

.icon-buzzer-wireless-intercom:before {
    content: '\f132'
}

.icon-cancellation-policy-non-refund-special-condition:before {
    content: '\f134'
}

.icon-canoe:before {
    content: '\f135'
}

.icon-car-hire:before {
    content: '\f136'
}

.icon-car-park:before {
    content: '\f137'
}

.icon-car-power-charging-station:before {
    content: '\f138'
}

.icon-carbon-monoxide-detector:before {
    content: '\f139'
}

.icon-carpeting:before {
    content: '\f13a'
}

.icon-casino:before {
    content: '\f13d'
}

.icon-chapel:before {
    content: '\f13e'
}

.icon-children-high-chair:before {
    content: '\f141'
}

.icon-children-playground:before {
    content: '\f142'
}

.icon-city-view:before {
    content: '\f143'
}

.icon-cleaning-products:before {
    content: '\f144'
}

.icon-closet:before {
    content: '\f146'
}

.icon-clothes-dryer-pay:before {
    content: '\f147'
}

.icon-clothes-rack:before {
    content: '\f148'
}

.icon-clothes-washer-free:before {
    content: '\f149'
}

.icon-coffee-shop:before {
    content: '\f14a'
}

.icon-coffee-tea-maker:before {
    content: '\f14b'
}

.icon-complimentary-bottled-water:before {
    content: '\f14c'
}

.icon-complimentary-instant-coffee:before {
    content: '\f14d'
}

.icon-complimentary-tea:before {
    content: '\f14e'
}

.icon-concierge:before {
    content: '\f14f'
}

.icon-currency-exchange:before {
    content: '\f156'
}

.icon-daily-housekeeping:before {
    content: '\f157'
}

.icon-daily-newspaper:before {
    content: '\f158'
}

.icon-dart-board:before {
    content: '\f159'
}

.icon-desk:before {
    content: '\f15c'
}

.icon-dishwasher:before {
    content: '\f15f'
}

.icon-diving:before {
    content: '\f160'
}

.icon-dressing-room:before {
    content: '\f163'
}

.icon-dryer:before {
    content: '\f164'
}

.icon-dvd-cd-player:before {
    content: '\f165'
}

.icon-electric-blanket:before {
    content: '\f167'
}

.icon-elevator:before {
    content: '\f168'
}

.icon-essentials:before {
    content: '\f16a'
}

.icon-executive-floor:before {
    content: '\f16b'
}

.icon-executive-lounge-access:before {
    content: '\f16c'
}

.icon-express-check-in-check-out:before {
    content: '\f16d'
}

.icon-extra-long-beds:before {
    content: '\f16e'
}

.icon-facilities-for-disabled-guests:before {
    content: '\f170'
}

.icon-family-room:before {
    content: '\f171'
}

.icon-fan:before {
    content: '\f172'
}

.icon-fax-machine:before {
    content: '\f174'
}

.icon-fire-extinguisher:before {
    content: '\f176'
}

.icon-fireplace:before {
    content: '\f177'
}

.icon-first-aid-kit:before {
    content: '\f178'
}

.icon-fishing:before {
    content: '\f179'
}

.icon-fitness-center:before {
    content: '\f17a'
}

.icon-flight-earn:before {
    content: '\f17c'
}

.icon-free-cancellation:before {
    content: '\f17d'
}

.icon-free-welcome-drink:before {
    content: '\f17e'
}

.icon-free-wifi-in-all-rooms:before {
    content: '\f17f'
}

.icon-garden:before {
    content: '\f180'
}

.icon-gift-souvenir-shop:before {
    content: '\f182'
}

.icon-golf-course-on-site:before {
    content: '\f183'
}

.icon-golf-course-within-3k:before {
    content: '\f184'
}

.icon-grocery-deliveries:before {
    content: '\f185'
}

.icon-guest-house:before {
    content: '\f186'
}

.icon-gym:before {
    content: '\f187'
}

.icon-hair-dryer:before {
    content: '\f188'
}

.icon-halal-restaurant:before {
    content: '\f189'
}

.icon-half-full-board:before {
    content: '\f18a'
}

.icon-hangers:before {
    content: '\f18b'
}

.icon-heating:before {
    content: '\f18c'
}

.icon-hiking-trails:before {
    content: '\f18d'
}

.icon-holiday-house:before {
    content: '\f18e'
}

.icon-homestay:before {
    content: '\f18f'
}

.icon-horse-riding:before {
    content: '\f190'
}

.icon-hot-spring-bath:before {
    content: '\f191'
}

.icon-hot-tub:before {
    content: '\f192'
}

.icon-humidifier:before {
    content: '\f19a'
}

.icon-in-room-safe:before {
    content: '\f19d'
}

.icon-in-room-tablet:before {
    content: '\f19e'
}

.icon-in-room-video-games:before {
    content: '\f19f'
}

.icon-indoor-poor:before {
    content: '\f1a0'
}

.icon-infirmary:before {
    content: '\f1a2'
}

.icon-inhouse-movies:before {
    content: '\f1a4'
}

.icon-interconnecting-room-available:before {
    content: '\f1a6'
}

.icon-ipod-docking-station:before {
    content: '\f1a7'
}

.icon-islamic-prayer-room:before {
    content: '\f1a8'
}

.icon-jacuzzi-bathtub:before {
    content: '\f1a9'
}

.icon-karaoke:before {
    content: '\f1ab'
}

.icon-kids-club:before {
    content: '\f1ac'
}

.icon-kitchen:before {
    content: '\f1ad'
}

.icon-kitchenware:before {
    content: '\f1ae'
}

.icon-kosher-restaurant:before {
    content: '\f1af'
}

.icon-laptop-friendly-workspace:before {
    content: '\f1b0'
}

.icon-laptop-safe-box:before {
    content: '\f1b1'
}

.icon-laundromat:before {
    content: '\f1b2'
}

.icon-laundry-service:before {
    content: '\f1b3'
}

.icon-library:before {
    content: '\f1b4'
}

.icon-linens:before {
    content: '\f1b8'
}

.icon-lockers:before {
    content: '\f1b9'
}

.icon-luggage-storage:before {
    content: '\f1ba'
}

.icon-massage:before {
    content: '\f1c2'
}

.icon-max-occupancy-plus:before {
    content: '\f1c4'
}

.icon-max-occupancy:before {
    content: '\f1c5'
}

.icon-meeting-facilities:before {
    content: '\f1c6'
}

.icon-microwave:before {
    content: '\f1c8'
}

.icon-mini-bar:before {
    content: '\f1c9'
}

.icon-mirror:before {
    content: '\f1cc'
}

.icon-mosquitonet:before {
    content: '\f1cd'
}

.icon-motorbike:before {
    content: '\f1ce'
}

.icon-mountain-view:before {
    content: '\f1cf'
}

.icon-nightclub:before {
    content: '\f1da'
}

.icon-non-smoking-room:before {
    content: '\f1db'
}

.icon-number-of-rooms:before {
    content: '\f1e1'
}

.icon-outdoor-pool:before {
    content: '\f1e2'
}

.icon-pay-at-the-place:before {
    content: '\f1e3'
}

.icon-payment-option-no-credit-card:before {
    content: '\f1e4'
}

.icon-pets-allowed:before {
    content: '\f1e5'
}

.icon-photocopying:before {
    content: '\f1e6'
}

.icon-pool-kids:before {
    content: '\f1ed'
}

.icon-pool:before {
    content: '\f1ee'
}

.icon-poolside-bar:before {
    content: '\f1ef'
}

.icon-portable-wifi-rental:before {
    content: '\f1f0'
}

.icon-postal-service:before {
    content: '\f1f2'
}

.icon-printer:before {
    content: '\f1f3'
}

.icon-private-beach:before {
    content: '\f1f4'
}

.icon-private-entrance:before {
    content: '\f1f5'
}

.icon-private-pool:before {
    content: '\f1f6'
}

.icon-refrigerator:before {
    content: '\f1f9'
}

.icon-residence:before {
    content: '\f1fa'
}

.icon-restaurant:before {
    content: '\f1fb'
}

.icon-room-promotion-for-flashdeal:before {
    content: '\f1fd'
}

.icon-room-promotion-for-mobiledeal:before {
    content: '\f1fe'
}

.icon-room-promotion-for-otherdeal:before {
    content: '\f1ff'
}

.icon-room-promotion-for-smartdeal:before {
    content: '\f200'
}

.icon-room-promotion-super-savedeal:before {
    content: '\f201'
}

.icon-room-promotion:before {
    content: '\f202'
}

.icon-room-service:before {
    content: '\f203'
}

.icon-safety-deposit-boxes:before {
    content: '\f204'
}

.icon-salon:before {
    content: '\f205'
}

.icon-sauna:before {
    content: '\f206'
}

.icon-scale:before {
    content: '\f207'
}

.icon-seating-area:before {
    content: '\f20a'
}

.icon-separate-dining-area:before {
    content: '\f20c'
}

.icon-separate-living-room:before {
    content: '\f20d'
}

.icon-separate-shower-and-tub:before {
    content: '\f20e'
}

.icon-sewing-kit:before {
    content: '\f20f'
}

.icon-shampoo:before {
    content: '\f210'
}

.icon-shared-kitchen:before {
    content: '\f211'
}

.icon-shoeshine-kit:before {
    content: '\f212'
}

.icon-shops:before,.icon-shop:before {
    content: '\f214'
}

.icon-shower:before {
    content: '\f215'
}

.icon-shrine:before {
    content: '\f216'
}

.icon-shuttle-service:before {
    content: '\f217'
}

.icon-ski-equipment-rentals:before {
    content: '\f218'
}

.icon-ski-lessons:before {
    content: '\f219'
}

.icon-skiing:before {
    content: '\f21a'
}

.icon-slippers:before {
    content: '\f21b'
}

.icon-smoke-detector:before {
    content: '\f21c'
}

.icon-smoking-allowed:before {
    content: '\f21d'
}

.icon-smoking-area:before {
    content: '\f21e'
}

.icon-snorkeling:before {
    content: '\f21f'
}

.icon-sofa:before {
    content: '\f220'
}

.icon-solarium:before {
    content: '\f221'
}

.icon-soundproofing:before {
    content: '\f222'
}

.icon-spa-sauna:before {
    content: '\f223'
}

.icon-special-condition:before {
    content: '\f224'
}

.icon-sqm:before {
    content: '\f225'
}

.icon-squash-courts:before {
    content: '\f226'
}

.icon-steamroom:before {
    content: '\f230'
}

.icon-suitable-for-events:before {
    content: '\f231'
}

.icon-surfing-lessons:before {
    content: '\f232'
}

.icon-table-tennis:before {
    content: '\f233'
}

.icon-tamil:before {
    content: '\f234'
}

.icon-tax-receipt-available:before {
    content: '\f235'
}

.icon-taxi-service:before {
    content: '\f236'
}

.icon-telephone:before {
    content: '\f237'
}

.icon-tennis-courts:before {
    content: '\f238'
}

.icon-theme-park:before {
    content: '\f239'
}

.icon-ticket-service:before {
    content: '\f23d'
}

.icon-time-icon:before {
    content: '\f23e'
}

.icon-toiletries:before {
    content: '\f23f'
}

.icon-tooltip:before {
    content: '\f240'
}

.icon-tours:before {
    content: '\f246'
}

.icon-towels:before {
    content: '\f247'
}

.icon-trouser-press:before {
    content: '\f249'
}

.icon-tv-area:before {
    content: '\f24a'
}

.icon-tv:before {
    content: '\f24b'
}

.icon-umbrella:before {
    content: '\f24c'
}

.icon-user-font-icon:before {
    content: '\f24e'
}

.icon-valet-parking:before {
    content: '\f24f'
}

.icon-vending-machine:before {
    content: '\f250'
}

.icon-views:before {
    content: '\f251'
}

.icon-villa:before {
    content: '\f252'
}

.icon-wake-up-service:before {
    content: '\f254'
}

.icon-washer:before {
    content: '\f256'
}

.icon-water-park:before {
    content: '\f258'
}

.icon-water-sports-motorized:before {
    content: '\f259'
}

.icon-water-sports-non-motorized:before {
    content: '\f25a'
}

.icon-watersports-equipment-rentals:before {
    content: '\f25b'
}

.icon-wheelchair-accessible:before {
    content: '\f25c'
}

.icon-wifi-in-public-areas:before {
    content: '\f25d'
}

.icon-wifi:before {
    content: '\f25e'
}

.icon-wind-surfing:before {
    content: '\f25f'
}

.icon-wooden-parqueted-flooring:before {
    content: '\f260'
}

.icon-yoga-room:before {
    content: '\f262'
}
</style>