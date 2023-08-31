<?php

function getRoute($route){
    if(request()->routeIs($route)){
        return "active current-page";
    }
}