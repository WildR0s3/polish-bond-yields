function ajaxReloadSubPage(url, id_to_reload) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
			document.getElementById(id_to_reload).innerHTML = xmlHttp.responseText;
            console.log("Status: 200 OK! Updating HTML...");
		}
    }
    xmlHttp.open("GET", url, true);
    xmlHttp.setRequestHeader("x-is-ajax", "true");
    xmlHttp.setRequestHeader("X-Requested-With", "XMLHttpRequest");
    console.log("Header set: X-Requested-With = XMLHttpRequest");
	xmlHttp.send();
}