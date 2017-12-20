---
extends: _layouts.howto
date: 2017-12-19
link: https://developer.mozilla.org/en-US/docs/Web/API/Window/localStorage
related: add-item-to-localstorage,remove-item-from-localstorage
---


```javascript
const user = {
    id: 1,
    first_name: 'John',
    last_name: 'Doe',
};

localStorage.setItem("user", JSON.stringify(user));
```
