<?php

$cmd = [
    "git status",
    "git add .",
    'git commit -m "Update Code" ',
    "git push -u origin main"
];

foreach ($cmd as $_cmd)
    echo (shell_exec($_cmd));
