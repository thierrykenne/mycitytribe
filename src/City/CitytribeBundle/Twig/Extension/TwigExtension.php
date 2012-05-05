<?php
namespace City\CitytribeBundle\Twig\Extension;
use Symfony\Component\Locale\Locale;

class TwigExtension extends \Twig_Extension {

    public function getFilters()
    {
        return array(
            'country'    => new \Twig_Filter_Function(
                '\City\CitytribeBundle\Twig\Extension\TwigExtension::countryFilter'
            ),
            'localeDate' => new \Twig_Filter_Function(
                '\City\CitytribeBundle\Twig\Extension\TwigExtension::localeDateFilter'
            ),
        );
    }

    public static function countryFilter($country)
    {
        $countries = Locale::getDisplayCountries(
            \Locale::getDefault()
        );

        return $countries[$country];
    }
    
    public static function localeDateFilter(
        $date,
        $dateType = 'medium',
        $timeType = 'none')
    {
        $values = array(
            'none'   => \IntlDateFormatter::NONE,
            'short'  => \IntlDateFormatter::SHORT,
            'medium' => \IntlDateFormatter::MEDIUM,
            'long'   => \IntlDateFormatter::LONG,
            'full'   => \IntlDateFormatter::FULL,
        );
        $dateFormater = \IntlDateFormatter::create(
            \Locale::getDefault(),
            $values[$dateType],
            $values[$timeType]
        );

        return $dateFormater->format($date);
    }

    public function getName()
    {
        return 'country_localeDate';
    }
}