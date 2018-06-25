<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 20/06/2018
 * Time: 16:36
 */

namespace OC\PlatformBundle\AntiSpam;


class OCAntispam
{
    /**
     * Vérifie si le texte est un spam ou non
     *
     * @param string $text
     * @return bool
     */
    public function isSpam($text)
    {
        return strlen($text) < 50;
    }
}