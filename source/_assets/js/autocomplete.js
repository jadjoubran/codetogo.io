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
      },
      empty: _ => {
        return `<div class="aa-suggestion aa-notfound" role="option">
        <div>No results found.</div>
        <div>
            <svg width="11" height="11" fill="var(--gray-800)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><path d="M26 0C11.664 0 0 11.663 0 26s11.664 26 26 26 26-11.663 26-26S40.336 0 26 0zm12.5 28H28v11a2 2 0 0 1-4 0V28H13.5a2 2 0 0 1 0-4H24V14a2 2 0 0 1 4 0v10h10.5a2 2 0 0 1 0 4z"/></svg>
            <em style="white-space: normal;">Click here to contribute</em>
        </div>
        </div>`
      }
  }
}
]).on('autocomplete:selected', function(event, suggestion, dataset) {
    if (suggestion && suggestion.url){
        window.location.href = `/${suggestion.url}`;
    }else{
        const url = document.querySelector('#contribute').href;
        window.open(url);
    }
});
