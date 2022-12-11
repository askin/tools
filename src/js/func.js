function gonder(divadi, url, querystr) {
    $("div#"+divadi).html('<div align="center"><img src="images/ajax-loader.gif"></div>');
    $.post(url + "?", querystr,  function(data) {
	    $("div#"+divadi).html(data);
	});
}

function bomb() {
    gonder('sonuc','header.php','gelen='+document.getElementById('gelen').value);
    return false;
}

function gonder2(divadi, url, querystr) {
    $("div#"+divadi).html('<div align="center"><img src="images/ajax-loader.gif" alt="" /></div>');
    $.post(url + "&amp;", querystr,  function(data) {
	$("div#"+divadi).html(data);
    });
}
function bomb1() {
    gonder2('sonuc','asc-bin.php?op=asc2bin','gelen='+document.getElementById('gelen').value);
    return false;
}

function bomb2() {
    gonder2('sonuc','asc-bin.php?op=bin2asc','giden='+document.getElementById('giden').value);
    return false;
}

function hex2dec() {
    gonder2('sonuc','hex.php?op=hex2dec','hexdec='+document.getElementById('hexdec').value);
    return false;
}

function dec2hex() {
    gonder2('sonuc','hex.php?op=dec2hex','dechex='+document.getElementById('dechex').value);
    return false;
}

function whois() {
    gonder('sonuc','who.php','domain='+document.getElementById('domain').value);
    return false;
}

function timeToHuman() {
    var theDate = new Date(document.timestamp.ts.value * 1000);
    dateString = theDate.toGMTString();
    document.timestamp.result.value = dateString;
    return false;
}

function decodeURL() {
    var url = document.decodeURLForm.inpDecode.value;
    var result = decodeURIComponent(url.replace(/\+/g,  " "));
    document.encodeURLForm.inpEncode.value = result;
    return false;
}

function encodeURL() {
    var url = document.encodeURLForm.inpEncode.value;
    var result = encodeURIComponent(url);
    document.decodeURLForm.inpDecode.value = result;
    return false;
}

function urlEncode() {
	var obj = document.getElementById('dencoder');
	var unencoded = obj.value;
	obj.value = encodeURIComponent(unencoded).replace(/'/g,"%27").replace(/"/g,"%22");
}

function urlDecode() {
	var obj = document.getElementById('dencoder');
	var encoded = obj.value;
	obj.value = decodeURIComponent(encoded.replace(/\+/g,  " "));
}
