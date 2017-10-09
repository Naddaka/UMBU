{literal}
<style>
body.display-n .wrapper {
    display: none;
}

body.display-n {
    display: block!important;
}

@-webkit-keyframes preload-show-1 {
    from {
        -webkit-transform: rotateZ(60deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(60deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@keyframes preload-show-1 {
    from {
        -webkit-transform: rotateZ(60deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(60deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@-webkit-keyframes preload-hide-1 {
    to {
        -webkit-transform: rotateZ(60deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(60deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@keyframes preload-hide-1 {
    to {
        -webkit-transform: rotateZ(60deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(60deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@-webkit-keyframes preload-cycle-1 {
    5% {
        -webkit-transform: rotateZ(60deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(60deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
    10%,
    75% {
        -webkit-transform: rotateZ(60deg) rotateY(0) rotateX(0deg);
        transform: rotateZ(60deg) rotateY(0) rotateX(0deg);
        border-left-color: #222222;
    }
    80%,
    100% {
        -webkit-transform: rotateZ(60deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(60deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@keyframes preload-cycle-1 {
    5% {
        -webkit-transform: rotateZ(60deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(60deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
    10%,
    75% {
        -webkit-transform: rotateZ(60deg) rotateY(0) rotateX(0deg);
        transform: rotateZ(60deg) rotateY(0) rotateX(0deg);
        border-left-color: #222222;
    }
    80%,
    100% {
        -webkit-transform: rotateZ(60deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(60deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@-webkit-keyframes preload-show-2 {
    from {
        -webkit-transform: rotateZ(120deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(120deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@keyframes preload-show-2 {
    from {
        -webkit-transform: rotateZ(120deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(120deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@-webkit-keyframes preload-hide-2 {
    to {
        -webkit-transform: rotateZ(120deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(120deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@keyframes preload-hide-2 {
    to {
        -webkit-transform: rotateZ(120deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(120deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@-webkit-keyframes preload-cycle-2 {
    10% {
        -webkit-transform: rotateZ(120deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(120deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
    15%,
    70% {
        -webkit-transform: rotateZ(120deg) rotateY(0) rotateX(0deg);
        transform: rotateZ(120deg) rotateY(0) rotateX(0deg);
        border-left-color: #222222;
    }
    75%,
    100% {
        -webkit-transform: rotateZ(120deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(120deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@keyframes preload-cycle-2 {
    10% {
        -webkit-transform: rotateZ(120deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(120deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
    15%,
    70% {
        -webkit-transform: rotateZ(120deg) rotateY(0) rotateX(0deg);
        transform: rotateZ(120deg) rotateY(0) rotateX(0deg);
        border-left-color: #222222;
    }
    75%,
    100% {
        -webkit-transform: rotateZ(120deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(120deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@-webkit-keyframes preload-show-3 {
    from {
        -webkit-transform: rotateZ(180deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(180deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@keyframes preload-show-3 {
    from {
        -webkit-transform: rotateZ(180deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(180deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@-webkit-keyframes preload-hide-3 {
    to {
        -webkit-transform: rotateZ(180deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(180deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@keyframes preload-hide-3 {
    to {
        -webkit-transform: rotateZ(180deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(180deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@-webkit-keyframes preload-cycle-3 {
    15% {
        -webkit-transform: rotateZ(180deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(180deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
    20%,
    65% {
        -webkit-transform: rotateZ(180deg) rotateY(0) rotateX(0deg);
        transform: rotateZ(180deg) rotateY(0) rotateX(0deg);
        border-left-color: #222222;
    }
    70%,
    100% {
        -webkit-transform: rotateZ(180deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(180deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@keyframes preload-cycle-3 {
    15% {
        -webkit-transform: rotateZ(180deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(180deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
    20%,
    65% {
        -webkit-transform: rotateZ(180deg) rotateY(0) rotateX(0deg);
        transform: rotateZ(180deg) rotateY(0) rotateX(0deg);
        border-left-color: #222222;
    }
    70%,
    100% {
        -webkit-transform: rotateZ(180deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(180deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@-webkit-keyframes preload-show-4 {
    from {
        -webkit-transform: rotateZ(240deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(240deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@keyframes preload-show-4 {
    from {
        -webkit-transform: rotateZ(240deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(240deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@-webkit-keyframes preload-hide-4 {
    to {
        -webkit-transform: rotateZ(240deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(240deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@keyframes preload-hide-4 {
    to {
        -webkit-transform: rotateZ(240deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(240deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@-webkit-keyframes preload-cycle-4 {
    20% {
        -webkit-transform: rotateZ(240deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(240deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
    25%,
    60% {
        -webkit-transform: rotateZ(240deg) rotateY(0) rotateX(0deg);
        transform: rotateZ(240deg) rotateY(0) rotateX(0deg);
        border-left-color: #222222;
    }
    65%,
    100% {
        -webkit-transform: rotateZ(240deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(240deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@keyframes preload-cycle-4 {
    20% {
        -webkit-transform: rotateZ(240deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(240deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
    25%,
    60% {
        -webkit-transform: rotateZ(240deg) rotateY(0) rotateX(0deg);
        transform: rotateZ(240deg) rotateY(0) rotateX(0deg);
        border-left-color: #222222;
    }
    65%,
    100% {
        -webkit-transform: rotateZ(240deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(240deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@-webkit-keyframes preload-show-5 {
    from {
        -webkit-transform: rotateZ(300deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(300deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@keyframes preload-show-5 {
    from {
        -webkit-transform: rotateZ(300deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(300deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@-webkit-keyframes preload-hide-5 {
    to {
        -webkit-transform: rotateZ(300deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(300deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@keyframes preload-hide-5 {
    to {
        -webkit-transform: rotateZ(300deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(300deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@-webkit-keyframes preload-cycle-5 {
    25% {
        -webkit-transform: rotateZ(300deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(300deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
    30%,
    55% {
        -webkit-transform: rotateZ(300deg) rotateY(0) rotateX(0deg);
        transform: rotateZ(300deg) rotateY(0) rotateX(0deg);
        border-left-color: #222222;
    }
    60%,
    100% {
        -webkit-transform: rotateZ(300deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(300deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@keyframes preload-cycle-5 {
    25% {
        -webkit-transform: rotateZ(300deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(300deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
    30%,
    55% {
        -webkit-transform: rotateZ(300deg) rotateY(0) rotateX(0deg);
        transform: rotateZ(300deg) rotateY(0) rotateX(0deg);
        border-left-color: #222222;
    }
    60%,
    100% {
        -webkit-transform: rotateZ(300deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(300deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@-webkit-keyframes preload-show-6 {
    from {
        -webkit-transform: rotateZ(360deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(360deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@keyframes preload-show-6 {
    from {
        -webkit-transform: rotateZ(360deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(360deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@-webkit-keyframes preload-hide-6 {
    to {
        -webkit-transform: rotateZ(360deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(360deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@keyframes preload-hide-6 {
    to {
        -webkit-transform: rotateZ(360deg) rotateY(-90deg) rotateX(0deg);
        transform: rotateZ(360deg) rotateY(-90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@-webkit-keyframes preload-cycle-6 {
    30% {
        -webkit-transform: rotateZ(360deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(360deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
    35%,
    50% {
        -webkit-transform: rotateZ(360deg) rotateY(0) rotateX(0deg);
        transform: rotateZ(360deg) rotateY(0) rotateX(0deg);
        border-left-color: #222222;
    }
    55%,
    100% {
        -webkit-transform: rotateZ(360deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(360deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@keyframes preload-cycle-6 {
    30% {
        -webkit-transform: rotateZ(360deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(360deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
    35%,
    50% {
        -webkit-transform: rotateZ(360deg) rotateY(0) rotateX(0deg);
        transform: rotateZ(360deg) rotateY(0) rotateX(0deg);
        border-left-color: #222222;
    }
    55%,
    100% {
        -webkit-transform: rotateZ(360deg) rotateY(90deg) rotateX(0deg);
        transform: rotateZ(360deg) rotateY(90deg) rotateX(0deg);
        border-left-color: #585858;
    }
}

@-webkit-keyframes preload-flip {
    0% {
        -webkit-transform: rotateY(0deg) rotateZ(-60deg);
        transform: rotateY(0deg) rotateZ(-60deg);
    }
    100% {
        -webkit-transform: rotateY(360deg) rotateZ(-60deg);
        transform: rotateY(360deg) rotateZ(-60deg);
    }
}

@keyframes preload-flip {
    0% {
        -webkit-transform: rotateY(0deg) rotateZ(-60deg);
        transform: rotateY(0deg) rotateZ(-60deg);
    }
    100% {
        -webkit-transform: rotateY(360deg) rotateZ(-60deg);
        transform: rotateY(360deg) rotateZ(-60deg);
    }
}

body {
    background: #efefef;
}

.preloader {
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: 20px;
    display: block;
    width: 3.75em;
    height: 4.25em;
    margin-left: -1.875em;
    margin-top: -2.125em;
    -webkit-transform-origin: center center;
    -ms-transform-origin: center center;
    transform-origin: center center;
    -webkit-transform: rotateY(180deg) rotateZ(-60deg);
    transform: rotateY(180deg) rotateZ(-60deg);
}

.preloader .slice {
    border-top: 1.125em solid transparent;
    border-right: none;
    border-bottom: 1em solid transparent;
    border-left: 1.875em solid #222222;
    position: absolute;
    top: 0px;
    left: 50%;
    -webkit-transform-origin: left bottom;
    -ms-transform-origin: left bottom;
    transform-origin: left bottom;
    border-radius: 3px 3px 0 0;
}

.preloader.loading {
    -webkit-animation: 2s preload-flip steps(2) infinite both;
    animation: 2s preload-flip steps(2) infinite both;
}

.preloader.loading .slice:nth-child(1) {
    -webkit-transform: rotateZ(60deg) rotateY(90deg) rotateX(0);
    transform: rotateZ(60deg) rotateY(90deg) rotateX(0);
    -webkit-animation: 2s preload-cycle-1 linear infinite both;
    animation: 2s preload-cycle-1 linear infinite both;
}

.preloader.loading .slice:nth-child(2) {
    -webkit-transform: rotateZ(120deg) rotateY(90deg) rotateX(0);
    transform: rotateZ(120deg) rotateY(90deg) rotateX(0);
    -webkit-animation: 2s preload-cycle-2 linear infinite both;
    animation: 2s preload-cycle-2 linear infinite both;
}

.preloader.loading .slice:nth-child(3) {
    -webkit-transform: rotateZ(180deg) rotateY(90deg) rotateX(0);
    transform: rotateZ(180deg) rotateY(90deg) rotateX(0);
    -webkit-animation: 2s preload-cycle-3 linear infinite both;
    animation: 2s preload-cycle-3 linear infinite both;
}

.preloader.loading .slice:nth-child(4) {
    -webkit-transform: rotateZ(240deg) rotateY(90deg) rotateX(0);
    transform: rotateZ(240deg) rotateY(90deg) rotateX(0);
    -webkit-animation: 2s preload-cycle-4 linear infinite both;
    animation: 2s preload-cycle-4 linear infinite both;
}

.preloader.loading .slice:nth-child(5) {
    -webkit-transform: rotateZ(300deg) rotateY(90deg) rotateX(0);
    transform: rotateZ(300deg) rotateY(90deg) rotateX(0);
    -webkit-animation: 2s preload-cycle-5 linear infinite both;
    animation: 2s preload-cycle-5 linear infinite both;
}

.preloader.loading .slice:nth-child(6) {
    -webkit-transform: rotateZ(360deg) rotateY(90deg) rotateX(0);
    transform: rotateZ(360deg) rotateY(90deg) rotateX(0);
    -webkit-animation: 2s preload-cycle-6 linear infinite both;
    animation: 2s preload-cycle-6 linear infinite both;
}
</style>
{/literal}