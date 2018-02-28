<?php

namespace n_tartan\parser;

interface ParserInterface {
    
    public function process (string $url, string $tag) : array; 
    
}



