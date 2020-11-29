import $ from 'jquery';
import {disableBodyScroll, enableBodyScroll} from 'body-scroll-lock/lib/bodyScrollLock.es6';
import Swiper from 'swiper';
import 'simplebar';
import 'simplebar/dist/simplebar.css';
import objectFitImages from 'object-fit-images';

let postal_code = require('japan-postal-code');
window.$ = $;
window.jquery = $;
window.jQuery = $;

let swiper = new Swiper('#top-slider', {
	slidesPerView: 1,
	autoplay: {
		delay: 5000,
	},
	speed: 1000,
	effect: 'fade',

});

let galleryThumbs = new Swiper('.thumbs', {
	direction: 'vertical',
	loop: false,
	allowTouchMove: false,
	slidesPerView: 3,
	breakpoints: {
		320: {
			direction: 'horizontal',
			spaceBetween: 11,
		},
		768: {
			direction: 'vertical',
			spaceBetween: 11,
		},
		1024: {
			spaceBetween: 15,
		},
		1440: {
			spaceBetween: 17,
		},

	},

});
let galleryTop = new Swiper('.gallery', {
	spaceBetween: 0,
	loop: false,
	centeredSlides: true,
	effect: 'fade',
	initialSlide: 0,
	speed: 600,
	autoplay: {
		delay: 5000,
	},
	thumbs: {
		swiper: galleryThumbs,
	},
	pagination: {
		el: '.pagination-01',
		clickable: true,
	},
	breakpoints: {

		768: {
			allowTouchMove: false,
		},
	},
});

let galleryThumbs1 = new Swiper('.thumbs1', {
	direction: 'vertical',
	loop: false,
	allowTouchMove: false,
	slidesPerView: 3,
	breakpoints: {
		320: {
			direction: 'horizontal',
			spaceBetween: 11,
		},
		768: {
			direction: 'vertical',
			spaceBetween: 11,
		},
		1024: {
			spaceBetween: 15,
		},
		1440: {
			spaceBetween: 17,
		},

	},
});
let galleryTop1 = new Swiper('.gallery1', {
	spaceBetween: 0,
	loop: false,
	centeredSlides: true,
	initialSlide: 0,
	effect: 'fade',
	speed: 600,
	autoplay: {
		delay: 5000,
	},
	thumbs: {
		swiper: galleryThumbs1,
	},
	pagination: {
		el: '.pagination-02',
		clickable: true,
	},
	breakpoints: {
		768: {
			allowTouchMove: false,
		},
	},
});

let galleryThumbs2 = new Swiper('.thumbs2', {
	direction: 'vertical',
	loop: false,
	allowTouchMove: false,
	slidesPerView: 3,
	breakpoints: {
		320: {
			direction: 'horizontal',
			spaceBetween: 11,
		},
		768: {
			direction: 'vertical',
			spaceBetween: 11,
		},
		1024: {
			spaceBetween: 15,
		},
		1440: {
			spaceBetween: 17,
		},

	},
});
let galleryTop2 = new Swiper('.gallery2', {
	spaceBetween: 0,
	loop: false,
	centeredSlides: true,
	initialSlide: 0,
	effect: 'fade',
	speed: 600,
	autoplay: {
		delay: 5000,
	},
	thumbs: {
		swiper: galleryThumbs2,
	},
	pagination: {
		el: '.pagination-03',
		clickable: true,
	},
	breakpoints: {
		768: {
			allowTouchMove: false,
		},
	},
});

let galleryThumbs3 = new Swiper('.thumbs3', {
	direction: 'vertical',
	loop: false,
	allowTouchMove: false,
	slidesPerView: 3,
	breakpoints: {
		320: {
			direction: 'horizontal',
			spaceBetween: 11,
		},
		768: {
			direction: 'vertical',
			spaceBetween: 11,
		},
		1024: {
			spaceBetween: 15,
		},
		1440: {
			spaceBetween: 17,
		},

	},
});
let galleryTop3 = new Swiper('.gallery3', {
	spaceBetween: 0,
	loop: false,
	centeredSlides: true,
	initialSlide: 0,
	effect: 'fade',
	speed: 600,
	autoplay: {
		delay: 5000,
	},
	thumbs: {
		swiper: galleryThumbs3,
	},
	pagination: {
		el: '.pagination-04',
		clickable: true,
	},
	breakpoints: {
		768: {
			allowTouchMove: false,
		},
	},
});

