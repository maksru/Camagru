// ***********************************************************************************
// Функция работы с камерой.
window.onload = function () 
{
		var canvas = document.getElementById('canvas');
		var video = document.getElementById('video');
		var button_shoot = document.getElementById('button_shoot');
		var allow = document.getElementById('allow');
		// var gallery_block = document.getElementById('gallery_block');
		var context = canvas.getContext('2d');
		var videoStreamUrl = false;
		// функция которая будет выполнена при нажатии на кнопку захвата кадра
		var captureMe = function () 
		{
			if (!videoStreamUrl) alert('То-ли вы не нажали "разрешить" в верху окна, то-ли что-то не так с вашим видео стримом');
			// context.translate(canvas.width, 0);
			// context.scale(-1, 1);
			// context.drawImage(video, 0, 0, video.width, video.height);

			context.save();
			context.scale(-1, 1);
			context.drawImage(video , 0, 0, video.videoWidth * (-1), video.videoHeight);
			context.restore();
			// *************************************************************
			// Склеивание фото и отрисовываем на канвасе текущий кадр видео.
			var drawnImg = document.getElementsByClassName("div_icon");
			for (var i = 0; drawnImg[i]; i++)
			{
				canvas.getContext("2d").drawImage(
					drawnImg[i],
					drawnImg[i].style.left.slice(0, -2), drawnImg[i].style.top.slice(0, -2),
					drawnImg[i].width, drawnImg[i].height
				);
			}
			// получаем data: url изображения c canvas
			var base64dataUrl = canvas.toDataURL('image/png');
			// context.setTransform(1, 0, 0, 1, 0, 0); // убираем все кастомные трансформации canvas
			// на этом этапе можно спокойно отправить  base64dataUrl на сервер и сохранить его там как файл (ну или типа того) 
			// но мы добавим эти тестовые снимки в наш пример:
			// var img = new Image();
			// img.src = base64dataUrl;
			// gallery_block.appendChild(img);
			var img = document.getElementById("new-img");
			img.src = base64dataUrl;
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

// ***********************************************************************************
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

// ***********************************************************************************
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

// ***********************************************************************************
// Move superimposed pictures script
function startDrag(e) {
	// determine event object
	if (!e) {
		var e = window.event;
	}
	e.preventDefault();
	targ = e.target;
	if (targ.className != 'div_icon') { return };

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

// ***********************************************************************************
// Добавление иконок на video.
const imPic = [...document.querySelectorAll('.carousel-container-block .foto-wrapper img')];
imPic.forEach(function(pic) {
		pic.onclick = function putSimIm() {
		const simIm = document.createElement('img');
		simIm.src = pic.src;
		simIm.classList.add('div_icon');
		simIm.style.width = "250px";
		simIm.style.height = "250px";
		document.querySelector('.div_icon_block').appendChild(simIm);
		document.getElementById('button_shoot').disabled = false;
		document.onmousedown = startDrag;
		document.onmouseup = stopDrag;
		pic.onclick = function() {
			document.querySelector('.div_icon_block').removeChild(simIm);
			document.getElementById('button_shoot').disabled = true;
			pic.onclick = putSimIm;
		}
	}
});

// ***********************************************************************************
// Сохраннеие фото на компьютер
function canvasDrawing(){
    var canvas = document.getElementById("canvas");
    var context = canvas.getContext("2d");
    
    context.save();
    context.beginPath();
    context.moveTo(10, 10);
    context.lineTo(290, 290);
    context.stroke();
    context.restore();
}
 
function getImage(canvas){
    var imageData = canvas.toDataURL();
    var image = new Image();
    image.src = imageData;
    return image;
}
 
function saveImage(image) {
    var link = document.createElement("a");
 
    link.setAttribute("href", image.src);
    link.setAttribute("download", "canvasImage");
    link.click();
}
 
canvasDrawing();

var down = document.getElementById("button_download");
down.onclick = function saveCanvasAsImageFile(){
    var image = getImage(document.getElementById("canvas"));
    saveImage(image);
}

// ***********************************************************************************
// Сохранение фото в базу данных.
// & - с новой строки.
var but = document.getElementById("button_save_to_gallery");
but.addEventListener('click', save_img);
function save_img () {
	var auth_id = document.getElementById("auth_id");
	var log_user = document.getElementById("log_user");
	var img_src = document.getElementById("new-img");

	var data = "auth_id=" + auth_id.innerHTML + "&log_user=" + log_user.innerHTML + "&img_src=" + img_src.src;

	var xhttp = new XMLHttpRequest();
	xhttp.open("POST", "save_to_gallery.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send(data);
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			window.location.reload();
			console.log(this.responseText);
		}
	};
}





















