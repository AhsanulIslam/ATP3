// let json =[
//     {
//         'name': 'Ahsanul',
//         'dept': 'cs',
//         'email': 'Imon.ahsanul.islam@gmail.com'
//     },
    
//     {
//         'name': 'Ahsanul',
//         'dept': 'cs',
//         'email': 'Imon.ahsanul.islam@gmail.com'
//     }
// ]

function ajax(){

	let person= {
		'name': 'alamin',
		'dept': 'cs',
		'email': 'alamin@aiub.edu',
		'id': 12
	}

	let json = JSON.stringify(person);
	let xhttp = new XMLHttpRequest();
		
		xhttp.open('GET', 'abc.php?data='+json, true);
		xhttp.send();
		xhttp.onreadystatechange = function (){

			if(this.readyState == 4 && this.status == 200){
				let data = JSON.parse(this.responseText);
				alert(data.email);
			}
		}
}