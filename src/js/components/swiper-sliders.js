import Swiper from "swiper/bundle";
import "swiper/css/bundle";

// top-slider
export default function topSlider() {
	const swiperEl = document.querySelector(".top-slider");
	const swiper = new Swiper(swiperEl, {
		allowTouchMove: false,
		slidesPerView: 1,
		loop: true,
		autoplay: {
			delay: 5000,
		},
		effect: "fade",
		fadeEffect: {
			crossFade: true,
		},
		speed: 4000,
	});
}
