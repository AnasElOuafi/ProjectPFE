<?php
// Show Error
error_reporting(E_ALL);

// Start Class to manage methods for website
class IndependenceController
{
    // Translate string from fr to browser langage
    public function translate($text, $lang)
    {
        $source = "fr";
        $target = $lang;
        // Define the Google Translate API endpoint
        $url = "https://translate.googleapis.com/translate_a/single?client=gtx&sl={$source}&tl={$target}&dt=t&q=" . urlencode(strip_tags($text));
        // Send a GET request to the API endpoint and get the response
        $resultponse = file_get_contents($url);
        // Parse the JSON response and get the translated text
        $translatedText = "";
        foreach (json_decode($resultponse)[0] as $sentence) {
            $translatedText .= $sentence[0] . " ";
        }
        return $translatedText;
    }
}
?>