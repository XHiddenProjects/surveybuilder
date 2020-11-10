var http = require('http');

function onRequest(request, response){
console.log("Made a request " + request.url);
response.writeHead(200, {"Context-Type": "text/plain"});
response.write("Some data...");
response.end();
}



http.createServer(onRequest).listen(3050);
console.log("Server is running...");