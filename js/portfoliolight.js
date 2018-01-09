(function() {
  var theImages = document.querySelectorAll('.image-holder'),
      theSubhead = document.querySelector('.main-copy h2'),
      theSeasonText = document.querySelector('.main-copy p'),
      appliedClass;

  function changeElements() {
/* dubugger makes sure the event handler is working
    //debugger;
    let objectIndex = dynamicContent[this.id];
    // grab the object that corresponds to the ID of the element clicked on
    let subImages = document.querySelector('.subImagesContainer');
    // remove all subimages
    while(subImages.firstChild) {
      subImages.removeChild(subImages.firstChild);
    }

    // Images for lightbox
    objectIndex.images.forEach(function(image, index) {
      // each thumb
      let newSubImg = document.createElement('img');
      // css
      newSubImg.classList.add('thumb');
      // img src
      newSubImg.src = "images/" + objectIndex.images[index];
      newSubImg.dataset.index = index;
      // creates img on pg
      newSubImg.addEventListener('click', function(){ popLightbox(index, objectIndex); }, false);
      subImages.appendChild(newSubImg);
    });

    // remove the last css class
    theSubhead.classList.remove(appliedClass);
    theHeading.classList.remove(appliedClass);
    // make text colour change
    theSubhead.classList.add(this.id);
    theHeading.classList.add(this.id);
    // change the content on the pg. firstchild = innerHTML
    theSubhead.firstChild.nodeValue = objectIndex.headline;
    theSeasonText.firstChild.nodeValue = objectIndex.text;
  appliedClass = this.id;
*/
// Images for lightbox
objectIndex.images.forEach(function(image, index) {
  // each thumb
  let newSubImg = document.createElement('img');
  // css
  newSubImg.classList.add('thumb');
  // img src
  newSubImg.src = "images/" + objectIndex.images[index];
  newSubImg.dataset.index = index;
  // creates img on pg
  newSubImg.addEventListener('click', function(){ popLightbox(index, objectIndex); }, false);
  subImages.appendChild(newSubImg);
  });
  }

  theImages.forEach(function(element, index) {
  // loop through the images and add event handling to each one
    element.addEventListener('click', changeElements, false);
  });
//click img, open lightbox
  function  popLightbox(currentIndex, currentObject) {
    debugger;
    let lightbox = document.querySelector('.lightbox');
  //scroll to top
      window.scrollTo(0,0);
      //grab lightbox bits
        let lightboxImg = lightbox.querySelector('img');
        let lightboxDesc = lightbox.querySelector('p');
        let lightboxClose = lightbox.querySelector('.close-lightbox');
        //put the images/info in the lightbox
        lightboxImg.src = "images/" + currentObject.images[currentIndex];
        lightboxDesc.innerHTML = currentObject.imageDescription[currentIndex];
      lightbox.style.display = "block";

      //x for closing lightbox
  lightboxClose.addEventListener('click', closeLightbox, false);
}

//reset and close close lightbox
  function closeLightbox(){
        let lightbox = document.querySelector('.lightbox');
        let lightboxImg = lightbox.querySelector('img');
        let lightboxDesc = lightbox.querySelector('p');
        let lightboxClose = lightbox.querySelector('.close-lightbox');
      lightbox.style.display = "none";
  }


  // loop through
  changeElements.call(document.querySelector('#spring'));
})();
