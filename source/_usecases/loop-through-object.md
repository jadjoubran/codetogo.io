---
extends: _layouts.usecase
date: 2017-11-11
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_objects/Object/values
---


```javascript
const repository = {
    id: 1,
    language: 'javascript',
    public: true
};

for (const value of Object.values(repository)){
    console.log(value);
}
```
<pre class="output">
1
javascript
true
</pre>
