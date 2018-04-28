
<style>
.ui-helper-hidden {
    display: none;
}

.ui-helper-hidden-accessible {
    position: absolute !important;
    clip: rect(1px 1px 1px 1px);
    clip: rect(1px,1px,1px,1px);
}

.ui-helper-reset {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    line-height: 1.3;
    text-decoration: none;
    font-size: 100%;
    list-style: none;
}

.ui-helper-clearfix:before, .ui-helper-clearfix:after {
    content: "";
    display: table;
}

.ui-helper-clearfix:after {
    clear: both;
}

.ui-helper-clearfix {
    zoom: 1;
}

.ui-helper-zfix {
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    position: absolute;
    opacity: 0;
    filter: Alpha(Opacity=0);
}

.ui-state-disabled {
    cursor: default !important;
}

.ui-widget-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.ui-datepicker {
    width: 17em;
    padding: 0;
    display: none;
}

    .ui-datepicker .ui-datepicker-header {
        position: relative;
        padding: .5em 0;
        border-bottom: 1px solid #eee;
        background-color: #fe6e03;
        color:white;
    }

    .ui-datepicker .ui-datepicker-prev, .ui-datepicker .ui-datepicker-next {
        position: absolute;
        top: 5px;
        border-radius: 3px;
    }

    .ui-datepicker .ui-datepicker-prev {
        left: 2px;
    }

    .ui-datepicker .ui-datepicker-next {
        right: 2px;
    }

        .ui-datepicker .ui-datepicker-prev span, .ui-datepicker .ui-datepicker-next span {
            display: block;
            position: absolute;
            left: 50%;
            margin-left: -8px;
            top: 50%;
            margin-top: -8px;
        }

    .ui-datepicker .ui-datepicker-title {
        margin: 0 3.3em;
        line-height: 1.8em;
        text-align: center;
        font-weight: bolder;
    }

    .ui-datepicker select.ui-datepicker-month-year {
        width: 100%;
    }

    .ui-datepicker select.ui-datepicker-month, .ui-datepicker select.ui-datepicker-year {
        width: 49%;
    }

    .ui-datepicker table {
        width: 100%;
        font-size: .9em;
        border-collapse: collapse;
        margin: 0 0 .4em;
    }

    .ui-datepicker th {
        padding: .7em .3em;
        text-align: center;
        font-weight: bold;
        border: 0;
        width: 2em;
    }

    .ui-datepicker td {
        border: 0;
        padding: 1px;
    }

        .ui-datepicker td span, .ui-datepicker td a {
            display: block;
            padding: .2em;
            text-align: center;
            text-decoration: none;
        }

    .ui-datepicker .ui-datepicker-buttonpane {
        margin: .7em 0 0 0;
        padding: 0 .2em;
        background: #f5f5f5;
        border-top: 1px solid #ddd;
    }

        .ui-datepicker .ui-datepicker-buttonpane button {
            float: right;
            margin: .5em .2em .4em;
            cursor: pointer;
            padding: .2em .6em .3em .6em;
            width: auto;
            overflow: visible;
        }

            .ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current {
                float: left;
            }

    .ui-datepicker.ui-datepicker-multi {
        width: auto;
    }

.ui-datepicker-multi .ui-datepicker-group {
    float: left;
}

    .ui-datepicker-multi .ui-datepicker-group table {
        width: 95%;
        margin: 0 auto .4em;
    }

.ui-datepicker-multi-2 .ui-datepicker-group {
    width: 50%;
}

.ui-datepicker-multi-3 .ui-datepicker-group {
    width: 33.3%;
}

.ui-datepicker-multi-4 .ui-datepicker-group {
    width: 25%;
}

.ui-datepicker-multi .ui-datepicker-group-last .ui-datepicker-header {
    border-left-width: 0;
}

.ui-datepicker-multi .ui-datepicker-group-middle .ui-datepicker-header {
    border-left-width: 0;
}

.ui-datepicker-multi .ui-datepicker-buttonpane {
    clear: left;
}

.ui-datepicker-row-break {
    clear: both;
    width: 100%;
    font-size: 0;
}

.ui-datepicker-rtl {
    direction: rtl;
}

    .ui-datepicker-rtl .ui-datepicker-prev {
        right: 2px;
        left: auto;
    }

    .ui-datepicker-rtl .ui-datepicker-next {
        left: 2px;
        right: auto;
    }

    .ui-datepicker-rtl .ui-datepicker-buttonpane {
        clear: right;
    }

        .ui-datepicker-rtl .ui-datepicker-buttonpane button {
            float: left;
        }

            .ui-datepicker-rtl .ui-datepicker-buttonpane button.ui-datepicker-current {
                float: right;
            }

    .ui-datepicker-rtl .ui-datepicker-group {
        float: right;
    }

    .ui-datepicker-rtl .ui-datepicker-group-last .ui-datepicker-header {
        border-right-width: 0;
        border-left-width: 1px;
    }

    .ui-datepicker-rtl .ui-datepicker-group-middle .ui-datepicker-header {
        border-right-width: 0;
        border-left-width: 1px;
    }

