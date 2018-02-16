---
extends: _layouts.usecase
date: 2018-02-16
link: https://developer.mozilla.org/en-US/docs/Web/API/Document/execCommand
category: strings
---


```javascript
const textToCopy = 'npm install codetogo';

const el = document.createElement('input');
el.value = textToCopy;
el.style.cssText = "position: absolute;left:-500%";
document.body.appendChild(el);
el.select();
document.execCommand('copy');
el.remove();
```
