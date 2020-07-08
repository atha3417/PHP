// let mahasiswa = {
// 	nama: "Muhammad Atha Tsaqif",
// 	nrp: "123123123",
// 	email: "Atha.3417@gmail.com"
// }

// console.log(JSON.stringify(mahasiswa))


// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function() {
// 	if (xhr.readyState == 4 && xhr.status == 200) {
// 		let mahasiswa = JSON.parse(this.responseText)
// 		console.log(mahasiswa)
// 	}
// }

// xhr.open('GET', 'coba.json', true)
// xhr.send()


$.getJSON('coba.json', function(data) {
	console.log(data)
})