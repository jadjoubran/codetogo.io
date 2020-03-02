---
extends: _layouts.usecase
date: 2020-03-02
link: https://blog.learnjavascript.online/posts/javascript-has-class/
reference_website: Learn JavaScript Blog
reference: JavaScript has class
category: DOM
---

```html
<div id="box" class="active"></div>
```

```javascript
const element = document.querySelector("#box");

element.classList.contains("active");
```

<pre class="output">true</pre>
