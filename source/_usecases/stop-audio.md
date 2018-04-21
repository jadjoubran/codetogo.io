---
extends: _layouts.usecase
date: 2018-03-12
link: https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/currentTime
reference: HTMLMediaElement.pause
related: play-audio,pause-audio
category: DOM
---

```html
<audio id="audio" controls>
  <source src="audio.mp3" type="audio/mpeg">
</audio>
```

```javascript
const audio = document.querySelector("#audio");

audio.pause();
audio.currentTime = 0;
```
