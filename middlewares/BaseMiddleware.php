<?php


namespace anup\phpmvc\middlewares;


abstract class BaseMiddleware
{
    abstract public function execute();
}