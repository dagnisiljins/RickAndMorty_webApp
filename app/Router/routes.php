<?php

return [
    ['GET', '/', ['App\Controllers\SeasonController', 'index']],
    ['GET', '/season/{id}', ['App\Controllers\SeasonController', 'show']],
    ['GET', '/episode/{id}', ['App\Controllers\EpisodeController', 'show']]
];
