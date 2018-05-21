window.onload = function () 
{
		var canvas = document.getElementById('canvas');
		var video = document.getElementById('video');
		var button = document.getElementById('button');
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

		button.addEventListener('click', captureMe);
		// navigator.getUserMedia  и   window.URL.createObjectURL (смутные времена браузерных противоречий 2012)
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

function three_buttons() {
	var button_shoot = document.getElementById("button_shoot").style.display = "none";

	if (button_shoot  == "none")
	{
		document.getElementById("button_download").style.display = "block";
		document.getElementById("button_try_again").style.display = "block";
		document.getElementById("button_save_to_gallery").style.display = "block";
	}

};

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