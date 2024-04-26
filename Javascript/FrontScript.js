function getRandomColor() {
    const letters = '0123456789ABCDEF';
    let color = '#';
    for (let i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
  }

  function changeColor() {
    const changingText = document.getElementById('detail');
    changingText.style.color = getRandomColor();
  }

  setInterval(changeColor, 2000);
document.addEventListener("DOMContentLoaded", function() {
    var text = "Hello Tech-nerds, I'm Stephen David Q. Condino";
    var container = document.getElementById("name");
    var delay = 50;
         
    for (var i = 0; i < text.length; i++) {
        (function(i) {
        setTimeout(function() {
        container.textContent += text[i];
    }, i * delay);
    })(i);
    }
    });

document.addEventListener("DOMContentLoaded", function() {
    var text = "The Author of this Website";
    var container = document.getElementById("author");
    var delay = 100;
          
    for (var i = 0; i < text.length; i++) {
        (function(i) {
        setTimeout(function() {
        container.textContent += text[i];
    }, i * delay);
    })(i);
    }
    });

