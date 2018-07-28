---
extends: _layouts.usecase
date: 2018-07-28
link: https://developer.mozilla.org/en-US/docs/Learn/HTML/Howto/Use_data_attributes
reference: dataset
category: DOM
---

```html
<div id="box" data-user-id="123"></div>
```

```javascript
const box = document.querySelector("#box");
const userId = box.dataset.userId;
```

<pre class="output">123</pre>
