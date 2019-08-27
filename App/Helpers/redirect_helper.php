<?php

    // Simple redirect helper
    function redirect($page)
    {
        header('Location: ' . URLROOT . $page);
    }