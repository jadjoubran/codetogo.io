---
extends: _layouts.usecase
date: 2018-03-12
link: https://developer.mozilla.org/en-US/docs/Web/API/HTMLMediaElement/play
reference: HTMLMediaElement.play
related: pause-video,stop-video
category: DOM
---

```html
<video id="video" controls>
  <source src="movie.mp4" type="video/mp4">
</video>
```

```javascript
const video = document.querySelector("#video");

video.play();
```