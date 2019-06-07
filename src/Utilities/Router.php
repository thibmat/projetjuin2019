<?php
namespace src\Utilities;


class Router
{
    /**
     * @var array
     */
    private $routes;

    /**
     * Ajoute une route au routeur
     * @param string $url - URL à détecter
     * @param string $file template à appeler
     */
    public function addRoute(string $url, string $file):void
    {
        $this->routes[] = [
            'url' => $url,
            'template' => $file
        ];
    }

    /**
     * Vérifie l'URL et renvoie l'éventuel fichier à appeler
     * @return string|null Retourne l'éventuel template à appeler
     */
    public function match():?string
    {
        $url = $_SERVER['REQUEST_URI'];
        if(strlen($url>=10)){
            $url = substr($url,10);
        }
        foreach($this->routes as $route){
            if($route['url'] === $url){
                return $route['template'];
            }
        }
        return null;
    }
}