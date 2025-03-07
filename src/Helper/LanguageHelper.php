<?php

namespace EffectConnect\Marketplaces\Helper;

/**
 * Fetched list from: https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes
 */
class LanguageHelper
{
    /**
     * @return array
     */
    public static function getLanguages(): array
    {
        return [
            'ab' => TranslationHelper::translate('Abkhazian'),
            'aa' => TranslationHelper::translate('Afar'),
            'af' => TranslationHelper::translate('Afrikaans'),
            'ak' => TranslationHelper::translate('Akan'),
            'sq' => TranslationHelper::translate('Albanian'),
            'am' => TranslationHelper::translate('Amharic'),
            'ar' => TranslationHelper::translate('Arabic'),
            'an' => TranslationHelper::translate('Aragonese'),
            'hy' => TranslationHelper::translate('Armenian'),
            'as' => TranslationHelper::translate('Assamese'),
            'av' => TranslationHelper::translate('Avaric'),
            'ae' => TranslationHelper::translate('Avestan'),
            'ay' => TranslationHelper::translate('Aymara'),
            'az' => TranslationHelper::translate('Azerbaijani'),
            'bm' => TranslationHelper::translate('Bambara'),
            'ba' => TranslationHelper::translate('Bashkir'),
            'eu' => TranslationHelper::translate('Basque'),
            'be' => TranslationHelper::translate('Belarusian'),
            'bn' => TranslationHelper::translate('Bengali'),
            'bi' => TranslationHelper::translate('Bislama'),
            'bs' => TranslationHelper::translate('Bosnian'),
            'br' => TranslationHelper::translate('Breton'),
            'bg' => TranslationHelper::translate('Bulgarian'),
            'my' => TranslationHelper::translate('Burmese'),
            'ca' => TranslationHelper::translate('Catalan'),
            'ch' => TranslationHelper::translate('Chamorro'),
            'ce' => TranslationHelper::translate('Chechen'),
            'ny' => TranslationHelper::translate('Chichewa'),
            'zh' => TranslationHelper::translate('Chinese'),
            'cv' => TranslationHelper::translate('Chuvash'),
            'kw' => TranslationHelper::translate('Cornish'),
            'co' => TranslationHelper::translate('Corsican'),
            'cr' => TranslationHelper::translate('Cree'),
            'hr' => TranslationHelper::translate('Croatian'),
            'cs' => TranslationHelper::translate('Czech'),
            'da' => TranslationHelper::translate('Danish'),
            'dv' => TranslationHelper::translate('Divehi'),
            'nl' => TranslationHelper::translate('Dutch'),
            'dz' => TranslationHelper::translate('Dzongkha'),
            'en' => TranslationHelper::translate('English'),
            'eo' => TranslationHelper::translate('Esperanto'),
            'et' => TranslationHelper::translate('Estonian'),
            'ee' => TranslationHelper::translate('Ewe'),
            'fo' => TranslationHelper::translate('Faroese'),
            'fj' => TranslationHelper::translate('Fijian'),
            'fi' => TranslationHelper::translate('Finnish'),
            'fr' => TranslationHelper::translate('French'),
            'ff' => TranslationHelper::translate('Fulah'),
            'gl' => TranslationHelper::translate('Galician'),
            'ka' => TranslationHelper::translate('Georgian'),
            'de' => TranslationHelper::translate('German'),
            'el' => TranslationHelper::translate('Greek'),
            'gn' => TranslationHelper::translate('Guarani'),
            'gu' => TranslationHelper::translate('Gujarati'),
            'ht' => TranslationHelper::translate('Haitian'),
            'ha' => TranslationHelper::translate('Hausa'),
            'he' => TranslationHelper::translate('Hebrew'),
            'hz' => TranslationHelper::translate('Herero'),
            'hi' => TranslationHelper::translate('Hindi'),
            'ho' => TranslationHelper::translate('Hiri Motu'),
            'hu' => TranslationHelper::translate('Hungarian'),
            'ia' => TranslationHelper::translate('Interlingua'),
            'id' => TranslationHelper::translate('Indonesian'),
            'ie' => TranslationHelper::translate('Interlingue'),
            'ga' => TranslationHelper::translate('Irish'),
            'ig' => TranslationHelper::translate('Igbo'),
            'ik' => TranslationHelper::translate('Inupiaq'),
            'io' => TranslationHelper::translate('Ido'),
            'is' => TranslationHelper::translate('Icelandic'),
            'it' => TranslationHelper::translate('Italian'),
            'iu' => TranslationHelper::translate('Inuktitut'),
            'ja' => TranslationHelper::translate('Japanese'),
            'jv' => TranslationHelper::translate('Javanese'),
            'kl' => TranslationHelper::translate('Kalaallisut'),
            'kn' => TranslationHelper::translate('Kannada'),
            'kr' => TranslationHelper::translate('Kanuri'),
            'ks' => TranslationHelper::translate('Kashmiri'),
            'kk' => TranslationHelper::translate('Kazakh'),
            'km' => TranslationHelper::translate('Central Khmer'),
            'ki' => TranslationHelper::translate('Kikuyu'),
            'rw' => TranslationHelper::translate('Kinyarwanda'),
            'ky' => TranslationHelper::translate('Kirghiz'),
            'kv' => TranslationHelper::translate('Komi'),
            'kg' => TranslationHelper::translate('Kongo'),
            'ko' => TranslationHelper::translate('Korean'),
            'ku' => TranslationHelper::translate('Kurdish'),
            'kj' => TranslationHelper::translate('Kuanyama'),
            'la' => TranslationHelper::translate('Latin'),
            'lb' => TranslationHelper::translate('Luxembourgish'),
            'lg' => TranslationHelper::translate('Ganda'),
            'li' => TranslationHelper::translate('Limburgan'),
            'ln' => TranslationHelper::translate('Lingala'),
            'lo' => TranslationHelper::translate('Lao'),
            'lt' => TranslationHelper::translate('Lithuanian'),
            'lu' => TranslationHelper::translate('Luba-Katanga'),
            'lv' => TranslationHelper::translate('Latvian'),
            'gv' => TranslationHelper::translate('Manx'),
            'mk' => TranslationHelper::translate('Macedonian'),
            'mg' => TranslationHelper::translate('Malagasy'),
            'ms' => TranslationHelper::translate('Malay'),
            'ml' => TranslationHelper::translate('Malayalam'),
            'mt' => TranslationHelper::translate('Maltese'),
            'mi' => TranslationHelper::translate('Maori'),
            'mr' => TranslationHelper::translate('Marathi'),
            'mh' => TranslationHelper::translate('Marshallese'),
            'mn' => TranslationHelper::translate('Mongolian'),
            'na' => TranslationHelper::translate('Nauru'),
            'nv' => TranslationHelper::translate('Navajo'),
            'nd' => TranslationHelper::translate('North Ndebele'),
            'ne' => TranslationHelper::translate('Nepali'),
            'ng' => TranslationHelper::translate('Ndonga'),
            'nb' => TranslationHelper::translate('Norwegian Bokmål'),
            'nn' => TranslationHelper::translate('Norwegian Nynorsk'),
            'no' => TranslationHelper::translate('Norwegian'),
            'ii' => TranslationHelper::translate('Sichuan Yi'),
            'nr' => TranslationHelper::translate('South Ndebele'),
            'oc' => TranslationHelper::translate('Occitan'),
            'oj' => TranslationHelper::translate('Ojibwa'),
            'cu' => TranslationHelper::translate('Church Slavic'),
            'om' => TranslationHelper::translate('Oromo'),
            'or' => TranslationHelper::translate('Oriya'),
            'os' => TranslationHelper::translate('Ossetian'),
            'pa' => TranslationHelper::translate('Punjabi'),
            'pi' => TranslationHelper::translate('Pali'),
            'fa' => TranslationHelper::translate('Persian'),
            'pl' => TranslationHelper::translate('Polish'),
            'ps' => TranslationHelper::translate('Pashto'),
            'pt' => TranslationHelper::translate('Portuguese'),
            'qu' => TranslationHelper::translate('Quechua'),
            'rm' => TranslationHelper::translate('Romansh'),
            'rn' => TranslationHelper::translate('Rundi'),
            'ro' => TranslationHelper::translate('Romanian'),
            'ru' => TranslationHelper::translate('Russian'),
            'sa' => TranslationHelper::translate('Sanskrit'),
            'sc' => TranslationHelper::translate('Sardinian'),
            'sd' => TranslationHelper::translate('Sindhi'),
            'se' => TranslationHelper::translate('Northern Sami'),
            'sm' => TranslationHelper::translate('Samoan'),
            'sg' => TranslationHelper::translate('Sango'),
            'sr' => TranslationHelper::translate('Serbian'),
            'gd' => TranslationHelper::translate('Gaelic'),
            'sn' => TranslationHelper::translate('Shona'),
            'si' => TranslationHelper::translate('Sinhala'),
            'sk' => TranslationHelper::translate('Slovak'),
            'sl' => TranslationHelper::translate('Slovenian'),
            'so' => TranslationHelper::translate('Somali'),
            'st' => TranslationHelper::translate('Southern Sotho'),
            'es' => TranslationHelper::translate('Spanish'),
            'su' => TranslationHelper::translate('Sundanese'),
            'sw' => TranslationHelper::translate('Swahili'),
            'ss' => TranslationHelper::translate('Swati'),
            'sv' => TranslationHelper::translate('Swedish'),
            'ta' => TranslationHelper::translate('Tamil'),
            'te' => TranslationHelper::translate('Telugu'),
            'tg' => TranslationHelper::translate('Tajik'),
            'th' => TranslationHelper::translate('Thai'),
            'ti' => TranslationHelper::translate('Tigrinya'),
            'bo' => TranslationHelper::translate('Tibetan'),
            'tk' => TranslationHelper::translate('Turkmen'),
            'tl' => TranslationHelper::translate('Tagalog'),
            'tn' => TranslationHelper::translate('Tswana'),
            'to' => TranslationHelper::translate('Tonga'),
            'tr' => TranslationHelper::translate('Turkish'),
            'ts' => TranslationHelper::translate('Tsonga'),
            'tt' => TranslationHelper::translate('Tatar'),
            'tw' => TranslationHelper::translate('Twi'),
            'ty' => TranslationHelper::translate('Tahitian'),
            'ug' => TranslationHelper::translate('Uighur'),
            'uk' => TranslationHelper::translate('Ukrainian'),
            'ur' => TranslationHelper::translate('Urdu'),
            'uz' => TranslationHelper::translate('Uzbek'),
            've' => TranslationHelper::translate('Venda'),
            'vi' => TranslationHelper::translate('Vietnamese'),
            'vo' => TranslationHelper::translate('Volapük'),
            'wa' => TranslationHelper::translate('Walloon'),
            'cy' => TranslationHelper::translate('Welsh'),
            'wo' => TranslationHelper::translate('Wolof'),
            'fy' => TranslationHelper::translate('Western Frisian'),
            'xh' => TranslationHelper::translate('Xhosa'),
            'yi' => TranslationHelper::translate('Yiddish'),
            'yo' => TranslationHelper::translate('Yoruba'),
            'za' => TranslationHelper::translate('Zhuang'),
            'zu' => TranslationHelper::translate('Zulu'),
        ];
    }

    /**
     * @return array
     */
    public static function getAvailableLanguages(): array
    {
        $wpmlLanguages = WpmlHelper::getActiveLanguages();
        if (count($wpmlLanguages) > 0) {
            return $wpmlLanguages;
        }
        return self::getLanguages();
    }
}