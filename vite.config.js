import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    // LOCAL
    server: {
        host: "anmanagement.local",
        port: 5173,
        strictPort: true,
        hmr: {
            host: "anmanagement.local",
        },
    },
});
