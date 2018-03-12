---
extends: _layouts.usecase
date: 2018-03-12
link: https://developer.mozilla.org/en-US/docs/Web/API/ServiceWorkerContainer/register
reference: ServiceWorkerContainer.register
category: PWA
---

```javascript
if ('serviceWorker' in navigator) {
  window.addEventListener('load', () => {
    navigator.serviceWorker.register('/sw.js');
  });
}
```

