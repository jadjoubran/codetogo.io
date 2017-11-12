---
extends: _layouts.howto
date: 2017-11-11
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
