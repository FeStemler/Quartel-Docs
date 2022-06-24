<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function studants()
    {
        $studants = [
            ["Bruna Paula dos Santos", '320251399'],
            ["Bruno Rodrigues Martins de Almeida", '320251721'],
            ["Felipe Henrique Stemler Gomes", '320251529'],
            ["Gabriela Menezes Andrade Mendes", '320251611'],
            ["Gabriel Murta de Freitas", '320253708'],
            ["Lucca Rosendo Guitti", '320252013'],
            ["Nicolle Estephanie Silva Andrade", '320251594'],
            ["Ryan Felix Ferreira Lima", '320130933'],
            ["Samuel Cesar Rodrigues", '320251454'],
            ["Saulo Ribeiro", '320251543'],
        ];
        return $studants;
    }
}