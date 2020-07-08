// Sidebar
const sideNav = document.querySelectorAll('.sidenav');
M.Sidenav.init(sideNav);

// Slider
const slider = document.querySelectorAll('.slider');
M.Slider.init(slider, {
	indicators: false,
	height: 500,
	transition: 600,
	interval: 3000
});

// Parallax (Clients)
const parallax = document.querySelectorAll('.parallax');
M.Parallax.init(parallax);

// Light Box (Portfolio)
const materialbox = document.querySelectorAll('.material-boxed');
M.Materialbox.init(materialbox);

// scroll spy
const scroll = document.querySelectorAll('.scrollspy');
M.ScrollSpy.init(scroll, {
	scrollOffset: 30
});