const client = algoliasearch('7V5EBRZWFF', '8a58d6caba2a81878b26e24c1028624d')
const index = client.initIndex('test_JS-HOWTO');
autocomplete('#autocomplete', {
    hint: true,
    openOnFocus: true,
    minLength: 0
}, [
{
    source: autocomplete.sources.hits(index, { hitsPerPage: 5 }),
    displayKey: 'question',
    templates: {
        suggestion: suggestion => {
          return suggestion._highlightResult.question.value;
      }
  }
}
]).on('autocomplete:selected', function(event, suggestion, dataset) {
    if (suggestion.url){
        window.location.href = `/${suggestion.url}`;
    }
});
