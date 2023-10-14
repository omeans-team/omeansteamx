<!DOCTYPE html>
<html lang="en">

<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WQBSETPNM8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WQBSETPNM8');
</script>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta charset="utf-8">
    <title>Page Not Found</title>
    <style>
    html,
    body,
    div,
    span,
    p,
    a,
    em,
    img,
    b,
    u,
    i,
    ol,
    ul,
    li,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0;
        padding: 0;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
        background: transparent;
        font-style: normal;
        cursor: none;
    }

    body {
        -webkit-font-smoothing: antialiased;
        font-smoothing: antialiased;
        font-family: "Open Sans", sans-serif;
        background: #000;
        width: 100%;
        height: 100%;
        overflow-x: hidden;
        overflow-y: hidden;
    }

    #foreground {
        display: block;
        position: absolute;
        top: 0px;
        left: 0px;
        z-index: 10;
        width: 100%;
        height: 100%;
    }

    #background {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: transparent;
        background-size: cover;
        -webkit-background-size: cover;
        overflow: hidden;
        z-index: 1;
    }

    .star {
        position: absolute;
        top: 300px;
        left: 400px;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.75);
        box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.75);
    }

    #info {
        position: absolute;
        top: calc(50% - 100px);
        left: calc(50% - 175px);
        height: 200px;
        width: 250px;
        padding: 25px;
        background: rgba(0, 0, 0, 0.85);
        border-radius: 25px;
        color: #fff;
        text-align: center;
    }

    #info h1 {
        font-size: 30px;
        line-height: 36px;
        font-weight: 300;
        color: #fff;
        text-shadow: 0px 0px 1px rgba(34, 34, 34, 0.25);
        padding-bottom: 1.5em;
    }

    #info h1 em {
        font-size: 12px;
        line-height: 12px;
        display: block;
    }

    #info a {
        font-size: 20px;
        line-height: 20px;
        display: block;
        text-decoration: none !important;
        color: #e47909;
    }

    #info a:hover {
        font-size: 20px;
        line-height: 20px;
        display: block;
        text-decoration: none !important;
        text-shadow: 0px 0px 10px rgb(255, 130, 0);
        color: #fff !important;
    }

    .cursor {
        height: 150px;
        width: 120px;
        z-index: 5;
        position: absolute;
        top: calc(150px - 40%);
        left: calc(10% - 210px);
    }

    #meteorContainer {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
    }

    .meteor {
        position: absolute;
        top: -100px;
        width: 2px;
        height: 100px;
        background-color: #fff;
        animation: meteorFall linear infinite;
    }

    @keyframes meteorFall {
        0% {
            transform: translateY(-200px) rotate(45deg);
            opacity: 1;
        }

        100% {
            transform: translateY(calc(100vh + 200px)) rotate(45deg);
            opacity: 0;
        }
    }

    .section-center {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 50%;
        left: 50%;
        display: none;
        overflow: hidden;
        z-index: 5;
        pointer-events: none;
        box-shadow: 0 0 50px 5px rgba(255, 148, 0, .1);
        transform: translate(-50%, -50%);
    }

    .section-center {
        -webkit-transition: all 500ms linear;
        transition: all 500ms linear;
    }

    .shooting-bintangkecil {
        z-index: 2;
        width: 1px;
        height: 50px;
        border-bottom-left-radius: 50%;
        border-bottom-right-radius: 50%;
        position: absolute;
        top: 0;
        left: -70px;
        background: linear-gradient(to bottom, rgba(255, 255, 255, 0), white);
        animation: animShootingbintangkecil 6s linear infinite;
        -webkit-transition: all 2000ms linear;
        transition: all 2000ms linear;
    }

    .shooting-bintangkecil-2 {
        z-index: 2;
        width: 1px;
        height: 50px;
        border-bottom-left-radius: 50%;
        border-bottom-right-radius: 50%;
        position: absolute;
        top: 0;
        left: 200px;
        background: linear-gradient(to bottom, rgba(255, 255, 255, 0), white);
        animation: animShootingbintangkecil-2 9s linear infinite;
        -webkit-transition: all 2000ms linear;
        transition: all 2000ms linear;
    }

    .bintangkecil {
        z-index: 2;
        position: absolute;
        top: 185px;
        left: 25px;
        background-image: url('https://ivang-design.com//svg-load/air/star.png');
        background-size: 15px 15px;
        width: 15px;
        height: 15px;
        opacity: 0.4;
        animation: bintangkecilShine 3.5s linear infinite;
        -webkit-transition: all 1200ms linear;
        transition: all 1200ms linear;
    }

    .bintangkecil.snd {
        top: 100px;
        left: 310px;
        animation-delay: 1s;
    }

    .bintangkecil.trd {
        top: 130px;
        left: 100px;
        animation-delay: 1.4s;
    }

    .bintangkecil.fth {
        top: 190px;
        left: 200px;
        animation-delay: 1.8s;
    }

    .bintangkecil.fith {
        top: 85px;
        left: 1080px;
        animation-delay: 2.2s;
    }

    @keyframes animShootingbintangkecil {
        from {
            transform: translateY(0px) translateX(0px) rotate(-45deg);
            opacity: 1;
            height: 5px;
        }

        to {
            transform: translateY(1280px) translateX(1280px) rotate(-45deg);
            opacity: 1;
            height: 800px;
        }
    }

    @keyframes animShootingbintangkecil-2 {
        from {
            transform: translateY(0px) translateX(0px) rotate(-45deg);
            opacity: 1;
            height: 5px;
        }

        to {
            transform: translateY(1920px) translateX(1920px) rotate(-45deg);
            opacity: 1;
            height: 800px;
        }
    }

    @keyframes bintangkecilShine {
        0% {
            transform: scale(0.3) rotate(0deg);
            opacity: 0.4;
        }

        25% {
            transform: scale(1) rotate(360deg);
            opacity: 1;
        }

        50% {
            transform: scale(0.3) rotate(720deg);
            opacity: 0.4;
        }

        100% {
            transform: scale(0.3) rotate(0deg);
            opacity: 0.4;
        }
    }
    *,:after,:before{border:0 solid #e5e7eb;box-sizing:border-box}:after,:before{--tw-content:""}html{-webkit-text-size-adjust:100%;font-feature-settings:normal;font-family:Space Grotesk,Inter,system-ui,-apple-system;font-variation-settings:normal;line-height:1.5;-moz-tab-size:4;-o-tab-size:4;tab-size:4}body{line-height:inherit;margin:0}hr{border-top-width:1px;color:inherit;height:0}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{border-collapse:collapse;border-color:inherit;text-indent:0}button,input,optgroup,select,textarea{font-feature-settings:inherit;color:inherit;font-family:inherit;font-size:100%;font-variation-settings:inherit;font-weight:inherit;line-height:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0}fieldset,legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{color:#9ca3af}input::placeholder,textarea::placeholder{color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{height:auto;max-width:100%}[hidden]{display:none}[multiple],[type=date],[type=datetime-local],[type=email],[type=month],[type=number],[type=password],[type=search],[type=tel],[type=text],[type=time],[type=url],[type=week],input:where(:not([type])),select,textarea{--tw-shadow:0 0 #0000;-webkit-appearance:none;-moz-appearance:none;appearance:none;background-color:#fff;border-color:#6b7280;border-radius:0;border-width:1px;font-size:1rem;line-height:1.5rem;padding:.5rem .75rem}[multiple]:focus,[type=date]:focus,[type=datetime-local]:focus,[type=email]:focus,[type=month]:focus,[type=number]:focus,[type=password]:focus,[type=search]:focus,[type=tel]:focus,[type=text]:focus,[type=time]:focus,[type=url]:focus,[type=week]:focus,input:where(:not([type])):focus,select:focus,textarea:focus{--tw-ring-inset:var(--tw-empty,/*!*/ /*!*/);--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:#2563eb;--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);border-color:#2563eb;box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow);outline:2px solid transparent;outline-offset:2px}input::-moz-placeholder,textarea::-moz-placeholder{color:#6b7280;opacity:1}input::placeholder,textarea::placeholder{color:#6b7280;opacity:1}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-date-and-time-value{min-height:1.5em;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit,::-webkit-datetime-edit-day-field,::-webkit-datetime-edit-hour-field,::-webkit-datetime-edit-meridiem-field,::-webkit-datetime-edit-millisecond-field,::-webkit-datetime-edit-minute-field,::-webkit-datetime-edit-month-field,::-webkit-datetime-edit-second-field,::-webkit-datetime-edit-year-field{padding-bottom:0;padding-top:0}select{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3E%3Cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3E%3C/svg%3E");background-position:right .5rem center;background-repeat:no-repeat;background-size:1.5em 1.5em;padding-right:2.5rem;-webkit-print-color-adjust:exact;print-color-adjust:exact}[multiple],[size]:where(select:not([size="1"])){background-image:none;background-position:0 0;background-repeat:unset;background-size:initial;padding-right:.75rem;-webkit-print-color-adjust:unset;print-color-adjust:unset}[type=checkbox],[type=radio]{--tw-shadow:0 0 #0000;-webkit-appearance:none;-moz-appearance:none;appearance:none;background-color:#fff;background-origin:border-box;border-color:#6b7280;border-width:1px;color:#2563eb;display:inline-block;flex-shrink:0;height:1rem;padding:0;-webkit-print-color-adjust:exact;print-color-adjust:exact;-webkit-user-select:none;-moz-user-select:none;user-select:none;vertical-align:middle;width:1rem}[type=checkbox]{border-radius:0}[type=radio]{border-radius:100%}[type=checkbox]:focus,[type=radio]:focus{--tw-ring-inset:var(--tw-empty,/*!*/ /*!*/);--tw-ring-offset-width:2px;--tw-ring-offset-color:#fff;--tw-ring-color:#2563eb;--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow);outline:2px solid transparent;outline-offset:2px}[type=checkbox]:checked,[type=radio]:checked{background-color:currentColor;background-position:50%;background-repeat:no-repeat;background-size:100% 100%;border-color:transparent}[type=checkbox]:checked{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 16 16' fill='%23fff' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12.207 4.793a1 1 0 0 1 0 1.414l-5 5a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L6.5 9.086l4.293-4.293a1 1 0 0 1 1.414 0z'/%3E%3C/svg%3E")}[type=radio]:checked{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 16 16' fill='%23fff' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='8' cy='8' r='3'/%3E%3C/svg%3E")}[type=checkbox]:checked:focus,[type=checkbox]:checked:hover,[type=radio]:checked:focus,[type=radio]:checked:hover{background-color:currentColor;border-color:transparent}[type=checkbox]:indeterminate{background-color:currentColor;background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3E%3Cpath stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3E%3C/svg%3E");background-position:50%;background-repeat:no-repeat;background-size:100% 100%;border-color:transparent}[type=checkbox]:indeterminate:focus,[type=checkbox]:indeterminate:hover{background-color:currentColor;border-color:transparent}[type=file]{background:unset;border-color:inherit;border-radius:0;border-width:0;font-size:unset;line-height:inherit;padding:0}[type=file]:focus{outline:1px solid ButtonText;outline:1px auto -webkit-focus-ring-color}*,:after,:before{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgba(59,130,246,.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgba(59,130,246,.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.container{width:100%}@media (min-width:640px){.container{max-width:640px}}@media (min-width:768px){.container{max-width:768px}}@media (min-width:1024px){.container{max-width:1024px}}@media (min-width:1280px){.container{max-width:1280px}}@media (min-width:1536px){.container{max-width:1536px}}.sr-only{clip:rect(0,0,0,0);border-width:0;height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;white-space:nowrap;width:1px}.pointer-events-none{pointer-events:none}.invisible{visibility:hidden}.static{position:static}.fixed{position:fixed}.absolute{position:absolute}.relative{position:relative}.-inset-px{inset:-1px}.inset-0{inset:0}.-inset-y-px{bottom:-1px;top:-1px}.inset-x-0{left:0;right:0}.inset-y-0{bottom:0;top:0}.-left-3{left:-.75rem}.-left-56{left:-14rem}.-left-8{left:-2rem}.-top-16{top:-4rem}.left-0{left:0}.left-1{left:.25rem}.left-1\/2{left:50%}.right-0{right:0}.right-full{right:100%}.top-0{top:0}.top-1{top:.25rem}.top-1\/2{top:50%}.top-\[calc\(100\%-13rem\)\]{top:calc(100% - 13rem)}.top-full{top:100%}.isolate{isolation:isolate}.-z-10{z-index:-10}.z-0{z-index:0}.z-10{z-index:10}.order-2{order:2}.order-3{order:3}.col-span-1{grid-column:span 1/span 1}.col-span-12{grid-column:span 12/span 12}.col-span-2{grid-column:span 2/span 2}.-m-1{margin:-.25rem}.-m-2{margin:-.5rem}.-m-2\.5{margin:-.625rem}.-m-4{margin:-1rem}.m-3{margin:.75rem}.m-auto{margin:auto}.-mx-3{margin-left:-.75rem;margin-right:-.75rem}.-mx-4{margin-left:-1rem;margin-right:-1rem}.-my-2{margin-bottom:-.5rem;margin-top:-.5rem}.-my-6{margin-bottom:-1.5rem;margin-top:-1.5rem}.mx-1{margin-left:.25rem;margin-right:.25rem}.mx-auto{margin-left:auto;margin-right:auto}.my-0{margin-bottom:0;margin-top:0}.my-12{margin-bottom:3rem;margin-top:3rem}.my-3{margin-bottom:.75rem;margin-top:.75rem}.-mb-16{margin-bottom:-4rem}.-mb-px{margin-bottom:-1px}.-ml-0{margin-left:0}.-ml-0\.5{margin-left:-.125rem}.-ml-24{margin-left:-6rem}.-ml-48{margin-left:-12rem}.-mr-1{margin-right:-.25rem}.-mr-48{margin-right:-12rem}.-mt-12{margin-top:-3rem}.-mt-6{margin-top:-1.5rem}.-mt-80{margin-top:-20rem}.mb-1{margin-bottom:.25rem}.mb-10{margin-bottom:2.5rem}.mb-12{margin-bottom:3rem}.mb-16{margin-bottom:4rem}.mb-2{margin-bottom:.5rem}.mb-20{margin-bottom:5rem}.mb-24{margin-bottom:6rem}.mb-3{margin-bottom:.75rem}.mb-4{margin-bottom:1rem}.mb-5{margin-bottom:1.25rem}.mb-6{margin-bottom:1.5rem}.mb-8{margin-bottom:2rem}.ml-1{margin-left:.25rem}.ml-10{margin-left:2.5rem}.ml-2{margin-left:.5rem}.ml-3{margin-left:.75rem}.ml-4{margin-left:1rem}.ml-6{margin-left:1.5rem}.ml-auto{margin-left:auto}.mr-2{margin-right:.5rem}.mr-auto{margin-right:auto}.mt-0{margin-top:0}.mt-0\.5{margin-top:.125rem}.mt-1{margin-top:.25rem}.mt-10{margin-top:2.5rem}.mt-12{margin-top:3rem}.mt-14{margin-top:3.5rem}.mt-16{margin-top:4rem}.mt-2{margin-top:.5rem}.mt-2\.5{margin-top:.625rem}.mt-20{margin-top:5rem}.mt-24{margin-top:6rem}.mt-3{margin-top:.75rem}.mt-32{margin-top:8rem}.mt-4{margin-top:1rem}.mt-5{margin-top:1.25rem}.mt-6{margin-top:1.5rem}.mt-8{margin-top:2rem}.block{display:block}.inline-block{display:inline-block}.inline{display:inline}.flex{display:flex}.inline-flex{display:inline-flex}.table{display:table}.flow-root{display:flow-root}.grid{display:grid}.contents{display:contents}.hidden{display:none}.aspect-\[1318\/752\]{aspect-ratio:1318/752}.aspect-\[14\/13\]{aspect-ratio:14/13}.aspect-\[801\/1036\]{aspect-ratio:801/1036}.h-0{height:0}.h-0\.5{height:.125rem}.h-10{height:2.5rem}.h-11{height:2.75rem}.h-12{height:3rem}.h-14{height:3.5rem}.h-20{height:5rem}.h-32{height:8rem}.h-4{height:1rem}.h-5{height:1.25rem}.h-6{height:1.5rem}.h-7{height:1.75rem}.h-8{height:2rem}.h-80{height:20rem}.h-\[1px\]{height:1px}.h-\[40rem\]{height:40rem}.h-\[64rem\]{height:64rem}.h-full{height:100%}.h-screen{height:100vh}.max-h-10{max-height:2.5rem}.max-h-12{max-height:3rem}.max-h-14{max-height:3.5rem}.max-h-6{max-height:1.5rem}.min-h-full{min-height:100%}.w-0{width:0}.w-0\.5{width:.125rem}.w-1\/2{width:50%}.w-10{width:2.5rem}.w-11{width:2.75rem}.w-12{width:3rem}.w-14{width:3.5rem}.w-20{width:5rem}.w-24{width:6rem}.w-32{width:8rem}.w-4{width:1rem}.w-40{width:10rem}.w-44{width:11rem}.w-5{width:1.25rem}.w-52{width:13rem}.w-56{width:14rem}.w-6{width:1.5rem}.w-64{width:16rem}.w-8{width:2rem}.w-80,.w-\[20rem\]{width:20rem}.w-\[21rem\]{width:21rem}.w-\[32em\]{width:32em}.w-\[36rem\]{width:36rem}.w-\[50\.0625rem\]{width:50.0625rem}.w-\[50px\]{width:50px}.w-\[72\.1875rem\]{width:72.1875rem}.w-\[80rem\]{width:80rem}.w-\[82\.375rem\]{width:82.375rem}.w-auto{width:auto}.w-full{width:100%}.w-screen{width:100vw}.min-w-0{min-width:0}.min-w-full{min-width:100%}.max-w-2xl{max-width:42rem}.max-w-3xl{max-width:48rem}.max-w-4xl{max-width:56rem}.max-w-5xl{max-width:64rem}.max-w-6xl{max-width:72rem}.max-w-7xl{max-width:80rem}.max-w-lg{max-width:32rem}.max-w-md{max-width:28rem}.max-w-min{max-width:-moz-min-content;max-width:min-content}.max-w-none{max-width:none}.max-w-prose{max-width:65ch}.max-w-screen-xl{max-width:1280px}.max-w-xl{max-width:36rem}.max-w-xs{max-width:20rem}.flex-1{flex:1 1 0%}.flex-auto{flex:1 1 auto}.flex-none{flex:none}.flex-shrink-0{flex-shrink:0}.shrink{flex-shrink:1}.grow{flex-grow:1}.origin-bottom-left{transform-origin:bottom left}.-translate-x-1\/2{--tw-translate-x:-50%}.-translate-x-1\/2,.-translate-y-1\/2{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.-translate-y-1\/2{--tw-translate-y:-50%}.-translate-y-1\/4{--tw-translate-y:-25%}.-translate-y-1\/4,.translate-x-1\/3{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.translate-x-1\/3{--tw-translate-x:33.333333%}.translate-y-0{--tw-translate-y:0px}.translate-y-0,.translate-y-1{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.translate-y-1{--tw-translate-y:0.25rem}.rotate-180{--tw-rotate:180deg}.rotate-180,.rotate-\[215deg\]{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.rotate-\[215deg\]{--tw-rotate:215deg}.skew-x-\[-30deg\]{--tw-skew-x:-30deg}.skew-x-\[-30deg\],.transform{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.transform-gpu{transform:translate3d(var(--tw-translate-x),var(--tw-translate-y),0) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}@keyframes meteor{0%{opacity:1;transform:rotate(215deg) translateX(0)}70%{opacity:1}to{opacity:0;transform:rotate(215deg) translateX(-1200px)}}.animate-meteor{animation:meteor 15s linear infinite}.cursor-not-allowed{cursor:not-allowed}.cursor-pointer{cursor:pointer}.touch-pan-x{--tw-pan-x:pan-x;touch-action:var(--tw-pan-x) var(--tw-pan-y) var(--tw-pinch-zoom)}.snap-x{scroll-snap-type:x var(--tw-scroll-snap-strictness)}.snap-mandatory{--tw-scroll-snap-strictness:mandatory}.snap-start{scroll-snap-align:start}.list-disc{list-style-type:disc}.appearance-none{-webkit-appearance:none;-moz-appearance:none;appearance:none}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}.grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.flex-wrap{flex-wrap:wrap}.items-start{align-items:flex-start}.items-center{align-items:center}.items-baseline{align-items:baseline}.justify-start{justify-content:flex-start}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.gap-0{gap:0}.gap-0\.5{gap:.125rem}.gap-10{gap:2.5rem}.gap-12{gap:3rem}.gap-16{gap:4rem}.gap-2{gap:.5rem}.gap-20{gap:5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.gap-8{gap:2rem}.gap-x-1{-moz-column-gap:.25rem;column-gap:.25rem}.gap-x-14{-moz-column-gap:3.5rem;column-gap:3.5rem}.gap-x-2{-moz-column-gap:.5rem;column-gap:.5rem}.gap-x-2\.5{-moz-column-gap:.625rem;column-gap:.625rem}.gap-x-3{-moz-column-gap:.75rem;column-gap:.75rem}.gap-x-4{-moz-column-gap:1rem;column-gap:1rem}.gap-x-6{-moz-column-gap:1.5rem;column-gap:1.5rem}.gap-x-8{-moz-column-gap:2rem;column-gap:2rem}.gap-y-10{row-gap:2.5rem}.gap-y-12{row-gap:3rem}.gap-y-14{row-gap:3.5rem}.gap-y-16{row-gap:4rem}.gap-y-20{row-gap:5rem}.gap-y-24{row-gap:6rem}.gap-y-3{row-gap:.75rem}.gap-y-4{row-gap:1rem}.gap-y-6{row-gap:1.5rem}.gap-y-8{row-gap:2rem}.-space-y-px>:not([hidden])~:not([hidden]){--tw-space-y-reverse:0;margin-bottom:calc(-1px*var(--tw-space-y-reverse));margin-top:calc(-1px*(1 - var(--tw-space-y-reverse)))}.space-x-3>:not([hidden])~:not([hidden]){--tw-space-x-reverse:0;margin-left:calc(.75rem*(1 - var(--tw-space-x-reverse)));margin-right:calc(.75rem*var(--tw-space-x-reverse))}.space-x-4>:not([hidden])~:not([hidden]){--tw-space-x-reverse:0;margin-left:calc(1rem*(1 - var(--tw-space-x-reverse)));margin-right:calc(1rem*var(--tw-space-x-reverse))}.space-x-6>:not([hidden])~:not([hidden]){--tw-space-x-reverse:0;margin-left:calc(1.5rem*(1 - var(--tw-space-x-reverse)));margin-right:calc(1.5rem*var(--tw-space-x-reverse))}.space-x-8>:not([hidden])~:not([hidden]){--tw-space-x-reverse:0;margin-left:calc(2rem*(1 - var(--tw-space-x-reverse)));margin-right:calc(2rem*var(--tw-space-x-reverse))}.space-y-16>:not([hidden])~:not([hidden]){--tw-space-y-reverse:0;margin-bottom:calc(4rem*var(--tw-space-y-reverse));margin-top:calc(4rem*(1 - var(--tw-space-y-reverse)))}.space-y-2>:not([hidden])~:not([hidden]){--tw-space-y-reverse:0;margin-bottom:calc(.5rem*var(--tw-space-y-reverse));margin-top:calc(.5rem*(1 - var(--tw-space-y-reverse)))}.space-y-3>:not([hidden])~:not([hidden]){--tw-space-y-reverse:0;margin-bottom:calc(.75rem*var(--tw-space-y-reverse));margin-top:calc(.75rem*(1 - var(--tw-space-y-reverse)))}.space-y-4>:not([hidden])~:not([hidden]){--tw-space-y-reverse:0;margin-bottom:calc(1rem*var(--tw-space-y-reverse));margin-top:calc(1rem*(1 - var(--tw-space-y-reverse)))}.space-y-6>:not([hidden])~:not([hidden]){--tw-space-y-reverse:0;margin-bottom:calc(1.5rem*var(--tw-space-y-reverse));margin-top:calc(1.5rem*(1 - var(--tw-space-y-reverse)))}.space-y-8>:not([hidden])~:not([hidden]){--tw-space-y-reverse:0;margin-bottom:calc(2rem*var(--tw-space-y-reverse));margin-top:calc(2rem*(1 - var(--tw-space-y-reverse)))}.divide-x>:not([hidden])~:not([hidden]){--tw-divide-x-reverse:0;border-left-width:calc(1px*(1 - var(--tw-divide-x-reverse)));border-right-width:calc(1px*var(--tw-divide-x-reverse))}.divide-y>:not([hidden])~:not([hidden]){--tw-divide-y-reverse:0;border-bottom-width:calc(1px*var(--tw-divide-y-reverse));border-top-width:calc(1px*(1 - var(--tw-divide-y-reverse)))}.divide-gray-100>:not([hidden])~:not([hidden]){--tw-divide-opacity:1;border-color:rgb(243 244 246/var(--tw-divide-opacity))}.divide-gray-200>:not([hidden])~:not([hidden]){--tw-divide-opacity:1;border-color:rgb(229 231 235/var(--tw-divide-opacity))}.divide-gray-500\/10>:not([hidden])~:not([hidden]){border-color:hsla(220,9%,46%,.1)}.divide-gray-900\/5>:not([hidden])~:not([hidden]){border-color:rgba(17,24,39,.05)}.divide-white\/10>:not([hidden])~:not([hidden]){border-color:hsla(0,0%,100%,.1)}.divide-white\/5>:not([hidden])~:not([hidden]){border-color:hsla(0,0%,100%,.05)}.self-start{align-self:flex-start}.overflow-hidden{overflow:hidden}.overflow-visible{overflow:visible}.overflow-x-auto{overflow-x:auto}.overflow-y-auto{overflow-y:auto}.overflow-y-hidden{overflow-y:hidden}.scroll-smooth{scroll-behavior:smooth}.truncate{overflow:hidden;text-overflow:ellipsis}.truncate,.whitespace-nowrap{white-space:nowrap}.whitespace-break-spaces{white-space:break-spaces}.rounded{border-radius:.25rem}.rounded-2xl{border-radius:1rem}.rounded-3xl{border-radius:1.5rem}.rounded-\[9999px\],.rounded-full{border-radius:9999px}.rounded-lg{border-radius:.5rem}.rounded-md{border-radius:.375rem}.rounded-xl{border-radius:.75rem}.rounded-b-md{border-bottom-left-radius:.375rem;border-bottom-right-radius:.375rem}.rounded-t-md{border-top-left-radius:.375rem;border-top-right-radius:.375rem}.rounded-tl-xl{border-top-left-radius:.75rem}.border{border-width:1px}.border-0{border-width:0}.border-2{border-width:2px}.border-4{border-width:4px}.border-b{border-bottom-width:1px}.border-b-2{border-bottom-width:2px}.border-l{border-left-width:1px}.border-r{border-right-width:1px}.border-t{border-top-width:1px}.border-none{border-style:none}.border-gray-200{--tw-border-opacity:1;border-color:rgb(229 231 235/var(--tw-border-opacity))}.border-gray-300{--tw-border-opacity:1;border-color:rgb(209 213 219/var(--tw-border-opacity))}.border-gray-600\/10{border-color:rgba(75,85,99,.1)}.border-gray-800{--tw-border-opacity:1;border-color:rgb(31 41 55/var(--tw-border-opacity))}.border-gray-900{--tw-border-opacity:1;border-color:rgb(17 24 39/var(--tw-border-opacity))}.border-gray-900\/10{border-color:rgba(17,24,39,.1)}.border-iris{--tw-border-opacity:1;border-color:rgb(71 70 184/var(--tw-border-opacity))}.border-transparent{border-color:transparent}.border-white{--tw-border-opacity:1;border-color:rgb(255 255 255/var(--tw-border-opacity))}.border-white\/10{border-color:hsla(0,0%,100%,.1)}.border-b-white\/20{border-bottom-color:hsla(0,0%,100%,.2)}.border-r-white\/10{border-right-color:hsla(0,0%,100%,.1)}.bg-cinder{--tw-bg-opacity:1;background-color:rgb(37 39 49/var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246/var(--tw-bg-opacity))}.bg-gray-400\/10{background-color:rgba(156,163,175,.1)}.bg-gray-50{--tw-bg-opacity:1;background-color:rgb(249 250 251/var(--tw-bg-opacity))}.bg-gray-700{--tw-bg-opacity:1;background-color:rgb(55 65 81/var(--tw-bg-opacity))}.bg-gray-800{--tw-bg-opacity:1;background-color:rgb(31 41 55/var(--tw-bg-opacity))}.bg-gray-800\/40{background-color:rgba(31,41,55,.4)}.bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39/var(--tw-bg-opacity))}.bg-gray-900\/5{background-color:rgba(17,24,39,.05)}.bg-green-100{--tw-bg-opacity:1;background-color:rgb(220 252 231/var(--tw-bg-opacity))}.bg-indigo-100{--tw-bg-opacity:1;background-color:rgb(224 231 255/var(--tw-bg-opacity))}.bg-indigo-500{--tw-bg-opacity:1;background-color:rgb(99 102 241/var(--tw-bg-opacity))}.bg-indigo-600{--tw-bg-opacity:1;background-color:rgb(79 70 229/var(--tw-bg-opacity))}.bg-indigo-800{--tw-bg-opacity:1;background-color:rgb(55 48 163/var(--tw-bg-opacity))}.bg-iris{--tw-bg-opacity:1;background-color:rgb(71 70 184/var(--tw-bg-opacity))}.bg-pearl{--tw-bg-opacity:1;background-color:rgb(16 25 38/var(--tw-bg-opacity))}.bg-red-100{--tw-bg-opacity:1;background-color:rgb(254 226 226/var(--tw-bg-opacity))}.bg-slate-500{--tw-bg-opacity:1;background-color:rgb(100 116 139/var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255/var(--tw-bg-opacity))}.bg-white\/5{background-color:hsla(0,0%,100%,.05)}.bg-\[url\(\/images\/cta-bg\.png\)\]{background-image:url(images/cta-bg.png)}.bg-\[url\(\/images\/hero-header\.svg\)\]{background-image:url(images/hero-header.svg)}.bg-gradient-to-l{background-image:linear-gradient(to left,var(--tw-gradient-stops))}.bg-gradient-to-r{background-image:linear-gradient(to right,var(--tw-gradient-stops))}.bg-gradient-to-tr{background-image:linear-gradient(to top right,var(--tw-gradient-stops))}.from-\[\#80caff\]{--tw-gradient-from:#80caff var(--tw-gradient-from-position);--tw-gradient-to:rgba(128,202,255,0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from),var(--tw-gradient-to)}.from-\[\#ff80b5\]{--tw-gradient-from:#ff80b5 var(--tw-gradient-from-position);--tw-gradient-to:rgba(255,128,181,0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from),var(--tw-gradient-to)}.from-indigo-400{--tw-gradient-from:#818cf8 var(--tw-gradient-from-position);--tw-gradient-to:rgba(129,140,248,0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from),var(--tw-gradient-to)}.from-purple-700{--tw-gradient-from:#7e22ce var(--tw-gradient-from-position);--tw-gradient-to:rgba(126,34,206,0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from),var(--tw-gradient-to)}.from-slate-500{--tw-gradient-from:#64748b var(--tw-gradient-from-position);--tw-gradient-to:rgba(100,116,139,0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from),var(--tw-gradient-to)}.via-purple-600{--tw-gradient-to:rgba(147,51,234,0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from),#9333ea var(--tw-gradient-via-position),var(--tw-gradient-to)}.to-\[\#4f46e5\]{--tw-gradient-to:#4f46e5 var(--tw-gradient-to-position)}.to-\[\#9089fc\]{--tw-gradient-to:#9089fc var(--tw-gradient-to-position)}.to-transparent{--tw-gradient-to:transparent var(--tw-gradient-to-position)}.bg-auto{background-size:auto}.bg-cover{background-size:cover}.bg-clip-border{background-clip:border-box}.fill-gray-300{fill:#d1d5db}.fill-gray-800{fill:#1f2937}.fill-gray-800\/20{fill:rgba(31,41,55,.2)}.stroke-gray-700{stroke:#374151}.object-contain{-o-object-fit:contain;object-fit:contain}.object-cover{-o-object-fit:cover;object-fit:cover}.object-left{-o-object-position:left;object-position:left}.object-left-top{-o-object-position:left top;object-position:left top}.p-0{padding:0}.p-1{padding:.25rem}.p-2{padding:.5rem}.p-2\.5{padding:.625rem}.p-3{padding:.75rem}.p-4{padding:1rem}.p-6{padding:1.5rem}.p-8{padding:2rem}.px-0{padding-left:0;padding-right:0}.px-2{padding-left:.5rem;padding-right:.5rem}.px-2\.5{padding-left:.625rem;padding-right:.625rem}.px-3{padding-left:.75rem;padding-right:.75rem}.px-3\.5{padding-left:.875rem;padding-right:.875rem}.px-4{padding-left:1rem;padding-right:1rem}.px-5{padding-left:1.25rem;padding-right:1.25rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.px-8{padding-left:2rem;padding-right:2rem}.px-\[calc\(theme\(spacing\.3\)-1px\)\]{padding-left:calc(.75rem - 1px);padding-right:calc(.75rem - 1px)}.py-0{padding-bottom:0;padding-top:0}.py-0\.5{padding-bottom:.125rem;padding-top:.125rem}.py-1{padding-bottom:.25rem;padding-top:.25rem}.py-1\.5{padding-bottom:.375rem;padding-top:.375rem}.py-10{padding-bottom:2.5rem;padding-top:2.5rem}.py-12{padding-bottom:3rem;padding-top:3rem}.py-14{padding-bottom:3.5rem;padding-top:3.5rem}.py-16{padding-bottom:4rem;padding-top:4rem}.py-2{padding-bottom:.5rem;padding-top:.5rem}.py-2\.5{padding-bottom:.625rem;padding-top:.625rem}.py-20{padding-bottom:5rem;padding-top:5rem}.py-24{padding-bottom:6rem;padding-top:6rem}.py-3{padding-bottom:.75rem;padding-top:.75rem}.py-3\.5{padding-bottom:.875rem;padding-top:.875rem}.py-32{padding-bottom:8rem;padding-top:8rem}.py-4{padding-bottom:1rem;padding-top:1rem}.py-6{padding-bottom:1.5rem;padding-top:1.5rem}.py-8{padding-bottom:2rem;padding-top:2rem}.py-\[calc\(theme\(spacing\[1\.5\]\)-1px\)\]{padding-bottom:calc(.375rem - 1px);padding-top:calc(.375rem - 1px)}.pb-1{padding-bottom:.25rem}.pb-10{padding-bottom:2.5rem}.pb-12{padding-bottom:3rem}.pb-14{padding-bottom:3.5rem}.pb-24{padding-bottom:6rem}.pb-32{padding-bottom:8rem}.pb-4{padding-bottom:1rem}.pb-6{padding-bottom:1.5rem}.pb-72{padding-bottom:18rem}.pb-8{padding-bottom:2rem}.pl-10{padding-left:2.5rem}.pl-3{padding-left:.75rem}.pl-4{padding-left:1rem}.pl-6{padding-left:1.5rem}.pl-8{padding-left:2rem}.pl-9{padding-left:2.25rem}.pr-1{padding-right:.25rem}.pr-10{padding-right:2.5rem}.pr-12{padding-right:3rem}.pr-3{padding-right:.75rem}.pr-3\.5{padding-right:.875rem}.pr-4{padding-right:1rem}.pt-0{padding-top:0}.pt-10{padding-top:2.5rem}.pt-12{padding-top:3rem}.pt-16{padding-top:4rem}.pt-2{padding-top:.5rem}.pt-20{padding-top:5rem}.pt-32{padding-top:8rem}.pt-4{padding-top:1rem}.pt-5{padding-top:1.25rem}.pt-6{padding-top:1.5rem}.pt-8{padding-top:2rem}.text-left{text-align:left}.text-center{text-align:center}.align-middle{vertical-align:middle}.text-2xl{font-size:1.5rem}.text-3xl{font-size:1.875rem}.text-4xl{font-size:2.25rem}.text-\[0\.8125rem\]{font-size:.8125rem}.text-base{font-size:1rem}.text-lg{font-size:1.125rem}.text-sm{font-size:.875rem}.text-xl{font-size:1.25rem}.text-xs{font-size:.75rem}.font-bold{font-weight:700}.font-light{font-weight:300}.font-medium{font-weight:500}.font-semibold{font-weight:600}.uppercase{text-transform:uppercase}.leading-10{line-height:2.5rem}.leading-4{line-height:1rem}.leading-5{line-height:1.25rem}.leading-6{line-height:1.5rem}.leading-7{line-height:1.75rem}.leading-8{line-height:2rem}.leading-9{line-height:2.25rem}.leading-none{line-height:1}.leading-relaxed{line-height:1.625}.tracking-tight{letter-spacing:-.025em}.tracking-widest{letter-spacing:.1em}.text-\[\#7dd3fc\]{--tw-text-opacity:1;color:rgb(125 211 252/var(--tw-text-opacity))}.text-black{--tw-text-opacity:1;color:rgb(22 23 27/var(--tw-text-opacity))}.text-emerald-300{--tw-text-opacity:1;color:rgb(110 231 183/var(--tw-text-opacity))}.text-gray-100{--tw-text-opacity:1;color:rgb(243 244 246/var(--tw-text-opacity))}.text-gray-200{--tw-text-opacity:1;color:rgb(229 231 235/var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity:1;color:rgb(209 213 219/var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175/var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128/var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99/var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity:1;color:rgb(55 65 81/var(--tw-text-opacity))}.text-gray-800{--tw-text-opacity:1;color:rgb(31 41 55/var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39/var(--tw-text-opacity))}.text-green-800{--tw-text-opacity:1;color:rgb(22 101 52/var(--tw-text-opacity))}.text-indigo-200{--tw-text-opacity:1;color:rgb(199 210 254/var(--tw-text-opacity))}.text-indigo-300{--tw-text-opacity:1;color:rgb(165 180 252/var(--tw-text-opacity))}.text-indigo-400{--tw-text-opacity:1;color:rgb(129 140 248/var(--tw-text-opacity))}.text-indigo-500{--tw-text-opacity:1;color:rgb(99 102 241/var(--tw-text-opacity))}.text-indigo-600{--tw-text-opacity:1;color:rgb(79 70 229/var(--tw-text-opacity))}.text-iris{--tw-text-opacity:1;color:rgb(71 70 184/var(--tw-text-opacity))}.text-pearl{--tw-text-opacity:1;color:rgb(16 25 38/var(--tw-text-opacity))}.text-red-400{--tw-text-opacity:1;color:rgb(248 113 113/var(--tw-text-opacity))}.text-red-500{--tw-text-opacity:1;color:rgb(239 68 68/var(--tw-text-opacity))}.text-red-800{--tw-text-opacity:1;color:rgb(153 27 27/var(--tw-text-opacity))}.text-rose-400{--tw-text-opacity:1;color:rgb(251 113 133/var(--tw-text-opacity))}.text-santa{--tw-text-opacity:1;color:rgb(160 161 178/var(--tw-text-opacity))}.text-slate-400{--tw-text-opacity:1;color:rgb(148 163 184/var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255/var(--tw-text-opacity))}.underline{text-decoration-line:underline}.decoration-indigo-600{text-decoration-color:#4f46e5}.decoration-2{text-decoration-thickness:2px}.placeholder-gray-500::-moz-placeholder{--tw-placeholder-opacity:1;color:rgb(107 114 128/var(--tw-placeholder-opacity))}.placeholder-gray-500::placeholder{--tw-placeholder-opacity:1;color:rgb(107 114 128/var(--tw-placeholder-opacity))}.opacity-0{opacity:0}.opacity-100{opacity:1}.opacity-20{opacity:.2}.opacity-25{opacity:.25}.opacity-30{opacity:.3}.opacity-50{opacity:.5}.opacity-70{opacity:.7}.shadow{--tw-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);--tw-shadow-colored:0 1px 3px var(--tw-shadow-color),0 1px 2px var(--tw-shadow-color)}.shadow,.shadow-2xl{box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgba(0,0,0,.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color)}.shadow-\[0_0_0_1px_\#ffffff10\]{--tw-shadow:0 0 0 1px #ffffff10;--tw-shadow-colored:0 0 0 1px var(--tw-shadow-color)}.shadow-\[0_0_0_1px_\#ffffff10\],.shadow-lg{box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.shadow-lg{--tw-shadow:0 10px 15px -3px rgba(0,0,0,.1),0 4px 6px -4px rgba(0,0,0,.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color),0 4px 6px -4px var(--tw-shadow-color)}.shadow-sm{--tw-shadow:0 1px 2px 0 rgba(0,0,0,.05);--tw-shadow-colored:0 1px 2px 0 var(--tw-shadow-color)}.shadow-sm,.shadow-thick{box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.shadow-thick{--tw-shadow:0px 13px 40px rgba(0,0,0,.3),0px 4px 4px rgba(0,0,0,.2);--tw-shadow-colored:0px 13px 40px var(--tw-shadow-color),0px 4px 4px var(--tw-shadow-color)}.shadow-xl{--tw-shadow:0 20px 25px -5px rgba(0,0,0,.1),0 8px 10px -6px rgba(0,0,0,.1);--tw-shadow-colored:0 20px 25px -5px var(--tw-shadow-color),0 8px 10px -6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color)}.ring-1,.ring-2{box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000)}.ring-2{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color)}.ring-inset{--tw-ring-inset:inset}.ring-black\/10{--tw-ring-color:rgba(22,23,27,.1)}.ring-gray-200{--tw-ring-opacity:1;--tw-ring-color:rgb(229 231 235/var(--tw-ring-opacity))}.ring-gray-300{--tw-ring-opacity:1;--tw-ring-color:rgb(209 213 219/var(--tw-ring-opacity))}.ring-gray-900\/10{--tw-ring-color:rgba(17,24,39,.1)}.ring-gray-900\/5{--tw-ring-color:rgba(17,24,39,.05)}.ring-indigo-200{--tw-ring-opacity:1;--tw-ring-color:rgb(199 210 254/var(--tw-ring-opacity))}.ring-indigo-400\/30{--tw-ring-color:rgba(129,140,248,.3)}.ring-indigo-500{--tw-ring-opacity:1;--tw-ring-color:rgb(99 102 241/var(--tw-ring-opacity))}.ring-indigo-700{--tw-ring-opacity:1;--tw-ring-color:rgb(67 56 202/var(--tw-ring-opacity))}.ring-iris{--tw-ring-opacity:1;--tw-ring-color:rgb(71 70 184/var(--tw-ring-opacity))}.ring-white{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255/var(--tw-ring-opacity))}.ring-white\/10{--tw-ring-color:hsla(0,0%,100%,.1)}.ring-white\/5{--tw-ring-color:hsla(0,0%,100%,.05)}.blur{--tw-blur:blur(8px)}.blur,.blur-3xl{filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.blur-3xl{--tw-blur:blur(64px)}.filter{filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-duration:.15s;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(.4,0,.2,1)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(.4,0,.2,1)}.duration-150,.transition-all{transition-duration:.15s}.duration-200{transition-duration:.2s}.duration-300{transition-duration:.3s}.duration-500{transition-duration:.5s}.ease-in{transition-timing-function:cubic-bezier(.4,0,1,1)}.ease-in-out{transition-timing-function:cubic-bezier(.4,0,.2,1)}.ease-out{transition-timing-function:cubic-bezier(0,0,.2,1)}.\[mask-image\:radial-gradient\(100\%_100\%_at_top_right\2c white\2c transparent\)\]{-webkit-mask-image:radial-gradient(100% 100% at top right,#fff,transparent);mask-image:radial-gradient(100% 100% at top right,#fff,transparent)}.\[mask-image\:radial-gradient\(32rem_32rem_at_center\2c white\2c transparent\)\]{-webkit-mask-image:radial-gradient(32rem 32rem at center,#fff,transparent);mask-image:radial-gradient(32rem 32rem at center,#fff,transparent)}.\[mask-image\:radial-gradient\(50\%_45\%_at_50\%_55\%\2c white\2c transparent\)\]{-webkit-mask-image:radial-gradient(50% 45% at 50% 55%,#fff,transparent);mask-image:radial-gradient(50% 45% at 50% 55%,#fff,transparent)}.max-w-7xl{max-width:95rem}html{overflow-x:hidden;scroll-behavior:smooth}:root{color-scheme:dark}::-moz-selection{background:#dc2626}::selection{background:#dc2626}.starfall{background:transparent;box-shadow:73vw 40vh #9fbfec,20vw 59vh #9fbfec,71vw 13vh #9fbfec,73vw 25vh #9fbfec,15vw 92vh #9fbfec,4vw 18vh #9fbfec,58vw 83vh #9fbfec,58vw 57vh #9fbfec,32vw 96vh #9fbfec,77vw 85vh #9fbfec,5vw 27vh #9fbfec,94vw 74vh #9fbfec,69vw 66vh #9fbfec,50vw 5vh #9fbfec,71vw 62vh #9fbfec,80vw 34vh #9fbfec,97vw 75vh #9fbfec,43vw 77vh #9fbfec,80vw 16vh #9fbfec,54vw 91vh #9fbfec,40vw 5vh #9fbfec,20vw 12vh #9fbfec,8vw 97vh #9fbfec,3vw 19vh #9fbfec,22vw 83vh #9fbfec,49vw 77vh #9fbfec,59vw 69vh #9fbfec,44vw 8vh #9fbfec,10vw 90vh #9fbfec,86vw 93vh #9fbfec,56vw 93vh #9fbfec,20vw 81vh #9fbfec,12vw 81vh #9fbfec,75vw 17vh #9fbfec,32vw 5vh #9fbfec,14vw 95vh #9fbfec,36vw 82vh #9fbfec,42vw 51vh #9fbfec,18vw 64vh #9fbfec,12vw 57vh #9fbfec,74vw 36vh #9fbfec,25vw 75vh #9fbfec,44vw 86vh #9fbfec,38vw 66vh #9fbfec,22vw 79vh #9fbfec,99vw 41vh #9fbfec,27vw 28vh #9fbfec,98vw 51vh #9fbfec,11vw 81vh #9fbfec,3vw 57vh #9fbfec,58vw 92vh #9fbfec,94vw 16vh #9fbfec,81vw 38vh #9fbfec,13vw 31vh #9fbfec,96vw 18vh #9fbfec,81vw 89vh #9fbfec,71vw 6vh #9fbfec,11vw 92vh #9fbfec,62vw 87vh #9fbfec,45vw 60vh #9fbfec,94vw 1vh #9fbfec,49vw 37vh #9fbfec,53vw 44vh #9fbfec,53vw 11vh #9fbfec,73vw 70vh #9fbfec,7vw 27vh #9fbfec,71vw 10vh #9fbfec,15vw 89vh #9fbfec,74vw 54vh #9fbfec,31vw 14vh #9fbfec,4vw 68vh #9fbfec,5vw 19vh #9fbfec,3vw 11vh #9fbfec,3vw 89vh #9fbfec,40vw 64vh #9fbfec,4vw 99vh #9fbfec,86vw 19vh #9fbfec,5vw 37vh #9fbfec,56vw 69vh #9fbfec,56vw 81vh #9fbfec,39vw 56vh #9fbfec,54vw 32vh #9fbfec,15vw 39vh #9fbfec,30vw 93vh #9fbfec,72vw 13vh #9fbfec,26vw 88vh #9fbfec,40vw 43vh #9fbfec,84vw 68vh #9fbfec,3vw 44vh #9fbfec,87vw 78vh #9fbfec,98vw 60vh #9fbfec,46vw 93vh #9fbfec,48vw 77vh #9fbfec,100vw 69vh #9fbfec,27vw 12vh #9fbfec,40vw 29vh #9fbfec,96vw 39vh #9fbfec,71vw 23vh #9fbfec,41vw 74vh #9fbfec,56vw 57vh #9fbfec,88vw 74vh #9fbfec,82vw 21vh #9fbfec,51vw 89vh #9fbfec,4vw 22vh #9fbfec,36vw 24vh #9fbfec,68vw 51vh #9fbfec,76vw 51vh #9fbfec,81vw 31vh #9fbfec,76vw 26vh #9fbfec,71vw 22vh #9fbfec,62vw 67vh #9fbfec,58vw 52vh #9fbfec,54vw 63vh #9fbfec,42vw 92vh #9fbfec,63vw 28vh #9fbfec,86vw 29vh #9fbfec,1vw 60vh #9fbfec,26vw 39vh #9fbfec,36vw 11vh #9fbfec,99vw 30vh #9fbfec,4vw 1vh #9fbfec,9vw 16vh #9fbfec,81vw 78vh #9fbfec,7vw 29vh #9fbfec,1vw 16vh #9fbfec,35vw 16vh #9fbfec,4vw 22vh #9fbfec,57vw 87vh #9fbfec,50vw 67vh #9fbfec,93vw 91vh #9fbfec,28vw 95vh #9fbfec,92vw 15vh #9fbfec,5vw 44vh #9fbfec,27vw 86vh #9fbfec,91vw 46vh #9fbfec,4vw 58vh #9fbfec,4vw 36vh #9fbfec,59vw 3vh #9fbfec,80vw 9vh #9fbfec,25vw 5vh #9fbfec,11vw 25vh #9fbfec,47vw 93vh #9fbfec,4vw 85vh #9fbfec,22vw 4vh #9fbfec,79vw 97vh #9fbfec,81vw 81vh #9fbfec,46vw 86vh #9fbfec,4vw 5vh #9fbfec,72vw 5vh #9fbfec,96vw 3vh #9fbfec,71vw 44vh #9fbfec,49vw 93vh #9fbfec,60vw 35vh #9fbfec,73vw 82vh #9fbfec,91vw 34vh #9fbfec,5vw 29vh #9fbfec,13vw 62vh #9fbfec,54vw 4vh #9fbfec,32vw 84vh #9fbfec,77vw 30vh #9fbfec,37vw 83vh #9fbfec,96vw 63vh #9fbfec,14vw 39vh #9fbfec,5vw 37vh #9fbfec,15vw 21vh #9fbfec,87vw 80vh #9fbfec,32vw 61vh #9fbfec,41vw 62vh #9fbfec,41vw 8vh #9fbfec,44vw 65vh #9fbfec,83vw 15vh #9fbfec,41vw 86vh #9fbfec,69vw 37vh #9fbfec,67vw 11vh #9fbfec,35vw 4vh #9fbfec,98vw 89vh #9fbfec,93vw 6vh #9fbfec,23vw 92vh #9fbfec,7vw 19vh #9fbfec,73vw 12vh #9fbfec,74vw 77vh #9fbfec,37vw 60vh #9fbfec,41vw 44vh #9fbfec,55vw 13vh #9fbfec,85vw 45vh #9fbfec,61vw 27vh #9fbfec,81vw 43vh #9fbfec,57vw 86vh #9fbfec,42vw 58vh #9fbfec,93vw 83vh #9fbfec,41vw 33vh #9fbfec,77vw 92vh #9fbfec,87vw 83vh #9fbfec,45vw 81vh #9fbfec,18vw 34vh #9fbfec,25vw 29vh #9fbfec,75vw 54vh #9fbfec,100vw 66vh #9fbfec,99vw 41vh #9fbfec,45vw 56vh #9fbfec,27vw 26vh #9fbfec,77vw 86vh #9fbfec,44vw 84vh #9fbfec,25vw 93vh #9fbfec,42vw 89vh #9fbfec,60vw 100vh #9fbfec,78vw 51vh #9fbfec,77vw 91vh #9fbfec,26vw 96vh #9fbfec,21vw 82vh #9fbfec,88vw 98vh #9fbfec,90vw 3vh #9fbfec,83vw 21vh #9fbfec,75vw 85vh #9fbfec,100vw 54vh #9fbfec,47vw 87vh #9fbfec,37vw 52vh #9fbfec,3vw 3vh #9fbfec,12vw 92vh #9fbfec,67vw 10vh #9fbfec,22vw 29vh #9fbfec,20vw 56vh #9fbfec,6vw 34vh #9fbfec,47vw 84vh #9fbfec,96vw 51vh #9fbfec,86vw 32vh #9fbfec,85vw 20vh #9fbfec,57vw 45vh #9fbfec,39vw 88vh #9fbfec,73vw 12vh #9fbfec,13vw 55vh #9fbfec,37vw 10vh #9fbfec,22vw 89vh #9fbfec,100vw 12vh #9fbfec,5vw 32vh #9fbfec,2vw 87vh #9fbfec,43vw 60vh #9fbfec,11vw 78vh #9fbfec,67vw 92vh #9fbfec,8vw 89vh #9fbfec,58vw 91vh #9fbfec,61vw 79vh #9fbfec,84vw 79vh #9fbfec,18vw 19vh #9fbfec,46vw 72vh #9fbfec,84vw 51vh #9fbfec,3vw 78vh #9fbfec,75vw 23vh #9fbfec,27vw 58vh #9fbfec,50vw 6vh #9fbfec,56vw 28vh #9fbfec,67vw 42vh #9fbfec,25vw 98vh #9fbfec,100vw 96vh #9fbfec,20vw 90vh #9fbfec,83vw 100vh #9fbfec,7vw 6vh #9fbfec,61vw 35vh #9fbfec,74vw 95vh #9fbfec,4vw 78vh #9fbfec,96vw 55vh #9fbfec,86vw 83vh #9fbfec,20vw 87vh #9fbfec,24vw 3vh #9fbfec,32vw 62vh #9fbfec,35vw 58vh #9fbfec,80vw 31vh #9fbfec,17vw 27vh #9fbfec,18vw 68vh #9fbfec,78vw 15vh #9fbfec,24vw 5vh #9fbfec,58vw 100vh #9fbfec,30vw 60vh #9fbfec,15vw 83vh #9fbfec,8vw 52vh #9fbfec,28vw 65vh #9fbfec,48vw 25vh #9fbfec,4vw 77vh #9fbfec,49vw 37vh #9fbfec,57vw 71vh #9fbfec,99vw 49vh #9fbfec,5vw 49vh #9fbfec,52vw 18vh #9fbfec,50vw 30vh #9fbfec,46vw 13vh #9fbfec,45vw 48vh #9fbfec,61vw 52vh #9fbfec,69vw 51vh #9fbfec,65vw 24vh #9fbfec,98vw 86vh #9fbfec,14vw 41vh #9fbfec,92vw 66vh #9fbfec,41vw 92vh #9fbfec,71vw 87vh #9fbfec,5vw 72vh #9fbfec,6vw 34vh #9fbfec,86vw 99vh #9fbfec,30vw 17vh #9fbfec,48vw 97vh #9fbfec,88vw 50vh #9fbfec,4vw 40vh #9fbfec,92vw 59vh #9fbfec,48vw 18vh #9fbfec,27vw 65vh #9fbfec,5vw 67vh #9fbfec,59vw 48vh #9fbfec,24vw 87vh #9fbfec,9vw 14vh #9fbfec,99vw 90vh #9fbfec,35vw 99vh #9fbfec,72vw 29vh #9fbfec,5vw 23vh #9fbfec,74vw 79vh #9fbfec,12vw 1vh #9fbfec,46vw 69vh #9fbfec,88vw 8vh #9fbfec,5vw 29vh #9fbfec,6vw 74vh #9fbfec,34vw 82vh #9fbfec,79vw 20vh #9fbfec,99vw 5vh #9fbfec,64vw 86vh #9fbfec,76vw 59vh #9fbfec,7vw 44vh #9fbfec,63vw 86vh #9fbfec,52vw 39vh #9fbfec,34vw 60vh #9fbfec,80vw 86vh #9fbfec,76vw 18vh #9fbfec,67vw 66vh #9fbfec,27vw 25vh #9fbfec,40vw 94vh #9fbfec,31vw 6vh #9fbfec,51vw 4vh #9fbfec,54vw 92vh #9fbfec,41vw 96vh #9fbfec,59vw 66vh #9fbfec,5vw 89vh #9fbfec,99vw 13vh #9fbfec,48vw 35vh #9fbfec,2vw 98vh #9fbfec,74vw 66vh #9fbfec,28vw 41vh #9fbfec,71vw 59vh #9fbfec,51vw 83vh #9fbfec,44vw 88vh #9fbfec,79vw 78vh #9fbfec,58vw 78vh #9fbfec,55vw 88vh #9fbfec,31vw 38vh #9fbfec,19vw 54vh #9fbfec,98vw 60vh #9fbfec,58vw 72vh #9fbfec,7vw 17vh #9fbfec,91vw 56vh #9fbfec,52vw 79vh #9fbfec,97vw 70vh #9fbfec,8vw 91vh #9fbfec,4vw 7vh #9fbfec,88vw 87vh #9fbfec,33vw 82vh #9fbfec,51vw 36vh #9fbfec,77vw 26vh #9fbfec,67vw 79vh #9fbfec,40vw 99vh #9fbfec,43vw 65vh #9fbfec,41vw 85vh #9fbfec,93vw 6vh #9fbfec,99vw 15vh #9fbfec,64vw 92vh #9fbfec,66vw 57vh #9fbfec,87vw 59vh #9fbfec,55vw 24vh #9fbfec,74vw 90vh #9fbfec,39vw 84vh #9fbfec,47vw 17vh #9fbfec,26vw 38vh #9fbfec,9vw 93vh #9fbfec,62vw 80vh #9fbfec,100vw 87vh #9fbfec,60vw 22vh #9fbfec,93vw 90vh #9fbfec,72vw 14vh #9fbfec,48vw 27vh #9fbfec,57vw 80vh #9fbfec,66vw 100vh #9fbfec,57vw 14vh #9fbfec,27vw 38vh #9fbfec,21vw 23vh #9fbfec,66vw 74vh #9fbfec,33vw 45vh #9fbfec,75vw 76vh #9fbfec,76vw 26vh #9fbfec,98vw 31vh #9fbfec,73vw 37vh #9fbfec,25vw 34vh #9fbfec,95vw 69vh #9fbfec,52vw 58vh #9fbfec,70vw 20vh #9fbfec,80vw 7vh #9fbfec,19vw 86vh #9fbfec,48vw 68vh #9fbfec,24vw 71vh #9fbfec,75vw 38vh #9fbfec,96vw 21vh #9fbfec,7vw 35vh #9fbfec,14vw 61vh #9fbfec,26vw 12vh #9fbfec,14vw 66vh #9fbfec,23vw 17vh #9fbfec,10vw 81vh #9fbfec,58vw 12vh #9fbfec,77vw 33vh #9fbfec,93vw 47vh #9fbfec,86vw 52vh #9fbfec,67vw 63vh #9fbfec,2vw 46vh #9fbfec,24vw 51vh #9fbfec,8vw 99vh #9fbfec,38vw 97vh #9fbfec,49vw 35vh #9fbfec,10vw 22vh #9fbfec,86vw 34vh #9fbfec,43vw 58vh #9fbfec,73vw 41vh #9fbfec,1vw 16vh #9fbfec,6vw 91vh #9fbfec,71vw 29vh #9fbfec,63vw 54vh #9fbfec,23vw 77vh #9fbfec,58vw 5vh #9fbfec,80vw 64vh #9fbfec,24vw 83vh #9fbfec,28vw 11vh #9fbfec,7vw 3vh #9fbfec,24vw 28vh #9fbfec,72vw 74vh #9fbfec,43vw 57vh #9fbfec,21vw 45vh #9fbfec,70vw 33vh #9fbfec,93vw 30vh #9fbfec,4vw 71vh #9fbfec,62vw 50vh #9fbfec,77vw 23vh #9fbfec,76vw 74vh #9fbfec,83vw 89vh #9fbfec,61vw 78vh #9fbfec,81vw 7vh #9fbfec,100vw 30vh #9fbfec,91vw 99vh #9fbfec,94vw 32vh #9fbfec,40vw 70vh #9fbfec,36vw 88vh #9fbfec,62vw 12vh #9fbfec,90vw 33vh #9fbfec,64vw 36vh #9fbfec,8vw 68vh #9fbfec,79vw 96vh #9fbfec,10vw 40vh #9fbfec,7vw 60vh #9fbfec,69vw 44vh #9fbfec,52vw 4vh #9fbfec,18vw 9vh #9fbfec,74vw 91vh #9fbfec,9vw 74vh #9fbfec,19vw 80vh #9fbfec,44vw 82vh #9fbfec,35vw 43vh #9fbfec,100vw 1vh #9fbfec,97vw 52vh #9fbfec,56vw 66vh #9fbfec,67vw 62vh #9fbfec,90vw 55vh #9fbfec,42vw 83vh #9fbfec,83vw 11vh #9fbfec,28vw 34vh #9fbfec,82vw 27vh #9fbfec,62vw 29vh #9fbfec,58vw 76vh #9fbfec,62vw 58vh #9fbfec,15vw 32vh #9fbfec,97vw 13vh #9fbfec,14vw 45vh #9fbfec,42vw 25vh #9fbfec,6vw 27vh #9fbfec,41vw 23vh #9fbfec,49vw 22vh #9fbfec,60vw 23vh #9fbfec,26vw 81vh #9fbfec,2vw 56vh #9fbfec,7vw 18vh #9fbfec,57vw 56vh #9fbfec,72vw 9vh #9fbfec,76vw 12vh #9fbfec,4vw 21vh #9fbfec,40vw 37vh #9fbfec,35vw 79vh #9fbfec,17vw 87vh #9fbfec,42vw 12vh #9fbfec,64vw 90vh #9fbfec;height:1px;width:1px}.placeholder\:text-gray-400::-moz-placeholder{--tw-text-opacity:1;color:rgb(156 163 175/var(--tw-text-opacity))}.placeholder\:text-gray-400::placeholder{--tw-text-opacity:1;color:rgb(156 163 175/var(--tw-text-opacity))}.hover\:border-indigo-500\/10:hover{border-color:rgba(99,102,241,.1)}.hover\:bg-gov:hover{--tw-bg-opacity:1;background-color:rgb(59 49 184/var(--tw-bg-opacity))}.hover\:bg-gray-100:hover{--tw-bg-opacity:1;background-color:rgb(243 244 246/var(--tw-bg-opacity))}.hover\:bg-gray-50:hover{--tw-bg-opacity:1;background-color:rgb(249 250 251/var(--tw-bg-opacity))}.hover\:bg-gray-700:hover{--tw-bg-opacity:1;background-color:rgb(55 65 81/var(--tw-bg-opacity))}.hover\:bg-indigo-400:hover{--tw-bg-opacity:1;background-color:rgb(129 140 248/var(--tw-bg-opacity))}.hover\:bg-indigo-50:hover{--tw-bg-opacity:1;background-color:rgb(238 242 255/var(--tw-bg-opacity))}.hover\:bg-indigo-500:hover{--tw-bg-opacity:1;background-color:rgb(99 102 241/var(--tw-bg-opacity))}.hover\:bg-indigo-600:hover{--tw-bg-opacity:1;background-color:rgb(79 70 229/var(--tw-bg-opacity))}.hover\:bg-indigo-800:hover{--tw-bg-opacity:1;background-color:rgb(55 48 163/var(--tw-bg-opacity))}.hover\:bg-iris:hover{--tw-bg-opacity:1;background-color:rgb(71 70 184/var(--tw-bg-opacity))}.hover\:bg-white:hover{--tw-bg-opacity:1;background-color:rgb(255 255 255/var(--tw-bg-opacity))}.hover\:bg-opacity-75:hover{--tw-bg-opacity:0.75}.hover\:text-gray-400:hover{--tw-text-opacity:1;color:rgb(156 163 175/var(--tw-text-opacity))}.hover\:text-indigo-200:hover{--tw-text-opacity:1;color:rgb(199 210 254/var(--tw-text-opacity))}.hover\:text-indigo-50:hover{--tw-text-opacity:1;color:rgb(238 242 255/var(--tw-text-opacity))}.hover\:text-indigo-500:hover{--tw-text-opacity:1;color:rgb(99 102 241/var(--tw-text-opacity))}.hover\:text-indigo-600:hover{--tw-text-opacity:1;color:rgb(79 70 229/var(--tw-text-opacity))}.hover\:text-majorelly:hover{--tw-text-opacity:1;color:rgb(67 56 202/var(--tw-text-opacity))}.hover\:text-slate-500:hover{--tw-text-opacity:1;color:rgb(100 116 139/var(--tw-text-opacity))}.hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255/var(--tw-text-opacity))}.hover\:opacity-100:hover{opacity:1}.hover\:shadow-indigo-500\/10:hover{--tw-shadow-color:rgba(99,102,241,.1);--tw-shadow:var(--tw-shadow-colored)}.hover\:ring-indigo-300:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(165 180 252/var(--tw-ring-opacity))}.hover\:ring-indigo-800:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(55 48 163/var(--tw-ring-opacity))}.focus\:z-10:focus{z-index:10}.focus\:border-iris:focus{--tw-border-opacity:1;border-color:rgb(71 70 184/var(--tw-border-opacity))}.focus\:border-white:focus{--tw-border-opacity:1;border-color:rgb(255 255 255/var(--tw-border-opacity))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring-1:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color)}.focus\:ring-1:focus,.focus\:ring-2:focus{box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000)}.focus\:ring-2:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color)}.focus\:ring-inset:focus{--tw-ring-inset:inset}.focus\:ring-indigo-500:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(99 102 241/var(--tw-ring-opacity))}.focus\:ring-indigo-600:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(79 70 229/var(--tw-ring-opacity))}.focus\:ring-iris:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(71 70 184/var(--tw-ring-opacity))}.focus\:ring-white:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255/var(--tw-ring-opacity))}.focus\:ring-offset-1:focus{--tw-ring-offset-width:1px}.focus\:ring-offset-2:focus{--tw-ring-offset-width:2px}.focus\:ring-offset-gray-800:focus{--tw-ring-offset-color:#1f2937}.focus-visible\:outline:focus-visible{outline-style:solid}.focus-visible\:outline-2:focus-visible{outline-width:2px}.focus-visible\:outline-offset-0:focus-visible{outline-offset:0}.focus-visible\:outline-offset-2:focus-visible{outline-offset:2px}.focus-visible\:outline-indigo-500:focus-visible{outline-color:#6366f1}.focus-visible\:outline-indigo-600:focus-visible{outline-color:#4f46e5}.focus-visible\:outline-iris:focus-visible{outline-color:#4746b8}.focus-visible\:outline-white:focus-visible{outline-color:#fff}.disabled\:cursor-not-allowed:disabled{cursor:not-allowed}.disabled\:text-slate-300:disabled{--tw-text-opacity:1;color:rgb(203 213 225/var(--tw-text-opacity))}.disabled\:opacity-40:disabled{opacity:.4}.disabled\:opacity-50:disabled{opacity:.5}.group:hover .group-hover\:bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255/var(--tw-bg-opacity))}.group:hover .group-hover\:text-iris{--tw-text-opacity:1;color:rgb(71 70 184/var(--tw-text-opacity))}@media (min-width:640px){.sm\:order-2{order:2}.sm\:order-3{order:3}.sm\:col-span-2{grid-column:span 2/span 2}.sm\:-mx-6{margin-left:-1.5rem;margin-right:-1.5rem}.sm\:mx-0{margin-left:0;margin-right:0}.sm\:mx-auto{margin-left:auto;margin-right:auto}.sm\:-mb-48{margin-bottom:-12rem}.sm\:-mr-2{margin-right:-.5rem}.sm\:-mt-44{margin-top:-11rem}.sm\:ml-0{margin-left:0}.sm\:ml-10{margin-left:2.5rem}.sm\:ml-3{margin-left:.75rem}.sm\:ml-4{margin-left:1rem}.sm\:mr-0{margin-right:0}.sm\:mt-0{margin-top:0}.sm\:mt-12{margin-top:3rem}.sm\:mt-16{margin-top:4rem}.sm\:mt-20{margin-top:5rem}.sm\:mt-28{margin-top:7rem}.sm\:mt-40{margin-top:10rem}.sm\:mt-48{margin-top:12rem}.sm\:block{display:block}.sm\:inline{display:inline}.sm\:flex{display:flex}.sm\:grid{display:grid}.sm\:max-h-12{max-height:3rem}.sm\:max-h-14{max-height:3.5rem}.sm\:max-h-8{max-height:2rem}.sm\:w-1\/2{width:50%}.sm\:w-32{width:8rem}.sm\:w-48{width:12rem}.sm\:w-64{width:16rem}.sm\:w-\[36rem\]{width:36rem}.sm\:w-\[40rem\]{width:40rem}.sm\:w-\[42em\]{width:42em}.sm\:w-auto{width:auto}.sm\:max-w-2xl{max-width:42rem}.sm\:max-w-3xl{max-width:48rem}.sm\:max-w-md{max-width:28rem}.sm\:max-w-none{max-width:none}.sm\:max-w-sm{max-width:24rem}.sm\:max-w-xs{max-width:20rem}.sm\:flex-auto{flex:1 1 auto}.sm\:flex-shrink-0{flex-shrink:0}.sm\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.sm\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.sm\:grid-cols-4{grid-template-columns:repeat(4,minmax(0,1fr))}.sm\:grid-cols-5{grid-template-columns:repeat(5,minmax(0,1fr))}.sm\:flex-col{flex-direction:column}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-end{justify-content:flex-end}.sm\:gap-x-10{-moz-column-gap:2.5rem;column-gap:2.5rem}.sm\:gap-x-4{-moz-column-gap:1rem;column-gap:1rem}.sm\:gap-x-6{-moz-column-gap:1.5rem;column-gap:1.5rem}.sm\:gap-y-10{row-gap:2.5rem}.sm\:gap-y-14{row-gap:3.5rem}.sm\:gap-y-16{row-gap:4rem}.sm\:gap-y-20{row-gap:5rem}.sm\:space-x-4>:not([hidden])~:not([hidden]){--tw-space-x-reverse:0;margin-left:calc(1rem*(1 - var(--tw-space-x-reverse)));margin-right:calc(1rem*var(--tw-space-x-reverse))}.sm\:space-y-0>:not([hidden])~:not([hidden]){--tw-space-y-reverse:0;margin-bottom:calc(0px*var(--tw-space-y-reverse));margin-top:calc(0px*(1 - var(--tw-space-y-reverse)))}.sm\:rounded-3xl{border-radius:1.5rem}.sm\:p-10{padding:2.5rem}.sm\:p-8{padding:2rem}.sm\:px-16{padding-left:4rem;padding-right:4rem}.sm\:px-4{padding-left:1rem;padding-right:1rem}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:px-8{padding-left:2rem;padding-right:2rem}.sm\:py-12{padding-bottom:3rem;padding-top:3rem}.sm\:py-16{padding-bottom:4rem;padding-top:4rem}.sm\:py-2{padding-bottom:.5rem;padding-top:.5rem}.sm\:py-2\.5{padding-bottom:.625rem;padding-top:.625rem}.sm\:py-20{padding-bottom:5rem;padding-top:5rem}.sm\:py-24{padding-bottom:6rem;padding-top:6rem}.sm\:py-3{padding-bottom:.75rem;padding-top:.75rem}.sm\:py-32{padding-bottom:8rem;padding-top:8rem}.sm\:py-6{padding-bottom:1.5rem;padding-top:1.5rem}.sm\:pb-16{padding-bottom:4rem}.sm\:pb-32{padding-bottom:8rem}.sm\:pl-0{padding-left:0}.sm\:pl-16{padding-left:4rem}.sm\:pl-20{padding-left:5rem}.sm\:pl-6{padding-left:1.5rem}.sm\:pr-0{padding-right:0}.sm\:pr-6{padding-right:1.5rem}.sm\:pt-12{padding-top:3rem}.sm\:pt-16{padding-top:4rem}.sm\:pt-2{padding-top:.5rem}.sm\:pt-20{padding-top:5rem}.sm\:pt-24{padding-top:6rem}.sm\:pt-28{padding-top:7rem}.sm\:pt-48{padding-top:12rem}.sm\:pt-52{padding-top:13rem}.sm\:pt-8{padding-top:2rem}.sm\:pt-80{padding-top:20rem}.sm\:text-center{text-align:center}.sm\:text-right{text-align:right}.sm\:text-2xl{font-size:1.5rem}.sm\:text-3xl{font-size:1.875rem}.sm\:text-4xl{font-size:2.25rem}.sm\:text-5xl{font-size:3rem}.sm\:text-6xl{font-size:4rem}.sm\:text-base{font-size:1rem}.sm\:text-lg{font-size:1.125rem}.sm\:text-sm{font-size:.875rem}.sm\:text-xl{font-size:1.25rem}.sm\:leading-6{line-height:1.5rem}.sm\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000)}.sm\:ring-gray-900\/10{--tw-ring-color:rgba(17,24,39,.1)}}@media (min-width:768px){.md\:absolute{position:absolute}.md\:left-0{left:0}.md\:order-1{order:1}.md\:order-2{order:2}.md\:-m-2{margin:-.5rem}.md\:my-3{margin-bottom:.75rem;margin-top:.75rem}.md\:-ml-12{margin-left:-3rem}.md\:-ml-16{margin-left:-4rem}.md\:-mr-16{margin-right:-4rem}.md\:mb-20{margin-bottom:5rem}.md\:ml-4{margin-left:1rem}.md\:ml-auto{margin-left:auto}.md\:mt-0{margin-top:0}.md\:mt-12{margin-top:3rem}.md\:mt-16{margin-top:4rem}.md\:mt-8{margin-top:2rem}.md\:block{display:block}.md\:flex{display:flex}.md\:grid{display:grid}.md\:h-full{height:100%}.md\:w-1\/2{width:50%}.md\:w-\[32rem\]{width:32rem}.md\:w-\[52rem\]{width:52rem}.md\:w-auto{width:auto}.md\:w-full{width:100%}.md\:max-w-2xl{max-width:42rem}.md\:max-w-3xl{max-width:48rem}.md\:max-w-4xl{max-width:56rem}.md\:max-w-5xl{max-width:64rem}.md\:max-w-6xl{max-width:72rem}.md\:flex-shrink-0{flex-shrink:0}.md\:grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.md\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.md\:grid-cols-4{grid-template-columns:repeat(4,minmax(0,1fr))}.md\:items-center{align-items:center}.md\:justify-center{justify-content:center}.md\:justify-between{justify-content:space-between}.md\:gap-4{gap:1rem}.md\:gap-8{gap:2rem}.md\:gap-x-4{-moz-column-gap:1rem;column-gap:1rem}.md\:gap-y-32{row-gap:8rem}.md\:space-y-12>:not([hidden])~:not([hidden]){--tw-space-y-reverse:0;margin-bottom:calc(3rem*var(--tw-space-y-reverse));margin-top:calc(3rem*(1 - var(--tw-space-y-reverse)))}.md\:p-2{padding:.5rem}.md\:p-6{padding:1.5rem}.md\:p-8{padding:2rem}.md\:px-0{padding-left:0;padding-right:0}.md\:px-12{padding-left:3rem;padding-right:3rem}.md\:px-6{padding-left:1.5rem;padding-right:1.5rem}.md\:py-2{padding-bottom:.5rem;padding-top:.5rem}.md\:py-20{padding-bottom:5rem;padding-top:5rem}.md\:pl-10{padding-left:2.5rem}.md\:pt-12{padding-top:3rem}.md\:pt-24{padding-top:6rem}.md\:pt-32{padding-top:8rem}.md\:pt-44{padding-top:11rem}.md\:text-2xl{font-size:1.5rem}.md\:text-3xl{font-size:1.875rem}.md\:text-4xl{font-size:2.25rem}.md\:text-5xl{font-size:3rem}.md\:text-base{font-size:1rem}.md\:text-lg{font-size:1.125rem}.md\:text-xl{font-size:1.25rem}.md\:leading-8{line-height:2rem}}@media (min-width:1024px){.lg\:static{position:static}.lg\:absolute{position:absolute}.lg\:relative{position:relative}.lg\:inset-y-0{bottom:0;top:0}.lg\:left-0{left:0}.lg\:left-\[max\(-14rem\2c calc\(100\%-59rem\)\)\]{left:max(-14rem,calc(100% - 59rem))}.lg\:right-0{right:0}.lg\:top-\[calc\(50\%-7rem\)\]{top:calc(50% - 7rem)}.lg\:order-first{order:-9999}.lg\:order-last{order:9999}.lg\:col-span-1{grid-column:span 1/span 1}.lg\:col-span-2{grid-column:span 2/span 2}.lg\:col-span-5{grid-column:span 5/span 5}.lg\:col-span-7{grid-column:span 7/span 7}.lg\:col-start-1{grid-column-start:1}.lg\:col-start-2{grid-column-start:2}.lg\:m-0{margin:0}.lg\:-mx-8{margin-left:-2rem;margin-right:-2rem}.lg\:mx-0{margin-left:0;margin-right:0}.lg\:mx-auto{margin-left:auto;margin-right:auto}.lg\:-ml-36{margin-left:-9rem}.lg\:ml-24{margin-left:6rem}.lg\:ml-8{margin-left:2rem}.lg\:ml-auto{margin-left:auto}.lg\:mr-0{margin-right:0}.lg\:mt-0{margin-top:0}.lg\:mt-10{margin-top:2.5rem}.lg\:mt-24{margin-top:6rem}.lg\:mt-4{margin-top:1rem}.lg\:mt-6{margin-top:1.5rem}.lg\:mt-8{margin-top:2rem}.lg\:block{display:block}.lg\:flex{display:flex}.lg\:grid{display:grid}.lg\:hidden{display:none}.lg\:h-full{height:100%}.lg\:w-0{width:0}.lg\:w-1\/2{width:50%}.lg\:w-1\/3{width:33.333333%}.lg\:w-\[48rem\]{width:48rem}.lg\:w-\[58em\]{width:58em}.lg\:w-auto{width:auto}.lg\:w-full{width:100%}.lg\:min-w-0{min-width:0}.lg\:max-w-2xl{max-width:42rem}.lg\:max-w-4xl{max-width:56rem}.lg\:max-w-7xl{max-width:80rem}.lg\:max-w-lg{max-width:32rem}.lg\:max-w-none{max-width:none}.lg\:max-w-xl{max-width:36rem}.lg\:flex-1{flex:1 1 0%}.lg\:flex-auto{flex:1 1 auto}.lg\:shrink-0{flex-shrink:0}.lg\:translate-x-1\/2{--tw-translate-x:50%;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.lg\:grid-flow-col-dense{grid-auto-flow:column dense}.lg\:grid-cols-12{grid-template-columns:repeat(12,minmax(0,1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.lg\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.lg\:grid-cols-4{grid-template-columns:repeat(4,minmax(0,1fr))}.lg\:grid-cols-5{grid-template-columns:repeat(5,minmax(0,1fr))}.lg\:grid-cols-8{grid-template-columns:repeat(8,minmax(0,1fr))}.lg\:flex-row{flex-direction:row}.lg\:items-start{align-items:flex-start}.lg\:items-center{align-items:center}.lg\:justify-start{justify-content:flex-start}.lg\:justify-center{justify-content:center}.lg\:justify-between{justify-content:space-between}.lg\:gap-24{gap:6rem}.lg\:gap-6{gap:1.5rem}.lg\:gap-8{gap:2rem}.lg\:gap-x-10{-moz-column-gap:2.5rem;column-gap:2.5rem}.lg\:gap-x-12{-moz-column-gap:3rem;column-gap:3rem}.lg\:gap-x-20{-moz-column-gap:5rem;column-gap:5rem}.lg\:gap-x-8{-moz-column-gap:2rem;column-gap:2rem}.lg\:space-y-14>:not([hidden])~:not([hidden]){--tw-space-y-reverse:0;margin-bottom:calc(3.5rem*var(--tw-space-y-reverse));margin-top:calc(3.5rem*(1 - var(--tw-space-y-reverse)))}.lg\:border-2{border-width:2px}.lg\:border-l{border-left-width:1px}.lg\:border-t-0{border-top-width:0}.lg\:border-solid{border-style:solid}.lg\:border-none{border-style:none}.lg\:border-gray-400{--tw-border-opacity:1;border-color:rgb(156 163 175/var(--tw-border-opacity))}.lg\:p-12{padding:3rem}.lg\:p-8{padding:2rem}.lg\:px-0{padding-left:0;padding-right:0}.lg\:px-10{padding-left:2.5rem;padding-right:2.5rem}.lg\:px-16{padding-left:4rem;padding-right:4rem}.lg\:px-24{padding-left:6rem;padding-right:6rem}.lg\:px-8{padding-left:2rem;padding-right:2rem}.lg\:py-12{padding-bottom:3rem;padding-top:3rem}.lg\:py-16{padding-bottom:4rem;padding-top:4rem}.lg\:py-20{padding-bottom:5rem;padding-top:5rem}.lg\:py-24{padding-bottom:6rem;padding-top:6rem}.lg\:py-32{padding-bottom:8rem;padding-top:8rem}.lg\:py-44{padding-bottom:11rem;padding-top:11rem}.lg\:py-8{padding-bottom:2rem;padding-top:2rem}.lg\:pb-0{padding-bottom:0}.lg\:pb-12{padding-bottom:3rem}.lg\:pb-32{padding-bottom:8rem}.lg\:pl-0{padding-left:0}.lg\:pl-4{padding-left:1rem}.lg\:pl-8{padding-left:2rem}.lg\:pr-4{padding-right:1rem}.lg\:pr-8{padding-right:2rem}.lg\:pt-0{padding-top:0}.lg\:pt-12{padding-top:3rem}.lg\:pt-2{padding-top:.5rem}.lg\:pt-32{padding-top:8rem}.lg\:pt-36{padding-top:9rem}.lg\:pt-4{padding-top:1rem}.lg\:pt-8{padding-top:2rem}.lg\:text-left{text-align:left}.lg\:text-center{text-align:center}.lg\:text-2xl{font-size:1.5rem}.lg\:text-4xl{font-size:2.25rem}.lg\:text-5xl{font-size:3rem}.lg\:text-6xl{font-size:4rem}.lg\:text-7xl{font-size:5rem}.lg\:text-base{font-size:1rem}.lg\:text-sm{font-size:.875rem}.lg\:text-xl{font-size:1.25rem}.lg\:font-semibold{font-weight:600}.lg\:leading-6{line-height:1.5rem}.lg\:leading-snug{line-height:1.375}}@media (min-width:1280px){.xl\:order-none{order:0}.xl\:col-auto{grid-column:auto}.xl\:col-span-2{grid-column:span 2/span 2}.xl\:mx-0{margin-left:0;margin-right:0}.xl\:-mt-8{margin-top:-2rem}.xl\:ml-48{margin-left:12rem}.xl\:mt-0{margin-top:0}.xl\:grid{display:grid}.xl\:w-80{width:20rem}.xl\:w-full{width:100%}.xl\:max-w-2xl{max-width:42rem}.xl\:max-w-none{max-width:none}.xl\:-translate-y-1\/2{--tw-translate-y:-50%;transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.xl\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.xl\:grid-cols-4{grid-template-columns:repeat(4,minmax(0,1fr))}.xl\:grid-cols-6{grid-template-columns:repeat(6,minmax(0,1fr))}.xl\:grid-cols-8{grid-template-columns:repeat(8,minmax(0,1fr))}.xl\:flex-row{flex-direction:row}.xl\:gap-8{gap:2rem}.xl\:gap-x-20{-moz-column-gap:5rem;column-gap:5rem}.xl\:p-10{padding:2.5rem}.xl\:p-6{padding:1.5rem}.xl\:px-20{padding-right:5rem}.xl\:pl-20,.xl\:px-20{padding-left:5rem}.xl\:pr-20{padding-right:5rem}.xl\:pt-80{padding-top:20rem}.xl\:text-4xl{font-size:2.25rem}.xl\:text-5xl{font-size:3rem}}@media (min-width:1536px){.\32xl\:grid-cols-8{grid-template-columns:repeat(8,minmax(0,1fr))}.\32xl\:p-4{padding:1rem}}
    </style>
</head>

<body style="zoom: 1;">
    <div class="cursor">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-500 -500 2685.29 5054.99">
            <defs>
                <style>
                .cls-1 {
                    fill: none;
                    stroke: none;
                }

                .cls-2 {
                    fill: none;
                    stroke: none;
                }

                .cls-3 {
                    fill: #ff6d00;
                }

                .cls-4,
                .cls-5 {
                    fill: #e23e0c;
                }

                .cls-4,
                .cls-9 {
                    stroke: #000;
                    stroke-miterlimit: 10;
                }

                .cls-4 {
                    stroke-width: 100px;
                }

                .cls-6 {
                    fill: #333;
                }

                .cls-7 {
                    fill: #e47909;
                }

                .cls-8 {
                    fill: #c7cbce;
                }

                .cls-9 {
                    fill: #499dba;
                    stroke-width: 5px;
                }

                .cls-10 {
                    opacity: 0.4;
                }

                .cls-cahaya {
                    stroke: #ffcb00;
                    stroke-miterlimit: 10;
                    filter: opacity(30%) blur(50px);
                    stroke-width: 360px;
                }

                #blinkingElement {
                    animation: blinkingAnimation 1.5s infinite;
                }

                #blinkingAnimationDalam {
                    animation: blinkingAnimation 1s infinite;
                }

                @keyframes blinkingAnimation {
                    0% {
                        fill: #ff3c00;
                        filter: blur(0)opacity(0%);
                    }

                    24% {
                        fill: #ff3c00;
                        filter: blur(0)opacity(0%);
                    }

                    25% {
                        fill: #ff3c00;
                        filter: blur(100px)opacity(50%);
                    }

                    50% {
                        fill: ff3c00;
                        filter: blur(100px);
                    }


                    99% {
                        fill: #ff3c00;
                        filter: blur(0)opacity(0%);
                    }

                    100% {
                        filter: blur(0)opacity(0%);
                    }
                }

                @keyframes blinkingAnimationDalam {
                    0% {
                        fill: #ff3c00;
                        filter: blur(0)opacity(0%);
                    }

                    24% {
                        fill: #ff3c00;
                        filter: blur(0)opacity(0%);
                    }

                    25% {
                        fill: #ff3c00;
                        filter: blur(100px);
                    }

                    50% {
                        fill: red;
                        filter: blur(100px);
                        stroke: red;
                    }

                    99% {
                        fill: red;
                        filter: blur(0)opacity(0%);
                    }

                    100% {
                        fill: red;
                        filter: blur(0)opacity(0%);
                    }
                }
                </style>
            </defs>
            <g id="Layer_3" data-name="Layer 3">
                <path class="cls-cahaya"
                    d="M2944.91,2832.41a791.21,791.21,0,0,1-47.83,271.77c-63-172.66-184.34-317.25-340.14-409.93-21.19,59.19-44.07,113.74-68.41,163.07H2461.6q-17.43,38.38-35.95,72.47H2313.9l-143.33,560.26c-6.87,26.89-29.74,26.89-36.62,0l-143.32-560.26H1878.87q-4.75-8.76-9.46-17.82-2.13-4.14-4.27-8.33-3.71-7.3-7.36-14.78-1.15-2.36-2.3-4.73t-2.29-4.77q-5.18-10.83-10.27-22H1816c-1.25-2.54-2.49-5.08-3.73-7.64-.63-1.28-1.25-2.56-1.86-3.85s-1.24-2.58-1.86-3.87-1.23-2.59-1.85-3.89c-1.19-2.51-2.38-5.05-3.57-7.59q-1.44-3.11-2.87-6.23-2.88-6.26-5.73-12.61Q1776,2770.36,1758.9,2725c-2.16-5.72-4.32-11.49-6.44-17.31q-2.45-6.66-4.86-13.41h0c-155.8,92.68-277.12,237.27-340.14,409.93a791.21,791.21,0,0,1-47.83-271.77c0-239.24,106-453.71,273.56-599.06h0c-.55-3.37-1.1-6.75-1.63-10.13-30.71-192.64-47.75-405.61-47.75-629.51,0-380.65,110-729.59,233.18-1001.08,112.37-247.67,235.79-430.89,296.76-515a49.87,49.87,0,0,1,4.81-5.65,47,47,0,0,1,4-3.62q.83-.66,1.68-1.29l.87-.62a0,0,0,0,0,0,0c.57-.39,1.14-.77,1.72-1.13l.79-.49.95-.56c.32-.19.64-.36,1-.53l.79-.42c.36-.18.72-.38,1.08-.55l.33-.16c.92-.43,1.83-.84,2.77-1.21l.29-.12,1.4-.52.45-.16,1.41-.47.31-.08a46.7,46.7,0,0,1,4.9-1.21l.13,0c.52-.1,1-.18,1.54-.25l.38-.06q.76-.12,1.53-.21l.23,0c1.65-.17,3.29-.27,4.94-.28h.22a47.72,47.72,0,0,1,21.12,4.91,47.23,47.23,0,0,1,17.38,14.74c61,84.07,184.39,267.29,296.77,515,123.2,271.49,233.18,620.43,233.18,1001.08,0,223.9-17,436.87-47.75,629.51-.53,3.38-1.08,6.76-1.63,10.13C2838.92,2378.68,2944.91,2593.16,2944.91,2832.41Z"
                    transform="translate(-1309.62 -8.01)" />
            </g>
            <g id="Layer_6" data-name="Layer 6">
                <g>
                    <path class="cls-1"
                        d="M2042.26,2721.24c45.3-53.88,159.85-189.27,284.21-329.61,44.54-50.26,84.15-94.16,119.3-132.47-15.6,49.59-33.82,105.85-55.08,169.55-59.35,177.87-119.33,344.76-143.34,410.94l-334,341.65Z"
                        transform="translate(-1309.62 -8.01)" />
                    <path id="blinkingAnimationDalam"
                        d="M2657.35,1861.38a32,32,0,0,0-13.39,3c-134.36,61.69-737.42,785.3-737.42,785.3l-271.63,969.55c-5.92,21.12,2.22,34.36,15.12,34.36,6.89,0,15.14-3.78,23.33-12.16l703.84-720s325.13-884.08,311.38-1031.28a31.39,31.39,0,0,0-31.23-28.74Z"
                        transform="translate(-1309.62 -8.01)" />
                </g>
                <g>
                    <path class="cls-1"
                        d="M2037.14,3057.21c12.29-69.32,43.8-243.84,81.33-427.56,13.45-65.79,25.79-123.62,37.08-174.37,11.29,50.77,23.63,108.56,37.08,174.37,37.53,183.72,69,358.24,81.33,427.56l-118.41,462.88Z"
                        transform="translate(-1309.62 -8.01)" />
                    <path id="blinkingAnimationDalam"
                        d="M2155.55,2000.82a31.41,31.41,0,0,0-25.76,13.46c-85.52,120.6-246,1048.8-246,1048.8l249.54,975.47c4.17,16.3,13.19,24.45,22.2,24.45s18-8.15,22.2-24.45l249.54-975.47s-160.46-928.2-246-1048.8a31.39,31.39,0,0,0-25.76-13.46Z"
                        transform="translate(-1309.62 -8.01)" />
                </g>
                <g>
                    <path class="cls-1"
                        d="M2065.66,2839.59c-24-66.18-84-233.07-143.35-410.94-21.25-63.7-39.47-120-55.08-169.55,35.16,38.31,74.76,82.22,119.3,132.47,124.37,140.34,238.91,275.73,284.22,329.62l128.89,460.06Z"
                        transform="translate(-1309.62 -8.01)" />
                    <path id="blinkingAnimationDalam"
                        d="M1655.65,1861.33a31.38,31.38,0,0,0-31.23,28.73c-13.75,147.21,311.38,1031.28,311.38,1031.28l703.85,720c8.19,8.38,16.44,12.16,23.33,12.16,12.89,0,21-13.24,15.12-34.36L2406.47,2649.6S1803.4,1926,1669.05,1864.3a32,32,0,0,0-13.4-3Z"
                        transform="translate(-1309.62 -8.01)" />
                </g>
            </g>
            <g id="Layer_4" data-name="Layer 4">
                <g>
                    <path class="cls-1"
                        d="M2082.52,2749.53c39.11-46.47,129.29-152.9,227.33-263.63q9.78-11,19.19-21.61-4.44,13.42-9.12,27.42C2273,2632,2226,2763.29,2205.27,2820.4l-199.89,204.48Z"
                        transform="translate(-1309.62 -8.01)" />
                    <path id="blinkingElement"
                        d="M2566.29,2027.54a26.29,26.29,0,0,0-11.05,2.45c-110.86,50.9-608.43,647.93-608.43,647.93l-224.12,800c-4.88,17.42,1.84,28.35,12.48,28.35,5.68,0,12.49-3.12,19.25-10l580.72-594.07s268.26-729.43,256.92-850.88a25.9,25.9,0,0,0-25.77-23.71Z"
                        transform="translate(-1309.62 -8.01)" />
                </g>
                <g>
                    <path class="cls-1"
                        d="M2081.39,3084c10.64-59.81,35.52-197.07,65.06-342q3-14.46,5.81-28.3,2.86,13.83,5.81,28.3c29.54,144.91,54.43,282.17,65.06,342l-70.87,277Z"
                        transform="translate(-1309.62 -8.01)" />
                    <path id="blinkingElement"
                        d="M2152.26,2213.36a25.9,25.9,0,0,0-21.25,11.1c-70.56,99.51-203,865.34-203,865.34L2134,3894.64c3.44,13.45,10.87,20.17,18.31,20.17s14.88-6.72,18.32-20.17l205.89-804.84s-132.4-765.83-202.95-865.34a25.91,25.91,0,0,0-21.26-11.1Z"
                        transform="translate(-1309.62 -8.01)" />
                </g>
                <g>
                    <path class="cls-1"
                        d="M2100.83,2820.35c-20.7-57.11-67.78-188.42-114.65-328.69q-4.68-14-9.12-27.41,9.39,10.55,19.18,21.6c98,110.73,188.22,217.16,227.33,263.63l77.15,275.36Z"
                        transform="translate(-1309.62 -8.01)" />
                    <path id="blinkingElement"
                        d="M1739.81,2027.49A25.89,25.89,0,0,0,1714,2051.2C1702.69,2172.65,1971,2902.08,1971,2902.08l580.73,594.07c6.76,6.91,13.56,10,19.25,10,10.64,0,17.35-10.93,12.47-28.35l-224.11-800s-497.57-597-608.43-647.93a26.48,26.48,0,0,0-11-2.45Z"
                        transform="translate(-1309.62 -8.01)" />
                </g>
            </g>
            <g id="Layer_2" data-name="Layer 2">
                <g id="Layer_5" data-name="Layer 5">
                    <path class="cls-5"
                        d="M2376.47,2685.2l-205.89,804.85c-6.88,26.89-29.75,26.89-36.63,0L1928.06,2685.2s132.39-765.83,203-865.34a25.9,25.9,0,0,1,42.51,0C2244.07,1919.37,2376.47,2685.2,2376.47,2685.2Z"
                        transform="translate(-1309.62 -8.01)" />
                    <path class="cls-6"
                        d="M2497.31,2771.26c-22.28,58.66-46.24,111.79-71.65,158.53H1878.87c-25.41-46.74-49.37-99.87-71.66-158.53Z"
                        transform="translate(-1309.62 -8.01)" />
                    <path class="cls-7"
                        d="M2944.91,2832.41a791.11,791.11,0,0,1-47.83,271.76c-110.93-303.92-402.53-520.88-744.82-520.88s-633.89,217-744.81,520.88a790.87,790.87,0,0,1-47.83-271.76c0-437.77,354.88-792.65,792.64-792.65S2944.91,2394.64,2944.91,2832.41Z"
                        transform="translate(-1309.62 -8.01)" />
                    <path class="cls-8"
                        d="M2720.7,1593.71c0,223.89-17,436.86-47.74,629.49-40.35,253.61-104.45,472.06-184.43,634.12H1816c-80-162.06-144.08-380.51-184.44-634.12-30.71-192.63-47.74-405.6-47.74-629.49,0-380.65,110-729.6,233.18-1001.09h670.53C2610.73,864.11,2720.7,1213.06,2720.7,1593.71Z"
                        transform="translate(-1309.62 -8.01)" />
                    <path class="cls-7"
                        d="M2487.53,592.62H1817C1929.37,345,2052.8,161.74,2113.76,77.67a47.51,47.51,0,0,1,77,0C2251.73,161.74,2375.15,345,2487.53,592.62Z"
                        transform="translate(-1309.62 -8.01)" />
                    <ellipse class="cls-7" cx="842.64" cy="2645.49" rx="83.79" ry="452.94" />
                    <circle class="cls-9" cx="842.64" cy="1270.81" r="269.5" />
                </g>
                <path class="cls-10"
                    d="M2152.26,58V592.62H1817C1929.37,345,2052.8,161.74,2113.76,77.67A47.32,47.32,0,0,1,2152.26,58Z"
                    transform="translate(-1309.62 -8.01)" />
                <path class="cls-10"
                    d="M2152.26,1009.32v539c-148.83,0-269.5-120.66-269.5-269.5S2003.43,1009.32,2152.26,1009.32Z"
                    transform="translate(-1309.62 -8.01)" />
                <path class="cls-10"
                    d="M1882.76,1278.82c0,148.84,120.67,269.5,269.5,269.5v652.24c-42.17,0-77,168.13-82.93,387-.54,21.51-.86,43.52-.86,65.9,0,40.72,1,80.21,2.85,117.76,1.5,30,3.53,58.84,6.07,86.06H1816c-24.37-49.32-47.24-103.86-68.39-163.06v0c-47.47-132.62-86.43-288.48-114.42-460.82q-.81-5.1-1.63-10.2c-30.71-192.63-47.74-405.6-47.74-629.49,0-380.65,110-729.6,233.18-1001.09h335.26v416.7C2003.43,1009.32,1882.76,1130,1882.76,1278.82Z"
                    transform="translate(-1309.62 -8.01)" />
                <path class="cls-10"
                    d="M2152.26,2200.56v905.88c-27,0-51.09-69.21-66.35-176.65-3.26-22.55-6.12-46.83-8.52-72.47-2.54-27.22-4.57-56-6.07-86.06-1.85-37.55-2.85-77-2.85-117.76,0-22.38.32-44.39.86-65.9C2075.26,2368.69,2110.09,2200.56,2152.26,2200.56Z"
                    transform="translate(-1309.62 -8.01)" />
                <path class="cls-10"
                    d="M2085.91,2929.79h-207q-18.48-34-36-72.47h234.49C2079.79,2883,2082.65,2907.24,2085.91,2929.79Z"
                    transform="translate(-1309.62 -8.01)" />
                <path class="cls-10"
                    d="M2152.26,3106.44v403.75c-7.43,0-14.85-6.7-18.3-20.16l-143.31-560.24h95.26C2101.17,3037.23,2125.22,3106.44,2152.26,3106.44Z"
                    transform="translate(-1309.62 -8.01)" />
            </g>
        </svg>

    </div>
    <div id="meteorContainer"></div>
    <div class='section-center'>
        <div class='shooting-bintangkecil'></div>
        <div class='shooting-bintangkecil-2'></div>
        <div class='bintangkecil'></div>
        <div class='bintangkecil snd'></div>
        <div class='bintangkecil trd'></div>
        <div class='bintangkecil fth'></div>
        <div class='bintangkecil fith'></div>
    </div>
    <div id="foreground">
        <div id="info">
            <h1>404 <em>Page Not Found</em></h1>
            <a style="cursor:pointer" href="./">Back Home</a>
        </div>
    </div>
    <div id="background">
    <div class="bg-pearl">
        <div class="starfall"></div>
        <div class="absolute top-0 left-0 w-full h-full pointer-events-none" style="overflow:hidden"><span
                class="pointer-events-none absolute left-1/2 top-1/2 h-0.5 w-0.5 rotate-[215deg] animate-meteor rounded-[9999px] bg-slate-500 shadow-[0_0_0_1px_#ffffff10]"
                style="top: -5px; left: 884px; animation-delay: 2.2901s; animation-duration: 10s;">
                <div
                    class="pointer-events-none absolute top-1/2 -z-10 h-[1px] w-[50px] -translate-y-1/2 bg-gradient-to-r from-slate-500 to-transparent">
                </div>
            </span><span
                class="pointer-events-none absolute left-1/2 top-1/2 h-0.5 w-0.5 rotate-[215deg] animate-meteor rounded-[9999px] bg-slate-500 shadow-[0_0_0_1px_#ffffff10]"
                style="top: -5px; left: 1213px; animation-delay: 2.0294s; animation-duration: 4s;">
                <div
                    class="pointer-events-none absolute top-1/2 -z-10 h-[1px] w-[50px] -translate-y-1/2 bg-gradient-to-r from-slate-500 to-transparent">
                </div>
            </span><span
                class="pointer-events-none absolute left-1/2 top-1/2 h-0.5 w-0.5 rotate-[215deg] animate-meteor rounded-[9999px] bg-slate-500 shadow-[0_0_0_1px_#ffffff10]"
                style="top: -5px; left: 1248px; animation-delay: 2.25954s; animation-duration: 8s;">
                <div
                    class="pointer-events-none absolute top-1/2 -z-10 h-[1px] w-[50px] -translate-y-1/2 bg-gradient-to-r from-slate-500 to-transparent">
                </div>
            </span><span
                class="pointer-events-none absolute left-1/2 top-1/2 h-0.5 w-0.5 rotate-[215deg] animate-meteor rounded-[9999px] bg-slate-500 shadow-[0_0_0_1px_#ffffff10]"
                style="top: -5px; left: 555px; animation-delay: 2.00306s; animation-duration: 8s;">
                <div
                    class="pointer-events-none absolute top-1/2 -z-10 h-[1px] w-[50px] -translate-y-1/2 bg-gradient-to-r from-slate-500 to-transparent">
                </div>
            </span><span
                class="pointer-events-none absolute left-1/2 top-1/2 h-0.5 w-0.5 rotate-[215deg] animate-meteor rounded-[9999px] bg-slate-500 shadow-[0_0_0_1px_#ffffff10]"
                style="top: -5px; left: 1400px; animation-delay: 2.26224s; animation-duration: 10s;">
                <div
                    class="pointer-events-none absolute top-1/2 -z-10 h-[1px] w-[50px] -translate-y-1/2 bg-gradient-to-r from-slate-500 to-transparent">
                </div>
            </span><span
                class="pointer-events-none absolute left-1/2 top-1/2 h-0.5 w-0.5 rotate-[215deg] animate-meteor rounded-[9999px] bg-slate-500 shadow-[0_0_0_1px_#ffffff10]"
                style="top: -5px; left: 882px; animation-delay: 2.65642s; animation-duration: 9s;">
                <div
                    class="pointer-events-none absolute top-1/2 -z-10 h-[1px] w-[50px] -translate-y-1/2 bg-gradient-to-r from-slate-500 to-transparent">
                </div>
            </span><span
                class="pointer-events-none absolute left-1/2 top-1/2 h-0.5 w-0.5 rotate-[215deg] animate-meteor rounded-[9999px] bg-slate-500 shadow-[0_0_0_1px_#ffffff10]"
                style="top: -5px; left: 1071px; animation-delay: 2.96265s; animation-duration: 11s;">
                <div
                    class="pointer-events-none absolute top-1/2 -z-10 h-[1px] w-[50px] -translate-y-1/2 bg-gradient-to-r from-slate-500 to-transparent">
                </div>
            </span><span
                class="pointer-events-none absolute left-1/2 top-1/2 h-0.5 w-0.5 rotate-[215deg] animate-meteor rounded-[9999px] bg-slate-500 shadow-[0_0_0_1px_#ffffff10]"
                style="top: -5px; left: 1284px; animation-delay: 2.42332s; animation-duration: 7s;">
                <div
                    class="pointer-events-none absolute top-1/2 -z-10 h-[1px] w-[50px] -translate-y-1/2 bg-gradient-to-r from-slate-500 to-transparent">
                </div>
            </span><span
                class="pointer-events-none absolute left-1/2 top-1/2 h-0.5 w-0.5 rotate-[215deg] animate-meteor rounded-[9999px] bg-slate-500 shadow-[0_0_0_1px_#ffffff10]"
                style="top: -5px; left: 1285px; animation-delay: 2.13741s; animation-duration: 10s;">
                <div
                    class="pointer-events-none absolute top-1/2 -z-10 h-[1px] w-[50px] -translate-y-1/2 bg-gradient-to-r from-slate-500 to-transparent">
                </div>
            </span><span
                class="pointer-events-none absolute left-1/2 top-1/2 h-0.5 w-0.5 rotate-[215deg] animate-meteor rounded-[9999px] bg-slate-500 shadow-[0_0_0_1px_#ffffff10]"
                style="top: -5px; left: 417px; animation-delay: 2.34519s; animation-duration: 2s;">
                <div
                    class="pointer-events-none absolute top-1/2 -z-10 h-[1px] w-[50px] -translate-y-1/2 bg-gradient-to-r from-slate-500 to-transparent">
                </div>
            </span><span
                class="pointer-events-none absolute left-1/2 top-1/2 h-0.5 w-0.5 rotate-[215deg] animate-meteor rounded-[9999px] bg-slate-500 shadow-[0_0_0_1px_#ffffff10]"
                style="top: -5px; left: 978px; animation-delay: 2.8305s; animation-duration: 4s;">
                <div
                    class="pointer-events-none absolute top-1/2 -z-10 h-[1px] w-[50px] -translate-y-1/2 bg-gradient-to-r from-slate-500 to-transparent">
                </div>
            </span><span
                class="pointer-events-none absolute left-1/2 top-1/2 h-0.5 w-0.5 rotate-[215deg] animate-meteor rounded-[9999px] bg-slate-500 shadow-[0_0_0_1px_#ffffff10]"
                style="top: -5px; left: 480px; animation-delay: 2.66949s; animation-duration: 10s;">
                <div
                    class="pointer-events-none absolute top-1/2 -z-10 h-[1px] w-[50px] -translate-y-1/2 bg-gradient-to-r from-slate-500 to-transparent">
                </div>
            </span><span
                class="pointer-events-none absolute left-1/2 top-1/2 h-0.5 w-0.5 rotate-[215deg] animate-meteor rounded-[9999px] bg-slate-500 shadow-[0_0_0_1px_#ffffff10]"
                style="top: -5px; left: 590px; animation-delay: 2.91402s; animation-duration: 11s;">
                <div
                    class="pointer-events-none absolute top-1/2 -z-10 h-[1px] w-[50px] -translate-y-1/2 bg-gradient-to-r from-slate-500 to-transparent">
                </div>
            </span><span
                class="pointer-events-none absolute left-1/2 top-1/2 h-0.5 w-0.5 rotate-[215deg] animate-meteor rounded-[9999px] bg-slate-500 shadow-[0_0_0_1px_#ffffff10]"
                style="top: -5px; left: 1165px; animation-delay: 2.56841s; animation-duration: 9s;">
                <div
                    class="pointer-events-none absolute top-1/2 -z-10 h-[1px] w-[50px] -translate-y-1/2 bg-gradient-to-r from-slate-500 to-transparent">
                </div>
            </span><span
                class="pointer-events-none absolute left-1/2 top-1/2 h-0.5 w-0.5 rotate-[215deg] animate-meteor rounded-[9999px] bg-slate-500 shadow-[0_0_0_1px_#ffffff10]"
                style="top: -5px; left: 720px; animation-delay: 2.91433s; animation-duration: 2s;">
                <div
                    class="pointer-events-none absolute top-1/2 -z-10 h-[1px] w-[50px] -translate-y-1/2 bg-gradient-to-r from-slate-500 to-transparent">
                </div>
            </span><span
                class="pointer-events-none absolute left-1/2 top-1/2 h-0.5 w-0.5 rotate-[215deg] animate-meteor rounded-[9999px] bg-slate-500 shadow-[0_0_0_1px_#ffffff10]"
                style="top: -5px; left: 1431px; animation-delay: 2.12997s; animation-duration: 2s;">
                <div
                    class="pointer-events-none absolute top-1/2 -z-10 h-[1px] w-[50px] -translate-y-1/2 bg-gradient-to-r from-slate-500 to-transparent">
                </div>
            </span><span
                class="pointer-events-none absolute left-1/2 top-1/2 h-0.5 w-0.5 rotate-[215deg] animate-meteor rounded-[9999px] bg-slate-500 shadow-[0_0_0_1px_#ffffff10]"
                style="top: -5px; left: 84px; animation-delay: 2.51082s; animation-duration: 6s;">
                <div
                    class="pointer-events-none absolute top-1/2 -z-10 h-[1px] w-[50px] -translate-y-1/2 bg-gradient-to-r from-slate-500 to-transparent">
                </div>
            </span><span
                class="pointer-events-none absolute left-1/2 top-1/2 h-0.5 w-0.5 rotate-[215deg] animate-meteor rounded-[9999px] bg-slate-500 shadow-[0_0_0_1px_#ffffff10]"
                style="top: -5px; left: 1477px; animation-delay: 2.99312s; animation-duration: 10s;">
                <div
                    class="pointer-events-none absolute top-1/2 -z-10 h-[1px] w-[50px] -translate-y-1/2 bg-gradient-to-r from-slate-500 to-transparent">
                </div>
            </span><span
                class="pointer-events-none absolute left-1/2 top-1/2 h-0.5 w-0.5 rotate-[215deg] animate-meteor rounded-[9999px] bg-slate-500 shadow-[0_0_0_1px_#ffffff10]"
                style="top: -5px; left: 975px; animation-delay: 2.0623s; animation-duration: 4s;">
                <div
                    class="pointer-events-none absolute top-1/2 -z-10 h-[1px] w-[50px] -translate-y-1/2 bg-gradient-to-r from-slate-500 to-transparent">
                </div>
            </span><span
                class="pointer-events-none absolute left-1/2 top-1/2 h-0.5 w-0.5 rotate-[215deg] animate-meteor rounded-[9999px] bg-slate-500 shadow-[0_0_0_1px_#ffffff10]"
                style="top: -5px; left: 1308px; animation-delay: 2.18566s; animation-duration: 7s;">
                <div
                    class="pointer-events-none absolute top-1/2 -z-10 h-[1px] w-[50px] -translate-y-1/2 bg-gradient-to-r from-slate-500 to-transparent">
                </div>
            </span></div>
    </div>
        <div class="star" data-parallaxify-range="300" style="transform: translate3d(-122px, 113px, 0px);"></div>
        <div class="star" data-parallaxify-range="81"
            style="top: 590px; left: 979px; width: 1px; height: 1px; transform: translate3d(-33px, 30px, 0px);"></div>
        <div class="star" data-parallaxify-range="84"
            style="top: 647px; left: 333px; width: 3px; height: 3px; transform: translate3d(-35px, 31px, 0px);"></div>
        <div class="star" data-parallaxify-range="59"
            style="top: 115px; left: 68px; width: 2px; height: 2px; transform: translate3d(-24px, 22px, 0px);"></div>
        <div class="star" data-parallaxify-range="37"
            style="top: 182px; left: 779px; width: 2px; height: 2px; transform: translate3d(-15px, 14px, 0px);"></div>
        <div class="star" data-parallaxify-range="72"
            style="top: 74px; left: 432px; width: 1px; height: 1px; transform: translate3d(-30px, 27px, 0px);"></div>
        <div class="star" data-parallaxify-range="48"
            style="top: 526px; left: 972px; width: 1px; height: 1px; transform: translate3d(-20px, 18px, 0px);"></div>
        <div class="star" data-parallaxify-range="74"
            style="top: 698px; left: 1066px; width: 1px; height: 1px; transform: translate3d(-30px, 28px, 0px);"></div>
        <div class="star" data-parallaxify-range="94"
            style="top: 21px; left: 1410px; width: 2px; height: 2px; transform: translate3d(-39px, 35px, 0px);"></div>
        <div class="star" data-parallaxify-range="67"
            style="top: 508px; left: 79px; width: 2px; height: 2px; transform: translate3d(-28px, 25px, 0px);"></div>
        <div class="star" data-parallaxify-range="32"
            style="top: 247px; left: 414px; width: 2px; height: 2px; transform: translate3d(-13px, 12px, 0px);"></div>
        <div class="star" data-parallaxify-range="25"
            style="top: 446px; left: 119px; width: 2px; height: 2px; transform: translate3d(-11px, 9px, 0px);"></div>
        <div class="star" data-parallaxify-range="54"
            style="top: 146px; left: 1039px; width: 3px; height: 3px; transform: translate3d(-22px, 20px, 0px);"></div>
        <div class="star" data-parallaxify-range="91"
            style="top: 92px; left: 1480px; width: 3px; height: 3px; transform: translate3d(-37px, 34px, 0px);"></div>
        <div class="star" data-parallaxify-range="72"
            style="top: 112px; left: 684px; width: 3px; height: 3px; transform: translate3d(-30px, 27px, 0px);"></div>
        <div class="star" data-parallaxify-range="88"
            style="top: 588px; left: 205px; width: 1px; height: 1px; transform: translate3d(-36px, 33px, 0px);"></div>
        <div class="star" data-parallaxify-range="13"
            style="top: 429px; left: 885px; width: 2px; height: 2px; transform: translate3d(-6px, 4px, 0px);"></div>
        <div class="star" data-parallaxify-range="85"
            style="top: 288px; left: 1024px; width: 1px; height: 1px; transform: translate3d(-35px, 32px, 0px);"></div>
        <div class="star" data-parallaxify-range="27"
            style="top: 483px; left: 594px; width: 1px; height: 1px; transform: translate3d(-11px, 10px, 0px);"></div>
        <div class="star" data-parallaxify-range="21"
            style="top: 673px; left: 221px; width: 3px; height: 3px; transform: translate3d(-9px, 7px, 0px);"></div>
        <div class="star" data-parallaxify-range="27"
            style="top: 624px; left: 212px; width: 1px; height: 1px; transform: translate3d(-11px, 10px, 0px);"></div>
        <div class="star" data-parallaxify-range="43"
            style="top: 314px; left: 630px; width: 3px; height: 3px; transform: translate3d(-18px, 16px, 0px);"></div>
        <div class="star" data-parallaxify-range="32"
            style="top: 246px; left: 19px; width: 2px; height: 2px; transform: translate3d(-13px, 12px, 0px);"></div>
        <div class="star" data-parallaxify-range="27"
            style="top: 735px; left: 1390px; width: 3px; height: 3px; transform: translate3d(-11px, 10px, 0px);"></div>
        <div class="star" data-parallaxify-range="99"
            style="top: 270px; left: 876px; width: 2px; height: 2px; transform: translate3d(-41px, 37px, 0px);"></div>
        <div class="star" data-parallaxify-range="68"
            style="top: 563px; left: 938px; width: 1px; height: 1px; transform: translate3d(-28px, 25px, 0px);"></div>
        <div class="star" data-parallaxify-range="55"
            style="top: 442px; left: 1466px; width: 3px; height: 3px; transform: translate3d(-23px, 20px, 0px);"></div>
        <div class="star" data-parallaxify-range="78"
            style="top: 598px; left: 1372px; width: 2px; height: 2px; transform: translate3d(-32px, 29px, 0px);"></div>
        <div class="star" data-parallaxify-range="23"
            style="top: 350px; left: 118px; width: 2px; height: 2px; transform: translate3d(-10px, 8px, 0px);"></div>
        <div class="star" data-parallaxify-range="94"
            style="top: 491px; left: 96px; width: 3px; height: 3px; transform: translate3d(-39px, 35px, 0px);"></div>
        <div class="star" data-parallaxify-range="45"
            style="top: 231px; left: 1245px; width: 2px; height: 2px; transform: translate3d(-19px, 17px, 0px);"></div>
        <div class="star" data-parallaxify-range="92"
            style="top: 734px; left: 339px; width: 2px; height: 2px; transform: translate3d(-38px, 34px, 0px);"></div>
        <div class="star" data-parallaxify-range="57"
            style="top: 494px; left: 208px; width: 1px; height: 1px; transform: translate3d(-24px, 21px, 0px);"></div>
        <div class="star" data-parallaxify-range="96"
            style="top: 563px; left: 925px; width: 3px; height: 3px; transform: translate3d(-39px, 36px, 0px);"></div>
        <div class="star" data-parallaxify-range="87"
            style="top: 151px; left: 1315px; width: 2px; height: 2px; transform: translate3d(-36px, 33px, 0px);"></div>
        <div class="star" data-parallaxify-range="32"
            style="top: 228px; left: 200px; width: 1px; height: 1px; transform: translate3d(-13px, 12px, 0px);"></div>
        <div class="star" data-parallaxify-range="48"
            style="top: 617px; left: 1099px; width: 2px; height: 2px; transform: translate3d(-20px, 18px, 0px);"></div>
        <div class="star" data-parallaxify-range="71"
            style="top: 533px; left: 1153px; width: 1px; height: 1px; transform: translate3d(-29px, 26px, 0px);"></div>
        <div class="star" data-parallaxify-range="5"
            style="top: 642px; left: 476px; width: 3px; height: 3px; transform: translate3d(-3px, 1px, 0px);"></div>
        <div class="star" data-parallaxify-range="84"
            style="top: 577px; left: 833px; width: 3px; height: 3px; transform: translate3d(-35px, 31px, 0px);"></div>
        <div class="star" data-parallaxify-range="28"
            style="top: 349px; left: 173px; width: 1px; height: 1px; transform: translate3d(-12px, 10px, 0px);"></div>
        <div class="star" data-parallaxify-range="68"
            style="top: 330px; left: 742px; width: 2px; height: 2px; transform: translate3d(-28px, 25px, 0px);"></div>
        <div class="star" data-parallaxify-range="21"
            style="top: 294px; left: 916px; width: 1px; height: 1px; transform: translate3d(-9px, 7px, 0px);"></div>
        <div class="star" data-parallaxify-range="67"
            style="top: 297px; left: 956px; width: 2px; height: 2px; transform: translate3d(-28px, 25px, 0px);"></div>
        <div class="star" data-parallaxify-range="40"
            style="top: 205px; left: 485px; width: 2px; height: 2px; transform: translate3d(-17px, 15px, 0px);"></div>
        <div class="star" data-parallaxify-range="88"
            style="top: 253px; left: 893px; width: 3px; height: 3px; transform: translate3d(-36px, 33px, 0px);"></div>
        <div class="star" data-parallaxify-range="51"
            style="top: 378px; left: 666px; width: 1px; height: 1px; transform: translate3d(-21px, 19px, 0px);"></div>
        <div class="star" data-parallaxify-range="33"
            style="top: 166px; left: 377px; width: 2px; height: 2px; transform: translate3d(-14px, 12px, 0px);"></div>
        <div class="star" data-parallaxify-range="36"
            style="top: 329px; left: 30px; width: 3px; height: 3px; transform: translate3d(-15px, 13px, 0px);"></div>
        <div class="star" data-parallaxify-range="31"
            style="top: 714px; left: 1528px; width: 3px; height: 3px; transform: translate3d(-13px, 11px, 0px);"></div>
        <div class="star" data-parallaxify-range="23"
            style="top: 75px; left: 1321px; width: 2px; height: 2px; transform: translate3d(-10px, 8px, 0px);"></div>
        <div class="star" data-parallaxify-range="19"
            style="top: 27px; left: 698px; width: 3px; height: 3px; transform: translate3d(-8px, 7px, 0px);"></div>
        <div class="star" data-parallaxify-range="12"
            style="top: 725px; left: 1504px; width: 3px; height: 3px; transform: translate3d(-5px, 4px, 0px);"></div>
        <div class="star" data-parallaxify-range="50"
            style="top: 254px; left: 206px; width: 2px; height: 2px; transform: translate3d(-21px, 18px, 0px);"></div>
        <div class="star" data-parallaxify-range="42"
            style="top: 264px; left: 791px; width: 2px; height: 2px; transform: translate3d(-18px, 15px, 0px);"></div>
        <div class="star" data-parallaxify-range="93"
            style="top: 491px; left: 1486px; width: 2px; height: 2px; transform: translate3d(-38px, 35px, 0px);"></div>
        <div class="star" data-parallaxify-range="26"
            style="top: 184px; left: 290px; width: 3px; height: 3px; transform: translate3d(-11px, 9px, 0px);"></div>
        <div class="star" data-parallaxify-range="86"
            style="top: 5px; left: 1139px; width: 2px; height: 2px; transform: translate3d(-35px, 32px, 0px);"></div>
        <div class="star" data-parallaxify-range="97"
            style="top: 639px; left: 1419px; width: 2px; height: 2px; transform: translate3d(-40px, 36px, 0px);"></div>
        <div class="star" data-parallaxify-range="37"
            style="top: 313px; left: 976px; width: 3px; height: 3px; transform: translate3d(-15px, 14px, 0px);"></div>
        <div class="star" data-parallaxify-range="36"
            style="top: 447px; left: 748px; width: 2px; height: 2px; transform: translate3d(-15px, 13px, 0px);"></div>
        <div class="star" data-parallaxify-range="37"
            style="top: 497px; left: 1096px; width: 1px; height: 1px; transform: translate3d(-15px, 14px, 0px);"></div>
        <div class="star" data-parallaxify-range="63"
            style="top: 389px; left: 181px; width: 3px; height: 3px; transform: translate3d(-26px, 23px, 0px);"></div>
        <div class="star" data-parallaxify-range="55"
            style="top: 209px; left: 837px; width: 2px; height: 2px; transform: translate3d(-23px, 20px, 0px);"></div>
        <div class="star" data-parallaxify-range="45"
            style="top: 200px; left: 1314px; width: 2px; height: 2px; transform: translate3d(-19px, 17px, 0px);"></div>
        <div class="star" data-parallaxify-range="64"
            style="top: 709px; left: 164px; width: 1px; height: 1px; transform: translate3d(-26px, 24px, 0px);"></div>
        <div class="star" data-parallaxify-range="72"
            style="top: 269px; left: 1284px; width: 1px; height: 1px; transform: translate3d(-30px, 27px, 0px);"></div>
        <div class="star" data-parallaxify-range="48"
            style="top: 204px; left: 914px; width: 1px; height: 1px; transform: translate3d(-20px, 18px, 0px);"></div>
        <div class="star" data-parallaxify-range="36"
            style="top: 388px; left: 307px; width: 3px; height: 3px; transform: translate3d(-15px, 13px, 0px);"></div>
        <div class="star" data-parallaxify-range="71"
            style="top: 198px; left: 346px; width: 1px; height: 1px; transform: translate3d(-29px, 26px, 0px);"></div>
        <div class="star" data-parallaxify-range="82"
            style="top: 214px; left: 896px; width: 3px; height: 3px; transform: translate3d(-34px, 31px, 0px);"></div>
        <div class="star" data-parallaxify-range="56"
            style="top: 104px; left: 1072px; width: 2px; height: 2px; transform: translate3d(-23px, 21px, 0px);"></div>
        <div class="star" data-parallaxify-range="86"
            style="top: 485px; left: 1518px; width: 2px; height: 2px; transform: translate3d(-35px, 32px, 0px);"></div>
        <div class="star" data-parallaxify-range="82"
            style="top: 684px; left: 803px; width: 3px; height: 3px; transform: translate3d(-34px, 31px, 0px);"></div>
        <div class="star" data-parallaxify-range="92"
            style="top: 620px; left: 290px; width: 1px; height: 1px; transform: translate3d(-38px, 34px, 0px);"></div>
        <div class="star" data-parallaxify-range="55"
            style="top: 436px; left: 546px; width: 1px; height: 1px; transform: translate3d(-23px, 20px, 0px);"></div>
        <div class="star" data-parallaxify-range="57"
            style="top: 165px; left: 1275px; width: 2px; height: 2px; transform: translate3d(-24px, 21px, 0px);"></div>
        <div class="star" data-parallaxify-range="32"
            style="top: 450px; left: 311px; width: 1px; height: 1px; transform: translate3d(-13px, 12px, 0px);"></div>
        <div class="star" data-parallaxify-range="75"
            style="top: 104px; left: 1015px; width: 1px; height: 1px; transform: translate3d(-31px, 28px, 0px);"></div>
        <div class="star" data-parallaxify-range="49"
            style="top: 322px; left: 963px; width: 3px; height: 3px; transform: translate3d(-20px, 18px, 0px);"></div>
        <div class="star" data-parallaxify-range="49"
            style="top: 553px; left: 1155px; width: 2px; height: 2px; transform: translate3d(-20px, 18px, 0px);"></div>
        <div class="star" data-parallaxify-range="71"
            style="top: 429px; left: 1339px; width: 2px; height: 2px; transform: translate3d(-29px, 26px, 0px);"></div>
        <div class="star" data-parallaxify-range="34"
            style="top: 750px; left: 981px; width: 1px; height: 1px; transform: translate3d(-14px, 12px, 0px);"></div>
        <div class="star" data-parallaxify-range="6"
            style="top: 172px; left: 1225px; width: 2px; height: 2px; transform: translate3d(-3px, 2px, 0px);"></div>
        <div class="star" data-parallaxify-range="81"
            style="top: 470px; left: 1471px; width: 1px; height: 1px; transform: translate3d(-33px, 30px, 0px);"></div>
        <div class="star" data-parallaxify-range="60"
            style="top: 303px; left: 797px; width: 1px; height: 1px; transform: translate3d(-25px, 22px, 0px);"></div>
        <div class="star" data-parallaxify-range="78"
            style="top: 589px; left: 732px; width: 1px; height: 1px; transform: translate3d(-32px, 29px, 0px);"></div>
        <div class="star" data-parallaxify-range="23"
            style="top: 222px; left: 127px; width: 3px; height: 3px; transform: translate3d(-10px, 8px, 0px);"></div>
        <div class="star" data-parallaxify-range="62"
            style="top: 61px; left: 80px; width: 3px; height: 3px; transform: translate3d(-26px, 23px, 0px);"></div>
        <div class="star" data-parallaxify-range="65"
            style="top: 608px; left: 1099px; width: 2px; height: 2px; transform: translate3d(-27px, 24px, 0px);"></div>
        <div class="star" data-parallaxify-range="90"
            style="top: 416px; left: 137px; width: 1px; height: 1px; transform: translate3d(-37px, 34px, 0px);"></div>
        <div class="star" data-parallaxify-range="67"
            style="top: 668px; left: 1146px; width: 1px; height: 1px; transform: translate3d(-28px, 25px, 0px);"></div>
        <div class="star" data-parallaxify-range="49"
            style="top: 93px; left: 1026px; width: 3px; height: 3px; transform: translate3d(-20px, 18px, 0px);"></div>
        <div class="star" data-parallaxify-range="80"
            style="top: 608px; left: 872px; width: 3px; height: 3px; transform: translate3d(-33px, 30px, 0px);"></div>
        <div class="star" data-parallaxify-range="87"
            style="top: 747px; left: 1025px; width: 3px; height: 3px; transform: translate3d(-36px, 33px, 0px);"></div>
        <div class="star" data-parallaxify-range="60"
            style="top: 61px; left: 776px; width: 2px; height: 2px; transform: translate3d(-25px, 22px, 0px);"></div>
        <div class="star" data-parallaxify-range="99"
            style="top: 432px; left: 1214px; width: 2px; height: 2px; transform: translate3d(-41px, 37px, 0px);"></div>
        <div class="star" data-parallaxify-range="92"
            style="top: 156px; left: 495px; width: 3px; height: 3px; transform: translate3d(-38px, 34px, 0px);"></div>
        <div class="star" data-parallaxify-range="12"
            style="top: 243px; left: 80px; width: 1px; height: 1px; transform: translate3d(-5px, 4px, 0px);"></div>
        <div class="star" data-parallaxify-range="60"
            style="top: 704px; left: 404px; width: 2px; height: 2px; transform: translate3d(-25px, 22px, 0px);"></div>
        <div class="star" data-parallaxify-range="11"
            style="top: 355px; left: 1371px; width: 2px; height: 2px; transform: translate3d(-5px, 4px, 0px);"></div>
        <div class="star" data-parallaxify-range="58"
            style="top: 718px; left: 752px; width: 1px; height: 1px; transform: translate3d(-24px, 22px, 0px);"></div>
        <div class="star" data-parallaxify-range="8"
            style="top: 614px; left: 382px; width: 1px; height: 1px; transform: translate3d(-4px, 3px, 0px);"></div>
        <div class="star" data-parallaxify-range="29"
            style="top: 312px; left: 43px; width: 1px; height: 1px; transform: translate3d(-12px, 11px, 0px);"></div>
        <div class="star" data-parallaxify-range="78"
            style="top: 638px; left: 321px; width: 1px; height: 1px; transform: translate3d(-32px, 29px, 0px);"></div>
        <div class="star" data-parallaxify-range="52"
            style="top: 169px; left: 1369px; width: 3px; height: 3px; transform: translate3d(-22px, 19px, 0px);"></div>
        <div class="star" data-parallaxify-range="83"
            style="top: 283px; left: 983px; width: 3px; height: 3px; transform: translate3d(-34px, 31px, 0px);"></div>
        <div class="star" data-parallaxify-range="69"
            style="top: 61px; left: 1033px; width: 1px; height: 1px; transform: translate3d(-28px, 26px, 0px);"></div>
        <div class="star" data-parallaxify-range="21"
            style="top: 484px; left: 894px; width: 2px; height: 2px; transform: translate3d(-9px, 7px, 0px);"></div>
        <div class="star" data-parallaxify-range="65"
            style="top: 194px; left: 1367px; width: 3px; height: 3px; transform: translate3d(-27px, 24px, 0px);"></div>
        <div class="star" data-parallaxify-range="24"
            style="top: 315px; left: 1174px; width: 2px; height: 2px; transform: translate3d(-10px, 9px, 0px);"></div>
        <div class="star" data-parallaxify-range="77"
            style="top: 121px; left: 134px; width: 2px; height: 2px; transform: translate3d(-32px, 29px, 0px);"></div>
        <div class="star" data-parallaxify-range="44"
            style="top: 106px; left: 859px; width: 1px; height: 1px; transform: translate3d(-18px, 16px, 0px);"></div>
        <div class="star" data-parallaxify-range="56"
            style="top: 83px; left: 1388px; width: 3px; height: 3px; transform: translate3d(-23px, 21px, 0px);"></div>
        <div class="star" data-parallaxify-range="15"
            style="top: 625px; left: 748px; width: 2px; height: 2px; transform: translate3d(-7px, 5px, 0px);"></div>
        <div class="star" data-parallaxify-range="1"
            style="top: 583px; left: 322px; width: 2px; height: 2px; transform: translate3d(-1px, 0px, 0px);"></div>
        <div class="star" data-parallaxify-range="61"
            style="top: 27px; left: 113px; width: 1px; height: 1px; transform: translate3d(-25px, 23px, 0px);"></div>
        <div class="star" data-parallaxify-range="1"
            style="top: 618px; left: 892px; width: 2px; height: 2px; transform: translate3d(-1px, 0px, 0px);"></div>
        <div class="star" data-parallaxify-range="55"
            style="top: 738px; left: 19px; width: 1px; height: 1px; transform: translate3d(-23px, 20px, 0px);"></div>
        <div class="star" data-parallaxify-range="10"
            style="top: 217px; left: 552px; width: 2px; height: 2px; transform: translate3d(-5px, 3px, 0px);"></div>
        <div class="star" data-parallaxify-range="51"
            style="top: 452px; left: 896px; width: 1px; height: 1px; transform: translate3d(-21px, 19px, 0px);"></div>
        <div class="star" data-parallaxify-range="30"
            style="top: 549px; left: 188px; width: 3px; height: 3px; transform: translate3d(-13px, 11px, 0px);"></div>
        <div class="star" data-parallaxify-range="72"
            style="top: 431px; left: 1471px; width: 3px; height: 3px; transform: translate3d(-30px, 27px, 0px);"></div>
        <div class="star" data-parallaxify-range="48"
            style="top: 242px; left: 1337px; width: 3px; height: 3px; transform: translate3d(-20px, 18px, 0px);"></div>
        <div class="star" data-parallaxify-range="48"
            style="top: 79px; left: 922px; width: 2px; height: 2px; transform: translate3d(-20px, 18px, 0px);"></div>
        <div class="star" data-parallaxify-range="51"
            style="top: 469px; left: 1460px; width: 3px; height: 3px; transform: translate3d(-21px, 19px, 0px);"></div>
        <div class="star" data-parallaxify-range="96"
            style="top: 419px; left: 585px; width: 2px; height: 2px; transform: translate3d(-39px, 36px, 0px);"></div>
        <div class="star" data-parallaxify-range="63"
            style="top: 680px; left: 11px; width: 2px; height: 2px; transform: translate3d(-26px, 23px, 0px);"></div>
        <div class="star" data-parallaxify-range="22"
            style="top: 695px; left: 1407px; width: 2px; height: 2px; transform: translate3d(-9px, 8px, 0px);"></div>
        <div class="star" data-parallaxify-range="56"
            style="top: 227px; left: 1526px; width: 3px; height: 3px; transform: translate3d(-23px, 21px, 0px);"></div>
        <div class="star" data-parallaxify-range="89"
            style="top: 646px; left: 1206px; width: 2px; height: 2px; transform: translate3d(-37px, 33px, 0px);"></div>
        <div class="star" data-parallaxify-range="12"
            style="top: 615px; left: 1346px; width: 2px; height: 2px; transform: translate3d(-5px, 4px, 0px);"></div>
        <div class="star" data-parallaxify-range="99"
            style="top: 210px; left: 928px; width: 3px; height: 3px; transform: translate3d(-41px, 37px, 0px);"></div>
        <div class="star" data-parallaxify-range="44"
            style="top: 200px; left: 2px; width: 2px; height: 2px; transform: translate3d(-18px, 16px, 0px);"></div>
        <div class="star" data-parallaxify-range="96"
            style="top: 583px; left: 1375px; width: 3px; height: 3px; transform: translate3d(-39px, 36px, 0px);"></div>
        <div class="star" data-parallaxify-range="46"
            style="top: 250px; left: 73px; width: 2px; height: 2px; transform: translate3d(-19px, 17px, 0px);"></div>
        <div class="star" data-parallaxify-range="3"
            style="top: 348px; left: 901px; width: 1px; height: 1px; transform: translate3d(-2px, 1px, 0px);"></div>
        <div class="star" data-parallaxify-range="23"
            style="top: 714px; left: 485px; width: 1px; height: 1px; transform: translate3d(-10px, 8px, 0px);"></div>
        <div class="star" data-parallaxify-range="39"
            style="top: 33px; left: 995px; width: 3px; height: 3px; transform: translate3d(-16px, 14px, 0px);"></div>
        <div class="star" data-parallaxify-range="10"
            style="top: 572px; left: 1184px; width: 2px; height: 2px; transform: translate3d(-5px, 3px, 0px);"></div>
        <div class="star" data-parallaxify-range="22"
            style="top: 8px; left: 171px; width: 2px; height: 2px; transform: translate3d(-9px, 8px, 0px);"></div>
        <div class="star" data-parallaxify-range="42"
            style="top: 129px; left: 261px; width: 3px; height: 3px; transform: translate3d(-18px, 15px, 0px);"></div>
        <div class="star" data-parallaxify-range="65"
            style="top: 248px; left: 1483px; width: 1px; height: 1px; transform: translate3d(-27px, 24px, 0px);"></div>
        <div class="star" data-parallaxify-range="96"
            style="top: 597px; left: 166px; width: 3px; height: 3px; transform: translate3d(-39px, 36px, 0px);"></div>
        <div class="star" data-parallaxify-range="52"
            style="top: 202px; left: 211px; width: 3px; height: 3px; transform: translate3d(-22px, 19px, 0px);"></div>
        <div class="star" data-parallaxify-range="44"
            style="top: 621px; left: 1316px; width: 3px; height: 3px; transform: translate3d(-18px, 16px, 0px);"></div>
        <div class="star" data-parallaxify-range="95"
            style="top: 243px; left: 775px; width: 3px; height: 3px; transform: translate3d(-39px, 36px, 0px);"></div>
        <div class="star" data-parallaxify-range="32"
            style="top: 115px; left: 340px; width: 3px; height: 3px; transform: translate3d(-13px, 12px, 0px);"></div>
        <div class="star" data-parallaxify-range="90"
            style="top: 33px; left: 960px; width: 1px; height: 1px; transform: translate3d(-37px, 34px, 0px);"></div>
        <div class="star" data-parallaxify-range="99"
            style="top: 431px; left: 1445px; width: 2px; height: 2px; transform: translate3d(-41px, 37px, 0px);"></div>
        <div class="star" data-parallaxify-range="62"
            style="top: 12px; left: 1145px; width: 3px; height: 3px; transform: translate3d(-26px, 23px, 0px);"></div>
        <div class="star" data-parallaxify-range="393"
            style="top: 16px; left: 837px; width: 7px; height: 7px; transform: translate3d(-160px, 149px, 0px);"></div>
        <div class="star" data-parallaxify-range="36"
            style="top: 445px; left: 1375px; width: 5px; height: 5px; transform: translate3d(-15px, 13px, 0px);"></div>
        <div class="star" data-parallaxify-range="317"
            style="top: 535px; left: 1474px; width: 6px; height: 6px; transform: translate3d(-129px, 120px, 0px);">
        </div>
        <div class="star" data-parallaxify-range="366"
            style="top: 503px; left: 518px; width: 6px; height: 6px; transform: translate3d(-149px, 138px, 0px);"></div>
        <div class="star" data-parallaxify-range="178"
            style="top: 400px; left: 485px; width: 5px; height: 5px; transform: translate3d(-73px, 67px, 0px);"></div>
        <div class="star" data-parallaxify-range="163"
            style="top: 708px; left: 1416px; width: 5px; height: 5px; transform: translate3d(-67px, 61px, 0px);"></div>
        <div class="star" data-parallaxify-range="206"
            style="top: 141px; left: 614px; width: 6px; height: 6px; transform: translate3d(-84px, 78px, 0px);"></div>
        <div class="star" data-parallaxify-range="136"
            style="top: 235px; left: 1422px; width: 3px; height: 3px; transform: translate3d(-56px, 51px, 0px);"></div>
        <div class="star" data-parallaxify-range="395"
            style="top: 269px; left: 1485px; width: 6px; height: 6px; transform: translate3d(-161px, 149px, 0px);">
        </div>
        <div class="star" data-parallaxify-range="306"
            style="top: 308px; left: 668px; width: 3px; height: 3px; transform: translate3d(-125px, 116px, 0px);"></div>
        <div class="star" data-parallaxify-range="261"
            style="top: 635px; left: 931px; width: 5px; height: 5px; transform: translate3d(-106px, 99px, 0px);"></div>
        <div class="star" data-parallaxify-range="214"
            style="top: 516px; left: 1242px; width: 6px; height: 6px; transform: translate3d(-87px, 81px, 0px);"></div>
        <div class="star" data-parallaxify-range="349"
            style="top: 567px; left: 501px; width: 4px; height: 4px; transform: translate3d(-142px, 132px, 0px);"></div>
        <div class="star" data-parallaxify-range="207"
            style="top: 304px; left: 906px; width: 4px; height: 4px; transform: translate3d(-84px, 78px, 0px);"></div>
        <div class="star" data-parallaxify-range="173"
            style="top: 656px; left: 345px; width: 4px; height: 4px; transform: translate3d(-71px, 65px, 0px);"></div>
        <div class="star" data-parallaxify-range="298"
            style="top: 385px; left: 7px; width: 4px; height: 4px; transform: translate3d(-121px, 113px, 0px);"></div>
        <div class="star" data-parallaxify-range="370"
            style="top: 486px; left: 686px; width: 7px; height: 7px; transform: translate3d(-150px, 140px, 0px);"></div>
        <div class="star" data-parallaxify-range="321"
            style="top: 287px; left: 1366px; width: 5px; height: 5px; transform: translate3d(-131px, 121px, 0px);">
        </div>
        <div class="star" data-parallaxify-range="121"
            style="top: 425px; left: 217px; width: 5px; height: 5px; transform: translate3d(-50px, 45px, 0px);"></div>
        <div class="star" data-parallaxify-range="142"
            style="top: 381px; left: 1534px; width: 5px; height: 5px; transform: translate3d(-58px, 53px, 0px);"></div>
        <div class="star" data-parallaxify-range="40"
            style="top: 723px; left: 388px; width: 3px; height: 3px; transform: translate3d(-17px, 15px, 0px);"></div>
        <div class="star" data-parallaxify-range="358"
            style="top: 504px; left: 763px; width: 5px; height: 5px; transform: translate3d(-146px, 135px, 0px);"></div>
        <div class="star" data-parallaxify-range="187"
            style="top: 229px; left: 413px; width: 4px; height: 4px; transform: translate3d(-76px, 70px, 0px);"></div>
        <div class="star" data-parallaxify-range="85"
            style="top: 319px; left: 1051px; width: 3px; height: 3px; transform: translate3d(-35px, 32px, 0px);"></div>
        <div class="star" data-parallaxify-range="239"
            style="top: 65px; left: 9px; width: 6px; height: 6px; transform: translate3d(-97px, 90px, 0px);"></div>
        <div class="star" data-parallaxify-range="312"
            style="top: 667px; left: 912px; width: 3px; height: 3px; transform: translate3d(-127px, 118px, 0px);"></div>
        <div class="star" data-parallaxify-range="230"
            style="top: 293px; left: 878px; width: 7px; height: 7px; transform: translate3d(-94px, 87px, 0px);"></div>
        <div class="star" data-parallaxify-range="92"
            style="top: 413px; left: 1207px; width: 4px; height: 4px; transform: translate3d(-38px, 34px, 0px);"></div>
        <div class="star" data-parallaxify-range="152"
            style="top: 667px; left: 935px; width: 3px; height: 3px; transform: translate3d(-62px, 57px, 0px);"></div>
        <div class="star" data-parallaxify-range="333"
            style="top: 60px; left: 1183px; width: 5px; height: 5px; transform: translate3d(-135px, 126px, 0px);"></div>
        <div class="star" data-parallaxify-range="6"
            style="top: 545px; left: 869px; width: 8px; height: 8px; background: rgba(16, 210, 173, 0.18); box-shadow: rgba(16, 210, 173, 0.18) 0px 0px 10px; transform: translate3d(-3px, 2px, 0px);">
        </div>
        <div class="star" data-parallaxify-range="579"
            style="top: 488px; left: 110px; width: 8px; height: 8px; background: rgba(207, 232, 166, 0.64); box-shadow: rgba(207, 232, 166, 0.64) 0px 0px 10px; transform: translate3d(-235px, 219px, 0px);">
        </div>
        <div class="star" data-parallaxify-range="410"
            style="top: 141px; left: 1439px; width: 7px; height: 7px; background: rgba(135, 147, 29, 0.62); box-shadow: rgba(135, 147, 29, 0.62) 0px 0px 10px; transform: translate3d(-167px, 155px, 0px);">
        </div>
        <div class="star" data-parallaxify-range="463"
            style="top: 132px; left: 1144px; width: 6px; height: 6px; background: rgba(20, 123, 204, 0.69); box-shadow: rgba(20, 123, 204, 0.69) 0px 0px 10px; transform: translate3d(-188px, 175px, 0px);">
        </div>
        <div class="star" data-parallaxify-range="186"
            style="top: 721px; left: 732px; width: 9px; height: 9px; background: rgba(63, 154, 162, 0.7); box-shadow: rgba(63, 154, 162, 0.7) 0px 0px 10px; transform: translate3d(-76px, 70px, 0px);">
        </div>
        <div class="star" data-parallaxify-range="202"
            style="top: 657px; left: 1135px; width: 9px; height: 9px; background: rgba(179, 98, 4, 0.59); box-shadow: rgba(179, 98, 4, 0.59) 0px 0px 10px; transform: translate3d(-82px, 76px, 0px);">
        </div>
        <div class="star" data-parallaxify-range="570"
            style="top: 243px; left: 1486px; width: 10px; height: 10px; background: rgba(98, 9, 209, 0.33); box-shadow: rgba(98, 9, 209, 0.33) 0px 0px 10px; transform: translate3d(-232px, 216px, 0px);">
        </div>
        <div class="star" data-parallaxify-range="426"
            style="top: 611px; left: 178px; width: 9px; height: 9px; background: rgba(122, 26, 116, 0.09); box-shadow: rgba(122, 26, 116, 0.09) 0px 0px 10px; transform: translate3d(-173px, 161px, 0px);">
        </div>
        <div class="star" data-parallaxify-range="430"
            style="top: 695px; left: 1265px; width: 7px; height: 7px; background: rgba(63, 26, 26, 0.72); box-shadow: rgba(63, 26, 26, 0.72) 0px 0px 10px; transform: translate3d(-175px, 163px, 0px);">
        </div>
        <div class="star" data-parallaxify-range="572"
            style="top: 506px; left: 857px; width: 9px; height: 9px; background: rgba(38, 76, 104, 0.33); box-shadow: rgba(38, 76, 104, 0.33) 0px 0px 10px; transform: translate3d(-232px, 217px, 0px);">
        </div>
        <div class="star" data-parallaxify-range="506"
            style="top: 643px; left: 1117px; width: 7px; height: 7px; background: rgba(233, 252, 238, 0.39); box-shadow: rgba(233, 252, 238, 0.39) 0px 0px 10px; transform: translate3d(-206px, 192px, 0px);">
        </div>
        <div class="star" data-parallaxify-range="597"
            style="top: 541px; left: 501px; width: 7px; height: 7px; background: rgba(41, 25, 20, 0.14); box-shadow: rgba(41, 25, 20, 0.14) 0px 0px 10px; transform: translate3d(-242px, 226px, 0px);">
        </div>
        <div class="star" data-parallaxify-range="102"
            style="top: 69px; left: 291px; width: 9px; height: 9px; background: rgba(2, 195, 192, 0.21); box-shadow: rgba(2, 195, 192, 0.21) 0px 0px 10px; transform: translate3d(-42px, 38px, 0px);">
        </div>
        <div class="star" data-parallaxify-range="535"
            style="top: 688px; left: 611px; width: 9px; height: 9px; background: rgba(81, 104, 147, 0.94); box-shadow: rgba(81, 104, 147, 0.94) 0px 0px 10px; transform: translate3d(-217px, 203px, 0px);">
        </div>
        <div class="star" data-parallaxify-range="66"
            style="top: 521px; left: 249px; width: 6px; height: 6px; background: rgba(220, 197, 191, 0.93); box-shadow: rgba(220, 197, 191, 0.93) 0px 0px 10px; transform: translate3d(-27px, 25px, 0px);">
        </div>
    </div>
    <script>
    const gyroscopes = document.querySelectorAll('.star');

    document.addEventListener('mousemove', (event) => {
        const mouseX = event.clientX;
        const mouseY = event.clientY;

        gyroscopes.forEach((gyroscope) => {
            const imageWidth = gyroscope.offsetWidth;
            const imageHeight = gyroscope.offsetHeight;

            // const translateX = ((mouseX / window.innerWidth) * 100) - 50;
            // const translateY = ((mouseY / window.innerHeight) * 100) - 50;
            const translateX = ((mouseX / window.innerWidth) * 100) - 50;
            const translateY = ((mouseY / window.innerHeight) * 100) - 50;

            if (gyroscope.style.height == '1px') {
                gyroscope.style.transform = `translate3d(${translateX}px, ${translateY}px, 0px)`;
            } else if (gyroscope.style.height == '2px') {
                gyroscope.style.transform =
                    `translate3d(${(translateX)*2}px, ${(translateY)*2}px, 0px)`;
            } else if (gyroscope.style.height == '3px') {
                gyroscope.style.transform =
                    `translate3d(${(translateX)*3}px, ${(translateY)*3}px, 0px)`;
            } else if (gyroscope.style.height == '4px') {
                gyroscope.style.transform =
                    `translate3d(${(translateX)*4}px, ${(translateY)*4}px, 0px)`;
            } else if (gyroscope.style.height == '5px') {
                gyroscope.style.transform =
                    `translate3d(${(translateX)*5}px, ${(translateY)*5}px, 0px)`;
            } else if (gyroscope.style.height == '6px') {
                gyroscope.style.transform =
                    `translate3d(${(translateX)*6}px, ${(translateY)*6}px, 0px)`;
            } else if (gyroscope.style.height == '7px') {
                gyroscope.style.transform =
                    `translate3d(${(translateX)*7}px, ${(translateY)*7}px, 0px)`;
            } else if (gyroscope.style.height == '8px') {
                gyroscope.style.transform =
                    `translate3d(${(translateX)*8}px, ${(translateY)*8}px, 0px)`;
            } else if (gyroscope.style.height == '9px') {
                gyroscope.style.transform =
                    `translate3d(${(translateX)*9}px, ${(translateY)*9}px, 0px)`;
            } else if (gyroscope.style.height == '10px') {
                gyroscope.style.transform =
                    `translate3d(${(translateX)*10}px, ${(translateY)*10}px, 0px)`;
            } else if (!gyroscope.style.height) {
                gyroscope.style.transform =
                    `translate3d(${(translateX)*11}px, ${(translateY)*11}px, 0px)`;
            }
        });
    });


    const cursorSmall = document.querySelector('.cursor');

    const cursorElem = (e) => {
        const mouseY = e.clientY;
        const mouseX = e.clientX;

        cursorSmall.style.transform = `translate3d(${mouseX}px, ${mouseY}px, 0)`;


    }

    window.addEventListener('mousemove', cursorElem)

    function startBlinking() {
        const blinkingElement = document.getElementById('blinkingElement');
        blinkingElement.style.animationPlayState = 'running';
    }

    function stopBlinking() {
        const blinkingElement = document.getElementById('blinkingElement');
        blinkingElement.style.animationPlayState = 'paused';
    }

    // Memulai efek kelap-kelip
    startBlinking();

    // Menghentikan efek kelap-kelip setelah beberapa detik (misalnya 5 detik)
    // setTimeout(stopBlinking, 5000);
    function createMeteor() {
        const meteor = document.createElement('div');
        meteor.classList.add('meteor');
        meteor.style.left = `${getRandomPosition()}%`;
        document.getElementById('meteorContainer').appendChild(meteor);
    }

    function getRandomPosition() {
        return Math.random() * 100;
    }

    // Membuat meteor secara periodik setiap 1 detik
    setInterval(createMeteor, 1000);

    // Membuat 10 meteor secara acak
    // for (let i = 0; i < 10; i++) {
    //   createMeteor();
    // }
    // var sparkles=100;
    // var x=ox=400;
    // var y=oy=300;
    // var swide=800;
    // var shigh=600;
    // var sleft=sdown=0;
    // var tiny=new Array();
    // var star=new Array();
    // var starv=new Array();
    // var starx=new Array();
    // var stary=new Array();
    // var tinyx=new Array();
    // var tinyy=new Array();
    // var tinyv=new Array();
    // window.onload=function() { if (document.getElementById) {
    // var i, rats, rlef, rdow;
    // for (var i=0; i<sparkles; i++) {
    // var rats=createDiv(3, 3);
    // rats.style.visibility="hidden";
    // document.body.appendChild(tiny[i]=rats);
    // starv[i]=0;
    // tinyv[i]=0;
    // var rats=createDiv(5, 5);
    // rats.style.backgroundColor="transparent";
    // rats.style.visibility="hidden";
    // var rlef=createDiv(1, 5);
    // var rdow=createDiv(5, 1);
    // rats.appendChild(rlef);
    // rats.appendChild(rdow);
    // rlef.style.top="3px";
    // rlef.style.left="0px";
    // rdow.style.top="0px";
    // rdow.style.left="3px";
    // document.body.appendChild(star[i]=rats);
    // }
    // set_width();
    // sparkle();
    // }}
    // function sparkle() {
    // var c;
    // if (x!=ox || y!=oy) {
    // ox=x;
    // oy=y;
    // for (c=0; c<sparkles; c++) if (!starv[c]) {
    // star[c].style.left=(starx[c]=x)+"px";
    // star[c].style.top=(stary[c]=y)+"px";
    // star[c].style.clip="rect(0px, 5px, 5px, 0px)";
    // star[c].style.visibility="visible";
    // starv[c]=50;
    // break;
    // }
    // }
    // for (c=0; c<sparkles; c++) {
    // if (starv[c]) update_star(c);
    // if (tinyv[c]) update_tiny(c);
    // }
    // setTimeout("sparkle()", 40);
    // }
    // function update_star(i) {
    // if (--starv[i]==25) star[i].style.clip="rect(1px, 4px, 4px, 1px)";
    // if (starv[i]) {
    // stary[i]+=1+Math.random()*3;
    // if (stary[i]<shigh+sdown) {
    // star[i].style.top=stary[i]+"px";
    // starx[i]+=(i%5-2)/5;
    // star[i].style.left=starx[i]+"px";
    // }
    // else {
    // star[i].style.visibility="hidden";
    // starv[i]=0;
    // return;
    // }
    // }
    // else {
    // tinyv[i]=50;
    // tiny[i].style.top=(tinyy[i]=stary[i])+"px";
    // tiny[i].style.left=(tinyx[i]=starx[i])+"px";
    // tiny[i].style.width="2px";
    // tiny[i].style.height="2px";
    // star[i].style.visibility="hidden";
    // tiny[i].style.visibility="visible"
    // }
    // }
    // function update_tiny(i) {
    // if (--tinyv[i]==25) {
    // tiny[i].style.width="1px";
    // tiny[i].style.height="1px";
    // }
    // if (tinyv[i]) {
    // tinyy[i]+=1+Math.random()*3;
    // if (tinyy[i]<shigh+sdown) {
    // tiny[i].style.top=tinyy[i]+"px";
    // tinyx[i]+=(i%5-2)/5;
    // tiny[i].style.left=tinyx[i]+"px";
    // }
    // else {
    // tiny[i].style.visibility="hidden";
    // tinyv[i]=0;
    // return;
    // }
    // }
    // else tiny[i].style.visibility="hidden";
    // }
    // document.onmousemove=mouse;
    // function mouse(e) {
    // set_scroll();
    // y=(e)?e.pageY:event.y+sdown;
    // x=(e)?e.pageX:event.x+sleft;
    // }
    // function set_scroll() {
    // if (typeof(self.pageYOffset)=="number") {
    // sdown=self.pageYOffset;
    // sleft=self.pageXOffset;
    // }
    // else if (document.body.scrollTop || document.body.scrollLeft) {
    // sdown=document.body.scrollTop;
    // sleft=document.body.scrollLeft;
    // }
    // else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement.scrollLeft)) {
    // sleft=document.documentElement.scrollLeft;
    // sdown=document.documentElement.scrollTop;
    // }
    // else {
    // sdown=0;
    // sleft=0;
    // }
    // }
    // window.onresize=set_width;
    // function set_width() {
    // if (typeof(self.innerWidth)=="number") {
    // swide=self.innerWidth;
    // shigh=self.innerHeight;
    // }
    // else if (document.documentElement && document.documentElement.clientWidth) {
    // swide=document.documentElement.clientWidth;
    // shigh=document.documentElement.clientHeight;
    // }
    // else if (document.body.clientWidth) {
    // swide=document.body.clientWidth;
    // shigh=document.body.clientHeight;
    // }
    // }
    // function createDiv(height, width) {
    // var div=document.createElement("div");
    // div.style.position="absolute";
    // div.style.height=height+"px";
    // div.style.width=width+"px";
    // div.style.overflow="hidden";
    // div.style.backgroundColor="yellow";
    // return (div);
    // }
    </script>

</body>

</html>