const http = require('http');
//const fs = require('fs');

//var server = http.createServer((request, response)=>{
	
	
	// if(request.url == '/home'){
	// 	fs.createReadStream('home.html').pipe(response);
	// }else if(request.url == '/contact'){
	// 	fs.createReadStream('contact.html').pipe(response);
	// }else if(request.url == "/about"){
	// 	fs.createReadStream('about.html').pipe(response);
	// }


//});

var requestHandler = (request, response)=>{
	//console.log(request.url);
	//console.log(request.method);

	// response.write('<h1 style="color:red;">Hello from ...</h1>');
	// response.end()

	if(request.url =='/'){
		response.write('Index page');
		response.end();
	}
	else if(request.url == '/home'){
		response.write('<h1>Home</h1>');
		response.end();
	}
	else{
		response.write('<h1 style="color:red;">404..</h1>');
		response.end();
	}
};

var server = http.createServer(requestHandler)
server.listen(2000);
console.log('server started at 3000...');