<?php

return function ($page) {
    $mediacontents = $page->children()->listed();
    $filterBy = get('tag');
    $unfiltered = $page->children()->listed();
    $content = $unfiltered
    ->when($filterBy, function($filterBy) {
       return $this->filterBy('tag', $filterBy);
    });

    return [
        'mediacontents' => $mediacontents,
        'filterBy' => $filterBy,
        'unfiltered' => $unfiltered,
        'content' => $content,
    ];
}; 