<?php

namespace Controls\Functions;

trait sanitizer
{
    public function sanitizePage($uri): string
    {
        //        TODO get the last word *.html
        //        TODO replace special chars
        //        TODO get the last word without .html
        $words = explode('/', $uri);
        $lastWord = array_pop($words);
        $lastWord = preg_replace("/[^a-zα-ωά-ώ\d\/\-\._]+/u", '', $lastWord);
        return preg_replace("/\.html$/", '', $lastWord);
    }

    public function sanitizeUri($uri): string
    {
        //        TODO replace special chars
        $words = explode('/', $uri);
        $lastWord = array_pop($words);
        return preg_replace("/[^a-zα-ωά-ώ\d\/\-\._]+/u", '', $lastWord);
    }
    public function sanitizeData($input)
    {
        //        TODO replace special chars
        foreach ($input as $x=>$value) {
            $input[$x]=preg_replace("/[^A-Za-zά-ώΑ-Ω\d\/\-\._]+/u", '', $value);

        }
        return $input;
    }
}