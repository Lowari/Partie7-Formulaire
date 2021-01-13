fileToUpload.addEventListener("change", function () {
	let input = this;
	let oFReader = new FileReader(); // on créé un nouvel objet FileReader
	oFReader.readAsDataURL(this.files[0]);
	oFReader.onload = function (oFREvent) {
		imgPreview.setAttribute('src', oFREvent.target.result);
	};
})

function hover(str){
	let split = str.split('');

	split.forEach(letter => {
		let span = document.createElement('span');
		span.innerHTML = letter;
		document.getElementById('title').appendChild(span);
	});

	let spans = document.querySelectorAll('#title span');
	spans.forEach(span => {
		span.addEventListener('mouseover', () => {
			span.classList.add('hover');
		})
		span.addEventListener('mouseleave', () => {
			span.classList.remove('hover');
		})
	});

}

hover('Hello');
