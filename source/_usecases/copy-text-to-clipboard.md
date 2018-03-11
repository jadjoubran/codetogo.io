---
extends: _layouts.usecase
date: 2018-02-19
link: https://developer.mozilla.org/en-US/docs/Web/API/Document/execCommand
reference: Document.execCommand
category: strings
---


```javascript
const textToCopy = 'npm install webdash';

const el = document.createElement('textarea');
el.textContent = textToCopy;
el.style.cssText = "position: absolute;left:-500%";
document.body.appendChild(el);
el.select();
document.execCommand('copy');
el.remove();
```
