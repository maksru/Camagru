<?php  
	class Router
	{
		//Массив в котором буду хранится маршрути.
		private $routes;


		public function __construct()
		{
			$routesPath = 'config/routes.php';
			$this->routes = include($routesPath);
		}

		//Возвращает строку в виде url запросса.
		private function getURI()
		{
			if (!empty($_SERVER['REQUEST_URI'])) 
			{
				return trim($_SERVER['REQUEST_URI'], '/');
			}
		}

		//Функция которая будет принимать управление от фронтконтроллера.
		public function run ()
		{
			//Получить строку запроса.
			$uri = $this->getURI();

			//Проверить наличие такого запроса в routes.php
			foreach ($this->routes as $uriPattern => $path)
			{
				//Сравниваем $uriPattern и $uri.
				if (preg_match("~$uriPattern~", $uri)) 
				{
					//Определить какой контроллер и action обрабатывают запрос.
					$segments = explode('/', $path);
					
					//Имя контроллера.
					$controllerName = array_shift($segments).'Controller';
					$controllerName = ucfirst($controllerName);					
					$actionName = 'action'.ucfirst(array_shift($segments));

					//Подключить файл класса-контроллера.
					$controllerFile = ROOT . '/controllers/' . $controllerName . '.php';

					if (file_exists($controllerFile))
					{
						include_once($controllerFile);
					}

					//Создать объект и вызвать метод (action).
					$actionUse = new $controllerName;
					$result = $actionUse->$actionName();
					if ($result != null)
						break ;
				}
			} 
		}
	}

?>