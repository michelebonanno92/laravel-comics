<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    /*
        compact: crea un array associativo le cui chiavi sono le stringhe
                 che mettiamo tra le parentesi, mentre i valori di tali
                 chiavi sono i valori delle variabili con i nomi corrispondenti
                 alle stringhe inserite

        compact('firstName', 'lastName')
         |                                     |
         V                                     V

         [
            'firstName' => $firstName,
            'lastName' => $lastName,
         ]
    */

    /*
        dd: vuol dire dump and die, cioè fai il var_dump (più carino però)
            e poi stoppa l'esecuzione
    */
    // dd(compact('firstName', 'lastName'));

Route::get('/', function () {

    $menuLinks = [
        [
            'name' => 'Characters',
            'current' => 'false'
        ],
        [
            'name' => 'Comics',
            'current' => 'true'
        ],
        [
            'name' => 'Movies',
            'current' => 'false'
        ],
        [
            'name' => 'Tv',
            'current' => 'false'
        ],
        [
            'name' => 'Games',
            'current' => 'false'
        ],
        [
            'name' => 'Collectibles',
            'current' => 'false'
        ],
        [
            'name' => 'Videos',
            'current' => 'false'
        ],
        [
            'name' => 'Fans',
            'current' => 'false'
        ],
        [
            'name' => 'News',
            'current' => 'false'
        ],
        [
            'name' => 'Shop',
            'current' => 'false'
        ],
    ];

    $menuItems = [
        [
            'img' => 'buy-comics-digital-comics.png',
            'name' => 'DIGITAL COMICS'
        ],
        [
            'img' => 'buy-comics-merchandise.png',
            'name' => 'DC MERCHANDISE'
        ],
        [
            'img' => 'buy-comics-subscriptions.png',
            'name' => 'SUBSCRIPTION'
        ],
        [
            'img' => 'buy-comics-shop-locator.png',
            'name' => 'COMICS SHOP LOCATOR'
        ],
        [
            'img' => 'buy-comics-digital-comics.png',
            'name' => 'DC POWER VISA'
        ],
  
    ];
    $menuLinksDcComics = [
        [
            'name' => 'Characters',
            'link' => '#'
        ],
        [
            'name' => 'Comics',
            'link' => '#'
        ],
        [
            'name' => 'Movies',
            'link' => '#'
        ],
        [
            'name' => 'Tv',
            'link' => '#'
        ],
        [
            'name' => 'Games',
            'link' => '#'
        ],
        [
            'name' => 'Videos',
            'link' => '#'
        ],
        [
            'name' => 'News',
            'link' => '#'
        ]
    ];
    $menuLinksShop = [
        [
            'name' => 'Shop DC',
            'link' => '#'
        ],
        [
            'name' => 'Shop DC Collectibles',
            'link' => '#'
        ],
    ];
    $menuLinksDc = [
        [
            'name' => 'Terms Of Use',
            'link' => '#'
        ],
        [
            'name' => 'Privacy policy (New)',
            'link' => '#'
        ],
        [
            'name' => 'Ad Choices',
            'link' => '#'
        ],
        [
            'name' => 'Advertising',
            'link' => '#'
        ],
        [
            'name' => 'Jobs',
            'link' => '#'
        ],
        [
            'name' => 'Subscriptions',
            'link' => '#'
        ],
        [
            'name' => 'Talent Workshops',
            'link' => '#'
        ],
        [
            'name' => 'CPSC Certificates',
            'link' => '#'
        ],
        [
            'name' => 'Ratings',
            'link' => '#'
        ],
        [
            'name' => 'Shop Help',
            'link' => '#'
        ],
        [
            'name' => 'Contact Us',
            'link' => '#'
        ],
    ];
    $menuLinksSites = [
        [
            'name' => 'DC',
            'link' => '#'
        ],
        [
            'name' => 'MAD Magazine',
            'link' => '#'
        ],
        [
            'name' => 'DC Kids',
            'link' => '#'
        ],
        [
            'name' => 'DC Universe',
            'link' => '#'
        ],
        [
            'name' => 'DC Power Visa',
            'link' => '#'
        ],
       
    ];

    $comics = config('comics');

    return view('pages.welcome', compact('menuLinks','comics','menuItems' ,'menuLinksDcComics','menuLinksShop','menuLinksDc','menuLinksSites'));

})->name('homePage');

Route::get('/chi-siamo', function () {
    return view('subpages.about');
});

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