let galleryThumbs4 = new Swiper('.thumbs4', {
	direction: 'vertical',
	loop: false,
	allowTouchMove: false,
	slidesPerView: 3,
	breakpoints: {
		320: {
			direction: 'horizontal',
			spaceBetween: 11,
		},
		768: {
			direction: 'vertical',
			spaceBetween: 11,
		},
		1024: {
			spaceBetween: 15,
		},
		1440: {
			spaceBetween: 17,
		},

	},
});
let galleryTop4 = new Swiper('.gallery4', {
	spaceBetween: 0,
	loop: false,
	centeredSlides: true,
	initialSlide: 0,
	effect: 'fade',
	speed: 600,
	autoplay: {
		delay: 5000,
	},
	thumbs: {
		swiper: galleryThumbs4,
	},
	pagination: {
		el: '.pagination-05',
		clickable: true,
	},
	breakpoints: {
		768: {
			allowTouchMove: false,
		},
	},
});

let galleryThumbs5 = new Swiper('.thumbs5', {
	direction: 'vertical',
	loop: false,
	allowTouchMove: false,
	slidesPerView: 3,
	breakpoints: {
		320: {
			direction: 'horizontal',
			spaceBetween: 11,
		},
		768: {
			direction: 'vertical',
			spaceBetween: 11,
		},
		1024: {
			spaceBetween: 15,
		},
		1440: {
			spaceBetween: 17,
		},

	},
});
let galleryTop5 = new Swiper('.gallery5', {
	spaceBetween: 0,
	loop: false,
	centeredSlides: true,
	initialSlide: 0,
	effect: 'fade',
	speed: 600,
	autoplay: {
		delay: 5000,
	},
	thumbs: {
		swiper: galleryThumbs5,
	},
	pagination: {
		el: '.pagination-06',
		clickable: true,
	},
	breakpoints: {
		768: {
			allowTouchMove: false,
		},
	},
})
import 'jquery-scrollify';

function getPostalCode() {
	let getPostRequire = $('#get-postal-code');
	let postalCodeInput = document.getElementById('postal-code');

	if (getPostRequire.length > 0) {
		getPostRequire.click(function () {
			let postCodeInputValue = postalCodeInput.value;
			if (+postalCodeInput.value !== '') {
				postal_code.get(postCodeInputValue, function (address) {
					let postCodeCity = document.getElementById('postal-code-city');
					postCodeCity.value = address.prefecture + address.city + address.area + address.street;
				});
			}
		})
	}
}


/*
function scrollifyEnable() {
	let pagepiling = document.getElementById('pagepiling');
	if (pagepiling === null) return;

	if (window.innerWidth > 1023) {
		$(function () {
			$.scrollify({
				section: '.section',
				scrollbars: true,
				setHeights: true,
				overflowScroll: true,
				updateHash: false,
				touchScroll: true,
				standardScrollElements: false,
				interstitialSection: '.footer, .notice',
			});
		});
	}
}

window.addEventListener('load', scrollifyEnable);*/


function mobileMenu() {
	let header = document.getElementById('header');
	let hamburgerBtn = document.getElementById('hamburger-btn');
	let headerMenu = document.getElementById('header-menu');
	let overlay = document.querySelector('.header__overlay');
	let state = false;
	if (hamburgerBtn === null) return;
	hamburgerBtn.addEventListener('click', function () {
		if (state === false) {
			openMenu();
		} else {
			closeMenu();
		}
	});
	overlay.addEventListener('click', function (e) {
		if (!e.target.closest('headerMenu')) {
			closeMenu();
		}
	});
	document.addEventListener('keydown', function (event) {
		if (event.code == 'Escape' && event.keyCode == 27) {
			closeMenu();
		}
	});

	function openMenu() {
		disableBodyScroll(headerMenu);
		header.classList.add('menu-open');
		hamburgerBtn.classList.add('active');
		headerMenu.style.right = '0';
		state = true;

	}

	function closeMenu() {
		enableBodyScroll(headerMenu);
		header.classList.remove('menu-open');
		hamburgerBtn.classList.remove('active');
		state = false;
		headerMenu.style.right = '';
		// $(function () {
		// 	$.scrollify.enable();
		// });
	}

}

window.addEventListener('resize', mapMarkers);

