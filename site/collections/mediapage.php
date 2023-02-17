<?php
    return function() {
        return page('mediapage')->children()->listed()->template('mediacontent');
    };
?>