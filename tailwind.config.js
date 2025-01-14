/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./src/**/*.{html,js}",
        "./node_modules/tw-elements/js/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Public Sans", "serif"],
            },
        },
    },
    plugins: [require("tw-elements/plugin.cjs")],
    darkMode: "class",
};
