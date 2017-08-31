<?php

Route::set('about-us',function (){
    AboutUs::CreateView();
});

Route::set('main',function (){
    Main::CreateView();
});

?>