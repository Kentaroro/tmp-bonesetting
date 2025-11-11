import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

// header-nav
export default function headerNavAnimation() {
	const headerNav = document.querySelector("#header-nav");
	const target = document.querySelector("#about");
	gsap.fromTo(
		headerNav,
		{ opacity: 0, y: -50 },
		{
			opacity: 1,
			y: 0,
			scrollTrigger: {
				trigger: target,
				start: "top 20%",
				end: "top top",
				scrub: 1,
			},
		}
	);
}
