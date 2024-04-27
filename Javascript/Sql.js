function Database(){
    var copy = document.getElementById("sql1textarea")
    copy.select();
    document.execCommand('copy');
    alert('Create Database query is copied to clipboard');
}

function Table(){
    var copy = document.getElementById("sql2textarea")
    copy.select();
    document.execCommand('copy');
    alert('Create Table query is copied to clipboard');
}