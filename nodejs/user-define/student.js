// var sname ="Ahsanul islam";
// var sid = 12;
// var dept='cs'

// var getname = ()=>{
//     return "Ahsanul islam";
// }

// var setname =(sname)=>{
//     return "done!";
// }

// module.exports.id_public =sid;  //making public
// module.exports.getname_public =getname;  //making public function


module.exports ={
    name : 'Ahsanul Islam',
    id :123,
    dept:'cs',
    getname_s:function(){
        return this.name;
    }
}

// module.exports=function(){
//     return{
//         name:'imon',
//         id:123,
//         getname: function(){
//             return name;
//         }
//     }
// }

// exports class Student{
//     name = "imon";
//     id = 123;
//     getnm (){
//         return this.name;
//     }
// }