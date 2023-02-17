<?php
    return function($page) {
        $projects = collection('projects');
        return [
            'projects' => $projects
        ];
    }
?>