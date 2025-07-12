import { DotLottie } from "@lottiefiles/dotlottie-web";

const canvas = document.querySelector("#dotLottie-canvas");

if (canvas) {
    const dotLottie = new DotLottie({
        canvas,
        src: "https://lottie.host/b208c822-3d56-4be6-94da-c90ebe44db5c/FQGtcoREjg.lottie",
        loop: true,
        autoplay: true,
        speed: 1,
        duration: 1000,
    });
}
