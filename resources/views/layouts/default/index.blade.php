<html data-theme="light" lang="en">

<head>
    <script type="module">
  import RefreshRuntime from "/@react-refresh"
  RefreshRuntime.injectIntoGlobalHook(window)
  window.$RefreshReg$ = () => {}
  window.$RefreshSig$ = () => (type) => type
  window.__vite_plugin_react_preamble_installed__ = true
  </script>

    <script type="module" src="/@vite/client"></script>

    <meta charset="UTF-8">
    <style type="text/css">
        :root,
        :host {
            --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Solid";
            --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Regular";
            --fa-font-light: normal 300 1em/1 "Font Awesome 6 Light";
            --fa-font-thin: normal 100 1em/1 "Font Awesome 6 Thin";
            --fa-font-duotone: normal 900 1em/1 "Font Awesome 6 Duotone";
            --fa-font-sharp-solid: normal 900 1em/1 "Font Awesome 6 Sharp";
            --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands";
        }

        svg:not(:root).svg-inline--fa,
        svg:not(:host).svg-inline--fa {
            overflow: visible;
            box-sizing: content-box;
        }

        .svg-inline--fa {
            display: var(--fa-display, inline-block);
            height: 1em;
            overflow: visible;
            vertical-align: -0.125em;
        }

        .svg-inline--fa.fa-2xs {
            vertical-align: 0.1em;
        }

        .svg-inline--fa.fa-xs {
            vertical-align: 0em;
        }

        .svg-inline--fa.fa-sm {
            vertical-align: -0.0714285705em;
        }

        .svg-inline--fa.fa-lg {
            vertical-align: -0.2em;
        }

        .svg-inline--fa.fa-xl {
            vertical-align: -0.25em;
        }

        .svg-inline--fa.fa-2xl {
            vertical-align: -0.3125em;
        }

        .svg-inline--fa.fa-pull-left {
            margin-right: var(--fa-pull-margin, 0.3em);
            width: auto;
        }

        .svg-inline--fa.fa-pull-right {
            margin-left: var(--fa-pull-margin, 0.3em);
            width: auto;
        }

        .svg-inline--fa.fa-li {
            width: var(--fa-li-width, 2em);
            top: 0.25em;
        }

        .svg-inline--fa.fa-fw {
            width: var(--fa-fw-width, 1.25em);
        }

        .fa-layers svg.svg-inline--fa {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
        }

        .fa-layers-counter,
        .fa-layers-text {
            display: inline-block;
            position: absolute;
            text-align: center;
        }

        .fa-layers {
            display: inline-block;
            height: 1em;
            position: relative;
            text-align: center;
            vertical-align: -0.125em;
            width: 1em;
        }

        .fa-layers svg.svg-inline--fa {
            -webkit-transform-origin: center center;
            transform-origin: center center;
        }

        .fa-layers-text {
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transform-origin: center center;
            transform-origin: center center;
        }

        .fa-layers-counter {
            background-color: var(--fa-counter-background-color, #ff253a);
            border-radius: var(--fa-counter-border-radius, 1em);
            box-sizing: border-box;
            color: var(--fa-inverse, #fff);
            line-height: var(--fa-counter-line-height, 1);
            max-width: var(--fa-counter-max-width, 5em);
            min-width: var(--fa-counter-min-width, 1.5em);
            overflow: hidden;
            padding: var(--fa-counter-padding, 0.25em 0.5em);
            right: var(--fa-right, 0);
            text-overflow: ellipsis;
            top: var(--fa-top, 0);
            -webkit-transform: scale(var(--fa-counter-scale, 0.25));
            transform: scale(var(--fa-counter-scale, 0.25));
            -webkit-transform-origin: top right;
            transform-origin: top right;
        }

        .fa-layers-bottom-right {
            bottom: var(--fa-bottom, 0);
            right: var(--fa-right, 0);
            top: auto;
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: bottom right;
            transform-origin: bottom right;
        }

        .fa-layers-bottom-left {
            bottom: var(--fa-bottom, 0);
            left: var(--fa-left, 0);
            right: auto;
            top: auto;
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: bottom left;
            transform-origin: bottom left;
        }

        .fa-layers-top-right {
            top: var(--fa-top, 0);
            right: var(--fa-right, 0);
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: top right;
            transform-origin: top right;
        }

        .fa-layers-top-left {
            left: var(--fa-left, 0);
            right: auto;
            top: var(--fa-top, 0);
            -webkit-transform: scale(var(--fa-layers-scale, 0.25));
            transform: scale(var(--fa-layers-scale, 0.25));
            -webkit-transform-origin: top left;
            transform-origin: top left;
        }

        .fa-1x {
            font-size: 1em;
        }

        .fa-2x {
            font-size: 2em;
        }

        .fa-3x {
            font-size: 3em;
        }

        .fa-4x {
            font-size: 4em;
        }

        .fa-5x {
            font-size: 5em;
        }

        .fa-6x {
            font-size: 6em;
        }

        .fa-7x {
            font-size: 7em;
        }

        .fa-8x {
            font-size: 8em;
        }

        .fa-9x {
            font-size: 9em;
        }

        .fa-10x {
            font-size: 10em;
        }

        .fa-2xs {
            font-size: 0.625em;
            line-height: 0.1em;
            vertical-align: 0.225em;
        }

        .fa-xs {
            font-size: 0.75em;
            line-height: 0.0833333337em;
            vertical-align: 0.125em;
        }

        .fa-sm {
            font-size: 0.875em;
            line-height: 0.0714285718em;
            vertical-align: 0.0535714295em;
        }

        .fa-lg {
            font-size: 1.25em;
            line-height: 0.05em;
            vertical-align: -0.075em;
        }

        .fa-xl {
            font-size: 1.5em;
            line-height: 0.0416666682em;
            vertical-align: -0.125em;
        }

        .fa-2xl {
            font-size: 2em;
            line-height: 0.03125em;
            vertical-align: -0.1875em;
        }

        .fa-fw {
            text-align: center;
            width: 1.25em;
        }

        .fa-ul {
            list-style-type: none;
            margin-left: var(--fa-li-margin, 2.5em);
            padding-left: 0;
        }

        .fa-ul>li {
            position: relative;
        }

        .fa-li {
            left: calc(var(--fa-li-width, 2em) * -1);
            position: absolute;
            text-align: center;
            width: var(--fa-li-width, 2em);
            line-height: inherit;
        }

        .fa-border {
            border-color: var(--fa-border-color, #eee);
            border-radius: var(--fa-border-radius, 0.1em);
            border-style: var(--fa-border-style, solid);
            border-width: var(--fa-border-width, 0.08em);
            padding: var(--fa-border-padding, 0.2em 0.25em 0.15em);
        }

        .fa-pull-left {
            float: left;
            margin-right: var(--fa-pull-margin, 0.3em);
        }

        .fa-pull-right {
            float: right;
            margin-left: var(--fa-pull-margin, 0.3em);
        }

        .fa-beat {
            -webkit-animation-name: fa-beat;
            animation-name: fa-beat;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
            animation-timing-function: var(--fa-animation-timing, ease-in-out);
        }

        .fa-bounce {
            -webkit-animation-name: fa-bounce;
            animation-name: fa-bounce;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
        }

        .fa-fade {
            -webkit-animation-name: fa-fade;
            animation-name: fa-fade;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
        }

        .fa-beat-fade {
            -webkit-animation-name: fa-beat-fade;
            animation-name: fa-beat-fade;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
            animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
        }

        .fa-flip {
            -webkit-animation-name: fa-flip;
            animation-name: fa-flip;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
            animation-timing-function: var(--fa-animation-timing, ease-in-out);
        }

        .fa-shake {
            -webkit-animation-name: fa-shake;
            animation-name: fa-shake;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, linear);
            animation-timing-function: var(--fa-animation-timing, linear);
        }

        .fa-spin {
            -webkit-animation-name: fa-spin;
            animation-name: fa-spin;
            -webkit-animation-delay: var(--fa-animation-delay, 0s);
            animation-delay: var(--fa-animation-delay, 0s);
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 2s);
            animation-duration: var(--fa-animation-duration, 2s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, linear);
            animation-timing-function: var(--fa-animation-timing, linear);
        }

        .fa-spin-reverse {
            --fa-animation-direction: reverse;
        }

        .fa-pulse,
        .fa-spin-pulse {
            -webkit-animation-name: fa-spin;
            animation-name: fa-spin;
            -webkit-animation-direction: var(--fa-animation-direction, normal);
            animation-direction: var(--fa-animation-direction, normal);
            -webkit-animation-duration: var(--fa-animation-duration, 1s);
            animation-duration: var(--fa-animation-duration, 1s);
            -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            animation-iteration-count: var(--fa-animation-iteration-count, infinite);
            -webkit-animation-timing-function: var(--fa-animation-timing, steps(8));
            animation-timing-function: var(--fa-animation-timing, steps(8));
        }

        @media (prefers-reduced-motion: reduce) {

            .fa-beat,
            .fa-bounce,
            .fa-fade,
            .fa-beat-fade,
            .fa-flip,
            .fa-pulse,
            .fa-shake,
            .fa-spin,
            .fa-spin-pulse {
                -webkit-animation-delay: -1ms;
                animation-delay: -1ms;
                -webkit-animation-duration: 1ms;
                animation-duration: 1ms;
                -webkit-animation-iteration-count: 1;
                animation-iteration-count: 1;
                transition-delay: 0s;
                transition-duration: 0s;
            }
        }

        @-webkit-keyframes fa-beat {

            0%,
            90% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            45% {
                -webkit-transform: scale(var(--fa-beat-scale, 1.25));
                transform: scale(var(--fa-beat-scale, 1.25));
            }
        }

        @keyframes fa-beat {

            0%,
            90% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            45% {
                -webkit-transform: scale(var(--fa-beat-scale, 1.25));
                transform: scale(var(--fa-beat-scale, 1.25));
            }
        }

        @-webkit-keyframes fa-bounce {
            0% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }

            10% {
                -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
                transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
            }

            30% {
                -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
                transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
            }

            50% {
                -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
                transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
            }

            57% {
                -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
                transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
            }

            64% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }

            100% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }
        }

        @keyframes fa-bounce {
            0% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }

            10% {
                -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
                transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
            }

            30% {
                -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
                transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
            }

            50% {
                -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
                transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
            }

            57% {
                -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
                transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
            }

            64% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }

            100% {
                -webkit-transform: scale(1, 1) translateY(0);
                transform: scale(1, 1) translateY(0);
            }
        }

        @-webkit-keyframes fa-fade {
            50% {
                opacity: var(--fa-fade-opacity, 0.4);
            }
        }

        @keyframes fa-fade {
            50% {
                opacity: var(--fa-fade-opacity, 0.4);
            }
        }

        @-webkit-keyframes fa-beat-fade {

            0%,
            100% {
                opacity: var(--fa-beat-fade-opacity, 0.4);
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            50% {
                opacity: 1;
                -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
                transform: scale(var(--fa-beat-fade-scale, 1.125));
            }
        }

        @keyframes fa-beat-fade {

            0%,
            100% {
                opacity: var(--fa-beat-fade-opacity, 0.4);
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            50% {
                opacity: 1;
                -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
                transform: scale(var(--fa-beat-fade-scale, 1.125));
            }
        }

        @-webkit-keyframes fa-flip {
            50% {
                -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
                transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
            }
        }

        @keyframes fa-flip {
            50% {
                -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
                transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
            }
        }

        @-webkit-keyframes fa-shake {
            0% {
                -webkit-transform: rotate(-15deg);
                transform: rotate(-15deg);
            }

            4% {
                -webkit-transform: rotate(15deg);
                transform: rotate(15deg);
            }

            8%,
            24% {
                -webkit-transform: rotate(-18deg);
                transform: rotate(-18deg);
            }

            12%,
            28% {
                -webkit-transform: rotate(18deg);
                transform: rotate(18deg);
            }

            16% {
                -webkit-transform: rotate(-22deg);
                transform: rotate(-22deg);
            }

            20% {
                -webkit-transform: rotate(22deg);
                transform: rotate(22deg);
            }

            32% {
                -webkit-transform: rotate(-12deg);
                transform: rotate(-12deg);
            }

            36% {
                -webkit-transform: rotate(12deg);
                transform: rotate(12deg);
            }

            40%,
            100% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
        }

        @keyframes fa-shake {
            0% {
                -webkit-transform: rotate(-15deg);
                transform: rotate(-15deg);
            }

            4% {
                -webkit-transform: rotate(15deg);
                transform: rotate(15deg);
            }

            8%,
            24% {
                -webkit-transform: rotate(-18deg);
                transform: rotate(-18deg);
            }

            12%,
            28% {
                -webkit-transform: rotate(18deg);
                transform: rotate(18deg);
            }

            16% {
                -webkit-transform: rotate(-22deg);
                transform: rotate(-22deg);
            }

            20% {
                -webkit-transform: rotate(22deg);
                transform: rotate(22deg);
            }

            32% {
                -webkit-transform: rotate(-12deg);
                transform: rotate(-12deg);
            }

            36% {
                -webkit-transform: rotate(12deg);
                transform: rotate(12deg);
            }

            40%,
            100% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
        }

        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .fa-rotate-90 {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .fa-rotate-180 {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .fa-rotate-270 {
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
        }

        .fa-flip-horizontal {
            -webkit-transform: scale(-1, 1);
            transform: scale(-1, 1);
        }

        .fa-flip-vertical {
            -webkit-transform: scale(1, -1);
            transform: scale(1, -1);
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical {
            -webkit-transform: scale(-1, -1);
            transform: scale(-1, -1);
        }

        .fa-rotate-by {
            -webkit-transform: rotate(var(--fa-rotate-angle, none));
            transform: rotate(var(--fa-rotate-angle, none));
        }

        .fa-stack {
            display: inline-block;
            vertical-align: middle;
            height: 2em;
            position: relative;
            width: 2.5em;
        }

        .fa-stack-1x,
        .fa-stack-2x {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
            z-index: var(--fa-stack-z-index, auto);
        }

        .svg-inline--fa.fa-stack-1x {
            height: 1em;
            width: 1.25em;
        }

        .svg-inline--fa.fa-stack-2x {
            height: 2em;
            width: 2.5em;
        }

        .fa-inverse {
            color: var(--fa-inverse, #fff);
        }

        .sr-only,
        .fa-sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        .sr-only-focusable:not(:focus),
        .fa-sr-only-focusable:not(:focus) {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        .svg-inline--fa .fa-primary {
            fill: var(--fa-primary-color, currentColor);
            opacity: var(--fa-primary-opacity, 1);
        }

        .svg-inline--fa .fa-secondary {
            fill: var(--fa-secondary-color, currentColor);
            opacity: var(--fa-secondary-opacity, 0.4);
        }

        .svg-inline--fa.fa-swap-opacity .fa-primary {
            opacity: var(--fa-secondary-opacity, 0.4);
        }

        .svg-inline--fa.fa-swap-opacity .fa-secondary {
            opacity: var(--fa-primary-opacity, 1);
        }

        .svg-inline--fa mask .fa-primary,
        .svg-inline--fa mask .fa-secondary {
            fill: black;
        }

        .fad.fa-inverse,
        .fa-duotone.fa-inverse {
            color: var(--fa-inverse, #fff);
        }
    </style>
    <link rel="icon" type="image/svg+xml" href="/vite.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LPPOM</title>
    <style type="text/css" data-vite-dev-id="C:/Users/DELL DEKSTOP/Downloads/lppom/src/index.css">
        /*
  ! tailwindcss v3.2.2 | MIT License | https://tailwindcss.com
  */
        /*
  1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
  2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
  */

        *,
        ::before,
        ::after {
            box-sizing: border-box;
            /* 1 */
            border-width: 0;
            /* 2 */
            border-style: solid;
            /* 2 */
            border-color: #e5e7eb;
            /* 2 */
        }

        ::before,
        ::after {
            --tw-content: '';
        }

        /*
  1. Use a consistent sensible line-height in all browsers.
  2. Prevent adjustments of font size after orientation changes in iOS.
  3. Use a more readable tab size.
  4. Use the user's configured `sans` font-family by default.
  5. Use the user's configured `sans` font-feature-settings by default.
  */

        html {
            line-height: 1.5;
            /* 1 */
            -webkit-text-size-adjust: 100%;
            /* 2 */
            -moz-tab-size: 4;
            /* 3 */
            -o-tab-size: 4;
            tab-size: 4;
            /* 3 */
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            /* 4 */
            font-feature-settings: normal;
            /* 5 */
        }

        /*
  1. Remove the margin in all browsers.
  2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
  */

        body {
            margin: 0;
            /* 1 */
            line-height: inherit;
            /* 2 */
        }

        /*
  1. Add the correct height in Firefox.
  2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
  3. Ensure horizontal rules are visible by default.
  */

        hr {
            height: 0;
            /* 1 */
            color: inherit;
            /* 2 */
            border-top-width: 1px;
            /* 3 */
        }

        /*
  Add the correct text decoration in Chrome, Edge, and Safari.
  */

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
        }

        /*
  Remove the default font size and weight for headings.
  */

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit;
        }

        /*
  Reset links to optimize for opt-in styling instead of opt-out.
  */

        a {
            color: inherit;
            text-decoration: inherit;
        }

        /*
  Add the correct font weight in Edge and Safari.
  */

        b,
        strong {
            font-weight: bolder;
        }

        /*
  1. Use the user's configured `mono` font family by default.
  2. Correct the odd `em` font sizing in all browsers.
  */

        code,
        kbd,
        samp,
        pre {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            /* 1 */
            font-size: 1em;
            /* 2 */
        }

        /*
  Add the correct font size in all browsers.
  */

        small {
            font-size: 80%;
        }

        /*
  Prevent `sub` and `sup` elements from affecting the line height in all browsers.
  */

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        /*
  1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
  2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
  3. Remove gaps between table borders by default.
  */

        table {
            text-indent: 0;
            /* 1 */
            border-color: inherit;
            /* 2 */
            border-collapse: collapse;
            /* 3 */
        }

        /*
  1. Change the font styles in all browsers.
  2. Remove the margin in Firefox and Safari.
  3. Remove default padding in all browsers.
  */

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            /* 1 */
            font-size: 100%;
            /* 1 */
            font-weight: inherit;
            /* 1 */
            line-height: inherit;
            /* 1 */
            color: inherit;
            /* 1 */
            margin: 0;
            /* 2 */
            padding: 0;
            /* 3 */
        }

        /*
  Remove the inheritance of text transform in Edge and Firefox.
  */

        button,
        select {
            text-transform: none;
        }

        /*
  1. Correct the inability to style clickable types in iOS and Safari.
  2. Remove default button styles.
  */

        button,
        [type='button'],
        [type='reset'],
        [type='submit'] {
            -webkit-appearance: button;
            /* 1 */
            background-color: transparent;
            /* 2 */
            background-image: none;
            /* 2 */
        }

        /*
  Use the modern Firefox focus style for all focusable elements.
  */

        :-moz-focusring {
            outline: auto;
        }

        /*
  Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
  */

        :-moz-ui-invalid {
            box-shadow: none;
        }

        /*
  Add the correct vertical alignment in Chrome and Firefox.
  */

        progress {
            vertical-align: baseline;
        }

        /*
  Correct the cursor style of increment and decrement buttons in Safari.
  */

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto;
        }

        /*
  1. Correct the odd appearance in Chrome and Safari.
  2. Correct the outline style in Safari.
  */

        [type='search'] {
            -webkit-appearance: textfield;
            /* 1 */
            outline-offset: -2px;
            /* 2 */
        }

        /*
  Remove the inner padding in Chrome and Safari on macOS.
  */

        ::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        /*
  1. Correct the inability to style clickable types in iOS and Safari.
  2. Change font properties to `inherit` in Safari.
  */

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            /* 1 */
            font: inherit;
            /* 2 */
        }

        /*
  Add the correct display in Chrome and Safari.
  */

        summary {
            display: list-item;
        }

        /*
  Removes the default spacing and border for appropriate elements.
  */

        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
            margin: 0;
        }

        fieldset {
            margin: 0;
            padding: 0;
        }

        legend {
            padding: 0;
        }

        ol,
        ul,
        menu {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        /*
  Prevent resizing textareas horizontally by default.
  */

        textarea {
            resize: vertical;
        }

        /*
  1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
  2. Set the default placeholder color to the user's configured gray 400 color.
  */

        input::-moz-placeholder,
        textarea::-moz-placeholder {
            opacity: 1;
            /* 1 */
            color: #9ca3af;
            /* 2 */
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            /* 1 */
            color: #9ca3af;
            /* 2 */
        }

        /*
  Set the default cursor for buttons.
  */

        button,
        [role="button"] {
            cursor: pointer;
        }

        /*
  Make sure disabled buttons don't get the pointer cursor.
  */
        :disabled {
            cursor: default;
        }

        /*
  1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
  2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
     This can trigger a poorly considered lint error in some tools but is included by design.
  */

        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
            display: block;
            /* 1 */
            vertical-align: middle;
            /* 2 */
        }

        /*
  Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
  */

        img,
        video {
            max-width: 100%;
            height: auto;
        }

        /* Make elements with the HTML hidden attribute stay hidden by default */
        [hidden] {
            display: none;
        }

        :root,
        [data-theme] {
            background-color: hsla(var(--b1) / var(--tw-bg-opacity, 1));
            color: hsla(var(--bc) / var(--tw-text-opacity, 1));
        }

        html {
            -webkit-tap-highlight-color: transparent;
        }

        :root {
            color-scheme: light;
            --pf: 259 94% 41%;
            --sf: 314 100% 38%;
            --af: 174 60% 41%;
            --nf: 219 14% 22%;
            --in: 198 93% 60%;
            --su: 158 64% 52%;
            --wa: 43 96% 56%;
            --er: 0 91% 71%;
            --inc: 198 100% 12%;
            --suc: 158 100% 10%;
            --wac: 43 100% 11%;
            --erc: 0 100% 14%;
            --rounded-box: 1rem;
            --rounded-btn: 0.5rem;
            --rounded-badge: 1.9rem;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 259 94% 51%;
            --pc: 0 0% 100%;
            --s: 314 100% 47%;
            --sc: 0 0% 100%;
            --a: 174 60% 51%;
            --ac: 175 44% 15%;
            --n: 219 14% 28%;
            --nc: 0 0% 100%;
            --b1: 0 0% 100%;
            --b2: 0 0% 95%;
            --b3: 180 2% 90%;
            --bc: 215 28% 17%;
        }

        @media (prefers-color-scheme: dark) {

            :root {
                color-scheme: dark;
                --pf: 262 80% 40%;
                --sf: 316 70% 40%;
                --af: 175 70% 33%;
                --in: 198 93% 60%;
                --su: 158 64% 52%;
                --wa: 43 96% 56%;
                --er: 0 91% 71%;
                --inc: 198 100% 12%;
                --suc: 158 100% 10%;
                --wac: 43 100% 11%;
                --erc: 0 100% 14%;
                --rounded-box: 1rem;
                --rounded-btn: 0.5rem;
                --rounded-badge: 1.9rem;
                --animation-btn: 0.25s;
                --animation-input: .2s;
                --btn-text-case: uppercase;
                --btn-focus-scale: 0.95;
                --border-btn: 1px;
                --tab-border: 1px;
                --tab-radius: 0.5rem;
                --p: 262 80% 50%;
                --pc: 0 0% 100%;
                --s: 316 70% 50%;
                --sc: 0 0% 100%;
                --a: 175 70% 41%;
                --ac: 0 0% 100%;
                --n: 218 18% 12%;
                --nf: 223 17% 8%;
                --nc: 220 13% 69%;
                --b1: 220 18% 20%;
                --b2: 220 17% 17%;
                --b3: 219 18% 15%;
                --bc: 220 13% 69%;
            }
        }

        [data-theme=light] {
            color-scheme: light;
            --pf: 259 94% 41%;
            --sf: 314 100% 38%;
            --af: 174 60% 41%;
            --nf: 219 14% 22%;
            --in: 198 93% 60%;
            --su: 158 64% 52%;
            --wa: 43 96% 56%;
            --er: 0 91% 71%;
            --inc: 198 100% 12%;
            --suc: 158 100% 10%;
            --wac: 43 100% 11%;
            --erc: 0 100% 14%;
            --rounded-box: 1rem;
            --rounded-btn: 0.5rem;
            --rounded-badge: 1.9rem;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 259 94% 51%;
            --pc: 0 0% 100%;
            --s: 314 100% 47%;
            --sc: 0 0% 100%;
            --a: 174 60% 51%;
            --ac: 175 44% 15%;
            --n: 219 14% 28%;
            --nc: 0 0% 100%;
            --b1: 0 0% 100%;
            --b2: 0 0% 95%;
            --b3: 180 2% 90%;
            --bc: 215 28% 17%;
        }

        [data-theme=dark] {
            color-scheme: dark;
            --pf: 262 80% 40%;
            --sf: 316 70% 40%;
            --af: 175 70% 33%;
            --in: 198 93% 60%;
            --su: 158 64% 52%;
            --wa: 43 96% 56%;
            --er: 0 91% 71%;
            --inc: 198 100% 12%;
            --suc: 158 100% 10%;
            --wac: 43 100% 11%;
            --erc: 0 100% 14%;
            --rounded-box: 1rem;
            --rounded-btn: 0.5rem;
            --rounded-badge: 1.9rem;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 262 80% 50%;
            --pc: 0 0% 100%;
            --s: 316 70% 50%;
            --sc: 0 0% 100%;
            --a: 175 70% 41%;
            --ac: 0 0% 100%;
            --n: 218 18% 12%;
            --nf: 223 17% 8%;
            --nc: 220 13% 69%;
            --b1: 220 18% 20%;
            --b2: 220 17% 17%;
            --b3: 219 18% 15%;
            --bc: 220 13% 69%;
        }

        [data-theme=cupcake] {
            color-scheme: light;
            --pf: 183 47% 47%;
            --sf: 338 71% 62%;
            --af: 39 84% 46%;
            --nf: 280 46% 11%;
            --in: 198 93% 60%;
            --su: 158 64% 52%;
            --wa: 43 96% 56%;
            --er: 0 91% 71%;
            --pc: 183 100% 12%;
            --sc: 338 100% 16%;
            --ac: 39 100% 12%;
            --nc: 280 83% 83%;
            --inc: 198 100% 12%;
            --suc: 158 100% 10%;
            --wac: 43 100% 11%;
            --erc: 0 100% 14%;
            --rounded-box: 1rem;
            --rounded-badge: 1.9rem;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --p: 183 47% 59%;
            --s: 338 71% 78%;
            --a: 39 84% 58%;
            --n: 280 46% 14%;
            --b1: 24 33% 97%;
            --b2: 27 22% 92%;
            --b3: 22 14% 89%;
            --bc: 280 46% 14%;
            --rounded-btn: 1.9rem;
            --tab-border: 2px;
            --tab-radius: .5rem;
        }

        [data-theme=bumblebee] {
            color-scheme: light;
            --pf: 41 74% 42%;
            --sf: 50 94% 46%;
            --af: 240 33% 11%;
            --nf: 240 33% 11%;
            --b2: 0 0% 90%;
            --b3: 0 0% 81%;
            --in: 198 93% 60%;
            --su: 158 64% 52%;
            --wa: 43 96% 56%;
            --er: 0 91% 71%;
            --bc: 0 0% 20%;
            --ac: 240 60% 83%;
            --nc: 240 60% 83%;
            --inc: 198 100% 12%;
            --suc: 158 100% 10%;
            --wac: 43 100% 11%;
            --erc: 0 100% 14%;
            --rounded-box: 1rem;
            --rounded-btn: 0.5rem;
            --rounded-badge: 1.9rem;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 41 74% 53%;
            --pc: 240 33% 14%;
            --s: 50 94% 58%;
            --sc: 240 33% 14%;
            --a: 240 33% 14%;
            --n: 240 33% 14%;
            --b1: 0 0% 100%;
        }

        [data-theme=emerald] {
            color-scheme: light;
            --pf: 141 50% 48%;
            --sf: 219 96% 48%;
            --af: 10 81% 45%;
            --nf: 219 20% 20%;
            --b2: 0 0% 90%;
            --b3: 0 0% 81%;
            --in: 198 93% 60%;
            --su: 158 64% 52%;
            --wa: 43 96% 56%;
            --er: 0 91% 71%;
            --inc: 198 100% 12%;
            --suc: 158 100% 10%;
            --wac: 43 100% 11%;
            --erc: 0 100% 14%;
            --rounded-box: 1rem;
            --rounded-btn: 0.5rem;
            --rounded-badge: 1.9rem;
            --btn-text-case: uppercase;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 141 50% 60%;
            --pc: 151 28% 19%;
            --s: 219 96% 60%;
            --sc: 210 20% 98%;
            --a: 10 81% 56%;
            --ac: 210 20% 98%;
            --n: 219 20% 25%;
            --nc: 210 20% 98%;
            --b1: 0 0% 100%;
            --bc: 219 20% 25%;
            --animation-btn: 0;
            --animation-input: 0;
            --btn-focus-scale: 1;
        }

        [data-theme=corporate] {
            color-scheme: light;
            --pf: 229 96% 51%;
            --sf: 215 26% 47%;
            --af: 154 49% 48%;
            --nf: 233 27% 10%;
            --b2: 0 0% 90%;
            --b3: 0 0% 81%;
            --in: 198 93% 60%;
            --su: 158 64% 52%;
            --wa: 43 96% 56%;
            --er: 0 91% 71%;
            --pc: 229 100% 93%;
            --sc: 215 100% 12%;
            --ac: 154 100% 12%;
            --inc: 198 100% 12%;
            --suc: 158 100% 10%;
            --wac: 43 100% 11%;
            --erc: 0 100% 14%;
            --btn-text-case: uppercase;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 229 96% 64%;
            --s: 215 26% 59%;
            --a: 154 49% 60%;
            --n: 233 27% 13%;
            --nc: 210 38% 95%;
            --b1: 0 0% 100%;
            --bc: 233 27% 13%;
            --rounded-box: 0.25rem;
            --rounded-btn: .125rem;
            --rounded-badge: .125rem;
            --animation-btn: 0;
            --animation-input: 0;
            --btn-focus-scale: 1;
        }

        [data-theme=synthwave] {
            color-scheme: dark;
            --pf: 321 70% 55%;
            --sf: 197 87% 52%;
            --af: 48 89% 46%;
            --nf: 253 61% 15%;
            --b2: 254 59% 23%;
            --b3: 254 59% 21%;
            --pc: 321 100% 14%;
            --sc: 197 100% 13%;
            --ac: 48 100% 11%;
            --rounded-box: 1rem;
            --rounded-btn: 0.5rem;
            --rounded-badge: 1.9rem;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 321 70% 69%;
            --s: 197 87% 65%;
            --a: 48 89% 57%;
            --n: 253 61% 19%;
            --nc: 260 60% 98%;
            --b1: 254 59% 26%;
            --bc: 260 60% 98%;
            --in: 199 87% 64%;
            --inc: 257 63% 17%;
            --su: 168 74% 68%;
            --suc: 257 63% 17%;
            --wa: 48 89% 57%;
            --wac: 257 63% 17%;
            --er: 352 74% 57%;
            --erc: 260 60% 98%;
        }

        [data-theme=retro] {
            color-scheme: light;
            --pf: 3 74% 61%;
            --sf: 145 27% 58%;
            --af: 49 67% 61%;
            --nf: 42 17% 34%;
            --inc: 221 100% 91%;
            --suc: 142 100% 87%;
            --wac: 32 100% 9%;
            --erc: 0 100% 90%;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 3 74% 76%;
            --pc: 345 5% 15%;
            --s: 145 27% 72%;
            --sc: 345 5% 15%;
            --a: 49 67% 76%;
            --ac: 345 5% 15%;
            --n: 42 17% 42%;
            --nc: 45 47% 80%;
            --b1: 45 47% 80%;
            --b2: 45 37% 72%;
            --b3: 42 36% 65%;
            --bc: 345 5% 15%;
            --in: 221 83% 53%;
            --su: 142 76% 36%;
            --wa: 32 95% 44%;
            --er: 0 72% 51%;
            --rounded-box: 0.4rem;
            --rounded-btn: 0.4rem;
            --rounded-badge: 0.4rem;
        }

        [data-theme=cyberpunk] {
            color-scheme: light;
            --pf: 345 100% 58%;
            --sf: 195 80% 56%;
            --af: 276 74% 57%;
            --nf: 57 100% 10%;
            --b2: 56 100% 45%;
            --b3: 56 100% 41%;
            --in: 198 93% 60%;
            --su: 158 64% 52%;
            --wa: 43 96% 56%;
            --er: 0 91% 71%;
            --bc: 56 100% 10%;
            --pc: 345 100% 15%;
            --sc: 195 100% 14%;
            --ac: 276 100% 14%;
            --inc: 198 100% 12%;
            --suc: 158 100% 10%;
            --wac: 43 100% 11%;
            --erc: 0 100% 14%;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
            --p: 345 100% 73%;
            --s: 195 80% 70%;
            --a: 276 74% 71%;
            --n: 57 100% 13%;
            --nc: 56 100% 50%;
            --b1: 56 100% 50%;
            --rounded-box: 0;
            --rounded-btn: 0;
            --rounded-badge: 0;
            --tab-radius: 0;
        }

        [data-theme=valentine] {
            color-scheme: light;
            --pf: 353 74% 54%;
            --sf: 254 86% 61%;
            --af: 181 56% 56%;
            --nf: 336 43% 38%;
            --b2: 318 46% 80%;
            --b3: 318 46% 72%;
            --pc: 353 100% 13%;
            --sc: 254 100% 15%;
            --ac: 181 100% 14%;
            --inc: 221 100% 91%;
            --suc: 142 100% 87%;
            --wac: 32 100% 9%;
            --erc: 0 100% 90%;
            --rounded-box: 1rem;
            --rounded-badge: 1.9rem;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 353 74% 67%;
            --s: 254 86% 77%;
            --a: 181 56% 70%;
            --n: 336 43% 48%;
            --nc: 318 46% 89%;
            --b1: 318 46% 89%;
            --bc: 344 38% 28%;
            --in: 221 83% 53%;
            --su: 142 76% 36%;
            --wa: 32 95% 44%;
            --er: 0 72% 51%;
            --rounded-btn: 1.9rem;
        }

        [data-theme=halloween] {
            color-scheme: dark;
            --pf: 32 89% 42%;
            --sf: 271 46% 34%;
            --af: 91 100% 26%;
            --nf: 180 4% 9%;
            --b2: 0 0% 12%;
            --b3: 0 0% 10%;
            --bc: 0 0% 83%;
            --sc: 271 100% 88%;
            --ac: 91 100% 7%;
            --nc: 180 5% 82%;
            --inc: 221 100% 91%;
            --suc: 142 100% 87%;
            --wac: 32 100% 9%;
            --erc: 0 100% 90%;
            --rounded-box: 1rem;
            --rounded-btn: 0.5rem;
            --rounded-badge: 1.9rem;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 32 89% 52%;
            --pc: 180 7% 8%;
            --s: 271 46% 42%;
            --a: 91 100% 33%;
            --n: 180 4% 11%;
            --b1: 0 0% 13%;
            --in: 221 83% 53%;
            --su: 142 76% 36%;
            --wa: 32 95% 44%;
            --er: 0 72% 51%;
        }

        [data-theme=garden] {
            color-scheme: light;
            --pf: 139 16% 34%;
            --sf: 97 37% 75%;
            --af: 0 68% 75%;
            --nf: 0 4% 28%;
            --b2: 0 4% 82%;
            --b3: 0 4% 74%;
            --in: 198 93% 60%;
            --su: 158 64% 52%;
            --wa: 43 96% 56%;
            --er: 0 91% 71%;
            --pc: 139 100% 89%;
            --inc: 198 100% 12%;
            --suc: 158 100% 10%;
            --wac: 43 100% 11%;
            --erc: 0 100% 14%;
            --rounded-box: 1rem;
            --rounded-btn: 0.5rem;
            --rounded-badge: 1.9rem;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 139 16% 43%;
            --s: 97 37% 93%;
            --sc: 96 32% 15%;
            --a: 0 68% 94%;
            --ac: 0 22% 16%;
            --n: 0 4% 35%;
            --nc: 0 4% 91%;
            --b1: 0 4% 91%;
            --bc: 0 3% 6%;
        }

        [data-theme=forest] {
            color-scheme: dark;
            --pf: 141 72% 34%;
            --sf: 141 75% 38%;
            --af: 35 69% 42%;
            --nf: 0 10% 5%;
            --b2: 0 12% 7%;
            --b3: 0 12% 7%;
            --in: 198 93% 60%;
            --su: 158 64% 52%;
            --wa: 43 96% 56%;
            --er: 0 91% 71%;
            --bc: 0 12% 82%;
            --sc: 141 100% 10%;
            --ac: 35 100% 10%;
            --nc: 0 7% 81%;
            --inc: 198 100% 12%;
            --suc: 158 100% 10%;
            --wac: 43 100% 11%;
            --erc: 0 100% 14%;
            --rounded-box: 1rem;
            --rounded-badge: 1.9rem;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 141 72% 42%;
            --pc: 141 100% 88%;
            --s: 141 75% 48%;
            --a: 35 69% 52%;
            --n: 0 10% 6%;
            --b1: 0 12% 8%;
            --rounded-btn: 1.9rem;
        }

        [data-theme=aqua] {
            color-scheme: dark;
            --pf: 182 93% 40%;
            --sf: 274 31% 45%;
            --af: 47 100% 64%;
            --nf: 205 54% 40%;
            --b2: 219 53% 39%;
            --b3: 219 53% 35%;
            --bc: 219 100% 89%;
            --sc: 274 100% 91%;
            --ac: 47 100% 16%;
            --nc: 205 100% 90%;
            --inc: 221 100% 91%;
            --suc: 142 100% 87%;
            --wac: 32 100% 9%;
            --erc: 0 100% 90%;
            --rounded-box: 1rem;
            --rounded-btn: 0.5rem;
            --rounded-badge: 1.9rem;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 182 93% 49%;
            --pc: 181 100% 17%;
            --s: 274 31% 57%;
            --a: 47 100% 80%;
            --n: 205 54% 50%;
            --b1: 219 53% 43%;
            --in: 221 83% 53%;
            --su: 142 76% 36%;
            --wa: 32 95% 44%;
            --er: 0 72% 51%;
        }

        [data-theme=lofi] {
            color-scheme: light;
            --pf: 0 0% 4%;
            --sf: 0 2% 8%;
            --af: 0 0% 12%;
            --nf: 0 0% 0%;
            --btn-text-case: uppercase;
            --border-btn: 1px;
            --tab-border: 1px;
            --p: 0 0% 5%;
            --pc: 0 0% 100%;
            --s: 0 2% 10%;
            --sc: 0 0% 100%;
            --a: 0 0% 15%;
            --ac: 0 0% 100%;
            --n: 0 0% 0%;
            --nc: 0 0% 100%;
            --b1: 0 0% 100%;
            --b2: 0 0% 95%;
            --b3: 0 2% 90%;
            --bc: 0 0% 0%;
            --in: 212 100% 48%;
            --inc: 0 0% 100%;
            --su: 137 72% 46%;
            --suc: 0 0% 100%;
            --wa: 5 100% 66%;
            --wac: 0 0% 100%;
            --er: 325 78% 49%;
            --erc: 0 0% 100%;
            --rounded-box: 0.25rem;
            --rounded-btn: 0.125rem;
            --rounded-badge: 0.125rem;
            --animation-btn: 0;
            --animation-input: 0;
            --btn-focus-scale: 1;
            --tab-radius: 0;
        }

        [data-theme=pastel] {
            color-scheme: light;
            --pf: 284 22% 64%;
            --sf: 352 70% 70%;
            --af: 158 55% 65%;
            --nf: 199 44% 49%;
            --in: 198 93% 60%;
            --su: 158 64% 52%;
            --wa: 43 96% 56%;
            --er: 0 91% 71%;
            --bc: 0 0% 20%;
            --pc: 284 59% 16%;
            --sc: 352 100% 18%;
            --ac: 158 100% 16%;
            --nc: 199 100% 12%;
            --inc: 198 100% 12%;
            --suc: 158 100% 10%;
            --wac: 43 100% 11%;
            --erc: 0 100% 14%;
            --rounded-box: 1rem;
            --rounded-badge: 1.9rem;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 284 22% 80%;
            --s: 352 70% 88%;
            --a: 158 55% 81%;
            --n: 199 44% 61%;
            --b1: 0 0% 100%;
            --b2: 210 20% 98%;
            --b3: 216 12% 84%;
            --rounded-btn: 1.9rem;
        }

        [data-theme=fantasy] {
            color-scheme: light;
            --pf: 296 83% 20%;
            --sf: 200 100% 30%;
            --af: 31 94% 41%;
            --nf: 215 28% 13%;
            --b2: 0 0% 90%;
            --b3: 0 0% 81%;
            --in: 198 93% 60%;
            --su: 158 64% 52%;
            --wa: 43 96% 56%;
            --er: 0 91% 71%;
            --pc: 296 100% 85%;
            --sc: 200 100% 87%;
            --ac: 31 100% 10%;
            --nc: 215 62% 83%;
            --inc: 198 100% 12%;
            --suc: 158 100% 10%;
            --wac: 43 100% 11%;
            --erc: 0 100% 14%;
            --rounded-box: 1rem;
            --rounded-btn: 0.5rem;
            --rounded-badge: 1.9rem;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 296 83% 25%;
            --s: 200 100% 37%;
            --a: 31 94% 51%;
            --n: 215 28% 17%;
            --b1: 0 0% 100%;
            --bc: 215 28% 17%;
        }

        [data-theme=wireframe] {
            color-scheme: light;
            --pf: 0 0% 58%;
            --sf: 0 0% 58%;
            --af: 0 0% 58%;
            --nf: 0 0% 74%;
            --bc: 0 0% 20%;
            --pc: 0 0% 14%;
            --sc: 0 0% 14%;
            --ac: 0 0% 14%;
            --nc: 0 0% 18%;
            --inc: 240 100% 90%;
            --suc: 120 100% 85%;
            --wac: 60 100% 10%;
            --erc: 0 100% 90%;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            font-family: Chalkboard, comic sans ms, "sanssecondaryerif";
            --p: 0 0% 72%;
            --s: 0 0% 72%;
            --a: 0 0% 72%;
            --n: 0 0% 92%;
            --b1: 0 0% 100%;
            --b2: 0 0% 93%;
            --b3: 0 0% 87%;
            --in: 240 100% 50%;
            --su: 120 100% 25%;
            --wa: 60 30% 50%;
            --er: 0 100% 50%;
            --rounded-box: 0.2rem;
            --rounded-btn: 0.2rem;
            --rounded-badge: 0.2rem;
            --tab-radius: 0.2rem;
        }

        [data-theme=black] {
            color-scheme: dark;
            --pf: 0 2% 16%;
            --sf: 0 2% 16%;
            --af: 0 2% 16%;
            --bc: 0 0% 80%;
            --pc: 0 5% 84%;
            --sc: 0 5% 84%;
            --ac: 0 5% 84%;
            --nc: 0 3% 83%;
            --inc: 240 100% 90%;
            --suc: 120 100% 85%;
            --wac: 60 100% 10%;
            --erc: 0 100% 90%;
            --border-btn: 1px;
            --tab-border: 1px;
            --p: 0 2% 20%;
            --s: 0 2% 20%;
            --a: 0 2% 20%;
            --b1: 0 0% 0%;
            --b2: 0 0% 5%;
            --b3: 0 2% 10%;
            --n: 0 1% 15%;
            --nf: 0 2% 20%;
            --in: 240 100% 50%;
            --su: 120 100% 25%;
            --wa: 60 100% 50%;
            --er: 0 100% 50%;
            --rounded-box: 0;
            --rounded-btn: 0;
            --rounded-badge: 0;
            --animation-btn: 0;
            --animation-input: 0;
            --btn-text-case: lowercase;
            --btn-focus-scale: 1;
            --tab-radius: 0;
        }

        [data-theme=luxury] {
            color-scheme: dark;
            --pf: 0 0% 80%;
            --sf: 218 54% 14%;
            --af: 319 22% 21%;
            --nf: 270 4% 7%;
            --pc: 0 0% 20%;
            --sc: 218 100% 84%;
            --ac: 319 85% 85%;
            --inc: 202 100% 14%;
            --suc: 89 100% 10%;
            --wac: 54 100% 13%;
            --erc: 0 100% 14%;
            --rounded-box: 1rem;
            --rounded-btn: 0.5rem;
            --rounded-badge: 1.9rem;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 0 0% 100%;
            --s: 218 54% 18%;
            --a: 319 22% 26%;
            --n: 270 4% 9%;
            --nc: 37 67% 58%;
            --b1: 240 10% 4%;
            --b2: 270 4% 9%;
            --b3: 270 2% 18%;
            --bc: 37 67% 58%;
            --in: 202 100% 70%;
            --su: 89 62% 52%;
            --wa: 54 69% 64%;
            --er: 0 100% 72%;
        }

        [data-theme=dracula] {
            color-scheme: dark;
            --pf: 326 100% 59%;
            --sf: 265 89% 62%;
            --af: 31 100% 57%;
            --nf: 230 15% 24%;
            --b2: 231 15% 17%;
            --b3: 231 15% 15%;
            --pc: 326 100% 15%;
            --sc: 265 100% 16%;
            --ac: 31 100% 14%;
            --nc: 230 71% 86%;
            --inc: 191 100% 15%;
            --suc: 135 100% 13%;
            --wac: 65 100% 15%;
            --erc: 0 100% 93%;
            --rounded-box: 1rem;
            --rounded-btn: 0.5rem;
            --rounded-badge: 1.9rem;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 326 100% 74%;
            --s: 265 89% 78%;
            --a: 31 100% 71%;
            --n: 230 15% 30%;
            --b1: 231 15% 18%;
            --bc: 60 30% 96%;
            --in: 191 97% 77%;
            --su: 135 94% 65%;
            --wa: 65 92% 76%;
            --er: 0 100% 67%;
        }

        [data-theme=cmyk] {
            color-scheme: light;
            --pf: 203 83% 48%;
            --sf: 335 78% 48%;
            --af: 56 100% 48%;
            --nf: 0 0% 8%;
            --b2: 0 0% 90%;
            --b3: 0 0% 81%;
            --bc: 0 0% 20%;
            --pc: 203 100% 12%;
            --sc: 335 100% 92%;
            --ac: 56 100% 12%;
            --nc: 0 0% 82%;
            --inc: 192 100% 10%;
            --suc: 291 100% 88%;
            --wac: 25 100% 11%;
            --erc: 4 100% 91%;
            --rounded-box: 1rem;
            --rounded-btn: 0.5rem;
            --rounded-badge: 1.9rem;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 203 83% 60%;
            --s: 335 78% 60%;
            --a: 56 100% 60%;
            --n: 0 0% 10%;
            --b1: 0 0% 100%;
            --in: 192 48% 52%;
            --su: 291 48% 38%;
            --wa: 25 85% 57%;
            --er: 4 81% 56%;
        }

        [data-theme=autumn] {
            color-scheme: light;
            --pf: 344 96% 22%;
            --sf: 0 63% 47%;
            --af: 27 56% 50%;
            --nf: 22 17% 35%;
            --b2: 0 0% 85%;
            --b3: 0 0% 77%;
            --bc: 0 0% 19%;
            --pc: 344 100% 86%;
            --sc: 0 100% 92%;
            --ac: 27 100% 13%;
            --nc: 22 100% 89%;
            --inc: 187 100% 10%;
            --suc: 165 100% 9%;
            --wac: 30 100% 10%;
            --erc: 354 100% 90%;
            --rounded-box: 1rem;
            --rounded-btn: 0.5rem;
            --rounded-badge: 1.9rem;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 344 96% 28%;
            --s: 0 63% 58%;
            --a: 27 56% 63%;
            --n: 22 17% 44%;
            --b1: 0 0% 95%;
            --in: 187 48% 50%;
            --su: 165 34% 43%;
            --wa: 30 84% 50%;
            --er: 354 79% 49%;
        }

        [data-theme=business] {
            color-scheme: dark;
            --pf: 210 64% 24%;
            --sf: 200 13% 44%;
            --af: 13 80% 48%;
            --nf: 213 14% 13%;
            --b2: 0 0% 11%;
            --b3: 0 0% 10%;
            --bc: 0 0% 83%;
            --pc: 210 100% 86%;
            --sc: 200 100% 11%;
            --ac: 13 100% 12%;
            --nc: 213 28% 83%;
            --inc: 199 100% 88%;
            --suc: 144 100% 11%;
            --wac: 39 100% 12%;
            --erc: 6 100% 89%;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 210 64% 31%;
            --s: 200 13% 55%;
            --a: 13 80% 60%;
            --n: 213 14% 16%;
            --b1: 0 0% 13%;
            --in: 199 100% 42%;
            --su: 144 31% 56%;
            --wa: 39 64% 60%;
            --er: 6 56% 43%;
            --rounded-box: 0.25rem;
            --rounded-btn: .125rem;
            --rounded-badge: .125rem;
        }

        [data-theme=acid] {
            color-scheme: light;
            --pf: 303 100% 40%;
            --sf: 27 100% 40%;
            --af: 72 98% 40%;
            --nf: 238 43% 14%;
            --b2: 0 0% 88%;
            --b3: 0 0% 79%;
            --bc: 0 0% 20%;
            --pc: 303 100% 90%;
            --sc: 27 100% 10%;
            --ac: 72 100% 10%;
            --nc: 238 99% 83%;
            --inc: 210 100% 12%;
            --suc: 149 100% 12%;
            --wac: 53 100% 11%;
            --erc: 1 100% 89%;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 303 100% 50%;
            --s: 27 100% 50%;
            --a: 72 98% 50%;
            --n: 238 43% 17%;
            --b1: 0 0% 98%;
            --in: 210 92% 58%;
            --su: 149 50% 58%;
            --wa: 53 93% 57%;
            --er: 1 100% 45%;
            --rounded-box: 1.25rem;
            --rounded-btn: 1rem;
            --rounded-badge: 1rem;
        }

        [data-theme=lemonade] {
            color-scheme: light;
            --pf: 89 96% 24%;
            --sf: 60 81% 44%;
            --af: 63 80% 71%;
            --nf: 238 43% 14%;
            --b2: 0 0% 90%;
            --b3: 0 0% 81%;
            --bc: 0 0% 20%;
            --pc: 89 100% 86%;
            --sc: 60 100% 11%;
            --ac: 63 100% 18%;
            --nc: 238 99% 83%;
            --inc: 192 79% 17%;
            --suc: 74 100% 16%;
            --wac: 50 100% 15%;
            --erc: 1 100% 17%;
            --rounded-box: 1rem;
            --rounded-btn: 0.5rem;
            --rounded-badge: 1.9rem;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 89 96% 31%;
            --s: 60 81% 55%;
            --a: 63 80% 88%;
            --n: 238 43% 17%;
            --b1: 0 0% 100%;
            --in: 192 39% 85%;
            --su: 74 76% 79%;
            --wa: 50 87% 75%;
            --er: 1 70% 83%;
        }

        [data-theme=night] {
            color-scheme: dark;
            --pf: 198 93% 48%;
            --sf: 234 89% 59%;
            --af: 329 86% 56%;
            --b2: 222 47% 10%;
            --b3: 222 47% 9%;
            --bc: 222 66% 82%;
            --pc: 198 100% 12%;
            --sc: 234 100% 15%;
            --ac: 329 100% 14%;
            --nc: 217 76% 83%;
            --inc: 198 100% 10%;
            --suc: 172 100% 10%;
            --wac: 41 100% 13%;
            --erc: 351 100% 14%;
            --rounded-box: 1rem;
            --rounded-btn: 0.5rem;
            --rounded-badge: 1.9rem;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 198 93% 60%;
            --s: 234 89% 74%;
            --a: 329 86% 70%;
            --n: 217 33% 17%;
            --nf: 217 30% 22%;
            --b1: 222 47% 11%;
            --in: 198 90% 48%;
            --su: 172 66% 50%;
            --wa: 41 88% 64%;
            --er: 351 95% 71%;
        }

        [data-theme=coffee] {
            color-scheme: dark;
            --pf: 30 67% 46%;
            --sf: 182 25% 16%;
            --af: 194 74% 20%;
            --nf: 300 20% 5%;
            --b2: 306 19% 10%;
            --b3: 306 19% 9%;
            --pc: 30 100% 12%;
            --sc: 182 67% 84%;
            --ac: 194 100% 85%;
            --nc: 300 14% 81%;
            --inc: 171 100% 13%;
            --suc: 93 100% 12%;
            --wac: 43 100% 14%;
            --erc: 10 100% 15%;
            --rounded-box: 1rem;
            --rounded-btn: 0.5rem;
            --rounded-badge: 1.9rem;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 30 67% 58%;
            --s: 182 25% 20%;
            --a: 194 74% 25%;
            --n: 300 20% 6%;
            --b1: 306 19% 11%;
            --bc: 37 8% 42%;
            --in: 171 37% 67%;
            --su: 93 25% 62%;
            --wa: 43 100% 69%;
            --er: 10 95% 75%;
        }

        [data-theme=winter] {
            color-scheme: light;
            --pf: 212 100% 41%;
            --sf: 247 47% 35%;
            --af: 310 49% 42%;
            --nf: 217 92% 8%;
            --pc: 212 100% 90%;
            --sc: 247 100% 89%;
            --ac: 310 100% 90%;
            --nc: 217 100% 82%;
            --inc: 192 100% 16%;
            --suc: 182 100% 13%;
            --wac: 32 100% 17%;
            --erc: 0 100% 14%;
            --rounded-box: 1rem;
            --rounded-btn: 0.5rem;
            --rounded-badge: 1.9rem;
            --animation-btn: 0.25s;
            --animation-input: .2s;
            --btn-text-case: uppercase;
            --btn-focus-scale: 0.95;
            --border-btn: 1px;
            --tab-border: 1px;
            --tab-radius: 0.5rem;
            --p: 212 100% 51%;
            --s: 247 47% 43%;
            --a: 310 49% 52%;
            --n: 217 92% 10%;
            --b1: 0 0% 100%;
            --b2: 217 100% 97%;
            --b3: 219 44% 92%;
            --bc: 214 30% 32%;
            --in: 192 93% 78%;
            --su: 182 47% 66%;
            --wa: 32 62% 84%;
            --er: 0 63% 72%;
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
        }

        @keyframes spin {

            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown>*:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        .dropdown .dropdown-content {
            visibility: hidden;
            position: absolute;
            z-index: 50;
            opacity: 0;
            transform-origin: top;
            --tw-scale-x: .95;
            --tw-scale-y: .95;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
            transition-duration: 200ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }

        .dropdown-end .dropdown-content {
            right: 0px;
        }

        .dropdown-left .dropdown-content {
            top: 0px;
            right: 100%;
            bottom: auto;
            transform-origin: right;
        }

        .dropdown-right .dropdown-content {
            left: 100%;
            top: 0px;
            bottom: auto;
            transform-origin: left;
        }

        .dropdown-bottom .dropdown-content {
            bottom: auto;
            top: 100%;
            transform-origin: top;
        }

        .dropdown-top .dropdown-content {
            bottom: 100%;
            top: auto;
            transform-origin: bottom;
        }

        .dropdown-end.dropdown-right .dropdown-content {
            bottom: 0px;
            top: auto;
        }

        .dropdown-end.dropdown-left .dropdown-content {
            bottom: 0px;
            top: auto;
        }

        .dropdown.dropdown-open .dropdown-content,
        .dropdown.dropdown-hover:hover .dropdown-content,
        .dropdown:not(.dropdown-hover):focus .dropdown-content,
        .dropdown:not(.dropdown-hover):focus-within .dropdown-content {
            visibility: visible;
            opacity: 1;
        }

        .label {
            display: flex;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            align-items: center;
            justify-content: space-between;
            padding-left: 0.25rem;
            padding-right: 0.25rem;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .btm-nav>*:where(.active) {
            border-top-width: 2px;
            --tw-bg-opacity: 1;
            background-color: hsl(var(--b1) / var(--tw-bg-opacity));
        }

        .btm-nav>* .label {
            font-size: 1rem;
            line-height: 1.5rem;
        }

        @keyframes button-pop {

            0% {
                transform: scale(var(--btn-focus-scale, 0.95));
            }

            40% {
                transform: scale(1.02);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes checkmark {

            0% {
                background-position-y: 5px;
            }

            50% {
                background-position-y: -2px;
            }

            100% {
                background-position-y: 0;
            }
        }

        .dropdown.dropdown-open .dropdown-content,
        .dropdown.dropdown-hover:hover .dropdown-content,
        .dropdown:focus .dropdown-content,
        .dropdown:focus-within .dropdown-content {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .label a:hover {
            --tw-text-opacity: 1;
            color: hsl(var(--bc) / var(--tw-text-opacity));
        }

        .menu :where(li:not(.menu-title):not(:empty))> :where(:not(ul).active),
        .menu :where(li:not(.menu-title):not(:empty))> :where(*:not(ul):active) {
            --tw-bg-opacity: 1;
            background-color: hsl(var(--p) / var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: hsl(var(--pc) / var(--tw-text-opacity));
        }

        @keyframes progress-loading {

            50% {
                left: 107%;
            }
        }

        @keyframes radiomark {

            0% {
                box-shadow: 0 0 0 12px hsl(var(--b1)) inset, 0 0 0 12px hsl(var(--b1)) inset;
            }

            50% {
                box-shadow: 0 0 0 3px hsl(var(--b1)) inset, 0 0 0 3px hsl(var(--b1)) inset;
            }

            100% {
                box-shadow: 0 0 0 4px hsl(var(--b1)) inset, 0 0 0 4px hsl(var(--b1)) inset;
            }
        }

        @keyframes rating-pop {

            0% {
                transform: translateY(-0.125em);
            }

            40% {
                transform: translateY(-0.125em);
            }

            100% {
                transform: translateY(0);
            }
        }

        .table tr.active th,
        .table tr.active td,
        .table tr.active:nth-child(even) th,
        .table tr.active:nth-child(even) td {
            --tw-bg-opacity: 1;
            background-color: hsl(var(--b3, var(--b2)) / var(--tw-bg-opacity));
        }

        @keyframes toast-pop {

            0% {
                transform: scale(0.9);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .rounded-box {
            border-radius: var(--rounded-box, 1rem);
        }

        .btm-nav-xs>*:where(.active) {
            border-top-width: 1px;
        }

        .btm-nav-sm>*:where(.active) {
            border-top-width: 2px;
        }

        .btm-nav-md>*:where(.active) {
            border-top-width: 2px;
        }

        .btm-nav-lg>*:where(.active) {
            border-top-width: 4px;
        }

        .absolute {
            position: absolute;
        }

        .relative {
            position: relative;
        }

        .-top-16 {
            top: -4rem;
        }

        .left-28 {
            left: 7rem;
        }

        .bottom-0 {
            bottom: 0px;
        }

        .left-0 {
            left: 0px;
        }

        .bottom-20 {
            bottom: 5rem;
        }

        .right-0 {
            right: 0px;
        }

        .z-20 {
            z-index: 20;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .my-3 {
            margin-top: 0.75rem;
            margin-bottom: 0.75rem;
        }

        .my-10 {
            margin-top: 2.5rem;
            margin-bottom: 2.5rem;
        }

        .my-5 {
            margin-top: 1.25rem;
            margin-bottom: 1.25rem;
        }

        .-mr-2 {
            margin-right: -0.5rem;
        }

        .mr-5 {
            margin-right: 1.25rem;
        }

        .mb-2 {
            margin-bottom: 0.5rem;
        }

        .mt-28 {
            margin-top: 7rem;
        }

        .mr-24 {
            margin-right: 6rem;
        }

        .mt-3 {
            margin-top: 0.75rem;
        }

        .ml-3 {
            margin-left: 0.75rem;
        }

        .mb-3 {
            margin-bottom: 0.75rem;
        }

        .mb-1 {
            margin-bottom: 0.25rem;
        }

        .mb-6 {
            margin-bottom: 1.5rem;
        }

        .mr-3 {
            margin-right: 0.75rem;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .mt-2 {
            margin-top: 0.5rem;
        }

        .mt-32 {
            margin-top: 8rem;
        }

        .mb-7 {
            margin-bottom: 1.75rem;
        }

        .mt-9 {
            margin-top: 2.25rem;
        }

        .mr-8 {
            margin-right: 2rem;
        }

        .mt-16 {
            margin-top: 4rem;
        }

        .mb-5 {
            margin-bottom: 1.25rem;
        }

        .mt-10 {
            margin-top: 2.5rem;
        }

        .mt-14 {
            margin-top: 3.5rem;
        }

        .ml-12 {
            margin-left: 3rem;
        }

        .ml-8 {
            margin-left: 2rem;
        }

        .ml-5 {
            margin-left: 1.25rem;
        }

        .mt-11 {
            margin-top: 2.75rem;
        }

        .mb-8 {
            margin-bottom: 2rem;
        }

        .mr-12 {
            margin-right: 3rem;
        }

        .mt-7 {
            margin-top: 1.75rem;
        }

        .flex {
            display: flex;
        }

        .grid {
            display: grid;
        }

        .hidden {
            display: none;
        }

        .h-16 {
            height: 4rem;
        }

        .h-1 {
            height: 0.25rem;
        }

        .h-20 {
            height: 5rem;
        }

        .h-\[26rem\] {
            height: 26rem;
        }

        .h-\[60rem\] {
            height: 60rem;
        }

        .h-\[70rem\] {
            height: 70rem;
        }

        .h-\[40rem\] {
            height: 40rem;
        }

        .h-\[55rem\] {
            height: 55rem;
        }

        .h-full {
            height: 100%;
        }

        .h-60 {
            height: 15rem;
        }

        .min-h-screen {
            min-height: 100vh;
        }

        .w-28 {
            width: 7rem;
        }

        .w-64 {
            width: 16rem;
        }

        .w-\[80\%\] {
            width: 80%;
        }

        .w-32 {
            width: 8rem;
        }

        .w-full {
            width: 100%;
        }

        .w-20 {
            width: 5rem;
        }

        .w-48 {
            width: 12rem;
        }

        .w-\[70\%\] {
            width: 70%;
        }

        .w-36 {
            width: 9rem;
        }

        .w-\[593px\] {
            width: 593px;
        }

        .w-72 {
            width: 18rem;
        }

        .w-\[40\%\] {
            width: 40%;
        }

        .w-3\/4 {
            width: 75%;
        }

        .w-\[90\%\] {
            width: 90%;
        }

        .min-w-\[180px\] {
            min-width: 180px;
        }

        .max-w-7xl {
            max-width: 80rem;
        }

        .max-w-\[75\%\] {
            max-width: 75%;
        }

        .shrink-0 {
            flex-shrink: 0;
        }

        .basis-\[90\%\] {
            flex-basis: 90%;
        }

        .basis-\[70\%\] {
            flex-basis: 70%;
        }

        .basis-full {
            flex-basis: 100%;
        }

        .basis-\[50\%\] {
            flex-basis: 50%;
        }

        .basis-\[68\%\] {
            flex-basis: 68%;
        }

        .basis-\[10\%\] {
            flex-basis: 10%;
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .grid-cols-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .flex-col {
            flex-direction: column;
        }

        .items-center {
            align-items: center;
        }

        .justify-center {
            justify-content: center;
        }

        .justify-between {
            justify-content: space-between;
        }

        .justify-around {
            justify-content: space-around;
        }

        .gap-3 {
            gap: 0.75rem;
        }

        .space-x-3> :not([hidden])~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(0.75rem * var(--tw-space-x-reverse));
            margin-left: calc(0.75rem * calc(1 - var(--tw-space-x-reverse)));
        }

        .overflow-x-scroll {
            overflow-x: scroll;
        }

        .rounded-lg {
            border-radius: 0.5rem;
        }

        .rounded-xl {
            border-radius: 0.75rem;
        }

        .rounded-t-lg {
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }

        .border {
            border-width: 1px;
        }

        .border-2 {
            border-width: 2px;
        }

        .border-b {
            border-bottom-width: 1px;
        }

        .border-l {
            border-left-width: 1px;
        }

        .border-gray-300 {
            --tw-border-opacity: 1;
            border-color: rgb(209 213 219 / var(--tw-border-opacity));
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity));
        }

        .border-black {
            --tw-border-opacity: 1;
            border-color: rgb(0 0 0 / var(--tw-border-opacity));
        }

        .bg-transparent {
            background-color: transparent;
        }

        .bg-main-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(115 186 38 / var(--tw-bg-opacity));
        }

        .bg-base-100 {
            --tw-bg-opacity: 1;
            background-color: hsl(var(--b1) / var(--tw-bg-opacity));
        }

        .bg-\[\#393733\] {
            --tw-bg-opacity: 1;
            background-color: rgb(57 55 51 / var(--tw-bg-opacity));
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
        }

        .bg-bg-home {
            background-image: url('/src/assets/img/bg.png');
        }

        .bg-gradient-to-br {
            background-image: linear-gradient(to bottom right, var(--tw-gradient-stops));
        }

        .from-main-100 {
            --tw-gradient-from: #73ba26;
            --tw-gradient-to: rgb(115 186 38 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
        }

        .via-green-500 {
            --tw-gradient-to: rgb(34 197 94 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), #22c55e, var(--tw-gradient-to);
        }

        .to-violet-300 {
            --tw-gradient-to: #c4b5fd;
        }

        .bg-cover {
            background-size: cover;
        }

        .p-2 {
            padding: 0.5rem;
        }

        .p-3 {
            padding: 0.75rem;
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .py-5 {
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
        }

        .px-10 {
            padding-left: 2.5rem;
            padding-right: 2.5rem;
        }

        .px-12 {
            padding-left: 3rem;
            padding-right: 3rem;
        }

        .py-1 {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
        }

        .px-5 {
            padding-left: 1.25rem;
            padding-right: 1.25rem;
        }

        .py-3 {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }

        .pl-5 {
            padding-left: 1.25rem;
        }

        .pb-12 {
            padding-bottom: 3rem;
        }

        .pt-12 {
            padding-top: 3rem;
        }

        .pl-10 {
            padding-left: 2.5rem;
        }

        .pl-12 {
            padding-left: 3rem;
        }

        .text-center {
            text-align: center;
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem;
        }

        .text-lg {
            font-size: 1.125rem;
            line-height: 1.75rem;
        }

        .text-2xl {
            font-size: 1.5rem;
            line-height: 2rem;
        }

        .text-4xl {
            font-size: 2.25rem;
            line-height: 2.5rem;
        }

        .text-3xl {
            font-size: 1.875rem;
            line-height: 2.25rem;
        }

        .font-semibold {
            font-weight: 600;
        }

        .font-bold {
            font-weight: 700;
        }

        .text-main-50 {
            --tw-text-opacity: 1;
            color: rgb(138 225 45 / var(--tw-text-opacity));
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        .text-slate-900 {
            --tw-text-opacity: 1;
            color: rgb(15 23 42 / var(--tw-text-opacity));
        }

        .text-slate-500 {
            --tw-text-opacity: 1;
            color: rgb(100 116 139 / var(--tw-text-opacity));
        }

        .text-main-100 {
            --tw-text-opacity: 1;
            color: rgb(115 186 38 / var(--tw-text-opacity));
        }

        .text-\[\#244716\] {
            --tw-text-opacity: 1;
            color: rgb(36 71 22 / var(--tw-text-opacity));
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .shadow-lg {
            --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        body {
            font-family: "Poppins";
        }

        @media (min-width: 640px) {

            .sm\:-my-px {
                margin-top: -1px;
                margin-bottom: -1px;
            }

            .sm\:ml-10 {
                margin-left: 2.5rem;
            }

            .sm\:flex {
                display: flex;
            }

            .sm\:h-56 {
                height: 14rem;
            }

            .sm\:w-72 {
                width: 18rem;
            }

            .sm\:min-w-\[200px\] {
                min-width: 200px;
            }

            .sm\:flex-row {
                flex-direction: row;
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
        }

        @media (min-width: 1024px) {

            .lg\:absolute {
                position: absolute;
            }

            .lg\:-top-8 {
                top: -2rem;
            }

            .lg\:block {
                display: block;
            }

            .lg\:hidden {
                display: none;
            }

            .lg\:w-2\/4 {
                width: 50%;
            }

            .lg\:w-full {
                width: 100%;
            }

            .lg\:rounded-lg {
                border-radius: 0.5rem;
            }

            .lg\:bg-white {
                --tw-bg-opacity: 1;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            }

            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem;
            }

            .lg\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity));
            }

            .lg\:shadow-lg {
                --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
                --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }
        }
    </style>
    <style type="text/css"
        data-vite-dev-id="C:/Users/DELL DEKSTOP/Downloads/lppom/node_modules/@fontsource/poppins/index.css">
        /* poppins-devanagari-400-normal*/
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-display: swap;
            font-weight: 400;
            src: url('/node_modules/@fontsource/poppins/files/poppins-devanagari-400-normal.woff2') format('woff2'), url('/node_modules/@fontsource/poppins/files/poppins-all-400-normal.woff') format('woff');
            unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }

        /* poppins-latin-ext-400-normal*/
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-display: swap;
            font-weight: 400;
            src: url('/node_modules/@fontsource/poppins/files/poppins-latin-ext-400-normal.woff2') format('woff2'), url('/node_modules/@fontsource/poppins/files/poppins-all-400-normal.woff') format('woff');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* poppins-latin-400-normal*/
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-display: swap;
            font-weight: 400;
            src: url('/node_modules/@fontsource/poppins/files/poppins-latin-400-normal.woff2') format('woff2'), url('/node_modules/@fontsource/poppins/files/poppins-all-400-normal.woff') format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
    <style data-emotion="css-global" data-s="">
        @-webkit-keyframes mui-auto-fill {
            from {
                display: block;
            }
        }
    </style>
    <style data-emotion="css-global" data-s="">
        @keyframes mui-auto-fill {
            from {
                display: block;
            }
        }
    </style>
    <style data-emotion="css-global" data-s="">
        @-webkit-keyframes mui-auto-fill-cancel {
            from {
                display: block;
            }
        }
    </style>
    <style data-emotion="css-global" data-s="">
        @keyframes mui-auto-fill-cancel {
            from {
                display: block;
            }
        }
    </style>
    <style data-emotion="css-global" data-s="">
        @-webkit-keyframes mui-auto-fill {
            from {
                display: block;
            }
        }
    </style>
    <style data-emotion="css-global" data-s="">
        @keyframes mui-auto-fill {
            from {
                display: block;
            }
        }
    </style>
    <style data-emotion="css-global" data-s="">
        @-webkit-keyframes mui-auto-fill-cancel {
            from {
                display: block;
            }
        }
    </style>
    <style data-emotion="css-global" data-s="">
        @keyframes mui-auto-fill-cancel {
            from {
                display: block;
            }
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1869usk-MuiFormControl-root {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            position: relative;
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0;
            vertical-align: top;
            margin: 8px;
            min-width: 120px;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1so17hl-MuiInputLabel-root {
            display: block;
            transform-origin: top left;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 100%;
            position: absolute;
            left: 0;
            top: 0;
            -webkit-transform: translate(0, 20px) scale(1);
            -moz-transform: translate(0, 20px) scale(1);
            -ms-transform: translate(0, 20px) scale(1);
            transform: translate(0, 20px) scale(1);
            -webkit-transition: color 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms, -webkit-transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms, max-width 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
            transition: color 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms, transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms, max-width 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-aqpgxn-MuiFormLabel-root-MuiInputLabel-root {
            color: rgba(0, 0, 0, 0.6);
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            font-size: 1rem;
            line-height: 1.4375em;
            letter-spacing: 0.00938em;
            padding: 0;
            position: relative;
            display: block;
            transform-origin: top left;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 100%;
            position: absolute;
            left: 0;
            top: 0;
            -webkit-transform: translate(0, 20px) scale(1);
            -moz-transform: translate(0, 20px) scale(1);
            -ms-transform: translate(0, 20px) scale(1);
            transform: translate(0, 20px) scale(1);
            -webkit-transition: color 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms, -webkit-transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms, max-width 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
            transition: color 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms, transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms, max-width 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-aqpgxn-MuiFormLabel-root-MuiInputLabel-root.Mui-focused {
            color: #1976d2;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-aqpgxn-MuiFormLabel-root-MuiInputLabel-root.Mui-disabled {
            color: rgba(0, 0, 0, 0.38);
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-aqpgxn-MuiFormLabel-root-MuiInputLabel-root.Mui-error {
            color: #d32f2f;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-r44oa-MuiSelect-root {}
    </style>
    <style data-emotion="css" data-s="">
        .css-a3l6o-MuiInputBase-root-MuiInput-root-MuiSelect-root {
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            font-size: 1rem;
            line-height: 1.4375em;
            letter-spacing: 0.00938em;
            color: rgba(0, 0, 0, 0.87);
            box-sizing: border-box;
            position: relative;
            cursor: text;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            position: relative;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-a3l6o-MuiInputBase-root-MuiInput-root-MuiSelect-root.Mui-disabled {
            color: rgba(0, 0, 0, 0.38);
            cursor: default;
        }
    </style>
    <style data-emotion="css" data-s="">
        label+.css-a3l6o-MuiInputBase-root-MuiInput-root-MuiSelect-root {
            margin-top: 16px;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-a3l6o-MuiInputBase-root-MuiInput-root-MuiSelect-root:after {
            border-bottom: 2px solid #1976d2;
            left: 0;
            bottom: 0;
            content: "";
            position: absolute;
            right: 0;
            -webkit-transform: scaleX(0);
            -moz-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transition: -webkit-transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
            transition: transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
            pointer-events: none;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-a3l6o-MuiInputBase-root-MuiInput-root-MuiSelect-root.Mui-focused:after {
            -webkit-transform: scaleX(1) translateX(0);
            -moz-transform: scaleX(1) translateX(0);
            -ms-transform: scaleX(1) translateX(0);
            transform: scaleX(1) translateX(0);
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-a3l6o-MuiInputBase-root-MuiInput-root-MuiSelect-root.Mui-error:after {
            border-bottom-color: #d32f2f;
            -webkit-transform: scaleX(1);
            -moz-transform: scaleX(1);
            -ms-transform: scaleX(1);
            transform: scaleX(1);
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-a3l6o-MuiInputBase-root-MuiInput-root-MuiSelect-root:before {
            border-bottom: 1px solid rgba(0, 0, 0, 0.42);
            left: 0;
            bottom: 0;
            content: "\00a0";
            position: absolute;
            right: 0;
            -webkit-transition: border-bottom-color 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: border-bottom-color 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            pointer-events: none;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-a3l6o-MuiInputBase-root-MuiInput-root-MuiSelect-root:hover:not(.Mui-disabled):before {
            border-bottom: 2px solid rgba(0, 0, 0, 0.87);
        }
    </style>
    <style data-emotion="css" data-s="">
        @media (hover: none) {
            .css-a3l6o-MuiInputBase-root-MuiInput-root-MuiSelect-root:hover:not(.Mui-disabled):before {
                border-bottom: 1px solid rgba(0, 0, 0, 0.42);
            }
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-a3l6o-MuiInputBase-root-MuiInput-root-MuiSelect-root.Mui-disabled:before {
            border-bottom-style: dotted;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1x51dt5-MuiInputBase-input-MuiInput-input {
            font: inherit;
            letter-spacing: inherit;
            color: currentColor;
            padding: 4px 0 5px;
            border: 0;
            box-sizing: content-box;
            background: none;
            height: 1.4375em;
            margin: 0;
            -webkit-tap-highlight-color: transparent;
            display: block;
            min-width: 0;
            width: 100%;
            -webkit-animation-name: mui-auto-fill-cancel;
            animation-name: mui-auto-fill-cancel;
            -webkit-animation-duration: 10ms;
            animation-duration: 10ms;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1x51dt5-MuiInputBase-input-MuiInput-input::-webkit-input-placeholder {
            color: currentColor;
            opacity: 0.42;
            -webkit-transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1x51dt5-MuiInputBase-input-MuiInput-input::-moz-placeholder {
            color: currentColor;
            opacity: 0.42;
            -webkit-transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1x51dt5-MuiInputBase-input-MuiInput-input:-ms-input-placeholder {
            color: currentColor;
            opacity: 0.42;
            -webkit-transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1x51dt5-MuiInputBase-input-MuiInput-input::-ms-input-placeholder {
            color: currentColor;
            opacity: 0.42;
            -webkit-transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1x51dt5-MuiInputBase-input-MuiInput-input:focus {
            outline: 0;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1x51dt5-MuiInputBase-input-MuiInput-input:invalid {
            box-shadow: none;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1x51dt5-MuiInputBase-input-MuiInput-input::-webkit-search-decoration {
            -webkit-appearance: none;
        }
    </style>
    <style data-emotion="css" data-s="">
        label[data-shrink=false]+.MuiInputBase-formControl .css-1x51dt5-MuiInputBase-input-MuiInput-input {}
    </style>
    <style data-emotion="css" data-s="">
        label[data-shrink=false]+.MuiInputBase-formControl .css-1x51dt5-MuiInputBase-input-MuiInput-input::-webkit-input-placeholder {
            opacity: 0 !important;
        }
    </style>
    <style data-emotion="css" data-s="">
        label[data-shrink=false]+.MuiInputBase-formControl .css-1x51dt5-MuiInputBase-input-MuiInput-input::-moz-placeholder {
            opacity: 0 !important;
        }
    </style>
    <style data-emotion="css" data-s="">
        label[data-shrink=false]+.MuiInputBase-formControl .css-1x51dt5-MuiInputBase-input-MuiInput-input:-ms-input-placeholder {
            opacity: 0 !important;
        }
    </style>
    <style data-emotion="css" data-s="">
        label[data-shrink=false]+.MuiInputBase-formControl .css-1x51dt5-MuiInputBase-input-MuiInput-input::-ms-input-placeholder {
            opacity: 0 !important;
        }
    </style>
    <style data-emotion="css" data-s="">
        label[data-shrink=false]+.MuiInputBase-formControl .css-1x51dt5-MuiInputBase-input-MuiInput-input:focus::-webkit-input-placeholder {
            opacity: 0.42;
        }
    </style>
    <style data-emotion="css" data-s="">
        label[data-shrink=false]+.MuiInputBase-formControl .css-1x51dt5-MuiInputBase-input-MuiInput-input:focus::-moz-placeholder {
            opacity: 0.42;
        }
    </style>
    <style data-emotion="css" data-s="">
        label[data-shrink=false]+.MuiInputBase-formControl .css-1x51dt5-MuiInputBase-input-MuiInput-input:focus:-ms-input-placeholder {
            opacity: 0.42;
        }
    </style>
    <style data-emotion="css" data-s="">
        label[data-shrink=false]+.MuiInputBase-formControl .css-1x51dt5-MuiInputBase-input-MuiInput-input:focus::-ms-input-placeholder {
            opacity: 0.42;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1x51dt5-MuiInputBase-input-MuiInput-input.Mui-disabled {
            opacity: 1;
            -webkit-text-fill-color: rgba(0, 0, 0, 0.38);
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1x51dt5-MuiInputBase-input-MuiInput-input:-webkit-autofill {
            -webkit-animation-duration: 5000s;
            animation-duration: 5000s;
            -webkit-animation-name: mui-auto-fill;
            animation-name: mui-auto-fill;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input {
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border-radius: 0;
            cursor: pointer;
            font: inherit;
            letter-spacing: inherit;
            color: currentColor;
            padding: 4px 0 5px;
            border: 0;
            box-sizing: content-box;
            background: none;
            height: 1.4375em;
            margin: 0;
            -webkit-tap-highlight-color: transparent;
            display: block;
            min-width: 0;
            width: 100%;
            -webkit-animation-name: mui-auto-fill-cancel;
            animation-name: mui-auto-fill-cancel;
            -webkit-animation-duration: 10ms;
            animation-duration: 10ms;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input:focus {
            background-color: rgba(0, 0, 0, 0.05);
            border-radius: 0;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input::-ms-expand {
            display: none;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input.Mui-disabled {
            cursor: default;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input[multiple] {
            height: auto;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input:not([multiple]) option,
        .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input:not([multiple]) optgroup {
            background-color: #fff;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input.css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input.css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input {
            padding-right: 24px;
            min-width: 16px;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input.MuiSelect-select {
            height: auto;
            min-height: 1.4375em;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input::-webkit-input-placeholder {
            color: currentColor;
            opacity: 0.42;
            -webkit-transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input::-moz-placeholder {
            color: currentColor;
            opacity: 0.42;
            -webkit-transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input:-ms-input-placeholder {
            color: currentColor;
            opacity: 0.42;
            -webkit-transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input::-ms-input-placeholder {
            color: currentColor;
            opacity: 0.42;
            -webkit-transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input:focus {
            outline: 0;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input:invalid {
            box-shadow: none;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input::-webkit-search-decoration {
            -webkit-appearance: none;
        }
    </style>
    <style data-emotion="css" data-s="">
        label[data-shrink=false]+.MuiInputBase-formControl .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input {}
    </style>
    <style data-emotion="css" data-s="">
        label[data-shrink=false]+.MuiInputBase-formControl .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input::-webkit-input-placeholder {
            opacity: 0 !important;
        }
    </style>
    <style data-emotion="css" data-s="">
        label[data-shrink=false]+.MuiInputBase-formControl .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input::-moz-placeholder {
            opacity: 0 !important;
        }
    </style>
    <style data-emotion="css" data-s="">
        label[data-shrink=false]+.MuiInputBase-formControl .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input:-ms-input-placeholder {
            opacity: 0 !important;
        }
    </style>
    <style data-emotion="css" data-s="">
        label[data-shrink=false]+.MuiInputBase-formControl .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input::-ms-input-placeholder {
            opacity: 0 !important;
        }
    </style>
    <style data-emotion="css" data-s="">
        label[data-shrink=false]+.MuiInputBase-formControl .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input:focus::-webkit-input-placeholder {
            opacity: 0.42;
        }
    </style>
    <style data-emotion="css" data-s="">
        label[data-shrink=false]+.MuiInputBase-formControl .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input:focus::-moz-placeholder {
            opacity: 0.42;
        }
    </style>
    <style data-emotion="css" data-s="">
        label[data-shrink=false]+.MuiInputBase-formControl .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input:focus:-ms-input-placeholder {
            opacity: 0.42;
        }
    </style>
    <style data-emotion="css" data-s="">
        label[data-shrink=false]+.MuiInputBase-formControl .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input:focus::-ms-input-placeholder {
            opacity: 0.42;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input.Mui-disabled {
            opacity: 1;
            -webkit-text-fill-color: rgba(0, 0, 0, 0.38);
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1rxz5jq-MuiSelect-select-MuiInputBase-input-MuiInput-input:-webkit-autofill {
            -webkit-animation-duration: 5000s;
            animation-duration: 5000s;
            -webkit-animation-name: mui-auto-fill;
            animation-name: mui-auto-fill;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-yf8vq0-MuiSelect-nativeInput {
            bottom: 0;
            left: 0;
            position: absolute;
            opacity: 0;
            pointer-events: none;
            width: 100%;
            box-sizing: border-box;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-19xtc65-MuiSelect-icon {
            position: absolute;
            right: 0;
            top: calc(50% - .5em);
            pointer-events: none;
            color: rgba(0, 0, 0, 0.54);
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-19xtc65-MuiSelect-icon.Mui-disabled {
            color: rgba(0, 0, 0, 0.26);
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            width: 1em;
            height: 1em;
            display: inline-block;
            fill: currentColor;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            font-size: 1.5rem;
            position: absolute;
            right: 0;
            top: calc(50% - .5em);
            pointer-events: none;
            color: rgba(0, 0, 0, 0.54);
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-pqjvzy-MuiSvgIcon-root-MuiSelect-icon.Mui-disabled {
            color: rgba(0, 0, 0, 0.26);
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-oouctw-MuiMenu-root {}
    </style>
    <style data-emotion="css" data-s="">
        .css-bclbye-MuiPopover-root-MuiMenu-root {}
    </style>
    <style data-emotion="css" data-s="">
        .css-1xj1k15-MuiTextField-root {}
    </style>
    <style data-emotion="css" data-s="">
        .css-1u3bzj6-MuiFormControl-root-MuiTextField-root {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            position: relative;
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0;
            vertical-align: top;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1ptx2yq-MuiInputBase-root-MuiInput-root {
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            font-size: 1rem;
            line-height: 1.4375em;
            letter-spacing: 0.00938em;
            color: rgba(0, 0, 0, 0.87);
            box-sizing: border-box;
            position: relative;
            cursor: text;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            position: relative;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1ptx2yq-MuiInputBase-root-MuiInput-root.Mui-disabled {
            color: rgba(0, 0, 0, 0.38);
            cursor: default;
        }
    </style>
    <style data-emotion="css" data-s="">
        label+.css-1ptx2yq-MuiInputBase-root-MuiInput-root {
            margin-top: 16px;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1ptx2yq-MuiInputBase-root-MuiInput-root:after {
            border-bottom: 2px solid #1976d2;
            left: 0;
            bottom: 0;
            content: "";
            position: absolute;
            right: 0;
            -webkit-transform: scaleX(0);
            -moz-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transition: -webkit-transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
            transition: transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
            pointer-events: none;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1ptx2yq-MuiInputBase-root-MuiInput-root.Mui-focused:after {
            -webkit-transform: scaleX(1) translateX(0);
            -moz-transform: scaleX(1) translateX(0);
            -ms-transform: scaleX(1) translateX(0);
            transform: scaleX(1) translateX(0);
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1ptx2yq-MuiInputBase-root-MuiInput-root.Mui-error:after {
            border-bottom-color: #d32f2f;
            -webkit-transform: scaleX(1);
            -moz-transform: scaleX(1);
            -ms-transform: scaleX(1);
            transform: scaleX(1);
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1ptx2yq-MuiInputBase-root-MuiInput-root:before {
            border-bottom: 1px solid rgba(0, 0, 0, 0.42);
            left: 0;
            bottom: 0;
            content: "\00a0";
            position: absolute;
            right: 0;
            -webkit-transition: border-bottom-color 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: border-bottom-color 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            pointer-events: none;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1ptx2yq-MuiInputBase-root-MuiInput-root:hover:not(.Mui-disabled):before {
            border-bottom: 2px solid rgba(0, 0, 0, 0.87);
        }
    </style>
    <style data-emotion="css" data-s="">
        @media (hover: none) {
            .css-1ptx2yq-MuiInputBase-root-MuiInput-root:hover:not(.Mui-disabled):before {
                border-bottom: 1px solid rgba(0, 0, 0, 0.42);
            }
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1ptx2yq-MuiInputBase-root-MuiInput-root.Mui-disabled:before {
            border-bottom-style: dotted;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1yu95zv-MuiButton-root {
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 500;
            font-size: 0.875rem;
            line-height: 1.75;
            letter-spacing: 0.02857em;
            text-transform: uppercase;
            min-width: 64px;
            padding: 6px 16px;
            border-radius: 4px;
            -webkit-transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            color: #fff;
            background-color: #1976d2;
            box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1yu95zv-MuiButton-root:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
            background-color: #1565c0;
            box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);
        }
    </style>
    <style data-emotion="css" data-s="">
        @media (hover: none) {
            .css-1yu95zv-MuiButton-root:hover {
                background-color: #1976d2;
            }
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1yu95zv-MuiButton-root:active {
            box-shadow: 0px 5px 5px -3px rgba(0, 0, 0, 0.2), 0px 8px 10px 1px rgba(0, 0, 0, 0.14), 0px 3px 14px 2px rgba(0, 0, 0, 0.12);
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1yu95zv-MuiButton-root.Mui-focusVisible {
            box-shadow: 0px 3px 5px -1px rgba(0, 0, 0, 0.2), 0px 6px 10px 0px rgba(0, 0, 0, 0.14), 0px 1px 18px 0px rgba(0, 0, 0, 0.12);
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-1yu95zv-MuiButton-root.Mui-disabled {
            color: rgba(0, 0, 0, 0.26);
            box-shadow: none;
            background-color: rgba(0, 0, 0, 0.12);
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-sghohy-MuiButtonBase-root-MuiButton-root {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            position: relative;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
            background-color: transparent;
            outline: 0;
            border: 0;
            margin: 0;
            border-radius: 0;
            padding: 0;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle;
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: inherit;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 500;
            font-size: 0.875rem;
            line-height: 1.75;
            letter-spacing: 0.02857em;
            text-transform: uppercase;
            min-width: 64px;
            padding: 6px 16px;
            border-radius: 4px;
            -webkit-transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            color: #fff;
            background-color: #1976d2;
            box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-sghohy-MuiButtonBase-root-MuiButton-root::-moz-focus-inner {
            border-style: none;
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-sghohy-MuiButtonBase-root-MuiButton-root.Mui-disabled {
            pointer-events: none;
            cursor: default;
        }
    </style>
    <style data-emotion="css" data-s="">
        @media print {
            .css-sghohy-MuiButtonBase-root-MuiButton-root {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-sghohy-MuiButtonBase-root-MuiButton-root:hover {
            -webkit-text-decoration: none;
            text-decoration: none;
            background-color: #1565c0;
            box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);
        }
    </style>
    <style data-emotion="css" data-s="">
        @media (hover: none) {
            .css-sghohy-MuiButtonBase-root-MuiButton-root:hover {
                background-color: #1976d2;
            }
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-sghohy-MuiButtonBase-root-MuiButton-root:active {
            box-shadow: 0px 5px 5px -3px rgba(0, 0, 0, 0.2), 0px 8px 10px 1px rgba(0, 0, 0, 0.14), 0px 3px 14px 2px rgba(0, 0, 0, 0.12);
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-sghohy-MuiButtonBase-root-MuiButton-root.Mui-focusVisible {
            box-shadow: 0px 3px 5px -1px rgba(0, 0, 0, 0.2), 0px 6px 10px 0px rgba(0, 0, 0, 0.14), 0px 1px 18px 0px rgba(0, 0, 0, 0.12);
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-sghohy-MuiButtonBase-root-MuiButton-root.Mui-disabled {
            color: rgba(0, 0, 0, 0.26);
            box-shadow: none;
            background-color: rgba(0, 0, 0, 0.12);
        }
    </style>
    <style data-emotion="css" data-s="">
        .css-8je8zh-MuiTouchRipple-root {
            overflow: hidden;
            pointer-events: none;
            position: absolute;
            z-index: 0;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            border-radius: inherit;
        }
    </style>
</head>

<body>
    @yield('content')
    <script type="module" src="/src/main.jsx"></script>
</body>

</html>
