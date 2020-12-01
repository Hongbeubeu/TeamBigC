<?php
namespace Core\ORM;

interface MapperInterface {
    function findById(int $id);
    function save();
    function loadClassProperties();
}