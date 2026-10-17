import { defineConfig } from "astro/config";
import { satteri } from "@astrojs/markdown-satteri";

export default defineConfig({
    site: "https://codetogo.io",
    // Lossless HTML whitespace handling instead of Astro 7's default JSX rules,
    // which would drop the space in "Designed by <a>"
    compressHTML: true,
    build: {
        // how-to-x-in-javascript/index.html, same as Jigsaw
        format: "directory"
    },
    markdown: {
        // Prism highlights code blocks client side (src/scripts/prism.min.js)
        syntaxHighlight: false,
        processor: satteri({
            features: { smartPunctuation: false }
        })
    },
    vite: {
        css: {
            preprocessorOptions: {
                scss: { silenceDeprecations: ["import"] }
            }
        }
    }
});
