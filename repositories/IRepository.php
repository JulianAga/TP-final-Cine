<?php namespace repositories;

interface IRepository {

    function Add($value);
    function GetAll();
    function Delete($value);

}