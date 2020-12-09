<?php

    route('GET', "/", "index");
    route('GET', "/checkout", "checkout");
    route('GET', "/contact", "contact");
    route('GET', "/experiance", "experiance");
    route('GET', "/login", "login");
    route('GET', "/register", "register");
    route('GET', "/shop", "shop");
    route('GET', "/single", "single");
    route('GET', "/team", "team");

    notFound();
