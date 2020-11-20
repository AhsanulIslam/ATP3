const fs = require ('fs');

// fs.writeFileSync('data.txt','this is fs core module....');
// console.log('done')

var data =fs.readFileSync('data.txt');
console.log(data.toString())