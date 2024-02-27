---
extends: _layouts.usecase
date: 2024-02-27
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Intl/RelativeTimeFormat
reference: Intl.RelativeTimeFormat
related: get-human-friendly-date-difference,create-date-in-RFC3339-format
category: datetime
---

```javascript
const formatter = new Intl.RelativeTimeFormat("en", {
  // Change to "short" for min. (instead of minutes)
  style: "long"
});

// -5 can be the difference between 2 date objects
formatter.format(-5, "minutes");
```

<pre class="output">5 minutes ago</pre>
