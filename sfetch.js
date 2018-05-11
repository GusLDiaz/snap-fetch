//from the json placeholder site
fetch('https://jsonplaceholder.typicode.com/posts/1')
	.then(response => response.json())
	.then(json => console.log(json))