function mapMarkers() {
	let markerList = document.getElementsByClassName('map__mark-wrap');
	let modalList = document.getElementsByClassName('map__modal');
	let modalWrap = document.querySelector('.map__modal-wrap');

	if (modalWrap === null) return;
	let fragment = document.createDocumentFragment();
	if (window.innerWidth > 1023) {
		for (let i = 0; i < markerList.length; i++) {
			markerList[i].addEventListener('mouseover', () => {
				let modalLeftValue = window.getComputedStyle(modalList[i]).left;
				for (let i = 0; i < markerList.length; i++) {
					markerList[i].classList.remove('active');
					markerList[i].querySelector('.map__mark').classList.remove('active');
				}
				if (window.innerWidth - modalList[i].getBoundingClientRect().right < 5) {
					modalList[i].style.left = 'initial';
					modalList[i].style.right = modalLeftValue;
				}
				markerList[i].classList.add('active');
				markerList[i].querySelector('.map__mark').classList.add('active');
			});
			markerList[i].addEventListener('mouseleave', () => {
				for (let i = 0; i < markerList.length; i++) {
					markerList[i].classList.remove('active');
					markerList[i].querySelector('.map__mark').classList.remove('active');
				}
			});
		}
	} else {
		for (let i = 0; i < modalList.length; i++) {
			let clonedNode = modalList[i].cloneNode(true);
			fragment.appendChild(clonedNode);
			modalWrap.style.height = modalList[i].offsetHeight;
		}
		for (let i = modalList.length - 1; i > 0 - 1; i--) {
			modalList[i].remove();
		}
		modalWrap.appendChild(fragment);

		for (let i = 0; i < markerList.length; i++) {
			markerList[i].addEventListener('click', () => {
				for (let i = 0; i < markerList.length; i++) {
					markerList[i].classList.remove('active');
					markerList[i].querySelector('.map__mark').classList.remove('active');
					modalList[i].style.opacity = '0';
					modalList[i].style.visibility = 'hidden';
				}
				markerList[i].classList.add('active');
				markerList[i].querySelector('.map__mark').classList.add('active');
				modalList[i].style.opacity = '1';
				modalList[i].style.visibility = 'visible';
			});
		}
	}
}


let element = document.querySelectorAll('[data-animate]');
let offset = 200;
let elementsAnimationDuration = null;

document.addEventListener('scroll', animInit);
document.addEventListener('DOMContentLoaded', animInit);
window.addEventListener('DOMContentLoaded', orientationchange);
window.addEventListener('resize', orientationchange);
window.addEventListener('load', load);
window.addEventListener('DOMContentLoaded', animateText);
window.addEventListener('scroll', animateText);

function animInit() {
	for (let i = 0; i < element.length; i++) {
		let elementAttr = element[i].getAttribute('data-animate');
		let scroll = (element[i].getBoundingClientRect().top + offset) - window.innerHeight < 0;
		if (elementsAnimationDuration)  {
			element[i].style.transitionDuration = elementsAnimationDuration / 1000 + 's';
		}

		if (scroll) {
			switch (elementAttr) {
				case 'fade-up':
					fadeY();
					break;
				case 'fade-down':
					fadeY();
					break;
				case 'fade-right':
					fadeX();
					break;
				case 'fade-left':
					fadeX();
					break;
				case 'fade-in':
					fadeIn();
					break;
				case 'zoom-in':
					zoom();
					break;
				case 'zoom-out':
					zoom();
					break;

			}
		}

		function fadeX() {
			element[i].style.transform = 'translateX(0)';
			element[i].style.opacity = '1';
		}

		function fadeY() {
			element[i].style.transform = 'translateY(0)';
			element[i].style.opacity = '1';
		}

		function fadeIn() {
			element[i].style.opacity = '1';
		}

		function zoom() {
			element[i].style.opacity = '1';
			element[i].style.transform = 'scale(1)';
		}
	}
}

function load() {
	let preloader = document.getElementById('preloader');
	if (preloader === null) return;
	setTimeout(function () {
		preloader.classList.add('done');
	}, 3000);
	setTimeout(function () {
		preloader.style.display = 'none';
		enableBodyScroll(preloader);
	}, 3600);
}

