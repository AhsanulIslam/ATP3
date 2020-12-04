const express = require('express');
const app=express();  //function return an object in app variable

app.get('/login', (req,res)=>{
    res.send('Login')
}
)

app.get('/home', (req,res)=>{
    res.send('THis is Home Page')
}
)

app.listen(3000,(error)=>{  //port 3000
    console.log('express server started at 3000........')
})