<script>
    (function(){
        const questions = ['How to loop through array in JavaScript', 'How to interpolate in JavaScript', 'How to get keys of object in JavaScript', 'How to check if element has class in JavaScript', 'How to get first character of string in JavaScript', 'How to capitalize first letter in JavaScript', 'How to validate email in JavaScript', 'How to replace a class of element in JavaScript', 'How to reload page in JavaScript', 'How to interpolate in JavaScript']
        const index = Math.floor(Math.random() * questions.length)
        document.querySelector('#autocomplete').placeholder = questions[index];
    })();
</script>
<script defer src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script defer src="/js/all.js?v=3"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110654751-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110654751-1');
</script>
