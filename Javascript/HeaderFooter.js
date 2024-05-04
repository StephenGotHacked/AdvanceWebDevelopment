document.addEventListener('DOMContentLoaded', function() {
    fetch('Header.html')
    .then(response => response.text())
    .then(data => {
            document.getElementById('header').innerHTML = data;
       });
});

document.addEventListener('DOMContentLoaded', function() {
    fetch('Footer.html')
    .then(response => response.text())
    .then(data => {
            document.getElementById('footer').innerHTML = data;
       });
});
function openNav() {
    document.getElementById("navibar").style.width = "250px";
}
        
function closeNav() {
    document.getElementById("navibar").style.width = "0";
}
