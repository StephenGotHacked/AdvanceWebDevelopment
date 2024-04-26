function email(event){
    event.preventDefault();

    var href = event.target.getAttribute('href');

    var hyperlink = document.createElement('textarea');
    hyperlink.value = href;

    document.body.appendChild(hyperlink);

    hyperlink.select();

    document.execCommand('copy');

    document.body.removeChild(hyperlink);

    alert('Email copied to clipboard: ' + href);
}