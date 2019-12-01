<script>
    (function() {
        const questions = [
            "How to loop through array in JavaScript",
            "How to interpolate in JavaScript",
            "How to get keys of object in JavaScript",
            "How to check if element has class in JavaScript",
            "How to get first character of string in JavaScript",
            "How to capitalize first letter in JavaScript",
            "How to validate email in JavaScript",
            "How to replace a class of element in JavaScript",
            "How to reload page in JavaScript",
            "How to interpolate in JavaScript"
        ];
        const index = Math.floor(Math.random() * questions.length);
        document.querySelector("#autocomplete").placeholder = questions[index];
    })();
</script>
<script defer src="{{ elixir('js/all.js', 'build') }}"></script>
<script>
    window.addEventListener("load", () => {        
        window.ga =
        window.ga ||
        function() {
          (ga.q = ga.q || []).push(arguments);
        };
        ga.l = +new Date();

        ga("create", "UA-110654751-1", "auto");
        ga("set", "anonymizeIp", true);
        ga("send", "pageview");

        setTimeout(() => {
            const script = document.createElement("script");
            script.src =
                "https://www.google-analytics.com/analytics.js";
            script.defer = true;
            script.async = true;
            document.body.appendChild(script);
        }, 400);
    });
</script>
