---
extends: _layouts.usecase
date: 2020-08-16
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/DateTimeFormat
reference: Intl.DateTimeFormat
related: get-current-day-name,get-current-month-name
category: datetime
---

```javascript
const date = new Date();

// remove an option to hide it from the output
const options = {
  weekday: "long", // or: "short", "numeric"
  month: "long", //or: "short", "numeric"
  day: "numeric",
  year: "numeric",
  day: "numeric",
  hour: "numeric",
  minute: "numeric",
  second: "numeric"
};

// replace "en-US" with undefined to use the user's locale
new Intl.DateTimeFormat("en-US", options).format(date);
```

<pre class="output">
Sunday, August 16, 2020, 7:34:44 PM
</pre>
