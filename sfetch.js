//from the json placeholder site
// fetch('https://jsonplaceholder.typicode.com/posts/1')
// 	.then(response => response.json())
// 	.then(json => console.log(json))
function putOnWeb(x){
	document.getElementById('here').innerText = x;
}
function btnFetch() {
	fetch('https://jsonplaceholder.typicode.com/posts', {
		method: 'POST',
		body: JSON.stringify({
			title: 'Gus',
			body: 'thereismagicinthetheatreandthetheatreismagic',
			userId: 1
		}),
		headers: {
			"Content-type": "application/json; charset=UTF-8"
		}
	})
		.then(response => response.json());
		response.json().then(putOnWeb(response.json))
			}

