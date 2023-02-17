<?php
    return function($page) {
        $media = collection('mediapage');
        return [
            'media' => $media
        ];
    }
?>