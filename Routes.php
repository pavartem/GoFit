<?php

Route::set('index.php', function (){
    Index::CreateView('Index');
});

Route::set('about-us', function (){
    AboutUs::CreateView('AboutUs');
});

Route::set('main', function (){
    Main::CreateView('Main');
});