.ui-datepicker-cover {
    position: absolute;
    z-index: -1;
    filter: mask();
    top: -4px;
    left: -4px;
    width: 200px;
    height: 200px;
}

.ui-widget-content {
    border: 1px solid #ddd;
    background: #fff;
    color: #333;
    border-radius: 6px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}

    .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
       background: none repeat scroll 0% 0% #F3F3F3;
        color: #333;
        border-radius: 3px;
    }

.ui-datepicker-today .ui-state-default {
    background: #FF4500;
    color:white;
}

.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus {
   
}

.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active {
    background: #F98843;
    color: #fff;
}

.ui-datepicker-header .ui-state-hover {
    background: #fff;
}

.ui-priority-secondary, .ui-widget-content .ui-priority-secondary, .ui-widget-header .ui-priority-secondary {
    opacity: .55;
    filter: Alpha(Opacity=55);
}

.ui-state-disabled .ui-state-default {
    font-weight: normal;
}

.ui-state-disabled, .ui-widget-content .ui-state-disabled, .ui-widget-header .ui-state-disabled {
    opacity: .15;
    filter: Alpha(Opacity=15);
}
</style>

<!-- ====================================================== -->
<style>
    .article-info {
        position: relative;
        width: 77%;
        float: right;
        padding: 10px;
    }
    .article-action {
        width: 23%;
        float: left;
        padding: 10px 10px 0 10px;
        background-color: #fcfcfc;
    }
    .article-info-title {
        float: right;
        margin: -10px 52px 0 30px;
        padding-top: 16px;
    }
    .l-primary-col article img.icon.article-info-title-logo {
        width: 40px !important;
    }
    .article-info-title-title {
        margin-top: 6px;
    }
    .article-info-aircraft {
        margin: 22px 140px 0px 72px;
        height: 19px;
        text-align: right;
        color: #979797;
        font-family: tahoma;
    }
    .article-info-aircraft span:nth-child(1) {
        float: left;
        text-transform: uppercase;
    }
    .article-info-aircraft span:nth-child(2) {
        float: right;
    }
    .article-info__time {
        margin-right: 140px;
        text-align: right;
        font-size: 18px;
        margin-top: 2px;
    }
    .article-info__time div {
        display: inline-block;
        margin-left: 10px;
    }
    .article-info__time__seperator {
        width: 52%;
        border-bottom: 1px dashed #979797;
        position: relative;
    }
    .article-info__time__seperator::before {
        content: '';
        display: block;
        width: 10px;
        height: 10px;
        border: 1px solid #979797;
        border-radius: 100%;
        position: absolute;
        top: -4px;
        right: -1px;
        background: #FFF;
    }
    .article-info__time__seperator::after {
        content: '';
        display: block;
        width: 10px;
        height: 10px;
        border: 1px solid #979797;
        border-radius: 100%;
        position: absolute;
        top: -4px;
        left: -1px;
        background: #FFF;
    }
    .article-info__time__seperator svg {
        fill: #FFF;
        stroke: #979797;
        stroke-width: 26px;
        width: 31px;
        padding: 4px;
        position: absolute;
        top: -15px;
        right: -4px;
        transform: scale(-1, 1);
    }
    .article-info__time__hour {
        font-size: 22px;
    }
    .article-info__time__location {
        font-size: 16px;
    }
    .article-info__time__items__grey {
        color: #979797;
    }
    .article-action__price {
        font-size: 14px;
        color: #000;
        min-height: 32px;
    }
    .article-action__price span {
        font-size: inherit;
    }
    .article-action__price .price-sort {
        color: #649b18;
        font-size: 20px;
        font-weight: bold;
    }
    .article-action__price .price-sort:empty + span {
        display: none;
    }
    .l-primary-col article .article-action__btn a.choose,
    .l-primary-col article .article-action__btn a.showDetails {
        margin-top: 0;
        background-color: #397ff6;
        border-color: #6fa5ff;
        font-size: 16px;
        padding: 5px;
    }
    .l-primary-col article .article-action__btn a.choose.selected {
        margin-top: 0;
        background-color: transparent;
        border-color: #397ff6;
        color: #397ff6;
        padding: 5px;
    }
    .article-action__btn {
        margin-top: 2px;
    }
    .article-action__count {
        margin-top: 4px;
        color: #000;
        font-size: 13px;
    }
    .article-info-status {
        transform: rotate(-90deg);
        float: right;
        width: 76px;
        height: 22px;
        position: absolute;
        right: -28px;
        top: 49px;
        line-height: 19px;
        border: 1px solid;
        border-bottom: 0;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border-color: #e2e2e2;
        font-size: 14px;
        font-size: 12px;
        color: #979797;
        z-index: 1;
        text-align: center;
        right:-109px
    }

    article.sk-X .article-info-status,
    article.sk-O .article-info-status,
    article.sk-S .article-info-status,
    article.sk-I .article-info-status,
    article.sk-F .article-info-status,
    article.sk-R .article-info-status {
        background-color: #649b18;
        color: #fff;
        border-color: #649b18;
    }
    .article-moreinfo {
        position: relative;
        width: 100%;
        background-color: #fcfcfc;
        float: right;
        border-bottom-right-radius: 6px;
        border-bottom-left-radius: 6px;
        margin-top: -4px;
    }
    .article-moreinfo-action svg {
        width: 10px;
        height: 10px;
        margin-bottom: -3px;
        margin-right: 4px;
    }
    .moreinfoshow .article-moreinfo-action svg {
        transform: rotate(180deg);
    }
    .article-moreinfo-action {
        position: relative;
        width: 77%;
        float: right;
        padding: 0 0 4px 0;
        cursor: pointer;
        background-color: #FFF;
        font-size: 13px;
        color: #397ff6;
    }
    .article-moreinfo__seperator {
        width: 23%;
        float: left;
        height: 22px;
    }
    .article-moreinfo-content {
        display: none;
        /*visibility:hidden*/
    }
    .article-moreinfo-content.showinfo {
        display: block;
    }
    .article-moreinfo-content__info {
        position: relative;
        width: 77%;
        float: right;
        padding: 10px 10px 0 10px;
        text-align: right;
        font-size: 16px;
    }
    .article-moreinfo-content__price {
        width: 23%;
        padding-left: 10px;
        float: left;
        padding: 10px;
        text-align: right;
        line-height: 160%;
        height: 117px;
    }
    article.count0 .article-moreinfo-content__price .article-moreinfo-content__price__part {
        display: none;
    }
    .article-moreinfo-content__price__part {
        clear: both;
        text-align: left;
    }
    .article-moreinfo-content__price__part span:nth-child(1) {
        float: right;
    }
    .article-moreinfo-content__price__part span:nth-child(2) {
        float: left;
        font-size: 12px;
        color: #979797;
        line-height: 21px;
    }
    .article-moreinfo-content__price__part span:nth-child(3) {
        float: left;
        font-size: 15px;
    }
    .article-moreinfo-content__info__text {
        font-size: inherit;
        line-height: 160%;
    }
    .article-moreinfo-content__info__text span {
        font-size: 13px;
        color: #979797;
    }
    .article-moreinfo-content__info__inline {
        width: 30%;
        display: inline-block;
    }
    .article-moreinfo-content__info__bold {
        font-size: 18px;
        margin-bottom: 5px;
    }
    .article-moreinfo-content__info__bold span {
        font-size: 18px;
    }
    .article-moreinfo-content__info__bold span:nth-child(2) {
        color: #000;
    }
    .article-moreinfo-content__info__font span:nth-child(2) {
        font-family: tahoma;
        font-size: 15px;
        color: #000;
        text-transform: uppercase;
    }
    .article-moreinfo-content__info__fontsize {
        font-size: 15px !important;
    }

    .article-moreinfo-content__info__crcn {
        margin: 5px 10px 10px 10px;
    }

    .article-moreinfo-content__info__crcn:before {
        content: "";
        display: table;
        clear: both;
    }

    .article-moreinfo-content__info__crcn table {
        width: 100%;
    }

    .article-moreinfo-content__info__crcn td {
        border: 1px solid rgba(199, 199, 199, 0.4);
        text-align: center;
        font-size: 12px;
        padding: 2px 4px;
    }

    .article-moreinfo-content__info__crcn td.article-moreinfo-content__info__crcn__text {
        font-size: 14px;
    }

    .article-moreinfo-content__info__crcn table tr:nth-child(2) {
        background: #FFF;
    }

    .article-moreinfo-content__info__crcn td:empty {
        width: 1px;
    }

    .article-moreinfo-content__info__crcn td:empty:before {
        content: '';
        position: absolute;
        display: block;
        width: 24px;
        height: 50px;
        margin-top: -12px;
        margin-right: -4px;
        background: #fcfcfc;
    }

    .l-primary-col article[data-airlineen='JI'] .article-moreinfo-content__info__crcn__title:before {
        content: '';
    }

    .article-info__time__seperator__hasstop {
        display: block;
        position: absolute;
        top: 0;
        right: 0;
    }

    .article-info__hasstop .article-info__time__seperator__hasstop:before {
        content: '';
        display: block;
        width: 10px;
        height: 10px;
        border: 1px solid #979797;
        border-radius: 100%;
        position: absolute;
        top: -4px;
        right: 120px;
        background: #FFF;
    }

    .article-info__hasstop .article-info__time__seperator__hasstop:after {
        content: 'توقف';
        display: block;
        width: 10px;
        height: 10px;
        position: absolute;
        top: -28px;
        right: 112px;
        background: #FFF;
        color: #000;
    }

</style>

