---
extends: _layouts.usecase
date: 2017-12-16
link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/delete
reference: delete
category: objects
---


```javascript
const repository = {
    id: 1,
    language: 'javascript',
    public: true
};

delete repository.id;

console.log(repository);
```

<pre class="output">
{
    language: 'javascript',
    public: true
}
</pre>
