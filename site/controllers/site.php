<?php

return function ($kirby) {

    if ($kirby->language()->code() == 'fr') {
        $lang = 'fr';
        $langCode = 'fr_FR';
        $href = 'en';
        $languageString = 'English';
        $resetFilters = 'Tous les médias';
        $readMore = 'En savoir plus';
    } else if ($kirby->language()->code() == 'en') {
        $lang = 'en';
        $langCode = 'en_US';
        $href = 'fr';
        $languageString = 'Français';
        $resetFilters = 'All media';
        $readMore = 'Read more';
    }


    $mediapage = $kirby->collection('mediapage');
    $projects = $kirby->collection('projects'); 

    return [
        'lang' => $lang,
        'langCode' => $langCode,
        'href' => $href,
        'languageString' => $languageString,
        'resetFilters' => $resetFilters,
        'readMore' => $readMore,
        'mediapage' => $mediapage,
        'projects' => $projects,
    ];
};