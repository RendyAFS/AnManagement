import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class", // hanya ini, tidak ada lightmode

    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                lightmode: {
                    background: "#EEEEEE",
                },
                darkmode: {
                    background: "#393E46",
                },
                fontlight: "#F6F6F6",
                fontdark: "#222222",
                primary: "#1DCD9F",
                secondary: "#169976",
                colordark: "#222831",
                colorlight: "#FFFFFF",
                colorlightgrey: "#EEEEEE",
                colordarkgrey: "#3C3D37",
            },
        },
    },

    plugins: [forms],
};
