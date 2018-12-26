---
extends: _layouts.usecase
date: 2018-12-26
category: functions
---

```html
<input type="file" id="upload">
```

```javascript
const upload = document.querySelector("#upload");

upload.addEventListener("change", event => {
  const file = event.currentTarget.value;
  if (!file) {
    return false;
  }
  const extension = file.substring(file.lastIndexOf(".") + 1);
});
```
