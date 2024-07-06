/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "black": "#212121", /* mainly-bg */
                "secondary-black": "#171717", /* mainly navbar */
                "tertiary-black": "#2F2F2F", /* mainly search bar */
                "white": "#ECECEC", /* 90% font */
                "grey": "#9B9B9B", /* 10% font */
                "secondary-grey": "#383838", /* mainly border */
                "green": "#14A27F", /* mainly buttons */
                "yellow": "#f2ac42", //Edit Button
                "red": "#EA324C", //Delete button
            },
        },
    },
    plugins: [],
};
