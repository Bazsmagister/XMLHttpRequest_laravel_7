# XMLHttpRequest example

updated to laravel8.

Javascript code:

```js
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo2").innerHTML = xhttp.responseText;
        document.getElementById("demo3").innerHTML = xhttp.readyState;
        document.getElementById("demo4").innerHTML = xhttp.status;
        document.getElementById("demo5").innerHTML = xhttp.statusText;
        // document.getElementById("demo6").innerHTML = xhttp.responseXML;
        // document.getElementById("demo7").innerHTML = xhttp.getAllResponseHeaders();
        document.getElementById("demo8").innerHTML = xhttp.getResponseHeader();
    }
};

xhttp.open("POST", "postIt", true);
//These 2 lines are needed in POST
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.setRequestHeader(
    "X-CSRF-TOKEN",
    document.head.querySelector("[name=csrf-token]").content
);
// xhttp.send(JSON.stringify(param));
xhttp.send("email=" + param);
```

Idea, and more info from:
https://attacomsian.com/blog/xhr-json-post-request
