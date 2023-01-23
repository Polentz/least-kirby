<?php

return function ($page) {
    $mediacontents = $page->children()->listed()->first();
    $filterBy = get('filter');
    $unfiltered = $mediacontents->children()->listed();
    $content = $unfiltered
    ->when($filterBy, function($filterBy) {
       return $this->filterBy('filter', $filterBy);
    });
    $filters = $unfiltered->pluck('filter', null, true);

    return [
        'mediacontents' => $mediacontents,
        'filterBy' => $filterBy,
        'unfiltered' => $unfiltered,
        'content' => $content,
        'filters' => $filters
    ];
}; 