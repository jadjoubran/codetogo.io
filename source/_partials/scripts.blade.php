<script>
    (function(){
        const questions = ['How to loop through array in JavaScript', 'How to interpolate in JavaScript', 'How to get keys of object in JavaScript', 'How to check if element has class in JavaScript', 'How to get first character of string in JavaScript', 'How to capitalize first letter in JavaScript', 'How to validate email in JavaScript', 'How to replace a class of element in JavaScript', 'How to reload page in JavaScript', 'How to interpolate in JavaScript']
        const index = Math.floor(Math.random() * questions.length)
        document.querySelector('#autocomplete').placeholder = questions[index];
    })();
</script>
<script defer src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script defer src="{{ elixir('js/all.js', 'build') }}"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110654751-1"></script>

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
    function initAnalytics(){
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-110654751-1');
    }
    
    window.cookieconsent.initialise({
    "palette": {
    "popup": {
      "background": "#ffffff",
      "text": "#8999a3"
    },
    "button": {
      "background": "#cccccc",
      "text": "#ffffff"
    }
  },
  "theme": "classic",
  "type": "opt-in",
  onInitialise: function (status) {
  var type = this.options.type;
  var didConsent = this.hasConsented();
  if (type == 'opt-in' && didConsent) {
    initAnalytics();
  }
  if (type == 'opt-out' && !didConsent) {
    // cookies already disabled
  }
},
 
onStatusChange: function(status, chosenBefore) {
  var type = this.options.type;
  var didConsent = this.hasConsented();
  if (type == 'opt-in' && didConsent) {
    initAnalytics();
  }
  if (type == 'opt-out' && !didConsent) {
    // cookies already disabled
  }
},
 
onRevokeChoice: function() {
  var type = this.options.type;
  if (type == 'opt-in') {
    // cookies already disabled
  }
  if (type == 'opt-out') {
    initAnalytics();
  }
},
})});
</script>