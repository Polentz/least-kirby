<?php

return function ($page) {
    $mediacards = $page->children()->listed()->first();
    // $mediacontent = $mediacards->children()->listed();
    $filterBy = get('filter');
    $unfiltered = $mediacards->children()->listed();
    $content = $unfiltered
    ->when($filterBy, function($filterBy) {
       return $this->filterBy('filter', $filterBy);
    });
    $filters = $unfiltered->pluck('filter', null, true);

    // variables
    return [
        'mediacards' => $mediacards,
        // 'mediacontent' => $mediacontent,
        'filterBy' => $filterBy,
        'unfiltered' => $unfiltered,
        'content' => $content,
        'filters' => $filters
    ];
}; 