function loadModal() {
	let modal = document.getElementById('top-modal');
	if (modal === null) return;
	let modalCross = document.querySelector('.top-modal__body-cross');

	setTimeout(function () {
		modal.classList.add('open');
	}, 3800);

	localStorage.setItem('state', 'false');

	if (localStorage.setItem('state', 'false')) {
		modal.classList.remove('open');
	}

	modal.addEventListener('click', function (e) {
		if (e.target === modal) {
			modal.classList.remove('open');
		}
	});

	document.addEventListener('keydown', function (event) {
		if (event.code == 'Escape' && event.keyCode == 27) {
			modal.classList.remove('open');
		}
	});
	modalCross.addEventListener('click', () => {
		modal.classList.remove('open');
	});

}

function orientationchange() {
	let modalBody = document.querySelector('.top-modal__body');
	let popupBody = document.querySelectorAll('.popup__body');
	if (popupBody == null) return;
	for (let i = 0; i < popupBody.length; i++) {
		if (window.innerHeight < 480) {
			popupBody[i].classList.add('padding');
		} else {
			popupBody[i].classList.remove('padding');
		}
	}
	if (modalBody == null) return;
	if (window.innerHeight < 480) {
		modalBody.style.transform = 'scale(.75)';
	} else {
		modalBody.style.transform = 'scale(1)';
	}
}


function scrollToTop() {
	let scrollToTopBtn = document.getElementById('scroll-to-top');
	let footer = document.getElementById('footer');

	window.addEventListener('scroll', function () {
		if (window.pageYOffset > 200) {
			scrollToTopBtn.classList.add('visible');
		} else {
			scrollToTopBtn.classList.remove('visible');
		}
		if ((footer.getBoundingClientRect().top - window.innerHeight) >= 0) {
			scrollToTopBtn.classList.remove('absolute');
		} else {
			scrollToTopBtn.classList.add('absolute');
		}
	});

}

const header = document.getElementById('header');

function headerFixedFunc() {

	window.addEventListener('scroll', headerFixed);


	function headerFixed() {


		if (window.scrollY > 300) {
			header.classList.add('fixed');
		} else {
			header.classList.remove('fixed');
		}

		if (window.scrollY > 200) {
			header.classList.add('top');
		} else {
			header.classList.remove('top');
		}
	}

}

function modal() {

	let btn = document.querySelectorAll('.btn-modal');
	let modal = document.querySelectorAll('.popup');
	let closeBtn = document.querySelectorAll('.popup__body-cross');
	document.addEventListener('keydown', function (event) {
		if (event.code == 'Escape' && event.keyCode == 27) {
			closeModal();
		}
	});

	function closeModal() {

		for (let i = 0; i < modal.length; i++) {
			modal[i].classList.remove('open');
			setTimeout(function () {
				modal[i].classList.remove('down');
			}, 400);
			modal[i].classList.add('down');
		}
		let simpleOffset = document.querySelectorAll('.simplebar-content-wrapper');
		for (let i = 0; i < simpleOffset.length; i++) {
			enableBodyScroll(simpleOffset[i]);
		}
	}

	for (let i = 0; i < btn.length; i++) {
		btn[i].addEventListener('click', (event) => {
			let item = event.target.closest('.btn-modal').getAttribute('data-btn');
			let simpleOffset = document.querySelectorAll('.simplebar-content-wrapper');
			modal[+item].classList.add('open');
			for (let i = 0; i < simpleOffset.length; i++) {
				disableBodyScroll(simpleOffset[i]);
			}
		});
	}
	for (let i = 0; i < modal.length; i++) {
		modal[i].addEventListener('click', function (e) {
			if (!e.target.closest('.popup__body')) {
				closeModal();
			}
		});
	}
	for (let i = 0; i < closeBtn.length; i++) {
		closeBtn[i].addEventListener('click', closeModal);
	}

}

function animateText() {
	let element = document.querySelectorAll('.animate-text');
	let offset = 100;
	for (let i = 0; i < element.length; i++) {
		let scroll = (element[i].getBoundingClientRect().top + offset) - window.innerHeight < 0;
		let textSymbol = element[i].querySelectorAll('.animate-item');

		for (let i = 0; i < textSymbol.length; i++) {

			if (scroll) {
				textSymbol[i].style.animationDelay = `${.07 * i}` + 's';
				textSymbol[i].style.transitionDelay = `${.09 * i}` + 's';
				textSymbol[i].classList.add('active-animation');
			}
		}
	}
}


headerFixedFunc();
mobileMenu();
mapMarkers();
scrollToTop();
getPostalCode();
modal();
loadModal();
objectFitImages();



