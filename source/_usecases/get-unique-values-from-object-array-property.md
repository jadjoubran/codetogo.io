---
extends: _layouts.usecase
date: 2018-03-06
category: objects
---


```javascript
const objects = [
 { id: 1 , category: "Cars", brand: "Subaru" },
 { id: 2 , category: "Cars", brand: "Ford" },
 { id: 3 , category: "Smatphones", brand: "Apple" },
 { id: 4 , category: "Cars", brand: "Citroen" },
 { id: 5 , category: "Tablet", brand: "Asus" },
];

categories = [...new Set(objects.map(object => object.category))];

console.log(categories);
```
<pre class="output">[ "Cars", "Smartphones", "Tablet" ]</pre>
