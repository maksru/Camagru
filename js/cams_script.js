// Функция работы с камерой.
const canvas = document.getElementById('canvas');
const video = document.getElementById('video');
const button_shoot = document.getElementById('button_shoot');
const allow = document.getElementById('allow');
const gallery_block = document.getElementById('gallery_block');
const context = canvas.getContext('2d');
const videoStreamUrl = false;

window.onload = function () 
{
		var canvas = document.getElementById('canvas');
		var video = document.getElementById('video');
		var button_shoot = document.getElementById('button_shoot');
		var allow = document.getElementById('allow');
		var gallery_block = document.getElementById('gallery_block');
		var context = canvas.getContext('2d');
		var videoStreamUrl = false;
		// функция которая будет выполнена при нажатии на кнопку захвата кадра
		var captureMe = function () 
		{
			if (!videoStreamUrl) alert('То-ли вы не нажали "разрешить" в верху окна, то-ли что-то не так с вашим видео стримом')
			// переворачиваем canvas зеркально по горизонтали (см. описание внизу статьи)
			context.translate(canvas.width, 0);
			context.scale(-1, 1);
			// отрисовываем на канвасе текущий кадр видео
			context.drawImage(video, 0, 0, video.width, video.height);
			// получаем data: url изображения c canvas
			var base64dataUrl = canvas.toDataURL('image/png');
			context.setTransform(1, 0, 0, 1, 0, 0); // убираем все кастомные трансформации canvas
			// на этом этапе можно спокойно отправить  base64dataUrl на сервер и сохранить его там как файл (ну или типа того) 
			// но мы добавим эти тестовые снимки в наш пример:
			var img = new Image();
			img.src = base64dataUrl;
			gallery_block.appendChild(img);
		}

		button_shoot.addEventListener('click', captureMe);

		navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;
		window.URL.createObjectURL = window.URL.createObjectURL || window.URL.webkitCreateObjectURL || window.URL.mozCreateObjectURL || window.URL.msCreateObjectURL;

		// запрашиваем разрешение на доступ к поточному видео камеры
		navigator.getUserMedia({video: true}, function (stream) 
		{
			// разрешение от пользователя получено
			// скрываем подсказку
			allow.style.display = "none";
			// получаем url поточного видео
			videoStreamUrl = window.URL.createObjectURL(stream);
			// устанавливаем как источник для video 
			video.src = videoStreamUrl;
		}, function () {
		console.log('что-то не так с видеостримом или пользователь запретил его использовать :P');
		});
};

//Функция скрытия кномки "Shoot". 
function three_buttons() {
	var button_shoot = document.getElementById("button_shoot").style.display = "none";

	if (button_shoot  == "none")
	{
		document.getElementById("button_download").style.display = "block";
		document.getElementById("button_try_again").style.display = "block";
		document.getElementById("button_save_to_gallery").style.display = "block";
	}

};

//Функция появления кномки "Shoot".
function one_button() {
	var button_try_again = document.getElementById("button_try_again").style.display = "block";
	
	if (button_try_again  == "block")
	{
		document.getElementById("button_shoot").style.display = "block";
		document.getElementById("button_download").style.display = "none";
		document.getElementById("button_try_again").style.display = "none";
		document.getElementById("button_save_to_gallery").style.display = "none";
	}

};
// Загрузка фото на компьютер
function button_download(href) {
		let downloadBtnHref = document.getElementById('download-button-href');
		downloadBtnHref.href = href;
	}


// Move superimposed pictures script
function startDrag(e) {
	// determine event object
	if (!e) {
		var e = window.event;
	}
	e.preventDefault();
	targ = e.target;
	if (targ.className != 'abs-pic') { return };

	// calculate event X, Y coordinates
	offsetX = e.clientX;
	offsetY = e.clientY;
	// assign default values for top and left properties
	if (!targ.style.left) { targ.style.left = '0px'};
	if (!targ.style.top) { targ.style.top = '0px'};
	// calculate integer values for top and left properties
	coordX = parseInt(targ.style.left);
	coordY = parseInt(targ.style.top);

	drag = true;

	// move div element
	document.onmousemove = dragDiv;
}
function dragDiv(e) {
	if (!drag) { return };
	if (!e) { var e = window.event};

	targ.style.left = coordX + e.clientX - offsetX + 'px';
	targ.style.top = coordY + e.clientY - offsetY + 'px';
}
function stopDrag() {
	drag = false;
}

// Добавление иконок на video.
const imPic = [...document.querySelectorAll('.carousel-container-block .foto-wrapper img')];
imPic.forEach(function(pic) {
		pic.onclick = function putSimIm() {
		const simIm = document.createElement('img');
		simIm.src = pic.src;
		simIm.classList.add('abs-pic');
		document.querySelector('.window_cams').appendChild(simIm);
		document.onmousedown = startDrag;
		document.onmouseup = stopDrag;
		pic.onclick = function() {
			document.querySelector('.window_cams').removeChild(simIm);
			pic.onclick = putSimIm;
		}
	}
});































