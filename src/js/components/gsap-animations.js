import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

// header-nav
export function headerNavAnimation() {
	const headerNav = document.querySelector("#header-nav");
	const headerNavSp = document.querySelector("#header-nav-sp");
	const headerNavSpBtn = document.querySelector("#header-nav-sp-btn");
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
	gsap.fromTo(
		headerNavSp,
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
	gsap.fromTo(
		headerNavSpBtn,
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

export function headerNavMenuAnimation() {
	const headerNavSpMenu = document.querySelector("#header-nav-sp-menu");
	const headerNavSpBtn = document.querySelector("#header-nav-sp-btn");
	const lines = document.querySelectorAll(".line");
	const spLogo = document.querySelector(".sp-logo");
	let menu_state = false;
	headerNavSpBtn.addEventListener("click", () => {
		if (!menu_state) {
			gsap.to(headerNavSpMenu, {
				opacity: 1,
				display: "flex",
				duration: 0.5,
				ease: "power2.out",
			});
			gsap.to(lines[0], {
				rotate: -45,
				y: 8,
				duration: 0.3,
				ease: "power2.out",
			});
			gsap.to(lines[1], { opacity: 0, duration: 0.3 });
			gsap.to(lines[2], {
				rotate: 45,
				y: -8,
				duration: 0,
				ease: "power2.out",
			});
			gsap.to(spLogo, { opacity: 0, display: "none", duration: 0.3 });
			document.body.style.overflow = "hidden";
			menu_state = true;
		} else {
			gsap.to(headerNavSpMenu, {
				opacity: 0,
				y: 0,
				display: "none",
				duration: 0.5,
				ease: "power2.out",
			});
			gsap.to(lines[0], { rotate: 0, y: 0, duration: 0.3, ease: "power2.out" });
			gsap.to(lines[1], { opacity: 1, duration: 0.3 });
			gsap.to(lines[2], { rotate: 0, y: 0, duration: 0.3, ease: "power2.out" });
			gsap.to(spLogo, { opacity: 1, display: "block", duration: 0.3 });
			document.body.style.overflow = "";
			menu_state = false;
		}
	});
}
