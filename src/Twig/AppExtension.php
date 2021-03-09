<?php
namespace App\Twig;

use App\Utils\TranslationsUtils;
use Symfony\Component\HttpFoundation\Request;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    /**
     * @var Request
     */
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return TwigFunction[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('checkIsLangSupported', [$this, 'isLangSupported']),
            new TwigFunction('translate', [$this, 'TranslateTextByKey']),
        ];
    }

    /**
     * @param $key
     * @param $lang
     * @return string
     */
    public function TranslateTextByKey($key,$lang): string
    {
        return TranslationsUtils::GetLangKey($key,$lang,$this->request);
    }

    public function isLangSupported($lang): bool
    {
        return (new TranslationsUtils($lang,$this->request))->verifyIsLangSupported();
    }
}