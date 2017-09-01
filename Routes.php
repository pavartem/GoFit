<?php

Route::set('index.php', function (){
    Index::createView('Index');
});

Route::set('about-us', function (){
    AboutUs::createView('AboutUs');
});

Route::set('main', function (){
    Main::createView('Main');
});
