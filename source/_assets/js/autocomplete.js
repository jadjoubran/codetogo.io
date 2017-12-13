const client = algoliasearch('7V5EBRZWFF', '8a58d6caba2a81878b26e24c1028624d')
const index = client.initIndex('prod_JS-HOWTO');
autocomplete('#autocomplete', {
    hint: true,
    autoselect: true,
    // autoselectOnBlur: true
}, [
{
    source: autocomplete.sources.hits(index, { hitsPerPage: 50 }),
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
