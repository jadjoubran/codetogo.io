---
extends: _layouts.usecase
date: 2018-03-12
link: https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/currentTime
reference: HTMLMediaElement.currentTime
related: play-video,pause-video
category: DOM
---

```html
<video id="video" controls>
  <source src="movie.mp4" type="video/mp4">
</video>
```

```javascript
const video = document.querySelector("#video");

video.pause();
video.currentTime = 0;
```