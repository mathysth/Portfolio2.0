<?php
namespace App\Utils;

use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Request;

class TranslationsUtils
{
    private static $instance;
    private $currentLang;
    private $request;
    private $supportedLang = [
        "FR",
        "EN"
    ];

    /**
     * TranslationsUtils constructor.
     * @param $currentLang
     * @param Request $request
     */
    public function __construct($currentLang,Request $request)
    {
        $this->currentLang = strtoupper($currentLang);
        $this->request = $request;
    }

    /**
     * @return bool
     */
    public function verifyIsLangSupported(): bool
    {
        $isSupported = true;
        for ($i = 0; $i < count($this->supportedLang); $i++) {
            if ($this->currentLang == $this->supportedLang[$i]) {
                $isSupported = true;
                break;
            } else {
                $isSupported = false;
            }
        }

        if (!$isSupported) {
            return false;
        }else{
            return true;
        }
    }

    /**
     * @return array
     */
    private function getJsonOfFilesInFolder(): array
    {
        $finder = new Finder();
        $filesFolders = $finder->files()->in(__DIR__."/../Translations/$this->currentLang/");
        $json = [];

        if ($finder->hasResults()) {
            foreach ($filesFolders as $file) {
                array_push($json ,$file->getContents());
            }
        }
        return $json;
    }

    public static function isLangUrlValid($url,Request  $request){
        // verifier l'url si url = GGGG/member/profil redrigier sur fr/member/profil
    }

    /**
     * @param $key
     * @param $lang
     * @param $request
     * @return mixed|string
     */
    public static function GetLangKey($key,$lang,Request $request){
        $instance = null;
        if (!self::$instance){
            $instance = new TranslationsUtils($lang,$request);
        }else{
            $instance = self::$instance;
        }
        $langJson = $instance->getJsonOfFilesInFolder();
        $error = false;
        for ($i = 0; $i < count($langJson);$i++){
            foreach (json_decode($langJson[$i]) as $k => $finalKey){
                if ($key == $k){
                    $error = false;
                    return $finalKey;
                }else{
                    $error = true;
                }
            }
        }
        if ($error){
            return "Error 500 : Key $key not exist";
        }
    }
}