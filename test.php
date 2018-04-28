<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Access-Control-Allow-Origin: *'); 
?>

<!DOCTYPE html>
<html>
		<head>
				<meta charset="utf-8">
				<title>Blank HTML5</title>
<style>
pre {outline: 1px solid #ccc; padding: 5px; margin: 5px; }
.string { color: green; }
.number { color: darkorange; }
.boolean { color: blue; }
.null { color: magenta; }
.key { color: red; }
</style>

		</head>
		<body>
				<button id='act'>act</button>
			<p>
				<pre id="content"></pre>
			</p>

				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
function syntaxHighlight(json) {
		if (typeof json != 'string') {
				 json = JSON.stringify(json, undefined, 2);
		}
		json = json.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
		return json.replace(/("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g, function (match) {
				var cls = 'number';
				if (/^"/.test(match)) {
						if (/:$/.test(match)) {
								cls = 'key';
						} else {
								cls = 'string';
						}
				} else if (/true|false/.test(match)) {
						cls = 'boolean';
				} else if (/null/.test(match)) {
						cls = 'null';
				}
				return '<span class="' + cls + '">' + match + '</span>';
		});
}
function isjson(){
	try {
		 var json = JSON.parse(this.responseText);
	} catch(e) {
		 return false;
	}
	return true;
}

function log(i){
	$("#content").html(syntaxHighlight(i));
}
// Create the XHR object.
function createCORSRequest(method, url) {
  var xhr = new XMLHttpRequest();
  if ("withCredentials" in xhr) {
    // XHR for Chrome/Firefox/Opera/Safari.
    xhr.open(method, url, true);
  } else if (typeof XDomainRequest != "undefined") {
    // XDomainRequest for IE.
    xhr = new XDomainRequest();
    xhr.open(method, url);
  } else {
    // CORS not supported.
    xhr = null;
  }
  return xhr;
}

// Helper method to parse the title tag from the response.
function getTitle(text) {
  return text.match('<title>(.*)?</title>')[1];
}

// Make the actual CORS request.
function makeCorsRequest() {
  // This is a sample server that supports CORS.
  var url = 'https://www.alibaba.ir/api/searchFlight?ffrom=THR&fto=MHD&datefrom=1397%2F01%2F08&adult=1&child=0&infant=0';

  var xhr = createCORSRequest('GET', url);
  if (!xhr) {
    alert('CORS not supported');
    return;
  }

  // Response handlers.
  xhr.onload = function() {
    var text = xhr.responseText;
    var title = getTitle(text);
    alert('Response from CORS request to ' + url + ': ' + title);
  };

  xhr.onerror = function() {
    alert('Woops, there was an error making the request.');
  };

  xhr.send();
}

$(document).ready(function() 
{
	$("#act").click(function()
	{
		 	var url = "";
			var resp = makeCorsRequest();
			console.log(resp);
			log(resp);

	});

});



		// $.getJSON("https://www.alibaba.ir/api/searchFlight?ffrom=THR&fto=MHD&datefrom=1397%2F01%2F08&adult=1&child=0&infant=0",function(data)
		// {
		// 	console.log("got data");
		// 	console.log(data);
		// 	if(data["RequestId"]){
		// 		var url = "https://www.alibaba.ir/api/GetFlight?id="+data["RequestId"]+"&last=0&ffrom=THR&fto=SYZ&datefrom=1397%2F01%2F08&count=1&interval=1&isReturn=false&isNew=true";
		// 		$.getJSON(url,function(dat){
		// 			log(dat);
		// 		});
		// 	}
		// })	
</script>
		</body>
</html>
