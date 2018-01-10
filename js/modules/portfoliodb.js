(function () {
  const portImages = document.querySelectorAll('.demo');

  function getPort() {
    // make an AJAX call to the database with the fetch API
    const url = './includes/functions.php?portfolio_img=' + this.id;

    // the fetch API uses a JS Promise (new ES6 addition)
    fetch(url) // do our ajax call
      .then((resp) => resp.json()) // convert the response to JSON (built-in method)
      .then((data) => { processResult(data); }) // then do the process result function
      .catch(function(error) {
        console.log(error); // catch any errors and show them in the console
      });
  }

  function processResult(data) {
    // deconstruct the data and extract only what we need
    const { folioImg, portfolioInfo } = data;

    let porfolioImg = document.querySelector('.folioImg').textContent = folioImg;
    let desc = document.querySelector('.portfolioInfo').textContent = portfolioInfo;

    // refactor this with an arrow function (shorthand function declaration)
    portImages.forEach(image => image.classList.add('nonActive'));

    document.querySelector(`#${data.model}`).classList.remove('nonActive');
  }

  // event handling for the car thumbs -> get data on a click
  portImages.forEach(car => car.addEventListener('click', getCarData));
})();
