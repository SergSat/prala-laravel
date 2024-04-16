<?php

use Illuminate\Support\Str;

if (!function_exists('model_name_lowercase')) {
    /**
     * Return the lowercase name of the model
     *
     * @param mixed $model The model
     * @return string
     */
    function model_name_lowercase($model): string
    {
        return Str::lower(class_basename($model));
    }
}

if (!function_exists('cleanHtml')) {
    /**
     * Очищает HTML-контент, используя HTMLPurifier.
     *
     * @param string $html HTML-контент для очистки.
     * @return string Очищенный HTML-контент.
     */
    function cleanHtml($html)
    {
        $config = HTMLPurifier_Config::createDefault();

        $purifier = new HTMLPurifier($config);

        return $purifier->purify($html);
    }
}

if (!function_exists('cleanAllHtml')) {
    /**
     * Очищает HTML-контент, используя HTMLPurifier.
     *
     * @param string $html HTML-контент для очистки.
     * @return string Очищенный HTML-контент.
     */
    function cleanAllHtml($html)
    {
        $config = HTMLPurifier_Config::createDefault();
        $config->set('HTML.Allowed', ''); // allow only these tags
        $purifier = new HTMLPurifier($config);

        return $purifier->purify($html);
    }
}