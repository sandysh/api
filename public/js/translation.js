function NepaliTranslation(id)
{
    google.load("elements", "1", { packages: "transliteration" });
    function onLoad() {
        var options = {
            sourceLanguage: google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage: [google.elements.transliteration.LanguageCode.NEPALI],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true
        };
        var control =
            new google.elements.transliteration.TransliterationControl(options);

        $('.translate-nepali').each(function(){
            var id = this.id;
            control.makeTransliteratable([id]);
        })
    }
    google.setOnLoadCallback(onLoad);
}