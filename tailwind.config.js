const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            colors: {
                pink: "#FFE8DC",
                green: "#07691C",
                "light-green": "#4ADE80",
                "light-blue": "#22D3EE",
                "terracotta": "#F87171",
                "darker-green": "#044913",
                "sky-blue": "#EDF2F7",
                charcoal: "#2C2C1C",
            },
            screens: {
                "3xl": "1920px",
                "4xl": "2560px",
                "5xl": "3840px",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
