document.addEventListener('mousemove', function(e){
	const wrap = document.querySelector('.coupon');
	const erase = document.createElement('span');
	erase.style.left = e.offsetX+ 'px';
	erase.style.top = e.offsetY+ 'px';
	wrap.appendChild(erase);
});