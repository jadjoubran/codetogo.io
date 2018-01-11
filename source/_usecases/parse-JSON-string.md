---
extends: _layouts.usecase
date: 2018-01-11
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/JSON/parse
---


```javascript
const string = '{"id":1,"name":"Leanne Graham"}';

JSON.parse(string);
```

<pre class="output">
{
    id: 1,
    name: "Leanne Graham"
}
</pre>