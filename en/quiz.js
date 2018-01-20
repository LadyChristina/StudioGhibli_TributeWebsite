window.onload = initialize;

var http = getXMLHttpRequest();

function initialize() {
  var button = document.getElementById('buttonTime');
  button.onclick=getResponse;
}

function getXMLHttpRequest()
{
  if(window.XMLHttpRequest) {
    request = new XMLHttpRequest();
  } else {
    request = new ActiveXObject("Microsoft.XMLHTTP");
  }
  return request;
}

function getResponse() {
  var myurl = 'index.html';
  http.open("GET", myurl);
  http.onreadystatechange = useHttpResponse;
  http.send();
}

function useHttpResponse() {
  if (http.readyState == 4) {
    if (http.status == 200) {
       alert(http.responseText);
    }
  }
}
