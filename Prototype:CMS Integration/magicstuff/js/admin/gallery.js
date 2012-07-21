(function (){

	var activeThumb = 0;
	var gallery = document.querySelectorAll('.images a');
	var images = [];
	var imgLink = '';
	var active = document.querySelector('.edit_image');
	var nextBtn = document.querySelector('.next');
	var prevBtn = document.querySelector('.prev');
	var max = gallery.length;
	var activeThumbImg = document.querySelectorAll('.images a img');
	var photoForm = document.querySelector('.gallery_info');
	var actionAddress = photoForm.getAttribute('action');
	var deleteImage = document.querySelector('.delete_image');
	var deleteAddress = deleteImage.getAttribute('href');
	var imageID = gallery[0].getAttribute('image-Index');
	var imageTitle = document.querySelector('#image_title');
	var title = gallery[0].getAttribute('alt');
		
	for(var iii=0;  iii<max; iii++) {
		gallery[iii].setAttribute('data-Index', iii);
		imgLink = gallery[iii].getAttribute('href');
		images.push(imgLink);
		};
	
	active.setAttribute('src', images[activeThumb]);
	photoForm.setAttribute('action' , actionAddress + imageID);
	deleteImage.setAttribute('href' , deleteAddress + imageID);
	imageTitle.setAttribute('value' , title);
	
		
	for(var i=0; i<max; i++) {
			gallery[i].onclick = function(e) {
					for(var ii=0; ii<max; ii++) {
						activeThumbImg[ii].setAttribute('class', '' );
						photoForm.setAttribute('action' , '');
						deleteImage.setAttribute('href' , '');						
					}
				imageID = e.currentTarget.getAttribute('image-Index');
				activeThumb = e.currentTarget.getAttribute('data-Index');
				title = e.currentTarget.getAttribute('alt');
				
				active.setAttribute('src', images[activeThumb]);
				activeThumbImg[activeThumb].setAttribute('class', 'active' );
				
				photoForm.setAttribute('action' , actionAddress + imageID);
				deleteImage.setAttribute('href' , deleteAddress + imageID);
				imageTitle.setAttribute('value' , title)
				e.preventDefault();
				return false;
			}
		};
		
	nextBtn.onclick = function(e){
			for(var f=0; f<max; f++) {
			activeThumbImg[f].setAttribute('class', '' );
			photoForm.setAttribute('action' , '');
			deleteImage.setAttribute('href' , '');	
			imageTitle.setAttribute('value' , '');
		}
		activeThumb ++;
		if(activeThumb === max){
			activeThumb = 0;
		}
		imageID = active.parentElement.nextSibling.nextSibling.children[activeThumb].getAttribute('image-Index');
		title = active.parentElement.nextSibling.nextSibling.children[activeThumb].getAttribute('alt');
		activeThumbImg[activeThumb].setAttribute('class', 'active');
		active.setAttribute('src', images[activeThumb]);
		photoForm.setAttribute('action' , actionAddress + imageID);
		deleteImage.setAttribute('href' , deleteAddress + imageID);
		imageTitle.setAttribute('value' , title);
	}
	
	prevBtn.onclick = function(e){
		for(var g=0; g<max; g++) {
			activeThumbImg[g].setAttribute('class', '' )
			photoForm.setAttribute('action' , '');
			deleteImage.setAttribute('href' , '');	
			imageTitle.setAttribute('value' , '');
		}
		activeThumb --;
			if(activeThumb === -1){
			activeThumb = max - 1;
		}
		
		imageID = active.parentElement.nextSibling.nextSibling.children[activeThumb].getAttribute('image-Index');
		title = active.parentElement.nextSibling.nextSibling.children[activeThumb].getAttribute('alt');
		activeThumbImg[activeThumb].setAttribute('class', 'active');
		active.setAttribute('src', images[activeThumb]);
		photoForm.setAttribute('action' , actionAddress + imageID);
		deleteImage.setAttribute('href' , deleteAddress + imageID);
		imageTitle.setAttribute('value' , title);
	}

})();