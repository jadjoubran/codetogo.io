---
extends: _layouts.usecase
date: 2024-02-26
link: https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/currentTime
reference: HTMLMediaElement.pause
related: play-audio,pause-audio
category: DOM
---

```html
<audio>
  <source src="audio.mp3" type="audio/mpeg" />
</audio>
```

```javascript
const audio = document.querySelector("audio");

// Stop = Pause + reset the playhead
audio.pause();
audio.currentTime = 0;
```
