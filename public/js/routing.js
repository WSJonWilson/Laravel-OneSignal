// var docReady = setInterval(function () {

//     if (document.readyState !== 'complete') {
//         return;
//     }
//     clearInterval(docReady);

//     //....

//     document.getElementsByClassName('btn')[0].addEventListener('click', createNewRoute);

// }, 100);


// function createNewRoute(event) {
//     event.preventDefault();
//     var name = event.target.previousElementSibling.value;
//     if (name.length === 0) {
//         alert("ener valid route name");
//         return;
//     }

//     ajax("POST", "/frontend/blog/route/create", "name=" + name, newRouteCreated, [name]);

// }


// function newRouteCreated(params, success, responseObj) {

//     location.reload();
// }

// function ajax(method, url, params, callback, callbackParams) {
//     var http;

//     if (window.XMLHttpRequest) {
//         http = new XMLHttpRequest();

//     }
//     else {
//         http = new ActiveXObject("Microsoft.XMLHTTP");
//     }

//     http.onreadystatechanged = function () {
//         if (http.readyState == XMLHttpRequest.DONE) {
//             if (http.status == 200) {
//                 var obj = JSON.parse(http.responseText)
//                 callback(callbackParams, true, obj);
//             } else if (http.status == 400) {
//                 alert("Route could not be saved, Please Try Again!");
//                 callback(callbackParams, false);

//             } else {
//                 var obj = JSON.parse(http.responseText);
//                 if (obj.message) {
//                     alert(obj.message);

//                 }
//                 else {
//                     alert("Please check the name")
//                 }

//             }
//         }
//     }

//     http.open(method, baseUrl + url, true);
//     http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//     http.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
//     console.log(token);
//     http.send(params + "&_token=" + token);
// }
