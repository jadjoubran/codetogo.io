<?php
$pageUrl = "https://codetogo.io".$page->getUrl();
?>
<div class="share">
    <ul class="rrssb-buttons">
        <li class="rrssb-facebook">
            <a target="_blank" rel="noopener" href="https://www.facebook.com/sharer/sharer.php?u={{$pageUrl}}" class="popup">
                <span class="rrssb-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 29 29">
                        <path d="M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z"></path>
                    </svg>
                </span>
            </a>
        </li>
        <li class="rrssb-twitter">
            <a target="_blank" rel="noopener" href="https://twitter.com/intent/tweet?text={{$pageUrl}}"
                class="popup">
                <span class="rrssb-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewbox="0 0 28 28">
                        <path d="M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62c-3.122.162-6.22-.646-8.86-2.32 2.702.18 5.375-.648 7.507-2.32-2.072-.248-3.818-1.662-4.49-3.64.802.13 1.62.077 2.4-.154-2.482-.466-4.312-2.586-4.412-5.11.688.276 1.426.408 2.168.387-2.135-1.65-2.73-4.62-1.394-6.965C5.574 7.816 9.54 9.84 13.802 10.07c-.842-2.738.694-5.64 3.434-6.48 2.018-.624 4.212.043 5.546 1.682 1.186-.213 2.318-.662 3.33-1.317-.386 1.256-1.248 2.312-2.4 2.942 1.048-.106 2.07-.394 3.02-.85-.458 1.182-1.343 2.15-2.48 2.71z"></path>
                    </svg>
                </span>
            </a>
        </li>
    </ul>
    <div class="clear"></div>
</div>