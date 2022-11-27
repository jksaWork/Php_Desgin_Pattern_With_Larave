<?php
namespace App\Patterns\Creational\Bulider\InterFac;

interface PageBilderInterFace{
    function header();
    function nav();
    function content();
    function footer();
    function getPage();
}
