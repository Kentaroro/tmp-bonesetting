import Swiper from "swiper/bundle";
import "swiper/css/bundle";

export default function TopSlider() {
	const swiperEl = document.querySelector(".top-slider");
	const swiper = new Swiper(swiperEl, {
		allowTouchMove: false,
		slidesPerView: 1,
		loop: true,
		autoplay: {
			delay: 3000,
		},
		effect: "fade",
		fadeEffect: {
			crossFade: true,
		},
		speed: 3000,
	});
}
