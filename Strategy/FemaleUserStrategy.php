<?php
namespace Strategy;

class FemaleUserStrategy implements UserStrategy 
{
    function showAd()
    {
        echo "2014新款女装";
    }
    function showCategory()
    {
        echo "女装";
    }
} 