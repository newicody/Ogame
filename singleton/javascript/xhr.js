var xhr = null;
function getxhr() {
    if(window.XMLHttpRequest) { var xhr = new XMLHttpRequest(); }
    else if(window.ActiveXObject) { var xhr = new ActiveXObject('Microsoft.XMLHTTP'); }
    if (xhr.readyState == 4 && xhr.status == 200) { document.getElementById('txt').innerHTML = xhr.responseText; }
};
xhr.open('get','/ogame/logs/ogame.log',true);
xhr.send(null);
