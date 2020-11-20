a =10;
var v =30;
let c =30;

const d =40;

var a =[
    [
        [3,2,4],
        [5,2,4],
        [22,33,11]
    ],
    [
        [5,5,3],
        [33,22,4],
        [4,4,3]
    ]
    
];

alert(a[1][1][2]);

function sum(a,b){
    return a+b;
}

var f = sum(2,3)

console.log(f)

const student ={
    name:'imon',
    id:'17-35499-3',
    cgpa:'3.92',
    getname: function(){
        return this.name;
    },
    getobj: function(){
      return{  version:2,
        getversion: function(){
            return this.version;
        }
    }
}
    
}
console.log(student.cgpa)
console.log(student.getobj().getversion())

class stu{
    id = '1233';

    constructor(fname,lanme){
        this.fname =fname;
        this.lanme =lanme;
    }

    getname(){
        return this.fname + this.lanme;
    }
}

var l = new stu('Ahsanul',' islam')
console.log(l.getname())
console.log(l.id)
