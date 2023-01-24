<?php
    if ($kirby->language()->code() == 'fr') {
        $href = 'en';
        $languageString = 'English';
    } else if ($kirby->language()->code() == 'en') {
        $href = 'fr';
        $languageString = 'François';
    }
?>