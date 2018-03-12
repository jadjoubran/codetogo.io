---
extends: _layouts.usecase
date: 2018-03-11
link: https://developer.mozilla.org/en-US/docs/Web/Guide/Events/Creating_and_triggering_events
reference: Events
category: DOM
---

```html
<button id="submit"></button>
```

```javascript
const button = document.querySelector('#submit');

//trigger click
button.dispatchEvent(new Event('click'));
```
