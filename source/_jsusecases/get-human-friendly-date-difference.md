---
extends: _layouts.usecase
date: 2024-02-27
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Intl/RelativeTimeFormat
reference: Intl.RelativeTimeFormat
related: get-minutes-ago,create-date-in-RFC3339-format
category: datetime
---

```javascript
const formatter = new Intl.RelativeTimeFormat("en");

const t1 = 1709042520000;
const t2 = 1709042400000;

// Date diff & convert from ms to minutes
const diff = (t2 - t1) / 60 / 1000;

formatter.format(diff, "minutes");
```

<pre class="output">2 minutes ago</pre>
