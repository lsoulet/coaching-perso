<?php

class Controller
{
    public static function afficheVue(string $cheminVue, array $parametres = []): void
    {
        extract($parametres);
        require __DIR__ . "/../view/$cheminVue";
    }
}